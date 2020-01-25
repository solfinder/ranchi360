"use strict";

var inputs = document.forms["demo"].getElementsByTagName("textarea");
var keyboardHost = document.querySelector('.virtual-keyboard');
var keyboard = new window.Keyboard(inputs, keyboardHost);
