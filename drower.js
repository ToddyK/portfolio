$(function () {
    var clickEventType = ((window.ontouchstart !== null) ? 'click' : 'touchend');

    //対応するclassの付け外し処理
    $('.c-drower').on(clickEventType, function () {
        if ($(this).hasClass('js-drower__active')) {
            $(this).removeClass('js-drower__active');
            $('.c-drower__nav').removeClass('js-drower__nav-open');
            $('.c-drower__overlay').removeClass('js-drower__overlay-visible');
        } else {
            $(this).addClass('js-drower__active');
            $('.c-drower__nav').addClass('js-drower__nav-open');
            $('.c-drower__overlay').addClass('js-drower__overlay-visible');
        }
    });

    $('.c-drower__overlay').on(clickEventType, function () {
        if ($(this).hasClass('js-drower__overlay-visible')) {
            $(this).removeClass('js-drower__overlay-visible');
            $('.c-drower').removeClass('js-drower__active');
            $('.c-drower__nav').removeClass('js-drower__nav-open');
        }
    });

    $('.c-drower__link').on(clickEventType, function () {
        $('.c-drower__overlay').removeClass('js-drower__overlay-visible');
        $('.c-drower').removeClass('js-drower__active');
        $('.c-drower__nav').removeClass('js-drower__nav-open');
    });

});
