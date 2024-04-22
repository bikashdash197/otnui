<!DOCTYPE html>
<html>
   <head>
      <title>NEW DESKTOP HOME PAGE</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style type="text/css">
         <?php include "css/common-desktop.css"; ?>
         section.abt-us-khabar {
         margin-top: 80px;
         margin-bottom: 30px;
         }
         .vmv-au{
            margin-bottom:20px;
         }
         .title-khabar {
         overflow: hidden;
         text-align: left;
         }
         .title-khabar h2{
         color: #F89C1D;
         font-weight: bold;
         font-size: 35px;
         text-transform: uppercase;
         position: relative;
         display: inline-block;
         padding-right: 25px;
         margin-bottom: 25px;
         } 
         .title-khabar h2:after {
         content: '';
         font-size: 2px;
         background: rgba(0, 0, 0, 0.1);
         color: rgba(0, 0, 0, 0.1);
         height: 4px;
         display: block;
         width: 2000%;
         position: absolute;
         right: -2000%;
         top: 50%;
         }
         .content-wrapper p{
        
         font-weight:500;
         color: #555;
         font-size: 16px;
         margin-bottom: 14px;
         line-height: 1.6rem;
         }
         .content-wrapper h4{
        ;
         font-weight: bold;
         padding-top: 5px;
         margin-top: 0;
         margin-bottom: 18px;
         line-height: 1.7rem;
         color:#ed8c06b8;
         }
         .content-wrapper blockquote{
         padding: 10px 20px;
         margin: 0 0 20px;
         font-size: 16px;
         text-align: left;
         border-left: 4px solid #f2f1ef;
         font-style: italic;
         }
         /* vmv */
         .vmv-c{
         border:1px solid #F89C1D;
         padding: 10px;
         }
         .nav-tabs{
         position: absolute;
         top: 220px;
         }
         img.vmv{
         height: 250px;
         width: 100%;
         }
         .nav-item{
         width: 145px;
         text-align:center;
         }
         .nav-tabs .nav-link{
         text-transform: uppercase;
         font-size: 16px;
         font-weight: 700;
         color: #f2f1ef;
         border: 1px solid  #F89C1D;
         }
         .nav-link:hover{
         
         color:  #F89C1D;
         border: 1px solid #fff;
         }
         .nav-tabs .nav-link.active{
         color:  #F89C1D;
         border: 1px solid  #F89C1D;
         }
         .vmv-content {
         padding: 40px 20px;
         }
         .vmv-content h3{
        ;
         font-weight: bold;
         padding-top: 5px;
         margin-top: 0;
         margin-bottom: 18px;
         line-height: 1.7rem;
         color:#ed8c06b8 ;  
         text-transform: capitalize;
         }
         .vmv-content p{
        
         font-weight: 700;
         color: #555;
         background-color: #FDFEFE;
         font-size: 14px;
         line-height: 1.6rem;
         margin-bottom: 7px;
         }
         /* vmv */
         /* our-skill */
         .title-khabar-r h2{
         color: #F89C1D;
         font-weight: bold;
         font-size: 35px;
         text-transform: uppercase;
         text-align: right;
         padding-left: 25px;
         margin-bottom: 25px;
         position: relative;
         overflow: hidden;
         } 
         .title-khabar-r h2:after{
         content: '';
         background: rgba(0, 0, 0, 0.1);
         height: 4px;
         display: block;
         position: absolute;
         width: 2000%;
         left: -1925%; 
         top: 50%;
         }
         .khabar-os{
         padding: 40px 0;
         background-color: #F2F4F5;
         }
         h3.skill-khabar{
         font-size:22px ;
        ;
         font-weight: bold;
         padding-top: 5px;
         margin-bottom: 10px;
         line-height: 1.7rem;
         color: #044A67;  
         text-transform: capitalize;  
         }
         .progress-khabar{
         margin-bottom: 24px;
         background-color: #858c945c;
         }
         .skill-content p{
        
         font-weight: 700;
         color: #555;
         font-size: 14px;
         line-height: 1.6rem;
         margin-bottom: 7px;
         }
         img.skill-content-img{
         height: 280px;
         width: 100%;
         padding: 0 0 20px 0;
         }
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      <section class="abt-us-khabar">
         <div class="container">
            <div class="title-khabar">
               <h2>about us</h2>
            </div>
            <div class="row">
               <?php include 'includes/left_sticky_menu.php'; ?>
               <div class="col-lg-9">
                  <div class="row vmv-au">
                     <div class="col-lg-6">
                        <div class="content-wrapper">
                           <p>
                              <strong>Lorem, ipsum.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quod omnis, itaque corporis architecto, exercitationem sit illo, totam eum voluptatibus blanditiis obcaecati dolor? Magni quod mollitia ducimus, ratione placeat enim.
                           </p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quod omnis, itaque corporis architecto, exercitationem sit illo, totam eum voluptatibus blanditiis obcaecati dolor? Magni quod mollitia ducimus, ratione placeat enim.</p>
                           <h4>We specialize in templates.</h4>
                           <blockquote>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quod omnis, itaque corporis architecto, exercitationem sit illo, totam eum voluptatibus blanditiis obcaecati dolor? Magni quod mollitia ducimus, ratione placeat enim
                              </p>
                           </blockquote>
                        </div>
                     </div>
                     <!-- vmv -->
                     <div class="col-lg-6">
                        <div class="container vmv-c">
                           <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="tab-1" data-toggle="tab" href="#content-1" role="tab" aria-controls="content-1" aria-selected="true"> mission</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="tab-2" data-toggle="tab" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false"> vision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="tab-3" data-toggle="tab" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false"> value</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="content-1" role="tabpanel" aria-labelledby="tab-1">
                                 <img src="images/mission-khabar.jpg" class="vmv" alt="">
                                 <div class="vmv-content">
                                    <h3>our mission</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="content-2" role="tabpanel" aria-labelledby="tab-2">
                                 <img src="images/vision-khabar.jpg" class="vmv"  alt="">
                                 <div class="vmv-content">
                                    <h3>our vision</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="content-3" role="tabpanel" aria-labelledby="tab-3">
                                 <img src="images/value-khabar.jpg" class="vmv"  alt="">
                                 <div class="vmv-content">
                                    <h3>our value</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- vmv -->
                  </div>
                <!-- our-skill -->
                  <div class="title-khabar-r">
                        <h2>our skills</h2>
                  </div>
                  <div class="row">
                        <div class="col-lg-6">
                           <div class="skill-content">
                              <img src="images/mission-khabar.jpg" alt="Technical Skills Image" class="skill-content-img">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <h3 class="skill-khabar">Programming Languages</h3>
                           <div class="progress-khabar">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                           </div>
                           <h3 class="skill-khabar">Web Development</h3>
                           <div class="progress-khabar">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                           </div>
                           <h3 class="skill-khabar">Web Development</h3>
                           <div class="progress-khabar">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                           </div>
                           <h3 class="skill-khabar">Programming Languages</h3>
                           <div class="progress-khabar">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                           </div>
                        </div>
                     </div>
                    </div>
                  </div>
                <!-- our-skill -->

         </div>
      </section>
      <!-- <section class="khabar-os"> -->
      <!-- </section> -->
      <?php include 'includes/footer.php'; ?>
      <script>
         <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>