<!DOCTYPE html>
<html>
   <head>
      <title>Mobile V2</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css_mobile.php'; ?>
         section.listing-section {
         float: left;
         width: 100%;
         margin: 0px;
         }
         h2.bd-headline-one {
         position: relative;
         font-size: 25px;
         font-weight: 500;
         margin: 5px 0px;
         line-height: 23px;
         }
         h2.bd-headline-one span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         }
         h2.bd-headline-one:after {
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
         .listing-news-item {
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
         padding-right: 88px;
         }
         .listing-news-item-img {
         width: 96px;
         height: 65px;
         object-fit: cover;
         position: absolute;
         right: 7.5px;
         border-radius: 8px;
         }
         .listing-news-item-content h6 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
         }
         .listing-news-item-content h5 {
         font-size: 18px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 27px;
         margin: 0 0 5px 0;
         padding: 0;
         font-weight: 400;
         }
         .listing-news-share {
         display: inline-block;
         width: calc(100% - 10px);
         }
         ul.listing-news-time {
         margin: 0px;
         padding: 0px;
         float: left;
         width: fit-content;
         }
         ul.listing-news-time li {
         font-size: 16px;
         list-style-type: none;
         float: left;
         }
         img.listing-play {
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
         /*Page navigation */
         nav.table-responsive.mb-2 {
         width: 340px;
         margin: 5px 0px;
         }
         .page-item.disabled .page-link{
         color: #e6694d;
         }
         .page-link {
          color: #000000;  
         }

         /*Page navigation */
         .error-section {
    text-align: center;
    margin: 40px 0px;
    position: relative;
}
.error-section img {
    width: 100%;
    height: 258px;
}
.error-section h1 {
    padding: 0;
    font-size: 32px;
    margin: 9px 0px;
    font-weight: 500;
    line-height: 37px;
}
.error-section p {
    font-size: 15px;
    color: #858282;
    line-height: 21px;
    margin: 0;
    padding: 0;
    margin-bottom: 50px;
    position: relative;
}

.error-section a {
    background-color: #EF5527;
    padding: 7px 20px;
    margin: 0px;
    border-radius: 4px;
    color: #fff;
    font-size: 14px;
}
ul.search-box {
    margin: 0;
    padding: 0;
    text-align: center;
    margin-bottom: 50px;
}
ul.search-box li input {
    width: 100%;
    border: 1px solid #bbb;
    padding: 6px;
}
ul.search-box li {
    display: inline-block;
}
ul.search-box li:first-child {
    width: 60%;
}
button.search-btn-404 {
    border: none;
    padding: 7px 33px;
    color: #fff;
    background-color: #959790;
    margin: 0;
}
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <!--===================== ARTICLE =======================-->
      <div class="container">
         <ul class="bredcrumb-mobile-sec">
            <li><a href="#">Home</a></li>
            <li><a href="#">Country</a></li>
         </ul>
      </div>
      <section class="listing-section">
         <div class="container">
            <div class="common-listing">
               <div class="error-section">
               <img src="images/svg/404-page.svg" alt="" title="">
               <h1>OOPS SORRY WE CAN'T FIND THIS PAGE!</h1>
               <p>We are sorry,but we can't find the page you were looking for,it's probably something we have done wrong but now we know about it and we will try to fix it.</p>
               <a href="">Home page</a>
            </div>
            <ul class="search-box">
               <li><input type="" name=""></li>
               <li><button class="search-btn-404">search</button></li>
            </ul>
               <div class="listing-news-item">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="listing-news-item-img"></a>
                  <div class="listing-news-item-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                     </a>
                  </div>
                  <img src="images/svg/play-white.svg" class="listing-play" width="25" height="25" alt="" title="">
                  <div class="listing-news-share">
                     <ul class="listing-news-time">
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
               <div class="listing-news-item news-no-img">
                  <div class="listing-news-item-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                     </a>
                  </div>
                  <img src="images/svg/play-white.svg" class="listing-play" width="25" height="25" alt="" title="">
                  <div class="listing-news-share">
                     <ul class="listing-news-time">
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
               <div class="listing-news-item">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="listing-news-item-img"></a>
                  <div class="listing-news-item-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                     </a>
                  </div>
                  <img src="images/svg/play-white.svg" class="listing-play" width="25" height="25" alt="" title="">
                  <div class="listing-news-share">
                     <ul class="listing-news-time">
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
               <div class="listing-news-item">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="listing-news-item-img"></a>
                  <div class="listing-news-item-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                     </a>
                  </div>
                  <img src="images/svg/play-white.svg" class="listing-play" width="25" height="25" alt="" title="">
                  <div class="listing-news-share">
                     <ul class="listing-news-time">
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
               <div class="listing-news-item">
                  <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="listing-news-item-img"></a>
                  <div class="listing-news-item-content">
                     <a href="#">
                        <h6>ENtertainment</h6>
                     </a>
                     <a href="#">
                        <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା ଏଥିରେ ଦିଆଯାଇଥିବା</h5>
                     </a>
                  </div>
                  <img src="images/svg/play-white.svg" class="listing-play" width="25" height="25" alt="" title="">
                  <div class="listing-news-share">
                     <ul class="listing-news-time">
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
            <nav aria-label="Page navigation example" class="table-responsive mb-2">
               <ul class="pagination mb-0">
                  <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link" href="#">7</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
               </ul>
            </nav>
         </div>
      </section>
      <!--===================== //ARTICLE =======================-->
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js_mobile.php'; ?>
      </script>
   </body>
</html>