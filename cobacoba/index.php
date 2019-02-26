<?php

    ob_start();
    session_start();
    if(isset($_SESSION['admin_username'])) header("location: products.php");
    include "config.php";
 

  /* PROSES LOGIN */
    if(isset($_POST['submit_login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql_login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

      if(mysqli_num_rows($sql_login)>0) {
        $row_admin = mysqli_fetch_array($sql_login);
        $_SESSION['admin_id'] = $row_admin['id'];
        $_SESSION['admin_username'] = $row_admin['username'];
        header("location: products.php");
      }else {
        header("location: index.php?login-gagal");
      }
    }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
      <span class="site-heading-lower">Business Casual</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Fresh Coffee</span>
              <span class="section-heading-lower">Worth Drinking</span>
            </h2>
            <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
            </p>
            <div class="intro-button mx-auto">
              <p><button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#tutorialModal">Login</button></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Our Promise</span>
                <span class="section-heading-lower">To You</span>
              </h2>
              <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="tutorialModal" tabindex="-1" role="dialog" aria-labelby="myLargeModalLabel" aria-hidden="true">
     
      <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            
            <div class="modal-body">
            <form action="" style="margin-bottom: 70px; " align="center" method="post" class="navbar-form">
              <button align="left-0" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             <h2 class="text-uppercase text-center">LOGIN ADMIN</h2><br><br>
             <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="username" class="form-control" value="" placeholder="username" required autofocus="">
             </div>
              <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="password" class="form-control" value="" placeholder="password" required autofocus="">
             </div>
            
                    <tr>
                  <td colspan="2">
                    <input class="btn btn-primary btn-xl" data-toggle="modal" type="submit" value="Kirim" name="submit_login">
                  </td>
                </tr>
              
            </form>
          </div>
          </div>
          </div>
       </div>
    </div>
    </div>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php

     mysqli_close($koneksi);
     ob_end_flush();

?>