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

/* Registration Ajax */

jquery__WEBPACK_IMPORTED_MODULE_0___default()('#register').on('click', function (e) {
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
    type: "post",
    dataType: "json",
    url: ajaxurl,
    data: ajaxdata,
    success: function success(response) {
      if (response.success == "1") {
        jQuery("#error-message").html(response.message);
        jQuery('#wp_signup_form').trigger("reset");
      } else {
        jQuery("#error-message").html(response.message_data);
      }
    }
  });
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fU3ltYm9sLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvX2Jhc2VHZXRUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fYmFzZVRyaW0uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fZnJlZUdsb2JhbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL19nZXRSYXdUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fb2JqZWN0VG9TdHJpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fcm9vdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL190cmltbWVkRW5kSW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9kZWJvdW5jZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL2lzT2JqZWN0LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNPYmplY3RMaWtlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNTeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9ub3cuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC90aHJvdHRsZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9idW5kbGUuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbG9naW5yZWdpc3RyYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbW9iaWxlbWVudS5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL2NvbXBvbmVudC9uYXZpZ2F0aW9uLmpzIiwid2VicGFjazovLy8uL3NyYy9hc3NldHMvanMvY29tcG9uZW50L3Njcm9sbG5hdmlnYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvc3RpY2t5aGVhZGVyLmpzIiwid2VicGFjazovLy9leHRlcm5hbCBcImpRdWVyeVwiIl0sIm5hbWVzIjpbInJvb3QiLCJyZXF1aXJlIiwiU3ltYm9sIiwibW9kdWxlIiwiZXhwb3J0cyIsImdldFJhd1RhZyIsIm9iamVjdFRvU3RyaW5nIiwibnVsbFRhZyIsInVuZGVmaW5lZFRhZyIsInN5bVRvU3RyaW5nVGFnIiwidG9TdHJpbmdUYWciLCJ1bmRlZmluZWQiLCJiYXNlR2V0VGFnIiwidmFsdWUiLCJPYmplY3QiLCJ0cmltbWVkRW5kSW5kZXgiLCJyZVRyaW1TdGFydCIsImJhc2VUcmltIiwic3RyaW5nIiwic2xpY2UiLCJyZXBsYWNlIiwiZnJlZUdsb2JhbCIsImdsb2JhbCIsIm9iamVjdFByb3RvIiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJuYXRpdmVPYmplY3RUb1N0cmluZyIsInRvU3RyaW5nIiwiaXNPd24iLCJjYWxsIiwidGFnIiwidW5tYXNrZWQiLCJlIiwicmVzdWx0IiwiZnJlZVNlbGYiLCJzZWxmIiwiRnVuY3Rpb24iLCJyZVdoaXRlc3BhY2UiLCJpbmRleCIsImxlbmd0aCIsInRlc3QiLCJjaGFyQXQiLCJpc09iamVjdCIsIm5vdyIsInRvTnVtYmVyIiwiRlVOQ19FUlJPUl9URVhUIiwibmF0aXZlTWF4IiwiTWF0aCIsIm1heCIsIm5hdGl2ZU1pbiIsIm1pbiIsImRlYm91bmNlIiwiZnVuYyIsIndhaXQiLCJvcHRpb25zIiwibGFzdEFyZ3MiLCJsYXN0VGhpcyIsIm1heFdhaXQiLCJ0aW1lcklkIiwibGFzdENhbGxUaW1lIiwibGFzdEludm9rZVRpbWUiLCJsZWFkaW5nIiwibWF4aW5nIiwidHJhaWxpbmciLCJUeXBlRXJyb3IiLCJpbnZva2VGdW5jIiwidGltZSIsImFyZ3MiLCJ0aGlzQXJnIiwiYXBwbHkiLCJsZWFkaW5nRWRnZSIsInNldFRpbWVvdXQiLCJ0aW1lckV4cGlyZWQiLCJyZW1haW5pbmdXYWl0IiwidGltZVNpbmNlTGFzdENhbGwiLCJ0aW1lU2luY2VMYXN0SW52b2tlIiwidGltZVdhaXRpbmciLCJzaG91bGRJbnZva2UiLCJ0cmFpbGluZ0VkZ2UiLCJjYW5jZWwiLCJjbGVhclRpbWVvdXQiLCJmbHVzaCIsImRlYm91bmNlZCIsImlzSW52b2tpbmciLCJhcmd1bWVudHMiLCJ0eXBlIiwiaXNPYmplY3RMaWtlIiwic3ltYm9sVGFnIiwiaXNTeW1ib2wiLCJEYXRlIiwidGhyb3R0bGUiLCJOQU4iLCJyZUlzQmFkSGV4IiwicmVJc0JpbmFyeSIsInJlSXNPY3RhbCIsImZyZWVQYXJzZUludCIsInBhcnNlSW50Iiwib3RoZXIiLCJ2YWx1ZU9mIiwiaXNCaW5hcnkiLCJnIiwid2luZG93IiwiJCIsIm9uIiwicHJldmVudERlZmF1bHQiLCJhY3Rpb24iLCJmb3JtZmlyc3ROYW1lIiwialF1ZXJ5IiwidmFsIiwiZm9ybWxhc3ROYW1lIiwiZm9ybWVtYWlsIiwiZm9ybWFsdEVtYWlsIiwiZm9ybXBob25lIiwiZm9ybWFsdFBob25lIiwiZm9ybWNvdW50cnkiLCJmb3Jtc3RhdGUiLCJmb3JtYWRkcmVzcyIsImZvcm1jaXR5IiwiZm9ybXppcENvZGUiLCJmb3JtY29tcGFueU5hbWUiLCJmb3JtY29tcGFueVVybCIsImZvcm1wYXNzd29yZCIsImZvcm1jb25maXJtUGFzc3dvcmQiLCJhamF4ZGF0YSIsImZpcnN0TmFtZSIsImxhc3ROYW1lIiwiZW1haWwiLCJhbHRFbWFpbCIsInBob25lIiwiYWx0UGhvbmUiLCJjb3VudHJ5Iiwic3RhdGUiLCJhZGRyZXNzIiwiY2l0eSIsInppcENvZGUiLCJjb21wYW55TmFtZSIsImNvbXBhbnlVcmwiLCJwYXNzd29yZCIsImNvbmZpcm1QYXNzd29yZCIsImFqYXgiLCJkYXRhVHlwZSIsInVybCIsImFqYXh1cmwiLCJkYXRhIiwic3VjY2VzcyIsInJlc3BvbnNlIiwiaHRtbCIsIm1lc3NhZ2UiLCJ0cmlnZ2VyIiwibWVzc2FnZV9kYXRhIiwiTW9iaWxlTWVudSIsIm1lbnVJY29uIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibWVudUNvbnRlbnQiLCJldmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlVGhlTWVudSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImN1cnJlbnRUYXJnZXQiLCJwYXJlbnRzIiwiZmluZCIsImFkZENsYXNzIiwicmVtb3ZlQ2xhc3MiLCJTdGlja3lIZWFkZXIiLCJwYWdlU2VjdGlvbnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiYnJvd3NlckhlaWdodCIsImlubmVySGVpZ2h0IiwicHJldmlvdXNTY3JvbGxZIiwic2Nyb2xsWSIsInJ1bk9uU2Nyb2xsIiwiZGV0ZXJtaW5lU2Nyb2xsRGlyZWN0aW9uIiwiZm9yRWFjaCIsImVsIiwiY2FsY1NlY3Rpb24iLCJzY3JvbGxEaXJlY3Rpb24iLCJvZmZzZXRUb3AiLCJvZmZzZXRIZWlnaHQiLCJzY3JvbGxQZXJjZW50IiwiZ2V0Qm91bmRpbmdDbGllbnRSZWN0IiwidG9wIiwibWF0Y2hpbmdMaW5rIiwiZ2V0QXR0cmlidXRlIiwicmVtb3ZlIiwic2l0ZUhlYWRlciIsInNob3dTdGlja3lPblNjcm9sbCIsImFkZCJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBOzs7UUFHQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMENBQTBDLGdDQUFnQztRQUMxRTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLHdEQUF3RCxrQkFBa0I7UUFDMUU7UUFDQSxpREFBaUQsY0FBYztRQUMvRDs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0EseUNBQXlDLGlDQUFpQztRQUMxRSxnSEFBZ0gsbUJBQW1CLEVBQUU7UUFDckk7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSwyQkFBMkIsMEJBQTBCLEVBQUU7UUFDdkQsaUNBQWlDLGVBQWU7UUFDaEQ7UUFDQTtRQUNBOztRQUVBO1FBQ0Esc0RBQXNELCtEQUErRDs7UUFFckg7UUFDQTs7O1FBR0E7UUFDQTs7Ozs7Ozs7Ozs7O0FDbEZBLElBQUlBLElBQUksR0FBR0MsbUJBQU8sQ0FBQywrQ0FBRCxDQUFsQjtBQUVBOzs7QUFDQSxJQUFJQyxPQUFNLEdBQUdGLElBQUksQ0FBQ0UsTUFBbEI7QUFFQUMsTUFBTSxDQUFDQyxPQUFQLEdBQWlCRixPQUFqQixDOzs7Ozs7Ozs7OztBQ0xBLElBQUlBLE9BQU0sR0FBR0QsbUJBQU8sQ0FBQyxtREFBRCxDQUFwQjtBQUFBLElBQ0lJLFNBQVMsR0FBR0osbUJBQU8sQ0FBQyx5REFBRCxDQUR2QjtBQUFBLElBRUlLLGNBQWMsR0FBR0wsbUJBQU8sQ0FBQyxtRUFBRCxDQUY1QjtBQUlBOzs7QUFDQSxJQUFJTSxPQUFPLEdBQUcsZUFBZDtBQUFBLElBQ0lDLFlBQVksR0FBRyxvQkFEbkI7QUFHQTs7QUFDQSxJQUFJQyxjQUFjLEdBQUdQLE9BQU0sR0FBR0EsT0FBTSxDQUFDUSxXQUFWLEdBQXdCQyxTQUFuRDtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUNBLFNBQVNDLFVBQVQsQ0FBb0JDLEtBQXBCLEVBQTJCO0FBQ3pCLE1BQUlBLEtBQUssSUFBSSxJQUFiLEVBQW1CO0FBQ2pCLFdBQU9BLEtBQUssS0FBS0YsU0FBVixHQUFzQkgsWUFBdEIsR0FBcUNELE9BQTVDO0FBQ0Q7O0FBQ0QsU0FBUUUsY0FBYyxJQUFJQSxjQUFjLElBQUlLLE1BQU0sQ0FBQ0QsS0FBRCxDQUEzQyxHQUNIUixTQUFTLENBQUNRLEtBQUQsQ0FETixHQUVIUCxjQUFjLENBQUNPLEtBQUQsQ0FGbEI7QUFHRDs7QUFFRFYsTUFBTSxDQUFDQyxPQUFQLEdBQWlCUSxVQUFqQixDOzs7Ozs7Ozs7OztBQzNCQSxJQUFJRyxlQUFlLEdBQUdkLG1CQUFPLENBQUMscUVBQUQsQ0FBN0I7QUFFQTs7O0FBQ0EsSUFBSWUsV0FBVyxHQUFHLE1BQWxCO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBQ0EsU0FBU0MsUUFBVCxDQUFrQkMsTUFBbEIsRUFBMEI7QUFDeEIsU0FBT0EsTUFBTSxHQUNUQSxNQUFNLENBQUNDLEtBQVAsQ0FBYSxDQUFiLEVBQWdCSixlQUFlLENBQUNHLE1BQUQsQ0FBZixHQUEwQixDQUExQyxFQUE2Q0UsT0FBN0MsQ0FBcURKLFdBQXJELEVBQWtFLEVBQWxFLENBRFMsR0FFVEUsTUFGSjtBQUdEOztBQUVEZixNQUFNLENBQUNDLE9BQVAsR0FBaUJhLFFBQWpCLEM7Ozs7Ozs7Ozs7Ozs7QUNsQkE7QUFDQSxJQUFJSSxVQUFVLEdBQUcsUUFBT0MsTUFBUCx5Q0FBT0EsTUFBUCxNQUFpQixRQUFqQixJQUE2QkEsTUFBN0IsSUFBdUNBLE1BQU0sQ0FBQ1IsTUFBUCxLQUFrQkEsTUFBekQsSUFBbUVRLE1BQXBGO0FBRUFuQixNQUFNLENBQUNDLE9BQVAsR0FBaUJpQixVQUFqQixDOzs7Ozs7Ozs7Ozs7QUNIQSxJQUFJbkIsT0FBTSxHQUFHRCxtQkFBTyxDQUFDLG1EQUFELENBQXBCO0FBRUE7OztBQUNBLElBQUlzQixXQUFXLEdBQUdULE1BQU0sQ0FBQ1UsU0FBekI7QUFFQTs7QUFDQSxJQUFJQyxjQUFjLEdBQUdGLFdBQVcsQ0FBQ0UsY0FBakM7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUNBLElBQUlDLG9CQUFvQixHQUFHSCxXQUFXLENBQUNJLFFBQXZDO0FBRUE7O0FBQ0EsSUFBSWxCLGNBQWMsR0FBR1AsT0FBTSxHQUFHQSxPQUFNLENBQUNRLFdBQVYsR0FBd0JDLFNBQW5EO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBQ0EsU0FBU04sU0FBVCxDQUFtQlEsS0FBbkIsRUFBMEI7QUFDeEIsTUFBSWUsS0FBSyxHQUFHSCxjQUFjLENBQUNJLElBQWYsQ0FBb0JoQixLQUFwQixFQUEyQkosY0FBM0IsQ0FBWjtBQUFBLE1BQ0lxQixHQUFHLEdBQUdqQixLQUFLLENBQUNKLGNBQUQsQ0FEZjs7QUFHQSxNQUFJO0FBQ0ZJLFNBQUssQ0FBQ0osY0FBRCxDQUFMLEdBQXdCRSxTQUF4QjtBQUNBLFFBQUlvQixRQUFRLEdBQUcsSUFBZjtBQUNELEdBSEQsQ0FHRSxPQUFPQyxDQUFQLEVBQVUsQ0FBRTs7QUFFZCxNQUFJQyxNQUFNLEdBQUdQLG9CQUFvQixDQUFDRyxJQUFyQixDQUEwQmhCLEtBQTFCLENBQWI7O0FBQ0EsTUFBSWtCLFFBQUosRUFBYztBQUNaLFFBQUlILEtBQUosRUFBVztBQUNUZixXQUFLLENBQUNKLGNBQUQsQ0FBTCxHQUF3QnFCLEdBQXhCO0FBQ0QsS0FGRCxNQUVPO0FBQ0wsYUFBT2pCLEtBQUssQ0FBQ0osY0FBRCxDQUFaO0FBQ0Q7QUFDRjs7QUFDRCxTQUFPd0IsTUFBUDtBQUNEOztBQUVEOUIsTUFBTSxDQUFDQyxPQUFQLEdBQWlCQyxTQUFqQixDOzs7Ozs7Ozs7OztBQzdDQTtBQUNBLElBQUlrQixXQUFXLEdBQUdULE1BQU0sQ0FBQ1UsU0FBekI7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUNBLElBQUlFLG9CQUFvQixHQUFHSCxXQUFXLENBQUNJLFFBQXZDO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBQ0EsU0FBU3JCLGNBQVQsQ0FBd0JPLEtBQXhCLEVBQStCO0FBQzdCLFNBQU9hLG9CQUFvQixDQUFDRyxJQUFyQixDQUEwQmhCLEtBQTFCLENBQVA7QUFDRDs7QUFFRFYsTUFBTSxDQUFDQyxPQUFQLEdBQWlCRSxjQUFqQixDOzs7Ozs7Ozs7Ozs7O0FDckJBLElBQUllLFVBQVUsR0FBR3BCLG1CQUFPLENBQUMsMkRBQUQsQ0FBeEI7QUFFQTs7O0FBQ0EsSUFBSWlDLFFBQVEsR0FBRyxRQUFPQyxJQUFQLHlDQUFPQSxJQUFQLE1BQWUsUUFBZixJQUEyQkEsSUFBM0IsSUFBbUNBLElBQUksQ0FBQ3JCLE1BQUwsS0FBZ0JBLE1BQW5ELElBQTZEcUIsSUFBNUU7QUFFQTs7QUFDQSxJQUFJbkMsSUFBSSxHQUFHcUIsVUFBVSxJQUFJYSxRQUFkLElBQTBCRSxRQUFRLENBQUMsYUFBRCxDQUFSLEVBQXJDO0FBRUFqQyxNQUFNLENBQUNDLE9BQVAsR0FBaUJKLElBQWpCLEM7Ozs7Ozs7Ozs7O0FDUkE7QUFDQSxJQUFJcUMsWUFBWSxHQUFHLElBQW5CO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFDQSxTQUFTdEIsZUFBVCxDQUF5QkcsTUFBekIsRUFBaUM7QUFDL0IsTUFBSW9CLEtBQUssR0FBR3BCLE1BQU0sQ0FBQ3FCLE1BQW5COztBQUVBLFNBQU9ELEtBQUssTUFBTUQsWUFBWSxDQUFDRyxJQUFiLENBQWtCdEIsTUFBTSxDQUFDdUIsTUFBUCxDQUFjSCxLQUFkLENBQWxCLENBQWxCLEVBQTJELENBQUU7O0FBQzdELFNBQU9BLEtBQVA7QUFDRDs7QUFFRG5DLE1BQU0sQ0FBQ0MsT0FBUCxHQUFpQlcsZUFBakIsQzs7Ozs7Ozs7Ozs7QUNsQkEsSUFBSTJCLFFBQVEsR0FBR3pDLG1CQUFPLENBQUMscURBQUQsQ0FBdEI7QUFBQSxJQUNJMEMsR0FBRyxHQUFHMUMsbUJBQU8sQ0FBQywyQ0FBRCxDQURqQjtBQUFBLElBRUkyQyxRQUFRLEdBQUczQyxtQkFBTyxDQUFDLHFEQUFELENBRnRCO0FBSUE7OztBQUNBLElBQUk0QyxlQUFlLEdBQUcscUJBQXRCO0FBRUE7O0FBQ0EsSUFBSUMsU0FBUyxHQUFHQyxJQUFJLENBQUNDLEdBQXJCO0FBQUEsSUFDSUMsU0FBUyxHQUFHRixJQUFJLENBQUNHLEdBRHJCO0FBR0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUNBLFNBQVNDLFFBQVQsQ0FBa0JDLElBQWxCLEVBQXdCQyxJQUF4QixFQUE4QkMsT0FBOUIsRUFBdUM7QUFDckMsTUFBSUMsUUFBSjtBQUFBLE1BQ0lDLFFBREo7QUFBQSxNQUVJQyxPQUZKO0FBQUEsTUFHSXhCLE1BSEo7QUFBQSxNQUlJeUIsT0FKSjtBQUFBLE1BS0lDLFlBTEo7QUFBQSxNQU1JQyxjQUFjLEdBQUcsQ0FOckI7QUFBQSxNQU9JQyxPQUFPLEdBQUcsS0FQZDtBQUFBLE1BUUlDLE1BQU0sR0FBRyxLQVJiO0FBQUEsTUFTSUMsUUFBUSxHQUFHLElBVGY7O0FBV0EsTUFBSSxPQUFPWCxJQUFQLElBQWUsVUFBbkIsRUFBK0I7QUFDN0IsVUFBTSxJQUFJWSxTQUFKLENBQWNuQixlQUFkLENBQU47QUFDRDs7QUFDRFEsTUFBSSxHQUFHVCxRQUFRLENBQUNTLElBQUQsQ0FBUixJQUFrQixDQUF6Qjs7QUFDQSxNQUFJWCxRQUFRLENBQUNZLE9BQUQsQ0FBWixFQUF1QjtBQUNyQk8sV0FBTyxHQUFHLENBQUMsQ0FBQ1AsT0FBTyxDQUFDTyxPQUFwQjtBQUNBQyxVQUFNLEdBQUcsYUFBYVIsT0FBdEI7QUFDQUcsV0FBTyxHQUFHSyxNQUFNLEdBQUdoQixTQUFTLENBQUNGLFFBQVEsQ0FBQ1UsT0FBTyxDQUFDRyxPQUFULENBQVIsSUFBNkIsQ0FBOUIsRUFBaUNKLElBQWpDLENBQVosR0FBcURJLE9BQXJFO0FBQ0FNLFlBQVEsR0FBRyxjQUFjVCxPQUFkLEdBQXdCLENBQUMsQ0FBQ0EsT0FBTyxDQUFDUyxRQUFsQyxHQUE2Q0EsUUFBeEQ7QUFDRDs7QUFFRCxXQUFTRSxVQUFULENBQW9CQyxJQUFwQixFQUEwQjtBQUN4QixRQUFJQyxJQUFJLEdBQUdaLFFBQVg7QUFBQSxRQUNJYSxPQUFPLEdBQUdaLFFBRGQ7QUFHQUQsWUFBUSxHQUFHQyxRQUFRLEdBQUc3QyxTQUF0QjtBQUNBaUQsa0JBQWMsR0FBR00sSUFBakI7QUFDQWpDLFVBQU0sR0FBR21CLElBQUksQ0FBQ2lCLEtBQUwsQ0FBV0QsT0FBWCxFQUFvQkQsSUFBcEIsQ0FBVDtBQUNBLFdBQU9sQyxNQUFQO0FBQ0Q7O0FBRUQsV0FBU3FDLFdBQVQsQ0FBcUJKLElBQXJCLEVBQTJCO0FBQ3pCO0FBQ0FOLGtCQUFjLEdBQUdNLElBQWpCLENBRnlCLENBR3pCOztBQUNBUixXQUFPLEdBQUdhLFVBQVUsQ0FBQ0MsWUFBRCxFQUFlbkIsSUFBZixDQUFwQixDQUp5QixDQUt6Qjs7QUFDQSxXQUFPUSxPQUFPLEdBQUdJLFVBQVUsQ0FBQ0MsSUFBRCxDQUFiLEdBQXNCakMsTUFBcEM7QUFDRDs7QUFFRCxXQUFTd0MsYUFBVCxDQUF1QlAsSUFBdkIsRUFBNkI7QUFDM0IsUUFBSVEsaUJBQWlCLEdBQUdSLElBQUksR0FBR1AsWUFBL0I7QUFBQSxRQUNJZ0IsbUJBQW1CLEdBQUdULElBQUksR0FBR04sY0FEakM7QUFBQSxRQUVJZ0IsV0FBVyxHQUFHdkIsSUFBSSxHQUFHcUIsaUJBRnpCO0FBSUEsV0FBT1osTUFBTSxHQUNUYixTQUFTLENBQUMyQixXQUFELEVBQWNuQixPQUFPLEdBQUdrQixtQkFBeEIsQ0FEQSxHQUVUQyxXQUZKO0FBR0Q7O0FBRUQsV0FBU0MsWUFBVCxDQUFzQlgsSUFBdEIsRUFBNEI7QUFDMUIsUUFBSVEsaUJBQWlCLEdBQUdSLElBQUksR0FBR1AsWUFBL0I7QUFBQSxRQUNJZ0IsbUJBQW1CLEdBQUdULElBQUksR0FBR04sY0FEakMsQ0FEMEIsQ0FJMUI7QUFDQTtBQUNBOztBQUNBLFdBQVFELFlBQVksS0FBS2hELFNBQWpCLElBQStCK0QsaUJBQWlCLElBQUlyQixJQUFwRCxJQUNMcUIsaUJBQWlCLEdBQUcsQ0FEZixJQUNzQlosTUFBTSxJQUFJYSxtQkFBbUIsSUFBSWxCLE9BRC9EO0FBRUQ7O0FBRUQsV0FBU2UsWUFBVCxHQUF3QjtBQUN0QixRQUFJTixJQUFJLEdBQUd2QixHQUFHLEVBQWQ7O0FBQ0EsUUFBSWtDLFlBQVksQ0FBQ1gsSUFBRCxDQUFoQixFQUF3QjtBQUN0QixhQUFPWSxZQUFZLENBQUNaLElBQUQsQ0FBbkI7QUFDRCxLQUpxQixDQUt0Qjs7O0FBQ0FSLFdBQU8sR0FBR2EsVUFBVSxDQUFDQyxZQUFELEVBQWVDLGFBQWEsQ0FBQ1AsSUFBRCxDQUE1QixDQUFwQjtBQUNEOztBQUVELFdBQVNZLFlBQVQsQ0FBc0JaLElBQXRCLEVBQTRCO0FBQzFCUixXQUFPLEdBQUcvQyxTQUFWLENBRDBCLENBRzFCO0FBQ0E7O0FBQ0EsUUFBSW9ELFFBQVEsSUFBSVIsUUFBaEIsRUFBMEI7QUFDeEIsYUFBT1UsVUFBVSxDQUFDQyxJQUFELENBQWpCO0FBQ0Q7O0FBQ0RYLFlBQVEsR0FBR0MsUUFBUSxHQUFHN0MsU0FBdEI7QUFDQSxXQUFPc0IsTUFBUDtBQUNEOztBQUVELFdBQVM4QyxNQUFULEdBQWtCO0FBQ2hCLFFBQUlyQixPQUFPLEtBQUsvQyxTQUFoQixFQUEyQjtBQUN6QnFFLGtCQUFZLENBQUN0QixPQUFELENBQVo7QUFDRDs7QUFDREUsa0JBQWMsR0FBRyxDQUFqQjtBQUNBTCxZQUFRLEdBQUdJLFlBQVksR0FBR0gsUUFBUSxHQUFHRSxPQUFPLEdBQUcvQyxTQUEvQztBQUNEOztBQUVELFdBQVNzRSxLQUFULEdBQWlCO0FBQ2YsV0FBT3ZCLE9BQU8sS0FBSy9DLFNBQVosR0FBd0JzQixNQUF4QixHQUFpQzZDLFlBQVksQ0FBQ25DLEdBQUcsRUFBSixDQUFwRDtBQUNEOztBQUVELFdBQVN1QyxTQUFULEdBQXFCO0FBQ25CLFFBQUloQixJQUFJLEdBQUd2QixHQUFHLEVBQWQ7QUFBQSxRQUNJd0MsVUFBVSxHQUFHTixZQUFZLENBQUNYLElBQUQsQ0FEN0I7QUFHQVgsWUFBUSxHQUFHNkIsU0FBWDtBQUNBNUIsWUFBUSxHQUFHLElBQVg7QUFDQUcsZ0JBQVksR0FBR08sSUFBZjs7QUFFQSxRQUFJaUIsVUFBSixFQUFnQjtBQUNkLFVBQUl6QixPQUFPLEtBQUsvQyxTQUFoQixFQUEyQjtBQUN6QixlQUFPMkQsV0FBVyxDQUFDWCxZQUFELENBQWxCO0FBQ0Q7O0FBQ0QsVUFBSUcsTUFBSixFQUFZO0FBQ1Y7QUFDQWtCLG9CQUFZLENBQUN0QixPQUFELENBQVo7QUFDQUEsZUFBTyxHQUFHYSxVQUFVLENBQUNDLFlBQUQsRUFBZW5CLElBQWYsQ0FBcEI7QUFDQSxlQUFPWSxVQUFVLENBQUNOLFlBQUQsQ0FBakI7QUFDRDtBQUNGOztBQUNELFFBQUlELE9BQU8sS0FBSy9DLFNBQWhCLEVBQTJCO0FBQ3pCK0MsYUFBTyxHQUFHYSxVQUFVLENBQUNDLFlBQUQsRUFBZW5CLElBQWYsQ0FBcEI7QUFDRDs7QUFDRCxXQUFPcEIsTUFBUDtBQUNEOztBQUNEaUQsV0FBUyxDQUFDSCxNQUFWLEdBQW1CQSxNQUFuQjtBQUNBRyxXQUFTLENBQUNELEtBQVYsR0FBa0JBLEtBQWxCO0FBQ0EsU0FBT0MsU0FBUDtBQUNEOztBQUVEL0UsTUFBTSxDQUFDQyxPQUFQLEdBQWlCK0MsUUFBakIsQzs7Ozs7Ozs7Ozs7OztBQzlMQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFNBQVNULFFBQVQsQ0FBa0I3QixLQUFsQixFQUF5QjtBQUN2QixNQUFJd0UsSUFBSSxXQUFVeEUsS0FBVixDQUFSOztBQUNBLFNBQU9BLEtBQUssSUFBSSxJQUFULEtBQWtCd0UsSUFBSSxJQUFJLFFBQVIsSUFBb0JBLElBQUksSUFBSSxVQUE5QyxDQUFQO0FBQ0Q7O0FBRURsRixNQUFNLENBQUNDLE9BQVAsR0FBaUJzQyxRQUFqQixDOzs7Ozs7Ozs7Ozs7O0FDOUJBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFNBQVM0QyxZQUFULENBQXNCekUsS0FBdEIsRUFBNkI7QUFDM0IsU0FBT0EsS0FBSyxJQUFJLElBQVQsSUFBaUIsUUFBT0EsS0FBUCxLQUFnQixRQUF4QztBQUNEOztBQUVEVixNQUFNLENBQUNDLE9BQVAsR0FBaUJrRixZQUFqQixDOzs7Ozs7Ozs7Ozs7O0FDNUJBLElBQUkxRSxVQUFVLEdBQUdYLG1CQUFPLENBQUMsMkRBQUQsQ0FBeEI7QUFBQSxJQUNJcUYsWUFBWSxHQUFHckYsbUJBQU8sQ0FBQyw2REFBRCxDQUQxQjtBQUdBOzs7QUFDQSxJQUFJc0YsU0FBUyxHQUFHLGlCQUFoQjtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBQ0EsU0FBU0MsUUFBVCxDQUFrQjNFLEtBQWxCLEVBQXlCO0FBQ3ZCLFNBQU8sUUFBT0EsS0FBUCxLQUFnQixRQUFoQixJQUNKeUUsWUFBWSxDQUFDekUsS0FBRCxDQUFaLElBQXVCRCxVQUFVLENBQUNDLEtBQUQsQ0FBVixJQUFxQjBFLFNBRC9DO0FBRUQ7O0FBRURwRixNQUFNLENBQUNDLE9BQVAsR0FBaUJvRixRQUFqQixDOzs7Ozs7Ozs7OztBQzVCQSxJQUFJeEYsSUFBSSxHQUFHQyxtQkFBTyxDQUFDLCtDQUFELENBQWxCO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUNBLElBQUkwQyxHQUFHLEdBQUcsU0FBTkEsR0FBTSxHQUFXO0FBQ25CLFNBQU8zQyxJQUFJLENBQUN5RixJQUFMLENBQVU5QyxHQUFWLEVBQVA7QUFDRCxDQUZEOztBQUlBeEMsTUFBTSxDQUFDQyxPQUFQLEdBQWlCdUMsR0FBakIsQzs7Ozs7Ozs7Ozs7QUN0QkEsSUFBSVEsUUFBUSxHQUFHbEQsbUJBQU8sQ0FBQyxxREFBRCxDQUF0QjtBQUFBLElBQ0l5QyxRQUFRLEdBQUd6QyxtQkFBTyxDQUFDLHFEQUFELENBRHRCO0FBR0E7OztBQUNBLElBQUk0QyxlQUFlLEdBQUcscUJBQXRCO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFDQSxTQUFTNkMsUUFBVCxDQUFrQnRDLElBQWxCLEVBQXdCQyxJQUF4QixFQUE4QkMsT0FBOUIsRUFBdUM7QUFDckMsTUFBSU8sT0FBTyxHQUFHLElBQWQ7QUFBQSxNQUNJRSxRQUFRLEdBQUcsSUFEZjs7QUFHQSxNQUFJLE9BQU9YLElBQVAsSUFBZSxVQUFuQixFQUErQjtBQUM3QixVQUFNLElBQUlZLFNBQUosQ0FBY25CLGVBQWQsQ0FBTjtBQUNEOztBQUNELE1BQUlILFFBQVEsQ0FBQ1ksT0FBRCxDQUFaLEVBQXVCO0FBQ3JCTyxXQUFPLEdBQUcsYUFBYVAsT0FBYixHQUF1QixDQUFDLENBQUNBLE9BQU8sQ0FBQ08sT0FBakMsR0FBMkNBLE9BQXJEO0FBQ0FFLFlBQVEsR0FBRyxjQUFjVCxPQUFkLEdBQXdCLENBQUMsQ0FBQ0EsT0FBTyxDQUFDUyxRQUFsQyxHQUE2Q0EsUUFBeEQ7QUFDRDs7QUFDRCxTQUFPWixRQUFRLENBQUNDLElBQUQsRUFBT0MsSUFBUCxFQUFhO0FBQzFCLGVBQVdRLE9BRGU7QUFFMUIsZUFBV1IsSUFGZTtBQUcxQixnQkFBWVU7QUFIYyxHQUFiLENBQWY7QUFLRDs7QUFFRDVELE1BQU0sQ0FBQ0MsT0FBUCxHQUFpQnNGLFFBQWpCLEM7Ozs7Ozs7Ozs7O0FDcEVBLElBQUl6RSxRQUFRLEdBQUdoQixtQkFBTyxDQUFDLHVEQUFELENBQXRCO0FBQUEsSUFDSXlDLFFBQVEsR0FBR3pDLG1CQUFPLENBQUMscURBQUQsQ0FEdEI7QUFBQSxJQUVJdUYsUUFBUSxHQUFHdkYsbUJBQU8sQ0FBQyxxREFBRCxDQUZ0QjtBQUlBOzs7QUFDQSxJQUFJMEYsR0FBRyxHQUFHLElBQUksQ0FBZDtBQUVBOztBQUNBLElBQUlDLFVBQVUsR0FBRyxvQkFBakI7QUFFQTs7QUFDQSxJQUFJQyxVQUFVLEdBQUcsWUFBakI7QUFFQTs7QUFDQSxJQUFJQyxTQUFTLEdBQUcsYUFBaEI7QUFFQTs7QUFDQSxJQUFJQyxZQUFZLEdBQUdDLFFBQW5CO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFDQSxTQUFTcEQsUUFBVCxDQUFrQi9CLEtBQWxCLEVBQXlCO0FBQ3ZCLE1BQUksT0FBT0EsS0FBUCxJQUFnQixRQUFwQixFQUE4QjtBQUM1QixXQUFPQSxLQUFQO0FBQ0Q7O0FBQ0QsTUFBSTJFLFFBQVEsQ0FBQzNFLEtBQUQsQ0FBWixFQUFxQjtBQUNuQixXQUFPOEUsR0FBUDtBQUNEOztBQUNELE1BQUlqRCxRQUFRLENBQUM3QixLQUFELENBQVosRUFBcUI7QUFDbkIsUUFBSW9GLEtBQUssR0FBRyxPQUFPcEYsS0FBSyxDQUFDcUYsT0FBYixJQUF3QixVQUF4QixHQUFxQ3JGLEtBQUssQ0FBQ3FGLE9BQU4sRUFBckMsR0FBdURyRixLQUFuRTtBQUNBQSxTQUFLLEdBQUc2QixRQUFRLENBQUN1RCxLQUFELENBQVIsR0FBbUJBLEtBQUssR0FBRyxFQUEzQixHQUFpQ0EsS0FBekM7QUFDRDs7QUFDRCxNQUFJLE9BQU9wRixLQUFQLElBQWdCLFFBQXBCLEVBQThCO0FBQzVCLFdBQU9BLEtBQUssS0FBSyxDQUFWLEdBQWNBLEtBQWQsR0FBc0IsQ0FBQ0EsS0FBOUI7QUFDRDs7QUFDREEsT0FBSyxHQUFHSSxRQUFRLENBQUNKLEtBQUQsQ0FBaEI7QUFDQSxNQUFJc0YsUUFBUSxHQUFHTixVQUFVLENBQUNyRCxJQUFYLENBQWdCM0IsS0FBaEIsQ0FBZjtBQUNBLFNBQVFzRixRQUFRLElBQUlMLFNBQVMsQ0FBQ3RELElBQVYsQ0FBZTNCLEtBQWYsQ0FBYixHQUNIa0YsWUFBWSxDQUFDbEYsS0FBSyxDQUFDTSxLQUFOLENBQVksQ0FBWixDQUFELEVBQWlCZ0YsUUFBUSxHQUFHLENBQUgsR0FBTyxDQUFoQyxDQURULEdBRUZQLFVBQVUsQ0FBQ3BELElBQVgsQ0FBZ0IzQixLQUFoQixJQUF5QjhFLEdBQXpCLEdBQStCLENBQUM5RSxLQUZyQztBQUdEOztBQUVEVixNQUFNLENBQUNDLE9BQVAsR0FBaUJ3QyxRQUFqQixDOzs7Ozs7Ozs7Ozs7O0FDL0RBLElBQUl3RCxDQUFKLEMsQ0FFQTs7QUFDQUEsQ0FBQyxHQUFJLFlBQVc7QUFDZixTQUFPLElBQVA7QUFDQSxDQUZHLEVBQUo7O0FBSUEsSUFBSTtBQUNIO0FBQ0FBLEdBQUMsR0FBR0EsQ0FBQyxJQUFJLElBQUloRSxRQUFKLENBQWEsYUFBYixHQUFUO0FBQ0EsQ0FIRCxDQUdFLE9BQU9KLENBQVAsRUFBVTtBQUNYO0FBQ0EsTUFBSSxRQUFPcUUsTUFBUCx5Q0FBT0EsTUFBUCxPQUFrQixRQUF0QixFQUFnQ0QsQ0FBQyxHQUFHQyxNQUFKO0FBQ2hDLEMsQ0FFRDtBQUNBO0FBQ0E7OztBQUVBbEcsTUFBTSxDQUFDQyxPQUFQLEdBQWlCZ0csQ0FBakIsQzs7Ozs7Ozs7Ozs7O0FDbkJBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7Ozs7QUNMQTtBQUFBO0FBQUE7QUFBQTtBQUdBOztBQUNBRSw2Q0FBQyxDQUFDLFdBQUQsQ0FBRCxDQUFlQyxFQUFmLENBQWtCLE9BQWxCLEVBQTBCLFVBQVN2RSxDQUFULEVBQVc7QUFDakNBLEdBQUMsQ0FBQ3dFLGNBQUY7QUFDQSxNQUFJQyxNQUFNLEdBQUcsaUJBQWI7QUFFQSxNQUFJQyxhQUFhLEdBQUdDLE1BQU0sQ0FBQyxZQUFELENBQU4sQ0FBcUJDLEdBQXJCLEVBQXBCO0FBQ0EsTUFBSUMsWUFBWSxHQUFHRixNQUFNLENBQUMsV0FBRCxDQUFOLENBQW9CQyxHQUFwQixFQUFuQjtBQUNBLE1BQUlFLFNBQVMsR0FBR0gsTUFBTSxDQUFDLFFBQUQsQ0FBTixDQUFpQkMsR0FBakIsRUFBaEI7QUFDQSxNQUFJRyxZQUFZLEdBQUdKLE1BQU0sQ0FBQyxXQUFELENBQU4sQ0FBb0JDLEdBQXBCLEVBQW5CO0FBQ0EsTUFBSUksU0FBUyxHQUFHTCxNQUFNLENBQUMsUUFBRCxDQUFOLENBQWlCQyxHQUFqQixFQUFoQjtBQUNBLE1BQUlLLFlBQVksR0FBR04sTUFBTSxDQUFDLFdBQUQsQ0FBTixDQUFvQkMsR0FBcEIsRUFBbkI7QUFFQSxNQUFJTSxXQUFXLEdBQUdQLE1BQU0sQ0FBQyxVQUFELENBQU4sQ0FBbUJDLEdBQW5CLEVBQWxCO0FBQ0EsTUFBSU8sU0FBUyxHQUFHUixNQUFNLENBQUMsUUFBRCxDQUFOLENBQWlCQyxHQUFqQixFQUFoQjtBQUNBLE1BQUlRLFdBQVcsR0FBR1QsTUFBTSxDQUFDLFVBQUQsQ0FBTixDQUFtQkMsR0FBbkIsRUFBbEI7QUFDQSxNQUFJUyxRQUFRLEdBQUdWLE1BQU0sQ0FBQyxPQUFELENBQU4sQ0FBZ0JDLEdBQWhCLEVBQWY7QUFDQSxNQUFJVSxXQUFXLEdBQUdYLE1BQU0sQ0FBQyxVQUFELENBQU4sQ0FBbUJDLEdBQW5CLEVBQWxCO0FBQ0EsTUFBSVcsZUFBZSxHQUFHWixNQUFNLENBQUMsY0FBRCxDQUFOLENBQXVCQyxHQUF2QixFQUF0QjtBQUNBLE1BQUlZLGNBQWMsR0FBR2IsTUFBTSxDQUFDLGFBQUQsQ0FBTixDQUFzQkMsR0FBdEIsRUFBckI7QUFFQSxNQUFJYSxZQUFZLEdBQUdkLE1BQU0sQ0FBQyxlQUFELENBQU4sQ0FBd0JDLEdBQXhCLEVBQW5CO0FBQ0EsTUFBSWMsbUJBQW1CLEdBQUdmLE1BQU0sQ0FBQyxrQkFBRCxDQUFOLENBQTJCQyxHQUEzQixFQUExQjtBQUVBLE1BQUllLFFBQVEsR0FBRztBQUNYbEIsVUFBTSxFQUFFLGlCQURHO0FBRVhtQixhQUFTLEVBQUVsQixhQUZBO0FBR1htQixZQUFRLEVBQUVoQixZQUhDO0FBSVhpQixTQUFLLEVBQUVoQixTQUpJO0FBS1hpQixZQUFRLEVBQUVoQixZQUxDO0FBTVhpQixTQUFLLEVBQUVoQixTQU5JO0FBT1hpQixZQUFRLEVBQUVoQixZQVBDO0FBUVhpQixXQUFPLEVBQUVoQixXQVJFO0FBU1hpQixTQUFLLEVBQUVoQixTQVRJO0FBVVhpQixXQUFPLEVBQUVoQixXQVZFO0FBV1hpQixRQUFJLEVBQUVoQixRQVhLO0FBWVhpQixXQUFPLEVBQUVoQixXQVpFO0FBYVhpQixlQUFXLEVBQUVoQixlQWJGO0FBY1hpQixjQUFVLEVBQUVoQixjQWREO0FBZVhpQixZQUFRLEVBQUVoQixZQWZDO0FBZ0JYaUIsbUJBQWUsRUFBRWhCO0FBaEJOLEdBQWY7QUFvQkFmLFFBQU0sQ0FBQ2dDLElBQVAsQ0FBWTtBQUNSdEQsUUFBSSxFQUFHLE1BREM7QUFFUnVELFlBQVEsRUFBRyxNQUZIO0FBR1JDLE9BQUcsRUFBR0MsT0FIRTtBQUlSQyxRQUFJLEVBQUdwQixRQUpDO0FBS1JxQixXQUFPLEVBQUUsaUJBQVNDLFFBQVQsRUFBbUI7QUFDeEIsVUFBR0EsUUFBUSxDQUFDRCxPQUFULElBQW1CLEdBQXRCLEVBQTJCO0FBQ3ZCckMsY0FBTSxDQUFDLGdCQUFELENBQU4sQ0FBeUJ1QyxJQUF6QixDQUE4QkQsUUFBUSxDQUFDRSxPQUF2QztBQUNBeEMsY0FBTSxDQUFDLGlCQUFELENBQU4sQ0FBMEJ5QyxPQUExQixDQUFrQyxPQUFsQztBQUNILE9BSEQsTUFJSTtBQUNBekMsY0FBTSxDQUFDLGdCQUFELENBQU4sQ0FBeUJ1QyxJQUF6QixDQUE4QkQsUUFBUSxDQUFDSSxZQUF2QztBQUNIO0FBQ0o7QUFiTyxHQUFaO0FBZUgsQ0F6REQsRTs7Ozs7Ozs7Ozs7Ozs7Ozs7SUNKTUMsVTtBQUNGLHdCQUFhO0FBQUE7O0FBQ1QsU0FBS0MsUUFBTCxHQUFnQkMsUUFBUSxDQUFDQyxhQUFULENBQXVCLHlCQUF2QixDQUFoQjtBQUNBLFNBQUtDLFdBQUwsR0FBbUJGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixtQ0FBdkIsQ0FBbkI7QUFDQSxTQUFLRSxNQUFMO0FBQ0g7Ozs7V0FDRCxrQkFBUTtBQUFBOztBQUNKLFdBQUtKLFFBQUwsQ0FBY0ssZ0JBQWQsQ0FBK0IsT0FBL0IsRUFBd0M7QUFBQSxlQUFNLEtBQUksQ0FBQ0MsYUFBTCxFQUFOO0FBQUEsT0FBeEM7QUFDSDs7O1dBRUQseUJBQWU7QUFDWCxXQUFLSCxXQUFMLENBQWlCSSxTQUFqQixDQUEyQkMsTUFBM0IsQ0FBa0MsOENBQWxDO0FBQ0EsV0FBS1IsUUFBTCxDQUFjTyxTQUFkLENBQXdCQyxNQUF4QixDQUErQixpQ0FBL0I7QUFDSDs7Ozs7O0FBR0wsSUFBSVQsVUFBSixHOzs7Ozs7Ozs7Ozs7QUNoQkE7QUFBQTtBQUFBO0FBQUE7QUFFQWhELDZDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsRUFBeEIsQ0FBMkIsWUFBM0IsRUFBeUMseUJBQXpDLEVBQW9FLFVBQUN2RSxDQUFELEVBQU07QUFFdEUsTUFBRyxDQUFDc0UsNkNBQUMsQ0FBQ3RFLENBQUMsQ0FBQ2dJLGFBQUgsQ0FBRCxDQUFtQkMsT0FBbkIsQ0FBMkIsV0FBM0IsRUFBd0MxSCxNQUE1QyxFQUFtRDtBQUMvQytELGlEQUFDLENBQUMseUJBQUQsQ0FBRCxDQUE2QjRELElBQTdCLENBQWtDLG9CQUFsQyxFQUF3RGQsT0FBeEQsQ0FBZ0UsT0FBaEU7QUFDSDs7QUFDRDlDLCtDQUFDLENBQUN0RSxDQUFDLENBQUNnSSxhQUFILENBQUQsQ0FBbUJHLFFBQW5CLENBQTRCLE1BQTVCO0FBQ0gsQ0FORCxFQU1HNUQsRUFOSCxDQU1NLFlBTk4sRUFNb0IseUJBTnBCLEVBTStDLFVBQUN2RSxDQUFELEVBQU07QUFDakRzRSwrQ0FBQyxDQUFDdEUsQ0FBQyxDQUFDZ0ksYUFBSCxDQUFELENBQW1CSSxXQUFuQixDQUErQixNQUEvQjtBQUNILENBUkQsRTs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNGQTtBQUNBOztJQUVNQyxZO0FBQ0osMEJBQWM7QUFBQTs7QUFDWixTQUFLQyxZQUFMLEdBQW9CZCxRQUFRLENBQUNlLGdCQUFULENBQTBCLGVBQTFCLENBQXBCO0FBQ0EsU0FBS0MsYUFBTCxHQUFxQm5FLE1BQU0sQ0FBQ29FLFdBQTVCO0FBQ0EsU0FBS0MsZUFBTCxHQUF1QnJFLE1BQU0sQ0FBQ3NFLE9BQTlCO0FBQ0EsU0FBS2hCLE1BQUw7QUFDRDs7OztXQUVELGtCQUFTO0FBQUE7O0FBQ1B0RCxZQUFNLENBQUN1RCxnQkFBUCxDQUF3QixRQUF4QixFQUFrQ2xFLHNEQUFRLENBQUM7QUFBQSxlQUFNLEtBQUksQ0FBQ2tGLFdBQUwsRUFBTjtBQUFBLE9BQUQsRUFBMkIsRUFBM0IsQ0FBMUM7QUFDQXZFLFlBQU0sQ0FBQ3VELGdCQUFQLENBQXdCLFFBQXhCLEVBQWtDekcsc0RBQVEsQ0FBQyxZQUFNO0FBQy9DLGFBQUksQ0FBQ3FILGFBQUwsR0FBcUJuRSxNQUFNLENBQUNvRSxXQUE1QjtBQUNELE9BRnlDLEVBRXZDLEdBRnVDLENBQTFDO0FBR0Q7OztXQUVELHVCQUFjO0FBQUE7O0FBQ1osV0FBS0ksd0JBQUw7QUFDQSxXQUFLUCxZQUFMLENBQWtCUSxPQUFsQixDQUEwQixVQUFBQyxFQUFFO0FBQUEsZUFBSSxNQUFJLENBQUNDLFdBQUwsQ0FBaUJELEVBQWpCLENBQUo7QUFBQSxPQUE1QjtBQUNEOzs7V0FFRCxvQ0FBMkI7QUFDekIsVUFBSTFFLE1BQU0sQ0FBQ3NFLE9BQVAsR0FBaUIsS0FBS0QsZUFBMUIsRUFBMkM7QUFDekMsYUFBS08sZUFBTCxHQUF1QixNQUF2QjtBQUNELE9BRkQsTUFFTztBQUNMLGFBQUtBLGVBQUwsR0FBdUIsSUFBdkI7QUFDRDs7QUFDRCxXQUFLUCxlQUFMLEdBQXVCckUsTUFBTSxDQUFDc0UsT0FBOUI7QUFDRDs7O1dBRUQscUJBQVlJLEVBQVosRUFBZ0I7QUFDZCxVQUFJMUUsTUFBTSxDQUFDc0UsT0FBUCxHQUFpQixLQUFLSCxhQUF0QixHQUFzQ08sRUFBRSxDQUFDRyxTQUF6QyxJQUFzRDdFLE1BQU0sQ0FBQ3NFLE9BQVAsR0FBaUJJLEVBQUUsQ0FBQ0csU0FBSCxHQUFlSCxFQUFFLENBQUNJLFlBQTdGLEVBQTJHO0FBQ3pHLFlBQUlDLGFBQWEsR0FBSUwsRUFBRSxDQUFDTSxxQkFBSCxHQUEyQkMsR0FBM0IsR0FBaUMsS0FBS2QsYUFBdkMsR0FBd0QsR0FBNUU7O0FBQ0EsWUFBTVksYUFBYSxHQUFHLEVBQWhCLElBQXNCQSxhQUFhLEdBQUcsQ0FBdEMsSUFBMkMsS0FBS0gsZUFBTCxJQUF3QixNQUFwRSxJQUFnRkcsYUFBYSxHQUFHLEVBQWhCLElBQXNCLEtBQUtILGVBQUwsSUFBd0IsSUFBbkksRUFBMEk7QUFDeEksY0FBSU0sWUFBWSxHQUFHUixFQUFFLENBQUNTLFlBQUgsQ0FBZ0Isb0JBQWhCLENBQW5CO0FBQ0FoQyxrQkFBUSxDQUFDZSxnQkFBVCw2QkFBK0NnQixZQUEvQyxRQUFnRVQsT0FBaEUsQ0FBd0UsVUFBQUMsRUFBRTtBQUFBLG1CQUFJQSxFQUFFLENBQUNqQixTQUFILENBQWEyQixNQUFiLENBQW9CLHVCQUFwQixDQUFKO0FBQUEsV0FBMUUsRUFGd0ksQ0FHeEk7QUFDRDtBQUNGO0FBQ0Y7Ozs7OztBQUdILElBQUlwQixZQUFKLEc7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQzVDQTs7SUFFTUEsWTtBQUVMLDBCQUFjO0FBQUE7O0FBQ2IsU0FBS3FCLFVBQUwsR0FBa0JsQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsY0FBdkIsQ0FBbEI7QUFDQSxTQUFLRSxNQUFMO0FBQ0E7Ozs7V0FFRCxrQkFBUztBQUFBOztBQUNSdEQsWUFBTSxDQUFDdUQsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0NsRSxzREFBUSxDQUFDO0FBQUEsZUFBTSxLQUFJLENBQUNpRyxrQkFBTCxFQUFOO0FBQUEsT0FBRCxFQUFrQyxHQUFsQyxDQUExQztBQUNBOzs7V0FFRCw4QkFBcUI7QUFDcEIsVUFBSXRGLE1BQU0sQ0FBQ3NFLE9BQVAsR0FBaUIsR0FBckIsRUFBMEI7QUFDekIsYUFBS2UsVUFBTCxDQUFnQjVCLFNBQWhCLENBQTBCOEIsR0FBMUIsQ0FBOEIsd0JBQTlCO0FBQ0EsT0FGRCxNQUVPO0FBQ04sYUFBS0YsVUFBTCxDQUFnQjVCLFNBQWhCLENBQTBCMkIsTUFBMUIsQ0FBaUMsd0JBQWpDO0FBQ0E7QUFDRDs7Ozs7O0FBR0YsSUFBSXBCLFlBQUosRzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUN0QkEsd0IiLCJmaWxlIjoiYnVuZGxlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDApO1xuIiwidmFyIHJvb3QgPSByZXF1aXJlKCcuL19yb290Jyk7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIFN5bWJvbCA9IHJvb3QuU3ltYm9sO1xuXG5tb2R1bGUuZXhwb3J0cyA9IFN5bWJvbDtcbiIsInZhciBTeW1ib2wgPSByZXF1aXJlKCcuL19TeW1ib2wnKSxcbiAgICBnZXRSYXdUYWcgPSByZXF1aXJlKCcuL19nZXRSYXdUYWcnKSxcbiAgICBvYmplY3RUb1N0cmluZyA9IHJlcXVpcmUoJy4vX29iamVjdFRvU3RyaW5nJyk7XG5cbi8qKiBgT2JqZWN0I3RvU3RyaW5nYCByZXN1bHQgcmVmZXJlbmNlcy4gKi9cbnZhciBudWxsVGFnID0gJ1tvYmplY3QgTnVsbF0nLFxuICAgIHVuZGVmaW5lZFRhZyA9ICdbb2JqZWN0IFVuZGVmaW5lZF0nO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1Ub1N0cmluZ1RhZyA9IFN5bWJvbCA/IFN5bWJvbC50b1N0cmluZ1RhZyA6IHVuZGVmaW5lZDtcblxuLyoqXG4gKiBUaGUgYmFzZSBpbXBsZW1lbnRhdGlvbiBvZiBgZ2V0VGFnYCB3aXRob3V0IGZhbGxiYWNrcyBmb3IgYnVnZ3kgZW52aXJvbm1lbnRzLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBxdWVyeS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGJhc2VHZXRUYWcodmFsdWUpIHtcbiAgaWYgKHZhbHVlID09IG51bGwpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IHVuZGVmaW5lZCA/IHVuZGVmaW5lZFRhZyA6IG51bGxUYWc7XG4gIH1cbiAgcmV0dXJuIChzeW1Ub1N0cmluZ1RhZyAmJiBzeW1Ub1N0cmluZ1RhZyBpbiBPYmplY3QodmFsdWUpKVxuICAgID8gZ2V0UmF3VGFnKHZhbHVlKVxuICAgIDogb2JqZWN0VG9TdHJpbmcodmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGJhc2VHZXRUYWc7XG4iLCJ2YXIgdHJpbW1lZEVuZEluZGV4ID0gcmVxdWlyZSgnLi9fdHJpbW1lZEVuZEluZGV4Jyk7XG5cbi8qKiBVc2VkIHRvIG1hdGNoIGxlYWRpbmcgd2hpdGVzcGFjZS4gKi9cbnZhciByZVRyaW1TdGFydCA9IC9eXFxzKy87XG5cbi8qKlxuICogVGhlIGJhc2UgaW1wbGVtZW50YXRpb24gb2YgYF8udHJpbWAuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byB0cmltLlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgdHJpbW1lZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIGJhc2VUcmltKHN0cmluZykge1xuICByZXR1cm4gc3RyaW5nXG4gICAgPyBzdHJpbmcuc2xpY2UoMCwgdHJpbW1lZEVuZEluZGV4KHN0cmluZykgKyAxKS5yZXBsYWNlKHJlVHJpbVN0YXJ0LCAnJylcbiAgICA6IHN0cmluZztcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBiYXNlVHJpbTtcbiIsIi8qKiBEZXRlY3QgZnJlZSB2YXJpYWJsZSBgZ2xvYmFsYCBmcm9tIE5vZGUuanMuICovXG52YXIgZnJlZUdsb2JhbCA9IHR5cGVvZiBnbG9iYWwgPT0gJ29iamVjdCcgJiYgZ2xvYmFsICYmIGdsb2JhbC5PYmplY3QgPT09IE9iamVjdCAmJiBnbG9iYWw7XG5cbm1vZHVsZS5leHBvcnRzID0gZnJlZUdsb2JhbDtcbiIsInZhciBTeW1ib2wgPSByZXF1aXJlKCcuL19TeW1ib2wnKTtcblxuLyoqIFVzZWQgZm9yIGJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzLiAqL1xudmFyIG9iamVjdFByb3RvID0gT2JqZWN0LnByb3RvdHlwZTtcblxuLyoqIFVzZWQgdG8gY2hlY2sgb2JqZWN0cyBmb3Igb3duIHByb3BlcnRpZXMuICovXG52YXIgaGFzT3duUHJvcGVydHkgPSBvYmplY3RQcm90by5oYXNPd25Qcm9wZXJ0eTtcblxuLyoqXG4gKiBVc2VkIHRvIHJlc29sdmUgdGhlXG4gKiBbYHRvU3RyaW5nVGFnYF0oaHR0cDovL2VjbWEtaW50ZXJuYXRpb25hbC5vcmcvZWNtYS0yNjIvNy4wLyNzZWMtb2JqZWN0LnByb3RvdHlwZS50b3N0cmluZylcbiAqIG9mIHZhbHVlcy5cbiAqL1xudmFyIG5hdGl2ZU9iamVjdFRvU3RyaW5nID0gb2JqZWN0UHJvdG8udG9TdHJpbmc7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIHN5bVRvU3RyaW5nVGFnID0gU3ltYm9sID8gU3ltYm9sLnRvU3RyaW5nVGFnIDogdW5kZWZpbmVkO1xuXG4vKipcbiAqIEEgc3BlY2lhbGl6ZWQgdmVyc2lvbiBvZiBgYmFzZUdldFRhZ2Agd2hpY2ggaWdub3JlcyBgU3ltYm9sLnRvU3RyaW5nVGFnYCB2YWx1ZXMuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHF1ZXJ5LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgcmF3IGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGdldFJhd1RhZyh2YWx1ZSkge1xuICB2YXIgaXNPd24gPSBoYXNPd25Qcm9wZXJ0eS5jYWxsKHZhbHVlLCBzeW1Ub1N0cmluZ1RhZyksXG4gICAgICB0YWcgPSB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ107XG5cbiAgdHJ5IHtcbiAgICB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ10gPSB1bmRlZmluZWQ7XG4gICAgdmFyIHVubWFza2VkID0gdHJ1ZTtcbiAgfSBjYXRjaCAoZSkge31cblxuICB2YXIgcmVzdWx0ID0gbmF0aXZlT2JqZWN0VG9TdHJpbmcuY2FsbCh2YWx1ZSk7XG4gIGlmICh1bm1hc2tlZCkge1xuICAgIGlmIChpc093bikge1xuICAgICAgdmFsdWVbc3ltVG9TdHJpbmdUYWddID0gdGFnO1xuICAgIH0gZWxzZSB7XG4gICAgICBkZWxldGUgdmFsdWVbc3ltVG9TdHJpbmdUYWddO1xuICAgIH1cbiAgfVxuICByZXR1cm4gcmVzdWx0O1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGdldFJhd1RhZztcbiIsIi8qKiBVc2VkIGZvciBidWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcy4gKi9cbnZhciBvYmplY3RQcm90byA9IE9iamVjdC5wcm90b3R5cGU7XG5cbi8qKlxuICogVXNlZCB0byByZXNvbHZlIHRoZVxuICogW2B0b1N0cmluZ1RhZ2BdKGh0dHA6Ly9lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLW9iamVjdC5wcm90b3R5cGUudG9zdHJpbmcpXG4gKiBvZiB2YWx1ZXMuXG4gKi9cbnZhciBuYXRpdmVPYmplY3RUb1N0cmluZyA9IG9iamVjdFByb3RvLnRvU3RyaW5nO1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBzdHJpbmcgdXNpbmcgYE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjb252ZXJ0LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgY29udmVydGVkIHN0cmluZy5cbiAqL1xuZnVuY3Rpb24gb2JqZWN0VG9TdHJpbmcodmFsdWUpIHtcbiAgcmV0dXJuIG5hdGl2ZU9iamVjdFRvU3RyaW5nLmNhbGwodmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IG9iamVjdFRvU3RyaW5nO1xuIiwidmFyIGZyZWVHbG9iYWwgPSByZXF1aXJlKCcuL19mcmVlR2xvYmFsJyk7XG5cbi8qKiBEZXRlY3QgZnJlZSB2YXJpYWJsZSBgc2VsZmAuICovXG52YXIgZnJlZVNlbGYgPSB0eXBlb2Ygc2VsZiA9PSAnb2JqZWN0JyAmJiBzZWxmICYmIHNlbGYuT2JqZWN0ID09PSBPYmplY3QgJiYgc2VsZjtcblxuLyoqIFVzZWQgYXMgYSByZWZlcmVuY2UgdG8gdGhlIGdsb2JhbCBvYmplY3QuICovXG52YXIgcm9vdCA9IGZyZWVHbG9iYWwgfHwgZnJlZVNlbGYgfHwgRnVuY3Rpb24oJ3JldHVybiB0aGlzJykoKTtcblxubW9kdWxlLmV4cG9ydHMgPSByb290O1xuIiwiLyoqIFVzZWQgdG8gbWF0Y2ggYSBzaW5nbGUgd2hpdGVzcGFjZSBjaGFyYWN0ZXIuICovXG52YXIgcmVXaGl0ZXNwYWNlID0gL1xccy87XG5cbi8qKlxuICogVXNlZCBieSBgXy50cmltYCBhbmQgYF8udHJpbUVuZGAgdG8gZ2V0IHRoZSBpbmRleCBvZiB0aGUgbGFzdCBub24td2hpdGVzcGFjZVxuICogY2hhcmFjdGVyIG9mIGBzdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0ge3N0cmluZ30gc3RyaW5nIFRoZSBzdHJpbmcgdG8gaW5zcGVjdC5cbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIGluZGV4IG9mIHRoZSBsYXN0IG5vbi13aGl0ZXNwYWNlIGNoYXJhY3Rlci5cbiAqL1xuZnVuY3Rpb24gdHJpbW1lZEVuZEluZGV4KHN0cmluZykge1xuICB2YXIgaW5kZXggPSBzdHJpbmcubGVuZ3RoO1xuXG4gIHdoaWxlIChpbmRleC0tICYmIHJlV2hpdGVzcGFjZS50ZXN0KHN0cmluZy5jaGFyQXQoaW5kZXgpKSkge31cbiAgcmV0dXJuIGluZGV4O1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRyaW1tZWRFbmRJbmRleDtcbiIsInZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKSxcbiAgICBub3cgPSByZXF1aXJlKCcuL25vdycpLFxuICAgIHRvTnVtYmVyID0gcmVxdWlyZSgnLi90b051bWJlcicpO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKiBCdWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcyBmb3IgdGhvc2Ugd2l0aCB0aGUgc2FtZSBuYW1lIGFzIG90aGVyIGBsb2Rhc2hgIG1ldGhvZHMuICovXG52YXIgbmF0aXZlTWF4ID0gTWF0aC5tYXgsXG4gICAgbmF0aXZlTWluID0gTWF0aC5taW47XG5cbi8qKlxuICogQ3JlYXRlcyBhIGRlYm91bmNlZCBmdW5jdGlvbiB0aGF0IGRlbGF5cyBpbnZva2luZyBgZnVuY2AgdW50aWwgYWZ0ZXIgYHdhaXRgXG4gKiBtaWxsaXNlY29uZHMgaGF2ZSBlbGFwc2VkIHNpbmNlIHRoZSBsYXN0IHRpbWUgdGhlIGRlYm91bmNlZCBmdW5jdGlvbiB3YXNcbiAqIGludm9rZWQuIFRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgIG1ldGhvZCB0byBjYW5jZWxcbiAqIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvIGltbWVkaWF0ZWx5IGludm9rZSB0aGVtLlxuICogUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2Agc2hvdWxkIGJlIGludm9rZWQgb24gdGhlXG4gKiBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGAgdGltZW91dC4gVGhlIGBmdW5jYCBpcyBpbnZva2VkXG4gKiB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uLiBTdWJzZXF1ZW50XG4gKiBjYWxscyB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uIHJldHVybiB0aGUgcmVzdWx0IG9mIHRoZSBsYXN0IGBmdW5jYFxuICogaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIGRlYm91bmNlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy5kZWJvdW5jZWAgYW5kIGBfLnRocm90dGxlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIGRlYm91bmNlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIGRlbGF5LlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9ZmFsc2VdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgbGVhZGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0LlxuICogQHBhcmFtIHtudW1iZXJ9IFtvcHRpb25zLm1heFdhaXRdXG4gKiAgVGhlIG1heGltdW0gdGltZSBgZnVuY2AgaXMgYWxsb3dlZCB0byBiZSBkZWxheWVkIGJlZm9yZSBpdCdzIGludm9rZWQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IGRlYm91bmNlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgY29zdGx5IGNhbGN1bGF0aW9ucyB3aGlsZSB0aGUgd2luZG93IHNpemUgaXMgaW4gZmx1eC5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdyZXNpemUnLCBfLmRlYm91bmNlKGNhbGN1bGF0ZUxheW91dCwgMTUwKSk7XG4gKlxuICogLy8gSW52b2tlIGBzZW5kTWFpbGAgd2hlbiBjbGlja2VkLCBkZWJvdW5jaW5nIHN1YnNlcXVlbnQgY2FsbHMuXG4gKiBqUXVlcnkoZWxlbWVudCkub24oJ2NsaWNrJywgXy5kZWJvdW5jZShzZW5kTWFpbCwgMzAwLCB7XG4gKiAgICdsZWFkaW5nJzogdHJ1ZSxcbiAqICAgJ3RyYWlsaW5nJzogZmFsc2VcbiAqIH0pKTtcbiAqXG4gKiAvLyBFbnN1cmUgYGJhdGNoTG9nYCBpcyBpbnZva2VkIG9uY2UgYWZ0ZXIgMSBzZWNvbmQgb2YgZGVib3VuY2VkIGNhbGxzLlxuICogdmFyIGRlYm91bmNlZCA9IF8uZGVib3VuY2UoYmF0Y2hMb2csIDI1MCwgeyAnbWF4V2FpdCc6IDEwMDAgfSk7XG4gKiB2YXIgc291cmNlID0gbmV3IEV2ZW50U291cmNlKCcvc3RyZWFtJyk7XG4gKiBqUXVlcnkoc291cmNlKS5vbignbWVzc2FnZScsIGRlYm91bmNlZCk7XG4gKlxuICogLy8gQ2FuY2VsIHRoZSB0cmFpbGluZyBkZWJvdW5jZWQgaW52b2NhdGlvbi5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdwb3BzdGF0ZScsIGRlYm91bmNlZC5jYW5jZWwpO1xuICovXG5mdW5jdGlvbiBkZWJvdW5jZShmdW5jLCB3YWl0LCBvcHRpb25zKSB7XG4gIHZhciBsYXN0QXJncyxcbiAgICAgIGxhc3RUaGlzLFxuICAgICAgbWF4V2FpdCxcbiAgICAgIHJlc3VsdCxcbiAgICAgIHRpbWVySWQsXG4gICAgICBsYXN0Q2FsbFRpbWUsXG4gICAgICBsYXN0SW52b2tlVGltZSA9IDAsXG4gICAgICBsZWFkaW5nID0gZmFsc2UsXG4gICAgICBtYXhpbmcgPSBmYWxzZSxcbiAgICAgIHRyYWlsaW5nID0gdHJ1ZTtcblxuICBpZiAodHlwZW9mIGZ1bmMgIT0gJ2Z1bmN0aW9uJykge1xuICAgIHRocm93IG5ldyBUeXBlRXJyb3IoRlVOQ19FUlJPUl9URVhUKTtcbiAgfVxuICB3YWl0ID0gdG9OdW1iZXIod2FpdCkgfHwgMDtcbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICEhb3B0aW9ucy5sZWFkaW5nO1xuICAgIG1heGluZyA9ICdtYXhXYWl0JyBpbiBvcHRpb25zO1xuICAgIG1heFdhaXQgPSBtYXhpbmcgPyBuYXRpdmVNYXgodG9OdW1iZXIob3B0aW9ucy5tYXhXYWl0KSB8fCAwLCB3YWl0KSA6IG1heFdhaXQ7XG4gICAgdHJhaWxpbmcgPSAndHJhaWxpbmcnIGluIG9wdGlvbnMgPyAhIW9wdGlvbnMudHJhaWxpbmcgOiB0cmFpbGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIGludm9rZUZ1bmModGltZSkge1xuICAgIHZhciBhcmdzID0gbGFzdEFyZ3MsXG4gICAgICAgIHRoaXNBcmcgPSBsYXN0VGhpcztcblxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgbGFzdEludm9rZVRpbWUgPSB0aW1lO1xuICAgIHJlc3VsdCA9IGZ1bmMuYXBwbHkodGhpc0FyZywgYXJncyk7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGxlYWRpbmdFZGdlKHRpbWUpIHtcbiAgICAvLyBSZXNldCBhbnkgYG1heFdhaXRgIHRpbWVyLlxuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICAvLyBTdGFydCB0aGUgdGltZXIgZm9yIHRoZSB0cmFpbGluZyBlZGdlLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgLy8gSW52b2tlIHRoZSBsZWFkaW5nIGVkZ2UuXG4gICAgcmV0dXJuIGxlYWRpbmcgPyBpbnZva2VGdW5jKHRpbWUpIDogcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gcmVtYWluaW5nV2FpdCh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZSxcbiAgICAgICAgdGltZVdhaXRpbmcgPSB3YWl0IC0gdGltZVNpbmNlTGFzdENhbGw7XG5cbiAgICByZXR1cm4gbWF4aW5nXG4gICAgICA/IG5hdGl2ZU1pbih0aW1lV2FpdGluZywgbWF4V2FpdCAtIHRpbWVTaW5jZUxhc3RJbnZva2UpXG4gICAgICA6IHRpbWVXYWl0aW5nO1xuICB9XG5cbiAgZnVuY3Rpb24gc2hvdWxkSW52b2tlKHRpbWUpIHtcbiAgICB2YXIgdGltZVNpbmNlTGFzdENhbGwgPSB0aW1lIC0gbGFzdENhbGxUaW1lLFxuICAgICAgICB0aW1lU2luY2VMYXN0SW52b2tlID0gdGltZSAtIGxhc3RJbnZva2VUaW1lO1xuXG4gICAgLy8gRWl0aGVyIHRoaXMgaXMgdGhlIGZpcnN0IGNhbGwsIGFjdGl2aXR5IGhhcyBzdG9wcGVkIGFuZCB3ZSdyZSBhdCB0aGVcbiAgICAvLyB0cmFpbGluZyBlZGdlLCB0aGUgc3lzdGVtIHRpbWUgaGFzIGdvbmUgYmFja3dhcmRzIGFuZCB3ZSdyZSB0cmVhdGluZ1xuICAgIC8vIGl0IGFzIHRoZSB0cmFpbGluZyBlZGdlLCBvciB3ZSd2ZSBoaXQgdGhlIGBtYXhXYWl0YCBsaW1pdC5cbiAgICByZXR1cm4gKGxhc3RDYWxsVGltZSA9PT0gdW5kZWZpbmVkIHx8ICh0aW1lU2luY2VMYXN0Q2FsbCA+PSB3YWl0KSB8fFxuICAgICAgKHRpbWVTaW5jZUxhc3RDYWxsIDwgMCkgfHwgKG1heGluZyAmJiB0aW1lU2luY2VMYXN0SW52b2tlID49IG1heFdhaXQpKTtcbiAgfVxuXG4gIGZ1bmN0aW9uIHRpbWVyRXhwaXJlZCgpIHtcbiAgICB2YXIgdGltZSA9IG5vdygpO1xuICAgIGlmIChzaG91bGRJbnZva2UodGltZSkpIHtcbiAgICAgIHJldHVybiB0cmFpbGluZ0VkZ2UodGltZSk7XG4gICAgfVxuICAgIC8vIFJlc3RhcnQgdGhlIHRpbWVyLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgcmVtYWluaW5nV2FpdCh0aW1lKSk7XG4gIH1cblxuICBmdW5jdGlvbiB0cmFpbGluZ0VkZ2UodGltZSkge1xuICAgIHRpbWVySWQgPSB1bmRlZmluZWQ7XG5cbiAgICAvLyBPbmx5IGludm9rZSBpZiB3ZSBoYXZlIGBsYXN0QXJnc2Agd2hpY2ggbWVhbnMgYGZ1bmNgIGhhcyBiZWVuXG4gICAgLy8gZGVib3VuY2VkIGF0IGxlYXN0IG9uY2UuXG4gICAgaWYgKHRyYWlsaW5nICYmIGxhc3RBcmdzKSB7XG4gICAgICByZXR1cm4gaW52b2tlRnVuYyh0aW1lKTtcbiAgICB9XG4gICAgbGFzdEFyZ3MgPSBsYXN0VGhpcyA9IHVuZGVmaW5lZDtcbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gY2FuY2VsKCkge1xuICAgIGlmICh0aW1lcklkICE9PSB1bmRlZmluZWQpIHtcbiAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICB9XG4gICAgbGFzdEludm9rZVRpbWUgPSAwO1xuICAgIGxhc3RBcmdzID0gbGFzdENhbGxUaW1lID0gbGFzdFRoaXMgPSB0aW1lcklkID0gdW5kZWZpbmVkO1xuICB9XG5cbiAgZnVuY3Rpb24gZmx1c2goKSB7XG4gICAgcmV0dXJuIHRpbWVySWQgPT09IHVuZGVmaW5lZCA/IHJlc3VsdCA6IHRyYWlsaW5nRWRnZShub3coKSk7XG4gIH1cblxuICBmdW5jdGlvbiBkZWJvdW5jZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKSxcbiAgICAgICAgaXNJbnZva2luZyA9IHNob3VsZEludm9rZSh0aW1lKTtcblxuICAgIGxhc3RBcmdzID0gYXJndW1lbnRzO1xuICAgIGxhc3RUaGlzID0gdGhpcztcbiAgICBsYXN0Q2FsbFRpbWUgPSB0aW1lO1xuXG4gICAgaWYgKGlzSW52b2tpbmcpIHtcbiAgICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIGxlYWRpbmdFZGdlKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgICBpZiAobWF4aW5nKSB7XG4gICAgICAgIC8vIEhhbmRsZSBpbnZvY2F0aW9ucyBpbiBhIHRpZ2h0IGxvb3AuXG4gICAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICAgICAgcmV0dXJuIGludm9rZUZ1bmMobGFzdENhbGxUaW1lKTtcbiAgICAgIH1cbiAgICB9XG4gICAgaWYgKHRpbWVySWQgPT09IHVuZGVmaW5lZCkge1xuICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICB9XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuICBkZWJvdW5jZWQuY2FuY2VsID0gY2FuY2VsO1xuICBkZWJvdW5jZWQuZmx1c2ggPSBmbHVzaDtcbiAgcmV0dXJuIGRlYm91bmNlZDtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBkZWJvdW5jZTtcbiIsIi8qKlxuICogQ2hlY2tzIGlmIGB2YWx1ZWAgaXMgdGhlXG4gKiBbbGFuZ3VhZ2UgdHlwZV0oaHR0cDovL3d3dy5lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLWVjbWFzY3JpcHQtbGFuZ3VhZ2UtdHlwZXMpXG4gKiBvZiBgT2JqZWN0YC4gKGUuZy4gYXJyYXlzLCBmdW5jdGlvbnMsIG9iamVjdHMsIHJlZ2V4ZXMsIGBuZXcgTnVtYmVyKDApYCwgYW5kIGBuZXcgU3RyaW5nKCcnKWApXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAwLjEuMFxuICogQGNhdGVnb3J5IExhbmdcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIGNoZWNrLlxuICogQHJldHVybnMge2Jvb2xlYW59IFJldHVybnMgYHRydWVgIGlmIGB2YWx1ZWAgaXMgYW4gb2JqZWN0LCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNPYmplY3Qoe30pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KF8ubm9vcCk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0KHZhbHVlKSB7XG4gIHZhciB0eXBlID0gdHlwZW9mIHZhbHVlO1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiAodHlwZSA9PSAnb2JqZWN0JyB8fCB0eXBlID09ICdmdW5jdGlvbicpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzT2JqZWN0O1xuIiwiLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZS4gQSB2YWx1ZSBpcyBvYmplY3QtbGlrZSBpZiBpdCdzIG5vdCBgbnVsbGBcbiAqIGFuZCBoYXMgYSBgdHlwZW9mYCByZXN1bHQgb2YgXCJvYmplY3RcIi5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZSwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZSh7fSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdExpa2UoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShfLm5vb3ApO1xuICogLy8gPT4gZmFsc2VcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0TGlrZSh2YWx1ZSkge1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiB0eXBlb2YgdmFsdWUgPT0gJ29iamVjdCc7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gaXNPYmplY3RMaWtlO1xuIiwidmFyIGJhc2VHZXRUYWcgPSByZXF1aXJlKCcuL19iYXNlR2V0VGFnJyksXG4gICAgaXNPYmplY3RMaWtlID0gcmVxdWlyZSgnLi9pc09iamVjdExpa2UnKTtcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIHN5bWJvbFRhZyA9ICdbb2JqZWN0IFN5bWJvbF0nO1xuXG4vKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIGNsYXNzaWZpZWQgYXMgYSBgU3ltYm9sYCBwcmltaXRpdmUgb3Igb2JqZWN0LlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGEgc3ltYm9sLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNTeW1ib2woU3ltYm9sLml0ZXJhdG9yKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzU3ltYm9sKCdhYmMnKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzU3ltYm9sKHZhbHVlKSB7XG4gIHJldHVybiB0eXBlb2YgdmFsdWUgPT0gJ3N5bWJvbCcgfHxcbiAgICAoaXNPYmplY3RMaWtlKHZhbHVlKSAmJiBiYXNlR2V0VGFnKHZhbHVlKSA9PSBzeW1ib2xUYWcpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzU3ltYm9sO1xuIiwidmFyIHJvb3QgPSByZXF1aXJlKCcuL19yb290Jyk7XG5cbi8qKlxuICogR2V0cyB0aGUgdGltZXN0YW1wIG9mIHRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRoYXQgaGF2ZSBlbGFwc2VkIHNpbmNlXG4gKiB0aGUgVW5peCBlcG9jaCAoMSBKYW51YXJ5IDE5NzAgMDA6MDA6MDAgVVRDKS5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDIuNC4wXG4gKiBAY2F0ZWdvcnkgRGF0ZVxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgdGltZXN0YW1wLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmRlZmVyKGZ1bmN0aW9uKHN0YW1wKSB7XG4gKiAgIGNvbnNvbGUubG9nKF8ubm93KCkgLSBzdGFtcCk7XG4gKiB9LCBfLm5vdygpKTtcbiAqIC8vID0+IExvZ3MgdGhlIG51bWJlciBvZiBtaWxsaXNlY29uZHMgaXQgdG9vayBmb3IgdGhlIGRlZmVycmVkIGludm9jYXRpb24uXG4gKi9cbnZhciBub3cgPSBmdW5jdGlvbigpIHtcbiAgcmV0dXJuIHJvb3QuRGF0ZS5ub3coKTtcbn07XG5cbm1vZHVsZS5leHBvcnRzID0gbm93O1xuIiwidmFyIGRlYm91bmNlID0gcmVxdWlyZSgnLi9kZWJvdW5jZScpLFxuICAgIGlzT2JqZWN0ID0gcmVxdWlyZSgnLi9pc09iamVjdCcpO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKipcbiAqIENyZWF0ZXMgYSB0aHJvdHRsZWQgZnVuY3Rpb24gdGhhdCBvbmx5IGludm9rZXMgYGZ1bmNgIGF0IG1vc3Qgb25jZSBwZXJcbiAqIGV2ZXJ5IGB3YWl0YCBtaWxsaXNlY29uZHMuIFRoZSB0aHJvdHRsZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgXG4gKiBtZXRob2QgdG8gY2FuY2VsIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvXG4gKiBpbW1lZGlhdGVseSBpbnZva2UgdGhlbS4gUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2BcbiAqIHNob3VsZCBiZSBpbnZva2VkIG9uIHRoZSBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGBcbiAqIHRpbWVvdXQuIFRoZSBgZnVuY2AgaXMgaW52b2tlZCB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGVcbiAqIHRocm90dGxlZCBmdW5jdGlvbi4gU3Vic2VxdWVudCBjYWxscyB0byB0aGUgdGhyb3R0bGVkIGZ1bmN0aW9uIHJldHVybiB0aGVcbiAqIHJlc3VsdCBvZiB0aGUgbGFzdCBgZnVuY2AgaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIHRocm90dGxlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy50aHJvdHRsZWAgYW5kIGBfLmRlYm91bmNlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIHRocm90dGxlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIHRocm90dGxlIGludm9jYXRpb25zIHRvLlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9dHJ1ZV1cbiAqICBTcGVjaWZ5IGludm9raW5nIG9uIHRoZSBsZWFkaW5nIGVkZ2Ugb2YgdGhlIHRpbWVvdXQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IHRocm90dGxlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgZXhjZXNzaXZlbHkgdXBkYXRpbmcgdGhlIHBvc2l0aW9uIHdoaWxlIHNjcm9sbGluZy5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdzY3JvbGwnLCBfLnRocm90dGxlKHVwZGF0ZVBvc2l0aW9uLCAxMDApKTtcbiAqXG4gKiAvLyBJbnZva2UgYHJlbmV3VG9rZW5gIHdoZW4gdGhlIGNsaWNrIGV2ZW50IGlzIGZpcmVkLCBidXQgbm90IG1vcmUgdGhhbiBvbmNlIGV2ZXJ5IDUgbWludXRlcy5cbiAqIHZhciB0aHJvdHRsZWQgPSBfLnRocm90dGxlKHJlbmV3VG9rZW4sIDMwMDAwMCwgeyAndHJhaWxpbmcnOiBmYWxzZSB9KTtcbiAqIGpRdWVyeShlbGVtZW50KS5vbignY2xpY2snLCB0aHJvdHRsZWQpO1xuICpcbiAqIC8vIENhbmNlbCB0aGUgdHJhaWxpbmcgdGhyb3R0bGVkIGludm9jYXRpb24uXG4gKiBqUXVlcnkod2luZG93KS5vbigncG9wc3RhdGUnLCB0aHJvdHRsZWQuY2FuY2VsKTtcbiAqL1xuZnVuY3Rpb24gdGhyb3R0bGUoZnVuYywgd2FpdCwgb3B0aW9ucykge1xuICB2YXIgbGVhZGluZyA9IHRydWUsXG4gICAgICB0cmFpbGluZyA9IHRydWU7XG5cbiAgaWYgKHR5cGVvZiBmdW5jICE9ICdmdW5jdGlvbicpIHtcbiAgICB0aHJvdyBuZXcgVHlwZUVycm9yKEZVTkNfRVJST1JfVEVYVCk7XG4gIH1cbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICdsZWFkaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLmxlYWRpbmcgOiBsZWFkaW5nO1xuICAgIHRyYWlsaW5nID0gJ3RyYWlsaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLnRyYWlsaW5nIDogdHJhaWxpbmc7XG4gIH1cbiAgcmV0dXJuIGRlYm91bmNlKGZ1bmMsIHdhaXQsIHtcbiAgICAnbGVhZGluZyc6IGxlYWRpbmcsXG4gICAgJ21heFdhaXQnOiB3YWl0LFxuICAgICd0cmFpbGluZyc6IHRyYWlsaW5nXG4gIH0pO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRocm90dGxlO1xuIiwidmFyIGJhc2VUcmltID0gcmVxdWlyZSgnLi9fYmFzZVRyaW0nKSxcbiAgICBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKSxcbiAgICBpc1N5bWJvbCA9IHJlcXVpcmUoJy4vaXNTeW1ib2wnKTtcblxuLyoqIFVzZWQgYXMgcmVmZXJlbmNlcyBmb3IgdmFyaW91cyBgTnVtYmVyYCBjb25zdGFudHMuICovXG52YXIgTkFOID0gMCAvIDA7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBiYWQgc2lnbmVkIGhleGFkZWNpbWFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JhZEhleCA9IC9eWy0rXTB4WzAtOWEtZl0rJC9pO1xuXG4vKiogVXNlZCB0byBkZXRlY3QgYmluYXJ5IHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JpbmFyeSA9IC9eMGJbMDFdKyQvaTtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IG9jdGFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc09jdGFsID0gL14wb1swLTddKyQvaTtcblxuLyoqIEJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzIHdpdGhvdXQgYSBkZXBlbmRlbmN5IG9uIGByb290YC4gKi9cbnZhciBmcmVlUGFyc2VJbnQgPSBwYXJzZUludDtcblxuLyoqXG4gKiBDb252ZXJ0cyBgdmFsdWVgIHRvIGEgbnVtYmVyLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBwcm9jZXNzLlxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgbnVtYmVyLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLnRvTnVtYmVyKDMuMik7XG4gKiAvLyA9PiAzLjJcbiAqXG4gKiBfLnRvTnVtYmVyKE51bWJlci5NSU5fVkFMVUUpO1xuICogLy8gPT4gNWUtMzI0XG4gKlxuICogXy50b051bWJlcihJbmZpbml0eSk7XG4gKiAvLyA9PiBJbmZpbml0eVxuICpcbiAqIF8udG9OdW1iZXIoJzMuMicpO1xuICogLy8gPT4gMy4yXG4gKi9cbmZ1bmN0aW9uIHRvTnVtYmVyKHZhbHVlKSB7XG4gIGlmICh0eXBlb2YgdmFsdWUgPT0gJ251bWJlcicpIHtcbiAgICByZXR1cm4gdmFsdWU7XG4gIH1cbiAgaWYgKGlzU3ltYm9sKHZhbHVlKSkge1xuICAgIHJldHVybiBOQU47XG4gIH1cbiAgaWYgKGlzT2JqZWN0KHZhbHVlKSkge1xuICAgIHZhciBvdGhlciA9IHR5cGVvZiB2YWx1ZS52YWx1ZU9mID09ICdmdW5jdGlvbicgPyB2YWx1ZS52YWx1ZU9mKCkgOiB2YWx1ZTtcbiAgICB2YWx1ZSA9IGlzT2JqZWN0KG90aGVyKSA/IChvdGhlciArICcnKSA6IG90aGVyO1xuICB9XG4gIGlmICh0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IDAgPyB2YWx1ZSA6ICt2YWx1ZTtcbiAgfVxuICB2YWx1ZSA9IGJhc2VUcmltKHZhbHVlKTtcbiAgdmFyIGlzQmluYXJ5ID0gcmVJc0JpbmFyeS50ZXN0KHZhbHVlKTtcbiAgcmV0dXJuIChpc0JpbmFyeSB8fCByZUlzT2N0YWwudGVzdCh2YWx1ZSkpXG4gICAgPyBmcmVlUGFyc2VJbnQodmFsdWUuc2xpY2UoMiksIGlzQmluYXJ5ID8gMiA6IDgpXG4gICAgOiAocmVJc0JhZEhleC50ZXN0KHZhbHVlKSA/IE5BTiA6ICt2YWx1ZSk7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gdG9OdW1iZXI7XG4iLCJ2YXIgZztcblxuLy8gVGhpcyB3b3JrcyBpbiBub24tc3RyaWN0IG1vZGVcbmcgPSAoZnVuY3Rpb24oKSB7XG5cdHJldHVybiB0aGlzO1xufSkoKTtcblxudHJ5IHtcblx0Ly8gVGhpcyB3b3JrcyBpZiBldmFsIGlzIGFsbG93ZWQgKHNlZSBDU1ApXG5cdGcgPSBnIHx8IG5ldyBGdW5jdGlvbihcInJldHVybiB0aGlzXCIpKCk7XG59IGNhdGNoIChlKSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgdGhlIHdpbmRvdyByZWZlcmVuY2UgaXMgYXZhaWxhYmxlXG5cdGlmICh0eXBlb2Ygd2luZG93ID09PSBcIm9iamVjdFwiKSBnID0gd2luZG93O1xufVxuXG4vLyBnIGNhbiBzdGlsbCBiZSB1bmRlZmluZWQsIGJ1dCBub3RoaW5nIHRvIGRvIGFib3V0IGl0Li4uXG4vLyBXZSByZXR1cm4gdW5kZWZpbmVkLCBpbnN0ZWFkIG9mIG5vdGhpbmcgaGVyZSwgc28gaXQnc1xuLy8gZWFzaWVyIHRvIGhhbmRsZSB0aGlzIGNhc2UuIGlmKCFnbG9iYWwpIHsgLi4ufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGc7XG4iLCJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudC9uYXZpZ2F0aW9uJztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9tb2JpbGVtZW51JztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9zY3JvbGxuYXZpZ2F0aW9uJztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9zdGlja3loZWFkZXInO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudC9sb2dpbnJlZ2lzdHJhdGlvbic7XHJcbiIsImltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XHJcblxyXG5cclxuLyogUmVnaXN0cmF0aW9uIEFqYXggKi9cclxuJCgnI3JlZ2lzdGVyJykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIHZhciBhY3Rpb24gPSAncmVnaXN0ZXJfYWN0aW9uJztcclxuICAgIFxyXG4gICAgdmFyIGZvcm1maXJzdE5hbWUgPSBqUXVlcnkoXCIjZmlyc3ROYW1lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1sYXN0TmFtZSA9IGpRdWVyeShcIiNsYXN0TmFtZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtZW1haWwgPSBqUXVlcnkoXCIjZW1haWxcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWFsdEVtYWlsID0galF1ZXJ5KFwiI2FsdEVtYWlsXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1waG9uZSA9IGpRdWVyeShcIiNwaG9uZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtYWx0UGhvbmUgPSBqUXVlcnkoXCIjYWx0UGhvbmVcIikudmFsKCk7XHJcblxyXG4gICAgdmFyIGZvcm1jb3VudHJ5ID0galF1ZXJ5KFwiI2NvdW50cnlcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybXN0YXRlID0galF1ZXJ5KFwiI3N0YXRlXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1hZGRyZXNzID0galF1ZXJ5KFwiI2FkZHJlc3NcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNpdHkgPSBqUXVlcnkoXCIjY2l0eVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtemlwQ29kZSA9IGpRdWVyeShcIiN6aXBDb2RlXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jb21wYW55TmFtZSA9IGpRdWVyeShcIiNjb21wYW55TmFtZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29tcGFueVVybCA9IGpRdWVyeShcIiNjb21wYW55VXJsXCIpLnZhbCgpO1xyXG5cclxuICAgIHZhciBmb3JtcGFzc3dvcmQgPSBqUXVlcnkoXCIjdXNlcnBhc3N3b3JkXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jb25maXJtUGFzc3dvcmQgPSBqUXVlcnkoXCIjY29uZmlybVBhc3N3b3JkXCIpLnZhbCgpO1xyXG4gICBcclxuICAgIHZhciBhamF4ZGF0YSA9IHsgICAgXHJcbiAgICAgICAgYWN0aW9uOiAncmVnaXN0ZXJfYWN0aW9uJyxcclxuICAgICAgICBmaXJzdE5hbWU6IGZvcm1maXJzdE5hbWUsXHJcbiAgICAgICAgbGFzdE5hbWU6IGZvcm1sYXN0TmFtZSxcclxuICAgICAgICBlbWFpbDogZm9ybWVtYWlsLFxyXG4gICAgICAgIGFsdEVtYWlsOiBmb3JtYWx0RW1haWwsXHJcbiAgICAgICAgcGhvbmU6IGZvcm1waG9uZSxcclxuICAgICAgICBhbHRQaG9uZTogZm9ybWFsdFBob25lLFxyXG4gICAgICAgIGNvdW50cnk6IGZvcm1jb3VudHJ5LFxyXG4gICAgICAgIHN0YXRlOiBmb3Jtc3RhdGUsXHJcbiAgICAgICAgYWRkcmVzczogZm9ybWFkZHJlc3MsXHJcbiAgICAgICAgY2l0eTogZm9ybWNpdHksXHJcbiAgICAgICAgemlwQ29kZTogZm9ybXppcENvZGUsXHJcbiAgICAgICAgY29tcGFueU5hbWU6IGZvcm1jb21wYW55TmFtZSxcclxuICAgICAgICBjb21wYW55VXJsOiBmb3JtY29tcGFueVVybCxcclxuICAgICAgICBwYXNzd29yZDogZm9ybXBhc3N3b3JkLFxyXG4gICAgICAgIGNvbmZpcm1QYXNzd29yZDogZm9ybWNvbmZpcm1QYXNzd29yZFxyXG4gICAgfTtcclxuICAgIFxyXG5cclxuICAgIGpRdWVyeS5hamF4KHtcclxuICAgICAgICB0eXBlIDogXCJwb3N0XCIsXHJcbiAgICAgICAgZGF0YVR5cGUgOiBcImpzb25cIixcclxuICAgICAgICB1cmwgOiBhamF4dXJsLFxyXG4gICAgICAgIGRhdGEgOiBhamF4ZGF0YSxcclxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICBpZihyZXNwb25zZS5zdWNjZXNzID09XCIxXCIpIHsgICBcclxuICAgICAgICAgICAgICAgIGpRdWVyeShcIiNlcnJvci1tZXNzYWdlXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZSk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoJyN3cF9zaWdudXBfZm9ybScpLnRyaWdnZXIoXCJyZXNldFwiKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI2Vycm9yLW1lc3NhZ2VcIikuaHRtbChyZXNwb25zZS5tZXNzYWdlX2RhdGEpOyBcclxuICAgICAgICAgICAgfSAgICAgICAgICAgIFxyXG4gICAgICAgIH1cclxuICAgIH0pO1x0XHRcdFxyXG59KTsgICAiLCJjbGFzcyBNb2JpbGVNZW51e1xyXG4gICAgY29uc3RydWN0b3IoKXtcclxuICAgICAgICB0aGlzLm1lbnVJY29uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNpdGUtaGVhZGVyX19tZW51LWljb24nKTtcclxuICAgICAgICB0aGlzLm1lbnVDb250ZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNpdGUtaGVhZGVyX19tb2JpbGUtbWVudS1jb250ZW50Jyk7XHJcbiAgICAgICAgdGhpcy5ldmVudHMoKTtcclxuICAgIH1cclxuICAgIGV2ZW50cygpe1xyXG4gICAgICAgIHRoaXMubWVudUljb24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB0aGlzLnRvZ2dsZVRoZU1lbnUoKSk7XHJcbiAgICB9XHJcblxyXG4gICAgdG9nZ2xlVGhlTWVudSgpe1xyXG4gICAgICAgIHRoaXMubWVudUNvbnRlbnQuY2xhc3NMaXN0LnRvZ2dsZSgnc2l0ZS1oZWFkZXJfX21vYmlsZS1tZW51LWNvbnRlbnQtLWlzLXZpc2libGUnKTtcclxuICAgICAgICB0aGlzLm1lbnVJY29uLmNsYXNzTGlzdC50b2dnbGUoJ3NpdGUtaGVhZGVyX19tZW51LWljb24tLWNsb3NlLXgnKTtcclxuICAgIH1cclxufVxyXG5cclxubmV3IE1vYmlsZU1lbnUoKTsiLCJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG5cclxuJCgnLmhlYWRlci1uYXZpZ2F0aW9uJykub24oJ21vdXNlZW50ZXInLCAnLm1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nLCAoZSkgPT57XHJcbiAgICBcclxuICAgIGlmKCEkKGUuY3VycmVudFRhcmdldCkucGFyZW50cygnLnN1Yi1tZW51JykubGVuZ3RoKXtcclxuICAgICAgICAkKCcubWVudSA+IC5tZW51LWl0ZW0ub3BlbicpLmZpbmQoJz4gYSA+IC5tZW51LWJ1dHRvbicpLnRyaWdnZXIoJ2NsaWNrJyk7XHJcbiAgICB9XHJcbiAgICAkKGUuY3VycmVudFRhcmdldCkuYWRkQ2xhc3MoJ29wZW4nKTtcclxufSkub24oJ21vdXNlbGVhdmUnLCAnLm1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nLCAoZSkgPT57XHJcbiAgICAkKGUuY3VycmVudFRhcmdldCkucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcclxufSlcclxuIiwiaW1wb3J0IHRocm90dGxlIGZyb20gJ2xvZGFzaC90aHJvdHRsZSc7XHJcbmltcG9ydCBkZWJvdW5jZSBmcm9tICdsb2Rhc2gvZGVib3VuY2UnO1xyXG5cclxuY2xhc3MgU3RpY2t5SGVhZGVyIHtcclxuICBjb25zdHJ1Y3RvcigpIHtcclxuICAgIHRoaXMucGFnZVNlY3Rpb25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5wYWdlLXNlY3Rpb25cIik7XHJcbiAgICB0aGlzLmJyb3dzZXJIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgICB0aGlzLnByZXZpb3VzU2Nyb2xsWSA9IHdpbmRvdy5zY3JvbGxZO1xyXG4gICAgdGhpcy5ldmVudHMoKTtcclxuICB9XHJcblxyXG4gIGV2ZW50cygpIHtcclxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwic2Nyb2xsXCIsIHRocm90dGxlKCgpID0+IHRoaXMucnVuT25TY3JvbGwoKSwgNTApKTtcclxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwicmVzaXplXCIsIGRlYm91bmNlKCgpID0+IHtcclxuICAgICAgdGhpcy5icm93c2VySGVpZ2h0ID0gd2luZG93LmlubmVySGVpZ2h0O1xyXG4gICAgfSwgMzMzKSk7XHJcbiAgfVxyXG5cclxuICBydW5PblNjcm9sbCgpIHtcclxuICAgIHRoaXMuZGV0ZXJtaW5lU2Nyb2xsRGlyZWN0aW9uKCk7XHJcbiAgICB0aGlzLnBhZ2VTZWN0aW9ucy5mb3JFYWNoKGVsID0+IHRoaXMuY2FsY1NlY3Rpb24oZWwpKTtcclxuICB9XHJcblxyXG4gIGRldGVybWluZVNjcm9sbERpcmVjdGlvbigpIHtcclxuICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IHRoaXMucHJldmlvdXNTY3JvbGxZKSB7XHJcbiAgICAgIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID0gJ2Rvd24nO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdGhpcy5zY3JvbGxEaXJlY3Rpb24gPSAndXAnO1xyXG4gICAgfVxyXG4gICAgdGhpcy5wcmV2aW91c1Njcm9sbFkgPSB3aW5kb3cuc2Nyb2xsWTtcclxuICB9XHJcblxyXG4gIGNhbGNTZWN0aW9uKGVsKSB7XHJcbiAgICBpZiAod2luZG93LnNjcm9sbFkgKyB0aGlzLmJyb3dzZXJIZWlnaHQgPiBlbC5vZmZzZXRUb3AgJiYgd2luZG93LnNjcm9sbFkgPCBlbC5vZmZzZXRUb3AgKyBlbC5vZmZzZXRIZWlnaHQpIHtcclxuICAgICAgbGV0IHNjcm9sbFBlcmNlbnQgPSAoZWwuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wIC8gdGhpcy5icm93c2VySGVpZ2h0KSAqIDEwMDtcclxuICAgICAgaWYgKCAoc2Nyb2xsUGVyY2VudCA8IDQwICYmIHNjcm9sbFBlcmNlbnQgPiAwICYmIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID09ICdkb3duJykgfHwgKHNjcm9sbFBlcmNlbnQgPCAzMyAmJiB0aGlzLnNjcm9sbERpcmVjdGlvbiA9PSAndXAnKSkge1xyXG4gICAgICAgIGxldCBtYXRjaGluZ0xpbmsgPSBlbC5nZXRBdHRyaWJ1dGUoXCJkYXRhLW1hdGNoaW5nLWxpbmtcIik7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChgLnNjcm9sbC1uYXYgYTpub3QoJHttYXRjaGluZ0xpbmt9KWApLmZvckVhY2goZWwgPT4gZWwuY2xhc3NMaXN0LnJlbW92ZShcInNjcm9sbC1uYXYtLWlzLWFjdGl2ZVwiKSk7XHJcbiAgICAgICAgLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihtYXRjaGluZ0xpbmspLmNsYXNzTGlzdC5hZGQoXCJzY3JvbGwtbmF2LS1pcy1hY3RpdmVcIik7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbm5ldyBTdGlja3lIZWFkZXIoKTsiLCJpbXBvcnQgdGhyb3R0bGUgZnJvbSAnbG9kYXNoL3Rocm90dGxlJztcclxuXHJcbmNsYXNzIFN0aWNreUhlYWRlciB7XHJcblxyXG5cdGNvbnN0cnVjdG9yKCkge1xyXG5cdFx0dGhpcy5zaXRlSGVhZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNpdGUtaGVhZGVyJyk7XHJcblx0XHR0aGlzLmV2ZW50cygpO1xyXG5cdH1cclxuXHJcblx0ZXZlbnRzKCkge1xyXG5cdFx0d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJzY3JvbGxcIiwgdGhyb3R0bGUoKCkgPT4gdGhpcy5zaG93U3RpY2t5T25TY3JvbGwoKSwgMjAwKSk7XHJcblx0fVxyXG5cclxuXHRzaG93U3RpY2t5T25TY3JvbGwoKSB7XHJcblx0XHRpZiAod2luZG93LnNjcm9sbFkgPiAxMDApIHtcclxuXHRcdFx0dGhpcy5zaXRlSGVhZGVyLmNsYXNzTGlzdC5hZGQoXCJzaXRlLWhlYWRlci0tb24tc2Nyb2xsXCIpO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0dGhpcy5zaXRlSGVhZGVyLmNsYXNzTGlzdC5yZW1vdmUoXCJzaXRlLWhlYWRlci0tb24tc2Nyb2xsXCIpO1xyXG5cdFx0fVxyXG5cdH1cclxufVxyXG5cclxubmV3IFN0aWNreUhlYWRlcigpOyIsIm1vZHVsZS5leHBvcnRzID0galF1ZXJ5OyJdLCJzb3VyY2VSb290IjoiIn0=