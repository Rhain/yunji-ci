function show_page_for_backend(page_url, e) {
    $('.dashboard-right').show();
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
    show_page_for_backend('admin/view');
});



