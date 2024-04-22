jQuery(document).ready(function(){
  var weather_class = $("#select-weather option:selected").val();
  $("#select-weather").addClass(weather_class);
  $("#select-weather").change(function(){
     $("#select-weather").attr('class', '');
     var weather_class = $("#select-weather option:selected").val();
     $("#select-weather").addClass(weather_class);
  });
});
jQuery(document).ready(function(){
$(".otv-share-social-media-add").click(function(){
    //$('.article-share-style-more').hide();
    $(this).find('.otv-article-share-style-more').animate({width: "toggle"}, 200);
    $(this).find('.otv-article-share-style-more-one').animate({width: "toggle"}, 200);
});
});
jQuery(document).ready(function() {
$('.sidemenubtn').click(function() {
    $('.hamburger-nav').animate({width: "show"}, 200);
     $("body").addClass("comment-active");
});
$('.close-hamburger').click(function() {
    $('.hamburger-nav').animate({width: "hide"}, 200);
     $("body").removeClass("comment-active");
});
$('.breaking-news-close').click(function() {
    $(".breaking-news").hide();
});
$('#playButton').click(function() {
    $('#homeCarousel').carousel('cycle');
    $(this).hide();
    $("#pauseButton").show();
});
$('#pauseButton').click(function() {
    $('#homeCarousel').carousel('pause');
    $(this).hide();
    $("#playButton").show();
});
/* SEARCH IN MENU */
jQuery(document).ready(function() {
    $('.searchbox-open').click(function() {
        $(".search-field").animate({
            width: "show"
        });
        $(".megamenu-search-field").select();
    });
    $('.searchbox-close').click(function() {
        $(".search-field").animate({
            width: "hide"
        });
    });
});
/* //SEARCH IN MENU */
/* MENU */
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".megamenu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 365) {
            header.addClass("fixed-megamenu");
        } else {
            header.removeClass("fixed-megamenu");
        }
    });
});
/* //MENU */
//NEW JS BY BIKASH STRAT
var src = $('.main-logo-img').attr("src");
var srcicon = $('.darkmode-svg-icon').attr("src");
$('.darkmode-btn').click(function() {
    var logosrc1 = $('.main-logo-img').attr("src");
    var logosrc2 = "logo.svg";
    var logosrc3 = "dark-logo.svg";
    if (logosrc1.indexOf(logosrc2) != -1) {
        $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
    }
    if (logosrc1.indexOf(logosrc3) != -1) {
        $('.main-logo-img').attr("src", src.replace("dark-logo.svg", "logo.svg"));
    }
    //DARKMODE ICON
    var logosrcicon1 = $('.darkmode-svg-icon').attr("src");
    var logosrcicon2 = "fa-moon.svg";
    var logosrcicon3 = "fa-sun.svg";
    if (logosrcicon1.indexOf(logosrcicon2) != -1) {
        $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-moon.svg", "fa-sun.svg"));
    }
    if (logosrcicon1.indexOf(logosrcicon3) != -1) {
        $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-sun.svg", "fa-moon.svg"));
    }
});
/* DARKMODE BTN */
var darkbtntest = $(".darkmode-btn-text").text();
$('.darkmode-btn').click(function() {
    var darkbtntest1 = $(".darkmode-btn-text").text();
    var darkbtntest2 = "DARK MODE";
    var darkbtntest3 = "LIGHT MODE";
    if (darkbtntest1.indexOf(darkbtntest2) != -1) {
        $(".darkmode-btn-text").text("LIGHT MODE");
        $(".darkmode-icon").removeClass("fa-moon");
        $(".darkmode-icon").addClass("fa-sun");
    }
    if (darkbtntest1.indexOf(darkbtntest3) != -1) {
        $(".darkmode-btn-text").text("DARK MODE");
        $(".darkmode-icon").removeClass("fa-sun");
        $(".darkmode-icon").addClass("fa-moon");
    }
});
/* //DARKMODE BTN */
/* DARKTHEME */
const btn = document.querySelector(".darkmode-btn");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
const currentTheme = localStorage.getItem("theme");
if (currentTheme == "dark") {
    document.body.classList.toggle("dark-theme");
    $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
    $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-moon.svg", "fa-sun.svg"));
    $(".darkmode-btn-text").text("LIGHT MODE");
    $(".darkmode-icon").removeClass("fa-moon");
    $(".darkmode-icon").addClass("fa-sun");
} else if (currentTheme == "light") {
    document.body.classList.toggle("light-theme");
}
btn.addEventListener("click", function() {
    if (prefersDarkScheme.matches) {
        document.body.classList.toggle("light-theme");
        var theme = document.body.classList.contains("light-theme") ?
            "light" :
            "dark";
    } else {
        document.body.classList.toggle("dark-theme");

        var theme = document.body.classList.contains("dark-theme") ?
            "dark" :
            "light";
    }
    localStorage.setItem("theme", theme);
});
/* //DARKTHEME */
//NEW JS BY BIKASH END
// unveil start
$(function() {
    $("img").unveil(200, function() {
    $(this).load(function() {
    this.style.opacity = 1;
    });
    });
});
// unveil end
});