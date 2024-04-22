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

<!--========================== TESTING ====================-->
<div class="container">
   <h1>Testing 1</h1>
    <div class="row">
        <div class="col-lg-10">
            <div class="cliff-container">
                <div class="cliff-row-run1">
                    <div class="cliff-custom-run1" id="custom-run1">
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 4</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 5</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 6</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 7</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 8</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 9</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 10</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run1">
                            <h4>exercitation ullamco laboris 11</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <button id="prev-run1" class="nav-run1">PREV</button>
                <button id="next-run1" class="nav-run1 active">NEXT</button>
            </div>
        </div>
    </div>
</div>
<!--========================= //TESTING ===================-->
<!--========================== TESTING ====================-->
<div class="container">
   <h1>Testing 2</h1>
    <div class="row">
        <div class="col-lg-10">
            <div class="cliff-container">
                <div class="cliff-row-run2">
                    <div class="cliff-custom-run2" id="custom-run2">
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 4</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 5</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 6</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 7</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 8</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 9</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 10</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 11</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="cliff-col-run2">
                            <h4>exercitation ullamco laboris 12</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <button id="prev-run2" class="nav-run2">PREV</button>
                <button id="next-run2" class="nav-run2 active">NEXT</button>
            </div>
        </div>
    </div>
</div>
<!--========================= //TESTING ===================-->
<?php include 'includes/footer.php';?>
<style type="text/css">
   .cliff-container {
       float: left;
       width: 100%;
   }
   .cliff-row-run1 {
       float: left;
       width: 100%;
       background-color: #c9c9c9;
       overflow: hidden;
   }
   #custom-run1 {
       float: left;
       width: 100%;
       height: auto;
       position: relative;
       display: -webkit-inline-box;
       transition: all 0.25s ease 0s;
   }
   .cliff-col-run1{
       position: relative;
       display: table-cell;
       float: left;
   }
   button.nav-run1 {
       background-color: lightgray;
       border: navajowhite;
   }
   button.nav-run1.active {
       background-color: green;
   }
</style>
<style type="text/css">
   .cliff-container {
       float: left;
       width: 100%;
   }
   .cliff-row-run2 {
       float: left;
       width: 100%;
       background-color: #c9c9c9;
       overflow: hidden;
   }
   #custom-run2 {
       float: left;
       width: 100%;
       height: auto;
       position: relative;
       display: -webkit-inline-box;
       transition: all 0.25s ease 0s;
   }
   .cliff-col-run2{
       position: relative;
       display: table-cell;
       float: left;
   }
   button.nav-run2 {
       background-color: lightgray;
       border: navajowhite;
   }
   button.nav-run2.active {
       background-color: green;
   }
</style>

<script type="text/javascript">
   jQuery(document).ready(function () {
      // Change Property Start
      var run1_items = 3;
      var run1_time_delay = 3000;
      var run1_autoplay = true;
      var run1_autoplay_hover_pause = true;
      // Change Property End
      var run1_item_width=100/run1_items;$(".cliff-col-run1").css({width:run1_item_width+"%"});var run1_item_inner_width=$(".cliff-col-run1").innerWidth(),run1_margin_offset=0,run1_i=0,run1_SlideNumber=$(".cliff-custom-run1").children().length,run1_cnt=0;if(!1!=run1_autoplay){function b(){run1_i++,run1_margin_offset-=run1_item_inner_width,$(".cliff-custom-run1").css("transform","translate3d("+run1_margin_offset+"px, 0px, 0px)"),$("#prev-run1").addClass("active")}var c=null;function a(){c=setInterval(function(){++run1_cnt<=run1_SlideNumber-run1_items?b():($(".cliff-custom-run1").css("transform","translate3d(0px, 0px, 0px)"),run1_i=0,run1_cnt=0,run1_margin_offset=0,$("#next-run1").addClass("active"),$("#prev-run1").removeClass("active"))},run1_time_delay)}a(),!0==run1_autoplay_hover_pause&&$("#custom-run1").hover(function(){clearInterval(c)},function(){a()})}$("#next-run1").click(function(){run1_i++,run1_cnt++,run1_i<=run1_SlideNumber-run1_items?(run1_margin_offset-=run1_item_inner_width,$(".cliff-custom-run1").css("transform","translate3d("+run1_margin_offset+"px, 0px, 0px)"),$(this).addClass("active"),$("#prev-run1").addClass("active")):(run1_i=run1_SlideNumber-run1_items,$(this).removeClass("active"),run1_cnt=run1_SlideNumber-run1_items)}),$("#prev-run1").click(function(){run1_i--,run1_cnt--,run1_i>=0?(run1_margin_offset+=run1_item_inner_width,$(".cliff-custom-run1").css("transform","translate3d("+run1_margin_offset+"px, 0px, 0px)")):(run1_i=0,$(this).removeClass("active"),$("#next-run1").addClass("active"))})
   });
   jQuery(document).ready(function () {
      // Change Property Start
      var run2_items = 4;
      var run2_time_delay = 1000;
      var run2_autoplay = false;
      var run2_autoplay_hover_pause = true;
      // Change Property End
      var run2_item_width=100/run2_items;$(".cliff-col-run2").css({width:run2_item_width+"%"});var run2_item_inner_width=$(".cliff-col-run2").innerWidth(),run2_margin_offset=0,run2_i=0,run2_SlideNumber=$(".cliff-custom-run2").children().length,run2_cnt=0;if(!1!=run2_autoplay){function b(){run2_i++,run2_margin_offset-=run2_item_inner_width,$(".cliff-custom-run2").css("transform","translate3d("+run2_margin_offset+"px, 0px, 0px)"),$("#prev-run2").addClass("active")}var c=null;function a(){c=setInterval(function(){++run2_cnt<=run2_SlideNumber-run2_items?b():($(".cliff-custom-run2").css("transform","translate3d(0px, 0px, 0px)"),run2_i=0,run2_cnt=0,run2_margin_offset=0,$("#next-run2").addClass("active"),$("#prev-run2").removeClass("active"))},run2_time_delay)}a(),!0==run2_autoplay_hover_pause&&$("#custom-run2").hover(function(){clearInterval(c)},function(){a()})}$("#next-run2").click(function(){run2_i++,run2_cnt++,run2_i<=run2_SlideNumber-run2_items?(run2_margin_offset-=run2_item_inner_width,$(".cliff-custom-run2").css("transform","translate3d("+run2_margin_offset+"px, 0px, 0px)"),$(this).addClass("active"),$("#prev-run2").addClass("active")):(run2_i=run2_SlideNumber-run2_items,$(this).removeClass("active"),run2_cnt=run2_SlideNumber-run2_items)}),$("#prev-run2").click(function(){run2_i--,run2_cnt--,run2_i>=0?(run2_margin_offset+=run2_item_inner_width,$(".cliff-custom-run2").css("transform","translate3d("+run2_margin_offset+"px, 0px, 0px)")):(run2_i=0,$(this).removeClass("active"),$("#next-run2").addClass("active"))})
   });
</script>