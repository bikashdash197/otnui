<style type="text/css">
    	/* 5 Columns */
    .col-xs-15,
    .col-sm-15,
    .col-md-15,
    .col-lg-15 {
        position: relative;
        min-height: 1px;
        padding-right: 10px;
        padding-left: 10px;
    }

    .col-xs-15 {
        width: 20%;
        float: left;
    }
    @media (min-width: 768px) {
        .col-sm-15 {
            width: 20%;
            float: left;
        }
    }
    @media (min-width: 992px) {
        .col-md-15 {
            width: 20%;
            float: left;
        }
    }
    @media (min-width: 1200px) {
        .col-lg-15 {
            width: 20%;
            float: left;
        }
    }
    /* //5 Columns */
    body{
        margin: 0px;
        padding: 0px;
        z-index: 1;
    }
    h3.heading-style-one {
        margin: 0px 0px 15px 0px;
        padding: 0px 0px 0px 45px;
        position: relative;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 18px;
        color: #333;
        line-height: 17px;
        font-family: 'Faustina', serif;
    }

    h3.heading-style-one:before {
        content: "";
        display: block;
        background-color: #7b0505;
        position: absolute;
        left: 0;
        top: 3px;
        width: 30px;
        height: 13px;
    }
    h3.heading-style-one-normal {
        margin: -6px 0px 10px 0px;
        padding: 0px 0px 0px 45px !important;
        position: relative;
        font-weight: 700;
        font-size: 19px;
        color: #333;
        line-height: 19px;
        border-bottom: none !important;
        font-family: 'Faustina', serif;
        text-transform: uppercase;
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
    h3.heading-style-four {
        margin: 15px;
        padding: 0px 0px 0px 45px;
        position: relative;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 20px;
        color: #fff;
        display: inline-block;
        font-family: 'Faustina', serif;
    }
    h3.heading-style-four:before {
        content: "";
        display: block;
        background-color: #ffab23;
        position: absolute;
        left: 0;
        top: 6px;
        width: 30px;
        height: 13px;
    }
    a.cat-more-news-btn {
        outline: none;
        line-height: 18px;
        padding: 0px;
        width: fit-content;
        border: none;
        color: #7b1c18;
        text-transform: capitalize;
        font-size: 12px;
        border-radius: 2px;
        float: right;
        font-weight: 700;
        transition-duration: .5s;
        display: block;
        position: relative;
        margin-bottom: 10px;
    }
    a.cat-more-news-btn:after {
        font-family: "Font Awesome 5 Free";
        content: "\f30b";
        margin-left: 8px;
    }
    a.cat-more-news-btn:hover {
        color: #f4b01b;
        transition-duration: .5s;
    }
    ul.nav.navbar-nav li a {
        text-decoration: none;
        display: block;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        margin: 0px;
        padding: 0px 9px;
        line-height: 41px;
        font-size: 15px;
        font-family: 'Libre Franklin', sans-serif;
    }
    li.mega-item-li {
        width: 100%;
        height: auto;
        display: contents;
    }
    h1, h2, h3, h4, h5, h6 {
       font-family: 'Faustina', serif;
       font-weight: 400;
    }
    p, span {
        font-family: 'Libre Franklin', sans-serif;
    }
    li{
        font-family: 'Faustina', serif;
        font-weight: 400;
    }
    a, a:focus, a:hover, a:active {
        text-decoration: none !important;
    }
    @media (min-width: 1200px) {
    .container {
        width: 1260px;
    }
    }
    /*=========== TOP MENU ============*/
    ul.day-weather {
        margin: 0px 0px 0px 15px;
        padding: 0px;
        display: block;
        width: 360px;
        position: relative;
        float: left;
    }
    ul.day-weather i {
        color: #f4b01b;
        font-size: 20px;
    }
    ul.day-weather li {
        color: #5a5757;
        margin: 0px 6px;
        font-size: 14px;
        line-height: 30px;
        list-style-type: none;
        display: inline-block;
    }
    ul.day-weather li:first-child {
        font-size: 16px;
        color: #000;
    }
    ul.day-weather li:last-child {
        font-size: 12px;
        color: #adadad;
    }
    .main-logo img {
        max-width: 100%;
        height: auto;
    }
    .main-logo img {
        max-width: 100%;
        height: auto;
    }
    header {
        float: left;
        width: 100%;
        margin: 0px;
        padding: 9px 0px 15px 0px;
        max-height: 83.3px;
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
    .top-menu-right {
        float: right;
        text-align: right;
    }
    ul.top-menu li a {
        text-decoration: none;
        display: block;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 20px;
        padding: 0px 10px;
        color: #212121;
        border-radius: 20px;
    }
    ul.top-menu li.active a {
        background-color: #212121;
        color: #fff;
    }
    ul.top-menu li a button {
        background-color: #7b0505;
        border: none;
        border-radius: 3px;
        line-height: 30px;
        color: #fff;
        font-size: 14px;
        padding: 0px 10px;
        outline: none;
    }
    li.top-social-btn a i {
        color: #fff !important;
        height: 20px;
        width: 20px;
        line-height: 20px;
        text-align: center;
        margin: 0px;
        padding: 0px !important;
        font-size: 11px !important;
        transition-duration: .5s;
        border-radius: 50%;
    }
    li.top-social-btn a i:hover {
        transition-duration: .5s;
        background-color: #212121 !important
    }
    .top-menu-right li a {
        margin: 0px !important;
        padding: 0px 2px !important;
    }
    li.top-social-btn a i.fab.fa-facebook-f {
        background-color: #3c51a5;
    }
    li.top-social-btn a i.fab.fa-twitter {
        background-color: #5db2f7;
    }
    li.top-social-btn a i.fab.fa-instagram {
        background-color: #d94b8e;
    }
    li.top-social-btn a i.fab.fa-pinterest-p {
        background-color: #d93a34;
    }
    li.top-social-btn a i.fab.fa-linkedin-in {
        background-color: #036593;
    }
    li.top-social-btn a i.fab.fa-telegram-plane {
        background-color: #299ecf;
    }
    li.top-social-btn a i.fab.fa-youtube {
        background-color: #fa423b;
    }
    /* RESPONSIVE MENU */
    .mobile-menu-box {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
        z-index: 2;
        width: 100%;
        background-color: #333;
        height: 100%;
        padding: 10px 70px 10px 10px;
        /*display: none;*/
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
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 9px solid #f3b01b;
        position: absolute;
        right: 0;
        top: 11px;
    }
    ul.mobile-custom-dropdown {
        display: none;
        margin: 0px 0px 0px 30px;
        padding: 0px;
    }
    button.main-nav-bd-close {
        position: fixed;
        right: 10px;
        top: 10px;
        background-color: #f3b136;
        color: #fff;
        border: none;
        outline: none;
        line-height: 41px;
        width: 40px;
        text-align: center;
        font-size: 28px;
    }
    button.main-nav-bd-toggle {
        display: none;
    }
    /* //RESPONSIVE MENU */

    @media screen and (max-width: 768px) {
        .bd-weather-details {
        display: none;
        }
        li.top-social-btn {
        display: none !important;
        }
        li.read-in-odia {
        margin-left: 0px;
        margin-top: 2px;
        }
        li.read-in-odia a {
        font-size: 12px !important;
        }
        li.read-in-odia a img {
        width: 28px;
        }
        .main-logo img {
        width: 150px;
        height: auto;
    }
    header {
        padding: 5px 0px;
    }
    }
    @media screen and (max-width: 992px) {
        .bd-main-navmenu {
        display: none;
        }
        input.megamenu-search-field {
        right: 40px;
        width: calc(100% - 40px);
        list-style: 41px;
        }
        button.main-nav-bd-toggle {
        border: none;
        outline: none;
        margin: 0px 0px 0px 15px;
        padding: 0px;
        color: #fff;
        background: none;
        font-size: 29px;
        display: inline-block;
    }
    }
    /*=========== //TOP MENU ============*/
    /*============ MEGA MENU =============*/
    a.darkmode-btn {
        text-transform: capitalize !important;
        font-weight: 700 !important;
        font-size: 12px !important;
        cursor: pointer;
    }
    a.darkmode-btn strong {
        background-color: #000000;
        outline: none;
        width: 37px;
        height: 15px;
        border-radius: 10px;
        position: relative;
        margin-top: 14px;
        float: right;
        transition-duration: 1s;
        border: solid 1px #7f6161;
    }
    span.darkmode-btn-text {
        width: 95px !important;
        display: inline-block;
        line-height: 39px;
        font-size: 15px;
        font-weight: normal;
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
        right: -1px !important;
        left: auto;
        top: -4px;
        transition-duration: 1s;
        color: #7b1c18;
        font-size: 14px;
        line-height: 13px;
        padding-left: 1px;
    }
    .dark-theme a.darkmode-btn strong {
        background-color: #000;
        transition-duration: 1s;
    }
    .dark-theme a.darkmode-btn i {
        border: solid 2px #fff;
    }
    .mega-menu-right {
        float: right !important;
    }
    .navbar-collapse.collapse {
        margin: 0px;
        padding: 0px;
        position: relative;
    }
    div.megamenu {
        float: left;
        width: 100%;
        background-color: #7b0505;
        display: block;
        margin: 0px 0px 15px 0px;
        padding: 0px;
        position: relative;
    }
    div.fixed-megamenu {
        top: 0;
        position: fixed;
        width: 100%;
        transition-duration: .5s;
        z-index: 9;
    }
    ul.nav.navbar-nav {
        margin: 0px;
        padding: 0px;
        width: fit-content;
    }
    ul.nav.navbar-nav li {
        list-style-type: none;
        float: left;
        margin: 0px;
        padding: 0px;
        border-right: 1px solid #212121;
        position: initial;
    }
    ul.nav.navbar-nav li.sticky-logo-home {
        width: 63px;
        height: 41px;
        text-align: center;
    }
    ul.nav.navbar-nav li.sticky-logo-home a i {
        font-size: 19px;
    }
    li.dropdown.single-menu a i {
        color: #fff;
    }
    ul.nav.navbar-nav li:last-child {
        border-right: none;
    }
    ul.nav.navbar-nav li a:hover, ul.nav.navbar-nav li a:focus, ul.nav.navbar-nav li a:active {
        background-color: #efe9e9;
        transition-duration: .5s;
        color: #000;
    }
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        border: none;
        border-radius: 0px;
    }
    ul.dropdown-menu.megamenu {
        padding: 15px;
    }
    .mega-menu-right {
        float: right;
    }
    ul.nav.navbar-nav li.more {
        border-right: none;
    }
    .mega-menu-right .dropdown-menu.megamenu {
        margin: 0px;
        padding: 25px 0px;
    }
    ul.nav.navbar-nav li.menu-active {
        background-color: #efe9e9;
    }
    ul.nav.navbar-nav li.menu-active a {
        color: #000 !important;
    }
    ul.nav.navbar-nav li.menu-active a i {
        color: #000 !important;
    }
    .single-menu {
        position: relative !important;
    }
    ul.single-dropdown {
        margin: 0px;
        padding: 0px;
        position: absolute;
        left: 0px;
        top: 35px;
        width: 190px;
        background-color: #fff;
        z-index: 9;
        display: none;
        /*overflow-y: scroll;*/
        max-height: 400px;
    }
    /*ul.single-dropdown::-webkit-scrollbar{
        display: none;
    }*/
    ul.single-dropdown li {
        list-style-type: none;
        display: block !important;
        float: none !important;
        border-bottom: solid .5px #2f2d2d;
        border-right: none !important;
    }
    ul.single-dropdown li a {
        text-decoration: none;
        display: block;
        line-height: 30px !important;
        color: #000 !important;
    }
    ul.single-dropdown li a:hover {
        background-color: #efe9e9 !important;
    }
    li.megamenu-search {
        text-decoration: none;
        display: block;
        color: #fff;
        text-transform: uppercase;
        font-weight: 500;
        margin: 0px !important;
        padding: 0px 9px !important;
        line-height: 40px;
        font-size: 15px;
        cursor: pointer;
        width: 33px;
        height: 40px;
    }
    input.megamenu-search-field {
        position: absolute;
        right: 7.5px;
        top: 0;
        border: none;
        outline: none;
        background-color: #f1f1f6;
        color: #000;
        line-height: 39px;
        text-align: center;
        display: none;
        z-index: 2;
        width: 45%;
    }
    input.megamenu-search-field::placeholder {
        color: #000;
        padding-left: 10px;
        font-family: 'Faustina', serif;
        font-size: 20px;
    }
    .mega-menu-right ul.single-dropdown {
        right: -2px !important;
        left: auto;
    }
    .large-menu-item {
        position: relative;
        margin: 0px;
        padding: 0px;
        overflow: hidden;
        min-height: 200px;
    }
    .large-menu-item img {
        width: 100%;
        /*height: 135px;*/
        object-fit: cover;
    }
    .large-menu-item a {
        margin: 0px;
        padding: 0px !important;
    }
    .large-menu-item h4 {
        margin: 0px;
        padding: 7px 0px;
        color: #333;
        font-size: 16px;
        line-height: 20px;
        text-transform: capitalize;
    }
    .large-menu-item a:hover {
        background: none !important;
    }
    .large-menu-item-margin {
        margin: 0px;
        padding: 0px 15px 0px 0px !important;
    }
    ul.dropdown-menu.megamenu li {
        border: none !important;
    }
    ul.large-menu-item-list {
        margin: 0px;
        padding: 0px;
    }
    ul.large-menu-item-list li {
        list-style-type: none;
        display: block !important;
        float: none !important;
        line-height: 35px !important;
    }
    ul.large-menu-item-list li a {
        color: #333 !important;
        border-bottom: solid 1px #e6e6e6;
    }
    ul.large-menu-item-list li a:hover {
        background: none !important;
    }
    li.sticky-logo-white {
        display: none;
        width: 63px;
    }
    .container.megamenu-container {
        position: relative;
    }
    button.megamenu-search-close {
        border: none;
        outline: none;
        background: none;
        color: #fff;
        position: absolute;
        top: 0;
        right: 7.5px;
        width: 40px;
        height: 41px;
        font-size: 22px;
        background-color: #ef5637;
        transition-duration: .5s;
        z-index: 3;
    }
    button.megamenu-search-go {
        border: none;
        outline: none;
        color: #9c8d8d;
        position: absolute;
        top: 0;
        right: 47.5px;
        width: 40px;
        height: 41px;
        font-size: 18px;
        background: none;
        transition-duration: .5s;
        z-index: 3;
    }
    /*=========== //MEGA MENU ============*/
    /*============ ADVERTISEMENT =============*/
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
/* HEADER SOCIAL MEDIA */
.svg-sprite {
background: url(https://odishatv.in/commondir/images/svg/svg-sprite.svg) no-repeat;
}
span.svg-sprite-label {
    display: none;
}
a.facebook.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: -120px -90px;
}
a.twitter.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: -60px -90px;
}
a.instagram.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: -150px -90px;
}
a.linkedin.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: -180px -90px;
}
a.telegram.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: -90px -90px;
}
a.koo.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: -210px -90px;
}
a.youtube.svg-sprite {
    width: 22px;
    height: 22px;
    background-position: 0 -90px;
}
a.svg-sprite.translate-svg {
    width: 35px;
    height: 17px;
    background-position: -201px -8px;
}
li.read-in-odia {
    position: relative;
    margin-left: 10px;
    float: right;
    margin-top: 3px;
}
/* //HEADER SOCIAL MEDIA */
</style>
<header>
  <div class="container">
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6">
    <div class="main-logo">
      <a href="https://odishatv.in/"><img src="https://odishatv.in/commondir/images/logo.svg" class="main-logo-img" alt="OdishaTV" title="OdishaTV" style="width: 300px; height: 65px;"></a>
    </div>
  </div>
<div class="col-lg-9 col-md-9 col-sm-7 col-xs-6" style="height: 51px; position: relative;">
  <div class="bd-weather-details">
  <div id="weather">  
</div>
</div>
<ul class="top-menu top-menu-right" style="position: absolute; top:25px; right: 7.5px;">
   <li class="top-social-btn"><a href="https://www.facebook.com/otvnews/" title="Facebook" target="_blank" class="facebook svg-sprite" height="22" width="22"><span class="svg-sprite-label">facebook</span></a></li>
   <li class="top-social-btn"><a href="https://twitter.com/otvnews" title="Twitter" target="_blank" class="twitter svg-sprite" height="22" width="22"><span class="svg-sprite-label">twitter</span></a></li>
   <li class="top-social-btn"><a href="https://www.instagram.com/otv.news" title="Instagram" target="_blank" class="instagram svg-sprite" height="22" width="22"><span class="svg-sprite-label">instagram</span></a></li>
   <li class="top-social-btn"><a href="https://www.linkedin.com/company/odishatv" title="LinkedIn" target="_blank" class="linkedin svg-sprite" height="22" width="22"><span class="svg-sprite-label">linkedin</span></a></li>
   <li class="top-social-btn"><a href="https://t.me/otvtelegram" title="Telegram" target="_blank" class="telegram svg-sprite" height="22" width="22"><span class="svg-sprite-label">telegram</span></a></li>
   <li class="top-social-btn"><a href="https://www.kooapp.com/profile/otvnews" title="Koo" target="_blank" class="koo svg-sprite" height="22" width="22"><span class="svg-sprite-label">koo</span></a></li>
   <li class="top-social-btn"><a href="https://www.youtube.com/c/OTVNewsEnglish" title="Youtube" target="_blank" class="youtube svg-sprite" height="22" width="22"><span class="svg-sprite-label">youtube</span></a></li>
   <li class="read-in-odia"><a href="https://otvkhabar.in/" title="ଓଡ଼ିଆରେ ପଢନ୍ତୁ" target="_blank" class="svg-sprite translate-svg" width="35" height="17"><span class="svg-sprite-label">translate</span></a></li>
</ul>
</div>
</div>
</div>
</header>
  <!--======================= MEGA MENU =========================-->
  <div class="megamenu">
    <div class="container megamenu-container">
      <button class="megamenu-search-close" style="display: none;"><i class="fas fa-times"></i>
      </button>
      <button class="megamenu-search-go" id="searchbtn" style="display: none;"><i class="fas fa-search"></i>
      </button>
      <input placeholder="Search here..." type="text" name="megamenu-search" id="megamenu-search" class="megamenu-search-field" required="" style="display: none;">
      <div class="navbar-collapse">
        <button class="main-nav-bd-toggle"><i class="fas fa-bars bd-navtoggle"></i>
        </button>
        <ul class="nav navbar-nav bd-main-navmenu">
          <li class="sticky-logo-white" style="display: none;">
            <a href="">
              <img src="https://odishatv.in//commondir/images/logo-white.png" alt="home" title="home">
            </a>
          </li>
          <li class="sticky-logo-home"><a href="https://odishatv.in/"><i class="fas fa-home"></i> </a>
          </li>
          <li data-catids="9.30,4,5" data-menuid="menucontent1" class="dropdown menu-large"><a href="" title="Odisha" target="_self">Odisha<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li class="col-lg-15 large-menu-item-margin">
                <ul class="large-menu-item-list">
                  <li><a href="" title="Bhubaneswar" target="_self">Bhubaneswar</a>
                  </li>
                  <li><a href="" title="Cuttack" target="_self">Cuttack</a>
                  </li>
                  <li><a href="" title="Puri" target="_self">Puri</a>
                  </li>
                  <li><a href="" title="Sambalpur" target="_self">Sambalpur</a>
                  </li>
                  <li><a href="" title="Berhampur" target="_self">Berhampur</a>
                  </li>
                  <li><a href="" title="Rourkela" target="_self">Rourkela</a>
                  </li>
                </ul>
              </li>
              <li class="mega-item-li" id="menucontent1"></li>
            </ul>
          </li>
          <li data-catids="3" data-menuid="menucontent2" class="dropdown menu-large"><a href="" title="Jobs" target="_self">Jobs<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li class="col-lg-15 large-menu-item-margin">
                <ul class="large-menu-item-list">
                  <li><a href="" title="Govt Jobs" target="_self">Govt Jobs</a>
                  </li>
                </ul>
              </li>
              <li class="mega-item-li" id="menucontent2"></li>
            </ul>
          </li>
          <li data-catids="4" data-menuid="menucontent3" class="dropdown menu-large"><a href="" title="Education" target="_self">Education<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li class="col-lg-15 large-menu-item-margin">
                <ul class="large-menu-item-list">
                  <li><a href="" title="CBSE" target="_self">CBSE</a>
                  </li>
                  <li><a href="" title="UGC" target="_self">UGC</a>
                  </li>
                  <li><a href="" title="CHSE" target="_self">CHSE</a>
                  </li>
                  <li><a href="" title="BSE" target="_self">BSE</a>
                  </li>
                </ul>
              </li>
              <li class="mega-item-li" id="menucontent3"></li>
            </ul>
          </li>
          <li><a href="" title="National" target="_self">National</a>
          </li>
          <li data-catids="2,16,17" data-menuid="menucontent5" class="dropdown menu-large"><a href="" title="Entertainment" target="_self">Entertainment<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li class="col-lg-15 large-menu-item-margin">
                <ul class="large-menu-item-list">
                  <li><a href="" title="" target="_self">Hollywood</a>
                  </li>
                  <li><a href="" title="" target="_self">Bollywood</a>
                  </li>
                  <li><a href="" title="" target="_self">Tollywood</a>
                  </li>
                  <li><a href="" title="" target="_self">Telly</a>
                  </li>
                </ul>
              </li>
              <li class="mega-item-li" id="menucontent5"></li>
            </ul>
          </li>
          <li><a href="" title="" target="_self">Videos</a>
          </li>
          <li><a href="" title="" target="_self">Weather</a>
          </li>
          <li><a href="" title="" target="_self">COVID 19</a>
          </li>
          <li class="dropdown single-menu"><a href="#" title="allmenu" target="_self"><i class="fas fa-ellipsis-h"></i></a>
            <ul class="single-dropdown">
              <li><a href="" title="" target="_self">Exclusive</a>
              </li>
              <li><a href="" title="" target="_self">Photos</a>
              </li>
              <li><a href="" title="" target="_self">Politics</a>
              </li>
              <li><a href="" title="" target="_self">Crime</a>
              </li>
              <li><a href="" title="" target="_self">Health</a>
              </li>
              <li><a href="" title="" target="_self">Miscellaneous</a>
              </li>
              <li><a href="" title="" target="_self">Long Form</a>
              </li>
              <li><a href="" title="" target="_self">Sports</a>
              </li>
              <li><a href="" title="" target="_self">Business</a>
              </li>
              <li><a href="" title="" target="_self">Festivals</a>
              </li>
              <li><a href="" title="" target="_self">International</a>
              </li>
              <li><a href="" title="" target="_self">Features</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav mega-menu-right">
          <li class="liveicon">
            <a href="">
              <img src="https://odishatv.in/commondir/images/livetvicon.gif" alt="LIVE TV" style="width:29px; height:27px;">LIVE TV</a>
          </li>
          <li><a onclick="myFunction()" class="darkmode-btn"><span class="darkmode-btn-text">DARK MODE</span> <strong><i class="fas fa-moon darkmode-icon"></i></strong></a>
          </li>
          <li class="megamenu-search"><i class="fas fa-search" id="searchbtn1"></i>
          </li>
        </ul>
        <!--############ Primary right menu############-->
      </div>
    </div>
  </div>