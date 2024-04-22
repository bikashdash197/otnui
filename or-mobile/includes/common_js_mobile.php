 /*=========== MENU =========*/
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
   /*========== //MENU ========*/
   /*================ DARKTHEME ================*/
   var src = $('.main-logo-img').attr("src");
   var srcicon = $('.darkmode-svg-icon').attr("src");
   $(document).ready(function() {
      $('.darkmode-btn').click(function(){
         //LOGO
         var logosrc1 = $('.main-logo-img').attr("src");
         var logosrc2 = "logo.svg";
         var logosrc3 = "dark-logo.svg";
         if(logosrc1.indexOf(logosrc2) != -1){
            $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
         }
         if(logosrc1.indexOf(logosrc3) != -1){
            $('.main-logo-img').attr("src", src.replace("dark-logo.svg", "logo.svg"));
         }
         //DARKMODE ICON
         var logosrcicon1 = $('.darkmode-svg-icon').attr("src");
         var logosrcicon2 = "fa-moon.svg";
         var logosrcicon3 = "fa-sun.svg";
         if(logosrcicon1.indexOf(logosrcicon2) != -1){
            $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-moon.svg", "fa-sun.svg"));
         }
         if(logosrcicon1.indexOf(logosrcicon3) != -1){
            $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-sun.svg", "fa-moon.svg"));
         }
      });
      var darkbtntest = $(".darkmode-btn-text").text();
      $('.darkmode-btn').click(function(){
         var darkbtntest1 = $(".darkmode-btn-text").text();
         var darkbtntest2 = "DARK MODE";
         var darkbtntest3 = "LIGHT MODE";
         if(darkbtntest1.indexOf(darkbtntest2) != -1){
            $(".darkmode-btn-text").text("LIGHT MODE");
            $(".darkmode-icon").removeClass("fa-moon");
            $(".darkmode-icon").addClass("fa-sun");
         }
         if(darkbtntest1.indexOf(darkbtntest3) != -1){
            $(".darkmode-btn-text").text("DARK MODE");
            $(".darkmode-icon").removeClass("fa-sun");
            $(".darkmode-icon").addClass("fa-moon");
         }
      });
   });
   $(window).scroll(function(){
      if ($(this).scrollTop() > 200) {
         $('.scrollToTop').fadeIn();
      } else {
         $('.scrollToTop').fadeOut();
      }
   });
   $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop : 0},500);
      return false;
   });
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
   btn.addEventListener("click", function () {
      if (prefersDarkScheme.matches) {
         document.body.classList.toggle("light-theme");
         var theme = document.body.classList.contains("light-theme")
         ? "light"
         : "dark";
      } else {
         document.body.classList.toggle("dark-theme");
         var theme = document.body.classList.contains("dark-theme")
         ? "dark"
         : "light";
      }
      localStorage.setItem("theme", theme);
   });
   /*================ //DARKTHEME ================*/
   /*================ UNVAIL ================*/
   $(document).ready(function() {
      $(window).scroll( function(){
         $('.content-inline-highlights').each( function(i){
            var bottom_of_element = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_element ){
                $(this).animate({'opacity':'1'},500);
            }
         }); 
      });
      $("img").unveil();
   });
   /*================ //UNVAIL ================*/
   jQuery(document).ready(function(){
$(".otv-share-social-media-add").click(function(){
    //$('.article-share-style-more').hide();
    $(this).find('.otv-article-share-style-more').animate({width: "toggle"}, 200);
    $(this).find('.otv-article-share-style-more-one').animate({width: "toggle"}, 200);
});
});