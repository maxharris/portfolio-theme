
jQuery(document).ready(function($){
  $(function() {
    var $header = $('#header');
    var snap = 50;
    var $window = $(window);

    $window.on('scroll', _.throttle(function() {
      var $scroll = $window.scrollTop();

      if ($scroll >= snap) {
        $header.addClass('sticky');
      }

      else {
        $header.removeClass('sticky');
      }

    }));
  });

  //Mobile Menu Toggle
  $(function() {
    var menuBtn = $('.menu-toggle');
    var navMenu = $('#header .menu-wrap');

    menuBtn.click(function(e) {
      $(this).toggleClass('open');
      navMenu.toggleClass('open');
    });
  });
});
