<?php include_once 'includes/header.php'; ?>
<style type="text/css">
   div.black-bg-page {
   float: left;
   width: 100%;
   background-color: #000;
   margin-top: -20px;
   padding-top: 20px;
   }
   div.black-bg-page h3.heading-style-two {
   color: #fff;
   }
   p.gallery_copy_true {
   color: #fff;
   margin-top: 5px;
   font-size: 17px;
   }
   /*=================== BREADCRUMBS ====================*/
   ul.article-share-style-more.photo-gallery-social {
   bottom: -7px;
   }
   .mobile-breadcrumb-container {
   color: black;
   float: left;
   width: 100%;
   padding: 0px 15px;
   border-bottom: 1px solid #ffff;
   box-shadow: white;
   box-shadow: 1px 5px 8px -4px rgba(0,0,0,0.75);
   -webkit-box-shadow: 1px 5px 8px -4px rgb(147 145 145 / 30%);
   -moz-box-shadow: 1px 5px 8px -4px rgba(0,0,0,0.75);
   margin-bottom: 15px;
   padding-top: 3px;
   }
   ul.mobile-breadcrumb {
   margin: 3px 0px;
   padding: 0px;
   position: relative;
   display: block;
   float: left;
   width: 100%;
   line-height: 15px;
   height: 16px;
   overflow: hidden;
   }
   ul.mobile-breadcrumb:before {
   content: "";
   display: block;
   background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgb(255 255 255 / 50%) 39%);
   width: 41px;
   height: 100%;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 2;
   }
   .black-bg-page ul.mobile-breadcrumb:before {
   background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgb(0 0 0 / 50%) 39%);
   }
   ul.mobile-breadcrumb li {
   list-style-type: none;
   display: inline;
   color: #7b0505;
   text-transform: capitalize;
   font-size: 10px;
   position: relative;
   margin-right: 11px;
   font-family: 'Roboto', sans-serif;
   }
   ul.mobile-breadcrumb li a {
   color: #945151;
   font-weight: normal;
   }
   ul.mobile-breadcrumb li:before {
   font-family: "Font Awesome 5 Free";
   content: "\f054";
   font-weight: 900;
   bottom: -2px;
   right: -9px;
   color: #7b0505 !important;
   font-size: 8px;
   position: absolute;
   }
   ul.mobile-breadcrumb li:last-child:before{
   content: none;
   }
   ul.mobile-breadcrumb li:last-child {
   color: #9c9c9c;
   margin-left: 3px;
   }
   /*===================// BREADCRUMBS ====================*/
   /*=================== GALLERY DETAILS ====================*/
   .photo-gallery {
   background-color: #000;
   padding-bottom: 9px;
   }
   .photo-gallery img {
   width: 100%;
   height: auto;
   object-fit: cover;
   }
   .photo-gallery h1 {
   color: #ffffff;
   font-size: 24px;
   margin: 10px 0px;
   padding: 0px;
   }
   .photo-gallery-details {
   position: relative;
   padding-bottom: 30px;
   margin-bottom: 30px;
   border-bottom: solid 1px #382f2f;
   }
   .photo-gallery-details-photo img {
   width: 100%;
   min-height: 185px;
   object-fit: cover;
   }
   .photo-gallery-content {
   margin: 0px;
   padding: 0px;
   border-bottom: 1px solid #4c4e4e;
   }
   .photo-gallery-content h1 {
   font-size: 40px;
   font-weight: 500;
   color: #ffffff;
   margin: 10px 0px;
   }
   .photo-gallery-content h3 {
   font-size: 24px;
   line-height: 30px;
   color: #ffffff;
   margin: 10px 0px;
   }
   .photo-gallery-content ul {
   margin: 0px;
   padding: 0px;
   }
   .photo-gallery-content ul li {
   color: #fff;
   list-style-type: none;
   line-height: 40px;
   font-size: 17px;
   }
   .photo-gallery-content ul li a {
   color: #fff;
   }
   .photo-gallery-content ul li i {
   margin-right: 10px;
   font-size: 19px;
   }
   i.fas.fa-map-marker-alt.map {
   color: #9b9c9c;
   }
   i.far.fa-clock.clock {
   color: #9b9c9c;
   }
   .photo-gallery-content ul li:first-child {
   position: relative;
   margin-left: 23px;
   font-size: 20px;
   line-height: 26px;
   }
   .photo-gallery-content ul li:first-child:before {
   content: "";
   top: 8px;
   left: -19px;
   margin-right: 9px;
   background-color: #ffffff;
   position: absolute;
   width: 10px;
   height: 10px;
   border-radius: 50%;
   }
   .photo-gallery-footer {
   position: relative;
   border-bottom: 1px solid #a2a2a257;
   }
   .photo-gallery-footer ul {
   margin: 22px 8px;
   padding: 0px;
   }
   .photo-gallery-footer ul li {
   list-style: none;
   display: inline;
   }
   .photo-gallery-footer ul li a {
   color: #fff;
   }
   .photo-gallery-footer ul li i {
   text-align: center;
   width: 20px;
   }
   .photo-gallery-footer span {
   position: absolute;
   right: 7px;
   color: white;
   bottom: 53px;
   font-size: 22px;
   margin: 0px 2px;
   }
   .photo-gallery-footer p {
   position: absolute;
   right: 6px;
   color: white;
   bottom: 18px;
   font-size: 20px;
   }
   .photo-sub-gallery {
   background-color: #000;
   padding-bottom: 9px;
   }
   .photo-sub-gallery-image{
   position: relative;
   }
   .photo-sub-gallery-image img {
   width: 100%;
   height: auto;
   object-fit: cover;
   }
   .photo-sub-gallery-image h4 {
   position: absolute;
   color: white;
   bottom: -6px;
   left: 6px;
   font-size: 20px;
   letter-spacing: 11px;
   }
   .photo-sub-gallery-image h4 span {
   font-size: 25px;
   font-weight: 500;
   }
   .photo-sub-gallery-content{
   margin: 0px;
   padding: 0px;
   }
   .photo-sub-gallery-content h3 {
   font-size: 26px;
   color: #ffffff;
   font-weight: 500;
   margin: 10px 0px;
   }
   .photo-sub-gallery-content p {
   font-size: 18px;
   color: #ffffff;
   font-weight: 100;
   }
   .photo-sub-gallery-content h6 {
   font-size: 16px;
   color: #ffffff;
   font-weight: 100;
   margin: 14px 0px;
   }
   .photo-sub-gallery-footer {
   position: relative;
   border-bottom: 1px solid #a2a2a257;
   }
   .photo-sub-gallery-footer ul {
   margin: 22px 0px;
   padding: 0px;
   }
   .photo-sub-gallery-footer ul li {
   list-style: none;
   display: inline;
   }
   .photo-sub-gallery-footer ul li a {
   color: #fff;
   list-style: none;
   display: inline;
   font-size: 18px;
   margin-right: 2px;
   border-radius: 50%;
   border: 2px solid #676363;
   padding: 7px;
   }
   .photo-sub-gallery-footer ul li i {
   text-align: center;
   width: 20px;
   }
   .related-photo-gallery {
   margin: 0px 0px 30px 0px;
   }
   p#gallery_copy_true {
   color: #fff;
   margin-top: 5px;
   font-size: 17px;
   }
   .related-photo-gallery h3 {
   color: #fff;
   margin: 13px 0px;
   }
   .related-photo-gallery-content {
   position: relative;
   padding: 0px 9px 9px 103px;
   /* margin-bottom: 15px;*/
   }
   .related-photo-gallery-image {
   position: absolute;
   left: 0px;
   top: 0px;
   }
   .related-photo-gallery-image a img {
   width: 100%;
   height: auto;
   }
   /*.related-photo-gallery-content h4 {
   color: #fff;
   font-size: 17px;
   }*/
   h4.odishatv-app-heading {
   color: #fff;
   margin: 15px 0px 30px 0px;
   padding: 3px 0px 0px 0px;
   font-size: 15px;
   font-weight: 500;
   position: relative;
   padding-left: 46px;
   }
   h4.odishatv-app-heading:before {
   display: block;
   content: "";
   background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
   background-position: -150px -261px;
   width: 39px;
   height: 32px;
   position: absolute;
   left: 0;
   top: 0;
   }
   h4.tarangplus-app-heading {
   color: #fff;
   display: inline-block;
   margin: 0px 0px 0px 0px;
   padding: 3px 0px 0px 0px;
   font-size: 15px;
   font-weight: 500;
   position: relative;
   padding-left: 90px;
   }
   h4.tarangplus-app-heading:before {
   display: block;
   content: "";
   background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
   background-position: -239px -359px;
   width: 82px;
   height: 27px;
   position: absolute;
   left: 0;
   top: 0;
   }
   .footer-sidebar img {
   width: 49%;
   height: auto;
   margin-bottom: 20px;
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
   width: 87px;
   height: 28px;
   }
   ul.odishatv-app li:first-child a {
   background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
   background-position: -241px -316px;
   }
   ul.odishatv-app li:last-child a {
   background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
   background-position: -332px -316px;
   }
   .related-photo-gallery-content h4 {
   color: #fff;
   font-size: 16px;
   height: 55px;
   overflow: hidden;
   margin: 2px;
   }
   .related-photo-gallery-content h4 a {
   color: #ffffff;
   }
   ul.footer-button {
   padding: 0px;
   margin: 8px
   }
   ul.footer-button li {
   display: inline-block;
   margin: 20px 4px 5px 0px;
   }
   ul.footer-button li a {
   color: #ffffff;
   border: 1px solid;
   padding: 9px 9px;
   border-radius: 9px;
   }
   ul.footer-button li a:hover {
   color: #d79450;
   }
   h2.next-heading {
   color: #ffffff;
   font-weight: 500;
   font-size: 28px;
   border: 1px solid white;
   margin: 0px;
   padding: 6px 7px 6px 20px;
   margin-bottom: 32px;
   position: relative;
   }
   h2.next-heading:before {
   content: "";
   width: 0%;
   height: 0%;
   border-left: 12px solid transparent;
   border-right: 12px solid transparent;
   border-top: 11px solid white;
   bottom: 0px;
   top: 43px;
   position: absolute;
   }
   .gallery-bread-crumb {
   display: block;
   margin: 13px 8px;
   }
   .gallery-bread-crumb ul {
   margin: 0px;
   padding: 0px;
   }
   .gallery-bread-crumb ul li {
   list-style-type: none;
   display: inline-block;
   color: #ffffff;
   text-transform: capitalize;
   font-size: 18px;
   position: relative;
   margin-right: 20px;
   }
   .gallery-bread-crumb ul li:before {
   font-family: "Font Awesome 5 Free";
   content: "\f0da";
   font-weight: 900;
   top: 1px;
   right: -16px;
   color: #a00606;
   font-size: 18px;
   position: absolute;
   }
   .gallery-bread-crumb ul li a {
   color: #a00606;
   transition-duration: 1s;
   }
   .gallery-bread-crumb ul li a:hover {
   color: #ffab23;
   transition-duration: 1s;
   }
   .gallery-bread-crumb ul li:last-child:before {
   display: none;
   }
   .gallery-bread-crumb ul li:last-child {
   margin-right: 0px;
   }
   /*=================== //GALLERY DETAILS ====================*/
   /*============2nd Socialmedia  ==============*/
   ul.article-share-style-more-one {
   position: absolute;
   left: -209px;
   bottom: -6px;
   border: 1px solid #aaaaaa45;
   box-shadow: 0 2px 8px #9a9797;
   display: none;
   background-color: #fff;
   margin: 0px;
   padding: 6px;
   }
   ul.article-share-style-more-one li {
   list-style-type: none;
   float: left;
   margin: 0px 12.5px;
   padding: 0px;
   border: none !important;
   margin-left: 0px !important;
   padding-left: 0px !important;
   }
   ul.article-share-style-more-one li:last-child {
   margin: 0px;
   }
   ul.article-share-style-more-one li a {
   text-decoration: none;
   display: block;
   line-height: 50px;
   }
   ul.article-share-style-more-one li a:hover i{
   color: #a00606 !important;
   }
   ul.article-share-style-more-one li a i.fab.fa-facebook-f {
   color: #3c51a5;
   }
   ul.article-share-style-more-one li a i.fab.fa-twitter {
   color: #5db2f7;
   }
   ul.article-share-style-more-one li a i.fab.fa-instagram {
   color: #d94b8e;
   }
   ul.article-share-style-more-one li a i.fab.fa-pinterest-p {
   color: #d93a34;
   }
   ul.article-share-style-more-one li a i.fab.fa-linkedin-in {
   color: #036593;
   }
   ul.article-share-style-more-one li a i.fab.fa-telegram-plane {
   color: #299ecf;
   }
   ul.article-share-style-more-one li a i.fas.fa-print {
   color: #21428f;
   }
   ul.article-share-style-more-one li a i.fas.fa-comment-dots {
   color: #f178a3;
   }
   ul.article-share-style-more-one li a i.fas.fa-bookmark {
   color: #f4b01b;
   }
   ul.article-share-style-more-one li a i.fas.fa-share-alt {
   color: #818181;
   }
   ul.article-share-style li {
   list-style-type: none;
   display: inline-block;
   margin-left: 15px;
   }
   ul.article-share-style li a {
   text-decoration: none;
   display: block;
   cursor: pointer;
   }
   ul.article-share-style li a i {
   text-decoration: none;
   display: block;
   font-size: 22px;
   margin-right: 10px;
   }
   ul.article-share-style-more li a i {
   text-decoration: none;
   display: block;
   font-size: 19px;
   }
   ul.article-share-style-more li a i:hover {
   }
   .share-social-media-add {
   position: relative;
   }
   ul.article-share-style-more {
   position: absolute;
   right: 100%;
   bottom: -6px;
   border: 1px solid #aaaaaa45;
   box-shadow: 0 2px 8px #9a9797;
   display: none;
   background-color: #fff;
   margin: 0px;
   width: max-content;
   height: 32px;
   overflow: hidden;
   padding: 0px 10px 0px 15px;
   }
   ul.article-share-style-more li {
   list-style-type: none;
   float: left;
   margin: 0px 20.5px;
   padding: 0px;
   border: none !important;
   margin-left: 0px !important;
   padding-left: 0px !important;
   }
   ul.article-share-style-more li:last-child {
   margin: 0px;
   }
   ul.article-share-style-more li a {
   text-decoration: none;
   display: block;
   line-height: 17px;
   padding: 6px 0px;
   }
   .share-social-media-add {
   position: relative;
   }
   .photo-gallery-details-photo iframe {
   width: 100%;
   height: 236px;
   }
   span.photo-gallery-details-photo-credit-sub1 {
   position: absolute;
   bottom: 0px;
   left: 0;
   line-height: 17px;
   background-color: rgb(0 0 0 / 0.58);
   width: fit-content;
   padding: 9px 0px;
   color: #fff;
   font-size: 13px;
   opacity: 0.8;
   }
   ul.photo-gallery-details-photo-credit-sub2 {
   position: absolute;
   right: 0px;
   bottom: 0px;
   line-height: 15px;
   background-color: rgb(0 0 0 / 0.58);
   width: fit-content;
   padding: 8px;
   color: #fff;
   margin: 0px;
   }
   ul.photo-gallery-details-photo-credit-sub2 li {
   list-style-type: none;
   display: inline;
   cursor: pointer;
   }
   ul.photo-gallery-details-photo-credit-sub2 li span {
   font-size: 21px;
   }
   span.photo-gallery-details-photo-credit-sub1 i {
   margin-right: 10px;
   }
   ul.photo-gallery-details-photo-credit-sub2 li:last-child {
   margin-left: 15px;
   border-left: 1px solid #eaeaea85;
   padding-left: 16px;
   }
   .photo-gallery p {
   color: #fff;
   margin-top: 5px;
   font-size: 17px;
   }
   p.last-update-date-gallery {
   color: #fff;
   }    
</style>
<!--======================= MEGA MENU =========================-->
<div class="black-bg-page">
   <!--=================== BREADCRUMBS ====================-->
   <div class="container">
      <ul class="mobile-breadcrumb">
         <li><a href="https://odishatv.in/">Home</a></li>
         <li><a href="https://odishatv.in/photo-gallery">Photo Gallery</a></li>
         <li><a href="https://odishatv.in/national">National</a></li>
         <li>R-Day 2022: Glimpses From Republic Day Parade Rehearsals In Delhi</li>
      </ul>
   </div>
   <!--============= //BREADCRUMBS ============-->
   <div class="otv-300-250-ad">
      <!-- /370089190/Below_Header_Article_Mobile_300x250 -->
      <div id="div-gpt-ad-22339525376-0" style="width: 300px; height: 250px;">
         <script>
            googletag.cmd.push(function() { googletag.display("div-gpt-ad-22339525376-0"); }); 
         </script>
      </div>
   </div>
   <!-- GAllERY DETAILS -->
   <section >
      <div class="container">
         <div class="photo-gallery">
            <h1>R-Day 2022: Glimpses From Republic Day Parade Rehearsals In Delhi</h1>
            <!-- <h4>OdishaTv.in</h4> -->
            <p>A multi-layer security cover with facial recognition systems has been installed in Delhi ahead of the big day – 2022 Republic Day. Defence Ministry has said that due to COVID19 restrictions, the number of visitors will be substantially curtailed this year. Last year, 25000 visitors had taken part while this year the Ministry is looking forward to host 5000-8000 guests but nothing has been finalised as yet. Meanwhile, rehearsal for the R-Day Parade is underway in full swing. Contingents are leaving no stone unturned to make the celebrations grand and hassle-free. Here are the glimpses. </p>
         </div>
         <p class="last-update-date-gallery">Last updated: 19 January 2022, 08:31 AM IST</p>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_1">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="1" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642559347.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>1</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">President’s Bodyguard march during rehearsal for the upcoming Republic Day parade in New Delhi.</p>
         </div>
         <div class="otv-300-250-ad">
            <div id="div-gpt-ad-22346218184-0" style="width: 300px; height: 250px;">
               <script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346218184-0"); }); </script>
            </div>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_2">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="2" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560092.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>2</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Central Industrial Security Force (CISF) contingent march.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_3">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="3" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642559574.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>3</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Indian soldiers march during the rehearsal for the R-Day Parade at Vijay Chowk, on a cold winter morning in New Delhi.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_4">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="4" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560532.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>4</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">BSF's all-women biker team 'Seema Bhawani' practises daredevil stunts during the rehearsal for the Republic Day Parade at Vijay Chowk.</p>
         </div>
         <div class="otv-300-250-ad">
            <div id="div-gpt-ad-22458748305-0" style="width: 300px; height: 250px;">
               <script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22458748305-0"); }); </script>
            </div>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_5">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="5" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642559997.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>5</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Special Forces commandos march during the rehearsal for the big Republic Day parade.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_6">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="6" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560285.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>6</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Army Contingent march during parade rehearsal</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_7">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="7" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560379.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>7</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Members of the National Cadet Corps (NCC) march during rehearsal for the Republic Day parade.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_8">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="8" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560436.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>8</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Armored Combat Vehicles (AFV) during the rehearsal for the Republic Day Parade.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_9">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="9" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560691.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>9</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">March of BSF Camel contingent soldiers </p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_10">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="10" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560733.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>10</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">March of BSF Camel contingent soldiers </p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_11">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="11" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560879.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>11</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Special Forces commandos march during the R-Day parade rehearsal.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_12">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="12" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642560962.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>12</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">An employee of Assam Khadi and Village Industries Board dries the Ashoka Chakra portion of National flag, ahead of Republic Day celebrations in Guwahati.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022</h3> -->
            <div class="photo-gallery-details-photo" id="image_13">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="13" data-alt="Republic Day 2022" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642561034.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022" title="Republic Day 2022">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>13</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022'),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022" data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">Women tailors prepare the national flags at Assam Khadi & Village Industries Board office at Chandmari ahead of the Republic Day celebrations.</p>
         </div>
         <div class="photo-gallery-details" >
            <!-- <h3>Republic Day 2022 </h3> -->
            <div class="photo-gallery-details-photo" id="image_14">
               <img  data-url="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719" data-imagenum="14" data-alt="Republic Day 2022 " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642561118.jpg" class="img-responsive gallery-responsive" alt="Republic Day 2022 " title="Republic Day 2022 ">
               <!--============ GALLERY SHARE ===========-->               
               <ul class="photo-gallery-details-photo-credit-sub2 ">
                  <li><span>14</span>/14</li>
                  <li class="share-social-media-add">
                     <img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
                     <ul class="article-share-style-more photo-gallery-social">
                        <li>
                           <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1') +'&t='+encodeURIComponent('Republic Day 2022 '),'_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
                           </a>
                        </li>
                        <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1')+'&text='+encodeURIComponent('Republic Day 2022 ')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a>
                        </li>
                        <!--<li>
                           <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                           </li>-->
                        <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1 is the best website to Get latest news and updates" title="Republic Day 2022 " data-link="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719?pid=1" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                        <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                     </ul>
                  </li>
               </ul>
               <!--============ GALLERY SHARE ===========-->
            </div>
            <p class="gallery_copy_true">An Army jawan folds the National flag during rehearsal for upcoming Republic Day parade in Kolkata.</p>
         </div>
         <ul class="footer-button">
            <li><a href="https://odishatv.in/tag/republic-day">Republic Day</a></li>
            <li><a href="https://odishatv.in/tag/republic-day-2022">Republic Day 2022</a></li>
            <li><a href="https://odishatv.in/tag/r-day-parade">R-Day Parade</a></li>
            <li><a href="https://odishatv.in/tag/new-delhi">New Delhi</a></li>
         </ul>
         <!--  <a href=""><h2 class="next-heading">Next gallery</h2></a> -->
         <!-- //RELATED NEWS -->
      </div>
   </section>
   <section>
      <div class="container">
         <div class="related-photo-gallery">
            <h3>Related Photo Gallery</h3>
            <div class="related-photo-gallery-content">
               <div class="related-photo-gallery-image"><a href="https://odishatv.in/photo-gallery/miscellaneous/against-all-odds-children-attending-classes-in-hard-snow-day-has-a-lesson-in-itself-168205"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1641972732.jpg" alt="Snowfall in Kashmir" title="Snowfall in Kashmir"></a>
               </div>
               <h4><a href="https://odishatv.in/photo-gallery/miscellaneous/against-all-odds-children-attending-classes-in-hard-snow-day-has-a-lesson-in-itself-168205">Against All Odds: Children Attending Classes On A Hard Snow Day Has A Lesson In Itself</a> </h4>
            </div>
            <div class="related-photo-gallery-content">
               <div class="related-photo-gallery-image"><a href="https://odishatv.in/photo-gallery/covid-19/vaccination-of-teenagers-in-india-covaxin-its-victory-against-covid19-see-pictures-167594"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1641267366.JPG" alt="Covid Vaccination of children in India " title="Covid Vaccination of children in India "></a>
               </div>
               <h4><a href="https://odishatv.in/photo-gallery/covid-19/vaccination-of-teenagers-in-india-covaxin-its-victory-against-covid19-see-pictures-167594">Teenagers COVAXINated: It’s ‘Victory’ Against Covid-19</a> </h4>
            </div>
            <div class="related-photo-gallery-content">
               <div class="related-photo-gallery-image"><a href="https://odishatv.in/photo-gallery/festivals-events/bagha-nacha-tiger-dance-tigers-roar-in-bhubaneswar-166729"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1640156738.jpg" alt="Bagha Nacha or Tiger Dance in Odisha" title="Bagha Nacha or Tiger Dance in Odisha"></a>
               </div>
               <h4><a href="https://odishatv.in/photo-gallery/festivals-events/bagha-nacha-tiger-dance-tigers-roar-in-bhubaneswar-166729">Bagha Nacha: Tigers Roar In Bhubaneswar</a> </h4>
            </div>
            <div class="related-photo-gallery-content">
               <div class="related-photo-gallery-image"><a href="https://odishatv.in/photo-gallery/miscellaneous/lo-behold-skies-turn-crimson-gold-in-lord-jagannath-land-puri-165567"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1638770358.jpg" alt="Sky near Puri Jagannath temple after Jawad cyclone" title="Sky near Puri Jagannath temple after Jawad cyclone"></a>
               </div>
               <h4><a href="https://odishatv.in/photo-gallery/miscellaneous/lo-behold-skies-turn-crimson-gold-in-lord-jagannath-land-puri-165567">Lo & Behold! The Skies Turn Crimson Gold In Puri</a> </h4>
            </div>
         </div>
      </div>
   </section>
   <div class="otv-300-250-ad">
      <div id="div-gpt-ad-22346324230-0" style="width: 300px; height: 250px;">
         <script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346324230-0"); }); </script>
      </div>
   </div>
   <div id="taboola-below-article-thumbnails"></div>
   <script>
      window._taboola = window._taboola || [];
      _taboola.push({
        mode: 'alternating-thumbnails-a',
        container: 'taboola-below-article-thumbnails',
        placement: 'Below Article Thumbnails',
        target_type: 'mix'
      });
   </script><!-- GAllERY DETAILS -->
</div>
<?php include_once 'includes/footer.php'; ?>