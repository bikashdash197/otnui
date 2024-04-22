<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Faustina&family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<style type="text/css">
body {
  margin: 0;
  padding: 0;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: Faustina, serif;
  font-weight: 400;
}
p,
span {
  font-family: "Open Sans", sans-serif;
}
li {
  font-family: Faustina, serif;
}
a,
a:active,
a:focus,
a:hover {
  text-decoration: none;
}
h1.common-h1 {
  text-transform: capitalize;
  display: inline-block;
  margin: 15px;
  padding: 0;
  font-weight: 700;
  font-size: 21px;
  position: relative;
  padding-left: 37px;
}
h1.common-h1:before {
  content: "";
  display: block;
  background-color: #7b0505;
  position: absolute;
  left: 1px;
  top: 5px;
  width: 30px;
  height: 13px;
}
a,
a:active,
a:focus,
a:hover {
  text-decoration: none;
}
h3.heading-style-one {
  margin: 0 0 15px 0;
  padding: 0 0 0 36px;
  font-weight: 700;
  font-size: 18px;
  position: relative;
  padding-right: 50px;
  text-transform: uppercase;
  color: #000;
  font-family: Faustina, serif;
}
h3.heading-style-one:before {
  content: "";
  display: block;
  background-color: #7b0505;
  position: absolute;
  left: 0;
  top: 4px;
  width: 30px;
  height: 13px;
}
h3.heading-style-one-normal {
  margin: 0 0 15px 0;
  padding: 0 0 0 36px;
  font-weight: 400;
  font-size: 18px;
  position: relative;
  padding-right: 50px;
  text-transform: uppercase;
  color: #000;
  font-family: Faustina, serif;
}
h3.heading-style-one-normal:before {
  content: "";
  display: block;
  background-color: #7b0505;
  position: absolute;
  left: 0;
  top: 6px;
  width: 30px;
  height: 13px;
}
.otv-300-250-ad {
  width: 300px;
  height: 250px;
  display: flex;
  margin: 0 auto;
  text-align: center;
  overflow: hidden;
  margin-bottom: 20px;
}
.otv-320-50-ad {
  width: 320px;
  height: 50px;
  display: flex;
  margin: 0 auto;
  text-align: center;
  overflow: hidden;
  margin-bottom: 20px;
}
.otv-300-50-ad {
  width: 300px;
  height: 50px;
  display: flex;
  margin: 0 auto;
  text-align: center;
  overflow: hidden;
  margin-bottom: 20px;
}
.otv-300-600-ad {
  width: 300px;
  height: 600px;
  display: flex;
  margin: 0 auto;
  text-align: center;
  overflow: hidden;
  margin-bottom: 20px;
}
header {
  float: left;
  width: 100%;
  padding: 10px 0;
}
header ul {
  margin: 0;
  padding: 0;
  text-align: right;
  float: right;
  width: 100%;
  height: 27px;
  position: relative;
}
a.mobile-right-highlight {
  position: absolute;
  left: -7px;
  top: 7px;
  color: #000;
  font-weight: 700;
  font-size: 12px;
  line-height: 10px;
}
a.mobile-right-highlight span {
  display: block;
  text-transform: uppercase;
  font-size: 8px;
  color: #777676;
}
header ul li {
  list-style-type: none;
  display: inline-block;
  width: fit-content;
  text-align: center;
}
header ul li a {
  text-decoration: none;
  display: block;
  color: #000;
  font-weight: 700;
}
header ul li a i {
  display: block !important;
  color: #337ab7;
  font-size: 25px;
}
li.read-in-odia a img {
  width: 20px;
  height: auto;
  display: block;
  margin: 0 auto;
}
li.read-in-odia {
  position: relative;
  margin-top: 7px;
  float: right;
}
li.read-in-odia a {
  font-size: 13px;
}
.main-logo-img {
  width: auto;
  height: 35px;
}
li.liveicon img {
  width: 21px;
  height: 20px;
  margin-top: -4px;
}
li.liveicon a {
  font-size: 14px;
}
li.liveicon {
  margin-right: 10px;
  position: relative;
  margin-top: 7px;
}
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
  -moz-box-shadow: 1px 6px 5px -2px rgba(0, 0, 0, 0.22);
  box-shadow: 1px 6px 5px 2px rgb(0 0 0 / 10%);
  height: 40px;
  z-index: 3;
  overflow: hidden;
}
ul.mobile-menu-nav {
  margin: 0;
  padding: 0;
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
ul.mobile-menu-nav li:first-child:after,
ul.mobile-menu-nav li:last-child:after,
ul.mobile-menu-nav li:nth-child(2):after {
  display: none;
}
ul.mobile-menu-nav li a {
  text-decoration: none;
  display: block;
  text-transform: uppercase;
  font-weight: 700;
  color: #333;
  line-height: 40px;
  padding: 0 10px;
  font-size: 14px;
}
li.sticky-logo-home a {
  font-size: 18px !important;
}
li.menu-home-item {
  background-color: #e6e6e6;
  padding: 0 5px;
  font-size: 22px;
  width: 54px;
  text-align: center;
}
.fixed-mobilenav li.menu-home-item {
  background: 0 0 !important;
}
ul.mobile-menu-nav li a:hover {
  color: #e92b28;
}
.mainnav-menu-elements a {
  text-decoration: none;
  display: block;
  text-transform: uppercase;
  font-weight: 400;
  color: #333;
  line-height: 40px;
  padding: 0 10px;
  font-size: 14px;
  font-family: Faustina, serif;
  position: relative;
}
.mainnav-menu-elements a:before {
  content: "";
  display: block;
  width: 2px;
  height: 10px;
  background-color: #cac1c1;
  position: absolute;
  right: -3px;
  top: 16px;
}
.main-mobile-menu.mobile-nav {
  position: relative;
}
.main-mobile-menu.mobile-nav:before {
  content: "";
  display: block;
  background: linear-gradient(90deg, rgba(0, 212, 255, 0) 0, #fff 39%);
  width: 90px;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 2;
}
button.mobile-menu-toggle {
  background-color: #efefef;
  color: #000;
  outline: 0;
  border: none;
  width: 50px;
  line-height: 39px;
  height: 39px;
  margin: 0;
  padding: 10px 0 0 0;
  position: absolute;
  right: 0;
  top: 1px;
  font-size: 10px;
  transition-duration: 1s;
  z-index: 2;
}
button.mobile-menu-toggle img {
  padding: 0;
  position: absolute;
  left: 0;
  top: 4px;
  right: 0;
  font-size: 17px;
  margin: 0 auto;
}
button.mobile-menu-toggle .fa-bars {
  position: absolute;
  left: 0;
  top: 3px;
  right: 0;
  font-size: 17px;
}
button.menu-close-custom {
  position: fixed;
  right: 0;
  top: 0;
  background-color: #f0af35;
  border: none;
  outline: 0;
  font-size: 26px;
  line-height: 35px;
  width: 35px;
  color: #fff;
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
span.darkmode-btn-text {
  width: auto !important;
  display: inline-block;
  margin-right: 10px;
}
img.darkmode-svg-icon {
  height: 26px;
  width: 37px;
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
  right: 0 !important;
  left: auto;
  top: -4px;
  transition-duration: 1s;
  color: #7b1c18;
  font-size: 14px;
  line-height: 13px;
  padding-left: 1px;
}
.dark-theme a.darkmode-btn strong {
  background-color: #444449;
  transition-duration: 1s;
}
.dark-theme a.darkmode-btn i {
  border: solid 2px #fff;
}
ul.menu-signin {
  margin: 0 0 20px 0;
  padding: 0;
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
  font-weight: 700;
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
  padding: 0 5px 0 42px;
  outline: 0;
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
  margin: 15px 0;
  padding: 0;
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
  margin: 15px 0 0 0;
  padding: 0;
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
  background-image: url(../images/svg/dropdown-menu-white.svg);
  content: "";
  display: block;
  position: absolute;
  background-repeat: no-repeat;
  right: 0;
  top: 9px;
  width: 7px;
  height: 11px;
  transition-duration: 0.5s;
  color: #fff;
}
li.mobile-dropdown-nav.nav-opened:before {
  transform: rotate(90deg);
  transition-duration: 0.5s;
}
ul.mobile-custom-dropdown {
  display: none;
  margin: 0 0 0 30px;
  padding: 0;
}
.mainnav-menu-div {
  width: 300px;
  overflow-y: scroll;
}
.mainnav-menu-elements a {
  width: max-content;
}
.mainnav-menu-elements {
  display: table-cell;
}
section.breaking-news {
  float: left;
  width: 100%;
  margin: 0 0 15px 0;
  background-color: #e6e6e6;
}

/*============= //MENU =============*/
</style>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="https://odishatv.in/" class="main-logo-head"><img src="https://odishatv.in//commondir/images/logo.svg" alt="OdishaTV" title="OdishaTV" class="img-responsive main-logo-img" width="150" height="35"></a></div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <ul>
          <li> <a href="https://odishatv.in/tag/odisha-panchayat-polls" ><img src="https://odishatv.in/commondir/images/panchayat-election.gif" width="58" height="40" alt="odisha panchayat elections" title="odisha panchayat elections" style="border-radius: 7px;"></a>
                        </li>
          <!--<a href="https://odishatv.in/live-updates/education/bse-odisha-class-10-matric-result-2021-59155" class="mobile-right-highlight">10th<span>result</span></a>-->
          <!--<li class="lcyclone-menu"><a href="https://odishatv.in/live-updates/weather/cyclone-yaas-in-bay-of-bengal-alert-for-odisha-46924/amp"><img src="https://odishatv.in//commondir/images/cyclone.png" width="20px" height="20px" alt="Cyclone Yaas Live Updates" title="Cyclone Yaas Live Updates"></a></li>-->
          <li class="liveicon"><a href="https://odishatv.in/live-tv"><img src="https://odishatv.in//commondir/images/livetvicon.gif" width="21" height="20" alt="livetv" title="livetv"> LIVE TV</a></li>
          <li class="read-in-odia"><a href="https://otvkhabar.in/" target="_blank"><img src="https://odishatv.in//commondir/images/active-odia.svg" width="20" height="20" alt="ଓଡ଼ିଆରେ ପଢନ୍ତୁ" title="ଓଡ଼ିଆରେ ପଢନ୍ତୁ"></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--====================== //HEADER ====================-->
<div class="main-mobile-menu mobile-nav">
  <ul class="mobile-menu-nav">
    <li class="sticky-logo-white menu-home-item" style="display: none;"><a href="https://odishatv.in/"><img src="https://odishatv.in//commondir/images/logo-white.png" alt="OdishaTv" title="OdishaTv"></a></li>
    <li class="sticky-logo-home menu-home-item"><a href="https://odishatv.in/"><img src="https://odishatv.in//commondir/images//svg/menu-home-icon.svg" width="23" height="18" alt="Home Icon" class="home-icon-mobilemenu"></a></li>
    </ul>
<!--============ MENU SLIDE =============-->
<div class="mainnav-menu">
  <div class="mainnav-menu-div">
     <div class="mainnav-menu-elements"><a href="https://odishatv.in/odisha">Odisha</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/jobs">Jobs</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/education">Education</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/national">National</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/entertainment">Entertainment</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/videos">Videos</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/weather">Weather</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/exclusive">Exclusive</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/lifestyle">Lifestyle</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/photo-gallery">Photos</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/politics">Politics</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/covid-19">COVID 19</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/crime">Crime</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/health">Health</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/miscellaneous">Miscellaneous</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/opinion">Long form</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/sports">Sports</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/business">Business</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/festivals-events">Festivals</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/international">International</a></div> <div class="mainnav-menu-elements"><a href="https://odishatv.in/features">Features</a></div>  </div>
</div>
<!--=========== //MENU SLIDE ============-->


  
<button class="mobile-menu-toggle"><img src="https://odishatv.in//commondir/images//svg/hamburger-icon.svg" width="23" height="18" alt="Menu" > MENU</button>
<!--=================== MENU BOX ====================-->
<div class="mobile-menu-box">
  <button class="menu-close-custom"><img src="https://odishatv.in//commondir/images/svg/close-search.svg" width="23" height="18" alt="close"></button>
 <!--  <ul class="menu-signin">
    <li><a href="#">Sign In</a></li>
    <li><a href="#">Open App</a></li>
  </ul> -->
<a onclick="myFunction()" class="darkmode-btn"><span class="darkmode-btn-text">DARK MODE</span> <img src="https://odishatv.in/commondir/images/svg/fa-moon.svg" alt="scrollToTop" title="scrollToTop" class="darkmode-svg-icon"></a>
  <div class="mobile-serach-menu">
    <img src="https://odishatv.in//commondir/images/svg/search-white.svg" width="23" height="18" alt="close">
    <input type="text" placeholder="Search for News, Photos & Videos" name="megamenu-search" id="megamenu-search">
  </div>

<!--======================= TESTING =======================-->
<ul class="custom-mobile-menu"><li><a href="https://odishatv.in/">Home</a></li><li class="mobile-dropdown-nav"><a href="#">Odisha</a><ul class="mobile-custom-dropdown"><li><a href="https://odishatv.in/odisha">Odisha</a></li><li><a href="https://odishatv.in/odisha/bhubaneswar">Bhubaneswar</a></li><li><a href="https://odishatv.in/odisha/cuttack">Cuttack</a></li><li><a href="https://odishatv.in/odisha/puri">Puri</a></li><li><a href="https://odishatv.in/odisha/sambalpur">Sambalpur</a></li><li><a href="https://odishatv.in/odisha/ganjam">Berhampur</a></li><li><a href="https://odishatv.in/odisha/rourkela">Rourkela</a></li></ul></li><li class="mobile-dropdown-nav"><a href="#">Jobs</a><ul class="mobile-custom-dropdown"><li><a href="https://odishatv.in/jobs">Jobs</a></li><li><a href="https://odishatv.in/tag/govt-jobs">Govt Jobs</a></li></ul></li><li class="mobile-dropdown-nav"><a href="#">Education</a><ul class="mobile-custom-dropdown"><li><a href="https://odishatv.in/education">Education</a></li><li><a href="https://odishatv.in/tag/cbse">CBSE</a></li><li><a href="https://odishatv.in/tag/ugc">UGC</a></li><li><a href="https://odishatv.in/tag/chse-odisha">CHSE</a></li><li><a href="https://odishatv.in/tag/bse-odisha">BSE</a></li></ul></li><li><a href="https://odishatv.in/national">National</a></li><li class="mobile-dropdown-nav"><a href="#">Entertainment</a><ul class="mobile-custom-dropdown"><li><a href="https://odishatv.in/entertainment">Entertainment</a></li><li><a href="https://odishatv.in/entertainment/hollywood">Hollywood</a></li><li><a href="https://odishatv.in/entertainment/bollywood">Bollywood</a></li><li><a href="https://odishatv.in/entertainment/tollywood">Tollywood</a></li><li><a href="https://odishatv.in/tag/tv-serial">Telly</a></li></ul></li><li><a href="https://odishatv.in/videos">Videos</a></li><li><a href="https://odishatv.in/weather">Weather</a></li><li class="mobile-dropdown-nav"><a href="#">Other</a><ul class="mobile-custom-dropdown"><li><a href="https://odishatv.in/exclusive">Exclusive</a></li><li><a href="https://odishatv.in/lifestyle">Lifestyle</a></li><li><a href="https://odishatv.in/photo-gallery">Photos</a></li><li><a href="https://odishatv.in/politics">Politics</a></li><li><a href="https://odishatv.in/covid-19">COVID 19</a></li><li><a href="https://odishatv.in/crime">Crime</a></li><li><a href="https://odishatv.in/health">Health</a></li><li><a href="https://odishatv.in/miscellaneous">Miscellaneous</a></li><li><a href="https://odishatv.in/opinion">Long form</a></li><li><a href="https://odishatv.in/sports">Sports</a></li><li><a href="https://odishatv.in/business">Business</a></li><li><a href="https://odishatv.in/festivals-events">Festivals</a></li><li><a href="https://odishatv.in/international">International</a></li><li><a href="https://odishatv.in/features">Features</a></li></ul></li></ul><!--====================== //TESTING ======================-->
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
<!--================== //MENU BOX ===================-->
</div>
 <style type="text/css">
.day-tips ::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.day-tips ::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 0px;
}
 
/* Handle */
.day-tips ::-webkit-scrollbar-thumb {
  background: #d3cfcf;
  border-radius: 0px;
}

/* Handle on hover */
.day-tips ::-webkit-scrollbar-thumb:hover {
  background: #d3cfcf;
}
  </style>
  <div class="container" style="float: left;width: 100%;">
      <div class="day-tips"  style="text-align: center;position: relative;width: 300px;height: 393px;margin: 15px auto;display: block;">
          <img src="images/tips_bg_mobile.jpg" alt="" title="" style="width: 320px;
    height: 393px;">
          <p style="position: absolute;top: 130px;left: 18px;padding: 5px 0px 10px 0px;margin: 0;font-size: 15px;color: #ffffff;font-weight: 600;height: 207px;overflow: auto;width: 274px;">Do you have plans to visit Kendrapara, if yes, then now you can catch glimpse of glorious history Do you have plans to visit Kendrapara, if yes, then now you can catch glimpse of glorious history Do you have plans to visit Kendrapara, if yes, then now you can catch glimpse of glorious history...</p>
      </div>
  </div>