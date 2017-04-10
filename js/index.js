var navBar=$(".navBar");

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $('nav').stop().animate({height: "80px"},250);
        }
        else {
            $('nav').stop().animate({height: "120px"},250);
        }
        navBar.toggleClass("colorChange", $(this).scrollTop() > 10)
    });
});