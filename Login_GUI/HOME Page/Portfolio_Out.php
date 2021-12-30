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
      .port .img_
      {
        width: 100%;
      }
      ::selection
      {
          color: white;
          background: darkorange;
      }
      .port_back
      {
          width: 100%;
          height: auto;
          background: rgb(255, 250, 240);
      }
      .port_text
      {
          font-size: 62px;
          font-family: 'Playfair Display', serif;
          font-weight: 700;
          margin-bottom: -8vh;
      }
      .port_text::selection
      {
          color: aqua;
          background: #338FFC;
      }
      .port_div_1
      {
          margin-bottom: -10vh;
      }
      .fa-arrow-circle-left,
      .fa-arrow-circle-right
      {
        transition: 0.3s;
      }
      .fa-arrow-circle-left:hover,
      .fa-arrow-circle-right:hover
      {
          color: darkorange;
          transform: rotateZ(90deg);
          transition: 0.3s;
      }
      .card_pro
      {
          transition: 0.3s;
          box-shadow: -5px -5px 20px #727F94, 5px 5px 20px #3E2686;
      }
      .card_pro:hover
      {
          box-shadow: -1px -1px 5px #727F94, 1px 1px 5px #3E2686;
          transition: 0.3s;
          
      }

      .card_pro5
      {
          box-shadow: -5px -5px 20px #FF00FF, 5px 5px 20px #0D6BF5,-5px -5px 20px #FF00FF, 5px 5px 20px #0D6BF5;
      }
      .port_card_test_style
      {
          font-size: 25px;
        color: yellow;
        text-shadow: 1px 1px 2px fuchsia, 0 0 25px red, 0 0 5px fuchsia;
      }
      .port_card_test_style::selection
      {
          color: white;
          background: darkorchid;
      }
  </style>
</head>
<body>

<div id="Portfolio_go" class="port_back">
<div class="container">
<!--  -->
<div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col port">
            <p class="port_text">
            Portfolio  
            </p>
        </div>

        <div class="col port" style="text-align: right; color:#040444;">
            <p class="port_text">
            <a href="#" style="text-align: right; color:#040444;"><i class="fas fa-arrow-circle-left"></i></a>
            <a href="#footer_go" style="text-align: right; color:#040444;"><i class="fas fa-arrow-circle-right"></i></a>
            </p>
        </div>
</div>
<!--  -->
    <div id="portfolio_go1" class="row row-cols-1 row-cols-md-3 g-4 port_div_1">
        <div class="col port">
            <p class="port_card_test_style" >Web Design (Html, CSS, Bootstrap)</p>
            <a class="card_pro" href="#portfolio_go1"><img style="border-radius: 10px;" class="img_ card_pro" src="img/Portfolio_img_1.jpg" alt=""></a>
        </div>

        <div class="col port">
        <p class="port_card_test_style">Web Development (PHP, MySQL)</p>
        <a href="#portfolio_go1"><img class="img_ card_pro" src="img/port web development.jpg" alt=""></a>
        </div>

        <div class="col port">
        <p class="port_card_test_style">SEO (Google Search Engine)</p>
           <a href="#portfolio_go1"><img class="img_ card_pro img-thumbnail" src="img/SEO.jpg" alt=""></a>
        </div>
    </div>
    <!--  -->
    <div id="portfolio_go2" class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col port">
        <p class="port_card_test_style">Android Apps Design (XML, JAVA)</p>
            <a href="#portfolio_go2"><img class="img_ card_pro" src="img/apps_Design.jpg" alt=""></a>
        </div>

        <div class="col port">
        <p class="port_card_test_style">Android Apps Development (JAVA, MySQL, Firebase)</p>
        <a href="#portfolio_go2"><img class="img_ card_pro" src="img/mobile apps development.jpg" alt=""></a>
        </div>

        <div class="col port">
        <p class="port_card_test_style">software engineering (Java, MySQL)</p>
           <a href="#portfolio_go2"><img class="img_ card_pro card_pro5" src="img/software_engineering.jpg" alt=""></a>
           <a href="#portfolio_go2"><img style="margin-top: 3vh;" class="img_ card_pro" src="img/software_engineering2.png" alt=""></a>
        </div>
    </div>

</div>
</div>
</body>
</html>