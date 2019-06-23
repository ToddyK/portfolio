$(function(){

    $('.js-accordion').click(function(){
        $(this).next('div').slideToggle(500);
        $(this).find('.accordion__LRline').toggleClass('js-rotate180');
        $(this).find('.accordion__TBline').toggleClass('js-rotate270');
    });
});