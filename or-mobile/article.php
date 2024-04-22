<!DOCTYPE html>
<html>
   <head>
      <title>Mobile V2</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css_mobile.php'; ?>
         button.article-read-more {
         border: none;
         color: #fff;
         background-color: red;
         padding: 4px 10px 7px 10px;
         font-size: 20px;
         line-height: 40px;
         margin: 15px auto 15px auto;
         display: block;
         width: 220px;
         outline: 0;
         font-family: Faustina,serif;
         border-radius: 32px;
         margin-bottom: 30px;
         box-shadow: 0 14px 5px -9px rgb(0 0 0 / 27%);
         -webkit-box-shadow: 0 14px 5px -9px rgb(0 0 0 / 27%);
         -moz-box-shadow: 0 14px 5px -9px rgba(0,0,0,.27);
         }
         section.article-section {
         float: left;
         width: 100%;
         margin-bottom: 40px;
         }
         .article-head {
         float: left;
         width: 100%;
         margin: 8px 0px;
         }
         h6.story-category {
         font-weight: 600;
         margin: 0px 0px 6px 0px;
         padding: 0px;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
         }
         h1.story-page-main-head {
         margin: 0 0 15px 0;
         padding: 0;
         font-size: 23px;
         font-weight: 500;
         line-height: 30px;
         }
         p.story-page-main-para {
         color: #525252;
         font-weight: 400;
         font-size: 16px;
         line-height: 21px;
         padding: 0;
         margin: 0;
         margin-bottom: 15px;
         border-bottom: 1px #bbb dashed;
         padding-bottom: 15px;
         }
         .otv-article-main {
         margin: 0px;
         position: relative;
         border-radius: 3px;
         border: 1px dashed #80808047;
         padding: 5px;
         width: calc(100% - 1px);
         margin-bottom: 10px;
         min-height: 314px;
         background-color: #fffff3;
         }
         .otv-article-main p {
         margin-top: 10px;
         font-size: 15px;
         line-height: 20px;
         color: #737373;
         font-weight: 400;
         }
         .otv-article-featured {
         position: relative;
         width: 100%;
         }
         .otv-article-featured img {
         width: 100% !important;
         height: auto;
         margin: 0 auto;
         display: block;
         border-radius: 8px;
         }
         .otv-article-photo-credit {
         background-color: #21212170;
         padding: 8px 8px 8px 25px;
         color: #fff;
         font-size: 13px;
         width: fit-content;
         transition-duration: .5s;
         float: right;
         font-weight: 400;
         position: absolute;
         right: 0px;
         bottom: 0px;
         }
         span.otv-article-photo-credit img {
         height: 19px;
         position: absolute;
         left: 5px;
         top: 8px;
         width: 14px!important;
         display: table-row;
         }
         img.location-pin {
         position: absolute;
         left: -13px!important;
         top: 2px!important;
         width: 9px!important;
         height: 13px!important;
         }
         .news-summery {
         background-color: #f7f8f3;
         border: solid 1px #dddee4;
         padding: 15px 15px;
         margin: 0px 0px 20px 0px;
         }
         .news-summery ul {
         margin: 0px;
         padding: 0px;
         }
         .news-summery ul li {
         list-style-type: none;
         display: block;
         position: relative;
         padding-left: 25px;
         margin-bottom: 8px;
         color: #646464;
         font-weight: 400;
         font-size: 18px;
         line-height: 31px;
         }
         .news-summery ul li:before {
         content: "";
         display: block;
         width: 10px;
         height: 5px;
         background-color: #a00606;
         position: absolute;
         left: 0;
         top: 10px;
         }
         .news-summery h3 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #000;
         text-transform: capitalize;
         font-size: 22px;
         font-weight: 700;
         }
         .otv-article-content p {
         color: #222;
         font-weight: 400;
         font-size: 20px;
         line-height: 26px;
         font-family: 'Faustina', serif;
         margin-bottom: 20px;
         }
         .otv-article-content p:first-child::first-letter {
         font-size: 50px;
         color: #222;
         }
         .article-story-tag-sec {
         border-top: 1px solid #000;
         border-bottom: 1px solid #000;
         margin-bottom: 20px;
         position: relative;
         }
         ul.article-story-tag {
         margin: 0;
         padding: 15px 0px 15px 70px;
         }
         ul.article-story-tag li {
         list-style-type: none;
         display: inline-block;
         margin-right: 10px;
         line-height: 28px;
         }
         ul.article-story-tag li a {
         color: #d82027;
         text-transform: uppercase;
         font-size: 15px;
         }
         /*================= RELATED STORY==================*/
         h3.otv-heading-new-two-article {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: 10px 0px;
         }
         h3.otv-heading-new-two-article span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         text-align: center;
         margin: 0 auto;
         padding-left: 13px;
         }
         h3.otv-heading-new-two-article:after {
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
         li.otv-share-social-media-add a {
         cursor: pointer;
         display: block;
         }
         /*================= //RELATED STORY==================*/
         /*================= ARTICLE-SOCIAL-BAR==================*/
         .otv-article-socialmedia {
         position: relative;
         width: 100%;
         display: inline-block;
         margin-bottom: 15px;
         }
         ul.article-socialmedia-left {
         margin: 0;
         padding: 0;
         float: left;
         display: contents;
         }
         ul.article-socialmedia-left li {
         list-style-type: none;
         margin-right: 10px;
         display: inline-block;
         }
         ul.article-socialmedia-left li a img {
         width: 28px;
         height: 28px;
         }
         ul.article-socialmedia-right {
         margin: 0;
         padding: 0;
         float: right;
         }
         ul.article-socialmedia-right li {
         list-style-type: none;
         margin-right: 10px;
         display: inline-block;
         }
         ul.article-socialmedia-right li a img {
         width: 22px;
         height: 22px;
         }
         /*================= //ARTICLE-SOCIAL-BAR==================*/
         /*================= ARTICLE-SOCIAL-BAR-UNDER-STORY================*/
         ul.article-story-share {
         margin: 0;
         padding: 0;
         text-align: center;
         margin-bottom: 30px;
         }
         ul.article-story-share li {
         list-style-type: none;
         display: inline-block;
         margin-right: 12px;
         }
         ul.article-story-share li:first-child {
         font-size: 14px;
         text-transform: uppercase;
         font-weight: 600;
         margin-right: 9px;
         }
         ul.article-story-share li img {
         width: 19px;
         height: 19px;
         }
         ul.add-comment {
         margin: 0;
         padding: 15px 0px;
         border-top: 1px solid #000;
         text-align: center;
         }
         ul.add-comment li {
         list-style-type: none;
         display: inline-block;
         margin-right: 20px;
         }
         ul.add-comment li button {
         background-color: #135393;
         padding: 0px 40px;
         color: #fff;
         font-size: 13px;
         border-radius: 5px;
         text-transform: uppercase;
         font-weight: 500;
         line-height: 35px;
         border: 2px solid #135393;
         height: 35px;
         outline: none;
         }
         ul.add-comment li.active button {
         background-color: #fff;
         color: #135393;
         font-weight: 600;
         }
         /*================= //ARTICLE-SOCIAL-BAR-UNDER-STORY==================*/
         .author-info-custom {
         position: relative;
         display: inline-block;
         width: 100%;
         padding-left: 60px;
         height: 50px;
         margin-bottom: 10px;
         margin-top: 10px;
         }
         img.author-image-data {
         width: 50px;
         height: 50px;
         border-radius: 50%;
         object-fit: cover;
         position: absolute;
         left: 0;
         top: 0;
         }
         ul.article-publishtime {
         margin: 0px;
         padding: 0px 0px 10px 4px;
         display: inline-block;
         border-bottom: 1px dashed #bbb;
         }
         ul.article-publishtime li {
         list-style-type: none;
         display: block;
         text-transform: uppercase;
         font-size: 15px;
         float: left;
         position: relative;
         margin-bottom: 5px;
         }
         ul.article-author {
         margin: 2px 0px 5px 0px;
         padding: 0px;
         }
         ul.article-author li {
         list-style-type: none;
         display: inline-block;
         margin-right: 35px;
         position: relative;
         line-height: 25px;
         }
         ul.article-author li a {
         text-decoration: none;
         display: block;
         font-size: 15px;
         color: #000;
         text-transform: capitalize;
         }
         ul.article-author li:first-child:before {
         content: "";
         display: block;
         background-image: url(images/svg/editer-dropdown.svg);
         width: 20px;
         height: 20px;
         background-repeat: no-repeat;
         position: absolute;
         right: -25px;
         top: 0px;
         }
         ul.author-news {
         margin: 0px;
         padding: 5px;
         background-color: #fff;
         width: 100%;
         position: absolute;
         right: 0px;
         top: 25px;
         z-index: 1;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         border-radius: 8px;
         }
         ul.author-news li {
         list-style-type: none;
         display: block;
         position: relative;
         margin: 0px 0px 10px 20px;
         }
         ul.author-news li a {
         text-decoration: none;
         display: block;
         line-height: 23px;
         }
         ul.author-news li:before {
         display: none;
         }
         ul.author-news li:after {
         content: "";
         display: block;
         width: 0;
         height: 0;
         border-top: 5px solid transparent;
         border-left: 7px solid #d2051e;
         border-bottom: 5px solid transparent;
         position: absolute;
         left: -16px;
         top: 6px;
         }
         ul.article-author li ul.author-news {
         display: none;
         }
         ul.article-author li:hover ul.author-news {
         display: block;
         }
         a.author-news-all {
         display: block;
         text-align: center;
         border: solid 1px #e5e6e1;
         width: fit-content;
         padding: 0px 15px;
         margin: 5px auto;
         }
         /*=============== RELATED ARTICLE SLIDE ===============*/
         a.article-news-prev {
         float: left;
         color: red;
         font-size: 12px;
         font-weight: 600;
         }
         a.article-news-next {
         float: right;
         color: red;
         font-size: 12px;
         font-weight: 600;
         }
         .slide-arrow {
         position: relative;
         width: 100%;
         display: inline-block;
         }
         img.slide-img {
         width: 12px;
         height: 11px;
         line-height: 15px;
         margin-right: 5px;
         margin-left: 5px;
         }
         .otv-related-items-slide {
         margin: 10px;
         padding: 7px;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         display: inline-block;
         position: relative;
         min-height: 141px;
         padding-right: 160px;
         margin-bottom: 15px;
         }
         .otv-related-items-slide-img {
         width: 150px;
         height: 80px;
         object-fit: cover;
         position: absolute;
         right: 7.5px;
         border-radius: 8px;
         }
         .otv-related-items-slide-content h6 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
         }
         .otv-related-items-slide h5 {
         font-size: 18px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 27px;
         margin: 0 0 5px 0;
         padding: 0;
         font-weight: 400;
         }
         .otv-bd-time-share-slide {
         display: inline-block;
         width: calc(100% - 10px);
         }
         ul.otv-bd-cat-time-slide {
         margin: 0px;
         padding: 0px;
         float: left;
         width: fit-content;
         }
         ul.otv-bd-cat-time-slide li {
         font-size: 16px;
         list-style-type: none;
         float: left;
         }
         img.bd-play-video-slide {
         position: absolute;
         right: 10px;
         top: 10px;
         width: 25px;
         height: 25px;
         background-color: #f65028bd;
         border-radius: 50%;
         padding: 6px;
         }
         li.otv-share-social-media-add-slide a {
         cursor: pointer;
         display: block;
         }
         /*============== //RELATED ARTICLE SLIDE ==============*/
         h3.article-story-tag-heading {
         margin: 0;
         padding: 0;
         font-size: 24px;
         position: absolute;
         padding: 15px 0px;
         top: 0px;
         left: 0;
         }
         ul.article-story-tag {
         margin: 0;
         padding: 15px 0px 15px 70px;
         }
         ul.article-story-tag li {
         list-style-type: none;
         display: inline-block;
         margin-right: 10px;
         line-height: 28px;
         }
         ul.article-story-tag li a {
         color: #d82027;
         text-transform: uppercase;
         font-size: 15px;
         }
         /*================= RELATED STORY==================*/
         h3.otv-heading-new-two-article {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: 10px 0px;
         }
         h3.otv-heading-new-two-article span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         text-align: center;
         margin: 0 auto;
         padding-left: 13px;
         }
         h3.otv-heading-new-two-article:after {
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
         .otv-related-items {
         margin: 10px 0px;
         padding: 7px;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         display: inline-block;
         position: relative;
         width: 100%;
         min-height: 141px;
         padding-right: 160px;
         margin-bottom: 15px;
         }
         .otv-related-items-img {
         width: 150px;
         height: 80px;
         object-fit: cover;
         position: absolute;
         right: 7.5px;
         border-radius: 8px
         }
         .otv-related-items-content h6 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
         }
         .otv-related-items h5 {
         font-size: 18px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 27px;
         margin: 0 0 5px 0;
         padding: 0;
         font-weight: 400;
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
         li.otv-share-social-media-add a {
         cursor: pointer;
         display: block;
         }
         /*================= //RELATED STORY==================*/
         /*================= MOBILE NEWSLETERS==================*/
         .mobile-subscribe input {
         padding: 10px;
         width: 100%;
         border: 1px solid #ec5834;
         margin-bottom: 8px;
         font-size: 18px;
         text-align: center;
         }
         .mobile-subscribe {
         float: left;
         width: 100%;
         margin-bottom: 15px;
         }
         .mobile-subscribe button {
         background-color: #d6171e;
         border: none;
         border-radius: 5px;
         line-height: 34px;
         text-transform: capitalize;
         font-size: 18px;
         color: #fff;
         padding: 10px 8px;
         transition-duration: .5s;
         width: 100%;
         }
         /*================= //MOBILE NEWSLETERS==================*/
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <!--===================== ARTICLE =======================-->
      <section class="article-section">
         <div class="container">
            <ul class="bredcrumb-mobile-sec">
               <li><a href="#">Home</a></li>
               <li><a href="#">Country</a></li>
            </ul>
            <div class="article-head">
               <h6 class="story-category">WORLD NEWS</h6>
               <h1 class="story-page-main-head">Ragging in Sambalpur school: Class 10 boy stripped, assaulted; 8 students suspended   </h1>
               <p class="story-page-main-para">The school authorities on Thursday initiated disciplinary action against eight students involved in the shocking ragging incident that took place on April 17. </p>
            </div>
            <div class="otv-article-socialmedia">
               <ul class="article-socialmedia-left">
                  <li><a href="#"><img src="images/svg/article-print.svg" alt="" title=""></a></li>
                  <li><a href="#"><img src="images/svg/article-latter-size.svg" alt="" title="" ></a></li>
               </ul>
               <ul class="article-socialmedia-right">
                  <li><a href="#"><img src="images/svg/article-facebook.svg" alt="" title=""></a></li>
                  <li><a href="#"><img src="images/svg/article-twitter.svg" alt="" title="" ></a></li>
                  <li><a href="#"><img src="images/svg/article-linkedin.svg" alt="" title="" ></a></li>
                  <li><a href="#"><img src="images/svg/article-save.svg" alt="" title="" ></a></li>
                  <li><img src="images/svg/article-comment.svg" class="adcomment" alt="" title="" ></li>
               </ul>
            </div>
            <div class="otv-article-main">
               <div class="otv-article-featured">
                  <img src="images/large-article-img.jpg"  alt="" title="">
                  <span class="otv-article-photo-credit">
                  <img src="https://odishatv.in/commondir/images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">Photo: File
                  </span>
               </div>
               <p>Ragging in Sambalpur school: Class 10 boy stripped naked, assaulted; 8 students suspended Ragging in Sambalpur school: Class 10 boy stripped naked, assaulted; 8 students suspended Ragging in Sambalpur school</p>
            </div>
            <ul class="article-publishtime">
               <li class="article-publishtime-adress">Published: Thursday, 21 April 2022</li>
               <li class="article-publishtime-time">Updated: 21 April 2022, 09:35 AM IST</li>
            </ul>
            <div class="author-info-custom">
               <a href="#"> <img src="images/medium-large-img.jpg" class="author-image-data" alt="" title=""> </a>
               <ul class="article-author">
                  <li>
                     <a href="#">Repoted: Ramakanta Biswas</a>
                     <ul class="author-news">
                        <li><a href="#">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍ ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ।</a></li>
                        <li><a href="#">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍ ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍ ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ।</a></li>
                        <li><a href="#">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍ ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ।</a></li>
                        <li><a href="#">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍ ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ।</a></li>
                        <a href="#" class="author-news-all">VIEW ALL</a>
                     </ul>
                  </li>
                  <li>
                     <a href="#">Edited BY: Ramakanta Biswas</a>
                  </li>
               </ul>
            </div>
            <div class="news-summery">
               <h3>News summery</h3>
               <ul>
                  <li>Odisha Chief Minister Naveen Patnaik on Tuesday approved a stimulus package of Rs 289.42 crore for MSMEs in the state that have been facing stiff challenges amid the COVID-19 pandemic, official sources said.</li>
                  <li>The research team hopes to continue to study new data from Veterans Affairs (VA) and non-VA hospitals as it becomes available and to compare Covid-19 post-hospital outcomes with those for other serious conditions.</li>
                  <li>The entry ticket for the show has been kept at Rs.50 per person.</li>
               </ul>
            </div>
            <div class="otv-article-content">
               <p>A Class 10 boy student of a private residential school in Majhipali of Sambalpur district was allegedly stripped naked and thrashed by his classmates inside the school hostel.&nbsp;</p>
               <p>The school authorities on Thursday initiated disciplinary action against eight students involved in the shocking ragging incident that took place on April 17.&nbsp;</p>
               <p>Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
               <div id="text" style="display: none;">
                  <p>xxxxxxxxxx A Class 10 boy student of a private residential school in Majhipali of Sambalpur district was allegedly stripped naked and thrashed by his classmates inside the school hostel.A Class 10 boy student of a private residential school in Majhipali of Sambalpur district was allegedly stripped naked and thrashed by his classmates inside the school hostel.&nbsp</p>
                  <p>The school authorities on Thursday initiated disciplinary action against eight students involved in the shocking ragging incident that took place on April 17.A Class 10 boy student of a private residential school in Majhipali of Sambalpur district was allegedly stripped naked and thrashed by his classmates inside the school hostel.&nbsp</p>
                  <p>Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                </div>
               <button class="article-read-more" id="toggle-story-content">Read More</button>
            </div>
            <ul class="article-story-share">
                  <li>Share this article on</li>
                  <li><a href="#"><img src="images/svg/article-facebook.svg" alt="" title=""></a></li>
                  <li><a href="#"><img src="images/svg/article-twitter.svg" alt="" title="" ></a></li>
                  <li><a href="#"><img src="images/svg/article-linkedin.svg" alt="" title="" ></a></li>
                  <li><a href="#"><img src="images/svg/article-save.svg" alt="" title="" ></a></li>
                  <li><img src="images/svg/article-comment.svg" class="adcomment" alt="" title="" ></li>
               </ul>
            <div class="mobile-subscribe">
               <input type="text" name="" placeholder="Enter Your Email Adresss">
               <button>Subscribe to Our Newsletter</button>
            </div>
            <div class="atrticle-related-story-slide">
               <div class="slide-arrow">
                  <a class="article-news-prev" href="#articleCarousel" data-slide="prev"><img src="images/svg/previous-story_arrow.svg" class="slide-img" alt="Slide">PREVIOUS STORY</a>
                  <a class="article-news-next" href="#articleCarousel" data-slide="next">NEXT STORY<img src="images/svg/next-story_arrow.svg" class="slide-img" alt="Slide"></a>
               </div>
               <div id="articleCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="otv-related-items-slide">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-related-items-slide-img"></a>
                           <div class="otv-related-items-slide-content">
                              <a href="#">
                                 <h6>ENtertainment</h6>
                              </a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                           <div class="otv-bd-time-share-slide">
                              <ul class="otv-bd-cat-time-slide">
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
                     <div class="carousel-item">
                        <div class="otv-related-items-slide">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-related-items-slide-img"></a>
                           <div class="otv-related-items-slide-content">
                              <a href="#">
                                 <h6>ENtertainment</h6>
                              </a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                           <div class="otv-bd-time-share-slide">
                              <ul class="otv-bd-cat-time-slide">
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
                     <div class="carousel-item">
                        <div class="otv-related-items-slide">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-related-items-slide-img"></a>
                           <div class="otv-related-items-slide-content">
                              <a href="#">
                                 <h6>ENtertainment</h6>
                              </a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                           <div class="otv-bd-time-share-slide">
                              <ul class="otv-bd-cat-time-slide">
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
                  </div>
               </div>
            </div>
            <div class="related-story-inside">
               <h3 class="otv-heading-new-two-article"><span>Related story</span></h3>
               <div class="otv-related-items">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-related-items-img"></a>
                  <div class="otv-related-items-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
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
               <div class="otv-related-items">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-related-items-img"></a>
                  <div class="otv-related-items-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
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
               <div class="otv-related-items">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="otv-related-items-img"></a>
                  <div class="otv-related-items-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
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
         </div>
      </section>
      <!--===================== //ARTICLE =======================-->
      <?php include 'includes/footer.php'; ?>
      <div class="large-comment-box-overly" style="display: none;">
         <div class="large-comment-box">
            <button class="comment-sec-close"><img src="images/svg/close-search.svg"></button>
            <h2 class="all-comment">All Comments(58)</h2>
            <div class="comment-area">
               <textarea type="text" placeholder="Write a Comment......" ></textarea>
               <a href="" class="comment-sent"><span>0/300</span><img src="images/svg/replay-icon.svg"></a>
            </div>
            <div class="comment-sec-social">
               <h6>Please login for comment</h6>
               <h5>sign in with</h5>
               <ul>
                  <li><a href="#"><img src="images/svg/signin-with-facebook.svg" alt="" title=""></a></li>
                  <li><a href="#" class="social-google"><img src="images/svg/signin-with google.svg" alt="" title=""></a></li>
               </ul>
            </div>
            <div class="comment-list-start">
               <div class="comment-list">
                  <div class="comment-list-author">
                     <a href="#"> <img src="images/svg/comment-user-icon.svg" class="comment-author-data" alt="" title=""> </a>
                     <a href="">
                        <h6>Shishir Das</h6>
                     </a>
                     <ul class="comment-list-author-details">
                        <li>Sishir Das</li>
                        <li>3 hrs ago</li>
                        <li>Follow</li>
                     </ul>
                     <p class="comment-content">Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                  </div>
                  <ul class="comment-underline">
                     <li><a href="">Reply</a></li>
                     <li><a href="">Show responses</a></li>
                     <li><a href="" class="comment-like"><img src="images/svg/like.svg">45</a></li>
                     <li><a href="" class="comment-dislike"><img src="images/svg/dislike.svg">9</a></li>
                  </ul>
               </div>
               <div class="comment-list">
                  <div class="comment-list-author">
                     <a href="#"> <img src="images/svg/comment-user-icon.svg" class="comment-author-data" alt="" title=""> </a>
                     <a href="">
                        <h6>Shishir Das</h6>
                     </a>
                     <ul class="comment-list-author-details">
                        <li>Sishir Das</li>
                        <li>3 hrs ago</li>
                        <li>Follow</li>
                     </ul>
                     <p class="comment-content">Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                  </div>
                  <ul class="comment-underline">
                     <li><a href="">Reply</a></li>
                     <li><a href="">Show responses</a></li>
                     <li><a href="" class="comment-like"><img src="images/svg/like.svg">45</a></li>
                     <li><a href="" class="comment-dislike"><img src="images/svg/dislike.svg">9</a></li>
                  </ul>
               </div>
               <div class="comment-list">
                  <div class="comment-list-author">
                     <a href="#"> <img src="images/svg/comment-user-icon.svg" class="comment-author-data" alt="" title=""> </a>
                     <a href="">
                        <h6>Shishir Das</h6>
                     </a>
                     <ul class="comment-list-author-details">
                        <li>Sishir Das</li>
                        <li>3 hrs ago</li>
                        <li>Follow</li>
                     </ul>
                     <p class="comment-content">Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                  </div>
                  <ul class="comment-underline">
                     <li><a href="">Reply</a></li>
                     <li><a href="">Show responses</a></li>
                     <li><a href="" class="comment-like"><img src="images/svg/like.svg">45</a></li>
                     <li><a href="" class="comment-dislike"><img src="images/svg/dislike.svg">9</a></li>
                  </ul>
               </div>
               <div class="comment-list">
                  <div class="comment-list-author">
                     <a href="#"> <img src="images/svg/comment-user-icon.svg" class="comment-author-data" alt="" title=""> </a>
                     <a href="">
                        <h6>Shishir Das</h6>
                     </a>
                     <ul class="comment-list-author-details">
                        <li>Sishir Das</li>
                        <li>3 hrs ago</li>
                        <li>Follow</li>
                     </ul>
                     <p class="comment-content">Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                  </div>
                  <ul class="comment-underline">
                     <li><a href="">Reply</a></li>
                     <li><a href="">Show responses</a></li>
                     <li><a href="" class="comment-like"><img src="images/svg/like.svg">45</a></li>
                     <li><a href="" class="comment-dislike"><img src="images/svg/dislike.svg">9</a></li>
                  </ul>
               </div>
               <div class="comment-list">
                  <div class="comment-list-author">
                     <a href="#"> <img src="images/svg/comment-user-icon.svg" class="comment-author-data" alt="" title=""> </a>
                     <a href="">
                        <h6>Shishir Das</h6>
                     </a>
                     <ul class="comment-list-author-details">
                        <li>Sishir Das</li>
                        <li>3 hrs ago</li>
                        <li>Follow</li>
                     </ul>
                     <p class="comment-content">Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                  </div>
                  <ul class="comment-underline">
                     <li><a href="">Reply</a></li>
                     <li><a href="">Show responses</a></li>
                     <li><a href="" class="comment-like"><img src="images/svg/like.svg">45</a></li>
                     <li><a href="" class="comment-dislike"><img src="images/svg/dislike.svg">9</a></li>
                  </ul>
               </div>
               <div class="comment-list">
                  <div class="comment-list-author">
                     <a href="#"> <img src="images/svg/comment-user-icon.svg" class="comment-author-data" alt="" title=""> </a>
                     <a href="">
                        <h6>Shishir Das</h6>
                     </a>
                     <ul class="comment-list-author-details">
                        <li>Sishir Das</li>
                        <li>3 hrs ago</li>
                        <li>Follow</li>
                     </ul>
                     <p class="comment-content">Two among the students had reportedly physically assaulted the Class 10 boy while six others were present during the incident. They have been suspended from the hostel.</p>
                  </div>
                  <ul class="comment-underline">
                     <li><a href="">Reply</a></li>
                     <li><a href="">Show responses</a></li>
                     <li><a href="" class="comment-like"><img src="images/svg/like.svg">45</a></li>
                     <li><a href="" class="comment-dislike"><img src="images/svg/dislike.svg">9</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <style>
         button.comment-sec-close {
         position: absolute;
         left: -40px;
         background: none;
         border: none;
         outline: none;
         background-color: #ff0000;
         padding: 0px;
         margin: 0px;
         width: 40px;
         height: 40px;
         line-height: 16px;
         }
         button.comment-sec-close img {
         z-index: 9;
         width: 16px;
         height: 16px;
         }
         .large-comment-box-overly {
         width: 100%;
         height: 100%;
         position: fixed;
         background-color: #000000a8;
         top: 0;
         right: 0;
         z-index: 9;
         }
         .large-comment-box{
         position: fixed;
         top: 0;
         right: 0;
         z-index: 9;
         width: 280px;
         height: 100%;
         background-color: #f7f7f7;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         }
         h2.all-comment {
         padding: 10px 10px;
         font-size: 17px;
         background-color: #f2f2f2;
         margin: 0;
         border-bottom: 1px solid #dfdfdf;
         font-weight: 400;
         line-height: 18px;
         }
         .comment-area textarea {
         width: 100%;
         border: none;
         height: 110px;
         padding: 10px;
         border-bottom: 1px solid #dfdfdf;
         outline: none;
         }
         .comment-area {
         position: relative;
         height: 110px;
         }
         .comment-area a {
         position: absolute;
         right: 9px;
         bottom: 11px;
         }
         .comment-area a img {
         width: 23px;
         height: 22px
         }
         .comment-area a span {
         font-size: 13px;
         margin-right: 20px;
         font-weight: 500;
         color: #979797;
         }
         .comment-sec-social {
         padding: 7.5px 7.5px 0px 7.5px;
         margin: 5px 15px;
         text-align: center;
         background-color: #fff;
         display: inline-block;
         width: calc(100% - 30px);
         }
         .comment-sec-social h6 {
         margin: 0;
         padding: 0;
         font-size: 14px;
         color: red;
         margin-bottom: 15px;
         }
         .comment-sec-social h5 {
         margin: 0;
         padding: 0;
         font-size: 15px;
         color: #737373;
         margin-bottom: 10px;
         }
         .comment-sec-social ul {
         margin: 0;
         padding: 0;
         margin-bottom: 10px;
         }
         .comment-sec-social ul li {
         list-style-type: none;
         display: inline-block;
         margin-right: 10px;
         }
         .comment-sec-social ul li a img {
         width: 90px;
         height: 29px;
         margin-right: 0px;
         }
         .comment-list-author {
         position: relative;
         display: inline-block;
         width: 100%;
         }
         img.comment-author-data {
         background-color: #f9faff;
         width: 30px;
         height: 30px;
         object-fit: cover;
         border-radius: 50%;
         position: absolute;
         left: 0;
         top: 5px;
         }
         .comment-list-author h6 {
         margin: 6px 0px 0px 0px;
         padding: 0px;
         display: inline-block;
         width: 100%;
         padding-left: 40px;
         line-height: 17px;
         color: #000;
         font-size: 14px;
         }
         ul.comment-list-author-details {
         margin: 0px;
         padding: 0px;
         display: inline-block;
         width: 100%;
         padding-left: 40px;
         }
         ul.comment-list-author-details li {
         list-style-type: none;
         display: inline-block;
         margin-right: 16px;
         position: relative;
         font-size: 10px;
         font-family: 'Libre Franklin', sans-serif;
         font-weight: 300;
         text-transform: uppercase;
         color: #858585;
         }
         ul.comment-list-author-details li:before {
         content: "";
         display: block;
         width: 7px;
         height: 1px;
         background-color: #bbbbbc;
         position: absolute;
         right: -14px;
         top: 6px;
         }
         ul.comment-list-author-details li:last-child:before {
         display: none;
         }
         .comment-list {
         padding: 10px;
         border-top: 1px solid #dfdfdf;
         border-bottom: 1px solid #dfdfdf;
         }
         p.comment-content {
         padding-left: 50px;
         margin: 0;
         padding: 0;
         padding-left: 40px;
         font-size: 13px;
         line-height: 22px;
         color: #000;
         font-weight: 400;
         }
         ul.comment-underline {
         margin: 0px;
         padding: 0px;
         display: inline-block;
         width: 100%;
         padding-left: 40px;
         }
         ul.comment-underline li {
         list-style-type: none;
         display: inline-block;
         margin-right: 8px;
         position: relative;
         font-size: 10px;
         font-family: 'Libre Franklin', sans-serif;
         font-weight: 300;
         text-transform: uppercase;
         color: #858585;
         }
         a.comment-like {
         color: #006e00;
         font-size: 12px;
         }
         a.comment-like img {
         width: 13px;
         height: 17px;
         margin-right: 5px;
         margin-top: -3px;
         }
         a.comment-dislike {
         color: #ff2c25;
         font-size: 12px;
         }
         a.comment-dislike img {
         width: 13px;
         height: 17px;
         margin-right: 5px;
         margin-top: -3px;
         }
         .comment-list-start {
         height: 600px;
         overflow: auto;
         background-color: #fff;
         }
         /* width */
         .comment-list-start::-webkit-scrollbar {
         width: 5px;
         }
         /* Track */
         .comment-list-start::-webkit-scrollbar-track {
         background: #f7f7f7; 
         }
         /* Handle */
         .comment-list-start::-webkit-scrollbar-thumb {
         background: #d3d3d3; 
         }
         /* Handle on hover */
         .comment-list-start::-webkit-scrollbar-thumb:hover {
         background: #f7f7f7; 
         }
      </style>
      <script type="text/javascript">
          <?php include 'includes/common_js_mobile.php'; ?>
         jQuery(document).ready(function(){
            $("#toggle-story-content").click(function() {
               $(this).hide();
               $("#text").animate({height: "toggle"}, 800);
            });
         });
         jQuery(document).ready(function(){
            $(".adcomment").click(function(){
               $(".large-comment-box-overly").show();
            });
            $(".readcomment").click(function(){
               $(".large-comment-box-overly").show();
            });
            $(".comment-sec-close").click(function(){
               $(".large-comment-box-overly").hide();
            });
         });
      </script>
   </body>
</html>