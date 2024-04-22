<!DOCTYPE html>
<html lang="zxx">
   <head>/
   <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>NEW DESKTOP HOME PAGE</title>
      <style >
         <?php include "css/common-mobile.css"; ?>
         /* HEADER */
         
         body {
         margin: 0px 10px;
         padding: 0px;
         }
         a, a:hover, a:focus, a:active {
         text-decoration: none;
         }
         .bdn-card-two {
         position: relative;
         padding-right: 84px;
         display: inline-block;
         border-bottom: 1px solid #eaeaea;
         margin: 4px 0;
         padding-bottom: 4px;
         }
         .bdn-card-two:last-child {
         border-bottom: none;
         margin-bottom: 40px;
         }
         img.bdn-card-two-img {
         width: 64px;
         height: 36px;
         position: absolute;
         right: 0;
         top: 0px;
         border-radius: 3px;
         }
         .bdn-card-two h3 {
         margin:0 0 0 10px;
         text-decoration: none;
         display: block;
         color: #2b2b2b;
         margin-bottom: 5px;
         font-size: 16px;
         font-weight: 700;
         line-height: 28px;
         }
         .bdn-card-two ul {
         margin: 12px 0 0;
         padding: 0;
         }
         .bdn-card-two ul li {
         list-style-type: none;
         float: left;
         text-transform: uppercase;
         font-size: 12px;
         color: #808080;
         }
         .bdn-card-two li a {
         margin-left:10px;
         position: relative;
         color: #808080;
         font-size: 16px;
         font-weight: 700;
         }
         .bdn-card-eleven {
         position: relative;
         background-color: #fff;
         border-bottom: 1px solid #eaeaea;
         margin: 0px;
         padding-bottom: 12px;
         }
         img.bdn-card-eleven-img {
         width: 100%;
         height: auto;
         object-fit: cover;
         }
         .bdn-card-eleven h3 {
         color: #000;
         font-size: 18px;
         line-height: 32px;
         position: relative;
         padding: 0px;
         font-weight: 700;
         margin: 10px 0px 0px 10px;
         }
         /* LIST DESIGN */
         .heading-category-ok {
         height: auto;
         border: 1px solid #eaeaea;
         padding: 20px 0; 
         }
         a.category-img-ok {
         text-decoration: none;
         display: block;
         height: 32px;
         width: 32px;
         border-radius: 50%;
         overflow: hidden;
         background-color: #808080;
         float: left;
         margin: 0;
         }
         a.category-name-ok {
         color: #f89c1d;
         font-size: 20px;
         font-weight: bold;
         line-height: 30px;
         margin: 10px 0 0 10px;
         }
         .listing-style-one {
         position: relative;
         border: 1px solid #eaeaea;
         padding: 10px;
         min-height: 140px;
         padding-right: 180px;
         }
         h3.category-headline {
         font-size: 14px;
         font-weight: bold;
         line-height: 24px;
         color: #000;
         }
         div.listing-one-img-container {
         position: absolute;
         top: 10px;
         right: 10px;
         height:108px;
         width:144px;
         border-radius: 4px;
         }
         img.listing-one-icon {
         position: absolute;
         left: 0;
         top: 44px;
         right: 0;
         margin: 0 auto;
         }
         .listing-news-ok {
         border-bottom: solid 12px #eaeaea;
         }
         a.category-type {
         position: relative;
         color: #808080;
         font-weight: bold;
         font-size: 14px;
         margin-top: 25px;
         display: block;
         }
         /* //LIST DESIGN */
         /* BREAD CRUMB */
         .bread-crumb {
         display: block;
         }
         ul.bread-crumb-list {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         display: inline-block;
         }
         ul.bread-crumb-list li {
         list-style-type: none;
         float: left;
         color: #2b2b2b;
         font-size: 12px;
         position: relative;
         margin-right: 20px;
         }
         ul.bread-crumb-list li a {
         text-decoration: none;
         display: block;
         color: #808080;
         font-size: 12px;
         }
         ul.bread-crumb-list li:after {
         content: "/";
         display: block;
         position: absolute;
         right: -12px;
         top: 0;
         color: #808080;
         }
         ul.bread-crumb-list li:last-child:after {
         display: none;
         }
         /* //BREAD CRUMB */
         /* FEATURED */
         .story-feature {
         position: relative;
         border: 1px solid #eaeaea;
         padding: 10px;
         margin-bottom: 20px;
         }
         h1.featured-heading {
         color: #000;
         font-size: 18px;
         font-weight: bold;
         line-height: 26px;
         margin: 0px;
         padding: 0px
         }
         .featured-cat-social {
         display: inline-block;
         width: 100%;
         }
         ul.featured-cat {
         margin: 3px 0px 0px 0px;
         padding: 0px;
         float: left;
         }
         ul.featured-cat li {
         list-style-type: none;
         float: left;
         }
         ul.featured-cat li a {
         font-size: 14px;
         margin-right: 20px;
         color: #000;
         font-weight: bold;
         }
         ul.featured-cat li:last-child a {
         color: #808080;
         }
         ul.featured-social {
         float: right;
         margin: 0px;
         padding: 0px;
         }
         ul.featured-social li {
         list-style-type: none;
         float: left;
         margin-left: 17px;
         }
         ul.featured-social li a {
         text-decoration: none;
         display: block;
         }
         .story-news-one {
         position: relative;
         border: 1px solid #eaeaea;
         padding: 10px 0;
         }
         .featured-media-box{
         position: relative;
         }
         .featured-img {
         border-radius: 4px;
         width: 100%;
         height: auto;
         object-fit: contain;
         }
         img.featured-icon {
         position: absolute;
         left: 0;
         right: 0;
         top: 43%;
         height: 35px;
         width: 35px;
         margin: 0 auto;
         }
         span.video-length {
         position: absolute;
         right: 10px;
         bottom: 10px;
         color: #fff;
         font-size: 14px;
         padding: 0px 5px;
         border-radius: 4px;
         line-height: 23px;
         background-color: #333333b3;
         }
         p.featured-description {
         text-align: center;
         margin: 10px 0px 0px 0px;
         padding: 0px;
         font-size: 14px;
         color: #808080;
         line-height: 20px;
         }
         a.featured-live-link {
            color: #fff;
    background-color: #F44336;
    float: left;
    text-transform: uppercase;
    font-size: 15px;
    line-height: 20px;
    font-weight: 700;
    padding: 2px 4px;
    border-radius: 5px;
    margin: 0px 10px 0px 0px;
         }
         .home-featured-cat-social {
         display: inline-block;
         width: 100%;
         margin:0;
         padding:0;
         }
         .home-featured-heading-block {
         margin-bottom: 15px;
         }
         /* //FEATURED */
         /* STORY SLIDER */
         .slider-video-container {
         background-color: #2e2e2e;
         margin: 10px 0;
         padding: 10px;
         }
         .branch-view {
         display: flex;
         justify-content: space-between;
         padding: 0;
         align-items: center;
         }
         .see-branch-ok {
         background: #f44336;
         border-radius: 4px;
         color: #fff;
         font-size: 16px;
         font-weight: 600;
         line-height: 36px;
         padding: 0px 16px;
         white-space: nowrap;
         }
         .see-branch-ok:hover {
         color: #fff;  
         }
         .view-all-ok {
         align-items: center;
         background: none;
         border: 1px solid #f89c1d;
         border-radius: 4px;
         color: #f89c1d;
         display: flex;
         font-size: 16px;
         font-weight: 600;
         line-height: 24px;
         padding: 6px 16px;
         white-space: nowrap;
         }
         .flex-img-desc {
         width: auto;
         display: flex;
         overflow-x: scroll;
         }
         .img-desc-ok {
         width: 180px;
         margin-right:20px ;
         }
         .flex-img-desc img{
         width: 176px;
         height: 132px;
         border-radius: 10px;
         }
         .flex-img-desc p {
         color: #fff;
         font-size: 16px;
         font-weight: 600;
         line-height: 23px;
         margin-top: 10px;
         overflow: hidden;
         padding-left: 2px;
         text-overflow: ellipsis;
         }
         .flex-img-desc::-webkit-scrollbar {
         height: 10px;
         }
         .flex-img-desc::-webkit-scrollbar-track {
         box-shadow: inset 0 0 5px #e1e1e1;
         border-radius: 10px;
         }
         .flex-img-desc::-webkit-scrollbar-thumb {
         background:#f44336;
         border-radius: 10px;
         }
         /* //STORY SLIDER */
         /* STATIC PAGE */
         h1.common-heading {
         color: #000;
         font-size: 27px;
         font-weight: bold;
         line-height: 36px;
         margin: 0px 0px 20px 0px;
         padding: 0px;
         }
         /* //STATIC PAGE */
         section.content-section {
         margin-top: 70px;
         margin-bottom: 30px;
         }
         .story-content p {
         font-size: 16px;
         color: #2b2b2b;
         line-height: 24px;
         padding: 0px;
         margin: 0px 0px 20px 0px;
         }
         .story-content img {
         max-width: 100%;
         height: auto;
         }
         .story-content iframe {
         max-width: 100%;
         }
         ul.story-tags {
         margin: 0px 0px 20px 0px;
         padding: 0px;
         display: inline-block;
         }
         ul.story-tags li {
         list-style-type: none;
         float: left;
         margin: 0px 10px 10px 0px;
         }
         ul.story-tags li a {
         text-decoration: none;
         background-image: linear-gradient(1deg, #f89c1d, #f8d5a4 99%);
         color: #000;
         display: block;
         line-height: 33px;
         padding: 0px 20px;
         border-radius: 24px;
         font-size: 15px;
         font-weight: 700;
         }
         /* Author info */
         .author-details {
         max-height: 80px;
         overflow: hidden;
         border-radius: 8px;
         padding: 10px;
         background-color: #f9f9f9;
         margin: 10px 0px 10px 0px;
         }
         .img-name{
         display:flex;
         margin-bottom:5px;
         }
         .author-image {
         height: 40px;
         width: 40px;
         margin-right: 8px;
         border-radius: 50%;
         }
         .author-description {
         font-family: Arial, sans-serif;
         }
         .author-description h3 {
         margin: 13px 0px 6px 0px;
         font-size: 14px;
         color: #333;
         padding: 0px;
         }
         .article-details {
         list-style: none;
         padding: 0;
         margin: 0;
         font-size: 14px;
         color: #888;
         }
         .article-details li {
         margin-bottom: 5px;
         }
         /* //Author info */
         .sm-font{
         text-align:center;
         text-transform:uppercase;
         }
         .social-media-ok {
         border: 1px solid #eaeaea;
         margin-bottom: 20px;
         }
         .small-news-container {
         border: 1px solid #eaeaea;
         }
         h2.common-heading-two {
         padding: 0px;
         margin: 20px 10px;
         font-size: 22px;
         font-weight: 700;
         color: #000;
         }
         a.small-news-block-cat {
         position: relative;
         color: #f89c1d;
         font-weight: bold;
         font-size: 16px;
         display: block;
         }
         .small-news-block h2 {
         font-size: 18px;
         font-weight: bold;
         line-height: 28px;
         color: #000;
         margin: 8px 0px;
         padding: 0px;
         }
         .small-news-block span {
         color: #808080;
         font-size: 14px;
         text-transform: capitalize;
         }
         .small-news-block {
         border-bottom: 1px solid #eaeaea;
         margin: 20px 10px;
         padding-bottom: 12px;
         }
         .small-news-block:last-child {
         border-bottom: none;
         padding-bottom: 0;
         }
         ul.download-app {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         text-align: center;
         }
         ul.download-app li {
         list-style-type: none;
         display: inline-block;
         margin-bottom: 5px;
         margin: 0px 5px;
         }
         ul.download-app li a {
         text-decoration: none;
         display: block;
         }
         ul.download-app li a img {
         border-radius: 6px;
         }
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <section class="content-section">
         <div class="bread-crumb">
            <ul class="bread-crumb-list">
               <li><a href="#">Hindi News</a></li>
               <li><a href="#">Local</a></li>
               <li><a href="#">Rajasthan</a></li>
               <li><a href="#">Bikaner</a></li>
               <li>BJP Sangh Meeting Before BJP's Second List</li>
            </ul>
         </div>
         <div class="story-feature">
            <div class="featured-heading-block">
               <a href="#" class="featured-live-link">live</a>
               <a href="#">
                  <h1 class="featured-heading">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h1>
               </a>
            </div>
            <div class="author-details">
               <div class="img-name">
                  <a href="https://odishatv.in/author/cassian-baliarsingh-16405">
                  <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1658146517.webp" alt="Cassian Baliarsingh" title="Cassian Baliarsingh" class="author-image">
                  </a>
                  <div class="author-description">
                     <a href="https://odishatv.in/author/cassian-baliarsingh-16405">
                        <h3>Cassian Baliarsingh</h3>
                     </a>
                  </div>
               </div>
               <div class="article-meta">
                  <ul class="article-details">
                     <li><strong>Published:</strong> Monday, 13 Nov 2023</li>
                     <li><strong>Last Updated:</strong> 13 Nov 2023, 11:03 AM IST</li>
                  </ul>
               </div>
            </div>
            <div class="featured-media-box">
               <a href="#">
               <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" class="featured-img">
               </a>
               <a href="#">
               <img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="35" height="35" class="featured-icon">
               </a>
               <span class="video-length">11:30</span>
            </div>
            <div class="featured-cat-social">
               <ul class="featured-cat">
                  <li><a href="#">नई दिल्ली</a></li>
                  <li><a href="#">नई दिल्ली</a></li>
               </ul>
               <ul class="featured-social">
                  <li>
                     <a href="#">
                     <img src="https://odishatv.in/commondir/images/svg/fb-gray.svg" width="20" height="20" alt="Facebook">
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <img src="https://odishatv.in/commondir/images/svg/fb-gray.svg" width="20" height="20" alt="Facebook">
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <img src="https://odishatv.in/commondir/images/svg/fb-gray.svg" width="20" height="20" alt="Facebook">
                     </a>
                  </li>
               </ul>
            </div>
            <p class="featured-description">भाजपा सांसद निशिकांत दुबे ने लोकसभा स्पीकर ओम बिड़ला से मांग की है कि महुआ मोइत्रा को निलंबित किया जाए और एक कमेटी से मामले की जांच कराई जाए।</p>
         </div>
         <div class="story-content">
            <p>भारतीय जनता पार्टी राजस्थान में विधानसभा चुनाव के प्रत्याशियों की पहली लिस्ट के बाद हुए बवाल से सीख लेते हुए दूसरी लिस्ट आने से पहले जिला स्तर के नेताओं से चर्चा कर रही है। ये पता लगाया जा रहा है कि कौन नेता, किसे टिकट मिलने के बाद विरोध कर सकता है। इससे पार्टी को डेमेज कंट्रोल करने में मदद मिलेगी और टिकट वितरण से पहले ही संबंधित नेता को "समझाने" का प्रयास शुरू हो जाएगा। बीकानेर में गुरुवार को हुई बैठक में पार्टी के चुनिंदा पदाधिकारियों और राष्ट्रीय स्वयंसेवक संघ के पदाधिकारियों ने इसी तरह के मुद्दों पर चर्चा की है।</p>
         </div>
         <ul class="story-tags">
            <li><a href="#">जगदलपुर</a></li>
            <li><a href="#">7 दिन पहले</a></li>
            <li><a href="#">विधानसभा</a></li>
            <li><a href="#">राष्ट्रीय</a></li>
         </ul>
         <!-- SECTION NEWS -->
         <div class="listing-news-ok">
            <div class="heading-category-ok">
               <a href="#" class="category-name-ok">RELATED STORY</a>
            </div>
            <div class="listing-style-one">
               <a href="#">
                  <h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3>
               </a>
               <a href="#" class="category-type">ओपिनियन</a>
               <div class="listing-one-img-container">
                  <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                  <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
               </div>
            </div>
            <!-- //SECTION NEWS -->
         </div>
         <div class="social-media-ok">
            <p class="sm-font">download app from</p>
            <ul class="download-app">
               <li><a href="#"><img src="images/download-app-an.jpg" alt="" title="" width="135" height="40" class="app-link-img"></a></li>
               <li><a href="#"><img src="images/download-app-ap.jpg" alt="" title="" width="135" height="40" class="app-link-img"></a></li>
            </ul>
         </div>
         <!-- STORY SLIDER -->
         <div class="slider-video-container">
            <div class="branch-view">
               <a href="#">
                  <h3 class="see-branch-ok">OTV खबर</h3>
               </a>
               <a href="#">
                  <h3 class="view-all-ok">सभी देखें</h3>
               </a>
            </div>
            <div class="flex-img-desc">
               <div class="img-desc-ok">
                  <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                  <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
               </div>
               <div class="img-desc-ok">
                  <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                  <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
               </div>
            </div>
         </div>
         <!-- //STORY SLIDER -->
         <div class="small-news-container">
            <h2 class="common-heading-two">विधानसभा चुनाव</h2>
            <div class="bdn-card-eleven">
               <a href="#" title=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/recent_photo_1698290296.webp" alt="" title="" width="300" height="169" class="bdn-card-eleven-img"></a>
               <a href="#" title="">
                  <h3>इससे पार्टी को डेमेज कंट्रोल करने में मदद मिलेगी और टिकट वितरण</h3>
               </a>
            </div>
            <div class="bdn-card-two">
               <a href="" title=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/recent_photo_1698252932.webp" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
               <a href="#" title="">
                  <h3>इससे पार्टी को डेमेज कंट्रोल करने में मदद मिलेगी और टिकट वितरण</h3>
               </a>
               <ul>
                  <li><a href="#" title="Odisha">राजस्थान</a></li>
               </ul>
            </div>
            <div class="bdn-card-two">
               <a href="" title=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/recent_photo_1698252932.webp" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
               <a href="#" title="">
                  <h3>इससे पार्टी को डेमेज कंट्रोल करने में मदद मिलेगी और टिकट वितरण</h3>
               </a>
               <ul>
                  <li><a href="#" title="Odisha">राजस्थान</a></li>
               </ul>
            </div>
            <div class="bdn-card-two">
               <a href="" title=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/recent_photo_1698252932.webp" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
               <a href="#" title="">
                  <h3>इससे पार्टी को डेमेज कंट्रोल करने में मदद मिलेगी और टिकट वितरण</h3>
               </a>
               <ul>
                  <li><a href="#" title="Odisha">राजस्थान</a></li>
               </ul>
            </div>
            <div class="bdn-card-two">
               <a href="" title=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/recent_photo_1698252932.webp" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
               <a href="#" title="">
                  <h3>इससे पार्टी को डेमेज कंट्रोल करने में मदद मिलेगी और टिकट वितरण</h3>
               </a>
               <ul>
                  <li><a href="#" title="Odisha">राजस्थान</a></li>
               </ul>
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
        <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>