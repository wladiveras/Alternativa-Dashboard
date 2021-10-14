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
/******/ 	return __webpack_require__(__webpack_require__.s = 108);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/custom/education/student/profile.js":
/*!********************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/custom/education/student/profile.js ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval(" // Class definition\n\nvar KTAppsEducationStudentProfile = function () {\n  // Base elements\n  var avatar;\n\n  var initAvatar = function initAvatar() {\n    avatar = new KTImageInput('kt_user_avatar');\n  };\n\n  return {\n    // public functions\n    init: function init() {\n      initAvatar();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTAppsEducationStudentProfile.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2N1c3RvbS9lZHVjYXRpb24vc3R1ZGVudC9wcm9maWxlLmpzP2RiYTAiXSwibmFtZXMiOlsiS1RBcHBzRWR1Y2F0aW9uU3R1ZGVudFByb2ZpbGUiLCJhdmF0YXIiLCJpbml0QXZhdGFyIiwiS1RJbWFnZUlucHV0IiwiaW5pdCIsImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiXSwibWFwcGluZ3MiOiJDQUVBOztBQUNBLElBQUlBLDZCQUE2QixHQUFHLFlBQVk7QUFDL0M7QUFDQSxNQUFJQyxNQUFKOztBQUVBLE1BQUlDLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQVc7QUFDM0JELFVBQU0sR0FBRyxJQUFJRSxZQUFKLENBQWlCLGdCQUFqQixDQUFUO0FBQ0EsR0FGRDs7QUFJQSxTQUFPO0FBQ047QUFDQUMsUUFBSSxFQUFFLGdCQUFXO0FBQ2hCRixnQkFBVTtBQUNWO0FBSkssR0FBUDtBQU1BLENBZG1DLEVBQXBDOztBQWdCQUcsTUFBTSxDQUFDQyxRQUFELENBQU4sQ0FBaUJDLEtBQWpCLENBQXVCLFlBQVc7QUFDakNQLCtCQUE2QixDQUFDSSxJQUE5QjtBQUNBLENBRkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2N1c3RvbS9lZHVjYXRpb24vc3R1ZGVudC9wcm9maWxlLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVEFwcHNFZHVjYXRpb25TdHVkZW50UHJvZmlsZSA9IGZ1bmN0aW9uICgpIHtcblx0Ly8gQmFzZSBlbGVtZW50c1xuXHR2YXIgYXZhdGFyO1xuXG5cdHZhciBpbml0QXZhdGFyID0gZnVuY3Rpb24oKSB7XG5cdFx0YXZhdGFyID0gbmV3IEtUSW1hZ2VJbnB1dCgna3RfdXNlcl9hdmF0YXInKTtcblx0fVxuXG5cdHJldHVybiB7XG5cdFx0Ly8gcHVibGljIGZ1bmN0aW9uc1xuXHRcdGluaXQ6IGZ1bmN0aW9uKCkge1xuXHRcdFx0aW5pdEF2YXRhcigpO1xuXHRcdH1cblx0fTtcbn0oKTtcblxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblx0S1RBcHBzRWR1Y2F0aW9uU3R1ZGVudFByb2ZpbGUuaW5pdCgpO1xufSk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/custom/education/student/profile.js\n");

/***/ }),

/***/ 108:
/*!**************************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/custom/education/student/profile.js ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mrzer0/workspace/Alternativa/dashboard_laravel/resources/wladi-workspace/js/pages/custom/education/student/profile.js */"./resources/wladi-workspace/js/pages/custom/education/student/profile.js");


/***/ })

/******/ });