$(function() {
    $("img").unveil(200, function() {
    $(this).load(function() {
    this.style.opacity = 1;
    });
    });
});
$(document).ready(function(){
    $('.mobile-dropdown-nav').click(function(){
        $(this).find(".mobile-custom-dropdown").slideToggle(400);
    });
});
$(".headernav").click(function(){
	$(".mobile-menu-box").animate({width: "show"}, 100);
	$(this).addClass("menu-activated");
});
/* KIDS SAFE */
const kids_safe = localStorage.getItem("kids_safe");
if (kids_safe == "off") {
    $(".kidssafebtn").removeClass("kidssafe-on");
    $(".kidssafebtn").addClass("kidssafe-off");
} else if (kids_safe == "on") {
    $(".kidssafebtn").removeClass("kidssafe-off");
    $(".kidssafebtn").addClass("kidssafe-on");
}
$('.kidssafebtn').click(function(){
    if ( $('.kidssafebtn').hasClass( "kidssafe-off" ) ) {
        $(this).removeClass("kidssafe-off");
        $(this).addClass("kidssafe-on");
        var kids_safe = "on";
    }
    else if ( $('.kidssafebtn').hasClass( "kidssafe-on" ) ) {
        $(this).removeClass("kidssafe-on");
        $(this).addClass("kidssafe-off");
        var kids_safe = "off";
    }
    localStorage.setItem("kids_safe", kids_safe);
});
//alert(kids_safe);
/* //KIDS SAFE */