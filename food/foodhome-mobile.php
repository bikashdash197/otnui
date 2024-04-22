<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/common_headtags.php'; ?>
<style type="text/css">
section {
    float: left;
    width: 100%;
}
/* Weight loss health Tips */
section.weightloss-sec {
margin-bottom: 15px;
}
section.healthtips-sec {
margin-bottom: 15px;
}
.tips-sidebar {
    padding: 10px;
    position: relative;
    border-radius: 5px;
    overflow: hidden;
}
.tips-sidebar.weightloss {
    background-color: #fcffd0;
}
.tips-sidebar:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-bottom: 25px solid #99e1c4;
    border-right: 25px solid transparent;
    position: absolute;
    right: 0;
    top: 0;
}
h4.common-heading-four {
    position: relative;
    display: block;
    color: #000;
    font-size: 18px;
    font-weight: 700;
    border-bottom: solid 4px #b9f998;
    margin: 0px;
    padding: 0px 0px 0px 35px;
    line-height: 50px;
}
h4.common-heading-four:before {
    content: "";
    width: 22px;
    height: 19px;
    position: absolute;
    background-image: url(https://odishatv.in/commondir/images/svg/finger-pointe.svg);
    left: 0;
    top: 15px;
    background-repeat: no-repeat;
}
h4.common-heading-four:after {
    content: "";
    width: 9px;
    height: 12px;
    position: absolute;
    background-image: url(https://odishatv.in/commondir/images/svg/arrow.svg);
    right: 0;
    top: 22px;
    background-repeat: no-repeat;
}
.tips-sidebar ul {
    margin: 0px;
    padding: 0px;
}
.tips-sidebar ul li {
    list-style-type: none;
    float: left;
    padding: 12px 0px;
    border-bottom: solid 1px #d5ffca;
}
.tips-sidebar ul li a {
    text-decoration: none;
    display: block;
    color: #746767;
    font-size: 17px;
}
.tips-sidebar:after {
    content: "";
    display: block;
    position: absolute;
    right: -18px;
    top: -3px;
    background-color: #ffffff;
    width: 45px;
    height: 20px;
    transform: rotate(45deg);
}
.tips-sidebar.health {
    background-color: #bdffe3;
}
/* //Weight loss health Tips */
/* Trending */
section.trending-slide-sec {
    margin-bottom: 10px;
}
.trending-slide {
    display: inline-block;
    width: 100%;
}
.trending-slide h3 {
    position: relative;
    margin: 10px 0px 0px 0px;
    padding: 0px;
    text-transform: uppercase;
    font-size: 18px;
    color: #000;
    font-weight: 700;
    float: left;
    width: fit-content;
    margin-right: 25px;
}
.trending-slide h3:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-top: 5px solid transparent;
    border-left: 9px solid black;
    border-bottom: 5px solid transparent;
    position: absolute;
    top: 3px;
    right: -15px;
}
.trending-slide ul {
    margin: 0px;
    padding: 0px;
    overflow-y: scroll;
    height: 34px;
}
.trending-slide ul li {
    list-style-type: none;
        display: table-cell;
}
.trending-slide ul li a {
    text-decoration: none;
    display: block;
    border: solid 2px #e5e5e5;
    color: #000;
    text-transform: capitalize;
    font-size: 14px;
    line-height: 30px;
    padding: 0px 10px;
    border-radius: 22px;
    width: max-content;
    margin-right: 5px;
}
/* //Trending */
/* date and Share */
.date-n-share {
    display: block;
    float: left;
    width: 100%;
    position: relative;
    margin: 7px 0px;
    }
    ul.otv-cat-time {
        float: left;
        margin: 0;
        padding: 0;
    }
    ul.otv-cat-time li {
        list-style-type: none;
        float: left;
        color: #9b9393;
        font-size: 14px;
        margin-right: 15px;
    }
    ul.otv-cat-time li a {
        text-decoration: none;
        display: block;
        color: #9b9393;
        font-size: 14px;
        position: relative;
    }
    ul.otv-cat-time li a:after {
        content: "";
        display: block;
        position: absolute;
        right: -9px;
        top: 4px;
        width: 2px;
        height: 10px;
        background-color: #b9b7b780;
    }
    ul.otv-cat-share-icon {
        float: right;
        padding: 0;
        margin: -2px 0px 0px 0px;
    }
    ul.otv-cat-share-icon li {
        display: inline-block;
        margin-right: 7px;
        position: relative;
    }
    li.otv-share-social-media-add a {
        cursor: pointer;
        display: block;
    }
    ul.otv-cat-share-icon li img {
        width: 20px;
        height: 20px;
    }
    ul.otv-article-share-style-more-one {
        position: absolute;
        right: calc(100% + 5px);
        bottom: -7px;
        border: 1px solid #aaaaaa45;
        box-shadow: 0 2px 8px #9a9797;
        display: none;
        background-color: #fff;
        margin: 0px;
        width: max-content;
        height: 36px;
        overflow: hidden;
        padding: 0px 8px 0px 8px;
    }
    ul.otv-article-share-style-more-one li {
        list-style-type: none;
        float: left;
        margin: 0px 12.5px;
        padding: 0px;
        border: none !important;
        margin-left: 0px !important;
        padding-left: 0px !important;
    }
    ul.otv-article-share-style-more-one li a {
        text-decoration: none;
        display: block;
        line-height: 21px;
        padding: 6px 0px;
    }
    ul.otv-cat-share-icon li img {
        width: 20px;
        height: 20px;
    }
/* //date and Share */
/* Spotlight */
section.mobile-home {
    float: left;
    width: 100%;
}
.spotrlight-story {
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
}
.mobilebig-story {
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
}
img.spotrlight-story-thumbnail {
    max-width: 100%;
    height: auto;
}
h1.featured-headline {
    font-size: 24px;
    font-weight: 400;
    line-height: 27px;
    font-family: Faustina,serif;
    color: #000;
    margin: 10px 0px 0px 0px;
    padding: 0px;
}
h2.featured-headline {
    font-size: 24px;
    font-weight: 400;
    line-height: 27px;
    font-family: Faustina,serif;
    color: #000;
    margin: 10px 0px 0px 0px;
    padding: 0px;
}
/* //Spotlight */
/* Listing One */
.listing-item-one {
    display: inline-block;
    width: 100%;
    padding-bottom: 14px;
    margin-bottom: 18px;
    border-bottom: solid 2px #e4e4e4;
    position: relative;
    padding-left: 106px;
}
img.listing-item-one-image {
    position: absolute;
    left: 0;
    top: 0;
}
.listing-item-one h4 {
    margin: 0px;
    padding: 0px;
    color: #000;
    font-size: 15px;
    font-weight: 700;
}
.news-item-listings .listing-item-one:last-child {
    border-bottom: none;
    margin-bottom: 0px;
    padding-bottom: 0px;
}
.news-item-listings {
    margin-bottom: 10px;
}
/* //Listing One */
h3.recipe-day-heading {
    margin: 0px 0px 15px 0px;
    padding: 0px;
    color: #000;
    text-transform: uppercase;
    font-size: 22px;
    font-weight: 700;
    position: relative;
}
h3.recipe-day-heading:after {
    content: "";
    background-color: #d5d5d5;
    width: 100%;
    height: 3px;
    position: absolute;
    display: block;
    top: 10px;
    left: 0;
    z-index: -1;
}
h3.recipe-day-heading span {
    background-color: #fff;
    padding: 0px 10px 0px 0px;
}
h3.linked-heading {
    margin: 0px 0px 15px 0px;
    padding: 0px;
    color: #000;
    text-transform: uppercase;
    font-size: 22px;
    font-weight: 700;
    position: relative;
}
h3.linked-heading:after {
    content: "";
    background-image: url(https://odishatv.in/commondir/images/svg/long-arrow.svg);
    display: inline-block;
    width: 13px;
    height: 5px;
    background-repeat: no-repeat;
    margin: 0px 0px 5px 10px;
}
h3.linked-heading-white {
    margin: 0px 0px 15px 0px;
    padding: 0px;
    color: #fff;
    text-transform: uppercase;
    font-size: 22px;
    font-weight: 700;
    position: relative;
}
h3.linked-heading-white:after {
    content: "";
    background-image: url(https://odishatv.in/commondir/images/svg/more-arrow-icon.svg);
    display: inline-block;
    width: 16px;
    height: 7px;
    background-repeat: no-repeat;
    margin: 0px 0px 4px 10px;
}
/* Recipe 1 */

.food-card-container {
    background-color: #5a3b38;
    border-radius: 12px;
    height: auto;
    padding: 10px;
    margin-bottom: 15px;
}
.food-card-img {
    border-radius: 18px;
    width: 100%;
    height: 225px;
    object-fit: contain;
}
.food-card {
    margin-bottom: 10px;
    position: relative;
}
h3.recipe-name {
    margin: 0px;
    color: #fff;
    font-size: 28px;
}
p.recipe-description {
    color: #fff;
    font-size: 20px;
    line-height: 26px;
    font-family: Faustina,serif;
    font-weight: 400;
}
.customise-recipe-details {
    background-color: #4c2d2a;
    border-radius: 12px;
    padding: 10px;
    box-shadow: rgb(50 50 93 / 25%) 0px 30px 60px -12px inset, rgb(0 0 0 / 30%) 0px 18px 36px -18px inset;
}
.customise-recipe h6 {
    border-bottom: 2px solid yellow;
    color: yellow;
    font-size: 17px;
    margin: 0px 0px 10px 0px;
    padding: 10px 10px 10px 0px;
    display: inline-block;
}
.customise-recipe p {
    color: #fff;
    padding: 0px;
    margin: 0px;
    font-weight: normal;
}
.customise-recipe h6:after {
    content: "";
    background-image: url(https://odishatv.in/commondir/images/svg/dropdown-menu-white.svg);
    display: inline-block;
    width: 13px;
    height: 12px;
    background-repeat: no-repeat;
    margin: 0px 0px 0px 20px;
}
.ribbon {
    color: black;
    background-color: #ffed4a;
    font-size: 16px;
    font-weight: 600;
    left: 0px;
    clip-path: polygon(100% 0, 84% 91%, 84% 100%, 0 100%, 0 0);
    width: 220px;
    border-top: 12px;
    height: 40px;
    overflow: hidden;
    margin: 0px 0px 10px -16px;
}
.ribbon h6 {
    line-height: 40px;
    margin: 0px;
    padding: 0px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    padding-left: 15px;
    color: #000;
}
/* //Recipe 1 */
/* Recipe Slide */
.recipe-drag-outer {
height: 225px;
display: flex;
width: auto;
overflow-x: scroll;
margin-bottom: 20px;
}
.recipe-drag-outer img {
    border-radius: 12px;
    height: 225px;
    width: 400px;
    object-fit: cover;
}
.recipe-card {
position: relative;
margin: 0px 5px 0px 0px;
}
.date-details {
    position: absolute;
    left: 0;
    bottom: 0;
    padding: 10px;
}
.date-details {
    position: absolute;
    left: 0;
    bottom: 0;
    background: linear-gradient(#0000,#000,rgb(0 0 0));
    width: 100%;
    border-radius: 0px 0px 12px 12px;
}
.date-details h3 {
    margin: 0px;
    padding: 0px;
    color: #fff;
    text-transform: capitalize;
    font-size: 21px;
    font-weight: normal;
    font-family: Faustina,serif;
}
.date-details ul {
    margin: 0px 0px 6px 0px;
    padding: 0px;
}
.date-details ul li {
    list-style-type: none;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    margin-right: 10px;
}
.date-details ul li a {
    color: #fff;
}
/* //Recipe Slide */
/* PHOTOS */
section.bd-photos {
    background-color: #3f8b77;
    padding: 15px 0px;
}
.photo-items {
    position: relative;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px;
    margin: 0px 6px 17px 0px;
    display: inline-block;
}
.photo-items:before {
    content: "";
    display: block;
    position: absolute;
    width: 90%;
    height: 10px;
    background-color: #65c6ffad;
    bottom: -10px;
    right: 0;
    left: 0;
    margin: 0 auto;
    border-radius: 0px 0px 10px 10px;
    z-index: 1;
}
.photo-items:after {
    content: "";
    display: block;
    position: absolute;
    width: 80%;
    height: 17px;
    background-color: #cde9bf9c;
    bottom: -17px;
    right: 0;
    left: 0;
    margin: 0 auto;
    border-radius: 0px 0px 10px 10px;
    z-index: 0;
}
.photo-items img {
    width: 277px;
    height: 156px;
    object-fit: cover;
}
.photo-items h3 {
    margin: 10px 0px;
    padding: 0px;
    color: #000;
    font-size: 16px;
    font-weight: 700;
    line-height: 22px;
}
.photos-drag {
    height: 240px;
    width: auto;
    display: flex;
    overflow-x: scroll;
    margin-bottom: 20px;
}
/* //PHOTOS */
/* VIDEOS */
section.bd-videos {
    background-color: #352525;
    padding: 20px 0px 0px 0px;
    margin-bottom: 15px;
}
a.video-item-two-play {
    background-color: #c7c7c7;
    color: #000;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    line-height: 30px;
    display: block;
    width: fit-content;
    padding: 0px 8px 0px 23px;
    border-radius: 10px;
    position: absolute;
    bottom: 10px;
    left: 10px;
}
.video-item-two-play:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-left: 13px solid red;
    border-bottom: 7px solid transparent;
    position: absolute;
    left: 7px;
    top: 8px;
}
span.video-item-two-time {
    position: absolute;
    right: 10px;
    bottom: 15px;
    color: #fff;
    font-size: 12px;
}
span.video-item-two-time {
    position: absolute;
    right: 10px;
    bottom: 15px;
    color: #fff;
    font-size: 12px;
}
span.video-item-two-time img {
    margin-right: 5px;
}
.video-item-two {
    position: relative;
    margin-right: 10px;
}
.video-item-two-image {
    position: relative;
}
img.video-item-two-thumbnail {
    width: 266px;
    height: 174px;
    border-radius: 10px;
    object-fit: cover;
}
.video-item-two h3 {
    color: #fff;
    margin: 10px 0px;
    padding: 0px;
    font-size: 16px;
    font-weight: 700;
    line-height: 22px;
}
.videos-dragdiv {
    /* height: 240px; */
    width: auto;
    display: flex;
    overflow-x: scroll;
    margin-bottom: 20px;
}
/* //VIDEOS */
</style>
</head>
<body>
<?php include 'includes/food_header_mobile.php';?>
<section class="trending-slide-sec">
    <div class="container">
        <div class="trending-slide">
            <h3>trending</h3>
            <ul>
                <li><a href="">horoscope</a></li>
                <li><a href="">horoscope</a></li>
                <li><a href="">horoscope today</a></li>
                <li><a href="">horoscope today</a></li>
                <li><a href="">horoscope today</a></li>
                <li><a href="">horoscope</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="mobile-shome">
    <div class="container">
        <div class="spotrlight-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h1 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h1></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="news-item-listings">
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
        </div>
        <!-- RECIPE OF THE DAY  -->
        <h3 class="recipe-day-heading"><span>Recipe of the Day</span></h3>
        <!-- Recipe 1 -->
        <div class="food-card-container">
            <div class="food-card">
                <img src="https://source.unsplash.com/300x200/?burger/" alt="" width="400" height="225" title="" class="food-card-img">
            </div>
            <div class="ribbon">
                <h6>Recipe of the day</h6>
            </div>
            <h3 class="recipe-name">Thekua</h3>
            <p class="recipe-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel pulvinar
                erat,
                id ullamcorper nunc. Proin lacinia congue faucibus.</p>
            <div class="customise-recipe-details">
                <div class="customise-recipe">
                    <a href=""><h6>SEND IN YOUR RECIPE</h6></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel pulvinar erat</p>
                </div>
            </div>
        </div>
        <!-- //Recipe 1 -->
        <!-- Recipe Slide -->
        <div class="recipe-drag-outer">
            <div class="recipe-card">
                <a href=""><img src="https://source.unsplash.com/220x320/?snacks/"></a>
                <div class="date-details">
                    <ul>
                        <li><a href="">Food & Drinks</a></li>
                        <li>OCT 7, 2022</li>
                    </ul>
                    <a href=""><h3>5easy traditional recipe </h3></a>
                </div>
            </div>
            <div class="recipe-card">
                <a href=""><img src="https://source.unsplash.com/220x320/?snacks/"></a>
                <div class="date-details">
                    <ul>
                        <li><a href="">Food & Drinks</a></li>
                        <li>OCT 7, 2022</li>
                    </ul>
                    <a href=""><h3>5easy traditional recipe </h3></a>
                </div>
            </div>
            <div class="recipe-card">
                <a href=""><img src="https://source.unsplash.com/220x320/?snacks/"></a>
                <div class="date-details">
                    <ul>
                        <li><a href="">Food & Drinks</a></li>
                        <li>OCT 7, 2022</li>
                    </ul>
                    <a href=""><h3>5easy traditional recipe </h3></a>
                </div>
            </div>
        </div>
        <!-- //Recipe Slide -->
        <div class="news-item-listings">
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
        </div>
        <!-- //RECIPE OF THE DAY  -->
        <!-- Weight Loss  -->
        <a href="#"><h3 class="linked-heading"><span>Weight loss</span></h3></a>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <!-- //Weight Loss  -->
        <!-- Health Tips  -->
        <a href="#"><h3 class="linked-heading"><span>health tips</span></h3></a>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <!-- //Health Tips  -->
        <!-- Home Remedies  -->
        <a href="#"><h3 class="linked-heading"><span>Home Remedies</span></h3></a>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="news-item-listings">
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
        </div>
        <!-- //Home Remedies  -->
        <!-- cooking tips  -->
        <a href="#"><h3 class="linked-heading"><span>cooking tips</span></h3></a>
        <div class="mobilebig-story">
            <a href=""><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1672151857.jpg" alt="" title="" width="400" height="225" class="spotrlight-story-thumbnail"></a>
            <a href=""><h2 class="featured-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h2></a>
            <!-- SHARE -->
            <div class="date-n-share">
               <ul class="otv-cat-time">
                  <li><a href="">World News</a></li>
                  <li>17 March 2022</li>
               </ul>
               <ul class="otv-cat-share-icon">
                  <li class="otv-share-social-media-add">
                     <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                     <ul class="otv-article-share-style-more-one" style="display: none;">
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                        <li>
                           <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- //SHARE -->
        </div>
        <div class="news-item-listings">
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
           <div class="listing-item-one">
              <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
              <a href="#">
                 <h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4>
              </a>
              <!-- SHARE -->
              <div class="date-n-share">
                 <ul class="otv-cat-time">
                    <li><a href="">World News</a></li>
                    <li>17 March 2022</li>
                 </ul>
                 <ul class="otv-cat-share-icon">
                    <li class="otv-share-social-media-add">
                       <a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg"></a>
                       <ul class="otv-article-share-style-more-one" style="display: none;">
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                          <li>
                             <a title="Share on facebook" href="#"><img src="https://odishatv.in/commondir/images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                             </a>
                          </li>
                       </ul>
                    </li>
                 </ul>
              </div>
              <!-- //SHARE -->
           </div>
        </div>
        <!-- //cooking tips  -->
    </div>
</section>
<section class="bd-photos">
    <!-- PHOTOS  -->
        <div class="container">
            <h3 class="linked-heading-white"><span>photos</span></h3>
            <div class="photos-drag">
                <div class="photo-items">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" width="400" height="225"></a>
                    <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                </div>
                <div class="photo-items">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" width="400" height="225"></a>
                    <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                </div>
                <div class="photo-items">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" width="400" height="225"></a>
                    <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                </div>
                <div class="photo-items">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" width="400" height="225"></a>
                    <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                </div>
            </div>
        </div>
        <!-- //PHOTOS  -->
</section>
<section class="bd-videos">
    <div class="container">
        <h3 class="linked-heading-white"><span>videos</span></h3>
        <!-- Video 1 -->
        <div class="food-card-container">
            <div class="food-card">
                <img src="https://source.unsplash.com/300x200/?burger/" alt="" width="400" height="225" title="" class="food-card-img">
                <a href="#" class="video-item-two-play">play</a>
                <span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
            </div>
            <div class="ribbon">
                <h6>recipe video</h6>
            </div>
            <h3 class="recipe-name">Thekua</h3>
            <p class="recipe-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel pulvinar
                erat, id ullamcorper nunc. Proin lacinia congue faucibus.</p>
        </div>
        <!-- //Video 1 -->
        <!-- Video slide -->
        <div class="videos-dragdiv">
            <div class="video-item-two">
                <div class="video-item-two-image">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-two-thumbnail"></a>
                    <a href="#" class="video-item-two-play">play</a>
                    <span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
                </div>
                <a href="#"><h3>Achari chicken tikka recepies | how to make achhari chicken tikka</h3></a>
            </div>
            <div class="video-item-two">
                <div class="video-item-two-image">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-two-thumbnail"></a>
                    <a href="#" class="video-item-two-play">play</a>
                    <span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
                </div>
                <a href="#"><h3>Achari chicken tikka recepies | how to make achhari chicken tikka</h3></a>
            </div>
            <div class="video-item-two">
                <div class="video-item-two-image">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-two-thumbnail"></a>
                    <a href="#" class="video-item-two-play">play</a>
                    <span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
                </div>
                <a href="#"><h3>Achari chicken tikka recepies | how to make achhari chicken tikka</h3></a>
            </div>
        </div>
        <!-- //Video slide -->
    </div>
</section>
<section class="weightloss-sec">
    <div class="container">
        <div class="tips-sidebar weightloss">
            <a href="#"><h4 class="common-heading-four">weight loss Tips</h4></a>
            <ul>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="healthtips-sec">
    <div class="container">
        <div class="tips-sidebar health">
            <a href="#"><h4 class="common-heading-four">weight loss Tips</h4></a>
            <ul>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
            </ul>
        </div>
    </div>
</section>
<?php include 'includes/footer_common_mobile.php';?>
<script>
    <?php include 'includes/js_common_mobile.php';?>
</script>
</body>
</html>