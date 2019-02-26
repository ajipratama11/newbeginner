<?php
require 'fungsijadwal.php';
session_start();
  ?>
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
    <link href="./css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Babook</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Cek Perkembangan</a>
            </li>
           
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Menu Gizi anak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">TPDS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#artikel">Artikel</a>
            </li>
            <li>
            </li>

          <br>
          </ul>
            <?php 
            
            if($_SESSION['status']!="login"){
              header("location:index.php?pesan=belum_login");
            }
            ?>
             <span class="fa fa-user" style="color: white; margin-left: 15px"> </span> <h4 style="font-size: 12px;margin-top: 10px; margin-left: 10px; color: white" >Hai <?php echo $_SESSION['nama'] ; ?>! |    <a href="logout.php" style="color: white"> Keluar</a> </h4>
            </div> 
        </div>
     
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="text-center">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bayi Book</div>
          <div class="intro-heading text-uppercase">Yuk CEK</div>
  
           
          <a class="btn btn-primary text-uppercase js-scroll-trigger" href="#services">Pantau</a>

        </div>
      </div>
      </div>
    </header>



    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Cek Perkembangan</h2>
            <h3 class="section-subheading text-muted">Baca artikel untuk menambah pengetahuan</h3>
          </div>
        </div>
       <div>
        

<button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#anak">Anak</button>
<a href="kms.php"><button type="button" class="btn btn-primary btn-xl">CEK BB</button></a>
<br>
<br>
<div autocomplete="off" >
<?php 

if (isset($_POST["anak"])) {
  
  if (anak($_POST)>0) {
    echo "<script>
    alert('Selamat Bergabung!');
    </script>";

    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}

 ?> 
<div class="modal fade" id="anak" tabindex="-1" role="dialog" aria-labelby="myLargeModalLabel" aria-hidden="true">
    
      <div class="modal-dialog modal-col" role="document">
       <div class="modal-content">
            
            <div class="modal-body">
            <form action="" style="margin: 20px 40px " align="center" autocomplete="off" method="post" class="navbar-form">
                <div class="input-group">
                   <label style="margin-right: 38px">Nama Anak : </label>
                  <input type="name" name="nama_anak" class="form-control" placeholder="" autocomplete="off" >
                </div>
                <br>
                <div class="input-group">
                  <label style="margin-right: 38px">Jenis Kelamin : </label>
                  <select class="custom-select" name="jk">
                    <option selected value="l">Laki-Laki</option>
                    <option selected value="p">Perempuan</option>
                  </select>
                </div>
                <br>
                <div class="input-group">     
                  <label style="margin-right: 85px">umur : </label>
                  <input type="text" name="umur" class="form-control" placeholder="Dalam bulan" required autocomplete="off">
          
               </div>
           <br>
                  <div class="input-group">
                  <label style="margin-right: 85px">Berat : </label>
                  <input type="text" name="berat" class="form-control" placeholder="Dalam Kg" required autocomplete="off">
                
                </div>
                <br>
                <div class="input-group">
                  <label style="margin-right: 78px">Tinggi : </label>
                  <input type="text" name="tinggi" class="form-control" placeholder="Dalam cm" required autocomplete="off">
                  
                </div>
                <br>
                 <div class="input-group">     
                  
                  
                  <input type="hidden" name="tanggal_cek" class="form-control"  placeholder="" required autocomplete="off" value=<?php date ("Y-m-d")  ?>>
               </div>
               <br>
                <div class="input-group">     
                  <input  type="hidden"  name="id_ibu" class="form-control"  placeholder="" required autocomplete="off" value=<?php echo $_SESSION['nama'] ; ?>>
               </div>
                 <div>
              <input class="btn btn-primary" data-toggle="modal" type="submit" value="DAFTAR" name="anak">
              </div>
          </form>
          
          </div>
          </div>
          </div>
       </div>
     </div>

         <?php
$nama = $_SESSION['nama'] ;
$anak=query("SELECT * FROM anak where id_ibu='$nama'");

 ?>
   <!-- Menu gizi -->
   <!-- 1 -->
  
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Jenis Kelamin (L/P)</th>
                <th>Tanggal Data Masuk</th>
                <th>Aksi</th>
                
               
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($anak as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_anak"]; ?></td>
                <td><?= $row["jk"]; ?></td>
                <td><?= $row["tanggal_cek"]; ?></td>
                 <td><a type="button" class="btn btn-block btn-danger" href="grafik.php?nama_anak=<?= $row["nama_anak"]; ?>">Lihat Grafik</a></td>

                
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>               


   

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Jadwal Vaksin dan PPI</h2>
            <h3 class="section-subheading text-muted">Pahami tentang penjadwalan Imunisasi sesuai usia balita anda</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/1.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Vaksin</h4>
              <p class="text-muted">Wajib imunisasi bagi balita</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Progam Pengembangan Imunisasi (PPI)</h4>
              <p class="text-muted">Saran imunisasi bagi balita</p>
            </div>
          </div>
 
         
          
         
        </div>
      </div>
    </section> 





    <!-- About -->
    <section id="about">
     <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">MENU GIZI SEHAT</h2>
            <h3 class="section-subheading text-muted">sudahkah asupan gizi balita terpenuhi?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="team-member">
              <a data-toggle="modal" data-target="#menu1"><img class="mx-auto rounded-circle" src="img/team/1.jpg" alt=""></a>
              <h4>0-6 bulan</h4>
              <p class="text-muted">Menu gizi sehat</p>
              <ul class="list-inline social-buttons">
                              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="team-member">
               <a data-toggle="modal" data-target="#menu2"><img class="mx-auto rounded-circle" src="img/team/2.jpg" alt=""></a>
              <h4>6-12 bulan</h4>
              <p class="text-muted">Menu gizi sehat</p>
              <ul class="list-inline social-buttons">
          
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="team-member">
               <a data-toggle="modal" data-target="#menu3"><img class="mx-auto rounded-circle" src="img/team/3.jpg" alt=""></a>
              <h4>Diatas 1 tahun</h4>
              <p class="text-muted">Menu gizi sehat </p>
              <ul class="list-inline social-buttons">
                
              </ul>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
       <!-- <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div> -->
     
 <!-- Team -->
    <script src="js/pilihumur.js"></script>
       
    <section class="bg-light" id="team">

    	   <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tahapan Perkembangan dan Stimulasi</h2>
            <h3 class="section-subheading text-muted">Kegiatan merangsang kemampuan dasar anak, agar anak tumbuh kembang secara optimal</h3>
            <hr>
             <h3 >Silahkan Lihat berdasarkan pengelompokkan umur (bulan) </h3>
               <hr>
          </div>
        </div>
      <div class="row text-center">
          <div class="col-md-3 col-sm-4">
            <div class="team-member">
             <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp1">0-3</button>
             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
             <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp2">3-6</button>
             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
       <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp3">6-9</button>
             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
             <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp4">9-12</button>             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
           <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp5">12-18</button>
             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
          <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp6">18-24</button>
             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
          <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp7">24-36</button>
             </div>
           </div>
           <div class="col-md-3 col-sm-4">
            <div class="team-member">
           <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp8">36-48</button>
             </div>
           </div>
            <div class="col-md-6 col-sm-12">
            <div class="team-member">
              <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp9">48-60</button>
             </div>
           </div>
           <div class="col-md-6 col-sm-12">
            <div class="team-member">
              <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#kpsp10">60-72</button>
                           </div>
           </div>

     
    </section>



    <!-- Contact -->
    <div>
    <section id="artikel">
     <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ARTIKEL</h2>
            <h3 class="section-subheading text-muted">Baca artikel untuk menambah pengetahuan</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <a href="hiburan.php"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-smile fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Hiburan</h4>
            <p class="text-muted">Berbagai hiburan untuk balita.<br>Untuk mengembangkan motorik anak.</p>
          </div>
          <div class="col-md-4">
            <a href="tips.php"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-info fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Tips</h4>
            <p class="text-muted">Tips dan trik agar lebih efisien.</p>
          </div>
          <div class="col-md-4">
            <a href="penyakit.php"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-user-md fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Penyakit</h4>
            <p class="text-muted">Dapatkan pengetahuan tentang penyakit.<br>Serta, penanganan untuk penyakit.</p>
          </div>
        </div>
      </div>
    </section>
    </div>

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

    <!-- Portfolio Modals -->
      <script src="js/cari.js"></script>
<?php


$jadwal_vaksin=query("SELECT * FROM jadwal_vaksin");



 ?>

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                 
                  <div class="input-group col-md-6">
                  
                 <label style="margin-top: 5px"><strong>Cari : </strong></label><br>
               <input style="padding: 20px;padding-left: 20px ; margin-left: 10px; " class="form-control" type="text" id="carivaksin" onkeyup="myFunction1()" placeholder="Cari berdasarkan umur/vaksin" autocomplete="off">
                </div>
                
                <br>
                  <form>
                     <div class="box-body">
              <table id="vaksin" class="table table-bordered table-striped">
                
               <thead>
            <tr>
                <th>No</th>
                <th>Umur</th>
                <th>Vaksin</th>
                <th>Deskripsi</th>
              
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($jadwal_vaksin as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["bulan"]; ?></td>
                <td><?= $row["nama_vaksin"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
        
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
       
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php

$jadwal_ppi=query("SELECT * FROM jadwal_ppi");


 ?>
    <!-- Modal 2 -->

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
               
                  
                  
                
                
              <div class="input-group col-md-6">
                <label style="margin-top: 5px"><strong>Cari : </strong></label><br>
               <input style="padding: 20px;padding-left: 20px ; margin-left: 10px; " class="form-control" type="text" id="carippi" onkeyup="myFunction2()" placeholder="Cari berdasarkan umur/vaksin" autocomplete="off">
              </div>
                <br>
                 <form action="">
                     <div class="box-body">
              <table id="ppi" class="table table-bordered table-striped">
                
                <thead>
            <tr>
                <th>No</th>
                <th>Umur</th>
                <th>PPI</th>
                <th>Deskripsi</th>
              
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($jadwal_ppi as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["bulan"]; ?></td>
                <td><?= $row["nama_ppi"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
        
            
     
            
  
        
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          
           
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <?php

$menu=query("SELECT * FROM menu where kelompok_umur='0-6'")

 ?>
   <!-- Menu gizi -->
   <!-- 1 -->
    <div class="portfolio-modal modal fade" id="menu1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            <tr>
                <th>No</th>
               
                <th>Makan Pagi</th>
                <th>Makan Siang</th>
                <th>Makan Sore</th>
                <th>Makanan Pendamping</th>
                <th>Deskripsi</th>
                
               
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($menu as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
             
                <td><?= $row["makan_pagi"]; ?></td>
                 <td><?= $row["makan_siang"]; ?></td>
                <td><?=  $row["makan_sore"]; ?></td>
                <td><?= $row["makanan_pendamping"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>

                
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 2 -->
 <?php

$menu=query("SELECT * FROM menu where kelompok_umur='6-12'")

 ?>
    <div class="portfolio-modal modal fade" id="menu2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
          <tr>
                <th>No</th>
            
                <th>Makan Pagi</th>
                <th>Makan Siang</th>
                <th>Makan Sore</th>
                <th>Makanan Pendamping</th>
                <th>Deskripsi</th>
                
               
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($menu as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
             
                <td><?= $row["makan_pagi"]; ?></td>
                 <td><?= $row["makan_siang"]; ?></td>
                <td><?=  $row["makan_sore"]; ?></td>
                <td><?= $row["makanan_pendamping"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>

                
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 3 -->
 <?php

$menu=query("SELECT * FROM menu where kelompok_umur='Diatas 1 tahun'")

 ?>
    <div class="portfolio-modal modal fade" id="menu3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                <th>No</th>
               
                <th>Makan Pagi</th>
                <th>Makan Siang</th>
                <th>Makan Sore</th>
                <th>Makanan Pendamping</th>
                <th>Deskripsi</th>
                
               
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($menu as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
              
                <td><?= $row["makan_pagi"]; ?></td>
                 <td><?= $row["makan_siang"]; ?></td>
                <td><?=  $row["makan_sore"]; ?></td>
                <td><?= $row["makanan_pendamping"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>

                
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 4 -->
 <?php

$kpsp=query("SELECT * FROM kpsp where umur='0-3'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 5 -->
 <?php

$kpsp=query("SELECT * FROM kpsp where umur='3-6'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 6 -->
 <?php

$kpsp=query("SELECT * FROM kpsp where umur='6-9'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 7 -->
 <?php

$kpsp=query("SELECT * FROM kpsp where umur='9-12'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 8 -->
 <?php

$kpsp=query("SELECT * FROM kpsp where umur='12-18'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

$kpsp=query("SELECT * FROM kpsp where umur='18-24'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

$kpsp=query("SELECT * FROM kpsp where umur='24-36'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

$kpsp=query("SELECT * FROM kpsp where umur='36-48'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

$kpsp=query("SELECT * FROM kpsp where umur='48-60'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

$kpsp=query("SELECT * FROM kpsp where umur='60-72'")

 ?>
    <div class="portfolio-modal modal fade" id="kpsp10" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <form>
                     <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                 <thead>
            <tr>
             
                <th>Jenis Gerak</th>
                <th>Deskripsi</th>
             
               </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($kpsp as $row):  ?>
            <tr>
               
                 <td><?= $row["gerak"]; ?></td>
                 <td><?= $row['isi']; ?></td>
                
            
     
            
  
        
                </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
                </form>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Bootstrap core JavaScript -->

    <script src="js/script.js"></script>
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
