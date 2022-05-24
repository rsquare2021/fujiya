"use strict";
/*home_slide01*/
$(function() {
var sliderType;
var breakpoint = 767;
var slider = $('#home_slide01 ul').bxSlider();

$(window).on('load resize', function() {
sliderSet();
});

function sliderSet() {
var windowWidth = $(window).width();
if (windowWidth > breakpoint) {
slider.reloadSlider(pcOption);
} else if (windowWidth <= breakpoint) {
slider.reloadSlider(spOption);
}
}

var windowWidth = $(window).width();
var slide_img = windowWidth * 1;

var spOption = {
auto: true,
controls: true,
pause: 3600,
speed: 600,
pager:true,
infiniteLoop: true,
preloadImages: "all",
minSlides: 3,
maxSlides: 3,
moveSlides: 1,
slideWidth: slide_img,
slideMargin: 0,
prevText:'',
nextText:'',
touchEnabled:true,
onSlideBefore: function(x){
this.stopAuto();
this.startAuto();
},
}
var pcOption = {
auto: true,
controls: true,
pause: 3600,
speed: 600,
pager:true,
infiniteLoop: true,
preloadImages: "all",
minSlides: 3,
maxSlides: 3,
moveSlides: 1,
slideWidth: 1200,
slideMargin: 0,
prevText:'',
nextText:'',
touchEnabled:true,
onSlideBefore: function(x){
this.stopAuto();
this.startAuto();
},
}
});


/*home_slide02*/
$(function() {
var sliderType;
var breakpoint = 767;
var slider = $('#home_slide02 ul').bxSlider();

$(window).on('load resize', function() {
sliderSet();
});

function sliderSet() {
var windowWidth = $(window).width();
if (windowWidth > breakpoint) {
slider.reloadSlider(pcOption);
} else if (windowWidth <= breakpoint) {
slider.reloadSlider(spOption);
}
}

var windowWidth = $(window).width();
var slide_img = windowWidth * 1;

var spOption = {
auto: true,
controls: true,
pause: 3600,
speed: 600,
pager:true,
infiniteLoop: true,
preloadImages: "all",
minSlides: 3,
maxSlides: 3,
moveSlides: 1,
slideWidth: slide_img,
slideMargin: 0,
prevText:'',
nextText:'',
touchEnabled:true,
onSlideBefore: function(x){
this.stopAuto();
this.startAuto();
},
}
var pcOption = {
auto: true,
controls: true,
pause: 3600,
speed: 600,
pager:true,
infiniteLoop: true,
preloadImages: "all",
minSlides: 5,
maxSlides: 5,
moveSlides: 1,
slideWidth: 380,
slideMargin: 0,
prevText:'',
nextText:'',
touchEnabled:true,
onSlideBefore: function(x){
this.stopAuto();
this.startAuto();
},
}
});


//新着情報切替
$(function() {
$("#home_news01_tab ul li#home_news01_tab01").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#home_news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#home_news01 .home_news01_cont").fadeOut(0).removeClass("active");
$("#home_news01 .home_news01_cont#home_news01_cont01").fadeIn().addClass("active");
}
});

$("#home_news01_tab ul li#home_news01_tab02").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#home_news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#home_news01 .home_news01_cont").fadeOut(0).removeClass("active");
$("#home_news01 .home_news01_cont#home_news01_cont02").fadeIn().addClass("active");
}
});

$("#home_news01_tab ul li#home_news01_tab03").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#home_news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#home_news01 .home_news01_cont").fadeOut(0).removeClass("active");
$("#home_news01 .home_news01_cont#home_news01_cont03").fadeIn().addClass("active");
}
});

$("#home_news01_tab ul li#home_news01_tab04").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#home_news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#home_news01 .home_news01_cont").fadeOut(0).removeClass("active");
$("#home_news01 .home_news01_cont#home_news01_cont04").fadeIn().addClass("active");
}
});
});






