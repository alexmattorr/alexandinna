(function ($) {
  var mobileNav = {
    toggleOpen: function() {
      var menu = $('.mobile-nav-wrap'),
          openBtn = $('.nav-open'),
          closeBtn = $('.nav-close'),
          open = 'is-open',
          timing = 150;

      openBtn.click(function() {
        menu.fadeIn(timing);
        setTimeout(function() {
          menu.addClass(open);
        }, timing);
      });

      closeBtn.click(function() {
        menu.removeClass(open);
        setTimeout(function() {
          menu.fadeOut(timing);
        }, timing);
      });
    },

    init: function () {
      mobileNav.toggleOpen();
    }
  };

  $(document).ready(function () {
    mobileNav.init();
  });
})(jQuery);