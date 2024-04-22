<!DOCTYPE html>
<html>
   <head>
      <title>NEW DESKTOP HOME PAGE</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
         <?php include "css/common-desktop.css"; ?>
         section.banner-section {
         margin-top: 80px;
         }
         .nav-link{
         text-transform: capitalize;
         color:#20304f ;
         }
         .nav-link:hover{
         text-transform: capitalize;
         color:#20304f ;
         }
         .nav-tabs .nav-link{
         font-weight:500;
         }
         .nav-tabs .nav-link.active{
         background:#F89C1D;
         color:#fff;
         font-weight:500;
         }
         /* banner-section */
         section.banner-section{
         position: relative;
         height: 180px;
         margin-bottom: 70px;
         }
         section.banner-section img{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 180px;
         background-repeat: no-repeat;
         z-index: -1;
         object-fit: cover;
         }
         h2.banner-title{
         top:36px;
         position: relative;
         line-height: normal;
         margin-bottom: 20px;
         display: block;
         font-size: 40px;
         color: #f8f9fa;
         }
         h2.banner-title::after{
         background-color: #F89C1D;
         content: "";
         width: 36px;
         height: 4px;
         position: absolute;
         bottom: -8px;
         left: 0;
         }
         ul.home-bn{
         position: relative;
         top:28px;
         margin: 0;
         padding: 0;
         display: flex;
         }
         ul.home-bn li{
         list-style: none;
         }
         ul.home-bn li a{
         font-size:12px ;
         list-style: none;
         margin: 0 20px 0 0;
         color: #f8f9fa;
         text-transform: uppercase;
         letter-spacing: 2px;
         font-weight: 600;
         position: relative;
         }
         ul.home-bn li a:hover{
         text-decoration: none;
         }
         ul.home-bn li:last-child a::after{
         display: none;
         }
         ul.home-bn li a::after{
         content: "/";
         position: absolute; 
         top: -2px;
         right: -12px; 
         }
         /* banner-section */
         /* map-khabar */
         section.khabar-location{
         margin-bottom: 60px;
         }
         .map-khabar{
         width: 100%;
         margin-bottom: 60px;
         }
         .khabar-contact-map{
         width: 100%;
         }
         /* map-khabar */
         /* get-touch */
         .info-u{
         margin-top: 140px;

         }
         .get-touch-one{
         margin-top: 50px;
         }
         .get-touch-one p{
         color: #6e6e6e;
         font-size: 18px;
         }
         .khabar-title{
         position: relative;
         font-size: 36px;
         padding-bottom: 20px;
         margin-bottom: 30px;
         font-weight: 700;
         text-transform: capitalize;
         color: #20304f;
         }
         .khabar-title::after {   
         bottom: 0;
         content: "";
         height: 4px;
         left: 0;
         position: absolute;
         width: 36px;
         background-color: #F89C1D;
         }
         ul.list-khabar{
         margin: 0;
         padding: 0;
         list-style: none
         }
         ul.list-khabar li{
         margin-bottom: 15px;
         }
         ul.list-khabar li a{
         text-decoration: none;
         color: #6e6e6e;
         font-size: 20px;
         }
         img.khabar-icon{
         height: 30px;
         width: 30px;
         object-fit: cover;
         }
         ul.list-khabar-two{
         margin: 0;
         padding: 0;
         list-style: none
         }
         ul.list-khabar-two li{
         text-decoration: none;
         color: #23272b;
         font-size: 20px;
         margin-bottom: 30px;
         }
         ul.list-khabar-two li span{
         color: #6e6e70;
         display: block;
         }
         .khabar-input {
         height: 60px;
         width: calc(50% - 20px); 
         padding: 10px;
         border: none;
         outline: none;
         margin: 5px; 
         margin-bottom: 20px;
         box-sizing: border-box; 
         display: inline-block; 
         color: #6e6e6e;
         background-color: #e4e4e4;
         }
         .khabar-message {
         height: 240px;
         width: calc(100% - 20px); 
         padding: 10px;
         border: none;
         margin: 5px; 
         box-sizing: border-box;
         }
         .send-button-khabar {
         display: block;
         width:calc(50% - 20px) ;
         margin: 10px 5px;
         text-align: center;
         background-color: #F89C1D;
         color: white;
         border: none;
         padding: 15px;
         text-decoration: none;
         box-sizing: border-box;
         font-weight:500;
         }
         a.send-button-khabar:hover{
         text-decoration: none;
         color: #e4e4e4;
         }
         /* get-touch */
         /* footer-banner */
         section.footer-banner{
         position: relative;
         height: 180px;   
         }
         section.footer-banner img{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 180px;
         background-repeat: no-repeat;
         z-index: -1;
         object-fit: cover;
         }
         h2.footer-banner-title{
         position: relative;
         text-transform: capitalize;
         top: 70px;
         line-height: normal;
         font-size: 40px;
         color: #f8f9fa;
         font-weight: 400;
         }
         h2.footer-banner-title span{
         color: #F89C1D;
         font-weight: 600;
         }
         a.ft-banner-btn{
         position: absolute;
         top: 70px;
         right: 100px;
         padding: 12px 20px;
         background-color: #F89C1D;
         font-size: 16px;
         color: #f8f9fa;
         text-transform: uppercase;
         letter-spacing: 2px;
         }
         a.ft-banner-btn:hover{
         text-decoration: none;
         }
         /* footer-banner */
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <!-- banner-section -->
      <section class="banner-section">
         <img src="images/pexels-julia-m-cameron-4144923.jpg" alt="text">
         <div class="container">
            <h2 class="banner-title">Contact us</h2>
            <ul  class="home-bn">
               <li>
                  <a href="#">home</a>
               </li>
               <li>
                  <a href="#">contact</a>
               </li>
            </ul>
         </div>
      </section>
      <!-- banner-section -->
      <div class="container">
         <div class="row">
            <?php include 'includes/left_sticky_menu.php'; ?>
            <div class="col-lg-9">
               <!-- map-khabar -->
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="tab-1" data-toggle="tab" href="#content-1" role="tab" aria-controls="content-1" aria-selected="true">bbsr office</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="tab-2" data-toggle="tab" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false">mumbai office</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="tab-3" data-toggle="tab" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Tab 3</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="content-1" role="tabpanel" aria-labelledby="tab-1">
                     <iframe allowfullscreen="" class="khabar-contact-map" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5000332004633!2d85.8153782144533!3d20.362262915572963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909427619ade3%3A0x1fc251a50caeb16f!2sOdisha%20Television%20Network!5e0!3m2!1sen!2sin!4v1632727370694!5m2!1sen!2sin" style="border:0;" width="900"></iframe>
                  </div>
                  <div class="tab-pane fade" id="content-2" role="tabpanel" aria-labelledby="tab-2">
                     <iframe allowfullscreen="" class="khabar-contact-map" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5000332004633!2d85.8153782144533!3d20.362262915572963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909427619ade3%3A0x1fc251a50caeb16f!2sOdisha%20Television%20Network!5e0!3m2!1sen!2sin!4v1632727370694!5m2!1sen!2sin" style="border:0;" width="900"></iframe>
                  </div>
                  <div class="tab-pane fade" id="content-3" role="tabpanel" aria-labelledby="tab-3">
                     <iframe allowfullscreen="" class="khabar-contact-map" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5000332004633!2d85.8153782144533!3d20.362262915572963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909427619ade3%3A0x1fc251a50caeb16f!2sOdisha%20Television%20Network!5e0!3m2!1sen!2sin!4v1632727370694!5m2!1sen!2sin" style="border:0;" width="900"></iframe>
                  </div>
               </div>
               <!-- map-khabar -->
               <!-- get-touch -->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="get-touch-one">
                           <h4 class="khabar-title">Get in Touch</h4>
                           <p class="normal">70 W. Madison Street, Ste. 1400 Chicago, IL 60602</p>
                           <ul class="list-khabar">
                              <li>
                                 <a href="#">
                                 <img src="https://source.unsplash.com/random" class="khabar-icon" width="30" height="30" alt="text">
                                 (214) 550-0405
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <img src="https://source.unsplash.com/random" class="khabar-icon" width="30" height="30"  alt="text">
                                 (290) 580-9595
                                 </a>
                              </li>
                              <li>
                                 <a href="#" >
                                 <img src="https://source.unsplash.com/random" class="khabar-icon" width="30" height="30"  alt="text">
                                 info@themeperch.net
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="get-touch-one">
                           <h4 class="khabar-title">working hour</h4>
                           <ul class="list-khabar-two">
                              <li>
                                 Monday to Friday
                                 <span >8.00am - 5.30pm</span>
                              </li>
                              <li>
                                 saturday
                                 <span >8.00am - 8.30pm</span>
                              </li>
                              <li>
                                 sunday
                                 <span >8.00am - 8.30pm</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-8 info-u">
                        <input type="text" class="khabar-input" placeholder="First Name">
                        <input type="text" class="khabar-input" placeholder="Last Name">
                        <input type="text" class="khabar-input" placeholder="Email">
                        <input type="text" class="khabar-input" placeholder="Phone Number">
                        <input type="text" class="khabar-input" placeholder="website">
                        <select class="khabar-input">
                           <option value="0">Select an option</option>
                           <option value="1">Option 1</option>
                           <option value="2">Option 2</option>
                           <option value="3">Option 3</option>
                        </select>
                        <textarea class="khabar-message khabar-input" placeholder="Your Message"></textarea>
                        <a href="#" class="send-button-khabar">Send Message</a>
                     </div>
                  </div>
               </div>
               <!-- get-touch -->
            </div>
         </div>
      </div>
      <!-- footer-banner -->
      <section class="footer-banner">
         <img src="images/pexels-julia-m-cameron-4144923.jpg" alt="">
         <div class="container">
            <h2 class="footer-banner-title">make a difference with <span>expert team </span></h2>
            <a href="#" class="ft-banner-btn">let's work together</a>
         </div>
      </section>
      <!-- footer-banner -->
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>