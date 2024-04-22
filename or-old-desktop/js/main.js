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

function myFunction(flag) {
    var moreText = document.getElementById("more");
    var lessText = document.getElementById("less");
    if(flag=='more'){
        moreText.style.display = "inline";
        lessText.style.display = "none";
    }
    if(flag=='less'){
        lessText.style.display = "inline";
        moreText.style.display = "none";
        
    }
}

jQuery(document).ready(function(){
    $(".otv-faqs-heading").click(function(){
       $(".otv-faqs-heading").removeClass("active");
       $(this).toggleClass("active");
    });
});

// VIDEO MOVE START
var windowidth = jQuery(window). width();
var videoheight = $(".video-position").outerHeight();
var videoheight = $(".video-position-fixed").outerHeight();
var containerwidth = $(".container").outerWidth();
var rightmargin = (windowidth-containerwidth)/2;
if($('.video-position').length){
var videoheightoffset = $(".video-position").offset().top;
}
if($('.video-position-fixed').length){
var videoheightoffset = $(".video-position-fixed").offset().top;
}
var videoposition = videoheight+videoheightoffset;
$(function() {
    //caches a jQuery object containing the header element
    var flag=0;
    var header = $(".featured-video-active");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
var vdflag=0;
        if (scroll >= videoposition && vdflag==0) {
            vdflag++;
            $(".sticky-video-hide").show();
            $(".sticky-video-move").show();
            header.addClass("featured-video-fixed");
            // TESTING
            // TESTINg END
            if(flag==0){
            showticker();            
            flag=1;
            }
            $(".featured-video-media").attr('id', 'mydragdiv');
            $(".featured-video-media-move").attr('id', 'mydragdivheader');

        } else {
            if(vdflag==0){
            vdflag++;
            header.removeClass("featured-video-fixed");
            $(".sticky-video-hide").hide();
            $(".sticky-video-move").hide();
            $(".featured-video-media").removeAttr("style");
            $(".featured-video-media").attr('id', '');
            $(".featured-video-media-move").attr('id', '');
        }
    }

    });
});
$('.sticky-video-hide').click(function () {
    $(".featured-video-active").addClass("featured-video-hide");
    $(".featured-video-media").removeAttr("style");

    $(".bd-media-video-item-main").removeClass("bd-media-video-item");
    $(".bd-media-video-item-main").removeClass("bd-media-video-item-active");
    $(".bd-media-video-item-main").removeAttr('style');
    $(".video-main-title").animate({width: "hide"});
    $(".video-main-title").removeClass("video-main-title");

});
if($('.video-position').length){
var bdvideourl = $(".video-position")[0].src + "?autoplay=1&mute=1&cc_load_policy=1";
}
$(window).scroll(function(){
    vdoflag=0;
    if ($(window).scrollTop() >= videoheightoffset-200 && vdoflag==0) {
        vdoflag++;
       $(".video-position").attr('src', bdvideourl);
    }
});

// VIDEO PAGE
$(window).scroll(function(){
    $(".bd-media-video-item").removeAttr('style');

var vflag=0;
    if ($(window).scrollTop() >= videoheightoffset && vflag==0) {
        vflag++;
        $(".bd-media-video-item").addClass("bd-media-video-item-active");
        $(".bd-media-video-item-active").css({
                position: 'fixed',
                right: rightmargin+7.5,
                top: '40px',
                height: '211px',
                width: '300px'
        }, 300);
        $(".video-main-title").animate({width: "show"});
    } else {
        if(vflag==0){
            vflag++;
        $(".bd-media-video-item").css('position', 'relative');
        $(".bd-media-video-item").removeAttr('style');
         $(".bd-media-video-item-active").removeAttr('style');
        $(".bd-media-video-item").removeClass("bd-media-video-item-active");
        $(".video-main-title").animate({width: "hide"});
    }
    }

});
// VIDEO PAGE END
jQuery(document).ready(function(){
    $('.share-social-media-add').click(function(){
        //$('.article-share-style-more').hide();
        $(this).find('.article-share-style-more').animate({width: "toggle"}, 200);
        $(this).find('.article-share-style-more-one').animate({width: "toggle"}, 200);
    });
});


// jQuery(document).ready(function(){
//     $('.share-social-media-add').click(function(){
//         //$('.article-share-style-more').hide();
//         //$(this).find('.article-share-style-more-one').toggle();
//         $(this).find('.article-share-style-more-one').animate({width: "toggle"});
//     });
// });


jQuery(document).ready(function(){
    $('.share-social-media-add').click(function(){
        //$('.article-share-style-more').hide();
        $(this).find('.article-share-style-more').animate({width: "toggle"}, 200);
        $(this).find('.article-share-style-more-one').animate({width: "toggle"}, 200);
    });
});

$(function(){
  var tickerLength = $('.spotlight-nod .spotlight-nod-items').length;
  var tickerHeight = $('.spotlight-nod .spotlight-nod-items').outerHeight();
  $('.spotlight-nod .spotlight-nod-items:last-child').prependTo('.spotlight-nod');
  $('.spotlight-nod').css('marginTop',-tickerHeight);
  function moveTop(){
    $('.spotlight-nod').animate({
      top : -tickerHeight
    },400, function(){
     $('.spotlight-nod .spotlight-nod-items:first-child').appendTo('.spotlight-nod');
      $('.spotlight-nod').css('top','');
    });
   }
  setInterval( function(){
    moveTop();
  }, 4000);
  });
 $(".spotlight-nod-container").hover(function(){
      $(".spotlight-nod-main").toggleClass("spotlight-nod");
  });