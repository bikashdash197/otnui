jQuery(document).ready(function(){
$(".otv-share-social-media-add").click(function(){
    //$('.article-share-style-more').hide();
    $(this).find('.otv-article-share-style-more').animate({width: "toggle"}, 200);
    $(this).find('.otv-article-share-style-more-one').animate({width: "toggle"}, 200);
});
});   
jQuery(document).ready(function(){
    $('.share-social-media-add').click(function(){
        //$('.article-share-style-more').hide();
        $(this).find('.article-share-style-more').animate({width: "toggle"}, 200);
        $(this).find('.article-share-style-more-one').animate({width: "toggle"}, 200);
    });
});