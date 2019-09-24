$(function () {
    var flag = true;

    $(document).on('touchstart', function () {
        flag = true
    });
    $(document).on('touchmove', function () {
        flag = false;
    });

    //PCかSPの判定
    var clickEventType = ((window.ontouchstart !== null) ? 'click' : 'touchend');

    $('.js-portfolio-modal').on(clickEventType, function () {
        if (flag) {
            //クリックした要素の順番を取得
            var num = $(this).index() + 1;

            //クリックした要素のp要素を取得
            var text = $(this).find('p').html();

            //クリックした要素に対応するモーダルを生成
            $('.p-portfolio').append(
                '<div class="p-portfolio__modal">' +
                '<div class="p-portfolio__close-modal">' +
                '</div>' +
                '<figure class="p-portfolio__img-container">' +
                '<img src="../portfolio/img/bg' + num + '.jpg" class="p-portfolio__img">' +
                '</figure>' +
                '<div class="p-portfolio__description">' +
                '<p>' + text + '</p>' +
                '</div>' +
                '</div>'
            );
            //生成したDOMをfadeInさせるため一度hideさせる
            $('.p-portfolio__modal').hide().fadeIn(100);
        }
    });

    $(document).on(clickEventType, '.p-portfolio__img', function () {
        if (flag) {
            //頻出するセレクタを変数に格納
            var target = '.p-portfolio__description';

            //.p-portfolio__descriptionの高さを取得
            var h = $(target).outerHeight();

            //出し入れの処理
            if ($(target).hasClass('js-portfolio__closed')) {
                $(target).css('transform', 'translateY(0)').removeClass('js-portfolio__closed');
            } else {
                $(target).css('transform', 'translateY(' + h + 'px)').addClass('js-portfolio__closed');
            }
        }
    });

    //閉じるボタンで追加したDOMを削除
    $(document).on(clickEventType, '.p-portfolio__close-modal', function () {
        if (flag) {
            $('.p-portfolio__modal').fadeOut(100).queue(function () {
                $('.p-portfolio__modal').remove().dequeue();
            });
        }
    });
});
