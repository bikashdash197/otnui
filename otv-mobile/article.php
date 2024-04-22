<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/bredcum.php'; ?>
    <style type="text/css">
     h1.heading-style-price {
    margin: 0;
    padding: 0;
    font-size: 21px;
    line-height: 25px;
    margin-bottom: 16px;
    font-weight: 700;
    /* width: fit-content; */
}
   ul.menu-list li.active {
   background-color: #fff;
   }
   .price-list {
   background-color: #EEF2FA;
    padding: 15px;
    border-radius: 7px;
    position: relative;
    width: 100%;
    display: inline-block;
   }
   .list-bar {
   text-align: center;
   }
   ul.menu-list {
   margin: 0;
   padding: 0;
   margin-bottom: 8px;
   }
   ul.menu-list li {
   display: inline;
   list-style-type: none;
   font-size: 17px;
   font-weight: 700;
   border-radius: 5px 5px 0 0;
   background-color: rgba(193, 213, 250, .45);
   margin-right: 2px;
   text-align: center;
   padding: 7px 16px;
   }
   a.is-block {
   cursor: pointer;
   text-decoration: none;
   padding: 0 30px;
   }
   .data-tab table tr {
   border-bottom: 1px solid #c4d1ea;
   }
   .bg_blue1 {
   background-color: #EEF2FA;
   }
   .data-board {
   background-color: white;
    padding: 15px;
    border-radius: 4px;
    display: inline-block;
    width: 100%;
   }
   .data-tab table tr td, .data-tab table tr th {
   padding: 5px;
   border-right: 1px solid #c4d1ea;
   font-size: 13px;
   }
   .data-tab table td:nth-child(2), .data-tab table th:nth-child(2) {
   text-align: center;
   white-space: nowrap;
   }
   .data-tab table td:nth-child(3), .data-tab table th:nth-child(3) {
   text-align: center;
   white-space: nowrap;
   }
   .data-tab table tr td img {
   width: 18px;
   height: 18px;
   margin-left: 10px;
   margin-bottom: 4px;
   }
   .price-list-header {
   position: relative;
   margin-bottom: 24px;
   display: block;
   border-bottom: dashed 1px #d5d7dc;
   }
   .price-list-logo {
    width: 77px;
    float: left;
    height: 77px;
    display: block;
    margin-right: 11px;
    background-color: #eef2fa;
}
   select.choose-date {
    float: right;
    display: inline-block; 
    position: absolute;
    right: 0px;
    bottom: -1px;
    padding: 7px 8px;
    background-color: #eef2fa;
    border: 1px solid #c2bdbd;
}
   span.increase {
   position: relative;
   width: 100px;
   }
   span.decrease {
   position: relative;
   width: 100px;
   }
   .data-tab table td span.increase:after {
   position: absolute;
   content: "";
   right: -27px;
   top: 2px;
   width: 0;
   height: 0;
   border-left: 5px solid transparent;
   border-right: 5px solid transparent;
   border-top: 8px solid red;
   }
   .data-tab table td span.decrease:after {
   position: absolute;
   content: "";
   right: -27px;
   top: 2px;
   width: 0;
   height: 0;
   border-left: 5px solid transparent;
   border-right: 5px solid transparent;
   border-bottom: 8px solid #41c541;
   }
   .mobile-welcome-container {
  margin-bottom: 15px;
}
.welcome-note h1 {
  margin: 10px 0 5px 0;
  font-size: 28px;
  line-height: 32px;
  color: #000;
  font-family: Faustina, serif;
}
.bd-youtube-responsive {
  width: 100%;
  height: 186px;
}
.welcome-note h2 {
  margin: 10px 0 5px 0;
  font-size: 15px;
  line-height: 22px;
  color: #a99898;
}
.voter-section-intro p {
  font-size: 18px;
  margin-bottom: 20px;
}
.reccommendations {
  overflow-y: scroll;
  width: 100%;
  margin-bottom: 25px;
}
.reccommendation-items {
  position: relative;
  display: table-cell;
  margin-right: 10px;
}
.reccommendation-items h5 {
  height: 84px;
  overflow: hidden;
  margin: 0;
  width: 120px;
  background-color: #f3f4f9;
  margin-right: 10px;
  padding: 4px;
  border-radius: 5px;
}
.reccommendation-items h5 a {
  color: #666;
  font-size: 12px;
  line-height: 19px;
}
.reccommendation-items h5 span {
  color: #b30707 !important;
  position: relative;
  font-size: 12px;
}
.reccommendation-items h5 span:before {
  content: "/";
  position: absolute;
  right: -8px;
  bottom: -2px;
}
.reccommendation-items h5 a {
  color: #666;
  font-size: 14px;
  line-height: 19px;
  height: 58px;
  overflow: hidden;
  margin: 0;
  width: 120px;
  background-color: #f3f4f9;
  margin-right: 2px;
  padding: 4px;
  border-radius: 5px;
}
h4.recommended-haeding {
  font-family: Faustina, serif;
  font-size: 20px;
  margin: 5px 0 10px 0;
  padding: 0;
}
.welcome-note p {
  font-size: 20px;
  margin: 0 0 25px 0;
  display: inline-block;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 30px;
  color: #252525;
}
.first-para-article p {
  font-size: 19px;
  margin: 0 0 25px 0;
  display: inline-block;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 30px;
  color: #252525;
}
.first-para-article h2 {
  font-size: 20px;
  margin: 0 0 10px 0;
  padding: 0;
  font-weight: 700;
}
.mobile-headline-container {
  float: left;
  width: 100%;
  margin-bottom: 10px;
}
.article-headline-image img {
  border-radius: 50%;
  width: 70px;
  height: 70px;
  object-fit: cover;
}
.article-headline-image {
  border-right: 1px dotted #d4d4d4;
}
.article-headline-content h6 {
  font-size: 14px;
  margin: 0;
  padding: 5px 0;
}
.article-headline-content {
  margin-top: 10px;
}
.article-updated img {
  width: 100%;
  height: auto;
  object-fit: cover;
}
.article-updated h6 {
  background-color: #eaf1f9;
  padding: 5px 15px 5px 15px;
  margin: 0;
  font-size: 11px;
  line-height: 16px;
  font-weight: 400;
  font-family: "Libre Franklin", sans-serif;
}
.article-updated-content {
  padding: 5px 15px 5px 5px;
  border-bottom: 1px solid #e6e6e6;
  margin-bottom: 15px;
  position: relative;
  min-height: 60px;
  float: left;
  width: 100%;
}
.article-updated-content img {
  width: 45px;
  height: 45px;
  object-fit: cover;
  border-radius: 50%;
  position: absolute;
  left: 15px;
  top: 7px;
}
.article-updated-content ul {
  margin: 0 0 0 61px;
  padding: 0;
}
.article-updated-content ul li {
  list-style: none;
  padding: 2px 0;
  font-size: 9px;
  line-height: 12px;
  font-family: "Libre Franklin", sans-serif;
  text-transform: uppercase;
  font-weight: 300;
}
.article-updated-content ul li i {
  margin-right: 10px;
  color: #b0b0b0;
  width: 6px;
}
.article-updated-socialmedia {
  margin-bottom: 15px;
  margin-top: 15px;
}
.article-updated-socialmedia ul {
  margin: 0;
  padding: 0;
}
.article-updated-socialmedia ul li {
  list-style: none;
  display: inline-block;
  margin-right: 5px;
}
.article-updated-socialmedia ul li a {
  text-decoration: none;
  display: block;
  font-size: 15px;
  background-color: #e6e6e6;
  display: block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border-radius: 50%;
  color: #a99393;
}
.article-news-summary {
  padding: 0;
  margin-bottom: 20px;
  font-size: 20px;
  margin: 0 0 25px 0;
  display: inline-block;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  line-height: 30px;
  color: #252525;
}
.article-news-summary h2 {
  margin: 0;
  padding: 10px 0;
  font-size: 26px;
}
.article-news-summary p {
  line-height: 26px;
  position: relative;
  padding-left: 28px;
  font-size: 17px;
  font-family: Faustina, serif;
  font-weight: 400;
}
.article-news-summary p:before {
  content: "";
  display: block;
  background-color: #a00606;
  position: absolute;
  left: 0;
  top: 9px;
  width: 18px;
  height: 10px;
}
.article-content {
  position: relative;
  float: left;
  font-size: 20px;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  line-height: 30px;
  color: #252525;
}
.article-content img {
  max-width: 100%;
  height: auto;
}
.article-content li {
  font-size: 20px;
  margin: 0 0 25px 0;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 30px;
  color: #252525;
}
.article-content iframe {
  max-width: 100% !important;
  display: block !important;
  margin: 0 auto 15px 0 !important;
}
.article-content embed {
  max-width: 100%;
  height: auto;
}
.twitter-tweet {
  margin: 0 auto;
}
.article-content figure {
  max-width: 100%;
  height: auto;
}
.article-content figure img {
  max-width: 100%;
  height: auto;
}
.first-para-article p:first-child:first-letter {
  font-size: 63px;
  float: left;
  margin: -5px 7px 0 0;
  padding: 0;
  line-height: 1;
}
.article-content-more:before {
  content: "";
}
.article-more-news p {
  font-size: 20px;
  margin: 0 0 25px 0;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 30px;
  color: #252525;
}
.article-more-news h2 {
  font-size: 20px;
  margin: 0 0 10px 0;
  padding: 0;
  font-weight: 400;
}
div#text {
  position: relative;
  display: block;
}
button.article-read-more {
  border: none;
  color: #fff;
  background-color: #f9c135;
  padding: 4px 10px 7px 10px;
  font-size: 20px;
  line-height: 40px;
  margin: 15px auto 15px auto;
  display: block;
  width: 220px;
  outline: 0;
  font-family: Faustina, serif;
  border-radius: 32px;
  margin-bottom: 30px;
  box-shadow: 0 14px 5px -9px rgb(0 0 0 / 27%);
  -webkit-box-shadow: 0 14px 5px -9px rgb(0 0 0 / 27%);
  -moz-box-shadow: 0 14px 5px -9px rgba(0, 0, 0, 0.27);
}
.first-para-article p {
  font-size: 20px;
  margin: 0 0 25px 0;
  display: inline-block;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 30px;
  color: #252525;
}
.article-content:first-letter {
  color: #232121;
  font-size: 58px;
}
ul.article-summery-tags-list {
  margin: 0 0 15px 0;
  padding: 0;
}
ul.article-summery-tags-list li {
  list-style-type: none;
  display: inline-block;
  margin: 0 5px 5px 0;
  width: auto !important;
}
ul.article-summery-tags-list li a {
  text-decoration: none;
  display: block;
  border: solid 1px #d4d4d4;
  line-height: 30px;
  padding: 0 10px 3px 10px;
  border-radius: 5px;
  color: #333;
  text-transform: capitalize;
  font-size: 20px;
}
ul.article-summery-tags-list li a:hover {
  background-color: #7b0505;
  border: solid 1px #7b0505;
  color: #fff;
}
.inside-also-read {
  background-color: #f0f1f6;
  border: solid 1px #dddee4;
  padding: 0;
  width: 100%;
  float: left;
  margin: 0 15px 0 0;
  height: 200px;
  overflow: hidden;
}
.custom-story-img-block {
  position: relative;
  background-color: #f0f1f6;
}
.custom-story-img-block img {
  max-width: 100%;
  height: auto;
}
.custom-story-img-block span {
  text-align: center;
  display: block;
  font-family: "Libre Franklin", sans-serif;
  font-size: 15px;
  padding: 6px;
}
.inside-also-read h3 {
  margin: 0 0 10px 0;
  padding: 0;
  font-weight: 800;
  font-size: 22px;
  display: none;
}
.inside-also-read-items img {
  width: 100%;
  height: 79px;
  object-fit: cover;
}
.inside-also-read-items h4 a {
  margin: 0;
  padding: 5px;
  color: #000;
  font-size: 17px;
  line-height: 18px;
}
.inside-also-read-items h4 {
  margin: 0;
  padding: 5px;
  overflow: hidden;
  height: 84px;
}
.inside-also-read-items {
  position: relative;
  height: 200px;
  float: left;
  width: 30%;
  margin-right: 10px;
}
a.also-read-bd-more {
  display: block;
  position: absolute;
  left: 33px;
  bottom: 8px;
  color: #f7372f;
  font-size: 13px;
  font-family: Faustina, serif;
}
a.also-read-bd-more:before {
  font-family: "Font Awesome 5 Free";
  content: "\f0a9";
  display: block;
  position: absolute;
  left: -24px;
  bottom: -1px;
  color: #f7372f;
  font-weight: 700;
}
.owl-carousel.inside-also-read-slide {
  display: block;
}
.inside-also-read .owl-dots {
  display: none;
}
section.main-error-sec {
  position: relative;
  float: left;
  width: 100%;
  margin: 30px 0;
  text-align: center;
  padding: 0 15px;
}
section.main-error-sec h2 {
  margin: 0;
  padding: 0;
  font-size: 100px;
  font-weight: 700;
  color: #444;
}
section.main-error-sec h3 {
  margin: 0;
  padding: 0;
  font-size: 32px;
  font-weight: 700;
  color: #444;
  text-transform: capitalize;
}
section.main-error-sec p {
  margin: 15px 0;
  padding: 0;
  color: #a9a5a5;
  font-size: 17px;
}
.error-home-redirect {
  color: #000;
  text-transform: capitalize;
  font-weight: 700;
  font-size: 16px;
  border: none;
  background: no-repeat;
  outline: 0;
}
section.main-error-sec ul {
  margin: 30px 0 0 0;
  padding: 0;
  display: inline-flex;
  width: 100%;
}
section.main-error-sec ul li:first-child input {
  border: solid 2px #f7e4e4;
  width: 100%;
  line-height: 36px;
}
section.main-error-sec ul li:first-child input {
  border: solid 2px #f7e4e4;
  width: 100%;
  line-height: 36px;
}
section.main-error-sec ul li {
  list-style-type: none;
  display: inline-block;
  margin: 0;
  padding: 0;
}
section.main-error-sec ul li:first-child {
  width: calc(100% - 80px);
}
section.main-error-sec ul li:last-child input {
  background-color: #a00606;
  border: none;
  color: #fff;
  text-transform: uppercase;
  font-weight: 700;
  font-size: 15px;
  width: 85px;
  position: relative;
  margin: 0 0 0 -4px;
  line-height: 39px;
  outline: 0;
  transition-duration: 1s;
}
.custom-ad-one img {
  width: 100%;
  height: auto;
  margin: 14px 0;
}
.article-multi-credit {
  background-color: #21212199;
  padding: 3px 3px;
  color: #fff;
  font-size: 11px;
  width: fit-content;
  transition-duration: 0.5s;
  float: right;
  font-weight: 400;
  position: absolute;
  left: 0;
  bottom: 0;
  line-height: 17px;
}
.article-multi-credit i {
  margin-right: 5px;
  color: #b5afaf;
}
.article-multi-thumb-item p {
  margin-top: 0;
  text-align: left;
  background-color: #eaf1f9;
  padding: 5px 15px 5px 15px;
  margin: 0;
  font-size: 12px;
  line-height: 16px;
  font-weight: 400;
  font-family: "Libre Franklin", sans-serif;
}
.article-credit button.owl-next,
.article-credit button.owl-prev {
  color: #fff !important;
  border: none !important;
  outline: 0;
  width: 34px;
  height: 78px;
  font-size: 94px !important;
  border-radius: 50%;
  position: absolute;
  z-index: 5 !important;
  transition-duration: 0.5s;
  opacity: 0.5;
  top: 30px;
}
.article-credit button.owl-prev:hover,
.credit button.owl-next:hover {
  opacity: 1;
  transition-duration: 0.5s;
}
.article-credit button.owl-prev {
  left: 5%;
}
.article-credit button.owl-next {
  right: 5%;
}
.article-credit button.owl-prev.disabled {
  display: none;
}
.article-credit button.owl-next.disabled {
  display: none;
}
.bd-ft-slide-sec {
  position: relative;
  height: 67px;
  float: left;
  width: 100%;
}
.bd-ft-slide {
  float: left;
  width: 100%;
  -webkit-box-shadow: -1px -6px 5px -3px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: -1px -6px 5px -3px rgba(0, 0, 0, 0.16);
  box-shadow: -1px -6px 5px -3px rgba(0, 0, 0, 0.16);
  background-color: #fff;
  z-index: 1;
  height: 67px;
  position: relative;
  overflow: hidden;
}
.fixed-article-slide-sec {
  bottom: 0;
  position: sticky;
  width: 100%;
  z-index: 2;
}
.bd-ft-slide-hide {
  height: 0 !important;
}
.bd-ft-slide-hide .bd-ft-slide {
  height: 0 !important;
}
.article-slide-item {
  position: relative;
  min-height: 76px;
  border-right: 2px #f1eaea solid;
  padding: 10px 0 10px 106px;
  margin: 0 5px;
}
.article-slide-item img {
  position: absolute;
  width: 96px !important;
  height: 54px;
  object-fit: cover;
  left: 0;
  top: 10px;
}
.article-slide-item ul {
  margin: 0;
  padding: 0 20px 0 0;
  line-height: 15px;
  height: 54px;
  overflow: hidden;
  vertical-align: middle;
  display: table-cell;
}
.article-slide-item ul li {
  list-style-type: none;
  display: inline;
}
.article-slide-item ul li:first-child {
  position: relative;
  margin-right: 15px;
}
.article-slide-item ul li:first-child:before {
  content: "";
  display: block;
  background-color: #e92b28;
  width: 1px;
  height: 10px;
  position: absolute;
  bottom: 3px;
  right: -10px;
  transform: rotate(10deg);
}
.article-slide-item ul li a {
  font-size: 13px;
  text-decoration: none;
  display: inline;
  color: #000;
}
.article-slide-item ul li:first-child a {
  color: #b30707;
}
.article-slide-item ul li a:hover {
  color: #af262d;
}
button.nextartslide,
button.prevartslide {
  position: absolute;
  top: 4px;
  border: none;
  outline: 0;
  z-index: 1;
  font-size: 30px;
  color: rgb(123 123 123 / 64%);
  transition-duration: 1s;
  width: 90px;
  height: 100%;
  display: none;
}
button.prevartslide {
  left: 0;
  background: linear-gradient(
    -90deg,
    rgba(0, 212, 255, 0) 0,
    rgb(255 255 255) 80%
  );
  text-align: left;
}
button.nextartslide {
  right: 0;
  background: linear-gradient(
    90deg,
    rgba(0, 212, 255, 0) 0,
    rgb(255 255 255) 80%
  );
  text-align: right;
}
button.nextartslide:hover,
button.prevartslide:hover {
  color: #333;
  transition-duration: 1s;
}
.article-slide-item-1st {
  position: relative;
  min-height: 76px;
  padding: 16px 32px 34px 32px;
  text-align: center;
}
.article-slide-item-1st h4 {
  margin: 8px 0 0 0;
  padding: 0;
  text-align: left;
}
.article-slide-item-1st ul {
  margin: -30px 0 0 0;
  padding: 0;
  float: right;
}
.article-slide-item-1st ul li {
  list-style-type: none;
  display: inline-block;
  margin-left: 15px;
}
.article-slide-item-1st ul li:first-child a {
  background-image: url(../images/single-sprite.png);
  background-position: -119px -353px;
}
.article-slide-item-1st ul li:last-child a {
  background-image: url(../images/single-sprite.png);
  background-position: -167px -353px;
}
.article-slide-item-1st ul li a {
  text-decoration: none;
  display: block;
  width: 40px;
  height: 40px;
}
.read-in-app:hover {
  color: #f4b01b;
  transition-duration: 0.5s;
}
.article-slide-sec {
  position: relative;
}
button.bd-ft-slide-toggle {
  position: absolute;
  right: 10px;
  top: -18px;
  background-color: #f0af35;
  border: none;
  outline: 0;
  color: #fff;
  font-size: 19px;
  padding: 0;
  height: 19px;
  width: 25px;
  text-align: center;
  border-radius: 18px 18px 0 0;
}
.picture-gallery {
  position: relative;
  padding: 0 0 10px 106px;
  background: #f6f6f6;
  border-top: 3px solid #bd0000;
  margin-bottom: 15px;
  min-height: 62px;
}
.picture-gallery-image {
  left: 0;
  top: 3px;
  position: absolute;
}
.picture-gallery-image img {
  width: 96px;
  height: 54px;
}
.picture-gallery-image {
  left: 0;
  position: absolute;
}
.picture-gallery ul {
  margin: 0;
  padding: 0;
  line-height: 17px;
}
.picture-gallery ul li {
  list-style-type: none;
  display: inline;
}
.picture-gallery ul li:first-child:before {
  content: "";
  display: block;
  background-color: #e92b28;
  width: 1px;
  height: 9px;
  position: absolute;
  top: 5px;
  right: -7px;
  transform: rotate(10deg);
}
.picture-gallery ul li a {
  font-size: 15px;
  text-decoration: none;
  display: inline;
  color: #333;
}
.picture-gallery ul li:first-child a {
  color: #e92b28;
}
.picture-gallery ul li:first-child {
  position: relative;
  margin-right: 9px;
}
ul.category-news-item-story {
  margin: 15px 0;
  padding: 0;
}
ul.category-news-item-story li {
  list-style-type: none;
  display: inline;
}
ul.category-news-item-story li:first-child {
  position: relative;
  margin-right: 9px;
}
ul.category-news-item-story li:first-child:before {
  content: "";
  display: block;
  background-color: #b30707;
  width: 1px;
  height: 12px;
  position: absolute;
  bottom: 2px;
  right: -6px;
  transform: rotate(10deg);
}
ul.category-news-item-story li a:hover {
  color: #af262d;
}
ul.category-news-item-story li:first-child a {
  color: #b30707;
}
ul.category-news-item-story li a {
  font-size: 20px;
  text-decoration: none;
  display: inline;
  color: #000;
  line-height: 21px;
}
.news-first-two-items ul.category-news-item-story li a {
  font-size: 24px;
  font-weight: 400;
  line-height: 27px;
}
a.common-more-button {
  background-color: #333;
  color: #fff;
  line-height: 30px;
  display: block;
  width: fit-content;
  padding: 0 10px;
  font-weight: 700;
  font-size: 13px;
  transition-duration: 1s;
}
a.common-more-button:after {
  font-family: "Font Awesome 5 Free";
  content: "\f30b";
  margin-left: 8px;
}
a.common-more-button:hover {
  background-color: red;
  transition-duration: 1s;
}
.article-multi-thumb-img img {
    width: 100%!important;
    height: auto;
    margin: 0 auto;
    display: block;
}
.article-multi-thumb-img {
    position: relative;
    width: 100%;
}
/*=================== //ARTICLE ====================*/
    </style>
    <!--============== BREDCUM ===============-->
   <!--============== ADVERTISEMENT ===============-->
<!-- <div class="otv-300-250-ad"><div id="div-gpt-ad-22339525376-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22339525376-0"); }); </script></div></div> -->
<!--============== //ADVERTISEMENT ===============-->

<!--============ ARTICLE =============-->
    <div class="container mobile-welcome-container"> 
        <div class="welcome-note"> 
                    <h1>Sensex, Nifty Edge Higher On Gains In Auto, Energy Stocks; Gold Rallies Rs 176 </h1>
                <!--<h2></h2>-->

                      <p>Declining for the second straight session, the rupee on Monday fell 9 paise to close at 74.24 (provisional) against the US dollar as muted domestic equities and elevated crude oil prices weighed on investor sentiments.</p>         
        </div>
    </div>  
<!--=========== //ARTICLE ============-->

<!-- UPDATED -->
<div class="container article-updated-socialmedia">
        <ul class="article-share-btn">
             <li>
                        <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://odishatv.in/news/business/sensex-nifty-edge-higher-on-gains-in-auto-energy-stocks-gold-rallies-rs-176--168610&t=Sensex%2C+Nifty+Edge+Higher+On+Gains+In+Auto%2C+Energy+Stocks%3B+Gold+Rallies+Rs+176%C2%A0','_blank'); return false;" ><img src="https://odishatv.in/commondir/images/svg/fb-gray.svg" width="20" height="20" alt="Facebook">
                </a>
          </li>
          <li><a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://odishatv.in/news/business/sensex-nifty-edge-higher-on-gains-in-auto-energy-stocks-gold-rallies-rs-176--168610&text=Sensex%2C+Nifty+Edge+Higher+On+Gains+In+Auto%2C+Energy+Stocks%3B+Gold+Rallies+Rs+176%C2%A0&hashtags=otv','_blank'); return false;"><img src="https://odishatv.in/commondir/images/svg/twit-gray.svg" width="20" height="20" alt="Twitter"></a>
          </li> 
          <li>
                        <a title="Share on Telegram" href="javascript:void(0);"><img src="https://odishatv.in/commondir/images/svg/telegram-gray.svg" width="20" height="20" alt="Telegram">
                </a>
          </li> 
            <!--<li>
            <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
            <i class="fab fa-instagram"></i>
            </a>
            </li>-->
            <!--<li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li>-->
            <li><a href="javascript:void(0);" onclick="javascript: window.print(); return false;"><img src="https://odishatv.in/commondir/images/svg/print-gray.svg" width="20" height="20" alt="Print"></a></li>
          </ul>
    


</div> 
<div class="article-multi-thumb"><div id="storymultiimg" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="item active"><div class="article-multi-thumb-item">
      <div class="article-multi-thumb-img"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1632134870.jpg" alt="Sensex, Nifty Edge Higher On Gains In Auto, Energy Stocks; Gold Rallies Rs 176 " title="Sensex, Nifty Edge Higher On Gains In Auto, Energy Stocks; Gold Rallies Rs 176 " style="width: 100%; height: 205px;"><span class="article-multi-credit"><i class="fas fa-camera"></i>Credit: IANS</span></div><p>Sensex, Nifty Edge Higher On Gains In Auto, Energy Stocks; Gold Rallies Rs 176 </p></div></div></div></div></div><div class="container article-updated-content">
<a href="https://odishatv.in/author/pti-16345">
<img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/PTI_1621847221.jpeg" alt="PTI" title="PTI">
</a>
    <ul>

        <li><i class="fas fa-map-marker-alt"></i>
                      <a href="https://odishatv.in/india">  
                
        India</a>, Published: Monday, 17 January 2022</li>
        <li><i class="far fa-clock"></i>Updated: 17 January 2022, 05:21 PM IST</li>
    <li><i class="fas fa-user-edit"></i>By: <a href="https://odishatv.in/author/pti-16345">PTI</a></li>


    </ul>   
</div>

<!-- //UPDATED -->
<!-- NEWS SUMMARY -->
<div class="container">
    <div class="article-news-summary"><h2>News Summary</h2><p>Gold prices rose by Rs 176 to Rs 47,881 per 10 grams.</p><p>Silver prices declined by Rs 505 to Rs 61,005 per kg from Rs 61,510 per kg in the previous trade.</p></div><div class="otv-300-250-ad"><div id="div-gpt-ad-22346280561-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346280561-0"); }); </script></div></div> <div class="article-content article-content-more"><div class="first-para-article"><p>Benchmark BSE Sensex rose by 85 points on Monday following gains in auto, IT, energy and FMCG stocks amid a firm trend in European markets.</p><p>In a largely range-bound session, the 30-share index ended 85.88 points or 0.14 per cent higher at 61,308.91. Similarly, the NSE Nifty advanced 52.35 points or 0.29 per cent to 18,308.10.</p><h4 class="recommended-haeding">Trending News</h4><div class="reccommendations"><div class="reccommendation-items">
                      <h5><a href="https://odishatv.in/weather"><span>Weather</span></a> <a href="https://odishatv.in/news/weather/top-10-coldest-places-in-odisha-check-imd-s-forecast-for-next-few-days-168669">Top 10 Coldest Places In Odisha; Check IMD’s Forecast For Next Few Days</a></h5>
                      </div><div class="reccommendation-items">
                      <h5><a href="https://odishatv.in/education"><span>Education</span></a> <a href="https://odishatv.in/news/education/cbse-school-in-bhubaneswar-seeks-money-for-marks-supreme-court-issues-notice-168734">CBSE School In Bhubaneswar ‘Seeks' Money For Marks, Supreme Court Issues Notice</a></h5>
                      </div><div class="reccommendation-items">
                      <h5><a href="https://odishatv.in/covid-19"><span>COVID-19</span></a> <a href="https://odishatv.in/news/covid-19/lockdown-shutdown-in-odisha-know-what-the-director-of-health-services-says-168738">Lockdown & Shutdown In Odisha: Know What The Director Of Health Services Says</a></h5>
                      </div><div class="reccommendation-items">
                      <h5><a href="https://odishatv.in/jobs"><span>Jobs</span></a> <a href="https://odishatv.in/news/jobs/becil-recruitment-2022-big-vacancy-for-multiple-posts-announced-check-details-168748">BECIL Recruitment 2022: Big Vacancy For Multiple Posts Announced, Check Details</a></h5>
                      </div><div class="reccommendation-items">
                      <h5><a href="https://odishatv.in/jobs"><span>Jobs</span></a> <a href="https://odishatv.in/news/jobs/osssc-combined-recruitment-exam-admit-card-released-here-s-how-to-download--168761">OSSSC Combined Recruitment Exam Admit Card Released, Here’s How To Download  </a></h5>
                      </div></div></div><!--<div id="div-gpt-ad-1634194649039-0" style="width:100%; height:250px; margin-bottom: 15px; display:inline-block;background-color: #f9faff;position: relative;"></div>--><div class="article-more-news" id="text" style="display: none;"><p>Ultratech Cement was the top gainer in the Sensex pack, surging nearly 3 per cent, followed by M&amp;M, Maruti, Tata Steel, TCS, L&amp;T, SBI and HUL.</p><div class="inside-also-read">
                          <h3>Also Read</h3>

                          <div class="owl-carousel inside-also-read-slide"><div class="inside-also-read-items">
                              <a href="https://odishatv.in/news/business/world-s-top-ten-saw-wealth-double-to-1-5-trillion-during-pandemic-168591">
                                <img alt="World's Top Ten Saw Wealth Double To $ 1.5 Trillion During Pandemic" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642409615.jpg" title="World's Top Ten Saw Wealth Double To $ 1.5 Trillion During Pandemic" width="400" />
                              </a>

                              <h4>
                                <a href="https://odishatv.in/news/business/world-s-top-ten-saw-wealth-double-to-1-5-trillion-during-pandemic-168591">World's Top Ten Saw Wealth Double To $ 1.5 Trillion During Pandemic</a>
                              </h4>
                              <a class="also-read-bd-more" href="https://odishatv.in/news/business/world-s-top-ten-saw-wealth-double-to-1-5-trillion-during-pandemic-168591">Read More</a>
                            </div><div class="inside-also-read-items">
                              <a href="https://odishatv.in/news/business/crisil-to-give-esg-impact-on-credit-profiles-168461">
                                <img alt="Crisil To Give ESG Impact On Credit Profiles" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642236992.jpg" title="Crisil To Give ESG Impact On Credit Profiles" width="400" />
                              </a>

                              <h4>
                                <a href="https://odishatv.in/news/business/crisil-to-give-esg-impact-on-credit-profiles-168461">Crisil To Give ESG Impact On Credit Profiles</a>
                              </h4>
                              <a class="also-read-bd-more" href="https://odishatv.in/news/business/crisil-to-give-esg-impact-on-credit-profiles-168461">Read More</a>
                            </div><div class="inside-also-read-items">
                              <a href="https://odishatv.in/news/business/traders-body-moves-competition-commission-against-amazon-cloudtail-deal-168421">
                                <img alt="Traders' Body Moves Competition Commission Against Amazon-Cloudtail Deal" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634024342.jpg" title="Traders' Body Moves Competition Commission Against Amazon-Cloudtail Deal" width="400" />
                              </a>

                              <h4>
                                <a href="https://odishatv.in/news/business/traders-body-moves-competition-commission-against-amazon-cloudtail-deal-168421">Traders' Body Moves Competition Commission Against Amazon-Cloudtail Deal</a>
                              </h4>
                              <a class="also-read-bd-more" href="https://odishatv.in/news/business/traders-body-moves-competition-commission-against-amazon-cloudtail-deal-168421">Read More</a>
                            </div></div>
                        </div><div class="otv-300-250-ad"><div id="div-gpt-ad-22346218184-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346218184-0"); }); </script></div></div><p>On the other hand, HCL Tech, HDFC Bank, Axis Bank, Tech Mahindra, PowerGrid, and Sun Pharma were among the laggards, falling up to 5.89 per cent.</p><p>Indian markets opened marginally positive tracking mixed Asian market peers as data showed Chinese economy grew at 8.1 per cent in 2021, marginally lower than expectations of 8.4 per cent.</p><p>&quot;During the afternoon session, markets showed some strength and traded in positive territory as traders were getting relief, as foreign portfolio investors (FPIs) reversed the three-month selling streak in January by investing a net Rs 3,117 crore in Indian markets. However, the gains were capped during the day due to subdued performance by financials, IT and healthcare, Narendra Solanki, Head- Equity Research (Fundamental), Anand Rathi Shares &amp; Stock Brokers, said.</p><p>Elsewhere in Asia, bourses in Shanghai and Tokyo ended up, while Hong Kong and Seoul closed in the red. Stock exchanges in Europe were trading with gains in mid-session deals.</p><p>Meanwhile, international oil benchmark Brent crude slipped 0.26 per cent to USD 85.84 per barrel.</p><p>Foreign institutional investors (FIIs) were net sellers in the capital market, as they sold shares worth Rs 1,598.20 crore on Friday, according to stock exchange data.</p><h2><strong>Rupee Slips 9 Paise To Close At 74.24 Against US Dollar</strong></h2><p>Declining for the second straight session, the rupee on Monday fell 9 paise to close at 74.24 (provisional) against the US dollar as muted domestic equities and elevated crude oil prices weighed on investor sentiments.</p><p>At the interbank foreign exchange market, the local currency opened at 74.18 against the American currency and witnessed an intra-day high of 74.16 and a low of 74.36 during the session.</p><p>The rupee finally settled at 74.24, down 9 paise over its previous close of 74.15 against the greenback.</p><p>The dollar index, which gauges the greenback&#39;s strength against a basket of six currencies, was trading 0.05 per cent down at 95.11.</p><p>&quot;Weaker economic data, higher bond yields, a surge in crude oil prices and state-run banks dollar buying on behalf of importers weighed on rupee for the second day in trot,&quot; said Dilip Parmar, Research Analyst, HDFC Securities.</p><p>Global forex markets remain calm as the US market remained closed on Monday on account of Martin Luther King Day.</p><h2><strong>Gold Rallies Rs 176 On Global Cues</strong></h2><p>Gold prices rose by Rs 176 to Rs 47,881 per 10 grams in the national capital on Monday in line with gains in the precious metal in the global markets and a weaker rupee, according to HDFC Securities.</p><p>In the previous trade, the precious metal had settled at Rs 47,705 per 10 grams.</p><p>Silver prices, however, declined by Rs 505 to Rs 61,005 per kg from Rs 61,510 per kg in the previous trade.</p><p>The rupee dipped by 9 paise to close at 74.24 (provisional) against the US dollar on Monday.</p><div class="otv-300-250-ad"><div id="div-gpt-ad-22458748305-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22458748305-0"); }); </script></div></div><p>In the international market, gold was trading with gains at USD 1,822 per ounce and silver was flat at USD 23.03 per ounce.</p><p>&quot;Gold prices traded firm with spot gold prices at COMEX trading 0.30 per cent up at USD 1,822 per ounce on Monday,&quot; HDFC Securities Senior Analyst (Commodities) Tapan Patel said.</p><div class="article-summery-tags"><ul class="article-summery-tags-list"><li><a href="https://odishatv.in/tag/indian-stock-market">Indian Stock Market</a></li><li><a href="https://odishatv.in/tag/sensex">Sensex</a></li><li><a href="https://odishatv.in/tag/gold-price">Gold Price</a></li><li><a href="https://odishatv.in/tag/silver-price">Silver Price</a></li><li><a href="https://odishatv.in/tag/indian-rupee-value">Indian Rupee Value</a></li></ul></div> </div></div><button class="article-read-more" id="toggle-story-content">Read More</button><div class="otv-300-250-ad"><div id="div-gpt-ad-1626931653696-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-1626931653696-0"); }); </script></div></div></div>
  <div class="container other-headline-container">
      <h3 class="heading-style-one">Related to this</h3><div class="picture-gallery">
      <div class="picture-gallery-image">
      <a href="https://odishatv.in/news/business/wpi-inflation-eases-to-13-56-pc-in-dec-food-items-veggies-see-price-rise-168377"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642145448.jpg" alt="WPI Inflation Eases To 13.56 Pc In Dec; Food Items, Veggies See Price Rise" title="WPI Inflation Eases To 13.56 Pc In Dec; Food Items, Veggies See Price Rise"></a>
      </div>
      <ul>
        <li><a href="https://odishatv.in/business">Business</a></li>
        <li><a href="https://odishatv.in/news/business/wpi-inflation-eases-to-13-56-pc-in-dec-food-items-veggies-see-price-rise-168377">WPI Inflation Eases To 13.56 Pc In Dec; Food Items, Veggies See Price Rise</a></li>
      </ul>
    </div><div class="category-news-item">
      <ul class="category-news-item-story">
       <li><a href="https://odishatv.in/business">Business</a></li>
        <li><a href="https://odishatv.in/news/business/global-economy-projected-to-grow-by-4-in-2022-3-5-in-2023-un-report-168355">Global Economy Projected To Grow By 4% In 2022, 3.5% In 2023: UN Report</a></li>
        </ul>
    </div><div class="category-news-item">
      <ul class="category-news-item-story">
       <li><a href="https://odishatv.in/business">Business</a></li>
        <li><a href="https://odishatv.in/news/business/two-wheeler-maker-yezdi-back-in-indian-market-after-26-years-launches-3-models-168347">Two-Wheeler Maker Yezdi Back In Indian Market After 26 Years, Launches 3 Models</a></li>
        </ul>
    </div><div class="category-news-item">
      <ul class="category-news-item-story">
       <li><a href="https://odishatv.in/business">Business</a></li>
        <li><a href="https://odishatv.in/news/business/rbi-likely-to-hike-interest-rates-by-up-to-100-basis-points-in-2022-168289">RBI Likely To Hike Interest Rates By Up To 100 Basis Points In 2022</a></li>
        </ul>
    </div><a href="https://odishatv.in/" class="common-more-button">more</a></div>
  <div class="price-list">
     <div class="price-list-header">
        <img src="images/petrol-pump.png" class="price-list-logo">
        <h1 class="heading-style-price">
           Petrol Price in Other Cities of Odisha                            
        </h1>
        <select class="choose-date">
           <option value="">Select Date</option>
           <option value="">01-06-2022</option>
           <option value="">10-06-2022</option>
           <option value="">11-06-2022</option>
           <option value="">12-06-2022</option>
        </select>
     </div>
     <div class="list-bar">
        <ul class="menu-list">
           <li class="active">
              <a class="is-block" href="#1" data-toggle="tab">Petrol</a>
           </li>
           <li>
              <a class="is-block" href="#2" data-toggle="tab">Diesel</a>
           </li>
        </ul>
     </div>
     <div class="data-board">
        <div class="data-board-structure tab-content">
           <div class="data-tab tab-pane active" id="1">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tbody>
                    <tr class="bg_blue1">
                       <th scope="col">City</th>
                       <th scope="col">Price</th>
                       <th scope="col">Increase/Decrease</th>
                    </tr>
                    <tr>
                       <td>Angul</td>
                       <td>00.57 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Baleshwar</td>
                       <td>103.58 ₹/L</td>
                       <td><span class="decrease">0.26</span></td>
                    </tr>
                    <tr>
                       <td>Bargarh</td>
                       <td>105.28 ₹/L</td>
                       <td><span class="increase">1.27</span></td>
                    </tr>
                    <tr>
                       <td>Bhadrak</td>
                       <td>103.97 ₹/L</td>
                       <td><span class="decrease">0.99</span></td>
                    </tr>
                    <tr>
                       <td>Bolangir</td>
                       <td>105.20 ₹/L</td>
                       <td><span class="increase">0.18</span></td>
                    </tr>
                    <tr>
                       <td>Boudh</td>
                       <td>105.46 ₹/L</td>
                       <td><span class="decrease">0.90</span></td>
                    </tr>
                    <tr>
                       <td>Cuttack</td>
                       <td>103.78 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Deogarh</td>
                       <td>104.00 ₹/L</td>
                       <td><span class="decrease">0.35</span></td>
                    </tr>
                    <tr>
                       <td>Dhenkanal</td>
                       <td>104.17 ₹/L</td>
                       <td><span class="increase">0.90</span></td>
                    </tr>
                    <tr>
                       <td>Gajapati</td>
                       <td>105.11 ₹/L</td>
                       <td><span class="decrease">0.55</span></td>
                    </tr>
                    <tr>
                       <td>Ganjam</td>
                       <td>104.18 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Jagatsinghpur</td>
                       <td>102.99 ₹/L</td>
                       <td><span class="decrease">0.26</span></td>
                    </tr>
                    <tr>
                       <td>Jajpur</td>
                       <td>104.12 ₹/L</td>
                       <td><span class="increase">0.66</span></td>
                    </tr>
                    <tr>
                       <td>Jharsuguda</td>
                       <td>103.16 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Kalahandi</td>
                       <td>106.47 ₹/L</td>
                       <td><span class="decrease">0.30</span></td>
                    </tr>
                    <tr>
                       <td>Kandhamal</td>
                       <td>105.94 ₹/L</td>
                       <td><span class="increase">1.78</span></td>
                    </tr>
                    <tr>
                       <td>Kendrapara</td>
                       <td>103.05 ₹/L</td>
                       <td><span class="decrease">0.02</span></td>
                    </tr>
                    <tr>
                       <td>Keonjhar</td>
                       <td>104.36 ₹/L</td>
                       <td><span class="increase">0.56</span></td>
                    </tr>
                    <tr>
                       <td>Khordha</td>
                       <td>103.47 ₹/L</td>
                       <td><span class="decrease">0.07</span></td>
                    </tr>
                    <tr>
                       <td>Koraput</td>
                       <td>108.23 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Malkangiri</td>
                       <td>108.91 ₹/L</td>
                       <td><span class="decrease">0.01</span></td>
                    </tr>
                    <tr>
                       <td>Mayurbhanj</td>
                       <td>103.64 ₹/L</td>
                       <td><span class="increase">0.97</span></td>
                    </tr>
                    <tr>
                       <td>Nabarangapur</td>
                       <td>107.79 ₹/L</td>
                       <td><span class="decrease">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Nayagarh</td>
                       <td>103.63 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Nuaparha</td>
                       <td>106.50 ₹/L</td>
                       <td><span class="decrease">0.75</span></td>
                    </tr>
                    <tr>
                       <td>Puri</td>
                       <td>103.26 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Rayagada</td>
                       <td>107.04 ₹/L</td>
                       <td><span class="decrease">0.28</span></td>
                    </tr>
                    <tr>
                       <td>Sambalpur</td>
                       <td>103.58 ₹/L</td>
                       <td><span class="increase">0.22</span></td>
                    </tr>
                    <tr>
                       <td>Sonapur</td>
                       <td>104.53 ₹/L</td>
                       <td><span class="increase">0.98</span></td>
                    </tr>
                    <tr>
                       <td>Sundargarh</td>
                       <td>103.77 ₹/L</td>
                       <td><span class="increase">1.01</span></td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div class="data-tab tab-pane" id="2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tbody>
                    <tr class="bg_blue1">
                       <th scope="col">City</th>
                       <th scope="col">Price</th>
                       <th scope="col">Increase/Decrease</th>
                    </tr>
                    <tr>
                       <td>Angul</td>
                       <td>00.57 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Baleshwar</td>
                       <td>103.58 ₹/L</td>
                       <td><span class="decrease">0.26</span></td>
                    </tr>
                    <tr>
                       <td>Bargarh</td>
                       <td>105.28 ₹/L</td>
                       <td><span class="increase">1.27</span></td>
                    </tr>
                    <tr>
                       <td>Bhadrak</td>
                       <td>103.97 ₹/L</td>
                       <td><span class="decrease">0.99</span></td>
                    </tr>
                    <tr>
                       <td>Bolangir</td>
                       <td>105.20 ₹/L</td>
                       <td><span class="increase">0.18</span></td>
                    </tr>
                    <tr>
                       <td>Boudh</td>
                       <td>105.46 ₹/L</td>
                       <td><span class="decrease">0.90</span></td>
                    </tr>
                    <tr>
                       <td>Cuttack</td>
                       <td>103.78 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Deogarh</td>
                       <td>104.00 ₹/L</td>
                       <td><span class="decrease">0.35</span></td>
                    </tr>
                    <tr>
                       <td>Dhenkanal</td>
                       <td>104.17 ₹/L</td>
                       <td><span class="increase">0.90</span></td>
                    </tr>
                    <tr>
                       <td>Gajapati</td>
                       <td>105.11 ₹/L</td>
                       <td><span class="decrease">0.55</span></td>
                    </tr>
                    <tr>
                       <td>Ganjam</td>
                       <td>104.18 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Jagatsinghpur</td>
                       <td>102.99 ₹/L</td>
                       <td><span class="decrease">0.26</span></td>
                    </tr>
                    <tr>
                       <td>Jajpur</td>
                       <td>104.12 ₹/L</td>
                       <td><span class="increase">0.66</span></td>
                    </tr>
                    <tr>
                       <td>Jharsuguda</td>
                       <td>103.16 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Kalahandi</td>
                       <td>106.47 ₹/L</td>
                       <td><span class="decrease">0.30</span></td>
                    </tr>
                    <tr>
                       <td>Kandhamal</td>
                       <td>105.94 ₹/L</td>
                       <td><span class="increase">1.78</span></td>
                    </tr>
                    <tr>
                       <td>Kendrapara</td>
                       <td>103.05 ₹/L</td>
                       <td><span class="decrease">0.02</span></td>
                    </tr>
                    <tr>
                       <td>Keonjhar</td>
                       <td>104.36 ₹/L</td>
                       <td><span class="increase">0.56</span></td>
                    </tr>
                    <tr>
                       <td>Khordha</td>
                       <td>103.47 ₹/L</td>
                       <td><span class="decrease">0.07</span></td>
                    </tr>
                    <tr>
                       <td>Koraput</td>
                       <td>108.23 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Malkangiri</td>
                       <td>108.91 ₹/L</td>
                       <td><span class="decrease">0.01</span></td>
                    </tr>
                    <tr>
                       <td>Mayurbhanj</td>
                       <td>103.64 ₹/L</td>
                       <td><span class="increase">0.97</span></td>
                    </tr>
                    <tr>
                       <td>Nabarangapur</td>
                       <td>107.79 ₹/L</td>
                       <td><span class="decrease">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Nayagarh</td>
                       <td>103.63 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Nuaparha</td>
                       <td>106.50 ₹/L</td>
                       <td><span class="decrease">0.75</span></td>
                    </tr>
                    <tr>
                       <td>Puri</td>
                       <td>103.26 ₹/L</td>
                       <td><span class="increase">0.00</span></td>
                    </tr>
                    <tr>
                       <td>Rayagada</td>
                       <td>107.04 ₹/L</td>
                       <td><span class="decrease">0.28</span></td>
                    </tr>
                    <tr>
                       <td>Sambalpur</td>
                       <td>103.58 ₹/L</td>
                       <td><span class="increase">0.22</span></td>
                    </tr>
                    <tr>
                       <td>Sonapur</td>
                       <td>104.53 ₹/L</td>
                       <td><span class="increase">0.98</span></td>
                    </tr>
                    <tr>
                       <td>Sundargarh</td>
                       <td>103.77 ₹/L</td>
                       <td><span class="increase">1.01</span></td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </div>
     </div>
  </div>
    <?php include_once 'includes/footer.php'; ?>