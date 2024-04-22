<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "includes/common_css.php"; ?>
         section.listing-section {
         float: left;
         width: 100%;
         margin: 20px 0px;
         }
         h2.bd-headline-one {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: 10px 0px;
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
         padding-right: 226px;
         margin-bottom: 15px;
         }
         .listing-news-item-img {
         width: 224px;
         height: 126px;
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
         width: fit-content;
         margin: 5px 0px;
         margin: 0 auto;
         }
         .page-item.disabled .page-link{
         color: #e6694d;
         }
         .page-link {
          color: #000000;  
         }

         /*Page navigation */
      </style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <section class="listing-section">
         <div class="container">
            <div class="row">
               <!--*************** SIDEBAR RIGHT ***************-->
               <?php include 'includes/sidebar_left.php';?>
               <!--************** //SIDEBAR RIGHT **************-->
               <div class="col-lg-6">
                  <div class="common-listing">
                     <h2 class="bd-headline-one"><span>Entertainment</span></h2>
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
               <!--*************** SIDEBAR RIGHT ***************-->
               <?php include 'includes/sidebar_right.php';?>
               <!--************** //SIDEBAR RIGHT **************-->
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js.php'; ?>
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