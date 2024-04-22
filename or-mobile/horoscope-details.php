<!DOCTYPE html>
<html>
   <head>
      <title>Mobile V2</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css_mobile.php'; ?>
         section.horoscope-section {
         float: left;
         width: 100%;
         margin: 10px 0px;
         }
         .horoscope-details-page h1 {
         margin: 0;
         padding: 0;
         font-size: 21px;
         font-weight: 500;
         line-height: 23px;
         text-transform: capitalize;
         margin-bottom: 8px;
         }
         .horoscope-details-page p {
         font-size: 14px;
         padding: 0;
         margin: 0;
         font-weight: 400;
         }
         .zodiac-details-header {
         float: left;
         margin-bottom: 20px;
         width: 100%;
         position: relative;
         padding-left: 82px;
         }
         .zodiac-details-header img {
         width: 78px;
         height: 78px;
         margin-bottom: 0;
         border-radius: 50%;
         padding: 8px;
         line-height: 12px;
         position: absolute;
         left: 0;
         top: 0;
         }
         .horoscope-content {
         float: left;
         width: 100%;
         }
         h3.horoscope-name {
         margin: 16px 0px 0px 0px;
         padding: 0;
         font-size: 18px;
         margin-bottom: 0px;
         line-height: 24px;
         font-weight: 600;
         }
         h6.name-start {
         margin: 2px 0px;
         padding: 0;
         font-size: 13px;
         color: #918f8f;
         }
         .horoscope-writer h5 {
         display: -webkit-inline-box;
         font-size: 19px;
         margin: 0;
         padding: 0;
         margin-left: 10px;
         }
         .horoscope-writer:after {
         position: absolute;
         left: 0;
         bottom: 0px;
         content: "";
         display: block;
         background-color: #bbbbbb24;
         width: 40%;
         height: 2px;
         margin: 0 auto;
         text-align: center;
         right: 0;
         }
         .horoscope-writer {
         text-align: center;
         /* display: -webkit-inline-box; */
         margin: 0 auto;
         position: relative;
         }
         h2.horoscope-content-head {
         margin: 6px 0px;
         padding: 0;
         font-size: 22px;
         font-weight: 500;
         line-height: 21px;
         }
         .horoscope-content p span {
         font-weight: 600;
         font-size: 16px;
         padding-right: 5px;
         }
         .horoscope-content p {
         font-size: 15px;
         padding: 0;
         margin: 0;
         line-height: 22px;
         font-weight: 500;
         margin-bottom: 7px;
         }
         .horoscope-header {
         float: left;
         width: 100%;
         }
         ul.horoscope-bar {
         margin: 0;
         padding: 5px;
         border-bottom: 1px solid #efefef;
         margin-bottom: 20px;
         display: block;
         background: #F8B4171F 0% 0% no-repeat padding-box;
         border: 1px solid #E5E5E5;
         border-radius: 6px;
         }
         ul.horoscope-bar li {
         list-style-type: none;
         display: inline;
         margin-right: 7px;
         border-bottom: none;
         }
         ul.horoscope-bar li a {
         text-decoration: none;
         color: #000;
         font-size: 13px;
         font-weight: 600;
         }
         ul.horoscope-bar li a.active {
         border-bottom: 3px solid #ff3203;
         color: #ff3203;
         }
         ul.horoscope-bar li:last-child {
         float: right;
         }
         ul.horoscope-bar li:last-child a img {
         width: 14px;
         height: 14px;
         margin-left: 7px;
         }
         .horoscope-details-page {
         margin-bottom: 10px;
         width: 100%;
         display: inline-block;
         }
         .horoscope-details-page button,.horoscope-details-page button:focus,.horoscope-details-page button:hover {
         float: right;
         border: none;
         padding: 6px 15px;
         font-size: 13px;
         border-radius: 29px;
         line-height: 22px;
         color: #fff;
         background-color: #f65028;
         font-weight: 600;
         box-shadow: 0 0 0 0.2rem rgb(253 0 0 / 59%);
         }
         .zodiac-details {
         background: #FFFFFF 0% 0% no-repeat padding-box;
         box-shadow: 0px 0px 9px #00000026;
         border-radius: 12px;
         padding: 10px;
         float: left;
         width: 100%;
         }   
         .horoscope-content h5 {
         margin: 0;
         padding: 0;
         font-size: 13px;
         color: #ff4f4f;
         font-weight: 600;
         }
         .horoscope-content h6 {
         margin: 0;
         padding: 0;
         margin-bottom: 4px;
         font-size: 13px;
         color: #7B0505;
         font-weight: 600;
         }
         .by-areas h2 {
         font-size: 20px;
         margin: 10px 0px;
         font-weight: 500;
         }
         ul.by-areas-opt {
         margin: 0;
         padding: 0;
         }
         ul.by-areas-opt li {
         list-style-type: none;
         display: inline-block;
         margin-right: 14px;
         width: 33%;
         border: 1px solid #d6d6d6;
         border-radius: 16px;
         margin-bottom: 7px;
         padding: 3px 12px;
         width: fit-content;
         }
         ul.by-areas-opt li a {
         color: #000;
         font-size: 13px;
         line-height: 26px;
         }
         ul.by-areas-opt li a img {
         width: 20px;
         height: 18px;
         margin-right: 5px;
         }
         .by-areas {
         float: left;
         width: 100%;
         }
         /*------------ all sign---------------- */
         .zodiac-list {
         padding: 0px;
         }
         ul.otv-horoscope-item {
         margin: 0;
         padding: 0;
         }
         ul.otv-horoscope-item li {
         width: 27%;
         list-style-type: none;
         display: inline-block;
         margin: 5px 5px;
         margin-bottom: 9px;
         background: #FFFFFF 0% 0% no-repeat padding-box;
         box-shadow: 0px 3px 6px #00000029;
         border: 1px solid #EBEBEB;
         border-radius: 6px;
         padding: 7px;
         }
         ul.otv-horoscope-item li a img {
         width: 45px;
         height: 45px;
         margin-bottom: 3px;
         display: block;
         margin: 0 auto;
         }
         ul.otv-horoscope-item li a {
         display: block;
         color: #000;
         font-size: 13px;
         margin: 0;
         padding: 0;
         text-align: center;
         }
         h4.otv-horo-today {
         margin: 0;
         padding: 0;
         font-size: 18px;
         margin-bottom: 10px;
         }
         ul.otv-horoscope-item li a span {
         display: block;
         color: #7a7777;
         font-size: 13px;
         margin-top: 4px;
         }
         /*------------ all sign---------------- */
         .mainnav-menu-horo {
         width: 359px;
         overflow-y: scroll;
         margin: 0;
         padding: 0px;
         border-bottom: 1px solid #efefef;
         margin-bottom: 6px;
         display: block;
         background: #F8B4171F 0% 0% no-repeat padding-box;
         border: 1px solid #E5E5E5;
         border-radius: 6px;
         }
         .mainnav-menu-horo-elements {
         display: table-cell;
         }
         .mainnav-menu-horo-elements a {
         text-decoration: none;
         display: block;
         text-transform: uppercase;
         font-weight: 600;
         color: #333;
         line-height: 36px;
         padding: 0 10px;
         font-size: 14px;
         position: relative;
         }
         .mainnav-menu-horo-elements a:before {
         content: "";
         display: block;
         width: 2px;
         height: 10px;
         background-color: #cac1c1;
         position: absolute;
         right: -3px;
         top: 16px;
         }
         .mainnav-menu-horo-elements a.active {
         color: #ff3203;
         }
         .mainnav-menu-horo-list {
    width: 359px;
    overflow-y: scroll;
    margin-bottom: 8px;
}
      .mainnav-menu-horo-elements-list {
         display: table-cell;
         }
         .mainnav-menu-horo-elements-list a img {
    width: 45px;
    height: 45px;
    margin-bottom: 3px;
    display: block;
    margin: 0 auto;
}
         .mainnav-menu-horo-elements-list a {
    display: block;
    color: #000;
    font-size: 15px;
    margin: 0;
    padding: 0;
    text-align: center;
    margin-right: 15px;
    margin-bottom: 10px;
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
      <section class="horoscope-section">
         <div class="container">
           <div class="horoscope-details-page">
                     <h1>Horoscope - Know Astrological prediction for your zodiac signs</h1>
                     <p>Check astro predictions for your Zodiac signs </p>
                  </div>
                  <div class="horoscope-list-header">
                     <div class="mainnav-menu">
                        <div class="mainnav-menu-horo-list">
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/acquarius-hr.svg" alt="" title="">Aquarius</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/aries-hr.svg" alt="" title="">Aries</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/cancer-hr.svg" alt="" title="">Cancer</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/capricorn-hr.svg" alt="" title="">Capricon</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/gemini-hr.svg" alt="" title="">Gemeni</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/libra-hr.svg" alt="" title="">Libra</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/leo-hr.svg" alt="" title="">Lion</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/pisces-hr.svg" alt="" title="">Pisces</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/sagittarius-hr.svg" alt="" title="">Sagittarious</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/scorpio-hr.svg" alt="" title="">Scorpio</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/taurus-hr.svg" alt="" title="">Taurus</a></div>
                              <div class="mainnav-menu-horo-elements-list"><a href=""><img src="images/svg/virgo-hr.svg" alt="" title="">Virgo</a></div>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="horoscope-header">
                     <div class="mainnav-menu">
                        <div class="mainnav-menu-horo">
                           <div class="mainnav-menu-horo-elements"><a class="active" href="https://odishatv.in/odisha">DailyHoroscope</a></div>
                           <div class="mainnav-menu-horo-elements"><a href="https://odishatv.in/jobs">WeeklyHoroscope</a></div>
                           <div class="mainnav-menu-horo-elements"><a href="https://odishatv.in/education">AnnualHoroscope2022</a></div>
                           <div class="mainnav-menu-horo-elements"><a href="https://odishatv.in/national">MonthlyHoroscope</a></div>
                           <div class="mainnav-menu-horo-elements"><a href="https://odishatv.in/entertainment">YearlyHoroscope</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="zodiac-details">
                           <div>
                              <div class="zodiac-details-header">
                                 <img src="images/svg/aries-hr.svg" class="zodiac-img" title="" alt="">
                                 <h3 class="horoscope-name">Aries</h3>
                                 <h6 class="name-start">Monday 30 May 2022</h6>
                              </div>
                              <!-- <div class="horoscope-writer">
                                 <img src="images/svg/male.svg">
                                 <h5>Dr. Ajay Bhambi</h5>
                                 </div> -->
                              <div class="horoscope-content">
                                 <h2 class="horoscope-content-head">According to moon sign</h2>
                                 <p><span>Positive There :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                                 <p><span>Negetive- Do not</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                                 <p><span>Business :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                                 <p><span>Love :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                                 <p><span>Health :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                                 <p><span>Lucky color :</span>Black</p>
                                 <p><span>Lucky number :</span>5</p>
                                 <h6>5th June, Saturn gets retrograde. Will it bring happiness or struggles?</h6>
                                 <h5>Get Handwritten Answer From Expert Astrologers @ Just ₹99</h5>
                              </div>
                              <div class="by-areas">
                                 <h2>Daily Horoscopes By Areas of Life</h2>
                                 <ul class="by-areas-opt">
                                    <li><a href=""><img src="images/svg/love.svg">Love and Relationship</a></li>
                                    <li><a href=""><img src="images/svg/health.svg">Health and well-being</a></li>
                                    <li><a href=""><img src="images/svg/money.svg">Money and Finances</a></li>
                                    <li><a href=""><img src="images/svg/career.svg">Career and Business</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="zodiac-list">
                           <ul class="otv-horoscope-item">
                              <li><a href=""><img src="images/svg/acquarius-hr.svg" alt="" title="">Aquarius</a></li>
                              <li><a href=""><img src="images/svg/aries-hr.svg" alt="" title="">Aries</a></li>
                              <li><a href=""><img src="images/svg/cancer-hr.svg" alt="" title="">Cancer</a></li>
                              <li><a href=""><img src="images/svg/capricorn-hr.svg" alt="" title="">Capricon</a></li>
                              <li><a href=""><img src="images/svg/gemini-hr.svg" alt="" title="">Gemeni</a></li>
                              <li><a href=""><img src="images/svg/libra-hr.svg" alt="" title="">Libra</a></li>
                              <li><a href=""><img src="images/svg/leo-hr.svg" alt="" title="">Lion</a></li>
                              <li><a href=""><img src="images/svg/pisces-hr.svg" alt="" title="">Pisces</a></li>
                              <li><a href=""><img src="images/svg/sagittarius-hr.svg" alt="" title="">Sagittarious</a></li>
                              <li><a href=""><img src="images/svg/scorpio-hr.svg" alt="" title="">Scorpio</a></li>
                              <li><a href=""><img src="images/svg/taurus-hr.svg" alt="" title="">Taurus</a></li>
                              <li><a href=""><img src="images/svg/virgo-hr.svg" alt="" title="">Virgo</a></li>
                           </ul>
                        </div>
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