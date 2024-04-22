<!DOCTYPE html>
<html>
   <head>
      <title>NEW DESKTOP HOME PAGE</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "css/common-desktop.css"; ?>
         section.content-section {
            margin-top: 80px;
            margin-bottom: 30px;
         }
         /* WEBSTORY */
        .webstory-spotlight {
        margin-bottom: 15px;
        }
        .webstory-item-spotlight {
        position: relative;
        }
        .webstory-item-spotlight img {
        width: 100%;
        height: 347px;
        object-fit: cover;
        }
        .webstory-content {
        position: absolute;
        left: 0;
        bottom: 0;
        background-image: linear-gradient(transparent,#000);
        padding: 7.5px;
        text-align: center;
        display: block;
        }
        .webstory-content h3 {
        background-color: #f4c219;
        color: #000;
        text-align: center;
        width: fit-content;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 20px;
        padding: 0 5px;
        border-radius: 3px;
        margin: 0 auto;
        }
        .webstory-content h4 {
        color: #fff;
        font-weight: 700;
        font-size: 13px;
        margin: 10px 0;
        }
         /* //WEBSTORY */
         /* LIVE UPDATE */
p.live-heading{
font-size:28px;
font-weight:600;
line-height:32px;
color:#000;
text-transform:capitalize;
}
p.live-heading span{
background-color:red;
text-transform:uppercase;
padding:2px 8px;
font-size:20px;
border-radius:4px;
color:#fff;
margin-right:10px;
}
.live-update-box {
    position: relative;
    height: 346px;
}
img.libe-box-bg {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
object-fit: cover;
}
.live-update-box:after{
content: "";
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgb(0 0 0 / 58%);
z-index: 1;
}
ol.live-update-box-content {
    position: absolute;
    left: 15px;
    right: 15px;
    top: 15px;
    z-index: 3;
    counter-reset: count;
    margin: 0px;
    padding: 0px;
}
ol.live-update-box-content li {
    list-style-type: none;
    display: block;
    position: relative;
    padding-left: 40px;
    margin-bottom: 15px;
}
ol.live-update-box-content li a {
    text-decoration: none;
    display: block;
    font-size: 20px;
    color: #fff;
    font-weight: 700;
}
ol.live-update-box-content li::before {
    counter-increment: count;
    content: counter(count);
    background-color: #f89c1d;
    width: 30px;
    height: 30px;
    display: block;
    color: #fff;
    text-align: center;
    line-height: 30px;
    font-size: 19px;
    font-weight: 700;
    position: absolute;
    left: 0;
    top: 0;
    border-radius: 50%;
}
ol.live-update-box-content li span {
    color: #fff;
    font-size: 17px;
    margin: 2px 0px 6px 0px;
    float: left;
    width: 100%;
}
         /* LIVE UPDATE */
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <section class="content-section">
         <div class="container">
            <div class="otv-970-250-ad" style="margin-bottom: 20px;"> &nbsp; </div>
            <div class="row">
               <?php include 'includes/left_sticky_menu.php'; ?>
               <div class="col-lg-6">
                  <!-- LIVE UPDATE -->
                  <div class="bdn-live-update-block">
                     <p class="live-heading"> <span>live</span>live Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, totam? </p></a>
                     <div class="live-update-box">
                        <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/recent_photo_1700713741.webp" alt="" class="libe-box-bg">
                        <ol class="live-update-box-content">
                           <li><span>12:36PM, 05, NOV 2023</span><a href="#">This is the first live update news item. Lorem ipsum dolor sit amet, consectetur adipiscing elit This is the first live update news item.</a></li>
                           <li><span>12:36PM, 05, NOV 2023</span><a href="#">This is the first live update news item.</a></li>
                           <li><span>12:36PM, 05, NOV 2023</span><a href="#">This is the first live update news item. Lorem ipsum dolor sit amet, consectetur adipiscing elit This.</a></li>
                        </ol>
                     </div>
                  </div>
                  <!-- // LIVE UPDATE -->
                <div class="story-feature">
                   <div class="home-featured-heading-block">
                       <!-- <a href="#" class="featured-live-link">live</a> -->
                       <a href="#">
                          <h1 class="featured-heading">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h1>
                       </a>
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
                   <div class="home-featured-cat-social">
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
                            <img src="https://odishatv.in/commondir/images/svg/twit-gray.svg" width="20" height="20" alt="Twitter">
                            </a>
                         </li>
                         <li>
                            <a href="#">
                            <img src="https://odishatv.in/commondir/images/svg/whatsapp-gray.svg" width="20" height="20" alt="WhataApp">
                            </a>
                         </li>
                      </ul>
                   </div>
                </div>
                <!-- WEBSTORY -->
                <div class="webstory-spotlight">
                    <div class="heading-category-ok">
                            <a href="#" class="category-img-ok">
                                <img src="images/unpacking.png" alt="" title="" width="" height="">
                            </a>
                            <a href="#" class="category-name-ok">WEBSTORIES</a>
                        </div>
                   <div class="row">
                      <div class="col-lg-4">
                         <div class="webstory-item-spotlight">
                            <a href="https://odishatv.in/webstories/festivals-events/durga-puja-2023-ten-must-visit-pandals-in-bhubaneswar-218001" title="Durga Puja 2023: 10 Must-Visit Pandals In Bhubaneswar" target="_blank"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/recent_photo_1697794868.webp" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/recent_photo_1697794868.webp" alt="Durga Puja 2023: 10 Must-Visit Pandals In Bhubaneswar" title="Durga Puja 2023: 10 Must-Visit Pandals In Bhubaneswar" width="195" height="347"></a>
                            <div class="webstory-content">
                               <a href="https://odishatv.in/webstories" title="Festivals &amp; Events">
                                  <h3>Festivals &amp; Events</h3>
                               </a>
                               <a href="https://odishatv.in/webstories/festivals-events/durga-puja-2023-ten-must-visit-pandals-in-bhubaneswar-218001" title="Durga Puja 2023: 10 Must-Visit Pandals In Bhubaneswar" target="_blank">
                                  <h4>Durga Puja 2023: 10 Must-Visit Pandals In Bhubaneswar</h4>
                               </a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4">
                         <div class="webstory-item-spotlight">
                            <a href="https://odishatv.in/webstories/technology/indian-products-reimagined-in-mf-hussain-s-artistic-style-through-ai-217956" title="Indian Products Reimagined in MF Hussain's Artistic Style Through AI" target="_blank"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/recent_photo_1697782453.webp" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/recent_photo_1697782453.webp" alt="Indian Products Reimagined in MF Hussain's Artistic Style Through AI" title="Indian Products Reimagined in MF Hussain's Artistic Style Through AI" width="195" height="347"></a>
                            <div class="webstory-content">
                               <a href="https://odishatv.in/webstories" title="Technology">
                                  <h3>Technology</h3>
                               </a>
                               <a href="https://odishatv.in/webstories/technology/indian-products-reimagined-in-mf-hussain-s-artistic-style-through-ai-217956" title="Indian Products Reimagined in MF Hussain's Artistic Style Through AI" target="_blank">
                                  <h4>Indian Products Reimagined in MF Hussain's Artistic Style Through AI</h4>
                               </a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4">
                         <div class="webstory-item-spotlight">
                            <a href="https://odishatv.in/webstories/technology/vishnu-s-dashavatara-imagined-by-ai-check-pics-217944" title="Vishnu’s Dashavatara Imagined By AI; Check Pics " target="_blank"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/recent_photo_1697774811.webp" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/recent_photo_1697774811.webp" alt="Vishnu’s Dashavatara Imagined By AI; Check Pics " title="Vishnu’s Dashavatara Imagined By AI; Check Pics " width="195" height="347"></a>
                            <div class="webstory-content">
                               <a href="https://odishatv.in/webstories" title="Technology">
                                  <h3>Technology</h3>
                               </a>
                               <a href="https://odishatv.in/webstories/technology/vishnu-s-dashavatara-imagined-by-ai-check-pics-217944" title="Vishnu’s Dashavatara Imagined By AI; Check Pics " target="_blank">
                                  <h4>Vishnu’s Dashavatara Imagined By AI; Check Pics </h4>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- //WEBSTORY -->
                <!-- STORY SLIDER -->
                <div class="slider-video-container">
                   <div class="branch-view">
                      <a href="#">
                         <h3 class="see-branch-ok">भास्कर खास</h3>
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
                      <div class="img-desc-ok">
                         <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                         <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
                      </div>
                      <div class="img-desc-ok">
                         <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                         <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
                      </div>
                      <div class="img-desc-ok">
                         <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                         <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
                      </div>
                      <div class="img-desc-ok">
                         <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                         <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
                      </div>
                      <div class="img-desc-ok">
                         <img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/zkk20th-oct-cover_1697719060.jpg" alt="" title="" width="176" height="132" >
                         <p>जरूरत की खबर- बदलते मौसम में बढ़ा बीमारियों का रिस्क</p>
                      </div>
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
                  <!-- SECTION NEWS -->
                     <div class="listing-news-ok">
                        <div class="heading-category-ok">
                            <a href="#" class="category-img-ok">
                                <img src="images/unpacking.png" alt="" title="" width="" height="">
                            </a>
                            <a href="#" class="category-name-ok">बॉलीवुड</a>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                     </div>
                  <!-- //SECTION NEWS -->
                  <!-- SECTION NEWS -->
                     <div class="listing-news-ok">
                        <div class="heading-category-ok">
                            <a href="#" class="category-img-ok">
                                <img src="images/unpacking.png" alt="" title="" width="" height="">
                            </a>
                            <a href="#" class="category-name-ok">बॉलीवुड</a>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                     </div>
                  <!-- //SECTION NEWS -->
                  <!-- SECTION NEWS -->
                     <div class="listing-news-ok">
                        <div class="heading-category-ok">
                            <a href="#" class="category-img-ok">
                                <img src="images/unpacking.png" alt="" title="" width="" height="">
                            </a>
                            <a href="#" class="category-name-ok">बॉलीवुड</a>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                        <div class="listing-style-one">
                            <a href="#"><h3 class="category-headline">फ्लाइट से पैसेंजर्स का सामान उतारना भूला सिंगापुर एयरपोर्ट पर इंतजार करते रहे लोग; फ्लाइट बेंगलुरु रवाना हुई, फिर यू-टर्न लिया</h3></a>
                            <a href="#" class="category-type">ओपिनियन</a>
                            <div class="listing-one-img-container">
                              <a href="#"><img src="https://images.bhaskarassets.com/web2images/521/2023/10/19/untitled-design-56_1697685317.jpg" alt="" title="" width="144" height="104" class="listing-one-img"></a>
                              <a href="#"><img src="https://odishatv.in/commondir/images/svg/video-icon-red.svg" alt="" title="" width="20" height="20" class="listing-one-icon"></a>
                           </div>
                        </div>
                     </div>
                  <!-- //SECTION NEWS -->
               </div>
                <?php include 'includes/right_sidebar.php'; ?>
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
        <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>