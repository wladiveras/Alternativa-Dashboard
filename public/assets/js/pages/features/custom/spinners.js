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
eval(" // Class definition\n\nvar KTSpinnersDemo = function () {\n  // Private functions\n  // Demos\n  var demo1 = function demo1() {\n    // Demo 1\n    var btn = KTUtil.getById(\"kt_btn_1\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-right spinner-white pr-15\", \"Please wait\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  var demo2 = function demo2() {\n    // Demo 2\n    var btn = KTUtil.getById(\"kt_btn_2\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-dark spinner-right pr-15\", \"Loading\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  var demo3 = function demo3() {\n    // Demo 3\n    var btn = KTUtil.getById(\"kt_btn_3\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-left spinner-darker-success pl-15\", \"Disabled...\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  var demo4 = function demo4() {\n    // Demo 4\n    var btn = KTUtil.getById(\"kt_btn_4\");\n    KTUtil.addEvent(btn, \"click\", function () {\n      KTUtil.btnWait(btn, \"spinner spinner-left spinner-darker-danger pl-15\", \"Please wait\");\n      setTimeout(function () {\n        KTUtil.btnRelease(btn);\n      }, 1000);\n    });\n  };\n\n  return {\n    // public functions\n    init: function init() {\n      demo1();\n      demo2();\n      demo3();\n      demo4();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTSpinnersDemo.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2ZlYXR1cmVzL2N1c3RvbS9zcGlubmVycy5qcz9lNjljIl0sIm5hbWVzIjpbIktUU3Bpbm5lcnNEZW1vIiwiZGVtbzEiLCJidG4iLCJLVFV0aWwiLCJnZXRCeUlkIiwiYWRkRXZlbnQiLCJidG5XYWl0Iiwic2V0VGltZW91dCIsImJ0blJlbGVhc2UiLCJkZW1vMiIsImRlbW8zIiwiZGVtbzQiLCJpbml0IiwialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSJdLCJtYXBwaW5ncyI6IkNBRUE7O0FBRUEsSUFBSUEsY0FBYyxHQUFHLFlBQVk7QUFDN0I7QUFFQTtBQUNBLE1BQUlDLEtBQUssR0FBRyxTQUFSQSxLQUFRLEdBQVk7QUFDcEI7QUFDQSxRQUFJQyxHQUFHLEdBQUdDLE1BQU0sQ0FBQ0MsT0FBUCxDQUFlLFVBQWYsQ0FBVjtBQUVBRCxVQUFNLENBQUNFLFFBQVAsQ0FBZ0JILEdBQWhCLEVBQXFCLE9BQXJCLEVBQThCLFlBQVc7QUFDckNDLFlBQU0sQ0FBQ0csT0FBUCxDQUFlSixHQUFmLEVBQW9CLDJDQUFwQixFQUFpRSxhQUFqRTtBQUVBSyxnQkFBVSxDQUFDLFlBQVc7QUFDbEJKLGNBQU0sQ0FBQ0ssVUFBUCxDQUFrQk4sR0FBbEI7QUFDSCxPQUZTLEVBRVAsSUFGTyxDQUFWO0FBR0gsS0FORDtBQU9ILEdBWEQ7O0FBYUEsTUFBSU8sS0FBSyxHQUFHLFNBQVJBLEtBQVEsR0FBWTtBQUNwQjtBQUNBLFFBQUlQLEdBQUcsR0FBR0MsTUFBTSxDQUFDQyxPQUFQLENBQWUsVUFBZixDQUFWO0FBRUFELFVBQU0sQ0FBQ0UsUUFBUCxDQUFnQkgsR0FBaEIsRUFBcUIsT0FBckIsRUFBOEIsWUFBVztBQUNyQ0MsWUFBTSxDQUFDRyxPQUFQLENBQWVKLEdBQWYsRUFBb0IsMENBQXBCLEVBQWdFLFNBQWhFO0FBRUFLLGdCQUFVLENBQUMsWUFBVztBQUNsQkosY0FBTSxDQUFDSyxVQUFQLENBQWtCTixHQUFsQjtBQUNILE9BRlMsRUFFUCxJQUZPLENBQVY7QUFHSCxLQU5EO0FBT0gsR0FYRDs7QUFhQSxNQUFJUSxLQUFLLEdBQUcsU0FBUkEsS0FBUSxHQUFZO0FBQ3BCO0FBQ0EsUUFBSVIsR0FBRyxHQUFHQyxNQUFNLENBQUNDLE9BQVAsQ0FBZSxVQUFmLENBQVY7QUFFQUQsVUFBTSxDQUFDRSxRQUFQLENBQWdCSCxHQUFoQixFQUFxQixPQUFyQixFQUE4QixZQUFXO0FBQ3JDQyxZQUFNLENBQUNHLE9BQVAsQ0FBZUosR0FBZixFQUFvQixtREFBcEIsRUFBeUUsYUFBekU7QUFFQUssZ0JBQVUsQ0FBQyxZQUFXO0FBQ2xCSixjQUFNLENBQUNLLFVBQVAsQ0FBa0JOLEdBQWxCO0FBQ0gsT0FGUyxFQUVQLElBRk8sQ0FBVjtBQUdILEtBTkQ7QUFPSCxHQVhEOztBQWFBLE1BQUlTLEtBQUssR0FBRyxTQUFSQSxLQUFRLEdBQVk7QUFDcEI7QUFDQSxRQUFJVCxHQUFHLEdBQUdDLE1BQU0sQ0FBQ0MsT0FBUCxDQUFlLFVBQWYsQ0FBVjtBQUVBRCxVQUFNLENBQUNFLFFBQVAsQ0FBZ0JILEdBQWhCLEVBQXFCLE9BQXJCLEVBQThCLFlBQVc7QUFDckNDLFlBQU0sQ0FBQ0csT0FBUCxDQUFlSixHQUFmLEVBQW9CLGtEQUFwQixFQUF3RSxhQUF4RTtBQUVBSyxnQkFBVSxDQUFDLFlBQVc7QUFDbEJKLGNBQU0sQ0FBQ0ssVUFBUCxDQUFrQk4sR0FBbEI7QUFDSCxPQUZTLEVBRVAsSUFGTyxDQUFWO0FBR0gsS0FORDtBQU9ILEdBWEQ7O0FBYUEsU0FBTztBQUNIO0FBQ0FVLFFBQUksRUFBRSxnQkFBVztBQUNiWCxXQUFLO0FBQ0xRLFdBQUs7QUFDTEMsV0FBSztBQUNMQyxXQUFLO0FBQ1I7QUFQRSxHQUFQO0FBU0gsQ0FqRW9CLEVBQXJCOztBQW1FQUUsTUFBTSxDQUFDQyxRQUFELENBQU4sQ0FBaUJDLEtBQWpCLENBQXVCLFlBQVc7QUFDOUJmLGdCQUFjLENBQUNZLElBQWY7QUFDSCxDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3dsYWRpLXdvcmtzcGFjZS9qcy9wYWdlcy9mZWF0dXJlcy9jdXN0b20vc3Bpbm5lcnMuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxuXG52YXIgS1RTcGlubmVyc0RlbW8gPSBmdW5jdGlvbiAoKSB7XG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcblxuICAgIC8vIERlbW9zXG4gICAgdmFyIGRlbW8xID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAvLyBEZW1vIDFcbiAgICAgICAgdmFyIGJ0biA9IEtUVXRpbC5nZXRCeUlkKFwia3RfYnRuXzFcIik7XG5cbiAgICAgICAgS1RVdGlsLmFkZEV2ZW50KGJ0biwgXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIEtUVXRpbC5idG5XYWl0KGJ0biwgXCJzcGlubmVyIHNwaW5uZXItcmlnaHQgc3Bpbm5lci13aGl0ZSBwci0xNVwiLCBcIlBsZWFzZSB3YWl0XCIpO1xuXG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgICAgIEtUVXRpbC5idG5SZWxlYXNlKGJ0bik7XG4gICAgICAgICAgICB9LCAxMDAwKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgdmFyIGRlbW8yID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAvLyBEZW1vIDJcbiAgICAgICAgdmFyIGJ0biA9IEtUVXRpbC5nZXRCeUlkKFwia3RfYnRuXzJcIik7XG5cbiAgICAgICAgS1RVdGlsLmFkZEV2ZW50KGJ0biwgXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIEtUVXRpbC5idG5XYWl0KGJ0biwgXCJzcGlubmVyIHNwaW5uZXItZGFyayBzcGlubmVyLXJpZ2h0IHByLTE1XCIsIFwiTG9hZGluZ1wiKTtcblxuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICBLVFV0aWwuYnRuUmVsZWFzZShidG4pO1xuICAgICAgICAgICAgfSwgMTAwMCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHZhciBkZW1vMyA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgLy8gRGVtbyAzXG4gICAgICAgIHZhciBidG4gPSBLVFV0aWwuZ2V0QnlJZChcImt0X2J0bl8zXCIpO1xuXG4gICAgICAgIEtUVXRpbC5hZGRFdmVudChidG4sIFwiY2xpY2tcIiwgZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBLVFV0aWwuYnRuV2FpdChidG4sIFwic3Bpbm5lciBzcGlubmVyLWxlZnQgc3Bpbm5lci1kYXJrZXItc3VjY2VzcyBwbC0xNVwiLCBcIkRpc2FibGVkLi4uXCIpO1xuXG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgICAgIEtUVXRpbC5idG5SZWxlYXNlKGJ0bik7XG4gICAgICAgICAgICB9LCAxMDAwKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgdmFyIGRlbW80ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAvLyBEZW1vIDRcbiAgICAgICAgdmFyIGJ0biA9IEtUVXRpbC5nZXRCeUlkKFwia3RfYnRuXzRcIik7XG5cbiAgICAgICAgS1RVdGlsLmFkZEV2ZW50KGJ0biwgXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIEtUVXRpbC5idG5XYWl0KGJ0biwgXCJzcGlubmVyIHNwaW5uZXItbGVmdCBzcGlubmVyLWRhcmtlci1kYW5nZXIgcGwtMTVcIiwgXCJQbGVhc2Ugd2FpdFwiKTtcblxuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICBLVFV0aWwuYnRuUmVsZWFzZShidG4pO1xuICAgICAgICAgICAgfSwgMTAwMCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIC8vIHB1YmxpYyBmdW5jdGlvbnNcbiAgICAgICAgaW5pdDogZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBkZW1vMSgpO1xuICAgICAgICAgICAgZGVtbzIoKTtcbiAgICAgICAgICAgIGRlbW8zKCk7XG4gICAgICAgICAgICBkZW1vNCgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICBLVFNwaW5uZXJzRGVtby5pbml0KCk7XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/features/custom/spinners.js\n");

/***/ }),

/***/ 140:
/*!******************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/features/custom/spinners.js ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mrzer0/workspace/Alternativa/dashboard_laravel/resources/wladi-workspace/js/pages/features/custom/spinners.js */"./resources/wladi-workspace/js/pages/features/custom/spinners.js");


/***/ })

/******/ });