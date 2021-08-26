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
 // $.noConflict();
// var items = $(".list-wrapper .list-item");
// var numItems = items.length;
// var perPage = 4;
// items.slice(perPage).hide();
// var pageContainer = $('#pagination-container');
// pageContainer.pagination({
//     items: numItems,
//     itemsOnPage: perPage,
//     prevText: "&laquo;",
//     nextText: "&raquo;",
//     onPageClick: function (pageNumber) {
//         var showFrom = perPage * (pageNumber - 1);
//         var showTo = showFrom + perPage;
//         items.hide().slice(showFrom, showTo).show();
//     }
// });

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
}); // var items = jQuery(".budget-server-page tbody tr");
// var numItems = items.length;
// var perPage = 5;
// items.slice(perPage).hide();
// jQuery('#dedi-pagination-container').pagination({
//     items: numItems,
//     itemsOnPage: perPage,
//     prevText: "&laquo;",
//     nextText: "&raquo;",
//     onPageClick: function (pageNumber) {
//         var showFrom = perPage * (pageNumber - 1);
//         var showTo = showFrom + perPage;
//         items.hide().slice(showFrom, showTo).show();
//     }
// });

/* Registration Ajax */

/*
$('#register').on('click',function(e){
    e.preventDefault();
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
        action: 'register_action',
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
        type : "post",
        dataType : "json",
        url : ajaxurl,
        data : ajaxdata,
        success: function(response) {
            if(response.success =="1") {   
                jQuery("#message").removeClass('error_message').addClass('success_message');
                jQuery("#message").html(response.message);
                setTimeout(function(){
                    jQuery('#wp_signup_form').trigger("reset");
                    window.location.href = response.redirect_url;
                }, 3000);               
            }
            else{
                jQuery("#message").removeClass('success_message').addClass('error_message');
                jQuery("#message").html(response.message_data); 
            }            
        }
    });			
});   


// Login Customer - Ajax 
$('#login').on('click',function(e){
    e.preventDefault();
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
        type : "post",
        dataType : "json",
        url : ajaxurl,
        data : ajaxdata,
        success: function(response) {
            if(response.success =="1") {                  
                jQuery("#message").removeClass('error_message').addClass('success_message');
                jQuery("#message").html(response.message+' '+response.message_data);               
                setTimeout(function(){
                    jQuery('#wp_login_form').trigger("reset"); 
                    window.location.href = response.redirect_url;
                }, 2000);

                
            }
            else{
                jQuery("#message").removeClass('success_message').addClass('error_message');
                jQuery("#message").html(response.message_data); 
            }            
        }
    });			
});   
*/

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

module.exports = __webpack_require__(/*! C:\xampp\htdocs\dedicated-solutions.com\wp-content\themes\dedicatedsolutions\src\assets\js\bundle.js */"./src/assets/js/bundle.js");


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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fU3ltYm9sLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvX2Jhc2VHZXRUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fYmFzZVRyaW0uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fZnJlZUdsb2JhbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL19nZXRSYXdUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fb2JqZWN0VG9TdHJpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fcm9vdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL190cmltbWVkRW5kSW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9kZWJvdW5jZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL2lzT2JqZWN0LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNPYmplY3RMaWtlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNTeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9ub3cuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC90aHJvdHRsZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9idW5kbGUuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbG9naW5yZWdpc3RyYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbW9iaWxlbWVudS5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL2NvbXBvbmVudC9uYXZpZ2F0aW9uLmpzIiwid2VicGFjazovLy8uL3NyYy9hc3NldHMvanMvY29tcG9uZW50L3Njcm9sbG5hdmlnYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvc3RpY2t5aGVhZGVyLmpzIiwid2VicGFjazovLy9leHRlcm5hbCBcImpRdWVyeVwiIl0sIm5hbWVzIjpbInJvb3QiLCJyZXF1aXJlIiwiU3ltYm9sIiwibW9kdWxlIiwiZXhwb3J0cyIsImdldFJhd1RhZyIsIm9iamVjdFRvU3RyaW5nIiwibnVsbFRhZyIsInVuZGVmaW5lZFRhZyIsInN5bVRvU3RyaW5nVGFnIiwidG9TdHJpbmdUYWciLCJ1bmRlZmluZWQiLCJiYXNlR2V0VGFnIiwidmFsdWUiLCJPYmplY3QiLCJ0cmltbWVkRW5kSW5kZXgiLCJyZVRyaW1TdGFydCIsImJhc2VUcmltIiwic3RyaW5nIiwic2xpY2UiLCJyZXBsYWNlIiwiZnJlZUdsb2JhbCIsImdsb2JhbCIsIm9iamVjdFByb3RvIiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJuYXRpdmVPYmplY3RUb1N0cmluZyIsInRvU3RyaW5nIiwiaXNPd24iLCJjYWxsIiwidGFnIiwidW5tYXNrZWQiLCJlIiwicmVzdWx0IiwiZnJlZVNlbGYiLCJzZWxmIiwiRnVuY3Rpb24iLCJyZVdoaXRlc3BhY2UiLCJpbmRleCIsImxlbmd0aCIsInRlc3QiLCJjaGFyQXQiLCJpc09iamVjdCIsIm5vdyIsInRvTnVtYmVyIiwiRlVOQ19FUlJPUl9URVhUIiwibmF0aXZlTWF4IiwiTWF0aCIsIm1heCIsIm5hdGl2ZU1pbiIsIm1pbiIsImRlYm91bmNlIiwiZnVuYyIsIndhaXQiLCJvcHRpb25zIiwibGFzdEFyZ3MiLCJsYXN0VGhpcyIsIm1heFdhaXQiLCJ0aW1lcklkIiwibGFzdENhbGxUaW1lIiwibGFzdEludm9rZVRpbWUiLCJsZWFkaW5nIiwibWF4aW5nIiwidHJhaWxpbmciLCJUeXBlRXJyb3IiLCJpbnZva2VGdW5jIiwidGltZSIsImFyZ3MiLCJ0aGlzQXJnIiwiYXBwbHkiLCJsZWFkaW5nRWRnZSIsInNldFRpbWVvdXQiLCJ0aW1lckV4cGlyZWQiLCJyZW1haW5pbmdXYWl0IiwidGltZVNpbmNlTGFzdENhbGwiLCJ0aW1lU2luY2VMYXN0SW52b2tlIiwidGltZVdhaXRpbmciLCJzaG91bGRJbnZva2UiLCJ0cmFpbGluZ0VkZ2UiLCJjYW5jZWwiLCJjbGVhclRpbWVvdXQiLCJmbHVzaCIsImRlYm91bmNlZCIsImlzSW52b2tpbmciLCJhcmd1bWVudHMiLCJ0eXBlIiwiaXNPYmplY3RMaWtlIiwic3ltYm9sVGFnIiwiaXNTeW1ib2wiLCJEYXRlIiwidGhyb3R0bGUiLCJOQU4iLCJyZUlzQmFkSGV4IiwicmVJc0JpbmFyeSIsInJlSXNPY3RhbCIsImZyZWVQYXJzZUludCIsInBhcnNlSW50Iiwib3RoZXIiLCJ2YWx1ZU9mIiwiaXNCaW5hcnkiLCJnIiwid2luZG93IiwiJGZvcm0iLCIkIiwiJHN1Y2Nlc3NNc2ciLCJ2YWxpZGF0b3IiLCJhZGRNZXRob2QiLCJlbGVtZW50Iiwib3B0aW9uYWwiLCJtYXRjaCIsInZhbGlkYXRlIiwiZXJyb3JFbGVtZW50IiwicnVsZXMiLCJmaXJzdE5hbWUiLCJyZXF1aXJlZCIsIm1pbmxlbmd0aCIsImxldHRlcnMiLCJsYXN0TmFtZSIsImVtYWlsIiwidXNlcnBhc3N3b3JkIiwiY29uZmlybVBhc3N3b3JkIiwiZXF1YWxUbyIsIm1lc3NhZ2VzIiwic3VibWl0SGFuZGxlciIsImFjdGlvbiIsImZvcm1maXJzdE5hbWUiLCJqUXVlcnkiLCJ2YWwiLCJmb3JtbGFzdE5hbWUiLCJmb3JtZW1haWwiLCJmb3JtYWx0RW1haWwiLCJmb3JtcGhvbmUiLCJmb3JtYWx0UGhvbmUiLCJmb3JtY291bnRyeSIsImZvcm1zdGF0ZSIsImZvcm1hZGRyZXNzIiwiZm9ybWNpdHkiLCJmb3JtemlwQ29kZSIsImZvcm1jb21wYW55TmFtZSIsImZvcm1jb21wYW55VXJsIiwiZm9ybXBhc3N3b3JkIiwiZm9ybWNvbmZpcm1QYXNzd29yZCIsImFqYXhkYXRhIiwiYWx0RW1haWwiLCJwaG9uZSIsImFsdFBob25lIiwiY291bnRyeSIsInN0YXRlIiwiYWRkcmVzcyIsImNpdHkiLCJ6aXBDb2RlIiwiY29tcGFueU5hbWUiLCJjb21wYW55VXJsIiwicGFzc3dvcmQiLCJhamF4IiwiZGF0YVR5cGUiLCJ1cmwiLCJhamF4dXJsIiwiZGF0YSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsInJlbW92ZUNsYXNzIiwiYWRkQ2xhc3MiLCJodG1sIiwibWVzc2FnZSIsInNob3ciLCJ0cmlnZ2VyIiwibG9jYXRpb24iLCJocmVmIiwicmVkaXJlY3RfdXJsIiwiaGlkZSIsIm1lc3NhZ2VfZGF0YSIsIiRsb2dpbmZvcm0iLCIkbG9naW5Nc2ciLCJ1c2VyRW1haWwiLCJyZW1lbWJlciIsInVzZXJMb2dpbiIsIm9uIiwicmVjZW50IiwiaXMiLCJhdHRyIiwiaXRlbXMiLCJudW1JdGVtcyIsInBlclBhZ2UiLCJwYWdpbmF0aW9uIiwiaXRlbXNPblBhZ2UiLCJwcmV2VGV4dCIsIm5leHRUZXh0IiwiY3NzU3R5bGUiLCJvblBhZ2VDbGljayIsInBhZ2VOdW1iZXIiLCJzaG93RnJvbSIsInNob3dUbyIsIml0ZW1zX3BybyIsIm51bUl0ZW1zX3BybyIsInBlclBhZ2VfcHJvIiwiaXRlbXNfZW50IiwibnVtSXRlbXNfZW50IiwicGVyUGFnZV9lbnQiLCJoYXNoIiwiTW9iaWxlTWVudSIsIm1lbnVJY29uIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibWVudUNvbnRlbnQiLCJldmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlVGhlTWVudSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImN1cnJlbnRUYXJnZXQiLCJwYXJlbnRzIiwiZmluZCIsIlN0aWNreUhlYWRlciIsInBhZ2VTZWN0aW9ucyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJicm93c2VySGVpZ2h0IiwiaW5uZXJIZWlnaHQiLCJwcmV2aW91c1Njcm9sbFkiLCJzY3JvbGxZIiwicnVuT25TY3JvbGwiLCJkZXRlcm1pbmVTY3JvbGxEaXJlY3Rpb24iLCJmb3JFYWNoIiwiZWwiLCJjYWxjU2VjdGlvbiIsInNjcm9sbERpcmVjdGlvbiIsIm9mZnNldFRvcCIsIm9mZnNldEhlaWdodCIsInNjcm9sbFBlcmNlbnQiLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ0b3AiLCJtYXRjaGluZ0xpbmsiLCJnZXRBdHRyaWJ1dGUiLCJyZW1vdmUiLCJzaXRlSGVhZGVyIiwic2hvd1N0aWNreU9uU2Nyb2xsIiwiYWRkIl0sIm1hcHBpbmdzIjoiO1FBQUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7OztRQUdBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSwwQ0FBMEMsZ0NBQWdDO1FBQzFFO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0Esd0RBQXdELGtCQUFrQjtRQUMxRTtRQUNBLGlEQUFpRCxjQUFjO1FBQy9EOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQSx5Q0FBeUMsaUNBQWlDO1FBQzFFLGdIQUFnSCxtQkFBbUIsRUFBRTtRQUNySTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLDJCQUEyQiwwQkFBMEIsRUFBRTtRQUN2RCxpQ0FBaUMsZUFBZTtRQUNoRDtRQUNBO1FBQ0E7O1FBRUE7UUFDQSxzREFBc0QsK0RBQStEOztRQUVySDtRQUNBOzs7UUFHQTtRQUNBOzs7Ozs7Ozs7Ozs7QUNsRkEsSUFBSUEsSUFBSSxHQUFHQyxtQkFBTyxDQUFDLCtDQUFELENBQWxCO0FBRUE7OztBQUNBLElBQUlDLE9B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Q0FBd0IsUUFBeEIsRUFBa0NwSCxzREFBUSxDQUFDO0FBQUEsZUFBTSxLQUFJLENBQUNpSixrQkFBTCxFQUFOO0FBQUEsT0FBRCxFQUFrQyxHQUFsQyxDQUExQztBQUNBOzs7V0FFRCw4QkFBcUI7QUFDcEIsVUFBSXRJLE1BQU0sQ0FBQ3NILE9BQVAsR0FBaUIsR0FBckIsRUFBMEI7QUFDekIsYUFBS2UsVUFBTCxDQUFnQjFCLFNBQWhCLENBQTBCNEIsR0FBMUIsQ0FBOEIsd0JBQTlCO0FBQ0EsT0FGRCxNQUVPO0FBQ04sYUFBS0YsVUFBTCxDQUFnQjFCLFNBQWhCLENBQTBCeUIsTUFBMUIsQ0FBaUMsd0JBQWpDO0FBQ0E7QUFDRDs7Ozs7O0FBR0YsSUFBSXBCLFlBQUosRzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUN0QkEsd0IiLCJmaWxlIjoiYnVuZGxlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDApO1xuIiwidmFyIHJvb3QgPSByZXF1aXJlKCcuL19yb290Jyk7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIFN5bWJvbCA9IHJvb3QuU3ltYm9sO1xuXG5tb2R1bGUuZXhwb3J0cyA9IFN5bWJvbDtcbiIsInZhciBTeW1ib2wgPSByZXF1aXJlKCcuL19TeW1ib2wnKSxcbiAgICBnZXRSYXdUYWcgPSByZXF1aXJlKCcuL19nZXRSYXdUYWcnKSxcbiAgICBvYmplY3RUb1N0cmluZyA9IHJlcXVpcmUoJy4vX29iamVjdFRvU3RyaW5nJyk7XG5cbi8qKiBgT2JqZWN0I3RvU3RyaW5nYCByZXN1bHQgcmVmZXJlbmNlcy4gKi9cbnZhciBudWxsVGFnID0gJ1tvYmplY3QgTnVsbF0nLFxuICAgIHVuZGVmaW5lZFRhZyA9ICdbb2JqZWN0IFVuZGVmaW5lZF0nO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1Ub1N0cmluZ1RhZyA9IFN5bWJvbCA/IFN5bWJvbC50b1N0cmluZ1RhZyA6IHVuZGVmaW5lZDtcblxuLyoqXG4gKiBUaGUgYmFzZSBpbXBsZW1lbnRhdGlvbiBvZiBgZ2V0VGFnYCB3aXRob3V0IGZhbGxiYWNrcyBmb3IgYnVnZ3kgZW52aXJvbm1lbnRzLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBxdWVyeS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGJhc2VHZXRUYWcodmFsdWUpIHtcbiAgaWYgKHZhbHVlID09IG51bGwpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IHVuZGVmaW5lZCA/IHVuZGVmaW5lZFRhZyA6IG51bGxUYWc7XG4gIH1cbiAgcmV0dXJuIChzeW1Ub1N0cmluZ1RhZyAmJiBzeW1Ub1N0cmluZ1RhZyBpbiBPYmplY3QodmFsdWUpKVxuICAgID8gZ2V0UmF3VGFnKHZhbHVlKVxuICAgIDogb2JqZWN0VG9TdHJpbmcodmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGJhc2VHZXRUYWc7XG4iLCJ2YXIgdHJpbW1lZEVuZEluZGV4ID0gcmVxdWlyZSgnLi9fdHJpbW1lZEVuZEluZGV4Jyk7XG5cbi8qKiBVc2VkIHRvIG1hdGNoIGxlYWRpbmcgd2hpdGVzcGFjZS4gKi9cbnZhciByZVRyaW1TdGFydCA9IC9eXFxzKy87XG5cbi8qKlxuICogVGhlIGJhc2UgaW1wbGVtZW50YXRpb24gb2YgYF8udHJpbWAuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byB0cmltLlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgdHJpbW1lZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIGJhc2VUcmltKHN0cmluZykge1xuICByZXR1cm4gc3RyaW5nXG4gICAgPyBzdHJpbmcuc2xpY2UoMCwgdHJpbW1lZEVuZEluZGV4KHN0cmluZykgKyAxKS5yZXBsYWNlKHJlVHJpbVN0YXJ0LCAnJylcbiAgICA6IHN0cmluZztcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBiYXNlVHJpbTtcbiIsIi8qKiBEZXRlY3QgZnJlZSB2YXJpYWJsZSBgZ2xvYmFsYCBmcm9tIE5vZGUuanMuICovXG52YXIgZnJlZUdsb2JhbCA9IHR5cGVvZiBnbG9iYWwgPT0gJ29iamVjdCcgJiYgZ2xvYmFsICYmIGdsb2JhbC5PYmplY3QgPT09IE9iamVjdCAmJiBnbG9iYWw7XG5cbm1vZHVsZS5leHBvcnRzID0gZnJlZUdsb2JhbDtcbiIsInZhciBTeW1ib2wgPSByZXF1aXJlKCcuL19TeW1ib2wnKTtcblxuLyoqIFVzZWQgZm9yIGJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzLiAqL1xudmFyIG9iamVjdFByb3RvID0gT2JqZWN0LnByb3RvdHlwZTtcblxuLyoqIFVzZWQgdG8gY2hlY2sgb2JqZWN0cyBmb3Igb3duIHByb3BlcnRpZXMuICovXG52YXIgaGFzT3duUHJvcGVydHkgPSBvYmplY3RQcm90by5oYXNPd25Qcm9wZXJ0eTtcblxuLyoqXG4gKiBVc2VkIHRvIHJlc29sdmUgdGhlXG4gKiBbYHRvU3RyaW5nVGFnYF0oaHR0cDovL2VjbWEtaW50ZXJuYXRpb25hbC5vcmcvZWNtYS0yNjIvNy4wLyNzZWMtb2JqZWN0LnByb3RvdHlwZS50b3N0cmluZylcbiAqIG9mIHZhbHVlcy5cbiAqL1xudmFyIG5hdGl2ZU9iamVjdFRvU3RyaW5nID0gb2JqZWN0UHJvdG8udG9TdHJpbmc7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIHN5bVRvU3RyaW5nVGFnID0gU3ltYm9sID8gU3ltYm9sLnRvU3RyaW5nVGFnIDogdW5kZWZpbmVkO1xuXG4vKipcbiAqIEEgc3BlY2lhbGl6ZWQgdmVyc2lvbiBvZiBgYmFzZUdldFRhZ2Agd2hpY2ggaWdub3JlcyBgU3ltYm9sLnRvU3RyaW5nVGFnYCB2YWx1ZXMuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHF1ZXJ5LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgcmF3IGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGdldFJhd1RhZyh2YWx1ZSkge1xuICB2YXIgaXNPd24gPSBoYXNPd25Qcm9wZXJ0eS5jYWxsKHZhbHVlLCBzeW1Ub1N0cmluZ1RhZyksXG4gICAgICB0YWcgPSB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ107XG5cbiAgdHJ5IHtcbiAgICB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ10gPSB1bmRlZmluZWQ7XG4gICAgdmFyIHVubWFza2VkID0gdHJ1ZTtcbiAgfSBjYXRjaCAoZSkge31cblxuICB2YXIgcmVzdWx0ID0gbmF0aXZlT2JqZWN0VG9TdHJpbmcuY2FsbCh2YWx1ZSk7XG4gIGlmICh1bm1hc2tlZCkge1xuICAgIGlmIChpc093bikge1xuICAgICAgdmFsdWVbc3ltVG9TdHJpbmdUYWddID0gdGFnO1xuICAgIH0gZWxzZSB7XG4gICAgICBkZWxldGUgdmFsdWVbc3ltVG9TdHJpbmdUYWddO1xuICAgIH1cbiAgfVxuICByZXR1cm4gcmVzdWx0O1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGdldFJhd1RhZztcbiIsIi8qKiBVc2VkIGZvciBidWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcy4gKi9cbnZhciBvYmplY3RQcm90byA9IE9iamVjdC5wcm90b3R5cGU7XG5cbi8qKlxuICogVXNlZCB0byByZXNvbHZlIHRoZVxuICogW2B0b1N0cmluZ1RhZ2BdKGh0dHA6Ly9lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLW9iamVjdC5wcm90b3R5cGUudG9zdHJpbmcpXG4gKiBvZiB2YWx1ZXMuXG4gKi9cbnZhciBuYXRpdmVPYmplY3RUb1N0cmluZyA9IG9iamVjdFByb3RvLnRvU3RyaW5nO1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBzdHJpbmcgdXNpbmcgYE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjb252ZXJ0LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgY29udmVydGVkIHN0cmluZy5cbiAqL1xuZnVuY3Rpb24gb2JqZWN0VG9TdHJpbmcodmFsdWUpIHtcbiAgcmV0dXJuIG5hdGl2ZU9iamVjdFRvU3RyaW5nLmNhbGwodmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IG9iamVjdFRvU3RyaW5nO1xuIiwidmFyIGZyZWVHbG9iYWwgPSByZXF1aXJlKCcuL19mcmVlR2xvYmFsJyk7XG5cbi8qKiBEZXRlY3QgZnJlZSB2YXJpYWJsZSBgc2VsZmAuICovXG52YXIgZnJlZVNlbGYgPSB0eXBlb2Ygc2VsZiA9PSAnb2JqZWN0JyAmJiBzZWxmICYmIHNlbGYuT2JqZWN0ID09PSBPYmplY3QgJiYgc2VsZjtcblxuLyoqIFVzZWQgYXMgYSByZWZlcmVuY2UgdG8gdGhlIGdsb2JhbCBvYmplY3QuICovXG52YXIgcm9vdCA9IGZyZWVHbG9iYWwgfHwgZnJlZVNlbGYgfHwgRnVuY3Rpb24oJ3JldHVybiB0aGlzJykoKTtcblxubW9kdWxlLmV4cG9ydHMgPSByb290O1xuIiwiLyoqIFVzZWQgdG8gbWF0Y2ggYSBzaW5nbGUgd2hpdGVzcGFjZSBjaGFyYWN0ZXIuICovXG52YXIgcmVXaGl0ZXNwYWNlID0gL1xccy87XG5cbi8qKlxuICogVXNlZCBieSBgXy50cmltYCBhbmQgYF8udHJpbUVuZGAgdG8gZ2V0IHRoZSBpbmRleCBvZiB0aGUgbGFzdCBub24td2hpdGVzcGFjZVxuICogY2hhcmFjdGVyIG9mIGBzdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0ge3N0cmluZ30gc3RyaW5nIFRoZSBzdHJpbmcgdG8gaW5zcGVjdC5cbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIGluZGV4IG9mIHRoZSBsYXN0IG5vbi13aGl0ZXNwYWNlIGNoYXJhY3Rlci5cbiAqL1xuZnVuY3Rpb24gdHJpbW1lZEVuZEluZGV4KHN0cmluZykge1xuICB2YXIgaW5kZXggPSBzdHJpbmcubGVuZ3RoO1xuXG4gIHdoaWxlIChpbmRleC0tICYmIHJlV2hpdGVzcGFjZS50ZXN0KHN0cmluZy5jaGFyQXQoaW5kZXgpKSkge31cbiAgcmV0dXJuIGluZGV4O1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRyaW1tZWRFbmRJbmRleDtcbiIsInZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKSxcbiAgICBub3cgPSByZXF1aXJlKCcuL25vdycpLFxuICAgIHRvTnVtYmVyID0gcmVxdWlyZSgnLi90b051bWJlcicpO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKiBCdWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcyBmb3IgdGhvc2Ugd2l0aCB0aGUgc2FtZSBuYW1lIGFzIG90aGVyIGBsb2Rhc2hgIG1ldGhvZHMuICovXG52YXIgbmF0aXZlTWF4ID0gTWF0aC5tYXgsXG4gICAgbmF0aXZlTWluID0gTWF0aC5taW47XG5cbi8qKlxuICogQ3JlYXRlcyBhIGRlYm91bmNlZCBmdW5jdGlvbiB0aGF0IGRlbGF5cyBpbnZva2luZyBgZnVuY2AgdW50aWwgYWZ0ZXIgYHdhaXRgXG4gKiBtaWxsaXNlY29uZHMgaGF2ZSBlbGFwc2VkIHNpbmNlIHRoZSBsYXN0IHRpbWUgdGhlIGRlYm91bmNlZCBmdW5jdGlvbiB3YXNcbiAqIGludm9rZWQuIFRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgIG1ldGhvZCB0byBjYW5jZWxcbiAqIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvIGltbWVkaWF0ZWx5IGludm9rZSB0aGVtLlxuICogUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2Agc2hvdWxkIGJlIGludm9rZWQgb24gdGhlXG4gKiBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGAgdGltZW91dC4gVGhlIGBmdW5jYCBpcyBpbnZva2VkXG4gKiB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uLiBTdWJzZXF1ZW50XG4gKiBjYWxscyB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uIHJldHVybiB0aGUgcmVzdWx0IG9mIHRoZSBsYXN0IGBmdW5jYFxuICogaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIGRlYm91bmNlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy5kZWJvdW5jZWAgYW5kIGBfLnRocm90dGxlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIGRlYm91bmNlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIGRlbGF5LlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9ZmFsc2VdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgbGVhZGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0LlxuICogQHBhcmFtIHtudW1iZXJ9IFtvcHRpb25zLm1heFdhaXRdXG4gKiAgVGhlIG1heGltdW0gdGltZSBgZnVuY2AgaXMgYWxsb3dlZCB0byBiZSBkZWxheWVkIGJlZm9yZSBpdCdzIGludm9rZWQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IGRlYm91bmNlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgY29zdGx5IGNhbGN1bGF0aW9ucyB3aGlsZSB0aGUgd2luZG93IHNpemUgaXMgaW4gZmx1eC5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdyZXNpemUnLCBfLmRlYm91bmNlKGNhbGN1bGF0ZUxheW91dCwgMTUwKSk7XG4gKlxuICogLy8gSW52b2tlIGBzZW5kTWFpbGAgd2hlbiBjbGlja2VkLCBkZWJvdW5jaW5nIHN1YnNlcXVlbnQgY2FsbHMuXG4gKiBqUXVlcnkoZWxlbWVudCkub24oJ2NsaWNrJywgXy5kZWJvdW5jZShzZW5kTWFpbCwgMzAwLCB7XG4gKiAgICdsZWFkaW5nJzogdHJ1ZSxcbiAqICAgJ3RyYWlsaW5nJzogZmFsc2VcbiAqIH0pKTtcbiAqXG4gKiAvLyBFbnN1cmUgYGJhdGNoTG9nYCBpcyBpbnZva2VkIG9uY2UgYWZ0ZXIgMSBzZWNvbmQgb2YgZGVib3VuY2VkIGNhbGxzLlxuICogdmFyIGRlYm91bmNlZCA9IF8uZGVib3VuY2UoYmF0Y2hMb2csIDI1MCwgeyAnbWF4V2FpdCc6IDEwMDAgfSk7XG4gKiB2YXIgc291cmNlID0gbmV3IEV2ZW50U291cmNlKCcvc3RyZWFtJyk7XG4gKiBqUXVlcnkoc291cmNlKS5vbignbWVzc2FnZScsIGRlYm91bmNlZCk7XG4gKlxuICogLy8gQ2FuY2VsIHRoZSB0cmFpbGluZyBkZWJvdW5jZWQgaW52b2NhdGlvbi5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdwb3BzdGF0ZScsIGRlYm91bmNlZC5jYW5jZWwpO1xuICovXG5mdW5jdGlvbiBkZWJvdW5jZShmdW5jLCB3YWl0LCBvcHRpb25zKSB7XG4gIHZhciBsYXN0QXJncyxcbiAgICAgIGxhc3RUaGlzLFxuICAgICAgbWF4V2FpdCxcbiAgICAgIHJlc3VsdCxcbiAgICAgIHRpbWVySWQsXG4gICAgICBsYXN0Q2FsbFRpbWUsXG4gICAgICBsYXN0SW52b2tlVGltZSA9IDAsXG4gICAgICBsZWFkaW5nID0gZmFsc2UsXG4gICAgICBtYXhpbmcgPSBmYWxzZSxcbiAgICAgIHRyYWlsaW5nID0gdHJ1ZTtcblxuICBpZiAodHlwZW9mIGZ1bmMgIT0gJ2Z1bmN0aW9uJykge1xuICAgIHRocm93IG5ldyBUeXBlRXJyb3IoRlVOQ19FUlJPUl9URVhUKTtcbiAgfVxuICB3YWl0ID0gdG9OdW1iZXIod2FpdCkgfHwgMDtcbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICEhb3B0aW9ucy5sZWFkaW5nO1xuICAgIG1heGluZyA9ICdtYXhXYWl0JyBpbiBvcHRpb25zO1xuICAgIG1heFdhaXQgPSBtYXhpbmcgPyBuYXRpdmVNYXgodG9OdW1iZXIob3B0aW9ucy5tYXhXYWl0KSB8fCAwLCB3YWl0KSA6IG1heFdhaXQ7XG4gICAgdHJhaWxpbmcgPSAndHJhaWxpbmcnIGluIG9wdGlvbnMgPyAhIW9wdGlvbnMudHJhaWxpbmcgOiB0cmFpbGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIGludm9rZUZ1bmModGltZSkge1xuICAgIHZhciBhcmdzID0gbGFzdEFyZ3MsXG4gICAgICAgIHRoaXNBcmcgPSBsYXN0VGhpcztcblxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgbGFzdEludm9rZVRpbWUgPSB0aW1lO1xuICAgIHJlc3VsdCA9IGZ1bmMuYXBwbHkodGhpc0FyZywgYXJncyk7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGxlYWRpbmdFZGdlKHRpbWUpIHtcbiAgICAvLyBSZXNldCBhbnkgYG1heFdhaXRgIHRpbWVyLlxuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICAvLyBTdGFydCB0aGUgdGltZXIgZm9yIHRoZSB0cmFpbGluZyBlZGdlLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgLy8gSW52b2tlIHRoZSBsZWFkaW5nIGVkZ2UuXG4gICAgcmV0dXJuIGxlYWRpbmcgPyBpbnZva2VGdW5jKHRpbWUpIDogcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gcmVtYWluaW5nV2FpdCh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZSxcbiAgICAgICAgdGltZVdhaXRpbmcgPSB3YWl0IC0gdGltZVNpbmNlTGFzdENhbGw7XG5cbiAgICByZXR1cm4gbWF4aW5nXG4gICAgICA/IG5hdGl2ZU1pbih0aW1lV2FpdGluZywgbWF4V2FpdCAtIHRpbWVTaW5jZUxhc3RJbnZva2UpXG4gICAgICA6IHRpbWVXYWl0aW5nO1xuICB9XG5cbiAgZnVuY3Rpb24gc2hvdWxkSW52b2tlKHRpbWUpIHtcbiAgICB2YXIgdGltZVNpbmNlTGFzdENhbGwgPSB0aW1lIC0gbGFzdENhbGxUaW1lLFxuICAgICAgICB0aW1lU2luY2VMYXN0SW52b2tlID0gdGltZSAtIGxhc3RJbnZva2VUaW1lO1xuXG4gICAgLy8gRWl0aGVyIHRoaXMgaXMgdGhlIGZpcnN0IGNhbGwsIGFjdGl2aXR5IGhhcyBzdG9wcGVkIGFuZCB3ZSdyZSBhdCB0aGVcbiAgICAvLyB0cmFpbGluZyBlZGdlLCB0aGUgc3lzdGVtIHRpbWUgaGFzIGdvbmUgYmFja3dhcmRzIGFuZCB3ZSdyZSB0cmVhdGluZ1xuICAgIC8vIGl0IGFzIHRoZSB0cmFpbGluZyBlZGdlLCBvciB3ZSd2ZSBoaXQgdGhlIGBtYXhXYWl0YCBsaW1pdC5cbiAgICByZXR1cm4gKGxhc3RDYWxsVGltZSA9PT0gdW5kZWZpbmVkIHx8ICh0aW1lU2luY2VMYXN0Q2FsbCA+PSB3YWl0KSB8fFxuICAgICAgKHRpbWVTaW5jZUxhc3RDYWxsIDwgMCkgfHwgKG1heGluZyAmJiB0aW1lU2luY2VMYXN0SW52b2tlID49IG1heFdhaXQpKTtcbiAgfVxuXG4gIGZ1bmN0aW9uIHRpbWVyRXhwaXJlZCgpIHtcbiAgICB2YXIgdGltZSA9IG5vdygpO1xuICAgIGlmIChzaG91bGRJbnZva2UodGltZSkpIHtcbiAgICAgIHJldHVybiB0cmFpbGluZ0VkZ2UodGltZSk7XG4gICAgfVxuICAgIC8vIFJlc3RhcnQgdGhlIHRpbWVyLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgcmVtYWluaW5nV2FpdCh0aW1lKSk7XG4gIH1cblxuICBmdW5jdGlvbiB0cmFpbGluZ0VkZ2UodGltZSkge1xuICAgIHRpbWVySWQgPSB1bmRlZmluZWQ7XG5cbiAgICAvLyBPbmx5IGludm9rZSBpZiB3ZSBoYXZlIGBsYXN0QXJnc2Agd2hpY2ggbWVhbnMgYGZ1bmNgIGhhcyBiZWVuXG4gICAgLy8gZGVib3VuY2VkIGF0IGxlYXN0IG9uY2UuXG4gICAgaWYgKHRyYWlsaW5nICYmIGxhc3RBcmdzKSB7XG4gICAgICByZXR1cm4gaW52b2tlRnVuYyh0aW1lKTtcbiAgICB9XG4gICAgbGFzdEFyZ3MgPSBsYXN0VGhpcyA9IHVuZGVmaW5lZDtcbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gY2FuY2VsKCkge1xuICAgIGlmICh0aW1lcklkICE9PSB1bmRlZmluZWQpIHtcbiAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICB9XG4gICAgbGFzdEludm9rZVRpbWUgPSAwO1xuICAgIGxhc3RBcmdzID0gbGFzdENhbGxUaW1lID0gbGFzdFRoaXMgPSB0aW1lcklkID0gdW5kZWZpbmVkO1xuICB9XG5cbiAgZnVuY3Rpb24gZmx1c2goKSB7XG4gICAgcmV0dXJuIHRpbWVySWQgPT09IHVuZGVmaW5lZCA/IHJlc3VsdCA6IHRyYWlsaW5nRWRnZShub3coKSk7XG4gIH1cblxuICBmdW5jdGlvbiBkZWJvdW5jZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKSxcbiAgICAgICAgaXNJbnZva2luZyA9IHNob3VsZEludm9rZSh0aW1lKTtcblxuICAgIGxhc3RBcmdzID0gYXJndW1lbnRzO1xuICAgIGxhc3RUaGlzID0gdGhpcztcbiAgICBsYXN0Q2FsbFRpbWUgPSB0aW1lO1xuXG4gICAgaWYgKGlzSW52b2tpbmcpIHtcbiAgICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIGxlYWRpbmdFZGdlKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgICBpZiAobWF4aW5nKSB7XG4gICAgICAgIC8vIEhhbmRsZSBpbnZvY2F0aW9ucyBpbiBhIHRpZ2h0IGxvb3AuXG4gICAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICAgICAgcmV0dXJuIGludm9rZUZ1bmMobGFzdENhbGxUaW1lKTtcbiAgICAgIH1cbiAgICB9XG4gICAgaWYgKHRpbWVySWQgPT09IHVuZGVmaW5lZCkge1xuICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICB9XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuICBkZWJvdW5jZWQuY2FuY2VsID0gY2FuY2VsO1xuICBkZWJvdW5jZWQuZmx1c2ggPSBmbHVzaDtcbiAgcmV0dXJuIGRlYm91bmNlZDtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBkZWJvdW5jZTtcbiIsIi8qKlxuICogQ2hlY2tzIGlmIGB2YWx1ZWAgaXMgdGhlXG4gKiBbbGFuZ3VhZ2UgdHlwZV0oaHR0cDovL3d3dy5lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLWVjbWFzY3JpcHQtbGFuZ3VhZ2UtdHlwZXMpXG4gKiBvZiBgT2JqZWN0YC4gKGUuZy4gYXJyYXlzLCBmdW5jdGlvbnMsIG9iamVjdHMsIHJlZ2V4ZXMsIGBuZXcgTnVtYmVyKDApYCwgYW5kIGBuZXcgU3RyaW5nKCcnKWApXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAwLjEuMFxuICogQGNhdGVnb3J5IExhbmdcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIGNoZWNrLlxuICogQHJldHVybnMge2Jvb2xlYW59IFJldHVybnMgYHRydWVgIGlmIGB2YWx1ZWAgaXMgYW4gb2JqZWN0LCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNPYmplY3Qoe30pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KF8ubm9vcCk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0KHZhbHVlKSB7XG4gIHZhciB0eXBlID0gdHlwZW9mIHZhbHVlO1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiAodHlwZSA9PSAnb2JqZWN0JyB8fCB0eXBlID09ICdmdW5jdGlvbicpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzT2JqZWN0O1xuIiwiLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZS4gQSB2YWx1ZSBpcyBvYmplY3QtbGlrZSBpZiBpdCdzIG5vdCBgbnVsbGBcbiAqIGFuZCBoYXMgYSBgdHlwZW9mYCByZXN1bHQgb2YgXCJvYmplY3RcIi5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZSwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZSh7fSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdExpa2UoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShfLm5vb3ApO1xuICogLy8gPT4gZmFsc2VcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0TGlrZSh2YWx1ZSkge1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiB0eXBlb2YgdmFsdWUgPT0gJ29iamVjdCc7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gaXNPYmplY3RMaWtlO1xuIiwidmFyIGJhc2VHZXRUYWcgPSByZXF1aXJlKCcuL19iYXNlR2V0VGFnJyksXG4gICAgaXNPYmplY3RMaWtlID0gcmVxdWlyZSgnLi9pc09iamVjdExpa2UnKTtcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIHN5bWJvbFRhZyA9ICdbb2JqZWN0IFN5bWJvbF0nO1xuXG4vKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIGNsYXNzaWZpZWQgYXMgYSBgU3ltYm9sYCBwcmltaXRpdmUgb3Igb2JqZWN0LlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGEgc3ltYm9sLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNTeW1ib2woU3ltYm9sLml0ZXJhdG9yKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzU3ltYm9sKCdhYmMnKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzU3ltYm9sKHZhbHVlKSB7XG4gIHJldHVybiB0eXBlb2YgdmFsdWUgPT0gJ3N5bWJvbCcgfHxcbiAgICAoaXNPYmplY3RMaWtlKHZhbHVlKSAmJiBiYXNlR2V0VGFnKHZhbHVlKSA9PSBzeW1ib2xUYWcpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzU3ltYm9sO1xuIiwidmFyIHJvb3QgPSByZXF1aXJlKCcuL19yb290Jyk7XG5cbi8qKlxuICogR2V0cyB0aGUgdGltZXN0YW1wIG9mIHRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRoYXQgaGF2ZSBlbGFwc2VkIHNpbmNlXG4gKiB0aGUgVW5peCBlcG9jaCAoMSBKYW51YXJ5IDE5NzAgMDA6MDA6MDAgVVRDKS5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDIuNC4wXG4gKiBAY2F0ZWdvcnkgRGF0ZVxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgdGltZXN0YW1wLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmRlZmVyKGZ1bmN0aW9uKHN0YW1wKSB7XG4gKiAgIGNvbnNvbGUubG9nKF8ubm93KCkgLSBzdGFtcCk7XG4gKiB9LCBfLm5vdygpKTtcbiAqIC8vID0+IExvZ3MgdGhlIG51bWJlciBvZiBtaWxsaXNlY29uZHMgaXQgdG9vayBmb3IgdGhlIGRlZmVycmVkIGludm9jYXRpb24uXG4gKi9cbnZhciBub3cgPSBmdW5jdGlvbigpIHtcbiAgcmV0dXJuIHJvb3QuRGF0ZS5ub3coKTtcbn07XG5cbm1vZHVsZS5leHBvcnRzID0gbm93O1xuIiwidmFyIGRlYm91bmNlID0gcmVxdWlyZSgnLi9kZWJvdW5jZScpLFxuICAgIGlzT2JqZWN0ID0gcmVxdWlyZSgnLi9pc09iamVjdCcpO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKipcbiAqIENyZWF0ZXMgYSB0aHJvdHRsZWQgZnVuY3Rpb24gdGhhdCBvbmx5IGludm9rZXMgYGZ1bmNgIGF0IG1vc3Qgb25jZSBwZXJcbiAqIGV2ZXJ5IGB3YWl0YCBtaWxsaXNlY29uZHMuIFRoZSB0aHJvdHRsZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgXG4gKiBtZXRob2QgdG8gY2FuY2VsIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvXG4gKiBpbW1lZGlhdGVseSBpbnZva2UgdGhlbS4gUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2BcbiAqIHNob3VsZCBiZSBpbnZva2VkIG9uIHRoZSBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGBcbiAqIHRpbWVvdXQuIFRoZSBgZnVuY2AgaXMgaW52b2tlZCB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGVcbiAqIHRocm90dGxlZCBmdW5jdGlvbi4gU3Vic2VxdWVudCBjYWxscyB0byB0aGUgdGhyb3R0bGVkIGZ1bmN0aW9uIHJldHVybiB0aGVcbiAqIHJlc3VsdCBvZiB0aGUgbGFzdCBgZnVuY2AgaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIHRocm90dGxlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy50aHJvdHRsZWAgYW5kIGBfLmRlYm91bmNlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIHRocm90dGxlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIHRocm90dGxlIGludm9jYXRpb25zIHRvLlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9dHJ1ZV1cbiAqICBTcGVjaWZ5IGludm9raW5nIG9uIHRoZSBsZWFkaW5nIGVkZ2Ugb2YgdGhlIHRpbWVvdXQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IHRocm90dGxlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgZXhjZXNzaXZlbHkgdXBkYXRpbmcgdGhlIHBvc2l0aW9uIHdoaWxlIHNjcm9sbGluZy5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdzY3JvbGwnLCBfLnRocm90dGxlKHVwZGF0ZVBvc2l0aW9uLCAxMDApKTtcbiAqXG4gKiAvLyBJbnZva2UgYHJlbmV3VG9rZW5gIHdoZW4gdGhlIGNsaWNrIGV2ZW50IGlzIGZpcmVkLCBidXQgbm90IG1vcmUgdGhhbiBvbmNlIGV2ZXJ5IDUgbWludXRlcy5cbiAqIHZhciB0aHJvdHRsZWQgPSBfLnRocm90dGxlKHJlbmV3VG9rZW4sIDMwMDAwMCwgeyAndHJhaWxpbmcnOiBmYWxzZSB9KTtcbiAqIGpRdWVyeShlbGVtZW50KS5vbignY2xpY2snLCB0aHJvdHRsZWQpO1xuICpcbiAqIC8vIENhbmNlbCB0aGUgdHJhaWxpbmcgdGhyb3R0bGVkIGludm9jYXRpb24uXG4gKiBqUXVlcnkod2luZG93KS5vbigncG9wc3RhdGUnLCB0aHJvdHRsZWQuY2FuY2VsKTtcbiAqL1xuZnVuY3Rpb24gdGhyb3R0bGUoZnVuYywgd2FpdCwgb3B0aW9ucykge1xuICB2YXIgbGVhZGluZyA9IHRydWUsXG4gICAgICB0cmFpbGluZyA9IHRydWU7XG5cbiAgaWYgKHR5cGVvZiBmdW5jICE9ICdmdW5jdGlvbicpIHtcbiAgICB0aHJvdyBuZXcgVHlwZUVycm9yKEZVTkNfRVJST1JfVEVYVCk7XG4gIH1cbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICdsZWFkaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLmxlYWRpbmcgOiBsZWFkaW5nO1xuICAgIHRyYWlsaW5nID0gJ3RyYWlsaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLnRyYWlsaW5nIDogdHJhaWxpbmc7XG4gIH1cbiAgcmV0dXJuIGRlYm91bmNlKGZ1bmMsIHdhaXQsIHtcbiAgICAnbGVhZGluZyc6IGxlYWRpbmcsXG4gICAgJ21heFdhaXQnOiB3YWl0LFxuICAgICd0cmFpbGluZyc6IHRyYWlsaW5nXG4gIH0pO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRocm90dGxlO1xuIiwidmFyIGJhc2VUcmltID0gcmVxdWlyZSgnLi9fYmFzZVRyaW0nKSxcbiAgICBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKSxcbiAgICBpc1N5bWJvbCA9IHJlcXVpcmUoJy4vaXNTeW1ib2wnKTtcblxuLyoqIFVzZWQgYXMgcmVmZXJlbmNlcyBmb3IgdmFyaW91cyBgTnVtYmVyYCBjb25zdGFudHMuICovXG52YXIgTkFOID0gMCAvIDA7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBiYWQgc2lnbmVkIGhleGFkZWNpbWFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JhZEhleCA9IC9eWy0rXTB4WzAtOWEtZl0rJC9pO1xuXG4vKiogVXNlZCB0byBkZXRlY3QgYmluYXJ5IHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JpbmFyeSA9IC9eMGJbMDFdKyQvaTtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IG9jdGFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc09jdGFsID0gL14wb1swLTddKyQvaTtcblxuLyoqIEJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzIHdpdGhvdXQgYSBkZXBlbmRlbmN5IG9uIGByb290YC4gKi9cbnZhciBmcmVlUGFyc2VJbnQgPSBwYXJzZUludDtcblxuLyoqXG4gKiBDb252ZXJ0cyBgdmFsdWVgIHRvIGEgbnVtYmVyLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBwcm9jZXNzLlxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgbnVtYmVyLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLnRvTnVtYmVyKDMuMik7XG4gKiAvLyA9PiAzLjJcbiAqXG4gKiBfLnRvTnVtYmVyKE51bWJlci5NSU5fVkFMVUUpO1xuICogLy8gPT4gNWUtMzI0XG4gKlxuICogXy50b051bWJlcihJbmZpbml0eSk7XG4gKiAvLyA9PiBJbmZpbml0eVxuICpcbiAqIF8udG9OdW1iZXIoJzMuMicpO1xuICogLy8gPT4gMy4yXG4gKi9cbmZ1bmN0aW9uIHRvTnVtYmVyKHZhbHVlKSB7XG4gIGlmICh0eXBlb2YgdmFsdWUgPT0gJ251bWJlcicpIHtcbiAgICByZXR1cm4gdmFsdWU7XG4gIH1cbiAgaWYgKGlzU3ltYm9sKHZhbHVlKSkge1xuICAgIHJldHVybiBOQU47XG4gIH1cbiAgaWYgKGlzT2JqZWN0KHZhbHVlKSkge1xuICAgIHZhciBvdGhlciA9IHR5cGVvZiB2YWx1ZS52YWx1ZU9mID09ICdmdW5jdGlvbicgPyB2YWx1ZS52YWx1ZU9mKCkgOiB2YWx1ZTtcbiAgICB2YWx1ZSA9IGlzT2JqZWN0KG90aGVyKSA/IChvdGhlciArICcnKSA6IG90aGVyO1xuICB9XG4gIGlmICh0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IDAgPyB2YWx1ZSA6ICt2YWx1ZTtcbiAgfVxuICB2YWx1ZSA9IGJhc2VUcmltKHZhbHVlKTtcbiAgdmFyIGlzQmluYXJ5ID0gcmVJc0JpbmFyeS50ZXN0KHZhbHVlKTtcbiAgcmV0dXJuIChpc0JpbmFyeSB8fCByZUlzT2N0YWwudGVzdCh2YWx1ZSkpXG4gICAgPyBmcmVlUGFyc2VJbnQodmFsdWUuc2xpY2UoMiksIGlzQmluYXJ5ID8gMiA6IDgpXG4gICAgOiAocmVJc0JhZEhleC50ZXN0KHZhbHVlKSA/IE5BTiA6ICt2YWx1ZSk7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gdG9OdW1iZXI7XG4iLCJ2YXIgZztcblxuLy8gVGhpcyB3b3JrcyBpbiBub24tc3RyaWN0IG1vZGVcbmcgPSAoZnVuY3Rpb24oKSB7XG5cdHJldHVybiB0aGlzO1xufSkoKTtcblxudHJ5IHtcblx0Ly8gVGhpcyB3b3JrcyBpZiBldmFsIGlzIGFsbG93ZWQgKHNlZSBDU1ApXG5cdGcgPSBnIHx8IG5ldyBGdW5jdGlvbihcInJldHVybiB0aGlzXCIpKCk7XG59IGNhdGNoIChlKSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgdGhlIHdpbmRvdyByZWZlcmVuY2UgaXMgYXZhaWxhYmxlXG5cdGlmICh0eXBlb2Ygd2luZG93ID09PSBcIm9iamVjdFwiKSBnID0gd2luZG93O1xufVxuXG4vLyBnIGNhbiBzdGlsbCBiZSB1bmRlZmluZWQsIGJ1dCBub3RoaW5nIHRvIGRvIGFib3V0IGl0Li4uXG4vLyBXZSByZXR1cm4gdW5kZWZpbmVkLCBpbnN0ZWFkIG9mIG5vdGhpbmcgaGVyZSwgc28gaXQnc1xuLy8gZWFzaWVyIHRvIGhhbmRsZSB0aGlzIGNhc2UuIGlmKCFnbG9iYWwpIHsgLi4ufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGc7XG4iLCJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudC9uYXZpZ2F0aW9uJztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9tb2JpbGVtZW51JztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9zY3JvbGxuYXZpZ2F0aW9uJztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9zdGlja3loZWFkZXInO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudC9sb2dpbnJlZ2lzdHJhdGlvbic7IiwiXHJcblxyXG5cclxuaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcclxuXHJcbi8vICQubm9Db25mbGljdCgpO1xyXG4vLyB2YXIgaXRlbXMgPSAkKFwiLmxpc3Qtd3JhcHBlciAubGlzdC1pdGVtXCIpO1xyXG4vLyB2YXIgbnVtSXRlbXMgPSBpdGVtcy5sZW5ndGg7XHJcbi8vIHZhciBwZXJQYWdlID0gNDtcclxuXHJcbi8vIGl0ZW1zLnNsaWNlKHBlclBhZ2UpLmhpZGUoKTtcclxuLy8gdmFyIHBhZ2VDb250YWluZXIgPSAkKCcjcGFnaW5hdGlvbi1jb250YWluZXInKTtcclxuXHJcbi8vIHBhZ2VDb250YWluZXIucGFnaW5hdGlvbih7XHJcbi8vICAgICBpdGVtczogbnVtSXRlbXMsXHJcbi8vICAgICBpdGVtc09uUGFnZTogcGVyUGFnZSxcclxuLy8gICAgIHByZXZUZXh0OiBcIiZsYXF1bztcIixcclxuLy8gICAgIG5leHRUZXh0OiBcIiZyYXF1bztcIixcclxuLy8gICAgIG9uUGFnZUNsaWNrOiBmdW5jdGlvbiAocGFnZU51bWJlcikge1xyXG4vLyAgICAgICAgIHZhciBzaG93RnJvbSA9IHBlclBhZ2UgKiAocGFnZU51bWJlciAtIDEpO1xyXG4vLyAgICAgICAgIHZhciBzaG93VG8gPSBzaG93RnJvbSArIHBlclBhZ2U7XHJcbi8vICAgICAgICAgaXRlbXMuaGlkZSgpLnNsaWNlKHNob3dGcm9tLCBzaG93VG8pLnNob3coKTtcclxuLy8gICAgIH1cclxuLy8gfSk7XHJcblxyXG5cclxuXHJcbnZhciAkZm9ybSA9ICQoXCIjd3Bfc2lnbnVwX2Zvcm1cIiksXHJcbiAgICAkc3VjY2Vzc01zZyA9ICQoXCIjbWVzc2FnZVwiKTtcclxuICAgICQudmFsaWRhdG9yLmFkZE1ldGhvZChcImxldHRlcnNcIiwgZnVuY3Rpb24gKHZhbHVlLCBlbGVtZW50KSB7XHJcbiAgICByZXR1cm4gdGhpcy5vcHRpb25hbChlbGVtZW50KSB8fCB2YWx1ZSA9PSB2YWx1ZS5tYXRjaCgvXlthLXpBLVpcXHNdKiQvKTtcclxufSk7XHJcblxyXG4kZm9ybS52YWxpZGF0ZSh7XHJcbiAgZXJyb3JFbGVtZW50OiBcInNwYW5cIixcclxuICBydWxlczoge1xyXG4gICAgZmlyc3ROYW1lOiB7XHJcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxyXG4gICAgICBtaW5sZW5ndGg6IDMsXHJcbiAgICAgIGxldHRlcnM6IHRydWVcclxuICAgIH0sXHJcbiAgICBsYXN0TmFtZToge1xyXG4gICAgICAgIHJlcXVpcmVkOiB0cnVlLFxyXG4gICAgICAgIG1pbmxlbmd0aDogMyxcclxuICAgICAgICBsZXR0ZXJzOiB0cnVlXHJcbiAgICB9LFxyXG4gICAgZW1haWw6IHtcclxuICAgICAgcmVxdWlyZWQ6IHRydWUsXHJcbiAgICAgIGVtYWlsOiB0cnVlXHJcbiAgICB9LFxyXG4gICAgdXNlcnBhc3N3b3JkOntcclxuICAgICAgICByZXF1aXJlZDp0cnVlLFxyXG4gICAgICAgIG1pbmxlbmd0aDo0XHJcbiAgICB9LFxyXG4gICAgY29uZmlybVBhc3N3b3JkOntcclxuICAgICAgICByZXF1aXJlZDp0cnVlLFxyXG4gICAgICAgIGVxdWFsVG86IFwiI3VzZXJwYXNzd29yZFwiXHJcbiAgICB9XHJcbiAgfSxcclxuICBtZXNzYWdlczoge1xyXG4gICAgZmlyc3ROYW1lOiBcIkZpcnN0IG5hbWUgcmVxdWlyZWRcIixcclxuICAgIGxhc3ROYW1lOiBcIkxhc3QgbmFtZSByZXF1aXJlZFwiLFxyXG4gICAgdXNlcnBhc3N3b3JkOlwiUGFzc3dvcmQgcmVxdWlyZWRcIixcclxuICAgIGNvbmZpcm1QYXNzd29yZDogXCJDb25maXJtIHBhc3N3b3JkIHNhbWUgYXMgcGFzc3dvcmRcIixcclxuICAgIGVtYWlsOntyZXF1aXJlZDpcIkVtYWlsIGFkZHJlc3MgcmVxdWlyZWRcIixlbWFpbDpcIlBsZWFzZSBzcGVjaWZ5IGEgdmFsaWQgZW1haWwgYWRkcmVzc1wifSxcclxuICB9LFxyXG4gIHN1Ym1pdEhhbmRsZXI6IGZ1bmN0aW9uICgpIHtcclxuXHJcbiAgICB2YXIgYWN0aW9uID0gJ3JlZ2lzdGVyX2FjdGlvbic7XHJcbiAgICBcclxuICAgIHZhciBmb3JtZmlyc3ROYW1lID0galF1ZXJ5KFwiI2ZpcnN0TmFtZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtbGFzdE5hbWUgPSBqUXVlcnkoXCIjbGFzdE5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWVtYWlsID0galF1ZXJ5KFwiI2VtYWlsXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1hbHRFbWFpbCA9IGpRdWVyeShcIiNhbHRFbWFpbFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtcGhvbmUgPSBqUXVlcnkoXCIjcGhvbmVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWFsdFBob25lID0galF1ZXJ5KFwiI2FsdFBob25lXCIpLnZhbCgpO1xyXG5cclxuICAgIHZhciBmb3JtY291bnRyeSA9IGpRdWVyeShcIiNjb3VudHJ5XCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1zdGF0ZSA9IGpRdWVyeShcIiNzdGF0ZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtYWRkcmVzcyA9IGpRdWVyeShcIiNhZGRyZXNzXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jaXR5ID0galF1ZXJ5KFwiI2NpdHlcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybXppcENvZGUgPSBqUXVlcnkoXCIjemlwQ29kZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29tcGFueU5hbWUgPSBqUXVlcnkoXCIjY29tcGFueU5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbXBhbnlVcmwgPSBqUXVlcnkoXCIjY29tcGFueVVybFwiKS52YWwoKTtcclxuXHJcbiAgICB2YXIgZm9ybXBhc3N3b3JkID0galF1ZXJ5KFwiI3VzZXJwYXNzd29yZFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29uZmlybVBhc3N3b3JkID0galF1ZXJ5KFwiI2NvbmZpcm1QYXNzd29yZFwiKS52YWwoKTtcclxuICAgXHJcbiAgICB2YXIgYWpheGRhdGEgPSB7ICAgIFxyXG4gICAgICAgIGFjdGlvbjogYWN0aW9uLFxyXG4gICAgICAgIGZpcnN0TmFtZTogZm9ybWZpcnN0TmFtZSxcclxuICAgICAgICBsYXN0TmFtZTogZm9ybWxhc3ROYW1lLFxyXG4gICAgICAgIGVtYWlsOiBmb3JtZW1haWwsXHJcbiAgICAgICAgYWx0RW1haWw6IGZvcm1hbHRFbWFpbCxcclxuICAgICAgICBwaG9uZTogZm9ybXBob25lLFxyXG4gICAgICAgIGFsdFBob25lOiBmb3JtYWx0UGhvbmUsXHJcbiAgICAgICAgY291bnRyeTogZm9ybWNvdW50cnksXHJcbiAgICAgICAgc3RhdGU6IGZvcm1zdGF0ZSxcclxuICAgICAgICBhZGRyZXNzOiBmb3JtYWRkcmVzcyxcclxuICAgICAgICBjaXR5OiBmb3JtY2l0eSxcclxuICAgICAgICB6aXBDb2RlOiBmb3JtemlwQ29kZSxcclxuICAgICAgICBjb21wYW55TmFtZTogZm9ybWNvbXBhbnlOYW1lLFxyXG4gICAgICAgIGNvbXBhbnlVcmw6IGZvcm1jb21wYW55VXJsLFxyXG4gICAgICAgIHBhc3N3b3JkOiBmb3JtcGFzc3dvcmQsXHJcbiAgICAgICAgY29uZmlybVBhc3N3b3JkOiBmb3JtY29uZmlybVBhc3N3b3JkXHJcbiAgICB9O1xyXG4gICAgXHJcblxyXG4gICAgalF1ZXJ5LmFqYXgoe1xyXG4gICAgICAgIHR5cGUgOiBcInBvc3RcIixcclxuICAgICAgICBkYXRhVHlwZSA6IFwianNvblwiLFxyXG4gICAgICAgIHVybCA6IGFqYXh1cmwsXHJcbiAgICAgICAgZGF0YSA6IGFqYXhkYXRhLFxyXG4gICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgIGlmKHJlc3BvbnNlLnN1Y2Nlc3MgPT1cIjFcIikge1xyXG4gICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5yZW1vdmVDbGFzcygnYWxlcnQtZGFuZ2VyJykuYWRkQ2xhc3MoJ2FsZXJ0LXN1Y2Nlc3MnKTtcclxuICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtc2dcIikuaHRtbChyZXNwb25zZS5tZXNzYWdlKTtcclxuICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnNob3coKTtcclxuICAgICAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcclxuICAgICAgICAgICAgICAgICAgICBqUXVlcnkoJyN3cF9zaWdudXBfZm9ybScpLnRyaWdnZXIoXCJyZXNldFwiKTsgICAgICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gcmVzcG9uc2UucmVkaXJlY3RfdXJsO1xyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLmhpZGUoKTtcclxuICAgICAgICAgICAgICAgIH0sIDUwMDApOyAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5yZW1vdmVDbGFzcygnYWxlcnQtc3VjY2VzcycpLmFkZENsYXNzKCdhbGVydC1kYW5nZXInKTtcclxuICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtc2dcIikuaHRtbChyZXNwb25zZS5tZXNzYWdlX2RhdGEpOyBcclxuICAgICAgICAgICAgfSAgICAgICAgICAgIFxyXG4gICAgICAgIH1cclxuICAgIH0pO1x0XHJcbiAgfVxyXG59KTtcclxuXHJcblxyXG5cclxudmFyICRsb2dpbmZvcm0gPSAkKFwiI3dwX2xvZ2luX2Zvcm1cIiksXHJcbiAgICAkbG9naW5Nc2cgPSAkKFwiI21lc3NhZ2VcIik7XHJcbiAgICAkLnZhbGlkYXRvci5hZGRNZXRob2QoXCJsZXR0ZXJzXCIsIGZ1bmN0aW9uICh2YWx1ZSwgZWxlbWVudCkge1xyXG4gICAgcmV0dXJuIHRoaXMub3B0aW9uYWwoZWxlbWVudCkgfHwgdmFsdWUgPT0gdmFsdWUubWF0Y2goL15bYS16QS1aXFxzXSokLyk7XHJcbn0pO1xyXG5cclxuXHJcblxyXG4kbG9naW5mb3JtLnZhbGlkYXRlKHtcclxuICAgIGVycm9yRWxlbWVudDogXCJzcGFuXCIsXHJcbiAgICBydWxlczoge1xyXG4gICAgICB1c2VyRW1haWw6IHtcclxuICAgICAgICByZXF1aXJlZDogdHJ1ZSxcclxuICAgICAgICBlbWFpbDogdHJ1ZVxyXG4gICAgICB9LFxyXG4gICAgICBwYXNzd29yZDp7XHJcbiAgICAgICAgICByZXF1aXJlZDp0cnVlLFxyXG4gICAgICAgICAgbWlubGVuZ3RoOjRcclxuICAgICAgfVxyXG4gICAgfSxcclxuICAgIG1lc3NhZ2VzOiB7XHJcbiAgICAgIHVzZXJFbWFpbDoge3JlcXVpcmVkOlwiTG9naW4gZW1haWwgcmVxdWlyZWRcIixlbWFpbDpcIlBsZWFzZSBWYWxpZCBlbWFpbCByZXF1aXJlZFwifSxcclxuICAgICAgcGFzc3dvcmQ6e3JlcXVpcmVkOlwiUGFzc3dvcmQgcmVxdWlyZWRcIixtaW5sZW5ndGg6XCJQYXNzd29yZCBtdXN0IGJlIG1vcmUgdGhlbiA0IGRpZ2l0XCJ9XHJcbiAgICB9LFxyXG4gICAgc3VibWl0SGFuZGxlcjogZnVuY3Rpb24gKCkge1xyXG4gIFxyXG4gICAgICAgIHZhciBhY3Rpb24gPSAnbG9naW5fYWN0aW9uJztcclxuICAgIFxyXG4gICAgICAgIHZhciB1c2VyRW1haWwgPSBqUXVlcnkoXCIjdXNlckVtYWlsXCIpLnZhbCgpO1xyXG4gICAgICAgIHZhciBwYXNzd29yZCA9IGpRdWVyeShcIiNwYXNzd29yZFwiKS52YWwoKTtcclxuICAgICAgICB2YXIgcmVtZW1iZXIgPSBqUXVlcnkoXCIjcmVtZW1iZXJcIikudmFsKCk7XHJcbiAgICAgICBcclxuICAgICAgICB2YXIgYWpheGRhdGEgPSB7ICAgIFxyXG4gICAgICAgICAgICBhY3Rpb246IGFjdGlvbixcclxuICAgICAgICAgICAgdXNlckxvZ2luOiB1c2VyRW1haWwsXHJcbiAgICAgICAgICAgIHBhc3N3b3JkOiBwYXNzd29yZCxcclxuICAgICAgICAgICAgcmVtZW1iZXI6IHJlbWVtYmVyXHJcbiAgICAgICAgfTtcclxuICAgICAgICBcclxuICAgIFxyXG4gICAgICAgIGpRdWVyeS5hamF4KHtcclxuICAgICAgICAgICAgdHlwZSA6IFwicG9zdFwiLFxyXG4gICAgICAgICAgICBkYXRhVHlwZSA6IFwianNvblwiLFxyXG4gICAgICAgICAgICB1cmwgOiBhamF4dXJsLFxyXG4gICAgICAgICAgICBkYXRhIDogYWpheGRhdGEsXHJcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgICAgICBpZihyZXNwb25zZS5zdWNjZXNzID09XCIxXCIpIHsgICAgXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gJGxvZ2luTXNnLnNob3coKTsgICAgXHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LWRhbmdlcicpLmFkZENsYXNzKCdhbGVydC1zdWNjZXNzJyk7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21zZ1wiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2UrJyAnK3Jlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikuc2hvdygpO1xyXG4gICAgICAgICAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3BfbG9naW5fZm9ybScpLnRyaWdnZXIoXCJyZXNldFwiKTsgICAgICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IHJlc3BvbnNlLnJlZGlyZWN0X3VybDtcclxuICAgICAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikuaGlkZSgpO1xyXG4gICAgICAgICAgICAgICAgICAgIH0sIDMwMDApOyAgICAgICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5yZW1vdmVDbGFzcygnYWxlcnQtc3VjY2VzcycpLmFkZENsYXNzKCdhbGVydC1kYW5nZXInKTtcclxuICAgICAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbXNnXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZV9kYXRhKTsgXHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikuc2hvdygpO1xyXG4gICAgICAgICAgICAgICAgfSAgICAgICAgICAgIFxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHRcclxuICAgIH1cclxuICB9KTtcclxuICBcclxuICBcclxuLy9qUXVlcnkoXCIuc2hvd0xvY2F0aW9uXCIpLmNsaWNrKGZ1bmN0aW9uKCl7XHJcbmpRdWVyeSgnLnNob3dMb2NhdGlvbicpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcbiAgICB2YXIgcmVjZW50ID0gJCh0aGlzKS52YWwoKTtcclxuICAgIGlmICgkKHRoaXMpLmlzKFwiOmNoZWNrZWRcIikpe1xyXG4gICAgICAgICQoXCIuXCIrcmVjZW50KS5zaG93KCk7XHJcbiAgICB9ZWxzZXtcclxuICAgICAgICAkKFwiLlwiK3JlY2VudCkuaGlkZSgpO1xyXG4gICAgfVxyXG59KTtcclxuXHJcbmpRdWVyeSgnLmNob29zZUVudGVycHJpc2UnKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG4gICAgdmFyIHR5cGUgPSAkKHRoaXMpLmF0dHIoJ3NlcnZlcnR5cGUnKTtcclxuICAgIFxyXG4gICAgaWYodHlwZT09J2VudGVycHJpc2UnKXtcclxuICAgICAgICBqUXVlcnkoXCIjZW50ZXJwcmlzZS1zZXJ2ZXItdGFiXCIgKS50cmlnZ2VyKCBcImNsaWNrXCIgKTtcclxuICAgIH1lbHNlIGlmKHR5cGU9PSdwcm8nKXtcclxuICAgICAgICBqUXVlcnkoXCIjcHJvLXNlcnZlci10YWJcIiApLnRyaWdnZXIoIFwiY2xpY2tcIiApO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgalF1ZXJ5KFwiI2J1ZGdldC1zZXJ2ZXItdGFiXCIgKS50cmlnZ2VyKCBcImNsaWNrXCIgKTtcclxuICAgIH1cclxuICAgIFxyXG59KTtcclxuXHJcblxyXG4vKipcclxuICogIFBhZ2luYXRpb24gb2YgRGVkaWNhdGVkIFNlcnZlciBwYWdlXHJcbiAqIFxyXG4gKi9cclxuXHJcbiB2YXIgaXRlbXMgPSAkKFwiI2J1ZGdldC1zZXJ2ZXIgdGJvZHkgdHJcIik7XHJcbiB2YXIgbnVtSXRlbXMgPSBpdGVtcy5sZW5ndGg7XHJcbiB2YXIgcGVyUGFnZSA9IDEwO1xyXG5cclxuIGl0ZW1zLnNsaWNlKHBlclBhZ2UpLmhpZGUoKTtcclxuXHJcbiAkKCcjYnVkZ2V0LXNlcnZlci1wYWdpbmF0aW9uJykucGFnaW5hdGlvbih7XHJcbiAgICAgaXRlbXM6IG51bUl0ZW1zLFxyXG4gICAgIGl0ZW1zT25QYWdlOiBwZXJQYWdlLFxyXG4gICAgIHByZXZUZXh0OiBcIiZsYXF1bztcIixcclxuICAgICBuZXh0VGV4dDogXCImcmFxdW87XCIsXHJcbiAgICAgY3NzU3R5bGU6J2xpZ2h0LXRoZW1lJyxcclxuICAgICBvblBhZ2VDbGljazogZnVuY3Rpb24gKHBhZ2VOdW1iZXIpIHtcclxuICAgICAgICAgdmFyIHNob3dGcm9tID0gcGVyUGFnZSAqIChwYWdlTnVtYmVyIC0gMSk7XHJcbiAgICAgICAgIHZhciBzaG93VG8gPSBzaG93RnJvbSArIHBlclBhZ2U7XHJcbiAgICAgICAgIGl0ZW1zLmhpZGUoKS5zbGljZShzaG93RnJvbSwgc2hvd1RvKS5zaG93KCk7XHJcbiAgICAgfVxyXG4gfSk7XHJcblxyXG5cclxuIHZhciBpdGVtc19wcm8gPSAkKFwiI3Byby1zZXJ2ZXIgdGJvZHkgdHJcIik7XHJcbiB2YXIgbnVtSXRlbXNfcHJvID0gaXRlbXNfcHJvLmxlbmd0aDtcclxuIHZhciBwZXJQYWdlX3BybyA9IDEwO1xyXG5cclxuIGl0ZW1zX3Byby5zbGljZShwZXJQYWdlX3BybykuaGlkZSgpO1xyXG5cclxuICQoJyNwcm8tc2VydmVyLXBhZ2luYXRpb24nKS5wYWdpbmF0aW9uKHtcclxuICAgICBpdGVtczogbnVtSXRlbXNfcHJvLFxyXG4gICAgIGl0ZW1zT25QYWdlOiBwZXJQYWdlX3BybyxcclxuICAgICBwcmV2VGV4dDogXCImbGFxdW87XCIsXHJcbiAgICAgbmV4dFRleHQ6IFwiJnJhcXVvO1wiLFxyXG4gICAgIGNzc1N0eWxlOidsaWdodC10aGVtZScsXHJcbiAgICAgb25QYWdlQ2xpY2s6IGZ1bmN0aW9uIChwYWdlTnVtYmVyKSB7XHJcbiAgICAgICAgIHZhciBzaG93RnJvbSA9IHBlclBhZ2VfcHJvICogKHBhZ2VOdW1iZXIgLSAxKTtcclxuICAgICAgICAgdmFyIHNob3dUbyA9IHNob3dGcm9tICsgcGVyUGFnZV9wcm87XHJcbiAgICAgICAgIGl0ZW1zX3Byby5oaWRlKCkuc2xpY2Uoc2hvd0Zyb20sIHNob3dUbykuc2hvdygpO1xyXG4gICAgIH1cclxuIH0pO1xyXG5cclxuXHJcbiB2YXIgaXRlbXNfZW50ID0gJChcIiNlbnRlcnByaXNlLXNlcnZlciB0Ym9keSB0clwiKTtcclxuIHZhciBudW1JdGVtc19lbnQgPSBpdGVtc19lbnQubGVuZ3RoO1xyXG4gdmFyIHBlclBhZ2VfZW50ID0gMTA7XHJcblxyXG4gaXRlbXNfZW50LnNsaWNlKHBlclBhZ2VfZW50KS5oaWRlKCk7XHJcblxyXG4gJCgnI2VudGVycHJpc2Utc2VydmVyLXBhZ2luYXRpb24nKS5wYWdpbmF0aW9uKHtcclxuICAgICBpdGVtczogbnVtSXRlbXNfZW50LFxyXG4gICAgIGl0ZW1zT25QYWdlOiBwZXJQYWdlX2VudCxcclxuICAgICBwcmV2VGV4dDogXCImbGFxdW87XCIsXHJcbiAgICAgbmV4dFRleHQ6IFwiJnJhcXVvO1wiLFxyXG4gICAgIGNzc1N0eWxlOidsaWdodC10aGVtZScsXHJcbiAgICAgb25QYWdlQ2xpY2s6IGZ1bmN0aW9uIChwYWdlTnVtYmVyKSB7XHJcbiAgICAgICAgIHZhciBzaG93RnJvbSA9IHBlclBhZ2VfZW50ICogKHBhZ2VOdW1iZXIgLSAxKTtcclxuICAgICAgICAgdmFyIHNob3dUbyA9IHNob3dGcm9tICsgcGVyUGFnZV9lbnQ7XHJcbiAgICAgICAgIGl0ZW1zX2VudC5oaWRlKCkuc2xpY2Uoc2hvd0Zyb20sIHNob3dUbykuc2hvdygpO1xyXG4gICAgIH1cclxuIH0pO1xyXG5cclxuXHJcblxyXG4galF1ZXJ5KCcjcmVxdWVzdENhbGxiYWNrJykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgIGpRdWVyeSgnI2NvbnRhaW5lci1jb250YWN0LWZvcm0nKS5oaWRlKCk7XHJcbiAgICBqUXVlcnkoJyNjb250YWluZXItcmVxdWVzdC1mb3JtJykuc2hvdygpO1xyXG4gICAgd2luZG93LmxvY2F0aW9uLmhhc2ggPSAnI3NlY3Rpb24yJztcclxuICAgIHJldHVybiBmYWxzZTsgICAgXHJcbn0pO1xyXG5cclxualF1ZXJ5KCcjcmVxdWVzdENvbnRhY3QnKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG4gICAgalF1ZXJ5KCcjY29udGFpbmVyLXJlcXVlc3QtZm9ybScpLmhpZGUoKTtcclxuICAgIGpRdWVyeSgnI2NvbnRhaW5lci1jb250YWN0LWZvcm0nKS5zaG93KCk7XHJcbiAgICB3aW5kb3cubG9jYXRpb24uaGFzaCA9ICcjc2VjdGlvbjInO1xyXG4gICAgcmV0dXJuIGZhbHNlOyAgICBcclxufSk7XHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcbiBcclxuXHJcblxyXG5cclxuXHJcbi8vIHZhciBpdGVtcyA9IGpRdWVyeShcIi5idWRnZXQtc2VydmVyLXBhZ2UgdGJvZHkgdHJcIik7XHJcbi8vIHZhciBudW1JdGVtcyA9IGl0ZW1zLmxlbmd0aDtcclxuLy8gdmFyIHBlclBhZ2UgPSA1O1xyXG5cclxuLy8gaXRlbXMuc2xpY2UocGVyUGFnZSkuaGlkZSgpO1xyXG5cclxuLy8galF1ZXJ5KCcjZGVkaS1wYWdpbmF0aW9uLWNvbnRhaW5lcicpLnBhZ2luYXRpb24oe1xyXG4vLyAgICAgaXRlbXM6IG51bUl0ZW1zLFxyXG4vLyAgICAgaXRlbXNPblBhZ2U6IHBlclBhZ2UsXHJcbi8vICAgICBwcmV2VGV4dDogXCImbGFxdW87XCIsXHJcbi8vICAgICBuZXh0VGV4dDogXCImcmFxdW87XCIsXHJcbi8vICAgICBvblBhZ2VDbGljazogZnVuY3Rpb24gKHBhZ2VOdW1iZXIpIHtcclxuLy8gICAgICAgICB2YXIgc2hvd0Zyb20gPSBwZXJQYWdlICogKHBhZ2VOdW1iZXIgLSAxKTtcclxuLy8gICAgICAgICB2YXIgc2hvd1RvID0gc2hvd0Zyb20gKyBwZXJQYWdlO1xyXG4vLyAgICAgICAgIGl0ZW1zLmhpZGUoKS5zbGljZShzaG93RnJvbSwgc2hvd1RvKS5zaG93KCk7XHJcbi8vICAgICB9XHJcbi8vIH0pO1xyXG5cclxuXHJcblxyXG5cclxuXHJcbi8qIFJlZ2lzdHJhdGlvbiBBamF4ICovXHJcbi8qXHJcbiQoJyNyZWdpc3RlcicpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICB2YXIgYWN0aW9uID0gJ3JlZ2lzdGVyX2FjdGlvbic7XHJcbiAgICBcclxuICAgIHZhciBmb3JtZmlyc3ROYW1lID0galF1ZXJ5KFwiI2ZpcnN0TmFtZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtbGFzdE5hbWUgPSBqUXVlcnkoXCIjbGFzdE5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWVtYWlsID0galF1ZXJ5KFwiI2VtYWlsXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1hbHRFbWFpbCA9IGpRdWVyeShcIiNhbHRFbWFpbFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtcGhvbmUgPSBqUXVlcnkoXCIjcGhvbmVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWFsdFBob25lID0galF1ZXJ5KFwiI2FsdFBob25lXCIpLnZhbCgpO1xyXG5cclxuICAgIHZhciBmb3JtY291bnRyeSA9IGpRdWVyeShcIiNjb3VudHJ5XCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1zdGF0ZSA9IGpRdWVyeShcIiNzdGF0ZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtYWRkcmVzcyA9IGpRdWVyeShcIiNhZGRyZXNzXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jaXR5ID0galF1ZXJ5KFwiI2NpdHlcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybXppcENvZGUgPSBqUXVlcnkoXCIjemlwQ29kZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29tcGFueU5hbWUgPSBqUXVlcnkoXCIjY29tcGFueU5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbXBhbnlVcmwgPSBqUXVlcnkoXCIjY29tcGFueVVybFwiKS52YWwoKTtcclxuXHJcbiAgICB2YXIgZm9ybXBhc3N3b3JkID0galF1ZXJ5KFwiI3VzZXJwYXNzd29yZFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29uZmlybVBhc3N3b3JkID0galF1ZXJ5KFwiI2NvbmZpcm1QYXNzd29yZFwiKS52YWwoKTtcclxuICAgXHJcbiAgICB2YXIgYWpheGRhdGEgPSB7ICAgIFxyXG4gICAgICAgIGFjdGlvbjogJ3JlZ2lzdGVyX2FjdGlvbicsXHJcbiAgICAgICAgZmlyc3ROYW1lOiBmb3JtZmlyc3ROYW1lLFxyXG4gICAgICAgIGxhc3ROYW1lOiBmb3JtbGFzdE5hbWUsXHJcbiAgICAgICAgZW1haWw6IGZvcm1lbWFpbCxcclxuICAgICAgICBhbHRFbWFpbDogZm9ybWFsdEVtYWlsLFxyXG4gICAgICAgIHBob25lOiBmb3JtcGhvbmUsXHJcbiAgICAgICAgYWx0UGhvbmU6IGZvcm1hbHRQaG9uZSxcclxuICAgICAgICBjb3VudHJ5OiBmb3JtY291bnRyeSxcclxuICAgICAgICBzdGF0ZTogZm9ybXN0YXRlLFxyXG4gICAgICAgIGFkZHJlc3M6IGZvcm1hZGRyZXNzLFxyXG4gICAgICAgIGNpdHk6IGZvcm1jaXR5LFxyXG4gICAgICAgIHppcENvZGU6IGZvcm16aXBDb2RlLFxyXG4gICAgICAgIGNvbXBhbnlOYW1lOiBmb3JtY29tcGFueU5hbWUsXHJcbiAgICAgICAgY29tcGFueVVybDogZm9ybWNvbXBhbnlVcmwsXHJcbiAgICAgICAgcGFzc3dvcmQ6IGZvcm1wYXNzd29yZCxcclxuICAgICAgICBjb25maXJtUGFzc3dvcmQ6IGZvcm1jb25maXJtUGFzc3dvcmRcclxuICAgIH07XHJcbiAgICBcclxuXHJcbiAgICBqUXVlcnkuYWpheCh7XHJcbiAgICAgICAgdHlwZSA6IFwicG9zdFwiLFxyXG4gICAgICAgIGRhdGFUeXBlIDogXCJqc29uXCIsXHJcbiAgICAgICAgdXJsIDogYWpheHVybCxcclxuICAgICAgICBkYXRhIDogYWpheGRhdGEsXHJcbiAgICAgICAgc3VjY2VzczogZnVuY3Rpb24ocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgaWYocmVzcG9uc2Uuc3VjY2VzcyA9PVwiMVwiKSB7ICAgXHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5yZW1vdmVDbGFzcygnZXJyb3JfbWVzc2FnZScpLmFkZENsYXNzKCdzdWNjZXNzX21lc3NhZ2UnKTtcclxuICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZSk7XHJcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3Bfc2lnbnVwX2Zvcm0nKS50cmlnZ2VyKFwicmVzZXRcIik7XHJcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZXNwb25zZS5yZWRpcmVjdF91cmw7XHJcbiAgICAgICAgICAgICAgICB9LCAzMDAwKTsgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ3N1Y2Nlc3NfbWVzc2FnZScpLmFkZENsYXNzKCdlcnJvcl9tZXNzYWdlJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7IFxyXG4gICAgICAgICAgICB9ICAgICAgICAgICAgXHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHRcdFx0XHJcbn0pOyAgIFxyXG5cclxuXHJcbi8vIExvZ2luIEN1c3RvbWVyIC0gQWpheCBcclxuJCgnI2xvZ2luJykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIHZhciBhY3Rpb24gPSAnbG9naW5fYWN0aW9uJztcclxuICAgIFxyXG4gICAgdmFyIHVzZXJFbWFpbCA9IGpRdWVyeShcIiN1c2VyRW1haWxcIikudmFsKCk7XHJcbiAgICB2YXIgcGFzc3dvcmQgPSBqUXVlcnkoXCIjcGFzc3dvcmRcIikudmFsKCk7XHJcbiAgICB2YXIgcmVtZW1iZXIgPSBqUXVlcnkoXCIjcmVtZW1iZXJcIikudmFsKCk7XHJcbiAgIFxyXG4gICAgdmFyIGFqYXhkYXRhID0geyAgICBcclxuICAgICAgICBhY3Rpb246IGFjdGlvbixcclxuICAgICAgICB1c2VyTG9naW46IHVzZXJFbWFpbCxcclxuICAgICAgICBwYXNzd29yZDogcGFzc3dvcmQsXHJcbiAgICAgICAgcmVtZW1iZXI6IHJlbWVtYmVyXHJcbiAgICB9O1xyXG4gICAgXHJcblxyXG4gICAgalF1ZXJ5LmFqYXgoe1xyXG4gICAgICAgIHR5cGUgOiBcInBvc3RcIixcclxuICAgICAgICBkYXRhVHlwZSA6IFwianNvblwiLFxyXG4gICAgICAgIHVybCA6IGFqYXh1cmwsXHJcbiAgICAgICAgZGF0YSA6IGFqYXhkYXRhLFxyXG4gICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgIGlmKHJlc3BvbnNlLnN1Y2Nlc3MgPT1cIjFcIikgeyAgICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2Vycm9yX21lc3NhZ2UnKS5hZGRDbGFzcygnc3VjY2Vzc19tZXNzYWdlJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2UrJyAnK3Jlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7ICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3BfbG9naW5fZm9ybScpLnRyaWdnZXIoXCJyZXNldFwiKTsgXHJcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZXNwb25zZS5yZWRpcmVjdF91cmw7XHJcbiAgICAgICAgICAgICAgICB9LCAyMDAwKTtcclxuXHJcbiAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ3N1Y2Nlc3NfbWVzc2FnZScpLmFkZENsYXNzKCdlcnJvcl9tZXNzYWdlJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7IFxyXG4gICAgICAgICAgICB9ICAgICAgICAgICAgXHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHRcdFx0XHJcbn0pOyAgIFxyXG4qLyIsImNsYXNzIE1vYmlsZU1lbnV7XHJcbiAgICBjb25zdHJ1Y3Rvcigpe1xyXG4gICAgICAgIHRoaXMubWVudUljb24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXJfX21lbnUtaWNvbicpO1xyXG4gICAgICAgIHRoaXMubWVudUNvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXJfX21vYmlsZS1tZW51LWNvbnRlbnQnKTtcclxuICAgICAgICB0aGlzLmV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgZXZlbnRzKCl7XHJcbiAgICAgICAgdGhpcy5tZW51SWNvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMudG9nZ2xlVGhlTWVudSgpKTtcclxuICAgIH1cclxuXHJcbiAgICB0b2dnbGVUaGVNZW51KCl7XHJcbiAgICAgICAgdGhpcy5tZW51Q29udGVudC5jbGFzc0xpc3QudG9nZ2xlKCdzaXRlLWhlYWRlcl9fbW9iaWxlLW1lbnUtY29udGVudC0taXMtdmlzaWJsZScpO1xyXG4gICAgICAgIHRoaXMubWVudUljb24uY2xhc3NMaXN0LnRvZ2dsZSgnc2l0ZS1oZWFkZXJfX21lbnUtaWNvbi0tY2xvc2UteCcpO1xyXG4gICAgfVxyXG59XHJcblxyXG5uZXcgTW9iaWxlTWVudSgpOyIsImltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XHJcblxyXG4kKCcuaGVhZGVyLW5hdmlnYXRpb24nKS5vbignbW91c2VlbnRlcicsICcubWVudS1pdGVtLWhhcy1jaGlsZHJlbicsIChlKSA9PntcclxuICAgIFxyXG4gICAgaWYoISQoZS5jdXJyZW50VGFyZ2V0KS5wYXJlbnRzKCcuc3ViLW1lbnUnKS5sZW5ndGgpe1xyXG4gICAgICAgICQoJy5tZW51ID4gLm1lbnUtaXRlbS5vcGVuJykuZmluZCgnPiBhID4gLm1lbnUtYnV0dG9uJykudHJpZ2dlcignY2xpY2snKTtcclxuICAgIH1cclxuICAgICQoZS5jdXJyZW50VGFyZ2V0KS5hZGRDbGFzcygnb3BlbicpO1xyXG59KS5vbignbW91c2VsZWF2ZScsICcubWVudS1pdGVtLWhhcy1jaGlsZHJlbicsIChlKSA9PntcclxuICAgICQoZS5jdXJyZW50VGFyZ2V0KS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG59KVxyXG5cclxuIiwiaW1wb3J0IHRocm90dGxlIGZyb20gJ2xvZGFzaC90aHJvdHRsZSc7XHJcbmltcG9ydCBkZWJvdW5jZSBmcm9tICdsb2Rhc2gvZGVib3VuY2UnO1xyXG5cclxuY2xhc3MgU3RpY2t5SGVhZGVyIHtcclxuICBjb25zdHJ1Y3RvcigpIHtcclxuICAgIHRoaXMucGFnZVNlY3Rpb25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5wYWdlLXNlY3Rpb25cIik7XHJcbiAgICB0aGlzLmJyb3dzZXJIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgICB0aGlzLnByZXZpb3VzU2Nyb2xsWSA9IHdpbmRvdy5zY3JvbGxZO1xyXG4gICAgdGhpcy5ldmVudHMoKTtcclxuICB9XHJcblxyXG4gIGV2ZW50cygpIHtcclxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwic2Nyb2xsXCIsIHRocm90dGxlKCgpID0+IHRoaXMucnVuT25TY3JvbGwoKSwgNTApKTtcclxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwicmVzaXplXCIsIGRlYm91bmNlKCgpID0+IHtcclxuICAgICAgdGhpcy5icm93c2VySGVpZ2h0ID0gd2luZG93LmlubmVySGVpZ2h0O1xyXG4gICAgfSwgMzMzKSk7XHJcbiAgfVxyXG5cclxuICBydW5PblNjcm9sbCgpIHtcclxuICAgIHRoaXMuZGV0ZXJtaW5lU2Nyb2xsRGlyZWN0aW9uKCk7XHJcbiAgICB0aGlzLnBhZ2VTZWN0aW9ucy5mb3JFYWNoKGVsID0+IHRoaXMuY2FsY1NlY3Rpb24oZWwpKTtcclxuICB9XHJcblxyXG4gIGRldGVybWluZVNjcm9sbERpcmVjdGlvbigpIHtcclxuICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IHRoaXMucHJldmlvdXNTY3JvbGxZKSB7XHJcbiAgICAgIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID0gJ2Rvd24nO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdGhpcy5zY3JvbGxEaXJlY3Rpb24gPSAndXAnO1xyXG4gICAgfVxyXG4gICAgdGhpcy5wcmV2aW91c1Njcm9sbFkgPSB3aW5kb3cuc2Nyb2xsWTtcclxuICB9XHJcblxyXG4gIGNhbGNTZWN0aW9uKGVsKSB7XHJcbiAgICBpZiAod2luZG93LnNjcm9sbFkgKyB0aGlzLmJyb3dzZXJIZWlnaHQgPiBlbC5vZmZzZXRUb3AgJiYgd2luZG93LnNjcm9sbFkgPCBlbC5vZmZzZXRUb3AgKyBlbC5vZmZzZXRIZWlnaHQpIHtcclxuICAgICAgbGV0IHNjcm9sbFBlcmNlbnQgPSAoZWwuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wIC8gdGhpcy5icm93c2VySGVpZ2h0KSAqIDEwMDtcclxuICAgICAgaWYgKCAoc2Nyb2xsUGVyY2VudCA8IDQwICYmIHNjcm9sbFBlcmNlbnQgPiAwICYmIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID09ICdkb3duJykgfHwgKHNjcm9sbFBlcmNlbnQgPCAzMyAmJiB0aGlzLnNjcm9sbERpcmVjdGlvbiA9PSAndXAnKSkge1xyXG4gICAgICAgIGxldCBtYXRjaGluZ0xpbmsgPSBlbC5nZXRBdHRyaWJ1dGUoXCJkYXRhLW1hdGNoaW5nLWxpbmtcIik7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChgLnNjcm9sbC1uYXYgYTpub3QoJHttYXRjaGluZ0xpbmt9KWApLmZvckVhY2goZWwgPT4gZWwuY2xhc3NMaXN0LnJlbW92ZShcInNjcm9sbC1uYXYtLWlzLWFjdGl2ZVwiKSk7XHJcbiAgICAgICAgLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihtYXRjaGluZ0xpbmspLmNsYXNzTGlzdC5hZGQoXCJzY3JvbGwtbmF2LS1pcy1hY3RpdmVcIik7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbm5ldyBTdGlja3lIZWFkZXIoKTsiLCJpbXBvcnQgdGhyb3R0bGUgZnJvbSAnbG9kYXNoL3Rocm90dGxlJztcclxuXHJcbmNsYXNzIFN0aWNreUhlYWRlciB7XHJcblxyXG5cdGNvbnN0cnVjdG9yKCkge1xyXG5cdFx0dGhpcy5zaXRlSGVhZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNpdGUtaGVhZGVyJyk7XHJcblx0XHR0aGlzLmV2ZW50cygpO1xyXG5cdH1cclxuXHJcblx0ZXZlbnRzKCkge1xyXG5cdFx0d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJzY3JvbGxcIiwgdGhyb3R0bGUoKCkgPT4gdGhpcy5zaG93U3RpY2t5T25TY3JvbGwoKSwgMjAwKSk7XHJcblx0fVxyXG5cclxuXHRzaG93U3RpY2t5T25TY3JvbGwoKSB7XHJcblx0XHRpZiAod2luZG93LnNjcm9sbFkgPiAxMDApIHtcclxuXHRcdFx0dGhpcy5zaXRlSGVhZGVyLmNsYXNzTGlzdC5hZGQoXCJzaXRlLWhlYWRlci0tb24tc2Nyb2xsXCIpO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0dGhpcy5zaXRlSGVhZGVyLmNsYXNzTGlzdC5yZW1vdmUoXCJzaXRlLWhlYWRlci0tb24tc2Nyb2xsXCIpO1xyXG5cdFx0fVxyXG5cdH1cclxufVxyXG5cclxubmV3IFN0aWNreUhlYWRlcigpOyIsIm1vZHVsZS5leHBvcnRzID0galF1ZXJ5OyJdLCJzb3VyY2VSb290IjoiIn0=