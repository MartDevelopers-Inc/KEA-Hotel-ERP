$(document).ready(function()
{"use strict";setHeader();initMenu();initSearch();initDatePicker();initCustomSelect();initGallery();initRoomsSlider();initDiscoverSlider();initTestSlider();$(window).on('resize',function()
{setHeader();setTimeout(function()
{$(window).trigger('resize.px.parallax');},375);});$(document).on('scroll',function()
{setHeader();});function setHeader()
{var logoOverlay=$('.logo_overlay');var menuOverlay=$('.menu_overlay');if($(window).scrollTop()>290)
{logoOverlay.addClass('scrolled');menuOverlay.addClass('scrolled');}
else
{logoOverlay.removeClass('scrolled');menuOverlay.removeClass('scrolled');}}
function initMenu()
{if($('.menu').length&&$('.hamburger').length)
{var menu=$('.menu');var hamburger=$('.hamburger');hamburger.on('click',function()
{menu.toggleClass('active');});}}
function initSearch()
{if($('.search_panel').length)
{var panel=$('.search_panel');var btn=$('.search_button');var close=$('.search_close');btn.on('click',function()
{panel.addClass('active');});close.on('click',function()
{panel.removeClass('active');});}}
function initDatePicker()
{if($('.datepicker').length)
{var datePickers=$('.datepicker');datePickers.each(function()
{var dp=$(this);var placeholder=dp.data('placeholder');dp.val(placeholder);dp.datepicker();});}}
function initCustomSelect()
{var x,i,j,selElmnt,a,b,c;x=document.getElementsByClassName("custom-select");for(i=0;i<x.length;i++)
{selElmnt=x[i].getElementsByTagName("select")[0];a=document.createElement("DIV");a.setAttribute("class","select-selected");a.innerHTML=selElmnt.options[selElmnt.selectedIndex].innerHTML;x[i].appendChild(a);b=document.createElement("DIV");b.setAttribute("class","select-items select-hide");for(j=1;j<selElmnt.length;j++)
{c=document.createElement("DIV");c.innerHTML=selElmnt.options[j].innerHTML;c.addEventListener("click",function(e)
{var y,i,k,s,h;s=this.parentNode.parentNode.getElementsByTagName("select")[0];h=this.parentNode.previousSibling;for(i=0;i<s.length;i++)
{if(s.options[i].innerHTML==this.innerHTML)
{s.selectedIndex=i;h.innerHTML=this.innerHTML;y=this.parentNode.getElementsByClassName("same-as-selected");for(k=0;k<y.length;k++)
{y[k].removeAttribute("class");}
this.setAttribute("class","same-as-selected");break;}}
h.click();});b.appendChild(c);}
x[i].appendChild(b);a.addEventListener("click",function(e)
{e.stopPropagation();closeAllSelect(this);this.nextSibling.classList.toggle("select-hide");this.classList.toggle("select-arrow-active");});}
function closeAllSelect(elmnt)
{var x,y,i,arrNo=[];x=document.getElementsByClassName("select-items");y=document.getElementsByClassName("select-selected");for(i=0;i<y.length;i++)
{if(elmnt==y[i])
{arrNo.push(i)}
else
{y[i].classList.remove("select-arrow-active");}}
for(i=0;i<x.length;i++)
{if(arrNo.indexOf(i))
{x[i].classList.add("select-hide");}}}
document.addEventListener("click",closeAllSelect);}
function initGallery()
{if($('.gallery_slider').length)
{var gallerySlider=$('.gallery_slider');gallerySlider.owlCarousel({items:4,loop:true,autoplay:true,nav:false,dots:false,smartSpeed:1200,margin:30,responsive:{0:{items:1},481:{items:2,margin:20},768:{items:3,margin:30},992:{items:4}}});}}
function initRoomsSlider()
{if($('.rooms_slider').length)
{var roomsSlider=$('.rooms_slider');roomsSlider.owlCarousel({items:1,loop:true,autoplay:true,nav:false,smartSpeed:1200});}}
function initDiscoverSlider()
{if($('.discover_slider').length)
{var discoverSlider=$('.discover_slider');discoverSlider.owlCarousel({items:3,loop:true,autoplay:true,dots:false,nav:false,smartSpeed:1200,responsive:{0:{items:1},768:{items:2},1200:{items:3}}});}}
function initTestSlider()
{if($('.testimonials_slider').length)
{var testSlider=$('.testimonials_slider');testSlider.owlCarousel({items:1,loop:true,autoplay:true,nav:false,smartSpeed:1200});}}});