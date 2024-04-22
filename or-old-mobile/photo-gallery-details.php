<?php include_once 'includes/header.php'; ?>
<style type="text/css">
div.black-bg-page {
    float: left;
    width: 100%;
    background-color: #000;
    margin-top: -20px;
    padding-top: 20px;
}
div.black-bg-page h3.heading-style-two {
	color: #fff;
}
/*=================== BREADCRUMBS ====================*/
.mobile-breadcrumb-container {
    color: black;
    float: left;
    width: 100%;
    padding: 0px 15px;
    border-bottom: 1px solid #ffff;
    box-shadow: white;
    box-shadow: 1px 5px 8px -4px rgba(0,0,0,0.75);
    -webkit-box-shadow: 1px 5px 8px -4px rgb(147 145 145 / 30%);
    -moz-box-shadow: 1px 5px 8px -4px rgba(0,0,0,0.75);
    margin-bottom: 15px;
    padding-top: 3px;
}
ul.mobile-breadcrumb {
    margin: 3px 0px;
    padding: 0px;
    position: relative;
    display: block;
    float: left;
    width: 100%;
    line-height: 15px;
    height: 16px;
    overflow: hidden;
}
ul.mobile-breadcrumb:before {
    content: "";
    display: block;
    background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgb(255 255 255 / 50%) 39%);
    width: 41px;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 2;
}
.black-bg-page ul.mobile-breadcrumb:before {
    background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgb(0 0 0 / 50%) 39%);
}
ul.mobile-breadcrumb li {
    list-style-type: none;
    display: inline;
    color: #7b0505;
    text-transform: capitalize;
    font-size: 10px;
    position: relative;
    margin-right: 11px;
    font-family: 'Roboto', sans-serif;
}
ul.mobile-breadcrumb li a {
        color: #945151;
    font-weight: normal;
}
div.black-bg-page ul.mobile-breadcrumb li a, ul.mobile-breadcrumb li:before {
    color: #fff;
}
ul.mobile-breadcrumb li:before {
    content: "";
    background-image: url(images/svg/bread-crumb.svg);
    margin-left: 8px;
    display: block;
    width: 9px;
    height: 7px;
    background-repeat: no-repeat;
    position: absolute;
    right: -15px;
    top: 3px;
}
ul.mobile-breadcrumb li:last-child:before{
	content: none;
	}
ul.mobile-breadcrumb li:last-child {
    color: #9c9c9c;
    margin-left: 3px;
}
/*===================// BREADCRUMBS ====================*/
/*=================== GALLERY DETAILS ====================*/
.photo-gallery {
    background-color: #000;
    padding-bottom: 9px;
}
.photo-gallery img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
.photo-gallery h1 {
    color: #ffffff;
    font-size: 24px;
    margin: 10px 0px;
    padding: 0px;
}
.photo-gallery-details {
    position: relative;
    padding-bottom: 30px;
    margin-bottom: 30px;
    border-bottom: solid 1px #382f2f;
}
.photo-gallery-details-photo img {
    width: 100%;
    min-height: 185px;
    object-fit: cover;
}
.photo-gallery-content {
    margin: 0px;
    padding: 0px;
    border-bottom: 1px solid #4c4e4e;
}
.photo-gallery-content h1 {
    font-size: 40px;
    font-weight: 500;
    color: #ffffff;
    margin: 10px 0px;
}
.photo-gallery-content h3 {
    font-size: 24px;
    line-height: 30px;
    color: #ffffff;
    margin: 10px 0px;
}
.photo-gallery-content ul {
    margin: 0px;
    padding: 0px;
}
.photo-gallery-content ul li {
    color: #fff;
    list-style-type: none;
    line-height: 40px;
    font-size: 17px;
}
.photo-gallery-content ul li a {
    color: #fff;
}
.photo-gallery-content ul li i {
    margin-right: 10px;
    font-size: 19px;
}
i.fas.fa-map-marker-alt.map {
    color: #9b9c9c;
}
i.far.fa-clock.clock {
    color: #9b9c9c;
}
.photo-gallery-content ul li:first-child {
    position: relative;
    margin-left: 23px;
    font-size: 20px;
    line-height: 26px;
}
.photo-gallery-content ul li:first-child:before {
    content: "";
    top: 8px;
    left: -19px;
    margin-right: 9px;
    background-color: #ffffff;
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
}
.photo-gallery-footer {
    position: relative;
    border-bottom: 1px solid #a2a2a257;
}
.photo-gallery-footer ul {
    margin: 22px 8px;
    padding: 0px;
}
.photo-gallery-footer ul li {
    list-style: none;
    display: inline;
}
.photo-gallery-footer ul li a {
    color: #fff;
}
.photo-gallery-footer ul li i {
    text-align: center;
    width: 20px;
}
.photo-gallery-footer span {
    position: absolute;
    right: 7px;
    color: white;
    bottom: 53px;
    font-size: 22px;
    margin: 0px 2px;
}
.photo-gallery-footer p {
    position: absolute;
    right: 6px;
    color: white;
    bottom: 18px;
    font-size: 20px;
}
.photo-sub-gallery {
    background-color: #000;
    padding-bottom: 9px;
}
.photo-sub-gallery-image{
    position: relative;
}
.photo-sub-gallery-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
.photo-sub-gallery-image h4 {
    position: absolute;
    color: white;
    bottom: -6px;
    left: 6px;
    font-size: 20px;
    letter-spacing: 11px;
}
.photo-sub-gallery-image h4 span {
    font-size: 25px;
    font-weight: 500;
}
.photo-sub-gallery-content{
    margin: 0px;
    padding: 0px;
}
.photo-sub-gallery-content h3 {
    font-size: 26px;
    color: #ffffff;
    font-weight: 500;
    margin: 10px 0px;
}
.photo-sub-gallery-content p {
    font-size: 18px;
    color: #ffffff;
    font-weight: 100;
}
.photo-sub-gallery-content h6 {
    font-size: 16px;
    color: #ffffff;
    font-weight: 100;
    margin: 14px 0px;
}
.photo-sub-gallery-footer {
    position: relative;
    border-bottom: 1px solid #a2a2a257;
}
.photo-sub-gallery-footer ul {
   margin: 22px 0px;
    padding: 0px;
}
.photo-sub-gallery-footer ul li {
    list-style: none;
    display: inline;
}
.photo-sub-gallery-footer ul li a {
    color: #fff;
    list-style: none;
    display: inline;
    font-size: 18px;
    margin-right: 2px;
    border-radius: 50%;
    border: 2px solid #676363;
    padding: 7px;
}
.photo-sub-gallery-footer ul li i {
    text-align: center;
    width: 20px;
}
.related-photo-gallery {
    margin: 0px 0px 30px 0px;
}
p#gallery_copy_true {
    color: #fff;
    margin-top: 5px;
    font-size: 17px;
}
.related-photo-gallery h3 {
    color: #fff;
    margin: 13px 0px;
}
.related-photo-gallery-content {
    position: relative;
    padding: 0px 9px 9px 103px;
   /* margin-bottom: 15px;*/
}
.related-photo-gallery-image {
    position: absolute;
    left: 0px;
    top: 0px;
}
.related-photo-gallery-image a img {
    width: 100%;
    height: auto;
}
/*.related-photo-gallery-content h4 {
    color: #fff;
    font-size: 17px;
}*/
h4.odishatv-app-heading {
    color: #fff;
    margin: 15px 0px 30px 0px;
    padding: 3px 0px 0px 0px;
    font-size: 15px;
    font-weight: 500;
    position: relative;
    padding-left: 46px;
}
h4.odishatv-app-heading:before {
    display: block;
    content: "";
    background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
    background-position: -150px -261px;
    width: 39px;
    height: 32px;
    position: absolute;
    left: 0;
    top: 0;
}
h4.tarangplus-app-heading {
    color: #fff;
    display: inline-block;
    margin: 0px 0px 0px 0px;
    padding: 3px 0px 0px 0px;
    font-size: 15px;
    font-weight: 500;
    position: relative;
    padding-left: 90px;
}
h4.tarangplus-app-heading:before {
    display: block;
    content: "";
    background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
    background-position: -239px -359px;
    width: 82px;
    height: 27px;
    position: absolute;
    left: 0;
    top: 0;
}
.footer-sidebar img {
    width: 49%;
    height: auto;
    margin-bottom: 20px;
    
}
.footer-sidebar a {
    text-decoration: none;
}
ul.odishatv-app {
    margin: 20px 0px 20px 0px;
    padding: 0px;
}
ul.odishatv-app li {
    list-style-type: none;
    display: inline-block;
}
ul.odishatv-app li a {
    text-decoration: none;
    display: block;
    width: 87px;
    height: 28px;
}
ul.odishatv-app li:first-child a {
    background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
    background-position: -241px -316px;
}
ul.odishatv-app li:last-child a {
    background-image: url(https://images.odishatv.in/assets/images/single-sprite.png);
    background-position: -332px -316px;
}

.related-photo-gallery-content h4 {
color: #fff;
font-size: 16px;
height: 55px;
overflow: hidden;
margin: 2px;
}
.related-photo-gallery-content h4 a {
    color: #ffffff;
}
ul.footer-button {
    padding: 0px;
   	margin: 8px
}
ul.footer-button li {
    display: inline-block;
    margin: 20px 4px 5px 0px;

}
ul.footer-button li a {
    color: #ffffff;
    border: 1px solid;
    padding: 9px 9px;
    border-radius: 9px;
}
ul.footer-button li a:hover {
    color: #d79450;
}
h2.next-heading {
    color: #ffffff;
    font-weight: 500;
    font-size: 28px;
    border: 1px solid white;
    margin: 0px;
    padding: 6px 7px 6px 20px;
    margin-bottom: 32px;
    position: relative;
}
h2.next-heading:before {
    content: "";
    width: 0%;
    height: 0%;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-top: 11px solid white;
    bottom: 0px;
    top: 43px;
    position: absolute;
}
.gallery-bread-crumb {
    display: block;
    margin: 13px 8px;
}
.gallery-bread-crumb ul {
    margin: 0px;
    padding: 0px;
}
.gallery-bread-crumb ul li {
    list-style-type: none;
    display: inline-block;
    color: #ffffff;
    text-transform: capitalize;
    font-size: 18px;
    position: relative;
    margin-right: 20px;
}
.gallery-bread-crumb ul li:before {
    font-family: "Font Awesome 5 Free";
    content: "\f0da";
    font-weight: 900;
    top: 1px;
    right: -16px;
    color: #a00606;
    font-size: 18px;
    position: absolute;
}
.gallery-bread-crumb ul li a {
    color: #a00606;
    transition-duration: 1s;
}
.gallery-bread-crumb ul li a:hover {
    color: #ffab23;
    transition-duration: 1s;
}
.gallery-bread-crumb ul li:last-child:before {
    display: none;
}
.gallery-bread-crumb ul li:last-child {
    margin-right: 0px;
}
/*=================== //GALLERY DETAILS ====================*/
/*============2nd Socialmedia  ==============*/
ul.article-share-style-more-one {
    position: absolute;
    left: -209px;
    bottom: -6px;
    border: 1px solid #aaaaaa45;
    box-shadow: 0 2px 8px #9a9797;
    display: none;
    background-color: #fff;
    margin: 0px;
    padding: 6px;
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
ul.article-share-style-more-one li:last-child {
margin: 0px;
}
ul.article-share-style-more-one li a {
    text-decoration: none;
    display: block;
    line-height: 50px;
}
ul.article-share-style-more-one li a:hover i{
color: #a00606 !important;
}
ul.article-share-style-more-one li a i.fab.fa-facebook-f {
    color: #3c51a5;
}
ul.article-share-style-more-one li a i.fab.fa-twitter {
    color: #5db2f7;
}
ul.article-share-style-more-one li a i.fab.fa-instagram {
    color: #d94b8e;
}
ul.article-share-style-more-one li a i.fab.fa-pinterest-p {
    color: #d93a34;
}
ul.article-share-style-more-one li a i.fab.fa-linkedin-in {
    color: #036593;
}
ul.article-share-style-more-one li a i.fab.fa-telegram-plane {
    color: #299ecf;
}
ul.article-share-style-more-one li a i.fas.fa-print {
    color: #21428f;
}
ul.article-share-style-more-one li a i.fas.fa-comment-dots {
    color: #f178a3;
}
ul.article-share-style-more-one li a i.fas.fa-bookmark {
    color: #f4b01b;
}
ul.article-share-style-more-one li a i.fas.fa-share-alt {
    color: #818181;
}


ul.article-share-style li {
    list-style-type: none;
    display: inline-block;
    margin-left: 15px;
}
ul.article-share-style li a {
    text-decoration: none;
    display: block;
    cursor: pointer;
}
ul.article-share-style li a i {
    text-decoration: none;
    display: block;
    font-size: 22px;
    margin-right: 10px;
}
ul.article-share-style-more li a i {
    text-decoration: none;
    display: block;
    font-size: 19px;
}
ul.article-share-style-more li a i:hover {

}
.share-social-media-add {
    position: relative;
}
ul.article-share-style-more {
    position: absolute;
    right: 100%;
    bottom: -6px;
    border: 1px solid #aaaaaa45;
    box-shadow: 0 2px 8px #9a9797;
    display: none;
    background-color: #fff;
    margin: 0px;
    width: max-content;
    height: 32px;
    overflow: hidden;
    padding: 0px 10px 0px 15px;
}
ul.article-share-style-more li {
    list-style-type: none;
    float: left;
    margin: 0px 20.5px;
    padding: 0px;
    border: none !important;
    margin-left: 0px !important;
    padding-left: 0px !important;
}
ul.article-share-style-more li:last-child {
margin: 0px;
}
ul.article-share-style-more li a {
    text-decoration: none;
    display: block;
    line-height: 17px;
    padding: 6px 0px;
}
.share-social-media-add {
    position: relative;
}
.photo-gallery-details-photo iframe {
    width: 100%;
    height: 236px;
}
span.photo-gallery-details-photo-credit-sub1 {
    position: absolute;
    bottom: 0px;
    left: 0;
    line-height: 17px;
    background-color: rgb(0 0 0 / 0.58);
    width: fit-content;
    padding: 9px 0px;
    color: #fff;
    font-size: 13px;
    opacity: 0.8;
}
ul.photo-gallery-details-photo-credit-sub2 {
    position: absolute;
    right: 0px;
    bottom: 0px;
    line-height: 15px;
    background-color: rgb(0 0 0 / 0.58);
    width: fit-content;
    padding: 8px;
    color: #fff;
    margin: 0px;
}
ul.photo-gallery-details-photo-credit-sub2 li {
    list-style-type: none;
    display: inline;
    cursor: pointer;
}
ul.photo-gallery-details-photo-credit-sub2 li span {
    font-size: 21px;
}
span.photo-gallery-details-photo-credit-sub1 i {
    margin-right: 10px;
}
ul.photo-gallery-details-photo-credit-sub2 li:last-child {
    margin-left: 15px;
    border-left: 1px solid #eaeaea85;
    padding-left: 16px;
}
.photo-gallery p {
    color: #fff;
    margin-top: 5px;
    font-size: 17px;
}
p.last-update-date-gallery {
    color: #fff;
}	
</style>
<!--======================= MEGA MENU =========================-->

<div class="black-bg-page">
	<!--=================== BREADCRUMBS ====================-->
	<div class="container">
		<ul class="mobile-breadcrumb">
			<li><a href="https://otvkhabar.in/">Home</a></li>
			<li><a href="https://otvkhabar.in/photo-gallery">Photo Gallery</a></li>
			<li><a href="https://otvkhabar.in/national">National</a></li>
			<li>ଆଜି ହେଉଛି ବୀରମାନଙ୍କର ଦିନ; ଯବାନଙ୍କ ଦ୍ୱାରା ରଙ୍ଗାରଙ୍ଗ ପରେଡ୍ ସହ ଆକର୍ଷଣୀୟ ରଣକୌଶଳ ପ୍ରଦର୍ଶନ</li>
		</ul>
	</div>
	<!--============= //BREADCRUMBS ============-->
	<div class="otv-300-250-ad">
		<!--  -->
		<div id="div-gpt-ad-22339525376-0" style="width: px; height: px;">
			<script>
			googletag.cmd.push(function() {
				googletag.display("div-gpt-ad-22339525376-0");
			});
			</script>
		</div>
	</div>
	<!-- GAllERY DETAILS -->
	<section>
		<div class="container">
			<div class="photo-gallery">
				<h1>ଆଜି ହେଉଛି ବୀରମାନଙ୍କର ଦିନ; ଯବାନଙ୍କ ଦ୍ୱାରା ରଙ୍ଗାରଙ୍ଗ ପରେଡ୍ ସହ ଆକର୍ଷଣୀୟ ରଣକୌଶଳ ପ୍ରଦର୍ଶନ</h1>
				<!-- <h4>OdishaTv.in</h4> -->
				<p>ଆଜି ହେଉଛି ବୀରମାନଙ୍କର ଦିନ । ଭାରତୀୟ ସ୍ଥଳସେନା ଆଜି ପାଳୁଛି ୭୪ତମ ପ୍ରତିଷ୍ଠା ଦିବସ । ପ୍ରତିବର୍ଷ ଜାନୁଆରୀ ୧୫ ତାରିଖରେ ଭାରତରେ 'ସେନା ଦିବସ' ପାଳନ କରାଯାଇ ଆସୁଅଛି । ୧୯୪୯ ମସିହାର ଏହି ଦିନରେ ଭାରତୀୟ ସେନାର ପ୍ରଥମ ଭାରତୀୟ କମାଣ୍ଡର ଚିଫ୍ କେଏମ୍ କରିଅପ୍ପା ବିଧିବଦ୍ଧ ଭାବେ ଦାୟିତ୍ୱ ନେଇଥିଲେ । ସେବେ ଠାରୁ ଏହି ଦିନଟିକୁ ବୀର ଓ ସାହସୀ ଭାରତୀୟ ସେନାଙ୍କ ପାଇଁ ଉତ୍ସର୍ଗ କରାଯାଇଛି ।</p>
			</div>
			<p class="last-update-date-gallery">Last updated: 15 January 2022, 05:44 PM IST</p>
			<div class="photo-gallery-details">
				<!-- <h3>Army Day Parade</h3> -->
				<div class="photo-gallery-details-photo" id="image_1"> <img data-url="https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478" data-imagenum="1" data-alt="Army Day Parade" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642248130.JPG" class="img-responsive gallery-responsive" alt="Army Day Parade" title="Army Day Parade"> <span class="photo-gallery-details-photo-credit-sub1"><i class="fas fa-camera"></i>Credit: PTI</span>
					<!--============ GALLERY SHARE ===========-->
					<ul class="photo-gallery-details-photo-credit-sub2 ">
						<li><span>1</span>/5</li>
						<li class="share-social-media-add"><img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
							<ul class="article-share-style-more photo-gallery-social">
								<li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2') +'&t='+encodeURIComponent('Army Day Parade'),'_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
		      	</a> </li>
								<li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2')+'&text='+encodeURIComponent('Army Day Parade')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a> </li>
							</ul>
						</li>
					</ul>
					<!--============ GALLERY SHARE ===========-->
				</div>
				<p id="gallery_copy_true">ଭାରତୀୟ ସ୍ଥଳସେନା ଆଜି ପାଳୁଛି ୭୪ତମ ପ୍ରତିଷ୍ଠା ଦିବସ</p>
			</div>
			<div class="photo-gallery-details">
				<!-- <h3>Army Day Parade</h3> -->
				<div class="photo-gallery-details-photo" id="image_2"> <img data-url="https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478" data-imagenum="2" data-alt="Army Day Parade" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642248239.JPG" class="img-responsive gallery-responsive" alt="Army Day Parade" title="Army Day Parade"> <span class="photo-gallery-details-photo-credit-sub1"><i class="fas fa-camera"></i>Credit: PTI</span>
					<!--============ GALLERY SHARE ===========-->
					<ul class="photo-gallery-details-photo-credit-sub2 ">
						<li><span>2</span>/5</li>
						<li class="share-social-media-add"><img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
							<ul class="article-share-style-more photo-gallery-social">
								<li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2') +'&t='+encodeURIComponent('Army Day Parade'),'_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
		      	</a> </li>
								<li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2')+'&text='+encodeURIComponent('Army Day Parade')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a> </li>
								<!--<li>
			<a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
			<i class="fab fa-instagram"></i>
			</a>
			</li>-->
								<!-- <li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" title="" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
								<!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
							</ul>
						</li>
					</ul>
					<!--============ GALLERY SHARE ===========-->
				</div>
				<p id="gallery_copy_true">ସ୍ଥଳସେନା ମୁଖ୍ୟ ଜେନେରାଲ ମନୋଜ ମୁକୁନ୍ଦ ନରଓ୍ୱାଣେ, ବାୟୁସେନା ମୁଖ୍ୟ ଏୟାର ଚିଫ୍ ମାର୍ଶାଲ ବିବେକ ରାମ ଚୌଧୁରୀ ଓ ନୌସେନା ମୁଖ୍ୟ ଆଡମିରାଲ ଆର.ହରିକୁମାର </p>
			</div>
			<div class="photo-gallery-details">
				<!-- <h3>Army Day Parade</h3> -->
				<div class="photo-gallery-details-photo" id="image_3"> <img data-url="https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478" data-imagenum="3" data-alt="Army Day Parade" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642248454.JPG" class="img-responsive gallery-responsive" alt="Army Day Parade" title="Army Day Parade"> <span class="photo-gallery-details-photo-credit-sub1"><i class="fas fa-camera"></i>Credit: PTI</span>
					<!--============ GALLERY SHARE ===========-->
					<ul class="photo-gallery-details-photo-credit-sub2 ">
						<li><span>3</span>/5</li>
						<li class="share-social-media-add"><img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
							<ul class="article-share-style-more photo-gallery-social">
								<li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2') +'&t='+encodeURIComponent('Army Day Parade'),'_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
		      	</a> </li>
								<li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2')+'&text='+encodeURIComponent('Army Day Parade')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a> </li>
								<!--<li>
			<a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
			<i class="fab fa-instagram"></i>
			</a>
			</li>-->
								<!-- <li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" title="" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
								<!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
							</ul>
						</li>
					</ul>
					<!--============ GALLERY SHARE ===========-->
				</div>
				<p id="gallery_copy_true">‘ଆର୍ମି ଡେ ପ୍ୟାରେଡ୍’ରେ ଯୋଗ ଦେଲେ ଅନେକ ବିଶିଷ୍ଟ ବ୍ୟକ୍ତି</p>
			</div>
			<div class="photo-gallery-details">
				<!-- <h3>Army Day Parade</h3> -->
				<div class="photo-gallery-details-photo" id="image_4"> <img data-url="https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478" data-imagenum="4" data-alt="Army Day Parade" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642248531.JPG" class="img-responsive gallery-responsive" alt="Army Day Parade" title="Army Day Parade"> <span class="photo-gallery-details-photo-credit-sub1"><i class="fas fa-camera"></i>Credit: PTI</span>
					<!--============ GALLERY SHARE ===========-->
					<ul class="photo-gallery-details-photo-credit-sub2 ">
						<li><span>4</span>/5</li>
						<li class="share-social-media-add"><img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
							<ul class="article-share-style-more photo-gallery-social">
								<li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2') +'&t='+encodeURIComponent('Army Day Parade'),'_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
		      	</a> </li>
								<li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2')+'&text='+encodeURIComponent('Army Day Parade')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a> </li>
								<!--<li>
			<a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
			<i class="fab fa-instagram"></i>
			</a>
			</li>-->
								<!-- <li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" title="" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
								<!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
							</ul>
						</li>
					</ul>
					<!--============ GALLERY SHARE ===========-->
				</div>
				<p id="gallery_copy_true">ରଙ୍ଗାରଙ୍ଗ ପରେଡ୍ ସହ ଆକର୍ଷଣୀୟ ରଣକୌଶଳ ପ୍ରଦର୍ଶନ କରିଲେ ସେନାର ବୀର ଯବାନ</p>
			</div>
			<div class="photo-gallery-details">
				<!-- <h3>Army Day Parade</h3> -->
				<div class="photo-gallery-details-photo" id="image_5"> <img data-url="https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478" data-imagenum="5" data-alt="Army Day Parade" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1642248641.JPG" class="img-responsive gallery-responsive" alt="Army Day Parade" title="Army Day Parade"> <span class="photo-gallery-details-photo-credit-sub1"><i class="fas fa-camera"></i>Credit: PTI</span>
					<!--============ GALLERY SHARE ===========-->
					<ul class="photo-gallery-details-photo-credit-sub2 ">
						<li><span>5</span>/5</li>
						<li class="share-social-media-add"><img src="https://odishatv.in/commondir/images/svg/share-icon.svg" class="story-page-share-icon" width="20" height="20" alt="Share" style="width: 17.5px; min-height: 12px;">
							<ul class="article-share-style-more photo-gallery-social">
								<li> <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2') +'&t='+encodeURIComponent('Army Day Parade'),'_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/facebook-single.svg" width="20" height="20" alt="Facebook" style="width: 100%; min-height: auto;">
		      	</a> </li>
								<li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://otvkhabar.in/photo-gallery/national/army-day-armed-forces-chiefs-pay-tribute-at-national-war-memorial-in-delhi/82478?pid=2')+'&text='+encodeURIComponent('Army Day Parade')+'&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twitter-single.svg" width="20" height="20" alt="Twitter" style="width: 100%; min-height: auto;"></a> </li>
								<!--<li>
			<a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
			<i class="fab fa-instagram"></i>
			</a>
			</li>-->
								<!-- <li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" title="" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
								<!--     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li> -->
							</ul>
						</li>
					</ul>
					<!--============ GALLERY SHARE ===========-->
				</div>
				<p id="gallery_copy_true">ପରେଡ୍‌ରେ ଦେଖିବାକୁ ମିଳିଲା ଅନେକ ଯୁଦ୍ଧଭିତ୍ତିକ ଟ୍ୟାଙ୍କ୍</p>
			</div>
			<ul class="footer-button">
				<li><a href="https://otvkhabar.in/tag/indian-army-day">Indian Army Day</a></li>
				<li><a href="https://otvkhabar.in/tag/delhi">Delhi</a></li>
			</ul>
			<!--  <a href=""><h2 class="next-heading">Next gallery</h2></a> -->
			<!-- //RELATED NEWS -->
		</div>
	</section>
	<section>
		<div class="container">
			<div class="related-photo-gallery">
				<h3>Related Photo Gallery</h3>
				<div class="related-photo-gallery-content">
					<div class="related-photo-gallery-image">
						<a href="https://otvkhabar.in/photo-gallery/miscellaneous/veteran-actor-mihir-das-no-more-fans-throng-at-his-residence-in-cuttack/82236"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1641916742.jpg" alt="Mihir Das Passes Away" title="Mihir Das Passes Away"></a>
					</div>
					<h4><a href="https://otvkhabar.in/photo-gallery/miscellaneous/veteran-actor-mihir-das-no-more-fans-throng-at-his-residence-in-cuttack/82236">ଅଫେରା ରାଇଜରେ ମିହିର ଦାସ; କେତେବେଳେ ହିରୋ ତ କେତେବେଳେ ଭିଲେନ୍, ସବୁଥିରେ ସେ ଫିଟ୍, ସବୁଥିରେ ସେ ହିଟ୍</a> </h4> </div>
				<div class="related-photo-gallery-content">
					<div class="related-photo-gallery-image">
						<a href="https://otvkhabar.in/photo-gallery/offbeat/booster-dose-of-covid-19-vaccine/82136"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1641816576.jpg" alt="Booster dose of COVID-19 vaccine" title="Booster dose of COVID-19 vaccine"></a>
					</div>
					<h4><a href="https://otvkhabar.in/photo-gallery/offbeat/booster-dose-of-covid-19-vaccine/82136">ଦେଶରେ ଆଗଧାଡ଼ିର କୋଭିଡ ଯୋଦ୍ଧାଙ୍କୁ ଦିଆଯାଉଛି କରୋନାର ବୁଷ୍ଟର ଡୋଜ ଟିକା</a> </h4> </div>
				<div class="related-photo-gallery-content">
					<div class="related-photo-gallery-image">
						<a href="https://otvkhabar.in/photo-gallery/covid-19/night-curfew-impose-in-odisha-strictly-here-are-some-photos/81954"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1641617467.JPG" alt="Night Curfew" title="Night Curfew"></a>
					</div>
					<h4><a href="https://otvkhabar.in/photo-gallery/covid-19/night-curfew-impose-in-odisha-strictly-here-are-some-photos/81954">ସହରାଞ୍ଚଳରେ ନାଇଟ୍ କର୍ଫ୍ୟୁ: ଅମାନିଆଙ୍କୁ ସାବାଡ କରୁଛନ୍ତି ପୋଲିସ କର୍ମୀ</a> </h4> </div>
				<div class="related-photo-gallery-content">
					<div class="related-photo-gallery-image">
						<a href="https://otvkhabar.in/photo-gallery/miscellaneous/centre-to-spend-rs-3-200-crore-to-install-mobile-towers-in-3-933-odisha-villages-ashwini-vaishnaw/81915"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/Press_Meet_1641558137.JPG" alt="Press Meet" title="Press Meet"></a>
					</div>
					<h4><a href="https://otvkhabar.in/photo-gallery/miscellaneous/centre-to-spend-rs-3-200-crore-to-install-mobile-towers-in-3-933-odisha-villages-ashwini-vaishnaw/81915">ଅଶ୍ୱିନୀ ବୈଷ୍ଣବଙ୍କ ବଡ ଘୋଷଣା: ଓଡିଶାରେ ୪୮୩ଟି ମୋବାଇଲ ଟାଓ୍ୱାର ଓ ୨୭୨ଟି ପୋଷ୍ଟ ଅଫିସ ଉଦଘାଟନ ହେବ</a> </h4> </div>
			</div>
		</div>
	</section>
	<!-- GAllERY DETAILS -->
</div>
<?php include_once 'includes/footer.php'; ?>