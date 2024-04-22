<?php include_once 'includes/header.php'; ?>
    <style type="text/css">
/*============= OTHER HEADLINES ==============*/
    .other-headline-container {
    margin-bottom: 20px;
    }
    .picture-gallery {
    position: relative;
    padding: 0px 0px 10px 106px;
    background: #f6f6f6;
    border-top: 3px solid #bd0000;
    margin-bottom: 15px;
    min-height: 62px;
    }
    .picture-gallery-image {
    left: 0px;
    top: 3px;
    position: absolute;
    }
    .picture-gallery-image img {
    width: 96px;
    height: 54px;
    }
    .picture-gallery-image {
    left: 0px;
    position: absolute;
    }
    .picture-gallery ul {
    margin: 0px;
    padding: 0px;
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
    .article-multi-credit {
    background-color: #21212199;
    padding: 3px 3px;
    color: #fff;
    font-size: 11px;
    width: fit-content;
    transition-duration: .5s;
    float: right;
    font-weight: 300;
    position: absolute;
    left: 0px;
    bottom: 0px;
    line-height: 17px;
    }
    .article-multi-thumb-item p {
    margin-top: 0px;
    text-align: left;
    background-color: #eaf1f9;
    padding: 5px 15px 5px 15px;
    margin: 0px;
    font-size: 12px;
    line-height: 16px;
    font-weight: normal;
    font-family: 'Roboto', sans-serif;
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
    margin: 15px 0px;
    padding: 0px 0px 10px 0px;
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
    transform: rotate( 10deg );
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
    font-weight: 500;
    line-height: 27px;
    }
    .category-news-item p {
    color: #807979;
    font-size: 14px;
    line-height: 20px;
    }
    ul.category-news-item-time {
    margin: -14px 0px 1px 0px;
    padding: 0px;
    position: relative;
    }
    ul.category-news-item-time li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    color: #b5afaf;
    font-size: 10px;
    font-family: 'Roboto', sans-serif;
    text-transform: uppercase;
    font-weight: 300;
    }
    ul.category-news-item-time li:last-child {
    margin-left: 20px;
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
    background-color: #980a00;
    border: none;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    line-height: 35px;
    border-radius: 2px;
    padding: 0px 10px;
    transition-duration: 1s;
    display: block;
    width: fit-content;
    }
    .cat-more-news:hover {
    background-color: #f4b01b;
    transition-duration: 1s;
    }
    .article-multi-thumb-item {
    margin: 0px;
    position: relative;
    /*margin-bottom: 15px;
    min-height: 249px;*/
    }
    .article-multi-thumb-img {
    position: relative;
    width: 100%;
    }
    .article-multi-thumb-img img {
    width: 100% !important;
    height: auto;
    margin: 0 auto;
    display: block;
    }
    /*============ //OTHER HEADLINES =============*/
    /*=================== ARTICLE ====================*/
    .mobile-welcome-container {
    /*margin-top: 15px;*/
    margin-bottom: 15px;
    }
    .welcome-note h1 {
    margin: 10px 0px 5px 0px;
    font-size: 28px;
    line-height: 32px;
    color: #000;
    font-weight: 500;
    }
    .bd-youtube-responsive {
    width: 100%;
    height: 186px;
    }
    .live-details-content iframe {
    max-width: 100%;
    }
    .welcome-note h2 {
    margin: 10px 0px 5px 0px;
    font-size: 15px;
    line-height: 22px;
    color: #a99898;
    }
    .welcome-note p {
    font-size: 18px;
    margin: 0px 0px 25px 0px;
    display: inline-block;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    padding: 0px;
    line-height: 29px;
    color: #252525;
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
    margin: 0px;
    padding: 5px 0px;
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
    margin: 0px;
    font-size: 11px;
    line-height: 16px;
    font-weight: normal;
    font-family: 'Roboto', sans-serif;
    }
    .article-updated-content {
    padding: 5px 15px 5px 68px;
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
    margin: 0px;
    padding: 0px;
    }
    .article-updated-content ul li {
    list-style: none;
    padding: 2px 0px;
    font-size: 9px;
    line-height: 12px;
    font-family: 'Roboto', sans-serif;
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
    margin: 0px;
    padding: 0px;
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
    /*
    .article-updated-socialmedia ul li a i.fab.fa-facebook-f {
    color:#3c51a5;
    }
    .article-updated-socialmedia ul li a i.fab.fa-twitter {
    color:#5db2f7;
    }
    .article-updated-socialmedia ul li a i.fab.fa-whatsapp {
    color:#00cd52;
    }
    .article-updated-socialmedia ul li a i.fab.fa-print {
    color:#21428f;
    }
    .article-updated-socialmedia ul li a i.fas.fa-share-alt {
    color:#b9b3b5;
    }*/
    .article-news-summary {
    padding: 0px;
    margin-bottom: 20px;
    font-size: 20px;
    margin: 0px 0px 25px 0px;
    display: inline-block;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    line-height: 30px;
    color: #252525;
    }
    .article-news-summary h2 {
    margin: 0px;
    padding: 10px 0px;
    font-size: 26px;
    }
    .article-news-summary p {
    line-height: 26px;
    position: relative;
    padding-left: 28px;
    font-size: 17px;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
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
    .article-multi-credit img {
    margin-right: 5px;
    color: #b5afaf;
    }
    .article-content {
    position: relative;
    float: left;
    font-size: 20px;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    line-height: 30px;
    color: #252525;
    }
    .article-content img {
    max-width: 100%;
    height: auto;
    }
    .article-content li {
    font-size: 18px;
    margin: 0px 0px 25px 0px;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    padding: 0px;
    line-height: 29px;
    color: #252525;
    }
    .article-content iframe {
    max-width: 100% !important;
    display: block !important;
    margin: 0 auto 15px 0px !important;
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
    font-size: 52px;
    float: left;
    margin: -5px 7px 0px 0px;
    padding: 0px;
    line-height: 1;
    }
    .article-content-more:before {
    content: "";
    display: block;
    background: linear-gradient(180deg, rgba(0,212,255,0) 0%, rgb(255 255 255 / 90%) 39%);
    width: 100%;
    height: 60px;
    position: absolute;
    left: 0;
    bottom: 4px;
    z-index: 2;
    }
    .article-more-news p {
    font-size: 18px;
    margin: 0px 0px 25px 0px;
    display: inline-block;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    padding: 0px;
    line-height: 29px;
    color: #252525;
    }
    div#text {
    position: relative;
    display: block;
    }
    button.article-read-more {
    border: none;
    color: white;
    background-color: #a00606;
    padding: 4px 10px 7px 10px;
    font-size: 20px;
    line-height: 26px;
    margin: 7px auto;
    display: block;
    width: 119px;
    outline: none;
    margin-bottom: 15px;
    font-family: 'Roboto', sans-serif;
    }
    .first-para-article p {
    font-size: 18px;
    margin: 0px 0px 25px 0px;
    display: inline-block;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    padding: 0px;
    line-height: 29px;
    color: #252525;
    }
    .article-content:first-letter {
    color: #232121;
    font-size: 58px;
    /*font-weight: 300;
    position: relative;
    margin-top: 10px;
    float: left;
    margin-right: 5px;
    text-transform: uppercase;*/
    }
    ul.article-summery-tags-list {
    margin: 0px 0px 15px 0px;
    padding: 0px;
    }
    ul.article-summery-tags-list li {
    list-style-type: none;
    display: inline-block;
    margin: 0px 5px 5px 0px;
    width: auto !important;
    }
    ul.article-summery-tags-list li a {
    text-decoration: none;
    display: block;
    border: solid 1px #d4d4d4;
    line-height: 30px;
    padding: 0px 10px 3px 10px;
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
    font-size: 14px;
    line-height: 18px;
    }
    .inside-also-read-items h4 {
    margin: 0;
    padding: 5px;
    overflow: hidden;
    height: 84px;
    line-height: 19px;
    font-size: 10px;
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
    left: 5px;
    bottom: 8px;
    color: #f7372f;
    font-size: 13px;
    font-family: Faustina, serif;
    }
    .inside-also-read {
    background-color: #f0f1f6;
    border: solid 1px #dddee4;
    padding: 0;
    width: 100%;
    float: left;
    margin: 0 0px 0 0;
    height: 200px;
    overflow: hidden;
    }
    /*=================== //ARTICLE ====================*/
    </style>
    <!--============== BREDCUM ===============-->
    <?php include_once 'includes/breadcrumb.php'; ?>

    <!--============== ADVERTISEMENT ===============-->
    <div class="otv-300-250-ad">
        <div id="div-gpt-ad-22473300755-0" style="width: 300px; height: 250px;">
            <script>
            googletag.cmd.push(function() {
                googletag.display("div-gpt-ad-22473300755-0");
            });
            </script>
        </div>
    </div>
    <!--============ //ADVERTISEMENT ===============-->
    <!--============ ARTICLE =============-->
    <div class="container mobile-welcome-container">
        <div class="welcome-note">
            <h1>ଦିଲ୍ଲୀରେ ସାଂଘାତିକ ହେଲାଣି ସ୍ଥିତି, ନିୟନ୍ତ୍ରଣ ବାହାରେ କରୋନା</h1>
            <!--<h2></h2>-->
            <p>ଦିଲ୍ଲୀରେ ଏବେ ସ୍ଥିତି ସଂଗୀନ ରହିଛି । ପ୍ରତି ୪ ଜଣରେ ଜଣେ କରୋନା ପଜିଟିଭ୍ ହେଉଥିବା ଜଣାପଡ଼ିଛି । ଗତକାଲି ପଜିଟିଭ୍ ହାର ୨୫ ପ୍ରତିଶତ ରହିଥିଲା । ଗତବର୍ଷ ମେ’ ମାସ ପରେ ପ୍ରଥମଥର ପାଇଁ ଗତକାଲି ପଜିଟିଭ୍‌ ହାର ୨୫ ପ୍ରତିଶତକୁ ଛୁଇଁଛି । </p>
        </div>
    </div>
    <!--=========== //ARTICLE ============-->
    <!-- UPDATED -->
    <div class="container article-updated-socialmedia">
        <ul class="article-share-btn">
            <li> <a title="Share on facebook" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://otvkhabar.in/news/covid-19/stricter-curbs-likely-in-delhi-as-covid-cases-surge-seating-in-restaurants-banned/82223&t=%E0%AC%A6%E0%AC%BF%E0%AC%B2%E0%AD%8D%E0%AC%B2%E0%AD%80%E0%AC%B0%E0%AD%87+%E0%AC%B8%E0%AC%BE%E0%AC%82%E0%AC%98%E0%AC%BE%E0%AC%A4%E0%AC%BF%E0%AC%95+%E0%AC%B9%E0%AD%87%E0%AC%B2%E0%AC%BE%E0%AC%A3%E0%AC%BF+%E0%AC%B8%E0%AD%8D%E0%AC%A5%E0%AC%BF%E0%AC%A4%E0%AC%BF%2C+%E0%AC%A8%E0%AC%BF%E0%AD%9F%E0%AC%A8%E0%AD%8D%E0%AC%A4%E0%AD%8D%E0%AC%B0%E0%AC%A3+%E0%AC%AC%E0%AC%BE%E0%AC%B9%E0%AC%BE%E0%AC%B0%E0%AD%87+%E0%AC%95%E0%AC%B0%E0%AD%8B%E0%AC%A8%E0%AC%BE','_blank'); return false;"><img src="images/svg/fb-gray.svg" width="20" height="20" alt="Facebook">
                </a> </li>
            <li><a title="Share on twitter" href="javascript:void(0);" onclick="window.open('https://twitter.com/share?url=https://otvkhabar.in/news/covid-19/stricter-curbs-likely-in-delhi-as-covid-cases-surge-seating-in-restaurants-banned/82223&text=%E0%AC%A6%E0%AC%BF%E0%AC%B2%E0%AD%8D%E0%AC%B2%E0%AD%80%E0%AC%B0%E0%AD%87+%E0%AC%B8%E0%AC%BE%E0%AC%82%E0%AC%98%E0%AC%BE%E0%AC%A4%E0%AC%BF%E0%AC%95+%E0%AC%B9%E0%AD%87%E0%AC%B2%E0%AC%BE%E0%AC%A3%E0%AC%BF+%E0%AC%B8%E0%AD%8D%E0%AC%A5%E0%AC%BF%E0%AC%A4%E0%AC%BF%2C+%E0%AC%A8%E0%AC%BF%E0%AD%9F%E0%AC%A8%E0%AD%8D%E0%AC%A4%E0%AD%8D%E0%AC%B0%E0%AC%A3+%E0%AC%AC%E0%AC%BE%E0%AC%B9%E0%AC%BE%E0%AC%B0%E0%AD%87+%E0%AC%95%E0%AC%B0%E0%AD%8B%E0%AC%A8%E0%AC%BE&hashtags=otv','_blank'); return false;"><img src="images/svg/twit-gray.svg" width="20" height="20" alt="Twitter"></a> </li>
            <li><a href="javascript:void(0);" onclick="javascript: window.print(); return false;"><img src="https://odishatv.in/commondir/images/svg/print-gray.svg" width="20" height="20" alt="Print"></a></li>
        </ul>
    </div>
    <div class="article-multi-thumb">
        <div class="owl-carousel article-credit">
            <div class="article-multi-thumb-item">
                <div class="article-multi-thumb-img"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1641905941.jpg" alt="Delhi corona" title="Delhi corona" width="100%" height="205px"><span class="article-multi-credit">
                Credit: File Pic</span></div>
                <p>Delhi corona</p>
            </div>
        </div>
    </div>
    <div class="container article-updated-content">
        <a href="https://otvkhabar.in/author/satyendu-shekher-mishra-16351"> <img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1626677157.jpg" alt="Satyendu Shekher Mishra" title="Satyendu Shekher Mishra"> </a>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> <a href="https://otvkhabar.in/india">  
                
        India</a>, Published: Tuesday, 11 January 2022</li>
            <li><i class="far fa-clock"></i>Updated: 11 January 2022, 06:29 PM IST</li>
            <li><i class="fas fa-user-edit"></i>By: <a href="https://otvkhabar.in/author/satyendu-shekher-mishra-16351">Satyendu Shekher Mishra</a></li>
        </ul>
    </div>
    <!-- //UPDATED -->
    <!-- NEWS SUMMARY -->
    <div class="container">
        <div class="article-content article-content-more">
            <div class="first-para-article">
                <p>ଦିଲ୍ଲୀରେ କରୋନା ସଂକ୍ରମଣ ହୁ ହୁ ହୋଇ ବଢ଼ିବାରେ ଲାଗିଛି । ଦୈନିକ ସଂକ୍ରମଣ ବଢୁଥିବାରୁ ଚଳିତ ସପ୍ତାହରେ ଦିଲ୍ଲୀରେ କରୋନା ଶୀର୍ଷରେ ପହଞ୍ଚିବ ବୋଲି ଦିଲ୍ଲୀ ସ୍ୱାସ୍ଥ୍ୟମନ୍ତ୍ରୀ ସତ୍ୟେନ୍ଦ୍ର ଜୈନ କହିଛନ୍ତି । ତେବେ ଶୀର୍ଷରେ ପହଞ୍ଚିବା ପରେ ସଂକ୍ରମଣ ହ୍ରାସ ପାଇବ ବୋଲି ସେ କହିଛନ୍ତି । ରବିବାର ୨୨ ହଜାର ୭୫୧ ନୂଆ ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ ହୋଇଥିବାବେଳେ, ଗତକାଲି ୧୯ ହଜାର ଚିହ୍ନଟ ହୋଇଥିଲେ ।</p>
                <div class="otv-300-250-ad">
                    <div id="div-gpt-ad-22473108441-0" style="width: 300px; height: 250px;">
                        <script>
                        googletag.cmd.push(function() {
                            googletag.display("div-gpt-ad-22473108441-0");
                        });
                        </script>
                    </div>
                </div>
                <p>ଦିଲ୍ଲୀରେ ଏବେ ସ୍ଥିତି ସଂଗୀନ ରହିଛି । ପ୍ରତି ୪ ଜଣରେ ଜଣେ କରୋନା ପଜିଟିଭ୍ ହେଉଥିବା ଜଣାପଡ଼ିଛି । ଗତକାଲି ପଜିଟିଭ୍ ହାର ୨୫ ପ୍ରତିଶତ ରହିଥିଲା । ଗତବର୍ଷ ମେ&rsquo; ମାସ ପରେ ପ୍ରଥମଥର ପାଇଁ ଗତକାଲି ପଜିଟିଭ୍&zwnj; ହାର ୨୫ ପ୍ରତିଶତକୁ ଛୁଇଁଛି । ସେହିପରି ଦିଲ୍ଲୀରେ ଓମିକ୍ରନ ସଂକ୍ରମଣ ମଧ୍ୟ ବୃଦ୍ଧି ପାଉଛି ବୋଲି ଦିଲ୍ଲୀ ସରକାର କହିଛନ୍ତି । ବିଦେଶରୁ ବିମାନ ଚଳାଚଳ ଥିବାରୁ ଓମିକ୍ରନ ସଂଖ୍ୟା ବଢୁଥିବା ସେ କହିଛନ୍ତି ।&nbsp;</p>
            </div>
            <div id="div-gpt-ad-1639125386630-0">
                <script>
                googletag.cmd.push(function() {
                    googletag.display("div-gpt-ad-1639125386630-0");
                });
                </script>
            </div>
            <div class="article-more-news" id="text" style="display: none;">
                <div class="inside-also-read">
    <h3>Also Read</h3>
    <div class="owl-carousel inside-also-read-slide">
        <div class="inside-also-read-items">
            <a href="https://odishatv.in/news/jobs/ossc-recruitment-2022-main-written-examination-for-these-posts-postponed-check-details-168263"> <img alt="OSSC Recruitment 2022: Main Written Examination For These Posts Postponed, Check Details" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642042437.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642042437.jpg" title="OSSC Recruitment 2022: Main Written Examination For These Posts Postponed, Check Details" width="400"> </a>
            <h4>
                                <a href="https://odishatv.in/news/jobs/ossc-recruitment-2022-main-written-examination-for-these-posts-postponed-check-details-168263">OSSC Recruitment 2022: Main Written Examination For These Posts Postponed, Check Details</a>
                              </h4> 
                              <a class="also-read-bd-more" href="https://odishatv.in/news/jobs/ossc-recruitment-2022-main-written-examination-for-these-posts-postponed-check-details-168263">Read More</a> </div>
        <div class="inside-also-read-items">
            <a href="https://odishatv.in/news/science/common-single-application-for-all-scientific-fellowships-grants-scholarships-mooted-168262"> <img alt="Common Single Application For All Scientific Fellowships, Grants &amp; Scholarships Mooted" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642042008.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642042008.jpg" title="Common Single Application For All Scientific Fellowships, Grants &amp; Scholarships Mooted" width="400"> </a>
            <h4>
                                <a href="https://odishatv.in/news/science/common-single-application-for-all-scientific-fellowships-grants-scholarships-mooted-168262">Common Single Application For All Scientific Fellowships, Grants &amp; Scholarships Mooted</a>
                              </h4> <a class="also-read-bd-more" href="https://odishatv.in/news/science/common-single-application-for-all-scientific-fellowships-grants-scholarships-mooted-168262">Read More</a> </div>
        <div class="inside-also-read-items">
            <a href="https://odishatv.in/news/international/uk-launches-fta-negotiations-with-india-168261"> <img alt="UK Launches FTA Negotiations With India" height="225" src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642041207.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642041207.jpg" title="UK Launches FTA Negotiations With India" width="400"> </a>
            <h4>
                                <a href="https://odishatv.in/news/international/uk-launches-fta-negotiations-with-india-168261">UK Launches FTA Negotiations With India</a>
                              </h4> <a class="also-read-bd-more" href="https://odishatv.in/news/international/uk-launches-fta-negotiations-with-india-168261">Read More</a> </div>
    </div>
</div>
                <p>ଦିଲ୍ଲୀରେ ସଂକ୍ରମଣ ବଢୁଥିଲେ ବି ହସ୍ପିଟାଲରେ ଭର୍ତ୍ତି ହେବା ସଂଖ୍ୟା କମିଛି । ଦୈନିକ ୨୦ ହଜାରରୁ ଅଧିକ ଆକ୍ରାନ୍ତ ଚିହ୍ନଟ ହେଉଥିବା ବେଳେ ମାତ୍ର ୨ ହଜାର ଆକ୍ରାନ୍ତଙ୍କୁ ହସ୍ପିଟାଲରେ ଭର୍ତ୍ତି ହେଉଛନ୍ତି ।&nbsp;ଏବେ ବି ୧୨ ହଜାର ବେଡ୍ ଖାଲି ପଡ଼ିଛି । ପୂର୍ବ ଲହରରେ ଦୈନିକ ୨୦ ହଜାର ସଂକ୍ରମିତ ହେଉଥିବାବେଳେ ୧୨ରୁ ୧୩ ହଜାର ହସ୍ପିଟାଲରେ ଭର୍ତ୍ତି ହେଉଥିଲେ ।</p>
                <p>ସେପଟେ ସଂକ୍ରମଣ ସଂଖ୍ୟା ବଢୁଥିବାରୁ ଦିଲ୍ଲୀ ମୁଖ୍ୟମନ୍ତ୍ରୀ ଅରବିନ୍ଦ କେଜ୍ରିଓ୍ୱାଲ ଆଜି ଲୋକନାୟକ ଜୟପ୍ରକାଶ ହସ୍ପିଟାଲ ଯାଇ କୋଭିଡ ଚିକିତ୍ସା ବ୍ୟବସ୍ଥାର ସମୀକ୍ଷା କରିଛନ୍ତି । ହସ୍ପିଟାଲର କୋଭିଡ୍ କେୟାର ୟୁନିଟ୍ ବୁଲି ଦେଖିବା ସହ ଅଧିକାରୀ ଓ ଡାକ୍ତରଙ୍କ ସହ ଆଲୋଚନା କରିଛନ୍ତି । ଏହାସହ ଗୁରୁତର ରୋଗୀଙ୍କ ପାଇଁ ବେଡ୍ ବ୍ୟବସ୍ଥା ନେଇ ବୁଝିଛନ୍ତି ।&nbsp;</p>
                <p>ସେହିଭଳି ଦିଲ୍ଲୀରେ କରୋନା ସଂକ୍ରମଣ ବୃଦ୍ଧି ପାଉଥିବାରୁ ରାଜ୍ୟର ସମସ୍ତ ବେସରକାରୀ କାର୍ଯ୍ୟାଳୟ, ବାର୍ ଓ ରେଷ୍ଟୁରାଣ୍ଟ ବନ୍ଦ ରଖିବାକୁ ନିର୍ଦ୍ଦେଶ ଦେଇଛନ୍ତି ରାଜ୍ୟ ସରକାର । ଆଜିଠାରୁ ଏସବୁକୁ ବନ୍ଦ ରଖିବାକୁ ଦିଲ୍ଲୀ ସରକାର ନିର୍ଦ୍ଦେଶ ଦେଇଛନ୍ତି । ପୂର୍ବରୁ ୫୦ ପ୍ରତିଶତରେ ଘରୋଇ ଅଫିସ ଓ ରେଷ୍ଟୁରାଣ୍ଟ ଚଲାଇବାକୁ ସରକାର ନିର୍ଦ୍ଦେଶ ଦେଇଥିଲେ । ଦିଲ୍ଲୀ ବିପର୍ଯ୍ୟୟ ପରିଚାଳନା କର୍ତ୍ତୃପକ୍ଷଙ୍କ ପକ୍ଷରୁ ଆଜି ଏନେଇ ନୂଆ ଗାଇଡଲାଇନ୍ ଜାରି କରାଯାଇଛି ।</p>
                <p>ଜରୁରୀ ସେବାରେ ଲାଗୁଥିବା ଘରୋଇ ସଂସ୍ଥାର ଅଫିସକୁ ଏଥିରୁ ବାଦ୍ ଦିଆଯାଇଛି । ଲୋକଙ୍କ ଦୈନନ୍ଦିନ ସେବାରେ ଆସୁଥିବା ଘରୋଇ ସଂସ୍ଥାର ଅଫିସଗୁଡ଼ିକ କୋଭିଡ୍ ପ୍ରୋଟକଲ୍ ଭିତରେ ଖୋଲିବାକୁ ଅନୁମତି ଦିଆଯାଇଛି । ବାକି ଅନ୍ୟ ସମସ୍ତ ଅଫିସ, ବାର୍ ଓ ରେଷ୍ଟୁରାଣ୍ଟ ସଂପୂର୍ଣ୍ଣ ବନ୍ଦ ରଖିବାକୁ ନୂଆ ନିୟମାବଳୀରେ ନିର୍ଦ୍ଦେଶ ଦିଆଯାଇଛି । ତେବେ ରେଷ୍ଟୁରାଣ୍ଟଗୁଡ଼ିକ ପାର୍ସଲ ବା ହୋମ୍ ଡେଲିଭରି ଦେଇପାରିବେ ବୋଲି ଏଥିରେ କୁହାଯାଇଛି ।</p>
                <div class="article-summery-tags">
                    <ul class="article-summery-tags-list">
                        <li><a href="https://otvkhabar.in/tag/corona">Corona</a></li>
                        <li><a href="https://otvkhabar.in/tag/covid19">COVID19</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <button class="article-read-more" id="toggle-story-content">Read More</button>
        <div class="otv-300-250-ad">
            <div id="div-gpt-ad-22473108408-0" style="width: 300px; height: 250px;">
                <script>
                googletag.cmd.push(function() {
                    googletag.display("div-gpt-ad-22473108408-0");
                });
                </script>
            </div>
        </div>
    </div>
    <div class="container other-headline-container">
        <h3 class="heading-style-one">Related to this</h3>
        <div class="picture-gallery">
            <div class="picture-gallery-image">
                <a href="https://otvkhabar.in/news/politics/up-minister-swami-prasad-maurya-resigns-joins-sp-ahead-of-polls-bjp-says-let-s-talk-/82218"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1641903758.JPG" alt="Yogi Adityanath" title="Yogi Adityanath"></a>
            </div>
            <ul>
                <li><a href="https://otvkhabar.in/politics">Politics</a></li>
                <li><a href="https://otvkhabar.in/news/politics/up-minister-swami-prasad-maurya-resigns-joins-sp-ahead-of-polls-bjp-says-let-s-talk-/82218">ବିଧାନସଭା ନିର୍ବାଚନ ପୂର୍ବରୁ ଯୋଗୀଙ୍କୁ ବଡ଼ ଝଟକା</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a href="https://otvkhabar.in/miscellaneous">Miscellaneous</a></li>
                <li><a href="https://otvkhabar.in/news/miscellaneous/a-ninth-student-makes-an-almost-extinct-musical-instrument/82217">ଅଜାଙ୍କ ଠାରୁ ମିଳିଲା ପ୍ରେରଣା ! ବିଲୁପ୍ତ ପ୍ରାୟ ବାଦ୍ୟଯନ୍ତ୍ର ତିଆରି କଲେ ନବମ ଶ୍ରେଣୀ ଛାତ୍ର</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a href="https://otvkhabar.in/national">National</a></li>
                <li><a href="https://otvkhabar.in/news/national/fact-check-no-corona-fund-from-central-government-of-rupees-5000-given/82215">କରୋନା ସହାୟତା ନାଁରେ ୫୦୦୦ ଟଙ୍କା ଦେଉଛନ୍ତି ସରକାର ! ଏହା କ’ଣ ସତ ?</a></li>
            </ul>
        </div>
        <div class="category-news-item">
            <ul class="category-news-item-story">
                <li><a href="https://otvkhabar.in/miscellaneous">Miscellaneous</a></li>
                <li><a href="https://otvkhabar.in/news/miscellaneous/12-year-old-girl-punches-tree-with-her-knuckles/82214">ମୁଖିମାରି ଗଛକୁ ଶୁଆଇ ଦେଉଛି ବାର ବର୍ଷର ବାଳିକା</a></li>
            </ul>
        </div><a href="https://otvkhabar.in/" class="common-more-button">more</a></div>
    <?php include_once 'includes/footer.php'; ?>