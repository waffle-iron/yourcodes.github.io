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

var terms = ["sviluppa", "divertiti", "pubblica"];

function rotateTerm() {
    var ct = $("#rotate").data("term") || 0;
    $("#rotate").data("term", ct == terms.length -1 ? 0 : ct + 1).text(terms[ct]).fadeIn()
        .delay(2000).fadeOut(200, rotateTerm);
}
$(rotateTerm);