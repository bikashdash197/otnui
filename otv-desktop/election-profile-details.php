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
</style>
<?php include 'includes/bredcum.php';?>
<div class="otv-970-250-ad">
</div>
<section class="main-article">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <div class="political-profile">
              <img src="images/green-up-icon.svg"> 
             <a href=""> <h2></h2></a>
            </div>
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