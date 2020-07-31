$(document).ready(function() {

    /* jquery height */
    $(function() {
        $('.wrap-root .box').matchHeight();
    });
    $(function() {
        $('.life .wrap-content .box').matchHeight();
    });

    /* slider */
    $(".slider-wrap").slick({
        arrows: false,
        centerMode: true,
        centerPadding: 0,
        infinite:true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        fade:true,
        touchMove: false,
        swipe: false
    });

    /* pagetop */
    $(function() {
        var topBtn = $('#page-top');
        topBtn.hide();
        //スクロールが100に達したらボタン表示
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        //スクロールしてトップ
        topBtn.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });



});
