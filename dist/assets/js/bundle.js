/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/lodash/_Symbol.js":
/*!****************************************!*\
  !*** ./node_modules/lodash/_Symbol.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var root = __webpack_require__(/*! ./_root */ "./node_modules/lodash/_root.js");
/** Built-in value references. */


var _Symbol = root.Symbol;
module.exports = _Symbol;

/***/ }),

/***/ "./node_modules/lodash/_baseGetTag.js":
/*!********************************************!*\
  !*** ./node_modules/lodash/_baseGetTag.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var _Symbol = __webpack_require__(/*! ./_Symbol */ "./node_modules/lodash/_Symbol.js"),
    getRawTag = __webpack_require__(/*! ./_getRawTag */ "./node_modules/lodash/_getRawTag.js"),
    objectToString = __webpack_require__(/*! ./_objectToString */ "./node_modules/lodash/_objectToString.js");
/** `Object#toString` result references. */


var nullTag = '[object Null]',
    undefinedTag = '[object Undefined]';
/** Built-in value references. */

var symToStringTag = _Symbol ? _Symbol.toStringTag : undefined;
/**
 * The base implementation of `getTag` without fallbacks for buggy environments.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the `toStringTag`.
 */

function baseGetTag(value) {
  if (value == null) {
    return value === undefined ? undefinedTag : nullTag;
  }

  return symToStringTag && symToStringTag in Object(value) ? getRawTag(value) : objectToString(value);
}

module.exports = baseGetTag;

/***/ }),

/***/ "./node_modules/lodash/_baseTrim.js":
/*!******************************************!*\
  !*** ./node_modules/lodash/_baseTrim.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var trimmedEndIndex = __webpack_require__(/*! ./_trimmedEndIndex */ "./node_modules/lodash/_trimmedEndIndex.js");
/** Used to match leading whitespace. */


var reTrimStart = /^\s+/;
/**
 * The base implementation of `_.trim`.
 *
 * @private
 * @param {string} string The string to trim.
 * @returns {string} Returns the trimmed string.
 */

function baseTrim(string) {
  return string ? string.slice(0, trimmedEndIndex(string) + 1).replace(reTrimStart, '') : string;
}

module.exports = baseTrim;

/***/ }),

/***/ "./node_modules/lodash/_freeGlobal.js":
/*!********************************************!*\
  !*** ./node_modules/lodash/_freeGlobal.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/** Detect free variable `global` from Node.js. */
var freeGlobal = (typeof global === "undefined" ? "undefined" : _typeof(global)) == 'object' && global && global.Object === Object && global;
module.exports = freeGlobal;
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./node_modules/lodash/_getRawTag.js":
/*!*******************************************!*\
  !*** ./node_modules/lodash/_getRawTag.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var _Symbol = __webpack_require__(/*! ./_Symbol */ "./node_modules/lodash/_Symbol.js");
/** Used for built-in method references. */


var objectProto = Object.prototype;
/** Used to check objects for own properties. */

var hasOwnProperty = objectProto.hasOwnProperty;
/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */

var nativeObjectToString = objectProto.toString;
/** Built-in value references. */

var symToStringTag = _Symbol ? _Symbol.toStringTag : undefined;
/**
 * A specialized version of `baseGetTag` which ignores `Symbol.toStringTag` values.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the raw `toStringTag`.
 */

function getRawTag(value) {
  var isOwn = hasOwnProperty.call(value, symToStringTag),
      tag = value[symToStringTag];

  try {
    value[symToStringTag] = undefined;
    var unmasked = true;
  } catch (e) {}

  var result = nativeObjectToString.call(value);

  if (unmasked) {
    if (isOwn) {
      value[symToStringTag] = tag;
    } else {
      delete value[symToStringTag];
    }
  }

  return result;
}

module.exports = getRawTag;

/***/ }),

/***/ "./node_modules/lodash/_objectToString.js":
/*!************************************************!*\
  !*** ./node_modules/lodash/_objectToString.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/** Used for built-in method references. */
var objectProto = Object.prototype;
/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */

var nativeObjectToString = objectProto.toString;
/**
 * Converts `value` to a string using `Object.prototype.toString`.
 *
 * @private
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 */

function objectToString(value) {
  return nativeObjectToString.call(value);
}

module.exports = objectToString;

/***/ }),

/***/ "./node_modules/lodash/_root.js":
/*!**************************************!*\
  !*** ./node_modules/lodash/_root.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var freeGlobal = __webpack_require__(/*! ./_freeGlobal */ "./node_modules/lodash/_freeGlobal.js");
/** Detect free variable `self`. */


var freeSelf = (typeof self === "undefined" ? "undefined" : _typeof(self)) == 'object' && self && self.Object === Object && self;
/** Used as a reference to the global object. */

var root = freeGlobal || freeSelf || Function('return this')();
module.exports = root;

/***/ }),

/***/ "./node_modules/lodash/_trimmedEndIndex.js":
/*!*************************************************!*\
  !*** ./node_modules/lodash/_trimmedEndIndex.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/** Used to match a single whitespace character. */
var reWhitespace = /\s/;
/**
 * Used by `_.trim` and `_.trimEnd` to get the index of the last non-whitespace
 * character of `string`.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {number} Returns the index of the last non-whitespace character.
 */

function trimmedEndIndex(string) {
  var index = string.length;

  while (index-- && reWhitespace.test(string.charAt(index))) {}

  return index;
}

module.exports = trimmedEndIndex;

/***/ }),

/***/ "./node_modules/lodash/debounce.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/debounce.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(/*! ./isObject */ "./node_modules/lodash/isObject.js"),
    now = __webpack_require__(/*! ./now */ "./node_modules/lodash/now.js"),
    toNumber = __webpack_require__(/*! ./toNumber */ "./node_modules/lodash/toNumber.js");
/** Error message constants. */


var FUNC_ERROR_TEXT = 'Expected a function';
/* Built-in method references for those with the same name as other `lodash` methods. */

var nativeMax = Math.max,
    nativeMin = Math.min;
/**
 * Creates a debounced function that delays invoking `func` until after `wait`
 * milliseconds have elapsed since the last time the debounced function was
 * invoked. The debounced function comes with a `cancel` method to cancel
 * delayed `func` invocations and a `flush` method to immediately invoke them.
 * Provide `options` to indicate whether `func` should be invoked on the
 * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
 * with the last arguments provided to the debounced function. Subsequent
 * calls to the debounced function return the result of the last `func`
 * invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the debounced function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.debounce` and `_.throttle`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to debounce.
 * @param {number} [wait=0] The number of milliseconds to delay.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=false]
 *  Specify invoking on the leading edge of the timeout.
 * @param {number} [options.maxWait]
 *  The maximum time `func` is allowed to be delayed before it's invoked.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new debounced function.
 * @example
 *
 * // Avoid costly calculations while the window size is in flux.
 * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
 *
 * // Invoke `sendMail` when clicked, debouncing subsequent calls.
 * jQuery(element).on('click', _.debounce(sendMail, 300, {
 *   'leading': true,
 *   'trailing': false
 * }));
 *
 * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
 * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
 * var source = new EventSource('/stream');
 * jQuery(source).on('message', debounced);
 *
 * // Cancel the trailing debounced invocation.
 * jQuery(window).on('popstate', debounced.cancel);
 */

function debounce(func, wait, options) {
  var lastArgs,
      lastThis,
      maxWait,
      result,
      timerId,
      lastCallTime,
      lastInvokeTime = 0,
      leading = false,
      maxing = false,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }

  wait = toNumber(wait) || 0;

  if (isObject(options)) {
    leading = !!options.leading;
    maxing = 'maxWait' in options;
    maxWait = maxing ? nativeMax(toNumber(options.maxWait) || 0, wait) : maxWait;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }

  function invokeFunc(time) {
    var args = lastArgs,
        thisArg = lastThis;
    lastArgs = lastThis = undefined;
    lastInvokeTime = time;
    result = func.apply(thisArg, args);
    return result;
  }

  function leadingEdge(time) {
    // Reset any `maxWait` timer.
    lastInvokeTime = time; // Start the timer for the trailing edge.

    timerId = setTimeout(timerExpired, wait); // Invoke the leading edge.

    return leading ? invokeFunc(time) : result;
  }

  function remainingWait(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime,
        timeWaiting = wait - timeSinceLastCall;
    return maxing ? nativeMin(timeWaiting, maxWait - timeSinceLastInvoke) : timeWaiting;
  }

  function shouldInvoke(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime; // Either this is the first call, activity has stopped and we're at the
    // trailing edge, the system time has gone backwards and we're treating
    // it as the trailing edge, or we've hit the `maxWait` limit.

    return lastCallTime === undefined || timeSinceLastCall >= wait || timeSinceLastCall < 0 || maxing && timeSinceLastInvoke >= maxWait;
  }

  function timerExpired() {
    var time = now();

    if (shouldInvoke(time)) {
      return trailingEdge(time);
    } // Restart the timer.


    timerId = setTimeout(timerExpired, remainingWait(time));
  }

  function trailingEdge(time) {
    timerId = undefined; // Only invoke if we have `lastArgs` which means `func` has been
    // debounced at least once.

    if (trailing && lastArgs) {
      return invokeFunc(time);
    }

    lastArgs = lastThis = undefined;
    return result;
  }

  function cancel() {
    if (timerId !== undefined) {
      clearTimeout(timerId);
    }

    lastInvokeTime = 0;
    lastArgs = lastCallTime = lastThis = timerId = undefined;
  }

  function flush() {
    return timerId === undefined ? result : trailingEdge(now());
  }

  function debounced() {
    var time = now(),
        isInvoking = shouldInvoke(time);
    lastArgs = arguments;
    lastThis = this;
    lastCallTime = time;

    if (isInvoking) {
      if (timerId === undefined) {
        return leadingEdge(lastCallTime);
      }

      if (maxing) {
        // Handle invocations in a tight loop.
        clearTimeout(timerId);
        timerId = setTimeout(timerExpired, wait);
        return invokeFunc(lastCallTime);
      }
    }

    if (timerId === undefined) {
      timerId = setTimeout(timerExpired, wait);
    }

    return result;
  }

  debounced.cancel = cancel;
  debounced.flush = flush;
  return debounced;
}

module.exports = debounce;

/***/ }),

/***/ "./node_modules/lodash/isObject.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/isObject.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = _typeof(value);

  return value != null && (type == 'object' || type == 'function');
}

module.exports = isObject;

/***/ }),

/***/ "./node_modules/lodash/isObjectLike.js":
/*!*********************************************!*\
  !*** ./node_modules/lodash/isObjectLike.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of "object".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return value != null && _typeof(value) == 'object';
}

module.exports = isObjectLike;

/***/ }),

/***/ "./node_modules/lodash/isSymbol.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/isSymbol.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var baseGetTag = __webpack_require__(/*! ./_baseGetTag */ "./node_modules/lodash/_baseGetTag.js"),
    isObjectLike = __webpack_require__(/*! ./isObjectLike */ "./node_modules/lodash/isObjectLike.js");
/** `Object#toString` result references. */


var symbolTag = '[object Symbol]';
/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */

function isSymbol(value) {
  return _typeof(value) == 'symbol' || isObjectLike(value) && baseGetTag(value) == symbolTag;
}

module.exports = isSymbol;

/***/ }),

/***/ "./node_modules/lodash/now.js":
/*!************************************!*\
  !*** ./node_modules/lodash/now.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var root = __webpack_require__(/*! ./_root */ "./node_modules/lodash/_root.js");
/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */


var now = function now() {
  return root.Date.now();
};

module.exports = now;

/***/ }),

/***/ "./node_modules/lodash/throttle.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/throttle.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var debounce = __webpack_require__(/*! ./debounce */ "./node_modules/lodash/debounce.js"),
    isObject = __webpack_require__(/*! ./isObject */ "./node_modules/lodash/isObject.js");
/** Error message constants. */


var FUNC_ERROR_TEXT = 'Expected a function';
/**
 * Creates a throttled function that only invokes `func` at most once per
 * every `wait` milliseconds. The throttled function comes with a `cancel`
 * method to cancel delayed `func` invocations and a `flush` method to
 * immediately invoke them. Provide `options` to indicate whether `func`
 * should be invoked on the leading and/or trailing edge of the `wait`
 * timeout. The `func` is invoked with the last arguments provided to the
 * throttled function. Subsequent calls to the throttled function return the
 * result of the last `func` invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the throttled function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.throttle` and `_.debounce`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to throttle.
 * @param {number} [wait=0] The number of milliseconds to throttle invocations to.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=true]
 *  Specify invoking on the leading edge of the timeout.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new throttled function.
 * @example
 *
 * // Avoid excessively updating the position while scrolling.
 * jQuery(window).on('scroll', _.throttle(updatePosition, 100));
 *
 * // Invoke `renewToken` when the click event is fired, but not more than once every 5 minutes.
 * var throttled = _.throttle(renewToken, 300000, { 'trailing': false });
 * jQuery(element).on('click', throttled);
 *
 * // Cancel the trailing throttled invocation.
 * jQuery(window).on('popstate', throttled.cancel);
 */

function throttle(func, wait, options) {
  var leading = true,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }

  if (isObject(options)) {
    leading = 'leading' in options ? !!options.leading : leading;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }

  return debounce(func, wait, {
    'leading': leading,
    'maxWait': wait,
    'trailing': trailing
  });
}

module.exports = throttle;

/***/ }),

/***/ "./node_modules/lodash/toNumber.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/toNumber.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var baseTrim = __webpack_require__(/*! ./_baseTrim */ "./node_modules/lodash/_baseTrim.js"),
    isObject = __webpack_require__(/*! ./isObject */ "./node_modules/lodash/isObject.js"),
    isSymbol = __webpack_require__(/*! ./isSymbol */ "./node_modules/lodash/isSymbol.js");
/** Used as references for various `Number` constants. */


var NAN = 0 / 0;
/** Used to detect bad signed hexadecimal string values. */

var reIsBadHex = /^[-+]0x[0-9a-f]+$/i;
/** Used to detect binary string values. */

var reIsBinary = /^0b[01]+$/i;
/** Used to detect octal string values. */

var reIsOctal = /^0o[0-7]+$/i;
/** Built-in method references without a dependency on `root`. */

var freeParseInt = parseInt;
/**
 * Converts `value` to a number.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 * @example
 *
 * _.toNumber(3.2);
 * // => 3.2
 *
 * _.toNumber(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toNumber(Infinity);
 * // => Infinity
 *
 * _.toNumber('3.2');
 * // => 3.2
 */

function toNumber(value) {
  if (typeof value == 'number') {
    return value;
  }

  if (isSymbol(value)) {
    return NAN;
  }

  if (isObject(value)) {
    var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
    value = isObject(other) ? other + '' : other;
  }

  if (typeof value != 'string') {
    return value === 0 ? value : +value;
  }

  value = baseTrim(value);
  var isBinary = reIsBinary.test(value);
  return isBinary || reIsOctal.test(value) ? freeParseInt(value.slice(2), isBinary ? 2 : 8) : reIsBadHex.test(value) ? NAN : +value;
}

module.exports = toNumber;

/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var g; // This works in non-strict mode

g = function () {
  return this;
}();

try {
  // This works if eval is allowed (see CSP)
  g = g || new Function("return this")();
} catch (e) {
  // This works if the window reference is available
  if ((typeof window === "undefined" ? "undefined" : _typeof(window)) === "object") g = window;
} // g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}


module.exports = g;

/***/ }),

/***/ "./src/assets/js/bundle.js":
/*!*********************************!*\
  !*** ./src/assets/js/bundle.js ***!
  \*********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _component_navigation__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./component/navigation */ "./src/assets/js/component/navigation.js");
/* harmony import */ var _component_mobilemenu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./component/mobilemenu */ "./src/assets/js/component/mobilemenu.js");
/* harmony import */ var _component_mobilemenu__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_component_mobilemenu__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _component_scrollnavigation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./component/scrollnavigation */ "./src/assets/js/component/scrollnavigation.js");
/* harmony import */ var _component_stickyheader__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./component/stickyheader */ "./src/assets/js/component/stickyheader.js");
/* harmony import */ var _component_loginregistration__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./component/loginregistration */ "./src/assets/js/component/loginregistration.js");







/***/ }),

/***/ "./src/assets/js/component/loginregistration.js":
/*!******************************************************!*\
  !*** ./src/assets/js/component/loginregistration.js ***!
  \******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

var $form = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#wp_signup_form"),
    $successMsg = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#message");
jquery__WEBPACK_IMPORTED_MODULE_0___default.a.validator.addMethod("letters", function (value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});
$form.validate({
  errorElement: "span",
  rules: {
    firstName: {
      required: true,
      minlength: 3,
      letters: true
    },
    lastName: {
      required: true,
      minlength: 3,
      letters: true
    },
    email: {
      required: true,
      email: true
    },
    userpassword: {
      required: true,
      minlength: 4
    },
    confirmPassword: {
      required: true,
      equalTo: "#userpassword"
    }
  },
  messages: {
    firstName: "First name required",
    lastName: "Last name required",
    userpassword: "Password required",
    confirmPassword: "Confirm password same as password",
    email: {
      required: "Email address required",
      email: "Please specify a valid email address"
    }
  },
  submitHandler: function submitHandler() {
    var action = 'register_action';
    var formfirstName = jQuery("#firstName").val();
    var formlastName = jQuery("#lastName").val();
    var formemail = jQuery("#email").val();
    var formaltEmail = jQuery("#altEmail").val();
    var formphone = jQuery("#phone").val();
    var formaltPhone = jQuery("#altPhone").val();
    var formcountry = jQuery("#country").val();
    var formstate = jQuery("#state").val();
    var formaddress = jQuery("#address").val();
    var formcity = jQuery("#city").val();
    var formzipCode = jQuery("#zipCode").val();
    var formcompanyName = jQuery("#companyName").val();
    var formcompanyUrl = jQuery("#companyUrl").val();
    var formpassword = jQuery("#userpassword").val();
    var formconfirmPassword = jQuery("#confirmPassword").val();
    var ajaxdata = {
      action: action,
      firstName: formfirstName,
      lastName: formlastName,
      email: formemail,
      altEmail: formaltEmail,
      phone: formphone,
      altPhone: formaltPhone,
      country: formcountry,
      state: formstate,
      address: formaddress,
      city: formcity,
      zipCode: formzipCode,
      companyName: formcompanyName,
      companyUrl: formcompanyUrl,
      password: formpassword,
      confirmPassword: formconfirmPassword
    };
    jQuery.ajax({
      type: "post",
      dataType: "json",
      url: ajaxurl,
      data: ajaxdata,
      success: function success(response) {
        if (response.success == "1") {
          jQuery("#message").removeClass('alert-danger').addClass('alert-success');
          jQuery("#msg").html(response.message);
          jQuery("#message").show();
          setTimeout(function () {
            jQuery('#wp_signup_form').trigger("reset");
            window.location.href = response.redirect_url;
            jQuery("#message").hide();
          }, 5000);
        } else {
          jQuery("#message").removeClass('alert-success').addClass('alert-danger');
          jQuery("#msg").html(response.message_data);
        }
      }
    });
  }
});
var $loginform = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#wp_login_form"),
    $loginMsg = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#message");
jquery__WEBPACK_IMPORTED_MODULE_0___default.a.validator.addMethod("letters", function (value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});
$loginform.validate({
  errorElement: "span",
  rules: {
    userEmail: {
      required: true,
      email: true
    },
    password: {
      required: true,
      minlength: 4
    }
  },
  messages: {
    userEmail: {
      required: "Login email required",
      email: "Please Valid email required"
    },
    password: {
      required: "Password required",
      minlength: "Password must be more then 4 digit"
    }
  },
  submitHandler: function submitHandler() {
    var action = 'login_action';
    var userEmail = jQuery("#userEmail").val();
    var password = jQuery("#password").val();
    var remember = jQuery("#remember").val();
    var ajaxdata = {
      action: action,
      userLogin: userEmail,
      password: password,
      remember: remember
    };
    jQuery.ajax({
      type: "post",
      dataType: "json",
      url: ajaxurl,
      data: ajaxdata,
      success: function success(response) {
        if (response.success == "1") {
          // $loginMsg.show();    
          jQuery("#message").removeClass('alert-danger').addClass('alert-success');
          jQuery("#msg").html(response.message + ' ' + response.message_data);
          jQuery("#message").show();
          setTimeout(function () {
            jQuery('#wp_login_form').trigger("reset");
            window.location.href = response.redirect_url;
            jQuery("#message").hide();
          }, 3000);
        } else {
          jQuery("#message").removeClass('alert-success').addClass('alert-danger');
          jQuery("#msg").html(response.message_data);
          jQuery("#message").show();
        }
      }
    });
  }
}); //jQuery(".showLocation").click(function(){

jQuery('.showLocation').on('click', function (e) {
  var recent = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).val();

  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).is(":checked")) {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()("." + recent).show();
  } else {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()("." + recent).hide();
  }
});
jQuery('.chooseEnterprise').on('click', function (e) {
  var type = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).attr('servertype');

  if (type == 'enterprise') {
    jQuery("#enterprise-server-tab").trigger("click");
  } else if (type == 'pro') {
    jQuery("#pro-server-tab").trigger("click");
  } else {
    jQuery("#budget-server-tab").trigger("click");
  }
});
/**
 *  Pagination of Dedicated Server page
 * 
 */

var items = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#budget-server tbody tr");
var numItems = items.length;
var perPage = 10;
items.slice(perPage).hide();
jquery__WEBPACK_IMPORTED_MODULE_0___default()('#budget-server-pagination').pagination({
  items: numItems,
  itemsOnPage: perPage,
  prevText: "&laquo;",
  nextText: "&raquo;",
  cssStyle: 'light-theme',
  onPageClick: function onPageClick(pageNumber) {
    var showFrom = perPage * (pageNumber - 1);
    var showTo = showFrom + perPage;
    items.hide().slice(showFrom, showTo).show();
  }
});
var items_pro = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#pro-server tbody tr");
var numItems_pro = items_pro.length;
var perPage_pro = 10;
items_pro.slice(perPage_pro).hide();
jquery__WEBPACK_IMPORTED_MODULE_0___default()('#pro-server-pagination').pagination({
  items: numItems_pro,
  itemsOnPage: perPage_pro,
  prevText: "&laquo;",
  nextText: "&raquo;",
  cssStyle: 'light-theme',
  onPageClick: function onPageClick(pageNumber) {
    var showFrom = perPage_pro * (pageNumber - 1);
    var showTo = showFrom + perPage_pro;
    items_pro.hide().slice(showFrom, showTo).show();
  }
});
var items_ent = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#enterprise-server tbody tr");
var numItems_ent = items_ent.length;
var perPage_ent = 10;
items_ent.slice(perPage_ent).hide();
jquery__WEBPACK_IMPORTED_MODULE_0___default()('#enterprise-server-pagination').pagination({
  items: numItems_ent,
  itemsOnPage: perPage_ent,
  prevText: "&laquo;",
  nextText: "&raquo;",
  cssStyle: 'light-theme',
  onPageClick: function onPageClick(pageNumber) {
    var showFrom = perPage_ent * (pageNumber - 1);
    var showTo = showFrom + perPage_ent;
    items_ent.hide().slice(showFrom, showTo).show();
  }
});
jQuery('#requestCallback').on('click', function (e) {
  jQuery('#container-contact-form').hide();
  jQuery('#container-request-form').show();
  window.location.hash = '#section2';
  return false;
});
jQuery('#requestContact').on('click', function (e) {
  jQuery('#container-request-form').hide();
  jQuery('#container-contact-form').show();
  window.location.hash = '#section2';
  return false;
});

/***/ }),

/***/ "./src/assets/js/component/mobilemenu.js":
/*!***********************************************!*\
  !*** ./src/assets/js/component/mobilemenu.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var MobileMenu = /*#__PURE__*/function () {
  function MobileMenu() {
    _classCallCheck(this, MobileMenu);

    this.menuIcon = document.querySelector('.site-header__menu-icon');
    this.menuContent = document.querySelector('.site-header__mobile-menu-content');
    this.events();
  }

  _createClass(MobileMenu, [{
    key: "events",
    value: function events() {
      var _this = this;

      this.menuIcon.addEventListener('click', function () {
        return _this.toggleTheMenu();
      });
    }
  }, {
    key: "toggleTheMenu",
    value: function toggleTheMenu() {
      this.menuContent.classList.toggle('site-header__mobile-menu-content--is-visible');
      this.menuIcon.classList.toggle('site-header__menu-icon--close-x');
    }
  }]);

  return MobileMenu;
}();

new MobileMenu();

/***/ }),

/***/ "./src/assets/js/component/navigation.js":
/*!***********************************************!*\
  !*** ./src/assets/js/component/navigation.js ***!
  \***********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header-navigation').on('mouseenter', '.menu-item-has-children', function (e) {
  if (!jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.currentTarget).parents('.sub-menu').length) {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.menu > .menu-item.open').find('> a > .menu-button').trigger('click');
  }

  jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.currentTarget).addClass('open');
}).on('mouseleave', '.menu-item-has-children', function (e) {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.currentTarget).removeClass('open');
});

/***/ }),

/***/ "./src/assets/js/component/scrollnavigation.js":
/*!*****************************************************!*\
  !*** ./src/assets/js/component/scrollnavigation.js ***!
  \*****************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lodash/throttle */ "./node_modules/lodash/throttle.js");
/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(lodash_throttle__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var lodash_debounce__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! lodash/debounce */ "./node_modules/lodash/debounce.js");
/* harmony import */ var lodash_debounce__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(lodash_debounce__WEBPACK_IMPORTED_MODULE_1__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }




var StickyHeader = /*#__PURE__*/function () {
  function StickyHeader() {
    _classCallCheck(this, StickyHeader);

    this.pageSections = document.querySelectorAll(".page-section");
    this.browserHeight = window.innerHeight;
    this.previousScrollY = window.scrollY;
    this.events();
  }

  _createClass(StickyHeader, [{
    key: "events",
    value: function events() {
      var _this = this;

      window.addEventListener("scroll", lodash_throttle__WEBPACK_IMPORTED_MODULE_0___default()(function () {
        return _this.runOnScroll();
      }, 50));
      window.addEventListener("resize", lodash_debounce__WEBPACK_IMPORTED_MODULE_1___default()(function () {
        _this.browserHeight = window.innerHeight;
      }, 333));
    }
  }, {
    key: "runOnScroll",
    value: function runOnScroll() {
      var _this2 = this;

      this.determineScrollDirection();
      this.pageSections.forEach(function (el) {
        return _this2.calcSection(el);
      });
    }
  }, {
    key: "determineScrollDirection",
    value: function determineScrollDirection() {
      if (window.scrollY > this.previousScrollY) {
        this.scrollDirection = 'down';
      } else {
        this.scrollDirection = 'up';
      }

      this.previousScrollY = window.scrollY;
    }
  }, {
    key: "calcSection",
    value: function calcSection(el) {
      if (window.scrollY + this.browserHeight > el.offsetTop && window.scrollY < el.offsetTop + el.offsetHeight) {
        var scrollPercent = el.getBoundingClientRect().top / this.browserHeight * 100;

        if (scrollPercent < 40 && scrollPercent > 0 && this.scrollDirection == 'down' || scrollPercent < 33 && this.scrollDirection == 'up') {
          var matchingLink = el.getAttribute("data-matching-link");
          document.querySelectorAll(".scroll-nav a:not(".concat(matchingLink, ")")).forEach(function (el) {
            return el.classList.remove("scroll-nav--is-active");
          }); // document.querySelector(matchingLink).classList.add("scroll-nav--is-active");
        }
      }
    }
  }]);

  return StickyHeader;
}();

new StickyHeader();

/***/ }),

/***/ "./src/assets/js/component/stickyheader.js":
/*!*************************************************!*\
  !*** ./src/assets/js/component/stickyheader.js ***!
  \*************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lodash/throttle */ "./node_modules/lodash/throttle.js");
/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(lodash_throttle__WEBPACK_IMPORTED_MODULE_0__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var StickyHeader = /*#__PURE__*/function () {
  function StickyHeader() {
    _classCallCheck(this, StickyHeader);

    this.siteHeader = document.querySelector('.site-header');
    this.events();
  }

  _createClass(StickyHeader, [{
    key: "events",
    value: function events() {
      var _this = this;

      window.addEventListener("scroll", lodash_throttle__WEBPACK_IMPORTED_MODULE_0___default()(function () {
        return _this.showStickyOnScroll();
      }, 200));
    }
  }, {
    key: "showStickyOnScroll",
    value: function showStickyOnScroll() {
      if (window.scrollY > 100) {
        this.siteHeader.classList.add("site-header--on-scroll");
      } else {
        this.siteHeader.classList.remove("site-header--on-scroll");
      }
    }
  }]);

  return StickyHeader;
}();

new StickyHeader();

/***/ }),

/***/ 0:
/*!***************************************!*\
  !*** multi ./src/assets/js/bundle.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\XAMPP\htdocs\dedicated-solutions.com\wp-content\themes\dedicatedsolutions\src\assets\js\bundle.js */"./src/assets/js/bundle.js");


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fU3ltYm9sLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvX2Jhc2VHZXRUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fYmFzZVRyaW0uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fZnJlZUdsb2JhbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL19nZXRSYXdUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fb2JqZWN0VG9TdHJpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fcm9vdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL190cmltbWVkRW5kSW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9kZWJvdW5jZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL2lzT2JqZWN0LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNPYmplY3RMaWtlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNTeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9ub3cuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC90aHJvdHRsZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9idW5kbGUuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbG9naW5yZWdpc3RyYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbW9iaWxlbWVudS5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL2NvbXBvbmVudC9uYXZpZ2F0aW9uLmpzIiwid2VicGFjazovLy8uL3NyYy9hc3NldHMvanMvY29tcG9uZW50L3Njcm9sbG5hdmlnYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvc3RpY2t5aGVhZGVyLmpzIiwid2VicGFjazovLy9leHRlcm5hbCBcImpRdWVyeVwiIl0sIm5hbWVzIjpbInJvb3QiLCJyZXF1aXJlIiwiU3ltYm9sIiwibW9kdWxlIiwiZXhwb3J0cyIsImdldFJhd1RhZyIsIm9iamVjdFRvU3RyaW5nIiwibnVsbFRhZyIsInVuZGVmaW5lZFRhZyIsInN5bVRvU3RyaW5nVGFnIiwidG9TdHJpbmdUYWciLCJ1bmRlZmluZWQiLCJiYXNlR2V0VGFnIiwidmFsdWUiLCJPYmplY3QiLCJ0cmltbWVkRW5kSW5kZXgiLCJyZVRyaW1TdGFydCIsImJhc2VUcmltIiwic3RyaW5nIiwic2xpY2UiLCJyZXBsYWNlIiwiZnJlZUdsb2JhbCIsImdsb2JhbCIsIm9iamVjdFByb3RvIiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJuYXRpdmVPYmplY3RUb1N0cmluZyIsInRvU3RyaW5nIiwiaXNPd24iLCJjYWxsIiwidGFnIiwidW5tYXNrZWQiLCJlIiwicmVzdWx0IiwiZnJlZVNlbGYiLCJzZWxmIiwiRnVuY3Rpb24iLCJyZVdoaXRlc3BhY2UiLCJpbmRleCIsImxlbmd0aCIsInRlc3QiLCJjaGFyQXQiLCJpc09iamVjdCIsIm5vdyIsInRvTnVtYmVyIiwiRlVOQ19FUlJPUl9URVhUIiwibmF0aXZlTWF4IiwiTWF0aCIsIm1heCIsIm5hdGl2ZU1pbiIsIm1pbiIsImRlYm91bmNlIiwiZnVuYyIsIndhaXQiLCJvcHRpb25zIiwibGFzdEFyZ3MiLCJsYXN0VGhpcyIsIm1heFdhaXQiLCJ0aW1lcklkIiwibGFzdENhbGxUaW1lIiwibGFzdEludm9rZVRpbWUiLCJsZWFkaW5nIiwibWF4aW5nIiwidHJhaWxpbmciLCJUeXBlRXJyb3IiLCJpbnZva2VGdW5jIiwidGltZSIsImFyZ3MiLCJ0aGlzQXJnIiwiYXBwbHkiLCJsZWFkaW5nRWRnZSIsInNldFRpbWVvdXQiLCJ0aW1lckV4cGlyZWQiLCJyZW1haW5pbmdXYWl0IiwidGltZVNpbmNlTGFzdENhbGwiLCJ0aW1lU2luY2VMYXN0SW52b2tlIiwidGltZVdhaXRpbmciLCJzaG91bGRJbnZva2UiLCJ0cmFpbGluZ0VkZ2UiLCJjYW5jZWwiLCJjbGVhclRpbWVvdXQiLCJmbHVzaCIsImRlYm91bmNlZCIsImlzSW52b2tpbmciLCJhcmd1bWVudHMiLCJ0eXBlIiwiaXNPYmplY3RMaWtlIiwic3ltYm9sVGFnIiwiaXNTeW1ib2wiLCJEYXRlIiwidGhyb3R0bGUiLCJOQU4iLCJyZUlzQmFkSGV4IiwicmVJc0JpbmFyeSIsInJlSXNPY3RhbCIsImZyZWVQYXJzZUludCIsInBhcnNlSW50Iiwib3RoZXIiLCJ2YWx1ZU9mIiwiaXNCaW5hcnkiLCJnIiwid2luZG93IiwiJGZvcm0iLCIkIiwiJHN1Y2Nlc3NNc2ciLCJ2YWxpZGF0b3IiLCJhZGRNZXRob2QiLCJlbGVtZW50Iiwib3B0aW9uYWwiLCJtYXRjaCIsInZhbGlkYXRlIiwiZXJyb3JFbGVtZW50IiwicnVsZXMiLCJmaXJzdE5hbWUiLCJyZXF1aXJlZCIsIm1pbmxlbmd0aCIsImxldHRlcnMiLCJsYXN0TmFtZSIsImVtYWlsIiwidXNlcnBhc3N3b3JkIiwiY29uZmlybVBhc3N3b3JkIiwiZXF1YWxUbyIsIm1lc3NhZ2VzIiwic3VibWl0SGFuZGxlciIsImFjdGlvbiIsImZvcm1maXJzdE5hbWUiLCJqUXVlcnkiLCJ2YWwiLCJmb3JtbGFzdE5hbWUiLCJmb3JtZW1haWwiLCJmb3JtYWx0RW1haWwiLCJmb3JtcGhvbmUiLCJmb3JtYWx0UGhvbmUiLCJmb3JtY291bnRyeSIsImZvcm1zdGF0ZSIsImZvcm1hZGRyZXNzIiwiZm9ybWNpdHkiLCJmb3JtemlwQ29kZSIsImZvcm1jb21wYW55TmFtZSIsImZvcm1jb21wYW55VXJsIiwiZm9ybXBhc3N3b3JkIiwiZm9ybWNvbmZpcm1QYXNzd29yZCIsImFqYXhkYXRhIiwiYWx0RW1haWwiLCJwaG9uZSIsImFsdFBob25lIiwiY291bnRyeSIsInN0YXRlIiwiYWRkcmVzcyIsImNpdHkiLCJ6aXBDb2RlIiwiY29tcGFueU5hbWUiLCJjb21wYW55VXJsIiwicGFzc3dvcmQiLCJhamF4IiwiZGF0YVR5cGUiLCJ1cmwiLCJhamF4dXJsIiwiZGF0YSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsInJlbW92ZUNsYXNzIiwiYWRkQ2xhc3MiLCJodG1sIiwibWVzc2FnZSIsInNob3ciLCJ0cmlnZ2VyIiwibG9jYXRpb24iLCJocmVmIiwicmVkaXJlY3RfdXJsIiwiaGlkZSIsIm1lc3NhZ2VfZGF0YSIsIiRsb2dpbmZvcm0iLCIkbG9naW5Nc2ciLCJ1c2VyRW1haWwiLCJyZW1lbWJlciIsInVzZXJMb2dpbiIsIm9uIiwicmVjZW50IiwiaXMiLCJhdHRyIiwiaXRlbXMiLCJudW1JdGVtcyIsInBlclBhZ2UiLCJwYWdpbmF0aW9uIiwiaXRlbXNPblBhZ2UiLCJwcmV2VGV4dCIsIm5leHRUZXh0IiwiY3NzU3R5bGUiLCJvblBhZ2VDbGljayIsInBhZ2VOdW1iZXIiLCJzaG93RnJvbSIsInNob3dUbyIsIml0ZW1zX3BybyIsIm51bUl0ZW1zX3BybyIsInBlclBhZ2VfcHJvIiwiaXRlbXNfZW50IiwibnVtSXRlbXNfZW50IiwicGVyUGFnZV9lbnQiLCJoYXNoIiwiTW9iaWxlTWVudSIsIm1lbnVJY29uIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibWVudUNvbnRlbnQiLCJldmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlVGhlTWVudSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImN1cnJlbnRUYXJnZXQiLCJwYXJlbnRzIiwiZmluZCIsIlN0aWNreUhlYWRlciIsInBhZ2VTZWN0aW9ucyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJicm93c2VySGVpZ2h0IiwiaW5uZXJIZWlnaHQiLCJwcmV2aW91c1Njcm9sbFkiLCJzY3JvbGxZIiwicnVuT25TY3JvbGwiLCJkZXRlcm1pbmVTY3JvbGxEaXJlY3Rpb24iLCJmb3JFYWNoIiwiZWwiLCJjYWxjU2VjdGlvbiIsInNjcm9sbERpcmVjdGlvbiIsIm9mZnNldFRvcCIsIm9mZnNldEhlaWdodCIsInNjcm9sbFBlcmNlbnQiLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ0b3AiLCJtYXRjaGluZ0xpbmsiLCJnZXRBdHRyaWJ1dGUiLCJyZW1vdmUiLCJzaXRlSGVhZGVyIiwic2hvd1N0aWNreU9uU2Nyb2xsIiwiYWRkIl0sIm1hcHBpbmdzIjoiO1FBQUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7OztRQUdBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSwwQ0FBMEMsZ0NBQWdDO1FBQzFFO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0Esd0RBQXdELGtCQUFrQjtRQUMxRTtRQUNBLGlEQUFpRCxjQUFjO1FBQy9EOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQSx5Q0FBeUMsaUNBQWlDO1FBQzFFLGdIQUFnSCxtQkFBbUIsRUFBRTtRQUNySTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLDJCQUEyQiwwQkFBMEIsRUFBRTtRQUN2RCxpQ0FBaUMsZUFBZTtRQUNoRDtRQUNBO1FBQ0E7O1FBRUE7UUFDQSxzREFBc0QsK0RBQStEOztRQUVySDtRQUNBOzs7UUFHQTtRQUNBOzs7Ozs7Ozs7Ozs7QUNsRkEsSUFBSUEsSUFBSSxHQUFHQyxtQkFBTyxDQUFDLCtDQUFELENBQWxCO0FBRUE7OztBQUNBLElBQUlDLE9B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Ozs7QUFHSCxJQUFJcEIsWUFBSixHOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUM1Q0E7O0lBRU1BLFk7QUFFTCwwQkFBYztBQUFBOztBQUNiLFNBQUtxQixVQUFMLEdBQWtCaEMsUUFBUSxDQUFDQyxhQUFULENBQXVCLGNBQXZCLENBQWxCO0FBQ0EsU0FBS0UsTUFBTDtBQUNBOzs7O1dBRUQsa0JBQVM7QUFBQTs7QUFDUnhHLFlBQU0sQ0FBQ3lHLGdCQUFQLENBQXdCLFFBQXhCLEVBQWtDcEgsc0RBQVEsQ0FBQztBQUFBLGVBQU0sS0FBSSxDQUFDaUosa0JBQUwsRUFBTjtBQUFBLE9BQUQsRUFBa0MsR0FBbEMsQ0FBMUM7QUFDQTs7O1dBRUQsOEJBQXFCO0FBQ3BCLFVBQUl0SSxNQUFNLENBQUNzSCxPQUFQLEdBQWlCLEdBQXJCLEVBQTBCO0FBQ3pCLGFBQUtlLFVBQUwsQ0FBZ0IxQixTQUFoQixDQUEwQjRCLEdBQTFCLENBQThCLHdCQUE5QjtBQUNBLE9BRkQsTUFFTztBQUNOLGFBQUtGLFVBQUwsQ0FBZ0IxQixTQUFoQixDQUEwQnlCLE1BQTFCLENBQWlDLHdCQUFqQztBQUNBO0FBQ0Q7Ozs7OztBQUdGLElBQUlwQixZQUFKLEc7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDdEJBLHdCIiwiZmlsZSI6ImJ1bmRsZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGdldHRlciB9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuIFx0XHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbiBcdFx0fVxuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xuIFx0fTtcblxuIFx0Ly8gY3JlYXRlIGEgZmFrZSBuYW1lc3BhY2Ugb2JqZWN0XG4gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbiBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuIFx0Ly8gbW9kZSAmIDQ6IHJldHVybiB2YWx1ZSB3aGVuIGFscmVhZHkgbnMgb2JqZWN0XG4gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuIFx0XHRpZihtb2RlICYgMSkgdmFsdWUgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKHZhbHVlKTtcbiBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbiBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbiBcdFx0dmFyIG5zID0gT2JqZWN0LmNyZWF0ZShudWxsKTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuIFx0XHRpZihtb2RlICYgMiAmJiB0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIGZvcih2YXIga2V5IGluIHZhbHVlKSBfX3dlYnBhY2tfcmVxdWlyZV9fLmQobnMsIGtleSwgZnVuY3Rpb24oa2V5KSB7IHJldHVybiB2YWx1ZVtrZXldOyB9LmJpbmQobnVsbCwga2V5KSk7XG4gXHRcdHJldHVybiBucztcbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAwKTtcbiIsInZhciByb290ID0gcmVxdWlyZSgnLi9fcm9vdCcpO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBTeW1ib2wgPSByb290LlN5bWJvbDtcblxubW9kdWxlLmV4cG9ydHMgPSBTeW1ib2w7XG4iLCJ2YXIgU3ltYm9sID0gcmVxdWlyZSgnLi9fU3ltYm9sJyksXG4gICAgZ2V0UmF3VGFnID0gcmVxdWlyZSgnLi9fZ2V0UmF3VGFnJyksXG4gICAgb2JqZWN0VG9TdHJpbmcgPSByZXF1aXJlKCcuL19vYmplY3RUb1N0cmluZycpO1xuXG4vKiogYE9iamVjdCN0b1N0cmluZ2AgcmVzdWx0IHJlZmVyZW5jZXMuICovXG52YXIgbnVsbFRhZyA9ICdbb2JqZWN0IE51bGxdJyxcbiAgICB1bmRlZmluZWRUYWcgPSAnW29iamVjdCBVbmRlZmluZWRdJztcblxuLyoqIEJ1aWx0LWluIHZhbHVlIHJlZmVyZW5jZXMuICovXG52YXIgc3ltVG9TdHJpbmdUYWcgPSBTeW1ib2wgPyBTeW1ib2wudG9TdHJpbmdUYWcgOiB1bmRlZmluZWQ7XG5cbi8qKlxuICogVGhlIGJhc2UgaW1wbGVtZW50YXRpb24gb2YgYGdldFRhZ2Agd2l0aG91dCBmYWxsYmFja3MgZm9yIGJ1Z2d5IGVudmlyb25tZW50cy5cbiAqXG4gKiBAcHJpdmF0ZVxuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gcXVlcnkuXG4gKiBAcmV0dXJucyB7c3RyaW5nfSBSZXR1cm5zIHRoZSBgdG9TdHJpbmdUYWdgLlxuICovXG5mdW5jdGlvbiBiYXNlR2V0VGFnKHZhbHVlKSB7XG4gIGlmICh2YWx1ZSA9PSBudWxsKSB7XG4gICAgcmV0dXJuIHZhbHVlID09PSB1bmRlZmluZWQgPyB1bmRlZmluZWRUYWcgOiBudWxsVGFnO1xuICB9XG4gIHJldHVybiAoc3ltVG9TdHJpbmdUYWcgJiYgc3ltVG9TdHJpbmdUYWcgaW4gT2JqZWN0KHZhbHVlKSlcbiAgICA/IGdldFJhd1RhZyh2YWx1ZSlcbiAgICA6IG9iamVjdFRvU3RyaW5nKHZhbHVlKTtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBiYXNlR2V0VGFnO1xuIiwidmFyIHRyaW1tZWRFbmRJbmRleCA9IHJlcXVpcmUoJy4vX3RyaW1tZWRFbmRJbmRleCcpO1xuXG4vKiogVXNlZCB0byBtYXRjaCBsZWFkaW5nIHdoaXRlc3BhY2UuICovXG52YXIgcmVUcmltU3RhcnQgPSAvXlxccysvO1xuXG4vKipcbiAqIFRoZSBiYXNlIGltcGxlbWVudGF0aW9uIG9mIGBfLnRyaW1gLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0ge3N0cmluZ30gc3RyaW5nIFRoZSBzdHJpbmcgdG8gdHJpbS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIHRyaW1tZWQgc3RyaW5nLlxuICovXG5mdW5jdGlvbiBiYXNlVHJpbShzdHJpbmcpIHtcbiAgcmV0dXJuIHN0cmluZ1xuICAgID8gc3RyaW5nLnNsaWNlKDAsIHRyaW1tZWRFbmRJbmRleChzdHJpbmcpICsgMSkucmVwbGFjZShyZVRyaW1TdGFydCwgJycpXG4gICAgOiBzdHJpbmc7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gYmFzZVRyaW07XG4iLCIvKiogRGV0ZWN0IGZyZWUgdmFyaWFibGUgYGdsb2JhbGAgZnJvbSBOb2RlLmpzLiAqL1xudmFyIGZyZWVHbG9iYWwgPSB0eXBlb2YgZ2xvYmFsID09ICdvYmplY3QnICYmIGdsb2JhbCAmJiBnbG9iYWwuT2JqZWN0ID09PSBPYmplY3QgJiYgZ2xvYmFsO1xuXG5tb2R1bGUuZXhwb3J0cyA9IGZyZWVHbG9iYWw7XG4iLCJ2YXIgU3ltYm9sID0gcmVxdWlyZSgnLi9fU3ltYm9sJyk7XG5cbi8qKiBVc2VkIGZvciBidWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcy4gKi9cbnZhciBvYmplY3RQcm90byA9IE9iamVjdC5wcm90b3R5cGU7XG5cbi8qKiBVc2VkIHRvIGNoZWNrIG9iamVjdHMgZm9yIG93biBwcm9wZXJ0aWVzLiAqL1xudmFyIGhhc093blByb3BlcnR5ID0gb2JqZWN0UHJvdG8uaGFzT3duUHJvcGVydHk7XG5cbi8qKlxuICogVXNlZCB0byByZXNvbHZlIHRoZVxuICogW2B0b1N0cmluZ1RhZ2BdKGh0dHA6Ly9lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLW9iamVjdC5wcm90b3R5cGUudG9zdHJpbmcpXG4gKiBvZiB2YWx1ZXMuXG4gKi9cbnZhciBuYXRpdmVPYmplY3RUb1N0cmluZyA9IG9iamVjdFByb3RvLnRvU3RyaW5nO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1Ub1N0cmluZ1RhZyA9IFN5bWJvbCA/IFN5bWJvbC50b1N0cmluZ1RhZyA6IHVuZGVmaW5lZDtcblxuLyoqXG4gKiBBIHNwZWNpYWxpemVkIHZlcnNpb24gb2YgYGJhc2VHZXRUYWdgIHdoaWNoIGlnbm9yZXMgYFN5bWJvbC50b1N0cmluZ1RhZ2AgdmFsdWVzLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBxdWVyeS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIHJhdyBgdG9TdHJpbmdUYWdgLlxuICovXG5mdW5jdGlvbiBnZXRSYXdUYWcodmFsdWUpIHtcbiAgdmFyIGlzT3duID0gaGFzT3duUHJvcGVydHkuY2FsbCh2YWx1ZSwgc3ltVG9TdHJpbmdUYWcpLFxuICAgICAgdGFnID0gdmFsdWVbc3ltVG9TdHJpbmdUYWddO1xuXG4gIHRyeSB7XG4gICAgdmFsdWVbc3ltVG9TdHJpbmdUYWddID0gdW5kZWZpbmVkO1xuICAgIHZhciB1bm1hc2tlZCA9IHRydWU7XG4gIH0gY2F0Y2ggKGUpIHt9XG5cbiAgdmFyIHJlc3VsdCA9IG5hdGl2ZU9iamVjdFRvU3RyaW5nLmNhbGwodmFsdWUpO1xuICBpZiAodW5tYXNrZWQpIHtcbiAgICBpZiAoaXNPd24pIHtcbiAgICAgIHZhbHVlW3N5bVRvU3RyaW5nVGFnXSA9IHRhZztcbiAgICB9IGVsc2Uge1xuICAgICAgZGVsZXRlIHZhbHVlW3N5bVRvU3RyaW5nVGFnXTtcbiAgICB9XG4gIH1cbiAgcmV0dXJuIHJlc3VsdDtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBnZXRSYXdUYWc7XG4iLCIvKiogVXNlZCBmb3IgYnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMuICovXG52YXIgb2JqZWN0UHJvdG8gPSBPYmplY3QucHJvdG90eXBlO1xuXG4vKipcbiAqIFVzZWQgdG8gcmVzb2x2ZSB0aGVcbiAqIFtgdG9TdHJpbmdUYWdgXShodHRwOi8vZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1vYmplY3QucHJvdG90eXBlLnRvc3RyaW5nKVxuICogb2YgdmFsdWVzLlxuICovXG52YXIgbmF0aXZlT2JqZWN0VG9TdHJpbmcgPSBvYmplY3RQcm90by50b1N0cmluZztcblxuLyoqXG4gKiBDb252ZXJ0cyBgdmFsdWVgIHRvIGEgc3RyaW5nIHVzaW5nIGBPYmplY3QucHJvdG90eXBlLnRvU3RyaW5nYC5cbiAqXG4gKiBAcHJpdmF0ZVxuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY29udmVydC5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIGNvbnZlcnRlZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIG9iamVjdFRvU3RyaW5nKHZhbHVlKSB7XG4gIHJldHVybiBuYXRpdmVPYmplY3RUb1N0cmluZy5jYWxsKHZhbHVlKTtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBvYmplY3RUb1N0cmluZztcbiIsInZhciBmcmVlR2xvYmFsID0gcmVxdWlyZSgnLi9fZnJlZUdsb2JhbCcpO1xuXG4vKiogRGV0ZWN0IGZyZWUgdmFyaWFibGUgYHNlbGZgLiAqL1xudmFyIGZyZWVTZWxmID0gdHlwZW9mIHNlbGYgPT0gJ29iamVjdCcgJiYgc2VsZiAmJiBzZWxmLk9iamVjdCA9PT0gT2JqZWN0ICYmIHNlbGY7XG5cbi8qKiBVc2VkIGFzIGEgcmVmZXJlbmNlIHRvIHRoZSBnbG9iYWwgb2JqZWN0LiAqL1xudmFyIHJvb3QgPSBmcmVlR2xvYmFsIHx8IGZyZWVTZWxmIHx8IEZ1bmN0aW9uKCdyZXR1cm4gdGhpcycpKCk7XG5cbm1vZHVsZS5leHBvcnRzID0gcm9vdDtcbiIsIi8qKiBVc2VkIHRvIG1hdGNoIGEgc2luZ2xlIHdoaXRlc3BhY2UgY2hhcmFjdGVyLiAqL1xudmFyIHJlV2hpdGVzcGFjZSA9IC9cXHMvO1xuXG4vKipcbiAqIFVzZWQgYnkgYF8udHJpbWAgYW5kIGBfLnRyaW1FbmRgIHRvIGdldCB0aGUgaW5kZXggb2YgdGhlIGxhc3Qgbm9uLXdoaXRlc3BhY2VcbiAqIGNoYXJhY3RlciBvZiBgc3RyaW5nYC5cbiAqXG4gKiBAcHJpdmF0ZVxuICogQHBhcmFtIHtzdHJpbmd9IHN0cmluZyBUaGUgc3RyaW5nIHRvIGluc3BlY3QuXG4gKiBAcmV0dXJucyB7bnVtYmVyfSBSZXR1cm5zIHRoZSBpbmRleCBvZiB0aGUgbGFzdCBub24td2hpdGVzcGFjZSBjaGFyYWN0ZXIuXG4gKi9cbmZ1bmN0aW9uIHRyaW1tZWRFbmRJbmRleChzdHJpbmcpIHtcbiAgdmFyIGluZGV4ID0gc3RyaW5nLmxlbmd0aDtcblxuICB3aGlsZSAoaW5kZXgtLSAmJiByZVdoaXRlc3BhY2UudGVzdChzdHJpbmcuY2hhckF0KGluZGV4KSkpIHt9XG4gIHJldHVybiBpbmRleDtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSB0cmltbWVkRW5kSW5kZXg7XG4iLCJ2YXIgaXNPYmplY3QgPSByZXF1aXJlKCcuL2lzT2JqZWN0JyksXG4gICAgbm93ID0gcmVxdWlyZSgnLi9ub3cnKSxcbiAgICB0b051bWJlciA9IHJlcXVpcmUoJy4vdG9OdW1iZXInKTtcblxuLyoqIEVycm9yIG1lc3NhZ2UgY29uc3RhbnRzLiAqL1xudmFyIEZVTkNfRVJST1JfVEVYVCA9ICdFeHBlY3RlZCBhIGZ1bmN0aW9uJztcblxuLyogQnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMgZm9yIHRob3NlIHdpdGggdGhlIHNhbWUgbmFtZSBhcyBvdGhlciBgbG9kYXNoYCBtZXRob2RzLiAqL1xudmFyIG5hdGl2ZU1heCA9IE1hdGgubWF4LFxuICAgIG5hdGl2ZU1pbiA9IE1hdGgubWluO1xuXG4vKipcbiAqIENyZWF0ZXMgYSBkZWJvdW5jZWQgZnVuY3Rpb24gdGhhdCBkZWxheXMgaW52b2tpbmcgYGZ1bmNgIHVudGlsIGFmdGVyIGB3YWl0YFxuICogbWlsbGlzZWNvbmRzIGhhdmUgZWxhcHNlZCBzaW5jZSB0aGUgbGFzdCB0aW1lIHRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gd2FzXG4gKiBpbnZva2VkLiBUaGUgZGVib3VuY2VkIGZ1bmN0aW9uIGNvbWVzIHdpdGggYSBgY2FuY2VsYCBtZXRob2QgdG8gY2FuY2VsXG4gKiBkZWxheWVkIGBmdW5jYCBpbnZvY2F0aW9ucyBhbmQgYSBgZmx1c2hgIG1ldGhvZCB0byBpbW1lZGlhdGVseSBpbnZva2UgdGhlbS5cbiAqIFByb3ZpZGUgYG9wdGlvbnNgIHRvIGluZGljYXRlIHdoZXRoZXIgYGZ1bmNgIHNob3VsZCBiZSBpbnZva2VkIG9uIHRoZVxuICogbGVhZGluZyBhbmQvb3IgdHJhaWxpbmcgZWRnZSBvZiB0aGUgYHdhaXRgIHRpbWVvdXQuIFRoZSBgZnVuY2AgaXMgaW52b2tlZFxuICogd2l0aCB0aGUgbGFzdCBhcmd1bWVudHMgcHJvdmlkZWQgdG8gdGhlIGRlYm91bmNlZCBmdW5jdGlvbi4gU3Vic2VxdWVudFxuICogY2FsbHMgdG8gdGhlIGRlYm91bmNlZCBmdW5jdGlvbiByZXR1cm4gdGhlIHJlc3VsdCBvZiB0aGUgbGFzdCBgZnVuY2BcbiAqIGludm9jYXRpb24uXG4gKlxuICogKipOb3RlOioqIElmIGBsZWFkaW5nYCBhbmQgYHRyYWlsaW5nYCBvcHRpb25zIGFyZSBgdHJ1ZWAsIGBmdW5jYCBpc1xuICogaW52b2tlZCBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dCBvbmx5IGlmIHRoZSBkZWJvdW5jZWQgZnVuY3Rpb25cbiAqIGlzIGludm9rZWQgbW9yZSB0aGFuIG9uY2UgZHVyaW5nIHRoZSBgd2FpdGAgdGltZW91dC5cbiAqXG4gKiBJZiBgd2FpdGAgaXMgYDBgIGFuZCBgbGVhZGluZ2AgaXMgYGZhbHNlYCwgYGZ1bmNgIGludm9jYXRpb24gaXMgZGVmZXJyZWRcbiAqIHVudGlsIHRvIHRoZSBuZXh0IHRpY2ssIHNpbWlsYXIgdG8gYHNldFRpbWVvdXRgIHdpdGggYSB0aW1lb3V0IG9mIGAwYC5cbiAqXG4gKiBTZWUgW0RhdmlkIENvcmJhY2hvJ3MgYXJ0aWNsZV0oaHR0cHM6Ly9jc3MtdHJpY2tzLmNvbS9kZWJvdW5jaW5nLXRocm90dGxpbmctZXhwbGFpbmVkLWV4YW1wbGVzLylcbiAqIGZvciBkZXRhaWxzIG92ZXIgdGhlIGRpZmZlcmVuY2VzIGJldHdlZW4gYF8uZGVib3VuY2VgIGFuZCBgXy50aHJvdHRsZWAuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAwLjEuMFxuICogQGNhdGVnb3J5IEZ1bmN0aW9uXG4gKiBAcGFyYW0ge0Z1bmN0aW9ufSBmdW5jIFRoZSBmdW5jdGlvbiB0byBkZWJvdW5jZS5cbiAqIEBwYXJhbSB7bnVtYmVyfSBbd2FpdD0wXSBUaGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyB0byBkZWxheS5cbiAqIEBwYXJhbSB7T2JqZWN0fSBbb3B0aW9ucz17fV0gVGhlIG9wdGlvbnMgb2JqZWN0LlxuICogQHBhcmFtIHtib29sZWFufSBbb3B0aW9ucy5sZWFkaW5nPWZhbHNlXVxuICogIFNwZWNpZnkgaW52b2tpbmcgb24gdGhlIGxlYWRpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEBwYXJhbSB7bnVtYmVyfSBbb3B0aW9ucy5tYXhXYWl0XVxuICogIFRoZSBtYXhpbXVtIHRpbWUgYGZ1bmNgIGlzIGFsbG93ZWQgdG8gYmUgZGVsYXllZCBiZWZvcmUgaXQncyBpbnZva2VkLlxuICogQHBhcmFtIHtib29sZWFufSBbb3B0aW9ucy50cmFpbGluZz10cnVlXVxuICogIFNwZWNpZnkgaW52b2tpbmcgb24gdGhlIHRyYWlsaW5nIGVkZ2Ugb2YgdGhlIHRpbWVvdXQuXG4gKiBAcmV0dXJucyB7RnVuY3Rpb259IFJldHVybnMgdGhlIG5ldyBkZWJvdW5jZWQgZnVuY3Rpb24uXG4gKiBAZXhhbXBsZVxuICpcbiAqIC8vIEF2b2lkIGNvc3RseSBjYWxjdWxhdGlvbnMgd2hpbGUgdGhlIHdpbmRvdyBzaXplIGlzIGluIGZsdXguXG4gKiBqUXVlcnkod2luZG93KS5vbigncmVzaXplJywgXy5kZWJvdW5jZShjYWxjdWxhdGVMYXlvdXQsIDE1MCkpO1xuICpcbiAqIC8vIEludm9rZSBgc2VuZE1haWxgIHdoZW4gY2xpY2tlZCwgZGVib3VuY2luZyBzdWJzZXF1ZW50IGNhbGxzLlxuICogalF1ZXJ5KGVsZW1lbnQpLm9uKCdjbGljaycsIF8uZGVib3VuY2Uoc2VuZE1haWwsIDMwMCwge1xuICogICAnbGVhZGluZyc6IHRydWUsXG4gKiAgICd0cmFpbGluZyc6IGZhbHNlXG4gKiB9KSk7XG4gKlxuICogLy8gRW5zdXJlIGBiYXRjaExvZ2AgaXMgaW52b2tlZCBvbmNlIGFmdGVyIDEgc2Vjb25kIG9mIGRlYm91bmNlZCBjYWxscy5cbiAqIHZhciBkZWJvdW5jZWQgPSBfLmRlYm91bmNlKGJhdGNoTG9nLCAyNTAsIHsgJ21heFdhaXQnOiAxMDAwIH0pO1xuICogdmFyIHNvdXJjZSA9IG5ldyBFdmVudFNvdXJjZSgnL3N0cmVhbScpO1xuICogalF1ZXJ5KHNvdXJjZSkub24oJ21lc3NhZ2UnLCBkZWJvdW5jZWQpO1xuICpcbiAqIC8vIENhbmNlbCB0aGUgdHJhaWxpbmcgZGVib3VuY2VkIGludm9jYXRpb24uXG4gKiBqUXVlcnkod2luZG93KS5vbigncG9wc3RhdGUnLCBkZWJvdW5jZWQuY2FuY2VsKTtcbiAqL1xuZnVuY3Rpb24gZGVib3VuY2UoZnVuYywgd2FpdCwgb3B0aW9ucykge1xuICB2YXIgbGFzdEFyZ3MsXG4gICAgICBsYXN0VGhpcyxcbiAgICAgIG1heFdhaXQsXG4gICAgICByZXN1bHQsXG4gICAgICB0aW1lcklkLFxuICAgICAgbGFzdENhbGxUaW1lLFxuICAgICAgbGFzdEludm9rZVRpbWUgPSAwLFxuICAgICAgbGVhZGluZyA9IGZhbHNlLFxuICAgICAgbWF4aW5nID0gZmFsc2UsXG4gICAgICB0cmFpbGluZyA9IHRydWU7XG5cbiAgaWYgKHR5cGVvZiBmdW5jICE9ICdmdW5jdGlvbicpIHtcbiAgICB0aHJvdyBuZXcgVHlwZUVycm9yKEZVTkNfRVJST1JfVEVYVCk7XG4gIH1cbiAgd2FpdCA9IHRvTnVtYmVyKHdhaXQpIHx8IDA7XG4gIGlmIChpc09iamVjdChvcHRpb25zKSkge1xuICAgIGxlYWRpbmcgPSAhIW9wdGlvbnMubGVhZGluZztcbiAgICBtYXhpbmcgPSAnbWF4V2FpdCcgaW4gb3B0aW9ucztcbiAgICBtYXhXYWl0ID0gbWF4aW5nID8gbmF0aXZlTWF4KHRvTnVtYmVyKG9wdGlvbnMubWF4V2FpdCkgfHwgMCwgd2FpdCkgOiBtYXhXYWl0O1xuICAgIHRyYWlsaW5nID0gJ3RyYWlsaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLnRyYWlsaW5nIDogdHJhaWxpbmc7XG4gIH1cblxuICBmdW5jdGlvbiBpbnZva2VGdW5jKHRpbWUpIHtcbiAgICB2YXIgYXJncyA9IGxhc3RBcmdzLFxuICAgICAgICB0aGlzQXJnID0gbGFzdFRoaXM7XG5cbiAgICBsYXN0QXJncyA9IGxhc3RUaGlzID0gdW5kZWZpbmVkO1xuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICByZXN1bHQgPSBmdW5jLmFwcGx5KHRoaXNBcmcsIGFyZ3MpO1xuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cblxuICBmdW5jdGlvbiBsZWFkaW5nRWRnZSh0aW1lKSB7XG4gICAgLy8gUmVzZXQgYW55IGBtYXhXYWl0YCB0aW1lci5cbiAgICBsYXN0SW52b2tlVGltZSA9IHRpbWU7XG4gICAgLy8gU3RhcnQgdGhlIHRpbWVyIGZvciB0aGUgdHJhaWxpbmcgZWRnZS5cbiAgICB0aW1lcklkID0gc2V0VGltZW91dCh0aW1lckV4cGlyZWQsIHdhaXQpO1xuICAgIC8vIEludm9rZSB0aGUgbGVhZGluZyBlZGdlLlxuICAgIHJldHVybiBsZWFkaW5nID8gaW52b2tlRnVuYyh0aW1lKSA6IHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIHJlbWFpbmluZ1dhaXQodGltZSkge1xuICAgIHZhciB0aW1lU2luY2VMYXN0Q2FsbCA9IHRpbWUgLSBsYXN0Q2FsbFRpbWUsXG4gICAgICAgIHRpbWVTaW5jZUxhc3RJbnZva2UgPSB0aW1lIC0gbGFzdEludm9rZVRpbWUsXG4gICAgICAgIHRpbWVXYWl0aW5nID0gd2FpdCAtIHRpbWVTaW5jZUxhc3RDYWxsO1xuXG4gICAgcmV0dXJuIG1heGluZ1xuICAgICAgPyBuYXRpdmVNaW4odGltZVdhaXRpbmcsIG1heFdhaXQgLSB0aW1lU2luY2VMYXN0SW52b2tlKVxuICAgICAgOiB0aW1lV2FpdGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIHNob3VsZEludm9rZSh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZTtcblxuICAgIC8vIEVpdGhlciB0aGlzIGlzIHRoZSBmaXJzdCBjYWxsLCBhY3Rpdml0eSBoYXMgc3RvcHBlZCBhbmQgd2UncmUgYXQgdGhlXG4gICAgLy8gdHJhaWxpbmcgZWRnZSwgdGhlIHN5c3RlbSB0aW1lIGhhcyBnb25lIGJhY2t3YXJkcyBhbmQgd2UncmUgdHJlYXRpbmdcbiAgICAvLyBpdCBhcyB0aGUgdHJhaWxpbmcgZWRnZSwgb3Igd2UndmUgaGl0IHRoZSBgbWF4V2FpdGAgbGltaXQuXG4gICAgcmV0dXJuIChsYXN0Q2FsbFRpbWUgPT09IHVuZGVmaW5lZCB8fCAodGltZVNpbmNlTGFzdENhbGwgPj0gd2FpdCkgfHxcbiAgICAgICh0aW1lU2luY2VMYXN0Q2FsbCA8IDApIHx8IChtYXhpbmcgJiYgdGltZVNpbmNlTGFzdEludm9rZSA+PSBtYXhXYWl0KSk7XG4gIH1cblxuICBmdW5jdGlvbiB0aW1lckV4cGlyZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKTtcbiAgICBpZiAoc2hvdWxkSW52b2tlKHRpbWUpKSB7XG4gICAgICByZXR1cm4gdHJhaWxpbmdFZGdlKHRpbWUpO1xuICAgIH1cbiAgICAvLyBSZXN0YXJ0IHRoZSB0aW1lci5cbiAgICB0aW1lcklkID0gc2V0VGltZW91dCh0aW1lckV4cGlyZWQsIHJlbWFpbmluZ1dhaXQodGltZSkpO1xuICB9XG5cbiAgZnVuY3Rpb24gdHJhaWxpbmdFZGdlKHRpbWUpIHtcbiAgICB0aW1lcklkID0gdW5kZWZpbmVkO1xuXG4gICAgLy8gT25seSBpbnZva2UgaWYgd2UgaGF2ZSBgbGFzdEFyZ3NgIHdoaWNoIG1lYW5zIGBmdW5jYCBoYXMgYmVlblxuICAgIC8vIGRlYm91bmNlZCBhdCBsZWFzdCBvbmNlLlxuICAgIGlmICh0cmFpbGluZyAmJiBsYXN0QXJncykge1xuICAgICAgcmV0dXJuIGludm9rZUZ1bmModGltZSk7XG4gICAgfVxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGNhbmNlbCgpIHtcbiAgICBpZiAodGltZXJJZCAhPT0gdW5kZWZpbmVkKSB7XG4gICAgICBjbGVhclRpbWVvdXQodGltZXJJZCk7XG4gICAgfVxuICAgIGxhc3RJbnZva2VUaW1lID0gMDtcbiAgICBsYXN0QXJncyA9IGxhc3RDYWxsVGltZSA9IGxhc3RUaGlzID0gdGltZXJJZCA9IHVuZGVmaW5lZDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGZsdXNoKCkge1xuICAgIHJldHVybiB0aW1lcklkID09PSB1bmRlZmluZWQgPyByZXN1bHQgOiB0cmFpbGluZ0VkZ2Uobm93KCkpO1xuICB9XG5cbiAgZnVuY3Rpb24gZGVib3VuY2VkKCkge1xuICAgIHZhciB0aW1lID0gbm93KCksXG4gICAgICAgIGlzSW52b2tpbmcgPSBzaG91bGRJbnZva2UodGltZSk7XG5cbiAgICBsYXN0QXJncyA9IGFyZ3VtZW50cztcbiAgICBsYXN0VGhpcyA9IHRoaXM7XG4gICAgbGFzdENhbGxUaW1lID0gdGltZTtcblxuICAgIGlmIChpc0ludm9raW5nKSB7XG4gICAgICBpZiAodGltZXJJZCA9PT0gdW5kZWZpbmVkKSB7XG4gICAgICAgIHJldHVybiBsZWFkaW5nRWRnZShsYXN0Q2FsbFRpbWUpO1xuICAgICAgfVxuICAgICAgaWYgKG1heGluZykge1xuICAgICAgICAvLyBIYW5kbGUgaW52b2NhdGlvbnMgaW4gYSB0aWdodCBsb29wLlxuICAgICAgICBjbGVhclRpbWVvdXQodGltZXJJZCk7XG4gICAgICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgICAgIHJldHVybiBpbnZva2VGdW5jKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgfVxuICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgfVxuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cbiAgZGVib3VuY2VkLmNhbmNlbCA9IGNhbmNlbDtcbiAgZGVib3VuY2VkLmZsdXNoID0gZmx1c2g7XG4gIHJldHVybiBkZWJvdW5jZWQ7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gZGVib3VuY2U7XG4iLCIvKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIHRoZVxuICogW2xhbmd1YWdlIHR5cGVdKGh0dHA6Ly93d3cuZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1lY21hc2NyaXB0LWxhbmd1YWdlLXR5cGVzKVxuICogb2YgYE9iamVjdGAuIChlLmcuIGFycmF5cywgZnVuY3Rpb25zLCBvYmplY3RzLCByZWdleGVzLCBgbmV3IE51bWJlcigwKWAsIGFuZCBgbmV3IFN0cmluZygnJylgKVxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgMC4xLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGFuIG9iamVjdCwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0KHt9KTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KFsxLCAyLCAzXSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChfLm5vb3ApO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QobnVsbCk7XG4gKiAvLyA9PiBmYWxzZVxuICovXG5mdW5jdGlvbiBpc09iamVjdCh2YWx1ZSkge1xuICB2YXIgdHlwZSA9IHR5cGVvZiB2YWx1ZTtcbiAgcmV0dXJuIHZhbHVlICE9IG51bGwgJiYgKHR5cGUgPT0gJ29iamVjdCcgfHwgdHlwZSA9PSAnZnVuY3Rpb24nKTtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBpc09iamVjdDtcbiIsIi8qKlxuICogQ2hlY2tzIGlmIGB2YWx1ZWAgaXMgb2JqZWN0LWxpa2UuIEEgdmFsdWUgaXMgb2JqZWN0LWxpa2UgaWYgaXQncyBub3QgYG51bGxgXG4gKiBhbmQgaGFzIGEgYHR5cGVvZmAgcmVzdWx0IG9mIFwib2JqZWN0XCIuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSA0LjAuMFxuICogQGNhdGVnb3J5IExhbmdcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIGNoZWNrLlxuICogQHJldHVybnMge2Jvb2xlYW59IFJldHVybnMgYHRydWVgIGlmIGB2YWx1ZWAgaXMgb2JqZWN0LWxpa2UsIGVsc2UgYGZhbHNlYC5cbiAqIEBleGFtcGxlXG4gKlxuICogXy5pc09iamVjdExpa2Uoe30pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKFsxLCAyLCAzXSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdExpa2UoXy5ub29wKTtcbiAqIC8vID0+IGZhbHNlXG4gKlxuICogXy5pc09iamVjdExpa2UobnVsbCk7XG4gKiAvLyA9PiBmYWxzZVxuICovXG5mdW5jdGlvbiBpc09iamVjdExpa2UodmFsdWUpIHtcbiAgcmV0dXJuIHZhbHVlICE9IG51bGwgJiYgdHlwZW9mIHZhbHVlID09ICdvYmplY3QnO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzT2JqZWN0TGlrZTtcbiIsInZhciBiYXNlR2V0VGFnID0gcmVxdWlyZSgnLi9fYmFzZUdldFRhZycpLFxuICAgIGlzT2JqZWN0TGlrZSA9IHJlcXVpcmUoJy4vaXNPYmplY3RMaWtlJyk7XG5cbi8qKiBgT2JqZWN0I3RvU3RyaW5nYCByZXN1bHQgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1ib2xUYWcgPSAnW29iamVjdCBTeW1ib2xdJztcblxuLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyBjbGFzc2lmaWVkIGFzIGEgYFN5bWJvbGAgcHJpbWl0aXZlIG9yIG9iamVjdC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBhIHN5bWJvbCwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzU3ltYm9sKFN5bWJvbC5pdGVyYXRvcik7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc1N5bWJvbCgnYWJjJyk7XG4gKiAvLyA9PiBmYWxzZVxuICovXG5mdW5jdGlvbiBpc1N5bWJvbCh2YWx1ZSkge1xuICByZXR1cm4gdHlwZW9mIHZhbHVlID09ICdzeW1ib2wnIHx8XG4gICAgKGlzT2JqZWN0TGlrZSh2YWx1ZSkgJiYgYmFzZUdldFRhZyh2YWx1ZSkgPT0gc3ltYm9sVGFnKTtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBpc1N5bWJvbDtcbiIsInZhciByb290ID0gcmVxdWlyZSgnLi9fcm9vdCcpO1xuXG4vKipcbiAqIEdldHMgdGhlIHRpbWVzdGFtcCBvZiB0aGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyB0aGF0IGhhdmUgZWxhcHNlZCBzaW5jZVxuICogdGhlIFVuaXggZXBvY2ggKDEgSmFudWFyeSAxOTcwIDAwOjAwOjAwIFVUQykuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAyLjQuMFxuICogQGNhdGVnb3J5IERhdGVcbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIHRpbWVzdGFtcC5cbiAqIEBleGFtcGxlXG4gKlxuICogXy5kZWZlcihmdW5jdGlvbihzdGFtcCkge1xuICogICBjb25zb2xlLmxvZyhfLm5vdygpIC0gc3RhbXApO1xuICogfSwgXy5ub3coKSk7XG4gKiAvLyA9PiBMb2dzIHRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIGl0IHRvb2sgZm9yIHRoZSBkZWZlcnJlZCBpbnZvY2F0aW9uLlxuICovXG52YXIgbm93ID0gZnVuY3Rpb24oKSB7XG4gIHJldHVybiByb290LkRhdGUubm93KCk7XG59O1xuXG5tb2R1bGUuZXhwb3J0cyA9IG5vdztcbiIsInZhciBkZWJvdW5jZSA9IHJlcXVpcmUoJy4vZGVib3VuY2UnKSxcbiAgICBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKTtcblxuLyoqIEVycm9yIG1lc3NhZ2UgY29uc3RhbnRzLiAqL1xudmFyIEZVTkNfRVJST1JfVEVYVCA9ICdFeHBlY3RlZCBhIGZ1bmN0aW9uJztcblxuLyoqXG4gKiBDcmVhdGVzIGEgdGhyb3R0bGVkIGZ1bmN0aW9uIHRoYXQgb25seSBpbnZva2VzIGBmdW5jYCBhdCBtb3N0IG9uY2UgcGVyXG4gKiBldmVyeSBgd2FpdGAgbWlsbGlzZWNvbmRzLiBUaGUgdGhyb3R0bGVkIGZ1bmN0aW9uIGNvbWVzIHdpdGggYSBgY2FuY2VsYFxuICogbWV0aG9kIHRvIGNhbmNlbCBkZWxheWVkIGBmdW5jYCBpbnZvY2F0aW9ucyBhbmQgYSBgZmx1c2hgIG1ldGhvZCB0b1xuICogaW1tZWRpYXRlbHkgaW52b2tlIHRoZW0uIFByb3ZpZGUgYG9wdGlvbnNgIHRvIGluZGljYXRlIHdoZXRoZXIgYGZ1bmNgXG4gKiBzaG91bGQgYmUgaW52b2tlZCBvbiB0aGUgbGVhZGluZyBhbmQvb3IgdHJhaWxpbmcgZWRnZSBvZiB0aGUgYHdhaXRgXG4gKiB0aW1lb3V0LiBUaGUgYGZ1bmNgIGlzIGludm9rZWQgd2l0aCB0aGUgbGFzdCBhcmd1bWVudHMgcHJvdmlkZWQgdG8gdGhlXG4gKiB0aHJvdHRsZWQgZnVuY3Rpb24uIFN1YnNlcXVlbnQgY2FsbHMgdG8gdGhlIHRocm90dGxlZCBmdW5jdGlvbiByZXR1cm4gdGhlXG4gKiByZXN1bHQgb2YgdGhlIGxhc3QgYGZ1bmNgIGludm9jYXRpb24uXG4gKlxuICogKipOb3RlOioqIElmIGBsZWFkaW5nYCBhbmQgYHRyYWlsaW5nYCBvcHRpb25zIGFyZSBgdHJ1ZWAsIGBmdW5jYCBpc1xuICogaW52b2tlZCBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dCBvbmx5IGlmIHRoZSB0aHJvdHRsZWQgZnVuY3Rpb25cbiAqIGlzIGludm9rZWQgbW9yZSB0aGFuIG9uY2UgZHVyaW5nIHRoZSBgd2FpdGAgdGltZW91dC5cbiAqXG4gKiBJZiBgd2FpdGAgaXMgYDBgIGFuZCBgbGVhZGluZ2AgaXMgYGZhbHNlYCwgYGZ1bmNgIGludm9jYXRpb24gaXMgZGVmZXJyZWRcbiAqIHVudGlsIHRvIHRoZSBuZXh0IHRpY2ssIHNpbWlsYXIgdG8gYHNldFRpbWVvdXRgIHdpdGggYSB0aW1lb3V0IG9mIGAwYC5cbiAqXG4gKiBTZWUgW0RhdmlkIENvcmJhY2hvJ3MgYXJ0aWNsZV0oaHR0cHM6Ly9jc3MtdHJpY2tzLmNvbS9kZWJvdW5jaW5nLXRocm90dGxpbmctZXhwbGFpbmVkLWV4YW1wbGVzLylcbiAqIGZvciBkZXRhaWxzIG92ZXIgdGhlIGRpZmZlcmVuY2VzIGJldHdlZW4gYF8udGhyb3R0bGVgIGFuZCBgXy5kZWJvdW5jZWAuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAwLjEuMFxuICogQGNhdGVnb3J5IEZ1bmN0aW9uXG4gKiBAcGFyYW0ge0Z1bmN0aW9ufSBmdW5jIFRoZSBmdW5jdGlvbiB0byB0aHJvdHRsZS5cbiAqIEBwYXJhbSB7bnVtYmVyfSBbd2FpdD0wXSBUaGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyB0byB0aHJvdHRsZSBpbnZvY2F0aW9ucyB0by5cbiAqIEBwYXJhbSB7T2JqZWN0fSBbb3B0aW9ucz17fV0gVGhlIG9wdGlvbnMgb2JqZWN0LlxuICogQHBhcmFtIHtib29sZWFufSBbb3B0aW9ucy5sZWFkaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgbGVhZGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0LlxuICogQHBhcmFtIHtib29sZWFufSBbb3B0aW9ucy50cmFpbGluZz10cnVlXVxuICogIFNwZWNpZnkgaW52b2tpbmcgb24gdGhlIHRyYWlsaW5nIGVkZ2Ugb2YgdGhlIHRpbWVvdXQuXG4gKiBAcmV0dXJucyB7RnVuY3Rpb259IFJldHVybnMgdGhlIG5ldyB0aHJvdHRsZWQgZnVuY3Rpb24uXG4gKiBAZXhhbXBsZVxuICpcbiAqIC8vIEF2b2lkIGV4Y2Vzc2l2ZWx5IHVwZGF0aW5nIHRoZSBwb3NpdGlvbiB3aGlsZSBzY3JvbGxpbmcuXG4gKiBqUXVlcnkod2luZG93KS5vbignc2Nyb2xsJywgXy50aHJvdHRsZSh1cGRhdGVQb3NpdGlvbiwgMTAwKSk7XG4gKlxuICogLy8gSW52b2tlIGByZW5ld1Rva2VuYCB3aGVuIHRoZSBjbGljayBldmVudCBpcyBmaXJlZCwgYnV0IG5vdCBtb3JlIHRoYW4gb25jZSBldmVyeSA1IG1pbnV0ZXMuXG4gKiB2YXIgdGhyb3R0bGVkID0gXy50aHJvdHRsZShyZW5ld1Rva2VuLCAzMDAwMDAsIHsgJ3RyYWlsaW5nJzogZmFsc2UgfSk7XG4gKiBqUXVlcnkoZWxlbWVudCkub24oJ2NsaWNrJywgdGhyb3R0bGVkKTtcbiAqXG4gKiAvLyBDYW5jZWwgdGhlIHRyYWlsaW5nIHRocm90dGxlZCBpbnZvY2F0aW9uLlxuICogalF1ZXJ5KHdpbmRvdykub24oJ3BvcHN0YXRlJywgdGhyb3R0bGVkLmNhbmNlbCk7XG4gKi9cbmZ1bmN0aW9uIHRocm90dGxlKGZ1bmMsIHdhaXQsIG9wdGlvbnMpIHtcbiAgdmFyIGxlYWRpbmcgPSB0cnVlLFxuICAgICAgdHJhaWxpbmcgPSB0cnVlO1xuXG4gIGlmICh0eXBlb2YgZnVuYyAhPSAnZnVuY3Rpb24nKSB7XG4gICAgdGhyb3cgbmV3IFR5cGVFcnJvcihGVU5DX0VSUk9SX1RFWFQpO1xuICB9XG4gIGlmIChpc09iamVjdChvcHRpb25zKSkge1xuICAgIGxlYWRpbmcgPSAnbGVhZGluZycgaW4gb3B0aW9ucyA/ICEhb3B0aW9ucy5sZWFkaW5nIDogbGVhZGluZztcbiAgICB0cmFpbGluZyA9ICd0cmFpbGluZycgaW4gb3B0aW9ucyA/ICEhb3B0aW9ucy50cmFpbGluZyA6IHRyYWlsaW5nO1xuICB9XG4gIHJldHVybiBkZWJvdW5jZShmdW5jLCB3YWl0LCB7XG4gICAgJ2xlYWRpbmcnOiBsZWFkaW5nLFxuICAgICdtYXhXYWl0Jzogd2FpdCxcbiAgICAndHJhaWxpbmcnOiB0cmFpbGluZ1xuICB9KTtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSB0aHJvdHRsZTtcbiIsInZhciBiYXNlVHJpbSA9IHJlcXVpcmUoJy4vX2Jhc2VUcmltJyksXG4gICAgaXNPYmplY3QgPSByZXF1aXJlKCcuL2lzT2JqZWN0JyksXG4gICAgaXNTeW1ib2wgPSByZXF1aXJlKCcuL2lzU3ltYm9sJyk7XG5cbi8qKiBVc2VkIGFzIHJlZmVyZW5jZXMgZm9yIHZhcmlvdXMgYE51bWJlcmAgY29uc3RhbnRzLiAqL1xudmFyIE5BTiA9IDAgLyAwO1xuXG4vKiogVXNlZCB0byBkZXRlY3QgYmFkIHNpZ25lZCBoZXhhZGVjaW1hbCBzdHJpbmcgdmFsdWVzLiAqL1xudmFyIHJlSXNCYWRIZXggPSAvXlstK10weFswLTlhLWZdKyQvaTtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IGJpbmFyeSBzdHJpbmcgdmFsdWVzLiAqL1xudmFyIHJlSXNCaW5hcnkgPSAvXjBiWzAxXSskL2k7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBvY3RhbCBzdHJpbmcgdmFsdWVzLiAqL1xudmFyIHJlSXNPY3RhbCA9IC9eMG9bMC03XSskL2k7XG5cbi8qKiBCdWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcyB3aXRob3V0IGEgZGVwZW5kZW5jeSBvbiBgcm9vdGAuICovXG52YXIgZnJlZVBhcnNlSW50ID0gcGFyc2VJbnQ7XG5cbi8qKlxuICogQ29udmVydHMgYHZhbHVlYCB0byBhIG51bWJlci5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gcHJvY2Vzcy5cbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIG51bWJlci5cbiAqIEBleGFtcGxlXG4gKlxuICogXy50b051bWJlcigzLjIpO1xuICogLy8gPT4gMy4yXG4gKlxuICogXy50b051bWJlcihOdW1iZXIuTUlOX1ZBTFVFKTtcbiAqIC8vID0+IDVlLTMyNFxuICpcbiAqIF8udG9OdW1iZXIoSW5maW5pdHkpO1xuICogLy8gPT4gSW5maW5pdHlcbiAqXG4gKiBfLnRvTnVtYmVyKCczLjInKTtcbiAqIC8vID0+IDMuMlxuICovXG5mdW5jdGlvbiB0b051bWJlcih2YWx1ZSkge1xuICBpZiAodHlwZW9mIHZhbHVlID09ICdudW1iZXInKSB7XG4gICAgcmV0dXJuIHZhbHVlO1xuICB9XG4gIGlmIChpc1N5bWJvbCh2YWx1ZSkpIHtcbiAgICByZXR1cm4gTkFOO1xuICB9XG4gIGlmIChpc09iamVjdCh2YWx1ZSkpIHtcbiAgICB2YXIgb3RoZXIgPSB0eXBlb2YgdmFsdWUudmFsdWVPZiA9PSAnZnVuY3Rpb24nID8gdmFsdWUudmFsdWVPZigpIDogdmFsdWU7XG4gICAgdmFsdWUgPSBpc09iamVjdChvdGhlcikgPyAob3RoZXIgKyAnJykgOiBvdGhlcjtcbiAgfVxuICBpZiAodHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSB7XG4gICAgcmV0dXJuIHZhbHVlID09PSAwID8gdmFsdWUgOiArdmFsdWU7XG4gIH1cbiAgdmFsdWUgPSBiYXNlVHJpbSh2YWx1ZSk7XG4gIHZhciBpc0JpbmFyeSA9IHJlSXNCaW5hcnkudGVzdCh2YWx1ZSk7XG4gIHJldHVybiAoaXNCaW5hcnkgfHwgcmVJc09jdGFsLnRlc3QodmFsdWUpKVxuICAgID8gZnJlZVBhcnNlSW50KHZhbHVlLnNsaWNlKDIpLCBpc0JpbmFyeSA/IDIgOiA4KVxuICAgIDogKHJlSXNCYWRIZXgudGVzdCh2YWx1ZSkgPyBOQU4gOiArdmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRvTnVtYmVyO1xuIiwidmFyIGc7XG5cbi8vIFRoaXMgd29ya3MgaW4gbm9uLXN0cmljdCBtb2RlXG5nID0gKGZ1bmN0aW9uKCkge1xuXHRyZXR1cm4gdGhpcztcbn0pKCk7XG5cbnRyeSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgZXZhbCBpcyBhbGxvd2VkIChzZWUgQ1NQKVxuXHRnID0gZyB8fCBuZXcgRnVuY3Rpb24oXCJyZXR1cm4gdGhpc1wiKSgpO1xufSBjYXRjaCAoZSkge1xuXHQvLyBUaGlzIHdvcmtzIGlmIHRoZSB3aW5kb3cgcmVmZXJlbmNlIGlzIGF2YWlsYWJsZVxuXHRpZiAodHlwZW9mIHdpbmRvdyA9PT0gXCJvYmplY3RcIikgZyA9IHdpbmRvdztcbn1cblxuLy8gZyBjYW4gc3RpbGwgYmUgdW5kZWZpbmVkLCBidXQgbm90aGluZyB0byBkbyBhYm91dCBpdC4uLlxuLy8gV2UgcmV0dXJuIHVuZGVmaW5lZCwgaW5zdGVhZCBvZiBub3RoaW5nIGhlcmUsIHNvIGl0J3Ncbi8vIGVhc2llciB0byBoYW5kbGUgdGhpcyBjYXNlLiBpZighZ2xvYmFsKSB7IC4uLn1cblxubW9kdWxlLmV4cG9ydHMgPSBnO1xuIiwiaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcclxuXHJcbmltcG9ydCAnLi9jb21wb25lbnQvbmF2aWdhdGlvbic7XHJcbmltcG9ydCAnLi9jb21wb25lbnQvbW9iaWxlbWVudSc7XHJcbmltcG9ydCAnLi9jb21wb25lbnQvc2Nyb2xsbmF2aWdhdGlvbic7XHJcbmltcG9ydCAnLi9jb21wb25lbnQvc3RpY2t5aGVhZGVyJztcclxuXHJcbmltcG9ydCAnLi9jb21wb25lbnQvbG9naW5yZWdpc3RyYXRpb24nOyIsIlxyXG5cclxuXHJcbmltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XHJcblxyXG52YXIgJGZvcm0gPSAkKFwiI3dwX3NpZ251cF9mb3JtXCIpLFxyXG4gICAgJHN1Y2Nlc3NNc2cgPSAkKFwiI21lc3NhZ2VcIik7XHJcbiAgICAkLnZhbGlkYXRvci5hZGRNZXRob2QoXCJsZXR0ZXJzXCIsIGZ1bmN0aW9uICh2YWx1ZSwgZWxlbWVudCkge1xyXG4gICAgcmV0dXJuIHRoaXMub3B0aW9uYWwoZWxlbWVudCkgfHwgdmFsdWUgPT0gdmFsdWUubWF0Y2goL15bYS16QS1aXFxzXSokLyk7XHJcbn0pO1xyXG5cclxuJGZvcm0udmFsaWRhdGUoe1xyXG4gIGVycm9yRWxlbWVudDogXCJzcGFuXCIsXHJcbiAgcnVsZXM6IHtcclxuICAgIGZpcnN0TmFtZToge1xyXG4gICAgICByZXF1aXJlZDogdHJ1ZSxcclxuICAgICAgbWlubGVuZ3RoOiAzLFxyXG4gICAgICBsZXR0ZXJzOiB0cnVlXHJcbiAgICB9LFxyXG4gICAgbGFzdE5hbWU6IHtcclxuICAgICAgICByZXF1aXJlZDogdHJ1ZSxcclxuICAgICAgICBtaW5sZW5ndGg6IDMsXHJcbiAgICAgICAgbGV0dGVyczogdHJ1ZVxyXG4gICAgfSxcclxuICAgIGVtYWlsOiB7XHJcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxyXG4gICAgICBlbWFpbDogdHJ1ZVxyXG4gICAgfSxcclxuICAgIHVzZXJwYXNzd29yZDp7XHJcbiAgICAgICAgcmVxdWlyZWQ6dHJ1ZSxcclxuICAgICAgICBtaW5sZW5ndGg6NFxyXG4gICAgfSxcclxuICAgIGNvbmZpcm1QYXNzd29yZDp7XHJcbiAgICAgICAgcmVxdWlyZWQ6dHJ1ZSxcclxuICAgICAgICBlcXVhbFRvOiBcIiN1c2VycGFzc3dvcmRcIlxyXG4gICAgfVxyXG4gIH0sXHJcbiAgbWVzc2FnZXM6IHtcclxuICAgIGZpcnN0TmFtZTogXCJGaXJzdCBuYW1lIHJlcXVpcmVkXCIsXHJcbiAgICBsYXN0TmFtZTogXCJMYXN0IG5hbWUgcmVxdWlyZWRcIixcclxuICAgIHVzZXJwYXNzd29yZDpcIlBhc3N3b3JkIHJlcXVpcmVkXCIsXHJcbiAgICBjb25maXJtUGFzc3dvcmQ6IFwiQ29uZmlybSBwYXNzd29yZCBzYW1lIGFzIHBhc3N3b3JkXCIsXHJcbiAgICBlbWFpbDp7cmVxdWlyZWQ6XCJFbWFpbCBhZGRyZXNzIHJlcXVpcmVkXCIsZW1haWw6XCJQbGVhc2Ugc3BlY2lmeSBhIHZhbGlkIGVtYWlsIGFkZHJlc3NcIn0sXHJcbiAgfSxcclxuICBzdWJtaXRIYW5kbGVyOiBmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgdmFyIGFjdGlvbiA9ICdyZWdpc3Rlcl9hY3Rpb24nO1xyXG4gICAgXHJcbiAgICB2YXIgZm9ybWZpcnN0TmFtZSA9IGpRdWVyeShcIiNmaXJzdE5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWxhc3ROYW1lID0galF1ZXJ5KFwiI2xhc3ROYW1lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1lbWFpbCA9IGpRdWVyeShcIiNlbWFpbFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtYWx0RW1haWwgPSBqUXVlcnkoXCIjYWx0RW1haWxcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybXBob25lID0galF1ZXJ5KFwiI3Bob25lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1hbHRQaG9uZSA9IGpRdWVyeShcIiNhbHRQaG9uZVwiKS52YWwoKTtcclxuXHJcbiAgICB2YXIgZm9ybWNvdW50cnkgPSBqUXVlcnkoXCIjY291bnRyeVwiKS52YWwoKTtcclxuICAgIHZhciBmb3Jtc3RhdGUgPSBqUXVlcnkoXCIjc3RhdGVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWFkZHJlc3MgPSBqUXVlcnkoXCIjYWRkcmVzc1wiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY2l0eSA9IGpRdWVyeShcIiNjaXR5XCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm16aXBDb2RlID0galF1ZXJ5KFwiI3ppcENvZGVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbXBhbnlOYW1lID0galF1ZXJ5KFwiI2NvbXBhbnlOYW1lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jb21wYW55VXJsID0galF1ZXJ5KFwiI2NvbXBhbnlVcmxcIikudmFsKCk7XHJcblxyXG4gICAgdmFyIGZvcm1wYXNzd29yZCA9IGpRdWVyeShcIiN1c2VycGFzc3dvcmRcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbmZpcm1QYXNzd29yZCA9IGpRdWVyeShcIiNjb25maXJtUGFzc3dvcmRcIikudmFsKCk7XHJcbiAgIFxyXG4gICAgdmFyIGFqYXhkYXRhID0geyAgICBcclxuICAgICAgICBhY3Rpb246IGFjdGlvbixcclxuICAgICAgICBmaXJzdE5hbWU6IGZvcm1maXJzdE5hbWUsXHJcbiAgICAgICAgbGFzdE5hbWU6IGZvcm1sYXN0TmFtZSxcclxuICAgICAgICBlbWFpbDogZm9ybWVtYWlsLFxyXG4gICAgICAgIGFsdEVtYWlsOiBmb3JtYWx0RW1haWwsXHJcbiAgICAgICAgcGhvbmU6IGZvcm1waG9uZSxcclxuICAgICAgICBhbHRQaG9uZTogZm9ybWFsdFBob25lLFxyXG4gICAgICAgIGNvdW50cnk6IGZvcm1jb3VudHJ5LFxyXG4gICAgICAgIHN0YXRlOiBmb3Jtc3RhdGUsXHJcbiAgICAgICAgYWRkcmVzczogZm9ybWFkZHJlc3MsXHJcbiAgICAgICAgY2l0eTogZm9ybWNpdHksXHJcbiAgICAgICAgemlwQ29kZTogZm9ybXppcENvZGUsXHJcbiAgICAgICAgY29tcGFueU5hbWU6IGZvcm1jb21wYW55TmFtZSxcclxuICAgICAgICBjb21wYW55VXJsOiBmb3JtY29tcGFueVVybCxcclxuICAgICAgICBwYXNzd29yZDogZm9ybXBhc3N3b3JkLFxyXG4gICAgICAgIGNvbmZpcm1QYXNzd29yZDogZm9ybWNvbmZpcm1QYXNzd29yZFxyXG4gICAgfTtcclxuICAgIFxyXG5cclxuICAgIGpRdWVyeS5hamF4KHtcclxuICAgICAgICB0eXBlIDogXCJwb3N0XCIsXHJcbiAgICAgICAgZGF0YVR5cGUgOiBcImpzb25cIixcclxuICAgICAgICB1cmwgOiBhamF4dXJsLFxyXG4gICAgICAgIGRhdGEgOiBhamF4ZGF0YSxcclxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICBpZihyZXNwb25zZS5zdWNjZXNzID09XCIxXCIpIHtcclxuICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LWRhbmdlcicpLmFkZENsYXNzKCdhbGVydC1zdWNjZXNzJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbXNnXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZSk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5zaG93KCk7XHJcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3Bfc2lnbnVwX2Zvcm0nKS50cmlnZ2VyKFwicmVzZXRcIik7ICAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IHJlc3BvbnNlLnJlZGlyZWN0X3VybDtcclxuICAgICAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5oaWRlKCk7XHJcbiAgICAgICAgICAgICAgICB9LCA1MDAwKTsgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LXN1Y2Nlc3MnKS5hZGRDbGFzcygnYWxlcnQtZGFuZ2VyJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbXNnXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZV9kYXRhKTsgXHJcbiAgICAgICAgICAgIH0gICAgICAgICAgICBcclxuICAgICAgICB9XHJcbiAgICB9KTtcdFxyXG4gIH1cclxufSk7XHJcblxyXG5cclxuXHJcbnZhciAkbG9naW5mb3JtID0gJChcIiN3cF9sb2dpbl9mb3JtXCIpLFxyXG4gICAgJGxvZ2luTXNnID0gJChcIiNtZXNzYWdlXCIpO1xyXG4gICAgJC52YWxpZGF0b3IuYWRkTWV0aG9kKFwibGV0dGVyc1wiLCBmdW5jdGlvbiAodmFsdWUsIGVsZW1lbnQpIHtcclxuICAgIHJldHVybiB0aGlzLm9wdGlvbmFsKGVsZW1lbnQpIHx8IHZhbHVlID09IHZhbHVlLm1hdGNoKC9eW2EtekEtWlxcc10qJC8pO1xyXG59KTtcclxuXHJcblxyXG5cclxuJGxvZ2luZm9ybS52YWxpZGF0ZSh7XHJcbiAgICBlcnJvckVsZW1lbnQ6IFwic3BhblwiLFxyXG4gICAgcnVsZXM6IHtcclxuICAgICAgdXNlckVtYWlsOiB7XHJcbiAgICAgICAgcmVxdWlyZWQ6IHRydWUsXHJcbiAgICAgICAgZW1haWw6IHRydWVcclxuICAgICAgfSxcclxuICAgICAgcGFzc3dvcmQ6e1xyXG4gICAgICAgICAgcmVxdWlyZWQ6dHJ1ZSxcclxuICAgICAgICAgIG1pbmxlbmd0aDo0XHJcbiAgICAgIH1cclxuICAgIH0sXHJcbiAgICBtZXNzYWdlczoge1xyXG4gICAgICB1c2VyRW1haWw6IHtyZXF1aXJlZDpcIkxvZ2luIGVtYWlsIHJlcXVpcmVkXCIsZW1haWw6XCJQbGVhc2UgVmFsaWQgZW1haWwgcmVxdWlyZWRcIn0sXHJcbiAgICAgIHBhc3N3b3JkOntyZXF1aXJlZDpcIlBhc3N3b3JkIHJlcXVpcmVkXCIsbWlubGVuZ3RoOlwiUGFzc3dvcmQgbXVzdCBiZSBtb3JlIHRoZW4gNCBkaWdpdFwifVxyXG4gICAgfSxcclxuICAgIHN1Ym1pdEhhbmRsZXI6IGZ1bmN0aW9uICgpIHtcclxuICBcclxuICAgICAgICB2YXIgYWN0aW9uID0gJ2xvZ2luX2FjdGlvbic7XHJcbiAgICBcclxuICAgICAgICB2YXIgdXNlckVtYWlsID0galF1ZXJ5KFwiI3VzZXJFbWFpbFwiKS52YWwoKTtcclxuICAgICAgICB2YXIgcGFzc3dvcmQgPSBqUXVlcnkoXCIjcGFzc3dvcmRcIikudmFsKCk7XHJcbiAgICAgICAgdmFyIHJlbWVtYmVyID0galF1ZXJ5KFwiI3JlbWVtYmVyXCIpLnZhbCgpO1xyXG4gICAgICAgXHJcbiAgICAgICAgdmFyIGFqYXhkYXRhID0geyAgICBcclxuICAgICAgICAgICAgYWN0aW9uOiBhY3Rpb24sXHJcbiAgICAgICAgICAgIHVzZXJMb2dpbjogdXNlckVtYWlsLFxyXG4gICAgICAgICAgICBwYXNzd29yZDogcGFzc3dvcmQsXHJcbiAgICAgICAgICAgIHJlbWVtYmVyOiByZW1lbWJlclxyXG4gICAgICAgIH07XHJcbiAgICAgICAgXHJcbiAgICBcclxuICAgICAgICBqUXVlcnkuYWpheCh7XHJcbiAgICAgICAgICAgIHR5cGUgOiBcInBvc3RcIixcclxuICAgICAgICAgICAgZGF0YVR5cGUgOiBcImpzb25cIixcclxuICAgICAgICAgICAgdXJsIDogYWpheHVybCxcclxuICAgICAgICAgICAgZGF0YSA6IGFqYXhkYXRhLFxyXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICAgICAgaWYocmVzcG9uc2Uuc3VjY2VzcyA9PVwiMVwiKSB7ICAgIFxyXG4gICAgICAgICAgICAgICAgICAgIC8vICRsb2dpbk1zZy5zaG93KCk7ICAgIFxyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnJlbW92ZUNsYXNzKCdhbGVydC1kYW5nZXInKS5hZGRDbGFzcygnYWxlcnQtc3VjY2VzcycpO1xyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtc2dcIikuaHRtbChyZXNwb25zZS5tZXNzYWdlKycgJytyZXNwb25zZS5tZXNzYWdlX2RhdGEpO1xyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnNob3coKTtcclxuICAgICAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGpRdWVyeSgnI3dwX2xvZ2luX2Zvcm0nKS50cmlnZ2VyKFwicmVzZXRcIik7ICAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZXNwb25zZS5yZWRpcmVjdF91cmw7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLmhpZGUoKTtcclxuICAgICAgICAgICAgICAgICAgICB9LCAzMDAwKTsgICAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LXN1Y2Nlc3MnKS5hZGRDbGFzcygnYWxlcnQtZGFuZ2VyJyk7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21zZ1wiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7IFxyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnNob3coKTtcclxuICAgICAgICAgICAgICAgIH0gICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1x0XHJcbiAgICB9XHJcbiAgfSk7XHJcbiAgXHJcbiAgXHJcbi8valF1ZXJ5KFwiLnNob3dMb2NhdGlvblwiKS5jbGljayhmdW5jdGlvbigpe1xyXG5qUXVlcnkoJy5zaG93TG9jYXRpb24nKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG4gICAgdmFyIHJlY2VudCA9ICQodGhpcykudmFsKCk7XHJcbiAgICBpZiAoJCh0aGlzKS5pcyhcIjpjaGVja2VkXCIpKXtcclxuICAgICAgICAkKFwiLlwiK3JlY2VudCkuc2hvdygpO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgJChcIi5cIityZWNlbnQpLmhpZGUoKTtcclxuICAgIH1cclxufSk7XHJcblxyXG5qUXVlcnkoJy5jaG9vc2VFbnRlcnByaXNlJykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgIHZhciB0eXBlID0gJCh0aGlzKS5hdHRyKCdzZXJ2ZXJ0eXBlJyk7XHJcbiAgICBcclxuICAgIGlmKHR5cGU9PSdlbnRlcnByaXNlJyl7XHJcbiAgICAgICAgalF1ZXJ5KFwiI2VudGVycHJpc2Utc2VydmVyLXRhYlwiICkudHJpZ2dlciggXCJjbGlja1wiICk7XHJcbiAgICB9ZWxzZSBpZih0eXBlPT0ncHJvJyl7XHJcbiAgICAgICAgalF1ZXJ5KFwiI3Byby1zZXJ2ZXItdGFiXCIgKS50cmlnZ2VyKCBcImNsaWNrXCIgKTtcclxuICAgIH1lbHNle1xyXG4gICAgICAgIGpRdWVyeShcIiNidWRnZXQtc2VydmVyLXRhYlwiICkudHJpZ2dlciggXCJjbGlja1wiICk7XHJcbiAgICB9XHJcbiAgICBcclxufSk7XHJcblxyXG5cclxuLyoqXHJcbiAqICBQYWdpbmF0aW9uIG9mIERlZGljYXRlZCBTZXJ2ZXIgcGFnZVxyXG4gKiBcclxuICovXHJcblxyXG4gdmFyIGl0ZW1zID0gJChcIiNidWRnZXQtc2VydmVyIHRib2R5IHRyXCIpO1xyXG4gdmFyIG51bUl0ZW1zID0gaXRlbXMubGVuZ3RoO1xyXG4gdmFyIHBlclBhZ2UgPSAxMDtcclxuXHJcbiBpdGVtcy5zbGljZShwZXJQYWdlKS5oaWRlKCk7XHJcblxyXG4gJCgnI2J1ZGdldC1zZXJ2ZXItcGFnaW5hdGlvbicpLnBhZ2luYXRpb24oe1xyXG4gICAgIGl0ZW1zOiBudW1JdGVtcyxcclxuICAgICBpdGVtc09uUGFnZTogcGVyUGFnZSxcclxuICAgICBwcmV2VGV4dDogXCImbGFxdW87XCIsXHJcbiAgICAgbmV4dFRleHQ6IFwiJnJhcXVvO1wiLFxyXG4gICAgIGNzc1N0eWxlOidsaWdodC10aGVtZScsXHJcbiAgICAgb25QYWdlQ2xpY2s6IGZ1bmN0aW9uIChwYWdlTnVtYmVyKSB7XHJcbiAgICAgICAgIHZhciBzaG93RnJvbSA9IHBlclBhZ2UgKiAocGFnZU51bWJlciAtIDEpO1xyXG4gICAgICAgICB2YXIgc2hvd1RvID0gc2hvd0Zyb20gKyBwZXJQYWdlO1xyXG4gICAgICAgICBpdGVtcy5oaWRlKCkuc2xpY2Uoc2hvd0Zyb20sIHNob3dUbykuc2hvdygpO1xyXG4gICAgIH1cclxuIH0pO1xyXG5cclxuXHJcbiB2YXIgaXRlbXNfcHJvID0gJChcIiNwcm8tc2VydmVyIHRib2R5IHRyXCIpO1xyXG4gdmFyIG51bUl0ZW1zX3BybyA9IGl0ZW1zX3Byby5sZW5ndGg7XHJcbiB2YXIgcGVyUGFnZV9wcm8gPSAxMDtcclxuXHJcbiBpdGVtc19wcm8uc2xpY2UocGVyUGFnZV9wcm8pLmhpZGUoKTtcclxuXHJcbiAkKCcjcHJvLXNlcnZlci1wYWdpbmF0aW9uJykucGFnaW5hdGlvbih7XHJcbiAgICAgaXRlbXM6IG51bUl0ZW1zX3BybyxcclxuICAgICBpdGVtc09uUGFnZTogcGVyUGFnZV9wcm8sXHJcbiAgICAgcHJldlRleHQ6IFwiJmxhcXVvO1wiLFxyXG4gICAgIG5leHRUZXh0OiBcIiZyYXF1bztcIixcclxuICAgICBjc3NTdHlsZTonbGlnaHQtdGhlbWUnLFxyXG4gICAgIG9uUGFnZUNsaWNrOiBmdW5jdGlvbiAocGFnZU51bWJlcikge1xyXG4gICAgICAgICB2YXIgc2hvd0Zyb20gPSBwZXJQYWdlX3BybyAqIChwYWdlTnVtYmVyIC0gMSk7XHJcbiAgICAgICAgIHZhciBzaG93VG8gPSBzaG93RnJvbSArIHBlclBhZ2VfcHJvO1xyXG4gICAgICAgICBpdGVtc19wcm8uaGlkZSgpLnNsaWNlKHNob3dGcm9tLCBzaG93VG8pLnNob3coKTtcclxuICAgICB9XHJcbiB9KTtcclxuXHJcblxyXG4gdmFyIGl0ZW1zX2VudCA9ICQoXCIjZW50ZXJwcmlzZS1zZXJ2ZXIgdGJvZHkgdHJcIik7XHJcbiB2YXIgbnVtSXRlbXNfZW50ID0gaXRlbXNfZW50Lmxlbmd0aDtcclxuIHZhciBwZXJQYWdlX2VudCA9IDEwO1xyXG5cclxuIGl0ZW1zX2VudC5zbGljZShwZXJQYWdlX2VudCkuaGlkZSgpO1xyXG5cclxuICQoJyNlbnRlcnByaXNlLXNlcnZlci1wYWdpbmF0aW9uJykucGFnaW5hdGlvbih7XHJcbiAgICAgaXRlbXM6IG51bUl0ZW1zX2VudCxcclxuICAgICBpdGVtc09uUGFnZTogcGVyUGFnZV9lbnQsXHJcbiAgICAgcHJldlRleHQ6IFwiJmxhcXVvO1wiLFxyXG4gICAgIG5leHRUZXh0OiBcIiZyYXF1bztcIixcclxuICAgICBjc3NTdHlsZTonbGlnaHQtdGhlbWUnLFxyXG4gICAgIG9uUGFnZUNsaWNrOiBmdW5jdGlvbiAocGFnZU51bWJlcikge1xyXG4gICAgICAgICB2YXIgc2hvd0Zyb20gPSBwZXJQYWdlX2VudCAqIChwYWdlTnVtYmVyIC0gMSk7XHJcbiAgICAgICAgIHZhciBzaG93VG8gPSBzaG93RnJvbSArIHBlclBhZ2VfZW50O1xyXG4gICAgICAgICBpdGVtc19lbnQuaGlkZSgpLnNsaWNlKHNob3dGcm9tLCBzaG93VG8pLnNob3coKTtcclxuICAgICB9XHJcbiB9KTtcclxuXHJcblxyXG5cclxuIGpRdWVyeSgnI3JlcXVlc3RDYWxsYmFjaycpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcbiAgICBqUXVlcnkoJyNjb250YWluZXItY29udGFjdC1mb3JtJykuaGlkZSgpO1xyXG4gICAgalF1ZXJ5KCcjY29udGFpbmVyLXJlcXVlc3QtZm9ybScpLnNob3coKTtcclxuICAgIHdpbmRvdy5sb2NhdGlvbi5oYXNoID0gJyNzZWN0aW9uMic7XHJcbiAgICByZXR1cm4gZmFsc2U7ICAgIFxyXG59KTtcclxuXHJcbmpRdWVyeSgnI3JlcXVlc3RDb250YWN0Jykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgIGpRdWVyeSgnI2NvbnRhaW5lci1yZXF1ZXN0LWZvcm0nKS5oaWRlKCk7XHJcbiAgICBqUXVlcnkoJyNjb250YWluZXItY29udGFjdC1mb3JtJykuc2hvdygpO1xyXG4gICAgd2luZG93LmxvY2F0aW9uLmhhc2ggPSAnI3NlY3Rpb24yJztcclxuICAgIHJldHVybiBmYWxzZTsgICAgXHJcbn0pOyIsImNsYXNzIE1vYmlsZU1lbnV7XHJcbiAgICBjb25zdHJ1Y3Rvcigpe1xyXG4gICAgICAgIHRoaXMubWVudUljb24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXJfX21lbnUtaWNvbicpO1xyXG4gICAgICAgIHRoaXMubWVudUNvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXJfX21vYmlsZS1tZW51LWNvbnRlbnQnKTtcclxuICAgICAgICB0aGlzLmV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgZXZlbnRzKCl7XHJcbiAgICAgICAgdGhpcy5tZW51SWNvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMudG9nZ2xlVGhlTWVudSgpKTtcclxuICAgIH1cclxuXHJcbiAgICB0b2dnbGVUaGVNZW51KCl7XHJcbiAgICAgICAgdGhpcy5tZW51Q29udGVudC5jbGFzc0xpc3QudG9nZ2xlKCdzaXRlLWhlYWRlcl9fbW9iaWxlLW1lbnUtY29udGVudC0taXMtdmlzaWJsZScpO1xyXG4gICAgICAgIHRoaXMubWVudUljb24uY2xhc3NMaXN0LnRvZ2dsZSgnc2l0ZS1oZWFkZXJfX21lbnUtaWNvbi0tY2xvc2UteCcpO1xyXG4gICAgfVxyXG59XHJcblxyXG5uZXcgTW9iaWxlTWVudSgpOyIsImltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XHJcblxyXG4kKCcuaGVhZGVyLW5hdmlnYXRpb24nKS5vbignbW91c2VlbnRlcicsICcubWVudS1pdGVtLWhhcy1jaGlsZHJlbicsIChlKSA9PntcclxuICAgIFxyXG4gICAgaWYoISQoZS5jdXJyZW50VGFyZ2V0KS5wYXJlbnRzKCcuc3ViLW1lbnUnKS5sZW5ndGgpe1xyXG4gICAgICAgICQoJy5tZW51ID4gLm1lbnUtaXRlbS5vcGVuJykuZmluZCgnPiBhID4gLm1lbnUtYnV0dG9uJykudHJpZ2dlcignY2xpY2snKTtcclxuICAgIH1cclxuICAgICQoZS5jdXJyZW50VGFyZ2V0KS5hZGRDbGFzcygnb3BlbicpO1xyXG59KS5vbignbW91c2VsZWF2ZScsICcubWVudS1pdGVtLWhhcy1jaGlsZHJlbicsIChlKSA9PntcclxuICAgICQoZS5jdXJyZW50VGFyZ2V0KS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG59KVxyXG5cclxuIiwiaW1wb3J0IHRocm90dGxlIGZyb20gJ2xvZGFzaC90aHJvdHRsZSc7XHJcbmltcG9ydCBkZWJvdW5jZSBmcm9tICdsb2Rhc2gvZGVib3VuY2UnO1xyXG5cclxuY2xhc3MgU3RpY2t5SGVhZGVyIHtcclxuICBjb25zdHJ1Y3RvcigpIHtcclxuICAgIHRoaXMucGFnZVNlY3Rpb25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5wYWdlLXNlY3Rpb25cIik7XHJcbiAgICB0aGlzLmJyb3dzZXJIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgICB0aGlzLnByZXZpb3VzU2Nyb2xsWSA9IHdpbmRvdy5zY3JvbGxZO1xyXG4gICAgdGhpcy5ldmVudHMoKTtcclxuICB9XHJcblxyXG4gIGV2ZW50cygpIHtcclxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwic2Nyb2xsXCIsIHRocm90dGxlKCgpID0+IHRoaXMucnVuT25TY3JvbGwoKSwgNTApKTtcclxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwicmVzaXplXCIsIGRlYm91bmNlKCgpID0+IHtcclxuICAgICAgdGhpcy5icm93c2VySGVpZ2h0ID0gd2luZG93LmlubmVySGVpZ2h0O1xyXG4gICAgfSwgMzMzKSk7XHJcbiAgfVxyXG5cclxuICBydW5PblNjcm9sbCgpIHtcclxuICAgIHRoaXMuZGV0ZXJtaW5lU2Nyb2xsRGlyZWN0aW9uKCk7XHJcbiAgICB0aGlzLnBhZ2VTZWN0aW9ucy5mb3JFYWNoKGVsID0+IHRoaXMuY2FsY1NlY3Rpb24oZWwpKTtcclxuICB9XHJcblxyXG4gIGRldGVybWluZVNjcm9sbERpcmVjdGlvbigpIHtcclxuICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IHRoaXMucHJldmlvdXNTY3JvbGxZKSB7XHJcbiAgICAgIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID0gJ2Rvd24nO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdGhpcy5zY3JvbGxEaXJlY3Rpb24gPSAndXAnO1xyXG4gICAgfVxyXG4gICAgdGhpcy5wcmV2aW91c1Njcm9sbFkgPSB3aW5kb3cuc2Nyb2xsWTtcclxuICB9XHJcblxyXG4gIGNhbGNTZWN0aW9uKGVsKSB7XHJcbiAgICBpZiAod2luZG93LnNjcm9sbFkgKyB0aGlzLmJyb3dzZXJIZWlnaHQgPiBlbC5vZmZzZXRUb3AgJiYgd2luZG93LnNjcm9sbFkgPCBlbC5vZmZzZXRUb3AgKyBlbC5vZmZzZXRIZWlnaHQpIHtcclxuICAgICAgbGV0IHNjcm9sbFBlcmNlbnQgPSAoZWwuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wIC8gdGhpcy5icm93c2VySGVpZ2h0KSAqIDEwMDtcclxuICAgICAgaWYgKCAoc2Nyb2xsUGVyY2VudCA8IDQwICYmIHNjcm9sbFBlcmNlbnQgPiAwICYmIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID09ICdkb3duJykgfHwgKHNjcm9sbFBlcmNlbnQgPCAzMyAmJiB0aGlzLnNjcm9sbERpcmVjdGlvbiA9PSAndXAnKSkge1xyXG4gICAgICAgIGxldCBtYXRjaGluZ0xpbmsgPSBlbC5nZXRBdHRyaWJ1dGUoXCJkYXRhLW1hdGNoaW5nLWxpbmtcIik7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChgLnNjcm9sbC1uYXYgYTpub3QoJHttYXRjaGluZ0xpbmt9KWApLmZvckVhY2goZWwgPT4gZWwuY2xhc3NMaXN0LnJlbW92ZShcInNjcm9sbC1uYXYtLWlzLWFjdGl2ZVwiKSk7XHJcbiAgICAgICAgLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihtYXRjaGluZ0xpbmspLmNsYXNzTGlzdC5hZGQoXCJzY3JvbGwtbmF2LS1pcy1hY3RpdmVcIik7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbm5ldyBTdGlja3lIZWFkZXIoKTsiLCJpbXBvcnQgdGhyb3R0bGUgZnJvbSAnbG9kYXNoL3Rocm90dGxlJztcclxuXHJcbmNsYXNzIFN0aWNreUhlYWRlciB7XHJcblxyXG5cdGNvbnN0cnVjdG9yKCkge1xyXG5cdFx0dGhpcy5zaXRlSGVhZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNpdGUtaGVhZGVyJyk7XHJcblx0XHR0aGlzLmV2ZW50cygpO1xyXG5cdH1cclxuXHJcblx0ZXZlbnRzKCkge1xyXG5cdFx0d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJzY3JvbGxcIiwgdGhyb3R0bGUoKCkgPT4gdGhpcy5zaG93U3RpY2t5T25TY3JvbGwoKSwgMjAwKSk7XHJcblx0fVxyXG5cclxuXHRzaG93U3RpY2t5T25TY3JvbGwoKSB7XHJcblx0XHRpZiAod2luZG93LnNjcm9sbFkgPiAxMDApIHtcclxuXHRcdFx0dGhpcy5zaXRlSGVhZGVyLmNsYXNzTGlzdC5hZGQoXCJzaXRlLWhlYWRlci0tb24tc2Nyb2xsXCIpO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0dGhpcy5zaXRlSGVhZGVyLmNsYXNzTGlzdC5yZW1vdmUoXCJzaXRlLWhlYWRlci0tb24tc2Nyb2xsXCIpO1xyXG5cdFx0fVxyXG5cdH1cclxufVxyXG5cclxubmV3IFN0aWNreUhlYWRlcigpOyIsIm1vZHVsZS5leHBvcnRzID0galF1ZXJ5OyJdLCJzb3VyY2VSb290IjoiIn0=