jQuery(function ($) {

jQuery(document).ready(function(){
    $('.live-post-update-slide-item-content').hover(function(){
        //$('.article-share-style-more').hide();
        $(this).find('ul').animate({width: "toggle"}, 200);
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
jQuery(document).ready(function(){
    $(".mobile-ft-ticker-close").click(function(){
       $(".bd-ft-slide").hide();
    });
});
$(document).ready(function(){
    $('.mobile-dropdown-nav').click(function(){
        $(this).find(".mobile-custom-dropdown").slideToggle(400);
    });
});
$(document).ready(function(){
    $('.main-nav-bd-toggle').click(function(){
        $(".bd-main-navmenu").animate({width: "toggle"}, 200);
        $('.bd-navtoggle').toggleClass('fa-bars fa-times');
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
/* //DARKMODE BTN */
});
//NEW JS BY BIKASH END
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
/* //DARKTHEME */



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



jQuery(document).ready(function(){
    $('.single-dropdown').hide();
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).show();
        $(this).addClass( "menu-active" );
        $(this).find(".single-dropdown").show();
        if($(this).attr('data-catids') && $(this).attr('data-menuid')){
          // $('#'+ $(this).attr('data-menuid')).html('<img src="'+ baseUrl +'commondir/images/loader.gif" >');
          catids = $(this).attr('data-catids');
          contenter = $(this).attr('data-menuid');
          showmegamenu(catids,contenter);
        }

        },
        function() { $('.dropdown-menu', this).hide();
        $(this).removeClass( "menu-active" );
        $(this).find(".single-dropdown").hide();
    });
});

$(function() {
   $(".megamenu-search-close").hide();
   $(".megamenu-search-field").hide();
   $(".megamenu-search").click(function(){
       $(".megamenu-search-close").show();
       $(".megamenu-search-go").fadeIn();
       $(".megamenu-search-field").animate({width: "show"});
       $(".megamenu-search-field").select();
   });
   $(".megamenu-search-close").click(function(){
       $(this).hide();
       $(".megamenu-search-field").animate({width: "hide"});
       $(".megamenu-search-go").hide();
   });
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
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".megamenu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 97) {
            header.addClass("fixed-megamenu");
            $(".sticky-logo-white").show();
            $(".sticky-logo-home").hide();
        } else {
            header.removeClass("fixed-megamenu");
            $(".sticky-logo-white").hide();
            $(".sticky-logo-home").show();
        }
    });
});

});

$(function() {
    //caches a jQuery object containing the header element
    var flag=0;
    var header = $(".bd-ft-slide");
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

$(function() {
    //caches a jQuery object containing the header element
    var flag=0;
    var header = $(".featured-video-active");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 800) {
            $(".sticky-video-hide").show();
            $(".sticky-video-move").show();
            header.addClass("featured-video-fixed");
            if(flag==0){
            showticker();            
            flag=1;
            }
            $(".featured-video-media").attr('id', 'mydragdiv');
            $(".featured-video-media-move").attr('id', 'mydragdivheader');

        } else {
            header.removeClass("featured-video-fixed");
            $(".sticky-video-hide").hide();
            $(".sticky-video-move").hide();
            $(".featured-video-media").removeAttr("style");
            $(".featured-video-media").attr('id', '');
            $(".featured-video-media-move").attr('id', '');
        }
    });
});
$('.sticky-video-hide').click(function () {
    $(".featured-video-active").addClass("featured-video-hide");
    $(".featured-video-media").removeAttr("style");
});








function showticker()
{
    //$('.article-slide-sec').html(data);

    var catids=$('#bottom_ticker').attr('data-catnum');
    //var status=1;
    $.ajax({
    type: "POST",
    url: baseUrl + "bottom-ticker",
      async: true,
      dataType : "html",
      cache: true,
    data: {catids : catids},
    beforeSend: function() {
        $('#bottom_ticker').html('<img src="'+ baseUrl +'commondir/images/loader.gif" >');
    },
    success: function(result){
       $('#bottom_ticker').html(result);   
      // owl();     
    }
    });  
    return false;
 

}

function showmegamenu(catids,contenter){
    $.ajax({
    type: "POST",
    url: baseUrl + "mega-menu",
      async: true,
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
  if($('#morningnews').prop("checked")!=true && $('#weekend').prop("checked")!=true && $('#eveningnews').prop("checked")!=true && $('#primetime').prop("checked")!=true){
      var msg='<label id="nlalert" class="error" for="rname">Please select at least one item</label>';
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
       $('#sresult').html('<img style="width:30px;margin-left:30px" src="'+ baseUrl +'commondir/images/loader.gif" >'); 
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

subscribe();

//Make the DIV element draggagle
if(document.getElementById("mydragdiv"))
dragElement(document.getElementById("mydragdiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
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