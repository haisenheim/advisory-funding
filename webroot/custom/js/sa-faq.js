$(function(){
    $('.js-sa-faq').click(function(){
        $(this).toggleClass('--active');
        $(this).find('.js-sa-faq_response').stop(true).slideToggle();
    })
});
