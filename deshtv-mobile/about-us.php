<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
         <?php include "css/common-mobile.css";?>
         section.about-us-khabar{
         margin-top:80px;
         margin-bottom:50px;
         }
         h2.title-khabar{
         text-transform: uppercase;
         color: #F89C1D;
         font-weight: bold;
         font-size: 24px;
         margin: 10px 10px 10px 10px;
         padding: 0;
         }    
         .content-wrapper{
         margin:0 10px;
         } 
         .content-wrapper p{
         font-weight:500;
         color: #555;
         font-size: 18px;
         margin-bottom: 14px;
         line-height: 1.2rem;
         }
         .content-wrapper h4{
         font-size: 24px;
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
         font-size: 26px;
         text-align: left;
         border-left: 4px solid #f2f1ef;
         font-style: italic;
         }
         /* vmv */
         ul.nav-tabs{
         list-style-type:none;
         margin:0;
         top: 220px;
         display:flex;
         width: 100%;
         }
         img.vmv{
         height: 250px;
         width: 100%;
         }
         .nav-link{
         text-transform: uppercase;
         font-size: 26px;
         font-weight: 700;
         color: #F89C1D;
         text-decoration: none;
         border: 2px solid black;
         padding: 10px;
         width: 33%;
         }
         .vmv-content h3{
         font-size:24px;
         font-weight: bold;
         padding-top: 5px;
         margin: 0 10px 10px 0px;
         line-height: 1.7rem;
         color:#ed8c06b8 ;  
         text-transform: capitalize;
         }
         .vmv-content p{
         font-weight:500;
         color: #555;
         font-size: 18px;
         margin:0 auto 10px auto;
         line-height: 1.2rem;
         }
         /* vmv */
         /* our-skill */
         .khabar-os{
         padding: 40px 0;
         background-color: #F2F4F5;
         }
         .skill-content p{
         font-weight:500;
         color: #555;
         font-size: 18px;
         margin:0 10px 14px 10px;
         line-height: 1.2rem;
         }
         img.vmv{
         height:auto;
         width: 100%;
         }
         .khabar-os{
         padding: 40px 0;
         background-color: #F2F4F5;
         }
         .progress-khabar{
         margin:0 10px 14px 10px;
         background-color: #858c945c;
         }
         .progress-bar-striped{
         background-color: #F89C1D;
         }
         h3.skill-khabar{
         margin: 0 0 10px 10px;
         padding:0;
         font-size:20px;
         font-weight:600;
         }
      </style>
   </head>
   <body>
      <?php include 'includes/header.php';?>
      <section class="about-us-khabar">
         <h2  class="title-khabar">about us</h2>
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
                  <div class="tab-pane">
                     <div class="vmv-content">
                        <h3>our mission</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                     </div>
                     <img src="images/mission-khabar.jpg" class="vmv" alt="">
                  </div>
                  <div class="tab-pane fade">
                     <div class="vmv-content">
                        <h3>our vision</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                     </div>
                     <img src="images/vision-khabar.jpg" class="vmv"  alt="">
                  </div>
                  <div class="tab-pane fade">
                     <div class="vmv-content">
                        <h3>our value</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo ad aut ipsa, ullam provident aliquid ratione cum iusto quaerat maxime esse facere doloribus rerum non, dignissimos, quam aperiam placeat.</p>
                     </div>
                     <img src="images/value-khabar.jpg" class="vmv"  alt="">
                  </div>
               </div>
            </div>
            <!-- vmv -->
         </div>
         <!-- our-skill -->
         <h2  class="title-khabar">our skills</h2>
         <div class="row">
            <div class="col-lg-6">
               <div class="skill-content">
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
         <!-- our-skill -->
      </section>
      <?php include 'includes/footer.php'; ?>
      <script>
        <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>