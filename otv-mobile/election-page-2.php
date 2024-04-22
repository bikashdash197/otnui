<?php include_once 'includes/header.php'; ?>
<style type="text/css">
.odisha-page-main-title {
    position: relative;
    float: left;
    width: 100%;
    background-color: #000;
}
.odisha-select-city {
    float: right;
    margin-top: 16px;
}
h1.odisha-election-heading {
    margin: 15px 0px;
    padding: 0px;
    font-size: 22px;
    display: inline-block;
    color: hsl(40deg 96% 64%);
}
.election-result-publish {
    display: inline-block;
    width: 100%;
}
.panel.otv-election-pane {
    margin-bottom: 7px;
    border-bottom: navajowhite;
}
.election-result-publish ul {
    margin: 0px;
    padding: 20px 0px 0px 15px;
    display: inline-block;
    width: 100%;
    border: 1px solid #706d6d;
    border-radius: 3px;
}
.election-result-publish ul li {
    list-style-type: none;
    float: left;
    width: 43%;
    overflow: hidden;
    margin: 0px 20px 20px 0px;
    position: relative;
    padding: 0px;
    height: 139px;
}
.election-result-publish ul li:nth-child(odd) {
    border-right: 1px solid #bbb;
}
.election-result-publish ul li:nth-child(1):before {
    content: "";
    display: block;
    width: 91%;
    height: 1px;
    background-color: #cecdcd;
    position: absolute;
    bottom: 0px;
    right: 0;
    left: 0;
}
.election-result-publish ul li:nth-child(2):before {
    content: "";
    display: block;
    width: 91%;
    height: 1px;
    background-color: #cecdcd;
    position: absolute;
    bottom: 0px;
    right: 0;
    left: 0;
}
.election-result-publish ul li h5 {
    margin: 0 auto;
    text-align: center;
    font-size: 17px;
    color: hsl(53deg 58% 70%);
    font-weight: 800;
}
.election-result-publish ul li h5 span {
    font-weight: 900;
    color: #fff;
    font-size: 23px;
}
h4.election-result-publish {
    text-align: center;
    margin: 0;
    padding: 0;
    font-size: 13px;
    color: #fff;
    margin-bottom: 10px;
}
h4.election-result-publish img {
    width: 43px;
    height: 43px;
    /* margin-bottom: 3px; */
    display: block;
    margin: 0 auto;
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
    padding: 5px;
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
    padding: 0px;
    font-size: 9px;
    font-weight: 700;
    line-height: 16px;
    float: left;
    font-family: 'Faustina';
    text-transform: uppercase;
    color: #fff;
    width: 44px;
    overflow: hidden;
}
td.election-board-zone-number h4 {
    font-size: 10px;
    font-weight: 700;
    margin: 0;
    display: grid;
}
td.election-board-dist-name h4 span {   
    text-align: center;
    font-size: 11px;
    font-weight: 700;
    font-family: 'Faustina';
    color: #fff;
    padding-left: 3px;
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
    position: absolute;
    width: 24px;
    height: 24px;
    bottom: 45px;
    right: 18px;
}
h4.dist-vote-total-count {
    margin: 5px;
    padding: 0;
    text-align: center;
    color: #fff;
}
tr.table-heading td:first-child {
    background-color: #000 !important;
}
tr.table-heading {
    background-color: #000 !important;
    border-top: 4px solid #7b0505;
}
td.election-board-heading h3 {
    margin: 0px 0px;
    padding: 0;
    text-align: center;
    color: #cfcfcf;
    font-size: 10px;
    font-weight: 300;
}
td.election-board-heading h3 span {
    display: block;
    font-size: 16px;
    font-weight: 700;
}
td.election-board-zone-number img {
    float: right;
    margin-top: -8px;
    width: 7px;
    height: 6px;
}
td.election-board-dist-name h4 {
    margin: 0;
    padding: 0;
    font-size: 9px;
    text-align: center;
    line-height: 15px;
    font-family: 'Faustina';
    color: #fff;
}
td.election-bord-zone-candidate h5 {
    position: absolute;
    left: 34px;
    right: 0;
    margin: 0px;
    padding: 0;
    font-size: 12px;
    font-weight: 600;
    line-height: 13px;
    top: 8px;
}
td.election-bord-zone-candidate img {
    float: left;
    width: 25px;
    height: 29px;
    margin: 0px;
}
td.election-board-trending img {
    text-align: center;
    margin: 0 auto;
    display: block;
    width: 25px;
    height: 28px;
    padding: 5px 0px;
}
td.election-board-percent h5 {
    margin: 5px 0px;
    padding: 0;
    text-align: center;
    font-size: 15px;
    color: #616161;
    font-weight: 500;
}
td.party-symbol img {
    width: 22px;
    height: 22px;
    text-align: center;
    margin: 0 auto;
    display: block;
}
td.party-symbol span {
    margin: 0px auto;
    display: block;
    font-size: 9px;
    color: #000;
    font-weight: 700;
    text-align: center;
}

.election-info h1 {
    margin: 0 0 0px 0;
    padding: 6px 0px 6px 94px;
    text-transform: capitalize;
    font-size: 30px;
    font-weight: 900;
    line-height: 28px;
    font-family: Faustina, serif;
    color: #fff;
}
.election-info img {
    position: absolute;
    top: 9px;
    left: 9px;
}
.election-info {
    position: relative;
    margin-bottom: 0px;
    padding: 10px;
    background-color: #7b0505;
}
span.election-bord-zone-total {
    margin: 0;
    padding-left: 10px !important;
    font-size: 10px !important;
    color: #000 !important;
    position: relative;
    text-align: center;
    line-height: 0px;
}
span.election-bord-zone-total img {
    width: 7px;
    height: 7px;
    position: absolute;
    top: -13px;
    right: -10px;
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
    height: 40px;
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
    height: 40px;
}
.election-result-publish ul li:nth-child(even) {
    margin-right: 0px;
}
/================== //ELECTION ==================/
</style>
<div class="otv-300-250-ad">
    <!-- /370089190/Below_Header_Category_Mobile_300x250 -->
    <div id="div-gpt-ad-22339530254-0" style="width: 300px; height: 250px;">
        <script>
        googletag.cmd.push(function() {
            googletag.display("div-gpt-ad-22339530254-0");
        });
        </script>
    </div>
</div>
<div class="container odisha-page-main-title">
    <h1 class="odisha-election-heading">ANUGUL</h1>
    <div class="odisha-select-city">
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
    <div class="election-result-publish">
            <ul>
              <li>
                <h4 class="election-result-publish">
                  <img src="images/svg/bjp.svg" alt="" title="">
                  BJP
                </h4>
                <h5><span>25/</span>80</h5>
                <img src="images/svg/orange-icon.svg" class="election-dist-trend-image">
              </li>
              <li>
                <h4 class="election-result-publish">
                  <img src="images/svg/bjd.svg" alt="" title="">
                  BJP
                </h4>
                <h5><span>25/</span>80</h5>
                <img src="images/svg/red-down-icon.svg" class="election-dist-trend-image">
              </li>
              <li>
                <h4 class="election-result-publish">
                  <img src="images/svg/inc.svg" alt="" title="">
                  BJP
                </h4>
                <h5><span>25/</span>80</h5>
                <img src="images/svg/green-up-icon.svg" class="election-dist-trend-image">
              </li>
              <li>
                <h4 class="election-result-publish">
                  <img src="images/svg/others.svg" alt="" title="">
                  BJP
                </h4>
                <h5><span>25/</span>80
                <img src="images/svg/orange-icon.svg" class="election-dist-trend-image">
                </h5>
              </li>
            </ul>
          </div>
</div>
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
    <tr>
        <td style="width: 100%; border: none; padding: 0px;">
            <table class="election-table-board">
                <tr class="active bdzone-toggle">
                  <td rowspan="2" class="election-board-zone-number">
                     
                     <h4><span>1</span>ZONE 1</h4>
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
</table>

<?php include_once 'includes/footer.php'; ?>

<script>
    $(".bdzone-toggle").click(function(){
      $(".bdzone-toggle-child").hide();
      $(this).siblings().toggle();
    });
</script>