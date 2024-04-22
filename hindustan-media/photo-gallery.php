<!DOCTYPE html>
<html>
   <head>
      <title>NEW DESKTOP HOME PAGE</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "css/common-desktop.css"; ?>
         /* PHOTO GALLERY */
         section.content-section {
         margin-top: 80px;
         margin-bottom: 30px;
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
         line-height: 50px;
         padding: 6px 0px;
         }
         ul.article-share-style-more li a:hover i{
         color: #7b0505 !important;
         }
         ul.article-share-style-more li a i.fab.fa-facebook-f {
         color: #3c51a5;
         }
         ul.article-share-style-more li a i.fab.fa-twitter {
         color: #5db2f7;
         }
         ul.article-share-style-more li a i.fab.fa-instagram {
         color: #d94b8e;
         }
         ul.article-share-style-more li a i.fab.fa-pinterest-p {
         color: #d93a34;
         }
         ul.article-share-style-more li a i.fab.fa-linkedin-in {
         color: #036593;
         }
         ul.article-share-style-more li a i.fab.fa-telegram-plane {
         color: #299ecf;
         }
         ul.article-share-style li a i.fas.fa-print {
         color: #21428f;
         }
         ul.article-share-style li a i.fas.fa-comment-dots {
         color: #f178a3;
         }
         ul.article-share-style li a i.fas.fa-bookmark {
         color: #f4b01b;
         }
         ul.article-share-style li a i.fas.fa-share-alt {
         color: #818181;
         }
         .dark-mode {
         background-color: black;
         color: #000;
         }
         div.black-bg-page {
         float: left;
         width: 100%;
         margin-top: -20px;
         padding-top: 20px;
         }
         /* photo-gallery-details-social */
         ul.photo-gallery-details-social {
         margin: 6px;
         position: relative;
         padding: 0px;
         }
         ul.photo-gallery-details-social li  {
         color: #fbfbfb;
         list-style: inline;
         display: inline;
         margin-right: 2px; 
         }
         ul.photo-gallery-details-social li a{
         color: #000;
         }
         ul.photo-gallery-details-social li a:hover{
         color: #d79450;
         }
         ul.photo-gallery-details-social li a i {
         width: 44px;
         height: 44px;
         text-align: center;
         font-size: 18px;
         border-radius: 50%;
         border: 2px solid #676363;
         padding: 11px;
         }
         .photo-gallery h1 {
         margin: 0px 0px 20px 0px;
         padding: 0px;
         text-transform: capitalize;
         font-size: 30px;
         font-weight: 700;
         line-height: 44px;
         color: #000;
         }
         .photo-gallery h2 {
         margin: 0px 0px 20px 0px;
         padding: 0px;
         text-transform: capitalize;
         font-size: 30px;
         font-weight: 700;
         line-height: 44px;
         color: #000;
         }
         .photo-gallery h4 {
         color: #ffffff;
         }
         p.last-update-date-gallery {
         color: #c5bfbf;
         font-size: 12px;
         line-height: 20px;
         font-weight: 200;
         text-transform: uppercase;
         }
         .photo-gallery-details {
         margin: 0px 0px 38px 0px;
         padding-bottom: 15px;
         display: inline-block;
         border-bottom: solid 1px #715f65;
         width: 100%;
         position: relative;
         }
         .photo-gallery-details-photo {
         position: relative;
         }
         hr.photo-gallery-details-photo {
         border-top: 0.5px solid #8080804f;
         }
         .photo-gallery-details p {
         color: #000;
         margin: 20px 0px;
         font-size: 20px;
         line-height: 26px;
         font-weight: 400;
         }
         span.photo-gallery-details-photo-credit-sub1 {
         position: absolute;
         bottom: 0px;
         left: 0;
         line-height: 18px;
         background-color: rgb(0 0 0 / 0.58);
         width: fit-content;
         padding: 10px;
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
         ul.article-share-style-more.photo-gallery-social {
         bottom: -6px;
         }
         .photo-gallery-details img {
         width: 100%;
         height: auto;
         }
         .photo-gallery-details h3 {
         font-size: 36px;
         margin-top: 0px;
         color: #000;
         margin-bottom: 11px;
         }
         ul.footer-button {
         margin-left: 0px;
         padding: 0px;
         margin-bottom: 52px;
         margin-top: 20px;
         }
         ul.footer-button li {
         display: inline-block;
         margin: 4px 2px 0px 0px;
         color: #ffffff;
         border: 1px solid;
         padding: 7px 9px;
         border-radius: 9px;
         }
         ul.footer-button li a {
         color: #fbfbfb;
         }
         ul.footer-button li a:hover {
         color: #d79450;
         }
         h2.next-heading {
         color: #ffffff;
         font-weight: 500;
         font-size: 28px;
         border: 1px solid #000;
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
         border-top: 11px solid #000;
         bottom: 0px;
         top: 43px;
         position: absolute;
         }
         ul.photo-gallery2-heading {
         margin: 0px 0px 0px 15px;
         padding: 0px;
         text-align: right;
         display: inline-block;
         width: 100%;
         }
         ul.photo-gallery2-heading li {
         float: left;
         margin-top: 7px;
         list-style-type: none;
         display: inline-block;
         }
         ul.photo-gallery2-heading li h3.heading-style-one {
         padding: 0px 0px 0px 45px;
         position: relative;
         text-transform: uppercase;
         font-weight: 700;
         font-size: 18px;
         }
         ul.photo-gallery2-heading li h3.heading-style-one:before{
         content: "";
         display: block;
         background-color: #7b0505;
         position: absolute;
         left: 0;
         top: 3px;
         width: 30px;
         height: 13px;
         }
         /* //PHOTO GALLERY */
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <section class="content-section">
            <div class="container">
               <div class="otv-970-250-ad" style="margin-bottom: 20px;"> &nbsp; </div>
               <div class="row">
                  <?php include 'includes/left_sticky_menu.php'; ?>
                  <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 sticky">
                     <div class="photo-gallery">
                        <h1>Farmers’ Nationwide Rail Roko Disrupts Train Services</h1>
                        <p>Train services across the country were severely disrupted on Monday owing to a nationwide 'Rail Roko' protest by the Samyukta Kisan Morcha (SKM). Several trains had to be cancelled while many others were partially cancelled due to the protest. The Kisan Morcha backed by several farmer organisations observed a six-hour-long rail roko from 10AM to 4PM demanding removal of Union MoS for Home Affairs Ajay Mishra from his post over the Lakhimpur Kheri incident, in which his son Ashish is an accused.</p>
                     </div>
                     <p class="last-update-date-gallery">Last updated: 19 October 2021, 12:33 PM IST</p>
                     <div class="photo-gallery-details">
                        <!-- <h3>Rail Roko by Farmers</h3> -->
                        <div class="photo-gallery-details-photo" id="image_1">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="1" data-alt="Rail Roko by Farmers" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634625574.jpg" class="img-responsive gallery-responsive" alt="Rail Roko by Farmers" title="Rail Roko by Farmers">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>1</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Rail Roko by Farmers'),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Rail Roko by Farmers')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Rail Roko by Farmers" data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Farmers block railway tracks at Devi Dass Pura in Amritsar district as part of the Samyukt Kisan Morcha's rail roko protest demanding the dismissal and arrest of Union Minister Ajay Mishra in connection with Lakhimpur Kheri violence.</p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>Rail Roko by Farmers </h3> -->
                        <div class="photo-gallery-details-photo" id="image_2">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="2" data-alt="Rail Roko by Farmers " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634625644.jpg" class="img-responsive gallery-responsive" alt="Rail Roko by Farmers " title="Rail Roko by Farmers ">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>2</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Rail Roko by Farmers '),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Rail Roko by Farmers ')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Rail Roko by Farmers " data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Members of various farmer organizations block a railway track during a protest against the central government, at Krishnanagar in Nadia.</p>
                     </div>
                     <div class="otv-728-90-ad">
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>Rail Roko by Farmers </h3> -->
                        <div class="photo-gallery-details-photo" id="image_3">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="3" data-alt="Rail Roko by Farmers " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634625713.jpg" class="img-responsive gallery-responsive" alt="Rail Roko by Farmers " title="Rail Roko by Farmers ">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>3</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Rail Roko by Farmers '),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Rail Roko by Farmers ')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Rail Roko by Farmers " data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Police personnel attempt to stop members of various farmer unions during a protest at Kachiguda Railway Station in Hyderabad.</p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>Rail Roko protest</h3> -->
                        <div class="photo-gallery-details-photo" id="image_4">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="4" data-alt="Rail Roko protest" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634625849.jpg" class="img-responsive gallery-responsive" alt="Rail Roko protest" title="Rail Roko protest">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>4</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Rail Roko protest'),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Rail Roko protest')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Rail Roko protest" data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Hundreds of farmers block railway tracks as part of Rail Roko protest in Bahadurgarh. </p>
                     </div>
                     <div class="otv-728-90-ad">
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>Rail Roko protest by farmers</h3> -->
                        <div class="photo-gallery-details-photo" id="image_5">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="5" data-alt="Rail Roko protest by farmers" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634626419.jpg" class="img-responsive gallery-responsive" alt="Rail Roko protest by farmers" title="Rail Roko protest by farmers">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>5</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Rail Roko protest by farmers'),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Rail Roko protest by farmers')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Rail Roko protest by farmers" data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Farmers ride tractors as they move towards a protest site during an agitation against Noida authority in Noida.</p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>Rail Roko by Farmers </h3> -->
                        <div class="photo-gallery-details-photo" id="image_6">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="6" data-alt="Rail Roko by Farmers " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634626566.jpg" class="img-responsive gallery-responsive" alt="Rail Roko by Farmers " title="Rail Roko by Farmers ">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>6</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Rail Roko by Farmers '),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Rail Roko by Farmers ')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Rail Roko by Farmers " data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Bharatiya Kisan Union farmers during their protest march towards the Noida Authority, in Greater Noida.</p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>rail roko</h3> -->
                        <div class="photo-gallery-details-photo" id="image_7">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="7" data-alt="rail roko" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/rail_roko_1634626639.jpg" class="img-responsive gallery-responsive" alt="rail roko" title="rail roko">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>7</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('rail roko'),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('rail roko')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="rail roko" data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Farmers block railway tracks at Modinagar in Ghaziabad. </p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>farmers protest</h3> -->
                        <div class="photo-gallery-details-photo" id="image_8">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="8" data-alt="farmers protest" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634626730.jpg" class="img-responsive gallery-responsive" alt="farmers protest" title="farmers protest">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>8</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('farmers protest'),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('farmers protest')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="farmers protest" data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Tractor riding of farmers as part of protest leads to traffic jam in Noida</p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>Farmers block railway tracks </h3> -->
                        <div class="photo-gallery-details-photo" id="image_9">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="9" data-alt="Farmers block railway tracks " src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634626889.jpg" class="img-responsive gallery-responsive" alt="Farmers block railway tracks " title="Farmers block railway tracks ">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>9</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('Farmers block railway tracks '),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('Farmers block railway tracks ')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                    <!--<li>
                                       <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
                                       <i class="fab fa-instagram"></i>
                                       </a>
                                       </li>-->
                                    <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060 is the best website to Get latest news and updates" title="Farmers block railway tracks " data-link="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
                                    <!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Farmers block railway tracks in Bahadurgarh</p>
                     </div>
                     <div class="photo-gallery-details">
                        <!-- <h3>rail roko</h3> -->
                        <div class="photo-gallery-details-photo" id="image_10">
                           <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="10" data-alt="rail roko" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/rail_roko_1634626954.jpg" class="img-responsive gallery-responsive" alt="rail roko" title="rail roko">
                           <!--============ GALLERY SHARE ===========-->
                           <ul class="photo-gallery-details-photo-credit-sub2 ">
                              <li><span>10</span>/10</li>
                              <li class="share-social-media-add">
                                 <i class="fas fa-share-alt"></i>
                                 <ul class="article-share-style-more photo-gallery-social">
                                    <li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060') +'&amp;t='+encodeURIComponent('rail roko'),'_blank'); return false;"><i class="fab fa-facebook-f"></i>
                                       </a> 
                                    </li>
                                    <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060')+'&amp;text='+encodeURIComponent('rail roko')+'&amp;hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a> </li>
                                 </ul>
                              </li>
                           </ul>
                           <!--============ GALLERY SHARE ===========-->
                        </div>
                        <p class="gallery_copy_true">Passengers wait at a platform after farmers stop movement of trains during their Rail Roko protest in Jalandhar.</p>
                     </div>
                     <ul class="footer-button">
                        <li><a href="https://odishatv.in/tag/rail-roko">Rail Roko</a></li>
                        <li><a href="https://odishatv.in/tag/samyukta-kisan-morcha">Samyukta Kisan Morcha</a></li>
                        <li><a href="https://odishatv.in/tag/farmer-protest">Farmer Protest</a></li>
                        <li><a href="https://odishatv.in/tag/lakhimpur-kheri-incident">Lakhimpur Kheri Incident</a></li>
                     </ul>
                     <!--  <a href=""><h2 class="next-heading">Next gallery</h2></a> -->
                     <!-- //RELATED NEWS -->
                  </div>
               </div>
            </div>
         </section>
      <?php include 'includes/footer.php'; ?>
      <script>
        <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>