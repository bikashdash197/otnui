<?php include 'includes/header.php';?>
<style type="text/css">
   /*=============== BREAKING NEWS ===============*/
   section.breaking-news {
   float: left;
   width: 100%;
   margin: 0px 0px 10px 0px;
   }
   .owl-carousel.breaking-news {
   display: block;
   }
   ul.breaking-newsticker h3 {
   margin: 0px;
   padding: 0px;
   background-color: #7b0505;
   color: #fff;
   text-align: center;
   text-transform: uppercase;
   font-weight: 700;
   font-size: 16px;
   line-height: 32px;
   height: 35px;
   }
   .breaking-news-slide {
   z-index: 0 !important;
   }
   ul.breaking-newsticker {
   margin: 0px;
   padding: 0px;
   background-color: #fff;
   display: inline-block;
   width: 100%;
   position: relative;
   height: 35px;
   overflow: hidden;
   }
   ul.breaking-newsticker li {
   list-style-type: none;
   float: left;
   }
   ul.breaking-newsticker li:first-child {
   width: 147px;
   }
   ul.breaking-newsticker li:last-child {
   width: calc(100% - 150px);
   padding: 0px 80px 0px 10px;
   }
   ul.breaking-newsticker li p {
   margin: 0px;
   padding: 0px;
   font-size: 15px;
   line-height: 17px;
   font-weight: 400;
   color: #000;
   display: table-cell;
   vertical-align: middle;
   height: 35px;
   }
   ul.breaking-newsticker span {
   position: absolute;
   right: -80px;
   top: 5px;
   }
   ul.breaking-newsticker span button {
   margin: 0px 0px 0px 5px;
   background-color: #efe9e9;
   border: none;
   height: 25px;
   width: 25px;
   font-size: 11px;
   line-height: 25px;
   border-radius: 3px;
   transition-duration: .5s;
   outline: none;
   }
   ul.breaking-newsticker span button:hover {
   background-color: #f3b11c;
   transition-duration: .5s;
   }
   /*============== //BREAKING NEWS ==============*/
   /*================== NEWSLETTER SELECT BOX ====================*/
   ul.newsletter-section {
   margin: 0;
   padding: 0;
   }
   ul.newsletter-section li {
   list-style-type: none;
   float: left;
   width: 24.1%;
   margin-right: 5px;
   border: 1px solid #aaaaaa45;
   background-color: #fff;
   padding: 10px;
   margin-bottom: 15px;
   }
   ul.newsletter-section li:hover {
   box-shadow: 0 2px 8px #9a979773;
   }
   .newsletter-section-img {
   margin-bottom: 10px;
   }
   .newsletter-section-img img {
   width: 96px;
   height: auto;
   }
   span.newsletter-active {
   position: absolute;
   top: 0px;
   right: 0;
   }
   span.newsletter-active i {
   font-size: 21px;
   border: 1px solid;
   border-radius: 50%;
   width: 35px;
   height: 35px;
   text-align: center;
   padding: 6px;
   color: #000;
   }
   .newsletter-section-description {
   float: left;
   }
   span.time-show {
   font-size: 11px;
   text-transform: uppercase;
   }
   .newsletter-section-description h2 {
   margin: 0;
   font-weight: 800;
   padding: 0;
   font-size: 23px;
   }
   .newsletter-section-description h6 {
   font-size: 13px;
   font-weight: 600;
   background-color: #e1e1e1;
   padding: 4px;
   margin: 3px 0px;
   }
   .newsletter-section-description p {
   font-size: 14px;
   color: #000;
   height: 65px;
   overflow: hidden;
   line-height: 17px;
   margin: 10px 0px;
   font-weight: 500;
   }
   .newsletter-section-description a {
   border-bottom: 1px solid;
   font-size: 14px;
   text-decoration: none;
   margin: 0px;
   padding: 0px;
   color: #7b1c18;
   font-weight: 600;
   }
   .newsletter-section-start{
   position: relative;
   cursor: pointer;
   }
   .newsletter-section-start input {
   position: absolute;
   opacity: 0;
   }
   .newsletter-section-start label {
   cursor: pointer;
   }
   .newsletter-section-start label span.newsletter-active .fa-check {
   display: none;
   }
   .newsletter-section-start input:checked ~ label span.newsletter-active .fa-plus {
   display: none;
   }
   .newsletter-section-start input:checked ~ label span.newsletter-active .fa-check {
   display: block;
   background-color: #f8c81c;
   color: #fff;
   }
   ul.newsletter-form {
   margin: 0px 0px 10px 0px;
   }
   /*================= //NEWSLETTER SELECT BOX ===================*/
   /*================= SUBSCRIBE NEWSLETTER ===================*/
   section.newsletter-sec {
   float: left;
   width: 100%;
   margin: 0px 0px 25px 0px;
   padding: 0px;
   }
   div#subscribe {
   position: relative;
   }
   .newsletter-radio-field {
   position: relative;
   cursor: pointer;
   }
   .newsletter-radio-field label {
   cursor: pointer;
   }
   .newsletter-radio-field img {
   max-width: 100%;
   height: 188px;
   object-fit: cover;
   }
   .newsletter-radio-field label i {
   color: #f8c81c;
   font-size: 52px;
   position: absolute;
   padding-top: 70px;
   left: 0;
   right: 0;
   top: 0;
   margin: 0 auto;
   text-align: center;
   opacity: 0;
   transition-duration: .5s;
   background-color: rgb(33 33 33 / 84%);
   width: 100%;
   height: 97%;
   }
   .newsletter-radio-field input:checked ~ label i {
   opacity: 1;
   transition-duration: .5s;
   }
   .newsletter-radio-field input {
   position: absolute;
   opacity: 0;
   }
   .newsletter-radio-field label:before {
   content: "";
   display: block;
   position: absolute;
   width: 25px;
   height: 25px;
   right: 10px;
   top: 10px;
   background-color: #f05127;
   border-radius: 50%;
   border: solid 2px #fff;li.read-in-odia
   transition-duration: .5s;
   z-index: 1;
   }
   .newsletter-radio-field input:checked ~ label:before {
   background-color: #f8c81c;
   transition-duration: .5s;
   }
   ul.newsletter-form {
   width: 99.1%;
   margin: 0px;
   padding: 10px;
   text-align: right;
   display: inline-block;
   position: relative;
   border: solid 1px #ada9a973;
   border-top: navajowhite;
   }
   ul.newsletter-form li {
   list-style-type: none;
   display: inline-block;
   }
   ul.newsletter-form li:first-child {
   float: left;
   }
   ul.newsletter-form li h5 {
   margin: 0px;
   padding: 0px;
   line-height: 35px;
   color: #000;
   text-transform: capitalize;
   font-size: 17px;
   }
   li.newsletter-form-email {
   position: relative;
   }
   li.newsletter-form-email input {
   background-color: #fff;
   line-height: 35px;
   padding: 0px 5px 0px 45px;
   border-radius: 5px;
   outline: none;
   border: solid 1px #992520;
   }
   li.newsletter-form-email i {
   color: #8e8e8e;
   position: absolute;
   left: 10px;
   top: 5px;
   font-size: 24px;
   }
   ul.newsletter-form li button {
   background-color: #980a00;
   border: none;
   border-radius: 5px;
   line-height: 35px;
   text-transform: capitalize;
   font-size: 17px;
   color: #fff;
   padding: 0px 10px;
   margin-left: 10px;
   transition-duration: .5s;
   }
   ul.newsletter-form li button:hover {
   background-color: #212121;
   transition-duration: .5s;
   }
   ul.news-letter-radio-img {
   margin: 0px;
   padding: 0px;
   }
   ul.news-letter-radio-img li {
   list-style-type: none;
   float: left;
   width: 24.24%;
   margin-right: 6.1px;
   }
   ul.news-letter-radio-img li:last-child {
   margin-right: 0px;
   }
   /*================ //SUBSCRIBE NEWSLETTER ==================*/
   /* VIDEO */
   section.bd-video-slide-sec {
   float: left;
   width: 100%;
   background-color: #000;
   margin-bottom: 50px;
   padding-bottom: 30px;
   }
   section.bd-video-slide-sec .item ul {
   margin: 0px;
   padding: 10px;
   position: absolute;
   left: 15px;
   top: 15px;
   background-color: rgb(0 0 0 / 62%);
   border-top: solid 4px #ffac3a;
   width: 260px;
   }
   section.bd-video-slide-sec .item ul li {
   list-style-type: none;
   display: inline;
   }
   section.bd-video-slide-sec .item ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   section.bd-video-slide-sec .item ul li a {
   font-size: 14px;
   text-decoration: none;
   display: inline;
   color: #fff;
   line-height: 20px;
   transition-duration: .5s;
   }
   section.bd-video-slide-sec .item ul li:first-child a {
   color: #ffac3a;
   font-weight: 700;
   transition-duration: .5s;
   }
   section.bd-video-slide-sec .item ul li:first-child:before {
   content: "";
   display: block;
   background-color: #fff;
   width: 1px;
   height: 10px;
   position: absolute;
   top: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   .mycarouselbtn {
   background: none;
   color: #ffab23;
   border: none;
   outline: none;
   width: 30px;
   height: 30px;
   font-size: 56px;
   border-radius: 50%;
   position: absolute;
   bottom: 50%;
   z-index: 2;
   transition-duration: .5s;
   }
   .mycarouselleft {
   left: -50px;
   }
   .mycarouselright {
   right: -50px;
   }
   .mybreakingnewsCarouselbtn {
   margin: 0px 0px 0px 5px;
   background-color: #efe9e9;
   border: none;
   height: 25px;
   width: 25px;
   font-size: 11px;
   border-radius: 3px;
   transition-duration: .5s;
   line-height: 25px;
   display: inline-block;
   text-align: center;
   color: #000;
   }
   div#myCarousel button {
   background-color: rgb(254, 89, 89);
   outline: none;
   border: none;
   position: absolute;
   left: 15px;
   bottom: 15px;
   width: 60px;
   height: 60px;
   border-radius: 50%;
   color: #fff;
   font-size: 24px;
   transition-duration: .5s;
   padding: 1px 0px 0px 8px;
   }
   div#myCarousel .item img {
   width: 100%;
   height: auto;
   }
   /* //VIDEO */
   /*================ IN PICTURES =================*/
   section.inpictures-sec {
   float: left;
   width: 100%;
   margin: 0px 0px 15px 0px;
   padding: 25px 0px 0px 0px;
   }
   ul.inpictures-nav {
   margin: 0px;
   padding: 0px;
   text-align: right;
   display: inline-block;
   width: 100%;
   }
   ul.inpictures-nav li:first-child {
   float: left;
   margin-top: 7px;
   }
   ul.inpictures-nav li {
   list-style-type: none;
   display: inline-block;
   }
   ul.inpictures-nav li a {
   text-decoration: none;
   display: block;
   color: #000;
   font-weight: 700;
   font-size: 16px;
   margin-left: 25px;
   position: relative;
   transition-duration: .5s;
   }
   ul.inpictures-nav li.active a {
   color: #f3ad11;
   }
   ul.inpictures-nav li a:hover {
   color: #f05127;
   transition-duration: .5s;
   }
   ul.inpictures-nav li a:before {
   content: "";
   display: block;
   position: absolute;
   right: -15px;
   top: 4px;
   width: 2px;
   background-color: #847373;
   height: 13px;
   }
   ul.inpictures-nav li:last-child a:before {
   display: none;
   }
   .inpictures-item-two {
   position: relative;
   background-color: #333333;
   border-top: solid 4px #f05127;
   margin: 0px 0px 10px 0px;
   min-height: 247px;
   }
   .inpictures-item-two.inpicture-item-two-add:before {
   content: "";
   display: block;
   width: 1px;
   height: 98%;
   background-color: #463b3b;
   position: absolute;
   right: -16px;
   top: -4px;
   }
   .inpictures-item-two ul {
   margin: 10px;
   padding: 0px;
   max-height: 63px;
   overflow: hidden;
   }
   .inpictures-item-two ul span {
   background-color: #f05127c7;
   display: block;
   width: fit-content;
   color: #fff;
   line-height: 22px;
   font-size: 14px;
   padding: 0px 10px;
   border-radius: 2px;
   margin-top: 5px;
   }
   .inpictures-item-two ul li {
   list-style-type: none;
   display: inline;
   }
   .inpictures-item-two ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .inpictures-item-two ul li:first-child:before {
   content: "";
   display: block;
   background-color: #fff;
   width: 1px;
   height: 10px;
   position: absolute;
   bottom: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   .inpictures-item-two ul li a {
   font-size: 14px;
   text-decoration: none;
   display: inline;
   color: #fff;
   line-height: 20px;
   transition-duration: .5s;
   }
   .inpictures-item-two ul li:first-child a {
   color: #f05127;
   font-weight: 700;
   transition-duration: .5s;
   }
   .inpictures-item-two ul li a:hover {
   color: #ffab23;
   transition-duration: .5s;
   }
   .inpictures-item-two-pic {
   position: relative;
   }
   .inpictures-item-two-pic img {
   width: 100%;
   height: 101px;
   object-fit: cover;
   }
   .inpictures-item-two-pic span {
   background-color: #f05127d1;
   position: absolute;
   right: 5px;
   bottom: 5px;
   color: #fff;
   font-size: 14px;
   padding: 3px;
   border-radius: 2px;
   }
   .inpictures-item-two button {
   background-color: #f05127;
   border: none;
   color: #fff;
   padding: 0px;
   font-size: 14px;
   border-radius: 50%;
   width: 30px;
   height: 30px;
   margin: 0px 10px 10px 10px;
   }
   .inpictures-item-four {
   position: relative;
   background-color: #333333;
   border-top: solid 4px #f05127;
   margin: 0px 0px 10px 0px;
   min-height: 494px;
   }
   .inpictures-item-four-pic {
   position: relative;
   }
   .inpictures-item-four-pic img {
   width: 100%;
   height: 310px;
   object-fit: cover;
   }
   .inpictures-item-four-pic span {
   background-color: #f05127d1;
   position: absolute;
   right: 5px;
   bottom: 5px;
   color: #fff;
   font-size: 14px;
   padding: 3px;
   border-radius: 2px;
   }
   .inpictures-item-four ul {
   margin: 10px;
   padding: 0px;
   }
   .inpictures-item-four ul span {
   background-color: #f05127c7;
   display: block;
   width: fit-content;
   color: #fff;
   line-height: 22px;
   font-size: 14px;
   padding: 0px 10px;
   border-radius: 2px;
   margin-top: 5px;
   }
   .inpictures-item-four ul li {
   list-style-type: none;
   display: inline;
   }
   .inpictures-item-four ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .inpictures-item-four ul li:first-child:before {
   content: "";
   display: block;
   background-color: #fff;
   width: 1px;
   height: 10px;
   position: absolute;
   top: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   .inpictures-item-four ul li a {
   font-size: 18px;
   text-decoration: none;
   display: inline;
   color: #fff;
   line-height: 24px;
   transition-duration: .5s;
   }
   .inpictures-item-four ul li:first-child a {
   color: #f05127;
   font-weight: 700;
   transition-duration: .5s;
   }
   .inpictures-item-four ul li a:hover {
   color: #ffab23;
   transition-duration: .5s;
   }
   .inpictures-item-four button {
   background-color: #f05127;
   border: none;
   color: #fff;
   padding: 0px;
   font-size: 14px;
   border-radius: 50%;
   width: 30px;
   height: 30px;
   margin: 0px 10px 10px 10px;
   }
   .inpictures-item-four p {
   color: #fff;
   padding: 0px 10px;
   }
   .inpictures-item-three {
   position: relative;
   border-top: solid 4px #f05127;
   margin: 0px 0px 10px 0px;
   }
   .inpictures-item-three:before {
   content: "";
   display: block;
   width: 1px;
   height: 100%;
   background-color: #cecdcd;
   position: absolute;
   right: -16px;
   top: -4px;
   }
   .inpictures-item-three-pic {
   position: relative;
   }
   .inpictures-item-three-pic img {
   max-width: 100%;
   height: auto;
   }
   .inpictures-item-three-pic span {
   background-color: #f05127d1;
   position: absolute;
   right: 5px;
   bottom: 5px;
   color: #fff;
   font-size: 14px;
   padding: 3px;
   border-radius: 2px;
   }
   .inpictures-item-three ul {
   margin: 10px 0px;
   padding: 0px;
   }
   .inpictures-item-three ul span {
   background-color: #f05127c7;
   display: block;
   width: fit-content;
   color: #fff;
   line-height: 22px;
   font-size: 14px;
   padding: 0px 10px;
   border-radius: 2px;
   margin-top: 5px;
   }
   .inpictures-item-three ul li {
   list-style-type: none;
   display: inline;
   }
   .inpictures-item-three ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .inpictures-item-three ul li:first-child:before {
   content: "";
   display: block;
   background-color: #333;
   width: 1px;
   height: 10px;
   position: absolute;
   top: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   .inpictures-item-three ul li a {
   font-size: 14px;
   text-decoration: none;
   display: inline;
   color: #333;
   line-height: 20px;
   transition-duration: .5s;
   }
   .inpictures-item-three ul li:first-child a {
   color: #f05127;
   font-weight: 700;
   transition-duration: .5s;
   }
   .inpictures-item-three ul li a:hover {
   color: #ffab23;
   transition-duration: .5s;
   }
   .inpictures-item-one {
   position: relative;
   background-color: #333333;
   border-top: solid 4px #f05127;
   margin: 0px 0px 10px 0px;
   }
   .inpictures-item-one:before {
   content: "";
   display: block;
   width: 1px;
   height: 100%;
   background-color: #cecdcd;
   position: absolute;
   right: -16px;
   top: -4px;
   }
   .inpictures-item-one ul span {
   background-color: #f05127c7;
   display: block;
   width: fit-content;
   color: #fff;
   line-height: 22px;
   font-size: 14px;
   padding: 0px 10px;
   border-radius: 2px;
   margin-top: 5px;
   }
   .inpictures-item-one img {
   width: 100%;
   height: 238px;
   object-fit: cover;
   }
   .inpictures-item-one ul {
   margin: 10px;
   padding: 0px;
   max-height: 65px;
   overflow: hidden;
   }
   .inpictures-item-one ul li {
   list-style-type: none;
   display: inline;
   }
   .inpictures-item-one ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .inpictures-item-one ul li:first-child:before {
   content: "";
   display: block;
   background-color: #fff;
   width: 1px;
   height: 10px;
   position: absolute;
   bottom: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   .inpictures-item-one ul li a {
   font-size: 16px;
   text-decoration: none;
   display: inline;
   color: #fff;
   line-height: 18px;
   transition-duration: .5s;
   }
   .inpictures-item-one ul li:first-child a {
   color: #f05127;
   font-weight: 700;
   transition-duration: .5s;
   }
   .inpictures-item-one ul li a:hover {
   color: #ffab23;
   transition-duration: .5s;
   }
   .inpictures-item-one-content p {
   color: #fff;
   padding: 0px 10px;
   max-height: 100px;
   overflow: hidden;
   }
   .inpictures-item-one ul li:first-child a {
   color: #f05127;
   font-weight: bold;
   }
   .inpictures-item-one button {
   background-color: #f05127;
   border: none;
   color: #fff;
   padding: 0px;
   font-size: 14px;
   border-radius: 50%;
   width: 30px;
   height: 30px;
   margin: 0px 10px 10px 10px;
   }
   .inpictures-col-margin {
   margin: 0px;
   padding: 0px 3px;
   }
   .inpictures-row-margin {
   padding: 0px 12px;
   }
   /*=============== //IN PICTURES ================*/
   /*================== CATEGORY NEWS ====================*/
   section.category-news {
   float: left;
   width: 100%;
   margin: 0px 0px 25px 0px;
   }
   section.category-news h3 {
   position: relative;
   width: 100%;
   border-top: solid 2px #ededed;
   margin: 0px;
   padding: 0px;
   line-height: 40px;
   text-transform: uppercase;
   font-weight: 600;
   font-size: 20px;
   color: #7b1c18;
   }
   .dropbtn {
   background: none;
   color: #848484;
   padding: 0px;
   font-size: 16px;
   border: none;
   line-height: 40px;
   outline: none;
   }
   .dropdown {
   position: relative;
   display: inline-block;
   float: right;
   }
   .dropdown-content {
   display: none;
   position: absolute;
   right: 0;
   background-color: #ededed;
   width: 160px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
   }
   .dropdown-content a {
   color: #000;
   padding: 0px 0px 0px 5px;
   text-decoration: none;
   display: block;
   line-height: 30px;
   font-weight: 300;
   font-size: 14px;
   text-transform: capitalize;
   }
   .dropdown-content a:hover {background-color: #f4b01b;}
   .dropdown:hover .dropdown-content {display: block;}
   .dropdown:hover .dropbtn {
   color: #f69a2b;
   }
   .category-news-item {
   position: relative;
   padding-bottom: 10px;
   }
   .category-news-item img {
   width: 100%;
   height: 232px;
   object-fit: cover;
   margin-top: 3px;
   margin-bottom: 20px;
   }
   .category-news-item-sub img {
   width: 100%;
   height: 139px;
   object-fit: cover;
   margin-bottom: 5px;
   margin-top: 7px;
   }
   ul.category-news-item-story {
   margin: -7px 0px 0px 0px;
   padding: 0px;
   height: 47px;
   overflow: hidden;
   }
   ul.category-news-item-story li {
   list-style-type: none;
   display: inline;
   }
   ul.category-news-item-story li:first-child {
   position: relative;
   margin-right: 5px;
   }
   ul.category-news-item-story li:first-child:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 10px;
   position: absolute;
   top: 4px;
   right: -5px;
   transform: rotate(10deg);
   }
   ul.category-news-item-story li a:hover {
   color: #af262d;
   }
   ul.category-news-item-story li:first-child a {
   color: #b30707;
   }
   ul.category-news-item-story li:first-child a i {
   font-size: 11px;
   margin-top: 7px;
   position: relative;
   float: left;
   margin-right: 5px;
   }
   ul.category-news-item-story li a {
   font-size: 17px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 22px;
   }
   .category-news-item p {
   color: #666;
   font-size: 14px;
   line-height: 19px;
   height: 58px;
   overflow: hidden;
   margin: 0px;
   padding: 0px;
   }
   ul.category-news-item-time {
   margin: 0px 0px 5px 0px;
   padding: 0px;
   position: relative;
   }
   ul.category-news-item-time li {
   list-style-type: none;
   display: inline-block;
   position: relative;
   color: #666;
   font-size: 10px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 300;
   text-transform: uppercase;
   }
   ul.category-news-item-time li:last-child {
   margin-left: 20px;
   }
   li.category-news-item-share:before {
   display: none !important;
   }
   li.category-news-item-share {
   position: absolute !important;
   right: 0;
   top: 0;
   }
   ul.category-news-item-time li:last-child:before {
   content: "";
   display: block;
   position: absolute;
   left: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   .cat-more-news {
   border: none;
   color: #7b1c18;
   text-transform: capitalize;
   font-size: 12px;
   border-radius: 2px;
   float: right;
   font-weight: 700;
   margin-top: -20px;
   transition-duration: .5s;
   display: block;
   position: relative;
   }
   a.cat-more-news:after {
   font-family: "Font Awesome 5 Free";
   content: "\f30b";
   margin-left: 8px;
   }
   .cat-more-news:hover {
   color: #f4b01b;
   transition-duration: .5s;
   }
   /*================= //CATEGORY NEWS ===================*/
   /*============== GUEST COLUMN ===============*/
   section.guest-column-sec {
   float: left;
   width: 100%;
   margin: 0px 0px 30px 0px;
   background-color: #f6f6f6;
   padding-top: 30px;
   }
   .guest-column {
   background-color: #ededed;
   padding: 15px;
   border-top: solid 7px #f2f2f2;
   border-radius: 3px;
   }
   .gest-column-items {
   position: relative;
   border-right: 1px solid #cecaca;
   padding-right: 10px;
   }
   .gest-column-items img {
   max-width: 100%;
   height: auto;
   }
   .gest-column-items ul {
   margin: 10px 0px;
   padding: 0px;
   }
   .gest-column-items ul li {
   list-style-type: none;
   display: inline;
   }
   .gest-column-items ul li a {
   font-size: 19px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 21px;
   }
   .gest-column-items ul li:first-child {
   position: relative;
   margin-right: 15px;
   }
   .gest-column-items ul li:first-child:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 11px;
   position: absolute;
   top: 4px;
   right: -10px;
   transform: rotate(10deg);
   }
   .gest-column-items ul li:first-child a {
   color: #b30707;
   }
   .gest-column-items ul li a:hover {
   color: #af262d;
   }
   @keyframes bounce {
   0%, 100%, 20%, 50%, 80% {
   -webkit-transform: translateY(0);
   -ms-transform:     translateY(0);
   transform:         translateY(0)
   }
   40% {
   -webkit-transform: translateY(-30px);
   -ms-transform:     translateY(-30px);
   transform:         translateY(-30px)
   }
   60% {
   -webkit-transform: translateY(-15px);
   -ms-transform:     translateY(-15px);
   transform:         translateY(-15px)
   }
   }
   /*============= //GUEST COLUMN ==============*/
   /*=============== STORY PANEL ================*/
   section.story-panel {
   float: left;
   width: 100%;
   margin: 0px 0px 5px 0px;
   }
   section.story-panel .container .row .third-child:nth-child(3) {
   position: relative;
   margin-top: -50px;
   }
   .story-panel-item-four {
   position: relative;
   display: inline-block;
   padding-left: 100px;
   padding-bottom: 12px;
   margin: 0px 0px 12px 0px;
   min-height: 65px;
   border-bottom: solid 1px #e1dfdf;
   }
   .story-panel-item-four img {
   width: 96px;
   height: 65px;
   object-fit: cover;
   position: absolute;
   left: 0;
   top: 0;
   }
   ul.story-panel-item-four-post {
   margin: -5px 0px 0px 0px;
   padding: 0px;
   height: 50px;
   overflow: hidden;
   line-height: 16px;
   }
   ul.story-panel-item-four-post li {
   list-style-type: none;
   display: inline;
   }
   ul.story-panel-item-four-post li:first-child {
   position: relative;
   margin-right: 5px;
   }
   ul.story-panel-item-four-post li:first-child:before {
   content: "";
   display: block;
   background-color: #b30707;
   width: 1px;
   height: 9px;
   position: absolute;
   bottom: 3px;
   right: -5px;
   transform: rotate(10deg);
   }
   ul.story-panel-item-four-post li a {
   font-size: 14px;
   text-decoration: none;
   display: inline;
   color: #000;
   font-weight: 500;
   }
   ul.story-panel-item-four-post li:first-child a {
   color: #b30707;
   }
   ul.story-panel-item-four-time {
   margin: 0px;
   padding: 0px;
   }
   ul.story-panel-item-four-time li {
   list-style-type: none;
   display: inline-block;
   position: relative;
   color: #666;
   font-size: 10px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 300;
   text-transform: uppercase;
   }
   ul.story-panel-item-four-time li:first-child {
   margin-right: 23px;
   }
   ul.story-panel-item-four-time li:first-child:before {
   content: "";
   display: block;
   position: absolute;
   right: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   .featured-video {
   position: relative;
   margin: 0px 0px 25px 0px;
   }
   .featured-video p {
   font-size: 14px;
   }
   a.featured-video-readmore {
   color: #7b1c18;
   margin-left: 10px;
   width: 90px;
   display: inline-block;
   }
   .featured-image-container {
   position: relative;
   height: 372px;
   margin-bottom: 5px;
   border: 1px solid #80808047;
   padding: 5px;
   }
   .featured-video-active iframe {
   height: 360px;
   }
   .featured-video-fixed .featured-video-media {
   position: fixed;
   right: 10px;
   bottom: 10px;
   width: 428px;
   height: 256px;
   z-index: 9;
   box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.51);
   -webkit-box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.51);
   -moz-box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.51);
   border: solid 8px #fff;
   border-radius: 8px;
   }
   .featured-video-hide .featured-video-media {
   position: relative;
   right: auto;
   top: auto;
   width: 100%;
   height: auto;
   z-index: auto;
   }
   .featured-video-fixed iframe {
   width: 412px;
   height: 240px;
   }
   button.sticky-video-hide {
   color: #fff;
   width: 25px;
   height: 25px;
   background-color: #ec5836;
   border: none;
   outline: none;
   position: absolute;
   right: 0px;
   top: 0;
   }
   button.sticky-video-move {
   color: #fff;
   width: 35px;
   height: 35px;
   background-color: #697c9b;
   border: none;
   outline: none;
   position: absolute;
   left: -21px;
   top: -21px;
   border-radius: 50%;
   cursor: move;
   font-size: 20px;
   }
   .featured-video-media {
   position: relative;
   }
   #mydragdivheader {
   cursor: move;
   z-index: 999;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 0;
   }
   .featured-video p {
   color: #666;
   font-size: 14px;
   line-height: 19px;
   margin: 0px;
   padding: 5px 0px;
   }
   a.play-btn-md {
   width: 35px;
   height: 35px;
   line-height: 35px;
   text-align: center;
   background-color: rgb(16 16 16 / 60%);
   position: absolute;
   left: 15px;
   top: 15px;
   color: #fff;
   border-radius: 50%;
   font-size: 16px;
   border: none;
   outline: none;
   padding: 2px 0px 0px 3px;
   }
   .featured-video img {
   max-width: 100%;
   height: 360px;
   object-fit: cover;
   }
   .featured-video-content {
   position: absolute;
   left: 5px;
   bottom: 5px;
   width: calc(100% - 10px);
   background: linear-gradient(#0000, #000000, rgb(0 0 0));
   padding: 15px;
   padding-top: 17px;
   }
   .featured-video-content .play-btn-md {
   width: 50px;
   height: 50px;
   line-height: 50px;
   text-align: center;
   border: none;
   border-radius: 50%;
   font-size: 22px;
   background-color: #ef522969;
   color: #fff;
   padding-left: 5px;
   margin: 0px 0px 15px 0px;
   transition-duration: .5s;
   display: block; 
   }
   .featured-video-content h1 {
   margin: 0px;
   padding: 0px;
   font-size: 26px;
   color: #fff;
   font-weight: 400;
   line-height: 30px;
   font-family: 'Faustina', serif;
   }
   .featured-video:hover .play-btn-md {
   background-color: #f05127;
   transition-duration: .5s;
   }
   ul.category-news-item-time i {
   position: absolute;
   right: 0;
   top: 0;
   color: #bbb7b7;
   }
   .live-post-update {
   background-color: #f9faff;
   position: relative;
   padding: 0px;
   display: inline-block;
   width: 100%;
   margin: 10px 0px 15px 0px;
   height: 221px;
   overflow: hidden;
   }
   .live-post-update-slide-img img {
   width: 100% !important;
   height: 207px;
   object-fit: cover;
   }
   .live-post-update-slide {
   display: grid !important;
   }
   .live-post-update h3 {
   height: 25px;
   overflow: hidden;
   margin: 0px 0px 10px 0px;
   padding: 0px 0px 0px 50px;
   position: relative;
   text-transform: uppercase;
   font-weight: 700;
   font-size: 18px;
   color: #333;
   line-height: 17px;
   }
   .live-post-update h3 span {
   background-color: #ea4229;
   padding: 3px 5px;
   font-size: 16px;
   position: absolute;
   left: 0;
   top: 4px;
   color: #fff;
   }
   .live-post-update-slide-item {
   position: relative;
   margin: 5px 10px 20px 10px;
   }
   .live-post-update-slide-item-image img{
   width: 100%;
   height: auto;
   }
   .live-post-update-slide-item img {
   width: 100% !important;
   height: auto;
   }
   .live-post-update-slide-item-content {
   position: relative;
   }
   .live-post-update-slide-item ul {
   margin: 0px;
   padding: 15px;
   position: absolute;
   right: 0;
   bottom: 0;
   background-color: rgb(123 28 24 / 92%);
   height: 100%;
   line-height: 21px;
   padding-top: 13%;
   display: none;
   }
   .live-post-update-slide-item ul li {
   list-style-type: none;
   display: inline;
   }
   .live-post-update-slide-item ul li:first-child {
   position: relative;
   padding-right: 9px;
   }
   .live-post-update-slide-item ul li a {
   font-size: 17px;
   text-decoration: none;
   display: inline;
   color: #fff;
   line-height: 24px !important;
   transition-duration: .5s;
   }
   .live-post-update-slide-item ul li:first-child:before {
   content: "";
   display: block;
   background-color: #fff;
   width: 1px;
   height: 11px;
   position: absolute;
   top: 4px;
   right: 3px;
   transform: rotate(10deg);
   }
   .live-post-update-slide-item ul li a:hover {
   color: #ffab23;
   transition-duration: .5s;
   }
   .live-post-update-slide-item ul li:first-child a {
   color: #fff;
   font-weight: 700;
   transition-duration: .5s;
   }
   .live-post-update .owl-dots button {
   width: 12px;
   height: 4px;
   background-color: #7b1c18 !important;
   margin: 3px;
   transition-duration: .5s;
   }
   .live-post-update .owl-dots {
   text-align: center;
   position: absolute;
   left: 40px;
   bottom: 1px;
   right: 40px;
   z-index: 0;
   }
   a.bd-more-videosicon {
   position: absolute;
   right: 0px;
   bottom: -2px;
   z-index: 3;
   color: #7b1c18;
   font-size: 16px;
   width: 35px;
   height: 23px;
   line-height: 23px;
   text-align: center;
   }
   .live-post-update .owl-dots button.active {
   background-color: #f0af35 !important;
   }
   .live-post-update .owl-dots button span {
   display: none;
   }
   .credit {
   min-height: 586px;
   }
   .storymultiimgbtn {
   color: #f0af35;
   position: absolute;
   top: 45%;
   font-size: 30px;
   }
   .storymultiimgleft {
   left: 15px;
   }
   .storymultiimgright {
   right: 15px;
   }
   /*============== //STORY PANEL ===============*/
   /*================= CATEGORY CUSTOM ====================*/
   section.category-custom-sec {
   float: left;
   width: 100%;
   }
   .odisha-category-sec {
   background-color: #f6f6f6;
   padding: 25px 0px 15px 0px;
   margin-bottom: 25px;
   }
   .job-edu-sec {
   margin-bottom: 15px;
   }
   .category-entertainment-sec {
   background-color: #f6f6f6;
   padding: 25px 0px 15px 0px;
   }
   .live-large-box {
   position: relative;
   border-left: solid 1px #ededed;
   padding: 0px 0px 10px 15px;
   margin-bottom: 10px;
   }
   .live-large-box img {
   max-width: 100%;
   min-height: 160px;
   margin-bottom: 5px;
   }
   .live-large-box:before {
   content: "";
   display: block;
   position: absolute;
   right: -15px;
   top: 0;
   width: 1px;
   height: 100%;
   background-color: #ededed;
   }
   .live-update-label {
   border: none;
   outline: none;
   background-color: #f05127;
   color: #fff;
   text-transform: uppercase;
   font-size: 11px;
   margin: 0px;
   padding: 3px;
   border-radius: 0px;
   transition-duration: .5s;
   line-height: 14px;
   margin-bottom: 0px;
   float: left;
   margin-right: 6px;
   margin-top: 1px;
   }
   .live-large-box h2 {
   position: relative;
   font-size: 17px;
   line-height: 22px;
   color: #000;
   height: 66px;
   overflow: hidden;
   margin: 0px;
   margin-bottom: 5px;
   }
   .live-update-label:hover {
   transition-duration: .5s;
   background-color: #ffac3a;
   color: #fff;
   }
   .more-live-updates {
   outline: none;
   line-height: 15px;
   left: 0;
   bottom: 0;
   text-align: center;
   border: none;
   color: #7b1c18;
   text-transform: capitalize;
   font-size: 12px;
   border-radius: 2px;
   float: right;
   transition-duration: .5s;
   display: block;
   position: relative;
   font-weight: 600;
   }
   .more-live-updates:after {
   font-family: "Font Awesome 5 Free";
   content: "\f30b";
   margin-left: 8px;
   }
   live-large-box h2 {
   margin: 10px 0px;
   padding: 0px;
   font-size: 19px;
   font-weight: 700;
   position: relative;
   padding-left: 88px;
   }
   .live-large-box h3 {
   margin: 15px 0px;
   padding: 0px;
   text-transform: capitalize;
   font-weight: 700;
   font-size: 18px;
   }
   .live-large-box-item h6 {
   margin: 0px;
   padding: 0px 15px;
   text-transform: uppercase;
   color: #b9b4b4;
   font-family: 'Libre Franklin', sans-serif;
   font-size: 15px;
   position: absolute;
   left: -15px;
   top: 0;
   width: calc(100% + 30px);
   border-top: solid 1px #ededed;
   line-height: 30px;
   }
   .live-large-box-item h6:before {
   content: "";
   display: block;
   position: absolute;
   left: -6px;
   top: 9px;
   width: 10px;
   height: 10px;
   background-color: #f05127;
   border-radius: 50%;
   box-shadow: 0 0 0 rgb(244 176 27);
   animation: pulse 2s infinite;
   }
   .live-large-box-item h6 span {
   float: right;
   }
   .live-large-box-item {
   position: relative;
   padding-top: 35px;
   }
   .live-large-box-item h4 {
   font-weight: 300;
   color: #666;
   font-size: 15px;
   line-height: 19px;
   margin: 0px;
   padding: 5px;
   font-family: 'Libre Franklin', sans-serif;
   margin-bottom: 10px;
   }
   .live-large-box-item p {
   margin: 0px 0px 5px 0px;
   padding: 0px;
   font-size: 13px;
   color: #a78888;
   height: 72px;
   overflow: hidden;
   }
   .category-custom-four-item {
   position: relative;
   margin-bottom: 15px;
   border-bottom: solid 1px #cecdcd;
   }
   ul.category-custom-four-post {
   margin: 0px;
   padding: 0px;
   }
   ul.category-custom-four-post li {
   list-style-type: none;
   display: inline;
   }
   ul.category-custom-four-post li:first-child {
   position: relative;
   margin-right: 15px;
   }
   ul.category-custom-four-post li:first-child:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 11px;
   position: absolute;
   bottom: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   ul.category-custom-four-post li a {
   font-size: 17px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 22px;
   }
   ul.category-custom-four-post li:first-child a {
   color: #b30707;
   }
   ul.category-custom-four-post li a:hover {
   color: #af262d;
   }
   ul.category-custom-four-time {
   margin: 0px 0px 8px 0px;
   padding: 0px;
   }
   ul.category-custom-four-time li {
   list-style-type: none;
   display: inline-block;
   position: relative;
   color: #666;
   font-size: 10px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 300;
   text-transform: uppercase;
   }
   ul.category-custom-four-time li:last-child {
   margin-left: 20px;
   }
   ul.category-custom-four-time li:last-child:before {
   content: "";
   display: block;
   position: absolute;
   left: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   .category-custom-three-item {
   position: relative;
   margin: 0px 0px 15px 0px;
   display: inline-block;
   }
   .category-custom-three-item:before {
   content: "";
   display: block;
   width: 1px;
   height: 100%;
   background-color: #cecdcd;
   position: absolute;
   right: -8px;
   top: 0;
   }
   .category-custom-three-item img {
   width: 100%;
   height: 128px;
   object-fit: cover;
   }
   ul.category-custom-three-post {
   margin: 10px 0px 2px 0px;
   padding: 0px;
   height: 67px;
   overflow: hidden;
   }
   ul.category-custom-three-post li {
   list-style-type: none;
   display: inline;
   }
   ul.category-custom-three-post li:first-child {
   position: relative;
   margin-right: 15px;
   }
   ul.category-custom-three-post li:first-child:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 11px;
   position: absolute;
   bottom: 3px;
   right: -10px;
   transform: rotate(10deg);
   }
   ul.category-custom-three-post li a {
   font-size: 17px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 22px;
   }
   ul.category-custom-three-post li:first-child a {
   color: #b30707;
   }
   ul.category-custom-three-post li a:hover {
   color: #af262d;
   }
   ul.category-custom-three-time {
   margin: 0px 0px 2px 0px;
   padding: 0px;
   }
   ul.category-custom-three-time li {
   position: relative;
   list-style-type: none;
   display: inline-block;
   color: #666;
   font-size: 10px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 300;
   text-transform: uppercase;
   }
   ul.category-custom-three-time li:last-child {
   margin-left: 20px;
   }
   ul.category-custom-three-time li:last-child:before {
   content: "";
   display: block;
   position: absolute;
   left: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   .category-custom-three-item p {
   font-size: 15px;
   color: #666;
   height: 80px;
   overflow: hidden;
   }
   .category-custom-three-item span {
   float: right;
   color: #847373;
   font-size: 16px;
   }
   section.category-custom-sec h3 {
   border-bottom: solid 1px #cecdcd;
   padding-bottom: 15px;
   }
   .category-custom-one-item {
   position: relative;
   display: inline-block;
   }
   .category-custom-one-item img {
   width: 100%;
   height: 271px;
   object-fit: cover;
   }
   .category-custom-one-item:before {
   content: "";
   display: block;
   width: 1px;
   height: 100%;
   background-color: #cecdcd;
   position: absolute;
   right: -8px;
   top: 0;
   }
   ul.category-custom-one-post {
   margin: 10px 0px;
   padding: 0px;
   }
   ul.category-custom-one-post li {
   list-style-type: none;
   display: inline;
   }
   ul.category-custom-one-post li:first-child {
   position: relative;
   margin-right: 15px;
   }
   ul.category-custom-one-post li:first-child:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 12px;
   position: absolute;
   top: 2px;
   right: -10px;
   transform: rotate(10deg);
   }
   ul.category-custom-one-post li a {
   font-size: 24px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 29px;
   }
   ul.category-custom-one-post li:first-child a {
   color: #b30707;
   }
   ul.category-custom-one-post li a:hover {
   color: #af262d;
   }
   ul.category-custom-one-time {
   margin: 0px 0px 10px 0px;
   padding: 0px;
   }
   ul.category-custom-one-time li {
   list-style-type: none;
   display: inline-block;
   position: relative;
   color: #b5afaf;
   font-size: 12px;
   }
   ul.category-custom-one-time li:first-child {
   margin-right: 20px;
   }
   ul.category-custom-one-time li:first-child:after {
   content: "";
   display: block;
   position: absolute;
   right: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   .category-custom-two-item {
   position: relative;
   display: inline-block;
   width: 100%;
   padding-left: 130px;
   margin: 0px 0px 15px 0px;
   min-height: 80px;
   }
   .category-custom-two-item img {
   width: 120px;
   height: 74px;
   object-fit: cover;
   position: absolute;
   left: 0;
   top: 0;
   }
   .category-custom-two-item:before {
   content: "";
   display: block;
   width: 1px;
   height: 100%;
   background-color: #cecdcd;
   position: absolute;
   right: -8px;
   top: 0;
   }
   ul.category-custom-two-post {
   margin: -5px 0px 0px 0px;
   padding: 0px;
   max-height: 62px;
   overflow: hidden;
   }
   ul.category-custom-two-post li {
   list-style-type: none;
   display: inline;
   }
   ul.category-custom-two-post li:first-child {
   position: relative;
   margin-right: 15px;
   }
   ul.category-custom-two-post li:first-child:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 10px;
   position: absolute;
   top: 5px;
   right: -10px;
   transform: rotate(10deg);
   }
   ul.category-custom-two-post li a {
   font-size: 16px;
   text-decoration: none;
   display: inline;
   color: #000;
   line-height: 19px;
   }
   ul.category-custom-two-post li:first-child a {
   color: #b30707;
   }
   ul.category-custom-two-post li a:hover {
   color: #af262d;
   }
   ul.category-custom-two-time {
   margin: 0px;
   padding: 0px;
   }
   ul.category-custom-two-time li {
   position: relative;
   list-style-type: none;
   display: inline-block;
   color: #666;
   font-size: 10px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 300;
   text-transform: uppercase;
   }
   ul.category-custom-two-time li:first-child:before {
   content: "";
   display: block;
   position: absolute;
   right: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   ul.category-custom-two-time li:first-child {
   margin-right: 23px;
   }
   a.cat-more-news-btn {
   outline: none;
   line-height: 18px;
   padding: 0px;
   width: fit-content;
   border: none;
   color: #7b1c18;
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
   a.cat-more-news-btn:after {
   font-family: "Font Awesome 5 Free";
   content: "\f30b";
   margin-left: 8px;
   }
   a.cat-more-news-btn:hover {
   color: #f4b01b;
   transition-duration: .5s;
   }
   /* Vertical Morque */
   .spotlight-nod-container {
   overflow: hidden;
   height: 303px;
   }
   .spotlight-nod {
   position: relative;
   }
   .spotlight-nod-main {
   position: relative;
   }
   .spotlight-nod-items {
   position: relative;
   padding-bottom: 15px;
   border-left: solid 2px #f4b136;
   padding-left: 15px;
   }
   .spotlight-nod-items:before {
   content: "";
   width: 0;
   height: 0;
   border-top: 7px solid transparent;
   border-left: 10px solid #f4b136;
   border-bottom: 7px solid transparent;
   position: absolute;
   left: -2px;
   top: 0px;
   }
   .spotlight-nod-items h4 {
   font-size: 17px;
   text-decoration: none;
   display: inline-block;
   color: #000;
   line-height: 22px;
   margin: 0px;
   margin-top: -3px;
   overflow: hidden;
   height: 43px;
   font-family: 'Faustina', serif;
   }
   .spotlight-nod-items h4 a {
   color: #000;
   }
   a.cat-heading {
   color: #b30707 !important;
   position: relative;
   margin-right: 11px;
   }
   a.cat-heading:before {
   content: "";
   display: block;
   background-color: #e92b28;
   width: 1px;
   height: 10px;
   position: absolute;
   top: 8px;
   right: -6px;
   transform: rotate(10deg);
   }
   .spotlight-nod-items p {
   color: #666;
   font-size: 15px;
   line-height: 19px;
   height: 41px;
   overflow: hidden;
   margin: 0px;
   padding: 0px;
   font-family: 'Libre Franklin', sans-serif;
   }
   .spotlight-nod-items ul {
   margin: 0px;
   padding: 0px;
   position: relative;
   }
   .spotlight-nod-items ul li {
   list-style-type: none;
   display: inline-block;
   position: relative;
   color: #666;
   font-size: 10px;
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 300;
   text-transform: uppercase;
   }
   .spotlight-nod-items ul li:last-child {
   margin-left: 20px;
   }
   .spotlight-nod-items ul li:last-child:before {
   content: "";
   display: block;
   position: absolute;
   left: -16px;
   top: 4px;
   width: 7px;
   height: 7px;
   background-color: #b5afaf;
   border-radius: 50%;
   }
   /* //Vertical Morque */
   /*================ //CATEGORY CUSTOM ===================*/
   /*================= DARKMODE ===================*/
   body.dark-theme, 
   body.dark-theme ul.top-date-time li:before, 
   body.dark-theme ul.live-details-sidebar li a, 
   body.dark-theme .article-slide-sec, 
   body.dark-theme .featured-video p, 
   body.dark-theme section.guest-column-sec, 
   body.dark-theme .fixed-article-slide-sec {
   background-color: #000;
   }
   body.dark-theme ul.top-menu li a, 
   body.dark-theme ul.day-weather li, 
   body.dark-theme ul.top-date-time li a, 
   body.dark-theme section.main-error-sec h1, 
   body.dark-theme section.main-error-sec h3,
   body.dark-theme .error-home-redirect, 
   body.dark-theme ul.breaking-newsticker li p, 
   body.dark-theme h3.heading-style-one, 
   body.dark-theme .horoscope-update ul li a, 
   body.dark-theme ul.category-news-item-story li a, 
   body.dark-theme ul.story-panel-item-four-post li a, 
   body.dark-theme section.category-news h3, 
   body.dark-theme .dropbtn, 
   body.dark-theme .dropdown-content a, 
   body.dark-theme .gest-column-items ul li a, 
   body.dark-theme .gest-column-items p, 
   body.dark-theme ul.category-custom-one-post li a, 
   body.dark-theme ul.category-custom-two-post li a, 
   body.dark-theme ul.category-custom-three-post li a, 
   body.dark-theme ul.category-custom-four-post li a, 
   body.dark-theme .inpictures-item-three ul li a, 
   body.dark-theme ul.inpictures-nav li a, 
   body.dark-theme .article-slide-item ul li a, 
   body.dark-theme .article-slide-item ul li:first-child a, 
   body.dark-theme div.article-related-slide-item-story span a, 
   body.dark-theme ul.article-summery-tags-list li a, 
   body.dark-theme .article-summery-tags p, 
   body.dark-theme .article-info h1, 
   body.dark-theme .article-info p, 
   body.dark-theme span.article-content-parent, 
   body.dark-theme p.last-update-date, 
   body.dark-theme ul.article-author li, 
   body.dark-theme ul.article-author li a, 
   body.dark-theme .article-caption p, 
   body.dark-theme .article-content p, 
   body.dark-theme .article-content:first-letter, 
   body.dark-theme .content-inline-highlights h3, 
   body.dark-theme .inside-also-read h3, 
   body.dark-theme .inside-also-read-items h4, 
   body.dark-theme .news-summery h2, 
   body.dark-theme .news-summery ul li, 
   body.dark-theme ul.sidebar-story-item-post li a, 
   body.dark-theme .sbar-live-tv h3, 
   body.dark-theme .live-large-box h2, 
   body.dark-theme .live-large-box h3, 
   body.dark-theme .live-large-box-item h4, 
   body.dark-theme ul.search-button li input::placeholder, 
   body.dark-theme .search-heading, 
   body.dark-theme .search-result-news-content p, 
   body.dark-theme .search-result-news-content h5 a, 
   body.dark-theme ul.search-result-pagination li a, 
   body.dark-theme .sidebar-item-slide ul li a, 
   body.dark-theme .sidebar-item-slide h4, 
   body.dark-theme .sidebar-item-slide ul li, 
   body.dark-theme .listing-heading, 
   body.dark-theme ul.listing-result-news-content li h5 a, 
   body.dark-theme ul.listing-result-news-content li p, 
   body.dark-theme .listing-result-news-subcontent ul li a, 
   body.dark-theme .listing-result-news-subcontent ul li, 
   body.dark-theme h1.heading-style-one, 
   body.dark-theme .city-gallery-content a h3, 
   body.dark-theme .city-gallery-content h6, 
   body.dark-theme .city-news h2, 
   body.dark-theme h2.city-latest-stories, 
   body.dark-theme .contact-form h2, 
   body.dark-theme .support-enquiries h2, 
   body.dark-theme .support-enquiries p, 
   body.dark-theme .contact-us-list1 h4, 
   body.dark-theme .contact-us-list1 ul li, 
   body.dark-theme .contact-us-list1 ul li span a, 
   body.dark-theme .contact-us-list2 ul li, 
   body.dark-theme .contact-us-list2 ul li a, 
   body.dark-theme .office-lacation-list h3,
   body.dark-theme .office-lacation-list p, 
   body.dark-theme .live-details-heading h1, 
   body.dark-theme .live-details-heading ul li a, 
   body.dark-theme .live-details-content h4, 
   body.dark-theme .live-details-content h5, 
   body.dark-theme .live-details-content h5 span, 
   body.dark-theme .live-details-content ul li a, 
   body.dark-theme .live-details-time p, 
   body.dark-theme .live-details-time p span, 
   body.dark-theme ul.live-details-sidebar li a span, 
   body.dark-theme ul.live-details-sidebar li a, 
   body.dark-theme .odisha-page-heading h3, 
   body.dark-theme .odisha-page-heading p, 
   body.dark-theme .odisha-page-city h2, 
   body.dark-theme ul.odisha-city-list li a, 
   body.dark-theme a.odisha-page-morenews, 
   body.dark-theme a.darkmode-btn, 
   body.dark-theme button.prevartslide:hover, 
   body.dark-theme button.nextartslide:hover, 
   body.dark-theme .sbar-gallery-slide-item ul li a, 
   body.dark-theme a.cat-more-news-btn, 
   body.dark-theme .cat-more-news, 
   body.dark-theme .about-us-content h2, 
   body.dark-theme .about-us-content-para p, 
   body.dark-theme h2.about-us-link, 
   body.dark-theme ul.about-us-web-link li, 
   body.dark-theme .otv-faqs h1, 
   body.dark-theme .otv-faqs-text p, 
   body.dark-theme ul.live-details-bredcum li a, 
   body.dark-theme ul.live-details-bredcum li:before, 
   body.dark-theme .credit-item p, 
   body.dark-theme .article-content h5, 
   body.dark-theme .listing-result-news p, 
   body.dark-theme .listing-result-news h5, 
   body.dark-theme .author-aboutus p, 
   body.dark-theme p.contact-line, 
   body.dark-theme .live-details-heading p, 
   body.dark-theme ul.search-button li input, 
   body.dark-theme .article-related-slide-item p, 
   body.dark-theme ul.newsletter-form li h5, 
   body.dark-theme span.newsletter-active i, 
   body.dark-theme .newsletter-section-description p, 
   body.dark-theme .newsletter-section-description a, 
   body.dark-theme .newsletter-section-description h2, 
   body.dark-theme span.time-show, 
   body.dark-theme .featured-video p, 
   body.dark-theme a.featured-video-readmore, 
   body.dark-theme .nod-info h1, 
   body.dark-theme ul.nod-author li, 
   body.dark-theme .nod-content-list h2, 
   body.dark-theme .nod-content p, 
   body.dark-theme .nod-info-content p, 
   body.dark-theme .static-page-info h1, 
   body.dark-theme .static-content table tbody tr td, 
   body.dark-theme .search-result-news-content h5, 
   body.dark-theme .static-content p, 
   body.dark-theme .tab-content h2, 
   body.dark-theme .article-content li, 
   body.dark-theme .inside-also-read-items h4 a, 
   body.dark-theme .live-details-content p, 
   body.dark-theme span.trc_rbox_header_span, 
   body.dark-theme .article-content li, 
   body.dark-theme .article-content, 
   body.dark-theme .contact-us-list1 ul li, 
   body.dark-theme .video-gallery-details-heading, 
   body.dark-theme .photo-gallery-content p, 
   body.dark-theme .inpictures-item-two2 ul li a, 
   body.dark-theme h3.heading-style-one-normal, 
   body.dark-theme .spotlight-nod-items h4 a, 
   body.dark-theme .nod-content, 
   body.dark-theme ul.category-custom-four-time li, 
   body.dark-theme ul.category-custom-three-time li, 
   body.dark-theme ul.category-custom-two-time li, 
   body.dark-theme ul.category-news-item-time li, 
   body.dark-theme .spotlight-nod-items p, 
   body.dark-theme .spotlight-nod-items ul li {
   color: #fff !important;
   }
   body.dark-theme ul.breaking-newsticker, 
   body.dark-theme .dropdown-content, 
   body.dark-theme .content-inline-highlights, 
   body.dark-theme .inside-also-read, 
   body.dark-theme .news-summery, 
   body.dark-theme .article-sbar-item, 
   body.dark-theme ul.search-button li input, 
   body.dark-theme .sidebar-slide-main, 
   body.dark-theme .city-news, 
   body.dark-theme form.contactus, 
   body.dark-theme .offic-location, 
   body.dark-theme .live-details-content, 
   body.dark-theme ul.live-details-sidebar, 
   body.dark-theme .odisha-page-city, 
   body.dark-theme .odisha-page-city-content, 
   body.dark-theme .otv-faqs .panel, 
   body.dark-theme ul.newsletter-section li, 
   body.dark-theme .nod-content, 
   body.dark-theme .nod-info-content {
   background-color: #333;
   }
   body.dark-theme .guest-column, 
   body.dark-theme .article-slide-item, 
   body.dark-theme .inside-also-read, 
   body.dark-theme .news-summery {
   border: none;
   }
   body.dark-theme section.category-custom-sec, 
   body.dark-theme section.inpictures-sec,
   body.dark-theme .guest-column, 
   body.dark-theme .partners, 
   body.dark-theme .article-related-slide-item {
   background: none;
   }
   body.dark-theme button.prevartslide {
   background: linear-gradient(-90deg, rgba(0,212,255,0) 0%, rgb(45 45 45 / 85%) 46%);
   }
   body.dark-theme button.nextartslide {
   background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgb(45 45 45 / 85%) 46%);
   }
   body.dark-theme .category-news-item p, 
   body.dark-theme .category-custom-three-item p, 
   body.dark-theme .about-us-content h3, 
   body.dark-theme .about-us-content h4, 
   body.dark-theme ul.live-details-bredcum li:last-child {
   color: #fff;
   }
   body.dark-theme ul.category-news-item-story li:first-child:before,
   body.dark-theme ul.story-panel-item-four-post li:first-child:before {
   background-color: #fff;
   }
   body.dark-theme {
   border-color: #fff;
   }
   /*================ //DARKMODE ==================*/
</style>
<div class="otv-970-250-ad"></div>
<section class="breaking-news">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <ul class="breaking-newsticker">
               <li>
                  <h3>Breaking News</h3>
               </li>
               <li>
                  <div id="mybreakingnewsCarousel" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="item">
                           <a title="ICAI Chief Stirs Controversy Asking Auditors, Accountants To Use Hindi" href="https://odishatv.in/news/national/icai-chief-stirs-controversy-asking-auditors-accountants-to-use-hindi-162468">
                              <p>ICAI Chief Stirs Controversy Asking Auditors, Accountants To Use Hindi</p>
                           </a>
                        </div>
                        <div class="item">
                           <a title="EWS-OBC Quota: SC Tells Centre To Put On Hold NEET-PG Counselling, Centre Agrees" href="https://odishatv.in/news/education/ews-obc-quota-sc-tells-centre-to-put-on-hold-neet-pg-counselling-centre-agrees-162467">
                              <p>EWS-OBC Quota: SC Tells Centre To Put On Hold NEET-PG Counselling, Centre Agrees</p>
                           </a>
                        </div>
                        <div class="item">
                           <a title="Watch Video: How Rashmika Mandanna Wrestles With Anger!" href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466">
                              <p>Watch Video: How Rashmika Mandanna Wrestles With Anger!</p>
                           </a>
                        </div>
                        <div class="item">
                           <a title="Nine Medical Colleges In Uttar Pradesh Inaugurated By PM Modi" href="https://odishatv.in/news/national/nine-medical-colleges-in-uttar-pradesh-inaugurated-by-pm-modi-162465">
                              <p>Nine Medical Colleges In Uttar Pradesh Inaugurated By PM Modi</p>
                           </a>
                        </div>
                        <div class="item active">
                           <a title="Schools Reopen For Class 8 Students In Odisha" href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463">
                              <p>Schools Reopen For Class 8 Students In Odisha</p>
                           </a>
                        </div>
                        <div class="item">
                           <a title="Rashmika Mandanna Vents Her Anger Out #WATCH" href="https://odishatv.in/news/entertainment/rashmika-mandanna-vents-her-anger-out-watch-162462">
                              <p>Rashmika Mandanna Vents Her Anger Out #WATCH</p>
                           </a>
                        </div>
                        <div class="item">
                           <a title="Remand Ends, Mamita Murder Accused Gobinda Sahu Sent To Jail" href="https://odishatv.in/news/crime/remand-ends-mamita-murder-accused-gobinda-sahu-sent-to-jail-162461">
                              <p>Remand Ends, Mamita Murder Accused Gobinda Sahu Sent To Jail</p>
                           </a>
                        </div>
                        <div class="item">
                           <a title="Why TCS, Infosys, Wipro, HCL Are After Freshers!" href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460">
                              <p>Why TCS, Infosys, Wipro, HCL Are After Freshers!</p>
                           </a>
                        </div>
                     </div>
                     <span>
                     <a class="mybreakingnewsCarouselleft mybreakingnewsCarouselbtn" href="#mybreakingnewsCarousel" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                     <a class="mybreakingnewsCarouselright mybreakingnewsCarouselbtn" href="#mybreakingnewsCarousel" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                     </span> 
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="story-panel">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 third-child">
            <div class="featured-video">
               <div class="featured-image-container ">
                  <a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635132794.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635132794.jpg" alt="" title="BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj" width="640" height="360"></a>
                  <div class="featured-video-content">
                     <a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454">
                        <h1>BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj</h1>
                     </a>
                  </div>
               </div>
               <p>BJP members including the workers of the party’s women wing picketed at Palabani Chhak on National Highway-49 in Baripada disrupting traffic movement on the route. The BJP supporters also stopped vehicles at Udala, Karanjia and Rairangpur.<a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454" class="featured-video-readmore">Read more <i class="fas fa-long-arrow-alt-right"></i></a></p>
            </div>
            <div class="row">
               <div class="col-lg-5 col-md-5 col-xs-12">
                  <div class="category-news-item category-news-item-sub">
                     <ul class="category-news-item-story">
                        <li><a href="https://odishatv.in/tag/odisha"> Odisha</a></li>
                        <li><a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442">Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;</a></li>
                     </ul>
                     <a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" alt="" title="Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;" width="224" height="126"></a>
                     <ul class="category-news-item-time">
                        <li>Odisha</li>
                        <li>15 hours ago </li>
                     </ul>
                     <p>In just 24 hours after a report surfaced from the district alleging rape and murder of a minor, body of...</p>
                  </div>
               </div>
               <div class="col-lg-7 col-md-7 col-xs-12">
                  <div class="category-news-item">
                     <ul class="category-news-item-story">
                        <li><a href="https://odishatv.in/tag/bjd-politics-in-nabarangpur"> BJD Politics In Nabarangpur</a></li>
                        <li><a href="https://odishatv.in/news/exclusive/rahul-gandhi-s-confidante-pradeep-majhi-quits-cong-to-join-bjd-may-go-to-rajya-sabha-next-year-162440">Rahul Gandhi's Confidante Pradeep Majhi Quits Cong, To Join BJD; May Go To Rajya Sabha Next Year</a></li>
                     </ul>
                     <ul class="category-news-item-time">
                        <li>Odisha</li>
                        <li>15 hours ago </li>
                     </ul>
                     <p>The sharp rise of BJP in 2019 compelled the BJD core team to wean Pradeep Majhi into their fold. But...</p>
                  </div>
                  <div class="category-news-item">
                     <ul class="category-news-item-story">
                        <li><a href="https://odishatv.in/tag/rutaparna-panda"> Rutaparna Panda</a></li>
                        <li><a href="https://odishatv.in/news/sports/shuttler-rutaparna-panda-to-get-ekalabya-puraskar-for-2021-162418">Shuttler Rutaparna Panda To Get Ekalabya Puraskar For 2021</a></li>
                     </ul>
                     <ul class="category-news-item-time">
                        <li>Odisha</li>
                        <li>19 hours ago </li>
                     </ul>
                  </div>
                  <div class="category-news-item">
                     <ul class="category-news-item-story">
                        <li><a href="https://odishatv.in/politics"> Politics</a></li>
                        <li><a href="https://odishatv.in/news/politics/odisha-bjp-poser-to-cm-naveen-patnaik-take-stand-on-cbi-probe-action-against-minister-162416">Odisha BJP Poser To CM Naveen Patnaik: Take Stand On CBI Probe &amp; Action Against Minister In Mamita Murder Case</a></li>
                     </ul>
                     <ul class="category-news-item-time">
                        <li>Odisha</li>
                        <li>20 hours ago </li>
                     </ul>
                  </div>
                  <div class="category-news-item">
                     <ul class="category-news-item-story">
                        <li><a href="https://odishatv.in/tag/odisha"> Odisha</a></li>
                        <li><a href="https://odishatv.in/news/miscellaneous/land-house-value-likely-to-go-up-as-odisha-plans-to-revise-bmv-of-immovable-properties-162415">Land, House Value Likely To Go Up As Odisha Plans To Revise BMV Of Immovable Properties</a></li>
                     </ul>
                     <ul class="category-news-item-time">
                        <li>Odisha</li>
                        <li>20 hours ago </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  third-child">
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/t-55-battle-tank"> T-55 Battle Tank</a></li>
                  <li><a href="https://odishatv.in/news/miscellaneous/india-s-mighty-t-55-battle-tank-now-a-showpiece-in-odisha-college-162446">India's Mighty T-55 Battle Tank Now A Showpiece In Odisha College</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>Odisha</li>
                  <li>14 hours ago </li>
                  <!--<li class="category-news-item-share"><a href="#"><i class="fas fa-share-alt"></i></a></li>-->
               </ul>
               <p>Do you have plans to visit Kendrapara, if yes, then now you can catch glimpse of glorious history...</p>
            </div>
            <div class="live-post-update">
               <a href="https://odishatv.in/videos" class="bd-more-videosicon"><i class="fas fa-long-arrow-alt-right"></i></a>
               <div id="mywatchCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="item">
                        <div class="live-post-update-slide-item">
                           <a href="https://odishatv.in/videos">
                              <h3><span>Watch</span></h3>
                           </a>
                           <div class="live-post-update-slide-item-content">
                              <a href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635143396.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635143396.jpg" alt="" title="Rashmika Mandanna " width="400" height="225"></a>
                              <ul>
                                 <li><a href="https://odishatv.in/videos">Watch</a></li>
                                 <li><a href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466">Watch Video: How Rashmika Mandanna Wrestles With Anger!</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="live-post-update-slide-item">
                           <a href="https://odishatv.in/videos">
                              <h3><span>Watch</span></h3>
                           </a>
                           <div class="live-post-update-slide-item-content">
                              <a href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635139639.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635139639.jpg" alt="" title="TCS, Infosys, Wipro, HCL" width="400" height="225"></a>
                              <ul>
                                 <li><a href="https://odishatv.in/videos">Watch</a></li>
                                 <li><a href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460">Why TCS, Infosys, Wipro, HCL Are After Freshers!</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="live-post-update-slide-item">
                           <a href="https://odishatv.in/videos">
                              <h3><span>Watch</span></h3>
                           </a>
                           <div class="live-post-update-slide-item-content">
                              <a href="https://odishatv.in/videos/education/cbse-term-1-exam-students-happy-with-offline-board-exams-check-out-reactions-162455"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635133426.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635133426.jpg" alt="" title="CBSE Students" width="400" height="225"></a>
                              <ul>
                                 <li><a href="https://odishatv.in/videos">Watch</a></li>
                                 <li><a href="https://odishatv.in/videos/education/cbse-term-1-exam-students-happy-with-offline-board-exams-check-out-reactions-162455">CBSE Term-1 Board Exam: Are Students Happy With Offline Exams? Check Out Reactions</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="item active">
                        <div class="live-post-update-slide-item">
                           <a href="https://odishatv.in/videos">
                              <h3><span>Watch</span></h3>
                           </a>
                           <div class="live-post-update-slide-item-content">
                              <a href="https://odishatv.in/videos/miscellaneous/giant-python-in-snake-helpline-member-s-house-in-malkangiri-rescued-safely-162452"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635132169.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635132169.jpg" alt="" title="Python Rescued In Malkangiri" width="400" height="225"></a>
                              <ul>
                                 <li><a href="https://odishatv.in/videos">Watch</a></li>
                                 <li><a href="https://odishatv.in/videos/miscellaneous/giant-python-in-snake-helpline-member-s-house-in-malkangiri-rescued-safely-162452">Giant Python In Snake Helpline Member's House In Malkangiri Rescued Safely</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="live-post-update-slide-item">
                           <a href="https://odishatv.in/videos">
                              <h3><span>Watch</span></h3>
                           </a>
                           <div class="live-post-update-slide-item-content">
                              <a href="https://odishatv.in/videos/national/mann-ki-baat-pm-modi-recalls-birsa-munda-s-contribution-to-country-162426"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635078150.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635078150.jpg" alt="" title="PM Modi Recalls Birsa Munda" width="400" height="225"></a>
                              <ul>
                                 <li><a href="https://odishatv.in/videos">Watch</a></li>
                                 <li><a href="https://odishatv.in/videos/national/mann-ki-baat-pm-modi-recalls-birsa-munda-s-contribution-to-country-162426">Mann Ki Baat: PM Modi Recalls Birsa Munda’s Contribution To Country</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/covid-19"> COVID-19</a></li>
                  <li><a href="https://odishatv.in/news/covid-19/global-covid-19-caseload-tops-243-6-million-162450">Global Covid-19 Caseload Tops 243.6 Million</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>4 hours ago </li>
                  <!--<li class="category-news-item-share"><a href="#"><i class="fas fa-share-alt"></i></a></li>-->
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/james-michael-tyler"> James Michael Tyler</a></li>
                  <li><a href="https://odishatv.in/news/entertainment/-friends-actor-james-michael-tyler-passes-away-162453">'Friends' Actor James Michael Tyler Passes Away</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>3 hours ago </li>
                  <!--<li class="category-news-item-share"><a href="#"><i class="fas fa-share-alt"></i></a></li>-->
               </ul>
               <p>Beyond 'Friends', Tyler's acting credits stretch back to 1992, including series like 'Sabrina the Teenage Witch', 'Scrubs' and 'Modern Music'.</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/sbi-recruitment-2021"> SBI Recruitment 2021</a></li>
                  <li><a href="https://odishatv.in/news/jobs/sbi-recruitment-2021-last-day-alert-to-apply-for-over-2000-po-posts-check-details-162451">SBI Recruitment 2021: Last Day Alert To Apply For Over 2000 PO Posts, Check Details</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>4 hours ago </li>
                  <!--<li class="category-news-item-share"><a href="#"><i class="fas fa-share-alt"></i></a></li>-->
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/virat-kohli"> Virat Kohli</a></li>
                  <li><a href="https://odishatv.in/news/sports/t20-world-cup-we-know-exactly-where-the-game-went-wrong-says-kohli-162449">T20 World Cup: We Know Exactly Where The Game Went Wrong, Says Kohli</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>5 hours ago </li>
                  <!--<li class="category-news-item-share"><a href="#"><i class="fas fa-share-alt"></i></a></li>-->
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/aryan-khan-drug-case"> Aryan Khan Drug Case</a></li>
                  <li><a href="https://odishatv.in/news/miscellaneous/guard-me-from-legal-action-ncb-s-sameer-wankede-appeals-to-mumbai-top-cop-162447">Guard Me From 'Legal Action', NCB's Sameer Wankhede Appeals To Mumbai Top Cop</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>14 hours ago </li>
                  <!--<li class="category-news-item-share"><a href="#"><i class="fas fa-share-alt"></i></a></li>-->
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 third-child">
            <h3 class="heading-style-one">Odisha News</h3>
            <div class="story-panel-item-four">
               <a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" alt="" title="Schools Reopen For Class 8 Students In Odisha" width="96" height="65"></a>
               <ul class="story-panel-item-four-post">
                  <li><a href="https://odishatv.in/tag/reopening-of-schools"> Reopening Of Schools</a></li>
                  <li><a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463">Schools Reopen For Class 8 Students In Odisha</a></li>
               </ul>
               <ul class="story-panel-item-four-time">
                  <li>Odisha</li>
                  <li>1 hour ago </li>
               </ul>
            </div>
            <div class="story-panel-item-four">
               <a href="https://odishatv.in/news/crime/remand-ends-mamita-murder-accused-gobinda-sahu-sent-to-jail-162461"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634915986.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634915986.jpg" alt="" title="Mamita Murder Case" width="96" height="65"></a>
               <ul class="story-panel-item-four-post">
                  <li><a href="https://odishatv.in/tag/mamita-murder-case"> Mamita Murder Case</a></li>
                  <li><a href="https://odishatv.in/news/crime/remand-ends-mamita-murder-accused-gobinda-sahu-sent-to-jail-162461">Remand Ends, Mamita Murder Accused Gobinda Sahu Sent To Jail</a></li>
               </ul>
               <ul class="story-panel-item-four-time">
                  <li>Odisha</li>
                  <li>1 hour ago </li>
               </ul>
            </div>
            <div class="story-panel-item-four">
               <a href="https://odishatv.in/news/politics/mamita-murder-case-bjp-to-observe-12-hour-bandh-in-sambalpur-162458"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635077004.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635077004.jpg" alt="" title="Mamita Murder Case" width="96" height="65"></a>
               <ul class="story-panel-item-four-post">
                  <li><a href="https://odishatv.in/tag/mamita-murder-case"> Mamita Murder Case</a></li>
                  <li><a href="https://odishatv.in/news/politics/mamita-murder-case-bjp-to-observe-12-hour-bandh-in-sambalpur-162458">Mamita Murder Case: BJP To Observe 12-Hour Bandh In Sambalpur</a></li>
               </ul>
               <ul class="story-panel-item-four-time">
                  <li>Odisha</li>
                  <li>2 hours ago </li>
               </ul>
            </div>
            <div class="story-panel-item-four">
               <a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635132794.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635132794.jpg" alt="" title="BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj" width="96" height="65"></a>
               <ul class="story-panel-item-four-post">
                  <li><a href="https://odishatv.in/tag/mayurbhanj-bandh"> Mayurbhanj Bandh</a></li>
                  <li><a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454">BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj</a></li>
               </ul>
               <ul class="story-panel-item-four-time">
                  <li>Odisha</li>
                  <li>3 hours ago </li>
               </ul>
            </div>
            <div class="story-panel-item-four">
               <a href="https://odishatv.in/news/miscellaneous/india-s-mighty-t-55-battle-tank-now-a-showpiece-in-odisha-college-162446"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635094774.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635094774.jpg" alt="" title="India's Mighty T-55 Battle Tank Now A Showpiece In Odisha College" width="96" height="65"></a>
               <ul class="story-panel-item-four-post">
                  <li><a href="https://odishatv.in/tag/t-55-battle-tank"> T-55 Battle Tank</a></li>
                  <li><a href="https://odishatv.in/news/miscellaneous/india-s-mighty-t-55-battle-tank-now-a-showpiece-in-odisha-college-162446">India's Mighty T-55 Battle Tank Now A Showpiece In Odisha College</a></li>
               </ul>
               <ul class="story-panel-item-four-time">
                  <li>Odisha</li>
                  <li>14 hours ago </li>
               </ul>
            </div>
            <div class="story-panel-item-four">
               <a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" alt="" title="Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;" width="96" height="65"></a>
               <ul class="story-panel-item-four-post">
                  <li><a href="https://odishatv.in/tag/odisha"> Odisha</a></li>
                  <li><a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442">Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;</a></li>
               </ul>
               <ul class="story-panel-item-four-time">
                  <li>Odisha</li>
                  <li>15 hours ago </li>
               </ul>
            </div>
            <div class="otv-300-250-ad">
               <!-- /370089190/Direct_Ads_ATF_300x250_Desktop -->
               <div id="div-gpt-ad-1620358959145-0" style="width: 300px; height: 250px;" data-google-query-id="CMyoifr75PMCFVYQtwAdJtMBIQ">
                  <div id="google_ads_iframe_/370089190/Direct_Ads_ATF_300x250_Desktop_0__container__" style="border: 0pt none;">
                     <iframe id="google_ads_iframe_/370089190/Direct_Ads_ATF_300x250_Desktop_0" title="3rd party ad content" name="google_ads_iframe_/370089190/Direct_Ads_ATF_300x250_Desktop_0" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="2" data-load-complete="true"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="category-custom-sec odisha-category-sec">
   <div class="container">
      <h3 class="heading-style-one">Odisha</h3>
      <div class="row">
         <div class="col-lg-9 col-md-9">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                  <div class="category-custom-two-item" style="border-top: none;">
                     <a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" alt="" title="Schools Reopen For Class 8 Students In Odisha" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/reopening-of-schools"> Reopening Of Schools</a></li>
                        <li><a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463">Schools Reopen For Class 8 Students In Odisha</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>1 hour ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item" style="border-top: none;">
                     <a href="https://odishatv.in/news/crime/remand-ends-mamita-murder-accused-gobinda-sahu-sent-to-jail-162461"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634915986.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634915986.jpg" alt="" title="Mamita Murder Case" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/mamita-murder-case"> Mamita Murder Case</a></li>
                        <li><a href="https://odishatv.in/news/crime/remand-ends-mamita-murder-accused-gobinda-sahu-sent-to-jail-162461">Remand Ends, Mamita Murder Accused Gobinda Sahu Sent To Jail</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>1 hour ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item" style="border-top: none;">
                     <a href="https://odishatv.in/news/politics/mamita-murder-case-bjp-to-observe-12-hour-bandh-in-sambalpur-162458"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635077004.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635077004.jpg" alt="" title="Mamita Murder Case" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/mamita-murder-case"> Mamita Murder Case</a></li>
                        <li><a href="https://odishatv.in/news/politics/mamita-murder-case-bjp-to-observe-12-hour-bandh-in-sambalpur-162458">Mamita Murder Case: BJP To Observe 12-Hour Bandh In Sambalpur</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>2 hours ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item" style="border-top: none;">
                     <a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635132794.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635132794.jpg" alt="" title="BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/mayurbhanj-bandh"> Mayurbhanj Bandh</a></li>
                        <li><a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454">BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>3 hours ago </li>
                     </ul>
                  </div>
                  <a href="https://odishatv.in/education" class="cat-more-news-btn">More</a>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/miscellaneous/india-s-mighty-t-55-battle-tank-now-a-showpiece-in-odisha-college-162446"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635094774.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635094774.jpg" alt="" title="India's Mighty T-55 Battle Tank Now A Showpiece In Odisha College" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/t-55-battle-tank"> T-55 Battle Tank</a></li>
                              <li><a href="https://odishatv.in/news/miscellaneous/india-s-mighty-t-55-battle-tank-now-a-showpiece-in-odisha-college-162446">India's Mighty T-55 Battle Tank Now A Showpiece In Odisha College</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>Odisha</li>
                              <li>14 hours ago </li>
                           </ul>
                           <p>Do you have plans to visit Kendrapara, if yes, then now you can catch glimpse...</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1631351466.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1631351466.jpg" alt="" title="Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/odisha"> Odisha</a></li>
                              <li><a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442">Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>Odisha</li>
                              <li>15 hours ago </li>
                           </ul>
                           <p>In just 24 hours after a report surfaced from the district alleging rape and murder...</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="category-custom-four">
               <!-- VERTICAL MARQUE -->
               <h3 class="heading-style-one-normal">Other News Updates from Odisha </h3>
               <div class="spotlight-nod-container">
                  <div class="spotlight-nod-main spotlight-nod" style="margin-top: -121.6px; top: -76.8435px;">
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking5">India's Mighty T-55 Battle Tank Now A Showpiece In Odisha College</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>14 hours ago </li>
                        </ul>
                        <p>Do you have plans to visit Kendrapara, if yes, then now you can catch glimpse of glorious history of India’s...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking6">Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>15 hours ago </li>
                        </ul>
                        <p>In just 24 hours after a report surfaced from the district alleging rape and murder of a minor, body of...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking7">Rahul Gandhi's Confidante Pradeep Majhi Quits Cong, To Join BJD; May Go To Rajya Sabha Next Year</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>15 hours ago </li>
                        </ul>
                        <p>The sharp rise of BJP in 2019 compelled the BJD core team to wean Pradeep Majhi into their fold. But...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking8">Covid-Hit Odisha Youth Amrit Breathes New Air, Undergoes Lung Transplant</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>15 hours ago </li>
                        </ul>
                        <p>Doctors at the Chennai Apollo Hospitals breathed a new life into 24-year-old Odisha youth Amrit Pradhan who has been suffering...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking9">Women's Hockey Nationals: Easy Wins For Odisha, MP, AP, Punjab</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>16 hours ago </li>
                        </ul>
                        <p>In the first match of the day, Odisha defeated Chhattisgarh Hockey 3-0 in their Pool D match. Janhabi Pradhan (13'),...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking1">Schools Reopen For Class 8 Students In Odisha</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>1 hour ago </li>
                        </ul>
                        <p>The School and Mass Education Department had earlier decided to reopen physical classes for Standard 11 and 8 from October...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking2">Remand Ends, Mamita Murder Accused Gobinda Sahu Sent To Jail</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>1 hour ago </li>
                        </ul>
                        <p>Earlier on Wednesday, Bolangir Police had produced Sahu before the Judicial Magistrate First Class (JMFC) Court in Bangomunda which allowed...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking3">Mamita Murder Case: BJP To Observe 12-Hour Bandh In Sambalpur</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>2 hours ago </li>
                        </ul>
                        <p>The party workers will ensure all the markets, shops, business establishments, government and non-government organisations remain shut during the dawn-to-dusk...</p>
                     </div>
                     <div class="spotlight-nod-items">
                        <h4>
                           <!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448#breaking4">BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj</a>
                        </h4>
                        <ul>
                           <li>Odisha</li>
                           <li>3 hours ago </li>
                        </ul>
                        <p>BJP members including the workers of the party’s women wing picketed at Palabani Chhak on National Highway-49 in Baripada disrupting...</p>
                     </div>
                  </div>
               </div>
               <a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2021/10/25-162448" class="cat-more-news-btn">More</a>
               <!-- //VERTICAL MARQUE -->
            </div>
            <div class="otv-300-50-ad">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="category-custom-sec job-edu-sec">
   <div class="container">
      <h3 class="heading-style-one">JOBS AND EDUCATION</h3>
      <div class="row">
         <div class="col-lg-9 col-md-9">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                  <div class="category-custom-one-item">
                     <a href="https://odishatv.in/news/education/ews-obc-quota-sc-tells-centre-to-put-on-hold-neet-pg-counselling-centre-agrees-162467"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635143751.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635143751.jpg" alt="" title="EWS-OBC Quota: SC Tells Centre To Put On Hold NEET-PG Counselling, Centre Agrees" width="640" height="360"></a>
                     <ul class="category-custom-one-post">
                        <li><a href="https://odishatv.in/tag/ews-quota"> EWS Quota</a></li>
                        <li><a href="https://odishatv.in/news/education/ews-obc-quota-sc-tells-centre-to-put-on-hold-neet-pg-counselling-centre-agrees-162467">EWS-OBC Quota: SC Tells Centre To Put On Hold NEET-PG Counselling, Centre Agrees</a></li>
                     </ul>
                     <ul class="category-custom-one-time">
                        <li>India</li>
                        <li>12 minutes ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item">
                     <a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" alt="" title="Schools Reopen For Class 8 Students In Odisha" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/reopening-of-schools"> Reopening Of Schools</a></li>
                        <li><a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463">Schools Reopen For Class 8 Students In Odisha</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>1 hour ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item">
                     <a href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635139639.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635139639.jpg" alt="" title="TCS, Infosys, Wipro, HCL" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/tcs"><i class="fas fa-play"></i> TCS</a></li>
                        <li><a href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460">Why TCS, Infosys, Wipro, HCL Are After Freshers!</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>1 hour ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item">
                     <a href="https://odishatv.in/videos/education/cbse-term-1-exam-students-happy-with-offline-board-exams-check-out-reactions-162455"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635133426.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635133426.jpg" alt="" title="CBSE Students" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/cbse"><i class="fas fa-play"></i> CBSE</a></li>
                        <li><a href="https://odishatv.in/videos/education/cbse-term-1-exam-students-happy-with-offline-board-exams-check-out-reactions-162455">CBSE Term 1 Exam: Students Happy With Offline Board Exams? Check Out Reactions</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>Odisha</li>
                        <li>3 hours ago </li>
                     </ul>
                  </div>
                  <a href="https://odishatv.in/education" class="cat-more-news-btn">More</a>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/jobs/sbi-recruitment-2021-last-day-alert-to-apply-for-over-2000-po-posts-check-details-162451"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/SBI-income-tax-7th-pay_1627298643.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/SBI-income-tax-7th-pay_1627298643.jpg" alt="" title="SBI Recruitment 2021" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/sbi-recruitment-2021"> SBI Recruitment 2021</a></li>
                              <li><a href="https://odishatv.in/news/jobs/sbi-recruitment-2021-last-day-alert-to-apply-for-over-2000-po-posts-check-details-162451">SBI Recruitment 2021: Last Day Alert To Apply For Over 2000 PO Posts, Check Details</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>4 hours ago </li>
                           </ul>
                           <p>Interested and eligible candidates can apply for the posts by visiting the official website of SBI- sbi.co.in by the end of the day today.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/jobs/ignou-recruitment-2021-last-date-to-apply-for-various-non-teaching-posts-extended-162429"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/ignou_1625571399.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/ignou_1625571399.jpg" alt="" title="IGNOU Recruitment 2021: Last Date To Apply For Various Non-Teaching Posts Extended" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/ignou-recruitment-2021"> IGNOU Recruitment 2021</a></li>
                              <li><a href="https://odishatv.in/news/jobs/ignou-recruitment-2021-last-date-to-apply-for-various-non-teaching-posts-extended-162429">IGNOU Recruitment 2021: Last Date To Apply For Various Non-Teaching Posts Extended</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>17 hours ago </li>
                           </ul>
                           <p>As per the latest notification issued by the open university, candidates can now apply for Technical Assistant and Technical Manager posts till November 1, 2021. Earlier, the online application process...</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/education/cbse-term-1-exams-board-clarifies-on-major-minor-subject-classification-check-latest-notification-162398"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633075674.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633075674.jpg" alt="" title=" CBSE Term 1 Exams: Board Clarifies On Major-Minor Subject Classification, Check Latest Notification" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/education"> Education</a></li>
                              <li><a href="https://odishatv.in/news/education/cbse-term-1-exams-board-clarifies-on-major-minor-subject-classification-check-latest-notification-162398">CBSE Term 1 Exams: Board Clarifies On Major-Minor Subject Classification, Check Latest Notification</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>23 hours ago </li>
                           </ul>
                           <p>In a latest circular, the Board has issued clarification regarding the difference between major and minor subjects. </p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/education/scholarships-for-jee-advanced-2021-toppers-check-important-details-162382"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/JEE-Advanced-2018-exam_1627034863.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/JEE-Advanced-2018-exam_1627034863.jpg" alt="" title="JEE Advanced Exam" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/jee-advanced-2021-toppers"> JEE Advanced 2021 Toppers</a></li>
                              <li><a href="https://odishatv.in/news/education/scholarships-for-jee-advanced-2021-toppers-check-important-details-162382">Scholarships For JEE Advanced 2021 Toppers, Check Important Details</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>1 day ago </li>
                           </ul>
                           <p>As many as 10 students within the top 100 all India rankings of JEE Advanced will be awarded the scholarships from this session onwards.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="category-custom-four">
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/ssc-recruitment-2021"> SSC Recruitment 2021</a></li>
                     <li><a href="https://odishatv.in/news/jobs/ssc-recruitment-2021-opportunity-to-apply-for-over-3200-posts-ends-tomorrow-check-exam-details--162380">SSC Recruitment 2021: Opportunity To Apply For Over 3200 Posts Ends Tomorrow, Check Exam Details&nbsp;</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>India</li>
                     <li>1 day ago </li>
                  </ul>
               </div>
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/govt-jobs"> Govt Jobs</a></li>
                     <li><a href="https://odishatv.in/news/jobs/india-post-recruitment-2021-last-chance-to-apply-for-multiple-vacancies-check-details-162377">India Post Recruitment 2021: Last Chance To Apply For Multiple Vacancies, Check Details</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>India</li>
                     <li>1 day ago </li>
                  </ul>
               </div>
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/opsc-recruitment-2021"> OPSC Recruitment 2021</a></li>
                     <li><a href="https://odishatv.in/news/jobs/opsc-recruitment-2021-document-verification-schedule-for-prof-associate-prof-posts-released-162362">OPSC Recruitment 2021: Document Verification Schedule For Prof, Associate Prof Posts Released</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>Odisha</li>
                     <li>2 days ago </li>
                  </ul>
               </div>
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/odisha-teacher-recruitment-2021"> Odisha Teacher Recruitment 2021</a></li>
                     <li><a href="https://odishatv.in/news/jobs/tgt-recruitment-2021-dse-odisha-changes-centre-of-exam-check-details-162352">TGT Recruitment 2021: DSE Odisha Changes Centre Of Exam, Check Details</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>Odisha</li>
                     <li>2 days ago </li>
                  </ul>
               </div>
            </div>
            <div class="otv-300-250-ad">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="guest-column-sec">
   <div class="container">
      <h3 class="heading-style-one">Retrospect</h3>
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="gest-column-items">
               <a href="https://odishatv.in/news/opinion/world-class-railway-station-of-bhubaneswar-remains-pipe-dream-what-we-have-is-squalor-indecision-161947"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634469575.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634469575.jpg" alt="" title="Proposed World-Class Railway Station Of Bhubaneswar" width="400" height="225"></a>
               <ul>
                  <li><a href="https://odishatv.in/tag/bhubaneswar">Bhubaneswar</a></li>
                  <li><a href="https://odishatv.in/news/opinion/world-class-railway-station-of-bhubaneswar-remains-pipe-dream-what-we-have-is-squalor-indecision-161947">World-Class Railway Station Of Bhubaneswar Remains A Pipe Dream</a></li>
               </ul>
               <p>It remains a mystery that the New Bhubaneswar Railway Station has not yet been put...</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="gest-column-items">
               <a href="https://odishatv.in/news/opinion/the-mystical-mahasiddhas-of-buddhism-and-their-odisha-connection-161585"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634092756.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634092756.jpg" alt="" title="The mystical Mahasiddhas of Buddhism and their Odisha connection" width="400" height="225"></a>
               <ul>
                  <li><a href="https://odishatv.in/tag/buddhism">Buddhism</a></li>
                  <li><a href="https://odishatv.in/news/opinion/the-mystical-mahasiddhas-of-buddhism-and-their-odisha-connection-161585">The Mystical Mahasiddhas Of Buddhism And Their Odisha Connection</a></li>
               </ul>
               <p>Many of the Mahasiddhas such as Kanhupa, Luipa, Sabaripa, Bhusukupa, Birupa composed Charyapadas in Lalitagiri...</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="gest-column-items">
               <a href="https://odishatv.in/news/opinion/dearness-allowance-da-hike-for-odisha-government-employees-not-durga-puja-dussehra-festival-gift-161439"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633844131.jpeg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633844131.jpeg" alt="" title="DA Hike in Odisha" width="400" height="225"></a>
               <ul>
                  <li><a href="https://odishatv.in/tag/dearness-allowance">Dearness Allowance</a></li>
                  <li><a href="https://odishatv.in/news/opinion/dearness-allowance-da-hike-for-odisha-government-employees-not-durga-puja-dussehra-festival-gift-161439">Dearness Allowance For Odisha Government Employees Is No Festival Gift</a></li>
               </ul>
               <p>Gift is a device to create an unethical bonding; it creates an obliging clientele. Therefore,...</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="gest-column-items">
               <a href="https://odishatv.in/news/opinion/not-durga-puja-diwali-the-only-indian-festival-for-covid19-times-elections-161045"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633350838.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633350838.jpg" alt="" title="Election Rallies Allowed During Covid But Hindu Festivals Not Allowed" width="400" height="225"></a>
               <ul>
                  <li><a href="https://odishatv.in/tag/pipili-bypoll">Pipili Bypoll</a></li>
                  <li><a href="https://odishatv.in/news/opinion/not-durga-puja-diwali-the-only-indian-festival-for-covid19-times-elections-161045">The Only Indian Festival For Covid Times - Elections</a></li>
               </ul>
               <p>Away from the election, the rules for the common person awaiting the festivities are quite...</p>
            </div>
         </div>
      </div>
      <a href="https://odishatv.in/opinion" class="cat-more-news-btn">More</a> 
   </div>
</section>
<div class="otv-970-250-ad"></div>
<section class="category-custom-sec category-entertainment-sec">
   <div class="container">
      <h3 class="heading-style-one">Entertainment</h3>
      <div class="row">
         <div class="col-lg-9 col-md-9">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                  <div class="category-custom-one-item">
                     <a href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635143396.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635143396.jpg" alt="" title="Rashmika Mandanna " width="640" height="360"></a>
                     <ul class="category-custom-one-post">
                        <li><a href="https://odishatv.in/tag/rashmika-mandanna"><i class="fas fa-play"></i> Rashmika Mandanna</a></li>
                        <li><a href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466">Watch Video: How Rashmika Mandanna Wrestles With Anger!</a></li>
                     </ul>
                     <ul class="category-custom-one-time">
                        <li>Odisha</li>
                        <li>16 minutes ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item">
                     <a href="https://odishatv.in/news/entertainment/rashmika-mandanna-vents-her-anger-out-watch-162462"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140040.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140040.jpg" alt="" title="Rashmika Mandanna" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/rashmika"> Rashmika</a></li>
                        <li><a href="https://odishatv.in/news/entertainment/rashmika-mandanna-vents-her-anger-out-watch-162462">Rashmika Mandanna Vents Her Anger Out #WATCH</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>India</li>
                        <li>1 hour ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item">
                     <a href="https://odishatv.in/news/entertainment/pawandeep-rajan-arunita-kanjilal-s-love-ballad-takes-internet-by-storm-fans-react-watch-162456"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635135356.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635135356.jpg" alt="" title="Arunita Kanjilal &amp; pawandeep Rajan" width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/manzoor-dil"> Manzoor Dil</a></li>
                        <li><a href="https://odishatv.in/news/entertainment/pawandeep-rajan-arunita-kanjilal-s-love-ballad-takes-internet-by-storm-fans-react-watch-162456">Pawandeep Rajan, Arunita Kanjilal's Love Ballad Takes Internet By Storm, Fans React #Watch</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>India</li>
                        <li>3 hours ago </li>
                     </ul>
                  </div>
                  <div class="category-custom-two-item">
                     <a href="https://odishatv.in/news/entertainment/-friends-actor-james-michael-tyler-passes-away-162453"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635132584.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635132584.jpg" alt="" title="'Friends' Actor James Michael Tyler " width="224" height="126"></a>
                     <ul class="category-custom-two-post">
                        <li><a href="https://odishatv.in/tag/james-michael-tyler"> James Michael Tyler</a></li>
                        <li><a href="https://odishatv.in/news/entertainment/-friends-actor-james-michael-tyler-passes-away-162453">'Friends' Actor James Michael Tyler Passes Away</a></li>
                     </ul>
                     <ul class="category-custom-two-time">
                        <li>India</li>
                        <li>3 hours ago </li>
                     </ul>
                  </div>
                  <a href="https://odishatv.in/entertainment" class="cat-more-news-btn">More</a>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/entertainment/time-flew-by-k-pop-band-bts-to-army-at-permission-to-dance-on-stage-virtual-concert-162444"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/BTS_1631519647.JPG" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/BTS_1631519647.JPG" alt="" title="Time Flew By: K-Pop Band BTS To ARMY&nbsp;At 'Permission To Dance On Stage' Virtual Concert" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/bts"> BTS</a></li>
                              <li><a href="https://odishatv.in/news/entertainment/time-flew-by-k-pop-band-bts-to-army-at-permission-to-dance-on-stage-virtual-concert-162444">Time Flew By: K-Pop Band BTS To ARMY&nbsp;At 'Permission To Dance On Stage' Virtual Concert</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>14 hours ago </li>
                           </ul>
                           <p>Several large LED screens were put up at the stadium which allowed the audience to enjoy computer-generated visual effects and...</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/entertainment/mamata-kulkarni-is-back-1990s-actress-and-drug-bust-accused-surfaces-on-instagram-162443"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635091340.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635091340.jpg" alt="" title="Mamata Kulkarni Is Back! 1990s Actress And Drug Bust Accused Surfaces On Instagram" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/mamata-kulkarni"> Mamata Kulkarni</a></li>
                              <li><a href="https://odishatv.in/news/entertainment/mamata-kulkarni-is-back-1990s-actress-and-drug-bust-accused-surfaces-on-instagram-162443">Mamata Kulkarni Is Back! 1990s Actress And Drug Bust Accused Surfaces On Instagram</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>15 hours ago </li>
                           </ul>
                           <p>Kulkarni was reported to have married the Ahmedabad-born international drug lord Vicky Goswami, who had been first arrested on narcotics...</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/news/entertainment/vicky-donor-2-here-s-why-helmer-shoojit-sircar-denied-to-make-sequel-162417"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635074208.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635074208.jpg" alt="" title="Vicky Donor 2: Here's Why Helmer Shoojit Sircar Denied To Make Sequel" width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/ayushmann-khurrana"> Ayushmann Khurrana</a></li>
                              <li><a href="https://odishatv.in/news/entertainment/vicky-donor-2-here-s-why-helmer-shoojit-sircar-denied-to-make-sequel-162417">Vicky Donor 2: Here's Why Helmer Shoojit Sircar Denied To Make Sequel</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>India</li>
                              <li>20 hours ago </li>
                           </ul>
                           <p>During a virtual session of the India Film Project (IFP), Sircar said, "Post 'Vicky Donor', I was offered loads of...</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="category-custom-three-item">
                           <a href="https://odishatv.in/videos/entertainment/after-divorce-with-chay-samantha-receives-legal-blow-162407"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635066385.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635066385.jpg" alt="" title="Samantha Ruth Prabhu " width="400" height="225"></a>
                           <ul class="category-custom-three-post">
                              <li><a href="https://odishatv.in/tag/samantha"> Samantha</a></li>
                              <li><a href="https://odishatv.in/videos/entertainment/after-divorce-with-chay-samantha-receives-legal-blow-162407">After Divorce With Chay, Samantha Receives Legal Blow</a></li>
                           </ul>
                           <ul class="category-custom-three-time">
                              <li>Odisha</li>
                              <li>22 hours ago </li>
                           </ul>
                           <p>It seems south India actress Samantha Ruth Prabhu has invited trouble for her by filing legal cases. The Family Man...</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="category-custom-four">
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/neha-mehta"> Neha Mehta</a></li>
                     <li><a href="https://odishatv.in/news/entertainment/know-tmkoc-actors-who-left-the-show-from-neha-mehta-bhavya-gandhi-to-gurucharan-singh-162406">Know TMKOC Actors Who Left The Show: From Neha Mehta, Bhavya Gandhi To Gurucharan Singh</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>India</li>
                     <li>22 hours ago </li>
                  </ul>
               </div>
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/aishwarya-rai-bachchan"> Aishwarya Rai Bachchan</a></li>
                     <li><a href="https://odishatv.in/news/entertainment/aishwarya-rai-bachchan-priyanka-anushka-shilpa-shetty-karva-chauth-in-bollywood-162405">Aishwarya Rai Bachchan, Priyanka, Anushka, Shilpa Shetty: Bollywood Divas Who Made Karva Chauth Celebrations A Trend</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>India</li>
                     <li>22 hours ago </li>
                  </ul>
               </div>
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/samantha"> Samantha</a></li>
                     <li><a href="https://odishatv.in/news/entertainment/samantha-ruth-prabhu-keep-fighting-for--162397">Samantha Ruth Prabhu: 'Keep Fighting For...'</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>India</li>
                     <li>24 hours ago </li>
                  </ul>
               </div>
               <div class="category-custom-four-item">
                  <ul class="category-custom-four-post">
                     <li><a href="https://odishatv.in/tag/samantha-ruth-prabhu"> Samantha Ruth Prabhu</a></li>
                     <li><a href="https://odishatv.in/news/entertainment/lesson-for-samantha-vijay-bollywood-actors-no-one-is-above-law-162390">Lesson For Samantha, Vijay, Bollywood Actors: No One is Above Law</a></li>
                  </ul>
                  <ul class="category-custom-four-time">
                     <li>India</li>
                     <li>1 day ago </li>
                  </ul>
               </div>
            </div>
            <div class="otv-300-250-ad">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="inpictures-sec">
   <div class="container">
      <ul class="inpictures-nav">
         <li>
            <h3 class="heading-style-one">Photos</h3>
         </li>
      </ul>
      <div class="row">
         <div class="tab-content">
            <!-- TAB 1 -->
            <div id="business" class="tab-pane fade in active">
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="row">
                     <div class="col-lg-12 col-md-12-col-sm-12 col-xs-12">
                        <div class="inpictures-item-one">
                           <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                 <div class="inpictures-item-one-content">
                                    <ul>
                                       <li><a href="https://odishatv.in/tag/justice-for-mamita">Justice For Mamita</a></li>
                                       <li><a href="https://odishatv.in/photo-gallery/national/justice-for-mamita-meher-bjp-takes-out-hearse-parade-in-bhubaneswar-162403">BJP Takes Out Hearse Parade In Bhubaneswar</a></li>
                                    </ul>
                                    <p>With mystery deepening over murder of lady teacher Mamita Meher,...</p>
                                    <button><i class="fas fa-camera"></i></button>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                 <a href="https://odishatv.in/photo-gallery/national/justice-for-mamita-meher-bjp-takes-out-hearse-parade-in-bhubaneswar-162403"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635063635.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635063635.jpg" alt="" title="Mamita Meher Murder case: BJP Hearse Parade" width="640" height="360"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="inpictures-item-two">
                           <div class="inpictures-item-two-pic">
                              <a href="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634625849.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634625849.jpg" alt="" title="Rail Roko protest" width="400" height="225"></a> <span><i class="far fa-images"></i> 10</span> 
                           </div>
                           <ul>
                              <li><a href="https://odishatv.in/tag/rail-roko">Rail Roko</a></li>
                              <li><a href="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060">Farmers’ Nationwide Rail Roko Disrupts Train Services</a></li>
                           </ul>
                           <button><i class="fas fa-camera"></i></button>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="inpictures-item-two">
                           <div class="inpictures-item-two-pic">
                              <a href="https://odishatv.in/photo-gallery/sports/t20-world-cup-mentor-ms-dhoni-joins-team-india-161997"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634544508.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634544508.jpg" alt="" title="MS Dhoni with Team India for T20 World Cup" width="400" height="225"></a> <span><i class="far fa-images"></i> 3</span> 
                           </div>
                           <ul>
                              <li><a href="https://odishatv.in/tag/t20-world-cup">T20 World Cup</a></li>
                              <li><a href="https://odishatv.in/photo-gallery/sports/t20-world-cup-mentor-ms-dhoni-joins-team-india-161997">T20 World Cup: Mentor MS Dhoni Joins Team India</a></li>
                           </ul>
                           <button><i class="fas fa-camera"></i></button>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="inpictures-item-two">
                           <div class="inpictures-item-two-pic">
                              <a href="https://odishatv.in/photo-gallery/festivals-events/pandal-hopping-cuttack-glitters-with-maa-durga-s-blessings-161753"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634201167.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634201167.jpg" alt="" title="Durga Puja Balu Bazar Cuttack" width="400" height="225"></a> <span><i class="far fa-images"></i> 9</span> 
                           </div>
                           <ul>
                              <li><a href="https://odishatv.in/tag/durga-puja-2021">Durga Puja 2021</a></li>
                              <li><a href="https://odishatv.in/photo-gallery/festivals-events/pandal-hopping-cuttack-glitters-with-maa-durga-s-blessings-161753">Pandal Hopping: Cuttack Glitters With Maa Durga’s Blessings</a></li>
                           </ul>
                           <button><i class="fas fa-camera"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <div class="inpictures-item-two">
                     <div class="inpictures-item-two-pic">
                        <a href="https://odishatv.in/photo-gallery/festivals-events/durga-puja-2021-navratri-festivities-begin-161283"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633668015.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633668015.jpg" alt="" title="Durga Puja in Kolkata" width="400" height="225"></a> <span><i class="far fa-images"></i> 4</span> 
                     </div>
                     <ul>
                        <li><a href="https://odishatv.in/tag/durga-puja-2021">Durga Puja 2021</a></li>
                        <li><a href="https://odishatv.in/photo-gallery/festivals-events/durga-puja-2021-navratri-festivities-begin-161283">Durga Puja, Navratri Festivities Begin</a></li>
                     </ul>
                     <button><i class="fas fa-camera"></i></button>
                  </div>
                  <div class="inpictures-item-two">
                     <div class="inpictures-item-two-pic">
                        <a href="https://odishatv.in/photo-gallery/weather/heavy-rain-leaves-several-areas-waterlogged-in-odisha-100-yo-british-era-building-collapsed-159627"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1631513773.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1631513773.jpg" alt="" title="Heavy rains lashed Cuttack leading to water-logging in low-lying areas." width="400" height="225"></a> <span><i class="far fa-images"></i> 9</span> 
                     </div>
                     <ul>
                        <li><a href="https://odishatv.in/tag/weather-alert">Weather Alert</a></li>
                        <li><a href="https://odishatv.in/photo-gallery/weather/heavy-rain-leaves-several-areas-waterlogged-in-odisha-100-yo-british-era-building-collapsed-159627">Heavy Rain Leaves Several Areas Waterlogged In Odisha, 100-YO British Era Building Collapses</a></li>
                     </ul>
                     <button><i class="fas fa-camera"></i></button>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="inpictures-item-four">
                     <div class="inpictures-item-four-pic">
                        <a href="https://odishatv.in/photo-gallery/sports/gold-silver-bronze-india-para-badminton-players-create-magic-at-tokyo-paralympics-2020-159082"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1630845146.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1630845146.jpg" alt="" title="Pramod Bhagat" width="640" height="360"></a> <span><i class="far fa-images"></i> 6</span> 
                     </div>
                     <ul>
                        <li><a href="https://odishatv.in/tag/tokyo-2020">Tokyo 2020</a></li>
                        <li><a href="https://odishatv.in/photo-gallery/sports/gold-silver-bronze-india-para-badminton-players-create-magic-at-tokyo-paralympics-2020-159082">Indian Shuttlers Create Magic At Tokyo Paralympics 2020</a></li>
                     </ul>
                     <p>Badminton was for the first time included as an official sport at the Tokyo 2020...</p>
                     <button><i class="fas fa-camera"></i></button>
                  </div>
               </div>
            </div>
            <!-- //TAB 1 -->
         </div>
      </div>
      <a href="https://odishatv.in/photo-gallery" class="cat-more-news-btn">More</a> 
   </div>
</section>
<div class="otv-970-250-ad"></div>
<section class="bd-video-slide-sec">
   <div class="container">
      <h3 class="heading-style-four">Videos</h3>
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="item">
                     <a href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635143396.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635143396.jpg" alt="" title="Rashmika Mandanna " width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/rashmika-mandanna">Rashmika Mandanna</a></li>
                        <li><a href="https://odishatv.in/videos/entertainment/watch-video-how-rashmika-mandanna-wrestles-with-anger--162466">Watch Video: How Rashmika Mandanna Wrestles With Anger!</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
                  <div class="item">
                     <a href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635139639.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635139639.jpg" alt="" title="TCS, Infosys, Wipro, HCL" width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/tcs">TCS</a></li>
                        <li><a href="https://odishatv.in/videos/jobs/why-tcs-infosys-wipro-hcl-are-after-freshers--162460">Why TCS, Infosys, Wipro, HCL Are After Freshers!</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
                  <div class="item">
                     <a href="https://odishatv.in/videos/miscellaneous/giant-python-in-snake-helpline-member-s-house-in-malkangiri-rescued-safely-162452"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635132169.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635132169.jpg" alt="" title="Python Rescued In Malkangiri" width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/snake-rescued">Snake Rescued</a></li>
                        <li><a href="https://odishatv.in/videos/miscellaneous/giant-python-in-snake-helpline-member-s-house-in-malkangiri-rescued-safely-162452">Giant Python In Snake Helpline Member's House In Malkangiri Rescued Safely</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
                  <div class="item active">
                     <a href="https://odishatv.in/videos/national/mann-ki-baat-pm-modi-recalls-birsa-munda-s-contribution-to-country-162426"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635078150.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635078150.jpg" alt="" title="PM Modi Recalls Birsa Munda" width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/mann-ki-baat">Mann Ki Baat</a></li>
                        <li><a href="https://odishatv.in/videos/national/mann-ki-baat-pm-modi-recalls-birsa-munda-s-contribution-to-country-162426">Mann Ki Baat: PM Modi Recalls Birsa Munda’s Contribution To Country</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
                  <div class="item">
                     <a href="https://odishatv.in/videos/national/t20-world-cup-ind-vs-pak-indore-artists-make-3d-rangoli-to-support-team-india-162423"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635077138.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635077138.jpg" alt="" title="Shikha Sharma Rangoli " width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/t20-world-cup">T20 World Cup</a></li>
                        <li><a href="https://odishatv.in/videos/national/t20-world-cup-ind-vs-pak-indore-artists-make-3d-rangoli-to-support-team-india-162423">T20 World Cup Ind Vs Pak: Indore Artists Make 3D Rangoli To Support Team India</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
                  <div class="item">
                     <a href="https://odishatv.in/videos/miscellaneous/ex-congress-mp-pradeep-majhi-to-join-bjd-162419"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635075455.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635075455.jpg" alt="" title="Pradeep Majhi To Join BJD  " width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/pradeep-majhi">Pradeep Majhi</a></li>
                        <li><a href="https://odishatv.in/videos/miscellaneous/ex-congress-mp-pradeep-majhi-to-join-bjd-162419">Ex-Congress MP Pradeep Majhi To Join BJD</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
                  <div class="item">
                     <a href="https://odishatv.in/videos/sports/india-vs-pakistan-t20-here-s-what-former-indian-cricketers-said-162414"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635072779.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1635072779.jpg" alt="" title="India Team STRONGER" width="745" height="419"></a>
                     <ul>
                        <li><a href="https://odishatv.in/tag/india-vs-pakistan">India Vs Pakistan</a></li>
                        <li><a href="https://odishatv.in/videos/sports/india-vs-pakistan-t20-here-s-what-former-indian-cricketers-said-162414">India Vs Pakistan T20: Here’s What Former Indian Cricketers Said</a></li>
                     </ul>
                     <button><i class="fas fa-play"></i></button>
                  </div>
               </div>
            </div>
            <a class="mycarouselleft mycarouselbtn" href="#myCarousel" data-slide="prev"><i class="fas fa-chevron-left"></i></a> <a class="mycarouselright mycarouselbtn" href="#myCarousel" data-slide="next"><i class="fas fa-chevron-right"></i></a> 
         </div>
      </div>
   </div>
</section>
<section class="newsletter-sec">
   <div class="container">
      <h3 class="heading-style-one">NEWSLETTERS</h3>
      <div class="row">
         <!-- NEW STYLE -->
         <!--<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >-->
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12" id="subscribe">
            <form id="subs" name="subs" method="post">
               <ul class="newsletter-section">
                  <li>
                     <div class="newsletter-section-start">
                        <input type="checkbox" id="morningnews" name="choice[]" value="morningnews">
                        <label for="morningnews">
                           <div class="newsletter-section-img">
                              <img src="https://odishatv.in/commondir/images/nsletter1.jpg" alt="morningnews" title="morningnews" width="96px" height="55px">
                           </div>
                           <div class="newsletter-section-description">
                              <span class="time-show">Daily</span>
                              <h2>The Lookout</h2>
                              <h6>Circulated every morning 8 am</h6>
                              <p>Know the topics you will need to follow today. Circulated every morning 7 am.</p>
                           </div>
                           <span class="newsletter-active"><i class="fas fa-plus"></i> <i class="fas fa-check"></i></span>
                        </label>
                     </div>
                  </li>
                  <li>
                     <div class="newsletter-section-start">
                        <input type="checkbox" id="eveningnews" name="choice[]" value="eveningnews">
                        <label for="eveningnews">
                           <div class="newsletter-section-img">
                              <img src="https://odishatv.in/commondir/images/nsletter2.jpg" alt="eveningnews" title="eveningnews" width="96px" height="55px">
                           </div>
                           <div class="newsletter-section-description">
                              <span class="time-show">Daily</span>
                              <h2>Hashtag today</h2>
                              <h6>Circulated every morning 8 pm</h6>
                              <p>News, trends and topics that led todays coverage. Circulated every evening 8 pm.</p>
                           </div>
                           <span class="newsletter-active"><i class="fas fa-plus"></i> <i class="fas fa-check"></i></span>
                        </label>
                     </div>
                  </li>
                  <li>
                     <div class="newsletter-section-start">
                        <input type="checkbox" id="primetime" name="choice[]" value="primetime">
                        <label for="primetime">
                           <div class="newsletter-section-img">
                              <img src="https://odishatv.in/commondir/images/nsletter3.jpg" alt="Evening primetime" title="Evening Primetime" width="96px" height="55px">
                           </div>
                           <div class="newsletter-section-description">
                              <span class="time-show">Daily</span>
                              <h2>Tinsel</h2>
                              <h6>Circulated every morning 8 pm</h6>
                              <p>Stars and the number battle on Instagram. Circulated every evening 8 pm</p>
                           </div>
                           <span class="newsletter-active"><i class="fas fa-plus p"></i> <i class="fas fa-check c"></i></span>
                        </label>
                     </div>
                  </li>
                  <li>
                     <div class="newsletter-section-start">
                        <input type="checkbox" id="weekend" name="choice[]" value="weekend">
                        <label for="weekend">
                           <div class="newsletter-section-img">
                              <img src="https://odishatv.in/commondir/images/nsletter4.jpg" alt="" title="" width="96px" height="55px">
                           </div>
                           <div class="newsletter-section-description">
                              <span class="time-show">Weekly</span>
                              <h2>Raison d'etre</h2>
                              <h6>Circulated every weekend</h6>
                              <p>Look into yourself. Make life more meaningful. Have a purpose. Lets do it together every weekend</p>
                           </div>
                           <span class="newsletter-active"><i class="fas fa-plus"></i> <i class="fas fa-check"></i></span>
                        </label>
                     </div>
                  </li>
               </ul>
               <ul class="newsletter-form">
                  <li>
                     <h5 id="sresult">Enter your email to get your daily Newsletter</h5>
                  </li>
                  <li class="newsletter-form-email">
                     <input type="text" name="semail" id="semail" placeholder="Enter Email Address" value="">
                     <i class="fas fa-envelope"></i>
                  </li>
                  <li>
                     <button onclick="javascript:subscribeme();return false;">subscribe</button>
                  </li>
               </ul>
            </form>
         </div>
         <!-- NEW STYLE -->
         <!--<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" id="subscribe">
            <p class="newsletter-alert">Please Enter Valid Email Id!</p>
            </div>-->
         <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="otv-300-250-ad">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="category-news">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>SPORTS</h3>
            <div class="category-news-item">
               <a href="https://odishatv.in/news/sports/t20-world-cup-we-know-exactly-where-the-game-went-wrong-says-kohli-162449"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635127474.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635127474.jpg" alt="" title="Virat Kohli" width="400" height="225"></a>
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/virat-kohli"> Virat Kohli</a></li>
                  <li><a href="https://odishatv.in/news/sports/t20-world-cup-we-know-exactly-where-the-game-went-wrong-says-kohli-162449">T20 World Cup: We Know Exactly Where The Game Went Wrong, Says Kohli</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>5 hours ago </li>
               </ul>
               <p>Kohli credited Pakistan for outclassing his team in the opening match of the tournament in...</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/hockey-india"> Hockey India</a></li>
                  <li><a href="https://odishatv.in/news/sports/women-s-hockey-nationals-easy-wins-for-odisha-mp-ap-punjab-162438">Women's Hockey Nationals: Easy Wins For Odisha, MP, AP, Punjab</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>16 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/t20-world-cup"> T20 World Cup</a></li>
                  <li><a href="https://odishatv.in/news/sports/t20-world-cup-2021-sri-lanka-beat-bangladesh-by-5-wickets-162434">T20 World Cup 2021: Sri Lanka Beat Bangladesh By 5 Wickets</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>17 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/icc-world-cup"> ICC World Cup</a></li>
                  <li><a href="https://odishatv.in/live-updates/sports/india-pakistan-t20-world-cup-2021-live-162430">T20 World Cup 2021: India Vs Pakistan LIVE Score</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>17 hours ago </li>
               </ul>
            </div>
            <a href="https://odishatv.in/sports" class="cat-more-news">More</a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>Gadgets</h3>
            <div class="category-news-item">
               <a href="https://odishatv.in/news/technology/elon-musk-trolls-cook-over-apple-s-19-cleaning-cloth-162402"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635062934.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635062934.jpg" alt="" title="Elon Musk Trolls Cook Over Apple's $19 Cleaning Cloth" width="400" height="225"></a>
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/elon-musk"> Elon Musk</a></li>
                  <li><a href="https://odishatv.in/news/technology/elon-musk-trolls-cook-over-apple-s-19-cleaning-cloth-162402">Elon Musk Trolls Cook Over Apple's $19 Cleaning Cloth</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>23 hours ago </li>
               </ul>
               <p>"While plenty of people have mocked the cloth as a prime example of Apple products...</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/nasa"> NASA</a></li>
                  <li><a href="https://odishatv.in/news/technology/nasa-aims-to-launch-next-gen-rocket-on-debut-flight-in-early-2022-162334">NASA Aims To Launch Next-Gen Rocket On Debut Flight In Early 2022</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>2 days ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/whatsapp"> WhatsApp</a></li>
                  <li><a href="https://odishatv.in/news/technology/whatsapp-violates-users-rights-by-denying-dispute-resolution-centre-to-delhi-hc-162316">WhatsApp Violates Users' Rights By Denying Dispute Resolution: Centre To Delhi HC</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>2 days ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/krafton"> Krafton</a></li>
                  <li><a href="https://odishatv.in/news/technology/krafton-to-launch-pubg-new-state-globally-on-nov-11-162259">Krafton To Launch 'PUBG: New State' Globally On Nov 11</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>3 days ago </li>
               </ul>
            </div>
            <a href="https://odishatv.in/technology" class="cat-more-news">More</a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>India</h3>
            <div class="category-news-item">
               <a href="https://odishatv.in/news/national/icai-chief-stirs-controversy-asking-auditors-accountants-to-use-hindi-162468"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635144363.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635144363.jpg" alt="" title="ICAI Chief Stirs Controversy Asking Auditors, Accountants To Use Hindi" width="400" height="225"></a>
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/language-controvery"> Language Controvery</a></li>
                  <li><a href="https://odishatv.in/news/national/icai-chief-stirs-controversy-asking-auditors-accountants-to-use-hindi-162468">ICAI Chief Stirs Controversy Asking Auditors, Accountants To Use Hindi</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>12 seconds ago </li>
               </ul>
               <p>"At a time when the whole world is looking at India as a global leader,...</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/pm-modi"> PM Modi</a></li>
                  <li><a href="https://odishatv.in/news/national/nine-medical-colleges-in-uttar-pradesh-inaugurated-by-pm-modi-162465">Nine Medical Colleges In Uttar Pradesh Inaugurated By PM Modi</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>29 minutes ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/mann-ki-baat"><i class="fas fa-play"></i> Mann Ki Baat</a></li>
                  <li><a href="https://odishatv.in/videos/national/mann-ki-baat-pm-modi-recalls-birsa-munda-s-contribution-to-country-162426">Mann Ki Baat: PM Modi Recalls Birsa Munda’s Contribution To Country</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>Odisha</li>
                  <li>18 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/narendra-modi"> Narendra Modi</a></li>
                  <li><a href="https://odishatv.in/news/national/pm-modi-to-visit-italy-uk-from-oct-29-to-nov-2-to-attend-g20-climate-summits-162424">PM Modi To Visit Italy, UK From Oct 29 To Nov 2; To Attend G20, Climate Summits</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>19 hours ago </li>
               </ul>
            </div>
            <a href="https://odishatv.in/national" class="cat-more-news">More</a>
         </div>
      </div>
   </div>
</section>
<section class="category-news">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>Covid-19</h3>
            <div class="category-news-item">
               <a href="https://odishatv.in/news/covid-19/active-covid-19-cases-in-country-decline-to-1-67-695-162457"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1632285811.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1632285811.jpg" alt="" title="India COVID Cases" width="400" height="225"></a>
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/india-covid19-updates"> India COVID19 Updates</a></li>
                  <li><a href="https://odishatv.in/news/covid-19/active-covid-19-cases-in-country-decline-to-1-67-695-162457">Active COVID-19 Cases In Country Decline to 1,67,695</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>2 hours ago </li>
               </ul>
               <p>The cumulative doses administered in the country so far under the nationwide COVID-19 vaccination drive...</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/covid-19"> COVID-19</a></li>
                  <li><a href="https://odishatv.in/news/covid-19/global-covid-19-caseload-tops-243-6-million-162450">Global Covid-19 Caseload Tops 243.6 Million</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>4 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/amrit-pradhan"> Amrit Pradhan</a></li>
                  <li><a href="https://odishatv.in/news/health/covid-hit-odisha-youth-amrit-breathes-new-air-undergoes-lung-transplant-162439">Covid-Hit Odisha Youth Amrit Breathes New Air, Undergoes Lung Transplant</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>Odisha</li>
                  <li>15 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/covid19-in-kids"> COVID19 In Kids</a></li>
                  <li><a href="https://odishatv.in/news/covid-19/1-200-kids-admitted-to-bengal-s-burdwan-medical-college-9-dead-162427">1,200 Kids Admitted To Bengal's Burdwan Medical College, 9 Dead</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>18 hours ago </li>
               </ul>
            </div>
            <a href="https://odishatv.in/covid-19" class="cat-more-news">More</a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>Business</h3>
            <div class="category-news-item">
               <a href="https://odishatv.in/news/business/tesla-hikes-prices-across-its-popular-ev-lineup-162459"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635138714.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635138714.jpg" alt="" title="Tesla Hikes Prices Across Its Popular EV Lineup" width="400" height="225"></a>
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/tesla"> Tesla</a></li>
                  <li><a href="https://odishatv.in/news/business/tesla-hikes-prices-across-its-popular-ev-lineup-162459">Tesla Hikes Prices Across Its Popular EV Lineup</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>2 hours ago </li>
               </ul>
               <p>In the third quarter, the company said it produced approximately 238,000 vehicles and delivered over...</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/edible-oil-price-rise"> Edible Oil Price Rise</a></li>
                  <li><a href="https://odishatv.in/news/business/centre-to-hold-meet-with-states-over-soaring-edible-oil-prices-162441">Centre To Hold Meet With States Over Soaring Edible Oil Prices</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>15 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/petrol-prices"> Petrol Prices</a></li>
                  <li><a href="https://odishatv.in/news/business/after-oil-gas-price-may-see-surge-upsetting-cng-png-rates-162437">After Oil, Gas Price May See Surge Upsetting CNG, PNG Rates</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>17 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/gst-exemption"> GST Exemption</a></li>
                  <li><a href="https://odishatv.in/news/business/service-rendered-by-govt-not-its-agency-only-exempt-from-gst-162435">Service Rendered By Govt, Not Its Agency, Only Exempt From GST</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>17 hours ago </li>
               </ul>
            </div>
            <a href="https://odishatv.in/business" class="cat-more-news">More</a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>World News</h3>
            <div class="category-news-item">
               <a href="https://odishatv.in/news/international/will-not-let-afghan-soil-be-used-against-others-taliban-162433"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635082820.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1635082820.jpg" alt="" title="Will Not Let Afghan Soil Be Used Against Others: Taliban" width="400" height="225"></a>
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/afghanistan-crisis"> Afghanistan Crisis</a></li>
                  <li><a href="https://odishatv.in/news/international/will-not-let-afghan-soil-be-used-against-others-taliban-162433">Will Not Let Afghan Soil Be Used Against Others: Taliban</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>17 hours ago </li>
               </ul>
               <p>Mujahid made sure about the normal military and civil activities of the ministry of defense...</p>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/south-korea"> South Korea</a></li>
                  <li><a href="https://odishatv.in/news/international/-media-reports-of-kim-jong-un-s-sister-staging-coup-not-true--162413">'Media Reports Of Kim Jong-un's Sister Staging Coup Not True'</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>20 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/afganistan"> Afganistan</a></li>
                  <li><a href="https://odishatv.in/news/international/afghanistan-unveils-plan-to-boost-employment-combat-food-crisis-162409">Afghanistan Unveils Plan To Boost Employment, Combat Food Crisis</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>21 hours ago </li>
               </ul>
            </div>
            <div class="category-news-item">
               <ul class="category-news-item-story">
                  <li><a href="https://odishatv.in/tag/pakistan"> Pakistan</a></li>
                  <li><a href="https://odishatv.in/news/international/pakistan-fails-in-convincing-to-resume-6-billion-extended-loan-facility-162337">Pakistan Fails In Convincing To Resume $6 Billion Extended Loan Facility</a></li>
               </ul>
               <ul class="category-news-item-time">
                  <li>India</li>
                  <li>2 days ago </li>
               </ul>
            </div>
            <a href="https://odishatv.in/international" class="cat-more-news">More</a>
         </div>
      </div>
   </div>
</section>
<?php include 'includes/footer.php';?>