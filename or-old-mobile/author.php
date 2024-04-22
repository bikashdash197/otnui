<?php include_once 'includes/header.php'; ?>
<style type="text/css">
/*=================== listing ====================*/
section.mobile-listing-sec {
    float: left;
    width: 100%;
}
.mobile-listing-start {
    float: left;
    margin: 0px;
    background-color: white;
    border: 1px solid #ecebeb;
    padding: 10px 0px;
    width: 100%;
}
.mobile-listing {
    position: relative;
    margin: 0px 0px 15px 0px;
    border-bottom: 1px solid #dfdcdc;
    padding: 0px 0px 5px 103px;
    display: inline-block;
    width: 100%;
    min-height: 64px;
}
.mobile-listing:last-child {
    border-bottom: none;
}
h1.about-page-main-heading {
    margin: 15px 0px;
    padding: 0px;
    font-size: 31px;
    display: inline-block;
}
h1.listing-heading {
    margin: 15px 0px;
    padding: 0px;
    font-size: 22px;
    display: inline-block;
}
h3.about-subheading {
    margin: 0px;
    padding: 0px;
}
.mobile-listing-image {
    position: absolute;
    left: 0px;
}
.mobile-listing-image i {
    color: #f50000;
    position: absolute;
    left: 5px;
    top: 5px;
    font-size: 18px;
}
.mobile-listing h5 {
    font-size: 17px;
    text-decoration: none;
    color: #000;
    line-height: 20px;
    margin: -5px 0px 0px 0px;
    padding: 0px;
}
.mobile-listing-image img {
    width: 96px;
    height: 54px;
}
.mobile-listing h5 a {
    color: #252525;
}
ul.search-result-pagination li {
    list-style-type: none;
    display: table-cell;
    border-right: 1px solid #efe2e6;
    margin: 0px;
    padding: 0px;
}
ul.search-result-pagination li.active a {
    background: #a00606;
    color: white !important;
}
ul.search-result-pagination li:last-child {
    border: none;
}
ul.search-result-pagination li a:hover {
    color: #a00606;
}	

/*=================== //listing ====================*/
/*================ Author ==================*/
section.author-details-start-one {
    float: left;
    width: 100%;
}
ul.top-bar-tab {
margin: 0;
padding: 0;
display: inline-block;
float: right;
padding-top: 14px;
}
.author-banner {
background-color: #000;
width: 100%;
float: left;
position: relative;
padding: 14px 0px;
}

.author-image{
text-align: left;
}
span.author-img img {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-top: 0px;
    object-fit: cover;
    border: 2px solid #ffff;
    box-shadow: 0 2px 8px #9a9797;
}
.author-name h2 {
    color: #fff;
    margin: 0px;
    padding-top: 9px;
    margin-bottom: 0px;
    border-bottom: 1px solid;
    width: fit-content;
    font-size: 23px;
}
.author-name h4 {
    font-size: 16px;
    color: #c5c5c5;
}
ul.author-follow {
    margin: 20px 0;
    padding: 0px;
}
ul.author-follow li {
    display: inline;
    margin-right: 17px;
    list-style-type: none;
    color: #ffff;
}
ul.author-follow li a {
    color: #ffff
}
ul.author-follow li:first-child {
    border: 1px solid #fff;
    padding: 4px;
}
ul.author-follow li:first-child i {
    font-size: 10px;
    margin-right: 5px;
}

.author-about-read-less {
    background-color: #f1f1f6;
    float: left;
    width: 100%;
}
.author-about-read-less p {
   
    color: #807979;
    font-size: 17px;
    line-height: 18px;
    margin: 0px;
    padding: 5px 5px;
}
a.author-about-read-less {
    outline: none;
    padding: 0px;
    width: fit-content;
    border: none;
    color: #7b1c18;
    text-transform: capitalize;
    font-size: 17px;
    border-radius: 2px;
    float: right;
    font-weight: 500;
    transition-duration: .5s;
    display: block;
    position: relative;
    cursor: pointer;
    margin-right: 18px;
}
a.author-about-read-less:after {
    content: "";
    background-image: url(images/svg/long-arrow.svg);
    margin-left: 8px;
    display: block;
    width: 13px;
    height: 5px;
    background-repeat: no-repeat;
    position: absolute;
    right: -17px;
    top: 10px;
}
#more {display: none;}
ul.top-bar-tab li {
    list-style-type: none;
    display: inline;
}
ul.top-bar-tab li.active a {
    color: #fff;
    background-color: #af262d;
}
ul.top-bar-tab li a:hover {
    color: #fff;
    background-color: #af262d;
}
ul.top-bar-tab li a {
    color: #ffff;
    margin-right: -4px;
    text-decoration: none;
    line-height: 14px;
    font-size: 16px;
    text-transform: capitalize;
    padding: 10px 16px;
}
ul.social-media {
    float: right;
    margin: 0;
    padding:0;
}
ul.social-media li {
 list-style-type: none;
 display: inline
}
ul.social-media li a {
    margin: 0px 0px;
    padding: 0px 7px;
    color: #fff;
}
ul.social-media li a:hover {
    color: #f05127;
}
.author-banner1 {
    width: 100%;
    float: left;
    background-color: #000;
    border-top: 1px solid #797676;
    padding: 8px 0px;
}
.social-media li a i {
    border-radius: 50px;
    border: 1px solid;
    padding: 10px;
    width: 30px;
    height: 30px;
    text-align: center;
    font-size: 10px;
}
ul.author-login {
    position: absolute;
    top: -21px;
    right: 0px;
}
ul.author-login li a {
    text-decoration: none;
    display: block;
    color: #fff;
    text-transform: uppercase;
    font-weight: 500;
    margin: 0px;
    padding: 0px 9px;
    line-height: 40px;
    font-size: 15px;
}
ul.author-login li a i {
    margin-left: 10px;
}
h1.author-details {
    margin: 14px 0px;
    padding: 0;
    border-bottom: 1px solid #d1caca;
    font-size: 24px;
    width: 100%;
    float: left;
}
.author-aboutus p {
    font-size: 16px;
    width: 100%;
    float: left;
    line-height: 22px;
}
h4.author-social {
    font-size: 21px;
    border-bottom: 1px solid grey;
    width: fit-content;
}
ul.about-us-web-link {
    margin: 0px 0px 20px 0px;
    padding: 0px;
}
ul.about-us-web-link li {
    list-style-type: none;
    text-decoration: none;
    display: block;
    color: #000;
    font-size: 14px;
    position: relative;
    padding-left: 15px;
}
ul.about-us-web-link li a {
    text-decoration: none;
    display: block;
    color: #000;
    font-size: 14px;
    position: relative;
    padding-left: 15px;
}
ul.about-us-web-link li a:before {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    top: 6px;
    width: 7px;
    height: 7px;
    background-color: #f7b437;
    border-radius: 50%;
}
/*================ //Author ==================*/
ul.search-result-pagination {
    margin: 15px auto;
    padding: 0px;
    border: 1px solid #efe2e6;
    width: fit-content;
    border-radius: 4px;
    overflow: hidden;
    text-align: center;
}

ul.search-result-pagination li {
    list-style-type: none;
    display: table-cell;
    border-right: 1px solid #efe2e6;
    margin: 0px;
    padding: 0px;
}
ul.search-result-pagination li.active a {
    background: #a00606;
    color: white !important;
}
ul.search-result-pagination li:last-child {
    border: none;
}
ul.search-result-pagination li a:hover {
    color: #a00606;
}	
ul.search-result-pagination li a {
    padding: 10px;
}
</style>
<section class="author-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 author-image">
      <span class="author-img"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1626675966.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1626675966.jpg" alt="Rajalaxmi Sahoo" title="Rajalaxmi Sahoo" pinger-seen="true"></span>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 author-name">
        <h2>Rajalaxmi Sahoo</h2>
        <ul class="top-bar-tab">
     <li><a href="https://www.facebook.com/princes.gudli"><i class="fab fa-facebook-f"></i></a></li><li><a href=""><i class="fab fa-twitter"></i></a></li><li><a href=""><i class="fab fa-instagram"></i></a></li>          
          </ul>
      </div>
    </div>
  </div>
</section>
<div class="author-about-read-less">
    <div id="less" style="display: inline;">
    		<p>ରେଭେନ୍ସା ବିଶ୍ୱବିଦ୍ୟାଳୟରୁ ରାଜନୀତି ବିଜ୍ଞାନରେ ଡିଗ୍ରୀ ହାସଲ ପରେ ବିଜେବି କଲେଜର <a class="author-about-read-less" onclick="myFunction('more');">...more</a></p>
    </div>
    <div id="more" style="display: none;">
	    	<p>ରେଭେନ୍ସା ବିଶ୍ୱବିଦ୍ୟାଳୟରୁ ରାଜନୀତି ବିଜ୍ଞାନରେ ଡିଗ୍ରୀ ହାସଲ ପରେ ବିଜେବି କଲେଜରୁ ସାମ୍ବାଦିକତାରେ ମାଷ୍ଟର ଡିଗ୍ରୀ ହାସଲ। ପ୍ରିଣ୍ଟ୍ ଓ ଡିଜିଟାଲ୍&zwnj; ମିଡିଆରେ ୫ ବର୍ଷରୁ ଅଧିକ ସମୟ କାର୍ଯ୍ୟ କରିବାର ଅଭିଜ୍ଞତା। ସ୍ପେଶାଲ୍&zwnj; ନ୍ୟୁଜ୍&zwnj; ଓ ମନୋରଞ୍ଜନ ଖବର ପରିବେଷଣ କରିବାର ଦକ୍ଷତା ରହିଛି।</p>
	 		<a class="author-about-read-less" onclick="myFunction('less');">less</a>
 		</div>     
</div>
<section class="author-details-start-one">
	<div class="container">
		<h1 class="author-details">Posts by Rajalaxmi Sahoo</h1>
		<div class="tab-content">
			<div  class="tab-pane active">
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଓଡ଼ିଶାରେ ପିକ୍&zwnj; ସ୍ତରରେ ପହଞ୍ଚିପାରେ କରୋନା ସଂକ୍ରମଣ, ଜାଣନ୍ତୁ କେବେ...</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଚୋର ଡାଳେ ଡାଳେ ଗଲେ ପୋଲିସ୍&zwnj; ପତ୍ରେ ପତ୍ରେ, ଦେଶୀ ମଦ ପାଇଁ ଗଛରେ ଚଢ଼ିଲେ ପୋଲିସ୍&zwnj;</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ରାଜ୍ୟରେ ଦିନକରେ ୪,୮୨୯ କରୋନା ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ: ଖୋର୍ଦ୍ଧାରୁ କେବଳ ବାହାରିଲେ ୯୩୩</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">୫ ରାଜ୍ୟରେ ଟିକାକରଣ ସାର୍ଟିଫିକେଟ୍&zwnj;ରୁ ହଟିବ ପ୍ରଧାନମନ୍ତ୍ରୀ ମୋଦିଙ୍କ ଫଟୋ</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ସପ୍ତାହାନ୍ତ ସଟ୍&zwnj;ଡାଉନ୍&zwnj; ସତ୍ତ୍ୱେ ବଢ଼ୁଛି ସଂକ୍ରମଣ, କଡ଼ାକଡ଼ି ହୋଇପାରେ କଟକଣା</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ମାଓବାଦୀଙ୍କ ନୃଶଂସ କାଣ୍ଡ: ପ୍ରଜାକୋର୍ଟ ବସାଇ ୨ ଗ୍ରାମବାସୀଙ୍କ ଗଳାକାଟି ହତ୍ୟା</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">'ଡେଲ୍&zwnj;ଟାକ୍ରନ୍&zwnj;': ସାମ୍ନାକୁ ଆସିଲା କରୋନାର ନୂଆ ଭାରିଆଣ୍ଟ</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ନଦୀ ଉପରେ ଦୁର୍ବୃତ୍ତଙ୍କ ଲୋଲୁପ ଦୃଷ୍ଟି: ରାତି ହେଲେ ବିଷ ପକାଇ ମାରୁଛନ୍ତି ମାଛ, ବୁଲୁଛି ବେଆଇନ୍&zwnj; ଟ୍ରଲର</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଭୁବନେଶ୍ୱରରେ ବଢ଼ିଲା କଣ୍ଟେନମେଣ୍ଟ ଜୋନ୍, ୭ ଦିନ ଯାଏ କଟକଣା</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">‘Google’ ବିରୋଧରେ ହେବ ତଦନ୍ତ, ଆସିଲା ସାଂଘାତିକ ଅଭିଯୋଗ</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଅପହରଣ ପରେ ୧୦ ଦିନ ଯାଏ ଦୁଷ୍କର୍ମ ! ଲକ୍&zwnj;ଡାଉନ୍&zwnj; ଯୋଗୁ ଦେଇପାରିନଥିଲେ ଲୋନ୍&zwnj; କିସ୍ତି ଟଙ୍କା</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଦିନକରେ ଦେଶରେ ଦେଢ଼ ଲକ୍ଷରୁ ଅଧିକ କରୋନା ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ, ପଜିଟିଭିଟି ହାର ୧୦.୨୧%କୁ ବୃଦ୍ଧି</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଓଡ଼ିଶାରେ ୪ ହଜାର ଟପିଲା ଦୈନିକ ସଂକ୍ରମଣ; ୨୪ ଘଣ୍ଟାରେ ୪,୭୧୪ ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ସୁକେଶଙ୍କ ସହ ଜ୍ୟାକଲିନ୍&zwnj;ଙ୍କ ଅନ୍ତରଙ୍ଗ ମୁହୂର୍ତ୍ତର ଫଟୋ ଭାଇରାଲ୍&zwnj;</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ରାଜ୍ୟରେ କରୋନାର ବିସ୍ଫୋରକ ସ୍ଥିତି, କେମିତି ହେବ ପଞ୍ଚାୟତ ନିର୍ବାଚନ ?</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ଓଟିଭି YouTubeରେ ସବ୍&zwnj;ସ୍କ୍ରାଇବର ସଂଖ୍ୟା ୭ ମିଲିଅନ୍ ପାର୍</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ସାମ୍ନାକୁ ଆସିଲା ଓମିକ୍ରନ୍&zwnj;ର ୫ ମାରାତ୍ମକ ଲକ୍ଷଣ</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">ରାଜେନ୍ଦ୍ର ୟୁନିଭର୍ସିଟିରେ ପଶିଲା କରୋନା, ଭିସୁଟ୍&zwnj;ରେ ଅଫଲାଇନ୍&zwnj; ପରୀକ୍ଷା ସ୍ଥଗିତ</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">‘ଡେଲ୍&zwnj;ଟା ଭାରିଆଣ୍ଟ ତୁଳନାରେ କମ୍&zwnj; ଗୁରୁତର ଓମିକ୍ରନ୍&zwnj;’</a></h5></div>
				<div class="mobile-listing">
					<div class="mobile-listing-image">
						<a href="#"><img src="images/small-img.jpg" data-src="images/pre-load-img.gif" alt="" title="" ></a>
					</div>
					<h5><a href="#">NEET-PG କାଉନସେଲିଂକୁ ନେଇ ବଡ଼ ରାୟ ଶୁଣାଇଲେ ସୁପ୍ରମିକୋର୍ଟ</a></h5></div>
				<ul class="search-result-pagination ">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#" data-ci-pagination-page="2">2</a></li>
					<li><a href="#" data-ci-pagination-page="3">3</a></li>
					<li><a href="#" data-ci-pagination-page="4">4</a></li>
					<li><a href="#" data-ci-pagination-page="5">5</a></li>
					<li><a href="#" data-ci-pagination-page="6">6</a></li>		
				</ul>
		</div>
	</div>
		<!-- //PHOTOS -->
	</div>
</section>
<?php include_once 'includes/footer.php'; ?>