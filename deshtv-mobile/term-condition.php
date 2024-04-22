<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
      <?php include "css/common-mobile.css"; ?>
      .static-page-content {
        margin-top: 80px;
        margin-bottom: 70px;
        padding:0 10px;
        }
        h1.title-khabar{
         text-transform:uppercase;
         text-align: left;
         color: #EF5527;
         margin-bottom:20px;
         font-size:24px;
         font-weight:500;
         line-height:32px;
         padding:0;
         position: relative;
        }
        h1.title-khabar:after{
         background-color: #EF5527;
         content: "";
         width: 136px;
         height: 4px;
         position: absolute;
         bottom: -8px;
         left: 0;
        }
        .static-page-content p {
        font-size:18px;
         font-weight: 400;
         line-height: 26px;
         margin:0 0 20px 0;
         padding:0;
         color:#333;
        }
        
        
      </style>
   </head>
   <body>
      <?php include 'includes/header.php'; ?>
      
                <div class="static-page-content">
                <h1 class="title-khabar">term & condition</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor in libero minima illum adipisci, animi quas alias nemo repellendus fugiat?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolores facilis nemo, aliquid explicabo id iure tenetur autem sit in. Sapiente libero eaque ad nobis repellendus eveniet voluptatum ducimus voluptatibus doloribus laboriosam molestias non facilis iure vero, ab placeat tempore minus, quo dolorem quos. Qui ipsam et ut deleniti dolor eveniet! Voluptate suscipit ducimus placeat, eaque nemo blanditiis molestiae! Suscipit saepe totam ullam quod a ipsum nulla quis, maiores voluptatibus rem modi distinctio deserunt ex minima alias ducimus nemo atque, cumque pariatur repudiandae. Enim quos vitae a! Eligendi dolores, excepturi dicta, error assumenda, nesciunt natus repudiandae nam nemo ad rerum!</p>
                </div>
      <?php include 'includes/footer.php'; ?>
      <script>
        <?php include 'js/common-desktop.js'; ?>
      </script>
   </body>
</html>