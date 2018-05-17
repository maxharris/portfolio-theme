
jQuery(document).ready(function( $ ){
  $(function() {
    var $header = $('#header');
    var snap = 60;
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
    var navMenu = $('#header .main-nav');

    menuBtn.click(function(e) {
      $(this).toggleClass('open');
      navMenu.toggleClass('open');
    });
  });
});
