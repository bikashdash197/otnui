
    body {
        margin: 0px;
        padding: 0px;
        display: block;
    }
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Faustina', serif;
        font-weight: 400;
    }
    
    h1 {
        padding-left: 7.5px;
        padding-right: 7.5px;
        margin: 0px;
    }
    
    p,
    span {
        font-family: 'Libre Franklin';
    }
    
    li {
        font-family: 'Faustina', serif;
    }
    
    a,
    a:focus,
    a:hover,
    a:active {
        text-decoration: none;
        outline: none;
    }
    
    h3.heading-style-one {
        margin: 0px 0px 15px 0px;
        padding: 0px 0px 0px 36px;
        font-weight: 400;
        font-size: 18px;
        position: relative;
        padding-right: 50px;
        text-transform: uppercase;
        color: #000;
    }
    
    h3.heading-style-one:before {
        content: "";
        display: block;
        background-color: #7b0505;
        position: absolute;
        left: 0;
        top: 6px;
        width: 30px;
        height: 13px;
    }
    
    h3.heading-style-two {
        margin: 0px 0px 20px 0px;
        padding: 0px 0px 0px 45px;
        position: relative;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 18px;
        color: #fff;
    }
    
    h3.heading-style-two:before {
        content: "";
        display: block;
        position: absolute;
        left: 0;
        top: 3px;
        width: 0;
        height: 0;
        border-top: 18px solid #fff;
        border-left: 33px solid transparent;
    }
    
    h3.heading-style-three {
        margin: 0px 0px 10px 0px;
        padding: 0px 0px 0px 45px;
        position: relative;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 18px;
        color: #000;
    }
    
    h3.heading-style-three:before {
        content: "";
        display: block;
        position: absolute;
        left: 0;
        top: 3px;
        width: 0;
        height: 0;
        border-top: 18px solid #f05127;
        border-left: 33px solid transparent;
    }
    
    h3.heading-style-four {
        margin: 15px;
        padding: 0px 0px 0px 45px;
        position: relative;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 18px;
        color: #fff;
        display: inline-block;
    }
    
    h3.heading-style-four:before {
        content: "";
        display: block;
        background-color: #ffab23;
        position: absolute;
        left: 0;
        top: 3px;
        width: 30px;
        height: 13px;
    }
    
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    
    .row {
        display: inline-block;
        width: 100%;
    }

    .col-12 {
        float: left;
        width: 100%;
        margin: 0px;
        padding: 0px;
    }
    
    .col-6 {
        float: left;
        width: 50%;
        margin: 0px;
        padding: 0px;
    }
    
    .col-4 {
        float: left;
        width: 33.33333333%;
        margin: 0px;
        padding: 0px;
    }
    
    .otv-300-250-ad {
        width: 300px;
        height: 250px;
        display: flex;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 15px;
        overflow: hidden;
    }
    
    .otv-320-50-ad {
        width: 320px;
        height: 50px;
        display: flex;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 15px;
        overflow: hidden;
    }
    
    .otv-300-50-ad {
        width: 300px;
        height: 50px;
        display: flex;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 15px;
        overflow: hidden;
    }
    
    .otv-300-600-ad {
        width: 300px;
        height: 600px;
        display: flex;
        margin: 0 auto;
        text-align: center;
        overflow: hidden;
    }
    
    @-webkit-keyframes pulse {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
        }
        70% {
            -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }
        100% {
            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }
    
    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgb(243, 197, 21);
            box-shadow: 0 0 0 0 rgb(243, 197, 21);
        }
        70% {
            -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }
        100% {
            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }
    /* HEADER */
    
    header {
        float: left;
        width: 100%;
        padding: 10px 0px 5px 0px;
        z-index: 9;
        background-color: #fff;
        -webkit-box-shadow: 1px 6px 5px -2px rgba(0, 0, 0, 0.22);
        -moz-box-shadow: 1px 6px 5px -2px rgba(0, 0, 0, 0.22);
        box-shadow: 1px 6px 5px -2px rgba(0, 0, 0, 0.22);
        border-bottom: solid 1px #e6e6e6;
    }
    
    header ul {
        margin: 7px 0px 0px 0px;
        padding: 0px;
        width: fit-content;
        float: right;
        position: relative;
    }
    
    header ul li {
        list-style-type: none;
        width: fit-content;
        text-align: center;
        display: inline-block;
    }
    
    header ul li a {
        text-decoration: none;
        display: block;
        color: #000;
        font-weight: 400;
        font-size: 12px;
    }
    
    header ul li a .fa-language {
        display: block;
        color: #337ab7;
        font-size: 25px;
    }
    
    .grid-gallery-container {
        display: inline-block;
        margin-bottom: 20px;
    }
    
    li.liveicon {
        margin: 0px 10px 0px 0px;
        position: relative;
        float: left;
    }
    
    li.liveicon a {
        font-size: 14px;
    }
    
    li.liveicon img {
        margin-top: 2px;
        float: left;
    }
    /* //HEADER */
    /* MENU */
    
    .hamburger_wrapper {
        padding: 5px;
        z-index: 10;
    }
    
    #hamburger {
    position: absolute;
    cursor: pointer;
    float: right;
    text-align: right;
    right: 6px;
    top: 7px;
    background-color: #efefef;
    color: #bd433e;
    outline: none;
    border: none;
    width: 39px;
    line-height: 39px;
    height: 39px;
    margin: 0px;
    padding: 0;
    border-radius: 50%;
    font-size: 24px;
    transition-duration: 1s;
    z-index: 2;
}
    
    #hamburger span {
        display: block;
        position: absolute;
        height: 3px;
        width: 61%;
        background: #bd433e;
        border-radius: 16px;
        opacity: 1;
        left: -2px;
        right: -2px;
        margin: 0 auto;
        transform: rotate(0deg);
        transition: .5s ease-in-out;
    }
    
    #hamburger span:nth-child(1) {
        top: 10px;
        transform-origin: left center;
    }
    
    #hamburger span:nth-child(2) {
        top: 18px;
        transform-origin: left center;
    }
    
    #hamburger span:nth-child(3) {
        top: 26px;
        transform-origin: left center;
    }
    
    #hamburger.close span:nth-child(1) {
        transform: rotate(41deg);
    }
    
    #hamburger.close span:nth-child(2) {
        width: 0%;
        opacity: 0;
        transition: .1s;
    }
    
    #hamburger.close span:nth-child(3) {
        transform: rotate(-42deg);
    }
    
    #nav-menu {
        position: absolute;
        left: 0;
        top: 0px;
        height: 400px;
        transition: transform .5s ease, opacity ease .2s;
    }
    
    #nav-menu.now-active {
        transform: translateX(0);
        transition: transform .5s ease, opacity ease .2s;
        opacity: 1;
        display: block;
    }
    
    .nav-list {
        padding: 10px;
        list-style-type: none;
        font-size: 2em;
    }
    
    .mobile-menu-box {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
        z-index: 2;
        background-color: #333;
        height: auto;
        padding: 10px;
        display: none;
        height: 400px;
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
        width: 84%;
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
    
    .mobile-serach-menu i {
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
        outline: none;
    }
    
    li.mobile-dropdown-nav.toggle-activated:before {
        transform: rotate(90deg);
        transition-duration: .5s;
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
        background-image: url(https://odishatv.in/commondir/images/svg/dropdown-menu-white.svg);
        content: "";
        position: absolute;
        display: block;
        right: 0;
        top: 10px;
        width: 10px;
        height: 10px;
        background-repeat: no-repeat;
    }
    
    ul.mobile-custom-dropdown {
        display: none;
        margin: 0px 0px 0px 30px;
        padding: 0px;
    }
    
    li.mobile-dropdown-nav.toggle-activated ul.mobile-custom-dropdown {
        display: block;
    }
    
    .main-menubar {
        float: left;
        width: 100%;
        position: sticky;
        top: 0;
        background-color: #fff;
        z-index: 9;
        box-shadow: 1px 5px 8px -4px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 1px 5px 8px -4px rgb(147 145 145 / 30%);
        -moz-box-shadow: 1px 5px 8px -4px rgba(0, 0, 0, 0.75);
        height: 40px;
    }
    
    #hamburger.close span {
        left: 4px;
    }
    
    .amp-nav-slide {
        display: inline-block;
        position: relative;
        margin-left: 60px;
        overflow: hidden;
        width: calc(100% - 60px);
    }
    
    ul.amp-nav-slide-list {
        margin: 0px;
        padding: 0px;
    }
    
    ul.amp-nav-slide-list li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        padding-right: 4px;
    }
    
    ul.amp-nav-slide-list li:before {
        content: "";
        display: block;
        width: 2px;
        height: 10px;
        background-color: #cac1c1;
        position: absolute;
        right: 1px;
        top: 16px;
    }
    
    ul.amp-nav-slide-list li a {
        text-decoration: none;
        display: block;
        text-transform: uppercase;
        font-weight: 400;
        color: #333333;
        line-height: 40px;
        padding: 0px 10px;
        font-size: 14px;
    }
    
    ul.amp-nav-slide-list .amp-carousel-button.amp-carousel-button-next {
        display: none;
    }
    
    ul.amp-nav-slide-list .amp-carousel-button.amp-carousel-button-prev {
        display: none;
    }
    
    button.main-menubar-home {
        background-color: #e6e6e6;
        padding: 0px 5px;
        font-size: 18px;
        width: 54px;
        color: #333;
        height: 40px;
        text-align: center;
        border: none;
        outline: none;
        position: absolute;
        left: 0;
        top: 0;
    }
    
    .amp-nav-slide:before {
        content: "";
        display: block;
        background: linear-gradient(90deg, rgba(0, 212, 255, 0) 0%, rgba(255, 255, 255, 1) 39%);
        width: 27px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 2;
    }
    /* //MENU */
    /*-- FOOTER --*/
    
    footer {
        float: left;
        background-color: #212121;
        width: 100%;
        padding: 30px 0px 0px 0px;
        z-index: 1;
        position: relative;
    }
    
    ul.footer-link .footer-link-heading {
        color: #a9a3a3;
        font-size: 12px;
        line-height: 17px;
        text-transform: capitalize;
        font-weight: 400;
        margin: 0px 0px 5px 0px;
        padding: 0px 0px 10px 0px;
        border-bottom: 1px solid #cecdcd;
    }
    
    ul.footer-link {
        margin: 0px;
        padding: 0px;
        display: inline-block;
        width: calc(100% - 15px);
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
        transition-duration: 1s;
    }
    
    ul.footer-link li a:hover {
        color: #fff;
        transition-duration: 1s;
    }
    
    ul.footer-logo-menu {
        margin: 0px 0px 20px 0px;
        padding: 0px;
        display: inline-block;
        width: 100%;
    }
    
    ul.footer-logo-menu img {
        width: 90px;
        height: auto;
    }
    
    ul.footer-logo-menu li {
        list-style-type: none;
        display: inline-block;
    }
    
    ul.footer-logo-menu li a {
        text-decoration: none;
        display: block;
        background-color: #f05127;
        line-height: 25px;
        padding: 0px 5px;
        margin-right: 6px;
        border-radius: 20px;
        color: #fff;
        font-size: 12px;
        font-weight: 400;
        transition-duration: 1s;
    }
    
    ul.footer-logo-menu li a:hover {
        background-color: #f9b41b;
        transition-duration: 1s;
    }
    
    ul.footer-logo-menu li:first-child a {
        background: none;
        padding: 0;
        margin-right: 22px;
    }
    
    ul.footer-top-trends {
        margin: 20px 0px 15px 0px;
        padding: 0px;
        display: inline-block;
    }
    
    .footer-free-heading {
        margin: 0px 0px 10px 0px;
        padding: 0px;
        color: #fff;
        font-size: 16px;
        display: block;
        width: 100%;
    }
    
    ul.footer-top-trends li {
        list-style-type: none;
        display: inline-block;
        margin: 0px 7px 7px 0px;
    }
    
    ul.footer-top-trends li a {
        text-decoration: none;
        display: block;
        background: no-repeat;
        border: solid 1px #a9a3a3;
        color: #a9a3a3;
        line-height: 30px;
        padding: 0px 10px;
        border-radius: 3px;
        transition-duration: 1s;
        font-size: 12px;
    }
    
    ul.footer-top-trends li a:hover {
        border: solid 1px #f5af19;
        color: #f5af19;
        transition-duration: 1s;
    }
    
    ul.footer-follow-us {
        margin: 20px 0px 0px 0px;
        padding: 0px;
    }
    
    ul.footer-follow-us h3 {
        margin: 0px 0px 10px 0px;
        padding: 0px;
        color: #fff;
        font-size: 16px;
    }
    
    ul.footer-follow-us li {
        list-style-type: none;
        float: left;
    }
    
    ul.footer-follow-us li a {
        text-decoration: none;
        display: block;
        text-transform: uppercase;
        line-height: 20px;
        padding: 0px 7px 0px 0px;
        color: #212121;
        border-radius: 20px;
    }
    
    ul.footer-follow-us li a i {
        color: #fff;
        height: 30px;
        width: 30px;
        line-height: 30px;
        text-align: center;
        margin: 0px;
        padding: 0px;
        font-size: 18px;
        transition-duration: 1s;
        border-radius: 50%;
    }
    
    ul.footer-follow-us li a i:hover {
        transition-duration: 1s;
        background-color: #f3b01b;
    }
    
    li.footer-social-btn a i.fab.fa-facebook-f {
        background-color: #3c51a5;
    }
    
    li.footer-social-btn a i.fab.fa-twitter {
        background-color: #5db2f7;
    }
    
    li.footer-social-btn a i.fab.fa-instagram {
        background-color: #d94b8e;
    }
    
    li.footer-social-btn a i.fab.fa-pinterest-p {
        background-color: #d93a34;
    }
    
    li.footer-social-btn a i.fab.fa-linkedin-in {
        background-color: #036593;
    }
    
    li.footer-social-btn a i.fab.fa-telegram-plane {
        background-color: #299ecf;
    }
    
    section.copyright {
        float: left;
        width: 100%;
        background-color: #000;
        padding: 10px 0px;
    }
    
    section.copyright h6 {
        color: #a9a3a3;
        margin: 0px;
        padding: 0px;
        font-size: 13px;
    }
    
    section.copyright ul {
        margin: 0px;
        padding: 0px;
        text-align: right;
    }
    
    section.copyright ul li {
        list-style-type: none;
        display: inline-block;
        margin: 0px 0px 0px 15px;
    }
    
    section.copyright ul li a {
        color: #a9a3a3;
        font-size: 13px;
        list-style-type: none;
        text-decoration: none;
        text-transform: capitalize;
    }
    
    ul.download-app-mobile {
        margin: 0px;
        padding: 0px;
    }
    
    ul.download-app-mobile li {
        list-style-type: none;
        display: inline-block;
    }
    
    ul.download-app-mobile li a {
        text-decoration: none;
        display: block;
    }
    
    h4.odishatv-app-heading {
        color: #fff;
        margin: 15px 0px 30px 0px;
        padding: 3px 0px 0px 0px;
        font-size: 15px;
        font-weight: 400;
        position: relative;
        padding-left: 46px;
    }
    
    h4.tarangplus-app-heading {
        color: #fff;
        display: inline-block;
        margin: 0px 0px 0px 0px;
        padding: 3px 0px 0px 0px;
        font-size: 15px;
        font-weight: 400;
        position: relative;
        padding-left: 90px;
    }
    
    ul.odishatv-app {
        margin: 20px 0px 20px 0px;
        padding: 0px;
    }
    
    ul.odishatv-app li {
        list-style-type: none;
        display: inline-block;
        margin-right: 16px;
    }
    
    ul.odishatv-app li a {
        text-decoration: none;
        display: block;
        width: 87px;
        height: 28px;
        margin-right: 5px;
    }
    
    h4.odishatv-app-heading amp-img {
        width: 33px;
        height: auto;
        position: absolute;
        left: 0;
        top: -3px;
    }
    
    h4.tarangplus-app-heading amp-img {
        position: absolute;
        left: 0;
        top: 0;
        height: 20px;
        width: auto;
    }
    /*-- //FOOTER --*/
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
         height: 28px;
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