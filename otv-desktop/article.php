<?php include 'includes/header.php';?>
 <style type="text/css">
      h1.heading-style-price {
   margin: 0;
   padding: 0;
   font-size: 30px;
   line-height: 29px;
   margin-bottom: 21px;
   font-weight: 700;
   width: fit-content;
   }
   ul.menu-list li.active {
   background-color: #fff;
   }
   .price-list {
   background-color: #EEF2FA;
   padding: 30px;
   border-radius: 7px;
   position: relative;
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
   padding: 10px 33px;
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
   padding: 20px;
   border-radius: 4px;
   }
   .data-tab table tr td, .data-tab table tr th {
   padding: 12px;
   border-right: 1px solid #c4d1ea;
   font-size: 14px;
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
        width: 85px;
        float: left;
        height: 85px;
        display: block;
        margin-right: 11px;
        background-color: #eef2fa;
    }
    select.choose-date {
        float: right;
        display: inline-block;
        position: absolute;
        right: 0px;
        top: -1px;
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
    .twitter-tweet.twitter-tweet-rendered {
    text-align: center;
    margin: 0 auto;
}
.article-content iframe {
    margin: 0 auto !important;
    display: block !important;
    margin: 20px 0px;
    width: 100% !important;
}
.article-content {
    padding-left: 270px;
    position: relative;
    display: inline-block;
    width: 100%;
}
.inside-also-read {
    border-top: solid 1px #dddee4;
    border-bottom: solid 1px #dddee4;
    padding: 10px 0px;
    margin: 10px 0px 20px 0px;
    display: inline-block;
    width: 100%;
    height: 250px;
    overflow: hidden;
}
.custom-story-img-block {
    position: relative;
    background-color: #f9faff;
}
.custom-story-img-block img {
    max-width: 100%;
    height: auto;
}
.custom-story-img-block span {
    text-align: center;
    display: block;
    font-family: 'Libre Franklin', sans-serif;
    font-size: 15px;
    padding: 6px;
}
.inside-also-read h3 {
    margin: 0px 0px 10px 0px;
    padding: 0px;
    font-weight: 400;
    font-size: 22px;
    font-family: 'Faustina', serif;
    text-transform: uppercase;
}
.inside-also-read-items img {
    width: 100%;
    height: 116px;
    object-fit: cover;
}
.inside-also-read-items h4 a {
    margin: 15px 0px;
    padding: 0px;
    color: #666;
    font-size: 14px;
    line-height: 19px;
    font-family: 'Libre Franklin', sans-serif;
}
.inside-also-read-items h4 {
    max-height: 58px;
    overflow: hidden;
    margin: 10px 0px 20px 0px;
    padding: 0px;
}
.inside-also-read-items {
    width: 31.5%;
    float: left;
    margin-right: 10px;
}
 .article-content img {
    margin: 0 auto;
    display: block;
    max-width: 100%
}
.article-content figure {
    max-width: 100%;
    height: auto
}
.article-content figure img {
    max-width: 100%;
    height: auto
}
.article-content p img {
    margin-top: 20px
}
span.article-content-parent {
    color: #7b0505;
    font-weight: 700;
    font-size: 16px;
    position: relative;
    padding-right: 15px
}
.article-content p {
    color: #222;
    font-weight: 400;
    font-size: 20px;
    line-height: 26px;
    font-family: Faustina, serif;
    margin-bottom: 20px
}
.article-content li {
    font-weight: 400;
    font-size: 20px;
    line-height: 26px;
    font-family: Faustina, serif;
    margin: 5px 8px
}
span.article-content-parent:before {
    content: "";
    display: block;
    width: 2px;
    height: 10px;
    background-color: #7b0505;
    position: absolute;
    right: 3px;
    top: 6px;
    transform: rotate(15deg)
}
.article-info h1 {
    margin: 0 0 15px 0;
    padding: 0;
    text-transform: capitalize;
    font-size: 44px;
    font-weight: 400;
    line-height: 52px;
    font-family: Faustina, serif
}
.article-info-intro {
    color: #222;
    font-weight: 400;
    font-size: 20px;
    line-height: 26px;
    font-family: Faustina, serif;
    margin-bottom: 20px
}
.article-info h2 {
    margin: 0;
    padding: 0;
    text-transform: capitalize;
    font-size: 23px;
    font-weight: 400;
    color: #a99898
}
p.last-update-date {
    color: #312f2f;
    font-size: 12px;
    line-height: 20px;
    font-weight: 200;
    text-transform: uppercase
}
p.last-update-date span {
    background-color: #7b0505;
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    margin-right: 10px;
    padding: 5px 10px;
    transition-duration: .5s
}
p.last-update-date span:hover {
    background-color: #f4b01b;
    transition-duration: .5s
}
.credit-item {
    margin: 0;
    position: relative;
    border-radius: 3px;
    border: 1px solid #80808047;
    padding: 5px;
    width: calc(100% - 1px);
    margin-bottom: 15px;
    min-height: 510px
}
.credit-item p {
    margin-top: 10px
}
.article-featured {
    position: relative;
    width: 100%
}
.article-featured img {
    width: 100%!important;
    height: auto;
    margin: 0 auto;
    display: block
}
.article-featured1 {
    margin: 0;
    position: relative;
    border-radius: 3px;
    width: 100%
}
.article-featured1 img {
    width: 100%;
    height: auto;
    margin: 0 auto;
    display: block;
    padding-top: 18px
}
.credit {
    min-height: 574px
}
.credit button.owl-next,
.credit button.owl-prev {
    color: #fff!important;
    border: none!important;
    outline: 0;
    width: 62px;
    height: 115px;
    font-size: 148px!important;
    border-radius: 50%;
    position: absolute;
    bottom: 58%;
    z-index: 5!important;
    transition-duration: .5s;
    opacity: .5
}
.credit button.owl-next:hover,
.credit button.owl-prev:hover {
    opacity: 1;
    transition-duration: .5s
}
button.owl-prev {
    left: 5%
}
button.owl-next {
    right: 5%
}
button.owl-prev.disabled {
    display: none
}
button.owl-next.disabled {
    display: none
}
.article-featured p {
    padding: 0;
    font-size: 13px;
    margin: 5px 0
}
.article-caption {
    position: relative;
    padding-right: 300px;
    margin-bottom: 30px
}
.article-photo-credit1 {
    background-color: #21212199;
    padding: 8px 15px;
    color: #fff;
    font-size: 13px;
    width: fit-content;
    transition-duration: .5s;
    float: right;
    font-weight: 400;
    position: absolute;
    left: 0;
    bottom: 55px
}
.article-photo-credit {
    background-color: #21212199;
    padding: 8px 15px;
    color: #fff;
    font-size: 13px;
    width: fit-content;
    transition-duration: .5s;
    float: right;
    font-weight: 400;
    position: absolute;
    left: 0;
    bottom: 0
}
.article-featured1 p {
    margin: 15px 0
}
.article-photo-credit i {
    margin-right: 7px;
    color: #fff
}
ul.article-share-style {
    margin: 0;
    padding: 0;
    position: absolute;
    right: -6px;
    top: 8px
}
.author-info-custom {
    position: relative;
    display: inline-block;
    width: 100%;
    margin-bottom: 15px
}
ul.article-share-style li {
    list-style-type: none;
    display: inline-block;
    margin-left: 15px;
    position: relative
}
ul.article-share-style li a {
    text-decoration: none;
    display: block;
    cursor: pointer
}
ul.article-share-style li a i {
    text-decoration: none;
    display: block;
    font-size: 22px;
    margin-right: 10px
}
ul.article-share-style-more li a i {
    text-decoration: none;
    display: block;
    font-size: 19px
}
.share-social-media-add {
    position: relative
}
ul.article-share-style-more {
    position: absolute;
    right: 100%;
    bottom: -6px;
    border: 1px solid #aaaaaa45;
    box-shadow: 0 2px 8px #9a9797;
    display: none;
    background-color: #fff;
    margin: 0;
    width: max-content;
    height: 32px;
    overflow: hidden;
    padding: 0 10px 0 15px
}
ul.article-share-style-more li {
    list-style-type: none;
    float: left;
    margin: 0 20.5px;
    padding: 0;
    border: none!important;
    margin-left: 0!important;
    padding-left: 0!important
}
ul.article-share-style-more li:last-child {
    margin: 0
}
ul.article-share-style-more li a {
    text-decoration: none;
    display: block;
    line-height: 50px;
    padding: 6px 0
}
ul.article-share-style-more li a:hover i {
    color: #7b0505!important
}
ul.article-share-style-more li a i.fab.fa-facebook-f {
    color: #3c51a5
}
ul.article-share-style-more li a i.fab.fa-twitter {
    color: #5db2f7
}
ul.article-share-style-more li a i.fab.fa-instagram {
    color: #d94b8e
}
ul.article-share-style-more li a i.fab.fa-pinterest-p {
    color: #d93a34
}
ul.article-share-style-more li a i.fab.fa-linkedin-in {
    color: #036593
}
ul.article-share-style-more li a i.fab.fa-telegram-plane {
    color: #299ecf
}
ul.article-share-style li a i.fas.fa-print {
    color: #21428f
}
ul.article-share-style li a i.fas.fa-comment-dots {
    color: #f178a3
}
ul.article-share-style li a i.fas.fa-bookmark {
    color: #f4b01b
}
ul.article-share-style li a i.fas.fa-share-alt {
    color: #818181
}
ul.article-share-style-more-one {
    position: absolute;
    right: calc(100% + 5px);
    bottom: -6px;
    border: 1px solid #aaaaaa45;
    box-shadow: 0 2px 8px #9a9797;
    display: none;
    background-color: #fff;
    margin: 0;
    width: max-content;
    height: 36px;
    overflow: hidden;
    padding: 0 0 0 15px
}
ul.article-share-style-more-one li {
    list-style-type: none;
    float: left;
    margin: 0 12.5px;
    padding: 0;
    border: none!important;
    margin-left: 0!important;
    padding-left: 0!important
}
ul.article-share-style-more-one li:last-child {
    margin: 0
}
ul.article-share-style-more-one li a {
    text-decoration: none;
    display: block;
    line-height: 50px;
    padding: 6px 0
}
ul.article-share-style-more-one li a:hover i {
    color: #7b0505!important
}
ul.article-share-style-more-one li a i.fab.fa-facebook-f {
    color: #3c51a5
}
ul.article-share-style-more-one li a i.fab.fa-twitter {
    color: #5db2f7
}
ul.article-share-style-more-one li a i.fab.fa-instagram {
    color: #d94b8e
}
ul.article-share-style-more-one li a i.fab.fa-pinterest-p {
    color: #d93a34
}
ul.article-share-style-more-one li a i.fab.fa-linkedin-in {
    color: #036593
}
ul.article-share-style-more-one li a i.fab.fa-telegram-plane {
    color: #299ecf
}
ul.article-share-style-more-one li a i.fas.fa-print {
    color: #21428f
}
ul.article-share-style-more-one li a i.fas.fa-comment-dots {
    color: #f178a3
}
ul.article-share-style-more-one li a i.fas.fa-bookmark {
    color: #f4b01b
}
ul.article-share-style-more-one li a i.fas.fa-share-alt {
    color: #818181
}
.news-summery {
    background-color: #fffced;
    border: solid 1px #dddee4;
    padding: 10px;
    margin: 20px 0 20px 0;
    display: inline-block;
    width: 100%
}
.news-summery ul {
    margin: 0;
    padding: 0;
    overflow: hidden
}
.news-summery ul li {
    list-style-type: none;
    display: block;
    position: relative;
    padding-left: 25px;
    margin-bottom: 0;
    color: #2e2e2e;
    font-weight: 400;
    font-size: 18px;
    line-height: 29px
}
.news-summery ul li:before {
    content: "";
    display: block;
    width: 10px;
    height: 5px;
    background-color: #7b0505;
    position: absolute;
    left: 0;
    top: 10px
}
.news-summery h2 {
    margin: 0 0 10px 0;
    padding: 0;
    color: #000;
    text-transform: capitalize;
    font-size: 22px;
    font-weight: 700;
    line-height: 22px
}
.news-summery ul li p {
    margin: 0;
    padding: 0
}
ul.article-author {
    margin: 3px 0 0 0;
    padding: 0;
    display: inline-block;
    width: 100%;
    padding-left: 50px
}
ul.article-author li {
    list-style-type: none;
    display: inline-block;
    margin-right: 17px;
    position: relative;
    font-size: 10px;
    font-family: 'Libre Franklin', sans-serif;
    font-weight: 300;
    text-transform: uppercase
}
ul.article-author li:nth-child(2):before,
ul.article-author li:nth-child(5):before {
    content: "";
    display: block;
    width: 2px;
    height: 12px;
    background-color: #dfdfe0;
    position: absolute;
    right: -11px;
    top: 3px
}
ul.article-author li a {
    text-decoration: none;
    color: #333;
    font-size: 14px;
    transition-duration: .5s
}
ul.article-author li a:hover {
    color: #f4b01b;
    transition-duration: .5s
}
img.author-image-data {
    background-color: #f9faff;
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 4px
}
ul.article-author img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 10px;
    object-fit: cover
}
.article-content:first-letter {
    color: #232121;
    font-size: 58px;
    font-weight: 400;
    position: relative;
    margin-top: 10px;
    float: left;
    margin-right: 5px;
    text-transform: uppercase
}
.content-inline-highlights {
    background-color: #efe8d5;
    padding: 10px;
    width: 300px;
    float: left;
    margin: -2px 10px 0 -50px;
    position: relative;
    opacity: 0
}
.content-inline-highlights .fa-quote-left {
    color: #efcfba;
    font-size: 29px;
    float: left;
    margin-right: 10px
}
.content-inline-highlights h3 {
    color: #232121;
    font-weight: 400;
    font-size: 21px;
    line-height: 34px;
    margin: 0;
    padding: 0
}
section.main-article {
    float: left;
    width: 100%;
    margin: 0 0 20px 0;
    position: relative
}
.articlerelated-news ul {
    margin: 0 0 15px 0;
    padding: 0;
    float: left;
    width: 100%
}
.voter-section-intro p {
    font-size: 18px;
    margin-bottom: 20px
}
.right-side-reccommendation {
    position: sticky;
    left: 0;
    top: 50px;
    background-color: #f9faff;
    width: 250px;
    margin: 0 0 0 -270px;
    padding: 5px;
    float: left
}
.articlerelated-news ul li {
    list-style-type: none;
    float: left;
    width: 23%;
    margin-right: 10px;
    border-radius: 4px;
    overflow: hidden
}
.articlerelated-news ul li:last-child {
    margin-right: 0
}
.articlerelated-news ul li:nth-child(even) .article-related-slide-item {
    background-color: #333
}
.article-related-slide-item {
    position: relative;
    background-color: #f6f6f6;
    display: inline-block;
    padding-bottom: 10px;
    min-height: 315px
}
.article-related-slide-item img {
    width: 100%;
    height: 124px;
    object-fit: cover
}
div.article-related-slide-item-story {
    margin: 10px;
    padding: 0;
    display: inline-block;
    height: 62px;
    overflow: hidden
}
div.article-related-slide-item-story span {
    list-style-type: none;
    display: inline;
    width: auto;
    overflow: initial;
    font-family: Faustina, serif;
    font-weight: 400
}
div.article-related-slide-item-story span:first-child {
    position: relative;
    margin-right: 15px
}
div.article-related-slide-item-story span:first-child:before {
    content: "";
    display: block;
    background-color: #e92b28;
    width: 1px;
    height: 11px;
    position: absolute;
    bottom: 3px;
    right: -10px;
    transform: rotate(10deg)
}
div.article-related-slide-item-story span a:hover {
    color: #af262d
}
div.article-related-slide-item-story span:first-child a {
    color: #e92b28!important
}
div.article-related-slide-item-story span a {
    font-size: 15px;
    text-decoration: none;
    display: inline;
    color: #000;
    line-height: 21px;
    text-transform: capitalize
}
.article-related-slide-item p {
    color: #666;
    font-size: 12px;
    line-height: 19px;
    display: inline-block;
    margin: 10px;
    font-weight: 400
}
.articlerelated-news ul li:nth-child(even) .article-related-slide-item p {
    color: #fff
}
div.article-related-slide-item-time {
    margin: 0 10px;
    padding: 0;
    position: relative
}
div.article-related-slide-item-time span {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #666;
    font-size: 12px;
    width: auto;
    overflow: initial
}
div.article-related-slide-item-time span:last-child {
    margin-left: 20px
}
div.article-related-slide-item-time span:last-child:before {
    content: "";
    display: block;
    position: absolute;
    left: -16px;
    top: 4px;
    width: 7px;
    height: 7px;
    background-color: #b5afaf;
    border-radius: 50%
}
.articlerelated-news ul li:nth-child(even) .article-related-slide-item span a {
    color: #fff!important
}
.articlerelated-news ul li:nth-child(even) div.article-related-slide-item-story span:first-child:before {
    background-color: #fff
}
div.article-related-slide-item-story span a:hover {
    color: #a79f9f!important;
    transition-duration: .5s
}
.article-info {
    position: relative;
    border-bottom: dashed 1px #d4d4d4;
    margin-bottom: 20px;
    padding-bottom: 10px
}
.article-info p {
    color: #2e2e2e;
    font-weight: 400;
    font-size: 18px;
    line-height: 26px
}
ul.article-share-btn {
    margin: 10px 0 0 0;
    padding: 0;
    text-align: center
}
ul.article-share-btn li {
    list-style-type: none;
    display: inline-block;
    margin: 0 2px 10px 2px;
    border: solid 1px #e4c8c8;
    width: 40px;
    height: 40px;
    line-height: 40px
}
ul.article-share-btn li a {
    text-decoration: none;
    display: block;
    font-size: 22px;
    transition-duration: .5s
}
ul.article-share-btn li a i {
    color: #b3b3b3!important
}
ul.article-share-btn li a i.fab.fa-facebook-f {
    color: #3c51a5
}
ul.article-share-btn li a i.fab.fa-twitter {
    color: #5db2f7
}
ul.article-share-btn li a i.fab.fa-instagram {
    color: #da4a8c
}
ul.article-share-btn li a i.fab.fa-linkedin-in {
    color: #0072ae
}
ul.article-share-btn li a i.fab.fa-telegram-plane {
    color: #33a3da
}
ul.article-share-btn li a i.fas.fa-print {
    color: #a9a9a9
}
ul.article-share-btn li a:hover i {
    color: #7b0505!important
}
.article-ad {
    margin: 30px auto 25px auto;
    text-align: center;
    min-height: 82px
}
.article-ad img {
    max-width: 100%
}
.article-summery-tags {
    border-top: solid 1px #d4d4d4;
    border-bottom: solid 1px #d4d4d4;
    padding: 15px 0;
    margin-bottom: 20px
}
.article-summery-tags p {
    color: #2e2e2e;
    font-weight: 400;
    font-size: 18px;
    line-height: 26px
}
ul.article-summery-tags-list {
    margin: 0;
    padding: 0
}
ul.article-summery-tags-list li {
    list-style-type: none;
    display: inline-block;
    margin: 0 5px 5px 0
}
ul.article-summery-tags-list li a {
    text-decoration: none;
    display: block;
    border: solid 1px #d4d4d4;
    line-height: 30px;
    padding: 0 10px;
    border-radius: 5px;
    color: #333;
    text-transform: capitalize;
    font-size: 16px
}
ul.article-summery-tags-list li a:hover {
    background-color: #7b0505;
    border: solid 1px #7b0505;
    color: #fff
}
button.view-full-story {
    margin: 20px auto;
    display: block;
    background-color: #7b0505;
    border: none;
    outline: 0;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    line-height: 35px;
    padding: 0 10px;
    border-radius: 4px;
    transition-duration: .5s
}
button.view-full-story:hover {
    background-color: #fbb114;
    transition-duration: .5s
}
section.story-panel {
    float: left;
    width: 100%;
    margin: 0 0 5px 0
}
section.story-panel .container .row .third-child:nth-child(3) {
    position: relative;
    margin-top: -50px
}
.articlerelated-news {
    margin-top: 20px
}
.story-panel-item-four {
    position: relative;
    display: inline-block;
    padding-left: 100px;
    padding-bottom: 12px;
    margin: 0 0 12px 0;
    min-height: 65px;
    border-bottom: solid 1px #e1dfdf
}
.reccommendations {
    display: inline-block;
    width: 100%;
    text-align: left;
    margin: 0
}
.reccommendations h4 {
    font-family: Faustina, serif;
    font-size: 20px;
    margin: 5px 0 20px 0;
    padding: 0
}
.reccommendation-items {
    position: relative;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: solid 1px #e7e8ec
}
.reccommendation-items img {
    width: 96px;
    height: 54px;
    float: left;
    margin: 0 10px 0 0!important
}
.reccommendation-items h5 {
    margin: 0;
    padding: 0
}
.reccommendation-items h5 a {
    color: #666;
    font-size: 14px;
    line-height: 19px;
    margin: 0;
    padding: 0
}
.reccommendation-items h5 span {
    color: #b30707!important;
    margin-right: 12px;
    position: relative
}
.reccommendation-items h5 span:before {
    content: "/";
    position: absolute;
    right: -8px;
    bottom: -2px
}
.story-panel-item-four img {
    width: 96px;
    height: 65px;
    object-fit: cover;
    position: absolute;
    left: 0;
    top: 0
}
ul.story-panel-item-four-post {
    margin: -5px 0 0 0;
    padding: 0;
    height: 50px;
    overflow: hidden;
    line-height: 16px
}
ul.story-panel-item-four-post li {
    list-style-type: none;
    display: inline
}
ul.story-panel-item-four-post li:first-child {
    position: relative;
    margin-right: 5px
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
    transform: rotate(10deg)
}
ul.story-panel-item-four-post li a {
    font-size: 14px;
    text-decoration: none;
    display: inline;
    color: #000;
    font-weight: 500
}
ul.story-panel-item-four-post li:first-child a {
    color: #b30707
}
ul.story-panel-item-four-time {
    margin: 0;
    padding: 0
}
ul.story-panel-item-four-time li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #666;
    font-size: 10px;
    font-family: 'Libre Franklin', sans-serif;
    font-weight: 300;
    text-transform: uppercase
}
ul.story-panel-item-four-time li:first-child {
    margin-right: 23px
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
    border-radius: 50%
}
.bd-ft-slide {
    float: left;
    width: 100%;
    -webkit-box-shadow: -1px -6px 5px -3px rgba(0, 0, 0, .16);
    -moz-box-shadow: -1px -6px 5px -3px rgba(0, 0, 0, .16);
    box-shadow: -1px -6px 5px -3px rgba(0, 0, 0, .16);
    background-color: #fff;
    z-index: 1;
    position: relative
}
.fixed-article-slide-sec {
    bottom: 0;
    position: sticky;
    width: 100%;
    transition-duration: .5s;
    z-index: 3;
    height: 76px;
    overflow: hidden
}
.article-slide-item {
    position: relative;
    min-height: 76px;
    border-right: 2px #f1eaea solid;
    padding: 10px 0 10px 106px;
    float: left;
    width: 24%;
    margin: 0 6px
}
.article-slide-item:last-child {
    border: #ffdead
}
.article-slide-item img {
    position: absolute;
    width: 96px!important;
    height: 54px;
    object-fit: cover;
    left: 0;
    top: 10px
}
.article-slide-item ul {
    margin: 0;
    padding: 0;
    line-height: 17px;
    height: 54px;
    overflow: hidden
}
.article-slide-item ul li {
    list-style-type: none;
    display: inline
}
.article-slide-item ul li:first-child {
    position: relative;
    margin-right: 15px
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
    transform: rotate(10deg)
}
.article-slide-item ul li a {
    font-size: 13px;
    text-decoration: none;
    display: inline;
    color: #000
}
.article-slide-item ul li:first-child a {
    color: #b30707
}
.article-slide-item ul li a:hover {
    color: #af262d
}
button.nextartslide,
button.prevartslide {
    position: absolute;
    top: 0;
    border: none;
    outline: 0;
    z-index: 1;
    font-size: 38px;
    color: rgb(123 123 123 / 64%);
    transition-duration: 1s;
    width: 80px;
    height: 100%
}
button.prevartslide {
    left: 0;
    background: linear-gradient(-90deg, rgba(0, 212, 255, 0) 0, rgb(255 255 255) 46%);
    text-align: left
}
button.nextartslide {
    right: 0;
    background: linear-gradient(90deg, rgba(0, 212, 255, 0) 0, rgb(255 255 255) 46%);
    text-align: right
}
button.nextartslide:hover,
button.prevartslide:hover {
    color: #333;
    transition-duration: 1s
}
  </style>
  <?php include 'includes/bredcum.php';?>
  <div class="otv-970-250-ad">
  </div>
  <section class="main-article">
    <div class="container">
      <div class="article-info">
        <h1>BMC Pacts With Paytm: Odisha Capital's Vending Zones To Usher Cashless Revolution</h1>
        <!--<h2></h2>-->
        <p class="article-info-intro">With the Modi government giving an extra push to digital transactions post the demonetisation, the Naveen Patnaik government has made digital transactions its core policy. The BMC's cashless drive in vending zones is being seen as State's measure to push online transactions.</p>
      </div>
      <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
          <div class="author-info-custom">
            <a href="">
              <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1618560080.jpg" class="author-image-data" alt="" title="">
            </a>
            <ul class="article-author">
              <li><a href="">Nitesh Kumar Sahoo</a>
              </li>
              <li>
                <a href=""> <i class="fas fa-map-marker-alt"></i> Odisha</a>
              </li>
            </ul>
            <ul class="article-author">
              <li>Published: Friday, 22 October 2021</li>
              <li>Last updated: 22 October 2021, 06:48 PM IST</li>
            </ul>
            <!-- 
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
-->
            <ul class="article-share-style">
              <li class="share-social-media-add"><a><i class="fas fa-share-alt"></i></a>
                <ul class="article-share-style-more-one">
                  <li>  <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://odishatv.in/news/miscellaneous/bmc-pacts-with-paytm-odisha-capital-s-vending-zones-to-usher-cashless-revolution-162292&t=BMC+Pacts+With+Paytm%3A+Odisha+Capital%27s+Vending+Zones+To+Usher+Cashless+Revolution','_blank'); return false;"><i class="fab fa-facebook-f"></i>
            </a>
                  </li>
                  <li><a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://odishatv.in/news/miscellaneous/bmc-pacts-with-paytm-odisha-capital-s-vending-zones-to-usher-cashless-revolution-162292&text=BMC+Pacts+With+Paytm%3A+Odisha+Capital%27s+Vending+Zones+To+Usher+Cashless+Revolution&hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                  </li>
                  <!--<li>
      <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
      <i class="fab fa-instagram"></i>
      </a>
      </li>-->
                  <!--<li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li>-->
                </ul>
              </li>
              <!-- <li><a href="#"><i class="fas fa-bookmark"></i></a></li>
       <li><a href="#"><i class="fas fa-comment-dots"></i></a></li> -->
              <li><a href="#" onclick="javascript: window.print(); return false;"><i class="fas fa-print"></i></a>
              </li>
            </ul>
          </div>
          <div id="storymultiimg" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="credit-item">
                  <div class="article-featured">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634908498.jpg" alt="BMC Pacts With Paytm: Odisha Capital's Vending Zones To Usher Cashless Revolution " title="BMC Pacts With Paytm: Odisha Capital's Vending Zones To Usher Cashless Revolution "><span class="article-photo-credit"><i class="fas fa-camera"></i>Photo: OTV</span>
                  </div>
                  <p>BMC Pacts With Paytm: Odisha Capital's Vending Zones To Usher Cashless Revolution</p>
                </div>
              </div>
            </div>
          </div>
          <div class="article-content">
            <div class="right-side-reccommendation">
              <ul class="article-share-btn">
                <li>  <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://odishatv.in/news/miscellaneous/bmc-pacts-with-paytm-odisha-capital-s-vending-zones-to-usher-cashless-revolution-162292&t=BMC+Pacts+With+Paytm%3A+Odisha+Capital%27s+Vending+Zones+To+Usher+Cashless+Revolution','_blank'); return false;"><i class="fab fa-facebook-f"></i>
            </a>
                </li>
                <li><a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://odishatv.in/news/miscellaneous/bmc-pacts-with-paytm-odisha-capital-s-vending-zones-to-usher-cashless-revolution-162292&text=BMC+Pacts+With+Paytm%3A+Odisha+Capital%27s+Vending+Zones+To+Usher+Cashless+Revolution&hashtags=otv','_blank'); return false;"><i class="fab fa-twitter"></i></a>
                </li>
                <li>  <a title="Share on Telegram" href="javascript:void(0);"><i class="fab fa-telegram-plane"></i>
            </a>
                </li>
                <!--<li>
      <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
      <i class="fab fa-instagram"></i>
      </a>
      </li>-->
                <!--<li><a title="Share on whatsapp" href="whatsapp://send?text= is the best website to Get latest news and updates" data-link="" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li>-->
                <li><a href="javascript:void(0);" onclick="javascript: window.print(); return false;"><i class="fas fa-print"></i></a>
                </li>
              </ul>
              <div class="reccommendations">
                <h4>Trending News</h4> 
                <div class="reccommendation-items">
                  <h5><a href=""><span>Jobs</span></a> <a href="">Deloitte Recruitment: Fresh Graduates Can Apply, Know Details</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Entertainment</span></a> <a href="">Indian Idol 12s Pawandeep Rajan, Arunita Kanjilal Engagement In New Video Surprises Fans #Watch</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Entertainment</span></a> <a href="">OTT October 2021 Month-end Specials: From Web Series to Movies, When and Where to Watch</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Education</span></a> <a href="">CBSE Minor Subject Exam Date Sheet 2021 For Class 10, 12 Released; Check Important Instructions</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Education</span></a> <a href="">CBSE Class 10, 12 1st Term Exams: Board Responds To Sharp Objections</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Jobs</span></a> <a href="">What TCS, Infosys, Wipro Have Said So Far On Work From Home Strategy!</a></h5>
                </div>
              </div>
            </div>
            <p>A booster shot for the Digital India scheme. The State Capital&#39;s civic body, Bhubaneswar Municipal Corporation (BMC), has entered into a joint venture agreement with the e-commerce giant Paytm to bring the cashless revolution in, at least, the vending zones across the Capital City.&nbsp;</p>
            <p>As per reports, BMC has chalked out a plan to implement the digital payment and cashless transactions services in over 9000 street vending stores. The plans included a tie-up with an online payment platform to put across a digital transaction infrastructure in the capital city. The civic body will roll out the cashless transaction services in the vending zones within 3 months.</p>
            <div style="display:inline-block; width:100%; height: 320px;background-color: #f9faff;position: relative;">
              <div id="div-gpt-ad-1634194649039-0" style="display:inline-block; width:100%; margin-bottom: 15px;"></div>
            </div>
            <p>The BMC pact with Paytm carries a lot of incentives. Paytm will reward the customers as well as the vendors after a minimum of 25 transactions every month. The payment platform will also come up with a proposal of loan facilities for shopkeepers subscribing to the online payment system.&nbsp;</p>
            <div class="inside-also-read">
              <h3>Also Read</h3>
              <div class="owl-carousel inside-also-read-slide">
                <div class="inside-also-read-items">
                  <a href="">
                    <img alt="" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634907697.jpg" title="" width="400" />
                  </a>
                  <h4><a href="">8 KG Gold &amp; Rs 75 Lakh Cash Seized During Raid At Drug Mafia In Odisha</a></h4><a class="also-read-bd-more" href="https://odishatv.in/videos/miscellaneous/8-kg-gold-rs-75-lakh-cash-seized-during-raid-at-drug-mafia-in-odisha-162291">Read More</a>
                </div>
                <div class="inside-also-read-items">
                  <a href="">
                    <img alt="" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634902085.jpg" title="" width="400" />
                  </a>
                  <h4><a href="">Mission Successful: &#39;Killer&#39; Leopard Bites The Bait Of Chhattisgarh Forest Officials</a></h4><a class="also-read-bd-more" href="">Read More</a>
                </div>
                <div class="inside-also-read-items">
                  <a href="">
                    <img alt="" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634896655.jpg" title="" width="400" />
                  </a>
                  <h4><a href="">Police-Public Clash In Odisha&#39;s Narasinghpur Police Station, 4 Injured</a></h4><a class="also-read-bd-more" href="">Read More</a>
                </div>
              </div>
            </div>
            <p>&quot;In the first phase, we have sent the list of street vendors across Bhubaneswar to Paytm. If a vendor transacts digitally at least 25 times in a month, he/she will get rewarded by the company which will directly get deposited in their respective bank accounts,&quot; informed BMC Deputy Commissioner, Pramod Kumar Prusty.</p>
            <p>Despite being a promising initiative, vendors have a mixed reaction to BMC&#39;s novel initiative.&nbsp;</p>
            <p>&quot;New age customers, nowadays, are preferring for cashless transactions. If they have no cash or in short of spare change, they opt for digital payment mode. It is easier for us to accept the spare change digitally instead of stocking the cash at our counters. It is good that the amount gets directly credited to our account,&quot; said Ramesh Chandra Das, a street vendor. &nbsp;&nbsp;</p>
            <p>However, expressing concern he said, &quot;The flip side of cashless transactions is we have to queue up at ATMs to withdraw the cash. Moreover, many wholesale counters don&#39;t accept payments digitally. They demand cash payment during wholesale procurement of commodities.&quot;</p>
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
            <p>&quot;Overall, the digital payment method is convenient but it demands extra effort,&quot; he grudgingly added.</p>
            <p>With the Modi government giving an extra push to digital transactions post the demonetisation, the Naveen Patnaik government has made digital transactions its core policy. The BMC&#39;s cashless drive in vending zones is being seen as State&#39;s measure to push online transactions.</p>
          </div>
          <div class="article-summery-tags">
            <ul class="article-summery-tags-list">
              <li><a href="">Digital India</a>
              </li>
              <li><a href="">Online Transactions</a>
              </li>
              <li><a href="">Cashless Transaction</a>
              </li>
              <li><a href="">Paytm</a>
              </li>
              <li><a href="">BMC</a>
              </li>
            </ul>
          </div>
          <div class="otv-728-90-ad">
            <div id="div-gpt-ad-22345112743-0" style="width: 728px; height: 90px;">
              <script>
                googletag.cmd.push(function() { googletag.display("div-gpt-ad-22345112743-0"); });
              </script>
            </div>
          </div>
          <!-- <div class="article-ad">
          <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="http://localhost/otvsite/commondir/images/banner-ad.jpg" alt="" title="">
        </div> -->
          <!-- RELATED NEWS -->
          <div class="articlerelated-news">
            <h3 class="heading-style-one">Other Stories</h3>
            <ul>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634893467.jpg" alt="" title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href="">Naveen's Mayurbhanj Tour: BJD Workers Punched BJP, JMM Activists For Black Flag Protest</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>As per reports, the BJD workers had assaulted two activists of JMM and BJP for attempting to show black flags to Chief Minister Naveen Patnaik near the...</p>
                </div>
              </li>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634878571.jpg" alt=" " title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href="">Minor Girl ‘Kidnapped’ From West Bengal Rescued At Bhubaneswar Railway Station</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>“I was taking her to marry her and I was unaware that she was a minor. We were going to Kerala. We were in love relationship since...</p>
                </div>
              </li>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634872959.jpg" alt="" title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href="https://odishatv.in/news/miscellaneous/body-of-youth-fished-out-from-pond-in-bhubaneswar-162240">Body Of Youth Fished Out From Pond In Bhubaneswar</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>Though the exact reason behind the death of the unidentified youth is yet to be ascertained, police said post-mortem reports will reveal the cause of the death.</p>
                </div>
              </li>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634805128.jpg" alt="" title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href="">Mamita Murder Case: CM Should Remove Ministers For Fair Probe, Reiterates NCW Chairperson</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>Taking cognizance of the matter, the National Commission for Women (NCW) chairperson Rekha Sharma on Thursday said that Odisha Chief Minister Naveen Patnaik should remove the ministers...</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- //RELATED NEWS -->
        </div>
<?php include 'includes/sidebar.php';?>
      </div>
    </div>
  </section>
  <?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>
