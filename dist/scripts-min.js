"use strict";var scrollDirection=function(){var s=0;$(window).on("scroll",function(){var e=$(this).scrollTop();e<s?($("body").removeClass("hidden"),$("body").addClass("scrolledUp"),$("body").removeClass("scrolledDown")):($("body").removeClass("scrolledUp"),$("body").addClass("scrolledDown")),s=e})},goToSection__scroll=function(e,s,t,l,i){var n=$(window).scrollTop(),a=$(e).offset().top;a<n?setTimeout(function(){$("html, body").animate({scrollTop:a-s},l)},i):setTimeout(function(){$("html, body").animate({scrollTop:a-t},l)},i)},stickyPosition=function(e,s,t){var l=$(e),e=$(".l-nav");!e.hasClass("is-scrolled")||e.hasClass("is-hidden")?l.css("top",s):l.css("top",t)},cFavoriteToggle=document.querySelectorAll(".c-favoriteToggle");cFavoriteToggle.forEach(function(s){s.addEventListener("click",function(){s.classList.toggle("is-active");var e=parseInt(s.querySelector(".c-favoriteToggle__count").innerText);s.classList.contains("is-active")?s.querySelector(".c-favoriteToggle__count").innerText=e+1:s.querySelector(".c-favoriteToggle__count").innerText=e-1})});var laures={dev:"Web Full Stack",mood:"Sarcasm",shirt:"On the head",political:"Libertarian",tax:"Is theft",taxEvasion:"Self Defense",favoritePhrase:"Dont tread on me"};$(".js-select2__multiple").select2({placeholder:"Selecione"}),$(".js-select2__oneOption").select2({placeholder:"Selecione"}),$(".c-form__field.--select2 label").on("click",function(){var e="#"+(e=$(this).closest("li").find("select").attr("id"));$(e).select2("open")}),$(".c-form__field *").on("click",function(e){$(".c-form__field").removeClass("is-active"),$(this).closest("li").addClass("is-active")});var cForm__selects=document.querySelectorAll(".c-form select");cForm__selects.forEach(function(t){t.addEventListener("click",function(){t.parentElement.parentElement.classList.add("is-active")}),t.addEventListener("change",function(e){var s=t.children[t.selectedIndex].text;t.closest(".c-form__field").querySelectorAll(".inputBox")[0].children[0].value=s,t.parentElement.parentElement.classList.remove("is-active")}),t.addEventListener("focusout",function(){t.parentElement.parentElement.classList.remove("is-active")})});var cForm__attach=document.querySelectorAll(".c-form .inputAttach");cForm__attach.forEach(function(s){s.addEventListener("change",function(){var e=s.value.split("fakepath")[1];s.closest(".--file").querySelectorAll(".inputText")[0].value=e})});var cForm__rangeSlider=document.querySelectorAll(".c-form .rangeSlider"),cForm__rangeSliderBar=".rangeSlider__range",cForm__rangeSliderValue=".rangeSlider__value";cForm__rangeSlider.forEach(function(e){e.querySelectorAll(cForm__rangeSliderValue).forEach(function(e){var s=e.previousElementSibling.getAttribute("value");e.innerHTML=s}),e.querySelectorAll(cForm__rangeSliderBar).forEach(function(e){e.addEventListener("input",function(){e.nextElementSibling.innerHTML=this.value})})});var cForm__rangeInputs=document.querySelectorAll(".c-form .--range");cForm__rangeInputs.forEach(function(e){var t=e.querySelectorAll(".min input"),l=e.querySelectorAll(".max input"),i=+t[0].getAttribute("min"),n=+l[0].getAttribute("max");l[0].setAttribute("min",i),t[0].setAttribute("max",n),t.forEach(function(s){s.addEventListener("focusout",function(){var e=s.value;(e<i||n<e)&&(s.value=i)}),s.addEventListener("keyup",function(){var e=s.value;l[0].setAttribute("min",e)})}),l.forEach(function(s){s.addEventListener("focusout",function(){var e=s.value;(e<t[0].value||n<e)&&(s.value=n)})})});var cHamburguer=document.querySelectorAll(".c-hamburguer");cHamburguer.forEach(function(e){e.addEventListener("click",function(){e.classList.contains("is-blocked")||e.classList.toggle("is-active")})});var removeGridClass=function(e){for(var s=1;s<=12;s++)e.classList.remove("--col"+s);e.classList.remove("--colNaN")},initResponsiveGrids=function(){cResponsiveGrid.forEach(function(e,s){e.classList.add("js-responsiveGrid");var t={maxwBreaks:e.getAttribute("data-maxw-breaks").split(", ").map(Number),maxwCols:e.getAttribute("data-maxw-cols").split(", ").map(Number),initCols:parseInt(e.getAttribute("data-cols-init")),windowW:window.innerWidth},l=t.maxwBreaks.length;if(l===t.maxwCols.length)for(var i=0;i<=l;i++)t.maxwBreaks[i]>=t.windowW&&(removeGridClass(e),e.classList.add("--col"+t.maxwCols[i])),t.windowW>t.maxwBreaks[0]&&(removeGridClass(e),e.classList.add("--col"+t.initCols));else console.log("Erro na construção do grid responsivo")})},cResponsiveGrid=document.querySelectorAll(".c-responsiveGrid");window.addEventListener("load",initResponsiveGrids),window.addEventListener("resize",initResponsiveGrids);var openSubMenu,closeSubMenuReference,cSmartMenu=document.querySelectorAll(".c-smartMenu"),activeClass="is-active";cSmartMenu&&(cSmartMenu.forEach(function(e){e.classList.add("js-smartMenu"),Array.from(e.children[0].children).forEach(function(e){e.classList.add("js-smartMenu__firstSub")}),document.querySelectorAll(".c-smartMenu li").forEach(function(e){e.children[1]&&(e.classList.add("js-smartMenu__li"),e.children[0].classList.add("js-smartMenu__toggle"),e.children[1].classList.add("js-smartMenu__subMenu"))})}),(openSubMenu=document.querySelectorAll(".js-smartMenu__toggle")).forEach(function(s){s.closest(".c-smartMenu").classList.contains("--click")?s.addEventListener("click",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)}):s.addEventListener("mouseenter",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)})}),(closeSubMenuReference=document.querySelectorAll(".js-smartMenu__firstSub")).forEach(function(e){e.parentElement.parentElement.classList.contains("--vertical")||e.addEventListener("mouseleave",function(){cSmartMenu.forEach(function(e){e.classList.remove(activeClass),e.querySelectorAll("*").forEach(function(e){e.classList.remove(activeClass)})})})})),$(".c-toggleList").length&&$(".c-toggleList__header").on("click",function(){$(this).parent().toggleClass("is-active")});var navElement,navMobile,navHamburguer,closeAllNavElements,disableOverflow,enableOverflow,cSwiperClients=new Swiper(".c-swiperClients",{speed:400,spaceBetween:50,slidesPerView:"auto",navigation:{nextEl:".cSwiperClients .swiper-button-next",prevEl:".cSwiperClients .swiper-button-prev"},touchEvents:!0,autoplay:{delay:2500},centeredSlides:!0,initialSlide:2,loop:!0});$(".l-nav").length&&(navElement=$(".l-nav"),navMobile=$(".l-navMobile"),navHamburguer=$(".l-nav .c-hamburguer"),closeAllNavElements=function(){$(".c-subMenu").removeClass("is-active"),navHamburguer.removeClass("is-active")},disableOverflow=function(){$("body").addClass("u-overflowBlocked")},enableOverflow=function(){$("body").removeClass("u-overflowBlocked")},$(".js-openNavMobile").on("click",function(){navMobile.addClass("is-active"),$(".js-closeNavMobile.c-hamburguer").addClass("is-active"),disableOverflow()}),$(".js-closeNavMobile").on("click",function(){navMobile.removeClass("is-active"),navHamburguer.removeClass("is-active"),enableOverflow()}),$(window).on("load",function(e){99<$(this).scrollTop()?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled")}),$(window).on("scroll",function(){var e=$(this).scrollTop();99<e?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled"),600<e?(navElement.addClass("is-hidden"),navElement.addClass("is-middle")):(navElement.removeClass("is-hidden"),navElement.removeClass("is-middle")),e<0?(navElement.removeClass("is-hidden"),navElement.addClass("is-scrolledUp"),navElement.removeClass("is-scrolledDown")):(navElement.removeClass("is-scrolledUp"),navElement.addClass("is-scrolledDown")),navElement.hasClass("is-hidden")&&closeAllNavElements(),navElement.scrollInit=e}));var swiper__headerHome=new Swiper(".js-swiperHeaderHome",{speed:400,spaceBetween:0,pagination:{el:".js-swiperHeaderHome .swiper-pagination",type:"bullets",clickable:!0},touchEvents:!1}),swiper__gridMobileSlider=new Swiper(".swiper__gridMobileSlider",{speed:400,init:!1,slidesPerView:3,spaceBetween:10,pagination:{el:".swiper__gridMobileSlider .swiper-pagination",type:"bullets",clickable:!0},navigation:{nextEl:".swiper__gridMobileSlider .swiper-button-next",prevEl:".swiper__gridMobileSlider .swiper-button-prev"},breakpoints:{610:{slidesPerView:1},940:{slidesPerView:2}}});$(".s-defaultGridSlider").length&&$(window).on("load",function(){900<=$(window).width()?$(".s-defaultGridSlider").removeClass("is-mobile").addClass("is-desktop"):($(".s-defaultGridSlider").addClass("is-mobile").removeClass("is-desktop"),swiper__gridMobileSlider.init())});