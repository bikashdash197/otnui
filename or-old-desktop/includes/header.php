<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css"> </head>
<style type="text/css">
/*============== MENU ==================*/

body {
margin: 0px;
padding: 0px;
}

@media (min-width: 1200px) {
.container,
.container-lg,
.container-md,
.container-sm,
.container-xl {
max-width: 1290px;
}
}

a,
a:focus,
a:hover,
a:active {
text-decoration: none;
}

.sticky {
position: sticky;
top: 50px;
}

.dark-mode {
background-color: black;
color: white;
}

section {
float: left;
width: 100%;
}


/*============ ADVERTISEMENT =============*/

div#div-gpt-ad-1634194649039-0:before {
content: "Advertisement";
display: block;
font-size: 11px;
text-align: center;
position: absolute;
left: 0;
top: 48%;
right: 0;
margin: 0 auto;
background-color: #9aef59;
}

.otv-970-250-ad {
width: 970px;
height: 250px;
display: flex;
margin: 0 auto;
text-align: center;
margin-bottom: 20px;
overflow: hidden;
background-color: #9aef59;
}

.otv-728-90-ad {
width: 728px;
height: 90px;
display: flex;
margin: 0 auto;
text-align: center;
margin-bottom: 10px;
overflow: hidden;
background-color: #9aef59;
}

.otv-320-50-ad {
width: 320px;
height: 50px;
display: flex;
margin: 0 auto;
text-align: center;
margin-bottom: 20px;
overflow: hidden;
background-color: #9aef59;
}

.otv-300-50-ad {
width: 300px;
height: 50px;
display: flex;
margin: 0 auto;
text-align: center;
margin-bottom: 20px;
overflow: hidden;
background-color: #9aef59;
}

.otv-300-250-ad {
width: 300px;
height: 250px;
display: flex;
margin: 0 auto;
text-align: center;
overflow: hidden;
background-color: #9aef59;
}

.otv-300-600-ad {
width: 300px;
height: 600px;
display: flex;
margin: 0 auto;
text-align: center;
overflow: hidden;
background-color: #9aef59;
}


/*=========== //ADVERTISEMENT ============*/


/*============== MENU ==================*/

div.fixed-megamenu {
top: 0;
position: fixed;
width: 100%;
transition-duration: .5s;
z-index: 9;
}

.main-nav-sec {
background-color: #231f20;
position: relative;
float: left;
width: 100%;
height: 45px;
}

.main-nav-menu {
float: left;
width: calc(100% - 40px);
}

.main-nav-search {
float: right;
width: 30px;
height: 45px;
line-height: 45px;
position: relative;
}

.search-field {
background-color: #fff;
position: absolute;
right: 0;
top: 0;
width: 560px;
height: 45px;
}

input.megamenu-search-field {
float: left;
border: none;
outline: none;
line-height: 43px;
width: 100%;
text-align: center;
padding-right: 100px;
color: #000;
font-size: 20px;
}

input.megamenu-search-field::placeholder {
color: #000;
padding-left: 10px;
font-size: 20px;
}

img.searchbox-close {
position: absolute;
right: 0;
top: 0;
background-color: #ed2027;
line-height: 45px;
width: 45px;
padding: 13px;
cursor: pointer;
}

img.searchbox-search {
position: absolute;
right: 48px;
top: 0;
line-height: 45px;
height: 45px;
width: 45px;
padding: 12px;
cursor: pointer;
}

img.searchbox-open {
cursor: pointer;
}

.main-nav-menu ul {
margin: 0px;
padding: 0px;
display: inline-block;
width: 100%;
}

.main-nav-menu ul li {
list-style-type: none;
display: inline-block;
margin-right: 15px;
}

.main-nav-menu ul li a {
color: #fff;
line-height: 45px;
text-transform: uppercase;
font-size: 16px;
}

li.single-dropdown {
position: relative;
}

li.single-dropdown ul.single-list {
display: none;
}

li.single-dropdown:hover ul.single-list {
display: block;
}

ul.single-list li {
display: block;
}

ul.nav.navbar-nav li {
list-style-type: none;
float: left;
margin: 0px;
padding: 0px;
border-right: 1px solid #212121;
position: initial;
}

ul.single-list {
margin: 0px;
padding: 0px;
position: absolute;
left: 0px;
top: 44px;
width: 190px;
background-color: #fff;
z-index: 9;
display: none;
max-height: 400px;
}

ul.single-list li {
list-style-type: none;
display: block !important;
float: none !important;
border-bottom: solid 0.5px #2f2d2d;
border-right: none !important;
}

ul.single-list li a {
text-decoration: none;
display: block;
line-height: 30px !important;
color: #000 !important;
padding: 0px 5px;
}

ul.megamenu-nav {
position: absolute;
top: 42px;
left: 0;
width: calc(100% + 40px);
z-index: 1000;
float: left;
min-width: 160px;
padding: 5px 0;
margin: 2px 0 0;
font-size: 14px;
text-align: left;
list-style: none;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ccc;
border: 1px solid rgba(0, 0, 0, .15);
border-radius: 0px 0px 4px 4px;
-webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
display: none;
}

ul.megamenu-nav li {
float: left;
width: 20%;
margin: 0px;
padding: 5px;
}

ul.megamenu-nav li img {
width: 100%;
height: auto;
}

li.megamenu-items h4 {
margin: 0px;
padding: 7px 0px;
color: #333;
font-size: 16px;
line-height: 20px;
text-transform: capitalize;
}

li.megamenu-items-nav ul {
margin: 0px;
padding: 0px;
}

li.megamenu-items-nav ul li {
list-style-type: none;
display: block;
width: 100%;
}

li.megamenu-items-nav ul li a {
text-decoration: none;
display: block;
line-height: 27px !important;
padding: 0px 5px;
color: #333 !important;
border-bottom: solid 1px #e6e6e6;
}

li.megamenuactive:hover ul.megamenu-nav {
display: block;
}

li.megamenuactive a {
position: relative;
margin-right: 10px;
}

li.megamenuactive a:after {
content: "";
width: 0;
height: 0;
border-left: 3px solid transparent;
border-right: 3px solid transparent;
border-top: 5px solid white;
display: inline-block;
margin-top: -10px;
position: absolute;
right: -13px;
top: 20px;
}

li.megamenu-items a:after {
display: none;
}

li.megamenu-items {
height: 205px;
}

ul.or-right-nav-menu {
margin: 0px;
padding: 0px;
display: inline-block;
position: absolute;
right: 40px;
}

ul.or-right-nav-menu li {
list-style-type: none;
display: inline-block;
margin-right: 15px;
}

ul.or-right-nav-menu li a {
color: #fff;
line-height: 45px;
text-transform: uppercase;
font-size: 16px;
}
/*============== //MENU ==================*/

/*============== //HEADER ==============*/
header {
float: left;
width: 100%;
margin: 0px;
padding: 30px 0px 6px 0px;
}
ul.top-menu {
margin: 0px;
padding: 0px;
width: 100%;
display: inline-block;
}

ul.top-menu li {
list-style-type: none;
display: inline-block;
}

ul.top-menu li a {
text-decoration: none;
display: block;
text-transform: uppercase;
font-size: 11px;
line-height: 20px;
padding: 0px 1px;
color: #212121;
border-radius: 20px;
}

.top-menu-right {
float: right;
text-align: right;
}


ul.top-date-time {
margin: 0px;
padding: 0px;
width: 100%;
display: inline-block;
}

ul.top-date-time li {
list-style-type: none;
float: left;
position: relative;
}

ul.top-date-time li a:first-child {
padding-left: 0px;
}

ul.top-date-time li a {
text-decoration: none;
display: block;
text-transform: uppercase;
font-size: 12px;
line-height: 20px;
padding: 0px 20px;
color: #212121;
border-radius: 20px;
}

ul.top-date-time li:before {
content: "";
display: block;
width: 1px;
background-color: #212121;
height: 10px;
position: absolute;
left: -10px;
top: 5px;
}

ul.top-date-time li:first-child:before {
display: none;
}
a.main-logo {
margin: 0 auto;
z-index: 8;
display: block;
text-align: center;
position: absolute;
left: 0;
right: 0;
top: 7px;
width: fit-content;
}
img.main-logo-img {
width: 100px;
height: auto;
}
/*============== HEADER ==============*/
</style>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <ul class="top-date-time">
                        <li><a href="#">Friday, Nov 6, 2020</a></li>
                        <li><a href="#">Bhubaneswar 29 °C <i class="fas fa-angle-down"></i></a></li>
                        <li><a href="#">6:00</a></li>
                        <li><a href="#">ist</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="bd-weather-details"> </div>
                    <ul class="top-menu top-menu-right">
                        <li class="top-social-btn">
                            <a href="https://www.facebook.com/otvkhabar" title="Facebook" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/facebook.svg" alt="Facebook" title="Facebook"></a>
                        </li>
                        <li class="top-social-btn">
                            <a href="https://twitter.com/otvkhabar" title="Twitter" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/twitter.svg" alt="Twitter" title="Twitter"></a>
                        </li>
                        <li class="top-social-btn">
                            <a href="https://www.instagram.com/otv.khabar/" title="Instagram" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/instagram.svg" alt="Instagram" title="Instagram"></a>
                        </li>
                        <li class="top-social-btn">
                            <a href="https://www.linkedin.com/company/odishatv" title="LinkedIn" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/linkedin.svg" alt="LinkedIn" title="LinkedIn"></a>
                        </li>
                        <li class="top-social-btn">
                            <a href="https://www.youtube.com/user/otvodisha" title="Youtube" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/youtube.svg" alt="Youtube" title="Youtube"></a>
                        </li>
                        <li class="top-social-btn">
                            <a href="https://t.me/otvtelegram" title="Telegram" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/telegram.svg" alt="Telegram" title="Telegram"></a>
                        </li>
                        <li class="top-social-btn">
                            <a href="https://www.kooapp.com/profile/otvkhabar" title="Koo" target="_blank"><img src="https://otvkhabar.in/commondir/images/svg/koo.svg" alt="Koo" title="Koo"></a>
                        </li>
                        <li class="read-in-odia"><a href="https://odishatv.in/" title="Read in English" target="_blank"><i class="fas fa-language" style="display:none"></i><img src="images/red-Mob_icon.svg" alt="Read in English" title="Read in English" width="35" height="17">Donload the App</a></li>
                        <li class="read-in-odia"><a href="https://odishatv.in/" title="Read in English" target="_blank"><i class="fas fa-language" style="display:none"></i><img src="images/Googleplay.svg" alt="Read in English" title="Read in English" width="35" height="17"></a></li>
                        <li class="read-in-odia"><a href="https://odishatv.in/" title="Read in English" target="_blank"><i class="fas fa-language" style="display:none"></i><img src="images/IOS.svg" alt="Read in English" title="Read in English" width="35" height="17"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="https://otvkhabar.in/" class="main-logo"><img src="images/OR-LOGO_with_ROUND.png" class="main-logo-img" alt="OdishaTV" title="OdishaTV" height="99" width="100"></a>
    </header>
    <!--================ MENU ===================-->
    <div class="main-nav-sec megamenu">
        <div class="container" style="position: relative;">
            <div class="main-nav-menu">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">life style</a></li>
                    <li><a href="#">life style</a></li>
                    <!--============= MEGA MENU ===============-->
                    <li class="megamenuactive"><a href="#">entertainment</a>
                        <!------------- MEGA ITEM ----------------->
                        <ul class="megamenu-nav">
                            <li class="megamenu-items-nav">
                                <ul>
                                    <li><a href="#">life style</a></li>
                                    <li><a href="#">life style</a></li>
                                    <li><a href="#">life style</a></li>
                                    <li><a href="#">life style</a></li>
                                    <li><a href="#">life style</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-items">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641744433.jpg" alt="" title="" width="224px" height="126px"></a> <a href="#"><h4>Fake Disability Certificate Racket: BJP...</h4></a> </li>
                            <li class="megamenu-items">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641744433.jpg" alt="" title="" width="224px" height="126px"></a> <a href="#"><h4>Fake Disability Certificate Racket: BJP...</h4></a> </li>
                            <li class="megamenu-items">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641744433.jpg" alt="" title="" width="224px" height="126px"></a> <a href="#"><h4>Fake Disability Certificate Racket: BJP...</h4></a> </li>
                            <li class="megamenu-items">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641744433.jpg" alt="" title="" width="224px" height="126px"></a> <a href="#"><h4>Fake Disability Certificate Racket: BJP...</h4></a> </li>
                        </ul>
                        <!------------- MEGA ITEM ----------------->
                    </li>
                    <!--============= //MEGA MENU ===============-->
                    <li><a href="#">sports</a></li>
                    <!--============= SINGLE DROPDOWN ===============-->
                    <li class="single-dropdown">
                        <a href="#"><img src="images/svg/three-dot.svg"></a>
                        <ul class="single-list">
                            <li><a href="#">single dropdown</a></li>
                            <li><a href="#">single dropdown</a></li>
                            <li><a href="#">single dropdown</a></li>
                            <li><a href="#">single dropdown</a></li>
                            <li><a href="#">single dropdown</a></li>
                            <li><a href="#">single dropdown</a></li>
                        </ul>
                    </li>
                    <!--============ //SINGLE DROPDOWN ==============-->
                </ul>
            </div>
        <ul class="or-right-nav-menu">
            <li><a href="#">life style</a></li>
            <li><a href="#">life style</a></li>
            <li><a href="#">life style</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Sports</a></li>

        </ul>
            <div class="main-nav-search"> <img src="images/svg/search-white.svg" class="searchbox-open">
                <div class="search-field" style="display: none;"> <img src="images/svg/search-gray-color.svg" class="searchbox-search"> <img src="images/svg/close-search.svg" class="searchbox-close">
                    <input placeholder="Search here..." type="text" name="megamenu-search" id="megamenu-search" class="megamenu-search-field" required=""> </div>
            </div>
        </div>
    </div>
    <!--=============== //MENU ==================-->