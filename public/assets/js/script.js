/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/input.js":
/*!*************************!*\
  !*** ./src/js/input.js ***!
  \*************************/
/***/ (() => {

// Helper function to display thousands in K format
var formatThousands = function formatThousands(value) {
  return Intl.NumberFormat("en-US", {
    maximumSignificantDigits: 3,
    notation: "compact"
  }).format(value);
};

// Define Chart.js default settings
Chart.defaults.font.family = '"Inter", sans-serif';
Chart.defaults.font.weight = "500";
Chart.defaults.color = "rgb(148, 163, 184)";
Chart.defaults.scale.grid.color = "rgb(241, 245, 249)";
Chart.defaults.plugins.tooltip.titleColor = "rgb(30, 41, 59)";
Chart.defaults.plugins.tooltip.bodyColor = "rgb(30, 41, 59)";
Chart.defaults.plugins.tooltip.backgroundColor = "#FFF";
Chart.defaults.plugins.tooltip.borderWidth = 1;
Chart.defaults.plugins.tooltip.borderColor = "rgb(226, 232, 240)";
Chart.defaults.plugins.tooltip.displayColors = false;
Chart.defaults.plugins.tooltip.mode = "nearest";
Chart.defaults.plugins.tooltip.intersect = false;
Chart.defaults.plugins.tooltip.position = "nearest";
Chart.defaults.plugins.tooltip.caretSize = 0;
Chart.defaults.plugins.tooltip.caretPadding = 20;
Chart.defaults.plugins.tooltip.cornerRadius = 4;
Chart.defaults.plugins.tooltip.padding = 8;

// A chart built with Chart.js 3
// https://www.chartjs.org/
var ctx = document.getElementById("analytics-card-01");
var chart = new Chart(ctx, {
  type: "line",
  data: {
    labels: ["12-01-2020", "01-01-2021", "02-01-2021", "03-01-2021", "04-01-2021", "05-01-2021", "06-01-2021", "07-01-2021", "08-01-2021", "09-01-2021", "10-01-2021", "11-01-2021", "12-01-2021", "01-01-2022", "02-01-2022", "03-01-2022", "04-01-2022", "05-01-2022", "06-01-2022", "07-01-2022", "08-01-2022", "09-01-2022", "10-01-2022", "11-01-2022", "12-01-2022", "01-01-2023"],
    datasets: [
    // Indigo line
    {
      label: "Current",
      data: [5000, 8700, 7500, 12000, 11000, 9500, 10500, 10000, 15000, 9000, 10000, 7000, 22000, 7200, 9800, 9000, 10000, 8000, 15000, 12000, 11000, 13000, 11000, 15000, 17000, 18000],
      fill: true,
      backgroundColor: "rgba(59, 130, 246, 0.08)",
      borderColor: "rgb(99, 102, 241)",
      borderWidth: 2,
      tension: 0,
      pointRadius: 0,
      pointHoverRadius: 3,
      pointBackgroundColor: "rgb(99, 102, 241)"
    },
    // Gray line
    {
      label: "Previous",
      data: [8000, 5000, 6500, 5000, 6500, 12000, 8000, 9000, 8000, 8000, 12500, 10000, 10000, 12000, 11000, 16000, 12000, 10000, 10000, 14000, 9000, 10000, 15000, 12500, 14000, 11000],
      borderColor: "rgb(203, 213, 225)",
      fill: false,
      borderWidth: 2,
      tension: 0,
      pointRadius: 0,
      pointHoverRadius: 3,
      pointBackgroundColor: "rgb(203, 213, 225)"
    }]
  },
  options: {
    layout: {
      padding: 20
    },
    scales: {
      y: {
        beginAtZero: true,
        grid: {
          drawBorder: false
        },
        ticks: {
          callback: function callback(value) {
            return formatThousands(value);
          }
        }
      },
      x: {
        type: "time",
        time: {
          parser: "MM-DD-YYYY",
          unit: "month",
          displayFormats: {
            month: "MMM YY"
          }
        },
        grid: {
          display: false,
          drawBorder: false
        },
        ticks: {
          autoSkipPadding: 48,
          maxRotation: 0
        }
      }
    },
    plugins: {
      legend: {
        display: false
      },
      tooltip: {
        callbacks: {
          title: function title() {
            return false;
          },
          // Disable tooltip title
          label: function label(context) {
            return formatThousands(context.parsed.y);
          }
        }
      }
    },
    interaction: {
      intersect: false,
      mode: "nearest"
    },
    maintainAspectRatio: false
  }
});

// chart2
Number.prototype.comma_formatter = function () {
  return this.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
};
var chartData = function chartData() {
  return {
    date: "today",
    options: [{
      label: "Today",
      value: "today"
    }, {
      label: "Last 7 Days",
      value: "7days"
    }, {
      label: "Last 30 Days",
      value: "30days"
    }, {
      label: "Last 6 Months",
      value: "6months"
    }, {
      label: "This Year",
      value: "year"
    }],
    showDropdown: false,
    selectedOption: 0,
    selectOption: function selectOption(index) {
      this.selectedOption = index;
      this.date = this.options[index].value;
      this.renderChart();
    },
    data: null,
    fetch: function (_fetch) {
      function fetch() {
        return _fetch.apply(this, arguments);
      }
      fetch.toString = function () {
        return _fetch.toString();
      };
      return fetch;
    }(function () {
      var _this = this;
      fetch("https://cdn.jsdelivr.net/gh/swindon/fake-api@master/tailwindAlpineJsChartJsEx1.json").then(function (res) {
        return res.json();
      }).then(function (res) {
        _this.data = res.dates;
        _this.renderChart();
      });
    }),
    renderChart: function renderChart() {
      var c = false;
      Chart.helpers.each(Chart.instances, function (instance) {
        if (instance.chart.canvas.id == "chart") {
          c = instance;
        }
      });
      if (c) {
        c.destroy();
      }
      var ctx = document.getElementById("chart").getContext("2d");
      var chart = new Chart(ctx, {
        type: "line",
        data: {
          labels: this.data[this.date].data.labels,
          datasets: [{
            label: "Income",
            backgroundColor: "rgba(102, 126, 234, 0.25)",
            borderColor: "rgba(102, 126, 234, 1)",
            pointBackgroundColor: "rgba(102, 126, 234, 1)",
            data: this.data[this.date].data.income
          }, {
            label: "Expenses",
            backgroundColor: "rgba(237, 100, 166, 0.25)",
            borderColor: "rgba(237, 100, 166, 1)",
            pointBackgroundColor: "rgba(237, 100, 166, 1)",
            data: this.data[this.date].data.expenses
          }]
        },
        layout: {
          padding: {
            right: 10
          }
        },
        options: {
          scales: {
            yAxes: [{
              gridLines: {
                display: false
              },
              ticks: {
                callback: function callback(value, index, array) {
                  return value > 1000 ? value < 1000000 ? value / 1000 + "K" : value / 1000000 + "M" : value;
                }
              }
            }]
          }
        }
      });
    }
  };
};

/***/ }),

/***/ "./src/css/input.css":
/*!***************************!*\
  !*** ./src/css/input.css ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/public/assets/js/script": 0,
/******/ 			"public/assets/css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkmari_wisata"] = self["webpackChunkmari_wisata"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["public/assets/css/style"], () => (__webpack_require__("./src/js/input.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["public/assets/css/style"], () => (__webpack_require__("./src/css/input.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;