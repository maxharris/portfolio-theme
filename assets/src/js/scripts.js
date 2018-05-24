
jQuery(document).ready(function($){
  $(function() {
    var $body = $('body');
    var snap = 140;
    var $window = $(window);

    $window.on('scroll', _.throttle(function() {
      var $scroll = $window.scrollTop();

      if ($scroll >= snap) {
        $body.addClass('sticky');
      }

      else {
        $body.removeClass('sticky');
      }
    }));
  });

  // Mobile Menu Toggle
  $(function() {
    var menuBtn = $('.menu-toggle');
    var navMenu = $('#header .menu-wrap');

    menuBtn.click(function(e) {
      $(this).toggleClass('open');
      navMenu.toggleClass('open');
    });
  });
});