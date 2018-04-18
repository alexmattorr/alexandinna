(function($) {
  var caption = {
    toggle: function() {
      var btn = $('.caption-toggle'),
          closed = 'is-closed';

      btn.click(function() {
        console.log('clicked');
        $(this).parent().toggleClass(closed);
        $(this).next('p').slideToggle();
      });
    },

    init: function() {
      caption.toggle();
    }
  };

  $(document).ready(function () {
    caption.init();
  });
})(jQuery);