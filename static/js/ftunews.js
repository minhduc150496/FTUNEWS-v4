/**
 * Created by Chuot Bach on 4/29/2016.
 */

/**
 * Initialization
 */
$(document).ready(function () {

    /* show/hide mega menu */
    $(".menu-item > a").mouseenter(function() {
        $(this).parent().children(".mega-menu").fadeIn(250);
    });
    $(".menu-item").mouseleave(function() {
        $(this).children(".mega-menu").fadeOut(250);
    });
    $(".mobi-menu .btn-harmburger").click(function() {
        $(".mobi-menu .body").slideToggle(250);
    })

/*
    $(".mega-prev").mouseenter(function() {
        var n = $(this).parent().children(".wrapper").children().length;
        var w = $(".slick-mega .item").width * n;
        var max = w - $(this).parent().width;
        var min = 0 - $(this).parent().width;
        var cur = $(".slide").css('-webkit-transform').split(/[()]/);
        if (cur + delta <= max) cur -= delta;
        $(this).parent().children(".wrapper").css("transform","translateX("+cur+"px)");
    });
    $(".mega-next").mouseenter(function() {
        //alert($(this).parent().css("width"));
        var n = $(this).parent().children(".wrapper").children().length;
        var w = $(".slick-mega .item").width() * n;
        var max = w - $(this).parent().width();
        var min = 0 - $(this).parent().width();
        var cur = $(this).parent().children(".wrapper").css('transform').split(/[()]/);
        alert(cur);
        if (cur + delta <= max) cur += delta;
        $(this).parent().children(".wrapper").css("transform","translateX("+cur+"px)");
    });
/**/

});