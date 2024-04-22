<!DOCTYPE html>
<html>
   <head>
      <title>Mobile V2</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css_mobile.php'; ?>
         .live-details-image {
   margin-bottom: 25px;
   }
   .live-details-image img {
   width: 100%;
   height: auto;
   }
   h2.live-details-box-heading {
   margin: 15px 0;
   font-size: 17px;
   background-color: #a00606;
   color: #fff;
   padding: 4px 10px;
   font-weight: 700;
   text-transform: uppercase;
   width: fit-content;
   }
   h2.live-details-box-heading span {
   color: #fff;
   font-size: 17px;
   text-transform: uppercase;
   font-weight: 500;
   }
   h3.photo-gallery-sec-h3 span.dropdown {
   margin-top: -4px;
   }
   h3.photo-gallery-sec-h3 {
   margin: 0 0 15px 0;
   padding: 0;
   font-weight: 700;
   font-size: 18px;
   position: relative;
   padding-right: 50px;
   }
   ul.live-details-sidebar {
   margin-bottom: 25px;
   padding: 7px;
   background-color: #f5f5f5;
   border-radius: 8px;
   border: 1px solid #cecece;
   height: 319px;
   overflow-x: auto;
   }
   ul.live-details-sidebar li {
   list-style-type: none;
   display: block;
   margin-bottom: 5px;
   }
   ul.live-details-sidebar li a:before {
   content: "";
   display: block;
   position: absolute;
   left: 12px;
   top: 11px;
   width: 8px;
   height: 8px;
   background-color: #a00606;
   border-radius: 50%;
   }
   ul.live-details-sidebar li a {
   text-decoration: none;
   color: #848282;
   font-size: 17px;
   list-style-type: none;
   display: block;
   position: relative;
   background-color: #ebebeb;
   padding: 4px 4px 4px 28px;
   border-radius: 5px;
   border: 1px solid #bfbebe;
   cursor: pointer;
   }
   ul.live-details-sidebar li a span {
   display: block;
   color: #0e0e0e;
   }
   .live-details-heading {
   border: 1px solid #e8e2e2;
   margin-bottom: 25px;
   padding: 0;
   }
   .live-details-heading h1 {
   padding: 8px;
   font-size: 28px;
   margin: 6px;
   font-weight: 600;
   color: #656565;
   line-height: 32px;
   }
   .live-details-heading p {
   font-size: 15px;
   font-weight: 600;
   display: block;
   }
   .live-details-heading ul {
   margin: 19px 17px;
   padding: 0;
   }
   .live-details-heading ul li {
   list-style-type: none;
   display: inline;
   font-size: 17px;
   margin: 0;
   width: 100%;
   font-family: Faustina, serif;
   font-weight: 400;
   padding: 0;
   line-height: 25px;
   color: #252525;
   }
   .live-details-heading ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .live-details-heading ul li:first-child a {
   color: #a00606;
   font-weight: 700;
   transition-duration: 1s;
   }
   .live-details-heading ul li:first-child:before {
   content: "";
   display: block;
   background-color: #c10707;
   width: 1px;
   height: 12px;
   position: absolute;
   bottom: 4px;
   right: -10px;
   transform: rotate(10deg);
   }
   .live-details-heading ul li a {
   font-size: 19px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 24px;
   transition-duration: 1s;
   }
   .live-details-heading ul li a:hover {
   color: #a00606;
   transition-duration: 1s;
   }
   .live-details-banner {
   margin-bottom: 40px;
   }
   .live-details-banner img {
   width: 100%;
   height: auto;
   }
   .live-details-start {
   position: relative;
   }
   .live-details-one {
   position: relative;
   }
   .live-details-one:before {
   content: "";
   display: block;
   width: 3px;
   height: 100%;
   background-color: #dadada;
   position: absolute;
   left: 0;
   top: 0;
   }
   .live-details-time {
   position: relative;
   }
   .live-details-content {
   background-color: #ebebeb;
   padding: 5px;
   -webkit-box-shadow: 1px 6px 8px 0 rgba(0, 0, 0, 0.47);
   -moz-box-shadow: 1px 6px 8px 0 rgba(0, 0, 0, 0.47);
   box-shadow: 1px 6px 8px 0 rgba(0, 0, 0, 0.47);
   border-radius: 5px;
   margin: 23px 15px 13px 25px;
   position: relative;
   }
   .live-details-content:before {
   content: "";
   display: block;
   position: absolute;
   left: -30px;
   top: -3px;
   width: 14px;
   height: 14px;
   background-color: #a00606;
   border-radius: 50%;
   }
   .live-details-content.active:before {
   box-shadow: 0 0 0 rgb(244 176 27);
   animation: pulse 2s infinite;
   }
   .live-details-content ul {
   margin: 0;
   padding: 0;
   }
   .live-details-content ul li {
   list-style-type: none;
   display: inline;
   }
   .live-details-content ul li:first-child {
   position: relative;
   }
   .live-details-content ul li:first-child a {
   color: #a00606;
   font-weight: 700;
   transition-duration: 1s;
   }
   .live-details-content ul li a {
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 24px;
   transition-duration: 1s;
   }
   .live-details-content ul li a:hover {
   color: #a00606;
   transition-duration: 1s;
   }
   .live-details-content h4 {
   margin: 0 0 10px 0;
   font-size: 23px;
   }
   .live-details-content h5 {
   margin: 0 0 10px 0;
   padding: 0;
   font-size: 11px;
   text-transform: uppercase;
   }
   .live-details-content h5 span {
   color: #848282;
   margin-left: 7px;
   }
   .live-details-time p {
   font-size: 18px;
   color: #a00606;
   }
   .live-details-time p span {
   color: #5f5f5e;
   font-size: 10px;
   margin-left: 10px;
   }
   .live-details-content p {
   font-size: 17px;
   margin: 0;
   display: inline-block;
   width: 100%;
   font-family: Faustina, serif;
   font-weight: 400;
   padding: 0;
   line-height: 25px;
   color: #252525;
   }
   .live-details-content p a {
   color: #337ab7 !important;
   }
   .live-details-banner-video {
   position: relative;
   margin: 15px 0 15px 0;
   background-color: #f1f1f6;
   padding: 5px;
   }
   h4.live-details-banner-video-details {
   color: #474747;
   font-size: 22px;
   line-height: 24px;
   font-family: Faustina, serif;
   margin: 5px 0 10px 0;
   padding: 0;
   font-weight: 400;
   }
   p.live-details-banner-video-disclaimer {
   background-color: #f1f1f6;
   color: #666;
   font-size: 11px;
   line-height: 15px;
   margin: 0;
   padding: 5px;
   font-family: "Libre Franklin", sans-serif;
   font-style: italic;
   }
   p.live-details-banner-video-disclaimer span {
   color: #ec5836;
   margin-right: 10px;
   font-weight: 700;
   }
   .live-details-image {
   margin-bottom: 25px;
   }
   .live-details-image img {
   width: 100%;
   height: auto;
   }
   h2.live-details-box-heading {
   margin: 15px 0;
   font-size: 17px;
   background-color: #a00606;
   color: #fff;
   padding: 4px 10px;
   font-weight: 700;
   text-transform: uppercase;
   width: fit-content;
   }
   h2.live-details-box-heading span {
   color: #fff;
   font-size: 17px;
   text-transform: uppercase;
   font-weight: 500;
   }
   h3.photo-gallery-sec-h3 span.dropdown {
   margin-top: -4px;
   }
   h3.photo-gallery-sec-h3 {
   margin: 0 0 15px 0;
   padding: 0;
   font-weight: 700;
   font-size: 18px;
   position: relative;
   padding-right: 50px;
   }
   ul.live-details-sidebar {
   margin-bottom: 25px;
   padding: 7px;
   background-color: #f5f5f5;
   border-radius: 8px;
   border: 1px solid #cecece;
   height: 319px;
   overflow-x: auto;
   }
   ul.live-details-sidebar li {
   list-style-type: none;
   display: block;
   margin-bottom: 5px;
   }
   ul.live-details-sidebar li a:before {
   content: "";
   display: block;
   position: absolute;
   left: 12px;
   top: 11px;
   width: 8px;
   height: 8px;
   background-color: #a00606;
   border-radius: 50%;
   }
   ul.live-details-sidebar li a {
   text-decoration: none;
   color: #848282;
   font-size: 17px;
   list-style-type: none;
   display: block;
   position: relative;
   background-color: #ebebeb;
   padding: 4px 4px 4px 28px;
   border-radius: 5px;
   border: 1px solid #bfbebe;
   cursor: pointer;
   }
   ul.live-details-sidebar li a span {
   display: block;
   color: #0e0e0e;
   }
   .live-details-heading {
   border: 1px solid #e8e2e2;
   margin-bottom: 25px;
   padding: 0;
   }
   .live-details-heading h1 {
   padding: 8px;
   font-size: 28px;
   margin: 6px;
   font-weight: 600;
   color: #656565;
   line-height: 32px;
   }
   .live-details-heading p {
   font-size: 15px;
   font-weight: 600;
   display: block;
   }
   .live-details-heading ul {
   margin: 19px 17px;
   padding: 0;
   }
   .live-details-heading ul li {
   list-style-type: none;
   display: inline;
   font-size: 17px;
   margin: 0;
   width: 100%;
   font-family: Faustina, serif;
   font-weight: 400;
   padding: 0;
   line-height: 25px;
   color: #252525;
   }
   .live-details-heading ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .live-details-heading ul li:first-child a {
   color: #a00606;
   font-weight: 700;
   transition-duration: 1s;
   }
   .live-details-heading ul li:first-child:before {
   content: "";
   display: block;
   background-color: #c10707;
   width: 1px;
   height: 12px;
   position: absolute;
   bottom: 4px;
   right: -10px;
   transform: rotate(10deg);
   }
   .live-details-heading ul li a {
   font-size: 19px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 24px;
   transition-duration: 1s;
   }
   .live-details-heading ul li a:hover {
   color: #a00606;
   transition-duration: 1s;
   }
   .live-details-banner {
   margin-bottom: 40px;
   }
   .live-details-banner img {
   width: 100%;
   height: auto;
   }
   .live-details-start {
   position: relative;
   }
   .live-details-one {
   position: relative;
   }
   .live-details-one:before {
   content: "";
   display: block;
   width: 3px;
   height: 100%;
   background-color: #dadada;
   position: absolute;
   left: 0;
   top: 0;
   }
   .live-details-time {
   position: relative;
   }
   .live-details-content {
   background-color: #ebebeb;
   padding: 5px;
   -webkit-box-shadow: 1px 6px 8px 0 rgba(0, 0, 0, 0.47);
   -moz-box-shadow: 1px 6px 8px 0 rgba(0, 0, 0, 0.47);
   box-shadow: 1px 6px 8px 0 rgba(0, 0, 0, 0.47);
   border-radius: 5px;
   margin: 23px 15px 13px 25px;
   position: relative;
   }
   .live-details-content:before {
   content: "";
   display: block;
   position: absolute;
   left: -30px;
   top: -3px;
   width: 14px;
   height: 14px;
   background-color: #a00606;
   border-radius: 50%;
   }
   .live-details-content.active:before {
   box-shadow: 0 0 0 rgb(244 176 27);
   animation: pulse 2s infinite;
   }
   .live-details-content ul {
   margin: 0;
   padding: 0;
   }
   .live-details-content ul li {
   list-style-type: none;
   display: inline;
   }
   .live-details-content ul li:first-child {
   position: relative;
   }
   .live-details-content ul li:first-child a {
   color: #a00606;
   font-weight: 700;
   transition-duration: 1s;
   }
   .live-details-content ul li a {
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 24px;
   transition-duration: 1s;
   }
   .live-details-content ul li a:hover {
   color: #a00606;
   transition-duration: 1s;
   }
   .live-details-content h4 {
   margin: 0 0 10px 0;
   font-size: 23px;
   }
   .live-details-content h5 {
   margin: 0 0 10px 0;
   padding: 0;
   font-size: 11px;
   text-transform: uppercase;
   }
   .live-details-content h5 span {
   color: #848282;
   margin-left: 7px;
   }
   .live-details-time p {
   font-size: 18px;
   color: #a00606;
   }
   .live-details-time p span {
   color: #5f5f5e;
   font-size: 10px;
   margin-left: 10px;
   }
   .live-details-content p {
   font-size: 17px;
   margin: 0;
   display: inline-block;
   width: 100%;
   font-family: Faustina, serif;
   font-weight: 400;
   padding: 0;
   line-height: 25px;
   color: #252525;
   }
   .live-details-content p a {
   color: #337ab7 !important;
   }
   .live-details-banner-video {
   position: relative;
   margin: 15px 0 15px 0;
   background-color: #f1f1f6;
   padding: 5px;
   }
   h4.live-details-banner-video-details {
   color: #474747;
   font-size: 22px;
   line-height: 24px;
   font-family: Faustina, serif;
   margin: 5px 0 10px 0;
   padding: 0;
   font-weight: 400;
   }
   p.live-details-banner-video-disclaimer {
   background-color: #f1f1f6;
   color: #666;
   font-size: 11px;
   line-height: 15px;
   margin: 0;
   padding: 5px;
   font-family: "Libre Franklin", sans-serif;
   font-style: italic;
   }
   p.live-details-banner-video-disclaimer span {
   color: #ec5836;
   margin-right: 10px;
   font-weight: 700;
   }
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <!--===================== ARTICLE =======================-->
      <div class="container">
         <ul class="bredcrumb-mobile-sec">
            <li><a href="#">Home</a></li>
            <li><a href="#">Country</a></li>
         </ul>
      </div>
      <section class="customlive">
   <div class="container">
      <div class="otv-300-250-ad">
         <div id="div-gpt-ad-22469774602-0" style="width: 300px; height: 250px;">
         </div>
      </div>
      <!-- <iframe id="video-custom" src='https://www.youtube.com/embed/quC9Cu9CVNs?autoplay=1&cc_load_policy=1' width='100%' height="250" frameborder='0' allow='fullscreen' allowfullscreen mozAllowFullScreen webkitAllowFullScreen scrolling='no'></iframe> -->
      <h2 class="live-details-box-heading">Live Updates :<span> From The News Room</span></h2>
      <ul class="live-details-sidebar">
         <li><a href="#livedetails1"><span> 05 December 2021, 07:07 PM IST</span>Cloudburst In Paradip: Port Town Sees Record Rainfall </a></li>
         <li><a href="#livedetails2"><span> 05 December 2021, 07:01 PM IST</span>Similipal National Park To Remain Shut On Dec 6</a></li>
         <li><a href="#livedetails3"><span> 05 December 2021, 05:45 PM IST</span>Cyclone Jawad Impact- Odisha Farmers Stare At Uncertainty Over Massive Crop Loss</a></li>
         <li><a href="#livedetails4"><span> 05 December 2021, 02:03 PM IST</span>Rain Lashes Paradip</a></li>
         <li><a href="#livedetails5"><span> 05 December 2021, 01:17 PM IST</span>Weakened Cyclone Jawad Clouds Go Past Puri, Now Over Jagatsinghpur-Kendrapada</a></li>
         <li><a href="#livedetails6"><span> 05 December 2021, 12:20 PM IST</span>Rainfall Activity To Continue In Odisha, Says IMD DG</a></li>
         <li><a href="#livedetails7"><span> 05 December 2021, 11:26 AM IST</span>Jawad Triggers Rain In Odisha</a></li>
         <li><a href="#livedetails8"><span> 05 December 2021, 10:19 AM IST</span>Check IMD’s Wind Speed Forecast For Odisha, Andhra, West Bengal</a></li>
         <li><a href="#livedetails9"><span> 05 December 2021, 09:44 AM IST</span>Rain Lashes Puri</a></li>
         <li><a href="#livedetails10"><span> 05 December 2021, 09:36 AM IST</span>Fishermen Spend Sleepless Night</a></li>
         <li><a href="#livedetails11"><span> 05 December 2021, 09:26 AM IST</span>Jawad Inches Closer To Odisha Coast</a></li>
         <li><a href="#livedetails12"><span> 05 December 2021, 08:59 AM IST</span>Gopalpur Records 60 MM Rainfall; Heavy Rain To Lash Odisha</a></li>
         <li><a href="#livedetails13"><span> 05 December 2021, 08:25 AM IST</span>Cyclone Jawad To Turn Into Depression; Heavy Rainfall To Lash Twin City</a></li>
         <li><a href="#livedetails14"><span> 05 December 2021, 07:46 AM IST</span>Orange And Yellow Warning Issued For Several Odisha Districts</a></li>
         <li><a href="#livedetails15"><span> 05 December 2021, 07:26 AM IST</span>Orange Warning For 5 Odisha Districts</a></li>
         <li><a href="#livedetails16"><span> 05 December 2021, 07:25 AM IST</span>Deep Depression Remnant Of Cyclone Jawad To Weaken Into Depression</a></li>
         <li><a href="#livedetails17"><span> 04 December 2021, 09:56 PM IST</span>Cyclone Jawad To Grow More Weak, Heavy Rain Looms Large Over Odisha </a></li>
         <li><a href="#livedetails18"><span> 04 December 2021, 09:04 PM IST</span>Crop Damage Assessment Will Be Done Within One Week After Cyclone: SRC</a></li>
         <li><a href="#livedetails19"><span> 04 December 2021, 08:28 PM IST</span>Cyclone To Weaken Further Into Depression By Tomorrow: IMD</a></li>
         <li><a href="#livedetails20"><span> 04 December 2021, 07:08 PM IST</span>Cyclone Jawad Weakens Into Deep Depression</a></li>
         <li><a href="#livedetails21"><span> 04 December 2021, 06:46 PM IST</span>Cyclone Jawad: People Take Refuge In Shelter Home In Puri</a></li>
         <li><a href="#livedetails22"><span> 04 December 2021, 06:39 PM IST</span>Cyclone May Not Make Landfall In Odisha: SRC Pradeep Jena</a></li>
         <li><a href="#livedetails23"><span> 04 December 2021, 05:33 PM IST</span>NDRF Is Prepared For Cyclone Jawad: DG Atul Karwal</a></li>
         <li><a href="#livedetails24"><span> 04 December 2021, 03:30 PM IST</span>Cyclone Jawad Melting Out Fast, To Reach Odisha Coasts As 'Low Pressure'</a></li>
         <li><a href="#livedetails25"><span> 04 December 2021, 02:51 PM IST</span>Puri Admin Vacates Beach In View Of Cyclone Jawad </a></li>
         <li><a href="#livedetails26"><span> 04 December 2021, 02:48 PM IST</span>NDRF Carries Out Public Awareness Drive At Chandipur Sea Coast In Balasore</a></li>
         <li><a href="#livedetails27"><span> 04 December 2021, 02:38 PM IST</span>Cyclone Jawad: Dos And Don’ts To Stay Safe Before, During And After Landfall</a></li>
         <li><a href="#livedetails28"><span> 04 December 2021, 02:28 PM IST</span>Cyclone Jawad Weakens: Odisha Breaths Easy; 200 mm Rain Likely In Bhubaneswar, Cuttack Today</a></li>
         <li><a href="#livedetails29"><span> 04 December 2021, 02:25 PM IST</span>Cyclone Jawad: BeMC Commissioner Visits Different Areas</a></li>
         <li><a href="#livedetails30"><span> 04 December 2021, 02:04 PM IST</span>Cyclone Jawad: Harvested Paddy Stored Safely At Cyclone Center In Puri's Krushnaprasad Block</a></li>
         <li><a href="#livedetails31"><span> 04 December 2021, 02:00 PM IST</span>Cyclone Jawad: Ganjam Collector Visits Khalikote's Samal Village</a></li>
         <li><a href="#livedetails32"><span> 04 December 2021, 01:35 PM IST</span>Cyclone Jawad: Breather For Odisha? IMD Shares Latest Update, #WATCH</a></li>
         <li><a href="#livedetails33"><span> 04 December 2021, 01:23 PM IST</span>Impact Of Cyclone Jawad Likely To Be Over By Tomorrow Evening, Says Odisha SRC</a></li>
         <li><a href="#livedetails34"><span> 04 December 2021, 01:21 PM IST</span>Cyclone Jawad: Wind Speed To Remain Between 60-70 Kmph When Jawad Reaches Puri Coast</a></li>
         <li><a href="#livedetails35"><span> 04 December 2021, 12:59 PM IST</span>Cyclone Jawad: Ganjam Collector Visits Cyclone Shelter In Chatrpur Block</a></li>
         <li><a href="#livedetails36"><span> 04 December 2021, 12:52 PM IST</span>Cyclone Jawad: Vaccination Drive May Be Stopped For 1-2 Days, Says H&FW Director</a></li>
         <li><a href="#livedetails37"><span> 04 December 2021, 12:39 PM IST</span>Cyclone Jawad: People Vacating Their Make-shift Shops At Puri Beach Area, #WATCH</a></li>
         <li><a href="#livedetails38"><span> 04 December 2021, 12:32 PM IST</span>Cyclone Preparedness: Do's & Don'ts Before, During And After Cyclone</a></li>
         <li><a href="#livedetails39"><span> 04 December 2021, 12:26 PM IST</span>Cyclone Jawad Update In Kendrapara: 73 Pregnant Women Shifted To Various CHCs</a></li>
         <li><a href="#livedetails40"><span> 04 December 2021, 12:24 PM IST</span>Cyclone Jawad: All Candidates Of Class X CBSE Exam Appear For Exam In Ganjam, Informs Collector</a></li>
         <li><a href="#livedetails41"><span> 04 December 2021, 12:13 PM IST</span>Cyclone Jawad To Lose Steam, Turn Into Deep Depression Tonight: IMD DG </a></li>
         <li><a href="#livedetails42"><span> 04 December 2021, 11:42 AM IST</span>Cyclone Jawad: Farmers Resort To Early Harvest, Fear Distress Sale of Paddy</a></li>
         <li><a href="#livedetails43"><span> 04 December 2021, 11:33 AM IST</span>Cyclone Jawad Update From Puri, #WATCH</a></li>
         <li><a href="#livedetails44"><span> 04 December 2021, 10:20 AM IST</span>ECoR Cancels More Trains In View Of Cyclone Jawad, Check List </a></li>
         <li><a href="#livedetails45"><span> 04 December 2021, 09:40 AM IST</span>Cyclone Jawad Likely To Weaken By The Time It Reaches Puri Coast</a></li>
         <li><a href="#livedetails46"><span> 04 December 2021, 09:32 AM IST</span>Cyclone Jawad: 'Red Flag' Placed At Puri Sea Beach </a></li>
         <li><a href="#livedetails47"><span> 04 December 2021, 09:28 AM IST</span>Cyclone Jawad Now Lay 410 Km South-Southwest Of Puri: IMD</a></li>
         <li><a href="#livedetails48"><span> 04 December 2021, 09:28 AM IST</span>Vegetable Farmers In Distress Due To Cyclone Jawad In Pipili</a></li>
         <li><a href="#livedetails49"><span> 04 December 2021, 09:24 AM IST</span>Cyclone Jawad: Kutcha Houses, Roads To Bear Brunt, MeT Advises People To Move To Safer Places</a></li>
         <li><a href="#livedetails50"><span> 04 December 2021, 08:54 AM IST</span>Cyclone Jawad: Warning Issued For All Major Odisha Ports</a></li>
         <li><a href="#livedetails51"><span> 04 December 2021, 08:45 AM IST</span>Cyclone Jawad: 688 Persons Have Been Evacuated In Puri Dist Till Now, Informs SRC </a></li>
         <li><a href="#livedetails52"><span> 04 December 2021, 08:06 AM IST</span>Cyclone Jawad: Advisory Issued For Bhubaneswar, Cuttack</a></li>
         <li><a href="#livedetails53"><span> 04 December 2021, 07:48 AM IST</span>Cyclone Jawad: Advisory Issued For Bhubaneswar & Cuttack</a></li>
         <li><a href="#livedetails54"><span> 04 December 2021, 07:46 AM IST</span>Cyclone Jawad Lay 430 KM South-Southwest Of Puri: IMD</a></li>
         <li><a href="#livedetails55"><span> 03 December 2021, 10:00 PM IST</span>Cyclone Jawad To Miss Odisha Coast, Will Weaken Into Deep Depression Near Puri</a></li>
         <li><a href="#livedetails56"><span> 03 December 2021, 09:16 PM IST</span>Odisha Govt Orders Closure Of Schools In 19 Districts On Dec 4</a></li>
         <li><a href="#livedetails57"><span> 03 December 2021, 09:03 PM IST</span>Cyclonic Storm Jawad 300 Km S-SE Of Vizag, 480 Km S-SW Of Puri</a></li>
         <li><a href="#livedetails58"><span> 03 December 2021, 08:07 PM IST</span>Cyclone Jawad: Heavy Rain Alert For These Odisha Districts; Check IMD’s Latest Forecast</a></li>
         <li><a href="#livedetails59"><span> 03 December 2021, 08:03 PM IST</span>'Jawad' - Know Who Named The Cyclone And Why </a></li>
         <li><a href="#livedetails60"><span> 03 December 2021, 07:56 PM IST</span>BPUT PhD Entrance Exam Postponed Due To Cyclone Jawad</a></li>
         <li><a href="#livedetails61"><span> 03 December 2021, 07:08 PM IST</span>Cyclone Jawad Likely To Trigger Tidal Wave Surge Up To 5 Mts: IMD DG</a></li>
         <li><a href="#livedetails62"><span> 03 December 2021, 06:49 PM IST</span>Cyclone Jawad: BMC Readies To Ensure Zero Casualty In Bhubaneswar, Releases Helpline Numbers</a></li>
         <li><a href="#livedetails63"><span> 03 December 2021, 06:41 PM IST</span>Cyclone Jawad Lays Centred 470 KM Off Gopalpur </a></li>
         <li><a href="#livedetails64"><span> 03 December 2021, 06:14 PM IST</span>Cyclone Jawad: Holiday Declared For Schools In Ganjam On Dec 4</a></li>
         <li><a href="#livedetails65"><span> 03 December 2021, 05:52 PM IST</span>How Strong Is Cyclone Jawad? 'Gulaab Se Jyada, Titli Se Kam'</a></li>
         <li><a href="#livedetails66"><span> 03 December 2021, 05:27 PM IST</span>Cyclone Jawad Preparedness Update: Puri Admin Launches Helpline Number</a></li>
         <li><a href="#livedetails67"><span> 03 December 2021, 04:53 PM IST</span>Cyclone Jawad: Puri's Krushnaprasad Block Admin Begins Prep, 2 NDRF Teams In Khordha</a></li>
         <li><a href="#livedetails68"><span> 03 December 2021, 04:38 PM IST</span>Cyclone Jawad: South Eastern Railway Cancels Several Trains, Check Details</a></li>
         <li><a href="#livedetails69"><span> 03 December 2021, 03:51 PM IST</span>Cyclone Jawad: Odisha Prepares For Possible Landfall, Evacuation Of People Top Priority</a></li>
         <li><a href="#livedetails70"><span> 03 December 2021, 03:43 PM IST</span>Cyclone Jawad To Make Landfall At South Of Puri On Sunday</a></li>
         <li><a href="#livedetails71"><span> 03 December 2021, 03:13 PM IST</span>2021 Konark Festival, International Sand Art Festival Cancelled</a></li>
         <li><a href="#livedetails72"><span> 03 December 2021, 02:59 PM IST</span>Cyclone Jawad: All Ghats Across Chilika Closed</a></li>
         <li><a href="#livedetails73"><span> 03 December 2021, 02:09 PM IST</span>NDRF DG Says 64 Teams Earmarked; All Preparations Done</a></li>
         <li><a href="#livedetails74"><span> 03 December 2021, 02:05 PM IST</span>Sunday Week-Off Of All Govt Employees Cancelled</a></li>
         <li><a href="#livedetails75"><span> 03 December 2021, 01:59 PM IST</span>Cyclone Jawad Forms Over BoB; Likely To Move Close To Puri, Says IMD DG</a></li>
         <li><a href="#livedetails76"><span> 03 December 2021, 01:59 PM IST</span>Cyclone Jawad Likely To Brush Odisha Coast Near Puri: SRC</a></li>
         <li><a href="#livedetails77"><span> 03 December 2021, 01:12 PM IST</span>Deep Depression To Intensify Into Cyclonic Storm During Next 6 Hrs: IMD</a></li>
         <li><a href="#livedetails78"><span> 03 December 2021, 01:08 PM IST</span>All Boats Returned To Base, Tweets SRC</a></li>
         <li><a href="#livedetails79"><span> 03 December 2021, 12:25 PM IST</span>Cyclone Likely To Make Landfall In Puri Or May Change Path And Avert Hitting Odisha Coast</a></li>
         <li><a href="#livedetails80"><span> 03 December 2021, 10:18 AM IST</span>Similipal National Park To Remain Closed</a></li>
         <li><a href="#livedetails81"><span> 03 December 2021, 10:16 AM IST</span>Khordha, Koraput District Admins Cancel Leave Of Employees Till December 5</a></li>
         <li><a href="#livedetails82"><span> 03 December 2021, 08:20 AM IST</span>Cyclone Formation In 12 Hours!</a></li>
         <li><a href="#livedetails83"><span> 03 December 2021, 07:41 AM IST</span>Cyclone Jawad- Depression To Intensify Into Cyclonic Storm In Next 24 Hours</a></li>
         <li><a href="#livedetails84"><span> 02 December 2021, 09:58 PM IST</span>Cyclone Jawad To Recurve Before Reaching Odisha Coast, Predicts IMD</a></li>
         <li><a href="#livedetails85"><span> 02 December 2021, 08:18 PM IST</span>Depression Forms Over South East Bay Of Bengal, Says Met Centre</a></li>
         <li><a href="#livedetails86"><span> 02 December 2021, 07:43 PM IST</span>249 ODRAF, NDRF, Fire Teams To Be Deployed In Odisha, Says SRC</a></li>
         <li><a href="#livedetails87"><span> 02 December 2021, 06:43 PM IST</span>INCOIS and NCEP forecast Cyclone Jawad To Skirt Andhra - Odisha Coast</a></li>
         <li><a href="#livedetails88"><span> 02 December 2021, 06:21 PM IST</span>OSDMA Urges People To Prepare Emergency Kits</a></li>
         <li><a href="#livedetails89"><span> 02 December 2021, 05:30 PM IST</span>Check IMD’s Red Warning For Heavy Rainfall In Odisha</a></li>
         <li><a href="#livedetails90"><span> 02 December 2021, 05:30 PM IST</span>Cyclone May Change Path, Maximum Wind Speed To Be Around 100 Kmph: IMD DG</a></li>
         <li><a href="#livedetails91"><span> 02 December 2021, 05:30 PM IST</span>Cyclone Threat: PM Modi Reviews Cyclone Preparedness In Odisha, Andhra</a></li>
         <li><a href="#livedetails92"><span> 02 December 2021, 05:30 PM IST</span>Low Pressure Becomes Well Marked; IMD Predicts Cyclonic Storm In 24 Hours</a></li>
         <li><a href="#livedetails93"><span> 02 December 2021, 05:30 PM IST</span>Cabinet Secy Reviews Preparedness For Impending Cyclone In Bay Of Bengal</a></li>
         <li><a href="#livedetails94"><span> 02 December 2021, 04:52 PM IST</span>Is Cyclone Jawad Heading Towards Odisha's Gopalpur? Check Landfall Time</a></li>
      </ul>
      <div class="otv-300-50-ad">
         <div id="div-gpt-ad-22469968571-0" style="width: 300px; height: 50px;">
            <script>
               googletag.cmd.push(function() {
                 googletag.display("div-gpt-ad-22469968571-0");
               });
            </script>
         </div>
      </div>
      <div class="live-details-heading">
         <h1>Cyclone Jawad: Cyclone Jawad's Remnants Weaken To Depression</h1>
         <!--                <p>India - </p>
            -->
         <ul>
            <li><a href="https://odishatv.in/odisha/india">India</a></li>
            <li>
               <p>Deep Depression (remnant of Cyclonic Storm &lsquo;JAWAD&rsquo;) weakened into a Depression over northwest Bay of Bengal near Odisha coast The Deep Depression (remnant of Cyclonic Storm &lsquo;JAWAD&rsquo;) over northwest and adjoining westcentral Bay of Bengal moved north-northeastwards with a speed of 18 kmph during past 06 hours, weakened into a Depression and lay centered at 1430 hrs IST of today, the 05 th December 2021, over northwest Bay of Bengal close to Odisha coast near Lat. 19.5&deg;N and Long. 86.2&deg;E, about 50 km southeast of Puri (Odisha), 100 km south-southwest of Paradip (Odisha), 130 km east-northeast of Gopalpur (Odisha), and 370 km north-northeast of Vishakhapatnam (Andhra Pradesh). It is likely to continue to move north-northeastwards, along Odisha coast towards West Bengal coast and weaken into a well marked low pressure area during next 12 hours.
                  <br />
                  <iframe allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" height="232" src="https://open.spotify.com/embed/episode/5Up98C2Tte5y6ban4f8Kdx?utm_source=generator" width="100%"></iframe>
               </p>
            </li>
         </ul>
      </div>
      <div class="live-details-banner">
         <iframe width="100%" height="450" src="https://embed.windy.com/embed2.html?lat=15.941&lon=85.635&detailLat=15.941&detailLon=85.635&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=km%2Fh&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
      </div>
      <div class="otv-300-250-ad">
         <div id="div-gpt-ad-22469968904-0" style="width: 300px; height: 250px;">
            <script>
               googletag.cmd.push(function() {
                 googletag.display("div-gpt-ad-22469968904-0");
               });
            </script>
         </div>
      </div>
      <!--             <div class="live-details-start">
         <div class="live-details-one"> 
            <div class="live-details-time">
               <p>11.52 AM<span>(11 Minutes ago)</span></p>
             </div>
          
         
           <div class="live-details-content active" id="livedetails1">
             <div class=live-details-content-one>
             <h4>India vs Australia fall 6 wickets towards historic victory.</h4>
             <h5>Posted by:-<span>Tarun Verma</span></h5>
             <ul>
               <li><a href="">New Delhi</a></li>
               <li><a href="">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</a></li>
           </ul>
         </div>
           </div>
         </div>              
         </div>    -->
      <div class="live-details-start" data-id='165291' data-count='94'>
         <div class="live-details-one">
            <div class="live-details-content active" id="livedetails1">
               <div class="live-details-time">
                  <p>19:07 PM</p>
               </div>
               <h4>Cloudburst In Paradip: Port Town Sees Record Rainfall </h4>
               <h5>Posted by:-<span>Pradeep Singh</span></h5>
               <ul>
                  <li>
                     <p>Under the impact of Cyclone Jawad, Port town Paradip on Sunday witnessed a record rainfall of 103 mm between 2.30 pm and 3.30 pm today. Various other places in Odisha also record heavy rain. Balasore has so far recorded 270 mm of rain while Paradip 200 mm and Ersama 188 mm.</p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails2">
               <div class="live-details-time">
                  <p>19:01 PM</p>
               </div>
               <h4>Similipal National Park To Remain Shut On Dec 6</h4>
               <h5>Posted by:-<span>Pradeep Singh</span></h5>
               <ul>
                  <li>
                     <p>The Similipal National Park in Mayurbhanj district will remain closed for tourists on December 6. The concerned authorities have reportedly taken the decision in view of heavy rain in the region. Earlier, clousure was announced for two days (December 4-5) in view of Cyclone Jawad.</p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails3">
               <div class="live-details-time">
                  <p>17:45 PM</p>
               </div>
               <h4>Cyclone Jawad Impact- Odisha Farmers Stare At Uncertainty Over Massive Crop Loss</h4>
               <h5>Posted by:-<span>Nitesh Kumar Sahoo</span></h5>
               <ul>
                  <li>
                     <p>Though Cyclone Jawad is set to weaken into a Depression, incessant rainfall continues to lash several parts of the State disrupting normal lives. Above all, it is the farming community that is facing the brunt of the unseasonal rainfall.</p>
                     <p><a href="https://odishatv.in/news/weather/cyclone-jawad-impact-odisha-farmers-stare-at-uncertainty-over-massive-crop-loss-165532"><strong>Click Here To Read Full Story</strong></a></p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails4">
               <div class="live-details-time">
                  <p>14:03 PM</p>
               </div>
               <h4>Rain Lashes Paradip</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <p>Deep Depression remnants of cyclonic storm Jawad now lay centered about 70 km away from Puri. It is likely to weaken further into a Depression in the next 3 hrs and reach West Bengal as a low-mark low pressure. Paradip has recorded 56mm rainfall in three hours, said IMD DG.</p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails5">
               <div class="live-details-time">
                  <p>13:17 PM</p>
               </div>
               <h4>Weakened Cyclone Jawad Clouds Go Past Puri, Now Over Jagatsinghpur-Kendrapada</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <p>The weakened Cyclone Jawad&#39;s highly convective clouds have flown past the pilgrim town of Puri at around 11:00 hours on Sunday morning.</p>
                     <p><a href="https://odishatv.in/news/weather/weakened-cyclone-jawad-clouds-go-past-puri-now-overjagatsinghpur-kendrapada-165510">Read Full Story</a></p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails6">
               <div class="live-details-time">
                  <p>12:20 PM</p>
               </div>
               <h4>Rainfall Activity To Continue In Odisha, Says IMD DG</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <p>There will be a rise in the rainfall activity in several parts of Odisha as the remnant of cyclone Jawad, from deep depression to depression, approaches Puri, said India Meteorological Department (IMD) on Sunday.</p>
                     <p><a href="https://odishatv.in/news/weather/cyclone-jawad-rainfall-activity-to-continue-in-odisha-says-imd-dg-165503">Read Full Story</a></p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails7">
               <div class="live-details-time">
                  <p>11:26 AM</p>
               </div>
               <h4>Jawad Triggers Rain In Odisha</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <p>Odisha continues to experience rain under the influence of the cyclonic system. Khallikote in Ganjam records the highest 158 mm rainfall followed by Nayagarh (107.5 mm), Chatrapur (86.6 mm) and Bhubaneswar (42.3 mm), informs Regional MeT office.</p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails8">
               <div class="live-details-time">
                  <p>10:19 AM</p>
               </div>
               <h4>Check IMD’s Wind Speed Forecast For Odisha, Andhra, West Bengal</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <p>Odisha has been spared from the wrath of cyclone Jawad after it weakened into a deep depression on Saturday. The deep depression remnant of the cyclone will weaken further into depression and reach Odisha coast near Puri around noon today.</p>
                     <p><a href="https://odishatv.in/news/weather/cyclone-jawad-check-imd-s-wind-speed-forecast-for-odisha-andhra-west-bengal-165494">Read Full Story</a></p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails9">
               <div class="live-details-time">
                  <p>09:44 AM</p>
               </div>
               <h4>Rain Lashes Puri</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <p>Puri witnesses moderate rainfall as cyclonic storm Jawad is likely to reach around noon today.</p>
                     <p>&nbsp;</p>
                     <blockquote class="twitter-tweet">
                        <p dir="ltr" lang="en">Puri witnesses moderate rainfall as cyclonic storm <a href="https://twitter.com/hashtag/Jawad?src=hash&amp;ref_src=twsrc%5Etfw">#Jawad</a> is likely to reach around noon today; Jawad is likely to weaken further into a Depression, as per IMD <a href="https://twitter.com/hashtag/Odisha?src=hash&amp;ref_src=twsrc%5Etfw">#Odisha</a>
                           <br />
                           <br /> (Video Courtesy: ANI) <a href="https://t.co/QQ1WsKrIHR">pic.twitter.com/QQ1WsKrIHR</a>
                        </p>
                        &mdash; OTV (@otvnews) <a href="https://twitter.com/otvnews/status/1467346268946976768?ref_src=twsrc%5Etfw">December 5, 2021</a>
                     </blockquote>
                     <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                     <p>&nbsp;</p>
                  </li>
               </ul>
            </div>
            <div class="live-details-content " id="livedetails10">
               <div class="live-details-time">
                  <p>09:36 AM</p>
               </div>
               <h4>Fishermen Spend Sleepless Night</h4>
               <h5>Posted by:-<span>Rashmi Ranjan</span></h5>
               <ul>
                  <li>
                     <blockquote class="twitter-tweet">
                        <p dir="ltr" lang="en">Cyclone Jawad (Bar) Fishermen spend sleepless night guarding their boats as water level increases in Chilika <a href="https://twitter.com/hashtag/Odisha?src=hash&amp;ref_src=twsrc%5Etfw">#Odisha</a> <a href="https://t.co/6fIqKqvq15">pic.twitter.com/6fIqKqvq15</a></p>
                        &mdash; OTV (@otvnews) <a href="https://twitter.com/otvnews/status/1467340305208733701?ref_src=twsrc%5Etfw">December 5, 2021</a>
                     </blockquote>
                     <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </li>
               </ul>
            </div>
         </div>
         <a href="javascript:void(0);" class="btn btn-info" id="lodemore">Load more...</a>
         <!--       <div class="show-more load-post" title="More posts">
            <i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...
            </div>   -->
      </div>
      <div class="otv-300-250-ad">
         <div id="div-gpt-ad-22469805327-0" style="width: 300px; height: 250px;">
            <script>
               googletag.cmd.push(function() {
                 googletag.display("div-gpt-ad-22469805327-0");
               });
            </script>
         </div>
      </div>
   </div>
</section>
      <!--===================== //ARTICLE =======================-->
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js_mobile.php'; ?>
      </script>
   </body>
</html>