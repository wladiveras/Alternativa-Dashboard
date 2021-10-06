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
/******/ 	return __webpack_require__(__webpack_require__.s = 54);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/crud/forms/editors/quill.js":
/*!************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/crud/forms/editors/quill.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// Class definition\nvar KTQuilDemos = function () {\n  // Private functions\n  var demo1 = function demo1() {\n    var quill = new Quill('#kt_quil_1', {\n      modules: {\n        toolbar: [[{\n          header: [1, 2, false]\n        }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n      },\n      placeholder: 'Type your text here...',\n      theme: 'snow' // or 'bubble'\n\n    });\n  };\n\n  var demo2 = function demo2() {\n    var Delta = Quill[\"import\"]('delta');\n    var quill = new Quill('#kt_quil_2', {\n      modules: {\n        toolbar: true\n      },\n      placeholder: 'Type your text here...',\n      theme: 'snow'\n    }); // Store accumulated changes\n\n    var change = new Delta();\n    quill.on('text-change', function (delta) {\n      change = change.compose(delta);\n    }); // Save periodically\n\n    setInterval(function () {\n      if (change.length() > 0) {\n        console.log('Saving changes', change);\n        /*\r\n        Send partial changes\r\n        $.post('/your-endpoint', {\r\n          partial: JSON.stringify(change)\r\n        });\r\n          Send entire document\r\n        $.post('/your-endpoint', {\r\n          doc: JSON.stringify(quill.getContents())\r\n        });\r\n        */\n\n        change = new Delta();\n      }\n    }, 5 * 1000); // Check for unsaved data\n\n    window.onbeforeunload = function () {\n      if (change.length() > 0) {\n        return 'There are unsaved changes. Are you sure you want to leave?';\n      }\n    };\n  };\n\n  return {\n    // public functions\n    init: function init() {\n      demo1();\n      demo2();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTQuilDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2NydWQvZm9ybXMvZWRpdG9ycy9xdWlsbC5qcz8wZWM2Il0sIm5hbWVzIjpbIktUUXVpbERlbW9zIiwiZGVtbzEiLCJxdWlsbCIsIlF1aWxsIiwibW9kdWxlcyIsInRvb2xiYXIiLCJoZWFkZXIiLCJwbGFjZWhvbGRlciIsInRoZW1lIiwiZGVtbzIiLCJEZWx0YSIsImNoYW5nZSIsIm9uIiwiZGVsdGEiLCJjb21wb3NlIiwic2V0SW50ZXJ2YWwiLCJsZW5ndGgiLCJjb25zb2xlIiwibG9nIiwid2luZG93Iiwib25iZWZvcmV1bmxvYWQiLCJpbml0IiwialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQSxJQUFJQSxXQUFXLEdBQUcsWUFBVztBQUV6QjtBQUNBLE1BQUlDLEtBQUssR0FBRyxTQUFSQSxLQUFRLEdBQVc7QUFDbkIsUUFBSUMsS0FBSyxHQUFHLElBQUlDLEtBQUosQ0FBVSxZQUFWLEVBQXdCO0FBQ2hDQyxhQUFPLEVBQUU7QUFDTEMsZUFBTyxFQUFFLENBQ0wsQ0FBQztBQUNHQyxnQkFBTSxFQUFFLENBQUMsQ0FBRCxFQUFJLENBQUosRUFBTyxLQUFQO0FBRFgsU0FBRCxDQURLLEVBSUwsQ0FBQyxNQUFELEVBQVMsUUFBVCxFQUFtQixXQUFuQixDQUpLLEVBS0wsQ0FBQyxPQUFELEVBQVUsWUFBVixDQUxLO0FBREosT0FEdUI7QUFVaENDLGlCQUFXLEVBQUUsd0JBVm1CO0FBV2hDQyxXQUFLLEVBQUUsTUFYeUIsQ0FXbEI7O0FBWGtCLEtBQXhCLENBQVo7QUFhSCxHQWREOztBQWdCQSxNQUFJQyxLQUFLLEdBQUcsU0FBUkEsS0FBUSxHQUFXO0FBQ25CLFFBQUlDLEtBQUssR0FBR1AsS0FBSyxVQUFMLENBQWEsT0FBYixDQUFaO0FBQ0EsUUFBSUQsS0FBSyxHQUFHLElBQUlDLEtBQUosQ0FBVSxZQUFWLEVBQXdCO0FBQ2hDQyxhQUFPLEVBQUU7QUFDTEMsZUFBTyxFQUFFO0FBREosT0FEdUI7QUFJaENFLGlCQUFXLEVBQUUsd0JBSm1CO0FBS2hDQyxXQUFLLEVBQUU7QUFMeUIsS0FBeEIsQ0FBWixDQUZtQixDQVVuQjs7QUFDQSxRQUFJRyxNQUFNLEdBQUcsSUFBSUQsS0FBSixFQUFiO0FBQ0FSLFNBQUssQ0FBQ1UsRUFBTixDQUFTLGFBQVQsRUFBd0IsVUFBU0MsS0FBVCxFQUFnQjtBQUNwQ0YsWUFBTSxHQUFHQSxNQUFNLENBQUNHLE9BQVAsQ0FBZUQsS0FBZixDQUFUO0FBQ0gsS0FGRCxFQVptQixDQWdCbkI7O0FBQ0FFLGVBQVcsQ0FBQyxZQUFXO0FBQ25CLFVBQUlKLE1BQU0sQ0FBQ0ssTUFBUCxLQUFrQixDQUF0QixFQUF5QjtBQUNyQkMsZUFBTyxDQUFDQyxHQUFSLENBQVksZ0JBQVosRUFBOEJQLE1BQTlCO0FBQ0E7QUFDaEI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVnQkEsY0FBTSxHQUFHLElBQUlELEtBQUosRUFBVDtBQUNIO0FBQ0osS0FoQlUsRUFnQlIsSUFBSSxJQWhCSSxDQUFYLENBakJtQixDQW1DbkI7O0FBQ0FTLFVBQU0sQ0FBQ0MsY0FBUCxHQUF3QixZQUFXO0FBQy9CLFVBQUlULE1BQU0sQ0FBQ0ssTUFBUCxLQUFrQixDQUF0QixFQUF5QjtBQUNyQixlQUFPLDREQUFQO0FBQ0g7QUFDSixLQUpEO0FBS0gsR0F6Q0Q7O0FBMkNBLFNBQU87QUFDSDtBQUNBSyxRQUFJLEVBQUUsZ0JBQVc7QUFDYnBCLFdBQUs7QUFDTFEsV0FBSztBQUNSO0FBTEUsR0FBUDtBQU9ILENBckVpQixFQUFsQjs7QUF1RUFhLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixZQUFXO0FBQzlCeEIsYUFBVyxDQUFDcUIsSUFBWjtBQUNILENBRkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2NydWQvZm9ybXMvZWRpdG9ycy9xdWlsbC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUUXVpbERlbW9zID0gZnVuY3Rpb24oKSB7XHJcblxyXG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcclxuICAgIHZhciBkZW1vMSA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHZhciBxdWlsbCA9IG5ldyBRdWlsbCgnI2t0X3F1aWxfMScsIHtcclxuICAgICAgICAgICAgbW9kdWxlczoge1xyXG4gICAgICAgICAgICAgICAgdG9vbGJhcjogW1xyXG4gICAgICAgICAgICAgICAgICAgIFt7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGhlYWRlcjogWzEsIDIsIGZhbHNlXVxyXG4gICAgICAgICAgICAgICAgICAgIH1dLFxyXG4gICAgICAgICAgICAgICAgICAgIFsnYm9sZCcsICdpdGFsaWMnLCAndW5kZXJsaW5lJ10sXHJcbiAgICAgICAgICAgICAgICAgICAgWydpbWFnZScsICdjb2RlLWJsb2NrJ11cclxuICAgICAgICAgICAgICAgIF1cclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICdUeXBlIHlvdXIgdGV4dCBoZXJlLi4uJyxcclxuICAgICAgICAgICAgdGhlbWU6ICdzbm93JyAvLyBvciAnYnViYmxlJ1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBkZW1vMiA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHZhciBEZWx0YSA9IFF1aWxsLmltcG9ydCgnZGVsdGEnKTtcclxuICAgICAgICB2YXIgcXVpbGwgPSBuZXcgUXVpbGwoJyNrdF9xdWlsXzInLCB7XHJcbiAgICAgICAgICAgIG1vZHVsZXM6IHtcclxuICAgICAgICAgICAgICAgIHRvb2xiYXI6IHRydWVcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICdUeXBlIHlvdXIgdGV4dCBoZXJlLi4uJyxcclxuICAgICAgICAgICAgdGhlbWU6ICdzbm93J1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAvLyBTdG9yZSBhY2N1bXVsYXRlZCBjaGFuZ2VzXHJcbiAgICAgICAgdmFyIGNoYW5nZSA9IG5ldyBEZWx0YSgpO1xyXG4gICAgICAgIHF1aWxsLm9uKCd0ZXh0LWNoYW5nZScsIGZ1bmN0aW9uKGRlbHRhKSB7XHJcbiAgICAgICAgICAgIGNoYW5nZSA9IGNoYW5nZS5jb21wb3NlKGRlbHRhKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gU2F2ZSBwZXJpb2RpY2FsbHlcclxuICAgICAgICBzZXRJbnRlcnZhbChmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgaWYgKGNoYW5nZS5sZW5ndGgoKSA+IDApIHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKCdTYXZpbmcgY2hhbmdlcycsIGNoYW5nZSk7XHJcbiAgICAgICAgICAgICAgICAvKlxyXG4gICAgICAgICAgICAgICAgU2VuZCBwYXJ0aWFsIGNoYW5nZXNcclxuICAgICAgICAgICAgICAgICQucG9zdCgnL3lvdXItZW5kcG9pbnQnLCB7XHJcbiAgICAgICAgICAgICAgICAgIHBhcnRpYWw6IEpTT04uc3RyaW5naWZ5KGNoYW5nZSlcclxuICAgICAgICAgICAgICAgIH0pO1xyXG5cclxuICAgICAgICAgICAgICAgIFNlbmQgZW50aXJlIGRvY3VtZW50XHJcbiAgICAgICAgICAgICAgICAkLnBvc3QoJy95b3VyLWVuZHBvaW50Jywge1xyXG4gICAgICAgICAgICAgICAgICBkb2M6IEpTT04uc3RyaW5naWZ5KHF1aWxsLmdldENvbnRlbnRzKCkpXHJcbiAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgICovXHJcbiAgICAgICAgICAgICAgICBjaGFuZ2UgPSBuZXcgRGVsdGEoKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0sIDUgKiAxMDAwKTtcclxuXHJcbiAgICAgICAgLy8gQ2hlY2sgZm9yIHVuc2F2ZWQgZGF0YVxyXG4gICAgICAgIHdpbmRvdy5vbmJlZm9yZXVubG9hZCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBpZiAoY2hhbmdlLmxlbmd0aCgpID4gMCkge1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuICdUaGVyZSBhcmUgdW5zYXZlZCBjaGFuZ2VzLiBBcmUgeW91IHN1cmUgeW91IHdhbnQgdG8gbGVhdmU/JztcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIHB1YmxpYyBmdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgZGVtbzEoKTtcclxuICAgICAgICAgICAgZGVtbzIoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xyXG4gICAgS1RRdWlsRGVtb3MuaW5pdCgpO1xyXG59KTtcclxuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/crud/forms/editors/quill.js\n");

/***/ }),

/***/ 54:
/*!******************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/crud/forms/editors/quill.js ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\TopMais\htdocs_alternativa\resources\wladi-workspace\js\pages\crud\forms\editors\quill.js */"./resources/wladi-workspace/js/pages/crud/forms/editors/quill.js");


/***/ })

/******/ });