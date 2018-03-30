// Use the below structure to start out your custom jQuery functions

(function ($) {
  var sliders = {
    hero: $('.hero-slider'),

    init: function () {
      sliders.hero.slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: true,
        fade: true,
        dots: true
      });
    },
  };

  $(document).ready(function () {
    sliders.init();
  });
})(jQuery);