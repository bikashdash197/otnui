/********************** HEADER **********************/
body {
	margin: 0px;
	padding: 0px;
	background-color: #000;
}
a, a:hover, a:active, a:focus {
    text-decoration: none;
}
header {
    float: left;
    width: 100%;
    background-color: #333;
    padding: 7px 0px;
    position: relative;
}
.spriteicon {
    background: url(images/sprite.png) no-repeat;
}
button.headernav.spriteicon {
    width: 21px;
    height: 20px;
    background-position: 0px -12px;
    border: none;
    margin: 12px 0px 0px 0px;
    padding: 0px;
    float: left;
}
button.searchbutton.spriteicon {
    width: 23px;
    height: 24px;
    background-position: -58px -9px;
    border: none;
    margin: 9px 0px 0px 0px;
    padding: 0px;
    float: right;
}
img.mainlogo {
    margin-left: 15px;
}
a.subscribe {
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 12px;
    margin: 13px 15px 0px 0px;
    display: inline-block;
    position: relative;
}
a.subscribe:before {
    position: absolute;
    left: -25px;
    top: -3px;
    width: 20px;
    height: 20px;
    content: "";
    background: url(images/sprite.png) no-repeat;
    background-position: -20px -12px;
}
/* RESPONSIVE MENU */
.mobilemenuboxinside {
    padding: 10px;
    width: calc(100% - 90px);
    background-color: #000;
}
.mobile-menu-box {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow-x: hidden;
    overflow-y: auto;
    z-index: 2;
    width: 100%;
    background-color: #000000d4;
    height: 100%;
    padding: 0px;
}
ul.custom-mobile-menu {
    margin: 0px;
    padding: 0px;
}
ul.custom-mobile-menu li {
    list-style-type: none;
    display: block;
    line-height: 50px;
    border-bottom: solid 1px #616362;
    position: relative;
    cursor: pointer;
}
ul.custom-mobile-menu li a {
    text-decoration: none;
    display: block;
    color: #fff;
    font-size: 17px;
}
ul.custom-mobile-menu li a span {
    display: block;
    color: #898989;
    margin: -28px 0px 0px 0px;
    padding: 0px;
    font-size: 14px;
}
ul.mobile-custom-dropdown li {
    position: relative;
}
ul.mobile-custom-dropdown li:before {
    content: "";
    position: absolute;
    left: -14px;
    top: 21px;
    width: 6px;
    height: 6px;
    background-color: #616362;
    border-radius: 50%;
}
ul.mobile-custom-dropdown li:last-child {
    border-bottom: none;
}
li.mobile-dropdown-nav:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 6px solid #616362;
    position: absolute;
    right: 0;
    top: 24px;
}
ul.mobile-custom-dropdown {
    display: none;
    margin: 0px 0px 0px 30px;
    padding: 0px;
}
.mobile-menu-box::-webkit-scrollbar {
  width: 5px;
}
.mobile-menu-box::-webkit-scrollbar-thumb {
  background-color: #333;
  outline: 1px solid #333;
}
.kidssafe {
    height: 65px;
    width: 100%;
    background-color: #2b1919;
}
span.kidssafe-logo.spriteicon {
    width: 89px;
    height: 18px;
    background-position: -178px -116px;
    border: none;
    margin: 24px 0px 0px 10px;
    padding: 0px;
    float: left;
}
span.kidssafe-on.spriteicon {
    width: 40px;
    height: 23px;
    background-position: -277px -114px;
    border: none;
    margin: 23px 10px 0px 0px;
    padding: 0px;
    float: right;
}
span.kidssafe-off.spriteicon {
    width: 40px;
    height: 23px;
    background-position: -277px -143px;
    border: none;
    margin: 23px 10px 0px 0px;
    padding: 0px;
    float: right;
}
span.kidssafebtn {
    cursor: pointer;
}
/* //RESPONSIVE MENU */
/* SEARCH */

/* //SEARCH */
/********************* //HEADER *********************/
/********************** FOOTER **********************/
footer {
    float: left;
    width: 100%;
    padding: 10px 0px 3px 0px;
    position: fixed;
    bottom: 0;
}
ul.footer-icon {
    margin: 0px;
    padding: 0px;
    text-align: center;
}
ul.footer-icon li {
    display: inline-block;
    width: 18%;
    text-align: center;
}
ul.footer-icon li a {
    text-decoration: none;
    display: block;
    text-align: center;
    color: #fff;
    text-transform: capitalize;
    font-size: 14px;
}
ul.footer-icon li a span {
    display: block;
    text-align: center;
    margin: 0 auto 2px auto;
}
span.fthome.spriteicon {
    width: 23px;
    height: 24px;
    background-position: -135px -87px;
}
span.ftnews.spriteicon {
    width: 23px;
    height: 24px;
    background-position: -162px -87px;
}
span.ftlivetv.spriteicon {
    width: 23px;
    height: 24px;
    background-position: -188px -87px;
} 
span.ftmusic.spriteicon {
    width: 23px;
    height: 24px;
    background-position: -218px -87px;
} 
span.ftcontact.spriteicon {
    width: 23px;
    height: 24px;
    background-position: -245px -87px;
}
span.fthome.spriteicon.active {
    width: 23px;
    height: 24px;
    background-position: 0px -87px;
}
span.spriteicon.ftnews.active {
  width: 23px;
  height: 24px;
  background-position: -29px -87px;
}
span.spriteicon.ftlivetv.active {
  width: 23px;
  height: 24px;
  background-position: -52px -87px;
}
span.spriteicon.ftmusic.active {
  width: 23px;
  height: 24px;
  background-position: -82px -87px;
}
span.spriteicon.ftcontact.active {
  width: 23px;
  height: 24px;
  background-position: -108px -87px;
}
/********************* //FOOTER *********************/