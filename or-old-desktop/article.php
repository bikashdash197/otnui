<?php include_once 'includes/header.php'; ?>
<style type="text/css">
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
    margin: 9px 0px;
    padding: 0px;
    color: #666;
    font-size: 15px;
    line-height: 10px;
    font-family: 'Libre Franklin', sans-serif;
}
.inside-also-read-items h4 {
    max-height: 56px;
    overflow: hidden;
    margin: 6px 0px 6px 0px;
    padding: 0px;
    line-height: 24px;
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
    line-height: 32px;
    font-family: Faustina, serif;
    margin-bottom: 20px;
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
    bottom: 0;
    padding-left: 25px;
}
.article-featured1 p {
    margin: 15px 0
}
span.article-photo-credit img {
    height: 15px;
    position: absolute;
    left: 5px;
    top: 10px;
    width: 15px!important;
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
    height: 73px;
    overflow: hidden;
}	
div.article-related-slide-item-story span {
    list-style-type: none;
    display: inline;
    width: auto;
    overflow: initial;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
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
    text-transform: capitalize;
}
.article-related-slide-item p {
    color: #807979;
    font-size: 14px;
    line-height: 19px;
    display: inline-block;
    margin: 10px;
    font-weight: 300;
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
    transition-duration: .5s;
    line-height: 40px;
    margin: 0;
    padding: 0;
    display: inline-block;
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
        <h1>OPSC ନିଯୁକ୍ତି କ୍ୟାଲେଣ୍ଡର ୨୦୨୨-୨୩ ପ୍ରକାଶିତ; ଜାଣନ୍ତୁ ଗୁରୁତ୍ୱପୂର୍ଣ୍ଣ ପରୀକ୍ଷା</h1>
        <!--<h2></h2>-->
        <p class="article-info-intro">ଓଡିଶା ଲୋକସେବା ଆୟୋଗ (OPSC)ର ୨୦୨୨-୨୩ ବର୍ଷ ପାଇଁ ବାର୍ଷିକ ନିଯୁକ୍ତି କ୍ୟାଲେଣ୍ଡର ପ୍ରକାଶ ପାଇଛି। ଏଥିରେ ବିଭିନ୍ନ ପରୀକ୍ଷା ଏବଂ ଫଳାଫଳ ପ୍ରକାଶନ ପାଇଁ ଟେଣ୍ଟେଟିଭ୍ ସିଡ୍ୟୁଲ୍ ରହିଛି।</p>
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
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_0/IMAGE_1634908498.jpg" alt="BMC Pacts With Paytm: Odisha Capital's Vending Zones To Usher Cashless Revolution " title="BMC Pacts With Paytm: Odisha Capital's Vending Zones To Usher Cashless Revolution "><span class="article-photo-credit"><img src="https://odishatv.in/commondir/images/svg/single-camera-white.svg" width="15" height="15" alt="Photo"></i>Photo: OTV</span>
                  </div>
                  <p>OPSC ନିଯୁକ୍ତି କ୍ୟାଲେଣ୍ଡର ୨୦୨୨-୨୩ ପ୍ରକାଶିତ; ଜାଣନ୍ତୁ ଗୁରୁତ୍ୱପୂର୍ଣ୍ଣ ପରୀକ୍ଷା</p>
                </div>
              </div>
            </div>
          </div>
          <div class="article-content">
            <div class="right-side-reccommendation">
              <ul class="article-share-btn">
                <li>  <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://odishatv.in/news/miscellaneous/bmc-pacts-with-paytm-odisha-capital-s-vending-zones-to-usher-cashless-revolution-162292&t=BMC+Pacts+With+Paytm%3A+Odisha+Capital%27s+Vending+Zones+To+Usher+Cashless+Revolution','_blank'); return false;"><img src="images/svg/fb-gray.svg" width="20" height="20" alt="Facebook">
            </a>
                </li>
                <li><a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://odishatv.in/news/miscellaneous/bmc-pacts-with-paytm-odisha-capital-s-vending-zones-to-usher-cashless-revolution-162292&text=BMC+Pacts+With+Paytm%3A+Odisha+Capital%27s+Vending+Zones+To+Usher+Cashless+Revolution&hashtags=otv','_blank'); return false;"><img src="images/svg/telegram-gray.svg" width="20" height="20" alt="Telegram"></a>
                </li>
                <li>  <a title="Share on Telegram" href="javascript:void(0);"><img src="images/svg/twit-gray.svg" width="20" height="20" alt="Twitter">
            </a>
                </li>
                <li><a href="javascript:void(0);" onclick="javascript: window.print(); return false;"><img src="https://odishatv.in/commondir/images/svg/print-gray.svg" width="20" height="20" alt="Print"></a>
                </li>
              </ul>
              <div class="reccommendations">
                <h4>Trending News</h4> 
                <div class="reccommendation-items">
                  <h5><a href=""><span>Ukraine Russia War</span></a> <a href="">ଋଷିଆର ଘନଘନ ଆକ୍ରମଣରେ ଥରହର ୟୁକ୍ରେନ, ଦେଶ ଛାଡ଼ିଲେଣି ୧୦ ଲକ୍ଷ ଲୋକ</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Crime</span></a> <a href="">ମୁମ୍ବାଇରୁ ଭୁବନେଶ୍ୱର ଲମ୍ବିଛି କି ସୁନାର କଳା କାରବାର?</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Entertainment</span></a> <a href=""> ଆଜିଠୁ ଖୋଲିଲା ସ୍କୁଲ; ହେଲେ ପାଠ</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Education</span></a> <a href=""> ରାଜ ରାଜେନ୍ଦ୍ରଙ୍କୁ ସମସ୍ତଙ୍କର ଡର। ହେଲେ ଖାତିର</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Education</span></a> <a href=""> ଟମାଟୋ ବ୍ୟବସାୟୀଙ୍କ ଘରେ ଫର୍ଜି ଆଇଟ୍ ରେଡ୍ : ୫୫ ଲକ୍ଷ ଲୁଟିନେଲେ ଦୁର୍ବୃତ୍ତ</a></h5>
                </div>
                <div class="reccommendation-items">
                  <h5><a href=""><span>Jobs</span></a> <a href="">ଦେଶରେ ଆଗଧାଡ଼ିର କୋଭିଡ ଯୋଦ୍ଧାଙ୍କୁ ଦିଆଯାଉଛି କରୋନାର ବୁଷ୍ଟର ଡୋଜ ଟିକା</a></h5>
                </div>
              </div>
            </div>
            <p>ଓଡିଶା ଲୋକସେବା ଆୟୋଗ (OPSC)ର ୨୦୨୨-୨୩ ବର୍ଷ ପାଇଁ ବାର୍ଷିକ ନିଯୁକ୍ତି କ୍ୟାଲେଣ୍ଡର ପ୍ରକାଶ ପାଇଛି। ଏଥିରେ ବିଭିନ୍ନ ପରୀକ୍ଷା ଏବଂ ଫଳାଫଳ ପ୍ରକାଶନ ପାଇଁ ଟେଣ୍ଟେଟିଭ୍ ସିଡ୍ୟୁଲ୍ ରହିଛି।&nbsp;</p>
            <p>ବାର୍ଷିକ କ୍ୟାଲେଣ୍ଡର ଅନୁଯାୟୀ, ପରୀକ୍ଷା, ଭାଇଭା ଭୋସ୍ ପରୀକ୍ଷା ଏବଂ ୨୨ ଟି ଗୁରୁତ୍ୱପୂର୍ଣ୍ଣ ନିଯୁକ୍ତି ପରୀକ୍ଷାର ଫଳାଫଳ ପ୍ରକାଶନ ଏହି ସମୟ ମଧ୍ୟରେ ରହିଛି। ଅପ୍ରତ୍ୟାଶିତ ପରିସ୍ଥିତି ଯୋଗୁଁ କାର୍ଯ୍ୟସୂଚୀ ବଦଳିପାରେ ବୋଲି ଓପିଏସ୍‌ସି ତରଫରୁ କୁହାଯାଇଛି।</p>
            <div style="display:inline-block; width:100%; height: 320px;background-color: #9aef59;position: relative;margin-bottom: 15px;">
              <div id="div-gpt-ad-1634194649039-0" style="display:inline-block; width:100%; "></div>
            </div>
            <p>ସମୟ ସୂଚୀ ଅନୁଯାୟୀ, ଓଡିଶା ସିଭିଲ ସର୍ଭିସେସ୍ (OCS) -୨୦୨୧ ପାଇଁ ପ୍ରାଥମିକ ପରୀକ୍ଷା ୨୦୨୨ ସେପ୍ଟେମ୍ବରରେ ହେବାକୁଥିବାବେଳେ ମୁଖ୍ୟ ଲିଖିତ ପରୀକ୍ଷା ୨୦୨୩ ଜାନୁୟାରୀରେ ହେବ। OCS ୨୦୨୧ ପାଇଁ ଭାଇଭା ଭୋସ୍ ୨୦୨୩ ସେପ୍ଟେମ୍ବର / ଅକ୍ଟୋବରରେ ଅନୁଷ୍ଠିତ ହେବ।&nbsp;</p>
            <div class="inside-also-read">
              <h3>Also Read</h3>
              <div class="owl-carousel inside-also-read-slide">
                <div class="inside-also-read-items">
                  <a href="">
                    <img alt="" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634907697.jpg" title="" width="400" />
                  </a>
                  <h4><a href=""> ଘମାଘୋଟ ଯୁଦ୍ଧ, ପଛକୁ ହଟିନାହିଁ ୟୁକ୍ରେନ୍‌ ! ଋଷର ୪୫୦୦ ସୈନ୍ୟ ନିହତ, ଜାଣନ୍ତୁ</a></h4>
                </div>
                <div class="inside-also-read-items">
                  <a href="">
                    <img alt="" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634902085.jpg" title="" width="400" />
                  </a>
                  <h4><a href="">ପୁଟିନ୍‌ଙ୍କୁ ଗିରଫ୍ କଲେ ମିଳିବ ସାଢ଼େ ୭ କୋଟି : ଅଫର୍ ଦେଲେ ଋଷୀୟ ବ୍ୟବସାୟୀ</a></h4>
                </div>
                <div class="inside-also-read-items">
                  <a href="">
                    <img alt="" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634896655.jpg" title="" width="400" />
                  </a>
                  <h4><a href="">ଭାରତୀୟ ଛାତ୍ରଙ୍କୁ ଢ଼ାଲ କରୁଛନ୍ତି ୟୁକ୍ରେନ୍‌ ସୈନିକ ?</a></h4>
                </div>
              </div>
            </div>
            <p>&quot;ବାର୍ଷିକ ନିଯୁକ୍ତି କ୍ୟାଲେଣ୍ଡର ରିଲିଜ୍‌କୁ ନେଇ OPSC ଅଧ୍ୟକ୍ଷ ସତ୍ୟଜିତ୍ ମହାନ୍ତି ସୂଚନା ଦେଇଛନ୍ତି। ଟ୍ୱିଟରରେ ସେ କ୍ୟାଲେଣ୍ଡର ଶେୟାର କରି ଲେଖିଛନ୍ତି, "୨୦୨୧ ଏପ୍ରିଲ୍‌ରେ ବାର୍ଷିକ ନିଯୁକ୍ତି କ୍ୟାଲେଣ୍ଡର ସହିତ OPSC ବାହାରିଥିଲା। ମହାମାରୀ ଯୋଗୁଁ ପରବର୍ତ୍ତନ ସତ୍ତ୍ୱେ ଏହା ଠିକ୍ ସମୟରେ ହୋଇଥିଲା।</p>
            
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
                    <span><a href="">ମାର୍ଚ୍ଚ ୧ ତାରିଖରୁ ବଦଳି ଯାଉଛି ନିୟମ, ଜାଣନ୍ତୁ ସେସବୁ କଣ ?</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>ମାର୍ଚ୍ଚ ମାସ ଆରମ୍ଭ ହୋଇଯାଇଛି। ହେଲେ ଏସବୁ ବଡ଼ ପରିବର୍ତ୍ତନ ଓ ନୂଆ ନିୟମ ବିଷୟରେ ଜାଣିବାକୁ ଚାହୁଁଥିଲେ ଦେଖନ୍ତୁ ଏହି ରିପୋର୍ଟ। ଜାଣନ୍ତୁ, ଆପଣ କେମିତି ପାଇବେ ଲାଭ...</p>
                </div>
              </li>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634878571.jpg" alt=" " title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href="">ଘମାଘୋଟ ଯୁଦ୍ଧ, ପଛକୁ ହଟିନାହିଁ ୟୁକ୍ରେନ୍‌ ! ଋଷର ୪୫୦୦ ସୈନ୍ୟ ନିହତ, ଜାଣନ୍ତୁ</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>ଶତାଧିକ ୟୁକ୍ରେନ୍ ସେନା ମଧ୍ୟ ଯୁଦ୍ଧରେ ପ୍ରାଣ ହରାଇଥିବା ସୂଚନା ମିଳିଛି । ଗୁରୁବାର ଠାରୁ ରୁଷ୍ ଓ ୟୁକ୍ରେନ୍ ମଧ୍ୟରେ ଯୁଦ୍ଧ ଜାରି ରହିଛି । ରୁଷ ସେନା ବେଲାରୁଷ ସୀମାକୁ ବ୍ୟବହାର କରି ୟୁକ୍ରେନରେ ଅନୁପ୍ରବେଶ କରିଥିଲା...</p>
                </div>
              </li>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634872959.jpg" alt="" title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href="#"> ଜୋରଦାର ହେଉଛି ଗଙ୍ଗା ଅଭିଯାନ, ଭାରତୀୟ ଛାତ୍ରଙ୍କ ପାଇଁ ୟୁକ୍ରେନ୍‌ରେ ସ୍ୱତନ୍ତ୍ର</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>ଭାରତ ସରକାରଙ୍କ ଅପରେସନ ଗଙ୍ଗା ସପ୍ତମ ପର୍ଯ୍ୟାୟରେ ୧୮୨ଜଣ ଭାରତୀୟ ନାଗିରକଙ୍କୁ ରୋମାନିଆର ବୁଚାରେଷ୍ଟରୁ ସ୍ୱତନ୍ତ୍ର ବିମାନ ଯୋଗେ ମୁମ୍ବାଇ ଅଣାଯାଉଛି ।</p>
                </div>
              </li>
              <li>
                <div class="article-related-slide-item">
                  <a href="">
                    <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1634805128.jpg" alt="" title="">
                  </a>
                  <div class="article-related-slide-item-story"> <span><a href="">Miscellaneous</a></span>
                    <span><a href=""> ମର୍ମନ୍ତୁଦ ସଡ଼କ ଦୁର୍ଘଟଣା, ଚାଲିଗଲା ୫ ଜଣଙ୍କ ଜୀବନ</a></span>
                  </div>
                  <!--<div class="article-related-slide-item-time">
                     <span>Bhubaneswar</span>
                     <span>Nov 9, 2020</span>
                     </div>-->
                  <p>ମିଳିଥିବା ସୂଚନା ଅନୁଯାୟୀ ଏନ୍ଏଚ୍-୧୪୯ରେ ଏକ ଟ୍ରକ୍‌ ଛିଡ଼ା ହୋଇଥିଲା । ଆଉ ଏହି ସମୟରେ ଏକ ଦ୍ରୁତଗାମୀ କାର୍‌ ଆସି ଟ୍ରକ୍‌କୁ ଧକ୍କା ଦେଇଥିଲା ।</p>
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
<?php include_once 'includes/footer.php'; ?>