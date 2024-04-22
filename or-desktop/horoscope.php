<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "includes/common_css.php"; ?>
         section.horoscope-section {
         float: left;
         width: 100%;
         margin: 20px 0px;
         }
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
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <?php include 'includes/breadcrumbs.php'; ?>
      <section class="horoscope-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <h1 class="horoscope-heading">Horoscope</h1>
                  <p class="horoscope-desc">Choose your zodiac according to moon sign</p>
                  <div class="zodiac-list">
                     <ul class="otv-horoscope-item">
                        <li><a href=""><img src="images/svg/aquarius.svg" alt="" title="">Aquarius<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/aries.svg" alt="" title="">Aries<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/cancer.svg" alt="" title="">Cancer<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/capricon.svg" alt="" title="">Capricon<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/gemeni.svg" alt="" title="">Gemeni<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/libra.svg" alt="" title="">Libra<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/lion.svg" alt="" title="">Lion<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/pisces.svg" alt="" title="">Pisces<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/sagittarious..svg" alt="" title="">Sagittarious<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/scorpio.svg" alt="" title="">Scorpio<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/taurus.svg" alt="" title="">Taurus<span>(a,i,e)</span></a></li>
                        <li><a href=""><img src="images/svg/virgo.svg" alt="" title="">Virgo<span>(a,i,e)</span></a></li>
                     </ul>
                  </div>
               </div>
               <!--*************** SIDEBAR RIGHT ***************-->
               <?php include 'includes/sidebar_right.php';?>
               <!--************** //SIDEBAR RIGHT **************-->
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
   </body>
</html>