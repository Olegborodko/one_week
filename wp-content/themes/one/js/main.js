jQuery(window).bind("load", function() {

  //========================= menu
  mobile_size_1200 = window.matchMedia( "(max-width: 1200px)" ).matches;

  var c, currentScrollTop = 0;
  var navbar = jQuery('header');
  //navbar_height = navbar.height()+"px";

  jQuery(window).scroll(function () {

    var a = jQuery(window).scrollTop();
    var b = navbar.height();

    currentScrollTop = a;

    if (a >= 100) {
      if (c < currentScrollTop && a > b + b) {
        if (!mobile_size_1200) {
          navbar.addClass("js_menu_display_none");
        }else{}
      } else if (c > currentScrollTop && !(a <= b)) {
        if (!mobile_size_1200) {
          navbar.removeClass("js_menu_display_none");
        }else{}
      }
      c = currentScrollTop;
    } else {
      if (!mobile_size_1200) {
        navbar.removeClass("js_menu_display_none");
      }else{}
    }

  });

  //========================== close menu and sub-menu if click on document
  jQuery(document).on('click',function (e){
    if (event.target.id !== "js_i_menu" && event.target.id !=="js_i_menu_button") {
      jQuery("header nav.main-navigation").removeClass("toggled");
      jQuery("header div.button-menu-toggle").attr("aria-expanded", "false");
      jQuery("header ul#primary-menu").attr("aria-expanded", "false");
      jQuery("#primary-menu li").each(function(i,el) {
        jQuery(el).removeClass("focus");
      });
    }
  });

  //========================== mobile size
  if (mobile_size_1200) {
    jQuery('.js_mobile_margin').each(function (i, el) {
      var this_ = jQuery(el);
      var attr_top = this_.attr('data-m-top');
      var attr_bottom = this_.attr('data-m-bottom');
      var attr_height = this_.attr('data-m-minh');
      if (attr_top.length > 0) {
        this_.css('margin-top', attr_top);
      }
      if (attr_bottom.length > 0) {
        this_.css('margin-bottom', attr_bottom);
      }
      if (attr_height && attr_height.length > 0) {
        this_.css('min-height', attr_height);
      }
    });
  }

  //=========================== animation on scroll
  ScrollReveal().reveal('.animated',{
  delay: 0,
  distance: '0px',
  duration: 600,
  easing: 'cubic-bezier(0.5, 0, 0, 1)',
  interval: 0,
  opacity: 0,
  origin: 'bottom',
  rotate: {
    x: 0,
    y: 0,
    z: 0
  },
  scale: 1,
  cleanup: true,
  container: document.documentElement,
  desktop: true,
  mobile: true,
  reset: false,
  useDelay: 'always',
  viewFactor: 0.0,
  viewOffset: {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0
  },
  afterReset: function (el) {},
  afterReveal: function (el) {},
  beforeReset: function (el) {},
  beforeReveal: function (el) {
    var this_ = jQuery(el);
    var classElement = this_.attr("data-animated");
    this_.addClass(classElement);
  }
});

});