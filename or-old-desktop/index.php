<?php include_once 'includes/header.php'; ?>
<style>
    section.category-news-one {
        margin-bottom: 40px;
    }
   /* h3.heading-style-one {
        margin: 5px 0px 5px 0px;
    padding: 0px 0px 0px 45px !important;
    position: relative;
    font-weight: 400;
    font-size: 19px;
    color: #333;
    line-height: 19px;
    border-bottom: none !important;
    }
    h3.heading-style-one:before {
    content: "";
    display: block;
    background-color: #7b0505;
    position: absolute;
    left: 0;
    top: 3px;
    width: 30px;
    height: 13px;
}*/
h3.heading-style-one {
    margin: 5px 0px 6px 0px;
    padding: 7px;
    position: relative;
    font-weight: 400;
    font-size: 19px;
    color: #fff;
    line-height: 19px;
    border-bottom: none !important; 
    width: fit-content;
    background-color: #151515;
}
/*h3.heading-style-three {
        margin: 0px 0px 15px 0px;    
        padding: 0px;
        position: relative;
        width: 100%;
        line-height: 25px;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 20px;
        color: #7b1c18;
    }*/
    h3.heading-style-three {
        margin: 5px 0px 6px 0px;
    padding: 7px;
    position: relative;
    font-weight: 400;
    font-size: 19px;
    color: #fff;
    line-height: 19px;
    border-bottom: none !important; 
    width: fit-content;
    background-color: #151515;
    }
    .category-custom-one-item {
        position: relative;
        display: inline-block;
        width: 100%;
        padding-left: 130px;
        margin: 0px 0px 15px 0px;
        min-height: 67px;
    }
    .category-custom-one-item img {
        width: 120px;
        height: 74px;
        object-fit: cover;
        position: absolute;
        left: 0;
        top: 0;
    }
    ul.category-custom-one-post {
        margin: -5px 0px 0px 0px;
        padding: 0px;
        max-height: 76px;
        overflow: hidden;
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
        height: 10px;
        position: absolute;
        bottom: 5px;
        right: -10px;
        transform: rotate(10deg);
    }
    ul.category-custom-one-post li a {
        font-size: 15px;
        text-decoration: none;
        display: inline;
        color: #000;
        line-height: 19px;
    }
    ul.category-custom-one-post li:first-child a {
        color: #b30707;
    }
    ul.category-custom-one-post li a:hover {
        color: #af262d;
    }
    /* //CATEGORY NEWS ONE */

    /* MOST POPULAR */
    section.most-popular {
        margin-bottom: 40px;
        background-color: #17181c;
    }
    h3.heading-style-two {
        margin: 0px 0px 15px 0px;    
        padding: 0px;
        position: relative;
        width: 100%;
    	line-height: 50px;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 20px;
        color: #fff;
        border-bottom: solid 1px #333;
    }
    .most-popular-items {
        position: relative;
        margin-bottom: 15px;
    }
    .most-popular h5 {
        margin: 0px 0px 10px 0px;
        padding: 0px;
        color: #fff;
        font-size: 10px;
    }
    .most-popular h5 span {
        font-size: 10px;
        color: #bbb;
    }
    .most-popular img {
        width: 100%;
        height: 173px;
    }
    ul.most-popular-post {
        margin: 7px 0px 0px 0px;
        padding: 0px;
        max-height: 76px;
        overflow: hidden;
    }
    ul.most-popular-post li {
        list-style-type: none;
        display: inline;
    }
    ul.most-popular-post li:first-child {
        position: relative;
        margin-right: 15px;
    }
    ul.most-popular-post li:first-child:before {
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
    ul.most-popular-post li a {
        font-size: 17px;
        text-decoration: none;
        display: inline;
        color: #fff;
        line-height: 20px;
    }
    ul.most-popular-post li:first-child a {
        color: #fff;
    }
    ul.most-popular-post li a:hover {
        color: #af262d;
    }
    ul.most-popular-post-time {
        margin: 6px 0px;
        padding: 0px;
    }
    ul.most-popular-post-time li {
        position: relative;
        list-style-type: none;
        display: inline-block;
        color: #B5AFAD;
        font-size: 12px;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        text-transform: uppercase;
    }
    ul.most-popular-post-time li:first-child:before {
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
    ul.most-popular-post-time li:first-child {
        margin-right: 23px;
        color: red;
    }
    /* //MOST POPULAR */

    /* TRENDING NEWS */
    section.trending-news {
        margin-bottom: 40px;
    }
    .trending-lists {
        background-color: #eaeaea;
        padding: 15px;
    }
    .or-trending-news {
        overflow: hidden;
        border-radius: 5px;
        background-color: #fff;
    }
    .or-trending-news-img {
        position: relative;
    }
    .or-trending-news-img img {
        width: 100%;
        height: 132px;
    }
    .or-trending-news-img span {
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        text-align: center;
        background: #000;
        opacity: 0.7;
        color: #fff;
        padding: 8px;
        font-size: 11px;
    }
    ul.category-custom-two-post {
        margin: 5px;
        padding: 0px;
        max-height: 76px;
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
        bottom: 5px;
        right: -10px;
        transform: rotate(10deg);
    }
    ul.category-custom-two-post li a {
        font-size: 15px;
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
    /* //TRENDING NEWS */

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
        min-height: 242px;
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
    max-height: 76px;
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
        height: 281px;
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
    img.inpic-camera-icon {
    width: 25px;
    height: 25px;
    margin-left: 10px;
    margin-bottom: 10px;
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
    .inpictures-item-one ul {
        margin: 10px;
        padding: 0px;
        max-height: 74px;
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
    /*=============== VIDEO SECTION ================*/
    section.video-galley {
        background-color: #17181c;
        margin: 10px 0px;
        padding: 40px 0px;
    }
    .video-gallery-item-img span {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px 10px 10px 30px;
        background-color: #17181c;
        color: #fff;
    }
    .video-gallery-item-img {
        position: relative;
        border: 1px solid #fff;
    }
    .video-gallery-item-img img {
        width: 100%;
        height: 156px;
        object-fit: cover;
    }
    .video-gallery-item-img span {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px 10px 10px 21px;
        background-color: #17181c;
        color: #fff;
    }
    .video-gallery-item-img span:before {
        content: "";
        width: 0;
        height: 0;
        border-top: 7px solid transparent;
        border-left: 10px solid #ff0000;
        border-bottom: 7px solid transparent;
        position: absolute;
        left: 7px;
        top: 12px;
    }
    ul.category-custom-eight-post {
        margin: 10px 0 2px 0;
        padding: 0;
        height: 66px;
        overflow: hidden;
    }

    ul.category-custom-eight-post li {
        list-style-type: none;
        display: inline;
    }

    ul.category-custom-eight-post li:first-child {
        position: relative;
        margin-right: 15px;
    }

    ul.category-custom-eight-post li:first-child:before {
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

    ul.category-custom-eight-post li a {
        font-size: 17px;
        text-decoration: none;
        display: inline;
        color: #fff;
        line-height: 22px;
    }

    ul.category-custom-eight-post li:first-child a {
        color: #ff1212;
    }

    ul.category-custom-eight-post li a:hover {
        color: #ff1212;
    }
    .video-gallery-item-img-middle span {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px 10px 10px 30px;
        background-color: #17181c;
        color: #fff;
    }
    .video-gallery-item-img-middle {
        position: relative;
        border: 1px solid #fff;
    }
    .video-gallery-item-img-middle img {
        width: 100%;
        height: 320px;
        object-fit: cover;
    }
    .video-gallery-item-img-middle span {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px 10px 10px 21px;
        background-color: #17181c;
        color: #fff;
    }
    .video-gallery-item-img-middle span:before {
        content: "";
        width: 0;
        height: 0;
        border-top: 7px solid transparent;
        border-left: 10px solid #ff0000;
        border-bottom: 7px solid transparent;
        position: absolute;
        left: 7px;
        top: 12px;
    }
    .video-gallery-item-middle p {
        font-size: 13px;
        color: #ffffff;
        height: 80px;
        overflow: hidden;
        line-height: 20px;
    }
    ul.category-custom-eight-post-middle {
        margin: 10px 0 4px 0;
        padding: 0;
        height: 25pxx;
        overflow: hidden;
    }
    ul.category-custom-eight-post-middle li {
        list-style-type: none;
        display: inline;
    }
    ul.category-custom-eight-post-middle li:first-child {
        position: relative;
        margin-right: 15px;
    }
    ul.category-custom-eight-post-middle li:first-child:before {
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
    ul.category-custom-eight-post-middle li a {
        font-size: 17px;
        text-decoration: none;
        display: inline;
        color: #fff;
        line-height: 22px;
    }
    ul.category-custom-eight-post-middle li:first-child a {
        color: #ff1212;
    }
    ul.category-custom-eight-post-middle li a:hover {
        color: #ff1212;
    }
    .video-gallery-item {
        margin-bottom: 10px;
    }
    /*=============== //VIDEO SECTION ================*/
    /*=============== CATEGORY NEWS NATIONAL ================*/
    section.bd-cat-sec {
        margin-bottom: 20px;
    }
    .category-custom-four-item {
        position: relative;
        margin-bottom: 10px;
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
        color: #B5AFAD;
        font-size: 10px;
        font-family: 'Roboto', sans-serif;
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
    .category-custom-five-item {
        position: relative;
        display: inline-block;
        width: 100%;
    }
    .category-custom-five-item img {
        width: 100%;
        height: 271px;
        object-fit: cover;
    }
    .category-custom-five-item:before {
        content: "";
        display: block;
        width: 1px;
        height: 100%;
        background-color: #cecdcd;
        position: absolute;
        right: -8px;
        top: 0;
    }
    ul.category-custom-five-post {
        margin: 10px 0px;
        padding: 0px;
    }
    ul.category-custom-five-post li {
        list-style-type: none;
        display: inline;
    }
    ul.category-custom-five-post li:first-child {
        position: relative;
        margin-right: 15px;
    }
    ul.category-custom-five-post li:first-child:before {
        content: "";
        display: block;
        background-color: #e92b28;
        width: 1px;
        height: 14px;
        position: absolute;
        bottom: 3px;
        right: -10px;
        transform: rotate(10deg);
    }
    ul.category-custom-five-post li a {
        font-size: 24px;
        text-decoration: none;
        display: inline;
        color: #000;
        line-height: 29px;
    }
    ul.category-custom-five-post li:first-child a {
        color: #b30707;
    }
    ul.category-custom-five-post li a:hover {
        color: #af262d;
    }
    ul.category-custom-five-time {
        margin: 0px 0px 10px 0px;
        padding: 0px;
    }
    ul.category-custom-five-time li {
        list-style-type: none;
        display: inline-block;
        position: relative;
        color: #b5afaf;
        font-size: 12px;
    }
    ul.category-custom-five-time li:first-child {
        margin-right: 20px;
    }
    ul.category-custom-five-time li:first-child:after {
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
    .category-custom-six-item {
        position: relative;
        display: inline-block;
        width: 100%;
        padding-left: 130px;
        margin: 0px 0px 15px 0px;
        min-height: 67px;
        border-top: 1px solid #b30707;
    }
    .category-custom-six-item img {
        width: 120px;
        height: 74px;
        object-fit: cover;
        position: absolute;
        left: 0;
        top: 0;
    }
    .category-custom-six-item:before {
        content: "";
        display: block;
        width: 1px;
        height: 100%;
        background-color: #cecdcd;
        position: absolute;
        right: -8px;
        top: 0;
    }
    ul.category-custom-six-post {
        margin: 0px;
        padding: 0px;
        max-height: 62px;
        overflow: hidden;
    }
    ul.category-custom-six-post li {
        list-style-type: none;
        display: inline;
    }
    ul.category-custom-six-post li:first-child {
        position: relative;
        margin-right: 15px;
    }
    ul.category-custom-six-post li:first-child:before {
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
    ul.category-custom-six-post li a {
        font-size: 16px;
        text-decoration: none;
        display: inline;
        color: #000;
        line-height: 19px;
    }
    ul.category-custom-six-post li:first-child a {
        color: #b30707;
    }
    ul.category-custom-six-post li a:hover {
        color: #af262d;
    }
    ul.category-custom-six-time {
        margin: 0px;
        padding: 0px;
    }
    ul.category-custom-six-time li {
        position: relative;
        list-style-type: none;
        display: inline-block;
        color: #B5AFAD;
        font-size: 10px;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        text-transform: uppercase;
    }
    ul.category-custom-six-time li:first-child:before {
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
    ul.category-custom-six-time li:first-child {
        margin-right: 23px;
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
        margin: 5px 0px 5px 0px;
        padding: 0px;
        height: 44px;
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
        color: #B5AFAD;
        font-size: 10px;
        font-family: 'Roboto', sans-serif;
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
        color: #5f5f5f;
        height: 80px;
        overflow: hidden;
        line-height: 20px;
    }
    .category-custom-three-item span {
        float: right;
        color: #847373;
        font-size: 16px;
    }
    /*=============== //CATEGORY NEWS NATIONAL ================*/
.article-summery-tags p {
    color: #2e2e2e;
    font-weight: 400;
    font-size: 18px;
    line-height: 26px;
}
ul.article-summery-tags-list {
    margin: 12px 0px 0px 0px;
    padding: 0px;
}
ul.article-summery-tags-list li {
    list-style-type: none;
    display: inline-block;
    margin: 0px 13px 13px 0px;
}
ul.article-summery-tags-list li a {
    text-decoration: none;
    display: block;
    border: solid 1px #d4d4d4;
    line-height: 30px;
    padding: 0px 10px;
    border-radius: 5px;
    color: #333;
    text-transform: capitalize;
    font-size: 16px;
}
ul.article-summery-tags-list li a:hover {
    background-color: #7b0505;
    border: solid 1px #7b0505;
    color: #fff;
}
.featured-video img {
    max-width: 100%;
    height: 360px;
    object-fit: cover;
}
.featured-video-content {
    margin: 10px 0px;
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
    color: #000;
    font-weight: 400;
    line-height: 26px;
    font-family: 'Faustina', serif;
}
.featured-video:hover .play-btn-md {
    background-color: #f05127;
    transition-duration: .5s;
}
.featured-image-container {
    height: 372px;
}
.featured-image-container a img {
    border-radius: 4px;
}
.category-custom-eight-item {
    position: relative;
    margin: 0 10px 16px;
    padding: 10px 10px;
    padding-right: 148px;
    -webkit-box-shadow: 0 0 6px 0 rgb(121 121 121 / 16%);
    -moz-box-shadow: 0 0 6px 0 rgba(121,121,121,0.16);
    -o-box-shadow: 0 0 6px 0 rgba(121,121,121,0.16);
    box-shadow: 0 0 6px 0 rgb(121 121 121 / 16%);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    background-color: #fff;
}
.category-custom-eight-item:hover {
    webkit-box-shadow: 0 0 6px 3px rgb(121 121 121 / 16%);
    -moz-box-shadow: 0 0 6px 3px rgba(121,121,121,0.16);
    -o-box-shadow: 0 0 6px 3px rgba(121,121,121,0.16);
    box-shadow: 0 0 6px 3px rgb(121 121 121 / 16%);
}
    .category-custom-eight-item img {
    width: 120px;
    height: 74px;
    object-fit: cover;
    position: absolute;
    right: 10px;
    top: 13px;
}
    ul.category-custom-eight-post {
        margin: 0px;
        padding: 0px;
        max-height: 62px;
        overflow: hidden;
    }
    ul.category-custom-eight-post li {
        list-style-type: none;
        display: inline;
    }
    ul.category-custom-eight-post li:first-child {
        position: relative;
        margin-right: 15px;
    }
    ul.category-custom-eight-post li:first-child:before {
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
    ul.category-custom-eight-post li a {
        font-size: 16px;
        text-decoration: none;
        display: inline;
        color: #ffffff;
    }
    ul.category-custom-eight-time {
        margin: 0px;0;
        line-height: 19px;
    }
    ul.category-custom-eight-post li:first-child a {
        color: #b30707;
    }
    ul.category-custom-eight-post li a:hover {
        color: #af262d;
        padding: 0px;
    }
    ul.category-custom-eight-time li {
        position: relative;
        list-style-type: none;
        display: inline-block;
        color: #B5AFAD;
        font-size: 10px;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        text-transform: uppercase;
    }
    ul.category-custom-eight-time li:first-child:before {
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
    .category-custom-eight-item h5 {
    padding: 0 0 0px;
    color: #000;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    font-family: "Lato",sans-serif;
    width: 100%;
    box-sizing: border-box;
    margin: 0;
    max-height: 44px;
    overflow: hidden;
}
    ul.category-custom-eight-time li:first-child {
        margin-right: 23px;
    }
    h3.heading-style-seven {
    margin: 0px 0px 8px 0px;
    padding: 0px;
    position: relative;
    width: 100%;
    line-height: 19px;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 18px;
    color: #7b1c18;
}
.listing-result-news-subcontent ul {
  margin: 0;
  padding: 0;
}
.listing-result-news-subcontent ul li {
    display: inline-block;
    color: #7f7b79;
}
.listing-result-news-subcontent ul li a {
    padding: 2px 10px 2px 10px;
    margin: 4px 3px;
    display: inline-block;
}
.listing-result-news-subcontent ul li a img {
    width: 20px;
    height: 20px;
    right: 0;
    position: relative;
    object-fit: contain;
    top: 0;
}
a.featured-video-readmore {
    color: #7b1c18;
    margin-left: 10px;
    width: 90px;
    display: inline-block;
}
a.featured-video-share {
    color: #7b1c18;
    margin-left: 10px;
    width: 48px;
    display: inline-block;
    float: right;
    margin-top: -2px;
}
a.featured-video-readmore {
  color: #7b1c18;
  margin-left: 10px;
  width: 90px;
  display: inline-block;
}
a.featured-video-share img {
    width: 17px;
    height: 21px;
    object-fit: contain;
}
.featured-video {
    position: relative;
    margin: 0 10px 16px;
    padding: 10px 10px;
    -webkit-box-shadow: 0 0 6px 0 rgb(121 121 121 / 16%);
    -moz-box-shadow: 0 0 6px 0 rgba(121,121,121,0.16);
    -o-box-shadow: 0 0 6px 0 rgba(121,121,121,0.16);
    box-shadow: 0 0 6px 0 rgb(121 121 121 / 16%);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    background-color: #fff;
}
.third-child {
    background-color: #fff;
}
.spotlight-right {
    background-color: #fff;
    padding: 5px;
    margin: 5px 0px;
}
.spotlight-left {
    background-color: #fff;
    padding: 5px;
    margin: 5px 0px;
}
/*=============== BREAKING NEWS ===============*/
section.breaking-news {
    margin: 20px 0px 20px 0px;
    width: 100%;
    float: left;
}
.breakingnews-slide {
    position: relative;
    padding-left: 175px;
    padding-right: 70px;
    background-color: #fff;
}
section.breaking-news h3 {
    background-color: #ed2027;
    color: #fff;
    margin: 0px;
    padding: 0px 10px;
    font-size: 18px;
    text-transform: uppercase;
    line-height: 35px;
    float: left;
    width: 162px;
    position: absolute;
    left: 0;
    top: 0;
}
a.breaking-news-prev {
    position: absolute;
    right: -33px;
    top: 3px;
}
a.breaking-news-next {
    position: absolute;
    right: -66px;
    top: 3px;
}
.breakingnews-slide p {
    margin: 0px;
    padding: 0px;
    font-size: 18px;
    line-height: 35px;
    font-weight: 400;
    color: #000;
    display: inline-block;
    vertical-align: middle;
    height: 35px;
    overflow: hidden !important;
}
/*============== //BREAKING NEWS ==============*/
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
    font-weight: 500;
    font-size: 17px;
    text-decoration: none;
    display: inline;
    color: #000;
    line-height: 24px;
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
/* Vertical Morque */
.spotlight-nod-container {
    overflow: hidden;
    height: 369px;
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
a.cat-more-news-btn {
    outline: 0;
    line-height: 18px;
    padding: 0 17px 0 0;
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
    content: "";
    background-image: url(images/svg/long-arrow.svg);
    margin-left: 8px;
    display: block;
    width: 13px;
    height: 5px;
    background-repeat: no-repeat;
    position: absolute;
    right: 0;
    top: 7px;
}
.cat-more-news:hover {
    color: #f4b01b;
    transition-duration: .5s;
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
    margin: 12px 0px 0px 0px;
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
</style>
<!--===================== TESTING BREAKING NEWS =====================-->
<section class="breaking-news">
    <div class="container">
        <div class="breakingnews-slide">
     <h3>Breaking news</h3>
    <div id="demo" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
            <a title="#" href="">
            <p>ସ୍ୱାମୀ-ସ୍ତ୍ରୀ କଳିକୁ ଡେଇଁଲେ ବାନ୍ଧବୀ ! ନାଁ ନନେଇ ବର୍ଷାଙ୍କୁ ଟାର୍ଗେଟ କଲେ ଜାଗ୍ରତି ଶୁକ୍ଳା</p>
            </a>
          </div>
          <div class="carousel-item">
             <a title="#" href="">
            <p>ପୁଣି ବଢ଼ିଲା ସୁନା ଦର, ଜାଣନ୍ତୁ କେତେ ଅଛି ଦାମ୍</p>
            </a>
          </div>
          <div class="carousel-item">
             <a title="#" href="">
            <p>ଏଥର ନୂଆ ନିୟମରେ ପୌର ନିର୍ବାଚନ: ପ୍ରାର୍ଥୀ ଦାଖଲ କରିବେ ସତ୍ୟପାଠ</p>
            </a>
          </div>
       </div>
       <a class="breaking-news-prev" href="#demo" data-slide="prev">
            <img src="https://odishatv.in/commondir/images/svg/left-arrow-box.svg" alt="Slide">
       </a>
       <a class="breaking-news-next" href="#demo" data-slide="next">
            <img src="https://odishatv.in/commondir/images/svg/right-arrow-box.svg" alt="Slide">
       </a>
    </div>
</div>
</div>
</section>
<!--===================== //TESTING BREAKING NEWS =====================-->

<!--======================== SPOTLIGHT ==========================-->
<section class="story-panel">
    <div class="container">
        <div class="row">
            
           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h3 class="heading-style-one">Odisha News</h3>
                <div class="story-panel-item-four">
                    <a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1635140826.JPG" alt="" title="Schools Reopen For Class 8 Students In Odisha" width="96" height="65"></a>
                    <ul class="story-panel-item-four-post">
                        <li><a href="https://odishatv.in/tag/reopening-of-schools"> Reopening Of Schools</a></li>
                        <li><a href="https://odishatv.in/news/education/schools-reopen-for-class-8-students-in-odisha-162463">ଫୁଲବାଣୀର ରାଞ୍ଚୋ : ଗାଁ ଲୋକଙ୍କ ସମସ୍ୟା ବୁଝି ଜୁଗାଡରେ ଗାଁକୁ ଆଣିଲେ ମୋବାଇଲ୍</a></li>
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
                        <li><a href="https://odishatv.in/news/crime/remand-ends-mamita-murder-accused-gobinda-sahu-sent-to-jail-162461">ରମାଦେବୀ ବିଶ୍ୱବିଦ୍ୟାଳୟର ୨ ଦୃଷ୍ଟିହୀନ ଛାତ୍ରୀଙ୍କ ମିଳୁନି ପତ୍ତା, ଖୋଜୁଛି ପୋଲିସ୍‌</a></li>
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
                        <li><a href="https://odishatv.in/news/politics/mamita-murder-case-bjp-to-observe-12-hour-bandh-in-sambalpur-162458">୨୧ ଦିନରେ ଋଷିଆ-ୟୁକ୍ରେନ୍‌ ମହାଯୁଦ୍ଧ : କିଭରେ ଗୁରୁବାର ପର୍ଯ୍ୟନ୍ତ ପୁଣି</a></li>
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
                        <li><a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454"> ସାବଧାନ ! ମାତିଛନ୍ତି ବାଇକ୍‌ ଚୋର, ଗୋଟିଏ ଗୋଇଠାରେ ଭାଙ୍ଗି ଦେଉଛନ୍ତି</a></li>
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
                        <li><a href="https://odishatv.in/news/miscellaneous/india-s-mighty-t-55-battle-tank-now-a-showpiece-in-odisha-college-162446">ଖାଲି ସେନା କି ସରକାରୀ ଭିତ୍ତିଭୂମି ନୁହେଁ : ୟୁକ୍ରେନର ଜନବସତିକୁ</a></li>
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
                        <li><a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442">ରାସ୍ତାକଡ଼ରୁ ମିଳିଲା ଯୁବତୀଙ୍କ ରକ୍ତ ଜୁଡ଼ୁବୁଡ଼ୁ ମୃତଦେହ</a></li>
                    </ul>
                    <ul class="story-panel-item-four-time">
                        <li>Odisha</li>
                        <li>15 hours ago </li>
                    </ul>
                </div>
                <div class="story-panel-item-four">
                    <a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" alt="" title="Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;" width="96" height="65"></a>
                    <ul class="story-panel-item-four-post">
                        <li><a href="https://odishatv.in/tag/odisha"> Odisha</a></li>
                        <li><a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442">ରାସ୍ତାକଡ଼ରୁ ମିଳିଲା ଯୁବତୀଙ୍କ ରକ୍ତ ଜୁଡ଼ୁବୁଡ଼ୁ ମୃତଦେହ</a></li>
                    </ul>
                    <ul class="story-panel-item-four-time">
                        <li>Odisha</li>
                        <li>15 hours ago </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="featured-video">
                    <div class="featured-image-container ">
                        <a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635132794.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635132794.jpg" alt="" title="BJP’s 12-Hour Bandh Affects Normal Life In Mayurbhanj" width="640" height="360"></a>
                        <div class="featured-video-content"><a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454"><h1>ଗୋଟିଏ ଦିନରେ ପୁରୀରେ ଦୁଇ ଦୁଇଟି ମର୍ଡର, ଲୋକଙ୍କ ମନରେ ଛନକା</h1></a> </div>
                    </div>
                    <p>ଗୋଟିଏ ଦିନରେ ପୁରୀରେ ୨ଟି ମର୍ଡର ହୋଇଛି। ଗୋଟିଏପଟେ ଶ୍ରୀମନ୍ଦିର ପରିଚାଳନା କମିଟିର ପୂର୍ବତନ ସଦସ୍ୟଙ୍କୁ ଗୁଳି କରି ହତ୍ୟା କରାଯାଇ ଥିବାବେଳେ ଅନ୍ୟପକ୍ଷେ ପୁଅର କଟୁରି ଚୋଟରେ ମା’ର ମୃତ୍ୟୁ ହୋଇଛି।<a href="https://odishatv.in/news/politics/bjp-s-12-hour-bandh-affects-normal-life-in-mayurbhanj-162454" class="featured-video-readmore">Read more <i class="fas fa-long-arrow-alt-right"></i></a></p>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12">
                        <div class="category-news-item category-news-item-sub">
                            <ul class="category-news-item-story">
                                <li><a href="https://odishatv.in/tag/odisha"> Odisha</a></li>
                                <li><a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442">ଜମି ବିବାଦକୁ ନେଇ ଖୁନୀ ସଂଘର୍ଷ : ୪ ଜଣ ମୃତ, ୬ ଜଣ ଆହତ</a></li>
                            </ul>
                            <a href="https://odishatv.in/news/crime/warning-shot-for-odisha-s-law-and-order-2-rape-murders-in-24-hours--162442"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1631351466.jpg" alt="" title="Warning Shot For Odisha's Law And Order: 2 'Rape &amp; Murders' In 24 Hours&nbsp;" width="224" height="126"></a>
                            <ul class="category-news-item-time">
                                <li>Odisha</li>
                                <li>15 hours ago </li>
                            </ul>
                            <p>ଜବରଦଖଲକାରୀଙ୍କୁ ବିରୋଧ କରିବାକୁ ଚାଲିଗଲା ଜୀବନ । ଗୋଟିଏ ପରିବାରର ୪ ଜଣ ଜୀବନ ହାରିଲେ ।</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12">
                        <div class="category-news-item">
                            <ul class="category-news-item-story">
                                <li><a href="https://odishatv.in/tag/bjd-politics-in-nabarangpur"> BJD Politics In Nabarangpur</a></li>
                                <li><a href="https://odishatv.in/news/exclusive/rahul-gandhi-s-confidante-pradeep-majhi-quits-cong-to-join-bjd-may-go-to-rajya-sabha-next-year-162440">ଇଲେକ୍ସନ ଡ୍ୟୁଟିରେ ଥାଇ ଗଡ଼ବଡ଼ କରୁଥିଲେ ନିର୍ବାଚନ ଅଧିକାରୀ ! ତା’ବି ପୁଣି</a></li>
                            </ul>
                            <ul class="category-news-item-time">
                                <li>Odisha</li>
                                <li>15 hours ago </li>
                            </ul>
                            <p>ଯାଜପୁର ଜିଲ୍ଲା ବରୀ ବ୍ଲକର ଅଧ୍ୟକ୍ଷ ନିର୍ବାଚନରେ ନିର୍ବାଚନ ଅଧିକାରୀ ଅନିୟମିତତା କରିଥିବା ଅଭିଯୋଗ ହୋଇଛି। ୬ ଜଣ ସମିତି ସଭ୍ୟଙ୍କ ଭୋଟ୍ ନିଜେ ନିର୍ବାଚନ...</p>
                        </div>
                        <div class="category-news-item">
                            <ul class="category-news-item-story">
                                <li><a href="https://odishatv.in/tag/rutaparna-panda"> Rutaparna Panda</a></li>
                                <li><a href="https://odishatv.in/news/sports/shuttler-rutaparna-panda-to-get-ekalabya-puraskar-for-2021-162418"> ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ? 2021</a></li>
                            </ul>
                            <ul class="category-news-item-time">
                                <li>Odisha</li>
                                <li>19 hours ago </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h3 class="heading-style-five">ABOUT <span>CITIZEN REPORTER</span></h3>
                <h4 class="ctizen-topic">ମାଟ୍ରିକ ପରୀକ୍ଷା ନେଇ ମାଧ୍ୟମିକ ଶିକ୍ଷା ବୋର୍ଡ ମଧ୍ୟ ବିସ୍ତୃତ ସୂଚନା ଦେଇଛି । ଏପ୍ରିଲ ୨୯ରୁ ଆରମ୍ଭ ହୋଇ ମେ’ ୭ରେ ସରିବ ମାଟ୍ରିକ ପରୀକ୍ଷା । ସକାଳ ୮ଟାରୁ ଆରମ୍ଭ ହେବ ପରୀକ୍ଷା । ମାଟ୍ରିକ ପରୀକ୍ଷା ନେଇ ମାଧ୍ୟମିକ ଶିକ୍ଷା ବୋର୍ଡ</h4>
                <a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-more-news-btn">More</a>
            <div class="otv-300-50-ad"><div id="div-gpt-ad-22423069847-0" style="width: 300px; height: 50px;" data-google-query-id="CNGP5cmXqfYCFcBEnQkdBSoPKA"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22423069847-0"); }); </script><div id="google_ads_iframe_/370089190/RHS_Home_Desktop_Odisha_Section_300x50_0__container__" style="border: 0pt none; width: 300px; height: 0px;"></div></div>
            </div>
            <div class="citizen-reporter-download-app0">
                <h5>Download the app</h5>
                <ul>
                    <li><a href=""><img src="https://odishatv.in//commondir/images/play-store-ft.jpg"></a></li>
                    <li><a href=""><img src="https://odishatv.in//commondir/images/play-store-ft.jpg"></a></li>
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
<!--======================= //SPOTLIGHT =========================-->

<section class="category-news-one">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<h3 class="heading-style-one">କରୋନା ଖବର</h3>
				<div class="category-custom-one-item">
				    <a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
    				<ul class="category-custom-one-post">
        				<li><a href="#">CHSE</a></li>
        				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
    				</ul>
				</div>
				<div class="category-custom-one-item">
				    <a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
    				<ul class="category-custom-one-post">
        				<li><a href="#">CHSE</a></li>
        				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
    				</ul>
				</div>

				<div class="category-custom-one-item">
				    <a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
    				<ul class="category-custom-one-post">
        				<li><a href="#">CHSE</a></li>
        				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
    				</ul>
				</div>
				<div class="category-custom-one-item">
				    <a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
    				<ul class="category-custom-one-post">
        				<li><a href="#">CHSE</a></li>
        				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
    				</ul>
				</div>
				<div class="category-custom-one-item">
				    <a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
    				<ul class="category-custom-one-post">
        				<li><a href="#">CHSE</a></li>
        				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
    				</ul>
				</div>
				<div class="category-custom-one-item">
				    <a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
    				<ul class="category-custom-one-post">
        				<li><a href="#">CHSE</a></li>
        				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
    				</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<h3 class="heading-style-one">ବିଶ୍ୱ ଖବର</h3>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<h3 class="heading-style-one">ବ୍ୟବସାୟ</h3>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
				<div class="category-custom-one-item">
				<a href=""><img src="images/pre-load-img.gif" data-src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
				<ul class="category-custom-one-post">
				<li><a href="#">CHSE</a></li>
				<li><a href="#">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
				</ul>
				</div>
			</div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">                    
                <div class="category-custom-four">
                <!-- VERTICAL MARQUE -->
                    <h3 class="heading-style-one-normal">News Updates from Odisha </h3>
                    <div class="spotlight-nod-container">
                        <div class="spotlight-nod-main spotlight-nod" style="margin-top: -121.6px; top: -99.739px;">
                            <div class="spotlight-nod-items">
                                <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865#breaking5">Body Of Youth Found In Parked Car In Dhenkanal; 2 Killed In Bhubaneswar Road Mishap</a></h4>
                                <ul>
                                    <li>Odisha</li>
                                    <li>13 hours ago </li>
                                </ul>
                                <p>Hindol Police rushed to the spot and broke the window glass panes of the vehicle and found the lifeless body......</p>
                            </div>
                            <div class="spotlight-nod-items">
                                <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865#breaking5">Body Of Youth Found In Parked Car In Dhenkanal; 2 Killed In Bhubaneswar Road Mishap</a></h4>
                                <ul>
                                    <li>Odisha</li>
                                    <li>13 hours ago </li>
                                </ul>
                                <p>Hindol Police rushed to the spot and broke the window glass panes of the vehicle and found the lifeless body......</p>
                            </div>
                            <div class="spotlight-nod-items">
                                <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865#breaking5">Body Of Youth Found In Parked Car In Dhenkanal; 2 Killed In Bhubaneswar Road Mishap</a></h4>
                                <ul>
                                    <li>Odisha</li>
                                    <li>13 hours ago </li>
                                </ul>
                                <p>Hindol Police rushed to the spot and broke the window glass panes of the vehicle and found the lifeless body......</p>
                            </div>
                            <div class="spotlight-nod-items">
                                <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865#breaking5">Body Of Youth Found In Parked Car In Dhenkanal; 2 Killed In Bhubaneswar Road Mishap</a></h4>
                                <ul>
                                    <li>Odisha</li>
                                    <li>13 hours ago </li>
                                </ul>
                                <p>Hindol Police rushed to the spot and broke the window glass panes of the vehicle and found the lifeless body......</p>
                            </div>
                            <div class="spotlight-nod-items">
                                <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865#breaking5">Body Of Youth Found In Parked Car In Dhenkanal; 2 Killed In Bhubaneswar Road Mishap</a></h4>
                                <ul>
                                    <li>Odisha</li>
                                    <li>13 hours ago </li>
                                </ul>
                                <p>Hindol Police rushed to the spot and broke the window glass panes of the vehicle and found the lifeless body......</p>
                            </div>
                            <div class="spotlight-nod-items">
                                <h4><!--<a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-heading">Bhubaneswar</a>--><a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865#breaking5">Body Of Youth Found In Parked Car In Dhenkanal; 2 Killed In Bhubaneswar Road Mishap</a></h4>
                                <ul>
                                    <li>Odisha</li>
                                    <li>13 hours ago </li>
                                </ul>
                                <p>Hindol Police rushed to the spot and broke the window glass panes of the vehicle and found the lifeless body......</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://odishatv.in/odisha-breaking-news-today/latest-updates/2022/03/03-171865" class="cat-more-news-btn">More</a>
                    <!-- //VERTICAL MARQUE -->
                </div>
                <div class="otv-300-50-ad"><div id="div-gpt-ad-22423069847-0" style="width: 300px; height: 50px;" data-google-query-id="CNGP5cmXqfYCFcBEnQkdBSoPKA"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22423069847-0"); }); </script><div id="google_ads_iframe_/370089190/RHS_Home_Desktop_Odisha_Section_300x50_0__container__" style="border: 0pt none; width: 300px; height: 0px;"></div></div>
                </div>
            </div>
</section>

<section class="most-popular">
    <div class="container">
        <h3 class="heading-style-two">OR Most popular</h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="most-popular-items">
                <h5><span>Published By : </span>@Shrilata_goom123</h5>
                <img src="images/medium-large-img.jpg" title="" width="400" height="225" alt="" title="">
                <ul class="most-popular-post">
                <li><a href=""> CHSE</a></li>
                <li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
                </ul>
                <ul class="most-popular-post-time"> 
                <li>Odisha</li>
                <li>4 days ago </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="most-popular-items">
                <h5><span>Published By : </span>@Shrilata_goom123</h5>
                <img src="images/medium-large-img.jpg" title="" width="400" height="225" alt="" title="">
                <ul class="most-popular-post">
                <li><a href=""> CHSE</a></li>
                <li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
                </ul>
                <ul class="most-popular-post-time"> 
                <li>Odisha</li>
                <li>4 days ago </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="most-popular-items">
                <h5><span>Published By : </span>@Shrilata_goom123</h5>
                <img src="images/medium-large-img.jpg" title="" width="400" height="225" alt="" title="">
                <ul class="most-popular-post">
                <li><a href=""> CHSE</a></li>
                <li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
                </ul>
                <ul class="most-popular-post-time"> 
                <li>Odisha</li>
                <li>4 days ago </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="most-popular-items">
                <h5><span>Published By : </span>@Shrilata_goom123</h5>
                <img src="images/medium-large-img.jpg" title="" width="400" height="225" alt="" title="">
                <ul class="most-popular-post">
                <li><a href=""> CHSE</a></li>
                <li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
                </ul>
                <ul class="most-popular-post-time"> 
                <li>Odisha</li>
                <li>4 days ago </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trending-news">
	<div class="container">
		<div class="trending-lists">
			<h3 class="heading-style-three">Trending news</h3>
			<div class="row">
				<div class="col-lg-2">
					<div class="or-trending-news">
					<div class="or-trending-news-img">
					<img src="images/medium-img.jpg" alt="" title="" width="228" height="188">
					<span>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। </span>
					</div>
					<ul class="category-custom-two-post">
					<li><a href=""> CHSE</a></li>
					<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ?</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="or-trending-news">
					<div class="or-trending-news-img">
					<img src="images/medium-img.jpg" alt="" title="" width="228" height="188">
					<span>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। </span>
					</div>
					<ul class="category-custom-two-post">
					<li><a href=""> CHSE</a></li>
					<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ?</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="or-trending-news">
					<div class="or-trending-news-img">
					<img src="images/medium-img.jpg" alt="" title="" width="228" height="188">
					<span>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। </span>
					</div>
					<ul class="category-custom-two-post">
					<li><a href=""> CHSE</a></li>
					<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ?</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="or-trending-news">
					<div class="or-trending-news-img">
					<img src="images/medium-img.jpg" alt="" title="" width="228" height="188">
					<span>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। </span>
					</div>
					<ul class="category-custom-two-post">
					<li><a href=""> CHSE</a></li>
					<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ?</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="or-trending-news">
					<div class="or-trending-news-img">
					<img src="images/medium-img.jpg" alt="" title="" width="228" height="188">
					<span>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। </span>
					</div>
					<ul class="category-custom-two-post">
					<li><a href=""> CHSE</a></li>
					<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ?</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="or-trending-news">
					<div class="or-trending-news-img">
					<img src="images/medium-img.jpg" alt="" title="" width="228" height="188">
					<span>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। </span>
					</div>
					<ul class="category-custom-two-post">
					<li><a href=""> CHSE</a></li>
					<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ?</a></li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="inpictures-sec">
	<div class="container">
		<ul class="inpictures-nav">
			<li>
				<h3 class="heading-style-three">ଫଟୋ</h3></li>
		</ul>
		<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="row">
							<div class="col-lg-12 col-md-12-col-sm-12 col-12">
								<div class="inpictures-item-one">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-5 col-12">
											<div class="inpictures-item-one-content">
												<ul>
													<li><a href="https://odishatv.in/tag/justice-for-mamita">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
													<li><a href="https://odishatv.in/photo-gallery/national/justice-for-mamita-meher-bjp-takes-out-hearse-parade-in-bhubaneswar-162403">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</a></li>
												</ul>
												<p>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</p>
												<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-7 col-12">
											<a href="https://odishatv.in/photo-gallery/national/justice-for-mamita-meher-bjp-takes-out-hearse-parade-in-bhubaneswar-162403"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635063635.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1635063635.jpg" alt="" title="Mamita Meher Murder case: BJP Hearse Parade" width="640" height="360"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="inpictures-item-two">
									<div class="inpictures-item-two-pic">
										<a href="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634625849.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634625849.jpg" alt="" title="Rail Roko protest" width="400" height="225"></a> <span><i class="far fa-images"></i> 10</span> </div>
									<ul>
										<li><a href="https://odishatv.in/tag/rail-roko">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
										<li><a href="https://odishatv.in/photo-gallery/national/farmers-nationwide-rail-roko-disrupts-train-services-162060">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</a></li>
									</ul>
									<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="inpictures-item-two">
									<div class="inpictures-item-two-pic">
										<a href="https://odishatv.in/photo-gallery/sports/t20-world-cup-mentor-ms-dhoni-joins-team-india-161997"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634544508.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634544508.jpg" alt="" title="MS Dhoni with Team India for T20 World Cup" width="400" height="225"></a> <span><i class="far fa-images"></i> 3</span> </div>
									<ul>
										<li><a href="https://odishatv.in/tag/t20-world-cup">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
										<li><a href="https://odishatv.in/photo-gallery/sports/t20-world-cup-mentor-ms-dhoni-joins-team-india-161997">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</a></li>
									</ul>
									<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="inpictures-item-two">
									<div class="inpictures-item-two-pic">
										<a href="https://odishatv.in/photo-gallery/festivals-events/pandal-hopping-cuttack-glitters-with-maa-durga-s-blessings-161753"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634201167.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1634201167.jpg" alt="" title="Durga Puja Balu Bazar Cuttack" width="400" height="225"></a> <span><i class="far fa-images"></i> 9</span> </div>
									<ul>
										<li><a href="https://odishatv.in/tag/durga-puja-2021">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
										<li><a href="https://odishatv.in/photo-gallery/festivals-events/pandal-hopping-cuttack-glitters-with-maa-durga-s-blessings-161753">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</a></li>
									</ul>
									<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 col-12">
						<div class="inpictures-item-two">
							<div class="inpictures-item-two-pic">
								<a href="https://odishatv.in/photo-gallery/festivals-events/durga-puja-2021-navratri-festivities-begin-161283"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633668015.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1633668015.jpg" alt="" title="Durga Puja in Kolkata" width="400" height="225"></a> <span><i class="far fa-images"></i> 4</span> </div>
							<ul>
								<li><a href="https://odishatv.in/tag/durga-puja-2021">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
								<li><a href="https://odishatv.in/photo-gallery/festivals-events/durga-puja-2021-navratri-festivities-begin-161283">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</a></li>
							</ul>
							<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
						</div>
						<div class="inpictures-item-two">
							<div class="inpictures-item-two-pic">
								<a href="https://odishatv.in/photo-gallery/weather/heavy-rain-leaves-several-areas-waterlogged-in-odisha-100-yo-british-era-building-collapsed-159627"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1631513773.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_2/IMAGE_1631513773.jpg" alt="" title="Heavy rains lashed Cuttack leading to water-logging in low-lying areas." width="400" height="225"></a> <span><i class="far fa-images"></i> 9</span> </div>
							<ul>
								<li><a href="https://odishatv.in/tag/weather-alert">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
								<li><a href="https://odishatv.in/photo-gallery/weather/heavy-rain-leaves-several-areas-waterlogged-in-odisha-100-yo-british-era-building-collapsed-159627">ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</a></li>
							</ul>
							<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="inpictures-item-four">
							<div class="inpictures-item-four-pic">
								<a href="https://odishatv.in/photo-gallery/sports/gold-silver-bronze-india-para-badminton-players-create-magic-at-tokyo-paralympics-2020-159082"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1630845146.jpg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_1/IMAGE_1630845146.jpg" alt="" title="Pramod Bhagat" width="640" height="360"></a> <span><i class="far fa-images"></i> 6</span> </div>
							<ul>
								<li><a href="https://odishatv.in/tag/tokyo-2020">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ</a></li>
								<li><a href="https://odishatv.in/photo-gallery/sports/gold-silver-bronze-india-para-badminton-players-create-magic-at-tokyo-paralympics-2020-159082">Indian Shuttlers Create Magic At Tokyo Paralympics 2020</a></li>
							</ul>
							<p>ଏଥିରେ ଦିଆଯାଇଥିବା ବ୍ୟାକ୍‌ଗ୍ରାଉଣ୍ଡ୍ ମ୍ୟୁଜିକ୍ ଯିଏ ଶୁଣିବ ସିଏ ପ୍ରଶଂସା କରିବ। ଏହି ଫିଲ୍ମର ଟିଜରରେ ସଞ୍ଜୟ ଦତ୍ତଙ୍କର ମଧ୍ୟ ଭୟଙ୍କର ରୂପ ଦେଖିବାକୁ ମିଳେ। ସଞ୍ଜୟ ଏଥିରେ ମହମ୍ମଦ ଘୋରୀ ଭୂମିକାରେ ନଜର ଆସୁଛନ୍ତି। ସେ ହିଁ ହେଉଛନ୍ତି ଏହି ଫିଲ୍ମର ମୁଖ୍ୟ ଖଳନାୟକ।</p>
							<img class="inpic-camera-icon" src="images/svg/cam-styleone.svg" alt="" title="" width="25" height="25">
						</div>
					</div>
			</div>
		 <a href="https://odishatv.in/photo-gallery" class="cat-more-news-btn">More</a> </div>
</section>

<section class="video-galley">
		<div class="container">
			<div class="row">
                <h3 class="heading-style-two">Videoes</h3>
				<div class="col-lg-3">
					<div class="video-gallery-item">
						<div class="video-gallery-item-img">
							<img src="images/medium-img.jpg">
							<span id="play-video" class="video-time">3:50</span>
						</div>
						<ul class="category-custom-eight-post">
                          <li><a href="https://odishatv.in/tag/dilip-joshi"> Dilip Joshi</a></li>
                          <li><a href="https://odishatv.in/news/entertainment/taarak-mehta-ka-ooltah-chashmah-s-jethalal-welcomes-something-new-to-family--163588"> ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
	                    </ul>
					</div>
					<div class="video-gallery-item">
						<div class="video-gallery-item-img">
							<img src="images/medium-img.jpg">
							<span id="play-video" class="video-time">3:50</span>
						</div>
						<ul class="category-custom-eight-post">
                          <li><a href="https://odishatv.in/tag/dilip-joshi"> Dilip Joshi</a></li>
                          <li><a href="https://odishatv.in/news/entertainment/taarak-mehta-ka-ooltah-chashmah-s-jethalal-welcomes-something-new-to-family--163588"> ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
	                    </ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="video-gallery-item-middle">
						<div class="video-gallery-item-img-middle">
							<img src="images/large-article-img.jpg">
							<span id="play-video" class="video-time">3:50</span>
						</div>
						<ul class="category-custom-eight-post-middle">
							<li><a href="https://odishatv.in/tag/dilip-joshi"> Dilip Joshi</a></li>
							<li><a href="https://odishatv.in/news/entertainment/taarak-mehta-ka-ooltah-chashmah-s-jethalal-welcomes-something-new-to-family--163588"> ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
						</ul>
						<p>ପରୀକ୍ଷା ସରିବାର ମାସେ ଧରିବାକୁ ବସିଲାଣି ରେଜଲ୍ଟ ବାହାରିବାର ସୋର ଶବ୍ଦ ନାହିଁ। ତାଙ୍କରି ସାଙ୍ଗର ପିଲା ଆଡମିଶନ୍ କରି କ୍ଲାସ୍ କଲେଣି। ହେଲେ ଏମାନେ ପରୀକ୍ଷା ସରିବାର ମାସେ ଧରିବାକୁ ବସିଲାଣି ରେଜଲ୍ଟ ବାହାରିବାର ସୋର ଶବ୍ଦ ନାହିଁ। ତାଙ୍କରି ସାଙ୍ଗର ପିଲା ଆଡମିଶନ୍ କରି କ୍ଲାସ୍ କଲେଣି। ହେଲେ ଏମାନେ ପରୀକ୍ଷା ସରିବାର ମାସେ ଧରିବାକୁ ବସିଲାଣି ରେଜଲ୍ଟ ବାହାରିବାର ସୋର ଶବ୍ଦ ନାହିଁ। ତାଙ୍କରି ସାଙ୍ଗର ପିଲା ଆଡମିଶନ୍ କରି କ୍ଲାସ୍ କଲେଣି। ହେଲେ ଏମାନେ</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="video-gallery-item">
						<div class="video-gallery-item-img">
							<img src="images/medium-img.jpg">
							<span id="play-video" class="video-time">3:50</span>
						</div>
						<ul class="category-custom-eight-post">
                          <li><a href="https://odishatv.in/tag/dilip-joshi"> Dilip Joshi</a></li>
                          <li><a href="https://odishatv.in/news/entertainment/taarak-mehta-ka-ooltah-chashmah-s-jethalal-welcomes-something-new-to-family--163588"> ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
	                    </ul>
					</div>
					<div class="video-gallery-item">
						<div class="video-gallery-item-img">
							<img src="images/medium-img.jpg">
							<span id="play-video" class="video-time">3:50</span>
						</div>
						<ul class="category-custom-eight-post">
                          <li><a href="https://odishatv.in/tag/dilip-joshi"> Dilip Joshi</a></li>
                          <li><a href="https://odishatv.in/news/entertainment/taarak-mehta-ka-ooltah-chashmah-s-jethalal-welcomes-something-new-to-family--163588"> ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
	                    </ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="bd-cat-sec">
	<div class="container">
		<h3 class="heading-style-three">National news</h3>
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="category-custom-five-item">
                          <a href="#"><img src="images/large-article-img.jpg" alt="" title="" width="640" height="360" pinger-seen="true"></a>
                          <ul class="category-custom-five-post">
                            <li><a href="#"> Ranbir Alia Wedding</a></li>
                             <li><a href="#">ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
                          </ul>
                          <ul class="category-custom-five-time">
                             <li>India</li>
                            <li>2 hours ago </li>
                          </ul>
                        </div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="category-custom-four">
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> Bollywood</a></li>
							<li><a href="#">ରିଲିଜ ହେଲା ଜବରଦସ୍ତ ଆକ୍ସନ ଫିଲ୍ମ୍ ସୂର୍ଯ୍ୟବଂଶୀ</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>4 days ago </li>
						</ul>
					</div>
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> MS Dhoni</a></li>
							<li><a href="#">କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି !</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>5 days ago </li>
						</ul>
					</div>
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> MS Dhoni</a></li>
							<li><a href="#">କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି !</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>5 days ago </li>
						</ul>
					</div>
				</div>
				<div class="otv-300-250-ad"> &nbsp; </div>
			</div>
		</div>
	</div>
</section>

<section class="bd-cat-sec">
	<div class="container">
		<h3 class="heading-style-three">Job & Education</h3>
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="category-custom-five-item">
                          <a href="#"><img src="images/large-article-img.jpg" alt="" title="" width="640" height="360" pinger-seen="true"></a>
                          <ul class="category-custom-five-post">
                            <li><a href="#"> Ranbir Alia Wedding</a></li>
                             <li><a href="#">ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
                          </ul>
                          <ul class="category-custom-five-time">
                             <li>India</li>
                            <li>2 hours ago </li>
                          </ul>
                        </div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="category-custom-four">
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> Bollywood</a></li>
							<li><a href="#">ରିଲିଜ ହେଲା ଜବରଦସ୍ତ ଆକ୍ସନ ଫିଲ୍ମ୍ ସୂର୍ଯ୍ୟବଂଶୀ</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>4 days ago </li>
						</ul>
					</div>
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> MS Dhoni</a></li>
							<li><a href="#">କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି !</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>5 days ago </li>
						</ul>
					</div>
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> MS Dhoni</a></li>
							<li><a href="#">କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି !</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>5 days ago </li>
						</ul>
					</div>
				</div>
				<div class="otv-300-250-ad"> &nbsp; </div>
			</div>
		</div>
	</div>
</section>

<section class="bd-cat-sec">
	<div class="container">
		<h3 class="heading-style-three">Odisha Political</h3>
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="category-custom-five-item">
                          <a href="#"><img src="images/large-article-img.jpg" alt="" title="" width="640" height="360" pinger-seen="true"></a>
                          <ul class="category-custom-five-post">
                            <li><a href="#"> Ranbir Alia Wedding</a></li>
                             <li><a href="#">ସ୍ଥଗିତ ହେଲା ଆଲିଆ-ରଣବୀରଙ୍କ ବାହାଘର; ଜାଣନ୍ତୁ କେବେ ହେବ ବିବାହ...</a></li>
                          </ul>
                          <ul class="category-custom-five-time">
                             <li>India</li>
                            <li>2 hours ago </li>
                          </ul>
                        </div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
						<div class="category-custom-six-item">
							<a href=""><img src="images/medium-img.jpg" alt="" title=" " width="224" height="126" pinger-seen="true"></a>
							<ul class="category-custom-six-post">
								<li><a href=""> CHSE</a></li>
								<li><a href="">ପ୍ଲସ ଟୁ ଅଫଲାଇନ୍ ଫଳ ପ୍ରକାଶନ ଭୁଲିଗଲା କି ସିଏଚ୍ଏସ୍ଇ?</a></li>
							</ul>
							<ul class="category-custom-six-time"> 
								<li>Odisha</li>
								<li>4 days ago </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
							<div class="col-lg-6">
								<div class="category-custom-three-item">
                                 <a href="#"><img src="images/medium-large-img.jpg" alt="" title="" width="400" height="225" pinger-seen="true"></a>
	                                  <ul class="category-custom-three-post">
		                                  <li><a href="#"> Bollywood</a></li>
		                                  <li><a href="#">‘ସୂର୍ଯ୍ୟବଂଶୀ’ ରିଲିଜ୍ ପରେ ବଢିଲା ରୋହିତଙ୍କ ଚିନ୍ତା</a></li>
	                                  </ul>
	                                  <ul class="category-custom-three-time">
		                                 <li>India</li>
		                                <li>4 days ago </li>
	                                  </ul>
                                  <p>ସିନେମା ଶିଳ୍ପ ଏକ ଲାଭଜନକ ବ୍ୟବସାୟ। ପ୍ରତ୍ୟେକ ନିର୍ମାତା ଏକ ବଡ ଲାଭ ଲକ୍ଷରେ କୋଟି କୋଟି ଟଙ୍କା ଖର୍ଚ୍ଚ କରି ସିନେମା ତିଆରି କରନ୍ତି ଦର୍ଶକଙ୍କର...</p>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="category-custom-four">
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> Bollywood</a></li>
							<li><a href="#">ରିଲିଜ ହେଲା ଜବରଦସ୍ତ ଆକ୍ସନ ଫିଲ୍ମ୍ ସୂର୍ଯ୍ୟବଂଶୀ</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>4 days ago </li>
						</ul>
					</div>
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> MS Dhoni</a></li>
							<li><a href="#">କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି !</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>5 days ago </li>
						</ul>
					</div>
					<div class="category-custom-four-item">
						<ul class="category-custom-four-post">
							<li><a href="#"> MS Dhoni</a></li>
							<li><a href="#">କ୍ରିକେଟ ପରେ ଏବେ ଫିଲ୍ମ ଦୁନିଆରେ ପାଦ ଦେବେ ଧୋନି !</a></li>
						</ul>
						<ul class="category-custom-four-time">
							<li>India</li>
							<li>5 days ago </li>
						</ul>
					</div>
				</div>
				<div class="otv-300-250-ad"> &nbsp; </div>
			</div>
		</div>
	</div>
</section>

<?php include_once 'includes/footer.php'; ?>