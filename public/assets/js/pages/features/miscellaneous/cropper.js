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
/******/ 	return __webpack_require__(__webpack_require__.s = 147);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js":
/*!******************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval(" // Class definition\n\nvar KTCropperDemo = function () {\n  // Private functions\n  var initCropperDemo = function initCropperDemo() {\n    var image = document.getElementById('image');\n    var options = {\n      crop: function crop(event) {\n        document.getElementById('dataX').value = Math.round(event.detail.x);\n        document.getElementById('dataY').value = Math.round(event.detail.y);\n        document.getElementById('dataWidth').value = Math.round(event.detail.width);\n        document.getElementById('dataHeight').value = Math.round(event.detail.height);\n        document.getElementById('dataRotate').value = event.detail.rotate;\n        document.getElementById('dataScaleX').value = event.detail.scaleX;\n        document.getElementById('dataScaleY').value = event.detail.scaleY;\n        var lg = document.getElementById('cropper-preview-lg');\n        lg.innerHTML = '';\n        lg.appendChild(cropper.getCroppedCanvas({\n          width: 256,\n          height: 160\n        }));\n        var md = document.getElementById('cropper-preview-md');\n        md.innerHTML = '';\n        md.appendChild(cropper.getCroppedCanvas({\n          width: 128,\n          height: 80\n        }));\n        var sm = document.getElementById('cropper-preview-sm');\n        sm.innerHTML = '';\n        sm.appendChild(cropper.getCroppedCanvas({\n          width: 64,\n          height: 40\n        }));\n        var xs = document.getElementById('cropper-preview-xs');\n        xs.innerHTML = '';\n        xs.appendChild(cropper.getCroppedCanvas({\n          width: 32,\n          height: 20\n        }));\n      }\n    };\n    var cropper = new Cropper(image, options);\n    var buttons = document.getElementById('cropper-buttons');\n    var methods = buttons.querySelectorAll('[data-method]');\n    methods.forEach(function (button) {\n      button.addEventListener('click', function (e) {\n        var method = button.getAttribute('data-method');\n        var option = button.getAttribute('data-option');\n        var option2 = button.getAttribute('data-second-option');\n\n        try {\n          option = JSON.parse(option);\n        } catch (e) {}\n\n        var result;\n\n        if (!option2) {\n          result = cropper[method](option, option2);\n        } else if (option) {\n          result = cropper[method](option);\n        } else {\n          result = cropper[method]();\n        }\n\n        if (method === 'getCroppedCanvas') {\n          var modal = document.getElementById('getCroppedCanvasModal');\n          var modalBody = modal.querySelector('.modal-body');\n          modalBody.innerHTML = '';\n          modalBody.appendChild(result);\n        }\n\n        var input = document.querySelector('#putData');\n\n        try {\n          input.value = JSON.stringify(result);\n        } catch (e) {\n          if (!result) {\n            input.value = result;\n          }\n        }\n      });\n    }); // set aspect ratio option buttons\n\n    var radioOptions = document.getElementById('setAspectRatio').querySelectorAll('[name=\"aspectRatio\"]');\n    radioOptions.forEach(function (button) {\n      button.addEventListener('click', function (e) {\n        cropper.setAspectRatio(e.target.value);\n      });\n    }); // set view mode\n\n    var viewModeOptions = document.getElementById('viewMode').querySelectorAll('[name=\"viewMode\"]');\n    viewModeOptions.forEach(function (button) {\n      button.addEventListener('click', function (e) {\n        cropper.destroy();\n        cropper = new Cropper(image, Object.assign({}, options, {\n          viewMode: e.target.value\n        }));\n      });\n    });\n    var toggleoptions = document.getElementById('toggleOptionButtons').querySelectorAll('[type=\"checkbox\"]');\n    toggleoptions.forEach(function (checkbox) {\n      checkbox.addEventListener('click', function (e) {\n        var appendOption = {};\n        appendOption[e.target.getAttribute('name')] = e.target.checked;\n        options = Object.assign({}, options, appendOption);\n        cropper.destroy();\n        cropper = new Cropper(image, options);\n      });\n    });\n  };\n\n  return {\n    // public functions\n    init: function init() {\n      initCropperDemo();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTCropperDemo.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2ZlYXR1cmVzL21pc2NlbGxhbmVvdXMvY3JvcHBlci5qcz8wNDM5Il0sIm5hbWVzIjpbIktUQ3JvcHBlckRlbW8iLCJpbml0Q3JvcHBlckRlbW8iLCJpbWFnZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJvcHRpb25zIiwiY3JvcCIsImV2ZW50IiwidmFsdWUiLCJNYXRoIiwicm91bmQiLCJkZXRhaWwiLCJ4IiwieSIsIndpZHRoIiwiaGVpZ2h0Iiwicm90YXRlIiwic2NhbGVYIiwic2NhbGVZIiwibGciLCJpbm5lckhUTUwiLCJhcHBlbmRDaGlsZCIsImNyb3BwZXIiLCJnZXRDcm9wcGVkQ2FudmFzIiwibWQiLCJzbSIsInhzIiwiQ3JvcHBlciIsImJ1dHRvbnMiLCJtZXRob2RzIiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJidXR0b24iLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsIm1ldGhvZCIsImdldEF0dHJpYnV0ZSIsIm9wdGlvbiIsIm9wdGlvbjIiLCJKU09OIiwicGFyc2UiLCJyZXN1bHQiLCJtb2RhbCIsIm1vZGFsQm9keSIsInF1ZXJ5U2VsZWN0b3IiLCJpbnB1dCIsInN0cmluZ2lmeSIsInJhZGlvT3B0aW9ucyIsInNldEFzcGVjdFJhdGlvIiwidGFyZ2V0Iiwidmlld01vZGVPcHRpb25zIiwiZGVzdHJveSIsIk9iamVjdCIsImFzc2lnbiIsInZpZXdNb2RlIiwidG9nZ2xlb3B0aW9ucyIsImNoZWNrYm94IiwiYXBwZW5kT3B0aW9uIiwiY2hlY2tlZCIsImluaXQiLCJqUXVlcnkiLCJyZWFkeSJdLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsYUFBYSxHQUFHLFlBQVc7QUFFN0I7QUFDQSxNQUFJQyxlQUFlLEdBQUcsU0FBbEJBLGVBQWtCLEdBQVc7QUFDL0IsUUFBSUMsS0FBSyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0Is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d0IscUJBQXhCLEVBQStDMEIsZ0JBQS9DLENBQWdFLG1CQUFoRSxDQUFwQjtBQUNBeUIsaUJBQWEsQ0FBQ3hCLE9BQWQsQ0FBc0IsVUFBU3lCLFFBQVQsRUFBbUI7QUFDdkNBLGNBQVEsQ0FBQ3ZCLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DLFVBQVNDLENBQVQsRUFBWTtBQUM3QyxZQUFJdUIsWUFBWSxHQUFHLEVBQW5CO0FBQ0FBLG9CQUFZLENBQUN2QixDQUFDLENBQUNlLE1BQUYsQ0FBU2IsWUFBVCxDQUFzQixNQUF0QixDQUFELENBQVosR0FBOENGLENBQUMsQ0FBQ2UsTUFBRixDQUFTUyxPQUF2RDtBQUNBckQsZUFBTyxHQUFHK0MsTUFBTSxDQUFDQyxNQUFQLENBQWMsRUFBZCxFQUFrQmhELE9BQWxCLEVBQTJCb0QsWUFBM0IsQ0FBVjtBQUNBbkMsZUFBTyxDQUFDNkIsT0FBUjtBQUNBN0IsZUFBTyxHQUFHLElBQUlLLE9BQUosQ0FBWXpCLEtBQVosRUFBbUJHLE9BQW5CLENBQVY7QUFDRCxPQU5EO0FBT0QsS0FSRDtBQVVELEdBekdEOztBQTJHQSxTQUFPO0FBQ0w7QUFDQXNELFFBQUksRUFBRSxnQkFBVztBQUNmMUQscUJBQWU7QUFDaEI7QUFKSSxHQUFQO0FBTUQsQ0FwSG1CLEVBQXBCOztBQXNIQTJELE1BQU0sQ0FBQ3pELFFBQUQsQ0FBTixDQUFpQjBELEtBQWpCLENBQXVCLFlBQVc7QUFDaEM3RCxlQUFhLENBQUMyRCxJQUFkO0FBQ0QsQ0FGRCIsImZpbGUiOiIuL3Jlc291cmNlcy93bGFkaS13b3Jrc3BhY2UvanMvcGFnZXMvZmVhdHVyZXMvbWlzY2VsbGFuZW91cy9jcm9wcGVyLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RDcm9wcGVyRGVtbyA9IGZ1bmN0aW9uKCkge1xyXG5cclxuICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gIHZhciBpbml0Q3JvcHBlckRlbW8gPSBmdW5jdGlvbigpIHtcclxuICAgIHZhciBpbWFnZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdpbWFnZScpO1xyXG5cclxuICAgIHZhciBvcHRpb25zID0ge1xyXG4gICAgICBjcm9wOiBmdW5jdGlvbihldmVudCkge1xyXG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkYXRhWCcpLnZhbHVlID0gTWF0aC5yb3VuZChldmVudC5kZXRhaWwueCk7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFZJykudmFsdWUgPSBNYXRoLnJvdW5kKGV2ZW50LmRldGFpbC55KTtcclxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGF0YVdpZHRoJykudmFsdWUgPSBNYXRoLnJvdW5kKGV2ZW50LmRldGFpbC53aWR0aCk7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFIZWlnaHQnKS52YWx1ZSA9IE1hdGgucm91bmQoZXZlbnQuZGV0YWlsLmhlaWdodCk7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFSb3RhdGUnKS52YWx1ZSA9IGV2ZW50LmRldGFpbC5yb3RhdGU7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFTY2FsZVgnKS52YWx1ZSA9IGV2ZW50LmRldGFpbC5zY2FsZVg7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFTY2FsZVknKS52YWx1ZSA9IGV2ZW50LmRldGFpbC5zY2FsZVk7XHJcblxyXG4gICAgICAgIHZhciBsZyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjcm9wcGVyLXByZXZpZXctbGcnKTtcclxuICAgICAgICBsZy5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICBsZy5hcHBlbmRDaGlsZChjcm9wcGVyLmdldENyb3BwZWRDYW52YXMoe3dpZHRoOiAyNTYsIGhlaWdodDogMTYwfSkpO1xyXG5cclxuICAgICAgICB2YXIgbWQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1wcmV2aWV3LW1kJyk7XHJcbiAgICAgICAgbWQuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgbWQuYXBwZW5kQ2hpbGQoY3JvcHBlci5nZXRDcm9wcGVkQ2FudmFzKHt3aWR0aDogMTI4LCBoZWlnaHQ6IDgwfSkpO1xyXG5cclxuICAgICAgICB2YXIgc20gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1wcmV2aWV3LXNtJyk7XHJcbiAgICAgICAgc20uaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgc20uYXBwZW5kQ2hpbGQoY3JvcHBlci5nZXRDcm9wcGVkQ2FudmFzKHt3aWR0aDogNjQsIGhlaWdodDogNDB9KSk7XHJcblxyXG4gICAgICAgIHZhciB4cyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjcm9wcGVyLXByZXZpZXcteHMnKTtcclxuICAgICAgICB4cy5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICB4cy5hcHBlbmRDaGlsZChjcm9wcGVyLmdldENyb3BwZWRDYW52YXMoe3dpZHRoOiAzMiwgaGVpZ2h0OiAyMH0pKTtcclxuICAgICAgfSxcclxuICAgIH07XHJcblxyXG4gICAgdmFyIGNyb3BwZXIgPSBuZXcgQ3JvcHBlcihpbWFnZSwgb3B0aW9ucyk7XHJcblxyXG4gICAgdmFyIGJ1dHRvbnMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1idXR0b25zJyk7XHJcbiAgICB2YXIgbWV0aG9kcyA9IGJ1dHRvbnMucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtbWV0aG9kXScpO1xyXG4gICAgbWV0aG9kcy5mb3JFYWNoKGZ1bmN0aW9uKGJ1dHRvbikge1xyXG4gICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgdmFyIG1ldGhvZCA9IGJ1dHRvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtbWV0aG9kJyk7XHJcbiAgICAgICAgdmFyIG9wdGlvbiA9IGJ1dHRvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtb3B0aW9uJyk7XHJcbiAgICAgICAgdmFyIG9wdGlvbjIgPSBidXR0b24uZ2V0QXR0cmlidXRlKCdkYXRhLXNlY29uZC1vcHRpb24nKTtcclxuXHJcbiAgICAgICAgdHJ5IHtcclxuICAgICAgICAgIG9wdGlvbiA9IEpTT04ucGFyc2Uob3B0aW9uKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgY2F0Y2ggKGUpIHtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHZhciByZXN1bHQ7XHJcbiAgICAgICAgaWYgKCFvcHRpb24yKSB7XHJcbiAgICAgICAgICByZXN1bHQgPSBjcm9wcGVyW21ldGhvZF0ob3B0aW9uLCBvcHRpb24yKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZSBpZiAob3B0aW9uKSB7XHJcbiAgICAgICAgICByZXN1bHQgPSBjcm9wcGVyW21ldGhvZF0ob3B0aW9uKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZSB7XHJcbiAgICAgICAgICByZXN1bHQgPSBjcm9wcGVyW21ldGhvZF0oKTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIGlmIChtZXRob2QgPT09ICdnZXRDcm9wcGVkQ2FudmFzJykge1xyXG4gICAgICAgICAgdmFyIG1vZGFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2dldENyb3BwZWRDYW52YXNNb2RhbCcpO1xyXG4gICAgICAgICAgdmFyIG1vZGFsQm9keSA9IG1vZGFsLnF1ZXJ5U2VsZWN0b3IoJy5tb2RhbC1ib2R5Jyk7XHJcbiAgICAgICAgICBtb2RhbEJvZHkuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgICBtb2RhbEJvZHkuYXBwZW5kQ2hpbGQocmVzdWx0KTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHZhciBpbnB1dCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNwdXREYXRhJyk7XHJcbiAgICAgICAgdHJ5IHtcclxuICAgICAgICAgIGlucHV0LnZhbHVlID0gSlNPTi5zdHJpbmdpZnkocmVzdWx0KTtcclxuICAgICAgICB9XHJcbiAgICAgICAgY2F0Y2ggKGUpIHtcclxuICAgICAgICAgIGlmICghcmVzdWx0KSB7XHJcbiAgICAgICAgICAgIGlucHV0LnZhbHVlID0gcmVzdWx0O1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICAvLyBzZXQgYXNwZWN0IHJhdGlvIG9wdGlvbiBidXR0b25zXHJcbiAgICB2YXIgcmFkaW9PcHRpb25zID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NldEFzcGVjdFJhdGlvJykucXVlcnlTZWxlY3RvckFsbCgnW25hbWU9XCJhc3BlY3RSYXRpb1wiXScpO1xyXG4gICAgcmFkaW9PcHRpb25zLmZvckVhY2goZnVuY3Rpb24oYnV0dG9uKSB7XHJcbiAgICAgIGJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICBjcm9wcGVyLnNldEFzcGVjdFJhdGlvKGUudGFyZ2V0LnZhbHVlKTtcclxuICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICAvLyBzZXQgdmlldyBtb2RlXHJcbiAgICB2YXIgdmlld01vZGVPcHRpb25zID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3ZpZXdNb2RlJykucXVlcnlTZWxlY3RvckFsbCgnW25hbWU9XCJ2aWV3TW9kZVwiXScpO1xyXG4gICAgdmlld01vZGVPcHRpb25zLmZvckVhY2goZnVuY3Rpb24oYnV0dG9uKSB7XHJcbiAgICAgIGJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICBjcm9wcGVyLmRlc3Ryb3koKTtcclxuICAgICAgICBjcm9wcGVyID0gbmV3IENyb3BwZXIoaW1hZ2UsIE9iamVjdC5hc3NpZ24oe30sIG9wdGlvbnMsIHt2aWV3TW9kZTogZS50YXJnZXQudmFsdWV9KSk7XHJcbiAgICAgIH0pO1xyXG4gICAgfSk7XHJcblxyXG4gICAgdmFyIHRvZ2dsZW9wdGlvbnMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndG9nZ2xlT3B0aW9uQnV0dG9ucycpLnF1ZXJ5U2VsZWN0b3JBbGwoJ1t0eXBlPVwiY2hlY2tib3hcIl0nKTtcclxuICAgIHRvZ2dsZW9wdGlvbnMuZm9yRWFjaChmdW5jdGlvbihjaGVja2JveCkge1xyXG4gICAgICBjaGVja2JveC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICB2YXIgYXBwZW5kT3B0aW9uID0ge307XHJcbiAgICAgICAgYXBwZW5kT3B0aW9uW2UudGFyZ2V0LmdldEF0dHJpYnV0ZSgnbmFtZScpXSA9IGUudGFyZ2V0LmNoZWNrZWQ7XHJcbiAgICAgICAgb3B0aW9ucyA9IE9iamVjdC5hc3NpZ24oe30sIG9wdGlvbnMsIGFwcGVuZE9wdGlvbik7XHJcbiAgICAgICAgY3JvcHBlci5kZXN0cm95KCk7XHJcbiAgICAgICAgY3JvcHBlciA9IG5ldyBDcm9wcGVyKGltYWdlLCBvcHRpb25zKTtcclxuICAgICAgfSlcclxuICAgIH0pXHJcblxyXG4gIH07XHJcblxyXG4gIHJldHVybiB7XHJcbiAgICAvLyBwdWJsaWMgZnVuY3Rpb25zXHJcbiAgICBpbml0OiBmdW5jdGlvbigpIHtcclxuICAgICAgaW5pdENyb3BwZXJEZW1vKCk7XHJcbiAgICB9LFxyXG4gIH07XHJcbn0oKTtcclxuXHJcbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XHJcbiAgS1RDcm9wcGVyRGVtby5pbml0KCk7XHJcbn0pO1xyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js\n");

/***/ }),

/***/ 147:
/*!************************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js ***!
  \************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\TopMais\htdocs_alternativa\resources\wladi-workspace\js\pages\features\miscellaneous\cropper.js */"./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js");


/***/ })

/******/ });