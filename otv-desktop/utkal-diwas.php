<?php include 'includes/header.php'; ?>
<style type="text/css">
   body {
   background-image: url(images/utkal-divas-bg.jpg);
   background-repeat: repeat;
   }
   .utkal-divas-banner {
   float: left;
   width: 100%;
   margin: -40px 0px 0px 0px;
   }
   .utkal-divas-banner img {
   max-width: 100%;
   height: auto;
   }
   /*=============== SIDEBAR ==============*/
   h3.ud-common-heading-one {
   margin: 0px;
   background-color: #ee1c01;
   width: fit-content;
   color: #fff;
   text-transform: capitalize;
   font-size: 17px;
   line-height: 35px;
   padding: 0px 15px;
   }
   h3.ud-common-heading-two {
   margin: 0px;
   background-color: #000;
   width: fit-content;
   color: #fff;
   text-transform: capitalize;
   font-size: 17px;
   line-height: 35px;
   padding: 0px 15px;
   }
   .ud-box-two-parent {
   background-color: #fff;
   margin: -5px 0px 15px 0px;
   }
   .ud-sidebar-box-two {
   display: inline-block;
   width: 100%;
   border-bottom: solid 1px #d9c7c7;
   padding: 10px 10px 10px 116px;
   position: relative;
   }
   .ud-sidebar-box-two-img {
   position: absolute;
   left: 10px;
   top: 10px;
   width: 96px;
   height: 65px;
   }
   .ud-sidebar-box-two-content h3 {
   margin: 0px;
   padding: 0px;
   font-size: 17px;
   color: #333;
   line-height: 19px;
   height: 43px;
   overflow: hidden;
   }
   .ud-sidebar-box-two-content p {
   margin: 3px 0px 0px 0px;
   padding: 0px;
   color: #cdbebe;
   font-size: 12px;
   }
   .ud-sidebar-box-two-content p img {
   height: 12px;
   float: left;
   margin-right: 5px;
   margin-top: 2px;
   }
   ul.ud-sidebar-nav {
   margin: 0px;
   padding: 0px;
   display: inline-block;
   width: 100%;
   }
   ul.ud-sidebar-nav li {
   list-style-type: none;
   float: left;
   }
   ul.ud-sidebar-nav li a {
   text-decoration: none;
   display: block;
   line-height: 35px;
   background-color: #e9e9e9;
   color: #000;
   font-size: 17px;
   padding: 0px 15px;
   border-right: solid 1px #d7d7d7;
   }
   ul.ud-sidebar-nav li:last-child a {
   border-right: none;
   }
   ul.ud-sidebar-nav li:first-child a {
   background-color: #000;
   color: #fff;
   }
   .ud-comments {
   display: inline-block;
   width: 100%;
   border-bottom: solid 1px #d9c7c7;
   padding: 10px;
   position: relative;
   padding-left: 70px;
   }
   .ud-comments h3 {
   margin: 0px;
   padding: 0px;
   font-size: 17px;
   color: #333;
   line-height: 19px;
   height: 23px;
   overflow: hidden;
   }
   .ud-comments p {
   margin: 3px 0px 0px 0px;
   padding: 0px;
   color: #cdbebe;
   font-size: 12px;
   }
   .ud-comments p img {
   height: 12px;
   float: left;
   margin-right: 5px;
   margin-top: 2px;
   }
   .ud-comments span img {
   position: absolute;
   left: 18px;
   top: 20px;
   width: 28px;
   }
   .ud-sidebar-box {
   margin: 0px;
   padding: 0px;
   position: relative;
   display: inline-block;
   width: 100%;
   background-color: #fff;
   margin-bottom: 15px;
   }
   .ud-comments-box {
   background-color: #fff;
   margin-bottom: 15px;
   }
   img.ud-sidebar-box-thumbnail {
   max-width: 100%;
   height: auto;
   }
   .ud-sidebar-box-content {
   padding: 10px;
   }
   .ud-sidebar-box-content h3 {
   margin: 0px 0px 15px 0px;
   padding: 0px;
   font-size: 23px;
   color: #333;
   line-height: 25px;
   height: 54px;
   overflow: hidden;
   }
   .ud-sidebar-box-content p {
   margin: 3px 0px 0px 0px;
   padding: 0px;
   color: #cdbebe;
   font-size: 12px;
   }
   .ud-sidebar-box-content p img {
   height: 12px;
   float: left;
   margin-right: 5px;
   margin-top: 2px;
   }
   /*============== //SIDEBAR =============*/
   /*============== MAIN PANEL =============*/
   h2.heading-style-eight {
   margin: 5px 0px 15px 0px;
   padding: 0px 18px;
   background-color: #ee1c01;
   color: #fff;
   text-transform: capitalize;
   font-weight: 500;
   font-size: 18px;
   line-height: 32px;
   width: fit-content;
   letter-spacing: 2px;
   }
   .utkal-diwas-listing-result-news-2nd {
   position: relative;
   border: 1px solid #efe2e6;
   display: inline-block;
   width: 100%;
   min-height: 145px;
   padding: 0px 0px 0px 263px;
   margin-bottom: 15px;
   background-color: #fff;
   }
   .utkal-diwas-listing-result-news-2nd img {
   width: 248px;
   height: 157px;
   object-fit: cover;
   position: absolute;
   left: 0px;
   top: 0px;
   }
   .utkal-diwas-listing-result-news-2nd h5 {
   font-size: 22px;
   text-decoration: none;
   display: block;
   color: #000;
   line-height: 29px;
   margin: 0 0 5px 0;
   padding: 0;
   font-family: Faustina,serif;
   height: 57px;
    overflow: hidden;
   }
   .utkal-diwas-listing-result-news-2nd p {
   font-size: 17px;
   line-height: 24px;
   font-family: Faustina,serif;
   }
   .utkal-diwas-political-byte img {
   width: 100%;
   width: 100%;
   height: 232px;
   object-fit: cover;
   }
   .utkal-diwas-political-byte h3 {
   margin: 15px 15px;
   padding: 0;
   color: #fb4d35;
   font-weight: 500;
   font-size: 25px;
   line-height: 23px;
   height: 50px;
    overflow: hidden;
   }
   ul.utkal-diwas-share-bar {
   margin: 0;
   padding: 0px 8px;
   background-color: #fb4d35;
   display: flex;
   width: 100%;
   margin-bottom: 5px;
   }
   ul.utkal-diwas-share-bar li {
   display: inline;
   justify-content: center;
   margin-right: 4px;
   line-height: 33px;
   }
   ul.utkal-diwas-share-bar li a {
   text-decoration: none;
   font-size: 16px;
   color: #fff;
   }
   ul.utkal-diwas-share-bar li:last-child {
   float: right;
   position: absolute;
   right: 7px;
   }
   img.utkal-diwas-share-bar-img {
   width: fit-content;
   height: 14px;
   margin-right: 6px;
   margin-left: 6px;
   }
   .utkal-diwas-listing-result-news {
   position: relative;
   border-bottom: 1px solid #efe2e6;
   display: inline-block;
   width: 100%;
   min-height: 88px;
   padding-left: 146px;
   margin-bottom: 5px;
   }   
   .utkal-diwas-listing-result-news img {
   width: 120px;
   height: 74px;
   object-fit: cover;
   position: absolute;
   left: 15px;
   top: 6px;
   }
   .utkal-diwas-listing-result-news h5 {
   font-size: 18px;
   text-decoration: none;
   display: block;
   color: #000;
   line-height: 22px;
   margin: 4px 0 5px 0;
   padding: 0;
   font-family: Faustina,serif;
   overflow: hidden;
    height: 45px;
   }
   .utkal-diwas-political-byte {
   border: 1px solid #dfdfdf;
   margin-bottom: 20px;
   background-color: #fff;
   }
   .utkal-diwas-listing-result-news:last-child {
   border-bottom: none;
   }
   h4.tag-icon-video {
   position: absolute;
   left: 0;
   top: 0;
   color: #fff;
   background-color: #000;
   margin: 0;
   padding: 5px 8px 5px 8px;
   border-left: 7px solid #ee1c01;
   font-size: 17px;
   }
   .utkal-diwas-video {
   position: relative;
   }
    .utkal-diwas-video-img {
   position: relative;
   }
   .utkal-diwas-video-img {
   width: 299px;
   height: 163px;
   object-fit: cover;
   }
   img.videoslide-icon-utkal-dibas {
   position: absolute;
   right: 13px;
   bottom: 10px;
   width: 41px;
   height: 41px;
   }
   .utkal-diwas-timing {
   position: relative;
   margin: 15px;
   }
   img.timimg-img {
   width: 15px;
   height: 15px;
   position: absolute;
   left: 0;
   top: 4px;
   }
   p.timing {
   padding: 0;
   padding-left: 18px;
   margin: 0;
   color: #858585;
   font-size: 14px;
   line-height: 25px;
   font-family: 'Faustina,serif';
   }
   .utkal-diwas-timing-2nd {
   position: relative;
   margin: 8px 0px;
   }
   .utkal-diwas-video h5 {
   margin: 3px 0px;
   padding: 0;
   font-size: 18px;
   color: #000;
   line-height: 22px;
   font-weight: 500;
   }
   /*============== //MAIN PANEL =============*/
</style>
<div class="utkal-divas-banner">
   <img src="images/utkal-divas-banner.jpg" alt="" title="">
</div>
<section style="float: left; width: 100%; margin:-70px 0px 50px 0px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <h2 class="heading-style-eight">Political</h2>
            <div class="row">
               <div class="col-md-6">
                  <div class="utkal-diwas-political-byte">
                     <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635062934.jpg" alt="" title=""></a>
                     <a href="">
                        <h3>We went deep organisation for this amazing cave shot</h3>
                     </a>
                     <div class="utkal-diwas-timing">
                        <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                        <p class="timing">19 February 2016 </p>
                     </div>
                     <ul class="utkal-diwas-share-bar">
                        <li><a href="#"><img src="images/svg/ud-share-white.svg" class="utkal-diwas-share-bar-img">Share</a></li>
                        <li><a href="#"><img src="images/svg/ud-comment-white.svg" class="utkal-diwas-share-bar-img">0 comments</a></li>
                        <li><a href="#"><img src="images/svg/ud-view-white.svg" class="utkal-diwas-share-bar-img">11188 views</a></li>
                        <li><a href="#">Read More<img src="images/svg/ud-readmore-white.svg" class="utkal-diwas-share-bar-img"></a></li>
                     </ul>
                     <div class="utkal-diwas-listing-result-news">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" alt="#" title="Odisha SEC Announces Repoll In Dhamnagar NAC On April 5"></a>
                        <a href="#">
                           <h5>Odisha SEC Announces Repoll In Dhamnagar NAC On April 5</h5>
                        </a>
                        <div class="utkal-diwas-timing-2nd">
                           <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                           <p class="timing">19 February 2016 </p>
                        </div>
                     </div>
                     <div class="utkal-diwas-listing-result-news">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" alt="#" title="Odisha SEC Announces Repoll In Dhamnagar NAC On April 5"></a>
                        <a href="#">
                           <h5>Odisha SEC Announces Repoll In Dhamnagar NAC On April 5</h5>
                        </a>
                        <div class="utkal-diwas-timing-2nd">
                           <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                           <p class="timing">19 February 2016 </p>
                        </div>
                     </div>
                     <div class="utkal-diwas-listing-result-news">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" alt="#" title="Odisha SEC Announces Repoll In Dhamnagar NAC On April 5"></a>
                        <a href="#">
                           <h5>Odisha SEC Announces Repoll In Dhamnagar NAC On April 5</h5>
                        </a>
                        <div class="utkal-diwas-timing-2nd">
                           <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                           <p class="timing">19 February 2016 </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="utkal-diwas-political-byte">
                     <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635062934.jpg" alt="" title=""></a>
                     <a href="">
                        <h3>We went deep organisation for this amazing cave shot</h3>
                     </a>
                     <div class="utkal-diwas-timing">
                        <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                        <p class="timing">19 February 2016 </p>
                     </div>
                     <ul class="utkal-diwas-share-bar">
                        <li><a href="#"><img src="images/svg/ud-share-white.svg" class="utkal-diwas-share-bar-img">Share</a></li>
                        <li><a href="#"><img src="images/svg/ud-comment-white.svg" class="utkal-diwas-share-bar-img">0 comments</a></li>
                        <li><a href="#"><img src="images/svg/ud-view-white.svg" class="utkal-diwas-share-bar-img">11188 views</a></li>
                        <li><a href="#">Read More<img src="images/svg/ud-readmore-white.svg" class="utkal-diwas-share-bar-img"></a></li>
                     </ul>
                     <div class="utkal-diwas-listing-result-news">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" alt="#" title="Odisha SEC Announces Repoll In Dhamnagar NAC On April 5"></a>
                        <a href="#">
                           <h5>Odisha SEC Announces Repoll In Dhamnagar NAC On April 5</h5>
                        </a>
                        <div class="utkal-diwas-timing-2nd">
                           <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                           <p class="timing">19 February 2016 </p>
                        </div>
                     </div>
                     <div class="utkal-diwas-listing-result-news">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" alt="#" title="Odisha SEC Announces Repoll In Dhamnagar NAC On April 5"></a>
                        <a href="#">
                           <h5>Odisha SEC Announces Repoll In Dhamnagar NAC On April 5</h5>
                        </a>
                        <div class="utkal-diwas-timing-2nd">
                           <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                           <p class="timing">19 February 2016 </p>
                        </div>
                     </div>
                     <div class="utkal-diwas-listing-result-news">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1645464755.jpg" alt="#" title="Odisha SEC Announces Repoll In Dhamnagar NAC On April 5"></a>
                        <a href="#">
                           <h5>Odisha SEC Announces Repoll In Dhamnagar NAC On April 5</h5>
                        </a>
                        <div class="utkal-diwas-timing-2nd">
                           <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                           <p class="timing">19 February 2016 </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <h2 class="heading-style-eight">Political</h2>
            <div class="utkal-diwas-listing-result-news-2nd">
               <a href="#">
               <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1648704425.webp" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1648704425.webp" alt="" title=""></a>
               <a href="#">
                  <h5>Pariksha Pe Charcha: Around 26000 Odisha Students To Attend Virtually On April 1</h5>
               </a>
               <div class="utkal-diwas-timing-2nd">
                  <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                  <p class="timing">19 February 2016 </p>
               </div>
               <p>Raj Bhawans of all the States and UTs will be connected virtually in the programme and the selected students will be awarded with the special kits by the State Governors.</p>
               <a href="">
                  <h4 class="tag-icon-video">Travel</h4>
               </a>
            </div>
            <div class="utkal-diwas-listing-result-news-2nd">
               <a href="#">
               <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1648704425.webp" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1648704425.webp" alt="" title=""></a>
               <a href="#">
                  <h5>Pariksha Pe Charcha: Around 26000 Odisha Students To Attend Virtually On April 1</h5>
               </a>
               <div class="utkal-diwas-timing-2nd">
                  <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                  <p class="timing">19 February 2016 </p>
               </div>
               <p>Raj Bhawans of all the States and UTs will be connected virtually in the programme and the selected students will be awarded with the special kits by the State Governors.</p>
               <a href="">
                  <h4 class="tag-icon-video">Travel</h4>
               </a>
            </div>
            <div class="utkal-diwas-listing-result-news-2nd">
               <a href="#">
               <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1648704425.webp" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1648704425.webp" alt="" title=""></a>
               <a href="#">
                  <h5>Pariksha Pe Charcha: Around 26000 Odisha Students To Attend Virtually On April 1</h5>
               </a>
               <div class="utkal-diwas-timing-2nd">
                  <img src="images/svg/ud-calender-red.svg" class="timimg-img" title="" alt="">
                  <p class="timing">19 February 2016 </p>
               </div>
               <p>Raj Bhawans of all the States and UTs will be connected virtually in the programme and the selected students will be awarded with the special kits by the State Governors.</p>
               <a href="">
                  <h4 class="tag-icon-video">Travel</h4>
               </a>
            </div>
            <h2 class="heading-style-eight">Political</h2>
            <div class="row">
               <div class="col-md-4">
                  <div class="utkal-diwas-video">
                    <a href="#"><div class="utkal-diwas-video-img">
                        <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/RCB_Vs_KKR_1648698982.webp" class="utkal-diwas-video-img"  alt="" title="">
                        <img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="Play video" class="videoslide-icon-utkal-dibas">
                    </div></a>
                     <a href="#"><h4 class="tag-icon-video">Travel</h4></a>
                     <a href="">
                        <h5>Pariksha Pe Charcha: Around 26000 Odisha Students To Attend Virtually On April 1</h5>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="utkal-diwas-video">
                    <a href="#"><div class="utkal-diwas-video-img">
                        <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/RCB_Vs_KKR_1648698982.webp" class="utkal-diwas-video-img"  alt="" title="">
                        <img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="Play video" class="videoslide-icon-utkal-dibas">
                    </div></a>
                     <a href="#"><h4 class="tag-icon-video">Travel</h4></a>
                     <a href="">
                        <h5>Pariksha Pe Charcha: Around 26000 Odisha Students To Attend Virtually On April 1</h5>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="utkal-diwas-video">
                    <a href="#"><div class="utkal-diwas-video-img">
                        <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/RCB_Vs_KKR_1648698982.webp" class="utkal-diwas-video-img"  alt="" title="">
                        <img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="Play video" class="videoslide-icon-utkal-dibas">
                    </div></a>
                     <a href="#"><h4 class="tag-icon-video">Travel</h4></a>
                     <a href="">
                        <h5>Pariksha Pe Charcha: Around 26000 Odisha Students To Attend Virtually On April 1</h5>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <!--============== SIDEBAR ===============-->
            <h3 class="ud-common-heading-one">Most Views</h3>
            <div class="ud-sidebar-box">
               <a href="#"><span></span></a>
               <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1648704425.webp" alt="" title="" class="ud-sidebar-box-thumbnail"></a>
               <div class="ud-sidebar-box-content">
                  <a href="#">
                     <h3>Welcoming the digital generation</h3>
                  </a>
                  <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
               </div>
            </div>
            <h3 class="ud-common-heading-two">Recent comments</h3>
            <div class="ud-comments-box">
               <a href="#">
                  <div class="ud-comments">
                     <span><img src="images/svg/ud-comment-gray.svg" alt="" title=""></span>
                     <h3>Digital watch</h3>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </a>
               <a href="#">
                  <div class="ud-comments">
                     <span><img src="images/svg/ud-comment-gray.svg" alt="" title=""></span>
                     <h3>Digital watch</h3>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </a>
               <a href="#">
                  <div class="ud-comments">
                     <span><img src="images/svg/ud-comment-gray.svg" alt="" title=""></span>
                     <h3>Digital watch</h3>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </a>
               <a href="#">
                  <div class="ud-comments">
                     <span><img src="images/svg/ud-comment-gray.svg" alt="" title=""></span>
                     <h3>Digital watch</h3>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </a>
               <a href="#">
                  <div class="ud-comments">
                     <span><img src="images/svg/ud-comment-gray.svg" alt="" title=""></span>
                     <h3>Digital watch</h3>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </a>
            </div>
            <ul class="ud-sidebar-nav">
               <li><a href="#">Fun</a></li>
               <li><a href="#">Food</a></li>
               <li><a href="#">Sports</a></li>
            </ul>
            <div class="ud-box-two-parent">
               <div class="ud-sidebar-box-two">
                  <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1648704425.webp" alt="" title="" class="ud-sidebar-box-two-img" width="96" height="65"></a>
                  <div class="ud-sidebar-box-two-content">
                     <a href="#">
                        <h3>Welcoming the digital generation</h3>
                     </a>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </div>
            </div>
            <ul class="ud-sidebar-nav">
               <li><a href="#">Fun</a></li>
               <li><a href="#">Food</a></li>
               <li><a href="#">Sports</a></li>
            </ul>
            <div class="ud-box-two-parent">
               <div class="ud-sidebar-box-two">
                  <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1648704425.webp" alt="" title="" class="ud-sidebar-box-two-img" width="96" height="65"></a>
                  <div class="ud-sidebar-box-two-content">
                     <a href="#">
                        <h3>Welcoming the digital generation</h3>
                     </a>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </div>
               <div class="ud-sidebar-box-two">
                  <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1648704425.webp" alt="" title="" class="ud-sidebar-box-two-img" width="96" height="65"></a>
                  <div class="ud-sidebar-box-two-content">
                     <a href="#">
                        <h3>Welcoming the digital generation</h3>
                     </a>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </div>
               <div class="ud-sidebar-box-two">
                  <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1648704425.webp" alt="" title="" class="ud-sidebar-box-two-img" width="96" height="65"></a>
                  <div class="ud-sidebar-box-two-content">
                     <a href="#">
                        <h3>Welcoming the digital generation</h3>
                     </a>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </div>
               <div class="ud-sidebar-box-two">
                  <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1648704425.webp" alt="" title="" class="ud-sidebar-box-two-img" width="96" height="65"></a>
                  <div class="ud-sidebar-box-two-content">
                     <a href="#">
                        <h3>Welcoming the digital generation</h3>
                     </a>
                     <p><img src="images/svg/ud-calender-red.svg" alt="" title=""> February 16, 2018</p>
                  </div>
               </div>
            </div>
            <div class="otv-300-250-ad"> &nbsp; </div>
            <!--============= //SIDEBAR ==============-->
         </div>
      </div>
   </div>
</section>
<?php include 'includes/footer.php'; ?>