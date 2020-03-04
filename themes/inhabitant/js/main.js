(function($) {
  console.log('working');

  $navHeight = $('.hero-banner').height();

  console.log($(window).height());

  // console.log(window.pageYOffset);

  $(window).on('scroll', function() {
    console.log(window.pageYOffset);
    if (window.pageYOffset > $navHeight) {
      $('nav').addClass('main-menu2');
      $('nav').removeClass('main-menu');

      // console.log('add class');
    } else {
      // $('header').removeClass('main-menu');
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
