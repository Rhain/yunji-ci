function show_page_for_backend(page_url, e) {
    $('.dashboard-right').show();
    $('.dashboard-right').html();
    $(".dashboard-right").load(page_url, function (response, status, xhr) {

    });
}
$(document).on('click', '.navigation li', function (e) {
    if (!$(this).hasClass("navigation__active")) {
        jQuery('.navigation li.navigation__active').removeClass('navigation__active');
        jQuery(this).addClass("navigation__active");
    }
});
$(window).on('load', function () {
 //   show_page_for_backend('admin/view');
 if(window.location.href.indexOf("order/view") > -1 || window.location.href.indexOf("order/preparePay") > -1) {
    jQuery('.navigation li.navigation__active').removeClass('navigation__active');
    jQuery('.navigation li.order_menu').addClass("navigation__active");
 }
 if(window.location.href.indexOf("admin/view") > -1) {
    jQuery('.navigation li.navigation__active').removeClass('navigation__active');
    jQuery('.navigation li.index_menu').addClass("navigation__active");
 }
 if(window.location.href.indexOf("admin/settings") > -1 || window.location.href.indexOf("auth/change_password") > -1) {
    jQuery('.navigation li.navigation__active').removeClass('navigation__active');
    jQuery('.navigation li.setting_menu').addClass("navigation__active");
 }
 if(window.location.href.indexOf("promo/view") > -1 ) {
    jQuery('.navigation li.navigation__active').removeClass('navigation__active');
    jQuery('.navigation li.promo_menu').addClass("navigation__active");
 }
});



