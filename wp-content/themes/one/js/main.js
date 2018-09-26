jQuery(window).bind("load", function() {
  mobile_size_1200 = window.matchMedia( "(max-width: 1200px)" ).matches;

  var c, currentScrollTop = 0,
  navbar = jQuery('header');
  navbar_height = navbar.height()+"px";
  //instead_menu = jQuery('.instead_menu');

  jQuery(window).scroll(function () {

    var a = jQuery(window).scrollTop();
    var b = navbar.height();

    currentScrollTop = a;
    //console.log(a);

    if (a >= 100) {
      if (c < currentScrollTop && a > b + b) {
        if (!mobile_size_1200) {
          jQuery('header').addClass("js_menu_display_none");
        }else{}
      } else if (c > currentScrollTop && !(a <= b)) {
        if (!mobile_size_1200) {
          jQuery('header').removeClass("js_menu_display_none");
        }else{}
      }
      c = currentScrollTop;
    } else {
      if (!mobile_size_1200) {
        jQuery('header').removeClass("js_menu_display_none");
      }else{}
    }

  });
});