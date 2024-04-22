<?php include 'includes/header.php';?>
<style type="text/css">
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
    line-height: 50px;
    padding: 6px 0px;
}
ul.article-share-style-more li a:hover i{
    color: #7b0505 !important;
}
ul.article-share-style-more li a i.fab.fa-facebook-f {
    color: #3c51a5;
}
ul.article-share-style-more li a i.fab.fa-twitter {
    color: #5db2f7;
}
ul.article-share-style-more li a i.fab.fa-instagram {
    color: #d94b8e;
}
ul.article-share-style-more li a i.fab.fa-pinterest-p {
    color: #d93a34;
}
ul.article-share-style-more li a i.fab.fa-linkedin-in {
    color: #036593;
}
ul.article-share-style-more li a i.fab.fa-telegram-plane {
    color: #299ecf;
}
ul.article-share-style li a i.fas.fa-print {
    color: #21428f;
}
ul.article-share-style li a i.fas.fa-comment-dots {
    color: #f178a3;
}
ul.article-share-style li a i.fas.fa-bookmark {
    color: #f4b01b;
}
ul.article-share-style li a i.fas.fa-share-alt {
    color: #818181;
}
	.dark-mode {
  background-color: black;
  color: white;
}
div.black-bg-page {
    float: left;
    width: 100%;
    background-color: #000;
    margin-top: -20px;
    padding-top: 20px;
}
/* photo-gallery-details-social */
ul.photo-gallery-details-social {
   margin: 6px;
    position: relative;
    padding: 0px;
}
ul.photo-gallery-details-social li  {
    color: #fbfbfb;
    list-style: inline;
    display: inline;
    margin-right: 2px; 
}
ul.photo-gallery-details-social li a{
    color: white;
}
ul.photo-gallery-details-social li a:hover{
    color: #d79450;
}
ul.photo-gallery-details-social li a i {
    width: 44px;
    height: 44px;
    text-align: center;
    font-size: 18px;
    border-radius: 50%;
    border: 2px solid #676363;
    padding: 11px;
    
}
ul.gallery-bread-crumb {
    margin: -13px 0px 9px 0px;
    padding: 0px;
    position: relative;
    display: block;
    float: left;
    width: 100%;
}
ul.gallery-bread-crumb li {
    list-style-type: none;
    display: inline-block;
    color: #7b0505;
    text-transform: capitalize;
    font-size: 16px;
    position: relative;
    margin-right: 20px;
}
ul.gallery-bread-crumb li:before {
    font-family: "Font Awesome 5 Free";
    content: "\f101";
    font-weight: 900;
    top: 6px;
    right: -14px;
    color: #fff;
    font-size: 10px;
    position: absolute;
}
ul.gallery-bread-crumb li a {
    color: #fff;
    transition-duration: .5s;
}
ul.gallery-bread-crumb li a:hover {
    color: #ffab23;
    transition-duration: .5s;
}
ul.gallery-bread-crumb li:last-child:before {
    display: none;
}
ul.gallery-bread-crumb li:last-child {
    margin-right: 0px;
    color: #736f6f;
}
.photo-gallery h1 {
    margin: 0px 0px 20px 0px;
    padding: 0px;
    text-transform: capitalize;
    font-size: 30px;
    font-weight: 700;
    line-height: 44px;
    color: #000;
}
.photo-gallery h2 {
    margin: 0px 0px 20px 0px;
    padding: 0px;
    text-transform: capitalize;
    font-size: 30px;
    font-weight: 700;
    line-height: 44px;
    color: white;
}
.photo-gallery h4 {
    color: #ffffff;
}
p.last-update-date-gallery {
    color: #000000;
    font-size: 12px;
    line-height: 20px;
    font-weight: 200;
    text-transform: uppercase;
}
.photo-gallery-details {
    margin: 0px 0px 38px 0px;
    padding-bottom: 15px;
    display: inline-block;
    width: 100%;
    position: relative;
    background-color: #231f20;
    padding: 15px;
}
.photo-gallery-details-photo {
    margin-top: 6px;
    display: inherit;
}
hr.photo-gallery-details-photo {
    border-top: 0.5px solid #8080804f;
}
.photo-gallery-details p {
    color: #ffffff;
    margin: 20px 0px;
    font-size: 20px;
    line-height: 26px;
    font-weight: 400;
    font-family: 'Faustina', serif;
}
span.photo-gallery-details-photo-credit-sub1 {
    position: absolute;
    bottom: 0px;
    left: 0;
    line-height: 18px;
    background-color: rgb(0 0 0 / 0.58);
    width: fit-content;
    padding: 10px;
    color: #fff;
    font-size: 13px;
    opacity: 0.8;
}
.photo-gallery p {
    color: #000;
    margin: 20px 0px;
    font-size: 20px;
    line-height: 26px;
    font-weight: 400;
    font-family: 'Faustina', serif;
}
button.photo-gallery-details-photo-credit-sub2 {
    line-height: 14px;
    background-color: rgb(255 13 13);
    width: fit-content;
    padding: 8px;
    color: #fff;
    margin: 0px 0px 0px 0px;
    float: left;
    border: none;
}
button.photo-gallery-details-photo-credit-sub2 li {
    list-style-type: none;
    display: inline;
    cursor: pointer;
}
button.photo-gallery-details-photo-credit-sub2 li span {
    font-size: 21px;
}
span.photo-gallery-details-photo-credit-sub1 i {
    margin-right: 10px;
}
button.photo-gallery-details-photo-credit-sub2 li:last-child {
    margin-right: 0px;
    border-right: 0px solid #ccc7c785;
    padding-right: 0px;
}
button.photo-gallery-details-photo-credit-sub2 li {
    margin-right: 15px;
    border-right: 1px solid #00000085;
    padding-right: 16px;
}
ul.article-share-style-more.photo-gallery-social {
    bottom: -6px;
}
.photo-gallery-details img {
    width: 100%;
    height: auto;
}
.photo-gallery-details h3 {
    font-size: 36px;
    margin-top: 0px;
    color: white;
    margin-bottom: 11px;
}
ul.footer-button {
    margin-left: 0px;
    padding: 0px;
    margin-bottom: 52px;
    margin-top: 20px;
}
ul.footer-button li {
    display: inline-block;
    margin: 4px 2px 0px 0px;
    color: #ece5e5;
    border: 1px solid;
    padding: 7px 9px;
    border-radius: 9px;
}
ul.footer-button li a {
    color: #000000;
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
/* //photo-gallery-details-social */
/*----------------Photo-gallery2-----------------*/
ul.photo-gallery2-heading {
    margin: 0px 0px 0px 15px;
    padding: 0px;
    text-align: right;
    display: inline-block;
    width: 100%;
}
ul.photo-gallery2-heading li {
    float: left;
    margin-top: 7px;
    list-style-type: none;
    display: inline-block;
}
ul.photo-gallery2-heading li h3.heading-style-one {
    padding: 0px 0px 0px 45px;
    position: relative;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 18px;
}
ul.photo-gallery2-heading li h3.heading-style-one:before{
    content: "";
    display: block;
    background-color: #7b0505;
    position: absolute;
    left: 0;
    top: 3px;
    width: 30px;
    height: 13px;
}
/*----------------//Photo-gallery2-----------------*/
ul.article-share-btn {
    margin: 0px 0 5px 0;
    padding: 0;
    text-align: center;
    float: right;
}
ul.article-share-btn li {
    list-style-type: none;
    display: inline-block;
    margin: 0 2px 0px 2px;
    border: solid 1px #9a9797;
    width: 35px;
    height: 32px;
    line-height: 15px;
    background-color: #fff;
}
ul.article-share-btn li a {
    text-decoration: none;
    display: block;
    font-size: 22px;
    transition-duration: .5s;
    line-height: 23px;
    margin: 0;
    padding: 0;
    display: inline-block;
}
</style>
<?php include 'includes/bredcum.php';?>
	<div class="otv-970-250-ad">
		<!-- /370089190/Below_Header_Desktop_Article_970x250 -->
		<div id="div-gpt-ad-22339568361-0" style="width: 970px; height: 250px;" data-google-query-id="CJre45T66fMCFcWAZgIdChYCVA">
			<div id="google_ads_iframe_/370089190/Below_Header_Desktop_Article_970x250_0__container__" style="border: 0pt none;">
				<iframe id="google_ads_iframe_/370089190/Below_Header_Desktop_Article_970x250_0" title="3rd party ad content" name="google_ads_iframe_/370089190/Below_Header_Desktop_Article_970x250_0" width="970" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" data-google-container-id="6" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe>
			</div>
		</div>
	</div>
	<!--============== ARTICLE ===============-->
	<section class="main-article">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 sticky">
					<div class="photo-gallery">
						<h1>Farmers’ Nationwide Rail Roko Disrupts Train Services</h1>
						<p>Train services across the country were severely disrupted on Monday owing to a nationwide 'Rail Roko' protest by the Samyukta Kisan Morcha (SKM). Several trains had to be cancelled while many others were partially cancelled due to the protest. The Kisan Morcha backed by several farmer organisations observed a six-hour-long rail roko from 10AM to 4PM demanding removal of Union MoS for Home Affairs Ajay Mishra from his post over the Lakhimpur Kheri incident, in which his son Ashish is an accused.</p>
					</div>
					<p class="last-update-date-gallery">Last updated: 19 October 2021, 12:33 PM IST</p>
					<div class="photo-gallery-details">
                        <button class="photo-gallery-details-photo-credit-sub2 ">
                                <span>2</span>/10</button>
                        <ul class="article-share-btn">
                            <li>
                                <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://odishatv.in/news/miscellaneous/republic-day-celebrations-sec-bars-political-campaign-highlighting-govt-achievements-168704&amp;t=Republic+Day+Celebrations%3A+SEC+Bars+Political+Campaign%2C+Highlighting+Govt+Achievements','_blank'); return false;"><img src="images/svg/facebook-single.svg" width="15" height="15" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://odishatv.in/news/miscellaneous/republic-day-celebrations-sec-bars-political-campaign-highlighting-govt-achievements-168704&amp;text=Republic+Day+Celebrations%3A+SEC+Bars+Political+Campaign%2C+Highlighting+Govt+Achievements&amp;hashtags=otv','_blank'); return false;"><img src="images/svg/twitter-single.svg" width="15" height="15" alt="Twitter"></a>
                            </li> 
                        </ul>
						<!-- <h3>Rail Roko by Farmers</h3> -->
						<div class="photo-gallery-details-photo" id="image_1"> 
                            <img data-url="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060" data-imagenum="1" data-alt="Rail Roko by Farmers" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634625574.jpg" class="img-responsive gallery-responsive" alt="Rail Roko by Farmers" title="Rail Roko by Farmers">
							<!--============ GALLERY SHARE ===========-->
							
							<!--============ GALLERY SHARE ===========-->
						</div>
						<p class="gallery_copy_true">Farmers block railway tracks at Devi Dass Pura in Amritsar district as part of the Samyukt Kisan Morcha's rail roko protest demanding the dismissal and arrest of Union Minister Ajay Mishra in connection with Lakhimpur Kheri violence.</p>
					</div>
					
				
				
					<ul class="footer-button">
						<li><a href="https://odishatv.in/tag/rail-roko">Rail Roko</a></li>
						<li><a href="https://odishatv.in/tag/samyukta-kisan-morcha">Samyukta Kisan Morcha</a></li>
						<li><a href="https://odishatv.in/tag/farmer-protest">Farmer Protest</a></li>
						<li><a href="https://odishatv.in/tag/lakhimpur-kheri-incident">Lakhimpur Kheri Incident</a></li>
					</ul>
					<!--  <a href=""><h2 class="next-heading">Next gallery</h2></a> -->
					<!-- //RELATED NEWS -->
</div>
<?php include 'includes/sidebar.php';?>
</div>
</div>
</section>
</div>
<?php include 'includes/footer.php';?>