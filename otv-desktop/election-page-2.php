<?php include 'includes/header.php';?>
<style type="text/css">
   h3.heading-style-one {
   margin: 0px 0px 15px 0px;
   padding: 0px 0px 0px 45px;
   position: relative;
   text-transform: uppercase;
   font-weight: 700;
   font-size: 18px;
   color: #333;
   line-height: 17px;
   font-family: 'Faustina', serif;
   }   
   .election-info h1 {
   margin: 0 0 15px 0;
   padding: 20px 0px 20px 94px;
   text-transform: capitalize;
   font-size: 51px;
   font-weight: 900;
   line-height: 41px;
   font-family: Faustina, serif;
   border-bottom: 1px solid hsl(0deg 0% 77%);
   border-top: 1px solid hsl(0deg 0% 77%);
   }
   .election-info img {
   position: absolute;
   top: 14px;
   left: 0px;
   }
   .election-info-intro {
   colorelection: ;
   font-weight: 400;
   font-size: 18px;
   line-height: 24px;
   font-family: Faustina, serif;
   margin-bottom: 20px;
   }
   .election-info {
   position: relative;
   border-bottom: dashed 1px #d4d4d4;
   margin-bottom: 20px;
   padding-bottom: 10px;
   }
   .election-box-head {
   background-color: hsl(213deg 10% 21%);
   display: inline-block;
   width: 100%;
   padding: 13px 20px;
   margin: 0;
   border-top: 1px solid hsl(25deg 90% 52%);
   }
   .election-box-head p {
   margin: 0;
   padding: 0;
   color: #fff;
   text-transform: uppercase;
   float: left;
   font-size: 13px;
   font-weight: 500;
   }
   span.election-total-zone {
   color: #fff !important;
   font-size: 21px;
   }
   .election-box-head p span {
   color: hsl(26deg 100% 55%);
   font-weight: 600;
   }
   .election-box-head h4 {
   float: right;
   margin: 0;
   padding: 0;
   color: #fff;
   font-size: 13px;
   font-weight: 600;
   line-height: 18px;
   text-transform: uppercase;
   }
   ul.election-party-item {
   background-color: hsl(201deg 22% 15%);
   margin: 0;
   padding: 0;
   margin-top: -6px;
   padding: 0px;
   border-bottom: 6px solid hsl(25deg 90% 52%);
   }
   ul.election-party-item li {
   display: inline-block;
   padding: 27px 51px;
   position: relative;
   width: 24.5%;
   }
   ul.election-party-item li:before {
   content: "";
   display: block;
   width: 1px;
   height: 53%;
   background-color: #707070;
   position: absolute;
   right: 0px;
   bottom: 43px;
   }
   ul.election-party-item li:last-child:before {
   display: none;
   }
   ul.election-party-item li img {
   width: 68px;
   height: 68px;
   border-radius: 50%;
   background-size: cover;
   margin: 0px 29px;
   }
   ul.election-party-item li h3 {
   margin: 10px 0px 22px 0px;
   padding: 0;
   color: #fff;
   text-align: center;
   font-weight: 700;
   font-size: 22px;
   line-height: 18px;
   }
   ul.election-party-item li p {
   color: #fff;
   text-align: center;
   margin: 0;
   padding: 0;
   font-size: 36px;
   line-height: 37px;
   font-weight: bold;
   letter-spacing: 3px;
   font-family: 'Faustina';
   }
   ul.election-party-item li p span {
   font-size: 23px;
   color: hsl(53deg 58% 70%);
   font-weight: bold;
   }
   table.election-board {
   border-collapse: collapse;
   border-spacing: 0;
   margin: 0;
   padding: 0;
   width: 100%;
   }
.election-board tr td {
   width: 15%;
   text-align: left;
   padding: 6px 11px 6px 11px;
   float: left;
   border: 1px solid #cbcbcba6;
   border-top: none;
   border-left: none;
   margin: 0;
   position: relative;
   }
    td.election-bord-zone-candidate {
        width: calc(40% - 4px) !important;
    }
   td.election-board-heading.Candidate {
    width: calc(40% - 4px) !important;
}  
   table.election-table-board tr td:nth-child(2) {
    border-left: 1px solid #cbcbcba6;
    }
   td.election-board-dist-name h3 {
   margin: 0px;
   padding: 10px;
   font-size: 15px;
   font-weight: 700;
   line-height: 22px;
   float: left;
   font-family: 'Faustina';
   text-transform: uppercase;
   color: #fff;
   }
   td.election-board-dist-name h4 {
   float: right;
   margin: 0;
   padding: 0;
   }
   td.election-board-dist-name h4 {
   float: right;
   margin: 0;
   padding: 0;
   font-size: 12px;
   text-align: center;
   line-height: 21px;
   font-family: 'Faustina';
   color: #fff;
   }
   td.election-board-dist-name h4 span {
   display: block;
   text-align: center;
   font-size: 27px;
   font-weight: 900;
   font-family: 'Faustina';
   color: #fff;
   }
   span.election-party-count-image {
   text-align: center;
   float: left;
   color: #bbb;
   font-size: 14px;
   margin: 0;
   padding: 0;
   }
   td.election-party-count span img {
   width: 30px;
   height: 30px;
   display: block;
   }
   h5.vote-couting {
   margin: 0;
   padding: 3px 49px;
   text-align: center;
   font-weight: 800;
   font-size: 23px;
   position: absolute;
   left: 0;
   right: 0;
   }
   h5.vote-couting span {
   font-size: 15px;
   color: hsl(213deg 7% 69%);
   }
   img.election-trend-image {
   float: right;
   margin-top: 10px;
   }
   .election-page-main-title {
   position: relative;
   display: inline-block;
   width: 100%;
   }
   .election-page-main-title .election-listing-heading {
   float: left;
   width: fit-content;
   border-bottom: none;
   }
   .election-select-city select {
   background-color: #000;
   color: #fff;
   padding: 7px;
   border-radius: 5px;
   outline: 0;
   border-top: 2px solid #f27022;
   }
   .election-select-city {
   float: right;
   margin-top: 15px;
   }
   .election-listing-heading {
   font-size: 20px;
   border-bottom: 1px #9e9b9b dashed;
   padding-bottom: 6px;
   font-weight: 900;
   font-family: inherit;
   }
   img.election-dist-trend-image {
   float: right;
   margin-top: 10px !important;
   position: absolute;
   width: 24px !important;
   height: 24px !important;
   bottom: 68px;
   right: 0;
   }
   h4.dist-vote-total-count {
   margin: 5px;
   padding: 0;
   text-align: center;
   color: #fff;
   }
   tr.table-heading {
   background-color: #000;
   }
   td.election-board-heading h3 {
   margin: 12px 0px;
   padding: 0;
   text-align: center;
   color: #cfcfcf;
   font-size: 15px;
   font-weight: 300;
   }
   td.election-board-heading h3 span {
   display: block;
   font-size: 22px;
   font-weight: 700;
   }
   h3.election-total {
   margin: 2px !important;
   }
   td.election-board-zone-number img {
   float: right;
   margin-top: 15px;
   }
   td.election-board-zone-number h4 {
   text-align: center;
   position: absolute;
   left: 0;
   right: 0;
   font-size: 16px;
   font-weight: 700;
   }
   td.election-board-zone-number span {
   float: left;
   margin: 10px 0px;
   padding: 0;
   text-align: center;
   font-size: 14px;
   color: #acacae;
   }
   td.election-bord-zone-candidate h5 {
    position: absolute;
    left: 53px;
    right: 0;
    margin: 0px;
    padding: 0;
    font-size: 15px;
    font-weight: 600;
    line-height: 13px;
    float: right;
    top: 15px;
}
   td.election-bord-zone-candidate img {
   float: left;
   width: 30px;
   height: 33px;
   margin: 0px;
   }
   td.election-board-trending img {
    text-align: center;
    margin: 0 auto;
    display: block;
    padding: 6px 0px;
}
  td.election-board-percent h5 {
    margin: 6px 0px;
    padding: 0;
    text-align: center;
    font-size: 17px;
    color: #979797;
}
   td.party-symbol img {
   width: 35px;
   height: 35px;
   position: absolute;
   left: 12px;
   top: -3px;
   margin: 10px 0px;
   }
   td.party-symbol span {
   padding-left: 43px;
   margin: 6px 0px;
   display: block;
   font-size: 15px;
   color: #000;
   font-weight: 700;
   }
   
   table.election-table-board tr {
    background-color: #fff;
}
table.election-table-board tr:first-child {
    background-color: #ebe9e9;
}
table.election-table-board tr td:first-child {
    border: none;
}
table.election-table-board tr td {
    height: 50px;
}
table.election-table-board {
    width: 100%;
}
table.election-table-board tr td:last-child {
    border-right: none;
}
tr.table-heading td {
    border: none;
    border-left: 1px solid #cbcbcba6;
}
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad">
</div>
<section class="main-article">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <div class="election-page-main-title">
               <h1 class="election-listing-heading">ANGUL DISTRICT PANCHYAT ELECTION</h1>
               <div class="election-select-city">
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
            <div class="election-box-head">
               <p>Total Sheet  <span class="election-total-zone">235</span> Election updated : <span>08:00 AM FEBRUARY 09, 2022</span></p>
            </div>
            <ul class="election-party-item">
               <li>
                  <img src="images/svg/bjd.svg">
                  <h3>BJD</h3>
                  <p>25/<span>80</span><img src="images/svg/orange-icon.svg" class="election-dist-trend-image"></p>
                  <h4 class="dist-vote-total-count">[+75,352]</h4>
               </li>
               <li>
                  <img src="images/svg/bjp.svg">
                  <h3>BJP</h3>
                  <p>25/<span>80</span><img src="images/svg/green-up-icon.svg" class="election-dist-trend-image"></p>
                  <h4 class="dist-vote-total-count">[+75,352]</h4>
               </li>
               <li>
                  <img src="images/svg/others.svg">
                  <h3>OTHERS</h3>
                  <p>25/<span>80</span><img src="images/svg/red-down-icon.svg" class="election-dist-trend-image"></p>
                  <h4 class="dist-vote-total-count">[+75,352]</h4>
               </li>
               <li>
                  <img src="images/svg/INC.svg">
                  <h3>INC</h3>
                  <p>25/<span>80</span><img src="images/svg/red-down-icon.svg" class="election-dist-trend-image"></p>
                  <h4 class="dist-vote-total-count">[+75,352]</h4>
               </li>
            </ul>
            <table class="election-board">
               <tr class="table-heading">
                  <td class="election-board-dist-name" >
                     <h3>ANGUL</h3>
                     <h4>TOTAL<span>235</span></h4>
                  </td>
                  <td class="election-board-heading Candidate">
                     <h3>CANDIDATE NAME</h3>
                  </td>
                  <td class="election-board-heading">
                     <h3>PARTY SYMBOL</h3>
                  </td>
                  <td class="election-board-heading">
                     <h3>TRENDING</h3>
                  </td>
                  <td class="election-board-heading">
                     <h3 class="election-total">TOTAL<span>%</span></h3>
                  </td>
               </tr>

<!--=================== TESTING =====================-->
<tr>
    <td style="width: 100%; border: none; padding: 0px;">
        <table class="election-table-board">
            <tr class="active bdzone-toggle">
              <td rowspan="2" class="election-board-zone-number">
                 <span>1</span>
                 <h4>ZONE 1</h4>
                 <img src="images/svg/arrow-down.svg">
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjd.svg"><span>BJD</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/green-up-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: block;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: block;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="width: 100%; border: none; padding: 0px;">
        <table class="election-table-board">
            <tr class="active bdzone-toggle">
              <td rowspan="2" class="election-board-zone-number">
                 <span>2</span>
                 <h4>ZONE 2</h4>
                 <img src="images/svg/arrow-down.svg">
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjd.svg"><span>BJD</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/green-up-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="width: 100%; border: none; padding: 0px;">
        <table class="election-table-board">
            <tr class="active bdzone-toggle">
              <td rowspan="2" class="election-board-zone-number">
                 <span>2</span>
                 <h4>ZONE 2</h4>
                 <img src="images/svg/arrow-down.svg">
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjd.svg"><span>BJD</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/green-up-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="width: 100%; border: none; padding: 0px;">
        <table class="election-table-board">
            <tr class="active bdzone-toggle">
              <td rowspan="2" class="election-board-zone-number">
                 <span>2</span>
                 <h4>ZONE 2</h4>
                 <img src="images/svg/arrow-down.svg">
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjd.svg"><span>BJD</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/green-up-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="width: 100%; border: none; padding: 0px;">
        <table class="election-table-board">
            <tr class="active bdzone-toggle">
              <td rowspan="2" class="election-board-zone-number">
                 <span>2</span>
                 <h4>ZONE 2</h4>
                 <img src="images/svg/arrow-down.svg">
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjd.svg"><span>BJD</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/green-up-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="width: 100%; border: none; padding: 0px;">
        <table class="election-table-board">
            <tr class="active bdzone-toggle">
              <td rowspan="2" class="election-board-zone-number">
                 <span>2</span>
                 <h4>ZONE 2</h4>
                 <img src="images/svg/arrow-down.svg">
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjd.svg"><span>BJD</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/green-up-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
            <tr class="bdzone-toggle-child" style="display: none;">
              <td class="election-board-zone-number">
                 &nbsp;
              </td>
              <td class="election-bord-zone-candidate">
                 <img src="images/svg/male.svg">
                 <h5>Gopal Prasad Pradhan</h5>
              </td>
              <td class="party-symbol">
                 <a href=""><img src="images/svg/bjp.svg"><span>BJP</span>
                 </a>
              </td>
              <td class="election-board-trending">
                 <img src="images/svg/red-down-icon.svg">
              </td>
              <td class="election-board-percent">
                 <h5>90%</h5>
              </td>
            </tr>
        </table>
    </td>
</tr>
<!--================== //TESTING ====================-->
            </table>
         </div>
         <?php include 'includes/sidebar.php';?>
      </div>
   </div>
</section>
<?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>


<script>
    $(".bdzone-toggle").click(function(){
      $(".bdzone-toggle-child").hide();
      $(this).siblings().toggle();
    });
</script>