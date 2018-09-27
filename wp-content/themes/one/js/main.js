jQuery(window).bind("load", function() {
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

  //========================== mobile size

  if (mobile_size_1200) {

    jQuery('.j_mobile_margin').each(function (i, el) {
      var this_ = jQuery(this);
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

});