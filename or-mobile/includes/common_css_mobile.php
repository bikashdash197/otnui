/*====================== HEADER ======================*/
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
         top:0;
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
         /*====================== //HEADER ======================*/
         /*====================== FOOTER ========================*/
         footer {
         float: left;
         background-color: #212121;
         width: 100%;
         padding: 30px 0;
         z-index: 1;
         position: relative;
         }
         ul.footer-link {
         margin: 0;
         padding: 0;
         }
         ul.footer-link li {
         list-style-type: none;
         display: block;
         }
         ul.footer-link li a {
         color: #a9a3a3;
         font-size: 13px;
         line-height: 30px;
         text-decoration: none;
         display: block;
         transition-duration: .5s;
         }
         ul.footer-link .footer-link-heading {
         color: #a9a3a3;
         font-size: 14px;
         text-transform: capitalize;
         font-weight: 700;
         margin: 0 0 5px 0;
         padding: 0;
         border-bottom: 1px solid #cecdcd;
         }
         .footer-sidebar {
         padding-left: 10px;
         display: inline-table;
         }
         h4.odishatv-app-heading {
         color: #fff;
         margin: 0 0 30px 0;
         padding: 3px 0 0 0;
         font-size: 15px;
         font-weight: 700;
         position: relative;
         padding-left: 46px;
         }
         h4.odishatv-app-heading img {
         width: 33px;
         height: auto;
         position: absolute;
         left: 0;
         top: -3px;
         }
         ul.odishatv-app {
         margin: 20px 0 20px 0;
         padding: 0;
         }
         ul.odishatv-app li {
         list-style-type: none;
         display: inline-block;
         }
         ul.odishatv-app li a {
         text-decoration: none;
         display: block;
         width: auto;
         height: 28px;
         margin-right: 5px;
         }
         h4.tarangplus-app-heading {
         color: #fff;
         display: inline-block;
         margin: 20px 0 0 0;
         padding: 3px 0 0 0;
         font-size: 15px;
         font-weight: 700;
         position: relative;
         padding-left: 90px;
         }
         h4.tarangplus-app-heading img {
         position: absolute;
         left: 0;
         top: 0;
         height: 20px;
         width: auto;
         }
         section.copyright {
         float: left;
         width: 100%;
         background-color: #000;
         padding: 10px 0;
         }
         section.copyright h6 {
         color: #a9a3a3;
         margin: 4px 0 0 0;
         padding: 0;
         font-size: 13px;
         }
         section.copyright ul {
         margin: 0;
         padding: 0;
         text-align: right;
         }
         section.copyright ul li {
         list-style-type: none;
         display: inline-block;
         margin: 0 0 0 15px;
         }
         section.copyright ul li a {
         color: #a9a3a3;
         font-size: 13px;
         list-style-type: none;
         text-decoration: none;
         text-transform: capitalize;
         }
         ul.footer-follow-us {
         margin: 20px 0 0 0;
         padding: 0;
         }
         ul.footer-follow-us li {
         list-style-type: none;
         float: left;
         }
         .footer-free-heading {
         margin: 0 0 10px 0;
         padding: 0;
         color: #fff;
         font-size: 16px;
         display: block;
         width: 100%;
         }
         ul.footer-follow-us li a {
         text-decoration: none;
         display: block;
         text-transform: uppercase;
         line-height: 20px;
         padding: 0 7px 0 0;
         color: #212121;
         border-radius: 20px;
         }
         .scrollToTop {
         width: 40px;
         height: 40px;
         line-height: 40px;
         text-align: center;
         font-weight: 700;
         color: #fff;
         text-decoration: none;
         position: fixed;
         bottom: 100px;
         margin-right: 0;
         right: 0;
         bottom: 78px;
         right: 10px;
         font-size: 16px;
         background-color: #a00606;
         transition-duration: 0.5s;
         display: none;
         cursor: pointer;
         border-radius: 50%;
         padding: 0;
         z-index: 7;
         }
         /*===================== // FOOTER =======================*/
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
         /*================= Mobile Bredcrumb==================*/
         ul.bredcrumb-mobile-sec {
         margin: 0;
         padding: 10px 0px;
         display: inline-block;
         height: 50px;
         line-height: 22px;
         overflow: hidden;
         border-bottom: 1px solid #dfdfdf;
         width: 100%;
         position: relative;
         }
         ul.bredcrumb-mobile-sec:before{
         content: "";
         display: block;
         background: linear-gradient(90deg,rgba(0,212,255,0) 0,rgb(255 255 255 / 50%) 39%);
         width: 41px;
         height: 100%;
         position: absolute;
         right: 0;
         top: 0;
         z-index: 2;
         }
         ul.bredcrumb-mobile-sec li {
         display: inline-block;
         margin-right: 12px;
         line-height: 33px;
         position: relative;
         }
         ul.bredcrumb-mobile-sec li a {
         font-size: 17px;
         color: #000;
         font-weight: 400;
         }
         ul.bredcrumb-mobile-sec li:after {
         content: "";
         content: "";
         background-image: url(images/svg/bread-crumb.svg);
         margin-left: 8px;
         display: block;
         width: 12px;
         height: 12px;
         background-repeat: no-repeat;
         position: absolute;
         right: -15px;
         top: 15px;
         }
         ul.bredcrumb-mobile-sec li:last-child a {
         color: #50abf1;
         }
         ul.bredcrumb-mobile-sec li:last-child:after{
         display: none;
         }
         /*================= //Mobile Bredcrumb==================*/
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
         h1.bd-headline-one {
         position: relative;
         font-size: 25px;
         font-weight: 500;
         margin: 5px 0px;
         line-height: 23px;
         }
         h1.bd-headline-one span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         }
         h1.bd-headline-one:after {
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