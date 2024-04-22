<?php include 'includes/header.php';?>
<style type="text/css">
/*================== 404 ===================*/
section.main-error-sec {
    position: relative;
    float: left;
    width: 100%;
    margin: 0px 0px 60px 0px;
    text-align: center;
    padding: 0px 15%;
}
section.main-error-sec h1 {
    margin: 0px;
    padding: 0px;
    font-size: 160px;
    font-weight: 700;
    color: #444444;
}
section.main-error-sec h1 span {
    display: block;
    font-size: 20px;
}
section.main-error-sec h3 {
    margin: 0px;
    padding: 0px;
    font-size: 39px;
    font-weight: 700;
    color: #444444;
    text-transform: capitalize;
}
section.main-error-sec p {
    margin: 15px 0px;
    padding: 0px;
    color: #a9a5a5;
    font-size: 18px;
}
.error-home-redirect {
    color: #000;
    text-transform: capitalize;
    font-weight: 700;
    font-size: 16px;
    border: none;
    background: no-repeat;
    outline: none;
}
section.main-error-sec ul {
    margin: 30px 0px 0px 0px;
    padding: 0px;
}
section.main-error-sec ul li {
    list-style-type: none;
    display: inline-block;
}
section.main-error-sec ul li {
    list-style-type: none;
    display: inline-block;
    margin: 0px;
    padding: 0px;
}
section.main-error-sec ul li input {
    margin: 0px;
    line-height: 36px;
    padding: 0px 10px;
}
section.main-error-sec ul li:first-child input {
    border: solid 2px #f7e4e4;
    width: 100%;
}
section.main-error-sec ul li:last-child input {
    background-color: #7b0505;
    border: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 15px;
    width: 144px;
    position: relative;
    margin: 0 0px 0px -4px;
    line-height: 39px;
    outline: none;
    transition-duration: .5s;
}
section.main-error-sec ul li:first-child {
    width: 40%;
}
section.main-error-sec ul li:last-child input:hover {
    background-color: #f5ad1a;
    transition-duration: .5s;
}
section.error-page-article {
    float: left;
    width: 100%;
    margin: 0px 0px 30px 0px;
}
section.error-page-article .category-custom-two-item:before{
    display: none !important;
}
.category-custom-two-item {
    position: relative;
    display: inline-block;
    width: 100%;
    padding-left: 130px;
    margin: 0px 0px 15px 0px;
    min-height: 80px;
}
.category-custom-two-item img {
    width: 120px;
    height: 74px;
    object-fit: cover;
    position: absolute;
    left: 0;
    top: 0;
}
.category-custom-two-item:before {
    content: "";
    display: block;
    width: 1px;
    height: 100%;
    background-color: #cecdcd;
    position: absolute;
    right: -8px;
    top: 0;
}
ul.category-custom-two-post {
    margin: -5px 0px 0px 0px;
    padding: 0px;
    max-height: 62px;
    overflow: hidden;
}
ul.category-custom-two-post li {
    list-style-type: none;
    display: inline;
}
ul.category-custom-two-post li:first-child {
    position: relative;
    margin-right: 15px;
}
ul.category-custom-two-post li:first-child:before {
    content: "";
    display: block;
    background-color: #e92b28;
    width: 1px;
    height: 10px;
    position: absolute;
    top: 5px;
    right: -10px;
    transform: rotate(10deg);
}
ul.category-custom-two-post li a {
    font-size: 16px;
    text-decoration: none;
    display: inline;
    color: #000;
    line-height: 19px;
}
ul.category-custom-two-post li:first-child a {
    color: #b30707;
}
ul.category-custom-two-post li a:hover {
    color: #af262d;
}
ul.category-custom-two-time {
    margin: 0px;
    padding: 0px;
}
ul.category-custom-two-time li {
    position: relative;
    list-style-type: none;
    display: inline-block;
    color: #666;
    font-size: 10px;
    font-family: 'Libre Franklin', sans-serif;
    font-weight: 300;
    text-transform: uppercase;
}
ul.category-custom-two-time li:first-child:before {
    content: "";
    display: block;
    position: absolute;
    right: -16px;
    top: 4px;
    width: 7px;
    height: 7px;
    background-color: #b5afaf;
    border-radius: 50%;
}
ul.category-custom-two-time li:first-child {
    margin-right: 23px;
}
a.cat-more-news-btn {
    outline: none;
    line-height: 18px;
    padding: 0px;
    width: fit-content;
    border: none;
    color: #7b1c18;
    text-transform: capitalize;
    font-size: 12px;
    border-radius: 2px;
    float: right;
    font-weight: 700;
    transition-duration: .5s;
    display: block;
    position: relative;
    margin-bottom: 10px;
}
a.cat-more-news-btn:after {
    font-family: "Font Awesome 5 Free";
    content: "\f30b";
    margin-left: 8px;
}
a.cat-more-news-btn:hover {
    color: #f4b01b;
    transition-duration: .5s;
}
/*================= //404 ==================*/
</style>
<section class="main-error-sec">
	<h1>404 <span>Page not found!</span></h1>
	<p>We're sorry, but we can't find the page you were looking for. It's probably something we've done wrong but now we know about it and we'll try to fix it. In the meantime, try one of these options:</p> <a href="https://odishatv.in/" class="error-home-redirect"><i class="fas fa-angle-double-right"></i> go to home page</a>
	<ul>
		<li>
			<input placeholder="Search here...." type="text" name="searchtext" id="searchtext">
		</li>
		<li>
			<input type="submit" id="searchagain">
		</li>
	</ul>
</section>
<section class="error-page-article">
  <div class="container">
    <h3 class="heading-style-one">Suggested stories</h3>
    <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/miscellaneous/people-across-odisha-express-resentments-as-fuel-prices-continue-to-surge-162608"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1633417996.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1633417996.jpg" alt="" title="People Across Odisha Express Resentments As Fuel Prices Continue To Surge "></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/miscellaneous">Miscellaneous</a></li>
              <li><a href="https://odishatv.in/news/miscellaneous/people-across-odisha-express-resentments-as-fuel-prices-continue-to-surge-162608">People Across Odisha Express Resentments As Fuel Prices Continue To Surge</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>43 seconds ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/national/pegasus-row-sc-sets-up-committee-to-probe-snooping-allegations-162607"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635314834.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635314834.jpg" alt="" title="Pegasus Row: SC Sets Up Committee To Probe Snooping Allegations"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/pegasus-row">Pegasus Row</a></li>
              <li><a href="https://odishatv.in/news/national/pegasus-row-sc-sets-up-committee-to-probe-snooping-allegations-162607">Pegasus Row: SC Sets Up Committee To Probe Snooping Allegations</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>2 minutes ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/national/tn-cm-announces-rs-5l-as-relief-to-kin-of-victims-killed-in-fire-162605"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635314203.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635314203.jpg" alt="" title="TN CM Announces Rs 5L As Relief To Kin Of Victims Killed In Fire"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/fire-mishap">Fire Mishap</a></li>
              <li><a href="https://odishatv.in/news/national/tn-cm-announces-rs-5l-as-relief-to-kin-of-victims-killed-in-fire-162605">TN CM Announces Rs 5L As Relief To Kin Of Victims Killed In Fire</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>13 minutes ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/business/petrol-diesel-rates-raised-again-by-35-paise-ltr-162603"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635311419.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635311419.jpg" alt="" title="Petrol, Diesel Rates Raised Again By 35 Paise/Ltr"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/fuel-price-hike">Fuel Price Hike</a></li>
              <li><a href="https://odishatv.in/news/business/petrol-diesel-rates-raised-again-by-35-paise-ltr-162603">Petrol, Diesel Rates Raised Again By 35 Paise/ltr</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>59 minutes ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/technology/google-logs-record-18-9-billion-profit-search-and-youtube-soar-162602"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635310106.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635310106.jpg" alt="" title="Google Logs Record $18.9 Billion Profit, Search And YouTube Soar"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/google">Google</a></li>
              <li><a href="https://odishatv.in/news/technology/google-logs-record-18-9-billion-profit-search-and-youtube-soar-162602">Google Logs Record $18.9 Billion Profit, Search And YouTube Soar</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>1 hour ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/sports/t20-world-cup-asif-malik-late-blitz-rauf-s-four-fer-help-pakistan-beat-kiwis-162601"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635309812.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635309812.jpg" alt="" title="T20 World Cup: Asif-Malik Late Blitz, Rauf's Four-Fer Help Pakistan Beat Kiwis"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/icc-t20-world-cup">ICC T20 World Cup</a></li>
              <li><a href="https://odishatv.in/news/sports/t20-world-cup-asif-malik-late-blitz-rauf-s-four-fer-help-pakistan-beat-kiwis-162601">T20 World Cup: Asif-Malik Late Blitz, Rauf's Four-Fer Help Pakistan Beat Kiwis</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>1 hour ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/education/ug-pg-degrees-from-foreign-countries-aicte-issues-notice-noc-required-by-students-162600"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/AICTE_1620376957.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/AICTE_1620376957.jpg" alt="" title="AICTE"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/aicte">AICTE</a></li>
              <li><a href="https://odishatv.in/news/education/ug-pg-degrees-from-foreign-countries-aicte-issues-notice-noc-required-by-students-162600">UG-PG Degrees From Foreign Countries: AICTE Issues Notice, NOC Required By Students</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>2 hours ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/covid-19/active-covid-19-cases-lowest-in-242-days-162599"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1633064969.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1633064969.jpg" alt="" title="India Covid-19 Cases"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/india-covid19-updates">India COVID19 Updates</a></li>
              <li><a href="https://odishatv.in/news/covid-19/active-covid-19-cases-lowest-in-242-days-162599">Active COVID-19 Cases Lowest In 242 Days</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>2 hours ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/miscellaneous/3-dance-bars-sealed-in-bhubaneswar-162598"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635308635.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635308635.jpg" alt="" title="raids at dance bars in Bhubaneswar"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/dance-bars-sealed-in-bhubaneswar">Dance Bars Sealed In Bhubaneswar</a></li>
              <li><a href="https://odishatv.in/news/miscellaneous/3-dance-bars-sealed-in-bhubaneswar-162598">3 Dance Bars Sealed In Bhubaneswar</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>2 hours ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/national/-developed-countries-fail-to-meet-climate-goals-while-india-exceeds-targets--162597"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635307787.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635307787.jpg" alt="" title="Environment and Climate Change Minister Bhupender Yadav"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/environment-minister">Environment Minister</a></li>
              <li><a href="https://odishatv.in/news/national/-developed-countries-fail-to-meet-climate-goals-while-india-exceeds-targets--162597">'Developed Countries Fail To Meet Climate Goals, While India Exceeds Targets'</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>2 hours ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/technology/gadgets/users-can-now-transfer-whatsapp-chats-from-ios-to-pixel-android-12-phones-162594"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634462171.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634462171.jpg" alt="" title="Users Can Now Transfer WhatsApp Chats From IOS To Pixel, Android 12 Phones"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/whatsapp">WhatsApp</a></li>
              <li><a href="https://odishatv.in/news/technology/gadgets/users-can-now-transfer-whatsapp-chats-from-ios-to-pixel-android-12-phones-162594">Users Can Now Transfer WhatsApp Chats From IOS To Pixel, Android 12 Phones</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>3 hours ago </li>
            </ul>
          </div>
      </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="category-custom-two-item">
           <a href="https://odishatv.in/news/entertainment/kajal-aggarwal-achieves-this-milestone-leaving-behind-yash-vijay-rashmika-samantha-162593"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635305093.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635305093.jpg" alt="" title="Kajal Aggarwal"></a>
            <ul class="category-custom-two-post">
              <li><a href="https://odishatv.in/tag/rashmika-mandanna">Rashmika Mandanna</a></li>
              <li><a href="https://odishatv.in/news/entertainment/kajal-aggarwal-achieves-this-milestone-leaving-behind-yash-vijay-rashmika-samantha-162593">Kajal Aggarwal Achieves This Milestone Leaving Behind Yash, Vijay &amp; Samantha</a></li>
            </ul>
            <ul class="category-custom-two-time"> 
              <!-- <li>Odisha</li> -->
              <li>3 hours ago </li>
            </ul>
          </div>
      </div> 
    </div>
  </div>
</section>
<?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>