$(function(){
    $('.js-globalNavBtn').click(function(){
        $('.headerNav__globalNavBtn').toggleClass('js-btnRotate');
        $('.globalNav').toggleClass('js-open');
        if ($(".globalNav").hasClass("js-open")){
            $(".globalNav").fadeIn();
        }else{
            $(".globalNav").fadeOut();
        };
    });
    
    $('.globalNav__link').click(function(){
        $('.globalNav').toggleClass('js-open');
        $(".globalNav").fadeOut();
        $('.headerNav__globalNavBtn').toggleClass('js-btnRotate');
    });
});