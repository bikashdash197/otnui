$(function() {
    $("img").unveil(200, function() {
    $(this).load(function() {
    this.style.opacity = 1;
    });
    });
});


/* SEARCH IN MENU */
jQuery(document).ready(function(){
	$('.searchbox-open').click(function(){
    	$(".search-field").animate({width: "show"});
    	$(".megamenu-search-field").select();
    });
    $('.searchbox-close').click(function(){
    	$(".search-field").animate({width: "hide"});
    });
});
/* //SEARCH IN MENU */


/* MENU */
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".megamenu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 97) {
            header.addClass("fixed-megamenu");
        } else {
            header.removeClass("fixed-megamenu");
        }
    });
});
/* //MENU */