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
eval(" // Class definition\n\nvar KTCropperDemo = function () {\n  // Private functions\n  var initCropperDemo = function initCropperDemo() {\n    var image = document.getElementById('image');\n    var options = {\n      crop: function crop(event) {\n        document.getElementById('dataX').value = Math.round(event.detail.x);\n        document.getElementById('dataY').value = Math.round(event.detail.y);\n        document.getElementById('dataWidth').value = Math.round(event.detail.width);\n        document.getElementById('dataHeight').value = Math.round(event.detail.height);\n        document.getElementById('dataRotate').value = event.detail.rotate;\n        document.getElementById('dataScaleX').value = event.detail.scaleX;\n        document.getElementById('dataScaleY').value = event.detail.scaleY;\n        var lg = document.getElementById('cropper-preview-lg');\n        lg.innerHTML = '';\n        lg.appendChild(cropper.getCroppedCanvas({\n          width: 256,\n          height: 160\n        }));\n        var md = document.getElementById('cropper-preview-md');\n        md.innerHTML = '';\n        md.appendChild(cropper.getCroppedCanvas({\n          width: 128,\n          height: 80\n        }));\n        var sm = document.getElementById('cropper-preview-sm');\n        sm.innerHTML = '';\n        sm.appendChild(cropper.getCroppedCanvas({\n          width: 64,\n          height: 40\n        }));\n        var xs = document.getElementById('cropper-preview-xs');\n        xs.innerHTML = '';\n        xs.appendChild(cropper.getCroppedCanvas({\n          width: 32,\n          height: 20\n        }));\n      }\n    };\n    var cropper = new Cropper(image, options);\n    var buttons = document.getElementById('cropper-buttons');\n    var methods = buttons.querySelectorAll('[data-method]');\n    methods.forEach(function (button) {\n      button.addEventListener('click', function (e) {\n        var method = button.getAttribute('data-method');\n        var option = button.getAttribute('data-option');\n        var option2 = button.getAttribute('data-second-option');\n\n        try {\n          option = JSON.parse(option);\n        } catch (e) {}\n\n        var result;\n\n        if (!option2) {\n          result = cropper[method](option, option2);\n        } else if (option) {\n          result = cropper[method](option);\n        } else {\n          result = cropper[method]();\n        }\n\n        if (method === 'getCroppedCanvas') {\n          var modal = document.getElementById('getCroppedCanvasModal');\n          var modalBody = modal.querySelector('.modal-body');\n          modalBody.innerHTML = '';\n          modalBody.appendChild(result);\n        }\n\n        var input = document.querySelector('#putData');\n\n        try {\n          input.value = JSON.stringify(result);\n        } catch (e) {\n          if (!result) {\n            input.value = result;\n          }\n        }\n      });\n    }); // set aspect ratio option buttons\n\n    var radioOptions = document.getElementById('setAspectRatio').querySelectorAll('[name=\"aspectRatio\"]');\n    radioOptions.forEach(function (button) {\n      button.addEventListener('click', function (e) {\n        cropper.setAspectRatio(e.target.value);\n      });\n    }); // set view mode\n\n    var viewModeOptions = document.getElementById('viewMode').querySelectorAll('[name=\"viewMode\"]');\n    viewModeOptions.forEach(function (button) {\n      button.addEventListener('click', function (e) {\n        cropper.destroy();\n        cropper = new Cropper(image, Object.assign({}, options, {\n          viewMode: e.target.value\n        }));\n      });\n    });\n    var toggleoptions = document.getElementById('toggleOptionButtons').querySelectorAll('[type=\"checkbox\"]');\n    toggleoptions.forEach(function (checkbox) {\n      checkbox.addEventListener('click', function (e) {\n        var appendOption = {};\n        appendOption[e.target.getAttribute('name')] = e.target.checked;\n        options = Object.assign({}, options, appendOption);\n        cropper.destroy();\n        cropper = new Cropper(image, options);\n      });\n    });\n  };\n\n  return {\n    // public functions\n    init: function init() {\n      initCropperDemo();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTCropperDemo.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2ZlYXR1cmVzL21pc2NlbGxhbmVvdXMvY3JvcHBlci5qcz8wNDM5Il0sIm5hbWVzIjpbIktUQ3JvcHBlckRlbW8iLCJpbml0Q3JvcHBlckRlbW8iLCJpbWFnZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJvcHRpb25zIiwiY3JvcCIsImV2ZW50IiwidmFsdWUiLCJNYXRoIiwicm91bmQiLCJkZXRhaWwiLCJ4IiwieSIsIndpZHRoIiwiaGVpZ2h0Iiwicm90YXRlIiwic2NhbGVYIiwic2NhbGVZIiwibGciLCJpbm5lckhUTUwiLCJhcHBlbmRDaGlsZCIsImNyb3BwZXIiLCJnZXRDcm9wcGVkQ2FudmFzIiwibWQiLCJzbSIsInhzIiwiQ3JvcHBlciIsImJ1dHRvbnMiLCJtZXRob2RzIiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJidXR0b24iLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsIm1ldGhvZCIsImdldEF0dHJpYnV0ZSIsIm9wdGlvbiIsIm9wdGlvbjIiLCJKU09OIiwicGFyc2UiLCJyZXN1bHQiLCJtb2RhbCIsIm1vZGFsQm9keSIsInF1ZXJ5U2VsZWN0b3IiLCJpbnB1dCIsInN0cmluZ2lmeSIsInJhZGlvT3B0aW9ucyIsInNldEFzcGVjdFJhdGlvIiwidGFyZ2V0Iiwidmlld01vZGVPcHRpb25zIiwiZGVzdHJveSIsIk9iamVjdCIsImFzc2lnbiIsInZpZXdNb2RlIiwidG9nZ2xlb3B0aW9ucyIsImNoZWNrYm94IiwiYXBwZW5kT3B0aW9uIiwiY2hlY2tlZCIsImluaXQiLCJqUXVlcnkiLCJyZWFkeSJdLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsYUFBYSxHQUFHLFlBQVc7QUFFN0I7QUFDQSxNQUFJQyxlQUFlLEdBQUcsU0FBbEJBLGVBQWtCLEdBQVc7QUFDL0IsUUFBSUMsS0FBSyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0Is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d0IscUJBQXhCLEVBQStDMEIsZ0JBQS9DLENBQWdFLG1CQUFoRSxDQUFwQjtBQUNBeUIsaUJBQWEsQ0FBQ3hCLE9BQWQsQ0FBc0IsVUFBU3lCLFFBQVQsRUFBbUI7QUFDdkNBLGNBQVEsQ0FBQ3ZCLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DLFVBQVNDLENBQVQsRUFBWTtBQUM3QyxZQUFJdUIsWUFBWSxHQUFHLEVBQW5CO0FBQ0FBLG9CQUFZLENBQUN2QixDQUFDLENBQUNlLE1BQUYsQ0FBU2IsWUFBVCxDQUFzQixNQUF0QixDQUFELENBQVosR0FBOENGLENBQUMsQ0FBQ2UsTUFBRixDQUFTUyxPQUF2RDtBQUNBckQsZUFBTyxHQUFHK0MsTUFBTSxDQUFDQyxNQUFQLENBQWMsRUFBZCxFQUFrQmhELE9BQWxCLEVBQTJCb0QsWUFBM0IsQ0FBVjtBQUNBbkMsZUFBTyxDQUFDNkIsT0FBUjtBQUNBN0IsZUFBTyxHQUFHLElBQUlLLE9BQUosQ0FBWXpCLEtBQVosRUFBbUJHLE9BQW5CLENBQVY7QUFDRCxPQU5EO0FBT0QsS0FSRDtBQVVELEdBekdEOztBQTJHQSxTQUFPO0FBQ0w7QUFDQXNELFFBQUksRUFBRSxnQkFBVztBQUNmMUQscUJBQWU7QUFDaEI7QUFKSSxHQUFQO0FBTUQsQ0FwSG1CLEVBQXBCOztBQXNIQTJELE1BQU0sQ0FBQ3pELFFBQUQsQ0FBTixDQUFpQjBELEtBQWpCLENBQXVCLFlBQVc7QUFDaEM3RCxlQUFhLENBQUMyRCxJQUFkO0FBQ0QsQ0FGRCIsImZpbGUiOiIuL3Jlc291cmNlcy93bGFkaS13b3Jrc3BhY2UvanMvcGFnZXMvZmVhdHVyZXMvbWlzY2VsbGFuZW91cy9jcm9wcGVyLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RDcm9wcGVyRGVtbyA9IGZ1bmN0aW9uKCkge1xuXG4gIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gIHZhciBpbml0Q3JvcHBlckRlbW8gPSBmdW5jdGlvbigpIHtcbiAgICB2YXIgaW1hZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnaW1hZ2UnKTtcblxuICAgIHZhciBvcHRpb25zID0ge1xuICAgICAgY3JvcDogZnVuY3Rpb24oZXZlbnQpIHtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFYJykudmFsdWUgPSBNYXRoLnJvdW5kKGV2ZW50LmRldGFpbC54KTtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFZJykudmFsdWUgPSBNYXRoLnJvdW5kKGV2ZW50LmRldGFpbC55KTtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFXaWR0aCcpLnZhbHVlID0gTWF0aC5yb3VuZChldmVudC5kZXRhaWwud2lkdGgpO1xuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGF0YUhlaWdodCcpLnZhbHVlID0gTWF0aC5yb3VuZChldmVudC5kZXRhaWwuaGVpZ2h0KTtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RhdGFSb3RhdGUnKS52YWx1ZSA9IGV2ZW50LmRldGFpbC5yb3RhdGU7XG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkYXRhU2NhbGVYJykudmFsdWUgPSBldmVudC5kZXRhaWwuc2NhbGVYO1xuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGF0YVNjYWxlWScpLnZhbHVlID0gZXZlbnQuZGV0YWlsLnNjYWxlWTtcblxuICAgICAgICB2YXIgbGcgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1wcmV2aWV3LWxnJyk7XG4gICAgICAgIGxnLmlubmVySFRNTCA9ICcnO1xuICAgICAgICBsZy5hcHBlbmRDaGlsZChjcm9wcGVyLmdldENyb3BwZWRDYW52YXMoe3dpZHRoOiAyNTYsIGhlaWdodDogMTYwfSkpO1xuXG4gICAgICAgIHZhciBtZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjcm9wcGVyLXByZXZpZXctbWQnKTtcbiAgICAgICAgbWQuaW5uZXJIVE1MID0gJyc7XG4gICAgICAgIG1kLmFwcGVuZENoaWxkKGNyb3BwZXIuZ2V0Q3JvcHBlZENhbnZhcyh7d2lkdGg6IDEyOCwgaGVpZ2h0OiA4MH0pKTtcblxuICAgICAgICB2YXIgc20gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1wcmV2aWV3LXNtJyk7XG4gICAgICAgIHNtLmlubmVySFRNTCA9ICcnO1xuICAgICAgICBzbS5hcHBlbmRDaGlsZChjcm9wcGVyLmdldENyb3BwZWRDYW52YXMoe3dpZHRoOiA2NCwgaGVpZ2h0OiA0MH0pKTtcblxuICAgICAgICB2YXIgeHMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1wcmV2aWV3LXhzJyk7XG4gICAgICAgIHhzLmlubmVySFRNTCA9ICcnO1xuICAgICAgICB4cy5hcHBlbmRDaGlsZChjcm9wcGVyLmdldENyb3BwZWRDYW52YXMoe3dpZHRoOiAzMiwgaGVpZ2h0OiAyMH0pKTtcbiAgICAgIH0sXG4gICAgfTtcblxuICAgIHZhciBjcm9wcGVyID0gbmV3IENyb3BwZXIoaW1hZ2UsIG9wdGlvbnMpO1xuXG4gICAgdmFyIGJ1dHRvbnMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3JvcHBlci1idXR0b25zJyk7XG4gICAgdmFyIG1ldGhvZHMgPSBidXR0b25zLnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLW1ldGhvZF0nKTtcbiAgICBtZXRob2RzLmZvckVhY2goZnVuY3Rpb24oYnV0dG9uKSB7XG4gICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKSB7XG4gICAgICAgIHZhciBtZXRob2QgPSBidXR0b24uZ2V0QXR0cmlidXRlKCdkYXRhLW1ldGhvZCcpO1xuICAgICAgICB2YXIgb3B0aW9uID0gYnV0dG9uLmdldEF0dHJpYnV0ZSgnZGF0YS1vcHRpb24nKTtcbiAgICAgICAgdmFyIG9wdGlvbjIgPSBidXR0b24uZ2V0QXR0cmlidXRlKCdkYXRhLXNlY29uZC1vcHRpb24nKTtcblxuICAgICAgICB0cnkge1xuICAgICAgICAgIG9wdGlvbiA9IEpTT04ucGFyc2Uob3B0aW9uKTtcbiAgICAgICAgfVxuICAgICAgICBjYXRjaCAoZSkge1xuICAgICAgICB9XG5cbiAgICAgICAgdmFyIHJlc3VsdDtcbiAgICAgICAgaWYgKCFvcHRpb24yKSB7XG4gICAgICAgICAgcmVzdWx0ID0gY3JvcHBlclttZXRob2RdKG9wdGlvbiwgb3B0aW9uMik7XG4gICAgICAgIH1cbiAgICAgICAgZWxzZSBpZiAob3B0aW9uKSB7XG4gICAgICAgICAgcmVzdWx0ID0gY3JvcHBlclttZXRob2RdKG9wdGlvbik7XG4gICAgICAgIH1cbiAgICAgICAgZWxzZSB7XG4gICAgICAgICAgcmVzdWx0ID0gY3JvcHBlclttZXRob2RdKCk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAobWV0aG9kID09PSAnZ2V0Q3JvcHBlZENhbnZhcycpIHtcbiAgICAgICAgICB2YXIgbW9kYWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZ2V0Q3JvcHBlZENhbnZhc01vZGFsJyk7XG4gICAgICAgICAgdmFyIG1vZGFsQm9keSA9IG1vZGFsLnF1ZXJ5U2VsZWN0b3IoJy5tb2RhbC1ib2R5Jyk7XG4gICAgICAgICAgbW9kYWxCb2R5LmlubmVySFRNTCA9ICcnO1xuICAgICAgICAgIG1vZGFsQm9keS5hcHBlbmRDaGlsZChyZXN1bHQpO1xuICAgICAgICB9XG5cbiAgICAgICAgdmFyIGlucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3B1dERhdGEnKTtcbiAgICAgICAgdHJ5IHtcbiAgICAgICAgICBpbnB1dC52YWx1ZSA9IEpTT04uc3RyaW5naWZ5KHJlc3VsdCk7XG4gICAgICAgIH1cbiAgICAgICAgY2F0Y2ggKGUpIHtcbiAgICAgICAgICBpZiAoIXJlc3VsdCkge1xuICAgICAgICAgICAgaW5wdXQudmFsdWUgPSByZXN1bHQ7XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9KTtcbiAgICB9KTtcblxuICAgIC8vIHNldCBhc3BlY3QgcmF0aW8gb3B0aW9uIGJ1dHRvbnNcbiAgICB2YXIgcmFkaW9PcHRpb25zID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NldEFzcGVjdFJhdGlvJykucXVlcnlTZWxlY3RvckFsbCgnW25hbWU9XCJhc3BlY3RSYXRpb1wiXScpO1xuICAgIHJhZGlvT3B0aW9ucy5mb3JFYWNoKGZ1bmN0aW9uKGJ1dHRvbikge1xuICAgICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgICAgICBjcm9wcGVyLnNldEFzcGVjdFJhdGlvKGUudGFyZ2V0LnZhbHVlKTtcbiAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgLy8gc2V0IHZpZXcgbW9kZVxuICAgIHZhciB2aWV3TW9kZU9wdGlvbnMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndmlld01vZGUnKS5xdWVyeVNlbGVjdG9yQWxsKCdbbmFtZT1cInZpZXdNb2RlXCJdJyk7XG4gICAgdmlld01vZGVPcHRpb25zLmZvckVhY2goZnVuY3Rpb24oYnV0dG9uKSB7XG4gICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKSB7XG4gICAgICAgIGNyb3BwZXIuZGVzdHJveSgpO1xuICAgICAgICBjcm9wcGVyID0gbmV3IENyb3BwZXIoaW1hZ2UsIE9iamVjdC5hc3NpZ24oe30sIG9wdGlvbnMsIHt2aWV3TW9kZTogZS50YXJnZXQudmFsdWV9KSk7XG4gICAgICB9KTtcbiAgICB9KTtcblxuICAgIHZhciB0b2dnbGVvcHRpb25zID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RvZ2dsZU9wdGlvbkJ1dHRvbnMnKS5xdWVyeVNlbGVjdG9yQWxsKCdbdHlwZT1cImNoZWNrYm94XCJdJyk7XG4gICAgdG9nZ2xlb3B0aW9ucy5mb3JFYWNoKGZ1bmN0aW9uKGNoZWNrYm94KSB7XG4gICAgICBjaGVja2JveC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgdmFyIGFwcGVuZE9wdGlvbiA9IHt9O1xuICAgICAgICBhcHBlbmRPcHRpb25bZS50YXJnZXQuZ2V0QXR0cmlidXRlKCduYW1lJyldID0gZS50YXJnZXQuY2hlY2tlZDtcbiAgICAgICAgb3B0aW9ucyA9IE9iamVjdC5hc3NpZ24oe30sIG9wdGlvbnMsIGFwcGVuZE9wdGlvbik7XG4gICAgICAgIGNyb3BwZXIuZGVzdHJveSgpO1xuICAgICAgICBjcm9wcGVyID0gbmV3IENyb3BwZXIoaW1hZ2UsIG9wdGlvbnMpO1xuICAgICAgfSlcbiAgICB9KVxuXG4gIH07XG5cbiAgcmV0dXJuIHtcbiAgICAvLyBwdWJsaWMgZnVuY3Rpb25zXG4gICAgaW5pdDogZnVuY3Rpb24oKSB7XG4gICAgICBpbml0Q3JvcHBlckRlbW8oKTtcbiAgICB9LFxuICB9O1xufSgpO1xuXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICBLVENyb3BwZXJEZW1vLmluaXQoKTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js\n");

/***/ }),

/***/ 147:
/*!************************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js ***!
  \************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mrzer0/workspace/Alternativa/dashboard_laravel/resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js */"./resources/wladi-workspace/js/pages/features/miscellaneous/cropper.js");


/***/ })

/******/ });