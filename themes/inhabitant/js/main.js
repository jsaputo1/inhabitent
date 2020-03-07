(function($) {
  console.log('main 1 working');

  $navHeight = 700;

  console.log($navHeight);

  $(window).on('scroll', function() {
    if (window.pageYOffset > $navHeight) {
      $('nav').addClass('main-menu2');
      $('nav').removeClass('main-menu');
      $('.nav-logo3').css('display', 'block');
      $('.nav-logo').hide();
    } else {
      $('nav').removeClass('main-menu2');
      $('nav').addClass('main-menu');
      $('.nav-logo3').css('display', 'none');
      $('.nav-logo').show();
    }
  });
})(jQuery);
