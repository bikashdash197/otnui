<!DOCTYPE html>
<html>
   <head>
      <title>Desktop V2</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include 'includes/common_css.php'; ?>
         section.odisha-section {
         float: left;
         width: 100%;
         margin: 30px 0px;
         }
         h3.otv-heading-new-two-article {
         position: relative;
         font-size: 26px;
         font-weight: 500;
         margin: -6px 0px 10px 0px;
         }
         h3.otv-heading-new-two-article span {
         line-height: 35px;
         display: block;
         width: fit-content;
         background-color: #fff;
         padding-right: 13px;
         text-align: center;
         margin: 0 auto;
         padding-left: 13px;
         }
         h3.otv-heading-new-two-article:after {
         content: "";
         width: -webkit-fill-available;
         position: absolute;
         right: 0;
         top: 17px;
         height: 4px;
         z-index: -1;
         display: block;
         background-color: #bbb;
         }
         .odisha-large-item {
         position: relative;
         margin: 0px 0px 20px 0px;
         padding: 10px;
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         display: inline-block;
         }
         h3.otv-heading-one {
         line-height: 30px;
         font-size: 28px;
         font-weight: 700;
         color: #000000;
         margin-bottom: 7px;
         }
         p.odisha-large-item-para {
         font-size: 15px;
         color: #5c5c5c;
         margin-bottom: 10px;
         }
         .odisha-large-item-img {
         position: relative;
         margin-bottom: 10px;
         }
         .odisha-large-item-img img {
         border-radius: 8px;
         position: relative;
         width: 100%;
         height: 301px;
         }
         .otv-cat-photocredit {
         background-color: #21212199;
         padding: 7px 17px 7px 32px;
         color: #fff;
         font-size: 13px;
         width: fit-content;
         transition-duration: .5s;
         float: right;
         font-weight: 700;
         position: absolute;
         left: 0px;
         bottom: 0px;
         }
         span.otv-cat-photocredit img {
         height: 15px;
         position: absolute;
         left: 5px;
         top: 10px;
         width: 26px!important;
         }
         img.bd-play-video {
         position: absolute;
         right: 10px;
         top: 10px;
         width: 25px;
         height: 25px;
         background-color: #f65028bd;
         border-radius: 50%;
         padding: 6px;
         }
         .odisha-large-list {
         width: 100%;
         margin-bottom: 15px;
         }
         a.view-more-story {
         outline: 0;
         line-height: 18px;
         padding: 0 17px 0 0;
         width: fit-content;
         border: none;
         color: #dc3545;
         text-transform: capitalize;
         font-size: 12px;
         border-radius: 2px;
         float: right;
         font-weight: 700;
         transition-duration: .5s;
         display: block;
         position: relative;
         margin-bottom: 10px;
         }
         a.view-more-story:after {
         content: "";
         display: block;
         width: 0;
         height: 0;
         border-top: 5px solid transparent;
         border-left: 8px solid #f65028;
         border-bottom: 5px solid transparent;
         position: absolute;
         right: 4px;
         top: 4px;
         }
         .odisha-medium-item {
         position: relative;
         margin: 10px 0px;
         padding: 7.5px;
         -webkit-box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -moz-box-shadow: 0px 0px 18px -4px rgba(0,0,0,0.34);
         box-shadow: 0px 0px 18px -4px rgb(0 0 0 / 34%);
         -webkit-border-radius: 8px;
         -moz-border-radius: 8px;
         -o-border-radius: 8px;
         border-radius: 8px;
         background-color: #fff;
         display: inline-block;
         }
         .odisha-medium-item-sub {
         position: relative;
         width: 100%;
         height: auto;
         padding-right: 226px;
         margin-bottom: 15px;
         }
         .odisha-medium-item-content h6 {
         margin: 0px 0px 10px 0px;
         padding: 0px;
         color: #00b1cd;
         font-size: 15px;
         text-transform: uppercase;
         }
         .otv-bd-time-share {
         display: inline-block;
         width: calc(100% - 10px);
         margin-top: 10px;
         }
         ul.otv-bd-cat-time {
         margin: 0px;
         padding: 0px;
         float: left;
         width: fit-content;
         }
         ul.otv-bd-cat-time li {
         font-size: 16px;
         list-style-type: none;
         float: left;
         }
         .otv-bd-time-share {
         display: inline-block;
         width: calc(100% - 10px);
         }
         .odisha-medium-item-content {
         display: table-cell;
         vertical-align: middle;
         }
         .odisha-medium-item-sub-img {
         width: 224px;
         height: 126px;
         object-fit: cover;
         position: absolute;
         right: 0;
         border-radius: 8px;
         }
         .odisha-medium-item-sub h5 {
         font-size: 18px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 27px;
         margin: 0 0 5px 0;
         padding: 0;
         font-weight: 400;
         }
         .news-from-odisha {
         float: left;
         width: 100%;
         margin-bottom: 20px;
         }
         h1.news-odisha-heading {
         font-size: 27px;
         margin: 0;
         padding: 0;
         line-height: 23px;
         color: #000;
         font-weight: 600;
         width: fit-content;
         float: left;
         }
         .news-from-odisha {
         width: 100%;
         margin-bottom: 10px;
         display: inline-block;
         }
         .odisha-select-city {
         float: right;
         }
         .odisha-select-city select {
         border: solid 1px #d4bbba;
         background-color: #f1f1f6;
         padding: 5px 10px;
         outline: 0;
         }
         .odisha-main-aricle {
         position: relative;
         height: 372px;
         margin-bottom: 5px;
         border: 1px solid #80808047;
         padding: 5px;
         }
         .odisha-main-aricle img {
         width: 100%;
         height: 360px;
         object-fit: cover;
         }
         .odisha-main-aricle-content {
         position: absolute;
         left: 5px;
         bottom: 5px;
         width: calc(100% - 10px);
         background: linear-gradient(#0000,#000,rgb(0 0 0));
         padding: 15px;
         padding-top: 17px;
         }
         .odisha-main-aricle-content h2 {
         margin: 0;
         padding: 0;
         font-size: 26px;
         color: #fff;
         font-weight: 400;
         line-height: 30px;
         font-family: Faustina,serif;
         margin-bottom: 4px;
         }
         .odisha-main-aricle-content p {
         margin: 0;
         padding: 0;
         font-size: 13px;
         color: #fff;
         font-weight: 400;
         line-height: 20px;
         font-family: Faustina,serif;
         margin-bottom: 2px;
         }
         .odisha-main-aricle-content ul {
         margin: 0;
         padding: 0;
         }
         .odisha-main-aricle-content ul li {
         list-style-type: none;
         display: inline;
         margin-right: 3px;
         color: #fff;
         font-size: 13px;
         }
         .odisha-main-aricle-content ul li a {
         border: 1px solid #868686;
         border-radius: 8px;
         padding: 1px 5px;
         color: #f65028;
         font-size: 11px;
         }
         img.odisha-pg-play-video {
         position: absolute;
         right: 10px;
         top: 10px;
         width: 25px;
         height: 25px;
         background-color: #f65028bd;
         border-radius: 6px;
         padding: 6px;
         object-fit: unset;
         }
         .odisha-main-aricle-sub {
         position: relative;
         height: 166px;
         margin-bottom: 5px;
         }
         .odisha-main-aricle-sub img {
         width: 100%;
         height: 162px;
         object-fit: cover;
         }
         .odisha-main-aricle-content-sub {
         position: absolute;
         left: 0px;
         bottom: 5px;
         width: calc(100% - 1px);
         background: linear-gradient(#0000,#0000007a,rgb(9 9 9 / 88%));
         padding: 15px;
         padding-top: 17px;
         }
         .odisha-main-aricle-content-sub h2 {
         margin: 0;
         padding: 0;
         font-size: 17px;
         color: #fff;
         font-weight: 400;
         line-height: 20px;
         font-family: Faustina,serif;
         margin-bottom: 1px;
         height: 20px;
         overflow: hidden;
         }
         .odisha-main-aricle-content-sub p {
         margin: 0;
         padding: 0;
         font-size: 12px;
         color: #fff;
         font-weight: 400;
         line-height: 18px;
         font-family: Faustina,serif;
         margin-bottom: 1px;
         height: 36px;
         overflow: hidden;
         }
         .odisha-main-aricle-content-sub ul {
         margin: 0;
         padding: 0;
         }
         .odisha-main-aricle-content-sub ul li {
         list-style-type: none;
         display: inline;
         margin-right: 3px;
         color: #fff;
         font-size: 12px;
         }
         .odisha-main-aricle-content-sub ul li a {
         border: 1px solid #868686;
         border-radius: 8px;
         padding: 1px 5px;
         color: #f65028;
         font-size: 10px;
         }
         img.odisha-pg-play-video {
         position: absolute;
         right: 10px;
         top: 10px;
         width: 25px;
         height: 25px;
         background-color: #f65028bd;
         border-radius: 6px;
         padding: 6px;
         object-fit: unset;
         }
         .odisha-main-aricle-sub1 {
         position: relative;
         display: inline-block;
         width: 100%;
         min-height: 57px;
         padding-left: 106px;
         margin-bottom: 10px;
         box-shadow: 0px 3px 6px #00000029;
         }
         .odisha-main-aricle-sub1 img {
         width: 96px;
         height: 55px;
         object-fit: cover;
         position: absolute;
         left: 0;
         top: 2px;
         }
         .odisha-main-aricle-sub1 h5 {
         font-size: 13px;
         text-decoration: none;
         display: block;
         color: #000;
         line-height: 17px;
         margin: 0 0 3px 0;
         padding: 0;
         font-family: Faustina,serif;
         height: 33px;
         overflow: hidden;
         }
         .odisha-main-aricle-sub1 p {
         margin: 0;
         padding: 0;
         font-size: 11px;
         color: #7e7a7a;
         }
         .odisha-main {
         float: left;
         width: 100%;
         margin-bottom: 30px;
         }
      </style>
   </head>
   <body>
      <div class="otv-970-250-ad">
         &nbsp;
      </div>
      <?php include 'includes/header.php'; ?>
      <?php include 'includes/breadcrumbs.php'; ?>
      <section class="odisha-section">
         <div class="container">
            <div class="news-from-odisha">
               <h1 class="news-odisha-heading">News from odisha</h1>
               <div class="odisha-select-city">
                  <select onchange="javascript:window.location = this.value;">
                     <option value="">Select your city</option>
                     <option value="https://odishatv.in/odisha/bhubaneswar">Bhubaneswar</option>
                     <option value="https://odishatv.in/odisha/cuttack">Cuttack</option>
                     <option value="https://odishatv.in/odisha/puri">Puri</option>
                     <option value="https://odishatv.in/odisha/sambalpur">Sambalpur</option>
                     <option value="https://odishatv.in/odisha/gopalpur">Gopalpur</option>
                     <option value="https://odishatv.in/odisha/angul">Angul</option>
                     <option value="https://odishatv.in/odisha/bargarh">Bargarh</option>
                     <option value="https://odishatv.in/odisha/bhadrak">Bhadrak</option>
                     <option value="https://odishatv.in/odisha/balasore">Balasore</option>
                     <option value="https://odishatv.in/odisha/boudh">Boudh</option>
                     <option value="https://odishatv.in/odisha/deogarh">Deogarh</option>
                     <option value="https://odishatv.in/odisha/dhenkanal">Dhenkanal</option>
                     <option value="https://odishatv.in/odisha/gajapati">Gajapati</option>
                     <option value="https://odishatv.in/odisha/ganjam">Ganjam</option>
                     <option value="https://odishatv.in/odisha/jagatsinghpur">Jagatsinghpur</option>
                     <option value="https://odishatv.in/odisha/jajpur">Jajpur</option>
                     <option value="https://odishatv.in/odisha/kalahandi">Kalahandi</option>
                     <option value="https://odishatv.in/odisha/phulbani">Phulbani</option>
                     <option value="https://odishatv.in/odisha/kendrapara">Kendrapara</option>
                     <option value="https://odishatv.in/odisha/keonjhar">Keonjhar</option>
                     <option value="https://odishatv.in/odisha/khurda">Khurda</option>
                     <option value="https://odishatv.in/odisha/koraput">Koraput</option>
                     <option value="https://odishatv.in/odisha/malkangiri">Malkangiri</option>
                     <option value="https://odishatv.in/odisha/mayurbhanj">Mayurbhanj</option>
                     <option value="https://odishatv.in/odisha/nabarangpur">Nabarangpur</option>
                     <option value="https://odishatv.in/odisha/nayagarh">Nayagarh</option>
                     <option value="https://odishatv.in/odisha/rayagada">Rayagada</option>
                     <option value="https://odishatv.in/odisha/sonepur">Sonepur</option>
                     <option value="https://odishatv.in/odisha/sundargarh">Sundargarh</option>
                     <option value="https://odishatv.in/odisha/balangir">Balangir</option>
                     <option value="https://odishatv.in/odisha/jharsuguda">Jharsuguda</option>
                     <option value="https://odishatv.in/odisha/nuapada">Nuapada</option>
                     <option value="https://odishatv.in/odisha/talcher">Talcher</option>
                     <option value="https://odishatv.in/odisha/paralakhemundi">Paralakhemundi</option>
                     <option value="https://odishatv.in/odisha/paradeep">Paradeep</option>
                     <option value="https://odishatv.in/odisha/bhawanipatna">Bhawanipatna</option>
                     <option value="https://odishatv.in/odisha/daringbadi">Daringbadi</option>
                     <option value="https://odishatv.in/odisha/joda">Joda</option>
                     <option value="https://odishatv.in/odisha/barbil">Barbil</option>
                     <option value="https://odishatv.in/odisha/jeypore">Jeypore</option>
                     <option value="https://odishatv.in/odisha/sunabeda">Sunabeda</option>
                     <option value="https://odishatv.in/odisha/baripada">Baripada</option>
                     <option value="https://odishatv.in/odisha/konark">Konark</option>
                     <option value="https://odishatv.in/odisha/pipili">Pipili</option>
                     <option value="https://odishatv.in/odisha/gunupur">Gunupur</option>
                     <option value="https://odishatv.in/odisha/hirakud">Hirakud</option>
                     <option value="https://odishatv.in/odisha/rourkela">Rourkela</option>
                     <option value="https://odishatv.in/odisha/titilagarh">Titilagarh</option>
                  </select>
               </div>
            </div>
            <div class="odisha-main">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="odisha-main-aricle">
                        <a href=""><img src="images/large-article-img.jpg" alt="" title=""></a>
                        <div class="odisha-main-aricle-content">
                           <a href="">
                              <h2>ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h2>
                           </a>
                           <p>ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି ।</p>
                           <ul>
                              <li>Tuesday 17 may 2022</li>
                              <li><a href="">BSE Odisha</a></li>
                              <li><a href="">Class 9 Absenteeism</a></li>
                              <li><a href="">Matric Exam</a></li>
                           </ul>
                        </div>
                        <img src="images/svg/play-white.svg" class="odisha-pg-play-video" width="25" height="25" alt="" title="">
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="odisha-main-aricle-sub">
                        <a href=""><img src="images/medium-large-img.jpg" alt="" title=""></a>
                        <div class="odisha-main-aricle-content-sub">
                           <a href="">
                              <h2>ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h2>
                           </a>
                           <p>ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି ।</p>
                           <ul>
                              <li>Tuesday 17 may 2022</li>
                              <li><a href="">BSE Odisha</a></li>
                              <li><a href="">Exam</a></li>
                           </ul>
                        </div>
                        <img src="images/svg/play-white.svg" class="odisha-pg-play-video" width="25" height="25" alt="" title="">
                     </div>
                     <div class="odisha-main-aricle-sub1">
                        <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                        <a href="">
                           <h5>ବାଘଗଣନା କରୁ କରୁ ଆଟାକ କଲା ଭାଲୁ । ଭାଲୁ ଆକ୍ରମଣରେ ଆହତ ହୋଇଛନ୍ତି ୨ ବନ ସୁରକ୍ଷାକର୍ମୀ । ମୟୂରଭଞ୍ଜ ଜିଲ୍ଲା ଉତ୍ତର ଶିମିଳିପାଳ ଚହଲା...</h5>
                        </a>
                        <p>Tuesday,17 may 2022</p>
                     </div>
                     <div class="odisha-main-aricle-sub1">
                        <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                        <a href="">
                           <h5>ବାଘଗଣନା କରୁ କରୁ ଆଟାକ କଲା ଭାଲୁ । ଭାଲୁ ଆକ୍ରମଣରେ ଆହତ ହୋଇଛନ୍ତି ୨ ବନ ସୁରକ୍ଷାକର୍ମୀ । ମୟୂରଭଞ୍ଜ ଜିଲ୍ଲା ଉତ୍ତର ଶିମିଳିପାଳ ଚହଲା...</h5>
                        </a>
                        <p>Tuesday,17 may 2022</p>
                     </div>
                     <div class="odisha-main-aricle-sub1">
                        <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                        <a href="">
                           <h5>ବାଘଗଣନା କରୁ କରୁ ଆଟାକ କଲା ଭାଲୁ । ଭାଲୁ ଆକ୍ରମଣରେ ଆହତ ହୋଇଛନ୍ତି ୨ ବନ ସୁରକ୍ଷାକର୍ମୀ । ମୟୂରଭଞ୍ଜ ଜିଲ୍ଲା ଉତ୍ତର ଶିମିଳିପାଳ ଚହଲା...</h5>
                        </a>
                        <p>Tuesday,17 may 2022</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="odisha-main-aricle-sub">
                        <a href=""><img src="images/medium-large-img.jpg" alt="" title=""></a>
                        <div class="odisha-main-aricle-content-sub">
                           <a href="">
                              <h2>ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h2>
                           </a>
                           <p>ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି ।</p>
                           <ul>
                              <li>Tuesday 17 may 2022</li>
                              <li><a href="">BSE Odisha</a></li>
                              <li><a href="">Exam</a></li>
                           </ul>
                        </div>
                        <img src="images/svg/play-white.svg" class="odisha-pg-play-video" width="25" height="25" alt="" title="">
                     </div>
                     <div class="odisha-main-aricle-sub1">
                        <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                        <a href="">
                           <h5>ବାଘଗଣନା କରୁ କରୁ ଆଟାକ କଲା ଭାଲୁ । ଭାଲୁ ଆକ୍ରମଣରେ ଆହତ ହୋଇଛନ୍ତି ୨ ବନ ସୁରକ୍ଷାକର୍ମୀ । ମୟୂରଭଞ୍ଜ ଜିଲ୍ଲା ଉତ୍ତର ଶିମିଳିପାଳ ଚହଲା...</h5>
                        </a>
                        <p>Tuesday,17 may 2022</p>
                     </div>
                     <div class="odisha-main-aricle-sub1">
                        <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                        <a href="">
                           <h5>ବାଘଗଣନା କରୁ କରୁ ଆଟାକ କଲା ଭାଲୁ । ଭାଲୁ ଆକ୍ରମଣରେ ଆହତ ହୋଇଛନ୍ତି ୨ ବନ ସୁରକ୍ଷାକର୍ମୀ । ମୟୂରଭଞ୍ଜ ଜିଲ୍ଲା ଉତ୍ତର ଶିମିଳିପାଳ ଚହଲା...</h5>
                        </a>
                        <p>Tuesday,17 may 2022</p>
                     </div>
                     <div class="odisha-main-aricle-sub1">
                        <a href=""><img src="images/small-img.jpg" alt="" title=""></a>
                        <a href="">
                           <h5>ବାଘଗଣନା କରୁ କରୁ ଆଟାକ କଲା ଭାଲୁ । ଭାଲୁ ଆକ୍ରମଣରେ ଆହତ ହୋଇଛନ୍ତି ୨ ବନ ସୁରକ୍ଷାକର୍ମୀ । ମୟୂରଭଞ୍ଜ ଜିଲ୍ଲା ଉତ୍ତର ଶିମିଳିପାଳ ଚହଲା...</h5>
                        </a>
                        <p>Tuesday,17 may 2022</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php include 'includes/sidebar_left.php'; ?>
               <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <!--================= ODISHA CONTENT ===================-->
                  <h3 class="otv-heading-new-two-article"><span>Latest Videos</span></h3>
                  <div class="odisha-large-list">
                     <div class="odisha-large-item">
                        <a href="">
                           <h3 class="otv-heading-one">ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h3>
                        </a>
                        <p class="odisha-large-item-para">ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି । </p>
                        <div class="odisha-large-item-img" >
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                        </div>
                        <div>
                           <ul class="otv-cat-time">
                              <li><a href="">World News</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li class="otv-share-social-media-add">
                                 <a><img src="images/svg/share-icon.svg"></a>
                                 <ul class="otv-article-share-style-more-one" style="display: none;">
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="odisha-large-item">
                        <a href="">
                           <h3 class="otv-heading-one">ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h3>
                        </a>
                        <p class="odisha-large-item-para">ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି । </p>
                        <div class="odisha-large-item-img" >
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                        </div>
                        <div>
                           <ul class="otv-cat-time">
                              <li><a href="">World News</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li class="otv-share-social-media-add">
                                 <a><img src="images/svg/share-icon.svg"></a>
                                 <ul class="otv-article-share-style-more-one" style="display: none;">
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="odisha-large-item">
                        <a href="">
                           <h3 class="otv-heading-one">ସ୍କୁଲ ପରେ କଲେଜଜରେ ବି କମିଲା ଖରା ଛୁଟି</h3>
                        </a>
                        <p class="odisha-large-item-para">ବାଇଲ ବଞ୍ଚାଇ ଦେଲା ଯବାନଙ୍କ ଜୀବନ । ସ୍ମାର୍ଟଫୋନ୍ ଯୋଗୁଁ ୟୁକ୍ରେନର ଜଣେ ଯବାନଙ୍କ ଜୀବନ ବଞ୍ଚି ଯାଇଛି । ୟୁକ୍ରେନ୍-ରଷିଆ ଯୁଦ୍ଧ ଭିତରେ ଏଭଳି ଏକ ଦୃଶ୍ୟ ଦେଖିବାକୁ ମିଳିଛି । </p>
                        <div class="odisha-large-item-img" >
                           <a href=""><img src="images/large-article-img.jpg"></a>
                           <span class="otv-cat-photocredit">
                           <img src="images/svg/single-camera-white.svg" width="15" height="15" alt="Photo">
                           Photo: Aparajita Sarangi Twitter</span>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                        </div>
                        <div>
                           <ul class="otv-cat-time">
                              <li><a href="">World News</a></li>
                              <li>17 March 2022</li>
                           </ul>
                           <ul class="otv-cat-share-icon">
                              <li class="otv-share-social-media-add">
                                 <a><img src="images/svg/share-icon.svg"></a>
                                 <ul class="otv-article-share-style-more-one" style="display: none;">
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                    <li>
                                       <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                           </ul>
                        </div>
                     </div>
                     <a href="" class="view-more-story">View More</a>
                  </div>
                  <h3 class="otv-heading-new-two-article"><span>Top Videos</span></h3>
                  <div class="odisha-large-list">
                     <div class="odisha-medium-item">
                        <div class="odisha-medium-item-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="odisha-medium-item-sub-img"></a>
                           <div class="odisha-medium-item-content">
                              <a href="#">
                                 <h6>ENtertainment</h6>
                              </a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                           <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
                                 <li>17 March 2022</li>
                              </ul>
                              <ul class="otv-cat-share-icon">
                                 <li class="otv-share-social-media-add">
                                    <a><img src="images/svg/share-icon.svg"></a>
                                    <ul class="otv-article-share-style-more-one" style="display: none;">
                                       <li>
                                          <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                          </a>
                                       </li>
                                       <li>
                                          <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="odisha-medium-item">
                        <div class="odisha-medium-item-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="odisha-medium-item-sub-img"></a>
                           <div class="odisha-medium-item-content">
                              <a href="#">
                                 <h6>ENtertainment</h6>
                              </a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                           <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
                                 <li>17 March 2022</li>
                              </ul>
                              <ul class="otv-cat-share-icon">
                                 <li class="otv-share-social-media-add">
                                    <a><img src="images/svg/share-icon.svg"></a>
                                    <ul class="otv-article-share-style-more-one" style="display: none;">
                                       <li>
                                          <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                          </a>
                                       </li>
                                       <li>
                                          <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="odisha-medium-item">
                        <div class="odisha-medium-item-sub">
                           <a href="#"><img src="images/medium-img.jpg" alt="" title="" class="odisha-medium-item-sub-img"></a>
                           <div class="odisha-medium-item-content">
                              <a href="#">
                                 <h6>ENtertainment</h6>
                              </a>
                              <a href="#">
                                 <h5>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା</h5>
                              </a>
                           </div>
                           <img src="images/svg/play-white.svg" class="bd-play-video" width="25" height="25" alt="" title="">
                           <div class="otv-bd-time-share">
                              <ul class="otv-bd-cat-time">
                                 <li>17 March 2022</li>
                              </ul>
                              <ul class="otv-cat-share-icon">
                                 <li class="otv-share-social-media-add">
                                    <a><img src="images/svg/share-icon.svg"></a>
                                    <ul class="otv-article-share-style-more-one" style="display: none;">
                                       <li>
                                          <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                          </a>
                                       </li>
                                       <li>
                                          <a title="Share on facebook" href="#"><img src="images/svg/facebook.svg" width="20" height="20" alt="Facebook">
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a href="#"><img src="images/svg/bookmark-gray.svg"></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <a href="" class="view-more-story">View More</a>
                  </div>
                  <!--================ //ODISHA CONTENT ==================-->
               </div>
               <?php include 'includes/sidebar_right.php'; ?>
            </div>
         </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'includes/common_js.php'; ?>
      </script>
   </body>
</html>