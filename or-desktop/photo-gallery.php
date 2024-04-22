<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "includes/common_css.php"; ?>
         section.photos-section {
         float: left;
         width: 100%;
         margin: 20px 0px;
         }
         h1.photos-heading {
         margin: 0;
         padding: 0;
         font-size: 29px;
         font-weight: 500;
         line-height: 33px;
         margin-bottom: 10px;
         }
         h2.photos-featured {
         margin: 0;
         padding: 0;
         font-size: 20px;
         margin-bottom: 10px;
         color: #8a8484;
         font-weight: 600;
         }
         .featured-image-gallery img {
         width: 100%;
         height: 523px;
         border-radius: 10px;
         }
         .featured-image-gallery {
         position: relative;
         margin-bottom: 30px;
         }
         .featured-image-content {
         position: absolute;
         bottom: 15px;
         left: 15px;
         position: absolute;
         left: 0px;
         bottom: 0px;
         width: calc(100% - 1px);
         background: linear-gradient(#0000,#000000d1,rgb(0 0 0));
         padding: 15px;
         padding-top: 17px;
         border-radius: 8px;
         }
         .featured-image-content h6 {
         margin: 0;
         padding: 5px;
         margin-bottom: 10px;
         color: #fff;
         background-color: #5f56e5;
         width: fit-content;
         border-radius: 5px;
         font-size: 14px;
         }
         .featured-image-content img {
         width: 67px;
         height: 69px;
         float: left;
         padding: 10px;
         display: inline-block;
         float: left;
         margin: 0;
         }
         .featured-image-content h2 {
         padding-left: 76px;
         margin: 0;
         font-size: 27px;
         line-height: 35px;
         color: #fff;
         }
         .featured-image-content h2 span {
         margin-left: 15px;
         color: #cccacae3;
         border-left: 4px solid #fff;
         padding-left: 15px;
         font-weight: 500;
         }
         .image-gallery-sub {
         border: 1px solid #f1f1f1;
         border-radius: 8px;
         position: relative;
         margin-bottom: 10px;
         border-bottom: 4px solid #cdcdcd;
         }
         .image-gallery-sub img {
         width: 100%;
         height: 168px;
         border-radius: 8px 8px 0px 0px;
         overflow: hidden;
         }
         .img-gal-su-img span.image-gallery-count {
         position: absolute;
         bottom: 0;
         left: 0;
         }
         span.image-gallery-count img {
         width: 20px;
         height: 20px;
         margin-right: 6px;
         }
         span.image-gallery-count {
         color: #fff;
         font-size: 14px;
         }
         .img-gal-su-img span.image-gallery-count {
         position: absolute;
         bottom: 0;
         left: 0;
         background: linear-gradient(#0000,#00000070,rgb(0 0 0 / 90%));
         padding: 9px;
         padding-top: 4px;
         border-radius: 0px;
         width: 100%;
         }
         .img-gal-su-img {
         position: relative;
         }
         .img-gal-su-cont {
         padding: 10px;
         display: inline-block;
         }
         .img-gal-su-cont h5 {
         margin: 0px 0px 8px 0px;
         padding: 0;
         font-size: 17px;
         color: #000;
         line-height: 23px;
         font-weight: 600;
         }
         .image-gallery-sub1 {
         position: relative;
         padding-left: 223px;
         border: 1px solid #f1f1f1;
         border-radius: 8px;
         position: relative;
         margin-bottom: 10px;
         border-bottom: 4px solid #cdcdcd;
         /* display: inline-block; */
         height: 131px;
         }
         .image-gallery-sub1 img {
         position: absolute;
         top: 0;
         left: 0;
         display: inline-block;
         width: 224px;
         height: 126px;
         }
         .image-gallery-sub1 h5 {
         margin: 5px 5px 10px 5px;
         padding: 0;
         color: #000;
         font-size: 17px;
         color: #000;
         line-height: 22px;
         font-weight: 600;
         height: 88px;
         overflow: hidden;
         }
         .image-gallery-sub1 h6 {
         margin: 5px 5px 5px 5px;
         padding: 0;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
         }
         .featured-image-gallery1 img {
         width: 100%;
         height: 257px;
         border-radius: 10px;
         }
         .featured-image-gallery1 {
         position: relative;
         margin-bottom: 30px;
         }
         .featured-image-content1 {
         position: absolute;
         left: 0px;
         bottom: 0px;
         width: calc(100% - 1px);
         background: linear-gradient(#0000,#000000d1,rgb(0 0 0));
         padding: 8px;
         padding-top: 18px;
         border-radius: 8px;
         }
         .featured-image-content1 h6 {
         margin: 0;
         padding: 5px;
         margin-bottom: 10px;
         color: #fff;
         background-color: #5f56e5;
         width: fit-content;
         border-radius: 5px;
         font-size: 14px;
         }
         .featured-image-content1 img {
         width: 58px;
         height: 58px;
         float: left;
         padding: 10px;
         display: inline-block;
         float: left;
         margin: 0;
         }
         .featured-image-content1 h3 {
         padding-left: 64px;
         margin: 0;
         font-size: 21px;
         line-height: 28px;
         color: #fff;
         }
         .featured-image-content1 h3 span {
         margin-left: 15px;
         color: #cccacae3;
         border-left: 4px solid #fff;
         padding-left: 15px;
         font-weight: 500;
         }
         .cliff-container {
         float: left;
         width: 100%;
         position: relative;
         }
         .cliff-row-run2 {
         float: left;
         width: 100%;
         overflow: hidden;
         }
         #custom-run2 {
         float: left;
         width: 100%;
         height: auto;
         position: relative;
         display: -webkit-inline-box;
         transition: all 0.25s ease 0s;
         }
         .cliff-col-run2{
         position: relative;
         display: table-cell;
         float: left;
         padding-right: 8px;
         }
         button.nav-run2 {
         background-color: #fff;
         border: #e2e2e2 1px solid;
         border-radius: 50%;
         padding: 9px;
         line-height: 7px;
         }
         button.nav-run2 img {
         width: 20px;
         height: 20px;
         }
         button.nav-run2.prev {
         position: absolute;
         left: -10px;
         top: 66px;
         }
         button.nav-run2.next {
         position: absolute;
         right: -10px;
         top: 66px;
         }
         button.nav-run2.active {
         background-color: #ede8e8;
         }
      </style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <?php include 'includes/breadcrumbs.php'; ?>
      <section class="photos-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <h1 class="photos-heading">Photo</h1>
                  <h2 class="photos-featured">Featured</h2>
                  <div class="featured-image-gallery">
                     <a href=""><img src="images/large-article-img.jpg" alt="" title=""></a>
                     <div class="featured-image-content">
                        <h6>Entertainment</h6>
                        <img src="images/svg/gallery-new.svg" alt="" title="" alt="" title="">
                        <h2>ରାଷ୍ଟ୍ରପତି ପ୍ରାର୍ଥୀ ଘୋଷଣା ପରେ ଦ୍ରୌପଦୀ ମୁର୍ମୁଙ୍କୁ ଶୁଭେଚ୍ଛାର ସୁଅ, ୨୪ରେ ଭରିବେ ନାମାଙ୍କନ<span>10 images</span></h2>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub">
                           <div class="img-gal-su-img">
                              <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                              <span class="image-gallery-count">
                              <img src="images/svg/gallery-new.svg" alt="" title="">
                              5 images
                              </span>
                           </div>
                           <div class="img-gal-su-cont">
                              <a href="">
                                 <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                              </a>
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
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub">
                           <div class="img-gal-su-img">
                              <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                              <span class="image-gallery-count">
                              <img src="images/svg/gallery-new.svg" alt="" title="">
                              5 images
                              </span>
                           </div>
                           <div class="img-gal-su-cont">
                              <a href="">
                                 <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                              </a>
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
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub">
                           <div class="img-gal-su-img">
                              <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                              <span class="image-gallery-count">
                              <img src="images/svg/gallery-new.svg" alt="" title="">
                              5 images
                              </span>
                           </div>
                           <div class="img-gal-su-cont">
                              <a href="">
                                 <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                              </a>
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
                     </div>
                  </div>
                  <h2 class="photos-featured">Latest</h2>
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub">
                           <div class="img-gal-su-img">
                              <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                              <span class="image-gallery-count">
                              <img src="images/svg/gallery-new.svg" alt="" title="">
                              5 images
                              </span>
                           </div>
                           <div class="img-gal-su-cont">
                              <a href="">
                                 <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                              </a>
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
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub">
                           <div class="img-gal-su-img">
                              <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                              <span class="image-gallery-count">
                              <img src="images/svg/gallery-new.svg" alt="" title="">
                              5 images
                              </span>
                           </div>
                           <div class="img-gal-su-cont">
                              <a href="">
                                 <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                              </a>
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
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub">
                           <div class="img-gal-su-img">
                              <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                              <span class="image-gallery-count">
                              <img src="images/svg/gallery-new.svg" alt="" title="">
                              5 images
                              </span>
                           </div>
                           <div class="img-gal-su-cont">
                              <a href="">
                                 <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                              </a>
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
                     </div>
                  </div>
                  <h2 class="photos-featured">Latest</h2>
                  <div class="row">
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="featured-image-gallery1">
                           <a href=""><img src="images/medium-large-img.jpg" alt="" title=""></a>
                           <div class="featured-image-content1">
                              <h6>Entertainment</h6>
                              <a href=""><img src="images/svg/gallery-new.svg" alt="" title="" alt="" title=""></a>
                              <a href="">
                                 <h3>ରାଷ୍ଟ୍ରପତି ପ୍ରାର୍ଥୀ ଘୋଷଣା ପରେ ଦ୍ରୌପଦୀ ମୁର୍ମୁଙ୍କୁ ଶୁଭେଚ୍ଛାର ସୁଅ, ୨୪ରେ ଭରିବେ ନାମାଙ୍କନ<span>10 images</span></h3>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="image-gallery-sub1">
                           <a href=""><img src="images/medium-img.jpg"></a>
                           <a href="">
                              <h5>ରାଷ୍ଟ୍ରପତି ପ୍ରାର୍ଥୀ ଘୋଷଣା ପରେ ଦ୍ରୌପଦୀ ମୁର୍ମୁଙ୍କୁ ଶୁଭେଚ୍ଛାର ସୁଅ, ୨୪ରେ ଭରିବେ ନାମାଙ୍କନ ରାଷ୍ଟ୍ରପତି ପ୍ରାର୍ଥୀ ଘୋଷଣା ପରେ ଦ୍ରୌପଦୀ ମୁର୍ମୁଙ୍କୁ ଶୁଭେଚ୍ଛାର ସୁଅ, ୨୪ରେ ଭରିବେ ନାମାଙ୍କନ</h5>
                           </a>
                           <a href="">
                              <h6>Entertainment</h6>
                           </a>
                        </div>
                        <div class="image-gallery-sub1">
                           <a href=""><img src="images/medium-img.jpg"></a>
                           <a href="">
                              <h5>ରାଷ୍ଟ୍ରପତି ପ୍ରାର୍ଥୀ ଘୋଷଣା ପରେ ଦ୍ରୌପଦୀ ମୁର୍ମୁଙ୍କୁ ଶୁଭେଚ୍ଛାର ସୁଅ, ୨୪ରେ ଭରିବେ ନାମାଙ୍କନ ରାଷ୍ଟ୍ରପତି ପ୍ରାର୍ଥୀ ଘୋଷଣା ପରେ ଦ୍ରୌପଦୀ ମୁର୍ମୁଙ୍କୁ ଶୁଭେଚ୍ଛାର ସୁଅ, ୨୪ରେ ଭରିବେ ନାମାଙ୍କନ</h5>
                           </a>
                           <a href="">
                              <h6>Entertainment</h6>
                           </a>
                        </div>
                     </div>
                  </div>
                  <h2 class="photos-featured">Latest</h2>
                  <div class="cliff-container">
                     <div class="cliff-row-run2">
                        <div class="cliff-custom-run2" id="custom-run2">
                           <div class="cliff-col-run2">
                              <div class="image-gallery-sub">
                                 <div class="img-gal-su-img">
                                    <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                                    <span class="image-gallery-count">
                                    <img src="images/svg/gallery-new.svg" alt="" title="">
                                    5 images
                                    </span>
                                 </div>
                                 <div class="img-gal-su-cont">
                                    <a href="">
                                       <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                                    </a>
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
                           </div>
                           <div class="cliff-col-run2">
                              <div class="image-gallery-sub">
                                 <div class="img-gal-su-img">
                                    <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                                    <span class="image-gallery-count">
                                    <img src="images/svg/gallery-new.svg" alt="" title="">
                                    5 images
                                    </span>
                                 </div>
                                 <div class="img-gal-su-cont">
                                    <a href="">
                                       <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                                    </a>
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
                           </div>
                           <div class="cliff-col-run2">
                              <div class="image-gallery-sub">
                                 <div class="img-gal-su-img">
                                    <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                                    <span class="image-gallery-count">
                                    <img src="images/svg/gallery-new.svg" alt="" title="">
                                    5 images
                                    </span>
                                 </div>
                                 <div class="img-gal-su-cont">
                                    <a href="">
                                       <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                                    </a>
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
                           </div>
                           <div class="cliff-col-run2">
                              <div class="image-gallery-sub">
                                 <div class="img-gal-su-img">
                                    <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                                    <span class="image-gallery-count">
                                    <img src="images/svg/gallery-new.svg" alt="" title="">
                                    5 images
                                    </span>
                                 </div>
                                 <div class="img-gal-su-cont">
                                    <a href="">
                                       <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                                    </a>
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
                           </div>
                           <div class="cliff-col-run2">
                              <div class="image-gallery-sub">
                                 <div class="img-gal-su-img">
                                    <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                                    <span class="image-gallery-count">
                                    <img src="images/svg/gallery-new.svg" alt="" title="">
                                    5 images
                                    </span>
                                 </div>
                                 <div class="img-gal-su-cont">
                                    <a href="">
                                       <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                                    </a>
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
                           </div>
                           <div class="cliff-col-run2">
                              <div class="image-gallery-sub">
                                 <div class="img-gal-su-img">
                                    <a href=""><img src="images/medium-img.jpg" alt="" title=""></a>
                                    <span class="image-gallery-count">
                                    <img src="images/svg/gallery-new.svg" alt="" title="">
                                    5 images
                                    </span>
                                 </div>
                                 <div class="img-gal-su-cont">
                                    <a href="">
                                       <h5>ଇସ୍ତଫା ପତ୍ର ଦେବା ପରେ ଉଦ୍ଧବ ଠାକ୍‌ରେ ମନ୍ଦିର ଯାଇ ପୂଜାର୍ଚ୍ଚନା କରିଛନ୍ତି। ସେପଟେ ସେଲିବ୍ରେସନ ମୁଡ୍‌ରେ ମହାରାଷ୍ଟ୍ର ବିଜେପି। </h5>
                                    </a>
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
                           </div>
                        </div>
                     </div>
                     <button id="prev-run2" class="nav-run2 prev"><img src="images/svg/prev_chevron.svg"></button>
                     <button id="next-run2" class="nav-run2 next active"><img src="images/svg/next_chevron.svg"></button>
                  </div>
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
         jQuery(document).ready(function () {
         // Change Property Start
         var run2_items = 4;
         var run2_time_delay = 1000;
         var run2_autoplay = false;
         var run2_autoplay_hover_pause = true;
         // Change Property End
         var run2_item_width=100/run2_items;$(".cliff-col-run2").css({width:run2_item_width+"%"});var run2_item_inner_width=$(".cliff-col-run2").innerWidth(),run2_margin_offset=0,run2_i=0,run2_SlideNumber=$(".cliff-custom-run2").children().length,run2_cnt=0;if(!1!=run2_autoplay){function b(){run2_i++,run2_margin_offset-=run2_item_inner_width,$(".cliff-custom-run2").css("transform","translate3d("+run2_margin_offset+"px, 0px, 0px)"),$("#prev-run2").addClass("active")}var c=null;function a(){c=setInterval(function(){++run2_cnt<=run2_SlideNumber-run2_items?b():($(".cliff-custom-run2").css("transform","translate3d(0px, 0px, 0px)"),run2_i=0,run2_cnt=0,run2_margin_offset=0,$("#next-run2").addClass("active"),$("#prev-run2").removeClass("active"))},run2_time_delay)}a(),!0==run2_autoplay_hover_pause&&$("#custom-run2").hover(function(){clearInterval(c)},function(){a()})}$("#next-run2").click(function(){run2_i++,run2_cnt++,run2_i<=run2_SlideNumber-run2_items?(run2_margin_offset-=run2_item_inner_width,$(".cliff-custom-run2").css("transform","translate3d("+run2_margin_offset+"px, 0px, 0px)"),$(this).addClass("active"),$("#prev-run2").addClass("active")):(run2_i=run2_SlideNumber-run2_items,$(this).removeClass("active"),run2_cnt=run2_SlideNumber-run2_items)}),$("#prev-run2").click(function(){run2_i--,run2_cnt--,run2_i>=0?(run2_margin_offset+=run2_item_inner_width,$(".cliff-custom-run2").css("transform","translate3d("+run2_margin_offset+"px, 0px, 0px)")):(run2_i=0,$(this).removeClass("active"),$("#next-run2").addClass("active"))})
         });
      </script>
   </body>
</html>