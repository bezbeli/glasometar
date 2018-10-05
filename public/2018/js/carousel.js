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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 38);
/******/ })
/************************************************************************/
/******/ ({

/***/ 38:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(39);


/***/ }),

/***/ 39:
/***/ (function(module, exports) {

//this will depend on way of accessing the carousel (generated by php)
//direct access to 2nd page ~ number 1 or direct access to 1st page ~ number 0
$('document').ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    hash = window.location.hash;

    if (hash != '') {
        slideIndex = parseInt(hash.substring(1)) - 1;
        $('.slider').slick('slickGoTo', slideIndex);
    } else {
        $('.slider').slick('slickGoTo', 0);
    }
});

// Hiding the first and last arrow
//http://stackoverflow.com/questions/9860436/twitter-bootstrap-carousel-access-current-index
$('document').ready(function () {

    // var current = $('.slider').slick('slickCurrentSlide');

    $('.vote-button').on('click', function () {
        $(".slider").slick('slickNext');
    });

    $('.slider').on('afterChange', function (e) {
        var currentSlide = $('.slider').slick('slickCurrentSlide');
        var totalSlides = 32;
        // console.log(currentSlide);
        var percent = 100 / totalSlides * currentSlide;
        // console.log(percent);
        window.location.hash = currentSlide + 1;
        var slideTo = $(e.relatedTarget).index();
        $('.progress-bar').css('width', percent + '%');
        hideAndZebra();
    });
});

//weight selection: hide unused questions and make zebra
function hideAndZebra() {
    hideob = {};
    shownob = {};
    showni = 0;
    $(":radio").each(function (i) {
        // console.log($(this).attr('name'));
        name = $(this).attr('name');
        if (typeof $("input[name=" + name + "]:checked").val() === 'undefined' || $("input[name=" + name + "]:checked").val() == '0') {
            name = $(this).attr('name');
            hideob[name] = true;
        } else {
            shownob[name] = true;
        }
    });

    $.each(hideob, function (index, value) {
        id = index.substr(1); //we expect something like "q13"
        $("#weightsel-row-" + id).hide();
    });
    i = 0;
    $.each(shownob, function (index, value) {
        id = index.substr(1); //we expect something like "q13"
        $("#weightsel-row-" + id).show();
        //zebra
        if (parseInt(i) % 2) cl = 'list-group-item'; // change to -dark make zebra
        else cl = 'list-group-item'; // change to -light make zebra
        $("#weightsel-row-" + id).addClass(cl);
        i++;
        showni++;
    });
    //right height
    toph = $("#top").height();
    //does not work, because it is not visible yet:
    //rowh = $(".weightsel-td:visible").outerHeight();
    //so hardcoding ... )-:
    rowh = 46;
    rown = showni;
    seth = Math.max(toph, 500 + rowh * rown);
    $("#item-last").height(seth);
}

//on load - check all radios and weights and make the active
//(hide&zebra also on load (when accessing directly or returning))
$('document').ready(function () {
    //check all radios
    for (key in user['vote']) {
        val = user['vote'][key];
        $('input[name=q' + key + '][value=' + val + ']', '#calc').prop('checked', true);
    }
    //check all selected weights
    for (key in user['weight']) {
        if (user['weight'][key]) {
            $('#c-' + key, +'#calc').prop('checked', true);
        }
    }
    // hide&zebra; also on load (when accessing directly or returning
    hideAndZebra();
    // activate the buttons (selection)
    $('.vote-button>input').each(function (i) {
        id = $(this).attr('name');
        val = $('input[name=' + id + ']:checked', '#calc').val();
        if (typeof val != "undefined" && $(this).val() == val) $(this).parent().addClass('active');
    });
});

// submit calc also by clicking on the last arrow
// document.getElementById("carousel-control-last").onclick = function() {
// document.getElementById("calc").submit();
// }

/***/ })

/******/ });