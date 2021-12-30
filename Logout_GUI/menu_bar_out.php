<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!--  -->
</head>

<body>
  <!-- =============================  Menu Bar    ================================= -->
  <!-- =============================  Menu Bar    ================================= -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <!-- icon -->
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a style="transform: scale(1.5); padding:5px 10px;" class="navbar-brand" href="#">
        <i class="fas fa-rocket"></i>
        </a>
      </div>
    </nav>
    <!-- icon -->
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a style="border-bottom: 2px solid red;" class="navbar-brand" href="#">Home</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link disable" aria-current="page" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" aria-current="page" href="#">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="#">SERVICE</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link disable">PORTFOLIO</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Page Controll
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Home Page</a></li>
              <li><a class="dropdown-item" href="#Skills_go">Skills Page</a></li>
              <li><a class="dropdown-item" href="#about_go">About Page</a></li>
              <li><a class="dropdown-item" href="#author_go">Authoore Page</a></li>
              <li><a class="dropdown-item" href="#Portfolio_go">Portfolio Page</a></li>
              <li><a class="dropdown-item" href="#footer_go">Footer Page</a></li>
            </ul>
          </li>
          <!-- Dropdown -->
        </ul>
        <!-- Search -->
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <!-- Search -->

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link" style="margin-top: -25px;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            &nbsp;<img src="img/ruby.png" alt="">&nbsp;
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-in-alt" style="color: #FD7E14;"></i>&nbsp; Login</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt" style="color: #FD7E14;"></i>&nbsp; Logout</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog" style="color: #FD7E14;"></i>&nbsp; Setting</a></li>
          </ul>
        </li>
        <!-- Dropdown -->

      </div>
    </div>
  </nav>
  <!-- =============================  Menu Bar    ================================= -->
  <!-- =============================  Menu Bar    ================================= -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>