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
         .sticky {
         position: sticky;
         top: 50px;
         display: inline-block;
         width: 100%;
         }
         /* //5 Columns */
         body {
         margin: 0px;
         padding: 0px;
         font-family: 'Roboto', sans-serif;
         }
         a, a:hover, a:focus, a:active {
         text-decoration: none;
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
         .otv-300-250-ad {
         width: 300px;
         height: 250px;
         display: flex;
         margin: 0 auto;
         text-align: center;
         margin-bottom: 20px;
         overflow: hidden;
         background-color: #9aef59;
         }
         .news-no-img {
    padding-right: 7.5px !important;
}
         /*TOPBAR STYLE */
         .topbar {
         float: left;
         width: 100%;
         background-color: #f5f5f5;
         border-bottom: solid 1px #adadad;
         height: 35px;
         margin-bottom: 15px;
         }
         ul.topbar-leftnav {
         margin: 0px;
         padding: 0px;
         float: left;
         }
         ul.topbar-leftnav li {
         list-style-type: none;
         float: left;
         border-right: 1px solid #bfbfbf;
         padding: 0px 10px;
         line-height: 34px;
         }
         ul.topbar-leftnav li a {
         text-decoration: none;
         display: block;
         }
         ul.topbar-leftnav li a img {
         width: 16px;
         height: 12px;
         }
         ul.topbar-leftnav li:first-child {
         padding-left: 0px;
         }
         ul.topbar-rightnav {
         margin: 5px 0px 0px 0px;
         padding: 0px;
         float: right;
         }
         ul.topbar-rightnav li {
         list-style-type: none;
         float: left;
         margin-left: 10px;
         }
         ul.topbar-rightnav li a {
         display: block;
         }
li.topbar-subscribe a {
    background-color: #f65028;
    color: #fff;
    text-transform: uppercase;
    font-weight: normal;
    font-size: 13px;
    line-height: 25px;
    padding: 0px 15px;
    border-radius: 3px;
}
         li.topbar-livetv a {
         background-color: #fff;
         line-height: 25px;
         padding: 0px 10px 0px 30px;
         color: #44414c;
         font-weight: 700;
         font-size: 14px;
         position: relative;
         border-radius: 4px;
         }
         li.topbar-livetv a:before {
         content: "";
         display: block;
         width: 9px;
         height: 9px;
         border-radius: 50%;
         background: #ea4229;
         cursor: pointer;
         box-shadow: 0 0 0 rgb(244 176 27);
         animation: pulse 2s infinite;
         position: absolute;
         top: 8px;
         left: 10px;
         border: solid 2px #f3b11c;
         }
         li.topbar-app a {
         background-color: #fff;
         color: #44414c;
         font-weight: 700;
         font-size: 14px;
         line-height: 30px;
         padding: 0px 20px;
         border: solid 2px #333;
         border-radius: 9px;
         margin-top: -10px;
         }
         @-webkit-keyframes pulse {
         0% {
         -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
         }
         70% {
         -webkit-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
         }
         100% {
         -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
         }
         }
         @keyframes pulse {
         0% {
         -moz-box-shadow: 0 0 0 0 rgb(243, 197, 21);
         box-shadow: 0 0 0 0 rgb(243, 197, 21);
         }
         70% {
         -moz-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
         box-shadow: 0 0 0 10px rgba(204,169,44, 0);
         }
         100% {
         -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
         box-shadow: 0 0 0 0 rgba(204,169,44, 0);
         }
         }
         select#select-weather {
         margin: 0px;
         padding: 0px;
         border: none;
         height: 34px;
         position: relative;
         margin-left: 10px;
         padding-left: 23px;
         background-color: #f5f5f5;
         outline: none;
         }
         select.weather-sunny {
         background-image: url(images/svg/weather-gray.svg);
         background-repeat: no-repeat;
         background-position: left;
         }
         /*TOPBAR STYLE */
         /* HEADER */
         header {
         float: left;
         width: 100%;
         text-align: center;
         padding: 0px 0px 0px 0px;
         position: relative;
         z-index: 4;
         }
         ul.translate-n-mode {
         margin: 0px;
         padding: 0px;
         position: absolute;
         right: 0;
         top: 26px;
         }
         ul.translate-n-mode li {
         list-style-type: none;
         float: left;
         margin-left: 30px;
         position: relative;
         }
         ul.translate-n-mode li button {
         margin: 0px;
         padding: 0px;
         border: none;
         background: no-repeat;
         }
         ul.translate-n-mode li a {
         text-decoration: none;
         display: block;
         }
         .logo-section {
         position: relative;
         border-bottom: solid 1px #e5e5e5;
         padding-bottom: 15px;
         z-index: -1;
         float: left;
         width: 100%;
         }
         ul.translate-n-mode li:first-child:before {
         content: "";
         display: block;
         width: 1px;
         height: 18px;
         background-color: #d3d3d3;
         position: absolute;
         right: -16px;
         top: 4px;
         }
         /* //HEADER */
         /*TAG MENU */
         .tag-menu {
         float: left;
         width: 100%;
         margin: 0px;
         }
         .tag-menu ul {
         margin: 0px;
         padding: 12px 0px 0px 0px;
         border-top: solid 1px #e92c2a;
         }
         .tag-menu ul li {
         list-style-type: none;
         float: left;
         }
         .tag-menu ul li a {
         color: #000;
         font-weight: 400;
         text-transform: capitalize;
         font-size: 12px;
         line-height: 30px;
         border: solid 1px #e5e5e5;
         background-color: #fff;
         text-decoration: none;
         display: block;
         margin-right: 10px;
         padding: 0px 10px;
         border-radius: 19px;
         position: relative;
         margin-bottom: 10px;
         transition-duration: 1s;
         }
         .tag-menu ul li a:hover {
         background-color: #f5f5f5;
         transition-duration: 1s;
         }
         .tag-menu ul li a span {
         background-color: #f65028;
         position: absolute;
         right: 5px;
         top: -5px;
         color: #fff;
         text-transform: uppercase;
         line-height: 12px;
         padding: 0px 5px;
         font-size: 9px;
         border-radius: 13px;
         }
         .tag-menu ul li {
         list-style-type: none;
         float: left;
         position: relative;
         }
         ul.tag-menu-morechild {
         margin: 0px;
         width: 300px;
         position: absolute;
         right: 0px;
         top: 42px;
         display: none;
         z-index: 1;
         background-color: #f5f5f5;
         padding: 10px;
         }
         li.tag-menu-more:hover ul.tag-menu-morechild {
         display: block;
         }
         ul.tag-menu-morechild li {
         list-style-type: none;
         display: block;
         }
         /*//TAG MENU */
         /*================ FOOTER ================*/
         footer {
         float: left;
         background-color: #001e29;
         width: 100%;
         padding: 30px 0px;
         position: relative;
         }
         .otv-footer-logo-dark {
         margin-bottom: 40px;
         }
         section.otv-copyright {
         float: left;
         width: 100%;
         background-color: #fff;
         padding: 10px 0px;
         }
         section.otv-copyright h6 {
         color: #858080;
         margin: 0px;
         padding: 0px;
         font-size: 13px;
         display: inline-block;
         }
         section.otv-copyright ul {
         margin: 0px;
         padding: 0px;
         text-align: left;
         }
         section.otv-copyright ul li {
         list-style-type: none;
         display: inline-block;
         margin: 0px 0px 0px 15px;
         position: relative;
         }
         section.otv-copyright ul li a {
         color: #a9a9a9;
         font-size: 15px;
         list-style-type: none;
         text-decoration: none;
         font-weight: 500;
         }
         section.otv-copyright ul li:before {
         content: "";
         display: block;
         position: absolute;
         right: -10px;
         top: 6px;
         width: 2px;
         height: 15px;
         background-color: #bbb;
         }
         section.otv-copyright ul li:last-child:before{
         display: none;
         }
         .otv-footer-logo-dark img {
         width: 362px;
         height: 64px;
         }
         ul.otv-footer-download-dark {
         background-color: #223d46;
         padding: 10px;
         border-radius: 8px;
         }
         ul.otv-footer-download-dark li {
         display: inline-block;
         }
         ul.otv-footer-download-dark li img {
         width: 98px;
         height: 38px;
         }
         ul.otv-footer-download-dark li:first-child a {
         color: #fff;
         font-size: 14px;
         }
         ul.otv-footer-link .otv-footer-link-heading {
         color: #ededed;
         font-size: 14px;
         text-transform: uppercase;
         font-weight: 700;
         margin: 0px 0px 5px 0px;
         padding: 0px;
         }
         ul.otv-footer-link {
         margin: 0px;
         padding: 0px;
         }
         ul.otv-footer-link li {
         list-style-type: none;
         display: block;
         }
         ul.otv-footer-link li a {
         color: #a9a3a3;
         font-size: 13px;
         line-height: 30px;
         text-decoration: none;
         display: block;
         transition-duration: 1s;
         }
         ul.otv-footer-link li a:hover {
         color: #fff;
         transition-duration: 1s;
         }
         .otv-footer-header {
         margin-bottom: 40px;
         padding-bottom: 40px;
         border-bottom: 1px solid #4c4c4c;
         }
         h3.footer-subscribe-heading {
         font-size: 16px;
         color: #fff;
         margin-bottom: 10px;
         }
         .otv-footer-newsletters input {
         border: none;
         background-color: #fff;
         line-height: 35px;
         padding: 0px 5px 0px 8px;
         border-radius: 2px;
         outline: none;
         width: 50%;
         }
         .otv-footer-newsletters button {
         background-color: #001e29;
         border: 1px solid #ffffff;
         border-radius: 5px;
         line-height: 33px;
         text-transform: capitalize;
         font-size: 16px;
         color: #fff;
         padding: 0px 24px;
         margin-left: 5px;
         transition-duration: 1s;
         }
         ul.otv-footer-follow-us {
         margin: 28px 0px 0px 0px;
         padding: 0px;
         }
         ul.otv-footer-follow-us h3 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #fff;
         font-size: 16px;
         }
         ul.otv-footer-follow-us li {
         list-style-type: none;
         float: left;
         }
         ul.otv-footer-follow-us li a {
         text-decoration: none;
         display: block;
         padding: 0px 10px 0px 0px;
         }
         ul.otv-footer-follow-us li a img {
         color: #fff !important;
         height: 29px;
         width: 29px;
         margin: 0px;
         padding: 0px !important;
         transition-duration: 1s;
         }
         ul.otv-footer-follow-us li a:hover {
         transition-duration: 1s;
         }
         .otv-footer-follow-heading {
         margin: 0px 10px 0px 0px;
         padding: 0px;
         color: #fff;
         font-size: 16px;
         }
         /*=============== //FOOTER ===============*/
         /*=============== FOOTER-NEWS ===============*/
         .otv-bd-ft-slide {
         float: left;
         width: 100%;
         -webkit-box-shadow: -1px -6px 5px -3px rgba(0,0,0,0.16);
         -moz-box-shadow: -1px -6px 5px -3px rgba(0,0,0,0.16);
         box-shadow: -1px -6px 5px -3px rgba(0,0,0,0.16);
         background-color: #fff;
         z-index: 1;
         position: relative;
         }
         .otv-fixed-article-slide-sec {
         bottom: 0px;
         position: sticky;
         width: 100%;
         transition-duration: .5s;
         z-index: 3;
         height: 76px;
         overflow: hidden;
         border-bottom: solid 1px #e5e5e5;
         }
         .otv-article-slide-item {
         position: relative;
         min-height: 76px;
         border-right: 2px #f1eaea solid;
         padding: 10px 0px 10px 106px;
         float: left;
         width: 24%;
         margin: 0px 6px;
         }
         .otv-article-slide-item:last-child {
         border: navajowhite;
         }
         .otv-article-slide-item img {
         position: absolute;
         width: 96px !important;
         height: 54px;
         object-fit: cover;
         left: 0;
         top: 10px;
         }
         .otv-article-slide-item ul {
         margin: 0px;
         padding: 0px;
         line-height: 17px;
         height: 54px;
         overflow: hidden;
         }
         .otv-article-slide-item ul li {
         list-style-type: none;
         display: inline;
         }
         .otv-article-slide-item ul li:first-child {
         position: relative;
         margin-right: 15px;
         }
         .otv-article-slide-item ul li:first-child:before {
         content: "";
         display: block;
         background-color: #e92b28;
         width: 1px;
         height: 10px;
         position: absolute;
         bottom: 3px;
         right: -10px;
         transform: rotate(10deg);
         }
         .otv-article-slide-item ul li a {
         font-size: 13px;
         text-decoration: none;
         display: inline;
         color: #000;
         }
         .otv-article-slide-item ul li:first-child a {
         color: #b30707;
         }
         .otv-article-slide-item ul li a:hover {
         color: #af262d;otv-
         }
         /*=============== //FOOTER-NEWS ===============*/
         /*=============== FOOTER-TOP-NEWS ===============*/
         .otv-article-slide-item-second {
         position: relative;
         min-height: 76px;
         padding: 10px 10px 10px 10px;
         float: left;
         width: 32%;
         margin: 0px 6px;
         }
         .otv-article-slide-item-second:before {
         content: "";
         display: block;
         position: absolute;
         right: 0px;
         top: 16px;
         width: 2px;
         height: 40px;
         background-color: #bbb;
         }
         .otv-article-slide-item-second h4 {
         font-size: 17px;
         color: #000;
         line-height: 22px;
         font-weight: 500;
         }
         .otv-article-slide-item-second:last-child:before {
         display: none;
         margin-right: 0px;
         padding: 0;
         }
         /*=============== //FOOTER-TOP-NEWS ===============*/
         /*============== MENU ==================*/
         div.fixed-megamenu {
         top: 0;
         position: fixed;
         width: 100%;
         transition-duration: .5s;
         z-index: 9;
         -webkit-box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.18);
         -moz-box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.18);
         box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.18);
         }
         .main-nav-sec {
         background-color: #fff;
         position: relative;
         float: left;
         width: 100%;
         height: 45px;
         }
         .main-nav-menu {
         float: left;
         width: calc(100% - 80px);
         }
         .main-nav-search {
         float: right;
         width: 30px;
         height: 45px;
         line-height: 45px;
         position: relative;
         margin-right: 40px;
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
         height: 16px;
        width: 16px;
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
         margin-right: 10px;
         padding-right: 10px;
         border-right: solid 1px #ffeded;
         }
         .main-nav-menu ul li:last-child {
         border-right: none;
         }
         .main-nav-menu ul li a {
         color: #000;
         line-height: 45px;
         text-transform: capitalize;
         font-size: 15px;
         font-weight: 700;
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
         width: 100%;
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
         border-right: none;
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
         border-top: 5px solid #b5a5a5;
         display: inline-block;
         margin-top: -10px;
         position: absolute;
         right: -13px;
         top: 17px;
         }
         li.megamenu-items a:after {
         display: none;
         }
         li.megamenu-items {
         height: 205px;
         }
         /*============== //MENU ==================*/
         /*============== COMMON TIME AND SHARE ==============*/
         ul.otv-cat-time {
         float: left;
         margin: 0;
         padding: 0;
         }
         ul.otv-cat-time li {
         display: inline-block;
         margin-right: 9px;
         position: relative;
         }
         ul.otv-cat-time li:first-child a {
         color: #032b77;
         font-size: 14px;
         font-weight: 500;
         }
         ul.otv-cat-time li:last-child:before {
         content: "";
         display: block;
         position: absolute;
         left: -8px;
         top: 8px;
         width: 6px;
         height: 6px;
         background-color: #b5afaf;
         border-radius: 50%;
         }
         ul.otv-cat-time li:last-child {
         font-size: 14px;
         color: #a9a9a9;
         font-weight: 400;
         }
         ul.otv-cat-share-icon {
         float: right;
         padding: 0;
         margin: 0;
         }
         ul.otv-cat-share-icon li {
         display: inline-block;
         margin-right: 7px;
         }
         ul.otv-cat-share-icon li img {
         width: 20px;
         height: 20px;
         }
         ul.otv-cat-share-icon li:last-child {
         margin-right: 0;
         }
         /*============= //COMMON TIME AND SHARE =============*/
         /*========= HEADER n FOOTER DARKMODE =========*/
         body.dark-theme {
                background-color: #000;
         }
         body.dark-theme .tag-menu ul li a, 
         body.dark-theme .main-nav-sec, 
         body.dark-theme ul.megamenu-nav, 
         body.dark-theme .search-field, 
         body.dark-theme input.megamenu-search-field, 
         body.dark-theme section.breaking-news h3, 
         body.dark-theme button.breaking-news-close, 
         body.dark-theme section.otv-copyright, 
         body.dark-theme .otv-bd-ft-slide, 
         body.dark-theme .topbar, 
         body.dark-theme select#select-weather, 
         body.dark-theme header {
            background-color: #333;
         }
         body.dark-theme .tag-menu ul li a, 
         body.dark-theme .main-nav-menu ul li a, 
         body.dark-theme li.megamenu-items-nav ul li a, 
         body.dark-theme li.megamenu-items h4, 
         body.dark-theme input.megamenu-search-field, 
         body.dark-theme input.megamenu-search-field::placeholder, 
         body.dark-theme .otv-article-slide-item-second h4, 
         body.dark-theme .otv-article-slide-item ul li:first-child a, 
         body.dark-theme .otv-article-slide-item ul li a, 
         body.dark-theme select#select-weather {
            color: #fff !important;
         }
         /*======== //HEADER n FOOTER DARKMODE ========*/
         /*=============== Slide Social Media ===============*/
         ul.otv-article-share-style-more-one {
         position: absolute;
         right: calc(100% + 5px);
         bottom: -7px;
         border: 1px solid #aaaaaa45;
         box-shadow: 0 2px 8px #9a9797;
         display: none;
         background-color: #fff;
         margin: 0px;
         width: max-content;
         height: 36px;
         overflow: hidden;
         padding: 0px 8px 0px 8px;
         }
         ul.otv-article-share-style-more-one li {
         list-style-type: none;
         float: left;
         margin: 0px 12.5px;
         padding: 0px;
         border: none !important;
         margin-left: 0px !important;
         padding-left: 0px !important;
         }
         ul.otv-article-share-style-more-one li:last-child {
         margin: 0px;
         }
         ul.otv-article-share-style-more-one li a {
         text-decoration: none;
         display: block;
         line-height: 21px;
         padding: 6px 0px;
         }
         .otv-share-social-media-add {
         position: relative;
         }
         li.otv-share-social-media-add a {
         cursor: pointer;
         display: block;
         }
         /*=============== //Slide Social Media ===============*/
         h3.otv-heading-new-three {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: -6px 0px 5px 0px;
         padding: 0px;
         }
         h3.otv-heading-new-three span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         }
         h3.otv-heading-new-three:after {
         content: "";
         width: -webkit-fill-available;
         position: absolute;
         right: 0;
         top: 17px;
         height: 4px;
         z-index: -1;
         display: block;
         background-color: #bbb;
         }
         /*================ HAMBURGER MENU ================*/
            .hamburger-nav {
       position: fixed;
       right: 0;
       top: 0;
       width: 320px;
       background-color: #fff;
       z-index: 5;
       -webkit-box-shadow: -4px 1px 5px 1px rgb(0 0 0 / 22%);
       -moz-box-shadow: -4px 1px 5px 1px rgba(0,0,0,0.22);
       box-shadow: -4px 1px 5px 1px rgb(0 0 0 / 22%);
       height: 100%;
   }
   button.sidemenubtn {
       position: absolute;
       top: 11px;
       right: 0;
       border: none;
       background: none;
       margin: 0px;
       padding: 0px;
       border-left: solid 1px #e7d4d4;
       width: 47px;
       text-align: center;
   }
   button.sidemenubtn img {
    height: 13px;
    width: 18px;
   }
   button.close-hamburger {
       background-color: #f55028;
       position: absolute;
       left: -45px;
       top: 0;
       border: none;
       height: 45px;
       width: 45px;
   }
   body.comment-active .hamburger-nav:before {
       content: "";
       position: fixed;
       left: 0;
       top: 0;
       width: 100%;
       height: 100%;
       background-color: #0000007a;
       z-index: -1;
   }
   .hamburger-user {
       background-color: #c12322;
       padding: 10px;
       display: inline-block;
       width: 100%;
   }
   .hamburger-user img {
       float: left;
       width: 45px;
       height: 45px;
       border-radius: 50%;
       margin-right: 10px;
   }
   .hamburger-user h6 {
       float: left;
       color: #fff;
       font-size: 17px;
       font-weight: 300;
       margin: 0px;
       padding: 0px;
       margin-top: 13px;
   }
   ul.hamburger-menu {
       margin: 0px;
       padding: 10px;
       max-height: calc(100% - 20px);
       overflow-y: scroll;
       background-color: #fff;
       margin-top: -10px;
   }
   ul.hamburger-menu li {
       list-style-type: none;
       display: block;
   }
   ul.hamburger-menu li a {
       text-decoration: none;
       display: block;
       color: #333;
       text-transform: capitalize;
       font-size: 14px;
       line-height: 40px;
       border-bottom: solid 1px #f3eaea;
   }
   ul.hamburger-menu li a span {
       border: solid 1px #e5e5e5;
       background-color: #fff;
       float: right;
       display: block;
       padding: 0px 15px;
       border-radius: 19px;
       line-height: 25px;
       margin-top: 6px;
   }
         /*================ //HAMBURGER MENU ================*/