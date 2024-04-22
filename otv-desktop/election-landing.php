<?php include 'includes/header.php';?>
<style>
/* WEBSTORY */
section.bdn-webstories {
margin-bottom: 30px;
}
.webstory-item {
position: relative;
}
.webstory-item img {
width: 100%;
height: 370px;
object-fit: cover;
}
.webstory-content {
position: absolute;
left: 0;
bottom: 0;
background-image: linear-gradient(transparent, black);
padding: 7.5px;
text-align: center;
display: block;
}
.webstory-content h4 {
background-color: #f4c219;
color: #fff;
text-align: center;
width: fit-content;
font-size: 12px;
text-transform: uppercase;
font-weight: 700;
line-height: 20px;
padding: 0px 5px;
border-radius: 3px;
margin: 0 auto;
}
.webstory-content h5 {
color: #fff;
font-weight: 700;
font-size: 13px;
margin: 10px 0px;
}
.bdn-heading-block {
    margin: 0px 0px 12px 0px;
    padding: 0px;
    display: inline-block;
    width: -webkit-fill-available;
}
h2.bdn-heading-one {
    color: #000;
    font-size: 20px;
    font-weight: 700;
    text-transform: capitalize;
    float: left;
    width: fit-content;
    position: relative;
    padding-left: 10px;
}
h2.bdn-heading-one:before {
    content: "";
    background-color: #f00404;
    height: 22px;
    width: 5px;
    position: absolute;
    left: 0;
    top: 0;
}
a.bdn-more {
    float: right;
    color: #262626;
    text-transform: uppercase;
    border: #dc2229 solid 1px;
    font-size: 13px;
    margin: 19px 7.5px 0px 0px;
    padding: 0px 5px;
    line-height: 19px;
    border-radius: 12px;
}
/* //WEBSTORY */
/* NEWS GRAY BG */
section.news-gray-bg {
    float: left;
    width: 100%;
    background-color: #dcdcdc;
}
.bdn-card-eight {
    position: relative;
    padding-left: 234px;
    min-height: 126px;
    margin-bottom: 18px;
}
img.bdn-card-eight-img {
    position: absolute;
    left: 0;
    top: 0;
}
.bdn-card-eight h4 {
    color: #000;
    font-size: 18px;
    line-height: 23px;
    position: relative;
    margin-bottom: 10px;
}
/* //NEWS GRAY BG */
/* VIDEOS */
.bdn-card-nine {
    position: relative;
    background-color: #fff;
    border-radius: 5px;
}
img.bdn-card-nine-img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 5px;
}
.bdn-card-nine-image-container {
    position: relative;
}
img.bdn-card-nine-icon {
    position: absolute;
    left: 15px;
    bottom: 15px;
}
.bdn-card-nine h4 {
    color: #000;
    font-size: 22px;
    line-height: 30px;
    position: relative;
    padding: 28px 15px;
    font-weight: 700;
}
.bdn-card-nine h4 span {
    border-left: 1px solid #000;
    margin-left: 10px;
    padding-left: 10px;
    font-weight: 400;
}
.bdn-card-ten {
    position: relative;
    background-color: #fff;
    border-radius: 5px;
    margin-bottom: 15px;
}
img.bdn-card-ten-img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 5px;
}
.bdn-card-ten-image-container {
    position: relative;
}
img.bdn-card-ten-icon {
    position: absolute;
    left: 15px;
    bottom: 15px;
}
.bdn-card-ten h4 {
    color: #000;
    font-size: 14px;
    line-height: 20px;
    position: relative;
    padding: 5px;
    font-weight: 400;
}
.bdn-card-ten h4 span {
    border-left: 1px solid #000;
    margin-left: 10px;
    padding-left: 10px;
    font-weight: 400;
}
/* //VIDEOS */
/* OTHER ELECTION NEWS */
.bdn-card-seven {
    position: relative;
    margin-bottom: 15px;
}
img.bdn-card-seven-img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
.bdn-card-seven h4 {
    padding: 10px;
    font-size: 18px;
    position: absolute;
    left: 0;
    bottom: 0;
    background-image: linear-gradient(transparent, black, black);
    color: #fff;
    font-weight: 400;
    line-height: 23px;
    margin: 0px;
}
.right-border {
    border-right: 1px solid #d7d0d0;
}
.bottom-border {
    border-bottom: solid 1px #e1dbdb;
}
.bdn-card-seven.bottom-margin-seven {
    margin-bottom: 35px;
}
.bdn-card-two {
         position: relative;
         padding-right: 106px;
         min-height: 54px;
         display: inline-block;
         margin-bottom: 12px;
         }
         img.bdn-card-two-img {
         width: 96px;
         height: 54px;
         position: absolute;
         right: 0;
         top: 0;
         border-radius: 3px;
         }
         .bdn-card-two h4 {
         font-size: 15px;
         text-decoration: none;
         display: block;
         color: #000;
         font-weight: 400;
         line-height: 19px;
         margin-bottom: 5px;
         }
         .bdn-card-two ul {
         margin: 0px;
         padding: 0px;
         }
         .bdn-card-two ul li {
         list-style-type: none;
         float: left;
         text-transform: uppercase;
         font-size: 12px;
         color: #7c8181;
         }
         .bdn-card-two li a {
         color: #db4113;
         margin-right: 23px;
         position: relative;
         }
         .bdn-card-two ul li a:after {
         content: "";
         background-color: #b5afaf;
         position: absolute;
         width: 8px;
         height: 8px;
         border-radius: 50%;
         right: -16px;
         top: 3px;
         }
         .bdn-card-two.bottom-border {
    padding-bottom: 20px;
    margin-bottom: 23px;
}
.bdn-card-two.bottom-margin-two {
    margin-bottom: 34px;
}
.bdn-card-two.bottom-sort-border:after {
    width: 144px;
    background-color: #e1dbdb;
    height: 1px;
    content: "";
    display: block;
    margin: 18px 0px 10px 0px;
}
/* //OTHER ELECTION NEWS */
/* BREADCRUMB */
ul.live-details-bredcum {
    margin: -13px 0px 9px 0px;
    padding: 0px;
    position: relative;
    display: block;
    float: left;
    width: 100%;
}
ul.live-details-bredcum li {
    list-style-type: none;
    display: inline-block;
    color: #7b0505;
    font-size: 10px;
    position: relative;
    margin-right: 20px;
    font-family: 'Libre Franklin', sans-serif;
    font-weight: normal;
    text-transform: uppercase;
}
ul.live-details-bredcum li a {
    color: #7b0505;
}
ul.live-details-bredcum li:before {
    content: "";
    background-image: url(https://odishatv.in/commondir/images/svg/bread-crumb.svg);
    margin-left: 8px;
    display: block;
    width: 9px;
    height: 7px;
    background-repeat: no-repeat;
    position: absolute;
    right: -16px;
    top: 4px;
}
ul.live-details-bredcum li:last-child:before {
    display: none;
}
/* //BREADCRUMB */
</style>
<ul class="live-details-bredcum">
  <li><a href="https://odishatv.in/">Home</a></li>
  <li><a href="https://odishatv.in/news">News</a></li><li><a href="https://odishatv.in/odisha">Odisha</a></li><li>Odisha shivers as mercury drops below 10 degrees in several places</li>
</ul>
<section class="news-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="bdn-card-eight">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/heatwave_1686888090.jpg" alt="" title="" width="224" height="126" class="bdn-card-eight-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bdn-card-eight">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/heatwave_1686888090.jpg" alt="" title="" width="224" height="126" class="bdn-card-eight-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bdn-card-eight">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/heatwave_1686888090.jpg" alt="" title="" width="224" height="126" class="bdn-card-eight-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bdn-webstories">
 <div class="container">
    <div class="bdn-heading-block">
       <a href="#">
          <h2 class="bdn-heading-one">Web stories</h2>
       </a>
       <a href="#" class="bdn-more">more</a>
    </div>
    <div class="row">
       <div class="col-lg-15">
          <div class="webstory-item">
             <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/recent_photo_1687242704.webp" alt="" title=""></a>
             <div class="webstory-content">
                <a href="#"><h4>world news</h4></a>
                 <a href="#">
                    <h5>7 Simple Home Remedies for Longer Hair</h5>
                 </a>
            </div>
          </div>
       </div>
       <div class="col-lg-15">
          <div class="webstory-item">
             <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/recent_photo_1687242704.webp" alt="" title=""></a>
             <div class="webstory-content">
                <a href="#"><h4>world news</h4></a>
                 <a href="#">
                    <h5>7 Simple Home Remedies for Longer Hair</h5>
                 </a>
            </div>
          </div>
       </div>
       <div class="col-lg-15">
          <div class="webstory-item">
             <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/recent_photo_1687242704.webp" alt="" title=""></a>
             <div class="webstory-content">
                <a href="#"><h4>world news</h4></a>
                 <a href="#">
                    <h5>7 Simple Home Remedies for Longer Hair</h5>
                 </a>
            </div>
          </div>
       </div>
       <div class="col-lg-15">
          <div class="webstory-item">
             <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/recent_photo_1687242704.webp" alt="" title=""></a>
             <div class="webstory-content">
                <a href="#"><h4>world news</h4></a>
                 <a href="#">
                    <h5>7 Simple Home Remedies for Longer Hair</h5>
                 </a>
            </div>
          </div>
       </div>
       <div class="col-lg-15">
          <div class="webstory-item">
             <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/recent_photo_1687242704.webp" alt="" title=""></a>
             <div class="webstory-content">
                <a href="#"><h4>world news</h4></a>
                 <a href="#">
                    <h5>7 Simple Home Remedies for Longer Hair</h5>
                 </a>
            </div>
          </div>
       </div>
    </div>
 </div>
</section>
<section class="bdn-photo-video">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bdn-heading-block">
                   <a href="#">
                      <h2 class="bdn-heading-one">videos</h2>
                   </a>
                   <a href="#" class="bdn-more">more</a>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="bdn-card-nine">
                            <div class="bdn-card-nine-image-container">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" width="" height="" alt="" title="" class="bdn-card-nine-img"></a>
                                <a href="#"><img src="images/svg/bdn-video-icon.svg" width="42" height="42" alt="" title="" class="bdn-card-nine-icon"></a>
                            </div>
                            <a href=""><h4>Marinated millet, stuffed mushrooms and risotto on White House State Dinner menu for PM Modi<span>53:08</span></h4></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bdn-card-ten">
                            <div class="bdn-card-ten-image-container">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" width="" height="" alt="" title="" class="bdn-card-ten-img"></a>
                                <a href="#"><img src="images/svg/bdn-video-icon.svg" width="20" height="20" alt="" title="" class="bdn-card-ten-icon"></a>
                            </div>
                            <a href=""><h4>Marinated millet, stuffed mushrooms and risotto on White House<span>53:08</span></h4>
                        </div>
                        <div class="bdn-card-ten">
                            <div class="bdn-card-ten-image-container">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" width="" height="" alt="" title="" class="bdn-card-ten-img"></a>
                                <a href="#"><img src="images/svg/bdn-video-icon.svg" width="20" height="20" alt="" title="" class="bdn-card-ten-icon"></a>
                            </div>
                            <a href=""><h4>Marinated millet, stuffed mushrooms and risotto on White House<span>53:08</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bdn-heading-block">
                   <a href="#">
                      <h2 class="bdn-heading-one">photos</h2>
                   </a>
                   <a href="#" class="bdn-more">more</a>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="bdn-card-nine">
                            <div class="bdn-card-nine-image-container">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" width="" height="" alt="" title="" class="bdn-card-nine-img"></a>
                                <a href="#"><img src="images/svg/bdn-photo-icon.svg" width="42" height="42" alt="" title="" class="bdn-card-nine-icon"></a>
                            </div>
                            <a href=""><h4>Marinated millet, stuffed mushrooms and risotto on White House State Dinner menu for<span>07 images</span></h4></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bdn-card-ten">
                            <div class="bdn-card-ten-image-container">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" width="" height="" alt="" title="" class="bdn-card-ten-img"></a>
                                <a href="#"><img src="images/svg/bdn-photo-icon.svg" width="20" height="20" alt="" title="" class="bdn-card-ten-icon"></a>
                            </div>
                            <a href=""><h4>Marinated millet, stuffed mushrooms and risotto on White House<span>07 images</span></h4>
                        </div>
                        <div class="bdn-card-ten">
                            <div class="bdn-card-ten-image-container">
                                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" width="" height="" alt="" title="" class="bdn-card-ten-img"></a>
                                <a href="#"><img src="images/svg/bdn-photo-icon.svg" width="20" height="20" alt="" title="" class="bdn-card-ten-icon"></a>
                            </div>
                            <a href=""><h4>Marinated millet, stuffed mushrooms and risotto on White House<span>07 images</span></h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="other-election-news">
  <div class="container">
    <div class="bdn-heading-block">
       <a href="#">
          <h2 class="bdn-heading-one">Other Election news</h2>
       </a>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="common-white-bg">
                <div class="bdn-heading-block">
                   <a href="#">
                      <h2 class="bdn-heading-one">science</h2>
                   </a>
                   <a href="#" class="bdn-more">more</a>
                </div>
                <div class="bdn-card-seven bottom-margin-seven">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" alt="" title="" width="" height="" class="bdn-card-seven-img"></a>
                    <a href="#"><h4>Leaders' Wishes and Global Celebration: International Yoga Day 2023 Highlights</h4></a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="common-white-bg">
                <div class="bdn-heading-block">
                   <a href="#">
                      <h2 class="bdn-heading-one">science</h2>
                   </a>
                   <a href="#" class="bdn-more">more</a>
                </div>
                <div class="bdn-card-seven bottom-margin-seven">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" alt="" title="" width="" height="" class="bdn-card-seven-img"></a>
                    <a href="#"><h4>Leaders' Wishes and Global Celebration: International Yoga Day 2023 Highlights</h4></a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="common-white-bg">
                <div class="bdn-heading-block">
                   <a href="#">
                      <h2 class="bdn-heading-one">science</h2>
                   </a>
                   <a href="#" class="bdn-more">more</a>
                </div>
                <div class="bdn-card-seven bottom-margin-seven">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/heatwave_1686888090.jpg" alt="" title="" width="" height="" class="bdn-card-seven-img"></a>
                    <a href="#"><h4>Leaders' Wishes and Global Celebration: International Yoga Day 2023 Highlights</h4></a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two bottom-sort-border">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
                <div class="bdn-card-two">
                   <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/heatwave_1686888090.jpg" alt="" title="" width="96" height="54" class="bdn-card-two-img"></a>
                   <a href="#">
                      <h4>Go First Insolvency: What Should The Airline Do Next to The Highway?</h4>
                   </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'includes/footer.php';?>