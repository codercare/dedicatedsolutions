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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fU3ltYm9sLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvX2Jhc2VHZXRUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fYmFzZVRyaW0uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fZnJlZUdsb2JhbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL19nZXRSYXdUYWcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fb2JqZWN0VG9TdHJpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9fcm9vdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL190cmltbWVkRW5kSW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9kZWJvdW5jZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL2lzT2JqZWN0LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNPYmplY3RMaWtlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gvaXNTeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC9ub3cuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC90aHJvdHRsZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9idW5kbGUuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbG9naW5yZWdpc3RyYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvbW9iaWxlbWVudS5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL2NvbXBvbmVudC9uYXZpZ2F0aW9uLmpzIiwid2VicGFjazovLy8uL3NyYy9hc3NldHMvanMvY29tcG9uZW50L3Njcm9sbG5hdmlnYXRpb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvc3RpY2t5aGVhZGVyLmpzIiwid2VicGFjazovLy9leHRlcm5hbCBcImpRdWVyeVwiIl0sIm5hbWVzIjpbInJvb3QiLCJyZXF1aXJlIiwiU3ltYm9sIiwibW9kdWxlIiwiZXhwb3J0cyIsImdldFJhd1RhZyIsIm9iamVjdFRvU3RyaW5nIiwibnVsbFRhZyIsInVuZGVmaW5lZFRhZyIsInN5bVRvU3RyaW5nVGFnIiwidG9TdHJpbmdUYWciLCJ1bmRlZmluZWQiLCJiYXNlR2V0VGFnIiwidmFsdWUiLCJPYmplY3QiLCJ0cmltbWVkRW5kSW5kZXgiLCJyZVRyaW1TdGFydCIsImJhc2VUcmltIiwic3RyaW5nIiwic2xpY2UiLCJyZXBsYWNlIiwiZnJlZUdsb2JhbCIsImdsb2JhbCIsIm9iamVjdFByb3RvIiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJuYXRpdmVPYmplY3RUb1N0cmluZyIsInRvU3RyaW5nIiwiaXNPd24iLCJjYWxsIiwidGFnIiwidW5tYXNrZWQiLCJlIiwicmVzdWx0IiwiZnJlZVNlbGYiLCJzZWxmIiwiRnVuY3Rpb24iLCJyZVdoaXRlc3BhY2UiLCJpbmRleCIsImxlbmd0aCIsInRlc3QiLCJjaGFyQXQiLCJpc09iamVjdCIsIm5vdyIsInRvTnVtYmVyIiwiRlVOQ19FUlJPUl9URVhUIiwibmF0aXZlTWF4IiwiTWF0aCIsIm1heCIsIm5hdGl2ZU1pbiIsIm1pbiIsImRlYm91bmNlIiwiZnVuYyIsIndhaXQiLCJvcHRpb25zIiwibGFzdEFyZ3MiLCJsYXN0VGhpcyIsIm1heFdhaXQiLCJ0aW1lcklkIiwibGFzdENhbGxUaW1lIiwibGFzdEludm9rZVRpbWUiLCJsZWFkaW5nIiwibWF4aW5nIiwidHJhaWxpbmciLCJUeXBlRXJyb3IiLCJpbnZva2VGdW5jIiwidGltZSIsImFyZ3MiLCJ0aGlzQXJnIiwiYXBwbHkiLCJsZWFkaW5nRWRnZSIsInNldFRpbWVvdXQiLCJ0aW1lckV4cGlyZWQiLCJyZW1haW5pbmdXYWl0IiwidGltZVNpbmNlTGFzdENhbGwiLCJ0aW1lU2luY2VMYXN0SW52b2tlIiwidGltZVdhaXRpbmciLCJzaG91bGRJbnZva2UiLCJ0cmFpbGluZ0VkZ2UiLCJjYW5jZWwiLCJjbGVhclRpbWVvdXQiLCJmbHVzaCIsImRlYm91bmNlZCIsImlzSW52b2tpbmciLCJhcmd1bWVudHMiLCJ0eXBlIiwiaXNPYmplY3RMaWtlIiwic3ltYm9sVGFnIiwiaXNTeW1ib2wiLCJEYXRlIiwidGhyb3R0bGUiLCJOQU4iLCJyZUlzQmFkSGV4IiwicmVJc0JpbmFyeSIsInJlSXNPY3RhbCIsImZyZWVQYXJzZUludCIsInBhcnNlSW50Iiwib3RoZXIiLCJ2YWx1ZU9mIiwiaXNCaW5hcnkiLCJnIiwid2luZG93IiwiJGZvcm0iLCIkIiwiJHN1Y2Nlc3NNc2ciLCJ2YWxpZGF0b3IiLCJhZGRNZXRob2QiLCJlbGVtZW50Iiwib3B0aW9uYWwiLCJtYXRjaCIsInZhbGlkYXRlIiwiZXJyb3JFbGVtZW50IiwicnVsZXMiLCJmaXJzdE5hbWUiLCJyZXF1aXJlZCIsIm1pbmxlbmd0aCIsImxldHRlcnMiLCJsYXN0TmFtZSIsImVtYWlsIiwidXNlcnBhc3N3b3JkIiwiY29uZmlybVBhc3N3b3JkIiwiZXF1YWxUbyIsIm1lc3NhZ2VzIiwic3VibWl0SGFuZGxlciIsImFjdGlvbiIsImZvcm1maXJzdE5hbWUiLCJqUXVlcnkiLCJ2YWwiLCJmb3JtbGFzdE5hbWUiLCJmb3JtZW1haWwiLCJmb3JtYWx0RW1haWwiLCJmb3JtcGhvbmUiLCJmb3JtYWx0UGhvbmUiLCJmb3JtY291bnRyeSIsImZvcm1zdGF0ZSIsImZvcm1hZGRyZXNzIiwiZm9ybWNpdHkiLCJmb3JtemlwQ29kZSIsImZvcm1jb21wYW55TmFtZSIsImZvcm1jb21wYW55VXJsIiwiZm9ybXBhc3N3b3JkIiwiZm9ybWNvbmZpcm1QYXNzd29yZCIsImFqYXhkYXRhIiwiYWx0RW1haWwiLCJwaG9uZSIsImFsdFBob25lIiwiY291bnRyeSIsInN0YXRlIiwiYWRkcmVzcyIsImNpdHkiLCJ6aXBDb2RlIiwiY29tcGFueU5hbWUiLCJjb21wYW55VXJsIiwicGFzc3dvcmQiLCJhamF4IiwiZGF0YVR5cGUiLCJ1cmwiLCJhamF4dXJsIiwiZGF0YSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsInJlbW92ZUNsYXNzIiwiYWRkQ2xhc3MiLCJodG1sIiwibWVzc2FnZSIsInNob3ciLCJ0cmlnZ2VyIiwibG9jYXRpb24iLCJocmVmIiwicmVkaXJlY3RfdXJsIiwiaGlkZSIsIm1lc3NhZ2VfZGF0YSIsIiRsb2dpbmZvcm0iLCIkbG9naW5Nc2ciLCJ1c2VyRW1haWwiLCJyZW1lbWJlciIsInVzZXJMb2dpbiIsIm9uIiwicmVjZW50IiwiaXMiLCJNb2JpbGVNZW51IiwibWVudUljb24iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJtZW51Q29udGVudCIsImV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJ0b2dnbGVUaGVNZW51IiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwiY3VycmVudFRhcmdldCIsInBhcmVudHMiLCJmaW5kIiwiU3RpY2t5SGVhZGVyIiwicGFnZVNlY3Rpb25zIiwicXVlcnlTZWxlY3RvckFsbCIsImJyb3dzZXJIZWlnaHQiLCJpbm5lckhlaWdodCIsInByZXZpb3VzU2Nyb2xsWSIsInNjcm9sbFkiLCJydW5PblNjcm9sbCIsImRldGVybWluZVNjcm9sbERpcmVjdGlvbiIsImZvckVhY2giLCJlbCIsImNhbGNTZWN0aW9uIiwic2Nyb2xsRGlyZWN0aW9uIiwib2Zmc2V0VG9wIiwib2Zmc2V0SGVpZ2h0Iiwic2Nyb2xsUGVyY2VudCIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsInRvcCIsIm1hdGNoaW5nTGluayIsImdldEF0dHJpYnV0ZSIsInJlbW92ZSIsInNpdGVIZWFkZXIiLCJzaG93U3RpY2t5T25TY3JvbGwiLCJhZGQiXSwibWFwcGluZ3MiOiI7UUFBQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7O1FBR0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLDBDQUEwQyxnQ0FBZ0M7UUFDMUU7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSx3REFBd0Qsa0JBQWtCO1FBQzFFO1FBQ0EsaURBQWlELGNBQWM7UUFDL0Q7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBLHlDQUF5QyxpQ0FBaUM7UUFDMUUsZ0hBQWdILG1CQUFtQixFQUFFO1FBQ3JJO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMkJBQTJCLDBCQUEwQixFQUFFO1FBQ3ZELGlDQUFpQyxlQUFlO1FBQ2hEO1FBQ0E7UUFDQTs7UUFFQTtRQUNBLHNEQUFzRCwrREFBK0Q7O1FBRXJIO1FBQ0E7OztRQUdBO1FBQ0E7Ozs7Ozs7Ozs7OztBQ2xGQSxJQUFJQSxJQUFJLEdBQUdDLG1CQUFPLENBQUMsK0NBQUQsQ0FBbEI7QUFFQTs7O0FBQ0EsSUFBSUMsT0FBTSxHQUFHRixJQUFJLENBQUNFLE1BQWxCO0FBRUFDLE1BQU0sQ0FBQ0MsT0FBUCxHQUFpQkYsT0FBakIsQzs7Ozs7Ozs7Ozs7QUNMQSxJQUFJQSxPQUFNLEdBQUdELG1CQUFPLENBQUMsbURBQUQsQ0FBcEI7QUFBQSxJQUNJSSxTQUFTLEdBQUdKLG1CQUFPLENBQUMseURBQUQsQ0FEdkI7QUFBQSxJQUVJSyxjQUFjLEdBQUdMLG1CQUFPLENBQUMsbUVBQUQsQ0FGNUI7QUFJQTs7O0FBQ0EsSUFBSU0sT0FBTyxH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MUIsQ0FBaUMsd0JBQWpDO0FBQ0E7QUFDRDs7Ozs7O0FBR0YsSUFBSXBCLFlBQUosRzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUN0QkEsd0IiLCJmaWxlIjoiYnVuZGxlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDApO1xuIiwidmFyIHJvb3QgPSByZXF1aXJlKCcuL19yb290Jyk7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIFN5bWJvbCA9IHJvb3QuU3ltYm9sO1xuXG5tb2R1bGUuZXhwb3J0cyA9IFN5bWJvbDtcbiIsInZhciBTeW1ib2wgPSByZXF1aXJlKCcuL19TeW1ib2wnKSxcbiAgICBnZXRSYXdUYWcgPSByZXF1aXJlKCcuL19nZXRSYXdUYWcnKSxcbiAgICBvYmplY3RUb1N0cmluZyA9IHJlcXVpcmUoJy4vX29iamVjdFRvU3RyaW5nJyk7XG5cbi8qKiBgT2JqZWN0I3RvU3RyaW5nYCByZXN1bHQgcmVmZXJlbmNlcy4gKi9cbnZhciBudWxsVGFnID0gJ1tvYmplY3QgTnVsbF0nLFxuICAgIHVuZGVmaW5lZFRhZyA9ICdbb2JqZWN0IFVuZGVmaW5lZF0nO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1Ub1N0cmluZ1RhZyA9IFN5bWJvbCA/IFN5bWJvbC50b1N0cmluZ1RhZyA6IHVuZGVmaW5lZDtcblxuLyoqXG4gKiBUaGUgYmFzZSBpbXBsZW1lbnRhdGlvbiBvZiBgZ2V0VGFnYCB3aXRob3V0IGZhbGxiYWNrcyBmb3IgYnVnZ3kgZW52aXJvbm1lbnRzLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBxdWVyeS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGJhc2VHZXRUYWcodmFsdWUpIHtcbiAgaWYgKHZhbHVlID09IG51bGwpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IHVuZGVmaW5lZCA/IHVuZGVmaW5lZFRhZyA6IG51bGxUYWc7XG4gIH1cbiAgcmV0dXJuIChzeW1Ub1N0cmluZ1RhZyAmJiBzeW1Ub1N0cmluZ1RhZyBpbiBPYmplY3QodmFsdWUpKVxuICAgID8gZ2V0UmF3VGFnKHZhbHVlKVxuICAgIDogb2JqZWN0VG9TdHJpbmcodmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGJhc2VHZXRUYWc7XG4iLCJ2YXIgdHJpbW1lZEVuZEluZGV4ID0gcmVxdWlyZSgnLi9fdHJpbW1lZEVuZEluZGV4Jyk7XG5cbi8qKiBVc2VkIHRvIG1hdGNoIGxlYWRpbmcgd2hpdGVzcGFjZS4gKi9cbnZhciByZVRyaW1TdGFydCA9IC9eXFxzKy87XG5cbi8qKlxuICogVGhlIGJhc2UgaW1wbGVtZW50YXRpb24gb2YgYF8udHJpbWAuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byB0cmltLlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgdHJpbW1lZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIGJhc2VUcmltKHN0cmluZykge1xuICByZXR1cm4gc3RyaW5nXG4gICAgPyBzdHJpbmcuc2xpY2UoMCwgdHJpbW1lZEVuZEluZGV4KHN0cmluZykgKyAxKS5yZXBsYWNlKHJlVHJpbVN0YXJ0LCAnJylcbiAgICA6IHN0cmluZztcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBiYXNlVHJpbTtcbiIsIi8qKiBEZXRlY3QgZnJlZSB2YXJpYWJsZSBgZ2xvYmFsYCBmcm9tIE5vZGUuanMuICovXG52YXIgZnJlZUdsb2JhbCA9IHR5cGVvZiBnbG9iYWwgPT0gJ29iamVjdCcgJiYgZ2xvYmFsICYmIGdsb2JhbC5PYmplY3QgPT09IE9iamVjdCAmJiBnbG9iYWw7XG5cbm1vZHVsZS5leHBvcnRzID0gZnJlZUdsb2JhbDtcbiIsInZhciBTeW1ib2wgPSByZXF1aXJlKCcuL19TeW1ib2wnKTtcblxuLyoqIFVzZWQgZm9yIGJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzLiAqL1xudmFyIG9iamVjdFByb3RvID0gT2JqZWN0LnByb3RvdHlwZTtcblxuLyoqIFVzZWQgdG8gY2hlY2sgb2JqZWN0cyBmb3Igb3duIHByb3BlcnRpZXMuICovXG52YXIgaGFzT3duUHJvcGVydHkgPSBvYmplY3RQcm90by5oYXNPd25Qcm9wZXJ0eTtcblxuLyoqXG4gKiBVc2VkIHRvIHJlc29sdmUgdGhlXG4gKiBbYHRvU3RyaW5nVGFnYF0oaHR0cDovL2VjbWEtaW50ZXJuYXRpb25hbC5vcmcvZWNtYS0yNjIvNy4wLyNzZWMtb2JqZWN0LnByb3RvdHlwZS50b3N0cmluZylcbiAqIG9mIHZhbHVlcy5cbiAqL1xudmFyIG5hdGl2ZU9iamVjdFRvU3RyaW5nID0gb2JqZWN0UHJvdG8udG9TdHJpbmc7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIHN5bVRvU3RyaW5nVGFnID0gU3ltYm9sID8gU3ltYm9sLnRvU3RyaW5nVGFnIDogdW5kZWZpbmVkO1xuXG4vKipcbiAqIEEgc3BlY2lhbGl6ZWQgdmVyc2lvbiBvZiBgYmFzZUdldFRhZ2Agd2hpY2ggaWdub3JlcyBgU3ltYm9sLnRvU3RyaW5nVGFnYCB2YWx1ZXMuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHF1ZXJ5LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgcmF3IGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGdldFJhd1RhZyh2YWx1ZSkge1xuICB2YXIgaXNPd24gPSBoYXNPd25Qcm9wZXJ0eS5jYWxsKHZhbHVlLCBzeW1Ub1N0cmluZ1RhZyksXG4gICAgICB0YWcgPSB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ107XG5cbiAgdHJ5IHtcbiAgICB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ10gPSB1bmRlZmluZWQ7XG4gICAgdmFyIHVubWFza2VkID0gdHJ1ZTtcbiAgfSBjYXRjaCAoZSkge31cblxuICB2YXIgcmVzdWx0ID0gbmF0aXZlT2JqZWN0VG9TdHJpbmcuY2FsbCh2YWx1ZSk7XG4gIGlmICh1bm1hc2tlZCkge1xuICAgIGlmIChpc093bikge1xuICAgICAgdmFsdWVbc3ltVG9TdHJpbmdUYWddID0gdGFnO1xuICAgIH0gZWxzZSB7XG4gICAgICBkZWxldGUgdmFsdWVbc3ltVG9TdHJpbmdUYWddO1xuICAgIH1cbiAgfVxuICByZXR1cm4gcmVzdWx0O1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGdldFJhd1RhZztcbiIsIi8qKiBVc2VkIGZvciBidWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcy4gKi9cbnZhciBvYmplY3RQcm90byA9IE9iamVjdC5wcm90b3R5cGU7XG5cbi8qKlxuICogVXNlZCB0byByZXNvbHZlIHRoZVxuICogW2B0b1N0cmluZ1RhZ2BdKGh0dHA6Ly9lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLW9iamVjdC5wcm90b3R5cGUudG9zdHJpbmcpXG4gKiBvZiB2YWx1ZXMuXG4gKi9cbnZhciBuYXRpdmVPYmplY3RUb1N0cmluZyA9IG9iamVjdFByb3RvLnRvU3RyaW5nO1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBzdHJpbmcgdXNpbmcgYE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjb252ZXJ0LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgY29udmVydGVkIHN0cmluZy5cbiAqL1xuZnVuY3Rpb24gb2JqZWN0VG9TdHJpbmcodmFsdWUpIHtcbiAgcmV0dXJuIG5hdGl2ZU9iamVjdFRvU3RyaW5nLmNhbGwodmFsdWUpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IG9iamVjdFRvU3RyaW5nO1xuIiwidmFyIGZyZWVHbG9iYWwgPSByZXF1aXJlKCcuL19mcmVlR2xvYmFsJyk7XG5cbi8qKiBEZXRlY3QgZnJlZSB2YXJpYWJsZSBgc2VsZmAuICovXG52YXIgZnJlZVNlbGYgPSB0eXBlb2Ygc2VsZiA9PSAnb2JqZWN0JyAmJiBzZWxmICYmIHNlbGYuT2JqZWN0ID09PSBPYmplY3QgJiYgc2VsZjtcblxuLyoqIFVzZWQgYXMgYSByZWZlcmVuY2UgdG8gdGhlIGdsb2JhbCBvYmplY3QuICovXG52YXIgcm9vdCA9IGZyZWVHbG9iYWwgfHwgZnJlZVNlbGYgfHwgRnVuY3Rpb24oJ3JldHVybiB0aGlzJykoKTtcblxubW9kdWxlLmV4cG9ydHMgPSByb290O1xuIiwiLyoqIFVzZWQgdG8gbWF0Y2ggYSBzaW5nbGUgd2hpdGVzcGFjZSBjaGFyYWN0ZXIuICovXG52YXIgcmVXaGl0ZXNwYWNlID0gL1xccy87XG5cbi8qKlxuICogVXNlZCBieSBgXy50cmltYCBhbmQgYF8udHJpbUVuZGAgdG8gZ2V0IHRoZSBpbmRleCBvZiB0aGUgbGFzdCBub24td2hpdGVzcGFjZVxuICogY2hhcmFjdGVyIG9mIGBzdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0ge3N0cmluZ30gc3RyaW5nIFRoZSBzdHJpbmcgdG8gaW5zcGVjdC5cbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIGluZGV4IG9mIHRoZSBsYXN0IG5vbi13aGl0ZXNwYWNlIGNoYXJhY3Rlci5cbiAqL1xuZnVuY3Rpb24gdHJpbW1lZEVuZEluZGV4KHN0cmluZykge1xuICB2YXIgaW5kZXggPSBzdHJpbmcubGVuZ3RoO1xuXG4gIHdoaWxlIChpbmRleC0tICYmIHJlV2hpdGVzcGFjZS50ZXN0KHN0cmluZy5jaGFyQXQoaW5kZXgpKSkge31cbiAgcmV0dXJuIGluZGV4O1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRyaW1tZWRFbmRJbmRleDtcbiIsInZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKSxcbiAgICBub3cgPSByZXF1aXJlKCcuL25vdycpLFxuICAgIHRvTnVtYmVyID0gcmVxdWlyZSgnLi90b051bWJlcicpO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKiBCdWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcyBmb3IgdGhvc2Ugd2l0aCB0aGUgc2FtZSBuYW1lIGFzIG90aGVyIGBsb2Rhc2hgIG1ldGhvZHMuICovXG52YXIgbmF0aXZlTWF4ID0gTWF0aC5tYXgsXG4gICAgbmF0aXZlTWluID0gTWF0aC5taW47XG5cbi8qKlxuICogQ3JlYXRlcyBhIGRlYm91bmNlZCBmdW5jdGlvbiB0aGF0IGRlbGF5cyBpbnZva2luZyBgZnVuY2AgdW50aWwgYWZ0ZXIgYHdhaXRgXG4gKiBtaWxsaXNlY29uZHMgaGF2ZSBlbGFwc2VkIHNpbmNlIHRoZSBsYXN0IHRpbWUgdGhlIGRlYm91bmNlZCBmdW5jdGlvbiB3YXNcbiAqIGludm9rZWQuIFRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgIG1ldGhvZCB0byBjYW5jZWxcbiAqIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvIGltbWVkaWF0ZWx5IGludm9rZSB0aGVtLlxuICogUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2Agc2hvdWxkIGJlIGludm9rZWQgb24gdGhlXG4gKiBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGAgdGltZW91dC4gVGhlIGBmdW5jYCBpcyBpbnZva2VkXG4gKiB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uLiBTdWJzZXF1ZW50XG4gKiBjYWxscyB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uIHJldHVybiB0aGUgcmVzdWx0IG9mIHRoZSBsYXN0IGBmdW5jYFxuICogaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIGRlYm91bmNlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy5kZWJvdW5jZWAgYW5kIGBfLnRocm90dGxlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIGRlYm91bmNlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIGRlbGF5LlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9ZmFsc2VdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgbGVhZGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0LlxuICogQHBhcmFtIHtudW1iZXJ9IFtvcHRpb25zLm1heFdhaXRdXG4gKiAgVGhlIG1heGltdW0gdGltZSBgZnVuY2AgaXMgYWxsb3dlZCB0byBiZSBkZWxheWVkIGJlZm9yZSBpdCdzIGludm9rZWQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IGRlYm91bmNlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgY29zdGx5IGNhbGN1bGF0aW9ucyB3aGlsZSB0aGUgd2luZG93IHNpemUgaXMgaW4gZmx1eC5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdyZXNpemUnLCBfLmRlYm91bmNlKGNhbGN1bGF0ZUxheW91dCwgMTUwKSk7XG4gKlxuICogLy8gSW52b2tlIGBzZW5kTWFpbGAgd2hlbiBjbGlja2VkLCBkZWJvdW5jaW5nIHN1YnNlcXVlbnQgY2FsbHMuXG4gKiBqUXVlcnkoZWxlbWVudCkub24oJ2NsaWNrJywgXy5kZWJvdW5jZShzZW5kTWFpbCwgMzAwLCB7XG4gKiAgICdsZWFkaW5nJzogdHJ1ZSxcbiAqICAgJ3RyYWlsaW5nJzogZmFsc2VcbiAqIH0pKTtcbiAqXG4gKiAvLyBFbnN1cmUgYGJhdGNoTG9nYCBpcyBpbnZva2VkIG9uY2UgYWZ0ZXIgMSBzZWNvbmQgb2YgZGVib3VuY2VkIGNhbGxzLlxuICogdmFyIGRlYm91bmNlZCA9IF8uZGVib3VuY2UoYmF0Y2hMb2csIDI1MCwgeyAnbWF4V2FpdCc6IDEwMDAgfSk7XG4gKiB2YXIgc291cmNlID0gbmV3IEV2ZW50U291cmNlKCcvc3RyZWFtJyk7XG4gKiBqUXVlcnkoc291cmNlKS5vbignbWVzc2FnZScsIGRlYm91bmNlZCk7XG4gKlxuICogLy8gQ2FuY2VsIHRoZSB0cmFpbGluZyBkZWJvdW5jZWQgaW52b2NhdGlvbi5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdwb3BzdGF0ZScsIGRlYm91bmNlZC5jYW5jZWwpO1xuICovXG5mdW5jdGlvbiBkZWJvdW5jZShmdW5jLCB3YWl0LCBvcHRpb25zKSB7XG4gIHZhciBsYXN0QXJncyxcbiAgICAgIGxhc3RUaGlzLFxuICAgICAgbWF4V2FpdCxcbiAgICAgIHJlc3VsdCxcbiAgICAgIHRpbWVySWQsXG4gICAgICBsYXN0Q2FsbFRpbWUsXG4gICAgICBsYXN0SW52b2tlVGltZSA9IDAsXG4gICAgICBsZWFkaW5nID0gZmFsc2UsXG4gICAgICBtYXhpbmcgPSBmYWxzZSxcbiAgICAgIHRyYWlsaW5nID0gdHJ1ZTtcblxuICBpZiAodHlwZW9mIGZ1bmMgIT0gJ2Z1bmN0aW9uJykge1xuICAgIHRocm93IG5ldyBUeXBlRXJyb3IoRlVOQ19FUlJPUl9URVhUKTtcbiAgfVxuICB3YWl0ID0gdG9OdW1iZXIod2FpdCkgfHwgMDtcbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICEhb3B0aW9ucy5sZWFkaW5nO1xuICAgIG1heGluZyA9ICdtYXhXYWl0JyBpbiBvcHRpb25zO1xuICAgIG1heFdhaXQgPSBtYXhpbmcgPyBuYXRpdmVNYXgodG9OdW1iZXIob3B0aW9ucy5tYXhXYWl0KSB8fCAwLCB3YWl0KSA6IG1heFdhaXQ7XG4gICAgdHJhaWxpbmcgPSAndHJhaWxpbmcnIGluIG9wdGlvbnMgPyAhIW9wdGlvbnMudHJhaWxpbmcgOiB0cmFpbGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIGludm9rZUZ1bmModGltZSkge1xuICAgIHZhciBhcmdzID0gbGFzdEFyZ3MsXG4gICAgICAgIHRoaXNBcmcgPSBsYXN0VGhpcztcblxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgbGFzdEludm9rZVRpbWUgPSB0aW1lO1xuICAgIHJlc3VsdCA9IGZ1bmMuYXBwbHkodGhpc0FyZywgYXJncyk7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGxlYWRpbmdFZGdlKHRpbWUpIHtcbiAgICAvLyBSZXNldCBhbnkgYG1heFdhaXRgIHRpbWVyLlxuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICAvLyBTdGFydCB0aGUgdGltZXIgZm9yIHRoZSB0cmFpbGluZyBlZGdlLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgLy8gSW52b2tlIHRoZSBsZWFkaW5nIGVkZ2UuXG4gICAgcmV0dXJuIGxlYWRpbmcgPyBpbnZva2VGdW5jKHRpbWUpIDogcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gcmVtYWluaW5nV2FpdCh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZSxcbiAgICAgICAgdGltZVdhaXRpbmcgPSB3YWl0IC0gdGltZVNpbmNlTGFzdENhbGw7XG5cbiAgICByZXR1cm4gbWF4aW5nXG4gICAgICA/IG5hdGl2ZU1pbih0aW1lV2FpdGluZywgbWF4V2FpdCAtIHRpbWVTaW5jZUxhc3RJbnZva2UpXG4gICAgICA6IHRpbWVXYWl0aW5nO1xuICB9XG5cbiAgZnVuY3Rpb24gc2hvdWxkSW52b2tlKHRpbWUpIHtcbiAgICB2YXIgdGltZVNpbmNlTGFzdENhbGwgPSB0aW1lIC0gbGFzdENhbGxUaW1lLFxuICAgICAgICB0aW1lU2luY2VMYXN0SW52b2tlID0gdGltZSAtIGxhc3RJbnZva2VUaW1lO1xuXG4gICAgLy8gRWl0aGVyIHRoaXMgaXMgdGhlIGZpcnN0IGNhbGwsIGFjdGl2aXR5IGhhcyBzdG9wcGVkIGFuZCB3ZSdyZSBhdCB0aGVcbiAgICAvLyB0cmFpbGluZyBlZGdlLCB0aGUgc3lzdGVtIHRpbWUgaGFzIGdvbmUgYmFja3dhcmRzIGFuZCB3ZSdyZSB0cmVhdGluZ1xuICAgIC8vIGl0IGFzIHRoZSB0cmFpbGluZyBlZGdlLCBvciB3ZSd2ZSBoaXQgdGhlIGBtYXhXYWl0YCBsaW1pdC5cbiAgICByZXR1cm4gKGxhc3RDYWxsVGltZSA9PT0gdW5kZWZpbmVkIHx8ICh0aW1lU2luY2VMYXN0Q2FsbCA+PSB3YWl0KSB8fFxuICAgICAgKHRpbWVTaW5jZUxhc3RDYWxsIDwgMCkgfHwgKG1heGluZyAmJiB0aW1lU2luY2VMYXN0SW52b2tlID49IG1heFdhaXQpKTtcbiAgfVxuXG4gIGZ1bmN0aW9uIHRpbWVyRXhwaXJlZCgpIHtcbiAgICB2YXIgdGltZSA9IG5vdygpO1xuICAgIGlmIChzaG91bGRJbnZva2UodGltZSkpIHtcbiAgICAgIHJldHVybiB0cmFpbGluZ0VkZ2UodGltZSk7XG4gICAgfVxuICAgIC8vIFJlc3RhcnQgdGhlIHRpbWVyLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgcmVtYWluaW5nV2FpdCh0aW1lKSk7XG4gIH1cblxuICBmdW5jdGlvbiB0cmFpbGluZ0VkZ2UodGltZSkge1xuICAgIHRpbWVySWQgPSB1bmRlZmluZWQ7XG5cbiAgICAvLyBPbmx5IGludm9rZSBpZiB3ZSBoYXZlIGBsYXN0QXJnc2Agd2hpY2ggbWVhbnMgYGZ1bmNgIGhhcyBiZWVuXG4gICAgLy8gZGVib3VuY2VkIGF0IGxlYXN0IG9uY2UuXG4gICAgaWYgKHRyYWlsaW5nICYmIGxhc3RBcmdzKSB7XG4gICAgICByZXR1cm4gaW52b2tlRnVuYyh0aW1lKTtcbiAgICB9XG4gICAgbGFzdEFyZ3MgPSBsYXN0VGhpcyA9IHVuZGVmaW5lZDtcbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gY2FuY2VsKCkge1xuICAgIGlmICh0aW1lcklkICE9PSB1bmRlZmluZWQpIHtcbiAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICB9XG4gICAgbGFzdEludm9rZVRpbWUgPSAwO1xuICAgIGxhc3RBcmdzID0gbGFzdENhbGxUaW1lID0gbGFzdFRoaXMgPSB0aW1lcklkID0gdW5kZWZpbmVkO1xuICB9XG5cbiAgZnVuY3Rpb24gZmx1c2goKSB7XG4gICAgcmV0dXJuIHRpbWVySWQgPT09IHVuZGVmaW5lZCA/IHJlc3VsdCA6IHRyYWlsaW5nRWRnZShub3coKSk7XG4gIH1cblxuICBmdW5jdGlvbiBkZWJvdW5jZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKSxcbiAgICAgICAgaXNJbnZva2luZyA9IHNob3VsZEludm9rZSh0aW1lKTtcblxuICAgIGxhc3RBcmdzID0gYXJndW1lbnRzO1xuICAgIGxhc3RUaGlzID0gdGhpcztcbiAgICBsYXN0Q2FsbFRpbWUgPSB0aW1lO1xuXG4gICAgaWYgKGlzSW52b2tpbmcpIHtcbiAgICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIGxlYWRpbmdFZGdlKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgICBpZiAobWF4aW5nKSB7XG4gICAgICAgIC8vIEhhbmRsZSBpbnZvY2F0aW9ucyBpbiBhIHRpZ2h0IGxvb3AuXG4gICAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICAgICAgcmV0dXJuIGludm9rZUZ1bmMobGFzdENhbGxUaW1lKTtcbiAgICAgIH1cbiAgICB9XG4gICAgaWYgKHRpbWVySWQgPT09IHVuZGVmaW5lZCkge1xuICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICB9XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuICBkZWJvdW5jZWQuY2FuY2VsID0gY2FuY2VsO1xuICBkZWJvdW5jZWQuZmx1c2ggPSBmbHVzaDtcbiAgcmV0dXJuIGRlYm91bmNlZDtcbn1cblxubW9kdWxlLmV4cG9ydHMgPSBkZWJvdW5jZTtcbiIsIi8qKlxuICogQ2hlY2tzIGlmIGB2YWx1ZWAgaXMgdGhlXG4gKiBbbGFuZ3VhZ2UgdHlwZV0oaHR0cDovL3d3dy5lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLWVjbWFzY3JpcHQtbGFuZ3VhZ2UtdHlwZXMpXG4gKiBvZiBgT2JqZWN0YC4gKGUuZy4gYXJyYXlzLCBmdW5jdGlvbnMsIG9iamVjdHMsIHJlZ2V4ZXMsIGBuZXcgTnVtYmVyKDApYCwgYW5kIGBuZXcgU3RyaW5nKCcnKWApXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAwLjEuMFxuICogQGNhdGVnb3J5IExhbmdcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIGNoZWNrLlxuICogQHJldHVybnMge2Jvb2xlYW59IFJldHVybnMgYHRydWVgIGlmIGB2YWx1ZWAgaXMgYW4gb2JqZWN0LCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNPYmplY3Qoe30pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KF8ubm9vcCk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0KHZhbHVlKSB7XG4gIHZhciB0eXBlID0gdHlwZW9mIHZhbHVlO1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiAodHlwZSA9PSAnb2JqZWN0JyB8fCB0eXBlID09ICdmdW5jdGlvbicpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzT2JqZWN0O1xuIiwiLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZS4gQSB2YWx1ZSBpcyBvYmplY3QtbGlrZSBpZiBpdCdzIG5vdCBgbnVsbGBcbiAqIGFuZCBoYXMgYSBgdHlwZW9mYCByZXN1bHQgb2YgXCJvYmplY3RcIi5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZSwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZSh7fSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdExpa2UoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShfLm5vb3ApO1xuICogLy8gPT4gZmFsc2VcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0TGlrZSh2YWx1ZSkge1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiB0eXBlb2YgdmFsdWUgPT0gJ29iamVjdCc7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gaXNPYmplY3RMaWtlO1xuIiwidmFyIGJhc2VHZXRUYWcgPSByZXF1aXJlKCcuL19iYXNlR2V0VGFnJyksXG4gICAgaXNPYmplY3RMaWtlID0gcmVxdWlyZSgnLi9pc09iamVjdExpa2UnKTtcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIHN5bWJvbFRhZyA9ICdbb2JqZWN0IFN5bWJvbF0nO1xuXG4vKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIGNsYXNzaWZpZWQgYXMgYSBgU3ltYm9sYCBwcmltaXRpdmUgb3Igb2JqZWN0LlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGEgc3ltYm9sLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNTeW1ib2woU3ltYm9sLml0ZXJhdG9yKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzU3ltYm9sKCdhYmMnKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzU3ltYm9sKHZhbHVlKSB7XG4gIHJldHVybiB0eXBlb2YgdmFsdWUgPT0gJ3N5bWJvbCcgfHxcbiAgICAoaXNPYmplY3RMaWtlKHZhbHVlKSAmJiBiYXNlR2V0VGFnKHZhbHVlKSA9PSBzeW1ib2xUYWcpO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGlzU3ltYm9sO1xuIiwidmFyIHJvb3QgPSByZXF1aXJlKCcuL19yb290Jyk7XG5cbi8qKlxuICogR2V0cyB0aGUgdGltZXN0YW1wIG9mIHRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRoYXQgaGF2ZSBlbGFwc2VkIHNpbmNlXG4gKiB0aGUgVW5peCBlcG9jaCAoMSBKYW51YXJ5IDE5NzAgMDA6MDA6MDAgVVRDKS5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDIuNC4wXG4gKiBAY2F0ZWdvcnkgRGF0ZVxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgdGltZXN0YW1wLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmRlZmVyKGZ1bmN0aW9uKHN0YW1wKSB7XG4gKiAgIGNvbnNvbGUubG9nKF8ubm93KCkgLSBzdGFtcCk7XG4gKiB9LCBfLm5vdygpKTtcbiAqIC8vID0+IExvZ3MgdGhlIG51bWJlciBvZiBtaWxsaXNlY29uZHMgaXQgdG9vayBmb3IgdGhlIGRlZmVycmVkIGludm9jYXRpb24uXG4gKi9cbnZhciBub3cgPSBmdW5jdGlvbigpIHtcbiAgcmV0dXJuIHJvb3QuRGF0ZS5ub3coKTtcbn07XG5cbm1vZHVsZS5leHBvcnRzID0gbm93O1xuIiwidmFyIGRlYm91bmNlID0gcmVxdWlyZSgnLi9kZWJvdW5jZScpLFxuICAgIGlzT2JqZWN0ID0gcmVxdWlyZSgnLi9pc09iamVjdCcpO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKipcbiAqIENyZWF0ZXMgYSB0aHJvdHRsZWQgZnVuY3Rpb24gdGhhdCBvbmx5IGludm9rZXMgYGZ1bmNgIGF0IG1vc3Qgb25jZSBwZXJcbiAqIGV2ZXJ5IGB3YWl0YCBtaWxsaXNlY29uZHMuIFRoZSB0aHJvdHRsZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgXG4gKiBtZXRob2QgdG8gY2FuY2VsIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvXG4gKiBpbW1lZGlhdGVseSBpbnZva2UgdGhlbS4gUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2BcbiAqIHNob3VsZCBiZSBpbnZva2VkIG9uIHRoZSBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGBcbiAqIHRpbWVvdXQuIFRoZSBgZnVuY2AgaXMgaW52b2tlZCB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGVcbiAqIHRocm90dGxlZCBmdW5jdGlvbi4gU3Vic2VxdWVudCBjYWxscyB0byB0aGUgdGhyb3R0bGVkIGZ1bmN0aW9uIHJldHVybiB0aGVcbiAqIHJlc3VsdCBvZiB0aGUgbGFzdCBgZnVuY2AgaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIHRocm90dGxlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy50aHJvdHRsZWAgYW5kIGBfLmRlYm91bmNlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIHRocm90dGxlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIHRocm90dGxlIGludm9jYXRpb25zIHRvLlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9dHJ1ZV1cbiAqICBTcGVjaWZ5IGludm9raW5nIG9uIHRoZSBsZWFkaW5nIGVkZ2Ugb2YgdGhlIHRpbWVvdXQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IHRocm90dGxlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgZXhjZXNzaXZlbHkgdXBkYXRpbmcgdGhlIHBvc2l0aW9uIHdoaWxlIHNjcm9sbGluZy5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdzY3JvbGwnLCBfLnRocm90dGxlKHVwZGF0ZVBvc2l0aW9uLCAxMDApKTtcbiAqXG4gKiAvLyBJbnZva2UgYHJlbmV3VG9rZW5gIHdoZW4gdGhlIGNsaWNrIGV2ZW50IGlzIGZpcmVkLCBidXQgbm90IG1vcmUgdGhhbiBvbmNlIGV2ZXJ5IDUgbWludXRlcy5cbiAqIHZhciB0aHJvdHRsZWQgPSBfLnRocm90dGxlKHJlbmV3VG9rZW4sIDMwMDAwMCwgeyAndHJhaWxpbmcnOiBmYWxzZSB9KTtcbiAqIGpRdWVyeShlbGVtZW50KS5vbignY2xpY2snLCB0aHJvdHRsZWQpO1xuICpcbiAqIC8vIENhbmNlbCB0aGUgdHJhaWxpbmcgdGhyb3R0bGVkIGludm9jYXRpb24uXG4gKiBqUXVlcnkod2luZG93KS5vbigncG9wc3RhdGUnLCB0aHJvdHRsZWQuY2FuY2VsKTtcbiAqL1xuZnVuY3Rpb24gdGhyb3R0bGUoZnVuYywgd2FpdCwgb3B0aW9ucykge1xuICB2YXIgbGVhZGluZyA9IHRydWUsXG4gICAgICB0cmFpbGluZyA9IHRydWU7XG5cbiAgaWYgKHR5cGVvZiBmdW5jICE9ICdmdW5jdGlvbicpIHtcbiAgICB0aHJvdyBuZXcgVHlwZUVycm9yKEZVTkNfRVJST1JfVEVYVCk7XG4gIH1cbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICdsZWFkaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLmxlYWRpbmcgOiBsZWFkaW5nO1xuICAgIHRyYWlsaW5nID0gJ3RyYWlsaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLnRyYWlsaW5nIDogdHJhaWxpbmc7XG4gIH1cbiAgcmV0dXJuIGRlYm91bmNlKGZ1bmMsIHdhaXQsIHtcbiAgICAnbGVhZGluZyc6IGxlYWRpbmcsXG4gICAgJ21heFdhaXQnOiB3YWl0LFxuICAgICd0cmFpbGluZyc6IHRyYWlsaW5nXG4gIH0pO1xufVxuXG5tb2R1bGUuZXhwb3J0cyA9IHRocm90dGxlO1xuIiwidmFyIGJhc2VUcmltID0gcmVxdWlyZSgnLi9fYmFzZVRyaW0nKSxcbiAgICBpc09iamVjdCA9IHJlcXVpcmUoJy4vaXNPYmplY3QnKSxcbiAgICBpc1N5bWJvbCA9IHJlcXVpcmUoJy4vaXNTeW1ib2wnKTtcblxuLyoqIFVzZWQgYXMgcmVmZXJlbmNlcyBmb3IgdmFyaW91cyBgTnVtYmVyYCBjb25zdGFudHMuICovXG52YXIgTkFOID0gMCAvIDA7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBiYWQgc2lnbmVkIGhleGFkZWNpbWFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JhZEhleCA9IC9eWy0rXTB4WzAtOWEtZl0rJC9pO1xuXG4vKiogVXNlZCB0byBkZXRlY3QgYmluYXJ5IHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JpbmFyeSA9IC9eMGJbMDFdKyQvaTtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IG9jdGFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc09jdGFsID0gL14wb1swLTddKyQvaTtcblxuLyoqIEJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzIHdpdGhvdXQgYSBkZXBlbmRlbmN5IG9uIGByb290YC4gKi9cbnZhciBmcmVlUGFyc2VJbnQgPSBwYXJzZUludDtcblxuLyoqXG4gKiBDb252ZXJ0cyBgdmFsdWVgIHRvIGEgbnVtYmVyLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBwcm9jZXNzLlxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgbnVtYmVyLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLnRvTnVtYmVyKDMuMik7XG4gKiAvLyA9PiAzLjJcbiAqXG4gKiBfLnRvTnVtYmVyKE51bWJlci5NSU5fVkFMVUUpO1xuICogLy8gPT4gNWUtMzI0XG4gKlxuICogXy50b051bWJlcihJbmZpbml0eSk7XG4gKiAvLyA9PiBJbmZpbml0eVxuICpcbiAqIF8udG9OdW1iZXIoJzMuMicpO1xuICogLy8gPT4gMy4yXG4gKi9cbmZ1bmN0aW9uIHRvTnVtYmVyKHZhbHVlKSB7XG4gIGlmICh0eXBlb2YgdmFsdWUgPT0gJ251bWJlcicpIHtcbiAgICByZXR1cm4gdmFsdWU7XG4gIH1cbiAgaWYgKGlzU3ltYm9sKHZhbHVlKSkge1xuICAgIHJldHVybiBOQU47XG4gIH1cbiAgaWYgKGlzT2JqZWN0KHZhbHVlKSkge1xuICAgIHZhciBvdGhlciA9IHR5cGVvZiB2YWx1ZS52YWx1ZU9mID09ICdmdW5jdGlvbicgPyB2YWx1ZS52YWx1ZU9mKCkgOiB2YWx1ZTtcbiAgICB2YWx1ZSA9IGlzT2JqZWN0KG90aGVyKSA/IChvdGhlciArICcnKSA6IG90aGVyO1xuICB9XG4gIGlmICh0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IDAgPyB2YWx1ZSA6ICt2YWx1ZTtcbiAgfVxuICB2YWx1ZSA9IGJhc2VUcmltKHZhbHVlKTtcbiAgdmFyIGlzQmluYXJ5ID0gcmVJc0JpbmFyeS50ZXN0KHZhbHVlKTtcbiAgcmV0dXJuIChpc0JpbmFyeSB8fCByZUlzT2N0YWwudGVzdCh2YWx1ZSkpXG4gICAgPyBmcmVlUGFyc2VJbnQodmFsdWUuc2xpY2UoMiksIGlzQmluYXJ5ID8gMiA6IDgpXG4gICAgOiAocmVJc0JhZEhleC50ZXN0KHZhbHVlKSA/IE5BTiA6ICt2YWx1ZSk7XG59XG5cbm1vZHVsZS5leHBvcnRzID0gdG9OdW1iZXI7XG4iLCJ2YXIgZztcblxuLy8gVGhpcyB3b3JrcyBpbiBub24tc3RyaWN0IG1vZGVcbmcgPSAoZnVuY3Rpb24oKSB7XG5cdHJldHVybiB0aGlzO1xufSkoKTtcblxudHJ5IHtcblx0Ly8gVGhpcyB3b3JrcyBpZiBldmFsIGlzIGFsbG93ZWQgKHNlZSBDU1ApXG5cdGcgPSBnIHx8IG5ldyBGdW5jdGlvbihcInJldHVybiB0aGlzXCIpKCk7XG59IGNhdGNoIChlKSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgdGhlIHdpbmRvdyByZWZlcmVuY2UgaXMgYXZhaWxhYmxlXG5cdGlmICh0eXBlb2Ygd2luZG93ID09PSBcIm9iamVjdFwiKSBnID0gd2luZG93O1xufVxuXG4vLyBnIGNhbiBzdGlsbCBiZSB1bmRlZmluZWQsIGJ1dCBub3RoaW5nIHRvIGRvIGFib3V0IGl0Li4uXG4vLyBXZSByZXR1cm4gdW5kZWZpbmVkLCBpbnN0ZWFkIG9mIG5vdGhpbmcgaGVyZSwgc28gaXQnc1xuLy8gZWFzaWVyIHRvIGhhbmRsZSB0aGlzIGNhc2UuIGlmKCFnbG9iYWwpIHsgLi4ufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGc7XG4iLCJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudC9uYXZpZ2F0aW9uJztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9tb2JpbGVtZW51JztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9zY3JvbGxuYXZpZ2F0aW9uJztcclxuaW1wb3J0ICcuL2NvbXBvbmVudC9zdGlja3loZWFkZXInO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudC9sb2dpbnJlZ2lzdHJhdGlvbic7IiwiaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcclxuXHJcblxyXG52YXIgJGZvcm0gPSAkKFwiI3dwX3NpZ251cF9mb3JtXCIpLFxyXG4gICAgJHN1Y2Nlc3NNc2cgPSAkKFwiI21lc3NhZ2VcIik7XHJcbiAgICAkLnZhbGlkYXRvci5hZGRNZXRob2QoXCJsZXR0ZXJzXCIsIGZ1bmN0aW9uICh2YWx1ZSwgZWxlbWVudCkge1xyXG4gICAgcmV0dXJuIHRoaXMub3B0aW9uYWwoZWxlbWVudCkgfHwgdmFsdWUgPT0gdmFsdWUubWF0Y2goL15bYS16QS1aXFxzXSokLyk7XHJcbn0pO1xyXG5cclxuJGZvcm0udmFsaWRhdGUoe1xyXG4gIGVycm9yRWxlbWVudDogXCJzcGFuXCIsXHJcbiAgcnVsZXM6IHtcclxuICAgIGZpcnN0TmFtZToge1xyXG4gICAgICByZXF1aXJlZDogdHJ1ZSxcclxuICAgICAgbWlubGVuZ3RoOiAzLFxyXG4gICAgICBsZXR0ZXJzOiB0cnVlXHJcbiAgICB9LFxyXG4gICAgbGFzdE5hbWU6IHtcclxuICAgICAgICByZXF1aXJlZDogdHJ1ZSxcclxuICAgICAgICBtaW5sZW5ndGg6IDMsXHJcbiAgICAgICAgbGV0dGVyczogdHJ1ZVxyXG4gICAgfSxcclxuICAgIGVtYWlsOiB7XHJcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxyXG4gICAgICBlbWFpbDogdHJ1ZVxyXG4gICAgfSxcclxuICAgIHVzZXJwYXNzd29yZDp7XHJcbiAgICAgICAgcmVxdWlyZWQ6dHJ1ZSxcclxuICAgICAgICBtaW5sZW5ndGg6NFxyXG4gICAgfSxcclxuICAgIGNvbmZpcm1QYXNzd29yZDp7XHJcbiAgICAgICAgcmVxdWlyZWQ6dHJ1ZSxcclxuICAgICAgICBlcXVhbFRvOiBcIiN1c2VycGFzc3dvcmRcIlxyXG4gICAgfVxyXG4gIH0sXHJcbiAgbWVzc2FnZXM6IHtcclxuICAgIGZpcnN0TmFtZTogXCJGaXJzdCBuYW1lIHJlcXVpcmVkXCIsXHJcbiAgICBsYXN0TmFtZTogXCJMYXN0IG5hbWUgcmVxdWlyZWRcIixcclxuICAgIHVzZXJwYXNzd29yZDpcIlBhc3N3b3JkIHJlcXVpcmVkXCIsXHJcbiAgICBjb25maXJtUGFzc3dvcmQ6IFwiQ29uZmlybSBwYXNzd29yZCBzYW1lIGFzIHBhc3N3b3JkXCIsXHJcbiAgICBlbWFpbDp7cmVxdWlyZWQ6XCJFbWFpbCBhZGRyZXNzIHJlcXVpcmVkXCIsZW1haWw6XCJQbGVhc2Ugc3BlY2lmeSBhIHZhbGlkIGVtYWlsIGFkZHJlc3NcIn0sXHJcbiAgfSxcclxuICBzdWJtaXRIYW5kbGVyOiBmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgdmFyIGFjdGlvbiA9ICdyZWdpc3Rlcl9hY3Rpb24nO1xyXG4gICAgXHJcbiAgICB2YXIgZm9ybWZpcnN0TmFtZSA9IGpRdWVyeShcIiNmaXJzdE5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWxhc3ROYW1lID0galF1ZXJ5KFwiI2xhc3ROYW1lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1lbWFpbCA9IGpRdWVyeShcIiNlbWFpbFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtYWx0RW1haWwgPSBqUXVlcnkoXCIjYWx0RW1haWxcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybXBob25lID0galF1ZXJ5KFwiI3Bob25lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1hbHRQaG9uZSA9IGpRdWVyeShcIiNhbHRQaG9uZVwiKS52YWwoKTtcclxuXHJcbiAgICB2YXIgZm9ybWNvdW50cnkgPSBqUXVlcnkoXCIjY291bnRyeVwiKS52YWwoKTtcclxuICAgIHZhciBmb3Jtc3RhdGUgPSBqUXVlcnkoXCIjc3RhdGVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWFkZHJlc3MgPSBqUXVlcnkoXCIjYWRkcmVzc1wiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY2l0eSA9IGpRdWVyeShcIiNjaXR5XCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm16aXBDb2RlID0galF1ZXJ5KFwiI3ppcENvZGVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbXBhbnlOYW1lID0galF1ZXJ5KFwiI2NvbXBhbnlOYW1lXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jb21wYW55VXJsID0galF1ZXJ5KFwiI2NvbXBhbnlVcmxcIikudmFsKCk7XHJcblxyXG4gICAgdmFyIGZvcm1wYXNzd29yZCA9IGpRdWVyeShcIiN1c2VycGFzc3dvcmRcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbmZpcm1QYXNzd29yZCA9IGpRdWVyeShcIiNjb25maXJtUGFzc3dvcmRcIikudmFsKCk7XHJcbiAgIFxyXG4gICAgdmFyIGFqYXhkYXRhID0geyAgICBcclxuICAgICAgICBhY3Rpb246IGFjdGlvbixcclxuICAgICAgICBmaXJzdE5hbWU6IGZvcm1maXJzdE5hbWUsXHJcbiAgICAgICAgbGFzdE5hbWU6IGZvcm1sYXN0TmFtZSxcclxuICAgICAgICBlbWFpbDogZm9ybWVtYWlsLFxyXG4gICAgICAgIGFsdEVtYWlsOiBmb3JtYWx0RW1haWwsXHJcbiAgICAgICAgcGhvbmU6IGZvcm1waG9uZSxcclxuICAgICAgICBhbHRQaG9uZTogZm9ybWFsdFBob25lLFxyXG4gICAgICAgIGNvdW50cnk6IGZvcm1jb3VudHJ5LFxyXG4gICAgICAgIHN0YXRlOiBmb3Jtc3RhdGUsXHJcbiAgICAgICAgYWRkcmVzczogZm9ybWFkZHJlc3MsXHJcbiAgICAgICAgY2l0eTogZm9ybWNpdHksXHJcbiAgICAgICAgemlwQ29kZTogZm9ybXppcENvZGUsXHJcbiAgICAgICAgY29tcGFueU5hbWU6IGZvcm1jb21wYW55TmFtZSxcclxuICAgICAgICBjb21wYW55VXJsOiBmb3JtY29tcGFueVVybCxcclxuICAgICAgICBwYXNzd29yZDogZm9ybXBhc3N3b3JkLFxyXG4gICAgICAgIGNvbmZpcm1QYXNzd29yZDogZm9ybWNvbmZpcm1QYXNzd29yZFxyXG4gICAgfTtcclxuICAgIFxyXG5cclxuICAgIGpRdWVyeS5hamF4KHtcclxuICAgICAgICB0eXBlIDogXCJwb3N0XCIsXHJcbiAgICAgICAgZGF0YVR5cGUgOiBcImpzb25cIixcclxuICAgICAgICB1cmwgOiBhamF4dXJsLFxyXG4gICAgICAgIGRhdGEgOiBhamF4ZGF0YSxcclxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICBpZihyZXNwb25zZS5zdWNjZXNzID09XCIxXCIpIHtcclxuICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LWRhbmdlcicpLmFkZENsYXNzKCdhbGVydC1zdWNjZXNzJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbXNnXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZSk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5zaG93KCk7XHJcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3Bfc2lnbnVwX2Zvcm0nKS50cmlnZ2VyKFwicmVzZXRcIik7ICAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IHJlc3BvbnNlLnJlZGlyZWN0X3VybDtcclxuICAgICAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5oaWRlKCk7XHJcbiAgICAgICAgICAgICAgICB9LCA1MDAwKTsgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LXN1Y2Nlc3MnKS5hZGRDbGFzcygnYWxlcnQtZGFuZ2VyJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbXNnXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZV9kYXRhKTsgXHJcbiAgICAgICAgICAgIH0gICAgICAgICAgICBcclxuICAgICAgICB9XHJcbiAgICB9KTtcdFxyXG4gIH1cclxufSk7XHJcblxyXG5cclxuXHJcbnZhciAkbG9naW5mb3JtID0gJChcIiN3cF9sb2dpbl9mb3JtXCIpLFxyXG4gICAgJGxvZ2luTXNnID0gJChcIiNtZXNzYWdlXCIpO1xyXG4gICAgJC52YWxpZGF0b3IuYWRkTWV0aG9kKFwibGV0dGVyc1wiLCBmdW5jdGlvbiAodmFsdWUsIGVsZW1lbnQpIHtcclxuICAgIHJldHVybiB0aGlzLm9wdGlvbmFsKGVsZW1lbnQpIHx8IHZhbHVlID09IHZhbHVlLm1hdGNoKC9eW2EtekEtWlxcc10qJC8pO1xyXG59KTtcclxuXHJcblxyXG5cclxuJGxvZ2luZm9ybS52YWxpZGF0ZSh7XHJcbiAgICBlcnJvckVsZW1lbnQ6IFwic3BhblwiLFxyXG4gICAgcnVsZXM6IHtcclxuICAgICAgdXNlckVtYWlsOiB7XHJcbiAgICAgICAgcmVxdWlyZWQ6IHRydWUsXHJcbiAgICAgICAgZW1haWw6IHRydWVcclxuICAgICAgfSxcclxuICAgICAgcGFzc3dvcmQ6e1xyXG4gICAgICAgICAgcmVxdWlyZWQ6dHJ1ZSxcclxuICAgICAgICAgIG1pbmxlbmd0aDo0XHJcbiAgICAgIH1cclxuICAgIH0sXHJcbiAgICBtZXNzYWdlczoge1xyXG4gICAgICB1c2VyRW1haWw6IHtyZXF1aXJlZDpcIkxvZ2luIGVtYWlsIHJlcXVpcmVkXCIsZW1haWw6XCJQbGVhc2UgVmFsaWQgZW1haWwgcmVxdWlyZWRcIn0sXHJcbiAgICAgIHBhc3N3b3JkOntyZXF1aXJlZDpcIlBhc3N3b3JkIHJlcXVpcmVkXCIsbWlubGVuZ3RoOlwiUGFzc3dvcmQgbXVzdCBiZSBtb3JlIHRoZW4gNCBkaWdpdFwifVxyXG4gICAgfSxcclxuICAgIHN1Ym1pdEhhbmRsZXI6IGZ1bmN0aW9uICgpIHtcclxuICBcclxuICAgICAgICB2YXIgYWN0aW9uID0gJ2xvZ2luX2FjdGlvbic7XHJcbiAgICBcclxuICAgICAgICB2YXIgdXNlckVtYWlsID0galF1ZXJ5KFwiI3VzZXJFbWFpbFwiKS52YWwoKTtcclxuICAgICAgICB2YXIgcGFzc3dvcmQgPSBqUXVlcnkoXCIjcGFzc3dvcmRcIikudmFsKCk7XHJcbiAgICAgICAgdmFyIHJlbWVtYmVyID0galF1ZXJ5KFwiI3JlbWVtYmVyXCIpLnZhbCgpO1xyXG4gICAgICAgXHJcbiAgICAgICAgdmFyIGFqYXhkYXRhID0geyAgICBcclxuICAgICAgICAgICAgYWN0aW9uOiBhY3Rpb24sXHJcbiAgICAgICAgICAgIHVzZXJMb2dpbjogdXNlckVtYWlsLFxyXG4gICAgICAgICAgICBwYXNzd29yZDogcGFzc3dvcmQsXHJcbiAgICAgICAgICAgIHJlbWVtYmVyOiByZW1lbWJlclxyXG4gICAgICAgIH07XHJcbiAgICAgICAgXHJcbiAgICBcclxuICAgICAgICBqUXVlcnkuYWpheCh7XHJcbiAgICAgICAgICAgIHR5cGUgOiBcInBvc3RcIixcclxuICAgICAgICAgICAgZGF0YVR5cGUgOiBcImpzb25cIixcclxuICAgICAgICAgICAgdXJsIDogYWpheHVybCxcclxuICAgICAgICAgICAgZGF0YSA6IGFqYXhkYXRhLFxyXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICAgICAgaWYocmVzcG9uc2Uuc3VjY2VzcyA9PVwiMVwiKSB7ICAgIFxyXG4gICAgICAgICAgICAgICAgICAgIC8vICRsb2dpbk1zZy5zaG93KCk7ICAgIFxyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnJlbW92ZUNsYXNzKCdhbGVydC1kYW5nZXInKS5hZGRDbGFzcygnYWxlcnQtc3VjY2VzcycpO1xyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtc2dcIikuaHRtbChyZXNwb25zZS5tZXNzYWdlKycgJytyZXNwb25zZS5tZXNzYWdlX2RhdGEpO1xyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnNob3coKTtcclxuICAgICAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGpRdWVyeSgnI3dwX2xvZ2luX2Zvcm0nKS50cmlnZ2VyKFwicmVzZXRcIik7ICAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZXNwb25zZS5yZWRpcmVjdF91cmw7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLmhpZGUoKTtcclxuICAgICAgICAgICAgICAgICAgICB9LCAzMDAwKTsgICAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2FsZXJ0LXN1Y2Nlc3MnKS5hZGRDbGFzcygnYWxlcnQtZGFuZ2VyJyk7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21zZ1wiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7IFxyXG4gICAgICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLnNob3coKTtcclxuICAgICAgICAgICAgICAgIH0gICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1x0XHJcbiAgICB9XHJcbiAgfSk7XHJcbiAgXHJcbiAgXHJcbi8valF1ZXJ5KFwiLnNob3dMb2NhdGlvblwiKS5jbGljayhmdW5jdGlvbigpe1xyXG5qUXVlcnkoJy5zaG93TG9jYXRpb24nKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG4gICAgdmFyIHJlY2VudCA9ICQodGhpcykudmFsKCk7XHJcbiAgICBpZiAoJCh0aGlzKS5pcyhcIjpjaGVja2VkXCIpKXtcclxuICAgICAgICAkKFwiLlwiK3JlY2VudCkuc2hvdygpO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgJChcIi5cIityZWNlbnQpLmhpZGUoKTtcclxuICAgIH1cclxufSk7XHJcbi8qIFJlZ2lzdHJhdGlvbiBBamF4ICovXHJcbi8qXHJcbiQoJyNyZWdpc3RlcicpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICB2YXIgYWN0aW9uID0gJ3JlZ2lzdGVyX2FjdGlvbic7XHJcbiAgICBcclxuICAgIHZhciBmb3JtZmlyc3ROYW1lID0galF1ZXJ5KFwiI2ZpcnN0TmFtZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtbGFzdE5hbWUgPSBqUXVlcnkoXCIjbGFzdE5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWVtYWlsID0galF1ZXJ5KFwiI2VtYWlsXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1hbHRFbWFpbCA9IGpRdWVyeShcIiNhbHRFbWFpbFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtcGhvbmUgPSBqUXVlcnkoXCIjcGhvbmVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWFsdFBob25lID0galF1ZXJ5KFwiI2FsdFBob25lXCIpLnZhbCgpO1xyXG5cclxuICAgIHZhciBmb3JtY291bnRyeSA9IGpRdWVyeShcIiNjb3VudHJ5XCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1zdGF0ZSA9IGpRdWVyeShcIiNzdGF0ZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtYWRkcmVzcyA9IGpRdWVyeShcIiNhZGRyZXNzXCIpLnZhbCgpO1xyXG4gICAgdmFyIGZvcm1jaXR5ID0galF1ZXJ5KFwiI2NpdHlcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybXppcENvZGUgPSBqUXVlcnkoXCIjemlwQ29kZVwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29tcGFueU5hbWUgPSBqUXVlcnkoXCIjY29tcGFueU5hbWVcIikudmFsKCk7XHJcbiAgICB2YXIgZm9ybWNvbXBhbnlVcmwgPSBqUXVlcnkoXCIjY29tcGFueVVybFwiKS52YWwoKTtcclxuXHJcbiAgICB2YXIgZm9ybXBhc3N3b3JkID0galF1ZXJ5KFwiI3VzZXJwYXNzd29yZFwiKS52YWwoKTtcclxuICAgIHZhciBmb3JtY29uZmlybVBhc3N3b3JkID0galF1ZXJ5KFwiI2NvbmZpcm1QYXNzd29yZFwiKS52YWwoKTtcclxuICAgXHJcbiAgICB2YXIgYWpheGRhdGEgPSB7ICAgIFxyXG4gICAgICAgIGFjdGlvbjogJ3JlZ2lzdGVyX2FjdGlvbicsXHJcbiAgICAgICAgZmlyc3ROYW1lOiBmb3JtZmlyc3ROYW1lLFxyXG4gICAgICAgIGxhc3ROYW1lOiBmb3JtbGFzdE5hbWUsXHJcbiAgICAgICAgZW1haWw6IGZvcm1lbWFpbCxcclxuICAgICAgICBhbHRFbWFpbDogZm9ybWFsdEVtYWlsLFxyXG4gICAgICAgIHBob25lOiBmb3JtcGhvbmUsXHJcbiAgICAgICAgYWx0UGhvbmU6IGZvcm1hbHRQaG9uZSxcclxuICAgICAgICBjb3VudHJ5OiBmb3JtY291bnRyeSxcclxuICAgICAgICBzdGF0ZTogZm9ybXN0YXRlLFxyXG4gICAgICAgIGFkZHJlc3M6IGZvcm1hZGRyZXNzLFxyXG4gICAgICAgIGNpdHk6IGZvcm1jaXR5LFxyXG4gICAgICAgIHppcENvZGU6IGZvcm16aXBDb2RlLFxyXG4gICAgICAgIGNvbXBhbnlOYW1lOiBmb3JtY29tcGFueU5hbWUsXHJcbiAgICAgICAgY29tcGFueVVybDogZm9ybWNvbXBhbnlVcmwsXHJcbiAgICAgICAgcGFzc3dvcmQ6IGZvcm1wYXNzd29yZCxcclxuICAgICAgICBjb25maXJtUGFzc3dvcmQ6IGZvcm1jb25maXJtUGFzc3dvcmRcclxuICAgIH07XHJcbiAgICBcclxuXHJcbiAgICBqUXVlcnkuYWpheCh7XHJcbiAgICAgICAgdHlwZSA6IFwicG9zdFwiLFxyXG4gICAgICAgIGRhdGFUeXBlIDogXCJqc29uXCIsXHJcbiAgICAgICAgdXJsIDogYWpheHVybCxcclxuICAgICAgICBkYXRhIDogYWpheGRhdGEsXHJcbiAgICAgICAgc3VjY2VzczogZnVuY3Rpb24ocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgaWYocmVzcG9uc2Uuc3VjY2VzcyA9PVwiMVwiKSB7ICAgXHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5yZW1vdmVDbGFzcygnZXJyb3JfbWVzc2FnZScpLmFkZENsYXNzKCdzdWNjZXNzX21lc3NhZ2UnKTtcclxuICAgICAgICAgICAgICAgIGpRdWVyeShcIiNtZXNzYWdlXCIpLmh0bWwocmVzcG9uc2UubWVzc2FnZSk7XHJcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3Bfc2lnbnVwX2Zvcm0nKS50cmlnZ2VyKFwicmVzZXRcIik7XHJcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZXNwb25zZS5yZWRpcmVjdF91cmw7XHJcbiAgICAgICAgICAgICAgICB9LCAzMDAwKTsgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ3N1Y2Nlc3NfbWVzc2FnZScpLmFkZENsYXNzKCdlcnJvcl9tZXNzYWdlJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7IFxyXG4gICAgICAgICAgICB9ICAgICAgICAgICAgXHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHRcdFx0XHJcbn0pOyAgIFxyXG5cclxuXHJcbi8vIExvZ2luIEN1c3RvbWVyIC0gQWpheCBcclxuJCgnI2xvZ2luJykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIHZhciBhY3Rpb24gPSAnbG9naW5fYWN0aW9uJztcclxuICAgIFxyXG4gICAgdmFyIHVzZXJFbWFpbCA9IGpRdWVyeShcIiN1c2VyRW1haWxcIikudmFsKCk7XHJcbiAgICB2YXIgcGFzc3dvcmQgPSBqUXVlcnkoXCIjcGFzc3dvcmRcIikudmFsKCk7XHJcbiAgICB2YXIgcmVtZW1iZXIgPSBqUXVlcnkoXCIjcmVtZW1iZXJcIikudmFsKCk7XHJcbiAgIFxyXG4gICAgdmFyIGFqYXhkYXRhID0geyAgICBcclxuICAgICAgICBhY3Rpb246IGFjdGlvbixcclxuICAgICAgICB1c2VyTG9naW46IHVzZXJFbWFpbCxcclxuICAgICAgICBwYXNzd29yZDogcGFzc3dvcmQsXHJcbiAgICAgICAgcmVtZW1iZXI6IHJlbWVtYmVyXHJcbiAgICB9O1xyXG4gICAgXHJcblxyXG4gICAgalF1ZXJ5LmFqYXgoe1xyXG4gICAgICAgIHR5cGUgOiBcInBvc3RcIixcclxuICAgICAgICBkYXRhVHlwZSA6IFwianNvblwiLFxyXG4gICAgICAgIHVybCA6IGFqYXh1cmwsXHJcbiAgICAgICAgZGF0YSA6IGFqYXhkYXRhLFxyXG4gICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgIGlmKHJlc3BvbnNlLnN1Y2Nlc3MgPT1cIjFcIikgeyAgICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ2Vycm9yX21lc3NhZ2UnKS5hZGRDbGFzcygnc3VjY2Vzc19tZXNzYWdlJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2UrJyAnK3Jlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7ICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjd3BfbG9naW5fZm9ybScpLnRyaWdnZXIoXCJyZXNldFwiKTsgXHJcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZXNwb25zZS5yZWRpcmVjdF91cmw7XHJcbiAgICAgICAgICAgICAgICB9LCAyMDAwKTtcclxuXHJcbiAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgalF1ZXJ5KFwiI21lc3NhZ2VcIikucmVtb3ZlQ2xhc3MoJ3N1Y2Nlc3NfbWVzc2FnZScpLmFkZENsYXNzKCdlcnJvcl9tZXNzYWdlJyk7XHJcbiAgICAgICAgICAgICAgICBqUXVlcnkoXCIjbWVzc2FnZVwiKS5odG1sKHJlc3BvbnNlLm1lc3NhZ2VfZGF0YSk7IFxyXG4gICAgICAgICAgICB9ICAgICAgICAgICAgXHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHRcdFx0XHJcbn0pOyAgIFxyXG4qLyIsImNsYXNzIE1vYmlsZU1lbnV7XHJcbiAgICBjb25zdHJ1Y3Rvcigpe1xyXG4gICAgICAgIHRoaXMubWVudUljb24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXJfX21lbnUtaWNvbicpO1xyXG4gICAgICAgIHRoaXMubWVudUNvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXJfX21vYmlsZS1tZW51LWNvbnRlbnQnKTtcclxuICAgICAgICB0aGlzLmV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgZXZlbnRzKCl7XHJcbiAgICAgICAgdGhpcy5tZW51SWNvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMudG9nZ2xlVGhlTWVudSgpKTtcclxuICAgIH1cclxuXHJcbiAgICB0b2dnbGVUaGVNZW51KCl7XHJcbiAgICAgICAgdGhpcy5tZW51Q29udGVudC5jbGFzc0xpc3QudG9nZ2xlKCdzaXRlLWhlYWRlcl9fbW9iaWxlLW1lbnUtY29udGVudC0taXMtdmlzaWJsZScpO1xyXG4gICAgICAgIHRoaXMubWVudUljb24uY2xhc3NMaXN0LnRvZ2dsZSgnc2l0ZS1oZWFkZXJfX21lbnUtaWNvbi0tY2xvc2UteCcpO1xyXG4gICAgfVxyXG59XHJcblxyXG5uZXcgTW9iaWxlTWVudSgpOyIsImltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XHJcblxyXG4kKCcuaGVhZGVyLW5hdmlnYXRpb24nKS5vbignbW91c2VlbnRlcicsICcubWVudS1pdGVtLWhhcy1jaGlsZHJlbicsIChlKSA9PntcclxuICAgIFxyXG4gICAgaWYoISQoZS5jdXJyZW50VGFyZ2V0KS5wYXJlbnRzKCcuc3ViLW1lbnUnKS5sZW5ndGgpe1xyXG4gICAgICAgICQoJy5tZW51ID4gLm1lbnUtaXRlbS5vcGVuJykuZmluZCgnPiBhID4gLm1lbnUtYnV0dG9uJykudHJpZ2dlcignY2xpY2snKTtcclxuICAgIH1cclxuICAgICQoZS5jdXJyZW50VGFyZ2V0KS5hZGRDbGFzcygnb3BlbicpO1xyXG59KS5vbignbW91c2VsZWF2ZScsICcubWVudS1pdGVtLWhhcy1jaGlsZHJlbicsIChlKSA9PntcclxuICAgICQoZS5jdXJyZW50VGFyZ2V0KS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG59KVxyXG4iLCJpbXBvcnQgdGhyb3R0bGUgZnJvbSAnbG9kYXNoL3Rocm90dGxlJztcclxuaW1wb3J0IGRlYm91bmNlIGZyb20gJ2xvZGFzaC9kZWJvdW5jZSc7XHJcblxyXG5jbGFzcyBTdGlja3lIZWFkZXIge1xyXG4gIGNvbnN0cnVjdG9yKCkge1xyXG4gICAgdGhpcy5wYWdlU2VjdGlvbnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLnBhZ2Utc2VjdGlvblwiKTtcclxuICAgIHRoaXMuYnJvd3NlckhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodDtcclxuICAgIHRoaXMucHJldmlvdXNTY3JvbGxZID0gd2luZG93LnNjcm9sbFk7XHJcbiAgICB0aGlzLmV2ZW50cygpO1xyXG4gIH1cclxuXHJcbiAgZXZlbnRzKCkge1xyXG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJzY3JvbGxcIiwgdGhyb3R0bGUoKCkgPT4gdGhpcy5ydW5PblNjcm9sbCgpLCA1MCkpO1xyXG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJyZXNpemVcIiwgZGVib3VuY2UoKCkgPT4ge1xyXG4gICAgICB0aGlzLmJyb3dzZXJIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgICB9LCAzMzMpKTtcclxuICB9XHJcblxyXG4gIHJ1bk9uU2Nyb2xsKCkge1xyXG4gICAgdGhpcy5kZXRlcm1pbmVTY3JvbGxEaXJlY3Rpb24oKTtcclxuICAgIHRoaXMucGFnZVNlY3Rpb25zLmZvckVhY2goZWwgPT4gdGhpcy5jYWxjU2VjdGlvbihlbCkpO1xyXG4gIH1cclxuXHJcbiAgZGV0ZXJtaW5lU2Nyb2xsRGlyZWN0aW9uKCkge1xyXG4gICAgaWYgKHdpbmRvdy5zY3JvbGxZID4gdGhpcy5wcmV2aW91c1Njcm9sbFkpIHtcclxuICAgICAgdGhpcy5zY3JvbGxEaXJlY3Rpb24gPSAnZG93bic7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICB0aGlzLnNjcm9sbERpcmVjdGlvbiA9ICd1cCc7XHJcbiAgICB9XHJcbiAgICB0aGlzLnByZXZpb3VzU2Nyb2xsWSA9IHdpbmRvdy5zY3JvbGxZO1xyXG4gIH1cclxuXHJcbiAgY2FsY1NlY3Rpb24oZWwpIHtcclxuICAgIGlmICh3aW5kb3cuc2Nyb2xsWSArIHRoaXMuYnJvd3NlckhlaWdodCA+IGVsLm9mZnNldFRvcCAmJiB3aW5kb3cuc2Nyb2xsWSA8IGVsLm9mZnNldFRvcCArIGVsLm9mZnNldEhlaWdodCkge1xyXG4gICAgICBsZXQgc2Nyb2xsUGVyY2VudCA9IChlbC5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKS50b3AgLyB0aGlzLmJyb3dzZXJIZWlnaHQpICogMTAwO1xyXG4gICAgICBpZiAoIChzY3JvbGxQZXJjZW50IDwgNDAgJiYgc2Nyb2xsUGVyY2VudCA+IDAgJiYgdGhpcy5zY3JvbGxEaXJlY3Rpb24gPT0gJ2Rvd24nKSB8fCAoc2Nyb2xsUGVyY2VudCA8IDMzICYmIHRoaXMuc2Nyb2xsRGlyZWN0aW9uID09ICd1cCcpKSB7XHJcbiAgICAgICAgbGV0IG1hdGNoaW5nTGluayA9IGVsLmdldEF0dHJpYnV0ZShcImRhdGEtbWF0Y2hpbmctbGlua1wiKTtcclxuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKGAuc2Nyb2xsLW5hdiBhOm5vdCgke21hdGNoaW5nTGlua30pYCkuZm9yRWFjaChlbCA9PiBlbC5jbGFzc0xpc3QucmVtb3ZlKFwic2Nyb2xsLW5hdi0taXMtYWN0aXZlXCIpKTtcclxuICAgICAgICAvLyBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKG1hdGNoaW5nTGluaykuY2xhc3NMaXN0LmFkZChcInNjcm9sbC1uYXYtLWlzLWFjdGl2ZVwiKTtcclxuICAgICAgfVxyXG4gICAgfVxyXG4gIH1cclxufVxyXG5cclxubmV3IFN0aWNreUhlYWRlcigpOyIsImltcG9ydCB0aHJvdHRsZSBmcm9tICdsb2Rhc2gvdGhyb3R0bGUnO1xyXG5cclxuY2xhc3MgU3RpY2t5SGVhZGVyIHtcclxuXHJcblx0Y29uc3RydWN0b3IoKSB7XHJcblx0XHR0aGlzLnNpdGVIZWFkZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2l0ZS1oZWFkZXInKTtcclxuXHRcdHRoaXMuZXZlbnRzKCk7XHJcblx0fVxyXG5cclxuXHRldmVudHMoKSB7XHJcblx0XHR3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcInNjcm9sbFwiLCB0aHJvdHRsZSgoKSA9PiB0aGlzLnNob3dTdGlja3lPblNjcm9sbCgpLCAyMDApKTtcclxuXHR9XHJcblxyXG5cdHNob3dTdGlja3lPblNjcm9sbCgpIHtcclxuXHRcdGlmICh3aW5kb3cuc2Nyb2xsWSA+IDEwMCkge1xyXG5cdFx0XHR0aGlzLnNpdGVIZWFkZXIuY2xhc3NMaXN0LmFkZChcInNpdGUtaGVhZGVyLS1vbi1zY3JvbGxcIik7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHR0aGlzLnNpdGVIZWFkZXIuY2xhc3NMaXN0LnJlbW92ZShcInNpdGUtaGVhZGVyLS1vbi1zY3JvbGxcIik7XHJcblx0XHR9XHJcblx0fVxyXG59XHJcblxyXG5uZXcgU3RpY2t5SGVhZGVyKCk7IiwibW9kdWxlLmV4cG9ydHMgPSBqUXVlcnk7Il0sInNvdXJjZVJvb3QiOiIifQ==