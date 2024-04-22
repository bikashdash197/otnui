<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css.php'; ?>
         h3.otv-heading-new-two {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: 10px 0px;
         padding: 0px;
         float: left;
         width: 100%;
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
         .breadcrumb-one {
         float: left;
         width: 100%;
         }
         .breadcrumb-one ul {
         margin: 0px;
         padding: 0px;
         }
         .breadcrumb-one ul li {
         list-style-type: none;
         float: left;
         color: #d52028;
         font-size: 13px;
         }
         .breadcrumb-one ul li a {
         color: #007bff;
         margin-right: 15px;
         position: relative;
         }
         .breadcrumb-one ul li a:before {
         content: "/";
         position: absolute;
         right: -10px;
         top: -2px;
         }
         .trending-tags {
         float: left;
         width: 100%;
         border-top: solid 1px #e1e1e1;
         border-bottom: solid 1px #e1e1e1;
         padding: 10px 0px;
         }
         .trending-tags ul {
         margin: 0px;
         padding: 0px;
         }
         .trending-tags ul li {
         list-style-type: none;
         float: left;
         margin-right: 15px;
         }
         .trending-tags ul li a {
         color: #636363;
         text-decoration: none;
         display: block;
         font-size: 15px;
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
         .otv-cat-news-sub {
         position: relative;
         width: 100%;
         height: auto;
         padding-right: 226px;
         margin-bottom: 15px;
         }
         .otv-cat-news-sub-img {
         width: 224px;
         height: 126px;
         object-fit: cover;
         position: absolute;
         right: 0;
         border-radius: 8px;
         }
         .otv-cat-news-subbd-content {
         display: table-cell;
         vertical-align: middle;
         }
         .otv-cat-news-subbd-content h6 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
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
         img.bd-play-video-one {
         position: absolute;
         right: 78px;
         top: 34px;
         width: 60px;
         height: 60px;
         background-color: #0000004d;
         border-radius: 50%;
         padding: 6px;
         border: solid 1px #fff;
         }
         .otv-bd-time-share {
         display: inline-block;
         width: calc(100% - 10px);
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
         .otv-cat-news-first {
         position: relative;
         margin: 0px 0px 10px 0px;
         padding: 10px;
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         display: inline-block;
         width: 100%;
         }
         h1.otv-heading-one {
         line-height: 30px;
         font-size: 28px;
         font-weight: 700;
         color: #000000;
         margin-bottom: 7px;
         }
         .otv-cat-news-first-img {
         position: relative;
         margin-bottom: 10px;
         }
         otv-cat-news-first-img img {
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
         span.otv-cat-photocredit img {
         height: 15px;
         position: absolute;
         left: 5px;
         top: 10px;
         width: 26px!important;
         }
         .video-featured-image{
         border-radius: 8px;
         position: relative;
         width: 100%;
         height: 301px;
         }
         img.featured-play-video {
         position: absolute;
         right: 0;
         left: 0;
         margin: 0 auto;
         top: calc(50% - 45px);
         width: 90px;
         height: 90px;
         background-color: #0000004d;
         border-radius: 50%;
         padding: 6px;
         border: solid 1px #fff;
         }
         /* VIDEO POPUP */
         @media (min-width: 576px) {
         .modal-dialog {
         max-width: 972px !important;
         }
         }
         .videopopupitem {
         float: left;
         width: 100%;
         background-color: #000;
         position: sticky;
         }
         .modal-body {
         padding: 0px;
         }
         .modal-backdrop.show {
         opacity: .9 !important;
         }
         .or-video-sec {
         background-color: #000;
         display: inline-block;
         }
         .videos-single {
         background-color: #000;
         padding: 0px;
         display: inline-block;
         float: left;
         width: 100%;
         border-bottom: 1px solid #bbb;
         margin-bottom: 15px;
         }
         .videos-single iframe {
         width: 100%;
         height: 560px;
         }
         .or-video-details {
         padding: 10px;
         background-color: #313131;
         border-bottom: 1px solid #c9c9c9;
         margin-top: -7px;
         }
         h3.video-headline {
         margin: 0px;
         padding: 0px;
         margin-bottom: 0px;
         font-size: 21px;
         line-height: 26px;
         color: #fff;
         height: 40px;
         overflow: hidden;
         }
         ul.video-publish-timing {
         margin: 0;
         padding: 0;
         }
         ul.video-publish-timing li {
         display: inline;
         list-style-type: none;
         color: #fff;
         font-size: 11px;
         margin-right: 15px;
         }
         .or-video-share {
         position: relative;
         display: inline-block;
         width: 100%;
         padding: 10px;
         background-color: #636363;
         border-bottom: 1px solid #c9c9c9;
         }
         img.video-image-author {
         background-color: #f9faff;
         width: 45px;
         height: 45px;
         object-fit: cover;
         border-radius: 50%;
         position: absolute;
         left: 6px;
         top: 14px;
         }
         ul.video-author-bd {
         margin: 3px 0 0 0;
         padding: 0;
         display: inline-block;
         width: 100%;
         padding-left: 50px;
         }
         ul.video-author-bd li {
         list-style-type: none;
         display: inline-block;
         margin-right: 17px;
         position: relative;
         font-size: 12px;
         font-family: 'Libre Franklin',sans-serif;
         font-weight: 300;
         text-transform: uppercase;
         color: #fff;
         font-size: 13px;
         }
         ul.video-author-bd li a {
         text-decoration: none;
         color: #fff;
         transition-duration: .5s;
         font-size: 13px;
         }
         img.location-pin {
         position: absolute;
         left: -13px!important;
         top: 2px!important;
         width: 9px!important;
         height: 13px!important;
         }
         ul.video-share-style {
         margin: 0;
         padding: 0;
         position: absolute;
         right: 10px;
         top: 19px;
         }
         ul.video-share-style li {
         list-style-type: none;
         display: inline-block;
         margin-left: 2px;
         position: relative;
         }
         ul.video-share-style li a {
         background-color: #fff;
         padding: 5px;
         border-radius: 3px;
         color: #000;
         font-size: 13px;
         }
         ul.video-share-style li a img {
         width: 14px;
         height: 12px;
         margin-right: 3px;
         }
         /* //VIDEO POPUP */
         .IframeContainer{
            width: 100%;
            height: 570px;
            background-color: #000;
         }
      </style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <section class="all-panel">
         <div class="container">
            <div class="row">
               <?php include 'includes/sidebar_left.php'; ?>
               <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="breadcrumb-one">
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li>Videos</li>
                     </ul>
                  </div>
                  <h3 class="otv-heading-new-two"><span>Latest Videos</span></h3>
                  <div class="trending-tags">
                     <ul>
                        <li><a href="#">India News</a></li>
                        <li><a href="#">Coronavirus Crises</a></li>
                        <li><a href="#">World news</a></li>
                        <li><a href="#">Entertainment news</a></li>
                        <li><a href="#">life style</a></li>
                     </ul>
                  </div>
                  <!--=============== FEATURED ===============-->
                  <div class="otv-cat-news-first">
                     <a href="" data-toggle="modal" data-target="#videomodal" id="video_handler">
                        <h1 class="otv-heading-one">ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h1>
                        <div class="otv-cat-news-first-img">
                           <img src="images/large-article-img.jpg" class="video-featured-image">
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                           <img src="images/svg/play-white.svg" class="featured-play-video" width="25" height="25" alt="" title="" data-toggle="modal" data-target="#videomodal">
                        </div>
                     </a>
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
                  <!--============== //FEATURED ==============-->
                  <!--=============== RELATED ===============-->
                  <div class="otv-cat-news-second">
                     <div class="otv-cat-news-sub">
                        <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-cat-news-sub-img"></a>
                        <div class="otv-cat-news-subbd-content">
                           <a href="#">
                              <h6>ENtertainment</h6>
                           </a>
                           <a href="#">
                              <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ</h5>
                           </a>
                        </div>
                        <a href="#"><img src="images/svg/play-white.svg" class="bd-play-video-one" width="60" height="60" alt="" title=""></a>
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
                           <a href="#">
                              <h6>ENtertainment</h6>
                           </a>
                           <a href="#">
                              <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                           </a>
                        </div>
                        <a href="#"><img src="images/svg/play-white.svg" class="bd-play-video-one" width="60" height="60" alt="" title=""></a>
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
                           <a href="#">
                              <h6>ENtertainment</h6>
                           </a>
                           <a href="#">
                              <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                           </a>
                        </div>
                        <a href="#"><img src="images/svg/play-white.svg" class="bd-play-video-one" width="60" height="60" alt="" title=""></a>
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
                           <a href="#">
                              <h6>ENtertainment</h6>
                           </a>
                           <a href="#">
                              <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                           </a>
                        </div>
                        <a href="#"><img src="images/svg/play-white.svg" class="bd-play-video-one" width="60" height="60" alt="" title=""></a>
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
                           <a href="#">
                              <h6>ENtertainment</h6>
                           </a>
                           <a href="#">
                              <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                           </a>
                        </div>
                        <a href="#"><img src="images/svg/play-white.svg" class="bd-play-video-one" width="60" height="60" alt="" title=""></a>
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
                  <!--============== //RELATED ==============-->
               </div>
               <?php include 'includes/sidebar_right.php'; ?>
            </div>
         </div>
      </section>
      <!--============================ VIDEO WINDOW =============================-->
      <div class="modal fade" id="videomodal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body">
                  <div class="videopopupitem active" id="item1" video_link="video-link_1">
                     <div class="videos-single">
                        <div class="IframeContainer">
                           <iframe id="player" class="srcvideo active" width="970" height="560" src="https://www.youtube.com/embed/B0DVQC1w-JU?autoplay=1&mute=0" srcdata="https://www.youtube.com/embed/B0DVQC1w-JU?autoplay=1&mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="or-video-details">
                           <button id="pause">pause This</button>
                           <button id="play">play This</button>
                           <a href="">
                              <h3 class="video-headline">ସୁନାଖଣି ଜଙ୍ଗଲରେ ସୁନାର ମିଳିଛି କି ସନ୍ଧାନ ! ଆରମ୍ଭ ହୋଇଗଲା ଖୋଳାତଡ଼ା ...</h3>
                           </a>
                           <ul class="video-publish-timing">
                              <li>70,316 views</li>
                              <li>MAY 10,2022</li>
                           </ul>
                        </div>
                        <div class="or-video-share">
                           <a href="">
                           <img src="images/small-img.jpg"class="video-image-author" alt="" title="">
                           </a>
                           <ul class="video-author-bd">
                              <li><a href="">Odishatv Bureau</a></li>
                              <li>
                                 <a href="">  
                                 <img src="images/svg/location-pin.svg" class="location-pin" width="30" height="30" alt="Location"> India</a>
                              </li>
                           </ul>
                           <ul class="video-author-bd">
                              <li>Published: Thursday, 19 May 2022</li>
                           </ul>
                           <ul class="video-share-style">
                              <li><a href=""><img src="images/svg/like.svg">like</a></li>
                              <li><a href=""><img src="images/svg/dislike.svg">dislike</a></li>
                              <li><a href=""><img src="images/svg/share-icon.svg">share</a></li>
                              <li><a href=""><img src="images/svg/share-icon.svg">Comment</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="otv-970-250-ad">
                     &nbsp;
                  </div>
                  <div class="videopopupitem" id="item2" video_link="video-link_2">
                     <div class="videos-single">
                        <div class="IframeContainer">
                           <iframe id="player" class="srcvideo" width="1280" height="537" src="https://www.youtube.com/embed/R2SQW4gKwj0?autoplay=1&mute=0" srcdata="https://www.youtube.com/embed/R2SQW4gKwj0?autoplay=1&mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="or-video-details">
                           <a href="">
                              <h3 class="video-headline">ସୁନାଖଣି ଜଙ୍ଗଲରେ ସୁନାର ମିଳିଛି କି ସନ୍ଧାନ ! ଆରମ୍ଭ ହୋଇଗଲା ଖୋଳାତଡ଼ା ...</h3>
                           </a>
                           <ul class="video-publish-timing">
                              <li>70,316 views</li>
                              <li>MAY 10,2022</li>
                           </ul>
                        </div>
                        <div class="or-video-share">
                           <a href="">
                           <img src="images/small-img.jpg"class="video-image-author" alt="" title="">
                           </a>
                           <ul class="video-author-bd">
                              <li><a href="">Odishatv Bureau</a></li>
                              <li>
                                 <a href="">  
                                 <img src="images/svg/location-pin.svg" class="location-pin" width="30" height="30" alt="Location"> India</a>
                              </li>
                           </ul>
                           <ul class="video-author-bd">
                              <li>Published: Thursday, 19 May 2022</li>
                           </ul>
                           <ul class="video-share-style">
                              <li><a href=""><img src="images/svg/like.svg">like</a></li>
                              <li><a href=""><img src="images/svg/dislike.svg">dislike</a></li>
                              <li><a href=""><img src="images/svg/share-icon.svg">share</a></li>
                              <li><a href=""><img src="images/svg/share-icon.svg">Comment</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="videopopupitem" id="item3" video_link="video-link_3">
                     <div class="videos-single">
                        <div class="IframeContainer">
                           <iframe id="player" class="srcvideo" width="1280" height="537" src="https://www.youtube.com/embed/xhDlFJ3Beok?autoplay=1&mute=0" srcdata="https://www.youtube.com/embed/xhDlFJ3Beok?autoplay=1&mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="or-video-details">
                           <a href="">
                              <h3 class="video-headline">ସୁନାଖଣି ଜଙ୍ଗଲରେ ସୁନାର ମିଳିଛି କି ସନ୍ଧାନ ! ଆରମ୍ଭ ହୋଇଗଲା ଖୋଳାତଡ଼ା ...</h3>
                           </a>
                           <ul class="video-publish-timing">
                              <li>70,316 views</li>
                              <li>MAY 10,2022</li>
                           </ul>
                        </div>
                        <div class="or-video-share">
                           <a href="">
                           <img src="images/small-img.jpg"class="video-image-author" alt="" title="">
                           </a>
                           <ul class="video-author-bd">
                              <li><a href="">Odishatv Bureau</a></li>
                              <li>
                                 <a href="">  
                                 <img src="images/svg/location-pin.svg" class="location-pin" width="30" height="30" alt="Location"> India</a>
                              </li>
                           </ul>
                           <ul class="video-author-bd">
                              <li>Published: Thursday, 19 May 2022</li>
                           </ul>
                           <ul class="video-share-style">
                              <li><a href=""><img src="images/svg/like.svg">like</a></li>
                              <li><a href=""><img src="images/svg/dislike.svg">dislike</a></li>
                              <li><a href=""><img src="images/svg/share-icon.svg">share</a></li>
                              <li><a href=""><img src="images/svg/share-icon.svg">Comment</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--============================ //VIDEO WINDOW ===========================-->
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js.php'; ?>
         /* On click add Query String */
            var videourl = window.location.href.split('?')[0];
            jQuery(document).ready(function(){
               $("#video_handler").click(function(){
                        newvideo_url = videourl + "?videowindow=active";
                        history.pushState({}, null, newvideo_url);
                        /* FIRST VIDEO PLAY */
                        var first_video = $(".srcvideo.active").attr("srcdata");
                        $(".srcvideo.active").attr('src', first_video);
                        /* //FIRST VIDEO PLAY */
               });
            });
         /* // On click add Query String */
         /* open modal if videowindow = active */
         var urlParams = new URLSearchParams(window.location.search);
         var active_window = urlParams.get('videowindow');
         if (active_window == "active") {
            //$('.videowindow').show();
            $('#videomodal').modal('show');
         }
         /* //open modal if videowindow = active */
         /* popup video URL */
         jQuery(document).ready(function(){
            $(".srcvideo").attr('src', '');
            $(".modal").scroll(function(){
               var scrollDistance = $(".modal").scrollTop();
               $(".videopopupitem").each(function(i) {
                  var cnt=0;
                  if ($(this).position().top <= scrollDistance + 200) {
                        if (cnt == 0) {
                           var url_val = $(this).attr("video_link") + "?videowindow=active";
                           history.pushState({}, null, url_val);
                           /* PLAY STOP */
                           $(".srcvideo").attr('src', '');
                           var iframeurl = $(this).find(".srcvideo").attr("srcdata");
                           $(this).find(".srcvideo").attr('src', iframeurl);
                           /* //PLAY STOP */
                        }
                  }
               });
            });
         });
         /* //popup video URL */
         /* remove query string on video close */
         $(document).on('hide.bs.modal','#videomodal', function () {
            var active_videourl = window.location.href.split('?')[0];
            history.pushState({}, null, active_videourl);
            $(".srcvideo").attr('src', '');
         });
         /* //remove query string on video close */
      </script>
   </body>
</html>