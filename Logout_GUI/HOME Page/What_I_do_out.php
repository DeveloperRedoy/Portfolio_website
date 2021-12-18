<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
  <!--  -->
  <style>
    .what_back
    {
      background: #0B0B0D10;
      margin-top: 1vh;
    }
    .what_img
    {
      width: 100%;
      margin-top: 5vh;
      border-radius: 10px;
      transition: 0.3s;
      box-shadow: -5px -5px 20px #727F94, 5px 5px 20px #3E2686;
      cursor: pointer;
    }
    .what_img2
    {
      box-shadow: -5px -5px 20px #FF00FF, 5px 5px 20px #0D6BF5,-5px -5px 20px #FF00FF, 5px 5px 20px #0D6BF5;
      transition: 0.3s;
      cursor: pointer;
      transform: scale(1.2);
    }
    .what_img:hover
    {
      box-shadow: -5px -5px 20px #FF00FF, 5px 5px 20px #0D6BF5,-5px -5px 20px #FF00FF, 5px 5px 20px #0D6BF5;
      transition: 0.3s;
      cursor: pointer;
      transform: scale(1.2);
    }

    .language_icon
    {
      font-size: 100px;
      font-weight: normal;
      color: #EC8922;
    }

    .language_margin
    {
      margin-top: 10vh;
    }

/*  */
.scrollbar {
    margin-left: 30px;
    float: left;
    height: 80vh;
    width: 100%;
    overflow-y: scroll;
    margin-bottom: 25px;
    }
    .scrollbar-warning::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }
    
    .scrollbar-warning::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }
    
    .scrollbar-warning::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #FF8800; }
    
    .scrollbar-warning {
    scrollbar-color: #FF8800 #F5F5F5;
    }
    
/*  */

    .Skill_
    {
      font-size: 50px;
      font-family: "Playfair Display", serif;
      font-weight: 700;
      color: white;
    }
    .Skill_:hover
    {
      color: #E0E0E0;
    }
    .Skill_text
    {
      font-size: 30px;
      font-family: 'Roboto', sans-serif;
      font-weight: 600;
      color: white;
    }
    .Skill_text:hover
    {
      color: #1DE301;
    }
    .skil_lint
    {
      font-size: 22px;
      color: white;
      font-weight: 600;
    }
    .skil_lint:hover
    {
      color: yellow;
    }
    @media screen and (max-width: 1200px)
    {
      .scrollbar
      {
        height: 70vh;
      }
      .language_icon
      {
        font-size: 70px;
      }
      .Skill_
      {
        font-size: 45px;
      }
      .Skill_text
      {
        font-size: 25px;
      }
      .skil_lint
      {
        font-size: 20px;
      }
    }
    @media screen and (max-width: 900px)
    {
      .language_icon
      {
        font-size: 50px;
      }
      .scrollbar
      {
        height: 55vh;
      }
      .Skill_
      {
        font-size: 40px;
      }
      .Skill_text
      {
        font-size: 23px;
      }
      .skil_lint
      {
        font-size: 18px;
      }
    }
    @media screen and (max-width: 700px)
    {
      .language_icon
      {
        font-size: 40px;
      }
      .scrollbar
      {
        height: 45vh;
      }
      .Skill_
      {
        font-size: 35px;
      }
      .Skill_text
      {
        font-size: 20px;
      }
      .skil_lint
      {
        font-size: 17px;
      }
    }
    @media screen and (max-width: 500px)
    {
      .language_icon
      {
        font-size: 30px;
      }
      .scrollbar
      {
        height: 40vh;
      }
      .skil_lint
      {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

<div class="what_back">

<div class="container">
  <!--  -->
  <div class="row">
    <div class="col">
      <img class="what_img what_img1" src="img/Web_What.jpg" alt="">
    </div>
    <div class="col">
    <img class="what_img what_img2 what_img3" src="img/apps_what.png" alt="">
    </div>
    <div class="col">
    <img class="what_img what_img1" src="img/Software_What.jpg" alt="">
    </div>
  </div>
  <!--  -->
  <div class="row">
    <div class="col" style="width: 50%; height:80vh; border-radius:10px;">
    <div class="scrollbar scrollbar-warning">
    <div class="force-overflow">
        <p class="Skill_">Skills &nbsp; &nbsp;<i class="fas fa-user-graduate"></i></p>

        <p class="Skill_text">WebSite and WebApps &nbsp; &nbsp;<i class="fas fa-layer-group"></i></p>
        <ul>
          <li class="skil_lint">HTML &nbsp;<i class="fab fa-html5"></i></li>
          <li class="skil_lint">CSS (Animation, 3D Design, Responsive, E.T.C) &nbsp;<i class="fab fa-html5"></i></li>
          <li class="skil_lint">Bootstrap &nbsp;<i class="fab fa-bootstrap"></i></li>
          <li class="skil_lint">JavaScript &nbsp;<i class="fab fa-js-square"></i></li>
          <li class="skil_lint">JQuery &nbsp; JQ</li>
          <li class="skil_lint">PHP (Rest API, Chating Apps, E-commers Apps) <i class="fab fa-php"></i></li>
          <li class="skil_lint">MySQL &nbsp;<i class="fas fa-database"></i></li>
          <li class="skil_lint">NodeJs &nbsp;<i class="fab fa-node-js"></i></li>
          <li class="skil_lint">MongoDB</li>
          <li class="skil_lint">Git &nbsp;<i class="fas fa-code-branch"></i></li>
          <li class="skil_lint">Github &nbsp;<i class="fab fa-github"></i></li>
        </ul>
        <!--  -->
        <p class="Skill_text">Android Apps &nbsp; &nbsp;<i class="fab fa-android"></i></p>
        <ul>
          <li class="skil_lint">XML</li>
          <li class="skil_lint">JAVA &nbsp;<i class="fab fa-java"></i></li>
          <li class="skil_lint">MySQL &nbsp;<i class="fas fa-database"></i></li>
          <li class="skil_lint">Firebase </li>
          <li class="skil_lint">Git &nbsp;<i class="fas fa-code-branch"></i></li>
          <li class="skil_lint">Github &nbsp;<i class="fab fa-github"></i></li>
        </ul>
        <!--  -->
        <p class="Skill_text">Desktop Software &nbsp; &nbsp;<i class="fab fa-windows"></i></p>
        <ul>
          <li class="skil_lint">JAVA &nbsp;<i class="fab fa-java"></i></li>
          <li class="skil_lint">MySQL &nbsp;<i class="fas fa-database"></i></li>
          <li class="skil_lint">Git &nbsp;<i class="fas fa-code-branch"></i></li>
          <li class="skil_lint">Github &nbsp;<i class="fab fa-github"></i></li>
        </ul>
        <!--  -->
        <p class="Skill_text">Description &nbsp; <i class="fas fa-file-alt"></i></p>
        <ul style="list-style: none;">
          <li class="skil_lint">Lorem ipsum dolor sit amet.</li>
        </ul>
        <!--  -->
        <p class="Skill_text">WebSite Link &nbsp; <i class="fas fa-paperclip"></i></p>

        <label for="" style="font-weight: 500; color:white;">Main Website : &nbsp; </label><a style="color:yellow;" href="https://redoytime.net/">https://redoytime.net/</a><br>
        <label for="" style="font-weight: 500; color: white;">E-Commerce WebSite : &nbsp; </label><a style="color:yellow;" href="https://developerredoy.github.io/Front_end/">E-commerce WebSite</a><br>
        <label for="" style="font-weight: 500; color: white;">UI/UX Design WebSite : &nbsp; </label><a style="color:yellow;" href="https://developerredoy.github.io/tech-web-fontend/">UI/UX WebSite</a><br>
        <label for="" style="font-weight: 500; color: white;">Main Website : &nbsp; </label><a style="color:yellow;" href="http://redoysoftwareengineer.epizy.com/">Educational WebSite</a><br>
        <br><br><br>
        
    </div>
    </div>
    </div>
    <div class="col">
<!-- wwww -->
<div class="language_margin">
<div class="container">
  <div class="row justify-content-start">
    <div class="col-4">
        <i class="fab fa-cuttlefish language_icon"></i>
    </div>
    <div class="col-4">
        <i class="fab fa-css3-alt language_icon"></i>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
        <i class="fab fa-java language_icon"></i>
    </div>
    <div class="col-4">
        <i class="fab fa-html5 language_icon"></i>
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-4">
        <i class="fab fa-bootstrap font-effect-fire language_icon"></i>
    </div>
    <div class="col-4">
        <i class="fab fa-js-square language_icon"></i>
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-4">
        <i class="fab fa-php language_icon"></i>
    </div>
    <div class="col-4">
        <i class="fab fa-python language_icon"></i>
    </div>
  </div>
  <div class="row justify-content-between">
    <div class="col-4">
        <i class="fab fa-android language_icon"></i>
    </div>
    <div class="col-4">
        <i class="fas fa-database language_icon"></i>
    </div>
    <div class="col-4">
        <i class="fab fa-cuttlefish language_icon"></i>
        <i class="fas fa-plus font-effect-fire language_icon"></i>
        <i class="fas fa-plus font-effect-fire language_icon"></i>
    </div>
  </div>
</div>
</div>
<!-- wwww -->
    </div>
  </div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

  $(document).ready(function(){
    $(".what_back").mouseenter(function(){
        $(".what_img3").toggleClass("what_img2");
    });
    $(".what_back").mouseout(function(){
        $(".what_img3").toggleClass("what_img2");
    });
    // 
    $(".what_img1").mouseenter(function(){
        $(".what_img3").removeClass("what_img2");
    });
    // 
    $(".language_icon").mouseenter(function(){
        $(this).addClass("font-effect-fire");
    });
    
  });

</script>

</body>
</html>