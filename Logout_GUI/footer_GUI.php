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
    <!--  -->
    <style>
        .footer_back
        {
            background: #131315;
            padding-top: 1%;

        }
        .footer_header
        {
            font-size: 18px;
            font-family: Trebuchet MS", sans-serif";
            color: white;
            font-weight: 700;
        }
        .footer_info
        {
            font-size: 16px;
            font-family: Trebuchet MS", sans-serif";
            color: silver;
            text-decoration: none;
            color: #009bdf;
        }
        .footer_info_exta
        {
            font-size: 16px;
            font-family: Trebuchet MS", sans-serif";
            color: silver;
            border-bottom: none;
        }
        .footer_info:hover
        {
            border-bottom: 1px solid #00b3ff;
            color: #009bdf;
        }
        /*  */
        .icon_footer
        {
            list-style: none;
            margin-left: -50px;
        }
        .icon_footer li
        {
            display: inline-block;
            margin: 0 5px;
        }
        .icon_footer li a i
        {
            color: white;
        }
        
        .icon_footer li a i
        {
            background: #e1e1e140;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-block;
            font-size: 22px;
            padding: 16px;
            transition: 1s;
        }
        .icon_footer li a i:hover
        {
            background: #e1e1e180;
            transition: 1s;
            transform: rotateZ(20deg);
        }
        .shado_foot
        {
            /* text-shadow: 3px 3px 3px fuchsia; */
        }
        /*  */
        .scroll_foot
        {
            color: white;
            float: right;
            padding-right: 50px;
            font-size: 50px;
            cursor: pointer;
        }
        .scroll_foot i
        {
            color: white;
        }
        .scroll_foot i:hover
        {
            color: #FF40FF;
        }

    </style>
</head>
<body>

<!--  -->
<div id="footer_go" class="footer_back">
        <div class="scroll_foot">
            <a href="#"><i class="fas fa-arrow-up"></i></a>
        </div>
<div class="container">
  <div class="row ">

        <div class="col">
        <p class="footer_header">SUPPORT</p>
            <a class="footer_info" href="#">Blog Page</a><br>
            <a class="footer_info" href="#">Contact Page</a><br>
            <a class="footer_info" href="#">Suggation Page</a><br>
        </div>

        <div class="col">
            <p class="footer_header">ABOUT US</p>
            <a href="#footer_go">Themes</a>
            <a href="#footer_go">Themes</a>
            <a href="#footer_go">Themes</a>
            <a href="#footer_go">Themes</a>
        </div>

        <div class="col">
            <p class="footer_header">WEBSITE LINK</p>
            <a class="footer_info" href="#">Educational Website</a><br>
            <a class="footer_info" href="#">E-commerce Website</a><br>
            <a class="footer_info" href="#">Blog Website</a><br>
            <a class="footer_info" href="#">UI/UX WEBSITE</a><br>
            <a class="footer_info" href="#">Wordpress Website</a><br>
            <a class="footer_info" href="#">Chating Website</a><br>
            <a class="footer_info" href="#">API Website</a><br>
            <a class="footer_info" href="#">Music Website</a><br>
        </div>
        
        <div class="col">
        <p class="footer_header">SUPPORT</p>
        <a href="#footer_go">Themes</a>
        <a href="#footer_go">Themes</a>
        </div>

        <div class="col">
            <p class="footer_header">CONTACT US</p>

            <span class="footer_info_exta"><span style="font-weight: 700;">Address :</span> <br>Ajilzhara, Barishal, Bangladesh <br></span>
            <span class="footer_info_exta"><span style="font-weight: 700;">Email</span> : <br>webmailRedoy@redoytime.net</span>
            <span class="footer_info_exta" style="font-weight: 700;">Social Media Link &nbsp;&nbsp;<i class="fas fa-link"></i></span><br><br>

            <ul class="icon_footer">
                <li><a class="header_123_icon ami_shado_foot" href="https://www.facebook.com/redoy.sarder.714/" target ="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="header_123_icon ami_shado_foot" href="https://twitter.com/FreelancerRedoy" target ="_blank" ><i class="fab fa-twitter"></i></a></li>
                <li><a class="header_123_icon ami_shado_foot" href="https://www.linkedin.com/in/md-redoy-70928b206/" target ="_blank" ><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            
        </div>
        <hr style="color: silver;">
        <div style="text-align: center;color: silver;">
        <p><span style="font-weight: 700;"><i class="fas fa-envelope"></i></span> : webmailRedoy@redoytime.net</p>
        
        <p>Full Stak Web Developer and Android Developer and Software Engineer <span class="font-effect-fire">MD. Redoy Sarder &nbsp;
        <span style="font-size: 30px;"><abbr title="Git Hub"><a href="https://github.com/DeveloperRedoy/Engineering-teme"><i class="fab fa-github font-effect-fire"></i></a></abbr></span>
    </span></p>
        </div>

  </div>
</div>
<!--  -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".header_123_icon").mouseenter(function(){
            $(this).addClass("shado_foot");
        });
        $(".header_123_icon").mouseout(function(){
            $(this).removeClass("shado_foot");
        });
    });
</script>
</body>
</html>