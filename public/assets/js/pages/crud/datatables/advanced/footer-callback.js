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
/******/ 	return __webpack_require__(__webpack_require__.s = 21);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/crud/datatables/advanced/footer-callback.js":
/*!****************************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/crud/datatables/advanced/footer-callback.js ***!
  \****************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar KTDatatablesAdvancedFooterCalllback = function () {\n  var _init = function init() {\n    var table = $('#kt_datatable'); // begin first table\n\n    table.DataTable({\n      responsive: true,\n      pageLength: 5,\n      lengthMenu: [[2, 5, 10, 15, -1], [2, 5, 10, 15, 'All']],\n      footerCallback: function footerCallback(row, data, start, end, display) {\n        var column = 6;\n        var api = this.api(),\n            data; // Remove the formatting to get integer data for summation\n\n        var intVal = function intVal(i) {\n          return typeof i === 'string' ? i.replace(/[\\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;\n        }; // Total over all pages\n\n\n        var total = api.column(column).data().reduce(function (a, b) {\n          return intVal(a) + intVal(b);\n        }, 0); // Total over this page\n\n        var pageTotal = api.column(column, {\n          page: 'current'\n        }).data().reduce(function (a, b) {\n          return intVal(a) + intVal(b);\n        }, 0); // Update footer\n\n        $(api.column(column).footer()).html('$' + KTUtil.numberString(pageTotal.toFixed(2)) + '<br/> ( $' + KTUtil.numberString(total.toFixed(2)) + ' total)');\n      }\n    });\n  };\n\n  return {\n    //main function to initiate the module\n    init: function init() {\n      _init();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTDatatablesAdvancedFooterCalllback.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2NydWQvZGF0YXRhYmxlcy9hZHZhbmNlZC9mb290ZXItY2FsbGJhY2suanM/ZjJiOSJdLCJuYW1lcyI6WyJLVERhdGF0YWJsZXNBZHZhbmNlZEZvb3RlckNhbGxsYmFjayIsImluaXQiLCJ0YWJsZSIsIiQiLCJEYXRhVGFibGUiLCJyZXNwb25zaXZlIiwicGFnZUxlbmd0aCIsImxlbmd0aE1lbnUiLCJmb290ZXJDYWxsYmFjayIsInJvdyIsImRhdGEiLCJzdGFydCIsImVuZCIsImRpc3BsYXkiLCJjb2x1bW4iLCJhcGkiLCJpbnRWYWwiLCJpIiwicmVwbGFjZSIsInRvdGFsIiwicmVkdWNlIiwiYSIsImIiLCJwYWdlVG90YWwiLCJwYWdlIiwiZm9vdGVyIiwiaHRtbCIsIktUVXRpbCIsIm51bWJlclN0cmluZyIsInRvRml4ZWQiLCJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5Il0sIm1hcHBpbmdzIjoiQUFBYTs7QUFDYixJQUFJQSxtQ0FBbUMsR0FBRyxZQUFXO0FBRXBELE1BQUlDLEtBQUksR0FBRyxTQUFQQSxJQUFPLEdBQVc7QUFDckIsUUFBSUMsS0FBSyxHQUFHQyxDQUFDLENBQUMsZUFBRCxDQUFiLENBRHFCLENBR3JCOztBQUNBRCxTQUFLLENBQUNFLFNBQU4sQ0FBZ0I7QUFDZkMsZ0JBQVUsRUFBRSxJQURHO0FBRWZDLGdCQUFVLEVBQUUsQ0FGRztBQUdmQyxnQkFBVSxFQUFFLENBQUMsQ0FBQyxDQUFELEVBQUksQ0FBSixFQUFPLEVBQVAsRUFBVyxFQUFYLEVBQWUsQ0FBQyxDQUFoQixDQUFELEVBQXFCLENBQUMsQ0FBRCxFQUFJLENBQUosRUFBTyxFQUFQLEVBQVcsRUFBWCxFQUFlLEtBQWYsQ0FBckIsQ0FIRztBQUlmQyxvQkFBYyxFQUFFLHdCQUFTQyxHQUFULEVBQWNDLElBQWQsRUFBb0JDLEtBQXBCLEVBQTJCQyxHQUEzQixFQUFnQ0MsT0FBaEMsRUFBeUM7QUFFeEQsWUFBSUMsTUFBTSxHQUFHLENBQWI7QUFDQSxZQUFJQyxHQUFHLEdBQUcsS0FBS0EsR0FBTCxFQUFWO0FBQUEsWUFBc0JMLElBQXRCLENBSHdELENBS3hEOztBQUNBLFlBQUlNLE1BQU0sR0FBRyxTQUFUQSxNQUFTLENBQVNDLENBQVQsRUFBWTtBQUN4QixpQkFBTyxPQUFPQSxDQUFQLEtBQWEsUUFBYixHQUF3QkEsQ0FBQyxDQUFDQyxPQUFGLENBQVUsUUFBVixFQUFvQixFQUFwQixJQUEwQixDQUFsRCxHQUFzRCxPQUFPRCxDQUFQLEtBQWEsUUFBYixHQUF3QkEsQ0FBeEIsR0FBNEIsQ0FBekY7QUFDQSxTQUZELENBTndELENBVXhEOzs7QUFDQSxZQUFJRSxLQUFLLEdBQUdKLEdBQUcsQ0FBQ0QsTUFBSixDQUFXQSxNQUFYLEVBQW1CSixJQUFuQixHQUEwQlUsTUFBMUIsQ0FBaUMsVUFBU0MsQ0FBVCxFQUFZQyxDQUFaLEVBQWU7QUFDM0QsaUJBQU9OLE1BQU0sQ0FBQ0ssQ0FBRCxDQUFOLEdBQVlMLE1BQU0sQ0FBQ00sQ0FBRCxDQUF6QjtBQUNBLFNBRlcsRUFFVCxDQUZTLENBQVosQ0FYd0QsQ0FleEQ7O0FBQ0EsWUFBSUMsU0FBUyxHQUFHUixHQUFHLENBQUNELE1BQUosQ0FBV0EsTUFBWCxFQUFtQjtBQUFDVSxjQUFJLEVBQUU7QUFBUCxTQUFuQixFQUFzQ2QsSUFBdEMsR0FBNkNVLE1BQTdDLENBQW9ELFVBQVNDLENBQVQsRUFBWUMsQ0FBWixFQUFlO0FBQ2xGLGlCQUFPTixNQUFNLENBQUNLLENBQUQsQ0FBTixHQUFZTCxNQUFNLENBQUNNLENBQUQsQ0FBekI7QUFDQSxTQUZlLEVBRWIsQ0FGYSxDQUFoQixDQWhCd0QsQ0FvQnhEOztBQUNBbkIsU0FBQyxDQUFDWSxHQUFHLENBQUNELE1BQUosQ0FBV0EsTUFBWCxFQUFtQlcsTUFBbkIsRUFBRCxDQUFELENBQStCQyxJQUEvQixDQUNDLE1BQU1DLE1BQU0sQ0FBQ0MsWUFBUCxDQUFvQkwsU0FBUyxDQUFDTSxPQUFWLENBQWtCLENBQWxCLENBQXBCLENBQU4sR0FBa0QsV0FBbEQsR0FBZ0VGLE1BQU0sQ0FBQ0MsWUFBUCxDQUFvQlQsS0FBSyxDQUFDVSxPQUFOLENBQWMsQ0FBZCxDQUFwQixDQUFoRSxHQUF3RyxTQUR6RztBQUdBO0FBNUJjLEtBQWhCO0FBOEJBLEdBbENEOztBQW9DQSxTQUFPO0FBRU47QUFDQTVCLFFBQUksRUFBRSxnQkFBVztBQUNoQkEsV0FBSTtBQUNKO0FBTEssR0FBUDtBQVNBLENBL0N5QyxFQUExQzs7QUFpREE2QixNQUFNLENBQUNDLFFBQUQsQ0FBTixDQUFpQkMsS0FBakIsQ0FBdUIsWUFBVztBQUNqQ2hDLHFDQUFtQyxDQUFDQyxJQUFwQztBQUNBLENBRkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2NydWQvZGF0YXRhYmxlcy9hZHZhbmNlZC9mb290ZXItY2FsbGJhY2suanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxudmFyIEtURGF0YXRhYmxlc0FkdmFuY2VkRm9vdGVyQ2FsbGxiYWNrID0gZnVuY3Rpb24oKSB7XHJcblxyXG5cdHZhciBpbml0ID0gZnVuY3Rpb24oKSB7XHJcblx0XHR2YXIgdGFibGUgPSAkKCcja3RfZGF0YXRhYmxlJyk7XHJcblxyXG5cdFx0Ly8gYmVnaW4gZmlyc3QgdGFibGVcclxuXHRcdHRhYmxlLkRhdGFUYWJsZSh7XHJcblx0XHRcdHJlc3BvbnNpdmU6IHRydWUsXHJcblx0XHRcdHBhZ2VMZW5ndGg6IDUsXHJcblx0XHRcdGxlbmd0aE1lbnU6IFtbMiwgNSwgMTAsIDE1LCAtMV0sIFsyLCA1LCAxMCwgMTUsICdBbGwnXV0sXHJcblx0XHRcdGZvb3RlckNhbGxiYWNrOiBmdW5jdGlvbihyb3csIGRhdGEsIHN0YXJ0LCBlbmQsIGRpc3BsYXkpIHtcclxuXHJcblx0XHRcdFx0dmFyIGNvbHVtbiA9IDY7XHJcblx0XHRcdFx0dmFyIGFwaSA9IHRoaXMuYXBpKCksIGRhdGE7XHJcblxyXG5cdFx0XHRcdC8vIFJlbW92ZSB0aGUgZm9ybWF0dGluZyB0byBnZXQgaW50ZWdlciBkYXRhIGZvciBzdW1tYXRpb25cclxuXHRcdFx0XHR2YXIgaW50VmFsID0gZnVuY3Rpb24oaSkge1xyXG5cdFx0XHRcdFx0cmV0dXJuIHR5cGVvZiBpID09PSAnc3RyaW5nJyA/IGkucmVwbGFjZSgvW1xcJCxdL2csICcnKSAqIDEgOiB0eXBlb2YgaSA9PT0gJ251bWJlcicgPyBpIDogMDtcclxuXHRcdFx0XHR9O1xyXG5cclxuXHRcdFx0XHQvLyBUb3RhbCBvdmVyIGFsbCBwYWdlc1xyXG5cdFx0XHRcdHZhciB0b3RhbCA9IGFwaS5jb2x1bW4oY29sdW1uKS5kYXRhKCkucmVkdWNlKGZ1bmN0aW9uKGEsIGIpIHtcclxuXHRcdFx0XHRcdHJldHVybiBpbnRWYWwoYSkgKyBpbnRWYWwoYik7XHJcblx0XHRcdFx0fSwgMCk7XHJcblxyXG5cdFx0XHRcdC8vIFRvdGFsIG92ZXIgdGhpcyBwYWdlXHJcblx0XHRcdFx0dmFyIHBhZ2VUb3RhbCA9IGFwaS5jb2x1bW4oY29sdW1uLCB7cGFnZTogJ2N1cnJlbnQnfSkuZGF0YSgpLnJlZHVjZShmdW5jdGlvbihhLCBiKSB7XHJcblx0XHRcdFx0XHRyZXR1cm4gaW50VmFsKGEpICsgaW50VmFsKGIpO1xyXG5cdFx0XHRcdH0sIDApO1xyXG5cclxuXHRcdFx0XHQvLyBVcGRhdGUgZm9vdGVyXHJcblx0XHRcdFx0JChhcGkuY29sdW1uKGNvbHVtbikuZm9vdGVyKCkpLmh0bWwoXHJcblx0XHRcdFx0XHQnJCcgKyBLVFV0aWwubnVtYmVyU3RyaW5nKHBhZ2VUb3RhbC50b0ZpeGVkKDIpKSArICc8YnIvPiAoICQnICsgS1RVdGlsLm51bWJlclN0cmluZyh0b3RhbC50b0ZpeGVkKDIpKSArICcgdG90YWwpJyxcclxuXHRcdFx0XHQpO1xyXG5cdFx0XHR9LFxyXG5cdFx0fSk7XHJcblx0fTtcclxuXHJcblx0cmV0dXJuIHtcclxuXHJcblx0XHQvL21haW4gZnVuY3Rpb24gdG8gaW5pdGlhdGUgdGhlIG1vZHVsZVxyXG5cdFx0aW5pdDogZnVuY3Rpb24oKSB7XHJcblx0XHRcdGluaXQoKTtcclxuXHRcdH0sXHJcblxyXG5cdH07XHJcblxyXG59KCk7XHJcblxyXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xyXG5cdEtURGF0YXRhYmxlc0FkdmFuY2VkRm9vdGVyQ2FsbGxiYWNrLmluaXQoKTtcclxufSk7XHJcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/crud/datatables/advanced/footer-callback.js\n");

/***/ }),

/***/ 21:
/*!**********************************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/crud/datatables/advanced/footer-callback.js ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\TopMais\htdocs_alternativa\resources\wladi-workspace\js\pages\crud\datatables\advanced\footer-callback.js */"./resources/wladi-workspace/js/pages/crud/datatables/advanced/footer-callback.js");


/***/ })

/******/ });