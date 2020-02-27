// JavaScript Document
/* jslint browser:true */
"use strict";
//let found = false;
//(function () {
//let elements = document.querySelectorAll(".menu li a");
//let getPageName = function (str) {
//    let queryIgnore = /\/+|[?\#].*$/;
//    let parts = str.split(queryIgnore);
//    let pageName;
//    while (!pageName && parts.length) pageName = parts.pop();
//    return pageName;
//};
//let setParent = function (element) {
//    let listElement = element.parentNode;
//    if (listElement.tagName == "UL" && listElement.id != 'menu') {
//        listElement.parentNode.classList.add("parent");
//    }
//};
//let pageName = getPageName(document.location.href);
////console.log(pageName)
//// if (pageName !== ""){
//    for (let i = 0, len = elements.length; i < len; ++i) {
//        let element = elements[i];
//        let parent = element.parentNode;
//
//        if (getPageName(element.getAttribute("href")) == pageName) {
//            parent.classList.add("active");
//            setParent(parent);
//        }
//        else {
//            parent.classList.remove("active");
//        }
//    }
//// }
//if(pageName == "3740.coberapps.com") {
//    elements[0].parentNode.className="active";
//}
//})();

//function toggleMenu() {
//    document.getElementById("hamburgerBtn").classList.toggle("open");
//    document.getElementById("primaryNav").classList.toggle("open");
//}
//var x = document.getElementById('hamburgerBtn');
//x.onclick = toggleMenu;

function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("menu-main-menu").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

//try this for parent link removed
$(window).load( function() {
     $('#nav > ul:first-child > li > a').removeAttr('href');
});