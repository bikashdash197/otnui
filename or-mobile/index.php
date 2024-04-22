<!DOCTYPE html>
<html>
   <head>
      <title>Mobile V2</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css_mobile.php'; ?>
         /*====================== BREAKING NEWS ======================*/
         section.breaking-news {
         float: left;
         width: 100%;
         margin: 0 0 15px 0;
         background-color: #e6e6e6;
         border-top: 1px solid #b40000;
         }
         ul.breaking-newsticker {
         margin: 0;
         padding: 0;
         display: block;
         width: 100%;
         position: relative;
         height: 36px;
         overflow: hidden;
         }
         ul.breaking-newsticker li:first-child {
         width: 90px;
         }
         ul.breaking-newsticker li {
         list-style-type: none;
         float: left;
         }
         section.breaking-news h3 {
         margin: 0;
         background-color: #7b0505;
         color: #fff;
         text-transform: uppercase;
         font-weight: 700;
         font-size: 13px;
         text-align: right;
         padding: 3px 12px 5px 5px;
         line-height: 14px;
         }
         ul.breaking-newsticker li:last-child {
         width: calc(100% - 90px);
         padding: 0 10px 0 10px;
         }
         ul.breaking-newsticker li p {
         margin: 0;
         padding: 5px 0;
         font-size: 12px;
         line-height: 15px;
         font-weight: 400;
         color: #000;
         display: table-cell;
         vertical-align: middle;
         height: 36px;
         }
         .category-news-item-summary p {
         margin-left: 151px;
         margin-top: 0px;
         padding: 0px;
         color: #807979;
         font-size: 14px;
         height: 77px;
         overflow: hidden;
         }
         /*===================== //BREAKING NEWS =====================*/
         /*===================== LIVE UPDATES =======================*/
         .live-large-box {
         position: relative;
         border-left: solid 1px #ededed;
         padding: 0px 0px 10px 15px;
         margin-bottom: 10px;
         }
         .live-large-box img {
         max-width: 100%;
         min-height: 160px;
         margin-bottom: 5px;
         }
         .live-large-box:before {
         content: "";
         display: block;
         position: absolute;
         right: -15px;
         top: 0;
         width: 1px;
         height: 100%;
         background-color: #ededed;
         }
         .live-update-label {
         border: none;
         outline: none;
         background-color: #f05127;
         color: #fff;
         text-transform: uppercase;
         font-size: 11px;
         margin: 0px;
         padding: 3px;
         border-radius: 0px;
         transition-duration: .5s;
         line-height: 14px;
         margin-bottom: 0px;
         float: left;
         margin-right: 6px;
         margin-top: 1px;
         }
         .live-large-box h2 {
         position: relative;
         font-size: 17px;
         line-height: 23px;
         color: #000;
         height: 66px;
         overflow: hidden;
         margin: 0px;
         margin-bottom: 10px;
         font-weight: 600;
         }
         .live-update-label:hover {
         transition-duration: .5s;
         background-color: #ffac3a;
         color: #fff;
         }
         .more-live-updates {
         outline: none;
         line-height: 17px;
         text-align: center;
         border: none;
         color: #2a2a2a;
         text-transform: capitalize;
         font-size: 14px;
         border-radius: 2px;
         transition-duration: .5s;
         display: block;
         font-weight: 600;
         width: 100%;
         background-color: #bbb;
         padding: 10px;
         margin: 0;
         }
         .live-large-box h3 {
         margin: 15px 0px;
         padding: 0px;
         text-transform: capitalize;
         font-weight: 700;
         font-size: 18px;
         }
         .live-large-box-item h6 {
         margin: 0px;
         padding: 0px 15px;
         text-transform: uppercase;
         color: #000000;
         font-size: 13px;
         position: absolute;
         left: -15px;
         top: 0;
         width: calc(100% + 30px);
         border-top: solid 1px #ededed;
         line-height: 30px;
         }
         .live-large-box-item h6:before {
         content: "";
         display: block;
         position: absolute;
         left: -6px;
         top: 9px;
         width: 10px;
         height: 10px;
         background-color: #f05127;
         border-radius: 50%;
         box-shadow: 0 0 0 rgb(244 176 27);
         animation: pulse 2s infinite;
         }
         .live-large-box-item h6 span {
         float: right;
         }
         .live-large-box-item {
         position: relative;
         padding-top: 35px;
         }
         .live-large-box-item h4 {
         font-weight: 300;
         color: #666;
         font-size: 15px;
         line-height: 19px;
         margin: 0px;
         padding: 5px;
         font-family: 'Libre Franklin', sans-serif;
         margin-bottom: 10px;
         }
         .live-large-box-item p {
         margin: 0px 0px 5px 0px;
         padding: 0px;
         font-size: 13px;
         color: #a78888;
         height: 72px;
         overflow: hidden;
         }
         /*==================== //LIVE UPDATES ======================*/
         /*=============== VIDEO SECTION ===============*/
         .otv-video-first {
         position: relative;
         margin-bottom: 30px;
         }
         .otv-video-first img {
         border-radius: 8px;
         margin-bottom: 10px;
         width: 100%;
         height: 203px;
         }
         .otv-video-first h5 {
         font-size: 20px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 24px;
         margin: 0 0 5px 0;
         padding: 0;
         }
         img.video-play {
         position: absolute;
         top: 30%;
         left: 0;
         width: 40px !important;
         height: 40px !important;
         border: 2px solid #fff;
         border-radius: 50% !important;
         padding: 6px;
         line-height: 22px;
         right: 0;
         margin: 0 auto;
         background-color: #00000073;
         }
         .otv-video-sub {
         position: relative;
         margin-bottom: 15px;
         }
         .otv-video-sub img {
         border-radius: 8px;
         margin-bottom: 10px;
         width: 100%;
         height: 126px;
         }
         .otv-video-sub h5 {
         font-size: 15px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 18px;
         margin: 0 0 5px 0;
         padding: 0;
         height: 40px;
         overflow: hidden;
         }
         a.otv-more-option {
         text-align: center;
         margin: 0 auto;
         background-color: #009ace;
         color: #fff;
         text-transform: capitalize;
         padding: 7px 20px;
         border-radius: 8px;
         font-weight: 500;
         align-items: center;
         justify-content: center;
         display: flex;
         width: fit-content;
         }
         .otv-video-sec {
         margin-bottom: 20px;
         }
         /*=============== //VIDEO SECTION ===============*/
         /*=============== Gallery ===============*/
         .otv-photo-gallery-item {
         width: 49%;
         display: inline-block;
         background-color: #fff;
         padding: 5px;
         }
         .otv-photo-gallery-item img {
         width: 100%;
         height: 126px;
         object-fit: cover;
         }
         .otv-photo-gallery-item h5 {
         font-size: 15px;
         line-height: 19px;
         height: 78px;
         overflow: hidden;
         color: #000;
         }
         .otv-photo-gallery {
         margin-bottom: 20px;
         }
         span.img-gallery-count {
         background-color: #0006;
         padding: 2px 10px;
         color: #fff;
         font-size: 13px;
         position: absolute;
         left: 0;
         bottom: 0;
         }
         span.img-gallery-count img {
         width: 14px;
         height: 12px;
         margin-right: 4px;
         }
         .otv-photo-gallery-item-img {
         position: relative;
         }
         /*=============== //Gallery ===============*/
         /*=============== NEWS BOX ===============*/
         section.all-panel {
         float: left;
         width: 100%;
         margin: 0px 0px 30px 0px;
         }
         h1.otv-heading-one {
         line-height: 30px;
         font-size: 28px;
         font-weight: 700;
         color: #000000;
         margin-bottom: 7px;
         }
         p.otv-cat-news-first-para {
         font-size: 15px;
         color: #5c5c5c;
         margin-bottom: 10px;
         }
         .otv-cat-news-first-img img {
         border-radius: 8px;
         position: relative;
         width: 100%;
         height: 183px;
         }
         .otv-cat-photocredit {
         background-color: #21212199;
         padding: 7px 17px 7px 32px;
         color: #fff;
         font-size: 13px;
         width: fit-content;
         transition-duration: .5s;
         float: right;
         font-weight: 700;
         position: absolute;
         left: 0px;
         bottom: 0px;
         }
         span.otv-cat-photocredit img {
         height: 15px;
         position: absolute;
         left: 5px;
         top: 10px;
         width: 26px!important;
         }
         .otv-cat-news-first-img {
         position: relative;
         margin-bottom: 10px;
         }
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
         .otv-cat-news-first {
         position: relative;
         margin: 0px 0px 10px 0px;
         padding: 10px;
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         -webkit-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         display: inline-block;
         }
         .otv-cat-news-sub {
         position: relative;
         display: inline-block;
         width: 100%;
         min-height: 135px;
         padding-right: 108px;
         margin-bottom: 10px;
         }
         .otv-cat-news-sub-img {
         width: 96px;
         height: 65px;
         object-fit: cover;
         position: absolute;
         right: 0;
         top: 9px;
         border-radius: 8px;
         }
         .otv-cat-news-sub h5 {
         font-size: 18px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 27px;
         margin: 0 0 5px 0;
         padding: 0;
         font-weight: 400;
         }
         .otv-cat-news-second {
         position: relative;
         margin: 10px 0px;
         padding: 15px 15px;
         -webkit-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         display: inline-block;
         }
         .otv-cat-news-sub h5:hover {
         color: #008fb4;
         }
         h3.otv-heading-new-two {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: 10px 0px;
         }
         h3.otv-heading-new-two span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         }
         h3.otv-heading-new-two:after {
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
         h2.otv-heading-second {
         font-size: 22px;
         line-height: 26px;
         font-weight: 600;
         color: #000000;
         margin-bottom: 7px;
         }
         /*=============== //NEWS BOX ===============*/
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <section class="breaking-news">
         <ul class="breaking-newsticker">
            <li>
               <h3>Breaking News</h3>
            </li>
            <li>
               <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <a title="#" href="">
                           <p>Sayli Kamble Announces Her Marriage Date, Shares Honeymoon And Future Plans; Watch Pre-Wedding Shoot Video</p>
                        </a>
                     </div>
                     <div class="carousel-item">
                        <a title="#" href="">
                           <p>Sayli Kamble Announces Her Marriage Date, Shares Honeymoon And Future Plans; Watch Pre-Wedding Shoot Video</p>
                        </a>
                     </div>
                     <div class="carousel-item">
                        <a title="#" href="">
                           <p>Sayli Kamble Announces Her Marriage Date, Shares Honeymoon And Future Plans; Watch Pre-Wedding Shoot Video</p>
                        </a>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </section>
      <!--====================== CENTER PANEL ========================-->
      <section class="all-panel">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="homepage-live-box">
                     <!-- LIVE -->
                     <h3 class="otv-heading-new-three"><span>Live</span></h3>
                     <div class="live-large-box">
                        <a href="#">
                        <img src="images/medium-large-img.jpg" alt="" title="Matric Result 2021">
                        </a>
                        <a href="#">
                           <h2>Live updates</span> LIVE Updates: BSE Odisha Matric Result 2021 Announced; Girls Outshine Boys, 100 PC Result In 5945 Schools</h2>
                        </a>
                        <div class="live-large-box-item">
                           <h6>21:23 PM <span>Jun 25, 2021</span></h6>
                           <a href="http://localhost/otvsite/live-updates/education/bse-odisha-class-10-matric-result-2021-59155">
                              <h4>Odisha Class 10th Results Grow Over Second Wave, Pass Percentage Peaks At 98%</h4>
                           </a>
                        </div>
                        <div class="live-large-box-item">
                           <h6>21:23 PM <span>Jun 25, 2021</span></h6>
                           <a href="http://localhost/otvsite/live-updates/education/bse-odisha-class-10-matric-result-2021-59155">
                              <h4>Odisha Class 10th Results Grow Over Second Wave, Pass Percentage Peaks At 98%</h4>
                           </a>
                        </div>
                        <div class="live-large-box-item">
                           <h6>21:23 PM <span>Jun 25, 2021</span></h6>
                           <a href="http://localhost/otvsite/live-updates/education/bse-odisha-class-10-matric-result-2021-59155">
                              <h4>Odisha Class 10th Results Grow Over Second Wave, Pass Percentage Peaks At 98%</h4>
                           </a>
                        </div>
                     </div>
                     <a href="http://localhost/otvsite/live-updates/education/bse-odisha-class-10-matric-result-2021-59155" class="more-live-updates">More Updates</a>
                     <!-- LIVE -->
                  </div>
                  <div class="otv-home-center">
                     <div class="otv-cat-news-first">
                        <a href="">
                           <h1 class="otv-heading-one">Bomb Scare Triggers Panic In Bhubaneswar-Mumbai Konark Express, Search Operation On</h1>
                        </a>
                        <p class="otv-cat-news-first-para">Following the reports, the train was halted near Secunderabad railway station. All passengers were made to deboard the train and the bomb disposal squad pressed into service to check all suspicious boxes and baggage. </p>
                        <div class="otv-cat-news-first-img" >
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                        </div>
                        <div>
                           <ul class="otv-cat-time">
                              <li><a href="">World News</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li class="otv-share-social-media-add">
                                 <a><img src="images/svg/share-icon.svg"></a>
                                 <ul class="otv-article-share-style-more-one" style="display: none;">
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Cricket</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li class="otv-share-social-media-add">
                                 <a><img src="images/svg/share-icon.svg"></a>
                                 <ul class="otv-article-share-style-more-one" style="display: none;">
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <h3 class="otv-heading-new-two"><span>Entertainment</span></h3>
                     <div class="otv-cat-news-first">
                        <a href="">
                           <h2 class="otv-heading-second">Bomb Scare Triggers Panic In Bhubaneswar-Mumbai Konark Express, Search Operation On</h2>
                        </a>
                        <div class="otv-cat-news-first-img" >
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                        </div>
                        <div>
                           <ul class="otv-cat-time">
                              <li><a href="">World News</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/small-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <a href="#">
                              <h5>DRDO Invites Applications For JRF, RF Posts; Check Details To Apply DRDO Invites Applications For JRF, RF Posts; Check Details To Apply</h5>
                           </a>
                        </div>
                        <div class="otv-time-share">
                           <ul class="otv-cat-time">
                              <li><a href="">Lifestyle</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li><a href="#"><img src="images/svg/share-icon.svg"></a></li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <h3 class="otv-heading-new-two"><span>Latest Videos</span></h3>
                     <div class="otv-video-sec">
                        <div class="otv-video-first">
                           <a href=""><img src="images/medium-large-img.jpg"></a>
                           <img src="images/svg/play-white.svg" class="video-play">
                           <a href="">
                              <h5>UPSC IFS Mains Result 2021 Declared; Check Merit List and Personality Test Details </h5>
                           </a>
                        </div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>UPSC IFS Mains Result 2021 Declared; Check Merit List and Personality Test Details </h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>UPSC IFS Mains Result 2021 Declared; Check Merit List and Personality Test Details </h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>UPSC IFS Mains Result 2021 Declared; Check Merit List and Personality Test Details </h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>UPSC IFS Mains Result 2021 Declared; Check Merit List and Personality Test Details </h5>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <a href="#" class="otv-more-option">Video All Videos</a>
                     </div>
                     <h3 class="otv-heading-new-two"><span>Latest Photos</span></h3>
                     <div class="otv-photo-gallery">
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/small-img.jpg" alt="" title=""></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5>Dhinkia Row: Environmentalist Warns Of Mass Protest Across Odisha</h5>
                           </a>
                        </div>
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/small-img.jpg" alt="" title=""></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5>Dhinkia Row: Environmentalist Warns Of Mass Protest Across Odisha</h5>
                           </a>
                        </div>
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/small-img.jpg" alt="" title=""></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5>Dhinkia Row: Environmentalist Warns Of Mass Protest Across Odisha</h5>
                           </a>
                        </div>
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/small-img.jpg" alt="" title=""></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5>Dhinkia Row: Environmentalist Warns Of Mass Protest Across Odisha</h5>
                           </a>
                        </div>
                        <a href="#" class="otv-more-option">All Photos</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--===================== //CENTER PANEL =======================-->
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js_mobile.php'; ?>
      </script>
   </body>
</html>