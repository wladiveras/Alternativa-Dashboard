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
/******/ 	return __webpack_require__(__webpack_require__.s = 96);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/custom/chat/chat.js":
/*!****************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/custom/chat/chat.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval(" // Class definition\n\nvar KTAppChat = function () {\n  var _chatAsideEl;\n\n  var _chatAsideOffcanvasObj;\n\n  var _chatContentEl; // Private functions\n\n\n  var _initAside = function _initAside() {\n    // Mobile offcanvas for mobile mode\n    _chatAsideOffcanvasObj = new KTOffcanvas(_chatAsideEl, {\n      overlay: true,\n      baseClass: 'offcanvas-mobile',\n      //closeBy: 'kt_chat_aside_close',\n      toggleBy: 'kt_app_chat_toggle'\n    }); // User listing\n\n    var cardScrollEl = KTUtil.find(_chatAsideEl, '.scroll');\n    var cardBodyEl = KTUtil.find(_chatAsideEl, '.card-body');\n    var searchEl = KTUtil.find(_chatAsideEl, '.input-group');\n\n    if (cardScrollEl) {\n      // Initialize perfect scrollbar(see:  https://github.com/utatti/perfect-scrollbar)\n      KTUtil.scrollInit(cardScrollEl, {\n        mobileNativeScroll: true,\n        // Enable native scroll for mobile\n        desktopNativeScroll: false,\n        // Disable native scroll and use custom scroll for desktop\n        resetHeightOnDestroy: true,\n        // Reset css height on scroll feature destroyed\n        handleWindowResize: true,\n        // Recalculate hight on window resize\n        rememberPosition: true,\n        // Remember scroll position in cookie\n        height: function height() {\n          // Calculate height\n          var height;\n\n          if (KTUtil.isBreakpointUp('lg')) {\n            height = KTLayoutContent.getHeight();\n          } else {\n            height = KTUtil.getViewPort().height;\n          }\n\n          if (_chatAsideEl) {\n            height = height - parseInt(KTUtil.css(_chatAsideEl, 'margin-top')) - parseInt(KTUtil.css(_chatAsideEl, 'margin-bottom'));\n            height = height - parseInt(KTUtil.css(_chatAsideEl, 'padding-top')) - parseInt(KTUtil.css(_chatAsideEl, 'padding-bottom'));\n          }\n\n          if (cardScrollEl) {\n            height = height - parseInt(KTUtil.css(cardScrollEl, 'margin-top')) - parseInt(KTUtil.css(cardScrollEl, 'margin-bottom'));\n          }\n\n          if (cardBodyEl) {\n            height = height - parseInt(KTUtil.css(cardBodyEl, 'padding-top')) - parseInt(KTUtil.css(cardBodyEl, 'padding-bottom'));\n          }\n\n          if (searchEl) {\n            height = height - parseInt(KTUtil.css(searchEl, 'height'));\n            height = height - parseInt(KTUtil.css(searchEl, 'margin-top')) - parseInt(KTUtil.css(searchEl, 'margin-bottom'));\n          } // Remove additional space\n\n\n          height = height - 2;\n          return height;\n        }\n      });\n    }\n  };\n\n  return {\n    // Public functions\n    init: function init() {\n      // Elements\n      _chatAsideEl = KTUtil.getById('kt_chat_aside');\n      _chatContentEl = KTUtil.getById('kt_chat_content'); // Init aside and user list\n\n      _initAside(); // Init inline chat example\n\n\n      KTLayoutChat.setup(KTUtil.getById('kt_chat_content')); // Trigger click to show popup modal chat on page load\n\n      if (KTUtil.getById('kt_app_chat_toggle')) {\n        setTimeout(function () {\n          KTUtil.getById('kt_app_chat_toggle').click();\n        }, 1000);\n      }\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTAppChat.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2N1c3RvbS9jaGF0L2NoYXQuanM/MjQ3MCJdLCJuYW1lcyI6WyJLVEFwcENoYXQiLCJfY2hhdEFzaWRlRWwiLCJfY2hhdEFzaWRlT2ZmY2FudmFzT2JqIiwiX2NoYXRDb250ZW50RWwiLCJfaW5pdEFzaWRlIiwiS1RPZmZjYW52YXMiLCJvdmVybGF5IiwiYmFzZUNsYXNzIiwidG9nZ2xlQnkiLCJjYXJkU2Nyb2xsRWwiLCJLVFV0aWwiLCJmaW5kIiwiY2FyZEJvZHlFbCIsInNlYXJjaEVsIiwic2Nyb2xsSW5pdCIsIm1vYmlsZU5hdGl2ZVNjcm9sbCIsImRlc2t0b3BOYXRpdmVTY3JvbGwiLCJyZXNldEhlaWdodE9uRGVzdHJveSIsImhhbmRsZVdpbmRvd1Jlc2l6ZSIsInJlbWVtYmVyUG9zaXRpb24iLCJoZWlnaHQiLCJpc0JyZWFrcG9pbnRVcCIsIktUTGF5b3V0Q29udGVudCIsImdldEhlaWdodCIsImdldFZpZXdQb3J0IiwicGFyc2VJbnQiLCJjc3MiLCJpbml0IiwiZ2V0QnlJZCIsIktUTGF5b3V0Q2hhdCIsInNldHVwIiwic2V0VGltZW91dCIsImNsaWNrIiwialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSJdLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsU0FBUyxHQUFHLFlBQVk7QUFDM0IsTUFBSUMsWUFBSjs7QUFDQSxNQUFJQyxzQkFBSjs7QUFDQSxNQUFJQyxjQUFKLENBSDJCLENBSzNCOzs7QUFDQSxNQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBYSxHQUFZO0FBQzVCO0FBQ0FGLDBCQUFzQixHQUFHLElBQUlHLFdBQUosQ0FBZ0JKLFlBQWhCLEVBQThCO0FBQ3RESyxhQUFPLEVBQUUsSUFENkM7QUFFN0NDLGVBQVMsRUFBRSxrQkFGa0M7QUFHN0M7QUFDQUMsY0FBUSxFQUFFO0FBSm1DLEtBQTlCLENBQXpCLENBRjRCLENBUzVCOztBQUNBLFFBQUlD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QUNrQixPQUFQLENBQWUsZUFBZixDQUFmO0FBQ0F6QixvQkFBYyxHQUFHTyxNQUFNLENBQUNrQixPQUFQLENBQWUsaUJBQWYsQ0FBakIsQ0FIZ0IsQ0FLaEI7O0FBQ0F4QixnQkFBVSxHQU5NLENBUWhCOzs7QUFDQXlCLGtCQUFZLENBQUNDLEtBQWIsQ0FBbUJwQixNQUFNLENBQUNrQixPQUFQLENBQWUsaUJBQWYsQ0FBbkIsRUFUZ0IsQ0FXaEI7O0FBQ0EsVUFBSWxCLE1BQU0sQ0FBQ2tCLE9BQVAsQ0FBZSxvQkFBZixDQUFKLEVBQTBDO0FBQ3pDRyxrQkFBVSxDQUFDLFlBQVc7QUFDckJyQixnQkFBTSxDQUFDa0IsT0FBUCxDQUFlLG9CQUFmLEVBQXFDSSxLQUFyQztBQUNBLFNBRlMsRUFFUCxJQUZPLENBQVY7QUFHQTtBQUNEO0FBbkJLLEdBQVA7QUFxQkEsQ0FyRmUsRUFBaEI7O0FBdUZBQyxNQUFNLENBQUNDLFFBQUQsQ0FBTixDQUFpQkMsS0FBakIsQ0FBdUIsWUFBVztBQUNqQ25DLFdBQVMsQ0FBQzJCLElBQVY7QUFDQSxDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3dsYWRpLXdvcmtzcGFjZS9qcy9wYWdlcy9jdXN0b20vY2hhdC9jaGF0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEFwcENoYXQgPSBmdW5jdGlvbiAoKSB7XHJcblx0dmFyIF9jaGF0QXNpZGVFbDtcclxuXHR2YXIgX2NoYXRBc2lkZU9mZmNhbnZhc09iajtcclxuXHR2YXIgX2NoYXRDb250ZW50RWw7XHJcblxyXG5cdC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcblx0dmFyIF9pbml0QXNpZGUgPSBmdW5jdGlvbiAoKSB7XHJcblx0XHQvLyBNb2JpbGUgb2ZmY2FudmFzIGZvciBtb2JpbGUgbW9kZVxyXG5cdFx0X2NoYXRBc2lkZU9mZmNhbnZhc09iaiA9IG5ldyBLVE9mZmNhbnZhcyhfY2hhdEFzaWRlRWwsIHtcclxuXHRcdFx0b3ZlcmxheTogdHJ1ZSxcclxuICAgICAgICAgICAgYmFzZUNsYXNzOiAnb2ZmY2FudmFzLW1vYmlsZScsXHJcbiAgICAgICAgICAgIC8vY2xvc2VCeTogJ2t0X2NoYXRfYXNpZGVfY2xvc2UnLFxyXG4gICAgICAgICAgICB0b2dnbGVCeTogJ2t0X2FwcF9jaGF0X3RvZ2dsZSdcclxuICAgICAgICB9KTtcclxuXHJcblx0XHQvLyBVc2VyIGxpc3RpbmdcclxuXHRcdHZhciBjYXJkU2Nyb2xsRWwgPSBLVFV0aWwuZmluZChfY2hhdEFzaWRlRWwsICcuc2Nyb2xsJyk7XHJcblx0XHR2YXIgY2FyZEJvZHlFbCA9IEtUVXRpbC5maW5kKF9jaGF0QXNpZGVFbCwgJy5jYXJkLWJvZHknKTtcclxuXHRcdHZhciBzZWFyY2hFbCA9IEtUVXRpbC5maW5kKF9jaGF0QXNpZGVFbCwgJy5pbnB1dC1ncm91cCcpO1xyXG5cclxuXHRcdGlmIChjYXJkU2Nyb2xsRWwpIHtcclxuXHRcdFx0Ly8gSW5pdGlhbGl6ZSBwZXJmZWN0IHNjcm9sbGJhcihzZWU6ICBodHRwczovL2dpdGh1Yi5jb20vdXRhdHRpL3BlcmZlY3Qtc2Nyb2xsYmFyKVxyXG5cdFx0XHRLVFV0aWwuc2Nyb2xsSW5pdChjYXJkU2Nyb2xsRWwsIHtcclxuXHRcdFx0XHRtb2JpbGVOYXRpdmVTY3JvbGw6IHRydWUsICAvLyBFbmFibGUgbmF0aXZlIHNjcm9sbCBmb3IgbW9iaWxlXHJcblx0XHRcdFx0ZGVza3RvcE5hdGl2ZVNjcm9sbDogZmFsc2UsIC8vIERpc2FibGUgbmF0aXZlIHNjcm9sbCBhbmQgdXNlIGN1c3RvbSBzY3JvbGwgZm9yIGRlc2t0b3BcclxuXHRcdFx0XHRyZXNldEhlaWdodE9uRGVzdHJveTogdHJ1ZSwgIC8vIFJlc2V0IGNzcyBoZWlnaHQgb24gc2Nyb2xsIGZlYXR1cmUgZGVzdHJveWVkXHJcblx0XHRcdFx0aGFuZGxlV2luZG93UmVzaXplOiB0cnVlLCAvLyBSZWNhbGN1bGF0ZSBoaWdodCBvbiB3aW5kb3cgcmVzaXplXHJcblx0XHRcdFx0cmVtZW1iZXJQb3NpdGlvbjogdHJ1ZSwgLy8gUmVtZW1iZXIgc2Nyb2xsIHBvc2l0aW9uIGluIGNvb2tpZVxyXG5cdFx0XHRcdGhlaWdodDogZnVuY3Rpb24oKSB7ICAvLyBDYWxjdWxhdGUgaGVpZ2h0XHJcblx0XHRcdFx0XHR2YXIgaGVpZ2h0O1xyXG5cclxuXHRcdFx0XHRcdGlmIChLVFV0aWwuaXNCcmVha3BvaW50VXAoJ2xnJykpIHtcclxuXHRcdFx0XHRcdFx0aGVpZ2h0ID0gS1RMYXlvdXRDb250ZW50LmdldEhlaWdodCgpO1xyXG5cdFx0XHRcdFx0fSBlbHNlIHtcclxuXHRcdFx0XHRcdFx0aGVpZ2h0ID0gS1RVdGlsLmdldFZpZXdQb3J0KCkuaGVpZ2h0O1xyXG5cdFx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHRcdGlmIChfY2hhdEFzaWRlRWwpIHtcclxuXHRcdFx0XHRcdFx0aGVpZ2h0ID0gaGVpZ2h0IC0gcGFyc2VJbnQoS1RVdGlsLmNzcyhfY2hhdEFzaWRlRWwsICdtYXJnaW4tdG9wJykpIC0gcGFyc2VJbnQoS1RVdGlsLmNzcyhfY2hhdEFzaWRlRWwsICdtYXJnaW4tYm90dG9tJykpO1xyXG5cdFx0XHRcdFx0XHRoZWlnaHQgPSBoZWlnaHQgLSBwYXJzZUludChLVFV0aWwuY3NzKF9jaGF0QXNpZGVFbCwgJ3BhZGRpbmctdG9wJykpIC0gcGFyc2VJbnQoS1RVdGlsLmNzcyhfY2hhdEFzaWRlRWwsICdwYWRkaW5nLWJvdHRvbScpKTtcclxuXHRcdFx0XHRcdH1cclxuXHJcblx0XHRcdFx0XHRpZiAoY2FyZFNjcm9sbEVsKSB7XHJcblx0XHRcdFx0XHRcdGhlaWdodCA9IGhlaWdodCAtIHBhcnNlSW50KEtUVXRpbC5jc3MoY2FyZFNjcm9sbEVsLCAnbWFyZ2luLXRvcCcpKSAtIHBhcnNlSW50KEtUVXRpbC5jc3MoY2FyZFNjcm9sbEVsLCAnbWFyZ2luLWJvdHRvbScpKTtcclxuXHRcdFx0XHRcdH1cclxuXHJcblx0XHRcdFx0XHRpZiAoY2FyZEJvZHlFbCkge1xyXG5cdFx0XHRcdFx0XHRoZWlnaHQgPSBoZWlnaHQgLSBwYXJzZUludChLVFV0aWwuY3NzKGNhcmRCb2R5RWwsICdwYWRkaW5nLXRvcCcpKSAtIHBhcnNlSW50KEtUVXRpbC5jc3MoY2FyZEJvZHlFbCwgJ3BhZGRpbmctYm90dG9tJykpO1xyXG5cdFx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHRcdGlmIChzZWFyY2hFbCkge1xyXG5cdFx0XHRcdFx0XHRoZWlnaHQgPSBoZWlnaHQgLSBwYXJzZUludChLVFV0aWwuY3NzKHNlYXJjaEVsLCAnaGVpZ2h0JykpO1xyXG5cdFx0XHRcdFx0XHRoZWlnaHQgPSBoZWlnaHQgLSBwYXJzZUludChLVFV0aWwuY3NzKHNlYXJjaEVsLCAnbWFyZ2luLXRvcCcpKSAtIHBhcnNlSW50KEtUVXRpbC5jc3Moc2VhcmNoRWwsICdtYXJnaW4tYm90dG9tJykpO1xyXG5cdFx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHRcdC8vIFJlbW92ZSBhZGRpdGlvbmFsIHNwYWNlXHJcblx0XHRcdFx0XHRoZWlnaHQgPSBoZWlnaHQgLSAyO1xyXG5cclxuXHRcdFx0XHRcdHJldHVybiBoZWlnaHQ7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9KTtcclxuXHRcdH1cclxuXHR9XHJcblxyXG5cdHJldHVybiB7XHJcblx0XHQvLyBQdWJsaWMgZnVuY3Rpb25zXHJcblx0XHRpbml0OiBmdW5jdGlvbigpIHtcclxuXHRcdFx0Ly8gRWxlbWVudHNcclxuXHRcdFx0X2NoYXRBc2lkZUVsID0gS1RVdGlsLmdldEJ5SWQoJ2t0X2NoYXRfYXNpZGUnKTtcclxuXHRcdFx0X2NoYXRDb250ZW50RWwgPSBLVFV0aWwuZ2V0QnlJZCgna3RfY2hhdF9jb250ZW50Jyk7XHJcblxyXG5cdFx0XHQvLyBJbml0IGFzaWRlIGFuZCB1c2VyIGxpc3RcclxuXHRcdFx0X2luaXRBc2lkZSgpO1xyXG5cclxuXHRcdFx0Ly8gSW5pdCBpbmxpbmUgY2hhdCBleGFtcGxlXHJcblx0XHRcdEtUTGF5b3V0Q2hhdC5zZXR1cChLVFV0aWwuZ2V0QnlJZCgna3RfY2hhdF9jb250ZW50JykpO1xyXG5cclxuXHRcdFx0Ly8gVHJpZ2dlciBjbGljayB0byBzaG93IHBvcHVwIG1vZGFsIGNoYXQgb24gcGFnZSBsb2FkXHJcblx0XHRcdGlmIChLVFV0aWwuZ2V0QnlJZCgna3RfYXBwX2NoYXRfdG9nZ2xlJykpIHtcclxuXHRcdFx0XHRzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRcdFx0S1RVdGlsLmdldEJ5SWQoJ2t0X2FwcF9jaGF0X3RvZ2dsZScpLmNsaWNrKCk7XHJcblx0XHRcdFx0fSwgMTAwMCk7XHJcblx0XHRcdH1cclxuXHRcdH1cclxuXHR9O1xyXG59KCk7XHJcblxyXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xyXG5cdEtUQXBwQ2hhdC5pbml0KCk7XHJcbn0pO1xyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/custom/chat/chat.js\n");

/***/ }),

/***/ 96:
/*!**********************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/custom/chat/chat.js ***!
  \**********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\TopMais\htdocs_alternativa\resources\wladi-workspace\js\pages\custom\chat\chat.js */"./resources/wladi-workspace/js/pages/custom/chat/chat.js");


/***/ })

/******/ });