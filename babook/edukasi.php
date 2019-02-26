<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BABOOK</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


   

 

    <!-- Custom styles for this template -->
      <link href="./css/artikel.css" rel="stylesheet">
    <link href="./css/agency.min2.css" rel="stylesheet">
    <link href="./css/agency2.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Artikel Babook</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
               <li class="nav-item">
              <a class="nav-link" href="hiburan.php">HIBURAN</a>
            <!--</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="tips.php">TIPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="penyakit.php">PENYAKIT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
         
  
<div class="container" style="margin-top:40px">
  
  <?php
		$id_artikel = $_GET['edukasi'];
		if (isset($_GET['edukasi'])) { 
global $mysqli;
		
		$que = mysqli_query($koneksi,"SELECT * FROM artikel where id_artikel ='$id_artikel' ");
		while ($res=mysqli_fetch_array($que)) { ?>
	
<div class="container" style="margin-top:40px">
	<div class="row">
		<div class="col-md-12">
			  <div class="panel panel-default">
			   <div class="panel-body">
			    <div class="post-detail">
				  <h1 style="font: verdana;"><?php echo $res['judul']; ?></h1>
				  
					<div class="info-meta">
						<ul class="pagination">
              <li style="margin-left: 10px;"><i style="margin-right: 5px;" class="far fa-calendar-alt"></i><?php echo $res['tanggal']; ?></li>
              
              <li style="margin-left: 10px;"><i style="margin-right: 5px;" class="fa fa-user"></i><?php echo $res['penulis']; ?></li>
              
            </ul>
					</div>
				  <hr>
				  <p>
				  <?php echo $res['isi']; ?>
				  </p>
				
				  </div>
						  
				  
			   </div>
			   
			</div>
		 </div>
 </section>


 
   

    <!-- Footer -->
    <footer>
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; BABOOK 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
<?php } } ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
