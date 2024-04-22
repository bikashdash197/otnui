<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "includes/common_css.php"; ?>
   /*----Live Details---*/
   section.live-details{
   float: left;
   width: 100%;
   margin: 0px 0px 30px 0px;
   }
   .live-details-image {
   margin-bottom: 25px;
   }
   .live-details-image img {
   width: 100%;
   height: auto;
   }
   h2.live-details-box-heading {
   margin: 10px 0px;
   font-size: 17px;
   background-color: #7b0505;
   color: white;
   padding: 4px 10px;
   font-weight: bold;
   text-transform: uppercase;
   width: 100%;
   }
   h2.live-details-box-heading span {
   color: #ffffff;
   font-size: 17px;
   text-transform: uppercase;
   font-weight: 500;
   }
   ul.live-details-bredcum {
   margin: -13px 0px 9px 0px;
   padding: 0px;
   position: relative;
   display: block;
   float: left;
   width: 100%;
   }
   ul.live-details-bredcum li {
   list-style-type: none;
   display: inline-block;
   color: #7b0505;
   font-size: 10px;
   position: relative;
   margin-right: 20px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: normal;
   text-transform: uppercase;
   }
   ul.live-details-bredcum li a {
   color: #7b0505;
   }
   ul.live-details-bredcum li:before {
   font-family: "Font Awesome 5 Free";
   content: "\f101";
   font-weight: 900;
   top: 0px;
   right: -15px;
   color: #7b0505;
   font-size: 10px;
   position: absolute;
   }
   ul.live-details-bredcum li:last-child:before{
   content: none;
   }
   ul.live-details-bredcum li:last-child{
   color: #736f6f;
   }   
   .live-details-heading {
   border: 1px solid #e8e2e2;
   margin-bottom: 25px;
   padding: 10px 10px 5px 10px;
   }
   .live-details-heading h1 {
   padding: 0px;
   font-size: 28px;
   margin: 0px;
   font-weight: 600;
   color: #656565;
   line-height: 32px;
   }
   .live-details-heading h5 {
   margin: 10px 0px;
   padding: 5px;
   background-color: #dadad3;
   font-size: 15px;
   font-weight: 600;
   width: fit-content;
   }
   .live-details-heading p {
   color: #222;
   font-weight: 400;
   font-size: 20px;
   line-height: 26px;
   font-family: 'Faustina', serif;
   margin-bottom: 20px;
   margin: 0px;
   display: inline;
   }
   ul.live-details-sidebar {
   margin: 0px;
   padding: 7px;
   background-color: whitesmoke;
   border-radius: 8px;
   border: 1px solid #cecece;
   max-height: 319px;
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
   background-color: #7b0505;
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
   .live-details-banner {
   margin-bottom: 40px;
   }
   .live-details-banner img {
   width: 100%;
   height: auto;
   }
   .live-details-start {
   position: relative;
   padding-left: 109px;
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
   left: 0px;
   top: 0px;
   }
   .live-details-time {
   position: absolute;
   left: -134px;
   top: 0px;
   width: 116px;
   }
   .live-details-content {
   background-color: #ebebeb;
   padding: 10px;
   -webkit-box-shadow: 1px 6px 8px 0px rgba(0,0,0,0.47);
   -moz-box-shadow: 1px 6px 8px 0px rgba(0,0,0,0.47);
   box-shadow: 1px 6px 8px 0px rgba(0,0,0,0.47);
   border-radius: 5px;
   margin: 23px 15px 13px 25px;
   position: relative;
   }
   .live-details-content p {
   color: #222;
   font-weight: 400;
   font-size: 20px;
   line-height: 26px;
   font-family: 'Faustina', serif;
   margin-bottom: 20px;
   margin: 0px;
   }
   .live-details-content:before {
   content: "";
   display: block;
   position: absolute;
   left: -30px;
   top: -3px;
   width: 14px;
   height: 14px;
   background-color: #7b0505;
   border-radius: 50%; 
   }
   .live-details-content.active:before {
   box-shadow: 0 0 0 rgb(244 176 27);
   animation: pulse 2s infinite;
   }
   .live-details-content ul {
   margin: 0px 17px;
   padding: 0px;
   }
   .live-details-content ul li{
   list-style-type: none;
   display: inline;
   } 
   .live-details-content ul li:first-child{
   position: relative;
   margin-right: 15px;
   }  
   .live-details-content ul li:first-child a{
   color: #7b0505;
   font-weight: 700;
   transition-duration: .5s;
   }
   .live-details-content ul li:first-child:before{
   content: "";
   display: block;
   background-color: #c10707;
   width: 1px;
   height: 18px;
   position: absolute;
   top: -1px;
   right: -10px;
   transform: rotate(10deg);
   }  
   .live-details-content ul li a {
   font-size: 19px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 24px;
   transition-duration: .5s;
   }
   .live-details-content ul li a:hover {
   color: #7b0505;
   transition-duration: .5s;
   }
   .live-details-content h4 {
   margin: 0px;
   padding: 0px;
   font-size: 23px;
   }
   .live-details-content h5 {
   margin: 10px 0px;
   font-size: 14px;
   }
   .live-details-time p {
   font-size: 18px;
   color: #7b0505;
   }
   .live-details-time p span {
   display: block;
   color: #5f5f5e;
   font-size: 11px;
   line-height: 20px;
   }
   .live-details-banner-video {
   position: relative;
   margin: 15px 0px 5px 0px;
   background-color: #f1f1f6;
   padding: 5px;
   }
   h4.live-details-banner-video-details {
   color: #474747;
   font-size: 23px;
   line-height: 26px;
   font-family: 'Faustina', serif;
   margin: 5px 0px 10px 0px;
   padding: 0px;
   font-weight: 600;
   }
   p.live-details-banner-video-disclaimer {
   background-color: #f1f1f6;
   color: #666;
   font-size: 15px;
   line-height: 18px;
   margin: 0px;
   padding: 5px;
   font-family: 'Libre Franklin', sans-serif;
   font-style: italic;
   }
   p.live-details-banner-video-disclaimer span {
   color: #ec5836;
   margin-right: 10px;
   font-weight: bold;
   }
   .custom-story-img-block {
   position: relative;
   background-color: #f9faff;
   }
   .custom-story-img-block img {
   max-width: 100%;
   height: auto;
   }
   .custom-story-img-block span {
   text-align: center;
   display: block;
   font-family: 'Libre Franklin',sans-serif;
   font-size: 15px;
   padding: 6px;
   }
   a#lodemore {
   background-color: #7b1c18;
   border: none;
   border-radius: 0;
   display: block;
   width: fit-content;
   margin: 15px auto;
   }
   /*----//Live Details---*/
</style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <?php include 'includes/breadcrumbs.php'; ?>
      <div class="container">
   <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         <div class="sticky">
            <div class="otv-300-250-ad"> </div>
            <h2 class="live-details-box-heading">Live Updates :<span> From The News Room</span></h2>
            <ul class="live-details-sidebar">
               <li><a href="#livedetails1"><span> 20 July 2021, 07:10 PM IST</span>Odisha DGP Thanks All For Smooth Completion Of Bahuda Jatra</a></li>
               <li><a href="#livedetails2"><span> 20 July 2021, 07:03 PM IST</span>Bahuda Jatra Concludes On Emphatic Note As Lords Reach Srimandir</a></li>
               <li><a href="#livedetails3"><span> 20 July 2021, 05:26 PM IST</span>Divine Laxmi Narayan Bheta Unfolds Before Srimandir</a></li>
               <li><a href="#livedetails4"><span> 20 July 2021, 04:28 PM IST</span>Lord Balabhadra Arrives At Srimandir On Gigantic Taladhwaja</a></li>
               <li><a href="#livedetails5"><span> 20 July 2021, 03:55 PM IST</span>Bahuda Jatra: Servitors Pull Chariots Amid Heavy Rain In Puri</a></li>
               <li><a href="#livedetails6"><span> 20 July 2021, 03:35 PM IST</span>Lord Jagannath Gets Poda Pitha Treat Near Mausi Maa Temple</a></li>
               <li><a href="#livedetails7"><span> 20 July 2021, 01:45 PM IST</span>Juggernaut Rolls On! Lord Jagannath Rides Back To Srimandir</a></li>
               <li><a href="#livedetails8"><span> 20 July 2021, 01:24 PM IST</span>Goddess Subhadra Follows Bada Thakura, Darpadalana Proceeds Towards Srimandir</a></li>
               <li><a href="#livedetails9"><span> 20 July 2021, 12:53 PM IST</span>Puri King Marks 50 Years In Chhera Panhara Service Of The Lord</a></li>
               <li><a href="#livedetails10"><span> 20 July 2021, 12:36 PM IST</span>Saints’ Tryst With Lord Jagannath</a></li>
               <li><a href="#livedetails11"><span> 20 July 2021, 12:33 PM IST</span>Homecoming Of Lords: Bada Thakura Balabhadra Leads The Way</a></li>
               <li><a href="#livedetails12"><span> 20 July 2021, 12:24 PM IST</span>Chhera Panhara Concludes, Ghoda Lagi And Charamala Phita Niti </a></li>
               <li><a href="#livedetails13"><span> 20 July 2021, 12:15 PM IST</span>Gajapati Pays Obeisance To Lords, Cleans Chariots With Golden Broom</a></li>
               <li><a href="#livedetails14"><span> 20 July 2021, 11:32 AM IST</span>Chhera Panhara: No Distinction Between King And Sweeper</a></li>
               <li><a href="#livedetails15"><span> 20 July 2021, 11:10 AM IST</span>Gajapati Arrives To Conduct Divine Chhera Panhara Niti</a></li>
               <li><a href="#livedetails16"><span> 20 July 2021, 10:52 AM IST</span>Lord Madan, Mohan &amp; Ramakrushna Ascend The Chariot</a></li>
               <li><a href="#livedetails17"><span> 20 July 2021, 10:28 AM IST</span>Tahia: The Magnanimous Crown Of Holy Trinity</a></li>
               <li><a href="#livedetails18"><span> 20 July 2021, 09:11 AM IST</span>Royal Divine Procession Of Lord Jagannath Begins</a></li>
               <li><a href="#livedetails19"><span> 20 July 2021, 09:00 AM IST</span>Pahandi Bije Of Devi Subhadra</a></li>
               <li><a href="#livedetails20"><span> 20 July 2021, 08:18 AM IST</span>Pahandi Of Lord Balabhadra Begins</a></li>
               <li><a href="#livedetails21"><span> 20 July 2021, 08:07 AM IST</span>Pahandi Of Sri Sudarshan Begins In Puri</a></li>
               <li><a href="#livedetails22"><span> 20 July 2021, 07:32 AM IST</span>Bahuda Jatra: The Return Sojourn Of Holy Trinity To Srimandir</a></li>
               <li><a href="#livedetails23"><span> 19 July 2021, 08:29 PM IST</span>Stage Set For Bahuda Jatra, Srimandir Admin Announces Ritual Timings</a></li>
               <li><a href="#livedetails24"><span> 19 July 2021, 08:24 PM IST</span>Bahuda Jatra Ritual Timings</a></li>
               <li><a href="#livedetails25"><span> 19 July 2021, 08:24 PM IST</span>SJTA Chief to discuss preparations for Bahuda Jatra tomorrow</a></li>
               <li><a href="#livedetails26"><span> 18 July 2021, 07:22 PM IST</span>Preparations For Bahuda Jatra Of Holy Trinity Begins in Puri</a></li>
               <li><a href="#livedetails27"><span> 17 July 2021, 02:05 PM IST</span>Preparation For Bahuda Jatra Begins, Curfew To Be Clamped In Puri</a></li>
               <li><a href="#livedetails28"><span> 17 July 2021, 01:11 PM IST</span>Dakhina Moda Ritual Started Ahead of Bahuda Yatra</a></li>
               <li><a href="#livedetails29"><span> 17 July 2021, 12:46 PM IST</span>Sec 144 will be Clamped in Puri from 8 pm on Monday in View of Bahuda Jatra</a></li>
               <li><a href="#livedetails30"><span> 16 July 2021, 05:53 PM IST</span>Hera Panchami: Angry Goddess Laxmi Break Nandighosha Ratha</a></li>
            </ul>
         </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <div class="live-details-heading">
            <h1>LIVE Updates: Lords Arrive At Ratna Bedi After Week-Long Sojourn At Janma Bedi</h1>
            <!-- <h5>India - </h5>--><a href="https://odishatv.in/city/odisha"><span class="article-content-parent">Odisha</span></a>
            <p>The annual sojourn of Lord Jagannath and his siblings Goddess Shubhadra and Lord Balabhadra, famously known as- Ratha Jatra culminates with the return of the Holy Trinity from their aunt's place at Gundicha Temple to Srimandir. This return journey is known as <strong>Bahuda Jatra</strong>. Nine days after the Rath Jatra, the Bahuda Jatra, or the return journey, takes place. The holy festival is missing the usual pomp and grandeur and participation of lakhs of devotees due to the Covid-19 pandemic situation for the second year in a row. Elaborate preparations with water-tight security cover have been put in place for the smooth conduct of the festival. The district administration has imposed curfew in Puri town for the festival, prohibiting congregations even on rooftops. OTV brings you the happenings on the Bada Danda (Grand Road) live during the return sojourn of the Holy Trinity on their gigantic chariots. Check out all the latest updates here.</p>
         </div>
         <div class="live-details-banner"> <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626438122.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626438122.jpg" alt="Puri Jagannath Bahuda Yatra 2021" title="Puri Jagannath Bahuda Yatra 2021"> </div>
         <div class="live-details-start" data-id="129408" data-count="30">
            <div class="live-details-one">
               <div class="live-details-content active" id="livedetails1">
                  <div class="live-details-time">
                     <p>19:10 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Odisha DGP Thanks All For Smooth Completion Of Bahuda Jatra</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Odisha Police DG Abhay expressed gratitude to police personnel, administrative officials and mostly the people of Puri and outside in cooperating well with the organisers for hassle-free conduct of the Bahuda Jatra of the Holy Trinity.</p>
               </div>
               <div class="live-details-content " id="livedetails2">
                  <div class="live-details-time">
                     <p>19:03 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Bahuda Jatra Concludes On Emphatic Note As Lords Reach Srimandir</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Curtains came down on the return Car Festival of the Puri Holy Trinity after the arrival of the three chariots of the deities at Srimandir following a week-long stay at Gundicha Temple.</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626787964.jpg"><span>Bahuda Jatra Concludes</span></div>
               </div>
               <div class="live-details-content " id="livedetails3">
                  <div class="live-details-time">
                     <p>17:26 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Divine Laxmi Narayan Bheta Unfolds Before Srimandir</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Laxmi Narayan Bheta is the most entertaining spectacle of meeting between Lord Jagannath &amp; Goddess Laxmi soon after the Mahaprabhu arrives at Srimandir. The get-together, which symbolizes how love builds on discord and both are inseparable, has a special significance in the life of humans.</p>
                  <p>As per tradition, Lord Jagannath is forced to wait due to an angry Goddess Laxmi who refuses to allow the Mahaprabhu's chariot to join His elder brother Bada Thakura Balabhadra and Devi Subhadra in front of Srimandir. To diffuse the tensions, Gajapati intervenes and escorts Goddess Laxmi to the Nandighosha chariot where the divine meeting takes place with Lord Jagannath.&nbsp;</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626782173.jpg"><span>Bahuda Jatra: Laxmi Narayan Bheta</span></div>
                  <p>It is believed that Goddess Laxmi remains angry with Lord Jagannath for not taking Her on their annual sojourn to Gundicha Temple even though the occasion of Rath Yatra commenced just a few days following the completion of their divine wedding ceremony.</p>
               </div>
               <div class="live-details-content " id="livedetails4">
                  <div class="live-details-time">
                     <p>16:28 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Lord Balabhadra Arrives At Srimandir On Gigantic Taladhwaja</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Bada Thakura Balabhadra arrived at Srimandir on his Taladhwaja chariot while followed by His dear sister Subhadra and lastly Mahaprabhu Jagannath accompanying him on His Nandighosha.&nbsp;</p>
               </div>
               <div class="live-details-content " id="livedetails5">
                  <div class="live-details-time">
                     <p>15:55 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Bahuda Jatra: Servitors Pull Chariots Amid Heavy Rain In Puri</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Pulling of chariots of the Holy Trinity witnessed euphoric scenes as heavy rainfall lashed Bada Danda. Servitors pulling the Raths were elated after the rain relief.</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626776664.JPG"><span>Rain Puri During Bahuda Jatra</span></div>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626776701.JPG"><span>Rain During Bahuda Jatra</span></div>
                  <p>&nbsp;&nbsp;</p>
               </div>
               <div class="live-details-content " id="livedetails6">
                  <div class="live-details-time">
                     <p>15:35 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Lord Jagannath Gets Poda Pitha Treat Near Mausi Maa Temple</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Making his homeward journey to the Srimandir on His splendid Nandighosha, Mahaprabhu Jagannath made a brief halt near Mausi Maa Temple where he was offered the exquisite and His most loving Poda Pitha.</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626775499.JPG"><span>Bahuda Jatra: Poda Pitha Treat To Lord Jagannath</span></div>
                  <div class="custom-story-img-block">
                     <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626775989.jpg"><span>Bahuda Jatra: Devi Subhadra Gets Poda Pitha Treat</span></div>
                  </div>
               </div>
               <div class="live-details-content " id="livedetails7">
                  <div class="live-details-time">
                     <p>13:45 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Juggernaut Rolls On! Lord Jagannath Rides Back To Srimandir</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Finally, the moment everyone has been waiting for arrived as Lord Jagannath commenced his journey back to the Ratna Singhasana. The Lords' annual sojourn to Gundicha Temple ends on an emphatic note as Nandighosha chariot rolls on the Bada Danda towards the Srimandir.</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626768741.JPG"><span>Bahuda Jatra: Lord Jagannath's Homecoming</span></div>
               </div>
               <div class="live-details-content " id="livedetails8">
                  <div class="live-details-time">
                     <p>13:24 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Goddess Subhadra Follows Bada Thakura, Darpadalana Proceeds Towards Srimandir</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Following in the footsteps of her eldest brother Bada Thakura Balabhadra&nbsp;Devi Subhadra has commenced her return journey to Srimandir amid a mark of religious pomp and fervour.&nbsp;</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626767625.JPG"><span>Bahuda Jatra: Darpadalana Chariot On Way To Srimandir</span></div>
                  <p>&nbsp;</p>
               </div>
               <div class="live-details-content " id="livedetails9">
                  <div class="live-details-time">
                     <p>12:53 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Puri King Marks 50 Years In Chhera Panhara Service Of The Lord</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Puri Gajapati Dibyasingha Deb completed a rare milestone in the centuries-long association of the erstwhile Kingdom family of Puri and the world-famous Lord Jagannath Temple as he marked 50 years in conducting the Chhera Panhara rituals of the Holy Trinity.</p>
                  <div class="custom-story-img-block"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1626765767.JPG"><span>Puri Gajapati Marks 50 Years In Chhera Panhara</span></div>
                  <p>Known as the foremost servitor of the Lords, he performed first Chhera Panhara in 1971 after ascending the throne in 1970 at the age of 17 following the death of his father, the then Maharaja of Puri, Gajapati Birakishore Deb.&nbsp;Dibyasingha Could not attend the special niti in 1976 as he was pursuing higher education in the United States.</p>
               </div>
               <div class="live-details-content " id="livedetails10">
                  <div class="live-details-time">
                     <p>12:36 PM<span>(3 months ago )</span></p>
                  </div>
                  <h4>Saints’ Tryst With Lord Jagannath</h4>
                  <h5>Posted by: Rajendra Prasad Mohapatra</h5>
                  <p>Puri was a big draw for medieval saints from across the country. The most notable among them were Shankaracharya, Shri Chaitanya, Ramanujacharya, Ballabhacharya, Guru Nanak, Kabir, Tulsi Das and Swami Ramdas. These saints not only visited Srikhetra to get a glimpse of the Lord, they left their footmarks here by establishing famous mathas.</p>
                  <p><a href="https://odishatv.in/news/miscellaneous/saints-tryst-with-lord-jagannath-135750" target="_blank"><strong>Read More..</strong></a></p>
               </div>
            </div>
            <a href="javascript:void(0);" class="btn btn-info" id="lodemore">Load more...</a> 
         </div>
      </div>
   </div>
</div>
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js.php'; ?>
         
      </script>
   </body>
</html>
