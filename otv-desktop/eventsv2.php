<!DOCTYPE html>
<html>
   <head>
      <title>OTV Events</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <style>
         /*================ FOOTER ================*/
         footer {
         float: left;
         background-color: #212121;
         width: 100%;
         padding: 30px 0px;
         z-index: 1;
         position: relative;
         }
         ul.footer-link .footer-link-heading {
         color: #a9a3a3;
         font-size: 14px;
         text-transform: capitalize;
         font-weight: 700;
         margin: 0px 0px 5px 0px;
         padding: 0px;
         border-bottom: 1px solid #cecdcd;
         }
         ul.footer-link {
         margin: 0px;
         padding: 0px;
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
         ul.footer-link li a:hover {
         color: #fff;
         transition-duration: .5s;
         }
         ul.footer-logo-menu {
         margin: 0px 0px 20px 0px;
         padding: 0px;
         }
         ul.footer-logo-menu img {
         width: 130px;
         height: 46px;
         }
         ul.footer-logo-menu li {
         list-style-type: none;
         display: inline-block;
         }
         ul.footer-logo-menu li a {
         text-decoration: none;
         display: block;
         background-color: #f05127;
         line-height: 35px;
         padding: 0px 20px;
         margin-right: 6px;
         border-radius: 20px;
         color: #fff;
         font-size: 16px;
         font-weight: 500;
         transition-duration: .5s;
         }
         ul.footer-logo-menu li a:hover {
         background-color: #f9b41b;
         transition-duration: .5s;
         }
         ul.footer-logo-menu li:first-child a {
         background: none;
         padding: 0;
         margin-right: 22px;
         }
         ul.footer-top-trends {
         margin: 20px 0px 0px 0px;
         padding: 0px;
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
         transition-duration: .5s;
         }
         ul.footer-top-trends li a:hover {
         border: solid 1px #f5af19;
         color: #f5af19;
         transition-duration: .5s;
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
         padding: 0px 10px 0px 0px;
         color: #212121;
         border-radius: 20px;
         }
         ul.footer-follow-us li a i {
         color: #fff !important;
         height: 40px;
         width: 40px;
         line-height: 40px;
         text-align: center;
         margin: 0px;
         padding: 0px !important;
         font-size: 18px !important;
         transition-duration: .5s;
         border-radius: 50%;
         }
         ul.footer-follow-us li a i:hover {
         transition-duration: .5s;
         background-color: #f3b01b !important;
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
         margin: 4px 0px 0px 0px;
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
         .footer-sidebar {
         border-left: solid 1px #a9a3a3;
         padding-left: 10px;
         display: inline-table;
         }
         h4.odishatv-app-heading {
         color: #fff;
         margin: 0px 0px 30px 0px;
         padding: 3px 0px 0px 0px;
         font-size: 15px;
         font-weight: 700;
         position: relative;
         padding-left: 46px;
         }
         h4.tarangplus-app-heading {
         color: #fff;
         display: inline-block;
         margin: 20px 0px 0px 0px;
         padding: 3px 0px 0px 0px;
         font-size: 15px;
         font-weight: 700;
         position: relative;
         padding-left: 90px;
         }
         .footer-sidebar a {
         text-decoration: none;
         }
         ul.odishatv-app {
         margin: 20px 0px 20px 0px;
         padding: 0px;
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
         h4.odishatv-app-heading img {
         width: 33px;
         height: auto;
         position: absolute;
         left: 0;
         top: -3px;
         }
         h4.tarangplus-app-heading img {
         position: absolute;
         left: 0;
         top: 0;
         height: 20px;
         width: auto;
         }
         .scrollToTop {
         width: 40px;
         height: 40px;
         line-height: 40px;
         text-align: center;
         font-weight: bold;
         color: #fff;
         text-decoration: none;
         position: fixed;
         bottom: 68px;
         right: 24px;
         font-size: 16px;
         background-color: #7b0505;
         transition-duration: .5s;
         display: none;
         cursor: pointer;
         border-radius: 50%;
         padding: 0px;
         z-index: 7;
         }
         .scrollToTop:hover {
         background-color: #f4b01b;
         text-decoration: none;
         color: #fff;
         transition-duration: .5s;
         }
         /*=============== //FOOTER ===============*/
         /*=============== BANNER ===============*/
         .event-banner {
         float: left;
         width: 100%;
         position: relative;
         padding-bottom: 10px;
         z-index: -1;
         }
         .event-banner-logo {
         position: absolute;
         left: 0;
         right: 0;
         top: 10px;
         width: fit-content;
         margin: 0 auto;
         background-color: #fff;
         padding: 5px;
         border-radius: 5px;
         z-index: 1;
         }
         img.logo-main {
         width: 200px;
         height: 36px;
         }
         .event-banner-logo span {
         top: 6px;
         background-color: #7b0505;
         color: #fff;
         height: 36px;
         line-height: 36px;
         display: block;
         position: absolute;
         right: -75px;
         width: 75px;
         text-align: center;
         border-radius: 0px 5px 5px 0px;
         text-transform: capitalize;
         font-size: 12px;
         }
         img.main-banner-image {
         position: absolute;
         left: 0;
         right: 0;
         width: 100%;
         height: auto;
         object-fit: cover;
         }
         img.subha-aksaya-trtiya {
         max-width: 100%;
         height: auto;
         margin-top: 100px;
         }
         ul.logo-promotion {
         margin: 100px 0px 0px 0px;
         padding: 0px;
         text-align: center;
         }
         ul.logo-promotion li {
         list-style-type: none;
         display: inline-block;
         margin: 5px;
         }
         ul.logo-promotion li a {
         text-decoration: none;
         display: block;
         }
         ul.logo-promotion li a img {
         width: 176px;
         height: 115px;
         }
         /*============== //BANNER ==============*/
         /*============== RECCOMENDED ==============*/
         section.recommended {
         float: left;
         width: 100%;
         margin: 30px 0px 0px 0px;
         }
         h2.event-heading-one {
         background-color: #fb4d35;
         margin: 0px;
         padding: 0px;
         display: block;
         }
         h2.event-heading-one {
         background-color: #fb4d35;
         margin: 0px;
         display: block;
         color: #fff;
         text-transform: uppercase;
         font-size: 15px;
         font-weight: 700;
         line-height: 35px;
         padding: 0px 10px;
         width: fit-content;
         }
         .recommended-item {
         position: relative;
         margin-bottom: 15px;
         background-color: #fff;
         }
         img.recommended-item-images {
         max-width: 100%;
         height: 211px;
         object-fit: cover;
         }
         .recommended-item h5 {
         position: absolute;
         left: 0;
         top: 0;
         background-color: #000;
         line-height: 33px;
         margin: 0px;
         color: #fff;
         font-size: 15px;
         padding: 0px 5px;
         border-left: solid 3px #fb4d35;
         }
         h2.event-heading-one {
         background-color: #fb4d35;
         margin: 0px 0px 15px 0px;
         display: block;
         color: #fff;
         text-transform: uppercase;
         font-size: 15px;
         font-weight: 700;
         line-height: 35px;
         padding: 0px 10px;
         width: fit-content;
         }
         .recommended-item-content {
         padding: 7.5px;
         }
         .recommended-item-content h3 {
         margin: 0px 0px 6px 0px;
         padding: 0px;
         color: #000;
         font-size: 18px;
         font-weight: 700;
         line-height: 26px;
         height: 51px;
         overflow: hidden;
         }
         .recommended-item-content span {
         color: #b9b9b9;
         font-size: 13px;
         margin-bottom: 5px;
         display: block;
         }
         .recommended-item-content p {
         font-size: 15px;
         color: #000;
         line-height: 22px;
         height: 68px;
         overflow: hidden;
         }
         /*============== //RECCOMENDED ==============*/
         /*============== VIDEOS ==============*/
         section.media-section {
         float: left;
         width: 100%;
         margin: 30px 0px;
         }
         .media-item-large {
         position: relative;
         }
         img.media-item-large-image {
         width: 100%;
         height: 321px;
         object-fit: cover;
         }
         .media-item-large h3 {
         margin: 0px;
         font-size: 22px;
         font-weight: 700;
         line-height: 31px;
         position: absolute;
         left: 0;
         bottom: 0;
         background-color: #000000a1;
         color: #fff;
         padding: 7.5px;
         }
         img.media-item-icon {
         position: absolute;
         right: 10px;
         top: 10px;
         }
         .media-item-small {
         position: relative;
         margin-bottom: 9px;
         }
         img.media-item-small-image {
         width: 100%;
         height: 156px;
         object-fit: cover;
         }
         .media-item-small h3 {
         margin: 0px;
         font-size: 16px;
         font-weight: 700;
         line-height: 24px;
         position: absolute;
         left: 0;
         bottom: 0;
         background-color: #000000a1;
         color: #fff;
         padding: 7.5px;
         }
         section.media-section.media-section-videos {
         background-color: #8e0727;
         border-top: solid 5px #fb4d35;
         padding: 30px 0px;
         }
         /*============== //VIDEOS ==============*/
         @media (max-width: 768px) {}
      </style>
   </head>
   <body>
      <div class="event-banner">
         <a href="https://otvkhabar.in/" target="_blank">
            <div class="event-banner-logo"><img src="images/logo.svg" alt="" title="" class="logo-main"><span>back to</span></div>
         </a>
         <img src="https://events.otvkhabar.in/commondir/images/event-bg.jpg" class="main-banner-image" alt="" title="">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img src="images/subha-aksaya-trtiya.png" alt="" title="" class="subha-aksaya-trtiya"></div>
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <ul class="logo-promotion">
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo1.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo2.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo3.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo4.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo5.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo6.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo7.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo8.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo9.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo10.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo11.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo12.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo13.png" alt="" title=""></a></li>
                     <li><a href="#"><img src="https://images.odishatv.in/uploadimage/library/clients/akshaya-tritiya-logo14.png" alt="" title=""></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <section class="recommended">
         <div class="container">
            <h2 class="event-heading-one">We recommended</h2>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="recommended-item">
                     <a href="#">
                        <h5>Business</h5>
                     </a>
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1651371133.jpg" alt="" title="" class="recommended-item-images"></a>
                     <div class="recommended-item-content">
                        <a href="#">
                           <h3>ବଢ଼ୁଛି ଦୁର୍ବିପାକ ଭୟ : ବର୍ଷକୁ ୫୬୦ ବଡ଼ ବିପର୍ଯ୍ୟୟର ସାମ୍ନା କରିବ ବିଶ୍ୱ</h3>
                        </a>
                        <span>Saturday, 30 April 2022</span>
                        <p>ଝଡ଼ବାତ୍ୟା, ବନ୍ୟା, ଜଙ୍ଗଲ ନିଆଁ, ଏସବୁ କିଛି ବି ନୁହେଁ । ଆଗକୁ ଆସୁଛି ଆହୁରି ବିପଜ୍ଜନକ ସମୟ । ମାନବଜାତି ୨୦୩୦ ବେଳକୁ ବର୍ଷକୁ ୫୬୦ଟି...</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="recommended-item">
                     <a href="#">
                        <h5>Business</h5>
                     </a>
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1651371133.jpg" alt="" title="" class="recommended-item-images"></a>
                     <div class="recommended-item-content">
                        <a href="#">
                           <h3>ବଢ଼ୁଛି ଦୁର୍ବିପାକ ଭୟ : ବର୍ଷକୁ ୫୬୦ ବଡ଼ ବିପର୍ଯ୍ୟୟର ସାମ୍ନା କରିବ ବିଶ୍ୱ</h3>
                        </a>
                        <span>Saturday, 30 April 2022</span>
                        <p>ଝଡ଼ବାତ୍ୟା, ବନ୍ୟା, ଜଙ୍ଗଲ ନିଆଁ, ଏସବୁ କିଛି ବି ନୁହେଁ । ଆଗକୁ ଆସୁଛି ଆହୁରି ବିପଜ୍ଜନକ ସମୟ । ମାନବଜାତି ୨୦୩୦ ବେଳକୁ ବର୍ଷକୁ ୫୬୦ଟି...</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="recommended-item">
                     <a href="#">
                        <h5>Business</h5>
                     </a>
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1651371133.jpg" alt="" title="" class="recommended-item-images"></a>
                     <div class="recommended-item-content">
                        <a href="#">
                           <h3>ବଢ଼ୁଛି ଦୁର୍ବିପାକ ଭୟ : ବର୍ଷକୁ ୫୬୦ ବଡ଼ ବିପର୍ଯ୍ୟୟର ସାମ୍ନା କରିବ ବିଶ୍ୱ</h3>
                        </a>
                        <span>Saturday, 30 April 2022</span>
                        <p>ଝଡ଼ବାତ୍ୟା, ବନ୍ୟା, ଜଙ୍ଗଲ ନିଆଁ, ଏସବୁ କିଛି ବି ନୁହେଁ । ଆଗକୁ ଆସୁଛି ଆହୁରି ବିପଜ୍ଜନକ ସମୟ । ମାନବଜାତି ୨୦୩୦ ବେଳକୁ ବର୍ଷକୁ ୫୬୦ଟି...</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="recommended-item">
                     <a href="#">
                        <h5>Business</h5>
                     </a>
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1651371133.jpg" alt="" title="" class="recommended-item-images"></a>
                     <div class="recommended-item-content">
                        <a href="#">
                           <h3>ବଢ଼ୁଛି ଦୁର୍ବିପାକ ଭୟ : ବର୍ଷକୁ ୫୬୦ ବଡ଼ ବିପର୍ଯ୍ୟୟର ସାମ୍ନା କରିବ ବିଶ୍ୱ</h3>
                        </a>
                        <span>Saturday, 30 April 2022</span>
                        <p>ଝଡ଼ବାତ୍ୟା, ବନ୍ୟା, ଜଙ୍ଗଲ ନିଆଁ, ଏସବୁ କିଛି ବି ନୁହେଁ । ଆଗକୁ ଆସୁଛି ଆହୁରି ବିପଜ୍ଜନକ ସମୟ । ମାନବଜାତି ୨୦୩୦ ବେଳକୁ ବର୍ଷକୁ ୫୬୦ଟି...</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="recommended-item">
                     <a href="#">
                        <h5>Business</h5>
                     </a>
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1651371133.jpg" alt="" title="" class="recommended-item-images"></a>
                     <div class="recommended-item-content">
                        <a href="#">
                           <h3>ବଢ଼ୁଛି ଦୁର୍ବିପାକ ଭୟ : ବର୍ଷକୁ ୫୬୦ ବଡ଼ ବିପର୍ଯ୍ୟୟର ସାମ୍ନା କରିବ ବିଶ୍ୱ</h3>
                        </a>
                        <span>Saturday, 30 April 2022</span>
                        <p>ଝଡ଼ବାତ୍ୟା, ବନ୍ୟା, ଜଙ୍ଗଲ ନିଆଁ, ଏସବୁ କିଛି ବି ନୁହେଁ । ଆଗକୁ ଆସୁଛି ଆହୁରି ବିପଜ୍ଜନକ ସମୟ । ମାନବଜାତି ୨୦୩୦ ବେଳକୁ ବର୍ଷକୁ ୫୬୦ଟି...</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="recommended-item">
                     <a href="#">
                        <h5>Business</h5>
                     </a>
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1651371133.jpg" alt="" title="" class="recommended-item-images"></a>
                     <div class="recommended-item-content">
                        <a href="#">
                           <h3>ବଢ଼ୁଛି ଦୁର୍ବିପାକ ଭୟ : ବର୍ଷକୁ ୫୬୦ ବଡ଼ ବିପର୍ଯ୍ୟୟର ସାମ୍ନା କରିବ ବିଶ୍ୱ</h3>
                        </a>
                        <span>Saturday, 30 April 2022</span>
                        <p>ଝଡ଼ବାତ୍ୟା, ବନ୍ୟା, ଜଙ୍ଗଲ ନିଆଁ, ଏସବୁ କିଛି ବି ନୁହେଁ । ଆଗକୁ ଆସୁଛି ଆହୁରି ବିପଜ୍ଜନକ ସମୟ । ମାନବଜାତି ୨୦୩୦ ବେଳକୁ ବର୍ଷକୁ ୫୬୦ଟି...</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="media-section media-section-videos">
         <div class="container">
            <h2 class="event-heading-one">Videos</h2>
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="media-item-large">
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/sonu_sood__1631955232.JPG" alt="" title="" class="media-item-large-image"></a>
                     <a href="#">
                        <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                     </a>
                     <a href="#"><img src="images/svg/video-icon-red.svg" alt="" title="" class="media-item-icon"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/sonu_sood__1631955232.JPG" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                           <a href="#"><img src="images/svg/video-icon-red.svg" alt="" title="" class="media-item-icon"></a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/sonu_sood__1631955232.JPG" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                           <a href="#"><img src="images/svg/video-icon-red.svg" alt="" title="" class="media-item-icon"></a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/sonu_sood__1631955232.JPG" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                           <a href="#"><img src="images/svg/video-icon-red.svg" alt="" title="" class="media-item-icon"></a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/sonu_sood__1631955232.JPG" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                           <a href="#"><img src="images/svg/video-icon-red.svg" alt="" title="" class="media-item-icon"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="media-section">
         <div class="container">
            <h2 class="event-heading-one">photos</h2>
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="media-item-large">
                     <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/netflix_1625465119.jpg" alt="" title="" class="media-item-large-image"></a>
                     <a href="#">
                        <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/netflix_1625465119.jpg" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/netflix_1625465119.jpg" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/netflix_1625465119.jpg" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media-item-small">
                           <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/netflix_1625465119.jpg" alt="" title="" class="media-item-small-image"></a>
                           <a href="#">
                              <h3>କରୋନା ହିରୋ ସାଜି ଅଡୁଆରେ ସୋନୁ ! ବଲିଉଡ୍‌ରେ ମିଳୁନି ଭିଲିଆନ୍‌ ରୋଲ୍‌..</h3>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<f ooter>
   <div class="container">
      <div class="row">
         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <ul class="footer-link">
               <li><a href="#" class="footer-link-heading">News Channels</a></li>
               <li><a href="https://khabar.odishatv.in" title="OTV Khabar" target="_blank" >OTV Khabar</a></li>
               <li><a href="https://odishareporter.in" title="Odisha Reporter" target="_blank" >Odisha Reporter</a></li>
               <li><a href="https://deshtv.in/" title="DeshTV" target="_blank" >DeshTV</a></li>
               <li><a href="https://otvkhabar.in/news" title="News" target="_self" >News</a></li>
               <li><a href="https://otvkhabar.in/videos" title="Videos" target="_self" >Videos</a></li>
               <li><a href="https://otvkhabar.in/photo-gallery" title="Photos" target="_blank" >Photos</a></li>
            </ul>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <ul class="footer-link">
               <li><a href="#" class="footer-link-heading">Entertainment Channel</a></li>
               <li><a href="https://www.tarangplus.in/" title="TarangPlus" target="_blank" >TarangPlus</a></li>
               <li><a href="https://www.tarangplus.in/livetv" title="TarangTV" target="_blank" >TarangTV</a></li>
               <li><a href="https://www.tarangplus.in/music-list" title="TarangMusic" target="_blank" >TarangMusic</a></li>
               <li><a href="https://www.tarangplus.in/all-channels/prarthana-tv" title="Prarthana" target="_blank" >Prarthana</a></li>
               <li><a href="https://www.tarangplus.in/all-channels/alankar" title="Alankar" target="_blank" >Alankar</a></li>
               <li><a href="https://www.youtube.com/channel/UC85orSRNRJjruskGKA6HceA" title="City Plus" target="_blank" >City Plus</a></li>
            </ul>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <ul class="footer-link">
               <li><a href="#" class="footer-link-heading">Quick Links</a></li>
               <li><a href="https://otvkhabar.in/about-us" title="About us" target="_blank" >About us</a></li>
               <li><a href="https://otvkhabar.in/contact-us" title="Feedback" target="_blank" >Feedback</a></li>
               <li><a href="https://otvkhabar.in/contact-us" title="Contact us" target="_blank" >Contact us</a></li>
               <li><a href="https://otvkhabar.in/privacy-policy" title="Privacy Policy" target="_blank" >Privacy Policy</a></li>
               <li><a href="https://otvkhabar.in/terms-of-usage" title="Terms of Usage    " target="_blank" >Terms of Usage    </a></li>
            </ul>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <ul class="footer-link">
               <li><a href="#" class="footer-link-heading">Important Links</a></li>
               <li><a href="https://otvkhabar.in/faqs" title="FAQs" target="_blank" >FAQs</a></li>
               <li><a href="https://otvkhabar.in/redressal" title="Redressal" target="_blank" >Redressal</a></li>
               <li><a href="https://otvkhabar.in/rio" title="RIO" target="_blank" >RIO</a></li>
               <li><a href="https://otvkhabar.in/rate-card-otv" title="Rate Card" target="_blank" >Rate Card</a></li>
            </ul>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="footer-sidebar">
               <h4 class="odishatv-app-heading"><img src="https://odishatv.in//commondir/images/otv-logo-ft.jpg" alt="OdishaTV" title="OdishaTV">ODISHA TV APP</h4>
               <ul class="odishatv-app">
                  <li><a href="https://play.google.com/store/apps/details?id=com.news.odisha_tv&hl=en" target="_blank"><img src="https://odishatv.in//commondir/images/play-store-ft.jpg" width="102" height="32" alt="OTV App" title="OTV App"></a></li>
                  <li><a href="https://apps.apple.com/us/app/otv-odisha-tv/id1132594358" target="_blank"><img src="https://odishatv.in//commondir/images/app-store-ft.jpg" width="102" height="32" alt="OTV App" title="OTV App"></a></li>
               </ul>
               <h4 class="tarangplus-app-heading"><img src="https://odishatv.in//commondir/images/tarang-logo-ft.jpg" alt="Tarang Plus" title="Tarang Plus">TARANG PLUS APP</h4>
               <ul class="odishatv-app">
                  <li><a href="https://play.google.com/store/apps/details?id=com.otl.tarangplus" target="_blank"><img src="https://odishatv.in//commondir/images/play-store-ft.jpg" width="102" height="32" alt="Tarang Plus App" title="Tarang Plus App"></a></li>
                  <li><a href="https://apps.apple.com/us/app/tarangplus/id1478384536?ls=1" target="_blank"><img src="https://odishatv.in//commondir/images/app-store-ft.jpg" width="102" height="32" alt="Tarang Plus App" title="Tarang Plus App"></a></li>
               </ul>
               <ul class="footer-social-media" style="margin: 0px;padding: 0px;">
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://www.facebook.com/otvnews/" title="Facebook" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/facebook.svg" alt="Facebook" title="Facebook"  style="text-decoration: none; display: block;"></a></li>
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://twitter.com/otvnews" title="Twitter" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/twitter.svg" alt="Twitter" title="Twitter"  style="text-decoration: none; display: block;"></a></li>
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://www.instagram.com/otv.news" title="Instagram" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/instagram.svg" alt="Instagram" title="Instagram"  style="text-decoration: none; display: block;"></a></li>
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://www.linkedin.com/company/odishatv" title="LinkedIn" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/linkedin.svg" alt="LinkedIn" title="LinkedIn"  style="text-decoration: none; display: block;"></a></li>
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://t.me/otvtelegram" title="Telegram" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/telegram.svg" alt="Telegram" title="Telegram"  style="text-decoration: none; display: block;"></a></li>
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://www.kooapp.com/profile/otvnews" title="Koo" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/koo.svg" alt="Koo" title="Koo"  style="text-decoration: none; display: block;"></a></li>
                  <li class="top-social-btn" style="list-style-type: none; float: left; margin-left: 7px;"><a href="https://www.youtube.com/c/OTVNewsEnglish" title="Youtube" target="_blank" ><img src="https://odishatv.in/commondir/images/svg/youtube.svg" alt="Youtube" title="Youtube"  style="text-decoration: none; display: block;"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
      <section class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                  <h6>Copyright &copy; 2022 - Odisha Television Limited All Rights Reserved.</h6>
               </div>
               <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                  <ul>
                     <li><a href="#" title="About us" target="_self">About us</a>
                     </li>
                     <li><a href="#" title="Contact us" target="_self">Contact us</a>
                     </li>
                     <li><a href="#" title="Privacy Policy" target="_self">Privacy Policy</a>
                     </li>
                     <li><a href="#" title="T&C" target="_self">T&C</a>
                     </li>
                     <li><a href="#" title="Cookie Policy" target="_self">Cookie Policy</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Faustina&family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.unveil.js" async defer ></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet"/>
      <script src="js/main.js" async defer ></script>
   </body>
</html>