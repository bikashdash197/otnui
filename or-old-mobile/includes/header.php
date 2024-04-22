<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css2?family=Faustina&family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<style type="text/css">
/*============== MENU ==============*/
.fixed-mobilenav {
    top: 0;
    position: fixed !important;
    transition-duration: 1s;
    z-index: 4;
}
.main-mobile-menu {
    float: left;
    width: 100%;
    position: relative;
    border-top: solid 1px #e6e6e6;
    background-color: #fff;
    -webkit-box-shadow: 1px 6px 5px -2px rgb(0 0 0 / 5%);
    -moz-box-shadow: 1px 6px 5px -2px rgba(0,0,0,0.22);
    box-shadow: 1px 6px 5px 2px rgb(0 0 0 / 10%);
    height: 40px;
    z-index: 3;
    overflow: hidden;
}
ul.mobile-menu-nav {
    margin: 0px;
    padding: 0px;
    position: relative;
    width: 100%;
}
.mainnav-slide li:before {
    content: "";
    display: block;
    width: 2px;
    height: 10px;
    background-color: #cac1c1;
    position: absolute;
    right: -3px;
    top: 16px;
}
ul.mobile-menu-nav li {
    list-style-type: none;
    float: left;
    position: relative;
    padding-left: 4px;
}
ul.mobile-menu-nav li:after {
    content: "|";
    display: block;
    position: absolute;
    right: -2px;
    top: 11px;
    color: #b9b3b5;
    font-size: 12px;
}
ul.mobile-menu-nav li:first-child:after, ul.mobile-menu-nav li:nth-child(2):after, ul.mobile-menu-nav li:last-child:after {
    display: none;
}
ul.mobile-menu-nav li a {
    text-decoration: none;
    display: block;
    text-transform: uppercase;
    font-weight: 500;
    color: #333333;
    line-height: 40px;
    padding: 0px 10px;
    font-size: 14px;
}
.mainnav-menu {
    overflow-y: scroll;
    width: 400pxcal;
}
.mainnav-menu-elements {
    display: table-cell;
}
.mainnav-menu-elements a:before {
    content: "";
    display: block;
    width: 2px;
    height: 10px;
    background-color: #cac1c1;
    position: absolute;
    right: -3px;
    bottom: 16px;
}
.mainnav-menu-elements a {
    text-decoration: none;
    display: block;
    text-transform: uppercase;
    font-weight: 700;
    color: #333;
    line-height: 40px;
    padding: 0 10px;
    font-size: 16px;
    font-family: Faustina,serif;
    position: relative;
    width: max-content;
}
li.sticky-logo-home a {
    font-size: 18px !important;
}
li.menu-home-item {
    background-color: #e6e6e6;
    padding: 0px 5px;
    font-size: 22px;
    width: 54px;
    text-align: center;
}
.fixed-mobilenav li.menu-home-item {
    background: none !important;
}
ul.mobile-menu-nav li a:hover {
    color: #e92b28;
}
ul.mobile-menu-nav:before {
    content: "";
    display: block;
    background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgba(255,255,255,1) 39%);
    width: 90px;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 2;
}
button.mobile-menu-toggle {
    background-color: #efefef;
    color: #bd433e;
    outline: none;
    border: none;
    /* width: 24px; */
    line-height: 25px;
    /* height: 24px; */
    margin: 0px;
    padding: 0;
    position: absolute;
    border-radius: 50%;
    right: 6px;
    top: 0px;
    font-size: 24px;
    transition-duration: 1s;
    z-index: 2;
}
button.mobile-menu-toggle img {
    width: 40px;
    height: 40px;
}
button.menu-close-custom {
    position: fixed;
    right: 0;
    top: -8px;
    /* background-color: #f0af35; */
    border: none;
    outline: none;
    font-size: 26px;
    line-height: 35px;
    width: 35px;
    color: #000;
}
.mobile-menu-box {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    overflow-x: hidden;
    overflow-y: auto;
    z-index: 4;
    width: calc(100% - 30px);
    background-color: #333;
    height: auto;
    padding: 10px 60px 10px 10px;
    display: none;
}
.mobile-menu-box p {
    color: #fff;
}
.mobile-menu-box::-webkit-scrollbar {
  display: none;
}
.mobile-menu-box::scrollbar {
  display: none;
}
.mobile-menu-box-overly::-webkit-scrollbar {
  display: none;
}
.mobile-menu-box-overly::scrollbar {
  display: none;
}

a.darkmode-btn {
    text-transform: capitalize !important;
    font-weight: 700 !important;
    font-size: 12px !important;
    cursor: pointer;
}
a.darkmode-btn button {
    background-color: #b4b4b4;
    outline: none;
    border: none;
    width: 40px;
    height: 14px;
    border-radius: 10px;
    position: relative;
    float: right;
    transition-duration: 1s;
}
span.darkmode-btn-text {
    width: auto !important;
    display: inline-block;
    margin-right: 10px;
}
a.darkmode-btn strong {
    background-color: #b4b4b4;
    outline: 0;
    border: none;
    width: 40px;
    height: 14px;
    border-radius: 10px;
    position: relative;
    float: right;
    transition-duration: 1s;
}
a.darkmode-btn i {
    position: absolute;
    left: -1px;
    top: -4px;
    background-color: #697c9b;
    width: 21px;
    height: 21px;
    padding-top: 3px;
    border-radius: 50%;
    border: solid 2px #697c9b;
    transition-duration: 1s;
    font-size: 12px;
    text-align: center;
    color: #fff;
}
.dark-theme a.darkmode-btn i {
    background-color: #fff;
    right: 0px !important;
    left: auto;
    top: -4px;
    transition-duration: 1s;
    color: #7b1c18;
    font-size: 14px;
    line-height: 13px;
    padding-left: 1px;
}
.dark-theme a.darkmode-btn button {
    background-color: #444449;
    transition-duration: 1s;
}
.dark-theme a.darkmode-btn i {
    border: solid 2px #fff;
}

ul.menu-signin {
    margin: 0px 0px 20px 0px;
    padding: 0px;
    display: inline-block;
    width: 100%;
}
ul.menu-signin li {
    list-style-type: none;
    display: inline-block;
}
a.darkmode-btn {
    margin-bottom: 15px;
    display: block;
    width: fit-content;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
}
ul.menu-signin li a {
    text-decoration: none;
    display: block;
    color: #fff;
    background-color: #434449;
    line-height: 35px;
    padding: 0;
    width: 110px;
    text-align: center;
    text-transform: capitalize;
    font-size: 16px;
    border-radius: 5px;
    border: solid 1.7px #fff;
    margin-right: 5px;
}
.mobile-serach-menu {
    position: relative;
}
.mobile-serach-menu input {
    width: 100%;
    background-color: #434449;
    border: solid 1px #fff;
    border-radius: 5px;
    color: #fff;
    display: block;
    line-height: 40px;
    padding: 0px 5px 0px 42px;
    outline: none;
}
.mobile-serach-menu input::placeholder {
    color: #fff;
}
.mobile-serach-menu img {
    position: absolute;
    left: 9px;
    top: 10px;
    color: #fff;
    font-size: 22px;
}
ul.mobile-menu-social {
    margin: 15px 0px;
    padding: 0px;
}
ul.mobile-menu-social li {
    list-style-type: none;
    display: block;
    line-height: 32px;
}
ul.mobile-menu-social li a {
    text-decoration: none;
    display: block;
    color: #fff;
    text-transform: capitalize;
    font-size: 15px;
}
ul.mobile-menu-social li a i {
    color: #fff;
    width: 25px;
}
ul.custom-mobile-menu {
    margin: 15px 0px 0px 0px;
    padding: 0px;
}
ul.custom-mobile-menu li {
    list-style-type: none;
    display: block;
    line-height: 30px;
    border-bottom: dashed 1px #434449;
    position: relative;
    cursor: pointer;
}
ul.custom-mobile-menu li a {
    text-decoration: none;
    display: block;
    color: #fff;
    font-size: 14px;
}
ul.mobile-custom-dropdown li {
    position: relative;
}
ul.mobile-custom-dropdown li:before {
    content: "";
    position: absolute;
    left: -14px;
    top: 12px;
    width: 6px;
    height: 6px;
    background-color: #f3b01b;
    border-radius: 50%;
}
li.mobile-dropdown-nav:before {
    background-image: url(images/svg/dropdown-menu-white.svg);
    content: "";
    display: block;
    position: absolute;
    background-repeat: no-repeat;
    right: 0;
    top: 9px;
    width: 7px;
    height: 11px;
    transition-duration: .5s;
    color: #fff;
}
li.mobile-dropdown-nav.nav-opened:before {
    transform: rotate(90deg);
    transition-duration: .5s;
}
ul.mobile-custom-dropdown {
    display: none;
    margin: 0px 0px 0px 30px;
    padding: 0px;
}
header {
    float: left;
    width: 100%;
    padding: 10px 0;
}
.main-logo-img {
    width: auto;
    height: 40px;
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
    margin-bottom: 20px;
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
/*============= //MENU =============*/
</style>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6">
                <a href="#"><img src="images/svg/OR_Logo_webste_MOB.svg" alt="" title="" class="img-responsive main-logo-img" width="150" height="35"></a>
            </div>
            <div class="col-md-6 col-sm-6 col-6">
                <button class="mobile-menu-toggle"><img src="images/svg/OR-hamburger-icon.svg" title="" width="23" height="18" alt="Menu"></button>
            </div>
        </div>
    </div>
</header>
<div class="main-mobile-menu mobile-nav fixed-mobilenav">
<div class="mobile-menu-box">
    <button class="menu-close-custom"><img src="images/svg/close-gray.svg"></button>
    <!--  <ul class="menu-signin">
    <li><a href="#">Sign In</a></li>
    <li><a href="#">Open App</a></li>
  </ul> --><a onclick="myFunction()" class="darkmode-btn"><span class="darkmode-btn-text">Dark Mode</span> <strong><i class="fas fa-moon darkmode-icon"></i></strong></a>
    <div class="mobile-serach-menu"> <img src="https://odishatv.in//commondir/images/svg/search-white.svg" width="23" height="18" alt="close">
        <input type="text" placeholder="Search for News, Photos & Videos" name="megamenu-search" id="megamenu-search"> </div>
    <!--======================= TESTING =======================-->
    <ul class="custom-mobile-menu">
        <li><a href="https://khabar.odishatv.in/">Home</a></li>
        <li><a href="https://khabar.odishatv.in/odisha">ଓଡ଼ିଶା</a></li>
        <li><a href="https://khabar.odishatv.in/entertainment">ମନୋରଞ୍ଜନ</a></li>
        <li class="mobile-dropdown-nav"><a href="#">ଶିକ୍ଷା</a>
            <ul class="mobile-custom-dropdown">
                <li><a href="https://khabar.odishatv.in/education">ଶିକ୍ଷା</a></li>
                <li><a href="https://khabar.odishatv.in/tag/cbse">ସିବିଏସ୍‌ଇ</a></li>
            </ul>
        </li>
        <li><a href="https://khabar.odishatv.in/national">ଜାତୀୟ</a></li>
        <li><a href="https://khabar.odishatv.in/politics">ରାଜନୀତି</a></li>
        <li><a href="https://khabar.odishatv.in/videos">ଭିଡିଓ</a></li>
        <li><a href="https://khabar.odishatv.in/sports">କ୍ରୀଡ଼ା</a></li>
        <li><a href="https://khabar.odishatv.in/covid-19">Covid-19</a></li>
        <li class="mobile-dropdown-nav"><a href="#">Other</a>
            <ul class="mobile-custom-dropdown">
                <li><a href="https://khabar.odishatv.in/photo-gallery">ଫଟୋ</a></li>
                <li><a href="https://khabar.odishatv.in/weather">ପାଣିପାଗ</a></li>
                <li><a href="https://khabar.odishatv.in/festivals-events">ଉତ୍ସବ ଓ ପରମ୍ପରା</a></li>
                <li><a href="https://khabar.odishatv.in/international">ଆନ୍ତର୍ଜାତୀୟ ଖବର</a></li>
                <li><a href="https://khabar.odishatv.in/health">ସ୍ୱାସ୍ଥ୍ୟ</a></li>
                <li><a href="https://khabar.odishatv.in/jobs">ନିଯୁକ୍ତି</a></li>
                <li><a href="https://khabar.odishatv.in/crime">ଅପରାଧ</a></li>
                <li><a href="https://khabar.odishatv.in/miscellaneous">ବିବିଧ</a></li>
                <li><a href="https://khabar.odishatv.in/literature-culture">ସାହିତ୍ୟ ଓ ସଂସ୍କୃତି</a></li>
                <li><a href="https://khabar.odishatv.in/lifestyle">ଜୀବନଶୈଳୀ</a></li>
                <li><a href="https://khabar.odishatv.in/opinion">ମତ</a></li>
            </ul>
        </li>
    </ul>
    <!--====================== //TESTING ======================-->
    <!-- 
  <ul class="mobile-menu-social">
    <li><a href="#"><i class="fab fa-facebook-f"></i>facebook</a></li>
    <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
    <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li>
    <li><a href="#"><i class="fab fa-pinterest-p"></i>pinterest</a></li>
    <li><a href="#"><i class="fab fa-linkedin-in"></i>linkedin</a></li>
    <li><a href="#"><i class="fab fa-telegram-plane"></i>telegram</a></li>
  </ul> -->
</div>
    <div class="mainnav-menu">
        <div class="">
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/odisha">ଓଡ଼ିଶା</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/entertainment">ମନୋରଞ୍ଜନ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/education">ଶିକ୍ଷା</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/national">ଜାତୀୟ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/politics">ରାଜନୀତି</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/videos">ଭିଡିଓ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/sports">କ୍ରୀଡ଼ା</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/covid-19">Covid-19</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/photo-gallery">ଫଟୋ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/weather">ପାଣିପାଗ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/festivals-events">ଉତ୍ସବ ଓ ପରମ୍ପରା</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/international">ଆନ୍ତର୍ଜାତୀୟ ଖବର</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/health">ସ୍ୱାସ୍ଥ୍ୟ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/jobs">ନିଯୁକ୍ତି</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/crime">ଅପରାଧ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/miscellaneous">ବିବିଧ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/literature-culture">ସାହିତ୍ୟ ଓ ସଂସ୍କୃତି</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/lifestyle">ଜୀବନଶୈଳୀ</a></div>
            <div class="mainnav-menu-elements"><a href="https://khabar.odishatv.in/opinion">ମତ</a></div>
        </div>
    </div>
</div>