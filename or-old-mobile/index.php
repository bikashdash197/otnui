<?php include_once 'includes/header.php'; ?>
    <style>
    a,
    a:active,
    a:focus,
    a:hover {
        text-decoration: none;
    }
    h3.heading-style-one {
        margin: 0 0 15px 0;
        padding: 0 0 0 36px;
        font-weight: 700;
        font-size: 18px;
        position: relative;
        padding-right: 50px;
        text-transform: uppercase;
        color: #000;
        font-family: Faustina, serif;
    }
    h3.heading-style-one:before {
        content: "";
        display: block;
        background-color: #7b0505;
        position: absolute;
        left: 0;
        top: 4px;
        width: 30px;
        height: 13px;
    }
    h3.heading-style-two {
        margin: 0 0 15px 0;
        padding: 0 0 0 36px;
        font-weight: 700;
        font-size: 18px;
        position: relative;
        padding-right: 50px;
        text-transform: uppercase;
        color: #fff;
        font-family: Faustina, serif;
    }
    h3.heading-style-two:before {
        content: "";
        display: block;
        background-color: #7b0505;
        position: absolute;
        left: 0;
        top: 4px;
        width: 30px;
        height: 13px;
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
        top: -1px;
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
        color: #807979;
        font-size: 14px;
        line-height: 19px;
        height: 41px;
        overflow: hidden;
        margin: 0px;
        padding: 0px;
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
        color: #B5AFAD;
        font-size: 10px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
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
    .container.photo-gallery-sec {
        margin-bottom: 15px;
        float: left;
        width: 100%;
    }
    .grid-gallery-container {
        margin-bottom: 20px;
        float: left;
        width: 100%;
    }
    .category-news-item {
        position: relative;
        border-top: solid 2px #ededed;
    }
    .category-news-item img {
        width: 100%;
        min-height: 204px;
        object-fit: cover;
        margin-top: 15px;
        border-top: solid 2px #980a00;
        border-bottom: solid 2px #980a00;
    }
    ul.category-news-item-story {
        margin: 15px 0;
        padding: 0;
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
    ul.category-news-item-story li {
        list-style-type: none;
        display: inline;
    }
    .news-first-two-items ul.category-news-item-story li a {
        font-size: 22px;
        font-weight: 400;
        line-height: 27px;
    }
    ul.category-news-item-story li:first-child a {
        color: #b30707;
        font-size: 18px;
    }
    ul.category-news-item-story li a {
        font-size: 20px;
        text-decoration: none;
        display: inline;
        color: #000;
        line-height: 21px;
    }
    ul.category-news-item-time {
        margin: -14px 0 1px 0;
        padding: 0;
        position: relative;
    }
    ul.category-news-item-time li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #666;
        font-size: 10px;
        font-family: 'Libre Franklin', sans-serif;
        text-transform: uppercase;
        font-weight: 300;
    }
    ul.category-news-item-time li:last-child {
        margin-left: 20px;
    }
    ul.category-news-item-time li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #666;
        font-size: 10px;
        font-family: 'Libre Franklin', sans-serif;
        text-transform: uppercase;
        font-weight: 300;
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
    .category-news-item-summary {
        position: relative;
        margin-bottom: 5px;
        padding-bottom: 5px;
        border-top: solid 2px #ededed;
        background-color: #f6f6f6;
    }
    .category-news-item-summary img {
        position: absolute;
        top: -11px;
        left: 0;
        width: 140px;
        height: 75px !important;
        object-fit: cover;
        min-height: auto;
    } 
    ul.news-image-two-items {
        margin-left: 151px;
        margin-top: 0px;
        padding: 0px;
        color: #807979;
        font-size: 14px;
        height: 70px;
        overflow: hidden;
    }
    a.common-more-button {
        background-color: #333;
        color: #fff;
        line-height: 33px;
        display: block;
        width: 100%;
        padding: 5px 10px;
        font-weight: 500;
        font-size: 15px;
        transition-duration: 1s;
        text-align: center;
    }
    .category-news-item-one a img {
        width: 100%;
        min-height: 204px;
        object-fit: cover;
        margin-top: 0px;
    }
    .category-news-item-one {
        background-color: #d60000;
        padding: 2px 0px;
    }
    ul.category-news-item-story-trending {
        margin: 10px 10px;
        padding: 0;
        height: 71px;
        overflow: hidden;
    }
    ul.category-news-item-story-trending li:first-child {
        position: relative;
        margin-right: 9px;
    }
    ul.category-news-item-story-trending li:first-child:before {
        content: "";
        display: block;
        background-color: #ffffff;
        width: 1px;
        height: 12px;
        position: absolute;
        bottom: 2px;
        right: -6px;
        transform: rotate(10deg);
    }
    ul.category-news-item-story-trending li {
        list-style-type: none;
        display: inline;
    }
    .news-first-two-items ul.category-news-item-story-trending li a {
        font-size: 24px;
        font-weight: 400;
        line-height: 27px;
    }
    ul.category-news-item-story-trending li:first-child a {
        color: #ffffff;
    }
    ul.category-news-item-story-trending li a {
        font-size: 20px;
        text-decoration: none;
        display: inline;
        color: #fff;
        line-height: 21px;
    }
    ul.category-news-item-time-trending {
        margin: -10px 8px 5px 10px;
        padding: 0;
        position: relative;
    }
    ul.category-news-item-time-trending li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #ffffff;
        font-size: 10px;
        font-family: 'Libre Franklin', sans-serif;
        text-transform: uppercase;
        font-weight: 300;
    }
    ul.category-news-item-time-trending li:last-child {
        margin-left: 20px;
    }
    ul.category-news-item-time-trending li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #ffffff;
        font-size: 10px;
        font-family: 'Libre Franklin', sans-serif;
        text-transform: uppercase;
        font-weight: 300;
    }
    ul.category-news-item-time-trending li:last-child:before {
        content: "";
        display: block;
        position: absolute;
        left: -16px;
        top: 4px;
        width: 7px;
        height: 7px;
        background-color: #ffffff;
        border-radius: 50%;
    }
    section.most-popular-sec {
        float: left;
        width: 100%;
        background-color: #000;
        padding: 20px 0px;
        margin: 10px 0px;
    }
    .category-news-item-two img {
        width: 100%;
        min-height: 126px;
        object-fit: cover;
    }
    ul.category-news-item-story-two {
        margin: 5px 0px;
        padding: 0;
        height: 75px;
        overflow: hidden;
    }
    ul.category-news-item-story-two li:first-child {
        position: relative;
        margin-right: 9px;
    }
    ul.category-news-item-story-two li:first-child:before {
        content: "";
        display: block;
        background-color: #ffffff;
        width: 1px;
        height: 12px;
        position: absolute;
        bottom: 2px;
        right: -6px;
        transform: rotate(10deg);
    }
    ul.category-news-item-story-two li {
        list-style-type: none;
        display: inline;
    }
    .news-first-two-items ul.category-news-item-story-two li a {
        font-size: 24px;
        font-weight: 400;
        line-height: 27px;
    }
    ul.category-news-item-story-two li:first-child a {
        color: #ffffff;
    }
    ul.category-news-item-story-two li a {
        font-size: 17px;
        text-decoration: none;
        display: inline;
        color: #fff;
        line-height: 14px;
    }
    ul.category-news-item-time-two {
        margin: 5px 0px;
        padding: 0;
        position: relative;
        border-bottom: 1px solid #747272;
    }
    ul.category-news-item-time-two li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #ffffff;
        font-size: 10px;
        font-family: 'Libre Franklin', sans-serif;
        text-transform: uppercase;
        font-weight: 300;
    }
    
    ul.category-news-item-time-two li:last-child {
        margin-left: 20px;
    }
    
    ul.category-news-item-time-two li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #ffffff;
        font-size: 10px;
        font-family: 'Libre Franklin', sans-serif;
        text-transform: uppercase;
        font-weight: 300;
    }
    ul.category-news-item-time-two li:last-child:before {
        content: "";
        display: block;
        position: absolute;
        left: -16px;
        top: 4px;
        width: 7px;
        height: 7px;
        background-color: #ffffff;
        border-radius: 50%;
    }
    .picture-gallery-featured {
        position: relative;
        padding: 10px;
        background: #333;
        border-top: 3px solid #bd0000;
        display: inline-block;
        width: 100%;
        margin-bottom: 10px;
    }
    .picture-gallery-featured-img {
        width: 100%;
        height: auto;
        position: relative;
    }
    
    .picture-gallery-featured-img img {
        width: 100%;
        height: auto;
    }
    
    .picture-gallery-featured ul {
        margin: 15px 0;
        padding: 0;
    }
    
    .picture-gallery-featured ul li:first-child {
        margin-right: 10px;
    }
    
    .picture-gallery-featured ul li {
        list-style-type: none;
        display: inline;
        position: relative;
    }
    
    .picture-gallery-featured ul li:first-child:before {
        content: "/";
        color: #fff;
        font-size: 14px;
        position: absolute;
        right: -8px;
        bottom: 1px;
    }
    
    .picture-gallery-featured ul li:first-child a {
        color: #f4b01b;
    }
    
    .picture-gallery-featured ul li a {
        text-decoration: none;
        display: inline;
        color: #fff;
        text-transform: capitalize;
        font-size: 20px;
        line-height: 20px;
    }
    
    .picture-gallery-sub {
        position: relative;
        padding: 10px 10px 10px 116px;
        background: #333;
        border-top: 3px solid #bd0000;
        display: inline-block;
        width: 100%;
        margin-bottom: 10px;
    }
    
    .picture-gallery-sub-img {
        width: 96px;
        height: 54px;
        position: absolute;
        left: 10px;
        top: 10px;
    }
    
    .picture-gallery-sub-img img {
        width: 96px;
        height: 54px;
    }
    
    .picture-gallery-sub ul {
        margin: 0;
        padding: 0;
        line-height: 14px;
        height: 54px;
        overflow: hidden;
    }
    
    .picture-gallery-sub ul li:first-child {
        margin-right: 9px;
    }
    
    .picture-gallery-sub ul li {
        list-style-type: none;
        display: inline;
        position: relative;
    }
    
    .picture-gallery-sub ul li:first-child:before {
        content: "/";
        color: #fff;
        font-size: 11px;
        position: absolute;
        right: -7px;
        bottom: 2px;
    }
    
    .picture-gallery-sub ul li:first-child a {
        color: #f4b01b;
    }
    
    .picture-gallery-sub ul li a {
        text-decoration: none;
        display: inline;
        color: #fff;
        text-transform: capitalize;
        font-size: 17px;
        line-height: 19px;
    }
    
    .video-gallery {
        position: relative;
        padding-bottom: 9px;
        background-color: #000;
    }
    
    .video-gallery-image {
        position: relative;
        width: 100%;
        height: auto;
        margin-bottom: 28px;
    }
    
    .video-gallery-image img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    
    .video-gallery ul {
        margin: 0;
        padding: 10px;
        border-top: 2px solid #50b7f1;
        width: 100%;
        height: 62px;
        overflow: hidden;
    }
    
    .video-gallery ul li:first-child {
        margin-right: 9px;
    }
    
    .video-gallery ul li {
        list-style-type: none;
        display: inline;
        position: relative;
    }
    
    .video-gallery ul li a {
        text-decoration: none;
        display: inline;
        color: #fff;
        text-transform: capitalize;
        font-size: 15px;
        line-height: 21px;
    }
    
    .video-gallery ul li:first-child a {
        color: #ec5836;
    }
    
    .video-gallery ul li:first-child:before {
        content: "/";
        color: #ffffff;
        font-size: 15px;
        position: absolute;
        right: -10px;
        bottom: -2px;
    }
    
    section.breaking-news {
        float: left;
        width: 100%;
        margin: 0 0 15px 0;
        background-color: #e6e6e6;
        border-top: 1px solid #b40000;
    }
    
    ul.breaking-newsticker {
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
        position: relative;
        height: 36px;
        overflow: hidden;
    }
    
    ul.breaking-newsticker li:first-child {
        width: 90px;
    }
    
    ul.breaking-newsticker li {
        list-style-type: none;
        float: left;
    }
    
    section.breaking-news h3 {
        margin: 0;
        background-color: #ed2027;
        color: #fff;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 13px;
        text-align: right;
        padding: 3px 12px 5px 5px;
        line-height: 14px;
    }
    
    ul.breaking-newsticker li:last-child {
        width: calc(100% - 90px);
        padding: 0 10px 0 10px;
    }
    
    ul.breaking-newsticker li p {
        margin: 0;
        padding: 5px 0;
        font-size: 12px;
        line-height: 15px;
        font-weight: 400;
        color: #000;
        display: table-cell;
        vertical-align: middle;
        height: 36px;
    }
    
    .category-news-item-summary p {
        margin-left: 151px;
        margin-top: 0px;
        padding: 0px;
        color: #807979;
        font-size: 14px;
        height: 77px;
        overflow: hidden;
    }
    
    .trending-videos-sec {
        float: left;
        width: 100%;
        margin-bottom: 20px;
    }
    
    a.cat-more-news-btn {
        outline: 0;
        line-height: 18px;
        padding: 0;
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
    
    h3.heading-style-one-normal {
        margin: -6px 0 10px 0;
        padding: 0 0 0 45px!important;
        position: relative;
        font-weight: 700;
        font-size: 19px;
        color: #333;
        line-height: 19px;
        border-bottom: none!important;
        font-family: Faustina, serif;
        text-transform: uppercase;
    }
    
    h3.heading-style-one-normal:before {
        content: "";
        display: block;
        background-color: #7b0505;
        position: absolute;
        left: 0;
        top: 6px;
        width: 30px;
        height: 13px;
    }
    
    h3.heading-style-five {
        margin: 0;
        padding: 0;
        margin: 5px 0px 6px 0px;
        padding: 7px;
        position: relative;
        font-weight: 400;
        font-size: 19px;
        color: #fff;
        line-height: 19px;
        border-bottom: none !important;
        width: fit-content;
        background-color: hsl(0deg 100% 50%);
    }
    
    h3.heading-style-five span {
        background-color: #000;
        padding: 4px;
    }
    
    h3.heading-style-five:after {
        content: "";
        background-image: url(images/HAND_mic.svg);
        margin-left: 8px;
        display: block;
        width: 87px;
        height: 47px;
        background-repeat: no-repeat;
        position: absolute;
        right: -86px;
        top: -17px;
    }
    
    h4.ctizen-topic {
        margin: 18px 0px;
        padding: 0;
        font-size: 16px;
        font-weight: 400;
        line-height: 26px;
    }
    
    .citizen-reporter-download-app0 h5 {
        margin: 10px 0px;
        padding: 0;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
    }
    
    .citizen-reporter-download-app0 ul {
        margin-bottom: 20px;
        padding: 0;
        text-align: center;
        padding-bottom: 17px;
        border-bottom: 1px solid #e5e1e1;
    }
    
    .citizen-reporter-download-app0 ul li {
        display: inline-block;
    }
    
    .citizen-reporter-download-app0 ul li a {
        text-decoration: none;
        display: block;
        width: auto;
        height: 28px;
        margin-right: 5px;
    }
    
    .citizen-reporter-container {
        margin-bottom: 20px;
        float: left;
        width: 100%;
        background-color: #f5f5f0;
        padding: 20px 10px;
    }
    </style>
    <!--===================== BREAKINGNEWS ==========================-->
    <section class="breaking-news">
        <ul class="breaking-newsticker">
            <li>
                <h3>Breaking News</h3></li>
            <li>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#">
                                <p>ସରକାରଙ୍କ ପୋଲ ଖୋଲିଦେଲା ନିତି ଆୟୋଗଙ୍କ ରିପୋର୍ଟ, ଧରାପଡ଼ିଲା ସ୍ୱାସ୍ଥ୍ୟସେବାର ବିକଟାଳ</p>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <p>ସରକାରଙ୍କ ପୋଲ ଖୋଲିଦେଲା ନିତି ଆୟୋଗଙ୍କ ରିପୋର୍ଟ, ଧରାପଡ଼ିଲା ସ୍ୱାସ୍ଥ୍ୟସେବାର ବିକଟାଳ</p>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <p>ସରକାରଙ୍କ ପୋଲ୍ ଖୋଲିଦେଲା ନିତି ଆୟୋଗଙ୍କ ରିପୋର୍ଟ, ଧରାପଡ଼ିଲା ସ୍ୱାସ୍ଥ୍ୟସେବାର ବିକଟାଳ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!--===================== //BREAKINGNEWS ==========================-->
    <div class="otv-300-250-ad"> </div>
    <!--============ HEADLINES ============-->
    <div class="container grid-gallery-container">
        <div class="category-news-item news-first-two-items">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642046069.jpg" alt="" title="Corona Cases In Odisha " width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s24" href="#">COVID19</a></li>
                <li><a class="s24" href="#">ଦିନକରେ ଓଡ଼ିଶାରେ ୧୦ ହଜାର ଟପିଲା କରୋନା ଆକ୍ରାନ୍ତଙ୍କ ସଂଖ୍ୟା</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>2 hours ago </li>
            </ul>
            <p>ଓଡ଼ିଶାରେ ଦୈନିକ କରୋନା ସଂକ୍ରମଣ ଆଜି ୧୦ ହଜାର ପାର୍‌ କରିଛି। ରାଜ୍ୟରେ ଗତ ୨୪ ଘଣ୍ଟାରେ ୧୦,୦୫୯ କରୋନା ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ ହୋଇଛନ୍ତି। </p>
        </div>
        <div class="category-news-item news-first-two-items">
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Spirit Of Youth</a></li>
                <li><a class="s20" href="#">୭୭ ବର୍ଷ ବୟସରେ ଜଲୱା ଦେଖାଇଲେ ବୃଦ୍ଧ ! ୫୬ ଥର ବିଫଳ ହେବା ପରେ ୫୭ ତମ ଥରରେ ଦଶମ ପାସ୍ କଲେ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Covid19 Guidelines</a></li>
                <li><a class="s20" href="#">ନୂଆ କଟକଣା ଲାଗୁ: ପର୍ବପର୍ବାଣୀ, ଧାର୍ମିକ କାର୍ଯ୍ୟକ୍ରମରେ ଏକାଠି ହେବାକୁ ବାରଣ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Rain Alert For Odisha</a></li>
                <li><a class="s18" href="#">୧୪ ଜିଲ୍ଲାରେ ଘଡ଼ଘଡ଼ି ସହ ବର୍ଷା ! ସତର୍କ କଲା ପାଣିପାଗ ବିଭାଗ</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642040007.jpg" alt="" title="Rain Alert For Odisha " width="224" height="126"></a>
                <p>ଆସନ୍ତା ୨୪ ଘଣ୍ଟା ମଧ୍ୟରେ ଉପକୂଳ ଓଡିଶା ସହ ତତ୍‌ସଂଲଗ୍ନ ଅଞ୍ଚଳର ଅଧିକାଂଶ ସ୍ଥାନରେ ସ୍ୱଳ୍ପରୁ ମଧ୍ୟମ ଧରଣର ବର୍ଷା ହେବାର ସମ୍ଭାବନା। ଆଜି ଆଭ୍ୟନ୍ତରୀଣ ଓ ଉପକୂଳ ଓଡ଼ିଶାରେ ଅଧିକାଂଶ ସ୍ଥାନରେ ବର୍ଷା...</p>
            </div>
        </div>
        <div class="otv-300-50-ad"> </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Odisha Panchayat Polls</a></li>
                <li><a class="s18" href="#">ଗାଁ ଗାଁ ରେ ଚର୍ଚ୍ଚା କିଏ ଜିତିବ, କିଏ ହାରିବ?</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Panchayat Election</a></li>
                <li><a class="s18" href="#">ପଞ୍ଚାୟତ ନିର୍ବାଚନ ପ୍ରଚାର ଗାଇଡଲାଇନ୍ ଜାରି କଲେ SRC</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Omicron Cases In India</a></li>
                <li><a class="s18" href="#">ଟିକାର ୨ ବଡ଼ ଫାଇଦା କହିଲା ସ୍ୱାସ୍ଥ୍ୟ ବିଭାଗ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">'provocative' Song</a></li>
                <li><a class="s18" href="#">ପାର୍ଟିରେ ଉତ୍ତେଜକ ଗୀତ ବଜାଇଲେ କନ୍ୟା, ବିବାହ ପରେ ପରେ ଛାଡ଼ପତ୍ର ଦେଇଦେଲା ବର</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Supreme Court</a></li>
                <li><a class="s18" href="#">ସୁପ୍ରିମକୋର୍ଟଙ୍କ ଗୁରୁତ୍ୱପୂର୍ଣ୍ଣ ରାୟ ! ଶାଶୂଘର ପକ୍ଷରୁ ଟଙ୍କା କିମ୍ବା ଅନ୍ୟ କୌଣସି ଜିନିଷ ମାଗିବା ଯୌତୁକ ଜନିତ ଅପରାଧ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Hungry Thief</a></li>
                <li><a class="s18" href="#">ଚୋରି କରିବା ସମୟରେ ଚୋରକୁ ଲାଗିଲା ଭୋକ, ଖେଚୁଡ଼ି ରାନ୍ଧୁ ରାନ୍ଧୁ ଧରି ପକାଇଲା ପୋଲିସ୍</a></li>
            </ul>
        </div>
    </div>
    <!--=========== //HEADLINES ===========-->
    <div class="otv-300-250-ad">
        <div id="div-gpt-ad-22473108423-0" style="width: 300px; height: 250px;">
            <script>
            googletag.cmd.push(function() {
                googletag.display("div-gpt-ad-22473108423-0");
            });
            </script>
        </div>
    </div>
    <div class="container citizen-reporter-container">
        <h3 class="heading-style-five">ABOUT <span>CITIZEN REPORTER</span></h3>
        <h4 class="ctizen-topic">The Council of Europe is the continent's leading human rights organisation with 47 member states.The Council of Europe is the continent's leading human rights organisation with 47 member states.</h4>
        <div class="otv-300-50-ad">
            <div id="div-gpt-ad-22423069847-0" style="width: 300px; height: 50px;" data-google-query-id="CNGP5cmXqfYCFcBEnQkdBSoPKA">
                <script>
                googletag.cmd.push(function() {
                    googletag.display("div-gpt-ad-22423069847-0");
                });
                </script>
                <div id="google_ads_iframe_/370089190/RHS_Home_Desktop_Odisha_Section_300x50_0__container__" style="border: 0pt none; width: 300px; height: 0px;"></div>
            </div>
        </div>
        <div class="citizen-reporter-download-app0">
            <h5>Download the app</h5>
            <ul>
                <li>
                    <a href=""><img src="https://odishatv.in//commondir/images/play-store-ft.jpg"></a>
                </li>
                <li>
                    <a href=""><img src="https://odishatv.in//commondir/images/play-store-ft.jpg"></a>
                </li>
            </ul>
        </div>
    </div>
    <!--============ HEADLINES ============-->
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ଓଡ଼ିଶା ଖବର</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/ss_1642050553.jpg" alt="" title="Surekha Palai death case " width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Surekha Palai Death Case</a></li>
                <li><a class="s20" href="#">ହଟିଲା ସୁରେଖା ମୃତ୍ୟୁ ରହସ୍ୟ ଉପରୁ ପରଦା, ବନ୍ଧା ହେଲା ବୟଫ୍ରେଣ୍ଡ୍‌</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>25 minutes ago </li>
            </ul>
            <p>ଭରତପୁରରେ ଯୁବତୀ ସୁରେଖା ପଲେଇ ମୃତ୍ୟୁ ମାମଲାରେ ବୟଫ୍ରେଣ୍ଡ୍‌ ସମେତ ୩ ଜଣଙ୍କୁ କମିଶନରେଟ୍ ପୋଲିସ ଗିରଫ କରିଛି। ଘଟଣା ପରେ ମାଡ଼ ଭୟରେ ବୟଫ୍ରେଣ୍ଡ୍‌ ଫେରାର ହୋଇଯାଇଥିଲା। </p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">COVID19</a></li>
                <li><a class="s18" href="#">ଦିନକରେ ଓଡ଼ିଶାରେ ୧୦ ହଜାର ଟପିଲା କରୋନା ଆକ୍ରାନ୍ତଙ୍କ ସଂଖ୍ୟା</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Daily Horoscope</a></li>
                <li><a class="s18" href="#">Daily Horoscope, 13 Jan 2022: ଜାଣନ୍ତୁ, ଆଜିର ରାଶିଫଳ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Covid19 Guidelines</a></li>
                <li><a class="s18" href="#">ନୂଆ କଟକଣା ଲାଗୁ: ପର୍ବପର୍ବାଣୀ, ଧାର୍ମିକ କାର୍ଯ୍ୟକ୍ରମରେ ଏକାଠି ହେବାକୁ ବାରଣ</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642041575.jpg" alt="" title="New Guidelines" width="224" height="126"></a>
                <p>ରାଜ୍ୟରେ ଉତ୍ସବ, ପର୍ବପର୍ବାଣୀ, ଧାର୍ମିକ କାର୍ଯ୍ୟକ୍ରମରେ ଏକାଠି ହେବା ଉପରେ SRC କଟକଣା ଜାରି କରିଛନ୍ତି। ମେଳାକୁ ସମ୍ପୂର୍ଣ୍ଣ ନିଷେଧ କରାଯାଇଥିବା ବେଳେ ଏଠାରେ ଲୋକେ ଏକାଠି ହେବାକୁ ମନା କରାଯାଇଛି।</p>
            </div>
        </div> <a href="#" class="common-more-button">More</a> </div>
    <!--=========== //HEADLINES ===========-->
    <!--============= TRENDING VIDEOS ============-->
    <div class="container trending-videos-sec">
        <h3 class="heading-style-one">ଭିଡିଓ <span class="trending-videos-nav"><i class="fas fa-angle-left prevvideo"></i><i class="fas fa-angle-right nextvideo"></i></span></h3>
        <div class="trending-videos-slide carousel slide" id="demo" data-ride="carousel">
            <div class="carousel-inner">
                <div class="video-gallery carousel-item active">
                    <div class="video-gallery-image">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642005266.jpg" alt="" title="Western Odisha Farmers condition" width="274" height="154"></a>
                        <!--<span>8:20</span>--><a href="#"><i class="fas fa-play"></i></a> </div>
                    <ul>
                        <li><a class="s18" href="#">Western Odisha Farmers</a></li>
                        <li><a class="s18" href="#">ଭିଜିଗଲା ବରଷ ଯାକର ସମ୍ପତ୍ତି</a></li>
                    </ul>
                </div>
                <div class="video-gallery carousel-item">
                    <div class="video-gallery-image">
                        <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642005266.jpg" alt="" title="Western Odisha Farmers condition" width="274" height="154"></a>
                        <!--<span>8:20</span>--><a href="#"><i class="fas fa-play"></i></a> </div>
                    <ul>
                        <li><a class="s18" href="#">Western Odisha Farmers</a></li>
                        <li><a class="s18" href="#">ଭିଜିଗଲା ବରଷ ଯାକର ସମ୍ପତ୍ତି</a></li>
                    </ul>
                </div>
            </div>
        </div> <a href="#" class="common-more-button">More</a> </div>
    <div class="otv-300-250-ad">
        <div id="div-gpt-ad-22473108426-0" style="width: 300px; height: 250px;">
            <script>
            googletag.cmd.push(function() {
                googletag.display("div-gpt-ad-22473108426-0");
            });
            </script>
        </div>
    </div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ଓଡ଼ିଶା ରାଜନୀତି ଖବର</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642051546.jpg" alt="" title="two brother " width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Special Story</a></li>
                <li><a class="s20" href="#">ବିଭାଜନ ସମୟରେ ଅଲଗା ହୋଇଯାଇଥିଲେ ଦୁଇ ଭାଇ ! ୭୪ ବର୍ଷ ପରେ ଏକାଠି ହେଲେ, ପରସ୍ପରକୁ ଆଲିଙ୍ଗନ କରି କାନ୍ଦିଲେ . .</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>India</li>
                <li>9 minutes ago </li>
            </ul>
            <p>ବିଭାଜନ ବେଳେ ଅଲଗା ହୋଇଥିଲେ, ୭୪ ବର୍ଷ ପରେ ଏକାଠି ହେଲେ ଦୁଇ ଭାଇ ।</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Surekha Palai Death Case</a></li>
                <li><a class="s18" href="#">ହଟିଲା ସୁରେଖା ମୃତ୍ୟୁ ରହସ୍ୟ ଉପରୁ ପରଦା, ବନ୍ଧା ହେଲା ବୟଫ୍ରେଣ୍ଡ୍‌</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">India Open 2022</a></li>
                <li><a class="s18" href="#">India Open 2022: ୭ ଭାରତୀୟ ଖେଳାଳିଙ୍କୁ କରୋନା</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Spirit Of Youth</a></li>
                <li><a class="s18" href="#">୭୭ ବର୍ଷ ବୟସରେ ଜଲୱା ଦେଖାଇଲେ ବୃଦ୍ଧ ! ୫୬ ଥର ବିଫଳ ହେବା ପରେ ୫୭ ତମ ଥରରେ ଦଶମ ପାସ୍ କଲେ</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642045283.jpg" alt="" title="spirit of youth" width="224" height="126"></a>
                <p>ପରିଣତ ବୟସରେ ଦଶମ ପାସ୍ । ୭୭ ବର୍ଷ ବୟସରେ ମାଟ୍ରିକ୍‌ ପରୀକ୍ଷାରେ ପାସ୍ କରିଥିଲେ । </p>
            </div>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Hungry Thief</a></li>
                <li><a class="s18" href="#">ଚୋରି କରିବା ସମୟରେ ଚୋରକୁ ଲାଗିଲା ଭୋକ, ଖେଚୁଡ଼ି ରାନ୍ଧୁ ରାନ୍ଧୁ ଧରି ପକାଇଲା ପୋଲିସ୍</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Panchayat Election</a></li>
                <li><a class="s18" href="#">ପଞ୍ଚାୟତ ନିର୍ବାଚନ ପାର ହେବାକୁ ପୁଳା ପୁଳା ପ୍ରତିଶ୍ରୁତି</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">BARC</a></li>
                <li><a class="s18" href="#">ଟିଆରପି ପ୍ରକାଶ ଲାଗି BARC କୁ କେନ୍ଦ୍ର ସରକାରଙ୍କ ନିର୍ଦ୍ଦେଶ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Odisha Panchayat Polls</a></li>
                <li><a class="s18" href="#">ଗାଁ ଗାଁ ରେ ଚର୍ଚ୍ଚା କିଏ ଜିତିବ, କିଏ ହାରିବ?</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Weather In Odisha</a></li>
                <li><a class="s18" href="#">ବର୍ଷାରେ ଭିଜୁଛି ମଣ୍ଡିରେ ପଡ଼ିଥିବା ସାଇତା ଧାନ</a></li>
            </ul>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one-normal">Other News Updates from Odisha </h3>
        <div class="spotlight-nod-container">
            <div class="spotlight-nod-main spotlight-nod">
                <div class="spotlight-nod-items">
                    <h4><a href="#">ପଞ୍ଚାୟତ ନିର୍ବାଚନ ପାର ହେବାକୁ ପୁଳା ପୁଳା ପ୍ରତିଶ୍ରୁତି</a></h4>
                    <ul>
                        <li>Odisha</li>
                        <li>12 hours ago </li>
                    </ul>
                    <p>ଗତ ମାସେ ମଧ୍ୟରେ ରାଜ୍ୟରେ ମୋଟ୍ ଲକ୍ଷେ ୫ ହଜାର କୋଟିର ପୁଞ୍ଜିନିବେଶ ସହ ପ୍ରାୟ ୨୫ ହଜାର ନିଯୁକ୍ତି ପାଇଁ ଭିତ୍ତିପ୍ରସ୍ଥର ସ୍ଥାପନ ସହ ଘୋଷଣା...</p>
                </div>
                <div class="spotlight-nod-items">
                    <h4><a href="#">ଗାଁ ଗାଁ ରେ ଚର୍ଚ୍ଚା କିଏ ଜିତିବ, କିଏ ହାରିବ?</a></h4>
                    <ul>
                        <li>Odisha</li>
                        <li>13 hours ago </li>
                    </ul>
                    <p>ଛାଇ ଗଲାଣି ପୋଷ୍ଟର ବ୍ୟାନର୍ । ଗାଁ ଛକରେ ହୋର୍ଡିଂ ଆଉ ଚା’ ଖଟିରେ ସମ୍ଭାବ୍ୟ ପ୍ରାର୍ଥୀଙ୍କୁ ନେଇ ଜମିଲାଣି ତ୍ରିସ୍ତରୀୟ ପଂଚାୟତ ଚର୍ଚ୍ଚା । ନିର୍ବାଚନ...</p>
                </div>
                <div class="spotlight-nod-items">
                    <h4><a href="#">ବର୍ଷାରେ ଭିଜୁଛି ମଣ୍ଡିରେ ପଡ଼ିଥିବା ସାଇତା ଧାନ</a></h4>
                    <ul>
                        <li>Odisha</li>
                        <li>13 hours ago </li>
                    </ul>
                    <p>ଲରଙ୍କୁ ଅପେକ୍ଷା ଭିତରେ ବର୍ଷାରେ ଭିଜି ଗଜା ଧରିରାଣି ସାଇତା ଧାନ। ଏହା ସତ୍ତ୍ୱେ ଏଯାଏଁ ମିଲର୍ସଙ୍କ ଦେଖାନଥିବା ଅଭିଯୋଗ କରିଛନ୍ତି ଚାଷୀ। More</p>
                </div>
                <div class="spotlight-nod-items">
                    <h4><a href="#">ସଂକ୍ରମଣ ବୃଦ୍ଧି କାରଣରୁ ୫ ଦିନ ଯାଏଁ ହାଇକୋର୍ଟ ସଟଡାଉନ୍</a></h4>
                    <ul>
                        <li>Odisha</li>
                        <li>14 hours ago </li>
                    </ul>
                    <p>ସଂକ୍ରମଣ ବଢୁଥିବାରୁ ହାଇକୋର୍ଟକୁ ୫ ଦିନ ପାଇଁ ସଟଡାଉନ୍ ଘୋଷଣା କରାଯାଇଛି । More</p>
                </div>
                <div class="spotlight-nod-items">
                    <h4><a href="#">'ଆହୁରି ୨ମାସ ବଢ଼ିବ କରୋନା ସଂକ୍ରମଣ'</a></h4>
                    <ul>
                        <li>Odisha</li>
                        <li>14 hours ago </li>
                    </ul>
                    <p>ଆକ୍ରାନ୍ତଙ୍କ ସାମାନ୍ୟ ଲକ୍ଷଣ ରହୁଛି ଏବଂ ମୃତ୍ୟୁ, ହସ୍ପିଟାଲାଇଜେସନ ଓ ICUର ଆବଶ୍ୟକତା ବି କମ୍ ରହୁଛି। More</p>
                </div>
            </div>
        </div><a href="#" class="cat-more-news-btn">More</a></div>
    <!--============== PHOTOS ================-->
    <div class="otv-300-50-ad"> </div>
    <div class="container photo-gallery-sec">
        <h3 class="heading-style-one">ଫଟୋ</h3>
        <div class="picture-gallery-featured">
            <div class="picture-gallery-featured-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1641916742.jpg" alt="" title="Mihir Das Passes Away" width="400" height="225"></a> <span><i class="far fa-images"></i> 5</span> </div>
            <ul>
                <li><a class="s20" href="#">Ollywood</a></li>
                <li><a class="s20" href="#">ଅଫେରା ରାଇଜରେ ମିହିର ଦାସ; କେତେବେଳେ ହିରୋ ତ କେତେବେଳେ ଭିଲେନ୍, ସବୁଥିରେ ସେ ଫିଟ୍, ସବୁଥିରେ ସେ ହିଟ୍</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/Press_Meet_1641558137.JPG" alt="" title="Press Meet" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Ashwini Vaishnaw</a></li>
                <li><a class="s18" href="#">ଅଶ୍ୱିନୀ ବୈଷ୍ଣବଙ୍କ ବଡ ଘୋଷଣା: ଓଡିଶାରେ ୪୮୩ଟି ମୋବାଇଲ ଟାଓ୍ୱାର ଓ ୨୭୨ଟି ପୋଷ୍ଟ ଅଫିସ ଉଦଘାଟନ ହେବ</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641458654.jpg" alt="" title="Chilly Winter Night Scenes Across Odisha" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Odisha</a></li>
                <li><a class="s18" href="#">ରାଜଧାନୀରେ ଶୀତ ରାତିରେ ସବୁ ଶୂନଶାନ୍, ତଥାପି...</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641452115.JPG" alt="" title="Republic Day" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Delhi Republic Day Parade</a></li>
                <li><a class="s18" href="#">ଦିଲ୍ଲୀ ରାଜପଥରେ ଗଣତନ୍ତ୍ର ଦିବସ ପରେଡ୍ ଲାଗି ଚାଲିଛି ଜୋରଦାର ପ୍ରସ୍ତୁତି</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641370407.jpg" alt="" title="Ekalavya Puraskar 2021" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Ekalavya Puraskar 2021</a></li>
                <li><a class="s18" href="#">ଇମ୍ଫା ପକ୍ଷରୁ ଆୟୋଜିତ ହେଲା ଏକଲବ୍ୟ ପୁରସ୍କାର କାର୍ଯ୍ୟକ୍ରମ</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1639047097.jpeg" alt="" title="Odia Jawan Dead In IAF Chopper Crash In Tamil Nadu" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Odia Jawan Dead</a></li>
                <li><a class="s18" href="#">ସହିଦ ଓଡିଆ ଯବାନ ରାଣା ପ୍ରତାପଙ୍କ ଜୀବନର କିଛି ମଧୁର ସ୍ମୃତି...</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/a_1638610251.jpg" alt="" title="Cyclone Jawad Effect in Bhubaneswar" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Cyclone Jawad</a></li>
                <li><a class="s18" href="#">ବାତ୍ୟାର ପ୍ରଭାବ: ରାଜଧାନୀ ରାଜରାସ୍ତାରେ ଜନଜୀବନ...</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1638418105.jpg" alt="" title="Konark mahotsav" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Konark Mahotsav</a></li>
                <li><a class="s18" href="#">ଓଡିଶୀ ନୃତ୍ୟରେ ଉତ୍ସବମୁଖରିତ ହୋଇ ଉଠିଲା କୋଣାର୍କ ମହୋତ୍ସବ</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1637482077.jpg" alt="" title="India's Cleanest State, City, Town For 2021 Declared. Here Are The Winners" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">Cleanest Cities</a></li>
                <li><a class="s18" href="#">ଦେଶର ୧୦ଟି ସ୍ୱଚ୍ଛ ସହର</a></li>
            </ul>
        </div>
        <div class="picture-gallery-sub">
            <div class="picture-gallery-sub-img">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635782171.jpg" alt="" title="Anurag Thakur" width="96" height="54"></a>
            </div>
            <ul>
                <li><a class="s18" href="#">National Sports Award 2020</a></li>
                <li><a class="s18" href="#">ଜାତୀୟ କ୍ରୀଡା ପୁରସ୍କାର ୨୦୨୦</a></li>
            </ul>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="otv-300-250-ad"> </div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ନିଯୁକ୍ତି ଓ ଶିକ୍ଷା</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/x1080_1641956340.jpg" alt="" title="NEET-PG counselling begins today" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">NEET</a></li>
                <li><a class="s20" href="#">ଆଜିଠୁ ନିଟ୍ ପିଜି କାଉନସେଲିଂ</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>1 day ago </li>
            </ul>
            <p>ଚଳିତ ଶିକ୍ଷାବର୍ଷ ପାଇଁ ଏମବିବିଏସ, ବିଡିଏସ୍ ପାଠ୍ୟକ୍ରମରେ ନାମଲେଖା ଲାଗି ଆଜିଠାରୁ ଆରମ୍ଭ ହେଉଛି ଓଜେଇଇ ପରିଚାଳିତ ନିଟ୍ ପିଜି କାଉନସେଲିଂ</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">NEET</a></li>
                <li><a class="s18" href="#">ଆଜିଠୁ NEET PG କାଉନ୍‌ସେଲିଂ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Jobs</a></li>
                <li><a class="s18" href="#">BHEL ରେ ଖାଲି ପଡ଼ିଛି ଇଞ୍ଜିନିୟରିଂ ପଦବୀ, ତୁରନ୍ତ କରନ୍ତୁ ଆବେଦନ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Omicron Surge</a></li>
                <li><a class="s18" href="#3">ଗତଥର ଭୋଗିଥିଲେ, ଏଥର ବି କ'ଣ ଭୋଗିବେ ?</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641570282.jpg" alt="" title="Omicron Surge" width="224" height="126"></a>
                <p>ଏବେ ଯାହା ପରିସ୍ଥିତି ହେଲାଣି, ଆଉ ଶ୍ରେଣୀ ଗୃହରେ ପାଠପଢ଼ା କେବେ ହେବ ତାହା ଜଣା ନାହିଁ। ଏମିତି ଯଦି ଲାଗି ରହେ ତେବେ ମାଟ୍ରିକ୍ ପିଲାଙ୍କ ପାଇଁ ବଢ଼ିଯିବ ସମସ୍ୟା</p>
            </div>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Matric Exam</a></li>
                <li><a class="s18" href="#">କରୋନା ପାଇଁ ସ୍କୁଲ ବନ୍ଦ : କେମିତି ମାଟ୍ରିକ୍‌ ପରୀକ୍ଷା ଦେବେ ପିଲା?</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">NEET-PG</a></li>
                <li><a class="s18" href="#">NEET କାଉନସେଲିଂରେ ଅନଗ୍ରସର ବର୍ଗ ଓ ପଛୁଆବର୍ଗ ସଂରକ୍ଷଣ ଚାଲୁ ରହିବ:ସୁପ୍ରିମକୋର୍ଟ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">ESIC Recruitment</a></li>
                <li><a class="s18" href="#">ESICରେ ଖାଲି ପଡିଛି ୩୬୦୦ ପଦବୀ, ତୁରନ୍ତ କରନ୍ତୁ ଆବେଦନ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Mathematics Cafe</a></li>
                <li><a class="s18" href="#">ଗଣିତ ପଢା ସାଙ୍ଗକୁ ସ୍ନାକ୍ସ ଖିଆ: ଏଭଳି କିଛି ନିଆରା ପ୍ରୟାସ କରିଛନ୍ତି ଏହି ଯୁବକ..</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Mathematics Cafe</a></li>
                <li><a class="s18" href="#">ଆସନ୍ତୁ..ମାଗଣା ଖାଇବେ, ଗଣିତ ପାଠ ପଢ଼ିବେ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">SEBI Recruitment</a></li>
                <li><a class="s18" href="#">SEBIରେ ଖାଲି ପଡିଛି ପଦବୀ, ତୁରନ୍ତ କରନ୍ତୁ ଆବେଦନ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Matric Exam</a></li>
                <li><a class="s18" href="#">ଆଜିଠାରୁ ଆରମ୍ଭ ଦଶମ ଶ୍ରେଣୀର ସମେଟିଭ ପରୀକ୍ଷା</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Education</a></li>
                <li><a class="s18" href="#">କାଲିଠୁ ଦଶମ ସମ୍ମେଟିଭ ପରୀକ୍ଷା</a></li>
            </ul>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="otv-300-250-ad"> </div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ମନୋରଞ୍ଜନ</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/x1080_1641954275.jpg" alt="" title="ENews- Meet Actress Jasmine Who Portrays Rudri Character In Tarang\'s Serial Maya" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">ENews</a></li>
                <li><a class="s20" href="#">ପାଗଳ କରୁଛି ମାୟାଙ୍କ ମାୟାଜାଲର ସିନ୍‌, ଦର୍ଶକଙ୍କ ମନରେ କରୁଛନ୍ତି ରାଜ୍‌...</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>1 day ago </li>
            </ul>
            <p>ମାୟା ମତେ ନା ଦେଇଛି ପରିଚୟ ବି ଦେଇଛି...ଜସମିନ୍‌ଠୁ ଅଧିକ ଲୋକ ରୁଦ୍ରି ନାରେ ମତେ ଜାଣନ୍ତି ବୋଲି କହିଲେ ଅଭିନେତ୍ରୀ... </p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Mihir Das Passes Away</a></li>
                <li><a class="s18" href="#">ଗୋଟିଏ ଯୁଗର ଅନ୍ତ ! ଆରପାରିରେ ଓଲିଉଡ୍‌ର 'କାକା'</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bollywood</a></li>
                <li><a class="s18" href="#">ମୁନ୍ନୀଙ୍କୁ ମିଳିଲା ସମ୍ମାନଜନକ ଭାରତ ରତ୍ନ ଡାକ୍ତର ଆମ୍ବେଦକର ପୁରସ୍କାର</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bollywood</a></li>
                <li><a class="s18" href="#">ବଡିକନ୍‌ ପୋଷାକରେ ବଲିଉଡ୍ ଲଳନାଙ୍କ ବୋଲ୍ଡ ଅବତାର</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641890194.jpg" alt="" title="Bollywood actress with bodycon dress to flaunt her perfect figure" width="224" height="126"></a>
                <p>ଦର୍ଶକଙ୍କ ମନରେ ସହଜରେ ରାଜ କରିବା ନେଇ ଖାଲି ଅଭିନୟ ନୁହେଁ, ଦରକାର ଆକର୍ଷଣୀୟ ଚେହେରା ମଧ୍ୟ। ଏନେଇ ନିଜ ଫିଗରକୁ ଦେଖେଇବା ନେଇ କୌଣସି ବି ସୁଯୋଗ ଛାଡନ୍ତି ନାହିଁ ବଲିଉଡ୍ ନାୟିକାମାନେ।...</p>
            </div>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">ENews</a></li>
                <li><a class="s18" href="#">ଆରମ୍ଭ ହେଲା ପ୍ରେମର କୁହୁକ...</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bollywood</a></li>
                <li><a class="s18" href="#">ସଲମାନଙ୍କ ନାମରେ ଯୋଡିହେଲେ ଆଉ ଜଣେ ବିଦେଶିନୀ; କରିବେ କି ବିବାହ?</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bollywood</a></li>
                <li><a class="s18" href="#">ବଲିଉଡ୍ ଅଭିନେତ୍ରୀଙ୍କ ମଙ୍ଗଳସୂତ୍ରର ଦାମ ଉଡେଇ ଦେବ ହୋସ୍‌</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Katrina Kaif</a></li>
                <li><a class="s18" href="#">Throwback Video: ବାସନ ଧୋଇଲେ, ଝାଡ଼ୁ ମାରିଲେ...ଭାଇରାଲ୍‌ ହେଉଛି କ୍ୟାଟ୍ରିନାଙ୍କ ଏହି ଭିଡିଓ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">News Fuse</a></li>
                <li><a class="s18" href="#">ଇଏ ଦେଶୀ ନା ବିଦେଶୀ କଣ ପିଇଛନ୍ତି କିରେ? ପାଟିରୁ ତ ଖାଲି ମହମହ ବାସନା ବାହାରୁଛି...</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bollywood</a></li>
                <li><a class="s18" href="#">ଏହି ଫିଲ୍ମ ପାଇଁ ବଡି ବନେଇଲେ ଜୁନିୟର୍ ଏନ୍‌ଟିଆର୍</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bollywood</a></li>
                <li><a class="s18" href="#">୨୦୨୨ରେ ଦେଶପ୍ରେମର କଥା କହିବ ଏହିସବୁ ଚଳଚ୍ଚିତ୍ର</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Jacqueline Fernandez</a></li>
                <li><a class="s18" href="#">ସୁକେଶଙ୍କ ସହ ଜ୍ୟାକଲିନ୍‌ଙ୍କ ଅନ୍ତରଙ୍ଗ ମୁହୂର୍ତ୍ତର ଫଟୋ ଭାଇରାଲ୍‌</a></li>
            </ul>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ଅତିଥି ସ୍ତମ୍ଭ </h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1641971714.jpg" alt="" title="information technology " width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Information Technology</a></li>
                <li><a class="s20" href="#">ସୂଚନା ପ୍ରଯୁକ୍ତିର ଯୁବଶକ୍ତି</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>22 hours ago </li>
            </ul>
            <p>କିଶୋର ଅବସ୍ଥାରୁ ମସ୍ତିଷ୍କରେ ଭରିଦିଆଯାଉଛି ଡିଜିଟାଲ ବିଶ୍ବର ଚମକ ,କୋଡିଙ୍ଗ ଶିଖ,ଆପ୍ ତିଆରି କର । ତାହେଲେ ପରିଗଣିତ ହେବ ବିଶ୍ୱମାନବ । ସଭ୍ୟ,ଶିକ୍ଷିତ ବୋଲାଇବାର ଏହିପରି ମନ୍ତ୍ରସଵୁ କି ଯେ ଭବିଷ୍ୟତ ଯୁବଶକ୍ତି...</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Ollywood</a></li>
                <li><a class="s18" href="#">ଓଡିଆ ସିନେମା କହିଲେ ମିହିର ଦାସଙ୍କୁ ବୁଝାଏ: ପ୍ରସନଜିତ ରାୟ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Article</a></li>
                <li><a class="s18" href="#">ନିଷ୍ପତ୍ତି ନେବେ କିପରି; ଜାଣନ୍ତୁ କେତେକ ଟିପ୍ସ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Book Review</a></li>
                <li><a class="s18" href="#">ଡିୟର ଜ୍ଜରି: ଏକ ଦୃଷ୍ଟିପାତ</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641832182.jpg" alt="" title="Book Review:Dear Zari" width="224" height="126"></a>
                <p>ଆଫ୍‌ଗାନିସ୍ଥାନର ଅନେଷା ଓ ୱଜ୍‌ମା ଦୁଇ ମହିଳାଙ୍କ କାହାଣୀ ସ୍ଥାନ ପାଇଛି ଜ୍ଜରଗୁନା କାରଗର ଲିଖିତ ‘ଡିୟର ଜ୍ଜରି’ ବହିରେ। ୨୦୦୫ ମସିହାରେ ବିବିସି (ବ୍ରିଟିଶ୍ ବ୍ରଡ୍କାଷ୍ଟିଂ କର୍ପୋରେସନ)ରେଡିଓ-୪ର ‘ଆଫଗାନ୍ ଓମ୍ୟାନ୍ସ ଆଓ୍ୱାର୍’ ନାମକ...</p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">କ୍ରୀଡ଼ା</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/ss_1642047181.JPG" alt="" title="India Open 2022" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">India Open 2022</a></li>
                <li><a class="s20" href="#">India Open 2022: ୭ ଭାରତୀୟ ଖେଳାଳିଙ୍କୁ କରୋନା</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>India</li>
                <li>1 hour ago </li>
            </ul>
            <p>ନୂଆଦିଲ୍ଲୀରେ ଚାଲିଥିବା ଇଣ୍ଡିଆ ଓପନ୍ ବ୍ୟାଡମିଣ୍ଟନ ଟୁର୍ଣ୍ଣାମେଣ୍ଟରେ କରୋନାର କାୟା। ୭ ଜଣ ଭାରତୀୟ ଖେଳାଳି କରୋନା ପଜିଟିଭ୍ ଚିହ୍ନଟ ହୋଇଛନ୍ତି। </p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Lovlina-borgohain</a></li>
                <li><a class="s18" href="#">ଟୋକିଓ ଅଲିମ୍ପିକ୍ସ ବ୍ରୋଞ୍ଜ ପଦକ ବିଜେତା ଏବେ ଆସାମ ଡିଏସପି</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">IPL 2022</a></li>
                <li><a class="s18" href="#">ଚାଇନିଜ୍ କମ୍ପାନୀକୁ ବାଏ ବାଏ; ଏବେ କ୍ରିକେଟ ଖେଳାଳିଙ୍କୁ ସ୍ପନସର୍ କରିବ ଟାଟା</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Sports</a></li>
                <li><a class="s18" href="#">ବିନା ଦର୍ଶକରେ ବାରବାଟୀରେ ହେବ ଟି-ଟ୍ୱେଣ୍ଟି ମ୍ୟାଚ୍‌</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/barabati-1_1626007681.jpg" alt="" title="barabati" width="224" height="126"></a>
                <p>ପରିସ୍ଥିତିକୁ ଦେଖି ବିନା ଦର୍ଶକରେ ମ୍ୟାଚ୍‌ ଆୟୋଜନ ପାଇଁ ଓସିଏ ପ୍ରସ୍ତୁତ ଥିବା କହିଛନ୍ତି ସିଇଓ ସୁବ୍ରତ ବେହେରା ।</p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ଜାତୀୟ</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1642051546.jpg" alt="" title="two brother " width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Special Story</a></li>
                <li><a class="s20" href="#">ବିଭାଜନ ସମୟରେ ଅଲଗା ହୋଇଯାଇଥିଲେ ଦୁଇ ଭାଇ ! ୭୪ ବର୍ଷ ପରେ ଏକାଠି ହେଲେ, ପରସ୍ପରକୁ ଆଲିଙ୍ଗନ କରି କାନ୍ଦିଲେ . .</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>India</li>
                <li>9 minutes ago </li>
            </ul>
            <p>ବିଭାଜନ ବେଳେ ଅଲଗା ହୋଇଥିଲେ, ୭୪ ବର୍ଷ ପରେ ଏକାଠି ହେଲେ ଦୁଇ ଭାଇ ।</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Spirit Of Youth</a></li>
                <li><a class="s18" href="#">୭୭ ବର୍ଷ ବୟସରେ ଜଲୱା ଦେଖାଇଲେ ବୃଦ୍ଧ ! ୫୬ ଥର ବିଫଳ ହେବା ପରେ ୫୭ ତମ ଥରରେ ଦଶମ ପାସ୍ କଲେ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Hungry Thief</a></li>
                <li><a class="s18" href="#">ଚୋରି କରିବା ସମୟରେ ଚୋରକୁ ଲାଗିଲା ଭୋକ, ଖେଚୁଡ଼ି ରାନ୍ଧୁ ରାନ୍ଧୁ ଧରି ପକାଇଲା ପୋଲିସ୍</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">BARC</a></li>
                <li><a class="s18" href="#">ଟିଆରପି ପ୍ରକାଶ ଲାଗି BARC କୁ କେନ୍ଦ୍ର ସରକାରଙ୍କ ନିର୍ଦ୍ଦେଶ</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642008163.jpg" alt="" title="News Rating" width="224" height="126"></a>
                <p>ଟେଲିଭିଜନ୍ ରେଟିଂ ପଏଣ୍ଟ ବା ଟିଆରପି ପ୍ରକାଶ ଲାଗି ବ୍ରଡକାଷ୍ଟ ଅଡିଏନ୍ସ ରିସର୍ଚ୍ଚ କାଉନସିଲ ବାର୍କକୁ କେନ୍ଦ୍ର ସରକାରଙ୍କ ନିର୍ଦ୍ଦେଶ । ଟିଆରପି ପାଇଁ ଅକ୍ଟୋବର ୨୦୨୦ରେ କିଛି ନିର୍ଦ୍ଦିଷ୍ଟ ଚ୍ୟାନେଲ ରିଗିଂ କରୁଥିବା...</p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ଗ୍ୟାଜେଟ୍‌ସ</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1641816576.jpg" alt="" title="Booster dose of COVID-19 vaccine" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">COVID-19 Vaccination</a></li>
                <li><a class="s20" href="#">ଦେଶରେ ଆଗଧାଡ଼ିର କୋଭିଡ ଯୋଦ୍ଧାଙ୍କୁ ଦିଆଯାଉଛି କରୋନାର ବୁଷ୍ଟର ଡୋଜ ଟିକା</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>3 days ago </li>
            </ul>
            <p>କରୋନା ସଂକ୍ରମଣର ସାଂଘାତିକ ସ୍ଥିତି ଭିତରେ ଆଜିଠୁ ଆରମ୍ଭ ହୋଇଛି ପ୍ରିକସନ୍ ଡୋଜ୍ । ସାରା ଦେଶରେ ପୂର୍ବ ଭଳି ପୁଣି ଆଜିଠୁ ଟିକାକରଣ ଆରମ୍ଭ ହୋଇଛି । ପ୍ରଥମ ପର୍ଯ୍ୟାୟରେ ସ୍ୱାସ୍ଥ୍ୟକର୍ମୀ, ସମ୍ମୁଖ...</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Booster Vaccine Doses</a></li>
                <li><a class="s18" href="#">ବୁଷ୍ଟର ଡୋଜ୍‌ ପାଇଁ ବୟସ୍କଙ୍କ ମନରେ ଉତ୍ସାହ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Baba Vanga Predictions</a></li>
                <li><a class="s18" href="#">ଭୟଭୀତ କରୁଛି ବାବା ଭାଙ୍ଗାଙ୍କ ଭବିଷ୍ୟତବାଣୀ : ୨୦୨୨ରେ ଜଳସଙ୍କଟ ସାଙ୍ଗକୁ ଆକ୍ରମଣ କରିବେ ଏଲିଏନ୍‌</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Australian Bird</a></li>
                <li><a class="s18" href="#">ବିଚିତ୍ର ପକ୍ଷୀ; ଅବିକଳ ମଣିଷ ଛୁଆ ଭଳି କାନ୍ଦୁଛି, ଦେଖନ୍ତୁ ଭିଡିଓ</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631177358.JPG" alt="" title="Wonderful bird" width="224" height="126"></a>
                <p>ମଣିଷ ଛୁଆ ପରି କାନ୍ଦୁଛି ପକ୍ଷୀ । ଅଷ୍ଟ୍ରେଲିଆ ସିଡନିର ତାରୋଙ୍ଗା ଚିଡିଆଖାନାରେ ଦେଖିବାକୁ ମିଳିଛି ଏଭଳି ବିଚିତ୍ର ପକ୍ଷୀ । ପକ୍ଷୀଟିର ନାଁ ଇକୋ । ଯିଏ ଅବିକଳ ଛୁଆ କାନ୍ଦିବା ଭଳି...</p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">କରୋନା ଖବର</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1639636645.jpg" alt="" title="Coronavirus" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">Coronavirus</a></li>
                <li><a class="s20" href="#">ଦିନକରେ ୨ ଲକ୍ଷ ୪୭ ହଜାର ୪୧୭ ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>India</li>
                <li>53 minutes ago </li>
            </ul>
            <p>କରୋନାଙ୍କ ସୁପର ସ୍ପିଡ୍ । ଗତ ୨୪ଘଣ୍ଟାରେ ଦେଶରେ ୨ଲକ୍ଷରୁ ଅଧିକ କରୋନା ସଂକ୍ରମିତ ଚିହ୍ନଟ ହୋଇଛନ୍ତି।</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">PM Modi</a></li>
                <li><a class="s18" href="#">କୋଭିଡ୍ ମୁକାବିଲା ଚିନ୍ତା ! ଅପରାହ୍ନ ସାଢ଼େ ୪ଟାରେ ସବୁ ମୁଖ୍ୟମନ୍ତ୍ରୀଙ୍କ ସହ ମୋଦିଙ୍କ ବୈଠକ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Omicron In China</a></li>
                <li><a class="s18" href="#">କରୋନାର ନୂଆ ଭାରିଆଣ୍ଟ୍ ଭୟରେ କ୍ରୁର ଲକଡାଉନ୍ ! ମେଟାଲ ବାକ୍ସରେ ବନ୍ଦ ଶିଶୁ ଓ ଗର୍ଭବତୀ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">COVID19</a></li>
                <li><a class="s18" href="#">ଦିନକରେ ଓଡ଼ିଶାରେ ୧୦ ହଜାର ଟପିଲା କରୋନା ଆକ୍ରାନ୍ତଙ୍କ ସଂଖ୍ୟା</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642046069.jpg" alt="" title="Corona Cases In Odisha " width="224" height="126"></a>
                <p>ଓଡ଼ିଶାରେ ଦୈନିକ କରୋନା ସଂକ୍ରମଣ ଆଜି ୧୦ ହଜାର ପାର୍‌ କରିଛି। ରାଜ୍ୟରେ ଗତ ୨୪ ଘଣ୍ଟାରେ ୧୦,୦୫୯ କରୋନା ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ ହୋଇଛନ୍ତି। </p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ବିଶ୍ୱ ଖବର</h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/divorces_1641980774.JPG" alt="" title="divorces" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">'provocative' Song</a></li>
                <li><a class="s20" href="#">ପାର୍ଟିରେ ଉତ୍ତେଜକ ଗୀତ ବଜାଇଲେ କନ୍ୟା, ବିବାହ ପରେ ପରେ ଛାଡ଼ପତ୍ର ଦେଇଦେଲା ବର</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>India</li>
                <li>20 hours ago </li>
            </ul>
            <p>ଗୀତ ପାଇଁ ଭାଙ୍ଗିଲା ବାହାଘର । ଉତ୍ତେଜକ ଗୀତ ବଜାଇବାରୁ କନ୍ୟାକୁ ଛାଡ଼ପତ୍ର ଦେଇଦେଲେ ବର । </p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Economic Crisis</a></li>
                <li><a class="s18" href="#">ଆକାଶଛୁଆଁ ପରିବା ଦର, ଆଳୁ ରେଟ୍‌ ୨ ଶହ ତ କଞ୍ଚାଲଙ୍କା ରେଟ୍‌ ୭ ଶହ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Artificial Sun</a></li>
                <li><a class="s18" href="#">ଚୀନ୍ କରିଛି କୃତ୍ରିମ ସୂର୍ଯ୍ୟ, ପ୍ରକୃତ ସୂର୍ଯ୍ୟଠାରୁ ୧୦ ଗୁଣ କ୍ଷମତାସମ୍ପନ</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Bird Flu</a></li>
                <li><a class="s18" href="#">ମଣିଷ ଶରୀରରେ ଚିହ୍ନଟ ହେଲା ବାର୍ଡ ଫ୍ଲୁ ଭାଇରସ, ସ୍ଵାସ୍ଥ୍ୟ ସୁରକ୍ଷା ସଂସ୍ଥା ପକ୍ଷରୁ ସତର୍କ ସୂଚନା</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641720769.jpg" alt="" title="UK identifies rare case of avian flu in a human" width="224" height="126"></a>
                <p>ବ୍ରିଟେନର ସାଉଥ ୱେଷ୍ଟ ଇଂଲଣ୍ଡରୁ ଜଣେ ବ୍ୟକ୍ତିଙ୍କ ଠାରେ ଏକ ବିରଳ ଧରଣର ବାର୍ଡ ଫ୍ଲୁ ରୋଗ ଚିହ୍ନଟ ହୋଇଛି । ଏନେଇ ବ୍ରିଟେନର ସ୍ୱାସ୍ଥ୍ୟ ସୁରକ୍ଷା ସଂସ୍ଥା (UKHSA) ପକ୍ଷରୁ ସୂଚନା ଦିଆଯାଇଛି...</p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <div class="container grid-gallery-container">
        <h3 class="heading-style-one">ବ୍ୟବସାୟ </h3>
        <div class="category-news-item">
            <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1641816576.jpg" alt="" title="Booster dose of COVID-19 vaccine" width="400" height="225"></a>
            <ul class="category-news-item-story">
                <li><a class="s20" href="#">COVID-19 Vaccination</a></li>
                <li><a class="s20" href="#">ଦେଶରେ ଆଗଧାଡ଼ିର କୋଭିଡ ଯୋଦ୍ଧାଙ୍କୁ ଦିଆଯାଉଛି କରୋନାର ବୁଷ୍ଟର ଡୋଜ ଟିକା</a></li>
            </ul>
            <ul class="category-news-item-time">
                <li>Odisha</li>
                <li>3 days ago </li>
            </ul>
            <p>କରୋନା ସଂକ୍ରମଣର ସାଂଘାତିକ ସ୍ଥିତି ଭିତରେ ଆଜିଠୁ ଆରମ୍ଭ ହୋଇଛି ପ୍ରିକସନ୍ ଡୋଜ୍ । ସାରା ଦେଶରେ ପୂର୍ବ ଭଳି ପୁଣି ଆଜିଠୁ ଟିକାକରଣ ଆରମ୍ଭ ହୋଇଛି । ପ୍ରଥମ ପର୍ଯ୍ୟାୟରେ ସ୍ୱାସ୍ଥ୍ୟକର୍ମୀ, ସମ୍ମୁଖ...</p>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Booster Vaccine Doses</a></li>
                <li><a class="s18" href="#">ବୁଷ୍ଟର ଡୋଜ୍‌ ପାଇଁ ବୟସ୍କଙ୍କ ମନରେ ଉତ୍ସାହ</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Baba Vanga Predictions</a></li>
                <li><a class="s18" href="#">ଭୟଭୀତ କରୁଛି ବାବା ଭାଙ୍ଗାଙ୍କ ଭବିଷ୍ୟତବାଣୀ : ୨୦୨୨ରେ ଜଳସଙ୍କଟ ସାଙ୍ଗକୁ ଆକ୍ରମଣ କରିବେ ଏଲିଏନ୍‌</a></li>
            </ul>
        </div>
        <div class="category-news-item ">
            <ul class="category-news-item-story">
                <li><a class="s18" href="#">Air Ambulance Service</a></li>
                <li><a class="s18" href="#">ଉପାନ୍ତ ଅଞ୍ଚଳର ୪ ଜିଲ୍ଲା ପାଇଁ ଆଜିଠୁ ଆରମ୍ଭ ମୁଖ୍ୟମନ୍ତ୍ରୀ ବାୟୁ ସ୍ୱାସ୍ଥ୍ୟ ସେବା</a></li>
            </ul>
            <div class="category-news-item-summary">
                <a href="#"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1639974026.jpg" alt="" title="air ambulance" width="224" height="126"></a>
                <p>ମାଲକାନଗିରି, ନବରଙ୍ଗପୁର, ନୂଆପଡ଼ା, କଳାହାଣ୍ଡି ପାଇଁ ଏୟାର ଆମ୍ବୁଲାନ୍ସ ସେବା ଆରମ୍ଭ କରାଯିବ । ଡାକ୍ତରୀ ଟିମ୍ ଏୟାର ଆମ୍ବୁଲାନ୍ସରେ ଯାଇ ଜଟିଳ ରୋଗରେ ଆକ୍ରାନ୍ତ ମାନଙ୍କୁ ଜିଲ୍ଲା ମୁଖ୍ୟ ଚିକିତ୍ସାଳୟରେ ଚିକିତ୍ସା ସୁବିଧା...</p>
            </div>
        </div><a href="#" class="common-more-button">More</a></div>
    <?php include_once 'includes/footer.php'; ?>