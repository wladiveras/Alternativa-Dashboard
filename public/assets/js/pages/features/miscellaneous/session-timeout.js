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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 152);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/features/miscellaneous/session-timeout.js":
/*!**************************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/features/miscellaneous/session-timeout.js ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar KTSessionTimeoutDemo = function () {\n  var initDemo = function initDemo() {\n    $.sessionTimeout({\n      title: 'Session Timeout Notification',\n      message: 'Your session is about to expire.',\n      keepAliveUrl: HOST_URL + '/api//session-timeout/keepalive.php',\n      redirUrl: '?p=page_user_lock_1',\n      logoutUrl: '?p=page_user_login_1',\n      warnAfter: 5000,\n      //warn after 5 seconds\n      redirAfter: 15000,\n      //redirect after 15 secons,\n      ignoreUserActivity: true,\n      countdownMessage: 'Redirecting in {timer} seconds.',\n      countdownBar: true\n    });\n  };\n\n  return {\n    //main function to initiate the module\n    init: function init() {\n      initDemo();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTSessionTimeoutDemo.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2ZlYXR1cmVzL21pc2NlbGxhbmVvdXMvc2Vzc2lvbi10aW1lb3V0LmpzPzQ0NWQiXSwibmFtZXMiOlsiS1RTZXNzaW9uVGltZW91dERlbW8iLCJpbml0RGVtbyIsIiQiLCJzZXNzaW9uVGltZW91dCIsInRpdGxlIiwibWVzc2FnZSIsImtlZXBBbGl2ZVVybCIsIkhPU1RfVVJMIiwicmVkaXJVcmwiLCJsb2dvdXRVcmwiLCJ3YXJuQWZ0ZXIiLCJyZWRpckFmdGVyIiwiaWdub3JlVXNlckFjdGl2aXR5IiwiY291bnRkb3duTWVzc2FnZSIsImNvdW50ZG93bkJhciIsImluaXQiLCJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5Il0sIm1hcHBpbmdzIjoiQUFBYTs7QUFFYixJQUFJQSxvQkFBb0IsR0FBRyxZQUFZO0FBQ25DLE1BQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFXLEdBQVk7QUFDdkJDLEtBQUMsQ0FBQ0MsY0FBRixDQUFpQjtBQUNiQyxXQUFLLEVBQUUsOEJBRE07QUFFYkMsYUFBTyxFQUFFLGtDQUZJO0FBR2JDLGtCQUFZLEVBQUVDLFFBQVEsR0FBRyxxQ0FIWjtBQUliQyxjQUFRLEVBQUUscUJBSkc7QUFLYkMsZUFBUyxFQUFFLHNCQUxFO0FBTWJDLGVBQVMsRUFBRSxJQU5FO0FBTUk7QUFDakJDLGdCQUFVLEVBQUUsS0FQQztBQU9NO0FBQ25CQyx3QkFBa0IsRUFBRSxJQVJQO0FBU2JDLHNCQUFnQixFQUFFLGlDQVRMO0FBVWJDLGtCQUFZLEVBQUU7QUFWRCxLQUFqQjtBQVlILEdBYkQ7O0FBZUEsU0FBTztBQUNIO0FBQ0FDLFFBQUksRUFBRSxnQkFBWTtBQUNkZCxjQUFRO0FBQ1g7QUFKRSxHQUFQO0FBTUgsQ0F0QjBCLEVBQTNCOztBQXdCQWUsTUFBTSxDQUFDQyxRQUFELENBQU4sQ0FBaUJDLEtBQWpCLENBQXVCLFlBQVc7QUFDOUJsQixzQkFBb0IsQ0FBQ2UsSUFBckI7QUFDSCxDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3dsYWRpLXdvcmtzcGFjZS9qcy9wYWdlcy9mZWF0dXJlcy9taXNjZWxsYW5lb3VzL3Nlc3Npb24tdGltZW91dC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG52YXIgS1RTZXNzaW9uVGltZW91dERlbW8gPSBmdW5jdGlvbiAoKSB7XG4gICAgdmFyIGluaXREZW1vID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAkLnNlc3Npb25UaW1lb3V0KHtcbiAgICAgICAgICAgIHRpdGxlOiAnU2Vzc2lvbiBUaW1lb3V0IE5vdGlmaWNhdGlvbicsXG4gICAgICAgICAgICBtZXNzYWdlOiAnWW91ciBzZXNzaW9uIGlzIGFib3V0IHRvIGV4cGlyZS4nLFxuICAgICAgICAgICAga2VlcEFsaXZlVXJsOiBIT1NUX1VSTCArICcvYXBpLy9zZXNzaW9uLXRpbWVvdXQva2VlcGFsaXZlLnBocCcsXG4gICAgICAgICAgICByZWRpclVybDogJz9wPXBhZ2VfdXNlcl9sb2NrXzEnLFxuICAgICAgICAgICAgbG9nb3V0VXJsOiAnP3A9cGFnZV91c2VyX2xvZ2luXzEnLFxuICAgICAgICAgICAgd2FybkFmdGVyOiA1MDAwLCAvL3dhcm4gYWZ0ZXIgNSBzZWNvbmRzXG4gICAgICAgICAgICByZWRpckFmdGVyOiAxNTAwMCwgLy9yZWRpcmVjdCBhZnRlciAxNSBzZWNvbnMsXG4gICAgICAgICAgICBpZ25vcmVVc2VyQWN0aXZpdHk6IHRydWUsXG4gICAgICAgICAgICBjb3VudGRvd25NZXNzYWdlOiAnUmVkaXJlY3RpbmcgaW4ge3RpbWVyfSBzZWNvbmRzLicsXG4gICAgICAgICAgICBjb3VudGRvd25CYXI6IHRydWVcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmV0dXJuIHtcbiAgICAgICAgLy9tYWluIGZ1bmN0aW9uIHRvIGluaXRpYXRlIHRoZSBtb2R1bGVcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgaW5pdERlbW8oKTtcbiAgICAgICAgfVxuICAgIH07XG59KCk7XG5cbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgS1RTZXNzaW9uVGltZW91dERlbW8uaW5pdCgpO1xufSk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/features/miscellaneous/session-timeout.js\n");

/***/ }),

/***/ 152:
/*!********************************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/features/miscellaneous/session-timeout.js ***!
  \********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mrzer0/workspace/Alternativa/dashboard_laravel/resources/wladi-workspace/js/pages/features/miscellaneous/session-timeout.js */"./resources/wladi-workspace/js/pages/features/miscellaneous/session-timeout.js");


/***/ })

/******/ });