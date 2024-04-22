<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/bredcum.php'; ?>
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
}
a.author-about-read-less:after {
    font-family: "Font Awesome 5 Free";
    content: "\f30b";
    margin-left: 4px;
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
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 author-image"> <span class="author-img"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/PTI_1621847221.jpeg" alt="PTI" title="PTI"></span> </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 author-name">
                <h2>PTI</h2>
                <ul class="top-bar-tab">
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="author-about-read-less">
    <div id="less">
        <p>This author has no bio.</p> <a class="author-about-read-less" onclick="myFunction('more');">...more</a></div>
    <div id="more">
        <p>This author has no bio.</p> <a class="author-about-read-less" onclick="myFunction('less');">less</a></div>
</div>
<section class="author-details-start-one">
    <div class="container">
        <h1 class="author-details">Posts by PTI</h1>
        <div class="tab-content">
            <div id="the-news-tab" class="tab-pane fade in active">
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/covid-19/daily-rise-in-covid-19-cases-in-india-highest-in-249-days-168804"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1635224192.jpg" alt="India COVID19 Cases" title="India COVID19 Cases"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/covid-19/daily-rise-in-covid-19-cases-in-india-highest-in-249-days-168804">Daily Rise In COVID-19 Cases In India Highest In 249 Days</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/technology/india-successfully-test-fires-brahmos-missile-168803"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/brahmos_1625654680.jpg" alt="brahmos" title="brahmos"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/technology/india-successfully-test-fires-brahmos-missile-168803">India Successfully Test-Fires Brahmos Missile</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/miscellaneous/2-indigo-planes-including-bhubaneswar-bound-flight-avert-mid-air-collision-over-bengaluru-airport-168785"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642645521.jpg" alt="Indigo Mid-Air Collision Averted " title="Indigo Mid-Air Collision Averted "></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/miscellaneous/2-indigo-planes-including-bhubaneswar-bound-flight-avert-mid-air-collision-over-bengaluru-airport-168785">2 Indigo Planes, Including Bhubaneswar-Bound Flight Avert Mid-Air Collision Over Bengaluru Airport</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/kashmiri-pandits-observed-january-19-as-holocaust-day--168775"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1641972956.jpg" alt="Snowfall in Kashmir " title="Snowfall in Kashmir "></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/kashmiri-pandits-observed-january-19-as-holocaust-day--168775">Kashmiri Pandits Observed January 19 As 'Holocaust Day'</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/sports/sania-mirza-to-end-career-after-2022-season-says-body-is-wearing-down-168773"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/Sania-Mirza-1_1617543498.jpg" alt="Sania Mirza" title="Sania Mirza"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/sports/sania-mirza-to-end-career-after-2022-season-says-body-is-wearing-down-168773">Sania Mirza To End Career After 2022 Season, Says Body Is Wearing Down</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/sports/kohli-pant-and-bumrah-move-up-in-latest-icc-test-rankings-168751"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642584250.jpg" alt="Kohli, Pant and Bumrah Move Up In Latest ICC Test Rankings" title="Kohli, Pant and Bumrah Move Up In Latest ICC Test Rankings"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/sports/kohli-pant-and-bumrah-move-up-in-latest-icc-test-rankings-168751">Kohli, Pant and Bumrah Move Up In Latest ICC Test Rankings</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/pm-modi-to-host-first-india-central-asia-summit-on-january-27-168747"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642079817.jpg" alt="PM Modi To Host First India-Central Asia Summit On January 27" title="PM Modi To Host First India-Central Asia Summit On January 27"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/pm-modi-to-host-first-india-central-asia-summit-on-january-27-168747">PM Modi To Host First India-Central Asia Summit On January 27</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/punjab-mining-raids-ed-seizes-rs-10-crore-cash-including-from-cm-s-relative-168745"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1640569934.jpg" alt="Punjab Mining Raids: ED Seizes Rs 10 Crore Cash Including From CM's Relative" title="Punjab Mining Raids: ED Seizes Rs 10 Crore Cash Including From CM's Relative"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/punjab-mining-raids-ed-seizes-rs-10-crore-cash-including-from-cm-s-relative-168745">Punjab Mining Raids: ED Seizes Rs 10 Crore Cash Including From CM's Relative</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/dgca-extends-suspension-of-scheduled-international-passenger-flights-till-feb-28-168737"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1639058041.jpg" alt="DGCA Extends Suspension Of Scheduled International Passenger Flights Till Feb 28" title="DGCA Extends Suspension Of Scheduled International Passenger Flights Till Feb 28"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/dgca-extends-suspension-of-scheduled-international-passenger-flights-till-feb-28-168737">DGCA Extends Suspension Of Scheduled International Passenger Flights Till Feb 28</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/covid-19/active-covid-19-cases-in-country-highest-in-232-days-168727"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642566701.jpg" alt="Active COVID-19 Cases In Country Highest In 232 Days" title="Active COVID-19 Cases In Country Highest In 232 Days"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/covid-19/active-covid-19-cases-in-country-highest-in-232-days-168727">Active COVID-19 Cases In Country Highest In 232 Days</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/international/syndicate-behind-1993-mumbai-blasts-given-state-protection-enjoyed-5-star-hospitality-india-at-un-168718"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642557950.jpg" alt="Crime Syndicate Behind 1993 Mumbai Blasts Given State Protection; Enjoyed 5-Star Hospitality: India " title="Crime Syndicate Behind 1993 Mumbai Blasts Given State Protection; Enjoyed 5-Star Hospitality: India "></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/international/syndicate-behind-1993-mumbai-blasts-given-state-protection-enjoyed-5-star-hospitality-india-at-un-168718">Crime Syndicate Behind 1993 Mumbai Blasts Given State Protection; Enjoyed 5-Star Hospitality: India At UN</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/3-navy-personnel-killed-in-explosion-onboard-ins-ranvir-at-mumbai-dockyard-168713"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1630326466.jpg" alt="Indian Navy " title="Indian Navy "></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/3-navy-personnel-killed-in-explosion-onboard-ins-ranvir-at-mumbai-dockyard-168713">3 Navy Personnel Killed In Explosion Onboard INS Ranvir At Mumbai Dockyard</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/army-rescues-civilians-stuck-in-avalanche-in-j-k-s-kupwara-168695"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/Avalanche-Kashmir_1625293413.jpg" alt="Avalanche Kashmir" title="Avalanche Kashmir"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/army-rescues-civilians-stuck-in-avalanche-in-j-k-s-kupwara-168695">Army Rescues Civilians Stuck In Avalanche In J-K's Kupwara</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/covid-19/centre-flags-decline-in-covid-testing-asks-states-to-enhance-it-168694"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1621419141.jpeg" alt="COVID Testing" title="COVID Testing"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/covid-19/centre-flags-decline-in-covid-testing-asks-states-to-enhance-it-168694">Centre Flags Decline In Covid Testing, Asks States To Enhance It</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/fm-charges-congress-of-fraud-in-entering-into-antrix-devas-deal-cites-sc-judgment-168692"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1629993322.jpg" alt="FM Nirmala Sitharaman" title="FM Nirmala Sitharaman"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/fm-charges-congress-of-fraud-in-entering-into-antrix-devas-deal-cites-sc-judgment-168692">FM Charges Congress Of Fraud In Entering Into Antrix-Devas Deal; Cites SC Judgment</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/covid-19/over-50-lakh-healthcare-frontline-workers-taken-precaution-dose-of-covid-19-vaccine-168673"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1640747101.jpg" alt="Over 50 Lakh Healthcare, Frontline Workers Taken Precaution Dose Of COVID-19 Vaccine" title="Over 50 Lakh Healthcare, Frontline Workers Taken Precaution Dose Of COVID-19 Vaccine"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/covid-19/over-50-lakh-healthcare-frontline-workers-taken-precaution-dose-of-covid-19-vaccine-168673">Over 50 Lakh Healthcare, Frontline Workers Taken Precaution Dose Of COVID-19 Vaccine</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/miscellaneous/rourkela-among-15-winners-of-worldwide-competition-to-recognise-most-ambitious-urban-innovations-168668"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1639035944.jpg" alt="Smart City Rourkela " title="Smart City Rourkela "></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/miscellaneous/rourkela-among-15-winners-of-worldwide-competition-to-recognise-most-ambitious-urban-innovations-168668">Rourkela Among 15 Winners Of Worldwide Competition To Recognise Most Ambitious Urban Innovations</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/national/aap-declares-bhagwant-mann-as-cm-face-for-punjab-assembly-polls-168663"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642494585.jpg" alt="AAP Declares Bhagwant Mann As CM Face For Punjab Assembly Polls" title="AAP Declares Bhagwant Mann As CM Face For Punjab Assembly Polls"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/national/aap-declares-bhagwant-mann-as-cm-face-for-punjab-assembly-polls-168663">AAP Declares Bhagwant Mann As CM Face For Punjab Assembly Polls</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/international/india-to-provide-assistance-to-the-families-of-two-indians-killed-in-uae-envoy-168650"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642487315.jpg" alt="India To Provide Assistance To The Families Of Two Indians Killed In UAE: Envoy" title="India To Provide Assistance To The Families Of Two Indians Killed In UAE: Envoy"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/international/india-to-provide-assistance-to-the-families-of-two-indians-killed-in-uae-envoy-168650">India To Provide Assistance To The Families Of Two Indians Killed In UAE: Envoy</a></h5></div>
                <div class="mobile-listing">
                    <div class="mobile-listing-image">
                        <a href="https://odishatv.in/news/international/concerned-about-excluding-afghan-women-from-public-life-women-from-ethnic-minorities-even-vulnerable-168648"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/IMAGE_1642483062.jpg" alt="Afghanistan" title="Afghanistan"></a>
                    </div>
                    <h5><a href="https://odishatv.in/news/international/concerned-about-excluding-afghan-women-from-public-life-women-from-ethnic-minorities-even-vulnerable-168648">Concerned About Efforts To Exclude Afghan Women From Public Life, Women From Ethnic Minorities Such As Hazara, Hindu Even More Vulnerable: UN Experts</a></h5></div>
                <ul class="search-result-pagination ">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/20" data-ci-pagination-page="2">2</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/40" data-ci-pagination-page="3">3</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/60" data-ci-pagination-page="4">4</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/80" data-ci-pagination-page="5">5</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/100" data-ci-pagination-page="6">6</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/20" data-ci-pagination-page="2" rel="next">Next</a></li>
                    <li><a href="https://odishatv.in/author/pti-16345/14200" data-ci-pagination-page="711">Last</a></li>
                </ul>
            </div>
        </div>
        <!-- //PHOTOS -->
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>