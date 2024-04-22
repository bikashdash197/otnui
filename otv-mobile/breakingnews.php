<?php include_once 'includes/header.php'; ?>
<style type="text/css">
    .nod-info {
  position: relative;
  display: inline-block;
  width: 100%;
  margin-bottom: 30px;
}
.nod-info h1 {
  margin: 10px 0 15px 0;
  padding: 0;
  text-transform: capitalize;
  font-size: 27px;
  font-weight: 400;
  color: #000;
  font-family: Faustina, serif;
}
.nod-info-content {
  background-color: #f0f1f6;
  border-radius: 7px;
  padding: 10px 10px 5px 10px;
  margin: 0;
}
.nod-content-list {
  position: relative;
  border-left: 2px solid #f9b41b;
  padding-left: 13px;
  margin: 0 0 30px 0;
  display: inline-block;
}
.nod-content-list h2 {
  margin: 0 0 10px 0;
  padding: 0;
  text-transform: capitalize;
  font-size: 24px;
  font-weight: 700;
  color: #000;
  line-height: 27px;
  position: relative;
}
.nod-content-list h2:before {
  content: "";
  position: absolute;
  left: -15px;
  top: 8px;
  width: 0;
  height: 0;
  border-top: 7px solid transparent;
  border-left: 10px solid #f9b41b;
  border-bottom: 7px solid transparent;
}
.nod-content {
  background-color: #f0f1f6;
  border-radius: 5px;
  padding: 5px;
  display: inline-block;
  width: 100%;
  font-size: 20px;
}
.nod-content p {
  font-size: 17px;
  margin: 0;
  display: inline-block;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 25px;
  color: #252525;
}
ul.nod-social {
  margin: 5px 0 10px 0;
  padding: 0;
}
ul.nod-social li {
  display: inline;
  list-style-type: none;
}
ul.nod-social li a {
  text-decoration: none;
  display: inline;
  text-align: center;
  color: #9e7777;
  font-size: 20px;
  margin-right: 15px;
  border: 1px solid #fff;
  padding: 5px;
  background: #f5eeee;
}
ul.nod-social li:last-child a {
  margin-right: 0;
}
a.cat-more-news-btn {
  outline: 0;
  line-height: 18px;
  padding: 0;
  width: fit-content;
  border: none;
  color: #7b1c18;
  text-transform: capitalize;
  font-size: 12px;
  border-radius: 2px;
  float: right;
  font-weight: 700;
  transition-duration: 0.5s;
  display: block;
  position: relative;
  margin-bottom: 10px;
}
a.cat-more-news-btn:after {
  font-family: "Font Awesome 5 Free";
  content: "\f30b";
  margin-left: 8px;
}
ul.nod-author {
  margin: 0 0 5px 0;
  padding: 0;
  position: relative;
  display: inline-block;
}
ul.nod-author li {
  list-style-type: none;
  display: inline-block;
  line-height: 17px;
  font-size: 11px;
  font-family: "Libre Franklin", sans-serif;
  text-transform: uppercase;
  color: #666;
  position: relative;
}
ul.nod-author li:first-child:after {
  content: ",";
}
ul.nod-author li a {
  text-decoration: none;
  display: block;
  color: #a00606;
  font-weight: 400;
  font-size: 10px;
}
section.static-page-sec {
  float: left;
  width: 100%;
  margin-bottom: 25px;
}
.static-page-info h1 {
  margin: 0 0 15px 0;
  padding: 0;
  font-size: 26px;
}
.static-content table {
  width: auto !important;
  margin-bottom: 30px;
  height: auto !important;
}
.static-content table thead {
  background-color: #7b1c18;
  color: #fff;
  text-transform: uppercase;
  font-size: 16px;
  text-align: center;
  font-weight: 700;
}
.static-content table thead tr th {
  text-align: center;
  font-weight: 700;
  padding: 10px 5px;
}
.static-content table tbody tr td {
  text-align: center;
  padding: 10px 5px;
}
.static-content table tbody tr td h1,
.static-content table tbody tr td h2,
.static-content table tbody tr td h3,
.static-content table tbody tr td h4,
.static-content table tbody tr td h5,
.static-content table tbody tr td h6 {
  margin: 0;
  padding: 0;
}
.static-content table tbody tr td h2 {
  margin-bottom: 10px;
}
.static-content-table {
  width: 100%;
  overflow-x: scroll;
}
li.lcyclone-menu img {
  margin: -5px 10px 0 0;
}
a#lodemore {
  background-color: #7b1c18;
  border: none;
  border-radius: 0;
  display: block;
  width: fit-content;
  margin: 15px auto;
}
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
  margin: 0;
  margin-top: -3px;
  overflow: hidden;
  height: 43px;
  font-family: Faustina, serif;
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
  color: #666;
  font-size: 15px;
  line-height: 19px;
  height: 41px;
  overflow: hidden;
  margin: 0;
  padding: 0;
  font-family: "Libre Franklin", sans-serif;
}
.spotlight-nod-items ul {
  margin: 0;
  padding: 0;
  position: relative;
}
.spotlight-nod-items ul li {
  list-style-type: none;
  display: inline-block;
  position: relative;
  color: #666;
  font-size: 10px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 300;
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
</style>
<section class="main-article">
  <div class="container">
    <div class="row">      
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 sticky">
        <div class="nod-info">
        <h1>Latest Odisha Breaking News Updates - Thursday, 20 January 2022</h1>
        <div class="nod-info-content">
        <p>When it comes to breaking news for you the fastest and in the most comprehensive and accurate manner, be it from Odisha or beyond, OdishaTV is the best platform that you will ever need. Tune in to our Breaking News section for all that matters to you.</p>
        </div>
        </div>

         <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking1&t=IMD+Predicts+Rain%2C+Thunderstorm+In+Odisha+Till+Jan+25%3B+Yellow+Warning+For+Districts','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking1&hashtags=otv&text=IMD+Predicts+Rain%2C+Thunderstorm+In+Odisha+Till+Jan+25%3B+Yellow+Warning+For+Districts','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Vikash Sharma</li>
            <li>33 minutes ago </li>
          </ul>

            <h2>IMD Predicts Rain, Thunderstorm In Odisha Till Jan 25; Yellow Warning For Districts</h2>
            <div class="nod-content">
           As per IMD, the minimum temperature is likely to rise gradually by 3 to 4 degree Celsius during the next three days and no large change will occur thereafter in the districts of Odisha. <a target="_blank" href="https://odishatv.in/news/weather/imd-predicts-rain-thunderstorm-in-odisha-till-jan-25-yellow-warning-for-districts-168820" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking2&t=Odisha+Poll+Body+Urges+Strict+Enforcement+Of+Covid+Guidelines','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking2&hashtags=otv&text=Odisha+Poll+Body+Urges+Strict+Enforcement+Of+Covid+Guidelines','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>IANS</li>
            <li>2 hours ago </li>
          </ul>

            <h2>Odisha Poll Body Urges Strict Enforcement Of Covid Guidelines</h2>
            <div class="nod-content">
           As per the guidelines of the SEC, either the candidate or one proposer can enter the election officer's office and maintain proper social distancing while filing the nomination papers. Only one vehicle is allowed for the purpose of filing a nomination. <a target="_blank" href="https://odishatv.in/news/miscellaneous/odisha-poll-body-urges-strict-enforcement-of-covid-guidelines-168811" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking3&t=Birthday+Party+On+Road+During+Night+Curfew+In+Bhubaneswar%3A+Commisisonerate+Police+Seizes+12+Vehicles','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking3&hashtags=otv&text=Birthday+Party+On+Road+During+Night+Curfew+In+Bhubaneswar%3A+Commisisonerate+Police+Seizes+12+Vehicles','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Vikash Sharma</li>
            <li>2 hours ago </li>
          </ul>

            <h2>Birthday Party On Road During Night Curfew In Bhubaneswar: Commisisonerate Police Seizes 12 Vehicles</h2>
            <div class="nod-content">
           Twin City Police Commissioner, Soumendra Priyadarshi spotted the group which was busy in the birthday bash on the main road parking their vehicles. <a target="_blank" href="https://odishatv.in/news/crime/birthday-party-on-road-during-night-curfew-in-bhubaneswar-12-vehicles-seized-168810" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking4&t=%27Bulli+Bai%27+App+Case%3A+Mumbai+Police+Arrests+Accused+From+Odisha','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking4&hashtags=otv&text=%27Bulli+Bai%27+App+Case%3A+Mumbai+Police+Arrests+Accused+From+Odisha','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Vikash Sharma</li>
            <li>2 hours ago </li>
          </ul>

            <h2>'Bulli Bai' App Case: Mumbai Police Arrests Accused From Odisha</h2>
            <div class="nod-content">
           The accused has been identified as Neeraj Singh, sources said. The accused is an MBA degree holder. He was involved in the planning of the app with the main accused, sources said. <a target="_blank" href="https://odishatv.in/news/crime/-bulli-bai-app-case-mumbai-police-arrests-accused-from-odisha-168809" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking5&t=India-West+Indies+T20I+Match+May+Move+Out+Of+Barabati+Stadium+In+Odisha','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking5&hashtags=otv&text=India-West+Indies+T20I+Match+May+Move+Out+Of+Barabati+Stadium+In+Odisha','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Rajendra Prasad Mohapatra</li>
            <li>3 hours ago </li>
          </ul>

            <h2>India-West Indies T20I Match May Move Out Of Barabati Stadium In Odisha</h2>
            <div class="nod-content">
           The BCCI is expected to announce the finalised fixtures of the tour programme in a day or two <a target="_blank" href="https://odishatv.in/news/sports/india-west-indies-t20i-match-may-move-out-of-barabati-stadium-in-odisha-168806" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking6&t=130+Frontline+Workers+Of+Capital+Hospital+In+Bhubaneswar+Test+Covid+Positive+So+Far','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking6&hashtags=otv&text=130+Frontline+Workers+Of+Capital+Hospital+In+Bhubaneswar+Test+Covid+Positive+So+Far','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Rajendra Prasad Mohapatra</li>
            <li>6 hours ago </li>
          </ul>

            <h2>130 Frontline Workers Of Capital Hospital In Bhubaneswar Test Covid Positive So Far</h2>
            <div class="nod-content">
           The frontline workers who tested positive include as many as 40 doctors, 30 staff nurse, 4o laboratory technicians and more than 15 pharmacists <a target="_blank" href="https://odishatv.in/news/covid-19/130-frontline-workers-of-capital-hospital-in-bhubaneswar-test-covid-positive-so-far-168794" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking7&t=Odisha+Detects+10%2C368+New+Covid-19+Cases%2C+7+Fatalities','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking7&hashtags=otv&text=Odisha+Detects+10%2C368+New+Covid-19+Cases%2C+7+Fatalities','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Sharmili Mallick</li>
            <li>7 hours ago </li>
          </ul>

            <h2>Odisha Detects 10,368 New Covid-19 Cases, 7 Fatalities</h2>
            <div class="nod-content">
           The active cases in the State stood at 88,346 and a total of 10,80,562 people recuperated from the disease, including 6,785  on Wednesday, till date, as per the State Health and Family Welfare Department. <a target="_blank" href="https://odishatv.in/news/covid-19/odisha-detects-10-368-new-covid-19-cases-7-fatalities-168792" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking8&t=Sarpanch+Post+%27Auctioned%27%3A+Factual+Inquiry+Report+Submitted+To+Bolangir+Collector','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking8&hashtags=otv&text=Sarpanch+Post+%27Auctioned%27%3A+Factual+Inquiry+Report+Submitted+To+Bolangir+Collector','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Rajendra Prasad Mohapatra</li>
            <li>7 hours ago </li>
          </ul>

            <h2>Sarpanch Post 'Auctioned': Factual Inquiry Report Submitted To Bolangir Collector</h2>
            <div class="nod-content">
           Aditional District Magistrate (ADM) Mahendra Mohapatra and Puintala Block Development Officer (BDO) submitted the report to Rana following an inquiry into the incident <a target="_blank" href="https://odishatv.in/news/miscellaneous/sarpanch-post-auctioned-factual-inquiry-report-submitted-to-bolangir-collector-168791" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking9&t=Newborn+Baby+Declared+Dead+By+Doctors%2C+Found+Alive+During+Funeral+In+Odisha%E2%80%99s+Keonjhar','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking9&hashtags=otv&text=Newborn+Baby+Declared+Dead+By+Doctors%2C+Found+Alive+During+Funeral+In+Odisha%E2%80%99s+Keonjhar','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Rajendra Prasad Mohapatra</li>
            <li>8 hours ago </li>
          </ul>

            <h2>Newborn Baby Declared Dead By Doctors, Found Alive During Funeral In Odisha’s Keonjhar</h2>
            <div class="nod-content">
           The shaken family took the baby in a bag and arranged for a funeral at their village. However, when they were about to bury the baby, the newborn was found to be breathing and crying <a target="_blank" href="https://odishatv.in/news/miscellaneous/newborn-baby-declared-dead-by-doctors-found-alive-during-funeral-in-odisha-s-keonjhar-168788" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking10&t=2+Indigo+Planes%2C+Including+Bhubaneswar-Bound+Flight+Avert+Mid-Air+Collision+Over+Bengaluru+Airport','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking10&hashtags=otv&text=2+Indigo+Planes%2C+Including+Bhubaneswar-Bound+Flight+Avert+Mid-Air+Collision+Over+Bengaluru+Airport','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>PTI</li>
            <li>8 hours ago </li>
          </ul>

            <h2>2 Indigo Planes, Including Bhubaneswar-Bound Flight Avert Mid-Air Collision Over Bengaluru Airport</h2>
            <div class="nod-content">
           Officials of the Directorate General of Civil Aviation (DGCA) said that the two IndiGo planes -- 6E455 (Bengaluru to Kolkata) and 6E246 (Bengaluru to Bhubaneswar) -- were involved in 'breach of separation' at Bengaluru airport. <a target="_blank" href="https://odishatv.in/news/miscellaneous/2-indigo-planes-including-bhubaneswar-bound-flight-avert-mid-air-collision-over-bengaluru-airport-168785" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking11&t=Odisha+Rural+Polls+Set+Stage+For+Youth+Brigade+To+Take+Up+The+Gauntlet+For+Serving+Society','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking11&hashtags=otv&text=Odisha+Rural+Polls+Set+Stage+For+Youth+Brigade+To+Take+Up+The+Gauntlet+For+Serving+Society','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Pradeep Pattanayak</li>
            <li>17 hours ago </li>
          </ul>

            <h2>Odisha Rural Polls Set Stage For Youth Brigade To Take Up The Gauntlet For Serving Society</h2>
            <div class="nod-content">
           If Odisha Panchayat Elections will be remembered for many aspects, then the most distinguished one will be the foray of brigade of intelligent youths into politics who value common good above all else. <a target="_blank" href="https://odishatv.in/news/politics/odisha-rural-polls-set-stage-for-youth-brigade-to-take-up-the-gauntlet-for-serving-society-168783" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking12&t=Bhubaneswar+Youth+%27Shoots+Dead+Stray+Dog+For+Eating+Chicken%27%2C+Booked','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking12&hashtags=otv&text=Bhubaneswar+Youth+%27Shoots+Dead+Stray+Dog+For+Eating+Chicken%27%2C+Booked','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Odishatv Bureau</li>
            <li>17 hours ago </li>
          </ul>

            <h2>Bhubaneswar Youth 'Shoots Dead Stray Dog For Eating Chicken', Booked</h2>
            <div class="nod-content">
           A complaint has been lodged against the offender identified as Kitab Patnaik of Uparsahi of Jagamara, who allegedly fired the shots at the dogs to punish them for eating a chicken.  <a target="_blank" href="https://odishatv.in/news/miscellaneous/bhubaneswar-youth-shoots-dead-stray-dog-for-eating-chicken-booked-168780" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking13&t=Odisha+Panchayat+Election%3A+BJD+Faces+Backlash+Over+Poll+Code+Violations','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking13&hashtags=otv&text=Odisha+Panchayat+Election%3A+BJD+Faces+Backlash+Over+Poll+Code+Violations','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Pradeep Pattanayak</li>
            <li>18 hours ago </li>
          </ul>

            <h2>Odisha Panchayat Election: BJD Faces Backlash Over Poll Code Violations</h2>
            <div class="nod-content">
           The BJP delegation also alleged that despite enforcement of poll code, hoardings of Chief Minister and the ruling BJD are still very much adorning rural pockets in gross violation of the guidelines.   <a target="_blank" href="https://odishatv.in/news/politics/odisha-panchayat-election-bjd-faces-backlash-over-poll-code-violations-168779" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking14&t=Omicron+Replaces+Delta+In+Odisha%3A+Know+About+Its+%27Stealth%27+Version+Detected+In+Many+States','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking14&hashtags=otv&text=Omicron+Replaces+Delta+In+Odisha%3A+Know+About+Its+%27Stealth%27+Version+Detected+In+Many+States','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Sanjeev Kumar Patro</li>
            <li>19 hours ago </li>
          </ul>

            <h2>Omicron Replaces Delta In Odisha: Know About Its 'Stealth' Version Detected In Many States</h2>
            <div class="nod-content">
           Between December last and January 1st week, 2 in every 10 samples sequenced were Omicron, by mid-Jan, nearly 6 (5.8) in every 10 genomes sequenced confirm Omicron variant <a target="_blank" href="https://odishatv.in/news/exclusive/omicron-replaces-delta-in-odisha-know-about-its-stealth-version-detected-in-many-states-168777" class="cat-more-news-btn">More</a>
          </div>
          </div> <div class="nod-content-list">
           <ul class="nod-social">
                   <li>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking15&t=Boat+Ambulance+Service+In+Odisha%27s+Swabhiman+Anchal+From+Jan+26','_blank'); return false;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=https%3A%2F%2Fodishatv.in%2Fodisha-breaking-news-today%2Flatest-updates%2F2022%2F01%2F20-168784%23breaking15&hashtags=otv&text=Boat+Ambulance+Service+In+Odisha%27s+Swabhiman+Anchal+From+Jan+26','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>  
              </ul>

           <ul class="nod-author">
            <li>Pradeep Pattanayak</li>
            <li>21 hours ago </li>
          </ul>

            <h2>Boat Ambulance Service In Odisha's Swabhiman Anchal From Jan 26</h2>
            <div class="nod-content">
           With the introduction of the boat ambulances, the residents of these villages will get medical facilities at their door steps. <a target="_blank" href="https://odishatv.in/news/miscellaneous/boat-ambulance-service-in-odisha-s-swabhiman-anchal-from-jan-26-168771" class="cat-more-news-btn">More</a>
          </div>
          </div>         
      </div>
    </div>
  </div>
</section>
<!--============= //ARTICLE ==============-->
<?php include_once 'includes/footer.php'; ?>