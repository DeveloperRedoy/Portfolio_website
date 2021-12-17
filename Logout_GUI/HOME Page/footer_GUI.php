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
            font-size: 14px;
            font-family: Trebuchet MS", sans-serif";
            color: white;
            font-weight: 700;
        }
        .footer_info
        {
            font-size: 14px;
            font-family: Trebuchet MS", sans-serif";
            color: silver;
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
        }
        .icon_footer li a i:hover
        {
            background: #e1e1e180;
        }
        .shado_foot
        {
            text-shadow: 3px 3px 3px fuchsia;
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
            color: wheat;
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
        <p>Free & premium UI tools to help you build better websites</p>
        </div>

        <div class="col">
            <p class="footer_header">ABOUT US</p>
            <a href="#">Themes</a>
            <a href="#">Themes</a>
            <a href="#">Themes</a>
            <a href="#">Themes</a>
        </div>

        <div class="col">
            <p class="footer_header">WEBSITE LINK</p>
            <a class="footer_info" href="https://redoytime.net/">https://redoytime.net/</a><br>
            <a class="footer_info" href="https://developerredoy.github.io/Front_end/">https://github.io/Front_end/</a><br>
            <a class="footer_info" href="https://developerredoy.github.io/tech-web-fontend/">https://github.io/tech-web-fontend/</a><br>
            <a class="footer_info" href="http://redoysoftwareengineer.epizy.com/">http://redoysoftwareengineer.com/</a><br>
        </div>
        
        <div class="col">
        <p class="footer_header">SUPPORT</p>
        <a href="#">Themes</a>
        <a href="#">Themes</a>
        </div>

        <div class="col">
            <p class="footer_header">CONTACT US</p>
            <span class="footer_info"><span style="font-weight: 700;">Address :</span> <br>Ajilzhara, Barishal, Bangladesh <br></span>
            <span class="footer_info"><span style="font-weight: 700;">Email</span> : <br>webmailRedoy@redoytime.net</span>

            <span class="footer_info" style="font-weight: 700;">Social Media Link &nbsp;&nbsp;<i class="fas fa-link"></i></span><br><br>
            <ul class="icon_footer">
                <li><a class="header_123_icon" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="header_123_icon" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="header_123_icon" href="#"><i class="fab fa-linkedin-in"></i></a></li>
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