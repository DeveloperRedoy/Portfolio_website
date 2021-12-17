<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--  -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Responsive/Slider_out_res.css">
    <!--  -->
    <style>
        .slide
        {
            width: 60%;
            height: auto;
            margin-top: 0vh;
            margin-bottom: 0vh;
            margin-left: 20%;
            margin-right: 20%;  
        }
        .slider_
        {
          width: 100%;
          background: white;
        }
        .slider_top
        {
          margin-top: 8vh;
          
        }
        /*  */
        .slider_scroll
        {       
            padding-right: 50px;
            font-size: 50px;
            cursor: pointer;
            float: right;
            margin-top: 2vh;
        }
        .slider_scroll i
        {
            color: darkviolet;
        }
        .slider_scroll i:hover
        {
            color: fuchsia;
        }
    </style>
</head>
<body>

  <!-- ======================   Slider  ===================== -->
  <!-- ======================   Slider  ===================== -->
  <div class="slider_">
  <div class="slider_scroll">
        <a href="#footer_go"><i class="fas fa-arrow-down"></i></a>
        </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active slider_top">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item slider_top">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item slider_top">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>

</div>
<!-- ======================   Slider  ===================== -->
<!-- ======================   Slider  ===================== -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>