$(window).on("load",function(){$(".preloader").length&&$(".preloader").remove()});var e=document.querySelector(".app");document.querySelector("main");var i=document.getElementById("burgerBtn"),n=!1,o=!1;function t(){n=window.innerWidth<=992}t();window.addEventListener("resize",function(){t(),o&&(n?e.style.height="100vh":e.style.height="auto"),e.classList.toggle("menuAnimate",o&&n)});i.addEventListener("click",function(){document.body.classList.toggle("active"),e.classList.toggle("menuAnimate"),o=!o,o&&n?e.style.height="100vh":setTimeout(function(){e.style.height="auto"},300)});$(document).ready(function(){$(".dropdown").off("show.bs.dropdown").on("show.bs.dropdown",function(){console.log("open"),$(this).find(".dropdown-menu").first().stop(!0,!0).slideDown()}),$(".dropdown").off("hide.bs.dropdown").on("hide.bs.dropdown",function(){console.log("hide"),$(this).find(".dropdown-menu").first().stop(!0,!0).slideUp()})});typeof Fancybox<"u"&&Fancybox.bind("[data-fancybox]",{compact:!1,Carousel:{},Toolbar:!1,Thumbs:!1});