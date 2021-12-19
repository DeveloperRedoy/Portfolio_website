<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--  -->
  <style>
        .myselfe
        {
            width: 60%;
            height: auto;
            margin-top: 0vh;
            margin-bottom: 0vh;
            margin-left: 20%;
            margin-right: 20%;
        }
        .my_name
        {
            font-family: 'Space Mono', monospace;
            color: darkorange;
            border-bottom: 2px solid darkorange;
        }
        .big_font
        {
            font-size: 80px;
            font-weight: 700;
            font-family: 'Frank Ruhl Libre', serif;
        }
        .web_dev
        {
            font-family: 'Playfair Display', serif;
            font-size: 43px;
            color: #727F94;
            font-weight: 700;
            float: left;
        }
        .col .img_my2
        {
            width: 500px;
            height: 500px;
            border-radius: 50%;
            float: right;
        }
        
        .col1
        {
            margin-top: 0vh;
        }
        .col1 .img_my1
        {
            float: left;
        }
        .img_p p
        {
            margin-top: 10px;
            float: left;
        }
        .img_p
        {
            float: left;
        }
        .img_p:nth-child(2)
        {
            margin-top: 10vh;
        }
        .exta
        {
            border: none;
            color: fuchsia;
        }
        .mysqlfe_
        {
            width: 100%;
            background: white;
        }
        .col .img_my1
        {
            margin-top: 5vh;
        }
        .col p
        {
            margin-top: 6vh;
        }
        .col2 .img_my2
        {
            margin-top: 20vh;
        }
        @media screen and (max-width: 1200px)
        {
            .col .img_my2
            {
                width: 400px;
                height: 400px;
            }
        }
        @media screen and (max-width: 1000px)
        {
            .col .img_my2
            {
                width: 300px;
                height: 300px;
            }
        }
        @media screen and (max-width: 800px)
        {
            .col .img_my2
            {
                width: 250px;
                height: 250px;
            }
        }
        @media screen and (max-width: 600px)
        {
            .col .img_my2
            {
               display: none;
            }
        }
        @media screen and (max-width: 500px)
        {
            .col .img_my2
            {
                display: none;
            }
        }
    </style>
</head>
<body>
  
<!--  -->
<div class="mysqlfe_">
<div class="container myselfe">
    <div class="row">

        <div class="col col1">
            <div class="img_p">
            <img class="img_my1" src="img/ruby.png" style="width: 50px; height:50px;" alt="">
            <p>&nbsp; MD.Redoy Sarder</p>
            </div>
            <div class="img_p">
            <p class="my_name">HELLO, MY NAME IS</p>
            <p class="big_font">Redoy Sarder</p>
            <p class="web_dev">Web Developer</p>
            <p class="my_name exta">syber.redoy.php.23.365@gmail.com</p>
            </div>
        </div>

        <div class="col col2">
        <img class="img_my2 img-thumbnail" src="img/1.jpg" alt="">
        </div>

    </div>
</div>
</div>
<!--  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>