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
    .about_100 {
      width: 100%;
      background: #F3F6F9;

    }

    strong {
      color: #009BDF;
      margin-top: 10vh;
      float: left;
    }

    .big_text {
      margin-top: 1vh;
      font-size: 40px;
      font-weight: 700;
      font-family: sans-serif;
      float: left;
    }

    .about_text {
      font-size: 22px;
    }

    .about_hide_show {
      width: 100%;
      text-align: right;
    }

    .about_hide_show a {
      color: #009BDF;
      margin-top: 5vh;
      text-decoration: none;
    }

    .about_hide_show a:nth-child(2) {
      display: none;
    }

    .col {
      margin-top: 5vh;
    }

    .row .col {
      margin-bottom: 5vh;
    }

    .about_floting {
      float: left;
    }

    @media screen and (max-width: 1200px) {
      .big_text {
        font-size: 35px;
      }

      .row .col {
        margin-bottom: 0vh;
      }
    }

    @media screen and (max-width: 900px) {
      .big_text {
        font-size: 30px;
      }
    }

    @media screen and (max-width: 700px) {
      .big_text {
        font-size: 25px;
      }
    }

    .about_text {
      font-size: 20px;
    }

    @media screen and (max-width: 500px) {
      .big_text {
        font-size: 20px;
      }

      .about_text {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>

  <div id="about_go" class="about_100">
    <div class="container">
      <div class="row ">
        <div class="col">

          <strong>
            About me
          </strong>
          <p class="big_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sint fuga veritatis eveniet eaque nesciunt.</h1>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col about_text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quae molestias, ut neque aliquid dolore ipsa amet, doloribus dolorem magnam esse, quas rerum tenetur pariatur dolores recusandae repellat voluptatibus? Fugit, temporibus? Eum reprehenderit ullam et deserunt repellendus cumque hic neque maiores distinctio vitae! Quam nihil eius molestias et quas esse.
              <span class="raber_about" style="display: none; color:magenta">
                <br><br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. A aut doloremque explicabo repellendus magnam minima delectus beatae, eaque unde nobis veniam, impedit officiis, totam animi quae quod iusto quos fugit!
              </span>

        </div>
        <div class="col about_text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam adipisci neque corporis voluptas. Libero exercitationem minus fugit error ab laboriosam asperiores dolor adipisci nostrum ipsa, harum beatae? Accusamus odit consequatur laudantium molestias! Aspernatur excepturi est et nesciunt soluta! Facere, cumque reprehenderit? Aut vitae perferendis reprehenderit non, similique neque cupiditate illum.
                <span class="raber_about" style="display: none; color:magenta">
                    <br><br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id ipsa autem enim sunt laboriosam aperiam optio, consequuntur consequatur? Ut maxime maiores, provident eos iure praesentium eaque earum omnis aperiam at soluta est. Eligendi quam veritatis repellendus cum dolorum accusamus optio consequatur numquam voluptatum quidem explicabo sunt quaerat, mollitia dolores tempora.
                </span>
          <br><br>

        </div>
      </div>
      <div class="about_hide_show">
        <a href="#about_go">READ MORE &nbsp; <i class="fas fa-angle-down"></i></a>
        <a href="#about_go">Hide TEXT &nbsp; <i class="fas fa-angle-up"></i></a><br><br><br>
      </div>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".about_hide_show a:nth-child(1)").click(function(){
              $(this).hide(200);
              $(".raber_about").show(500);
              $(".about_hide_show a:nth-child(2)").show();
            });
            // ===================================================
            $(".about_hide_show a:nth-child(2)").click(function(){
              $(this).hide(200);
              $(".raber_about").hide(500);
              $(".about_hide_show a:nth-child(1)").show();
            });
        });
    </script>
</body>

</html>