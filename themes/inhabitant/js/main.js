(function($) {
  console.log('main 1 working');

  $navHeight = $('.hero-banner').height();

  $(window).on('scroll', function() {
    if (window.pageYOffset > $navHeight) {
      $('nav').addClass('main-menu2');
      $('nav').removeClass('main-menu');
    } else {
      $('nav').removeClass('main-menu2');
      $('nav').addClass('main-menu');
    }
  });
})(jQuery);

// if (window.pageYOffset > sticky) {
//   header.classList.add('sticky');
//   console.log('test');
// } else {
//   header.classList.remove('sticky');
// }
