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
/******/ 	return __webpack_require__(__webpack_require__.s = 36);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/wladi-workspace/js/pages/crud/datatables/extensions/fixedheader.js":
/*!**************************************************************************************!*\
  !*** ./resources/wladi-workspace/js/pages/crud/datatables/extensions/fixedheader.js ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar KTDatatablesExtensionsFixedheader = function () {\n  var initTable1 = function initTable1() {\n    var table = $('#kt_table_1'); // begin first table\n\n    table.DataTable({\n      responsive: true,\n      fixedHeader: {\n        header: true,\n        headerOffset: $('#kt_header').height()\n      },\n      paging: false,\n      columnDefs: [{\n        targets: -1,\n        title: 'Actions',\n        orderable: false,\n        render: function render(data, type, full, meta) {\n          return \"\\n                        <span class=\\\"dropdown\\\">\\n                            <a href=\\\"#\\\" class=\\\"btn btn-sm btn-clean btn-icon btn-icon-md\\\" data-toggle=\\\"dropdown\\\" aria-expanded=\\\"true\\\">\\n                              <i class=\\\"la la-ellipsis-h\\\"></i>\\n                            </a>\\n                            <div class=\\\"dropdown-menu dropdown-menu-right\\\">\\n                                <a class=\\\"dropdown-item\\\" href=\\\"#\\\"><i class=\\\"la la-edit\\\"></i> Edit Details</a>\\n                                <a class=\\\"dropdown-item\\\" href=\\\"#\\\"><i class=\\\"la la-leaf\\\"></i> Update Status</a>\\n                                <a class=\\\"dropdown-item\\\" href=\\\"#\\\"><i class=\\\"la la-print\\\"></i> Generate Report</a>\\n                            </div>\\n                        </span>\\n                        <a href=\\\"#\\\" class=\\\"btn btn-sm btn-clean btn-icon btn-icon-md\\\" title=\\\"View\\\">\\n                          <i class=\\\"la la-edit\\\"></i>\\n                        </a>\";\n        }\n      }, {\n        width: '75px',\n        targets: 8,\n        render: function render(data, type, full, meta) {\n          var status = {\n            1: {\n              'title': 'Pending',\n              'class': 'label-primary'\n            },\n            2: {\n              'title': 'Delivered',\n              'class': ' label-danger'\n            },\n            3: {\n              'title': 'Canceled',\n              'class': ' label-primary'\n            },\n            4: {\n              'title': 'Success',\n              'class': ' label-success'\n            },\n            5: {\n              'title': 'Info',\n              'class': ' label-info'\n            },\n            6: {\n              'title': 'Danger',\n              'class': ' label-danger'\n            },\n            7: {\n              'title': 'Warning',\n              'class': ' label-warning'\n            }\n          };\n\n          if (typeof status[data] === 'undefined') {\n            return data;\n          }\n\n          return '<span class=\"label ' + status[data][\"class\"] + ' label-inline label-pill\">' + status[data].title + '</span>';\n        }\n      }, {\n        width: '75px',\n        targets: 9,\n        render: function render(data, type, full, meta) {\n          var status = {\n            1: {\n              'title': 'Online',\n              'state': 'danger'\n            },\n            2: {\n              'title': 'Retail',\n              'state': 'primary'\n            },\n            3: {\n              'title': 'Direct',\n              'state': 'success'\n            }\n          };\n\n          if (typeof status[data] === 'undefined') {\n            return data;\n          }\n\n          return '<span class=\"label label-' + status[data].state + ' label-dot\"></span>&nbsp;' + '<span class=\"font-weight-bold text-' + status[data].state + '\">' + status[data].title + '</span>';\n        }\n      }]\n    });\n  };\n\n  return {\n    //main function to initiate the module\n    init: function init() {\n      initTable1();\n    }\n  };\n}();\n\njQuery(document).ready(function () {\n  KTDatatablesExtensionsFixedheader.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvd2xhZGktd29ya3NwYWNlL2pzL3BhZ2VzL2NydWQvZGF0YXRhYmxlcy9leHRlbnNpb25zL2ZpeGVkaGVhZGVyLmpzPzQxODIiXSwibmFtZXMiOlsiS1REYXRhdGFibGVzRXh0ZW5zaW9uc0ZpeGVkaGVhZGVyIiwiaW5pdFRhYmxlMSIsInRhYmxlIiwiJCIsIkRhdGFUYWJsZSIsInJlc3BvbnNpdmUiLCJmaXhlZEhlYWRlciIsImhlYWRlciIsImhlYWRlck9mZnNldCIsImhlaWdodCIsInBhZ2luZyIsImNvbHVtbkRlZnMiLCJ0YXJnZXRzIiwidGl0bGUiLCJvcmRlcmFibGUiLCJyZW5kZXIiLCJkYXRhIiwidHlwZSIsImZ1bGwiLCJtZXRhIiwid2lkdGgiLCJzdGF0dXMiLCJzdGF0ZSIsImluaXQiLCJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5Il0sIm1hcHBpbmdzIjoiQUFBYTs7QUFDYixJQUFJQSxpQ0FBaUMsR0FBRyxZQUFXO0FBRWxELE1BQUlDLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQVc7QUFDM0IsUUFBSUMsS0FBSyxHQUFHQyxDQUFDLENBQUMsYUFBRCxDQUFiLENBRDJCLENBRzNCOztBQUNBRCxTQUFLLENBQUNFLFNBQU4sQ0FBZ0I7QUFDZkMsZ0JBQVUsRUFBRSxJQURHO0FBRWZDLGlCQUFXLEVBQUU7QUFDWkMsY0FBTSxFQUFFLElBREk7QUFFWkMsb0JBQVksRUFBRUwsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQk0sTUFBaEI7QUFGRixPQUZFO0FBTWZDLFlBQU0sRUFBRSxLQU5PO0FBT2ZDLGdCQUFVLEVBQUUsQ0FDWDtBQUNDQyxlQUFPLEVBQUUsQ0FBQyxDQURYO0FBRUNDLGFBQUssRUFBRSxTQUZSO0FBR0NDLGlCQUFTLEVBQUUsS0FIWjtBQUlDQyxjQUFNLEVBQUUsZ0JBQVNDLElBQVQsRUFBZUMsSUFBZixFQUFxQkMsSUFBckIsRUFBMkJDLElBQTNCLEVBQWlDO0FBQ3hDO0FBY0E7QUFuQkYsT0FEVyxFQXNCWDtBQUNDQyxhQUFLLEVBQUUsTUFEUjtBQUVDUixlQUFPLEVBQUUsQ0FGVjtBQUdDRyxjQUFNLEVBQUUsZ0JBQVNDLElBQVQsRUFBZUMsSUFBZixFQUFxQkMsSUFBckIsRUFBMkJDLElBQTNCLEVBQWlDO0FBQ3hDLGNBQUlFLE1BQU0sR0FBRztBQUNaLGVBQUc7QUFBQyx1QkFBUyxTQUFWO0FBQXFCLHVCQUFTO0FBQTlCLGFBRFM7QUFFWixlQUFHO0FBQUMsdUJBQVMsV0FBVjtBQUF1Qix1QkFBUztBQUFoQyxhQUZTO0FBR1osZUFBRztBQUFDLHVCQUFTLFVBQVY7QUFBc0IsdUJBQVM7QUFBL0IsYUFIUztBQUlaLGVBQUc7QUFBQyx1QkFBUyxTQUFWO0FBQXFCLHVCQUFTO0FBQTlCLGFBSlM7QUFLWixlQUFHO0FBQUMsdUJBQVMsTUFBVjtBQUFrQix1QkFBUztBQUEzQixhQUxTO0FBTVosZUFBRztBQUFDLHVCQUFTLFFBQVY7QUFBb0IsdUJBQVM7QUFBN0IsYUFOUztBQU9aLGVBQUc7QUFBQyx1QkFBUyxTQUFWO0FBQXFCLHVCQUFTO0FBQTlCO0FBUFMsV0FBYjs7QUFTQSxjQUFJLE9BQU9BLE1BQU0sQ0FBQ0wsSUFBRCxDQUFiLEtBQXdCLFdBQTVCLEVBQXlDO0FBQ3hDLG1CQUFPQSxJQUFQO0FBQ0E7O0FBQ0QsaUJBQU8sd0JBQXdCSyxNQUFNLENBQUNMLElBQUQsQ0FBTixTQUF4QixHQUE2Qyw0QkFBN0MsR0FBNEVLLE1BQU0sQ0FBQ0wsSUFBRCxDQUFOLENBQWFILEtBQXpGLEdBQWlHLFNBQXhHO0FBQ0E7QUFqQkYsT0F0QlcsRUF5Q1g7QUFDQ08sYUFBSyxFQUFFLE1BRFI7QUFFQ1IsZUFBTyxFQUFFLENBRlY7QUFHQ0csY0FBTSxFQUFFLGdCQUFTQyxJQUFULEVBQWVDLElBQWYsRUFBcUJDLElBQXJCLEVBQTJCQyxJQUEzQixFQUFpQztBQUN4QyxjQUFJRSxNQUFNLEdBQUc7QUFDWixlQUFHO0FBQUMsdUJBQVMsUUFBVjtBQUFvQix1QkFBUztBQUE3QixhQURTO0FBRVosZUFBRztBQUFDLHVCQUFTLFFBQVY7QUFBb0IsdUJBQVM7QUFBN0IsYUFGUztBQUdaLGVBQUc7QUFBQyx1QkFBUyxRQUFWO0FBQW9CLHVCQUFTO0FBQTdCO0FBSFMsV0FBYjs7QUFLQSxjQUFJLE9BQU9BLE1BQU0sQ0FBQ0wsSUFBRCxDQUFiLEtBQXdCLFdBQTVCLEVBQXlDO0FBQ3hDLG1CQUFPQSxJQUFQO0FBQ0E7O0FBQ0QsaUJBQU8sOEJBQThCSyxNQUFNLENBQUNMLElBQUQsQ0FBTixDQUFhTSxLQUEzQyxHQUFtRCwyQkFBbkQsR0FDTixxQ0FETSxHQUNrQ0QsTUFBTSxDQUFDTCxJQUFELENBQU4sQ0FBYU0sS0FEL0MsR0FDdUQsSUFEdkQsR0FDOERELE1BQU0sQ0FBQ0wsSUFBRCxDQUFOLENBQWFILEtBRDNFLEdBQ21GLFNBRDFGO0FBRUE7QUFkRixPQXpDVztBQVBHLEtBQWhCO0FBbUVBLEdBdkVEOztBQXlFQSxTQUFPO0FBRU47QUFDQVUsUUFBSSxFQUFFLGdCQUFXO0FBQ2hCdEIsZ0JBQVU7QUFDVjtBQUxLLEdBQVA7QUFTQSxDQXBGdUMsRUFBeEM7O0FBc0ZBdUIsTUFBTSxDQUFDQyxRQUFELENBQU4sQ0FBaUJDLEtBQWpCLENBQXVCLFlBQVc7QUFDakMxQixtQ0FBaUMsQ0FBQ3VCLElBQWxDO0FBQ0EsQ0FGRCIsImZpbGUiOiIuL3Jlc291cmNlcy93bGFkaS13b3Jrc3BhY2UvanMvcGFnZXMvY3J1ZC9kYXRhdGFibGVzL2V4dGVuc2lvbnMvZml4ZWRoZWFkZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcbnZhciBLVERhdGF0YWJsZXNFeHRlbnNpb25zRml4ZWRoZWFkZXIgPSBmdW5jdGlvbigpIHtcblxuXHR2YXIgaW5pdFRhYmxlMSA9IGZ1bmN0aW9uKCkge1xuXHRcdHZhciB0YWJsZSA9ICQoJyNrdF90YWJsZV8xJyk7XG5cblx0XHQvLyBiZWdpbiBmaXJzdCB0YWJsZVxuXHRcdHRhYmxlLkRhdGFUYWJsZSh7XG5cdFx0XHRyZXNwb25zaXZlOiB0cnVlLFxuXHRcdFx0Zml4ZWRIZWFkZXI6IHtcblx0XHRcdFx0aGVhZGVyOiB0cnVlLFxuXHRcdFx0XHRoZWFkZXJPZmZzZXQ6ICQoJyNrdF9oZWFkZXInKS5oZWlnaHQoKSxcblx0XHRcdH0sXG5cdFx0XHRwYWdpbmc6IGZhbHNlLFxuXHRcdFx0Y29sdW1uRGVmczogW1xuXHRcdFx0XHR7XG5cdFx0XHRcdFx0dGFyZ2V0czogLTEsXG5cdFx0XHRcdFx0dGl0bGU6ICdBY3Rpb25zJyxcblx0XHRcdFx0XHRvcmRlcmFibGU6IGZhbHNlLFxuXHRcdFx0XHRcdHJlbmRlcjogZnVuY3Rpb24oZGF0YSwgdHlwZSwgZnVsbCwgbWV0YSkge1xuXHRcdFx0XHRcdFx0cmV0dXJuIGBcbiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwiZHJvcGRvd25cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGNsYXNzPVwiYnRuIGJ0bi1zbSBidG4tY2xlYW4gYnRuLWljb24gYnRuLWljb24tbWRcIiBkYXRhLXRvZ2dsZT1cImRyb3Bkb3duXCIgYXJpYS1leHBhbmRlZD1cInRydWVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzPVwibGEgbGEtZWxsaXBzaXMtaFwiPjwvaT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImRyb3Bkb3duLW1lbnUgZHJvcGRvd24tbWVudS1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzcz1cImRyb3Bkb3duLWl0ZW1cIiBocmVmPVwiI1wiPjxpIGNsYXNzPVwibGEgbGEtZWRpdFwiPjwvaT4gRWRpdCBEZXRhaWxzPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzcz1cImRyb3Bkb3duLWl0ZW1cIiBocmVmPVwiI1wiPjxpIGNsYXNzPVwibGEgbGEtbGVhZlwiPjwvaT4gVXBkYXRlIFN0YXR1czwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3M9XCJkcm9wZG93bi1pdGVtXCIgaHJlZj1cIiNcIj48aSBjbGFzcz1cImxhIGxhLXByaW50XCI+PC9pPiBHZW5lcmF0ZSBSZXBvcnQ8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGNsYXNzPVwiYnRuIGJ0bi1zbSBidG4tY2xlYW4gYnRuLWljb24gYnRuLWljb24tbWRcIiB0aXRsZT1cIlZpZXdcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3M9XCJsYSBsYS1lZGl0XCI+PC9pPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9hPmA7XG5cdFx0XHRcdFx0fSxcblx0XHRcdFx0fSxcblx0XHRcdFx0e1xuXHRcdFx0XHRcdHdpZHRoOiAnNzVweCcsXG5cdFx0XHRcdFx0dGFyZ2V0czogOCxcblx0XHRcdFx0XHRyZW5kZXI6IGZ1bmN0aW9uKGRhdGEsIHR5cGUsIGZ1bGwsIG1ldGEpIHtcblx0XHRcdFx0XHRcdHZhciBzdGF0dXMgPSB7XG5cdFx0XHRcdFx0XHRcdDE6IHsndGl0bGUnOiAnUGVuZGluZycsICdjbGFzcyc6ICdsYWJlbC1wcmltYXJ5J30sXG5cdFx0XHRcdFx0XHRcdDI6IHsndGl0bGUnOiAnRGVsaXZlcmVkJywgJ2NsYXNzJzogJyBsYWJlbC1kYW5nZXInfSxcblx0XHRcdFx0XHRcdFx0Mzogeyd0aXRsZSc6ICdDYW5jZWxlZCcsICdjbGFzcyc6ICcgbGFiZWwtcHJpbWFyeSd9LFxuXHRcdFx0XHRcdFx0XHQ0OiB7J3RpdGxlJzogJ1N1Y2Nlc3MnLCAnY2xhc3MnOiAnIGxhYmVsLXN1Y2Nlc3MnfSxcblx0XHRcdFx0XHRcdFx0NTogeyd0aXRsZSc6ICdJbmZvJywgJ2NsYXNzJzogJyBsYWJlbC1pbmZvJ30sXG5cdFx0XHRcdFx0XHRcdDY6IHsndGl0bGUnOiAnRGFuZ2VyJywgJ2NsYXNzJzogJyBsYWJlbC1kYW5nZXInfSxcblx0XHRcdFx0XHRcdFx0Nzogeyd0aXRsZSc6ICdXYXJuaW5nJywgJ2NsYXNzJzogJyBsYWJlbC13YXJuaW5nJ30sXG5cdFx0XHRcdFx0XHR9O1xuXHRcdFx0XHRcdFx0aWYgKHR5cGVvZiBzdGF0dXNbZGF0YV0gPT09ICd1bmRlZmluZWQnKSB7XG5cdFx0XHRcdFx0XHRcdHJldHVybiBkYXRhO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0cmV0dXJuICc8c3BhbiBjbGFzcz1cImxhYmVsICcgKyBzdGF0dXNbZGF0YV0uY2xhc3MgKyAnIGxhYmVsLWlubGluZSBsYWJlbC1waWxsXCI+JyArIHN0YXR1c1tkYXRhXS50aXRsZSArICc8L3NwYW4+Jztcblx0XHRcdFx0XHR9LFxuXHRcdFx0XHR9LFxuXHRcdFx0XHR7XG5cdFx0XHRcdFx0d2lkdGg6ICc3NXB4Jyxcblx0XHRcdFx0XHR0YXJnZXRzOiA5LFxuXHRcdFx0XHRcdHJlbmRlcjogZnVuY3Rpb24oZGF0YSwgdHlwZSwgZnVsbCwgbWV0YSkge1xuXHRcdFx0XHRcdFx0dmFyIHN0YXR1cyA9IHtcblx0XHRcdFx0XHRcdFx0MTogeyd0aXRsZSc6ICdPbmxpbmUnLCAnc3RhdGUnOiAnZGFuZ2VyJ30sXG5cdFx0XHRcdFx0XHRcdDI6IHsndGl0bGUnOiAnUmV0YWlsJywgJ3N0YXRlJzogJ3ByaW1hcnknfSxcblx0XHRcdFx0XHRcdFx0Mzogeyd0aXRsZSc6ICdEaXJlY3QnLCAnc3RhdGUnOiAnc3VjY2Vzcyd9LFxuXHRcdFx0XHRcdFx0fTtcblx0XHRcdFx0XHRcdGlmICh0eXBlb2Ygc3RhdHVzW2RhdGFdID09PSAndW5kZWZpbmVkJykge1xuXHRcdFx0XHRcdFx0XHRyZXR1cm4gZGF0YTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdHJldHVybiAnPHNwYW4gY2xhc3M9XCJsYWJlbCBsYWJlbC0nICsgc3RhdHVzW2RhdGFdLnN0YXRlICsgJyBsYWJlbC1kb3RcIj48L3NwYW4+Jm5ic3A7JyArXG5cdFx0XHRcdFx0XHRcdCc8c3BhbiBjbGFzcz1cImZvbnQtd2VpZ2h0LWJvbGQgdGV4dC0nICsgc3RhdHVzW2RhdGFdLnN0YXRlICsgJ1wiPicgKyBzdGF0dXNbZGF0YV0udGl0bGUgKyAnPC9zcGFuPic7XG5cdFx0XHRcdFx0fSxcblx0XHRcdFx0fSxcblx0XHRcdF0sXG5cdFx0fSk7XG5cblx0fTtcblxuXHRyZXR1cm4ge1xuXG5cdFx0Ly9tYWluIGZ1bmN0aW9uIHRvIGluaXRpYXRlIHRoZSBtb2R1bGVcblx0XHRpbml0OiBmdW5jdGlvbigpIHtcblx0XHRcdGluaXRUYWJsZTEoKTtcblx0XHR9LFxuXG5cdH07XG5cbn0oKTtcblxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblx0S1REYXRhdGFibGVzRXh0ZW5zaW9uc0ZpeGVkaGVhZGVyLmluaXQoKTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/wladi-workspace/js/pages/crud/datatables/extensions/fixedheader.js\n");

/***/ }),

/***/ 36:
/*!********************************************************************************************!*\
  !*** multi ./resources/wladi-workspace/js/pages/crud/datatables/extensions/fixedheader.js ***!
  \********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mrzer0/workspace/Alternativa/dashboard_laravel/resources/wladi-workspace/js/pages/crud/datatables/extensions/fixedheader.js */"./resources/wladi-workspace/js/pages/crud/datatables/extensions/fixedheader.js");


/***/ })

/******/ });