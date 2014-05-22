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

  
var AnsonKaoFunctions = {
  
  mind_map_toggle: function( $clicked_element ) {
    $("#mind-map").toggleClass("collapsed");
    $("#background-image").toggleClass("mind-map-expanded");
    $clicked_element.find("span").toggleClass("glyphicon-chevron-down glyphicon-remove");
  }
  
};

  
var AnsonKaoModules = {
  
  // All pages
  common: {
    init: function() {
      
      // Mind-map toggle
      $(".js-mind-map-toggle").click(function(){
        AnsonKaoFunctions.mind_map_toggle( $(this) );
        return false;
      });
      
      // Disable incomplete links (will automatically enable once I give them a destination!)
      $("a[href='']").click(function(){
        return false;
      });
      
    }
  },
  
  // Home page
  home: {
    init: function() {
      
      // Show the mind on load at home page
      //AnsonKaoFunctions.mind_map_toggle( $(".js-mind-map-toggle") );
      
    }
  }
  
};

  
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = AnsonKaoModules;
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

  
})(jQuery);
