(function($) {
  $navHeight = 700;
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
