/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Search
5. Init Date Picker
6. Init Custom Select
7. Init Tabs
8. Init Sidebar Slider


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var ctrl = new ScrollMagic.Controller();

	setHeader();
	initMenu();
	initSearch();
	initDatePicker();
	initCustomSelect();
	initTabs();
	initSidebarSlider();

	$(window).on('resize', function()
	{
		setHeader();

		setTimeout(function()
		{
			$(window).trigger('resize.px.parallax');
		}, 375);
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		var logoOverlay = $('.logo_overlay');
		var menuOverlay = $('.menu_overlay');

		if($(window).scrollTop() > 290)
		{
			logoOverlay.addClass('scrolled');
			menuOverlay.addClass('scrolled');
		}
		else
		{
			logoOverlay.removeClass('scrolled');
			menuOverlay.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length && $('.hamburger').length)
		{
			var menu = $('.menu');
			var hamburger = $('.hamburger');

			hamburger.on('click', function()
			{
				menu.toggleClass('active');
			});
		}
	}

	/* 

	4. Init Search

	*/

	function initSearch()
	{
		if($('.search_panel').length)
		{
			var panel = $('.search_panel');
			var btn = $('.search_button');
			var close = $('.search_close');

			btn.on('click', function()
			{
				panel.addClass('active');
			});

			close.on('click', function()
			{
				panel.removeClass('active');
			});
		}
	}

	/* 

	5. Init Date Picker

	*/

	function initDatePicker()
	{
		if($('.datepicker').length)
		{
			var datePickers = $('.datepicker');
			datePickers.each(function()
			{
				var dp = $(this);
				// Uncomment to use date as a placeholder
				// var date = new Date();
				// var dateM = date.getMonth() + 1;
				// var dateD = date.getDate();
				// var dateY = date.getFullYear();
				// var dateFinal = dateM + '/' + dateD + '/' + dateY;
				var placeholder = dp.data('placeholder');
				dp.val(placeholder);
				dp.datepicker();
			});
		}
	}

	/* 

	6. Init Custom Select

	*/

	function initCustomSelect()
	{
		var x, i, j, selElmnt, a, b, c;
		x = document.getElementsByClassName("custom-select");
		
		for (i = 0; i < x.length; i++)
		{
			selElmnt = x[i].getElementsByTagName("select")[0];
			a = document.createElement("DIV");
			a.setAttribute("class", "select-selected");
			a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
			x[i].appendChild(a);
			b = document.createElement("DIV");
			b.setAttribute("class", "select-items select-hide");
			for (j = 1; j < selElmnt.length; j++)
			{
				c = document.createElement("DIV");
				c.innerHTML = selElmnt.options[j].innerHTML;
				c.addEventListener("click", function(e)
				{
					var y, i, k, s, h;
					s = this.parentNode.parentNode.getElementsByTagName("select")[0];
					h = this.parentNode.previousSibling;
					for (i = 0; i < s.length; i++)
					{
						if (s.options[i].innerHTML == this.innerHTML)
						{
							s.selectedIndex = i;
							h.innerHTML = this.innerHTML;
							y = this.parentNode.getElementsByClassName("same-as-selected");
							for (k = 0; k < y.length; k++)
							{
								y[k].removeAttribute("class");
							}
							this.setAttribute("class", "same-as-selected");
							break;
						}
					}
					h.click();
				});
				b.appendChild(c);
			}
			x[i].appendChild(b);
			a.addEventListener("click", function(e)
			{
				e.stopPropagation();
				closeAllSelect(this);
				this.nextSibling.classList.toggle("select-hide");
				this.classList.toggle("select-arrow-active");
			});
		}

		function closeAllSelect(elmnt)
		{
			var x, y, i, arrNo = [];
			x = document.getElementsByClassName("select-items");
			y = document.getElementsByClassName("select-selected");
			for (i = 0; i < y.length; i++)
			{
				if (elmnt == y[i])
				{
					arrNo.push(i)
				}
				else
				{
					y[i].classList.remove("select-arrow-active");
				}
			}
			for (i = 0; i < x.length; i++)
			{
				if (arrNo.indexOf(i))
				{
					x[i].classList.add("select-hide");
				}
			}
		}

		document.addEventListener("click", closeAllSelect);	
	}

	/* 

	7. Init Tabs

	*/

	function initTabs()
	{
		if($('.tab').length)
		{
			$('.tab').on('click', function()
			{
				$('.tab').removeClass('active');
				$(this).addClass('active');
				var clickedIndex = $('.tab').index(this);

				var panels = $('.tab_panel');
				panels.removeClass('active');
				$(panels[clickedIndex]).addClass('active');
			});
		}
	}

	/* 

    8. Init Sidebar Slider

	*/

	function initSidebarSlider()
	{
		if($('.sidebar_slider').length)
		{
			var sidebarSlider = $('.sidebar_slider');
			sidebarSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:true,
				autoplayTimeout:8000,
				nav:false,
				smartSpeed:1200
			});
		}
	}

});