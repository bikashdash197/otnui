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
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad"></div>
<section class="main-article">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 sticky">
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
         </div>
         <?php include 'includes/sidebar.php';?>
      </div>
   </div>
</section>
<?php include 'includes/newsletter.php';?>
<?php include 'includes/footer.php';?>