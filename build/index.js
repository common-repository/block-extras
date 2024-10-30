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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/@babel/runtime/helpers/arrayWithoutHoles.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/arrayWithoutHoles.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _arrayWithoutHoles(arr) {
  if (Array.isArray(arr)) {
    for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) {
      arr2[i] = arr[i];
    }

    return arr2;
  }
}

module.exports = _arrayWithoutHoles;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/defineProperty.js":
/*!***************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/defineProperty.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
}

module.exports = _defineProperty;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/iterableToArray.js":
/*!****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/iterableToArray.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _iterableToArray(iter) {
  if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter);
}

module.exports = _iterableToArray;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/nonIterableSpread.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/nonIterableSpread.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _nonIterableSpread() {
  throw new TypeError("Invalid attempt to spread non-iterable instance");
}

module.exports = _nonIterableSpread;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/toConsumableArray.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/toConsumableArray.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var arrayWithoutHoles = __webpack_require__(/*! ./arrayWithoutHoles */ "./node_modules/@babel/runtime/helpers/arrayWithoutHoles.js");

var iterableToArray = __webpack_require__(/*! ./iterableToArray */ "./node_modules/@babel/runtime/helpers/iterableToArray.js");

var nonIterableSpread = __webpack_require__(/*! ./nonIterableSpread */ "./node_modules/@babel/runtime/helpers/nonIterableSpread.js");

function _toConsumableArray(arr) {
  return arrayWithoutHoles(arr) || iterableToArray(arr) || nonIterableSpread();
}

module.exports = _toConsumableArray;

/***/ }),

/***/ "./src/components.js":
/*!***************************!*\
  !*** ./src/components.js ***!
  \***************************/
/*! exports provided: RangeSlider, LockIcon */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RangeSlider", function() { return RangeSlider; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LockIcon", function() { return LockIcon; });
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_2__);



var RangeControl = wp.components.RangeControl;
var __ = wp.i18n.__;

function RangeSlider(_ref) {
  var attribute = _ref.attribute,
      title = _ref.title,
      _ref$value = _ref.value,
      value = _ref$value === void 0 ? 0 : _ref$value,
      setAttributes = _ref.setAttributes,
      blockConfig = _ref.blockConfig;
  var setValue = Object(react__WEBPACK_IMPORTED_MODULE_2__["useCallback"])(function (newValue) {
    setAttributes(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, attribute, newValue));
  }, [setAttributes]);
  var total = value * blockConfig.step;

  if (blockConfig.step.toString().indexOf('.') != -1) {
    total = (Math.round(total * 100) / 100).toFixed(2);
  }

  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
    className: 'block-extras-control-wrapper'
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
    className: 'block-extras-icon block-extras-icon-' + attribute,
    title: __(title)
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(RangeControl, {
    value: value,
    min: blockConfig.min,
    max: blockConfig.max,
    initialPosition: value,
    onChange: setValue
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
    className: 'block-extras-range-label'
  }, value != blockConfig.default ? total + (blockConfig.stepUnit ? 'px' : '') : 'default'));
}

function LockIcon(_ref2) {
  var elementGroup = _ref2.elementGroup,
      locked = _ref2.locked;

  if (locked) {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("svg", {
      xmlns: "http://www.w3.org/2000/svg",
      width: "16",
      height: "16",
      viewBox: "0 0 16 16"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("path", {
      fill: "#000000",
      d: "M9.25 7h-0.25v-3c0-1.654-1.346-3-3-3h-2c-1.654 0-3 1.346-3 3v3h-0.25c-0.412 0-0.75 0.338-0.75 0.75v7.5c0 0.412 0.338 0.75 0.75 0.75h8.5c0.412 0 0.75-0.338 0.75-0.75v-7.5c0-0.412-0.338-0.75-0.75-0.75zM3 4c0-0.551 0.449-1 1-1h2c0.551 0 1 0.449 1 1v3h-4v-3z"
    })), "Change individual sides");
  } else {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("svg", {
      xmlns: "http://www.w3.org/2000/svg",
      width: "16",
      height: "16",
      viewBox: "0 0 16 16"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("path", {
      fill: "#000000",
      d: "M12 1c1.654 0 3 1.346 3 3v3h-2v-3c0-0.551-0.449-1-1-1h-2c-0.551 0-1 0.449-1 1v3h0.25c0.412 0 0.75 0.338 0.75 0.75v7.5c0 0.412-0.338 0.75-0.75 0.75h-8.5c-0.412 0-0.75-0.338-0.75-0.75v-7.5c0-0.412 0.338-0.75 0.75-0.75h6.25v-3c0-1.654 1.346-3 3-3h2z"
    })), "Change all sides");
  }
}



/***/ }),

/***/ "./src/functions.js":
/*!**************************!*\
  !*** ./src/functions.js ***!
  \**************************/
/*! exports provided: getClasses, showElement, getAttributesFromClass, getElementValue, getClassFromAttributes, getValidAttributes */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getClasses", function() { return getClasses; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "showElement", function() { return showElement; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getAttributesFromClass", function() { return getAttributesFromClass; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getElementValue", function() { return getElementValue; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getClassFromAttributes", function() { return getClassFromAttributes; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getValidAttributes", function() { return getValidAttributes; });
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__);

var _blockExtras = blockExtras,
    elementConfig = _blockExtras.elementConfig,
    blockConfig = _blockExtras.blockConfig;

var getElementClass = function getElementClass(element, value) {
  var className = elementConfig[element].className + '-';

  if (parseInt(value) < 0) {
    className += 'n';
  }

  return className + Math.abs(value);
};

function getClasses() {
  var allClasses = {},
      i;
  Object.keys(elementConfig).forEach(function (element) {
    for (i = elementConfig[element].min; i <= elementConfig[element].max; i++) {
      allClasses[getElementClass(element, i)] = {
        value: i,
        type: element,
        default: elementConfig[element].default == i
      };
    }
  });
  return allClasses;
}

;
var allClasses = getClasses();

var showElement = function showElement(element, hasSideElements, lockStatus, attributes) {
  var show = true;

  if (hasSideElements) {
    if (['margin', 'padding'].includes(element)) {
      show = lockStatus;
    } else {
      if (['marginLeft', 'marginRight'].includes(element) && attributes.align) {
        show = false;
      } else {
        show = !lockStatus;
      }
    }
  }

  return show;
};

var getClassArray = function getClassArray(className) {
  var classArray = [];

  if (className && className.length) {
    classArray = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default()(new Set(className.split(' ')));
  }

  return classArray;
};

var getAttributesFromClass = function getAttributesFromClass(blockType, className, attributes) {
  getClassArray(className).forEach(function (classPart, classKey) {
    if (allClasses[classPart]) {
      attributes[allClasses[classPart].type] = allClasses[classPart].value;
    }
  });
  return attributes;
};

var getElementValue = function getElementValue(blockType, elementType, variable) {
  var value;
  Object.keys(blockConfig[blockType]).forEach(function (block) {
    Object.keys(blockConfig[blockType][block]).forEach(function (type) {
      if (type == elementType) {
        value = blockConfig[blockType][block][type][variable];
        return false;
      }
    });
  });
  return value;
};

var getClassFromAttributes = function getClassFromAttributes(blockType, className, attributes) {
  var originalClassArray = getClassArray(className),
      classArray = [],
      defaultOriginal = false;
  Object.keys(allClasses).forEach(function (classKey) {
    defaultOriginal = false;

    if (originalClassArray.includes(classKey)) {
      originalClassArray = originalClassArray.filter(function (item) {
        return item !== classKey;
      });

      if (attributes[allClasses[classKey].type] == getElementValue(blockType, allClasses[classKey].type, 'default')) {
        defaultOriginal = true;
      }
    }

    if (attributes[allClasses[classKey].type] == allClasses[classKey].value) {
      if (attributes[allClasses[classKey].type] != getElementValue(blockType, allClasses[classKey].type, 'default') || defaultOriginal) {
        if (!classArray.includes(classKey)) {
          classArray.push(classKey);
        }
      }
    }
  });
  Object.keys(elementConfig).forEach(function (element) {
    if (originalClassArray.includes(elementConfig[element].className + '-')) {
      originalClassArray = originalClassArray.filter(function (item) {
        return item !== elementConfig[element].className + '-';
      });
    } else if (originalClassArray.includes(elementConfig[element].className + '-n')) {
      originalClassArray = originalClassArray.filter(function (item) {
        return item !== elementConfig[element].className + '-n';
      });
    }
  });
  return [].concat(classArray, _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default()(originalClassArray)).join(' ');
};

var noSideMargins = []; //'full', 'wide'];

var getValidAttributes = function getValidAttributes(blockType, attributes) {
  var min, max;
  Object.keys(elementConfig).forEach(function (element) {
    if (attributes.align && noSideMargins.includes(attributes.align) && ['marginLeft', 'marginRight'].includes(element) || !getElementValue(blockType, element, 'enabled')) {
      delete attributes[element];
    } else {
      min = getElementValue(blockType, element, 'min');
      max = getElementValue(blockType, element, 'max');

      if (attributes[element] < min) {
        attributes[element] = min;
      } else if (attributes[element] > max) {
        attributes[element] = max;
      }
    }
  });
  return attributes;
};



/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _functions__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./functions */ "./src/functions.js");
/* harmony import */ var _components__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components */ "./src/components.js");




var createHigherOrderComponent = wp.compose.createHigherOrderComponent;
var Fragment = wp.element.Fragment;

var _ref = wp.blockEditor ? wp.blockEditor : wp.editor,
    InspectorControls = _ref.InspectorControls;

var PanelBody = wp.components.PanelBody;
var addFilter = wp.hooks.addFilter;
var __ = wp.i18n.__;
var sides = ['Top', 'Right', 'Bottom', 'Left'];
var _blockExtras = blockExtras,
    elementConfig = _blockExtras.elementConfig,
    blockConfig = _blockExtras.blockConfig,
    help = _blockExtras.help;

var addExtraControlAttributes = function addExtraControlAttributes(settings, name) {
  if (!blockConfig[name]) {
    return settings;
  }

  Object.keys(blockConfig[name]).forEach(function (block) {
    Object.keys(blockConfig[name][block]).forEach(function (type) {
      settings.attributes[type] = {
        type: 'string',
        default: blockConfig[name][block][type].default
      };
    });
  });
  return settings;
};

var withExtraControls = createHigherOrderComponent(function (BlockEdit) {
  return function (props) {
    if (!blockConfig[props.name]) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props);
    }

    props.attributes = Object(_functions__WEBPACK_IMPORTED_MODULE_2__["getValidAttributes"])(props.name, props.attributes);
    props.attributes.className = Object(_functions__WEBPACK_IMPORTED_MODULE_2__["getClassFromAttributes"])(props.name, props.attributes.className, props.attributes);
    props.attributes.className = Object(_functions__WEBPACK_IMPORTED_MODULE_2__["getClassFromAttributes"])(props.name, props.attributes.className, props.attributes);

    if (typeof props.attributes.lockStatus == 'undefined') {
      props.attributes.lockStatus = {};
    }

    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InspectorControls, null, Object.keys(blockConfig[props.name]).map(function (elementGroup) {
      // Group panel
      var hasElements = false;
      Object.keys(blockConfig[props.name][elementGroup]).forEach(function (element) {
        if (blockConfig[props.name][elementGroup][element].enabled) {
          hasElements = true;
          return false;
        }
      });

      if (hasElements) {
        var hasSideElements = false;

        if ((blockConfig[props.name][elementGroup]['margin'] || blockConfig[props.name][elementGroup]['padding']) && Object.keys(blockConfig[props.name][elementGroup]).length > 1) {
          hasSideElements = true;

          if (typeof props.attributes.lockStatus[elementGroup] == 'undefined') {
            props.attributes.lockStatus[elementGroup] = true;
            Object.keys(blockConfig[props.name][elementGroup]).forEach(function (element) {
              if (blockConfig[props.name][elementGroup][element].enabled && !['margin', 'padding'].includes(element) && props.attributes[element] != blockConfig[props.name][elementGroup][element].default) {
                props.attributes.lockStatus[elementGroup] = false;
                return false;
              }
            });
          }
        }

        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(PanelBody, {
          title: __(elementGroup),
          initialOpen: true
        }, hasSideElements ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("a", {
          className: 'block-extras-control-lock' + (props.attributes.lockStatus[elementGroup] ? ' locked' : ''),
          onClick: function onClick() {
            if (props.attributes.lockStatus[elementGroup]) {
              props.attributes[elementGroup.toLowerCase()] = blockConfig[props.name][elementGroup][elementGroup.toLowerCase()].default;
            } else {
              sides.forEach(function (side) {
                props.attributes[elementGroup.toLowerCase() + side] = blockConfig[props.name][elementGroup][elementGroup.toLowerCase() + side].default;
              });
            }

            props.setAttributes({
              lockStatus: _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, elementGroup, !props.attributes.lockStatus[elementGroup])
            });
          }
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_components__WEBPACK_IMPORTED_MODULE_3__["LockIcon"], {
          elementGroup: elementGroup,
          locked: props.attributes.lockStatus[elementGroup]
        })) : '', Object.keys(blockConfig[props.name][elementGroup]).map(function (element) {
          if (blockConfig[props.name][elementGroup][element].enabled && Object(_functions__WEBPACK_IMPORTED_MODULE_2__["showElement"])(element, hasSideElements, props.attributes.lockStatus[elementGroup], props.attributes)) {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_components__WEBPACK_IMPORTED_MODULE_3__["RangeSlider"], {
              attribute: element,
              title: help[element][0],
              blockConfig: blockConfig[props.name][elementGroup][element],
              value: props.attributes[element],
              setAttributes: props.setAttributes
            });
          }
        }));
      }
    })));
  };
}, 'withExtraControls');

var addExtraProps = function addExtraProps(saveElementProps, blockType, attributes) {
  if (!blockType || !blockConfig[blockType.name]) {
    return saveElementProps;
  }

  attributes = Object(_functions__WEBPACK_IMPORTED_MODULE_2__["getAttributesFromClass"])(blockType.name, saveElementProps.className, attributes);
  saveElementProps.className = Object(_functions__WEBPACK_IMPORTED_MODULE_2__["getClassFromAttributes"])(blockType.name, saveElementProps.className, attributes);
  return saveElementProps;
};

addFilter('blocks.registerBlockType', 'block-extras/attribute/extra', addExtraControlAttributes);
addFilter('editor.BlockEdit', 'block-extras/extra-controls', withExtraControls);
addFilter('blocks.getSaveContent.extraProps', 'block-extras/get-save-content/extra-props', addExtraProps);

/***/ }),

/***/ "@wordpress/element":
/*!******************************************!*\
  !*** external {"this":["wp","element"]} ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["element"]; }());

/***/ }),

/***/ "react":
/*!*********************************!*\
  !*** external {"this":"React"} ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["React"]; }());

/***/ })

/******/ });
//# sourceMappingURL=index.js.map