<?php include 'includes/header.php';?>
<style type="text/css">
    .municipal-election-tabbing {
    float: left;
    width: 100%;
    margin: 10px 0px 30px 0px;
    }
   h1.heading-municipal-election {
   margin: 0;
   padding: 0;
   text-align: center;
   color: #c50000;
   font-weight: 700;
   line-height: 35px;
   font-size: 36px;
   margin-bottom: 12px;
   }
   p.summery-municipal-election {
   padding: 0;
   margin: 0;
   font-size: 15px;
   font-weight: 500;
   line-height: 22px;
   text-align: center;
   margin-bottom: 20px;
   }
   table.muncipal-election-table {
   border-collapse: collapse;
   border-spacing: 0;
   margin: 0;
   padding: 0;
   width: 100%;
   }
   .muncipal-election-table tr td {
   width: 20%;
   text-align: left;
   padding: 6px 11px 6px 11px;
   float: left;
   border: none;
   border-top: none;
   border-left: none;
   margin: 0;
   position: relative;
   height: 50%;
   }
   .muncipal-election-table tr td:nth-child(2) {
   width: 40%;
   }
   td.muncipal-party-symbol img {
   width: 35px;
   height: 35px;
   position: absolute;
   left: 12px;
   top: -3px;
   margin: 10px 0px;
   }
   td.muncipal-party-symbol span {
   padding-left: 48px;
   margin: 6px 0px;
   display: block;
   font-size: 15px;
   color: #000;
   font-weight: 700;
   }
   td.muncipal-candidate-candidate img {
   float: left;
   width: 34px;
   height: 33px;
   margin: 0px;
   }
   td.muncipal-candidate-candidate h5 {
   position: absolute;
   left: 55px;
   right: 0;
   margin: 0px;
   padding: 0;
   font-size: 17px;
   font-weight: 600;
   line-height: 13px;
   float: right;
   top: 15px;
   color: #181818;
   }
   td.muncipal-total-vote h5 {
   margin: 6px 0px;
   padding: 0;
   text-align: center;
   font-size: 22px;
   color: #979797;
   }
   td.muncipal-total-vote h5 span {
   font-size: 13px;
   margin-left: 4px;
   color: #737373;
   }
   td.muncipal-result h5 {
   margin: 6px 0px;
   padding: 0;
   text-align: center;
   font-size: 17px;
   text-transform: uppercase;
   }
   h5.muncipal-result-win {
   color: #00a500;
   font-weight: 600;
   letter-spacing: 1px;
   }
   h5.muncipal-result-loss {
   color: #ff0000;
   font-weight: 600;
   letter-spacing: 1px;
   }
   h5.muncipal-result-awaited {
   color: #a9a9a9;
   font-weight: 500;
   }
   
   ul.municipal-area li {
   list-style-type: none;
   display: inline-block;
   }
   ul.municipal-area li a {
   text-decoration: none;
   display: block;
   text-transform: uppercase;
   font-family: 'Libre Franklin', sans-serif;
   color: #7b0505;
   font-size: 17px;
   margin: 0px 15px;
   line-height: 31px;
   }
   ul.municipal-area li.active a {
   border-bottom: solid 3px #2db12d;
   font-weight: 600;
   color: #2db12d;
   }
   .municipal-ward-list {
   float: left;
   width: 100%;
   }
   .municipal-ward {
   float: left;
   width: 100%;
   position: relative;
   background-color: #e7e8ed;
   padding-bottom: 15px;
   margin-bottom: 15px;
   }
   .municipal-ward:nth-child(even) {
   background-color: #f9faff;
   }
   ul.municipal-ward-candidates {
   margin: 0px 7.5px;
   padding: 0px;
   }
   ul.municipal-ward-candidates li {
   list-style-type: none;
   float: left;
   width: 24.3%;
   background-color: #fff;
   margin-right: 7.5px;
   position: relative;
   padding: 40px 5px 11px 5px;
   border-radius: 9px;
   text-align: center;
   font-size: 15px;
   font-weight: 700;
   color: #7b0505;
   border: solid 1px #d6d6d6;
   }
   .municipal-ward h3 {
   padding: 7.5px;
   font-size: 22px;
   margin: 0px 0px 15px 0px;
   text-transform: capitalize;
   background-color: #d5d6db;
   }
   .municipal-ward h3 span {
   float: right;
   font-family: 'Faustina', serif;
   font-weight: 400;
   }
   ul.municipal-ward-candidates li:last-child {
   margin-right: 0px;
   }
   ul.municipal-ward-candidates li img {
   width: 30px;
   height: 30px;
   }
   ul.municipal-ward-candidates li span {
   position: absolute;
   right: 5px;
   top: 9px;
   font-size: 12px;
   text-transform: uppercase;
   padding: 3px;
   width: 63px;
   border-radius: 12px;
   }
   span.municipal-elections-win {
   background-color: #2db12d;
   color: #fff;
   }
   span.municipal-elections-loss {
   background-color: #db0000;
   color: #fff;
   }
   span.municipal-elections-awaited {
   background-color: #e7e8ed;
   color: #333;
   }
   ul.municipal-ward-candidates li strong {
   position: absolute;
   left: 45px;
   top: 7px;
   font-size: 18px;
   font-weight: normal;
   }
   ul.municipal-ward-candidates li img {
   width: 30px;
   height: 30px;
   position: absolute;
   left: 5px;
   top: 5px;
   }
   ul.municipal-ward-candidates li:hover {
   background-color: #fbd88d4d;
   -webkit-box-shadow: 0px 0px 5px 3px rgba(0,0,0,0.07);
   -moz-box-shadow: 0px 0px 5px 3px rgba(0,0,0,0.07);
   box-shadow: 0px 0px 5px 3px rgba(0,0,0,0.07);
   }
   .municipal-election-tabbing-header {
   background-color: #f4f4f4;
   text-align: center;
   margin: 0px 0px 10px 0px;
   padding: 7px 0px;
   border-bottom: solid 4px #7b0505;
   float: left;
   width: 100%;
   }
   ul.municipal-area {
   margin: 0px;
   padding: 0px;
   float: left;
   }
   .odisha-select-city-municipal-area {
   float: right;
   margin-top: 5px;
   margin-right: 11px;
   }
   .odisha-select-city-municipal-area select {
   height: 24px;
   font-size: 15px;
   background-color: #7b0505;
   color: #fff;
   }
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad">
</div>
<section class="main-article">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <h1 class="heading-municipal-election">Odisha Municipal Election 2022 </h1>
            <p class="summery-municipal-election">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
            <!--==================== TABBING =======================-->
            <div class="municipal-election-tabbing">
            <div class="municipal-election-tabbing-header">
                <ul class="municipal-area">
                   <li class="active"><a data-toggle="tab" href="#bhubaneswar">bhubaneswar</a></li>
                   <li><a data-toggle="tab" href="#cuttack">cuttack</a></li>
                   <li><a data-toggle="tab" href="#brahmapur">brahmapur</a></li>
                </ul>
            <div class="odisha-select-city-municipal-area">
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
                <div class="tab-content">
                   <div id="bhubaneswar" class="tab-pane fade in active">
                      <table class="muncipal-election-table">
                         <tbody>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title=""><span>BJD</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-awaited">Awaited</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title=""><span>BJP</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-win">WIN</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title=""><span>INC</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-loss">Loss</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title=""><span>OTHERS</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-awaited">Awaited</h5>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                      <div class="municipal-ward-list">
               <div class="municipal-ward">
                  <h3>Ward no. 01 <span>Bhubaneswar</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 02 <span>Bhubaneswar</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 03 <span>Bhubaneswar</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 04 <span>Bhubaneswar</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 05 <span>Bhubaneswar</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
            </div>
                   </div>
                   <div id="cuttack" class="tab-pane fade">
                      <table class="muncipal-election-table">
                         <tbody>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title=""><span>BJD</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan2</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-awaited">Awaited</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title=""><span>BJP</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-win">WIN</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title=""><span>INC</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-loss">Loss</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title=""><span>OTHERS</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-awaited">Awaited</h5>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                      <div class="municipal-ward-list">
               <div class="municipal-ward">
                  <h3>Ward no. 01 <span>Cuttack</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 02 <span>Cuttack</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 03 <span>Cuttack</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 04 <span>Cuttack</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 05 <span>Cuttack</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
            </div>
                   </div>
                   <div id="brahmapur" class="tab-pane fade">
                      <table class="muncipal-election-table">
                         <tbody>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title=""><span>BJD</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-awaited">Awaited</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title=""><span>BJP</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-win">WIN</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title=""><span>INC</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-loss">Loss</h5>
                               </td>
                            </tr>
                            <tr class="active">
                               <td class="muncipal-party-symbol">
                                  <a href=""><img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title=""><span>OTHERS</span>
                                  </a>
                               </td>
                               <td class="muncipal-candidate-candidate">
                                  <img src="https://odishatv.in/commondir/images/svg/male.svg">
                                  <h5>Gopal Prasad Pradhan3</h5>
                               </td>
                               <td class="muncipal-total-vote">
                                  <h5>52<span>votes</span></h5>
                               </td>
                               <td class="muncipal-result">
                                  <h5 class="muncipal-result-awaited">Awaited</h5>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                      <div class="municipal-ward-list">
               <div class="municipal-ward">
                  <h3>Ward no. 01 <span>brahmapur</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 02 <span>brahmapur</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 03 <span>brahmapur</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 04 <span>brahmapur</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
               <div class="municipal-ward">
                  <h3>Ward no. 05 <span>brahmapur</span></h3>
                  <ul class="municipal-ward-candidates">
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjp.svg" alt="" title="">
                        <strong>BJP</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-win">Win</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/bjd.svg" alt="" title="">
                        <strong>BJD</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-loss">Loss</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/inc.svg" alt="" title="">
                        <strong>INC</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                     <li>
                        <img src="https://odishatv.in/commondir/images/svg/ind.svg" alt="" title="">
                        <strong>OTHERS</strong>
                        Gopal Prasad Pradhan
                        <span class="municipal-elections-awaited">awaited</span>
                     </li>
                  </ul>
               </div>
            </div>
                   </div>
                </div>
             </div>
            <!--=================== //TABBING ======================-->
         </div>
         <?php include 'includes/sidebar.php';?>
      </div>
   </div>
</section>
<?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>