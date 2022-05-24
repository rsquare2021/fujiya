"use strict";
//新着情報切替
$(function() {
$("#news01_tab ul li#news01_tab01").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$(".news01_cont").fadeOut(0).removeClass("active");
$(".news01_cont#news01_cont01").fadeIn().addClass("active");
}
});

$("#news01_tab ul li#news01_tab02").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$(".news01_cont").fadeOut(0).removeClass("active");
$(".news01_cont#news01_cont02").fadeIn().addClass("active");
}
});

$("#news01_tab ul li#news01_tab03").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$(".news01_cont").fadeOut(0).removeClass("active");
$(".news01_cont#news01_cont03").fadeIn().addClass("active");
}
});

$("#news01_tab ul li#news01_tab04").on("click", function() {
if($(this).hasClass('active')){
} else {
$("#news01_tab ul li").removeClass("active");
$(this).toggleClass("active");
$(".news01_cont").fadeOut(0).removeClass("active");
$(".news01_cont#news01_cont04").fadeIn().addClass("active");
}
});
});






