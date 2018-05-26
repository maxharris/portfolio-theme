
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

  // Universal Toggle
  $(function() {
    var toggle = $('.js-toggle');
    var expand = toggle.parent('.js-expand');

    toggle.click(function(e) {
      $(this).toggleClass('open');
      expand.toggleClass('open');

      // if (expand.is(':hidden')) {
      //   expand.show('slow');
      // } else {
      //   .expand.slideUp();
      // }
    });
  });
});