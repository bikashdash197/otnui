<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
         <?php include "css/common-mobile.css"; ?>
         div.banner-section {
         margin-top: 80px;
         }
         /* banner-section */
         div.banner-section{
         position: relative;
         height:180px;
         margin-bottom: 30px;
         display:block;
         }
         div.banner-section img{
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
         top: 36px;
         position: relative;
         line-height: normal;
         margin-bottom: 20px;
         display: block;
         font-size: 36px;
         color: #f8f9fa;
         text-shadow: 2px 3px #333;
         margin:0 10px 20px 10px
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
         margin: 0 0 0 10px;
         text-shadow: 2px 2px #333;
         padding: 0;
         display: flex;
         }
         ul.home-bn li{
         list-style: none;
         font-size:24px;
         }
         ul.home-bn li a{
         text-decoration:none;
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
         height:250px;
         }
         /* map-khabar */
         /* get-touch */
         .info-u{
         margin:20px 0 80px 0;
         }
         .get-touch-one{
         margin-bottom: 10px;
         }
         .get-touch-one p{
         color: #6e6e6e;
         font-size: 18px;
         }
         .khabar-title{
         position: relative;
         font-size: 24px;
         padding-bottom: 20px;
         margin-bottom: 10px;
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
         font-size: 16px;
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
         margin-bottom: 10px;
         }
         ul.list-khabar-two li span{
         color: #6e6e70;
         display: block;
         }
         .khabar-input {
         height: 40px;
         width: calc(50% - 10px);
         float:left;
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
         height: 140px;
         width: 100%; 
         padding: 10px;
         border: none;
         }
         a.send-button-khabar {
         margin:10px 18%;
         padding:10px 60px;
         background-color: #F89C1D;
         color: white;
         border: none;
         text-decoration: none;
         font-weight:500;
         }
         a.send-button-khabar:hover{
         text-decoration: none;
         color: #e4e4e4;
         }
         /* get-touch */
         .contentainer-map {
         background-color: #f8f9fa;
         padding: 20px;
         border: 1px solid #ccc;
         border-radius: 5px;
         }
         .area-name{
         color:#333;
         font-size:24px;
         line-height:30px;
         font-weight:500;
         text-transform:uppercase;
         margin:0 0 20px 0
         }
         .area-loaction{
         margin-bottom:10px;
         border:2px solid #F89C1D;
         border-radius :4px;
         }
      </style>
   </head>
   <body>
      <?php include 'includes/header.php';?>
      <div class="banner-section">
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
      </div>
      <!-- banner-section -->
      <!-- map-khabar -->
      <div class="contentainer-map">
         <a class="area-name">Mumbai Office</a>
         <div class="area-loaction">
            <iframe class="khabar-contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5000332004633!2d85.8153782144533!3d20.362262915572963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909427619ade3%3A0x1fc251a50caeb16f!2sOdisha%20Television%20Network!5e0!3m2!1sen!2sin!4v1632727370694!5m2!1sen!2sin" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"></iframe>
         </div>
         <a class="area-name">Mumbai Office</a>
         <div class="area-loaction">
            <iframe class="khabar-contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5000332004633!2d85.8153782144533!3d20.362262915572963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909427619ade3%3A0x1fc251a50caeb16f!2sOdisha%20Television%20Network!5e0!3m2!1sen!2sin!4v1632727370694!5m2!1sen!2sin" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"></iframe>
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
      <?php include 'includes/footer.php'; ?>
      <script>
        <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>