jQuery(function ($) {


$(".article-content iframe[src^='https://www.youtube.com']").addClass("bd-youtube-responsive");
$(".live-details-content iframe[src^='https://www.youtube.com']").addClass("bd-youtube-responsive");

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

$(document).ready(function(){
  $('.bd-ft-slide-toggle').click(function(){
      $('.ticker-show-hide').toggleClass('fa-angle-down fa-angle-up');
      $(".bd-ft-slide-sec").toggleClass('bd-ft-slide-hide');
  });
});

jQuery(document).ready(function(){
    $(".bd-readmore-btn").click(function(){
        $(".bd-readmore-text").slideToggle( "slow" );
        if ($(this).text() == "Read More") { 
            $(this).text("Read Less"); 
        } else { 
         $(this).text("Read More"); 
        }
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

jQuery(document).ready(function(){
    $(".otv-faqs-heading").click(function(){
       $(".otv-faqs-heading").removeClass("active");
       $(this).toggleClass("active");
    });
});

  $('.live-details-sidebar a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -120
        }, 1000, function() {
            $("#bk_name").focus();
          // Callback after animation
          // Must change focus!
        });
      }
    }
  });


$('#lodemore').click(function () {
  $showPostFrom = 0;
  $showPostCount = 10;
  $totalRecord = $('.live-details-start').data("count"); 
 $nid = $('.live-details-start').data("id");; 
//alert($totalRecord +' ' + $totalRecord+ '' + $allRecord );
    $postCount = $('.live-details-content:last').index() + 1;  
    //alert($postCount); 
    if ($postCount < $totalRecord){
      $showPostFrom += $showPostCount;
      //$('.load-post').show();
      $.ajax({
        type:'POST',
        url: baseUrl + 'ajax-more',
        data:{ 'action':'showPost', 'showPostFrom':$showPostFrom, 'showPostCount':$showPostCount, 'nid':$nid,'device':'mobile' },
        success:function(data){
          if(data != ''){
            $('.live-details-one').append(data).show('slow');
          }else{
            $('#lodemore').hide();
          }
        }
      });
      
    }
    else{
         $('#lodemore').hide();
    }

});

jQuery(document).ready(function(){
    $('.share-social-media-add').click(function(){
        $(this).find('.article-share-style-more').animate({width: "toggle"}, 200);
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
/*Cookie policy*/
/*
(function (window, undefined){
    "use strict";
    
    var document = window.document;
    
    function log() {
        if (window.console && window.console.log) {
            for (var x in arguments) {
                if (arguments.hasOwnProperty(x)) {
                    window.console.log(arguments[x]);
                }
            }
        }
    }
    
    function AcceptCookie() {
        if (!(this instanceof AcceptCookie)) {
            return new AcceptCookie();
        }
                
        this.init.call(this);
        
        return this;
    }
    
    AcceptCookie.prototype = {
        
        init: function () {
            var self = this;
            
            if(self.readCookie('pjAcceptCookie') == null)
            {
                self.appendCss();
                self.addCookieBar();
            }
            
            var clear_cookie_arr = self.getElementsByClass("pjClearCookie", null, "a");
            if(clear_cookie_arr.length > 0)
            {
                self.addEvent(clear_cookie_arr[0], "click", function (e) {
                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                    self.eraseCookie('pjAcceptCookie');
                    document.location.reload();
                    return false;
                });
            }
        },
        getElementsByClass: function (searchClass, node, tag) {
            var classElements = new Array();
            if (node == null) {
                node = document;
            }
            if (tag == null) {
                tag = '*';
            }
            var els = node.getElementsByTagName(tag);
            var elsLen = els.length;
            var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
            for (var i = 0, j = 0; i < elsLen; i++) {
                if (pattern.test(els[i].className)) {
                    classElements[j] = els[i];
                    j++;
                }
            }
            return classElements;
        },
        addEvent: function (obj, type, fn) {
            if (obj.addEventListener) {
                obj.addEventListener(type, fn, false);
            } else if (obj.attachEvent) {
                obj["e" + type + fn] = fn;
                obj[type + fn] = function() { obj["e" + type + fn](window.event); };
                obj.attachEvent("on" + type, obj[type + fn]);
            } else {
                obj["on" + type] = obj["e" + type + fn];
            }
        },
        createCookie: function (name, value, days){
            var expires;
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                expires = "; expires="+date.toGMTString();
            } else {
                expires = "";
            }
            document.cookie = name+"="+value+expires+"; path=/";
        },
        readCookie: function (name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1,c.length);
                }
                if (c.indexOf(nameEQ) === 0) {
                    return c.substring(nameEQ.length,c.length);
                }
            }
            return null;
        },
        eraseCookie: function (name) {
            var self = this;
            self.createCookie(name,"",-1);
        },
        appendCss: function()
        {
            var self = this;
            var cssId = 'pjAcceptCookieCss';
            if (!document.getElementById(cssId))
            {
                var head  = document.getElementsByTagName('head')[0];
                var link  = document.createElement('link');
                link.id   = cssId;
                link.rel  = 'stylesheet';
                link.type = 'text/css';
                link.href = 'https://fonts.googleapis.com/css?family=Open+Sans';
                link.media = 'all';
                head.appendChild(link);
            }
            
            var cssCode = "";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn,";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn:after { -webkit-transition: all .5s ease-in-out; -moz-transition: all .5s ease-in-out; -ms-transition: all .5s ease-in-out; -o-transition: all .5s ease-in-out; transition: all .5s ease-in-out; }";
            cssCode += "#pjAcceptCookieBar { position: fixed; bottom: 0; left: 0; z-index: 9999; overflow-x: hidden; overflow-y: auto; width: 100%; max-height: 100%; padding: 30px 0; background: #404040; font-family: 'Open Sans', sans-serif; text-align: left; }";
            cssCode += "#pjAcceptCookieBar * { padding: 0; margin: 0; outline: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarShell { width: 90%; margin: 0 auto; }";
            cssCode += "#pjAcceptCookieBar a[href^=tel] { color: inherit; }";
            cssCode += "#pjAcceptCookieBar a:focus,";
            cssCode += "#pjAcceptCookieBar button:focus { outline: unset; outline: none; }";
            cssCode += "#pjAcceptCookieBar p { font-size: 18px; line-height: 1.4; color: #fff; font-weight: 400; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarActions { padding-top: 10px; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn { position: relative; display: inline-block; height: 46px; padding: 0 30px; border: 0; background: #4285f4; font-size: 18px; line-height: 44px; color: #fff; text-decoration: none; vertical-align: middle; cursor: pointer; border-radius: 0; -webkit-appearance: none; -webkit-border-radius: 0; -webkit-transform: translateZ(0); transform: translateZ(0); -webkit-backface-visibility: hidden; backface-visibility: hidden; -moz-osx-font-smoothing: grayscale; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn:hover,";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn:focus { text-decoration: none; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn:after { position: absolute; top: 0; right: 52%; bottom: 0; left: 52%; z-index: -1; border-bottom: 4px solid #14428d; background: rgba(20, 66, 141, .3); content: ''; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn:hover:after,";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarBtn:focus:after { right: 0; left: 0; }";
            cssCode += "@media only screen and (max-width: 767px) {";
            cssCode += "#pjAcceptCookieBar { padding: 15px 0; }";
            cssCode += "#pjAcceptCookieBar .pjAcceptCookieBarShell { width: 96%; }";
            cssCode += "#pjAcceptCookieBar p { font-size: 16px; }";
            cssCode += "}";
            
            var styleElement = document.createElement("style");
            styleElement.type = "text/css";
            if (styleElement.styleSheet) {
                styleElement.styleSheet.cssText = cssCode;
            } else {
                styleElement.appendChild(document.createTextNode(cssCode));
            }
            document.getElementsByTagName("head")[0].appendChild(styleElement);
        },
        addCookieBar: function(){
            var self = this;
            var htmlBar = '';
            
            htmlBar += '<div class="pjAcceptCookieBarShell">';
            htmlBar += '<form action="#" method="post">';
            htmlBar += '<p>We use cookies to ensure that we give you the best experience on our website. <br />By closing this message, you consent to our cookies on this device in accordance with our cookie policy unless you have disabled them.</p>';
            htmlBar += '<div class="pjAcceptCookieBarActions">';
            htmlBar += '<button type="button" class="pjAcceptCookieBarBtn">I Agree!</button>';
            htmlBar += '</div>';
            htmlBar += '</form>';
            htmlBar += '</div>';
            
            var barDiv = document.createElement('div');
            barDiv.id = "pjAcceptCookieBar";
            document.body.appendChild(barDiv);
            barDiv.innerHTML = htmlBar;
            
            self.bindCookieBar();
        },
        bindCookieBar: function(){
            var self = this;
            var btn_arr = self.getElementsByClass("pjAcceptCookieBarBtn", null, "button");
            if(btn_arr.length > 0)
            {
                self.addEvent(btn_arr[0], "click", function (e) {
                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                    self.createCookie('pjAcceptCookie', 'YES', 365);
                    
                    document.getElementById("pjAcceptCookieBar").remove();
                    return false;
                });
            }
        }
    };
    
    window.AcceptCookie = AcceptCookie; 
})(window);

window.onload = function() {
    AcceptCookie = AcceptCookie();
}*/
/*Cookie policy*/
