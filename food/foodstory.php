<!DOCTYPE html>
<html>
<head>
<?php include 'includes/common_headtags.php';?>
<style>
    /* BREAD CRUMB */
    .bread-crumb ul {
    margin: 0px;
    padding: 0px;
    }
    .bread-crumb ul li {
    list-style-type: none;
    display: inline-block;
    color: #8b8b8b;
    font-size: 12px;
    line-height: 10px;
}
.bread-crumb ul li a {
    text-decoration: none;
    display: block;
    color: #6a6767;
    font-size: 12px;
    line-height: 10px;
    position: relative;
    margin-right: 11px;
}
.bread-crumb ul li a:before {
    content: "";
    display: block;
    width: 1px;
    height: 10px;
    background-color: #ffdbdb;
    right: -9px;
    top: 0;
    position: absolute;
}
section.bread-crumb-section {
    margin: 10px 0px;
    float: left;
    width: 100%;
}
    /* BREAD CRUMB */
    .food-sidebar-items {
        padding: 5px;
        border: solid 1px #fdf5f5;
        display: inline-block;
        width: 100%;
        margin: 0px 0px 20px 0px;
    }
    .listing-item-one {
        display: inline-block;
    width: 100%;
    padding-bottom: 14px;
    margin-bottom: 10px;
    border-bottom: solid 1px #fff6f6;
    position: relative;
    padding-left: 106px;
    min-height: 65px;
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
        font-size: 17px;
    font-weight: normal;
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
    /* CONTENT */
    .food-welcome-note p {
    text-decoration: none;
    display: block;
    color: #746767;
    font-size: 20px;
    margin: 0px;
    padding: 0px;
}
.food-welcome-note h1 {
    margin: 0px 0px 5px 0px;
    padding: 0px;
    font-size: 30px;
    font-weight: 700;
    color: #000;
    line-height: 35px;
}
ul.food-author-info {
    margin: 0px;
    padding: 0px;
}
ul.food-author-info li {
    list-style-type: none;
    display: inline-block;
    color: #8b8b8b;
    font-size: 12px;
    line-height: 10px;
    position: relative;
    margin-right: 11px;
}
ul.food-author-info li:before {
    content: "";
    display: block;
    width: 1px;
    height: 10px;
    background-color: #ffdbdb;
    right: -9px;
    top: 0;
    position: absolute;
}
ul.food-author-info li:last-child:before {
    display: none;
}
.food-author {
    position: relative;
    margin: 10px 0px;
}
ul.article-share-style {
    margin: 0px;
    padding: 0px;
    position: absolute;
    right: -6px;
    top: 18px;
}
ul.article-share-style li {
    list-style-type: none;
    display: inline-block;
    margin-left: 15px;
    position: relative;
}
ul.article-share-style li a {
    text-decoration: none;
    display: block;
    cursor: pointer;
}
ul.article-share-style-more-one {
    position: absolute;
    right: calc(100% + 5px);
    bottom: -6px;
    border: 1px solid #aaaaaa45;
    box-shadow: 0 2px 8px #9a9797;
    display: none;
    background-color: #fff;
    margin: 0px;
    width: max-content;
    height: 36px;
    overflow: hidden;
    padding: 0px 10px 0px 15px;
}
ul.article-share-style-more-one li {
    list-style-type: none;
    float: left;
    margin: 0px 12.5px;
    padding: 0px;
    border: none !important;
    margin-left: 0px !important;
    padding-left: 0px !important;
}
ul.article-share-style-more-one li a {
    text-decoration: none;
    display: block;
    line-height: 30px;
    padding: 0px;
}
/* SOCIAL SHARE */
ul.food-shere {
    margin: 0px;
    padding: 0px;
    width: 100%;
}
ul.food-shere li {
    list-style-type: none;
    display: inline-block;
    margin-right: 8px;
}
ul.food-shere li a {
    text-decoration: none;
    display: block;
}
/* //SOCIAL SHARE */
.thumbnail-image-sec {
    padding: 5px;
    position: relative;
    display: block;
    width: 100%;
    margin: 15px 0px;
    border: solid 1px #e5e0e0;
    border-radius: 5px;
}
img.thumbnail-image {
    width: 100%;
    height: auto;
}
.thumbnail-image-sec p {
    margin: 10px 0px 5px 0px;
    padding: 0px;
    color: #8b8b8b;
    font-size: 14px;
    line-height: 16px;
    text-align: center;
}
.food-details p {
    text-decoration: none;
    display: block;
    color: #746767;
    font-size: 20px;
    margin: 0px 0px 12px 0px;
    padding: 0px;
}
.food-details h1, 
.food-details h2, 
.food-details h3, 
.food-details h4, 
.food-details h5, 
.food-details h6, {
    margin: 0px;
    padding: 0px;
}
.highlights {
    position: relative;
    background-color: #f9f9f9;
    display: inline-block;
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
}
.highlights ul {
    margin: 0px;
    padding: 0px;
}
.highlights ul li {
    list-style-type: none;
    float: left;
    width: 33.333%;
    position: relative;
    padding-left: 22px;
    padding-right: 17px;
}
.highlights ul li a {
    text-decoration: none;
    display: block;
    color: #000;
    font-size: 14px;
}
.highlights ul li:before {
    content: "";
    display: block;
    width: 12px;
    height: 12px;
    border: solid 2px #94ff33;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 4px;
}
.highlights ul li {
    list-style-type: none;
    float: left;
    width: 33.333%;
    position: relative;
    padding-left: 22px;
}
.content-highlights {
    background-color: #f6ff9c;
    padding: 10px 10px 0px 10px;
    border-radius: 12px;
    margin-bottom: 15px;
    overflow: hidden;
    border-left: solid 4px #b7bb91;
}
.content-tags {
    position: relative;
    display: inline-block;
    width: 100%;
    margin-bottom: 15px;
}
.content-tags ul {
    margin: 0px;
    padding: 0px;
}
.content-tags ul li {
    list-style-type: none;
    display: inline-block;
    font-weight: 700;
    margin-right: 5px;
    color: #000;
    font-size: 15px;
}
.content-tags ul li a {
    text-decoration: none;
    display: block;
    background-color: #f3f3f3;
    padding: 0px 10px;
    color: #000;
    font-weight: 300;
    text-transform: capitalize;
    font-size: 14px;
    line-height: 30px;
    border-radius: 5px;
}
.how-to-make {
    padding: 5px 5px 0px 5px;
    position: relative;
    display: block;
    width: 100%;
    margin: 0px 0px 15px 0px;
    border: solid 1px #f7f2f2;
    border-radius: 5px;
}
.how-to-make ol {
    margin: 0px;
    padding: 0px;
}
.how-to-make ol li {
    list-style-type: none;
    position: relative;
    counter-increment: my-awesome-counter;
    line-height: 26px;
    text-decoration: none;
    display: block;
    color: #746767;
    font-size: 20px;
    margin: 0px 0px 12px 0px;
    padding: 0px 0px 0px 40px;
}
.how-to-make ol li:before {
    display: block;
    content: counter(my-awesome-counter);
    background-color: #94ff33;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 25px;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 0px;
    font-weight: 900;
    color: #000;
    font-size: 13px;
}
.how-to-make h2 {
    margin: 10px 0px 15px 0px;
    padding: 0px;
    font-size: 25px;
    font-weight: 700;
    color: #000;
}
    /* //CONTENT */
span.photo-gallery-details-photo-credit-sub1 {
    position: absolute;
    bottom: 0;
    left: 0;
    line-height: 18px;
    background-color: rgb(0 0 0 / .58);
    width: fit-content;
    padding: 10px 10px 10px 27px;
    color: #fff;
    font-size: 13px;
    opacity: .8;
}
span.photo-gallery-details-photo-credit-sub1 img {
    height: 15px;
    position: absolute;
    left: 5px;
    top: 10px;
    width: 15px;
}
.thumbnail-image-sec-img {
    position: relative;
}
/* Related */
.related-item-one {
    display: inline-block;
    width: 100%;
    padding-bottom: 14px;
    margin-bottom: 10px;
    border-bottom: solid 1px #fff6f6;
    position: relative;
    padding-left: 106px;
    min-height: 65px;
}
img.related-item-one-img {
    position: absolute;
    left: 0;
    top: 0;
}
.related-item-one h4 {
    margin: 0px;
    padding: 0px;
    color: #000;
    font-size: 17px;
    font-weight: normal;
}
/* //Related */
</style>
</head>
<body>
<?php include 'includes/food_header_desktop.php';?>
<section class="bread-crumb-section">
    <div class="container">
        <div class="bread-crumb">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Food & Drinks</a></li>
                <li>Masala penauts receipe update how to make masala penauts</li>
            </ul>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="otv-300-600-ad"></div>
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
            </div>
            <div class="col-lg-6">
                <div class="food-content">
                    <div class="food-welcome-note">
                        <h1>Masala peanuts recipe process: how to make Nutcracker at home</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="food-author">
                        <ul class="food-author-info">
                            <li>Somdatta Saha</li>
                            <li>Published: 19, 2022 11:05 IST</li>
                        </ul>
                        <ul class="article-share-style">     
                            <li class="share-social-media-add"><a><img src="https://odishatv.in/commondir/images/svg/share-icon.svg" width="20" height="20" alt="Share"></a>
                            <ul class="article-share-style-more-one" style="display: none;">
                            <li>
                            <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://odishatv.in/weather/news-rain-alert-for-6-odisha-districts-check-imd-s-latest-forecast-190513&amp;t=Rain+alert+for+6+Odisha+districts%2C+check+IMD%E2%80%99s+latest+forecast','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook">
                            </a>
                            </li>
                            <li><a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://odishatv.in/weather/news-rain-alert-for-6-odisha-districts-check-imd-s-latest-forecast-190513&amp;text=Rain+alert+for+6+Odisha+districts%2C+check+IMD%E2%80%99s+latest+forecast&amp;hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter"></a>
                            </li> 
                            <li>
                            <a title="Share on Telegram" href="https://telegram.me/share/url?url=https://odishatv.in/weather/news-rain-alert-for-6-odisha-districts-check-imd-s-latest-forecast-190513&amp;text=Rain alert for 6 Odisha districts, check IMD’s latest forecast"><img src="https://odishatv.in/commondir/images/svg/telegram-single.svg" width="20" height="20" alt="Telegram"></a>
                            </li>   
                            <li>
                            <a title="Share on WhataApp" href="https://api.whatsapp.com/send?phone=whatsappphonenumber&amp;text=https://odishatv.in/weather/news-rain-alert-for-6-odisha-districts-check-imd-s-latest-forecast-190513"><img src="https://odishatv.in/commondir/images/svg/whatsapp-single.svg" width="20" height="20" alt="WhataApp"></a>
                            </li> 
                        </ul>
                        <li><a href="#" onclick="javascript: window.print(); return false;"><img src="https://odishatv.in/commondir/images/svg/print-icon.svg" width="20" height="20" alt="Print" style="margin-right: 10px;"></a></li>
                        </ul>
                    </div>
                    <div class="food-shere">
                        <ul class="food-shere">
                            <li class="top-social-btn"><a href="https://www.facebook.com/otvnews/" title="Facebook" target="_blank" class="facebook svg-sprite" height="22" width="22"><span class="svg-sprite-label">facebook</span></a></li>
                            <li class="top-social-btn"><a href="https://twitter.com/otvnews" title="Twitter" target="_blank" class="twitter svg-sprite" height="22" width="22"><span class="svg-sprite-label">twitter</span></a></li>
                            <li class="top-social-btn"><a href="https://www.instagram.com/otv.news" title="Instagram" target="_blank" class="instagram svg-sprite" height="22" width="22"><span class="svg-sprite-label">instagram</span></a></li>
                            <li class="top-social-btn"><a href="https://www.linkedin.com/company/odishatv" title="LinkedIn" target="_blank" class="linkedin svg-sprite" height="22" width="22"><span class="svg-sprite-label">linkedin</span></a></li>
                            <li class="top-social-btn"><a href="https://t.me/otvtelegram" title="Telegram" target="_blank" class="telegram svg-sprite" height="22" width="22"><span class="svg-sprite-label">telegram</span></a></li>
                            <li class="top-social-btn"><a href="https://www.kooapp.com/profile/otvnews" title="Koo" target="_blank" class="koo svg-sprite" height="22" width="22"><span class="svg-sprite-label">koo</span></a></li>
                            <li class="top-social-btn"><a href="https://www.youtube.com/c/OTVNewsEnglish" title="Youtube" target="_blank" class="youtube svg-sprite" height="22" width="22"><span class="svg-sprite-label">youtube</span></a></li>
                         </ul>
                    </div>
                    <div class="thumbnail-image-sec">
                        <div class="thumbnail-image-sec-img">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" title="" class="thumbnail-image">
                        <span class="photo-gallery-details-photo-credit-sub1"><img src="https://odishatv.in/commondir/images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">Credit: Rakesh Roul</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    <div class="food-details">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="highlights">
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></li>
                                <li><a href="#">Orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></li>
                                <li><a href="#">Rem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="how-to-make">
                            <h2>How to make nutcracker at home</h2>
                            <ol>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                            </ol>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="content-highlights">
                             <p><strong>Lorem ipsum dolor sit amet</strong> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="content-tags">
                            <ul>
                                <li>TAGS: </li>
                                <li><a href="#">voluptate</a></li>
                                <li><a href="#">proident</a></li>
                                <li><a href="#">aliquip</a></li>
                                <li><a href="#">dolore</a></li>
                                <li><a href="#">velit</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- RELATED -->
                <div class="food-related-story">
                    <h4 class="common-heading-five">Recommended Stories</h4>
                    <div class="row">
                        <div class="food-related-story-list">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="related-item-one">
                                    <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/sex_drive_1670259869.webp" alt="sex drive" title="sex drive" width="96" height="65" class="related-item-one-img"></a>
                                    <a href="#"><h4>Men who eat spicy food may have higher sex drive</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //RELATED -->
            </div>
            <div class="col-lg-3">
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
                <div class="otv-300-600-ad"></div>
            </div>
        </div>
</section>

<?php include 'includes/footer_common.php';?>
<script>
    <?php include 'includes/js_common_desktop.php';?>
</script>
</body>
</html>