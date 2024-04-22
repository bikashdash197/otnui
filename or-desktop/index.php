<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css.php'; ?>
         /*BREAKING NEWS */
         section.breaking-news {
         margin: 0px;
         width: 100%;
         float: left;
         }
         .breakingnews-slide {
         position: relative;
         padding-left: 210px;
         padding-right: 140px;
         background-color: #e8311f;
         }
         section.breaking-news h3 {
         background-color: #000;
         color: #fff;
         margin: 0px;
         padding: 0px 10px;
         font-size: 20px;
         text-transform: uppercase;
         line-height: 35px;
         float: left;
         width: 200px;
         position: absolute;
         left: 0;
         top: 0;
         text-align: center;
         }
         .breakingnews-slide p {
         margin: 0px;
         padding: 0px;
         font-size: 18px;
         line-height: 35px;
         font-weight: 400;
         color: #fff;
         display: inline-block;
         vertical-align: middle;
         height: 35px;
         overflow: hidden !important;
         }
         ul.breaking-news-nav {
         position: absolute;
         right: -140px;
         top: 0;
         width: fit-content;
         margin: 0px;
         padding: 0px;
         }
         ul.breaking-news-nav li {
         list-style-type: none;
         float: left;
         line-height: 25px;
         width: 25px;
         background-color: #f5f5f57a;
         text-align: center;
         margin: 5px 5px 0px 0px;
         }
         button.breaking-news-close {
         margin: 0px;
         padding: 0px;
         border: none;
         line-height: 35px;
         width: 35px;
         background-color: #000;
         }
         li#pauseButton {
         cursor: pointer;
         }
         li#playButton {
         cursor: pointer;
         }
         /*//BREAKING NEWS */
         /*=============== BODY SECTION ===============*/
         section.all-panel {
         float: left;
         width: 100%;
         margin: 30px 0px;
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
         height: 301px;
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
         img.bd-play-video {
             position: absolute;
             right: 10px;
             top: 10px;
             width: 25px;
             height: 25px;
             background-color: #f65028bd;
             border-radius: 50%;
             padding: 6px;
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
             width: 100%;
             height: auto;
             padding-right: 226px;
             margin-bottom: 15px;
         }
         .otv-cat-news-subbd-content h6 {
             margin: 0px 0px 10px 0px;
             padding: 0px;
             color: #00b1cd;
             font-size: 15px;
             text-transform: uppercase;
         }
         .otv-bd-time-share {
             display: inline-block;
             width: calc(100% - 10px);
             margin-top: 10px;
         }
         ul.otv-bd-cat-time {
             margin: 0px;
             padding: 0px;
             float: left;
             width: fit-content;
         }
         ul.otv-bd-cat-time li {
             font-size: 16px;
             list-style-type: none;
             float: left;
         }
         .otv-bd-time-share {
             display: inline-block;
             width: calc(100% - 10px);
         }
         .otv-cat-news-subbd-content {
             display: table-cell;
             vertical-align: middle;
         }
         .otv-cat-news-sub-img {
             width: 224px;
             height: 126px;
             object-fit: cover;
             position: absolute;
             right: 0;
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
             padding: 7.5px;
             -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
             -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
             box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
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
         h2.otv-heading-second {
         font-size: 22px;
         line-height: 26px;
         font-weight: 600;
         color: #000000;
         margin-bottom: 7px;
         }
         /*=============== //BODY SECTION ===============*/
         /*=============== VIDEO SECTION ===============*/
         .otv-video-first {
         position: relative;
         margin-bottom: 30px;
         }
         .otv-video-first img {
         border-radius: 8px;
         margin-bottom: 10px;
         width: 100%;
         height: 312px;
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
         height: 152px;
         }
         .otv-video-sub h5 {
         font-size: 15px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 18px;
         margin: 0 0 5px 0;
         padding: 0;
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
         width: 24%;
         display: inline-block;
         background-color: #fff;
         padding: 5px;
         }
         .otv-photo-gallery-item img {
         width: 100%;
         height: 74px;
         object-fit: cover;
         }
         .otv-photo-gallery-item h5 {
             font-size: 15px;
             line-height: 22px;
             height: 67px;
             overflow: hidden;
             color: #000;
             margin: 5px 0px;
             padding: 0px;
         }
         .otv-photo-gallery {
         margin-bottom: 20px;
         }
         span.img-gallery-count {
             background-color: #0006;
             padding: 1px 3px;
             color: #fff;
             font-size: 12px;
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
         /*======== HOME PAGE DARKMODE ========*/
         body.dark-theme ul.tag-menu-morechild {
                background-color: #000;
         }
         body.dark-theme h3.otv-heading-new-two span, 
         body.dark-theme h3.otv-heading-new-three span, 
         body.dark-theme .otv-cat-news-third, 
         body.dark-theme .otv-download-app, 
         body.dark-theme .wzt, 
         body.dark-theme .otv-cat-news-first, 
         body.dark-theme .otv-cat-news-second, 
         body.dark-theme .otv-photo-gallery-item {
            background-color: #333;
         }
         body.dark-theme .live-large-box h2, 
         body.dark-theme .live-large-box-item h4, 
         body.dark-theme .live-large-box-item h6, 
         body.dark-theme h3.otv-heading-new-two span, 
         body.dark-theme .otv-sidebar-headlines h5, 
         body.dark-theme h4.ctizen-topic, 
         body.dark-theme a.cat-more-news-btn, 
         body.dark-theme h3.otv-heading-new-three span, 
         body.dark-theme h2.otv-heading-third, 
         body.dark-theme ul.otv-cat-time li:first-child a, 
         body.dark-theme .otv-download-app h4, 
         body.dark-theme ul.otv-download-feature li, 
         body.dark-theme h4.otv-horo-today, 
         body.dark-theme ul.otv-horoscope-item li a, 
         body.dark-theme ul.cricket-wzt-tab li a.active, 
         body.dark-theme h3.crk-wzt-match, 
         body.dark-theme h1.otv-heading-one, 
         body.dark-theme p.otv-cat-news-first-para, 
         body.dark-theme .otv-cat-news-sub h5, 
         body.dark-theme h2.otv-heading-second, 
         body.dark-theme .otv-video-first h5, 
         body.dark-theme .otv-video-sub h5, 
         body.dark-theme .otv-photo-gallery-item h5 {
            color: #fff !important;
         }
         /*======== //HOME PAGE DARKMODE ========*/
      </style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <section class="breaking-news">
         <div class="container">
            <div class="breakingnews-slide">
               <h3>Breaking news</h3>
               <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <a title="#" href="">
                           <p>ଆଜି ହାତକୁ ଦିହାତ ହେବେ ଟିନା ଡାବି</p>
                        </a>
                     </div>
                     <div class="carousel-item">
                        <a title="#" href="">
                           <p>ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନ୍ ସୈନ୍ୟଙ୍କ ଜୀବନ ବଞ୍ଚିଗଲା :</p>
                        </a>
                     </div>
                     <div class="carousel-item">
                        <a title="#" href="">
                           <p>ପ୍ରଥମ ଦିନରୁ ବଡ଼ ମାଛ ! ଗୋଟିଏ ସ୍କୁଲ ବସ୍କୁ ୪ ଲକ୍ଷ ଟଙ୍କା ଜରିମାନା</p>
                        </a>
                     </div>
                  </div>
                  <ul class="breaking-news-nav">
                     <li><a class="breaking-news-prev" href="#homeCarousel" data-slide="prev">
                        <img src="images/svg/prev-white.svg" alt="Slide">
                        </a>
                     </li>
                     <li id="pauseButton">
                        <img src="images/svg/stop-white.svg" alt="Slide">
                     </li>
                     <li id="playButton" style="display: none;">
                        <img src="images/svg/play-white.svg" alt="Slide">
                     </li>
                     <li><a class="breaking-news-next" href="#homeCarousel" data-slide="next">
                        <img src="images/svg/next-white.svg" alt="Slide">
                        </a>
                     </li>
                     <button class="breaking-news-close"><img src="images/svg/close-white.svg" height="" width="" alt="" title=""></button>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="all-panel">
         <div class="container">
            <div class="row">
               <?php include 'includes/sidebar_left.php'; ?>
               <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="otv-home-center">
                     <div class="otv-cat-news-first">
                        <a href="">
                           <h1 class="otv-heading-one">ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h1>
                        </a>
                        <p class="otv-cat-news-first-para">ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି । </p>
                        <div class="otv-cat-news-first-img" >
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
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
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <h3 class="otv-heading-new-two"><span>Entertainment</span></h3>
                     <div class="otv-cat-news-first">
                        <a href="">
                           <h1 class="otv-heading-one">ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h1>
                        </a>
                        <p class="otv-cat-news-first-para">ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି । </p>
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
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <div class="otv-cat-news-second">
                        <div class="otv-cat-news-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                           <div class="otv-cat-news-subbd-content">
                              <a href="#"><h6>ENtertainment</h6></a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                              <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
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
                     </div>
                     <h3 class="otv-heading-new-two"><span>Latest Videos</span></h3>
                     <div class="otv-video-sec">
                        <div class="otv-video-first">
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <img src="images/svg/play-white.svg" class="video-play">
                           <a href="">
                              <h5> କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି ! </h5>
                           </a>
                        </div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/medium-img.jpg"></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>ଗୋଟିଏ ଦିନରେ ପୁରୀରେ ଦୁଇ ଦୁଇଟି ମର୍ଡର, ଲୋକଙ୍କ ମନରେ ଛନକା </h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/medium-img.jpg"></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>ଗୋଟିଏ ଦିନରେ ପୁରୀରେ ୨ଟି ମର୍ଡର ହୋଇଛି। ଗୋଟିଏପଟେ ଶ୍ରୀମନ୍ଦିର ପରିଚାଳନା କମିଟିର</h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/medium-img.jpg"></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5> ଇଲେକ୍ସନ ଡ୍ୟୁଟିରେ ଥାଇ ଗଡ଼ବଡ଼ କରୁଥିଲେ ନିର୍ବାଚନ ଅଧିକାରୀ ! ତା’ବି ପୁଣି</h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="otv-video-sub">
                                 <a href=""><img src="images/medium-img.jpg"></a>
                                 <img src="images/svg/play-white.svg" class="video-play">
                                 <a href="">
                                    <h5>ଯାଜପୁର ଜିଲ୍ଲା ବରୀ ବ୍ଲକର ଅଧ୍ୟକ୍ଷ ନିର୍ବାଚନରେ ନିର୍ବାଚନ ଅଧିକାରୀ ଅନିୟମିତତା କରିଥିବା ଅଭିଯୋଗ ହୋଇଛି।</h5>
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
                              <a href="#"><img src="images/medium-img.jpg"></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5>ଯାଜପୁର ଜିଲ୍ଲା ବରୀ ବ୍ଲକର ଅଧ୍ୟକ୍ଷ ନିର୍ବାଚନରେ ନିର୍ବାଚନ ଅଧିକାରୀ ଅନିୟମିତତା କରିଥିବା ଅଭିଯୋଗ ହୋଇଛି।</h5>
                           </a>
                        </div>
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/medium-img.jpg"></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5>ଯାଜପୁର ଜିଲ୍ଲା ବରୀ ବ୍ଲକର ଅଧ୍ୟକ୍ଷ ନିର୍ବାଚନରେ ନିର୍ବାଚନ ଅଧିକାରୀ ଅନିୟମିତତା କରିଥିବା ଅଭିଯୋଗ ହୋଇଛି।</h5>
                           </a>
                        </div>
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/medium-img.jpg"></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5> ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି</h5>
                           </a>
                        </div>
                        <div class="otv-photo-gallery-item">
                           <div class="otv-photo-gallery-item-img">
                              <a href="#"><img src="images/medium-img.jpg"></a>
                              <span class="img-gallery-count"><img src="images/svg/photo-gallery-white.svg">5</span>
                           </div>
                           <a href="#">
                              <h5> ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି</h5>
                           </a>
                        </div>
                        <a href="#" class="otv-more-option">All Photos</a>
                     </div>
                  </div>
               </div>
               <?php include 'includes/sidebar_right.php'; ?>
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js.php'; ?>
      </script>
   </body>
</html>