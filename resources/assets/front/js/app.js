$(window).on('load', function () {
  if ($('.preloader').length) {
    $('.preloader').remove();
  }
});


var app = document.querySelector('.app');
var main = document.querySelector('main');
var menuBtn = document.getElementById("burgerBtn");
var isMobile = false;
var isMenuOpen = false;

function updateIsMobile() {
  isMobile = window.innerWidth <= 992;
}

updateIsMobile();

window.addEventListener('resize', function() {
  updateIsMobile();

  // Check if the menu is open before adjusting styles
  if (isMenuOpen) {
    if (isMobile) {
      app.style.height = '100vh';
    } else {
      app.style.height = 'auto';
    }
  }

  // Toggle class based on isMobile
  app.classList.toggle('menuAnimate', isMenuOpen && isMobile);
});

menuBtn.addEventListener('click', function() {
  // Toggle the 'active' class on body
  document.body.classList.toggle('active');

  // Toggle the 'menuAnimate' class on app
  app.classList.toggle('menuAnimate');

  // Update the isMenuOpen variable
  isMenuOpen = !isMenuOpen;

  // Adjust app styles based on isMenuOpen and isMobile
  if (isMenuOpen && isMobile) {
    app.style.height = '100vh';
  } else {
    setTimeout(function() {
      app.style.height = 'auto';
    }, 300);
  }
});

$(document).ready(function(){

  $('.dropdown').off('show.bs.dropdown').on('show.bs.dropdown', function () {
    console.log("open")
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });
  
  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').off('hide.bs.dropdown').on('hide.bs.dropdown', function () {
    console.log("hide")
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
})

if (typeof Fancybox !== 'undefined') {
  Fancybox.bind('[data-fancybox]', {
      compact: false,
      Carousel: {},
      Toolbar: false,
      Thumbs: false
  });
}
