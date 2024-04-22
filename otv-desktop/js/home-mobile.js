jQuery(function ($) {

$(document).ready(function(){
  $('.bd-ft-slide-toggle').click(function(){
      $('.ticker-show-hide').toggleClass('fa-angle-down fa-angle-up');
      $(".bd-ft-slide-sec").toggleClass('bd-ft-slide-hide');
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

$(document).ready(function(){
$('.mobile-dropdown-nav').click(function(){
    $(this).find(".mobile-custom-dropdown").slideToggle(400);
    $(this).toggleClass("nav-opened");
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

$(function() {
     $("img").unveil();
     
   $("#searchbtn").on('click', function (event) {
     var search_text=$("#megamenu-search").val();
    if(search_text!='')
        location.href=baseUrl+"search?title="+search_text;
     
  });
   $("#megamenu-search").on('keyup', function (event) {
     var search_text=$("#megamenu-search").val();
     if (event.keyCode === 13) {
        location.href=baseUrl+"search?title="+search_text;
     }
  });
    $("#searchagain").on('click', function (event) {
     var search_text=$("#searchtext").val();
    if(search_text!='')
        location.href=baseUrl+"search?title="+search_text;
     
  });
   $("#searchtext").on('keyup', function (event) {
     var search_text=$("#searchtext").val();
     if (event.keyCode === 13 && search_text!="") {
        location.href=baseUrl+"search?title="+search_text;
     }
  });
});

//NEW JS BY BIKASH STRAT
var src = $('.main-logo-img').attr("src");
$(document).ready(function() {
  $('.darkmode-btn').click(function(){
    var logosrc1 = $('.main-logo-img').attr("src");
    var logosrc2 = "logo.svg";
    var logosrc3 = "dark-logo.svg";
    if(logosrc1.indexOf(logosrc2) != -1){
     $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
    }
    if(logosrc1.indexOf(logosrc3) != -1){
     $('.main-logo-img').attr("src", src.replace("dark-logo.svg", "logo.svg"));
    }
  });
/* DARKMODE BTN */
  var darkbtntest = $(".darkmode-btn-text").text();
  $('.darkmode-btn').click(function(){
    var darkbtntest1 = $(".darkmode-btn-text").text();
    var darkbtntest2 = "Dark Mode";
    var darkbtntest3 = "Light Mode";
    if(darkbtntest1.indexOf(darkbtntest2) != -1){
     $(".darkmode-btn-text").text("Light Mode");
     $(".darkmode-icon").removeClass("fa-moon");
     $(".darkmode-icon").addClass("fa-sun");
    }
    if(darkbtntest1.indexOf(darkbtntest3) != -1){
     $(".darkmode-btn-text").text("Dark Mode");
     $(".darkmode-icon").removeClass("fa-sun");
     $(".darkmode-icon").addClass("fa-moon");
    }
  });
/* //DARKMODE BTN */
});
//NEW JS BY BIKASH END

/* DARKTHEME */
const btn = document.querySelector(".darkmode-btn");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
const currentTheme = localStorage.getItem("theme");
if (currentTheme == "dark") {
  document.body.classList.toggle("dark-theme");
  $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
  $(".darkmode-btn-text").text("Light Mode");
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
/* //DARKTHEME */




/*added by sukant */
 $(document).ready(function () {
  var href = window.location.pathname;
  var arrayhref = href.split('-');
  if (typeof arrayhref[arrayhref.length - 5] !== undefined && !isNaN(arrayhref[arrayhref.length - 5])) {
      var galleryURLArray = arrayhref;
    
    var sid = galleryURLArray[galleryURLArray.length - 1];
      
      if (sid == 1)
    return false;
      var x = $('#image_' + sid).offset().top - 1;
      $('html,body').animate({
    scrollTop: x
      }, 100);
  }
  var galleryArr = [];
  var lastScrollTop = 0;
  $(window).scroll(function () {

      var st = $(this).scrollTop();
        var scrollDown = false;
        if (st > lastScrollTop){
            scrollDown = true;
        } else {
            scrollDown = false;
        }
        lastScrollTop = st;

      var listImg = $('.photo-gallery-details');
      listImg.each(function (index, data) {
    var imgContainer = $(data).children().find('.gallery-responsive');
    var id = imgContainer.attr('data-imagenum');
    var indexEle = galleryArr.indexOf(id);



        if ($(data).isVisibleOnScreen(true)) {
        if (indexEle < 0) {
      galleryArr.push(id);
      var num = imgContainer.attr('data-imagenum');
      var urls = imgContainer.attr('data-url');
      var url = urls + '?pid=' + id;
      var title = imgContainer.attr('data-alt') + ' - Photo ' + id;
      changeGallUrl(url, title,scrollDown);
        }
    } else {
        if (indexEle > -1) {
      galleryArr.splice(indexEle, 1);
        }
    }
      });
  });
    });
    function changeGallUrl(url, title, scrollDown) {

        var path = window.location.pathname;

  if (url == path){
        return false;
    }

  

  if (history.pushState) {
      window.history.pushState({
    path: url
      }, title, url);
  }
  document.title = title;
  
  if(scrollDown){
    /*
        ga('send', {
            hitType: 'pageview',
            page: url
        });
        comscoreBeacon();
        console.log("down",'scroll down');
        */
    }
  
    }


    (function ($) {
  $.fn.isVisibleOnScreen = function (partial) {
      $(document)
      var $t = $(this),
        $w = $(window),
        viewT = $w.scrollTop(),
        viewB = viewT + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height() - 115,
        compareT = partial === true ? _bottom : _top,
        compareB = partial === true ? _top : _bottom;
      return ((compareB <= viewB) && (compareT >= viewT));
  };
    })(jQuery);

function showticker()
{
    //$('.article-slide-sec').html(data);
    var catids=$('#bottom_ticker').attr('data-catnum');
    //var status=1;
    var device='mobile';
    $.ajax({
    type: "POST",
    url: baseUrl + "bottom-ticker",
      async: true,
      dataType : "html",
      cache: true,
    data: {catids : catids,device:device},
    beforeSend: function() {
        $('#bottom_ticker').html('<img src="'+ baseUrl +'commondir/images/loader.gif" >');
    },
    success: function(result){
      //alert(result);
       $('#bottom_ticker').html(result);   
       //owl();     
    }
    });  
    return false;
}
function showweather()
{
    //$('.article-slide-sec').html(data);

    var city=window.location.pathname;
    $.ajax({
    type: "POST",
    url: baseUrl + "temperature",
      async: true,
      dataType : "html",
      cache: true,
    data: {city : city},
    beforeSend: function() {
        $('#weather').html('<img style="width:75px;margin-top:-20px" src="'+ baseUrl +'commondir/images/loader.gif" >');
    },
    success: function(result){
       $('#weather').html(result);   
          
    }
    });  
    return false;
 

}

$(function() {
    //caches a jQuery object containing the header element
    var flag=0;
    var header = $(".bd-ft-slide-sec");
    $(window).scroll(function() {

        var scroll = $(window).scrollTop();
        if (scroll >= 300) {

            header.addClass("fixed-article-slide-sec");
            if(flag==0){
            showticker();            
            flag=1;
            }

        } else {
            header.removeClass("fixed-article-slide-sec");
        }
    });
});
// }


function showmegamenu(catids,contenter){
    $.ajax({
    type: "POST",
    url: baseUrl + "mega-menu",
      async: false,
      dataType : "html",
      cache: false,
    data: {catids : catids},
    beforeSend: function() {
        $('#'+contenter).html('<img src="'+ baseUrl +'commondir/images/loader.gif" >');
    },
    success: function(result){
       $('#'+contenter).html(result);   
       //owl();     
    }
    });  
    return false;
}
function subscribe()
{
    //$('.article-slide-sec').html(data);

    var city=window.location.pathname;
    $.ajax({
    type: "POST",
    url: baseUrl + "subscription",
      async: true,
      dataType : "html",
      cache: true,
    data: {city : city},
    beforeSend: function() {
       $('#subscribe').html('<img style="width:150px;margin-left:200px" src="'+ baseUrl +'commondir/images/loader.gif" >'); 
    },
    success: function(result){
       $('#subscribe').html(result);   
          
    }
    });  
    return false;

}

function subscribeme(){
 if(!emailValidation('#semail'))
      return false; 
 if($('#male').prop("checked")!==true){
        var msg='<label class="error" for="rname">Please select at least one item</label>';
      $('#sresult').after(msg);
           return false;  
 }
    var dataString = $("#subs").serialize();
    $.ajax({
    type: "POST",
    url: baseUrl + "subscribeme",
      async: true,
      dataType : "html",
      cache: false,
    data: dataString,
    beforeSend: function() {
       $('#sresult').html('<img style="width:150px;margin-left:200px" src="'+ baseUrl +'commondir/images/loader.gif" >'); 
    },
    success: function(result){
       $('#sresult').html(result);   
    }
    });
     return false;  
}
  function emailValidation(field)
  {
    
    var fval=$.trim($(field).val());
    var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (field=='')
    {
      var msg='<label class="error" for="rname">This field is required.</label>';
      $(field).after(msg);
      $(field).focus();
      return false;
    }
    else if (!fval.match(email_regex))
    {
      var msg='<label id="ferror" class="error" for="rname">Enter valid email.</label>';
      $(field).after(msg);
      $(field).focus();
      return false;
    }    
    return true;
  }
/*end of script by sukant*/
});