<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "includes/common_css.php"; ?>
         section.bd-contact-us-sec {
         float: left;
         width: 100%;
         margin: 10px 0px 20px 0px;
         }
         .banner-aboutus {
         position: relative;
         width: 100%;
         float: left;
         margin-top: -15px;
         }
         .banner-aboutus img {
         width: 100%;
         height: 300px;
         }
         .banner-aboutus h1 {
         position: absolute;
         left: 0px;
         right: 0px;
         font-size: 50px;
         margin: 0 auto;
         top: 64px;
         text-align: center;
         line-height: 66px;
         font-weight: 900;
         width: fit-content;
         color: #fff;
         }
         .banner-aboutus h1 span {
         display: block;
         position: relative;
         }
         .banner-aboutus h1 span:after {
         content: "";
         display: block;
         width: 100%;
         height: 1px;
         background-color: #fff;
         padding: 0px
         }
         .banner-aboutus h3 {
         position: absolute;
         left: 0px;
         right: 0px;
         font-size: 17px;
         margin: 0 auto;
         top: 195px;
         text-align: center;
         line-height: 56px;
         font-weight: 400;
         width: fit-content;
         color: #fff;
         }
         .contact-us-list1 h4 {
         font-size: 24px;
         color: black;
         margin: 20px 0px;
         position: relative;
         font-weight: 700;
         }
         .contact-us-list1 h4 span {
         font-size: 24px;
         color: #f05127;
         }
         .contact-us-list1 h4:after {
         content: "";
         display: block;
         width: 100%;
         bottom: -12px;
         left: 0;
         right: 0;
         margin: 0 auto;
         height: 1px;
         background-color: #f05127;
         position: absolute;
         }
         .contact-us-list1 ul {
         margin: 10px 0px;
         padding: 0;
         position: relative;
         }   
         .contact-us-list1 ul:before {
         content: "";
         display: block;
         position: absolute;
         left: 1px;
         top: 11px;
         width: 5px;
         height: 5px;
         background-color: #cbcbcb;
         border-radius: 18%;
         }
         .contact-us-list1 ul li {
         list-style-type: none;
         display: block;
         font-size: 16px;
         margin-left: 15px;
         }
         .contact-us-list1 ul li span a {
         float: right;
         font-size: 16px;
         color: #393939;
         }
         .contact-us-list1 ul li:first-child {
         font-size: 20px;
         font-weight: 600;
         }
         .contact-us-list1 ul li:first-child span a  {
         font-size: 20px;
         font-weight: 600;
         color: #393939;
         }
         .contact-us-list2 h4 {
         font-size: 22px;
         color: black;
         margin: 20px 0px;
         position: relative;
         }
         .contact-us-list2 h4:after {
         content: "";
         display: block;
         width: 100%;
         bottom: -12px;
         left: 0;
         right: 0;
         margin: 0 auto;
         height: 1px;
         background-color: #f05127;
         position: absolute;
         }
         .contact-us-list2 ul {
         margin: 0px 0px 0px 15px;
         padding: 0;
         width: 100%;
         position: relative;
         display: inline-block;
         }
         .contact-us-list2 ul:before {
         content: "";
         display: block;
         position: absolute;
         left: -12px;
         top: 12px;
         width: 5px;
         height: 5px;
         background-color: #cbcbcb;
         border-radius: 18%;
         }
         .contact-us-list2 ul:hover:before {
         background-color: #f05127;
         }
         .contact-us-list2 ul li {
         list-style-type: none;
         float: left;
         font-size: 15px;
         margin: 5px 0px;
         padding-right: 8px;
         }
         .contact-us-list2 ul li a {
         color: #000;
         }
         .contact-us-list2 ul li:first-child {
         width: 20%;
         }
         .contact-us-list2 ul li:nth-child(2) {
         width: 20%;
         }
         .contact-us-list2 ul li:nth-child(3) {
         width: 40%;
         }
         .contact-us-list2 ul li:last-child {
         width: 20%;
         }
         .contact-us-list {
         margin: 15px 0px;
         }
         form.contactus {
         background-color: white;
         padding: 20px;
         box-shadow: 4px 5px 11px -2px rgb(0 0 0 / 56%);
         -webkit-box-shadow: 4px 5px 11px -2px rgb(0 0 0 / 56%);
         -moz-box-shadow: 4px 5px 11px -2px rgba(0,0,0,0.56);
         }
         .submit-btn {
         display: block;
         width: 100%;
         background-color: #f05127;
         outline: none;
         border: none;
         }
         p.contact-line {
         text-align: center;
         margin: 15px 0px 0px 0px;
         font-size: 11px;
         }
         p.contact-line a {
         color: #f05127;
         }
         .support-enquiries {
         margin: 20px 0px;
         }
         .support-enquiries h3 {
         margin: 10px 0px;
         padding: 0;
         }
         .support-enquiries h3 i {
         color: #f05127;
         font-size: 30px;
         }
         .support-enquiries h2 {
         margin: 0px;
         padding: 0px;
         font-size: 25px;
         font-weight: 600;
         }
         .support-enquiries p {
         margin: 5px 0px;
         font-size: 16px;
         }
         .support-enquiries a {
         color: #f05127;
         font-size: 16px;
         margin: 10px 0px;
         }
         .support-enquiries a:hover {
         color:#f9b41b;
         }
         .support-enquiries a i {
         margin-left: 10px;
         margin-bottom: 8px;
         }
         .offic-location {
         width: 100%;
         float: left;
         background-color: #e4f3fc;
         }
         .office-lacation-list {
         margin: 20px 0px;
         }
         .office-lacation-list a img {
         width: 50px;
         height: 50px;
         object-fit: cover;
         border-radius: 50%;
         }
         .office-lacation-list h3 {
         margin: 8px 0px;
         font-size: 17px;
         }
         .office-lacation-list p {
         font-size: 13px;
         line-height: 22px;
         margin: 0px;
         padding: 0px;
         }
         /*----------------//CONTACT_US-----------------*/
      </style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <?php include 'includes/breadcrumbs.php'; ?>
      <div class="banner-aboutus">
         <a href="#"><img src="https://odishatv.in/commondir/images/1_02.jpg" class="img-responsive" alt="" title=""></a>
         <h1>Odisha's #1<span>News Channel</span></h1>
         <h3>We Report, You decide.</h3>
      </div>
      <section class="bd-contact-us-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                  <div class="contact-us-list">
                     <div class="contact-us-list1">
                        <h4>OTV <span>24/7 </span>Helpline Number</h4>
                        <ul>
                           <li><b>For all Queries<span><a href="tel:9938223312">+91 99382 23312</a></span></b></li>
                        </ul>
                     </div>
                     <div class="contact-us-list1">
                        <h4>OTV NEWS BUREAU</h4>
                        <ul>
                           <li>Radhamadhab Mishra<span><a href="tel:+919937288196">+91-9937288196</a></span></li>
                           <li>(News Editor)</li>
                        </ul>
                        <ul>
                           <li>Sibananada Rout<span><a href="tel:+919599588531">+91-9599588531</a></span></li>
                           <li>(Delhi)</li>
                        </ul>
                        <ul>
                           <li>T. Gouri Shankar<span><a href="tel:+919777588754">+91-9777588754</a></span></li>
                           <li>(Jeypore)</li>
                        </ul>
                        <ul>
                           <li>Pradeep Mohanty<span><a href="tel:+919861166614">+91-9861166614</a></span></li>
                           <li>(Puri)</li>
                        </ul>
                        <ul>
                           <li>Biraja Dash<span><a href="tel:+919777589044">+91-9777589044</a></span></li>
                           <li>(Anugul)</li>
                        </ul>
                        <ul>
                           <li>Manoranjan Joshi<span><a href="tel:+919437150740">+91-9437150740</a></span></li>
                           <li>(Bolangir)</li>
                        </ul>
                        <ul>
                           <li>Sanjay Kumar Jena<span><a href="tel:+919937775819">+91-9937775819</a></span></li>
                           <li>(Sambalpur)</li>
                        </ul>
                        <ul>
                           <li>Satyananda Mohanty<span><a href="tel:+919437978555">+91-9437978555</a></span></li>
                           <li>(Rourkela)</li>
                        </ul>
                     </div>
                     <div class="contact-us-list2">
                        <h4>For Advertisement kindly contact</h4>
                        <ul>
                           <li>Subodha Das</li>
                           <li>Odisha</li>
                           <li><a href="mailto:subodh.das@odishatv.in">subodh.das@odishatv.in</a></li>
                           <li><a href="tel:+91-9937307714">+91-9937307714</a></li>
                        </ul>
                        <ul>
                           <li>Mahamaya Jena</li>
                           <li>Cuttack</li>
                           <li><a href="mailto:mahamaya.jena@odishatv.in">mahamaya.jena@odishatv.in</a></li>
                           <li><a href="tel:+919338813304">+91 9338813304</a></li>
                        </ul>
                        <ul>
                           <li>Debasish Ghosh</li>
                           <li>Kolkata</li>
                           <li><a href="mailto:debasish.ghosh@odishatv.in">debasish.ghosh@odishatv.in</a></li>
                           <li><a href="tel:+919830885056">+91-9830885056</a></li>
                        </ul>
                        <ul>
                           <li>Shams Tabrez</li>
                           <li>Mumbai</li>
                           <li><a href="mailto:shams.tabrez@odishatv.in">shams.tabrez@odishatv.in</a></li>
                           <li><a href="tel:+919820279266">+91-9820279266</a></li>
                        </ul>
                        <ul>
                           <li>Tanmay Sahoo</li>
                           <li>Bengaluru</li>
                           <li><a href="mailto:tanmaya.sahoo@odishatv.in">tanmaya.sahoo@odishatv.in</a></li>
                           <li><a href="tel:+919350911436">+91-9350911436</a></li>
                        </ul>
                        <ul>
                           <li>Pramod Panigrahi</li>
                           <li>Delhi</li>
                           <li><a href="mailto:pramod.panigrahi@odishatv.in">pramod.panigrahi@odishatv.in</a></li>
                           <li><a href="tel:+919810494255">+91-9810494255</a></li>
                        </ul>
                        <ul>
                           <li>P.V.K. Rao</li>
                           <li>Chennai</li>
                           <li><a href="mailto:pvkrao@gmail.com">pvkrao@gmail.com</a></li>
                           <li><a href="tel:+919840044996">+91-9840044996</a></li>
                        </ul>
                     </div>
                     <div class="contact-us-list1">
                        <h4>For Website Advertisments Contact</h4>
                        <ul>
                           <li>Sounak Basu Dhar<span><a href="tel:+919830023136">+91-9830 023 136</a></span></li>
                           <li>(Manager Digital Advertisement Sales)<span><a href="mailto:sounak@oodishatv.com">sounak@oodishatv.com</a></span></li>
                        </ul>
                     </div>
                     <div class="contact-us</center>-list1">
                        <h4>For TV Advertisments Contact</h4>
                        <ul>
                           <li>Sidhartha Kishore<span><a href="tel:+919999769694">+91-9999769694</a></span></li>
                           <li>(National Sales Head)<span><a href="mailto:sidhartha.kishore@odishatv.in">sidhartha.kishore@odishatv.in</a></span></li>
                        </ul>
                     </div>
                     <div class="contact-us-list1">
                        <h4>For Distribution kindly contact</h4>
                        <ul>
                           <li>Bibhuti Mishra<span><a href="tel:+919777588990">+91-9777588990</a></span></li>
                           <li>(Nodal Officer)<span><a href="mailto:bibhuti.mishra@odishatv.in">bibhuti.mishra@odishatv.in</a></span></li>
                        </ul>
                     </div>
                     <center>
                        <h4><b>Office Address</b></h4>
                     </center>
                     <p>
                        <iframe class="otv-contact-map" allowfullscreen="" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5000332004633!2d85.8153782144533!3d20.362262915572963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909427619ade3%3A0x1fc251a50caeb16f!2sOdisha%20Television%20Network!5e0!3m2!1sen!2sin!4v1632727370694!5m2!1sen!2sin" style="border:0;" width="900"></iframe>
                     </p>
                  </div>
               </div>
               <?php include 'includes/sidebar_right.php';?>
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js.php'; ?>
      </script>
   </body>
</html>