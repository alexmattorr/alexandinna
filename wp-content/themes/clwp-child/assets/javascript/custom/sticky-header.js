(function ($) {
  var sticky_header = {
    init: function () {
      stickyHeader();
    }
  };

  function debounce(func, wait, immediate) {
    var timeout;
    return function () {
      var context = this, args = arguments;
      var later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }

  function stickyHeader() {
    var $header = $('header'),
        fixed = 'is-fixed';

    var fixHeader = debounce(function() {
      if ($(window).scrollTop() >= 1) {
        $header.addClass(fixed);
      } else {
        $header.removeClass(fixed);
      }
    }, 5);
 
    window.addEventListener('scroll', fixHeader);
  }

  $(document).ready(function () {
    sticky_header.init();
  });
})(jQuery);