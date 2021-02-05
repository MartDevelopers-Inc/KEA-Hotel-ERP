$(document).ready(function()
{"use strict";var ctrl=new ScrollMagic.Controller();setHeader();initMenu();initSearch();initDatePicker();initCustomSelect();initMilestones();$(window).on('resize',function()
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
function initMilestones()
{if($('.milestone_counter').length)
{var milestoneItems=$('.milestone_counter');milestoneItems.each(function(i)
{var ele=$(this);var endValue=ele.data('end-value');var eleValue=ele.text();var signBefore="";var signAfter="";if(ele.attr('data-sign-before'))
{signBefore=ele.attr('data-sign-before');}
if(ele.attr('data-sign-after'))
{signAfter=ele.attr('data-sign-after');}
var milestoneScene=new ScrollMagic.Scene({triggerElement:this,triggerHook:'onEnter',reverse:false}).on('start',function()
{var counter={value:eleValue};var counterTween=TweenMax.to(counter,4,{value:endValue,roundProps:"value",ease:Circ.easeOut,onUpdate:function()
{document.getElementsByClassName('milestone_counter')[i].innerHTML=signBefore+counter.value+signAfter;}});}).addTo(ctrl);});}}});