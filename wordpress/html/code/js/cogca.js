"use strict";

//提携店情報切替
$(function() {
$("#sec03_tab ul li#sec03_tab01").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont01").fadeIn().addClass("active");
}
});

$("#sec03_tab ul li#sec03_tab02").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont02").fadeIn().addClass("active");
}
});

$("#sec03_tab ul li#sec03_tab03").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont03").fadeIn().addClass("active");
}
});

$("#sec03_tab ul li#sec03_tab04").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont04").fadeIn().addClass("active");
}
});

$("#sec03_tab ul li#sec03_tab05").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont05").fadeIn().addClass("active");
}
});

$("#sec03_tab ul li#sec03_tab06").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont06").fadeIn().addClass("active");
}
});

$("#sec03_tab ul li#sec03_tab07").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#sec03_tab ul li").removeClass("active");
$(this).toggleClass("active");
$("#sec03 .sec03_cont").fadeOut(0).removeClass("active");
$("#sec03 .sec03_cont#sec03_cont07").fadeIn().addClass("active");
}
});
});

