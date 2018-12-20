$(window).scroll(function () {
    if ($(document).scrollTop() == 0) {
        $('header').removeClass('tiny');
        $('#title').removeClass('shrinky');
        $('body').removeClass('topless');
    } else {
        $('header').addClass('tiny');
        $('#title').addClass('shrinky');
        $('body').addClass('topless');
    }
});