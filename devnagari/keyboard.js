if( !exports ) var exports = {};
(function(exports, global){
  "use strict";

  function splice(str, index, count, add) {
    return str.slice(0, index) + (add || "") + str.slice(index + count);
  }

  function checkSelectionSupport(type){
    if (["text", "search", "URL", "tel", "password"].indexOf(type) == -1 ) return false;
    return true;
  }

  function dispatchKeyboardOpenEvent(){
    document.dispatchEvent(new CustomEvent('keyboard-open'));
  }

  function dispatchKeyboardCloseEvent(){
    document.dispatchEvent(new CustomEvent('keyboard-close'));
  }

  function Element(Keyboard, el){

    this.Keyboard = Keyboard;

    el.layout = global.Keyboard.layout[el.type] ? el.type : '_default';

    function dispatchEvent(event, keyInfo){

      var event = new KeyboardEvent(event,{
        key: keyInfo.symbol,
        code: 'Key' + keyInfo.symbol,
        keyCode : keyInfo.symbol.charCodeAt(0),
        which : keyInfo.symbol.charCodeAt(0),
        altKey : false,
        ctrlKey : false,
        shiftKey : false,
        metaKey : false
      });
      event.virtual = true;
      el.dispatchEvent(event);
    }

    this.onEvent = function(keyInfo){
      dispatchEvent('keydown', keyInfo);
      dispatchEvent('keypress', keyInfo);
      dispatchEvent('keyup', keyInfo);
      dispatchEvent('input', keyInfo);
      dispatchEvent('change', keyInfo);
    };

    this.keydownfunc = function(e){

      // If keydown is authentic, skip our internal update and let the default play out
      if (!e.virtual) return;
      e.preventDefault();

      var selectionSupported = checkSelectionSupport(this.type);

      if (e.key == "backspace") {
        if ( !selectionSupported ) {
          this.value = this.value.slice(0, -1);
        } else {
          var pos = el.selectionStart;
          var offset = el.selectionEnd-el.selectionStart? 0:1;
          this.value = this.value.substring(0, el.selectionStart-offset) + this.value.slice(el.selectionEnd);
          this.setSelectionRange(pos-offset, pos-offset);
        }
        return;
      }

      // Toggle will change the layout to a different one that is pre-determined
      // An empty toggle key will toggle the keyboard back to default
      if (e.key.substring(0, 6) == "toggle") {
        var newType = e.key.substring(6);

        if(newType.length >= 0 && global.Keyboard.layout[newType]) {
          return this.Keyboard.Keyboard.show(newType);
        }
        return;
      }

      if( this.value.length >= this.maxLength && this.maxLength != -1 ){
        return;
      }
      var update = e.key || String.fromCharCode(e.keyCode);

      // Support an input case that will capitalize letters as needed
      if(( e.target.dataset.case === 'sentence' && (this.value.length === 0 || this.value.slice(-1) === "." || this.value.slice(-2) === ". " ))
        || ( e.target.dataset.case === 'capitalize' && this.value.slice(-1) === " " ))
      {
        update = update.toUpperCase();
      }

      // TODO Mimic selection for input elements that don't support selection api as well
      // IDEA: selection-polyfill? get caret's pixel location instead?
      if ( !selectionSupported ) {
        this.value += update;
      } else {
        var pos = el.selectionStart + update.length;
        this.value = splice(
          this.value,
          el.selectionStart,
          el.selectionEnd-el.selectionStart,
          update
        );
        this.setSelectionRange(pos, pos); // reset the position after the splice
      }
      // TODO Calculate scroll amount based on caret position
      this.scrollLeft = this.scrollWidth;
    };

    el.addEventListener('focus', this.focus.bind(this));
    el.addEventListener('blur', this.blur.bind(this));
    el.addEventListener('keydown', this.keydownfunc);
  }

  Element.prototype.focus = function(e){
    this.Keyboard.show(e.target.layout);
    this.Keyboard.on('key', this.onEvent);
  };
  Element.prototype.blur = function(e){
    this.Keyboard.hide(e.target.layout);
    this.Keyboard.off('key', this.onEvent);
  };

  function Keyboard(inputs, holder){

    var self = this;

    Array.prototype.slice.call(inputs, 0).forEach(function(input){
      input.Keyboard = new Element(self, input);
    });

    this.active = false;
    this.listeners = {key:[]};
    this.keyboardEl = null;
    this.layout = null;
    this.keyboardEl = document.createElement("div");
    this.keyboardEl.classList.add("keyboard-container");
    this.keyboardEl.addEventListener("mousedown", handleKeydownEvents.bind(this));
    this.keyboardEl.addEventListener("mouseup", handleKeyupEvents.bind(this));
    // TODO - find a way to enable this touchstart event again.
    // It prevents the :active state from being triggered on keys
    this.keyboardEl.addEventListener("touchstart", handleKeydownEvents.bind(this));
    this.keyboardEl.addEventListener("touchend", handleKeyupEvents.bind(this));

    // Generate keyboard HTML, bind events, insert them to given element
    this.show = function (layout) {
      // Clear any timers relating to keyhold
      this.clearKeyHoldTimers();

      if (!global.Keyboard.layout[layout]) throw new Error("keyboard initiation: Missing layout: " + layout);
      if( self.layout && layout === self.layout && this.active){
        return;
      }
      this.active = true;

      self.layout = layout;
      this.keyboardEl.innerHTML = "";
      this.keyboardEl.classList.remove('keyboard-container-hidden');

      var closeButton = document.createElement("span");
      closeButton.classList.add('keyboard-close-button');
      closeButton.innerHTML = '✖';
      this.keyboardEl.appendChild(closeButton);
      closeButton.onclick = function() {
        document.activeElement.blur()
      }.bind(this);
      closeButton.ontouchstart = function() {
        document.activeElement.blur()
      }.bind(this);

      function foreachLayout(row, rowIndex, layout) {

        var rowEl = document.createElement("div");
        rowEl.classList.add("keyboard-row");
        rowEl.classList.add("keyboard-row--" + rowIndex);

        function foreachRow(key, keyIndex, row) {
          var keyEl = document.createElement("div");
          keyEl.classList.add("keyboard-key");
          keyEl.classList.add("keyboard-key--" + keyIndex);
          // Parse the layout configuration
          for (var dataName in key) {
            switch (dataName) {
              case "symbol":
                if (!key.label) keyEl.innerHTML = key[dataName];
                keyEl.dataset.symbol = key[dataName];
                break;
              case "label":
                keyEl.innerHTML = key[dataName];
                break;
              default:
                keyEl.dataset[dataName] = key[dataName];
            }
          }
          rowEl.appendChild(keyEl);
        }
        row.forEach(foreachRow);
        self.keyboardEl.appendChild(rowEl);
      }

      global.Keyboard.layout[self.layout].forEach(foreachLayout);
      // Append keys to el

      // Send an event signifying open of keyboard
      dispatchKeyboardOpenEvent()
      holder.appendChild(self.keyboardEl);
    };

    this.hide = function(){
      self.active = false;
      // Clear any timers relating to keyhold to cleanup
      this.clearKeyHoldTimers();
      // Send an event signifying close of keyboard
      dispatchKeyboardCloseEvent()
      setTimeout(function(){
        if( self.active ) return;
        self.keyboardEl.classList.add("keyboard-container-hidden");
        self.keyboardEl.innerHTML = "";
      },25);
    }

    this.on = function(evt, action){
      if( !this.listeners[evt] ){
        this.listeners[evt] = [];
      }
      this.listeners[evt].push(action);
    };
    this.off = function(evt, action){
      if( !this.listeners[evt] ) return;
      this.listeners[evt] = this.listeners[evt].filter(function(listener){
        return action.toString() !== listener.toString();
      });
    };

    /**
     * Add input(s) after the fact
     * @param inputs
     */
    this.add = function(inputs){

      if(!Array.isArray(inputs))
        inputs = [inputs];

      Array.prototype.slice.call(inputs, 0).forEach(function(input){
        input.Keyboard = new Element(self, input);
      });
    };

    /**
     * Clear timer events bound to the keyboard
     */
    this.clearKeyHoldTimers = function () {
      // Clear timeout to make sure multiple keypress does not start
      if(this.keyHoldTimeout) {
        window.clearTimeout(this.keyHoldTimeout);
      }
      // Clear interval to make sure multiple keypress does not continue
      if(this.keyHoldInterval) {
        window.clearInterval(this.keyHoldInterval);
      }
    }

  };


  // We would like to pipe all keyboard events through one handler
  var handleKeydownEvents = function (e) {
    var self = this;
    e.preventDefault();
    // Check to make sure it's a key that's pressed
    if (!e.target.classList.contains("keyboard-key")) return;

    // the :active pseudo class is not working with touch events
    // use active class to get around this issue
    e.target.classList.add('active');

    var keyInfo = e.target.dataset;

    self.listeners['key'].forEach(function(action){
      action(keyInfo);
    });

    // Allow for a key to be input multiple times by holding it down
    // Ensure that any current timers are cleared before continuing
    self.clearKeyHoldTimers();
    // Timeout will provide a delay to prevent accidental holding
    // After that, the interval will provide repeated input
    self.keyHoldTimeout = window.setTimeout(function() {
      self.keyHoldInterval = window.setInterval(function() {
        self.listeners['key'].forEach(function(action){
          action(keyInfo);
        });
      }, 100)
    }, 400)
  };

  var handleKeyupEvents = function (e) {
    e.target.classList.remove('active');

    // Clear timeout to make sure multiple keypress does not start
    this.clearKeyHoldTimers();
  }

  global.Keyboard = Keyboard;
  global.Keyboard.layout = {
    _default: [
      [
        {"symbol": "\u0900"},   //W
        {"symbol": "\u0901"},   //E
        {"symbol": "\u0902"}, //R
        {"symbol": "\u0903"}, //T
        {"symbol": "\u0904"}, //Y
        {"symbol": "\u0905"}, //U
        {"symbol": "\u0906"}, //I
        {"symbol": "\u0907"}, //O
        {"symbol": "\u0908"}, //P
        {"symbol": "\u0909"},
        {"symbol": "\u090A"}, //7
        {"symbol": "\u090B"}, //8
        {"symbol": "\u090C"}, //9
        {"symbol": "\u090C"}, //A
        {"symbol": "\u090D"},
        {"symbol": "\u090E"}, //D
        {"symbol": "\u090F"},  //F
        {"symbol": "\u0910"}, //G
        {"symbol": "\u0911"}, //H
        {"symbol": "\u0912"}, //J
        {"symbol": "\u0913"},  //K
        {"symbol": "\u0914"},  //L
        {"symbol": "\u0915"},
        {"symbol": "\u0916"},
        {"symbol": "\u0917"},  //4
        {"symbol": "\u0918"},  //5
        {"symbol": "\u0919"},   //6
        {"symbol": "\u091A"},  //Z
        {"symbol": "\u091B"},  //X
        {"symbol": "\u091C"}  //C

      ],
      [
        // {"label": "tab", "func": "tab"},
		{"symbol": "\u091D"},  //V
        {"symbol": "\u091E"},  //B
        {"symbol": "\u091F"},  //N
        {"symbol": "\u0920"},  //M
        {"symbol": "\u0921"},
        {"symbol": "\u0922"},
        {"symbol": "\u0923"},
        {"symbol": "\u0924"},
        {"symbol": "\u0925"},  //0
        {"symbol": "\u0926"},  //1
        {"symbol": "\u0927"},  //2
        {"symbol": "\u0928"},   //3
        {"symbol": "\u0929"},  //Z
        {"symbol": "\u092A"},  //X
        {"symbol": "\u092B"},  //C
        {"symbol": "\u092C"},  //V
        {"symbol": "\u092D"},  //B
        {"symbol": "\u092E"},  //N
        {"symbol": "\u092F"},  //M
        {"symbol": "\u0930"},
        {"symbol": "\u0931"},
        {"symbol": "\u0932"},
		{"symbol": "\u0933"},
        {"symbol": "\u0934"},  //0
        {"symbol": "\u0935"},  //1
        {"symbol": "\u0936"},  //2
        {"symbol": "\u0937"},   //3
        {"symbol": "\u0938"},  //Z
        {"symbol": "\u0939"},  //X
        {"symbol": "\u093A"}  //C

      ],
      [
        {"symbol": "\u093B"},  //V
        {"symbol": "\u093C"},  //B
	    {"symbol": "\u091D"},  //V
        {"symbol": "\u093D"},  //N
        {"symbol": "\u093E"},  //M
        {"symbol": "\u093F"},
        {"symbol": "\u0940"},
        {"symbol": "\u0941"},
        {"symbol": "\u0942"},
        {"symbol": "\u0943"},  //0
        {"symbol": "\u0944"},  //1
        {"symbol": "\u0945"},  //2
        {"symbol": "\u0946"},   //3
        {"symbol": "\u0947"},  //Z
        {"symbol": "\u0948"},  //X
        {"symbol": "\u0949"},  //C
        {"symbol": "\u094A"},  //V
        {"symbol": "\u094B"},  //B
        {"symbol": "\u094C"},  //N
        {"symbol": "\u094D"},  //M
        {"symbol": "\u094E"},
        {"symbol": "\u094F"},
        {"symbol": "\u0950"},
        {"symbol": "\u0951"},
        {"symbol": "\u0952"},  //0
        {"symbol": "\u0953"},  //1
        {"symbol": "\u0954"},  //2
        {"symbol": "\u0955"},   //3
        {"symbol": "\u0956"},  //Z
	    {"symbol": "\u0957"}  //X
      ],
	  [
	    {"symbol": "\u0958"},  //C
        {"symbol": "\u0959"},  //V
	    {"symbol": "\u095A"},  //B
	    {"symbol": "\u095B"},  //N
        {"symbol": "\u095C"},  //M
        {"symbol": "\u095D"},
        {"symbol": "\u095E"},
        {"symbol": "\u095F"},
        {"symbol": "\u0960"},  //0
        {"symbol": "\u0961"},  //1
        {"symbol": "\u0962"},  //2
        {"symbol": "\u0963"},   //3
		{"symbol": "\u0964"},  //Z
        {"symbol": "\u0965"},   //X
        {"symbol": "\u0966"},  //C
		{"symbol": "\u0967"},  //C
		{"symbol": "\u0968"},  //C
		{"symbol": "\u0969"},  //C
		{"symbol": "\u096A"},  //C
		{"symbol": "\u096B"},  //C
		{"symbol": "\u096C"},  //C
		{"symbol": "\u096D"},  //C
		{"symbol": "\u096E"},  //C
		{"symbol": "\u096F"},  //C
		{"symbol": "\u0970"},  //C
		{"symbol": "\u0971"},  //C
		{"symbol": "\u0972"},  //C
		{"symbol": "\u0973"},  //C
		{"symbol": "\u0974"},  //C
		{"symbol": "\u0975"}  //C
		

      ],
	  [
		{"symbol": "\u0976"},  //C
		{"symbol": "\u0977"},  //C
		{"symbol": "\u0978"},  //C
		{"symbol": "\u0979"},  //C
	    {"symbol": "\u097A"},
		{"symbol": "\u097B"},  //C
		{"symbol": "\u097C"},  //C
		{"symbol": "\u097D"},  //C
		{"symbol": "\u097E"},  //C
		{"symbol": "\u097F"},  //C
		{"symbol": "\uA8E0"},  //C
		{"symbol": "\uA8E1"},  //C
		{"symbol": "\uA8E2"},  //C
		{"symbol": "\uA8E3"},  //C
		{"symbol": "\uA8E4"},  //C
		{"symbol": "\uA8E5"},  //C
		{"symbol": "\uA8E6"},  //C
		{"symbol": "\uA8E7"},  //C
		{"symbol": "\uA8E8"},  //C
		{"symbol": "\uA8E9"},  //C
		{"symbol": "\uA8EA"},  //C
		{"symbol": "\uA8EB"},  //C
		{"symbol": "\uA8EC"},  //C
		{"symbol": "\uA8ED"},  //C
		{"symbol": "\uA8EE"},  //C
		{"symbol": "\uA8EF"},  //C
		{"symbol": "\uA8F0"},  //C
		{"symbol": "\uA8F1"},  //C
		{"symbol": "\uA8F2"},  //C
		{"symbol": "\uA8F3"}  //C
	  ],
	  [
		{"symbol": "\uA8F4"},  //C
		{"symbol": "\uA8F5"},  //C
		{"symbol": "\uA8F6"},  //C
		{"symbol": "\uA8F7"},  //C
		{"symbol": "\uA8F8"},  //C
		{"symbol": "\uA8F9"},  //C
		{"symbol": "\uA8FA"},  //C
		{"symbol": "\uA8FB"},  //C
		{"symbol": "\uA8FC"},  //C
		{"symbol": "\uA8FD"}  //C

      ]
    ]
  };
})(exports || {}, window);
