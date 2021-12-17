<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.floating-social-share.min.css" />
    <link rel="stylesheet" href="Responsive/Home_Out_res.css">
  <!--  -->
  <style>
    #footer
    {
      position: fixed;
      background-image: url("img/1.jpg");
      background-size: 100% 100vh;
      z-index: -50;
      background-repeat: no-repeat;
      
    }
    .main_class
    {
      width: 100%;
      height: 200vh;
    }
  </style>
</head>
<body>
    <div id="footer">
      <img class="main_class" src="img/Glossy_Heart.jpg" alt="">
    </div>
  <!-- ====================== -->
  <?php require 'menu_bar_out.php' ?>
  <?php require 'Slider_Out.php' ?>
  <!--  -->
<div id="menu_bar_UI">
  <?php require 'menu_bar_UI.php'?>
</div>
<!--  -->
  <?php require 'What_I_do_out.php' ?>
  <?php require 'About_me_out.php' ?>
  <?php require 'myselfe.php' ?>
  <?php require 'Portfolio_Out.php' ?>
  <?php require 'footer_GUI.php' ?>
  <!-- ====================== -->


<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/jquery.floating-social-share.min.js"></script>
<script src="js/logic.js"></script>

</body>
</html>
