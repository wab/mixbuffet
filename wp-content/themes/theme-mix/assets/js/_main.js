/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

          //Scroll to top
          var offset = 500;
          var duration = 500;
          $(window).scroll(function() {
              if ($(this).scrollTop() > offset) {
                  $('.back-to-top').fadeIn(duration);
              } else {
                  $('.back-to-top').fadeOut(duration);
              }
          });
          
          $('.back-to-top').click(function(event) {
              event.preventDefault();
              $('html, body').animate({scrollTop: 0}, duration);
              return false;
          });

          // yamm 
          $(document).on('click', '.yamm .dropdown-menu', function(e) {
            e.stopPropagation();
          });

          //fancybox
          $('.fancybox').fancybox();

        }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      $('.carousel').owlCarousel({
          loop:true,
          autoplay: true,
          items:1,
          nav:false,
          autoHeight : true,
          smartSpeed : 1000
        });
      $(".nav-carousel .next").click(function(){
          $('.carousel').trigger('next.owl.carousel');
        });

      $(".nav-carousel .prev").click(function(){
          $('.carousel').trigger('prev.owl.carousel');
        });
      $('.slider-produits').owlCarousel({
          loop:true,
          items:1,
          dots:false,
          nav:false,
          autoHeight : true,
        });
      $(".nav-slider .next").click(function(){
          $('.slider-produits').trigger('next.owl.carousel');
        });

      $(".nav-slider .prev").click(function(){
          $('.slider-produits').trigger('prev.owl.carousel');
        });
    }
  },
  // About us page, note the change from about-us to about_us.
  page_template_page_slider_php: {
    init: function() {
      $('.slider').owlCarousel({
          loop:false,
          items:1,
          dots:false,
          nav:false,
          autoHeight : true,
        });
      $(".nav-slider .next").click(function(){
          $('.slider').trigger('next.owl.carousel');
        });

        $(".nav-slider .prev").click(function(){
          $('.slider').trigger('prev.owl.carousel');
        });
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
