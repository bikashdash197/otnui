<?php include 'includes/header.php';?>
<style type="text/css">
     h1.horoscope-heading {
         margin: 0;
         padding: 0;
         font-size: 29px;
         font-weight: 500;
         line-height: 33px;
         margin-bottom: 10px;
         }
         p.horoscope-desc {
         padding: 0;
         margin: 0;
         margin-bottom: 20px;
         font-size: 15px;
         color: #787878;
         }
         .zodiac-list {
         padding: 20px;
         box-shadow: 0px 0px 9px #00000026;
         border-radius: 12px;
         background: #FFFFFF 0% 0% no-repeat padding-box;
         position: relative;
         }
         .zodiac-list:after {
         position: absolute;
         bottom: -48px;
         left: 0;
         right: 0;
         width: 100%;
         height: 1px;
         background-color: #e4e4e4;
         content: "";
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
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad"></div>
<section class="main-article">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 sticky">
           <h1 class="horoscope-heading">Horoscope</h1>
                  <p class="horoscope-desc">Choose your zodiac according to moon sign</p>
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
         <?php include 'includes/sidebar.php';?>
      </div>
   </div>
</section>
<?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>