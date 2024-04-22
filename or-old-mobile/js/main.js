$(function() {
    $("img").unveil(200, function() {
    $(this).load(function() {
    this.style.opacity = 1;
    });
    });
});

$(function() {
    var header = $(".mobile-nav");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 67) {
            header.addClass("fixed-mobilenav");
            $(".sticky-logo-white").show();
            $(".sticky-logo-home").hide();
        } else {
            header.removeClass("fixed-mobilenav");
            $(".sticky-logo-white").hide();
            $(".sticky-logo-home").show();
        }
    });
});

$(".mobile-menu-toggle").click(function(){
    $(".mobile-menu-box").animate({width: "show"}, 100);
    $(this).addClass("menu-activated");
  });

$(".menu-close-custom").click(function(){
    $(".mobile-menu-box").animate({width: "hide"}, 100);
    $(this).removeClass("menu-activated");
  });

$(document).ready(function(){
$('.mobile-dropdown-nav').click(function(){
    $(this).find(".mobile-custom-dropdown").slideToggle(400);
    $(this).toggleClass("nav-opened");
});
});

jQuery(document).ready(function(){
    $(".otv-faqs-heading").click(function(){
       $(".otv-faqs-heading").removeClass("active");
       $(this).toggleClass("active");
    });
});

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

$("#toggle-story-content").click(function() {
  var elem = $("#toggle-story-content").text();
  if (elem == "Read More") {
    //Stuff to do when btn is in the read more state
    $("#toggle-story-content").text("Read Less");
    $(".article-content").removeClass("article-content-more");
    //$("#text").slideDown();
    $("#text").animate({height: "toggle"}, 800);
    $(this).hide();
  } else {
    //Stuff to do when btn is in the read less state
    $("#toggle-story-content").text("Read More");
    $(".article-content").addClass("article-content-more");
    $(this).hide();
  }
});

jQuery(document).ready(function(){
    $('.share-social-media-add').click(function(){
        $(this).find('.article-share-style-more').animate({width: "toggle"}, 200);
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