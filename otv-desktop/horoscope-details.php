<?php include 'includes/header.php';?>
<style type="text/css">
    .zodiac-details-header {
         text-align: center;
         margin-bottom: 30px;
         }
         .zodiac-details-header img {
         width: 60px;
         height: 60px;
         margin-bottom: 20px;
         border: 1px solid #fe3f00;
         border-radius: 50%;
         padding: 8px;
         text-align: center;
         line-height: 12px;
         display: block;
         margin: 0 auto 5px auto;
         }
         h3.horoscope-name {
         margin: 8px 0px;
         padding: 0;
         font-size: 22px;
         margin-bottom: 10px;
         line-height: 24px;
         }
         h6.name-start {
         margin: 8px 0px;
         padding: 0;
         font-size: 15px;
         color: #918f8f;
         }
         p.horoscope-date {
         padding: 0;
         margin: 0;
         font-weight: 600;
         font-size: 13px;
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
         margin: 20px 0px;
         padding: 0;
         text-align: center;
         font-size: 27px;
         font-weight: 500;
         line-height: 30px;
         }
         .horoscope-content p span {
         font-weight: 600;
         font-size: 18px;
         padding-right: 5px;
         }
         .horoscope-content p {
         font-size: 17px;
         padding: 0;
         margin: 0;
         line-height: 28px;
         font-weight: 500;
         margin-bottom: 10px;
         }
         .horoscope-header {
         text-align: center;
         }
         ul.horoscope-bar {
         margin: 0;
         padding: 0;
         border-bottom: 1px solid #efefef;
         margin-bottom: 20px;
         display: block;
         }
         ul.horoscope-bar li {
         list-style-type: none;
         display: inline;
         margin-right: 20px;
         border-bottom: none;
         }
         ul.horoscope-bar li a {
         text-decoration: none;
         color: #000;
         font-size: 19px;
         font-weight: 500;
         }
         ul.horoscope-bar li a.active {
         border-bottom: 3px solid #ff3203;
         }  
         .horoscope-details-page h1 {
         margin: 0;
         padding: 0;
         font-size: 28px;
         font-weight: 500;
         line-height: 24px;
         float: left;
         }
         .horoscope-details-page {
         margin-bottom: 30px;
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
         /*Modal Content */    
         p.horoscope-desc {
         padding: 10px 10px;/*BREAKING NEWS */
         margin: 0;
         margin-bottom: 0px;
         font-size: 18px;
         color: #545353;
         text-align: center;
         }
         .zodiac-list {
         padding: 20px;
         box-shadow: 0px 0px 9px #00000026;
         border-radius: 12px;
         background: #FFFFFF 0% 0% no-repeat padding-box;
         position: relative;
         }
         ul.otv-horoscope-item {
         margin: 0;
         padding: 0;
         }
         ul.otv-horoscope-item li {
         width: 14%;
         list-style-type: none;
         display: inline-block;
         margin: 5px 8px;
         height: 70px;
         margin-bottom: 60px;
         }
         ul.otv-horoscope-item li a img {
         width: 60px;
         height: 60px;
         border: 1px solid #fe3f00;
         border-radius: 50%;
         padding: 11px;
         text-align: center;
         line-height: 12px;
         display: block;
         margin: 0 auto 5px auto;
         }
         ul.otv-horoscope-item li a {
         display: block;
         color: #000;
         font-size: 15px;
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
         ul.otv-horoscope-item li a:hover img {
         background-color: #fbdbdb;
         }
         ul.otv-horoscope-item li a span {
         display: block;
         color: #7a7777;
         font-size: 13px;
         margin-top: 4px;
         }
         button.horoscope-close {
         position: absolute;
         top: 2px;
         right: 4px;
         background: none;
         border: none;
         outline: none;
         background-color: #ff0000;
         padding: 0px;
         margin: 0px;
         width: 40px;
         height: 40px;
         line-height: 16px;
         }
         /*Modal Content */
         .zodiac-details {
         background: #FFFFFF 0% 0% no-repeat padding-box;
         box-shadow: 0px 0px 9px #00000026;
         border-radius: 12px;
         padding: 30px;
         }  
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad"></div>
<section class="main-article">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 sticky">
           <div class="horoscope-details-page">
                     <h1>Horoscope</h1>
                     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Choose sine</button>
                     <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <p class="horoscope-desc">Choose your zodiac according to moon sign</p>
                              <button type="button" class="horoscope-close" data-dismiss="modal"><img src="images/svg/close-search.svg"></button>
                              <div class="zodiac-list">
                                 <ul class="otv-horoscope-item">
                                    <li><a href=""><img src="images/svg/aquarius.svg">Aquarius<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/aries.svg">Aries<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/cancer.svg">Cancer<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/capricon.svg">Capricon<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/gemeni.svg">Gemeni<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/libra.svg">Libra<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/lion.svg">Lion<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/pisces.svg">Pisces<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/sagittarious..svg">Sagittarious<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/scorpio.svg">Scorpio<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/taurus.svg">Taurus<span>(a,i,e)</span></a></li>
                                    <li><a href=""><img src="images/svg/virgo.svg">Virgo<span>(a,i,e)</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="horoscope-header">
                     <ul class="nav nav-tabs horoscope-bar">
                        <li><a ref="#today" data-toggle="tab" class="active" >Today's Horoscope</a></li>
                        <li><a href="#yearly" data-toggle="tab" >Annual Horoscope 2022</a></li>
                     </ul>
                  </div>
                  <div class="tab-content zodiac-details">
                     <div id="today" class="tab-pane fade in active">
                        <div class="zodiac-details-header">
                           <img src="images/svg/aries.svg" class="zodiac-img" title="" alt="">
                           <h3 class="horoscope-name">Aries | Aries</h3>
                           <h6 class="name-start">(Whose name starts with a,f,s)</h6>
                           <p class="horoscope-date">Monday 30 May 2022</p>
                        </div>
                        <div class="horoscope-writer">
                           <img src="images/svg/male.svg">
                           <h5>Dr. Ajay Bhambi</h5>
                        </div>
                        <div class="horoscope-content">
                           <h2 class="horoscope-content-head">According to moon sign</h2>
                           <p><span>Positive There :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Negetive- Do not</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Business :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Love :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Health :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Lucky color :</span>Black</p>
                           <p><span>Lucky number :</span>5</p>
                        </div>
                     </div>
                     <div id="yearly" class="tab-pane fade ">
                        <div class="zodiac-details-header">
                           <img src="images/svg/aries.svg" class="zodiac-img" title="" alt="">
                           <h3 class="horoscope-name">Aries | Aries</h3>
                           <h6 class="name-start">(Whose name starts with a,f,s)</h6>
                           <p class="horoscope-date">Monday 2022</p>
                        </div>
                        <div class="horoscope-writer">
                           <img src="images/svg/male.svg">
                           <h5>Dr. Ajay Bhambi</h5>
                        </div>
                        <div class="horoscope-content">
                           <h2 class="horoscope-content-head">According to moon sign</h2>
                           <p><span>Positive There :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Negetive- Do not</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Business :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Love :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Health :</span>Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth Horoscope for June 5: New responsibility for taurus, scorpio to get success in businessYou might stumble upon any hidden piece of wealth</p>
                           <p><span>Lucky color :</span>Black</p>
                           <p><span>Lucky number :</span>5</p>
                        </div>
                     </div>
                  </div>
         </div>
         <?php include 'includes/sidebar.php';?>
      </div>
   </div>
</section>
<?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>