"use strict";

//固定ヘッダーの幅/高さ調整
$(function(){
$(window).on('load resize', function(){
setTimeout(function () {
var headerHeight = $("header").outerHeight();
$('body').css('padding-top',headerHeight);
$('#h_menu').css('top',headerHeight-1);
}, 300);
});
});

//固定フッターの幅/高さ調整
//$(function(){
//$(window).on('load resize', function(){
//setTimeout(function () {
//var footerHeight = $("#h_contact").outerHeight();
//$('body').css('padding-bottom',footerHeight);
//}, 300);
//});
//});


//固定ヘッダー調整のページ内スクロール
$(function () {
$('a').click(function(){
var headerHight = $("header").outerHeight(); //ヘッダの高さ
var href= $(this).attr("href");
var target = $(href == "#" || href == "" ? 'html' : href);
var position = target.offset().top-headerHight;
$("html, body").animate({scrollTop:position}, 600, "swing");
return false;
});
});


//他ページからの固定ヘッダー調整
$(function () {
$(window).on('load', function() {
var headerHeight = $("header").outerHeight();
var url = $(location).attr('href');
if(url.indexOf("#") != -1){
var anchor = url.split("#");
var target = $('#' + anchor[anchor.length - 1]);
if(target.length){
var pos = Math.floor(target.offset().top)-headerHeight;
$("html, body").animate({scrollTop:pos}, 300);
}
}
});
});


//グロナビ
$(function() {
$("#smp_nav_btn").on("click", function() {
var headerHeight = $("header").outerHeight();
$(this).toggleClass("active");
$("#h_menu").fadeToggle();
$('#h_menu ul').css('padding-bottom',headerHeight);
});
$("#h_menu a").on("click", function() {
$("#smp_nav_btn").removeClass("active");
$("#h_menu").fadeOut();
});
});


//よくある質問
$(function() {
$("#question dl dt").on("click", function() {
$(this).toggleClass("active");
$(this).next().slideToggle();
});
});

