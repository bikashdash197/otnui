<?php include_once 'includes/header.php'; ?>
<style type="text/css">
    /*----------------listing-heading-----------------*/
.listing-news-start {
    border: 1px solid #d1d6d1;
    padding-right: 10px;
    padding-left: 10px;
    margin-bottom: 20px;
}
.listing-heading{
    font-size: 27px;
    border-bottom: 1px #9e9b9b dashed;
    padding-bottom: 6px;
    font-family: 'Faustina', serif;
}
.odisha-page-main-title {
    position: relative;
    display: inline-block;
    width: 100%;
}
.odisha-page-main-title .listing-heading {
    float: left;
    width: fit-content;
    border-bottom: none;
}
.odisha-select-city select {
    border: solid 1px #d4bbba;
    background-color: #f1f1f6;
    padding: 5px 10px;
    outline: none;
}
.odisha-select-city {
    float: right;
    margin-top: 16px;
}
/*----------------listing-heading-----------------*/
/*----------------listing-result-pagination-----------------*/
.listing-result-pagination {
    display: inline-block;
    padding-left: 366px;
    margin: 14px 0px 7px 29px;
    border-radius: 4px;
    align-items: center;
}
.listing-result-pagination>li {
    display: inline;
}
.listing-result-pagination>li>a, .search-result-pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #383737;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
/*----------------//listing-result-pagination-----------------*/
/*----------------listing-result-news-----------------*/
.listing-result-news {
    position: relative;
    border-bottom: 1px solid #efe2e6;
    display: inline-block;
    width: 100%;
    min-height: 145px;
    padding-left: 234px;
    margin-bottom: 10px;
}
.listing-result-news img {
    width: 224px;
    height: 126px;
    object-fit: cover;
    position: absolute;
    left: 0;
    top: 9px;
}
.listing-result-news h5 {
    font-size: 22px;
    text-decoration: none;
    display: block;
    color: #000;
    line-height: 29px;
    margin: 0px 0px 5px 0px;
    padding: 0px;
    font-family: 'Faustina', serif;
}
.listing-result-news p {
    font-size: 17px;
    line-height: 24px;
    font-family: 'Faustina', serif;
}
.listing-result-news:last-child{
    border-bottom: none;
}
.listing-result-news-subcontent ul {
    margin: 0px;
    padding: 0px;
}
.listing-result-news-subcontent ul li {
    display: inline-block;
}
.listing-result-news-subcontent ul li a {
    color: #7b0505;
    border: 1px solid #aba1a1;
    padding: 2px 10px 2px 10px;
    margin: 10px 3px;
    border-radius: 5px;
    display: inline-block;
}
a.search-result-news-type {
    position: absolute;
    left: 7px;
    top: 27px;
    background-color: #f05127;
    width: 30px;
    color: #fff;
    display: block;
    line-height: 30px;
    font-size: 17px;
    text-align: center;
}
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
ul.search-result-pagination li a {
    text-decoration: none;
    display: block;
    color: #2e2e2e;
    height: 30px;
    line-height: 30px;
    width: 40px;
    text-align: center;
    margin: 0px;
    padding: 0px;
}
ul.search-result-pagination li.active a {
    background: #7b0505;
    color: white !important;
}
ul.search-result-pagination li:last-child {
    border: none;
}
ul.search-result-pagination li a:hover {
    color: #7b0505;
}   
/*----------------//listing-result-news-----------------*/
.author-banner {
  background-color: #706f6f;
  width: 100%;
  position: relative;
  padding: 17px 17px;
}
.author-banner h1 {
  color: #fff;
  font-size: 28px;
  margin: 0;
  padding-top: 45px;
}
.author-banner h3 {
  display: none;
}
ul.social-media {
  float: right;
  margin: 0;
  padding: 0;
  padding-top: 16px;
}
ul.social-media li {
  list-style-type: none;
  display: inline;
}
ul.social-media li a {
  margin: 0 0;
  padding: 0 7px;
  color: #fff;
}
ul.social-media li a:hover {
  color: #f05127;
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
span.author-img img {
  border-radius: 50%;
  width: 150px;
  height: 150px;
  object-fit: cover;
  border: 2px solid #ffff;
  box-shadow: 0 2px 8px #9a9797;
}
.author-name h2 {
  color: #fff;
  margin: 0;
  padding: 0;
  margin-bottom: 0;
  border-bottom: 1px solid;
  width: fit-content;
  font-size: 25px;
}
.author-name h4 {
  font-size: 16px;
  color: #c5c5c5;
}
ul.author-follow {
  margin: 20px 0;
  padding: 0;
}
ul.author-follow li {
  display: inline;
  margin-right: 17px;
  list-style-type: none;
  color: #ffff;
}
ul.author-follow li a {
  color: #ffff;
}
ul.author-follow li:first-child {
  border: 1px solid #fff;
  padding: 4px;
}
ul.author-follow li:first-child i {
  font-size: 10px;
  margin-right: 5px;
}
.author-banner1 {
  width: 100%;
  float: left;
  background-color: #706f6f;
  border-top: 1px solid #797676;
  padding: 10px 0;
  margin-bottom: 25px;
}
ul.top-bar-tab {
  margin: 0;
  padding: 0;
  display: inline-block;
}
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
  line-height: 26px;
  font-size: 16px;
  text-transform: capitalize;
  padding: 19px 21px;
}
h1.author-details {
  margin: 18px 0;
  padding: 0;
  border-bottom: 1px solid #d1caca;
  font-size: 29px;
}
.author-aboutus p {
  font-size: 18px;
}
h4.author-social {
  font-size: 24px;
  border-bottom: 1px solid grey;
  width: fit-content;
}
ul.author-login {
  position: absolute;
  top: 0;
  right: 130px;
}
ul.author-login li a {
  text-decoration: none;
  display: block;
  color: #fff;
  text-transform: uppercase;
  font-weight: 500;
  margin: 0;
  padding: 0 9px;
  line-height: 40px;
  font-size: 15px;
}
ul.author-login li a i {
  margin-left: 10px;
}
.author-about-read-less {
  background-color: #f1f1f6;
}
.author-about-read-less p {
  color: #666;
  font-size: 17px;
  line-height: 18px;
  margin: 0;
  padding: 5px 5px;
}
a.author-about-read-less {
  outline: 0;
  padding: 0;
  width: fit-content;
  border: none;
  color: #7b1c18;
  text-transform: capitalize;
  font-size: 17px;
  border-radius: 2px;
  float: right;
  font-weight: 700;
  transition-duration: 0.5s;
  display: block;
  position: relative;
  cursor: pointer;
}
a.author-about-read-less:after {
  font-family: "Font Awesome 5 Free";
  content: "\f30b";
  margin-left: 4px;
}
#more {
  display: none;
}
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad"></div>
<section class="main-article">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 sticky">
                <!-- PHOTO GALLERY -->
                <div class="author-banner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3"> <span class="author-img"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1618575943.JPG" alt="Rajendra Prasad Mohapatra" title="Rajendra Prasad Mohapatra"></span> </div>
                        <div class="col-lg-9 col-md-9 author-name">
                            <h1>Rajendra Prasad Mohapatra</h1>
                            <h3>Editor</h3>
                            <ul class="social-media">
                                <li><a href="#">Follow</a>
                                    <li><a href="https://www.facebook.com/rajendra.mohapatra.39"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="author-about-read-less">
                    <div id="less">
                        <p>A Bhubaneswar based senior journalist. He extensively writes in many subjects, but &nbsp;his expertise is on sports, motivational &nbsp;and special stories.</p> <a class="author-about-read-less" onclick="myFunction('more');">...more</a></div>
                    <div id="more">
                        <p>A Bhubaneswar based senior journalist. He extensively writes in many subjects, but &nbsp;his expertise is on sports, motivational &nbsp;and special stories.</p> <a class="author-about-read-less" onclick="myFunction('less');">less</a></div>
                </div>
                <div class="tab-content">
                    <!-- THE NEWS -->
                    <div >
                        <h2>Posts by Rajendra Prasad Mohapatra</h2>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/covid-19/22-employees-of-bhubaneswar-municipal-corporation-test-covid-19-positive-168283"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1637478782.jpg" alt="Bhubaneswar Municipal Corporation " title="Bhubaneswar Municipal Corporation "></a><a href="https://odishatv.in/news/covid-19/22-employees-of-bhubaneswar-municipal-corporation-test-covid-19-positive-168283"><h5>22 Employees Of Bhubaneswar Municipal Corporation Test Covid-19 Positive</h5></a>
                            <p>Restriction on public entry into BMC office has been imposed</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/covid-19/covid-surge-gatherings-at-sea-beaches-in-odisha-s-ganjam-banned-for-makar-sankranti-168282"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642055604.jpg" alt="Sea Beaches" title="Sea Beaches"></a><a href="https://odishatv.in/news/covid-19/covid-surge-gatherings-at-sea-beaches-in-odisha-s-ganjam-banned-for-makar-sankranti-168282"><h5>Covid Surge: Gatherings At Sea Beaches In Odisha’s Ganjam Banned For Makar Sankranti</h5></a>
                            <p>All the sea beaches in Ganjam district will remain close for the tourists from January 13-17 to avoid congregation and hence the spread of the virus</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/covid-19/30-more-students-of-fm-medical-college-in-odisha-s-balasore-test-positive-168278"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642051180.jpg" alt="FM Medical College " title="FM Medical College "></a><a href="https://odishatv.in/news/covid-19/30-more-students-of-fm-medical-college-in-odisha-s-balasore-test-positive-168278"><h5>30 More Students Of FM Medical College In Odisha’s Balasore Test Positive</h5></a>
                            <p>As many as 220 students of the college had undergone RT-PCR test of which 30 tested positive</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/sports/on-field-war-of-words-get-the-best-out-of-jasprit-bumrah-168269"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642046654.jpg" alt="Jasprit Bumrah" title="Jasprit Bumrah"></a><a href="https://odishatv.in/news/sports/on-field-war-of-words-get-the-best-out-of-jasprit-bumrah-168269"><h5>On-Field War Of Words Get The Best Out Of Jasprit Bumrah</h5></a>
                            <p>Jaffer in a way warned the rest of the world to take note of the fact that if the opposition players are trying to have a go at Bumrah, the pace sensation has the ability...</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/resentment-brews-over-closure-of-national-programme-for-prevention-control-of-fluorosis-in-angul-168265"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642043444.jpg" alt="Fluorosis In Angul" title="Fluorosis In Angul"></a><a href="https://odishatv.in/news/miscellaneous/resentment-brews-over-closure-of-national-programme-for-prevention-control-of-fluorosis-in-angul-168265"><h5>Resentment Brews Over Closure Of National Programme For Prevention & Control Of Fluorosis In Angul</h5></a>
                            <p>Fluorosis, a public health problem is caused by excess intake of fluoride through drinking water, food products and industrial pollutants over a long period. It results in major health disorders like dental fluorosis, skeletal fluorosis...</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/sports/women-s-asia-cup-hockey-odisha-s-deep-grace-ekka-appointed-vice-captain-of-indian-team-168215"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641977982.jpg" alt="Indian Team" title="Indian Team"></a><a href="https://odishatv.in/news/sports/women-s-asia-cup-hockey-odisha-s-deep-grace-ekka-appointed-vice-captain-of-indian-team-168215"><h5>Women’s Asia Cup Hockey: Odisha’s Deep Grace Ekka Appointed Vice-Captain Of Indian Team</h5></a>
                            <p>Experienced goalkeeper Savita will lead the team in regular skipper Rani Rampal’s absence</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/portion-of-under-construction-bridge-collapses-in-odisha-s-kendrapara-168210"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641976420.jpg" alt="Under-Construction Bridge Collapses" title="Under-Construction Bridge Collapses"></a><a href="https://odishatv.in/news/miscellaneous/portion-of-under-construction-bridge-collapses-in-odisha-s-kendrapara-168210"><h5>Portion Of Under-Construction Bridge Collapses In Odisha’s Kendrapara</h5></a>
                            <p>The incident took place when a slab of the bridge over Ashrukhala canal was laid over the steel span. The span suddenly gave way causing the steel frame and span come down crashing</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/pothole-filled-road-in-odisha-s-kendrapara-snuffing-out-precious-lives-168202"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641970627.jpg" alt="Pothole Filled Road" title="Pothole Filled Road"></a><a href="https://odishatv.in/news/miscellaneous/pothole-filled-road-in-odisha-s-kendrapara-snuffing-out-precious-lives-168202"><h5>Pothole Filled Road In Odisha’s Kendrapara Snuffing Out Precious Lives</h5></a>
                            <p>The road has become dangerous with bikers and pedestrians facing accidents on a regular basis due to the potholes. Many precious lives were lost on this road so far</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/sports/virat-kohli-pulls-kagiso-rabada-s-bouncer-to-hit-rare-six-in-cape-town-watch-168195"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641965546.jpg" alt="Virat Kohli" title="Virat Kohli"></a><a href="https://odishatv.in/news/sports/virat-kohli-pulls-kagiso-rabada-s-bouncer-to-hit-rare-six-in-cape-town-watch-168195"><h5>Virat Kohli Pulls Kagiso Rabada’s Bouncer To Hit ‘Rare’ Six In Cape Town #Watch</h5></a>
                            <p>Kohli’s six came off a pull shot of Kagiso Rabada’s bouncer in the 41st over. It was also the visitor’s first maximum of the match</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/politics/odisha-moves-supreme-court-again-over-border-dispute-with-andhra-pradesh-168189"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1639122007.jpg" alt="Odisha Moves Supreme Court Again Over Border Dispute With Andhra Pradesh " title="Odisha Moves Supreme Court Again Over Border Dispute With Andhra Pradesh "></a><a href="https://odishatv.in/news/politics/odisha-moves-supreme-court-again-over-border-dispute-with-andhra-pradesh-168189"><h5>Odisha Moves Supreme Court Again Over Border Dispute With Andhra Pradesh</h5></a>
                            <p>Odisha government has filed a fresh petition in the Apex court to give a clear verdict on Kotia issue in order to solve the Inter-State border dispute with the neighbouring State</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/12-168185"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1629701474.jpeg" alt="breaking news" title="breaking news"></a><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/12-168185"><h5>Latest Odisha Breaking News Updates - Wednesday, 12 January 2022</h5></a>
                            <p>When it comes to breaking news for you the fastest and in the most comprehensive and accurate manner, be it from Odisha or beyond, OdishaTV is the best</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/sports/is-former-head-coach-ravi-shastri-venting-his-frustrations-at-bcci-168151"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641893017.jpg" alt="Ravi Shastri" title="Ravi Shastri"></a><a href="https://odishatv.in/news/sports/is-former-head-coach-ravi-shastri-venting-his-frustrations-at-bcci-168151"><h5>Is Former Head Coach Ravi Shastri Venting His Frustrations At BCCI</h5></a>
                            <p>Shastri’s behaviour has reportedly not gone down well with the BCCI authorities and some former cricketers. </p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/eminent-litterateur-manglu-charan-biswal-passes-away-condolences-pour-in-168136"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641884139.jpg" alt="Manglu Charan Biswal " title="Manglu Charan Biswal "></a><a href="https://odishatv.in/news/miscellaneous/eminent-litterateur-manglu-charan-biswal-passes-away-condolences-pour-in-168136"><h5>Eminent Litterateur Manglu Charan Biswal Passes Away, Condolences Pour In</h5></a>
                            <p>Though Biswal was a teacher by profession, his passion was writing. He started writing from his school days and carved a niche for himself in the field of literature over the past several decades. He...</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/covid-19/fm-medical-college-s-hostel-declared-containment-zone-after-15-students-catch-covid-168133"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641879896.jpg" alt="FM Medical College" title="FM Medical College"></a><a href="https://odishatv.in/news/covid-19/fm-medical-college-s-hostel-declared-containment-zone-after-15-students-catch-covid-168133"><h5>FM Medical College's Hostel Declared Containment Zone After 15 Students Catch Covid</h5></a>
                            <p>The infected students have been kept under isolation and necessary medical assistance is being provided to them</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/former-odisha-minister-duryodhan-majhi-passes-away-168127"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641872619.jpg" alt="Duryodhan Majhi" title="Duryodhan Majhi"></a><a href="https://odishatv.in/news/miscellaneous/former-odisha-minister-duryodhan-majhi-passes-away-168127"><h5>Former Odisha Minister Duryodhan Majhi Passes Away</h5></a>
                            <p>Majhi was a five time MLA from Khariar Assembly constituency</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/famous-sulia-jatra-kick-starts-in-odisha-s-bolangir-with-animal-sacrifice-168125"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641872131.jpg" alt="Sulia Jatra" title="Sulia Jatra"></a><a href="https://odishatv.in/news/miscellaneous/famous-sulia-jatra-kick-starts-in-odisha-s-bolangir-with-animal-sacrifice-168125"><h5>Famous Sulia Jatra Kick Starts In Odisha’s Bolangir With Animal Sacrifice</h5></a>
                            <p>The tribals believe that appeasing the deity by sacrificing animals brings good rainfall and harvest</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/odisha-election-commission-likely-to-announce-panchayat-polls-schedule-today-168122"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641868985.jpg" alt="Panchayat Polls" title="Panchayat Polls"></a><a href="https://odishatv.in/news/miscellaneous/odisha-election-commission-likely-to-announce-panchayat-polls-schedule-today-168122"><h5>Odisha Election Commission Likely To Announce Panchayat Polls Schedule Today</h5></a>
                            <p>The Opposition political parties have demanded postponement of the polls for the third wave of the pandemic and lack of reservation for ST and OBC candidates</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/miscellaneous/farmers-spend-sleepless-nights-in-biting-cold-awaiting-paddy-procurement-in-sonepur-168021"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641730012.jpg" alt="Paddy Procurement" title="Paddy Procurement"></a><a href="https://odishatv.in/news/miscellaneous/farmers-spend-sleepless-nights-in-biting-cold-awaiting-paddy-procurement-in-sonepur-168021"><h5>Farmers Spend Sleepless Nights In Biting Cold Awaiting Paddy Procurement In Sonepur</h5></a>
                            <p>The farmers have received tokens to sell their crops at the Mandi. However, their paddy is yet to be procured due to the absence of millers</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/politics/odisha-bjp-puts-question-mark-on-transparency-of-upcoming-panchayat-polls-168015"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/Odisha_BJP_1641724683.jpg" alt="Odisha BJP" title="Odisha BJP"></a><a href="https://odishatv.in/news/politics/odisha-bjp-puts-question-mark-on-transparency-of-upcoming-panchayat-polls-168015"><h5>Odisha BJP Puts Question Mark On Transparency Of Upcoming Panchayat Polls</h5></a>
                            <p>The saffron party has expressed serious doubts over the preparation of the voter lists</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <div class="listing-result-news">
                            <a href="https://odishatv.in/news/sports/cricket-this-week-bumrah-s-warning-to-proteas-sachin-warne-agreement-moeen-ali-cook-s-live-clash-168008"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641717525.jpg" alt="Jasprit Bumrah " title="Jasprit Bumrah "></a><a href="https://odishatv.in/news/sports/cricket-this-week-bumrah-s-warning-to-proteas-sachin-warne-agreement-moeen-ali-cook-s-live-clash-168008"><h5>Cricket This Week: Bumrah’s Warning To Proteas, Sachin-Warne Agreement; Moeen Ali-Cook’s Live Clash</h5></a>
                            <p>The cricketing world witnessed an interesting week with little banters between many current and former great players</p>
                            <div class="listing-result-news-subcontent"> </div>
                        </div>
                        <ul class="search-result-pagination ">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/20" data-ci-pagination-page="2">2</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/40" data-ci-pagination-page="3">3</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/60" data-ci-pagination-page="4">4</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/80" data-ci-pagination-page="5">5</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/100" data-ci-pagination-page="6">6</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/20" data-ci-pagination-page="2" rel="next">Next</a></li>
                            <li><a href="https://odishatv.in/author/rajendra-prasad-mohapatra-16335/1300" data-ci-pagination-page="66">Last</a></li>
                        </ul>
                    </div>
                    <!-- //THE NEWS -->
                    <!-- ABOUT -->
                    <div id="about-tab" class="tab-pane fade">
                        <div class=author-aboutus>
                            <p>A Bhubaneswar based senior journalist. He extensively writes in many subjects, but &nbsp;his expertise is on sports, motivational &nbsp;and special stories.</p>
                        </div>
                    </div>
                    <!-- //ABOUT -->
                </div>
                <!-- //RELATED NEWS -->
            </div>
 <?php include 'includes/sidebar.php';?>
        </div>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>