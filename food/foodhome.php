<!DOCTYPE html>
<html>
<head>
<?php include 'includes/common_headtags.php'; ?>
<style type="text/css">
    /* PHOTO */
    section.photo-section {
        float: left;
        width: 100%;
        background-color: #408c78;
        padding: 18px 0px 47px 0px;
    }
    h2.food-heading-one {
        margin: 15px 0px;
        padding: 0px;
        color: #fff;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 700;
        position: relative;
    }
    h2.food-heading-one:after {
        content: "";
        background-color: #fff;
        width: 180px;
        height: 3px;
        position: absolute;
        display: initial;
        margin-left: 10px;
        margin-top: 10px;
    }
    h2.food-heading-two {
    margin: 0px 0px 15px 0px;
    padding: 0px;
    color: #000;
    text-transform: uppercase;
    font-size: 22px;
    font-weight: 700;
    position: relative;
    }
    h2.food-heading-two:after {
        content: "";
        background-color: #000;
        width: 180px;
        height: 3px;
        position: absolute;
        display: initial;
        margin-left: 10px;
        margin-top: 10px;
    }
    .photo-items {
        position: relative;
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    .photo-items img {
        width: 100%;
        height: 145px;
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
    /* //PHOTO */
    /* VIDEO */
    section.video-section {
        float: left;
        width: 100%;
        background-color: #212121;
        padding: 40px 0px;
    }
    section.video-section .container {
    	background-color: #372727;
    	border-radius: 30px;
    }
    .video-item-two {
        position: relative;
    }
    img.video-item-two-thumbnail {
        width: 100%;
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
    .video-item-two-image {
        position: relative;
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
    a.video-item-two-play:before {
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
    span.video-item-two-time img {
        margin-right: 5px;
    }
    span.video-item-two-time {
        position: absolute;
        right: 10px;
        bottom: 15px;
        color: #fff;
        font-size: 12px;
    }
    span.video-item-one-time img {
        margin-right: 5px;
    }
    span.video-item-one-time {
        position: absolute;
        right: 10px;
        bottom: 15px;
        color: #fff;
        font-size: 12px;
    }
    a.video-item-one-play {
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
    a.video-item-one-play:before {
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
    img.video-item-one-thumbnail {
        width: 480px;
        height: 270px;
        object-fit: cover;
    }
    .video-item-image {
        position: relative;
        width: 480px;
    }
    .video-item-one {
        position: relative;
        margin-bottom: 20px;
    }
    .video-item-one-content {
        background-color: #000;
        position: absolute;
        right: 0;
        top: 30px;
        width: calc(100% - 422px);
        height: 184px;
        border-radius: 12px;
        padding: 10px;
        overflow: hidden;
    }
    .video-item-one-content h3 {
        margin: 0px;
        padding: 0px;
        color: #fff;
        font-size: 27px;
        line-height: 36px;
        font-weight: 700;
    }
    .video-item-one-content p {
        line-height: 24px;
        color: #bfbfbf;
        font-size: 16px;
        margin-top: 10px;
    }
    span.video-item-one-tag {
        background-color: #91ff00;
        position: absolute;
        left: 481px;
        top: 0;
        line-height: 30px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 17px;
        padding: 0px 10px;
    }
    span.video-item-one-tag:before {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-bottom: 100px solid #91ff00;
        border-right: 73px solid transparent;
        position: absolute;
        right: -73px;
        top: 0;
    }
    /* //VIDEO */
    /* HEALTH */
    section.health-section {
        float: left;
        width: 100%;
        margin: 0px;
    }
    .tips-sidebar.health {
        background-color: #bdffe3;
    }
    .tips-sidebar {
        padding: 10px;
        position: relative;
        border-radius: 5px;
        overflow: hidden;
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
    .listing-item-one {
        display: inline-block;
        width: 100%;
        padding-bottom: 14px;
        margin-bottom: 18px;
        border-bottom: solid 1px #fff6f6;
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
    .listing-item-one p {
        text-decoration: none;
        display: block;
        color: #746767;
        font-size: 17px;
        margin: 0px;
        padding: 0px;
    }
    .news-item-listings .listing-item-one:last-child {
        border-bottom: none;
    }
    .listing-item-main {
        position: relative;
        border-radius: 5px;
        overflow: hidden;
    }
    .listing-item-main.health{
    	background-color: #d6ffec;
    }
    .listing-item-main img {
        max-width: 100%;
        height: 266px;
        object-fit: cover;
    }
    .listing-item-main h2 {
        margin: 10px;
        padding: 0px;
        color: #000;
        font-size: 24px;
        text-transform: capitalize;
        font-weight: 700;
        line-height: 27px;
    }
    .listing-item-main p {
        text-decoration: none;
        display: block;
        color: #746767;
        font-size: 17px;
        margin: 0px;
        padding: 0px 10px 10px 10px;
    }
    .tips-sidebar.weightloss {
        background-color: #fcffd0;
    }
    .listing-item-main.weightloss{
    	background-color: #f7ffce;
    }
    /* //HEALTH */
    section.food-sec {
        float: left;
        width: 100%;
        margin: 40px 0px 20px 0px;
    }
    img.food-logo-sidebar {
        margin-bottom: 20px;
    }
    h4.common-heading-five {
        margin: 0px 0px 15px 0px;
        padding: 0px;
        color: #000;
        text-transform: capitalize;
        font-size: 18px;
        font-weight: 700;
        position: relative;
    }
    h4.common-heading-five:after {
        content: "";
        background-color: #000;
        width: 101px;
        height: 3px;
        position: absolute;
        display: initial;
        margin-left: 10px;
        margin-top: 10px;
    }
    .food-sidebar-items {
        padding: 5px;
        border: solid 1px #fdf5f5;
        display: inline-block;
        width: 100%;
        margin: 0px 0px 20px 0px;
    }
    .popular-items {
        position: relative;
        background-color: #b4ffe5;
        border-radius: 5px;
        display: inline-block;
        width: 100%;
    }
    .popular-items img {
        width: 100%;
        height: 145px;
        object-fit: cover;
    }
    .popular-items h3 {
        margin: 10px;
        padding: 0px;
        color: #000;
        font-size: 19px;
        line-height: 24px;
    }
    .receipe-of-the-day {
        position: relative;
        margin-bottom: 20px;
        background-color: #f7ffce;
        border-radius: 10px;
        overflow: hidden;
    }
    img.receipe-of-day-thumbnail {
        width: 480px;
        height: 270px;
        object-fit: cover;
        float: right;
        border-radius: 9px;
    }
    .receipe-of-day-text {
        background-color: #792a0fbf;
        border-radius: 10px;
        position: absolute;
        left: 0;
        top: 20px;
        width: calc(100% - 422px);
        height: 230px;
        padding: 10px;
        overflow: hidden;
    }
    .receipe-of-day-text h3 {
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        margin: 0px 0px 10px 0px;
    }
    .receipe-of-day-text p {
        line-height: 24px;
        color: #ffffff;
        font-size: 16px;
        margin: 0px;
        padding: 0px;
        margin-top: 10px;
    }
    .send-your-recipe {
        margin: 10px;
        background-color: #5a1200;
        border-radius: 10px;
        padding: 10px;
    }
    .send-your-recipe h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        margin: 0px 0px 10px 0px;
        text-transform: capitalize;
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
    .spotlight-news-one {
    position: relative;
    margin-bottom: 30px;
    display: inline-block;
    width: 100%;
    }
    .featured-food {
        width: 100%;
        height: 280px;
        object-fit: cover;
        border-radius: 10px;
    }
    .spotlight-news-one h1 {
        margin: 10px 0px;
        padding: 0px;
        color: #000;
        font-weight: 700;
        font-size: 26px;
    }
    .date-n-share {
    display: block;
    float: left;
    width: 100%;
    position: relative;
    margin: 7px 0px;
    }
</style>
</head>
<body>
<?php include 'includes/food_header_desktop.php';?>
<section class="food-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
                <!--**************** LATEST NEWS ON FOOD ******************-->
                <h2 class="food-heading-two">latest news on food</h2>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="spotlight-news-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="featured-food"></a>
                            <a href="#"><h1>facts about veg recepis in festive weekend</h1></a>
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
                    <div class="col-lg-5">
                        <div class="news-item-listings">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
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
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
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
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
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
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
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
                    </div>
                </div>
                <!--*************** //LATEST NEWS ON FOOD *****************-->
                <!--**************** RECEIPE OF THE DAY ******************-->
                <h2 class="food-heading-two">Receipe of the day</h2>
                <div class="receipe-of-the-day">
                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="receipe-of-day-thumbnail"></a>
                    <div class="receipe-of-day-text">
                        <a href="#"><h3>4 must-try egg snack recepies | egg snack recepies</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        <div class="send-your-recipe">
                            <h4>send your receipe</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <!--*************** //RECEIPE OF THE DAY *****************-->
                <!--**************** FOOD NEWS ******************-->
                <h2 class="food-heading-two">Food news</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        </div>
                    </div>
                </div>
                <!--*************** //FOOD NEWS *****************-->
                <!--**************** MOST POPULAR ******************-->
                <h2 class="food-heading-two">Most popular</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="popular-items">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
                            <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="popular-items">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
                            <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="popular-items">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
                            <a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
                        </div>
                    </div>
                </div>
                <!--*************** //MOST POPULAR *****************-->
			</div>
			<div class="col-lg-3">
				<div class="otv-300-250-ad"> &nbsp; </div>
				<div class="otv-300-250-ad"> &nbsp; </div>
                <div class="food-sidebar-items">
                    <a href="#"><h4 class="common-heading-five">our best recipes</h4></a>
                    <div class="news-item-listings">
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        </div>
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        </div>
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        </div>
                        <div class="listing-item-one">
                            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                            <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        </div>
                    </div>
                </div>
                <img src="https://odishatv.in/commondir/images/food-logo.png" alt="" title="" height="95" width="300" class="food-logo-sidebar">
                <div class="tips-sidebar weightloss">
                    <a href="#"><h4 class="common-heading-four">Health Tips</h4></a>
                    <ul>
                        <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                        <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                        <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                        <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                        <li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>
</section>
<section class="health-section">
	<div class="container">
		<h2 class="food-heading-two">weight loss</h2>
		<div class="row">
			<div class="col-lg-5">
				<div class="listing-item-main weightloss">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
					<a href="#"><h2>facts about veg recepis in festive weekend</h2></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news-item-listings">
					<div class="listing-item-one">
						<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
						<a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
						<p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					</div>
					<div class="listing-item-one">
						<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
						<a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
						<p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					</div>
					<div class="listing-item-one">
						<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
						<a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
						<p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					</div>
					<div class="listing-item-one">
						<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
						<a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
						<p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="tips-sidebar weightloss">
					<a href="#"><h4 class="common-heading-four">Health Tips</h4></a>
					<ul>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
					</ul>
				</div>
			</div>
	</div>
</section>
<section class="health-section">
	<div class="container">
		<h2 class="food-heading-two">health</h2>
		<div class="row">
			<div class="col-lg-5">
				<div class="listing-item-main health">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
					<a href="#"><h2>facts about veg recepis in festive weekend</h2></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news-item-listings">
					<div class="listing-item-one">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                        <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
					<div class="listing-item-one">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                        <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
					<div class="listing-item-one">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                        <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
					<div class="listing-item-one">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1668576434.webp" alt="" title="" width="96" height="65" class="listing-item-one-image"></a>
                        <a href="#"><h4>World Sight day 2022: foods that may help prevent varius eye deseases</h4></a>
                        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="tips-sidebar health">
					<a href="#"><h4 class="common-heading-four">Health Tips</h4></a>
					<ul>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
						<li><a href="#">Ipsum dolor sit amet, consectetur adipiscing elit sed do</a></li>
					</ul>
				</div>
			</div>
	</div>
</section>
<section class="photo-section">
	<div class="container">
		<h2 class="food-heading-one">Photos</h2>
		<div class="row">
			<div class="col-lg-3">
				<div class="photo-items">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
					<a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="photo-items">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
					<a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="photo-items">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
					<a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="photo-items">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title=""></a>
					<a href="#"><h3>5 interesting facts about veg recepis in festive weekend</h3></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="video-section">
	<div class="container">
		<div class="row">
			<div  class="col-lg-10 col-lg-offset-1">
				<h2 class="food-heading-one">videos</h2>
				<div class="video-item-one">
					<div class="video-item-image">
					<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-one-thumbnail"></a>
					<a href="#" class="video-item-one-play">play</a>
					<span class="video-item-one-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
					</div>
					<span class="video-item-one-tag">video</span>
					<div class="video-item-one-content">
						<a href="#"><h3>4 must-try egg snack recepies | egg snack recepies</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="video-item-two">
							<div class="video-item-two-image">
								<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-two-thumbnail"></a>
								<a href="#" class="video-item-two-play">play</a>
								<span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
							</div>
							<a href="#"><h3>Achari chicken tikka recepies | how to make achhari chicken tikka</h3></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="video-item-two">
							<div class="video-item-two-image">
								<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-two-thumbnail"></a>
								<a href="#" class="video-item-two-play">play</a>
								<span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
							</div>
							<a href="#"><h3>Achari chicken tikka recepies | how to make achhari chicken tikka</h3></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="video-item-two">
							<div class="video-item-two-image">
								<a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1667714993.jpg" alt="" title="" class="video-item-two-thumbnail"></a>
								<a href="#" class="video-item-two-play">play</a>
								<span class="video-item-two-time"><img src="https://odishatv.in/commondir/images/svg/camera.svg" alt="" title=""> 1.15</span>
							</div>
							<a href="#"><h3>Achari chicken tikka recepies | how to make achhari chicken tikka</h3></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'includes/footer_common.php';?>
<script>
	<?php include 'includes/js_common_desktop.php';?>
</script>
</body>
</html>