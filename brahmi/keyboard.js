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
        {"symbol": "\uD804\uDC05"},   //W
        {"symbol": "\uD804\uDC06"},   //E
        {"symbol": "\uD804\uDC07"}, //R
        {"symbol": "\uD804\uDC08"}, //T
        {"symbol": "\uD804\uDC09"}, //Y
        {"symbol": "\uD804\uDC0A"}, //U
        {"symbol": "\uD804\uDC0B"}, //I
        {"symbol": "\uD804\uDC0C"}, //O
        {"symbol": "\uD804\uDC0D"}, //P
        {"symbol": "\uD804\uDC0E"},
        {"symbol": "\uD804\uDC6D"}, //7
        {"symbol": "\uD804\uDC6E"}, //8
        {"symbol": "\uD804\uDC6F"}, //9
        {"symbol": "\uD804\uDC0F"}, //A
        {"symbol": "\uD804\uDC10"},
        {"symbol": "\uD804\uDC11"}, //D
        {"symbol": "\uD804\uDC12"},  //F
        {"symbol": "\uD804\uDC13"}, //G
        {"symbol": "\uD804\uDC14"}, //H
        {"symbol": "\uD804\uDC15"}, //J
        {"symbol": "\uD804\uDC16"},  //K
        {"symbol": "\uD804\uDC17"}  //L

      ],
      [
        // {"label": "tab", "func": "tab"},
        {"symbol": "\uD804\uDC18"},
        {"symbol": "\uD804\uDC19"},
        {"symbol": "\uD804\uDC6A"},  //4
        {"symbol": "\uD804\uDC6B"},  //5
        {"symbol": "\uD804\uDC6C"},   //6
        {"symbol": "\uD804\uDC1A"},  //Z
        {"symbol": "\uD804\uDC1B"},  //X
        {"symbol": "\uD804\uDC1C"},  //C
        {"symbol": "\uD804\uDC1D"},  //V
        {"symbol": "\uD804\uDC1E"},  //B
        {"symbol": "\uD804\uDC1F"},  //N
        {"symbol": "\uD804\uDC20"},  //M
        {"symbol": "\uD804\uDC21"},
        {"symbol": "\uD804\uDC22"},
        {"symbol": "\uD804\uDC23"},
        {"symbol": "\uD804\uDC24"},
        {"symbol": "\uD804\uDC66"},  //0
        {"symbol": "\uD804\uDC67"},  //1
        {"symbol": "\uD804\uDC68"},  //2
        {"symbol": "\uD804\uDC69"},   //3
        {"symbol": "\uD804\uDC25"},  //Z
        {"symbol": "\uD804\uDC26"}  //X

      ],
      [
        {"symbol": "\uD804\uDC27"},  //C
        {"symbol": "\uD804\uDC28"},  //V
        {"symbol": "\uD804\uDC29"},  //B
        {"symbol": "\uD804\uDC2A"},  //N
        {"symbol": "\uD804\uDC2B"},  //M
        {"symbol": "\uD804\uDC2C"},
        {"symbol": "\uD804\uDC2D"},
        {"symbol": "\uD804\uDC2E"},
        {"symbol": "\uD804\uDC2F"},
        {"symbol": "\uD804\uDC30"},  //0
        {"symbol": "\uD804\uDC31"},  //1
        {"symbol": "\uD804\uDC32"},  //2
        {"symbol": "\uD804\uDC33"},   //3
        {"symbol": "\uD804\uDC34"},  //Z
        {"symbol": "\uD804\uDC35"},  //X
        {"symbol": "\uD804\uDC36"},  //C
        {"symbol": "\uD804\uDC37"},  //V
        {"symbol": "\uD804\uDC38"},  //B
        {"symbol": "\uD804\uDC39"},  //N
        {"symbol": "\uD804\uDC3A"},  //M
        {"symbol": "\uD804\uDC3B"},
        {"symbol": "\uD804\uDC3C"}
      ],
	  [
        {"symbol": "\uD804\uDC3D"},
        {"symbol": "\uD804\uDC3E"},
        {"symbol": "\uD804\uDC3F"},  //0
        {"symbol": "\uD804\uDC40"},  //1
        {"symbol": "\uD804\uDC41"},  //2
        {"symbol": "\uD804\uDC42"},   //3
        {"symbol": "\uD804\uDC43"},  //Z
        {"symbol": "\uD804\uDC44"},  //X
        {"symbol": "\uD804\uDC45"},  //C
        {"symbol": "\uD804\uDC46"},  //V
        {"symbol": "\uD804\uDC47"},  //B
        {"symbol": "\uD804\uDC48"},  //N
        {"symbol": "\uD804\uDC49"},  //M
        {"symbol": "\uD804\uDC4A"},
        {"symbol": "\uD804\uDC4B"},
        {"symbol": "\uD804\uDC4C"},
        {"symbol": "\uD804\uDC4D"},
        {"symbol": "\uD804\uDC52"},  //0
        {"symbol": "\uD804\uDC53"},  //1
        {"symbol": "\uD804\uDC54"},  //2
        {"symbol": "\uD804\uDC55"},   //3
        {"symbol": "\uD804\uDC56"}  //Z
      ],
	  [
	    {"symbol": "\uD804\uDC57"},  //X
        {"symbol": "\uD804\uDC58"},  //C
        {"symbol": "\uD804\uDC59"},  //V
        {"symbol": "\uD804\uDC5A"},  //B
        {"symbol": "\uD804\uDC5B"},  //N
        {"symbol": "\uD804\uDC5B"},  //M
        {"symbol": "\uD804\uDC5C"},
        {"symbol": "\uD804\uDC5D"},
        {"symbol": "\uD804\uDC5E"},
        {"symbol": "\uD804\uDC5F"},
        {"symbol": "\uD804\uDC60"},  //0
        {"symbol": "\uD804\uDC61"},  //1
        {"symbol": "\uD804\uDC62"},  //2
        {"symbol": "\uD804\uDC63"},   //3
		{"symbol": "\uD804\uDC64"},  //Z
        {"symbol": "\uD804\uDC65"},   //X
        {"symbol": "\uD804\uDC7F"}  //C

      ]
    ]
  };
})(exports || {}, window);
