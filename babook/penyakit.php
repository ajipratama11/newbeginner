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
            <li class="nav-item">
              <a class="nav-link" href="index.php">KEMBALI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">PENYAKIT</h2>
            <h3 class="section-subheading text-muted">Kumpulan artikel yang berisi Penyakit yang menyerang balita untuk ibu dan balitanya</h3>
          </div>
   <?php
        
    global $mysqli;
    $jumlahDataPerhalaman = 3;
    $data = mysqli_query($koneksi, "SELECT * FROM artikel where jenis='Penyakit' order by id_artikel desc");
    $jumlahData = mysqli_num_rows($data);
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
    
    $artikel = mysqli_query($koneksi,"SELECT * FROM artikel where jenis='Penyakit' order by id_artikel desc limit $awalData, $jumlahDataPerhalaman ");
    while ($res=mysqli_fetch_array($artikel)) { ?>
  

  
 
    <div class="col-md-12">
        <div class="panel panel-default">
         <div class="panel-body">
          <h2 style="font-family: Georgia"><?php echo $res['judul']; ?></h2>
          <div class="info-meta">
           <ul class="pagination">
              <li style="margin-left: 10px;"><i style="margin-right: 5px;" class="far fa-calendar-alt"></i><?php echo $res['tanggal']; ?></li>
              
              <li style="margin-left: 10px;"><i style="margin-right: 5px;" class="fa fa-user"></i><?php echo $res['penulis']; ?></li>
              
            </ul>
          </div>
          <hr>
          
          <div class = "media">
            
             <div class = "media-body">
             
              <p><?php echo substr($res['isi'],0,500); ?> . . . . 
             </p>
             </div>
            <p style="text-align:right;">
            <a href="edukasi.php?edukasi=<?php echo $res['id_artikel']; ?>">
                <button class="btn btn-primary">Read More</button>
              </a>
            </p>
          </div>
          <hr>
          
         </div>
      </div>
     </div>  
<?php } ?>

</div>
</div>
<div class="pagination justify-content-center">
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
<?php if($halamanAktif > 1) : ?>
  <li class="page-item">
  <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">
    <span>&laquo;</span>
  </a>
<?php endif; ?>
</li>
<?php for ($i=1; $i<= $jumlahHalaman ; $i++) : ?>
  <li class="page-item active">
  <?php if ($i == $halamanAktif) : ?>
    <a class="page-link" href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
    <?php else : ?>
    </li>
    <li class="page-item">
      <a class="page-link" href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
    <?php endif; ?>
  </li>
<?php endfor; ?>
<?php if($halamanAktif < $jumlahHalaman) : ?>
  <li class="page-item">
  <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">
    <span>&raquo;</span>
  </a>
<?php endif; ?>
</li>
</ul>
</nav>
</div>

 </section>

    <!-- Footer -->
    <footer>
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
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
