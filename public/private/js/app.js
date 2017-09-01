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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(document).ready(function () {
  // portflioSlide();
  setSpecContent();
  // parallaxScroller();
  getInstagramData();
});

function portflioSlide() {

  $('.img-unit').click(function () {
    $('.portfolio-slide').css('left', '-100%');
  });

  $('.back-arrow').click(function () {
    $('.portfolio-slide').css('left', '0');
  });
}

function setSpecContent() {

  $('.img-unit').click(function () {
    var specTitle = $(this).find('p').text(),
        specImage = $(this).css('background-image');

    specImage = './' + specImage.slice(specImage.indexOf("assets"), -2);

    $('.spec-title').text(specTitle);
    $('.img-spec').attr('src', specImage);
  });
}

function parallaxScroller() {

  var windowHeight = $(document.body).height();
  var quoteHeight = $('.quote-spacing').height();
  var quoteBgTop = $('.quote-spacing').css('background-position');
  var quoteBgSize = $('.quote-spacing').css('background-size');
  var scrollage = 0;
  var quote_spacings = [];

  $('.quote-spacing').each(function (index) {
    quote_spacings.push($(this));
  });

  console.log(quote_spacings);

  console.log(quoteBgTop, windowHeight, quoteHeight, quoteBgSize);

  $(window).scroll(function () {

    scrollage = $(this).scrollTop() / windowHeight * 200;

    if ($(this).scrollTop() + $(window).height() >= quote_spacings[0].offset().top && $(this).scrollTop() <= quote_spacings[0].offset().top + quote_spacings[0].height()) {

      quote_spacings[0].css('background-position', '50% calc( 100% - ' + scrollage + '% )');
    }

    if ($(this).scrollTop() + $(window).height() >= quote_spacings[1].offset().top && $(this).scrollTop() <= quote_spacings[1].offset().top + quote_spacings[1].height()) {

      quote_spacings[1].css('background-position', '50% calc( 100% - ' + scrollage + '% )');
    }
  });
}

function getInstagramData() {

  var feed = new Instafeed({
    get: 'tagged',
    tagName: 'awesome',
    // filter: function(image) {
    //   return image.tags.indexOf('butterfly') >= 0;
    // },
    template: '<img src="{{image}}">',
    clientId: '719292b9e1724d92963648331f34afcc',
    accessToken: '509551526.719292b.bf60314a974c4f77b32d8e6cb385df83'
  });

  console.log('ok');

  feed.run();
}

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);