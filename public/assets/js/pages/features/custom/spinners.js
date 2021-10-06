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
/******/ 	return __webpack_require__(__webpack_require__.s = 140);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/features/custom/spinners.js":
/*!************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/features/custom/spinners.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval(" // Class definition\n\nvar KTSpinnersDemo = function () {\n  // Private functions\n  // Demos\n  var demo1 = function demo1() {\n    // Demo 1\n    var btn = KTUtil.getById(\"kt_btn_1\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-right spinner-white pr-15\", \"Please wait\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  var demo2 = function demo2() {\n    // Demo 2\n    var btn = KTUtil.getById(\"kt_btn_2\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-dark spinner-right pr-15\", \"Loading\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  var demo3 = function demo3() {\n    // Demo 3\n    var btn = KTUtil.getById(\"kt_btn_3\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-left spinner-darker-success pl-15\", \"Disabled...\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  var demo4 = function demo4() {\n    // Demo 4\n    var btn = KTUtil.getById(\"kt_btn_4\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-left spinner-darker-danger pl-15\", \"Please wait\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  return {\n    // public functions\n    init: function init() {\n      demo1();\n      demo2();\n      demo3();\n      demo4();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTSpinnersDemo.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2ZlYXR1cmVzL2N1c3RvbS9zcGlubmVycy5qcz9lNjljIl0sIm5hbWVzIjpbIktUU3Bpbm5lcnNEZW1vIiwiZGVtbzEiLCJidG4iLCJLVFV0aWwiLCJnZXRCeUlkIiwiYWRkRXZlbnQiLCJidG5XYWl0Iiwic2V0VGltZW91dCIsImJ0blJlbGVhc2UiLCJkZW1vMiIsImRlbW8zIiwiZGVtbzQiLCJpbml0IiwialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSJdLCJtYXBwaW5ncyI6IkNBRUE7O0FBRUEsSUFBSUEsY0FBYyxHQUFHLFlBQVk7QUFDN0I7QUFFQTtBQUNBLE1BQUlDLEtBQUssR0FBRyxTQUFSQSxLQUFRLEdBQVk7QUFDcEI7QUFDQSxRQUFJQyxHQUFHLEdBQUdDLE1BQU0sQ0FBQ0MsT0FBUCxDQUFlLFVBQWYsQ0FBVjtBQUVBRCxVQUFNLENBQUNFLFFBQVAsQ0FBZ0JILEdBQWhCLEVBQXFCLE9BQXJCLEVBQThCLFlBQVc7QUFDckNDLFlBQU0sQ0FBQ0csT0FBUCxDQUFlSixHQUFmLEVBQW9CLDJDQUFwQixFQUFpRSxhQUFqRTtBQUVBSyxnQkFBVSxDQUFDLFlBQVc7QUFDbEJKLGNBQU0sQ0FBQ0ssVUFBUCxDQUFrQk4sR0FBbEI7QUFDSCxPQUZTLEVBRVAsSUFGTyxDQUFWO0FBR0gsS0FORDtBQU9ILEdBWEQ7O0FBYUEsTUFBSU8sS0FBSyxHQUFHLFNBQVJBLEtBQVEsR0FBWTtBQUNwQjtBQUNBLFFBQUlQLEdBQUcsR0FBR0MsTUFBTSxDQUFDQyxPQUFQLENBQWUsVUFBZixDQUFWO0FBRUFELFVBQU0sQ0FBQ0UsUUFBUCxDQUFnQkgsR0FBaEIsRUFBcUIsT0FBckIsRUFBOEIsWUFBVztBQUNyQ0MsWUFBTSxDQUFDRyxPQUFQLENBQWVKLEdBQWYsRUFBb0IsMENBQXBCLEVBQWdFLFNBQWhFO0FBRUFLLGdCQUFVLENBQUMsWUFBVztBQUNsQkosY0FBTSxDQUFDSyxVQUFQLENBQWtCTixHQUFsQjtBQUNILE9BRlMsRUFFUCxJQUZPLENBQVY7QUFHSCxLQU5EO0FBT0gsR0FYRDs7QUFhQSxNQUFJUSxLQUFLLEdBQUcsU0FBUkEsS0FBUSxHQUFZO0FBQ3BCO0FBQ0EsUUFBSVIsR0FBRyxHQUFHQyxNQUFNLENBQUNDLE9BQVAsQ0FBZSxVQUFmLENBQVY7QUFFQUQsVUFBTSxDQUFDRSxRQUFQLENBQWdCSCxHQUFoQixFQUFxQixPQUFyQixFQUE4QixZQUFXO0FBQ3JDQyxZQUFNLENBQUNHLE9BQVAsQ0FBZUosR0FBZixFQUFvQixtREFBcEIsRUFBeUUsYUFBekU7QUFFQUssZ0JBQVUsQ0FBQyxZQUFXO0FBQ2xCSixjQUFNLENBQUNLLFVBQVAsQ0FBa0JOLEdBQWxCO0FBQ0gsT0FGUyxFQUVQLElBRk8sQ0FBVjtBQUdILEtBTkQ7QUFPSCxHQVhEOztBQWFBLE1BQUlTLEtBQUssR0FBRyxTQUFSQSxLQUFRLEdBQVk7QUFDcEI7QUFDQSxRQUFJVCxHQUFHLEdBQUdDLE1BQU0sQ0FBQ0MsT0FBUCxDQUFlLFVBQWYsQ0FBVjtBQUVBRCxVQUFNLENBQUNFLFFBQVAsQ0FBZ0JILEdBQWhCLEVBQXFCLE9BQXJCLEVBQThCLFlBQVc7QUFDckNDLFlBQU0sQ0FBQ0csT0FBUCxDQUFlSixHQUFmLEVBQW9CLGtEQUFwQixFQUF3RSxhQUF4RTtBQUVBSyxnQkFBVSxDQUFDLFlBQVc7QUFDbEJKLGNBQU0sQ0FBQ0ssVUFBUCxDQUFrQk4sR0FBbEI7QUFDSCxPQUZTLEVBRVAsSUFGTyxDQUFWO0FBR0gsS0FORDtBQU9ILEdBWEQ7O0FBYUEsU0FBTztBQUNIO0FBQ0FVLFFBQUksRUFBRSxnQkFBVztBQUNiWCxXQUFLO0FBQ0xRLFdBQUs7QUFDTEMsV0FBSztBQUNMQyxXQUFLO0FBQ1I7QUFQRSxHQUFQO0FBU0gsQ0FqRW9CLEVBQXJCOztBQW1FQUUsTUFBTSxDQUFDQyxRQUFELENBQU4sQ0FBaUJDLEtBQWpCLENBQXVCLFlBQVc7QUFDOUJmLGdCQUFjLENBQUNZLElBQWY7QUFDSCxDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3dsYWRpLXdvcmtzcGFjZS9qcy9wYWdlcy9mZWF0dXJlcy9jdXN0b20vc3Bpbm5lcnMuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxuXHJcbnZhciBLVFNwaW5uZXJzRGVtbyA9IGZ1bmN0aW9uICgpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcblxyXG4gICAgLy8gRGVtb3NcclxuICAgIHZhciBkZW1vMSA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAvLyBEZW1vIDFcclxuICAgICAgICB2YXIgYnRuID0gS1RVdGlsLmdldEJ5SWQoXCJrdF9idG5fMVwiKTtcclxuXHJcbiAgICAgICAgS1RVdGlsLmFkZEV2ZW50KGJ0biwgXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgS1RVdGlsLmJ0bldhaXQoYnRuLCBcInNwaW5uZXIgc3Bpbm5lci1yaWdodCBzcGlubmVyLXdoaXRlIHByLTE1XCIsIFwiUGxlYXNlIHdhaXRcIik7XHJcblxyXG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgS1RVdGlsLmJ0blJlbGVhc2UoYnRuKTtcclxuICAgICAgICAgICAgfSwgMTAwMCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGRlbW8yID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIC8vIERlbW8gMlxyXG4gICAgICAgIHZhciBidG4gPSBLVFV0aWwuZ2V0QnlJZChcImt0X2J0bl8yXCIpO1xyXG5cclxuICAgICAgICBLVFV0aWwuYWRkRXZlbnQoYnRuLCBcImNsaWNrXCIsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBLVFV0aWwuYnRuV2FpdChidG4sIFwic3Bpbm5lciBzcGlubmVyLWRhcmsgc3Bpbm5lci1yaWdodCBwci0xNVwiLCBcIkxvYWRpbmdcIik7XHJcblxyXG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgS1RVdGlsLmJ0blJlbGVhc2UoYnRuKTtcclxuICAgICAgICAgICAgfSwgMTAwMCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGRlbW8zID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIC8vIERlbW8gM1xyXG4gICAgICAgIHZhciBidG4gPSBLVFV0aWwuZ2V0QnlJZChcImt0X2J0bl8zXCIpO1xyXG5cclxuICAgICAgICBLVFV0aWwuYWRkRXZlbnQoYnRuLCBcImNsaWNrXCIsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBLVFV0aWwuYnRuV2FpdChidG4sIFwic3Bpbm5lciBzcGlubmVyLWxlZnQgc3Bpbm5lci1kYXJrZXItc3VjY2VzcyBwbC0xNVwiLCBcIkRpc2FibGVkLi4uXCIpO1xyXG5cclxuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgIEtUVXRpbC5idG5SZWxlYXNlKGJ0bik7XHJcbiAgICAgICAgICAgIH0sIDEwMDApO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBkZW1vNCA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAvLyBEZW1vIDRcclxuICAgICAgICB2YXIgYnRuID0gS1RVdGlsLmdldEJ5SWQoXCJrdF9idG5fNFwiKTtcclxuXHJcbiAgICAgICAgS1RVdGlsLmFkZEV2ZW50KGJ0biwgXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgS1RVdGlsLmJ0bldhaXQoYnRuLCBcInNwaW5uZXIgc3Bpbm5lci1sZWZ0IHNwaW5uZXItZGFya2VyLWRhbmdlciBwbC0xNVwiLCBcIlBsZWFzZSB3YWl0XCIpO1xyXG5cclxuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgIEtUVXRpbC5idG5SZWxlYXNlKGJ0bik7XHJcbiAgICAgICAgICAgIH0sIDEwMDApO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gcHVibGljIGZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBkZW1vMSgpO1xyXG4gICAgICAgICAgICBkZW1vMigpO1xyXG4gICAgICAgICAgICBkZW1vMygpO1xyXG4gICAgICAgICAgICBkZW1vNCgpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XHJcbiAgICBLVFNwaW5uZXJzRGVtby5pbml0KCk7XHJcbn0pO1xyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/features/custom/spinners.js\n");

/***/ }),

/***/ 140:
/*!******************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/features/custom/spinners.js ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\TopMais\htdocs_alternativa\resources\wladi-workspace\js\pages\features\custom\spinners.js */"./resources/wladi-workspace/js/pages/features/custom/spinners.js");


/***/ })

/******/ });