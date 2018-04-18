// Use the below structure to start out your custom jQuery functions

(function($) {
  var sliders = {

    cards: function() {
      var slider = $('.mobile-cards-slider'),
          w = window.innerWidth;

      if(w <= 650) {
        slider.slick({
          centerMode: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true
        });
      }
    },

    gallery: function() {
      var slider = $('.gallery'),
          nav = $('.gallery-nav');

      slider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: '.gallery-nav'
      });

      nav.slick({
        slidesToShow: 7,
        slidesToScroll: 7,
        centerMode: true,
        arrows: false,
        asNavFor: '.gallery',
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 5
            }
          },
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
        ]
      });
    },

    hero: function() {
      var slider = $('.hero-slider');
      
      slider.slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: true,
        fade: true,
        dots: true
      });
    },

    init: function() {
      sliders.cards();
      sliders.gallery();      
      sliders.hero();
    }
  };

  $(document).ready(function() {
    sliders.init();
  });
})(jQuery);