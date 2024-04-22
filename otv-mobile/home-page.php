<?php include_once 'includes/header.php'; ?>

<style>
a, a:active, a:focus, a:hover {
text-decoration: none;
}
h3.heading-style-one {
    margin: 0 0 15px 0;
    padding: 0 0 0 36px;
    font-weight: 700;
    font-size: 18px;
    position: relative;
    padding-right: 50px;
    text-transform: uppercase;
    color: #000;
    font-family: Faustina,serif;
}

h3.heading-style-one:before {
    content: "";
    display: block;
    background-color: #7b0505;
    position: absolute;
    left: 0;
    top: 4px;
    width: 30px;
    height: 13px;
}
h3.heading-style-two {
    margin: 0 0 15px 0;
    padding: 0 0 0 36px;
    font-weight: 700;
    font-size: 18px;
    position: relative;
    padding-right: 50px;
    text-transform: uppercase;
    color: #fff;
    font-family: Faustina,serif;
}
h3.heading-style-two:before {
    content: "";
    display: block;
    background-color: #7b0505;
    position: absolute;
    left: 0;
    top: 4px;
    width: 30px;
    height: 13px;
}
/* Vertical Morque */
.spotlight-nod-container {
    overflow: hidden;
    height: 303px;
}
.spotlight-nod {
    position: relative;
}
.spotlight-nod-main {
    position: relative;
}
.spotlight-nod-items {
    position: relative;
    padding-bottom: 15px;
    border-left: solid 2px #f4b136;
    padding-left: 15px;
}
.spotlight-nod-items:before {
    content: "";
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-left: 10px solid #f4b136;
    border-bottom: 7px solid transparent;
    position: absolute;
    left: -2px;
    top: -1px;
}
.spotlight-nod-items h4 {
    font-size: 17px;
    text-decoration: none;
    display: inline-block;
    color: #000;
    line-height: 22px;
    margin: 0px;
    margin-top: -3px;
    overflow: hidden;
    height: 43px;
}
.spotlight-nod-items h4 a {
    color: #000;
}
a.cat-heading {
    color: #b30707 !important;
    position: relative;
    margin-right: 11px;
}
a.cat-heading:before {
    content: "";
    display: block;
    background-color: #e92b28;
    width: 1px;
    height: 10px;
    position: absolute;
    top: 8px;
    right: -6px;
    transform: rotate(10deg);
}
.spotlight-nod-items p {
    color: #807979;
    font-size: 14px;
    line-height: 19px;
    height: 41px;
    overflow: hidden;
    margin: 0px;
    padding: 0px;
}
.spotlight-nod-items ul {
    margin: 0px;
    padding: 0px;
    position: relative;
}
.spotlight-nod-items ul li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #B5AFAD;
    font-size: 10px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
}
.spotlight-nod-items ul li:last-child {
    margin-left: 20px;
}
.spotlight-nod-items ul li:last-child:before {
    content: "";
    display: block;
    position: absolute;
    left: -16px;
    top: 4px;
    width: 7px;
    height: 7px;
    background-color: #b5afaf;
    border-radius: 50%;
}
/* //Vertical Morque */
.grid-gallery-container {
    margin-bottom: 20px;
    float: left;
    width: 100%;
}
.category-news-item {
    position: relative;
    border-top: solid 2px #ededed;
}
.category-news-item img {
    width: 100%;
    min-height: 204px;
    object-fit: cover;
    margin-top: 15px;
    border-top: solid 2px #980a00;
    border-bottom: solid 2px #980a00;
}
ul.category-news-item-story {
    margin: 15px 0;
    padding: 0;
}
ul.category-news-item-story li:first-child {
    position: relative;
    margin-right: 9px;
}
ul.category-news-item-story li:first-child:before {
    content: "";
    display: block;
    background-color: #b30707;
    width: 1px;
    height: 12px;
    position: absolute;
    bottom: 2px;
    right: -6px;
    transform: rotate(10deg);
}
ul.category-news-item-story li {
    list-style-type: none;
    display: inline;
}
.news-first-two-items ul.category-news-item-story li a {
    font-size: 22px;
    font-weight: 400;
    line-height: 27px;
}
ul.category-news-item-story li:first-child a {
    color: #b30707;
    font-size: 18px;
}
ul.category-news-item-story li a {
    font-size: 20px;
    text-decoration: none;
    display: inline;
    color: #000;
    line-height: 21px;
}
ul.category-news-item-time {
    margin: -14px 0 1px 0;
    padding: 0;
    position: relative;
}
ul.category-news-item-time li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #666;
    font-size: 10px;
    font-family: 'Libre Franklin',sans-serif;
    text-transform: uppercase;
    font-weight: 300;
}
ul.category-news-item-time li:last-child {
    margin-left: 20px;
}
ul.category-news-item-time li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #666;
    font-size: 10px;
    font-family: 'Libre Franklin',sans-serif;
    text-transform: uppercase;
    font-weight: 300;
}
ul.category-news-item-time li:last-child:before {
    content: "";
    display: block;
    position: absolute;
    left: -16px;
    top: 4px;
    width: 7px;
    height: 7px;
    background-color: #b5afaf;
    border-radius: 50%;
}
.category-news-item-summary {
    position: relative;
    margin-bottom: 5px;
    padding-bottom: 5px;
    border-top: solid 2px #ededed;
    background-color: #f6f6f6;
}
.category-news-item-summary img {
    position: absolute;
    top: -11px;
    left: 0;
    width: 140px;
    height: 75px !important;
    object-fit: cover;
    min-height: auto;
}
ul.news-image-two-items {
    margin-left: 151px;
    margin-top: 0px;
    padding: 0px;
    color: #807979;
    font-size: 14px;
    height: 70px;
    overflow: hidden;
}
a.common-more-button {
    background-color: #333;
    color: #fff;
    line-height: 33px;
    display: block;
    width: 100%;
    padding: 5px 10px;
    font-weight: 500;
    font-size: 15px;
    transition-duration: 1s;
    text-align: center;
}
.category-news-item-one a img {
    width: 100%;
    min-height: 204px;
    object-fit: cover;
    margin-top: 0px;
}
.category-news-item-one {
    background-color: #d60000;
    padding: 2px 0px;
}
ul.category-news-item-story-trending {
    margin: 10px 10px;
    padding: 0;
    height: 71px;
    overflow: hidden;
}
ul.category-news-item-story-trending li:first-child {
    position: relative;
    margin-right: 9px;
}
ul.category-news-item-story-trending li:first-child:before {
    content: "";
    display: block;
    background-color: #ffffff;
    width: 1px;
    height: 12px;
    position: absolute;
    bottom: 2px;
    right: -6px;
    transform: rotate(10deg);
}
ul.category-news-item-story-trending li {
    list-style-type: none;
    display: inline;
}
.news-first-two-items ul.category-news-item-story-trending li a {
    font-size: 24px;
    font-weight: 400;
    line-height: 27px;
}
ul.category-news-item-story-trending li:first-child a {
    color: #ffffff;
}
ul.category-news-item-story-trending li a {
    font-size: 20px;
    text-decoration: none;
    display: inline;
    color: #fff;
    line-height: 21px;
}
ul.category-news-item-time-trending {
    margin: -10px 8px 5px 10px;
    padding: 0;
    position: relative;
}
ul.category-news-item-time-trending li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #ffffff;
    font-size: 10px;
    font-family: 'Libre Franklin',sans-serif;
    text-transform: uppercase;
    font-weight: 300;
}
ul.category-news-item-time-trending li:last-child {
    margin-left: 20px;
}
ul.category-news-item-time-trending li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #ffffff;
    font-size: 10px;
    font-family: 'Libre Franklin',sans-serif;
    text-transform: uppercase;
    font-weight: 300;
}
ul.category-news-item-time-trending li:last-child:before {
    content: "";
    display: block;
    position: absolute;
    left: -16px;
    top: 4px;
    width: 7px;
    height: 7px;
    background-color: #ffffff;
    border-radius: 50%;
}
section.most-popular-sec {
    float: left;
    width: 100%;
    background-color: #000;
    padding: 20px 0px;
    margin: 10px 0px;
}
.category-news-item-two img {
    width: 100%;
    min-height: 126px;
    object-fit: cover;
}
ul.category-news-item-story-two {
    margin: 5px 0px;
    padding: 0;
    height: 75px;
    overflow: hidden;
}
ul.category-news-item-story-two li:first-child {
    position: relative;
    margin-right: 9px;
}
ul.category-news-item-story-two li:first-child:before {
    content: "";
    display: block;
    background-color: #ffffff;
    width: 1px;
    height: 12px;
    position: absolute;
    bottom: 2px;
    right: -6px;
    transform: rotate(10deg);
}
ul.category-news-item-story-two li {
    list-style-type: none;
    display: inline;
}
.news-first-two-items ul.category-news-item-story-two li a {
    font-size: 24px;
    font-weight: 400;
    line-height: 27px;
}
ul.category-news-item-story-two li:first-child a {
    color: #ffffff;
}
ul.category-news-item-story-two li a {
    font-size: 17px;
    text-decoration: none;
    display: inline;
    color: #fff;
    line-height: 14px;
}
ul.category-news-item-time-two {
    margin: 5px 0px;
    padding: 0;
    position: relative;
    border-bottom: 1px solid #747272;
}
ul.category-news-item-time-two li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #ffffff;
    font-size: 10px;
    font-family: 'Libre Franklin',sans-serif;
    text-transform: uppercase;
    font-weight: 300;
}
ul.category-news-item-time-two li:last-child {
    margin-left: 20px;
}
ul.category-news-item-time-two li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #ffffff;
    font-size: 10px;
    font-family: 'Libre Franklin',sans-serif;
    text-transform: uppercase;
    font-weight: 300;
}
ul.category-news-item-time-two li:last-child:before {
    content: "";
    display: block;
    position: absolute;
    left: -16px;
    top: 4px;
    width: 7px;
    height: 7px;
    background-color: #ffffff;
    border-radius: 50%;
}
.picture-gallery-featured {
    position: relative;
    padding: 10px;
    background: #333;
    border-top: 3px solid #bd0000;
    display: inline-block;
    width: 100%;
    margin-bottom: 10px;
}
.picture-gallery-featured-img {
    width: 100%;
    height: auto;
    position: relative;
}
.picture-gallery-featured-img img {
    width: 100%;
    height: auto;
}
.picture-gallery-featured ul {
    margin: 15px 0;
    padding: 0;
}
.picture-gallery-featured ul li:first-child {
    margin-right: 10px;
}
.picture-gallery-featured ul li {
    list-style-type: none;
    display: inline;
    position: relative;
}
.picture-gallery-featured ul li:first-child:before {
    content: "/";
    color: #fff;
    font-size: 14px;
    position: absolute;
    right: -8px;
    bottom: 1px;
}
.picture-gallery-featured ul li:first-child a {
    color: #f4b01b;
}
.picture-gallery-featured ul li a {
    text-decoration: none;
    display: inline;
    color: #fff;
    text-transform: capitalize;
    font-size: 20px;
    line-height: 20px;
}
.picture-gallery-sub {
    position: relative;
    padding: 10px 10px 10px 116px;
    background: #333;
    border-top: 3px solid #bd0000;
    display: inline-block;
    width: 100%;
    margin-bottom: 10px;
}
.picture-gallery-sub-img {
    width: 96px;
    height: 54px;
    position: absolute;
    left: 10px;
    top: 10px;
}
.picture-gallery-sub-img img {
    width: 96px;
    height: 54px;
}
.picture-gallery-sub ul {
    margin: 0;
    padding: 0;
    line-height: 14px;
    height: 54px;
    overflow: hidden;
}
.picture-gallery-sub ul li:first-child {
    margin-right: 9px;
}
.picture-gallery-sub ul li {
    list-style-type: none;
    display: inline;
    position: relative;
}
.picture-gallery-sub ul li:first-child:before {
    content: "/";
    color: #fff;
    font-size: 11px;
    position: absolute;
    right: -7px;
    bottom: 2px;
}
.picture-gallery-sub ul li:first-child a {
    color: #f4b01b;
}
.picture-gallery-sub ul li a {
    text-decoration: none;
    display: inline;
    color: #fff;
    text-transform: capitalize;
    font-size: 17px;
    line-height: 19px;
}
.video-gallery-image i {
    position: absolute;
    top: 10px;
    color: #fff;
    font-size: 18px;
    left: 10px;
    width: 40px;
    height: 40px;
    background-color: #f05338;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    padding-left: 5px;
}
.trending-videos-sec {
    margin-bottom: 20px;
    float: left;
    width: 100%;
}
span.trending-videos-nav a {
    color: #000;
    margin-left: 15px;
}
span.trending-videos-nav {
    position: absolute;
    right: 0;
    top: -30px;
}
span.trending-videos-nav {
    margin: -3px 0 0 0!important;
    padding: 0;
    background: 0 0!important;
}
.video-gallery {
    position: relative;
    padding-bottom: 9px;
    background-color: #000;
}
.video-gallery-image {
    position: relative;
    width: 100%;
    height: auto;
    margin-bottom: 28px;
}
.video-gallery-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
.video-gallery ul {
    margin: 0;
    padding: 10px;
    border-top: 2px solid #50b7f1;
    width: 100%;
    height: 62px;
    overflow: hidden;
}
.video-gallery ul li:first-child {
    margin-right: 9px;
}
.video-gallery ul li {
    list-style-type: none;
    display: inline;
    position: relative;
}
.video-gallery ul li a {
    text-decoration: none;
    display: inline;
    color: #fff;
    text-transform: capitalize;
    font-size: 15px;
    line-height: 21px;
}
.video-gallery ul li:first-child a {
    color: #ec5836;
}
.video-gallery ul li:first-child:before {
    content: "/";
    color: #ffffff;
    font-size: 15px;
    position: absolute;
    right: -10px;
    bottom: -2px;
}
section.breaking-news {
    float: left;
    width: 100%;
    margin: 0 0 15px 0;
    background-color: #e6e6e6;
    border-top: 1px solid #b40000;
}
ul.breaking-newsticker {
    margin: 0;
    padding: 0;
    display: block;
    width: 100%;
    position: relative;
    height: 36px;
    overflow: hidden;
}
ul.breaking-newsticker li:first-child {
    width: 90px;
}
ul.breaking-newsticker li {
    list-style-type: none;
    float: left;
}
section.breaking-news h3 {
    margin: 0;
    background-color: #7b0505;
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 13px;
    text-align: right;
    padding: 3px 12px 5px 5px;
    line-height: 14px;
}

ul.breaking-newsticker li:last-child {
    width: calc(100% - 90px);
    padding: 0 10px 0 10px;
}
ul.breaking-newsticker li p {
    margin: 0;
    padding: 5px 0;
    font-size: 12px;
    line-height: 15px;
    font-weight: 400;
    color: #000;
    display: table-cell;
    vertical-align: middle;
    height: 36px;
}
.category-news-item-summary p {
    margin-left: 151px;
    margin-top: 0px;
    padding: 0px;
    color: #807979;
    font-size: 14px;
    height: 77px;
    overflow: hidden;
}

</style>
    <section class="breaking-news">
              <ul class="breaking-newsticker">
                <li><h3>Breaking News</h3></li>
                <li>
                  <div id="mybreakingnewsCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner"><div class="item active"><a title="Equities Fall Further, Sensex Down Over 400 Pts On Thursday" href="https://odishatv.in/news/business/equities-fall-further-sensex-down-over-400-pts-on-thursday-168800"><p>Equities Fall Further, Sensex Down Over 400 Pts On Thursday</p></a></div><div class="item "><a title="Rahul Slams Centre On Abduction Of Indian By Chinese Forces In Arunachal" href="https://odishatv.in/news/national/rahul-slams-centre-on-abduction-of-indian-by-chinese-forces-in-arunachal-168799"><p>Rahul Slams Centre On Abduction Of Indian By Chinese Forces In Arunachal</p></a></div><div class="item "><a title="Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan" href="https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798"><p>Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan</p></a></div><div class="item "><a title="Call From Telangana About Planting Bomb At CRPF HQ Turns Hoax" href="https://odishatv.in/news/national/call-from-telangana-about-planting-bomb-at-crpf-hq-turns-hoax-168797"><p>Call From Telangana About Planting Bomb At CRPF HQ Turns Hoax</p></a></div><div class="item "><a title="'Output Not Suffered In Work From Home, Rather Increased In Some Cases'" href="https://odishatv.in/news/national/-output-not-suffered-in-work-from-home-rather-increased-in-some-cases--168796"><p>'Output Not Suffered In Work From Home, Rather Increased In Some Cases'</p></a></div><div class="item "><a title="US Logs Over 1 Million Daily Covid Cases Again" href="https://odishatv.in/news/covid-19/us-logs-over-1-million-daily-covid-cases-again-168795"><p>US Logs Over 1 Million Daily Covid Cases Again</p></a></div><div class="item "><a title="130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far" href="https://odishatv.in/news/covid-19/130-frontline-workers-of-capital-hospital-in-bhubaneswar-test-covid-positive-so-far-168794"><p>130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far</p></a></div><div class="item "><a title="Top Infectious Disease Expert Faheem Younus on Omicron Surge, Vaccination" href="https://odishatv.in/videos/covid-19/top-infectious-disease-expert-faheem-younus-on-omicron-surge-vaccination-168793"><p>Top Infectious Disease Expert Faheem Younus on Omicron Surge, Vaccination</p></a></div>                </div>                   
               </div>
                </li>
              </ul>
        </section>
        <!--================== //BREAKING NEWS ===================-->

      <div class="otv-300-250-ad">
<!-- /370089190/Below_Header_Home_Mobile_300x250 --><div id="div-gpt-ad-22346312122-0" style="width: 300px; height: 250px;"><script>
    googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346312122-0"); }); </script></div></div>
          
            <!--============ HEADLINES ============-->
            <div class="container grid-gallery-container">
                <div class="category-news-item news-first-two-items"><a href="https://odishatv.in/news/covid-19/odisha-detects-10-368-new-covid-19-cases-7-fatalities-168792"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642651547.jpeg" alt="" title="Odisha Covid Cases" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a class="s24" href="https://odishatv.in/tag/odisha-covid-19-cases">Odisha Covid-19 Cases</a></li>
                      <li><a class="s24" href="https://odishatv.in/news/covid-19/odisha-detects-10-368-new-covid-19-cases-7-fatalities-168792">Odisha Detects 10,368 New Covid-19 Cases, 7 Fatalities</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>Odisha</li>
                      <li>2 hours ago </li>
                      </ul>
                      <p>The active cases in the State stood at 88,346 and a total of 10,80,562 people recuperated from the disease, including 6,785  on Wednesday, till date, as per the State Health...</p>
                        </div> <div class="category-news-item news-first-two-items">
                <ul class="category-news-item-story">
                   <li><a class="s20" href="https://odishatv.in/tag/capital-hospital">Capital Hospital</a></li>
                  <li><a class="s20" href="https://odishatv.in/news/covid-19/130-frontline-workers-of-capital-hospital-in-bhubaneswar-test-covid-positive-so-far-168794">130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s20" href="https://odishatv.in/tag/sarpanch-post-auctioned">Sarpanch Post Auctioned</a></li>
                  <li><a class="s20" href="https://odishatv.in/news/miscellaneous/sarpanch-post-auctioned-factual-inquiry-report-submitted-to-bolangir-collector-168791">Sarpanch Post 'Auctioned': Factual Inquiry Report Submitted To Bolangir Collector</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/dead-newborn-baby-found-alive">Dead Newborn Baby Found Alive</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/miscellaneous/newborn-baby-declared-dead-by-doctors-found-alive-during-funeral-in-odisha-s-keonjhar-168788">Newborn Baby Declared Dead By Doctors, Found Alive During Funeral In Odisha’s Keonjhar</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/miscellaneous/newborn-baby-declared-dead-by-doctors-found-alive-during-funeral-in-odisha-s-keonjhar-168788"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642647403.jpg" alt="" title="Newborn Baby " width="224" height="126"></a><p>The shaken family took the baby in a bag and arranged for a funeral at their village. However, when they were about to bury the...</p></div>          
                      
              </div><div class="otv-300-50-ad"><div id="div-gpt-ad-22405525978-0" style="width: 300px; height: 50px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22405525978-0"); }); </script></div></div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/omicron-dominant-in-odisha">Omicron Dominant In Odisha</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/exclusive/omicron-replaces-delta-in-odisha-know-about-its-stealth-version-detected-in-many-states-168777">Omicron Replaces Delta In Odisha: Know About Its 'Stealth' Version Detected In Many States</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/third-wave-fatality-in-odisha">Third Wave Fatality In Odisha</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/exclusive/vaccinated-elderly-unvaccinated-partly-vaccinated-youths-succumb-in-third-wave-in-odisha-168769">Vaccinated Elderly, Unvaccinated & Partly Vaccinated Youths Succumb ToThird Wave In Odisha</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/odisha-omicron-cases">Odisha Omicron Cases</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/covid-19/odisha-s-omicron-tally-jumps-to-347-with-145-new-cases--168759">Odisha’s Omicron Tally Jumps To 347 With 145 New Cases </a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/omisure">OmiSure</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/covid-19/dry-run-of-omicron-detection-kits-begins-in-4-odisha-cities-168742">Dry Run Of Omicron Detection Kits Begins In 4 Odisha Cities</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/illegal-sand-mining">Illegal Sand Mining</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/national/punjab-mining-raids-ed-seizes-rs-10-crore-cash-including-from-cm-s-relative-168745">Punjab Mining Raids: ED Seizes Rs 10 Crore Cash Including From CM's Relative</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/india-s-got-talent">India's Got Talent</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/tribal-boys-from-odisha-s-malkangiri-shine-at-india-s-got-talent--168741">Tribal Boys From Odisha's Malkangiri Shine At ‘India’s Got Talent’</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/5g-safety-dispute">5G Safety Dispute</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/international/air-india-among-airlines-skipping-us-airports-over-5g-safety-dispute-168789">Air India Among Airlines Skipping US Airports Over 5G Safety Dispute</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/indigo">Indigo</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/national/dgca-initiates-probe-into-near-miss-incident-over-bengaluru-168786">DGCA Initiates Probe Into 'Near Miss' Incident Over Bengaluru</a></li>
                  </ul>
              </div>            </div>
            <!--=========== //HEADLINES ===========-->          
      <div class="otv-300-250-ad"><div id="div-gpt-ad-22346312533-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346312533-0"); }); </script></div></div>          <!--============ HEADLINES ============-->
            <div class="container grid-gallery-container">
                
              <h3 class="heading-style-one">Exclusive</h3>
                <div class="category-news-item"><a href="https://odishatv.in/news/exclusive/who-will-be-trump-card-in-odisha-panchayat-polls-modi-naveen-or-others--168560"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642343727.jpg" alt="" title="Who will be Trump card In Odisha Panchayat polls?" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/odisha-panchayat-polls">Odisha Panchayat Polls</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/exclusive/who-will-be-trump-card-in-odisha-panchayat-polls-modi-naveen-or-others--168560">Who Will Be Trump Card In Odisha Panchayat Polls: Modi, Naveen Or 'Others'?</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>Odisha</li>
                      <li>4 days ago </li>
                      </ul>
                      <p>Between 2017 - 2022, the two political constants in Odisha - CM Naveen Patnaik and PM Narendra Modi - remain. Controversies hit Naveen more than...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/third-wave-fatality-in-odisha">Third Wave Fatality In Odisha</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/exclusive/vaccinated-elderly-unvaccinated-partly-vaccinated-youths-succumb-in-third-wave-in-odisha-168769">Vaccinated Elderly, Unvaccinated & Partly Vaccinated Youths Succumb ToThird Wave In Odisha</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/omicron-dominant-in-odisha">Omicron Dominant In Odisha</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/exclusive/omicron-replaces-delta-in-odisha-know-about-its-stealth-version-detected-in-many-states-168777">Omicron Replaces Delta In Odisha: Know About Its 'Stealth' Version Detected In Many States</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/tarot-card-reading">Tarot Card Reading</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/lifestyle/tarot-card-2022-yearly-prediction-for-libra-scorpio-aquarius-others-167544">Tarot Card 2022 Yearly Prediction For Libra, Scorpio, Aquarius & Others</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/lifestyle/tarot-card-2022-yearly-prediction-for-libra-scorpio-aquarius-others-167544"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641199722.jpg" alt="" title="Tarot Card 2022 Yearly Prediction For Libra, Scorpio, Aquarius & Others" width="224" height="126"></a><p>After providing a considerable insight about several zodiac signs including Aries, Taurus and others, Mrs Bina Sheth @ Divine Bliss from Cuttack Odisha, a certified...</p></div>         
                      
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/tarot-card-reading">Tarot Card Reading</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/lifestyle/tarot-card-prediction-2022-here-s-what-aries-taurus-gemini-cancer-leo-can-expect-167440">Tarot Card Prediction 2022; Here’s What Aries, Taurus, Gemini, Cancer, Leo Can Expect</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/third-wave-in-odisha">Third Wave In Odisha</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/exclusive/odisha-sitting-on-omicron-bomb-headache-weakness-runny-nose-means-new-mutant--167744">Odisha Sitting On Omicron Bomb: Headache, Weakness & Runny Nose Means New Mutant   </a></li>
                  </ul>
              </div>         <a href="https://odishatv.in/exclusive" class="common-more-button">More</a>
            </div>
            <!--=========== //HEADLINES ===========-->
            
                <!--============= TRENDING VIDEOS ============-->
            <div class="container trending-videos-sec">
              <h3 class="heading-style-one">Videos</h3>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
                <div class="item active"><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642656362.jpg" alt="" title="R-Day Prep " width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/republic-day-2022">Republic Day 2022</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798">Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan</a></li>
                </ul> 
              </div></div><div class="item "><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/covid-19/top-infectious-disease-expert-faheem-younus-on-omicron-surge-vaccination-168793"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642652991.jpg" alt="" title="‘Learn To Live With Covid’" width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/covid-19/top-infectious-disease-expert-faheem-younus-on-omicron-surge-vaccination-168793"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/omicron">Omicron</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/covid-19/top-infectious-disease-expert-faheem-younus-on-omicron-surge-vaccination-168793">Top Infectious Disease Expert Faheem Younus on Omicron Surge, Vaccination</a></li>
                </ul> 
              </div></div><div class="item "><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/national/cctv-footage-leopard-hiding-in-godown-for-3-days-168774"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642605469.jpg" alt="" title="To Catch A Leopard!" width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/national/cctv-footage-leopard-hiding-in-godown-for-3-days-168774"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/leopard-in-godown">Leopard In Godown</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/national/cctv-footage-leopard-hiding-in-godown-for-3-days-168774">CCTV Footage: Leopard Hiding In Godown For 3 Days</a></li>
                </ul> 
              </div></div><div class="item "><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/national/fire-in-bus-kills-woman-another-person-critically-injured-168762"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642594979.jpg" alt="" title="Deadly Fire In Bus  " width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/national/fire-in-bus-kills-woman-another-person-critically-injured-168762"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/surat">Surat</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/national/fire-in-bus-kills-woman-another-person-critically-injured-168762">Fire In Bus Kills Woman, Another Person Critically Injured</a></li>
                </ul> 
              </div></div><div class="item "><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/miscellaneous/watch-fire-engulfs-moving-car-in-cuttack-168755"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642589741.jpg" alt="" title="The Burning Car!    " width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/miscellaneous/watch-fire-engulfs-moving-car-in-cuttack-168755"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/burning-car">Burning Car</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/miscellaneous/watch-fire-engulfs-moving-car-in-cuttack-168755">WATCH | Fire Engulfs Moving Car In Cuttack</a></li>
                </ul> 
              </div></div><div class="item "><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/miscellaneous/watch-wild-bears-chased-away-by-villagers-168754"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642587857.jpg" alt="" title="Bears Chased Away! " width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/miscellaneous/watch-wild-bears-chased-away-by-villagers-168754"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/bear">Bear</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/miscellaneous/watch-wild-bears-chased-away-by-villagers-168754">WATCH | Wild Bears Chased Away By Villagers</a></li>
                </ul> 
              </div></div><div class="item "><div class="video-gallery">
                <div class="video-gallery-image">
                  <a href="https://odishatv.in/videos/national/watch-itbp-daredevil-bike-stunts-for-republic-day--168749"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642583602.jpg" alt="" title="Daredevils On R-DAY!" width="274" height="154"></a>
                  <a href="https://odishatv.in/videos/national/watch-itbp-daredevil-bike-stunts-for-republic-day--168749"><i class="fas fa-play"></i></a>
                </div> 
                <ul>
                   <li><a class="s18" href="https://odishatv.in/tag/itbp">ITBP</a></li>
                 <li><a  class="s18" href="https://odishatv.in/videos/national/watch-itbp-daredevil-bike-stunts-for-republic-day--168749">WATCH | ITBP ‘Daredevil’ Bike Stunts For Republic Day!</a></li>
                </ul> 
              </div></div>            </div>
                <span class="trending-videos-nav">
                <a class="mycarouselleft mycarouselbtn" href="#myCarousel" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="mycarouselright mycarouselbtn" href="#myCarousel" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </span>
            </div>
              <a href="https://odishatv.in/videos" class="common-more-button">More</a>
             </div>
             <div class="otv-300-250-ad"><div id="div-gpt-ad-22346269890-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346269890-0"); }); </script></div></div>
      <div class="container grid-gallery-container"><h3 class="heading-style-one">Retrospect</h3><div class="category-news-item"><a href="https://odishatv.in/news/opinion/loss-of-captain-virat-kohli-could-well-be-the-best-thing-for-batsman-kohli-168549"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642333347.jpg" alt="" title="Virat Kohli Indian Cricket" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/virat-kohli">Virat Kohli</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/opinion/loss-of-captain-virat-kohli-could-well-be-the-best-thing-for-batsman-kohli-168549">Loss Of Captain Kohli Could Well Be The Best Thing For Batsman Kohli</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>India</li>
                      <li>4 days ago </li>
                      </ul>
                      <p>How does one assess Virat Kohli's seven-year long captaincy? The stats tell their own story. He is the most successful Indian captain, winning 40 of...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/odisha">Odisha</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/opinion/the-tiger-trail-in-odisha-168544">The Tiger Trail</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/india-vs-south-africa">India Vs South Africa</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/opinion/rishabh-pant-is-a-once-in-a-generation-cricketer-168398">Rishabh Is A Once-In-A-Generation Cricketer</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/panchayat-elections-2022">Panchayat Elections 2022</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/opinion/odisha-panchayat-elections-2022-tsunami-of-freebies-before-rural-polls-unstatesmanlike-strategy-168229">Tsunami Of Freebies Before Odisha Rural Polls 'Unstatesmanlike' Strategy</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/opinion/odisha-panchayat-elections-2022-tsunami-of-freebies-before-rural-polls-unstatesmanlike-strategy-168229"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642000836.jpg" alt="" title="Odisha Panchayat Elections 2022" width="224" height="126"></a><p>Odisha government kept on showering their favours to different segments of the voters ranging from Anganwadi workers to overaged aspirants for government jobs. Some favours...</p></div>           
                      
              </div><a href="https://odishatv.in/opinion" class="common-more-button">More</a></div><!--============== PHOTOS ================-->  
<div class="otv-320-50-ad">
<!-- /370089190/InBetween_Section_Home_Mobile_Slot2_320x50 --><div id="div-gpt-ad-22405707932-0" style="width: 320px; height: 50px;"><script>
    googletag.cmd.push(function() { googletag.display("div-gpt-ad-22405707932-0"); }); </script></div></div>

    <div class="container photo-gallery-sec"><h3 class="heading-style-one">Photos</h3>          
                        <div class="picture-gallery-featured">
                          <div class="picture-gallery-featured-img">
                         <a href="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642560532.jpg" alt="" title="Republic Day 2022 " width="400" height="225"></a>
                          <span><i class="far fa-images"></i> 14</span>
                          </div>
                          <ul>
                            <li><a class="s20" href="https://odishatv.in/tag/republic-day">Republic Day</a></li>
                 <li><a class="s20" href="https://odishatv.in/photo-gallery/national/r-day-2022-glimpses-from-republic-day-parade-rehearsals-in-delhi-168719">R-Day 2022: Glimpses From Republic Day Parade Rehearsals In Delhi</a></li>
                          </ul>
                      </div><div class="picture-gallery-sub">
                              <div class="picture-gallery-sub-img">
                              <a href="https://odishatv.in/photo-gallery/miscellaneous/against-all-odds-children-attending-classes-in-hard-snow-day-has-a-lesson-in-itself-168205"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641972732.jpg" alt="" title="Snowfall in Kashmir" width="96" height="54"></a>
                              <span><i class="far fa-images"></i> 6</span>
                              </div>
                              <ul>
                                <li><a class="s18" href="https://odishatv.in/tag/snowfall-in-kashmir">Snowfall In Kashmir</a></li>
                 <li><a class="s18" href="https://odishatv.in/photo-gallery/miscellaneous/against-all-odds-children-attending-classes-in-hard-snow-day-has-a-lesson-in-itself-168205">Against All Odds: Children Attending Classes On A Hard Snow Day Has A Lesson In Itself</a></li>
                              </ul>
                          </div><div class="picture-gallery-sub">
                              <div class="picture-gallery-sub-img">
                              <a href="https://odishatv.in/photo-gallery/covid-19/vaccination-of-teenagers-in-india-covaxin-its-victory-against-covid19-see-pictures-167594"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641267366.JPG" alt="" title="Covid Vaccination of children in India " width="96" height="54"></a>
                              <span><i class="far fa-images"></i> 8</span>
                              </div>
                              <ul>
                                <li><a class="s18" href="https://odishatv.in/tag/covid-vaccine">COVID Vaccine</a></li>
                 <li><a class="s18" href="https://odishatv.in/photo-gallery/covid-19/vaccination-of-teenagers-in-india-covaxin-its-victory-against-covid19-see-pictures-167594">Teenagers COVAXINated: It’s ‘Victory’ Against Covid-19</a></li>
                              </ul>
                          </div><div class="picture-gallery-sub">
                              <div class="picture-gallery-sub-img">
                              <a href="https://odishatv.in/photo-gallery/festivals-events/merry-christmas-2021-how-india-celebrated-x-mas-amid-pandemic-167037"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1640516782.jpg" alt="" title="Christmas 2021: How India Celebrated" width="96" height="54"></a>
                              <span><i class="far fa-images"></i> 10</span>
                              </div>
                              <ul>
                                <li><a class="s18" href="https://odishatv.in/tag/christmas-2021">Christmas 2021</a></li>
                 <li><a class="s18" href="https://odishatv.in/photo-gallery/festivals-events/merry-christmas-2021-how-india-celebrated-x-mas-amid-pandemic-167037">Merry Christmas: How India Celebrated X-Mas Amid Pandemic</a></li>
                              </ul>
                          </div><div class="picture-gallery-sub">
                              <div class="picture-gallery-sub-img">
                              <a href="https://odishatv.in/photo-gallery/festivals-events/bagha-nacha-tiger-dance-tigers-roar-in-bhubaneswar-166729"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1640156738.jpg" alt="" title="Bagha Nacha or Tiger Dance in Odisha" width="96" height="54"></a>
                              <span><i class="far fa-images"></i> 5</span>
                              </div>
                              <ul>
                                <li><a class="s18" href="https://odishatv.in/tag/tiger-dance">Tiger Dance</a></li>
                 <li><a class="s18" href="https://odishatv.in/photo-gallery/festivals-events/bagha-nacha-tiger-dance-tigers-roar-in-bhubaneswar-166729">Bagha Nacha: Tigers Roar In Bhubaneswar</a></li>
                              </ul>
                          </div><div class="picture-gallery-sub">
                              <div class="picture-gallery-sub-img">
                              <a href="https://odishatv.in/photo-gallery/miscellaneous/t-setu-odisha-s-longest-bridge-over-mahanadi-166641"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1640055562.jpg" alt="" title="T-Setu: Odisha’s Longest Bridge Over Mahanadi Inaugurated By CM Naveen Patnaik" width="96" height="54"></a>
                              <span><i class="far fa-images"></i> 4</span>
                              </div>
                              <ul>
                                <li><a class="s18" href="https://odishatv.in/tag/t-bridge">T-Bridge</a></li>
                 <li><a class="s18" href="https://odishatv.in/photo-gallery/miscellaneous/t-setu-odisha-s-longest-bridge-over-mahanadi-166641">T-Setu: Odisha’s Longest Bridge Over Mahanadi</a></li>
                              </ul>
                          </div><div class="picture-gallery-sub">
                              <div class="picture-gallery-sub-img">
                              <a href="https://odishatv.in/photo-gallery/weather/chilly-winter-mornings-scenes-across-odisha-166414"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1639727264.jpg" alt="" title="Heavy fog conditions" width="96" height="54"></a>
                              <span><i class="far fa-images"></i> 7</span>
                              </div>
                              <ul>
                                <li><a class="s18" href="https://odishatv.in/tag/odisha">Odisha</a></li>
                 <li><a class="s18" href="https://odishatv.in/photo-gallery/weather/chilly-winter-mornings-scenes-across-odisha-166414">Chilly Winter Mornings Scenes Across Odisha</a></li>
                              </ul>
                          </div><a href="https://odishatv.in/photo-gallery" class="common-more-button">More</a></div><div class="otv-300-250-ad"><div id="div-gpt-ad-22346205683-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346205683-0"); }); </script></div></div><div class="container grid-gallery-container"><h3 class="heading-style-one">JOBS AND EDUCATION</h3><div class="category-news-item"><a href="https://odishatv.in/news/jobs/ossc-exam-calendar-feb-2022-here-s-list-of-12-important-recruitment-tests-scheduled-next-month-168770"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1639910832.jpg" alt="" title="OSSC Exam Calendar Feb 2022: Here’s List Of 12 Important Recruitment Tests Scheduled Next Month" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/ossc-exam-calendar-feb-2022">OSSC Exam Calendar Feb 2022</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/jobs/ossc-exam-calendar-feb-2022-here-s-list-of-12-important-recruitment-tests-scheduled-next-month-168770">OSSC Exam Calendar Feb 2022: Here’s List Of 12 Important Recruitment Tests Scheduled Next Month</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>Odisha</li>
                      <li>16 hours ago </li>
                      </ul>
                      <p>Preliminary examinations, main examinations, physical tests, viva-voce tests and certificate verification related to 12 important recruitment examinations are scheduled to be held between February 3...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/osssc-recruitment-2022">OSSSC Recruitment 2022</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/osssc-combined-recruitment-exam-admit-card-released-here-s-how-to-download--168761">OSSSC Combined Recruitment Exam Admit Card Released, Here’s How To Download  </a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/india-post-gds-result">India Post GDS Result</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/india-post-gds-result-for-bihar-maharashtra-circles-declared-check-here-168758">India Post GDS Result For Bihar & Maharashtra Circles Declared, Check Here</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/govt-jobs">Govt Jobs</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/becil-recruitment-2022-big-vacancy-for-multiple-posts-announced-check-details-168748">BECIL Recruitment 2022: Big Vacancy For Multiple Posts Announced, Check Details</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/jobs/becil-recruitment-2022-big-vacancy-for-multiple-posts-announced-check-details-168748"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/NCERT-Recruitment-2018_1627297396.jpg" alt="" title="BECIL Recruitment 2022: Big Vacancy For Multiple Posts Announced, Check Details" width="224" height="126"></a><p>Applicants can submit applications for Investigator and Supervisor positions online by visiting the official site of BECIL till January 25</p></div>        
                      
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/cbse">CBSE</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/education/cbse-school-in-bhubaneswar-seeks-money-for-marks-supreme-court-issues-notice-168734">CBSE School In Bhubaneswar ‘Seeks' Money For Marks, Supreme Court Issues Notice</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/jobs">Jobs</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/niser-recruitment-2022-apply-for-scientific-officer-posts-in-7th-cpc-scale-check-details-168703">NISER Recruitment 2022: Apply For Scientific Officer Posts In 7th CPC Scale, Check Details</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/jobs">Jobs</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/ossc-issues-notice-for-main-written-examination-for-recruitment-of-statistical-assistant-2017-168697">OSSC Issues Notice For Main Written Examination For Recruitment Of Statistical Assistant-2017</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/ossc-recruitment">OSSC Recruitment</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/ossc-inspector-of-legal-metrology-lab-asst-final-result-declared-check-here-168693">OSSC Inspector Of Legal Metrology, Lab Asst Final Result Declared, Check Here</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/diploma-couse">Diploma Couse</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/education/nluo-announces-diploma-course-on-cyber-law-check-eligibility-details-168691">NLUO Announces Diploma Course On Cyber Law; Check Eligibility & Details</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/opsc-recruitment">OPSC Recruitment</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/odisha-judicial-service-exam-registration-closing-soon-for-53-civil-judge-posts-apply-now-168681">Odisha Judicial Service Exam: Registration Closing Soon For 53 Civil Judge Posts, Apply Now</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/republic-day">Republic Day</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/education/ugc-issues-sop-for-republic-day-celebrations-in-universities-colleges-168679">UGC Issues SOP For Republic Day Celebrations In Universities, Colleges</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/jobs">Jobs</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/jobs/esic-recruitment-2022-apply-for-upper-division-clerk-stenographer-mts-posts-for-kerala-region-168665">ESIC Recruitment 2022: Apply For Upper Division Clerk, Stenographer & MTS Posts For Kerala Region</a></li>
                  </ul>
              </div><a href="https://odishatv.in/jobs" class="common-more-button">More</a></div><div class="otv-300-250-ad"><div id="div-gpt-ad-22409036017-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22409036017-0"); }); </script></div></div><div class="container grid-gallery-container"><h3 class="heading-style-one">Entertainment</h3><div class="category-news-item"><a href="https://odishatv.in/news/entertainment/tribal-boys-from-odisha-s-malkangiri-shine-at-india-s-got-talent--168741"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642579185.JPG" alt="" title="Tribal Boys From Odisha's Malkangiri Shine At ‘India’s Got Talent’" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/india-s-got-talent">India's Got Talent</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/entertainment/tribal-boys-from-odisha-s-malkangiri-shine-at-india-s-got-talent--168741">Tribal Boys From Odisha's Malkangiri Shine At ‘India’s Got Talent’</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>Odisha</li>
                      <li>22 hours ago </li>
                      </ul>
                      <p>Coming from the ‘Swabhimaan Anchal’ of Malkangiri district, once a cut-off region, this group of orphan boys have qualified for the second round of the...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/taarak-mehta-ka-ooltah-chashmah">Taarak Mehta Ka Ooltah Chashmah</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/tmkoc-s-shailesh-lodha-gives-befitting-reply-to-kapil-sharma-watch-168739">TMKOC’s Shailesh Lodha Gives Befitting Reply To Kapil Sharma #Watch</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/malaika-arora">Malaika Arora</a></li>
                  <li><a class="s18" href="https://odishatv.in/videos/entertainment/bollywood/media-requests-but-malaika-arora-blatantly-refuses-watch-to-find-out-what-168732">Media Requests, But Malaika Arora Blatantly Refuses? Watch To Find Out What</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/mahabharat-krishna">Mahabharat Krishna</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/nitish-bharadwaj-krishna-announces-separation-from-ias-wife-after-12-years-of-marriage-168701">Nitish Bharadwaj 'Krishna' Announces Separation From IAS Wife After 12 Years Of Marriage</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/entertainment/nitish-bharadwaj-krishna-announces-separation-from-ias-wife-after-12-years-of-marriage-168701"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642513411.jpg" alt="" title="Nitish Bharadwaj 'Krishna' Announces Separation From IAS Wife After 12 Years Of Marriage" width="224" height="126"></a><p>Nitish's wife Smita Gate, who is an IAS officer, is presently living in Indore with their twin daughters.</p></div>           
                      
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/dhanush">Dhanush</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/dhanush-aishwaryaa-divorce-rgv-makes-shocking-comments-fans-react-168662">Dhanush-Aishwaryaa Divorce: RGV Makes Shocking Comments, Fans React</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/pushpa-the-rise">Pushpa The Rise</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/kgf-pushpa-baahubali-why-can-t-bollywood-make-such-masala-movies-netizens-discuss--168656">KGF, Pushpa, Baahubali: Why Can't Bollywood Make Such Masala Movies? Netizens Discuss!</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/pushpa-the-rise">Pushpa The Rise</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/pushpa-the-rise-meet-m-ramakrishna-from-odisha-who-played-a-key-role-in-the-flick--168645">Pushpa-The Rise: Meet M Ramakrishna From Odisha Who Played A Key Role In The Flick </a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/dhanush">Dhanush</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/dhanush-ends-18-years-of-togetherness-with-aishwaryaa-rajinikanth-announces-separation-168633">Dhanush Ends 18 Years Of Togetherness With Aishwaryaa Rajinikanth, Announces Separation</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/sara-tendulkar">Sara Tendulkar</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/sara-tendulkar-glams-up-her-messy-look-watch-168617">Sara Tendulkar Glams Up Her Messy Look | Watch</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/the-kapil-sharma-show">The Kapil Sharma Show</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/kapil-sharma-to-visit-odisha-s-bhubaneswar-soon-stage-set-for-comedy-king-s-biopic-168611">Kapil Sharma To Visit Odisha’s Bhubaneswar Soon! Stage Set For Comedy King’s Biopic</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/malaika-arora">Malaika Arora</a></li>
                  <li><a class="s18" href="https://odishatv.in/videos/entertainment/bollywood/malaika-arora-arjun-kapoor-breakup-rumours-false-duo-spotted-together-in-mumbai-168595">Malaika Arora, Arjun Kapoor Breakup Rumours False? Duo Spotted Together In Mumbai</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/dhadkan-zindaggi-kii">Dhadkan Zindaggi Kii</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/entertainment/dhadkan-zindaggi-kii-dr-vikrant-is-playing-games-to-ruin-deepika-s-career--168593">Dhadkan Zindaggi Kii: Dr. Vikrant is playing Games to Ruin Deepika's Career?</a></li>
                  </ul>
              </div><a href="https://odishatv.in/entertainment" class="common-more-button">More</a></div><div class="otv-300-250-ad"><div id="div-gpt-ad-22439204917-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22439204917-0"); }); </script></div></div><div class="container grid-gallery-container"><h3 class="heading-style-one">ODISHA POLITICAL NEWS</h3><div class="category-news-item"><a href="https://odishatv.in/news/covid-19/130-frontline-workers-of-capital-hospital-in-bhubaneswar-test-covid-positive-so-far-168794"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/Covid_19_1642653878.jpg" alt="" title="Covid-19" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/capital-hospital">Capital Hospital</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/covid-19/130-frontline-workers-of-capital-hospital-in-bhubaneswar-test-covid-positive-so-far-168794">130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>Bhubaneswar</li>
                      <li>2 hours ago </li>
                      </ul>
                      <p>The frontline workers who tested positive include as many as 40 doctors, 30 staff nurse, 4o laboratory technicians and more than 15 pharmacists</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/odisha-covid-19-cases">Odisha Covid-19 Cases</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/covid-19/odisha-detects-10-368-new-covid-19-cases-7-fatalities-168792">Odisha Detects 10,368 New Covid-19 Cases, 7 Fatalities</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/indigo">Indigo</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/miscellaneous/2-indigo-planes-including-bhubaneswar-bound-flight-avert-mid-air-collision-over-bengaluru-airport-168785">2 Indigo Planes, Including Bhubaneswar-Bound Flight Avert Mid-Air Collision Over Bengaluru Airport</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/panchayat-elections">Panchayat Elections</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/politics/odisha-rural-polls-set-stage-for-youth-brigade-to-take-up-the-gauntlet-for-serving-society-168783">Odisha Rural Polls Set Stage For Youth Brigade To Take Up The Gauntlet For Serving Society</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/politics/odisha-rural-polls-set-stage-for-youth-brigade-to-take-up-the-gauntlet-for-serving-society-168783"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642614566.jpg" alt="" title="Odisha Rural Polls Set Stage For Youth Brigade To Take Up The Gauntlet For Serving Society" width="224" height="126"></a><p>If Odisha Panchayat Elections will be remembered for many aspects, then the most distinguished one will be the foray of brigade of intelligent youths into...</p></div>          
                      
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/animal-cruelty">Animal Cruelty</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/miscellaneous/bhubaneswar-youth-shoots-dead-stray-dog-for-eating-chicken-booked-168780">Bhubaneswar Youth 'Shoots Dead Stray Dog For Eating Chicken', Booked</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/panchayat-elections">Panchayat Elections</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/politics/odisha-panchayat-election-bjd-faces-backlash-over-poll-code-violations-168779">Odisha Panchayat Election: BJD Faces Backlash Over Poll Code Violations</a></li>
                  </ul>
              </div><a href="https://odishatv.in/covid-19" class="common-more-button">More</a></div><div class="container grid-gallery-container"><h3 class="heading-style-one-normal">Other News Updates from Odisha </h3>
                        <div class="spotlight-nod-container">
                          <div class="spotlight-nod-main spotlight-nod"><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking1">130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>2 hours ago </li>
                              </ul>
                              <p>The frontline workers who tested positive include as many as 40 doctors, 30 staff nurse, 4o laboratory technicians and more...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking2">Odisha Detects 10,368 New Covid-19 Cases, 7 Fatalities</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>2 hours ago </li>
                              </ul>
                              <p>The active cases in the State stood at 88,346 and a total of 10,80,562 people recuperated from the disease, including...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking3">Sarpanch Post 'Auctioned': Factual Inquiry Report Submitted To Bolangir Collector</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>2 hours ago </li>
                              </ul>
                              <p>Aditional District Magistrate (ADM) Mahendra Mohapatra and Puintala Block Development Officer (BDO) submitted the report to Rana following an inquiry...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking4">Newborn Baby Declared Dead By Doctors, Found Alive During Funeral In Odisha’s Keonjhar</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>3 hours ago </li>
                              </ul>
                              <p>The shaken family took the baby in a bag and arranged for a funeral at their village. However, when they...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking5">2 Indigo Planes, Including Bhubaneswar-Bound Flight Avert Mid-Air Collision Over Bengaluru Airport</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>4 hours ago </li>
                              </ul>
                              <p>Officials of the Directorate General of Civil Aviation (DGCA) said that the two IndiGo planes -- 6E455 (Bengaluru to Kolkata)...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking6">Odisha Rural Polls Set Stage For Youth Brigade To Take Up The Gauntlet For Serving Society</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>12 hours ago </li>
                              </ul>
                              <p>If Odisha Panchayat Elections will be remembered for many aspects, then the most distinguished one will be the foray of...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking7">Bhubaneswar Youth 'Shoots Dead Stray Dog For Eating Chicken', Booked</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>13 hours ago </li>
                              </ul>
                              <p>A complaint has been lodged against the offender identified as Kitab Patnaik of Uparsahi of Jagamara, who allegedly fired the...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking8">Odisha Panchayat Election: BJD Faces Backlash Over Poll Code Violations</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>13 hours ago </li>
                              </ul>
                              <p>The BJP delegation also alleged that despite enforcement of poll code, hoardings of Chief Minister and the ruling BJD are...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking9">Omicron Replaces Delta In Odisha: Know About Its 'Stealth' Version Detected In Many States</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>14 hours ago </li>
                              </ul>
                              <p>Between December last and January 1st week, 2 in every 10 samples sequenced were Omicron, by mid-Jan, nearly 6 (5.8)...</p>
                            </div><div class="spotlight-nod-items">
                              <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784#breaking10">Boat Ambulance Service In Odisha's Swabhiman Anchal From Jan 26</a></h4>
                              <ul>
                              <li>Odisha</li>
                              <li>16 hours ago </li>
                              </ul>
                              <p>With the introduction of the boat ambulances, the residents of these villages will get medical facilities at their door steps....</p>
                            </div></div></div><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/01/20-168784" class="cat-more-news-btn">More</a></div><div class="container grid-gallery-container"><h3 class="heading-style-one">SPORTS</h3><div class="category-news-item"><a href="https://odishatv.in/news/sports/u19-wc-covid-hit-india-stroll-into-qfs-after-beating-ireland-australia-win-too-168790"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/U19_WC_1642649942.jpg" alt="" title="U19 WC" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/icc-u-19-world-cup-2022">ICC U-19 World Cup 2022</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/sports/u19-wc-covid-hit-india-stroll-into-qfs-after-beating-ireland-australia-win-too-168790">U19 WC: COVID-Hit India Stroll Into QFs After Beating Ireland; Australia Win Too</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>India</li>
                      <li>3 hours ago </li>
                      </ul>
                      <p>Australia sent Scotland in to bat first at the Conaree Cricket Centre, a decision that looked like it might backfire when Scotland's openers made a...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/india-vs-south-africa-odi">India Vs South Africa ODI</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/sports/1st-odi-south-africa-beat-india-by-31-runs-take-1-0-series-lead-168781">1st ODI: South Africa Beat India By 31 Runs, Take 1-0 Series Lead</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/virat-kohli">Virat Kohli</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/sports/sa-vs-ind-kohli-surpasses-tendulkar-to-become-india-s-highest-run-getter-in-away-odis-168776">SA vs IND: Kohli Surpasses Tendulkar To Become India's Highest Run-Getter In Away ODIs</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/sania-mirza">Sania Mirza</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/sports/sania-mirza-to-end-career-after-2022-season-says-body-is-wearing-down-168773">Sania Mirza To End Career After 2022 Season, Says Body Is Wearing Down</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/sports/sania-mirza-to-end-career-after-2022-season-says-body-is-wearing-down-168773"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/Sania-Mirza-1_1617543498.jpg" alt="" title="Sania Mirza" width="224" height="126"></a><p>The 35-year-old made the retirement announcement after losing the Australian Open women's doubles first round with partner Nadiia Kichenok. They lost to Slovenia's Tamara Zidansek...</p></div>           
                      
              </div><a href="https://odishatv.in/sports" class="common-more-button">More</a></div><div class="container grid-gallery-container"><h3 class="heading-style-one">Lifestyle</h3><div class="category-news-item"><a href="https://odishatv.in/news/lifestyle/beautify-your-lips-expert-shahnaz-husain-shows-how-168667"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642495214.jpg" alt="" title="Beautify Your Lips, Expert Shahnaz Husain Shows How" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/lips-care">Lips Care</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/lifestyle/beautify-your-lips-expert-shahnaz-husain-shows-how-168667">Beautify Your Lips, Expert Shahnaz Husain Shows How</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>India</li>
                      <li>2 days ago </li>
                      </ul>
                      <p>Learn Shahnaz's various lip-nourishing tips and pay attention to your lips all year round with an orderly care routine. </p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/marriage-trends">Marriage Trends</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/lifestyle/bridal-trends-of-2022-168536">Bridal Trends Of 2022</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/weekly-horoscope">Weekly Horoscope</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/lifestyle/weekly-horoscope-from-january-17-to-23-prediction-of-finance-career-health-for-all-zodiac-signs-168507">Weekly Horoscope From January 17 To 23: Prediction Of Finance, Career & Health For All Zodiac Signs</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/sun-saturn-conjuction">Sun-Saturn Conjuction</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/lifestyle/makar-sankranti-sun-saturn-conjunction-to-bring-unexpected-changes-for-these-zodiac-signs-168302">Makar Sankranti & Sun-Saturn Conjunction To Bring Unexpected Changes For These Zodiac Signs</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/lifestyle/makar-sankranti-sun-saturn-conjunction-to-bring-unexpected-changes-for-these-zodiac-signs-168302"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642064960.jpg" alt="" title="Makar Sankranti & Sun-Saturn Conjunction To Bring Unexpected Changes For These Zodiac Signs" width="224" height="126"></a><p>It is almost after a gap of long years that Sun and Saturn will come together in Capricorn which  is now taking place on...</p></div>           
                      
              </div><a href="https://odishatv.in/lifestyle" class="common-more-button">More</a></div><div class="container grid-gallery-container"><h3 class="heading-style-one">India</h3><div class="category-news-item"><a href="https://odishatv.in/news/national/rahul-slams-centre-on-abduction-of-indian-by-chinese-forces-in-arunachal-168799"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642657212.JPG" alt="" title="Abduction Of Indian By Chinese Forces In Arunachal" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/abduction-by-chinese-forces">Abduction By Chinese Forces</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/national/rahul-slams-centre-on-abduction-of-indian-by-chinese-forces-in-arunachal-168799">Rahul Slams Centre On Abduction Of Indian By Chinese Forces In Arunachal</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>India</li>
                      <li>41 minutes ago </li>
                      </ul>
                      <p>The MP has requested Prime Minister Narendra Modi, Home Minister Amit Shah, Defence Minister Rajnath Singh, Arunachal Pradesh Chief Minister Pema Khandu and Deputy Chief...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/republic-day-2022">Republic Day 2022</a></li>
                  <li><a class="s18" href="https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798">Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/bomb-threat-call">Bomb Threat Call</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/national/call-from-telangana-about-planting-bomb-at-crpf-hq-turns-hoax-168797">Call From Telangana About Planting Bomb At CRPF HQ Turns Hoax</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/work-from-home">Work From Home</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/national/-output-not-suffered-in-work-from-home-rather-increased-in-some-cases--168796">'Output Not Suffered In Work From Home, Rather Increased In Some Cases'</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/national/-output-not-suffered-in-work-from-home-rather-increased-in-some-cases--168796"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642655242.jpg" alt="" title="'Output not suffered in work from home, rather increased in some cases'" width="224" height="126"></a><p>The Minister advised all the officers and staff to ensure strict compliance of Covid-appropriate behaviour like frequent washing of hands, sanitisation, wearing a face mask,...</p></div>          
                      
              </div><a href="https://odishatv.in/national" class="common-more-button">More</a></div>
      <div class="container grid-gallery-container"><h3 class="heading-style-one">Miscellaneous</h3><div class="category-news-item"><a href="https://odishatv.in/news/miscellaneous/sarpanch-post-auctioned-factual-inquiry-report-submitted-to-bolangir-collector-168791"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642651184.jpg" alt="" title="Sarpanch Post Auctioned" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/sarpanch-post-auctioned">Sarpanch Post Auctioned</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/miscellaneous/sarpanch-post-auctioned-factual-inquiry-report-submitted-to-bolangir-collector-168791">Sarpanch Post 'Auctioned': Factual Inquiry Report Submitted To Bolangir Collector</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>Balangir</li>
                      <li>2 hours ago </li>
                      </ul>
                      <p>Aditional District Magistrate (ADM) Mahendra Mohapatra and Puintala Block Development Officer (BDO) submitted the report to Rana following an inquiry into the incident</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/dead-newborn-baby-found-alive">Dead Newborn Baby Found Alive</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/miscellaneous/newborn-baby-declared-dead-by-doctors-found-alive-during-funeral-in-odisha-s-keonjhar-168788">Newborn Baby Declared Dead By Doctors, Found Alive During Funeral In Odisha’s Keonjhar</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/indigo">Indigo</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/miscellaneous/2-indigo-planes-including-bhubaneswar-bound-flight-avert-mid-air-collision-over-bengaluru-airport-168785">2 Indigo Planes, Including Bhubaneswar-Bound Flight Avert Mid-Air Collision Over Bengaluru Airport</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/animal-cruelty">Animal Cruelty</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/miscellaneous/bhubaneswar-youth-shoots-dead-stray-dog-for-eating-chicken-booked-168780">Bhubaneswar Youth 'Shoots Dead Stray Dog For Eating Chicken', Booked</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/miscellaneous/bhubaneswar-youth-shoots-dead-stray-dog-for-eating-chicken-booked-168780"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642612467.jpg" alt="" title="Bhubaneswar Youth 'Shoots Dead Stray Dog For Eating Chicken', Booked" width="224" height="126"></a><p>A complaint has been lodged against the offender identified as Kitab Patnaik of Uparsahi of Jagamara, who allegedly fired the shots at the dogs to...</p></div>        
                      
              </div><a href="https://odishatv.in/miscellaneous" class="common-more-button">More</a></div><div class="container grid-gallery-container"><h3 class="heading-style-one">Covid-19</h3><div class="category-news-item"><a href="https://odishatv.in/news/covid-19/us-logs-over-1-million-daily-covid-cases-again-168795"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642654393.jpg" alt="" title="US Covid Cases" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/us-covid-update">US Covid Update</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/covid-19/us-logs-over-1-million-daily-covid-cases-again-168795">US Logs Over 1 Million Daily Covid Cases Again</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>India</li>
                      <li>1 hour ago </li>
                      </ul>
                      <p>As of Thursday morning, the US' overall caseload and death toll stood at 68,508,181 and 857,672, according to Johns Hopkins University's latest update.</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/capital-hospital">Capital Hospital</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/covid-19/130-frontline-workers-of-capital-hospital-in-bhubaneswar-test-covid-positive-so-far-168794">130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/omicron">Omicron</a></li>
                  <li><a class="s18" href="https://odishatv.in/videos/covid-19/top-infectious-disease-expert-faheem-younus-on-omicron-surge-vaccination-168793">Top Infectious Disease Expert Faheem Younus on Omicron Surge, Vaccination</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/odisha-covid-19-cases">Odisha Covid-19 Cases</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/covid-19/odisha-detects-10-368-new-covid-19-cases-7-fatalities-168792">Odisha Detects 10,368 New Covid-19 Cases, 7 Fatalities</a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/covid-19/odisha-detects-10-368-new-covid-19-cases-7-fatalities-168792"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642651547.jpeg" alt="" title="Odisha Covid Cases" width="224" height="126"></a><p>The active cases in the State stood at 88,346 and a total of 10,80,562 people recuperated from the disease, including 6,785  on Wednesday, till date,...</p></div>           
                      
              </div><a href="https://odishatv.in/covid-19" class="common-more-button">More</a></div><div class="container grid-gallery-container"><h3 class="heading-style-one">Business</h3><div class="category-news-item"><a href="https://odishatv.in/news/business/equities-fall-further-sensex-down-over-400-pts-on-thursday-168800"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642071318.jpg" alt="" title="Sensex" width="400" height="225"></a>
                      <ul class="category-news-item-story">
                      <li><a  class="s20" href="https://odishatv.in/tag/sensex">Sensex</a></li>
                      <li><a class="s20"  href="https://odishatv.in/news/business/equities-fall-further-sensex-down-over-400-pts-on-thursday-168800">Equities Fall Further, Sensex Down Over 400 Pts On Thursday</a></li>
                      </ul>
                      <ul class="category-news-item-time">
                      <li>India</li>
                      <li>34 minutes ago </li>
                      </ul>
                      <p>HDFC, Infosys, Bajaj Auto, Reliance Industries, and Bajaj Finserv were some of the top losers, NSE data showed. Top gainers during the early trade were...</p>
                        </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/fixed-broadband-provider">Fixed Broadband Provider</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/business/jio-surpassed-bsnl-to-become-the-country-s-largest-fixed-broadband-provider-168744">Jio Surpassed BSNL To Become The Country's Largest Fixed Broadband Provider</a></li>
                  </ul>
              </div> <div class="category-news-item">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/third-wave">Third Wave</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/business/india-s-overall-economic-activity-remains-strong-despite-third-wave-rbi-bulletin-168628">India's Overall Economic Activity Remains Strong Despite Third Wave: RBI Bulletin</a></li>
                  </ul>
              </div> <div class="category-news-item ">
                <ul class="category-news-item-story">
                   <li><a class="s18" href="https://odishatv.in/tag/indian-stock-market">Indian Stock Market</a></li>
                  <li><a class="s18" href="https://odishatv.in/news/business/sensex-nifty-edge-higher-on-gains-in-auto-energy-stocks-gold-rallies-rs-176--168610">Sensex, Nifty Edge Higher On Gains In Auto, Energy Stocks; Gold Rallies Rs 176 </a></li>
                  </ul>
                  <div class="category-news-item-summary"><a href="https://odishatv.in/news/business/sensex-nifty-edge-higher-on-gains-in-auto-energy-stocks-gold-rallies-rs-176--168610"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1632134870.jpg" alt="" title="Sensex, Nifty Edge Higher On Gains In Auto, Energy Stocks; Gold Rallies Rs 176 " width="224" height="126"></a><p>Declining for the second straight session, the rupee on Monday fell 9 paise to close at 74.24 (provisional) against the US dollar as muted domestic...</p></div>          
                      
              </div><a href="https://odishatv.in/business" class="common-more-button">More</a></div>

  <?php include_once 'includes/footer.php'; ?>