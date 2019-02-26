<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photo Now</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="img/logos/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">spotfoto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">kontak</a>
            </li>
            <li>           
            </li>
              <br>
          </ul>
            <?php 
            session_start();
            if($_SESSION['status']!="login"){
              header("location:../index.php?pesan=belum_login");
            }
            ?>
             <span class="fa fa-user" style="color: white; margin-left: 15px"> </span> <h4 style="font-size: 12px;margin-top: 10px; margin-left: 10px; color: white" >Hai <?php echo $_SESSION['nama_user'] ; ?>! |    <a href="logout.php" style="color: white"> Keluar</a> </h4>
             
             
        </div>
      </div>
    </nav>


    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">

          <div class="text-left"></div>
          <div class="intro-heading text-uppercase">Abadikan Momenmu sekarang juga!</div>
        </div>
      </div>
    </header>
<!--Modal Login Pelanggan-->

<!--<div class="login-modal modal fade" id="ModalLoginPelanggan" tabindex="-1" role="dialog" aria-hidden="true">
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
  <form method="post" action="cek_login.php">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="nama_user" placeholder="Masukkan username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="sandi" placeholder="Masukkan password"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="LOGIN"></td>
      </tr>
    </table>      
  </form>
                     
      						</div>
      				</div>
    		</div>
		</div>
</div>
</div>
</div>-->

<!--Modal Login Fotografer-->

<div class="login-modal modal fade" id="ModalLoginFG" tabindex="-1" role="dialog" aria-hidden="true">
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
 
          <form action="" style=" margin-bottom: 20px;" align="center" method="post" class="navbar-form">
            <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                  <span class="glyphicon glyphicon-remove"></span></a>
              
               <h2 class="text-uppercase text-center" style="font-size: 25px; background-color: #0984e3; " >MASUK - Fotografer</h2><br><br>
              
                <div class="input-group">
                  <span class="input-group-addon"><i class="fas fa-user" style="margin-right: 10px; margin-top: 5px ; font-size: 30px" ></i></span>
                  <input type="text" name="user" class="form-control" placeholder="Nama Pelanggan" required autofocus="">
                </div>
          
                      <br>
                <div class="input-group">
                  <span class="input-group-addon"><i  class="fas fa-lock" style="margin-right: 10px; margin-top: 5px;  font-size: 30px"></i></span>
                  <input type="text" name="password" class="form-control" placeholder="Kata sandi" required autofocus="">
                </div>
                <br><br>
              
                  <div class="input-group " style="margin-left: 150px">
                    <input type="submit"  style="background-color: #26de81"name="login" class="btn btn-primary" value="MASUK">
                  </div><br>


                  <p style=" font-size: 15px">Bukan Fotografer? Masuk Sebagai <a class="portfolio-link" href="#ModalLoginPelanggan" data-toggle="modal" data-dismiss="modal">Pelanggan</a></p>
          

                   
             
                     </form>
                     
                  </div>
              </div>
        </div>
    </div>
</div>
</div>
</div>

<!--Modal Daftar Pelanggan-->
<?php 
require'config.php';

if (isset($_POST["register"])) {
  
  if (daftar($_POST)>0) {
    echo "<script>
    alert('Selamat Bergabung!');
    </script>";
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}
if (isset($_POST["daftar"])) {
  
  if (fotografer($_POST)>0) {
    echo "<script>
    alert('Selamat Bergabung!');
    </script>";
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}
 ?>   

<div class="login-modal modal fade" id="ModalDaftarPelanggan" tabindex="-1" role="dialog" aria-hidden="true">
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
 
          <form action="" style=" margin-bottom: 70px;" align="center" method="post" class="navbar-form">
            <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                  <span class="glyphicon glyphicon-remove"></span></a>

               <h2 class="text-uppercase text-center" style="font-size: 25px; background-color:#0984e3 ">Daftar Pelanggan</h2><br><br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 10px">Nama Pelanggan : </label>
                  <input type="text" name="nama_user" class="form-control" placeholder="" required autofocus="">
                </div>
          
                      <br>              
          <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 85px">No. HP : </label>
                  <input type="text" name="no_hp" class="form-control" placeholder="" required autofocus="">
                </div>    <br>  
          <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 90px">Email : </label>
                  <input type="text" name="email" class="form-control" placeholder="" required autofocus="">
                </div>    <br>  
                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 90px">Sandi : </label>
                  <input type="password" name="sandi" class="form-control" placeholder="" required autofocus="">
                </div>     <br>  
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 35px">Ulangi Sandi : </label>
                  <input type="password" name="sandi2" class="form-control" placeholder="" required autofocus="">
                </div><br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 75px">Alamat : </label>
                  <input type="text" name="alamat" class="form-control" placeholder="" required autofocus="">
                </div>
          
                <br>
              		<center>
                  <div class="input-group" style="margin-left: 150px">
                    <input type="submit" style="background-color: #26de81"  name="register" class="btn btn-primary" value="DAFTAR">

                  </div><br>

                    <p style=" font-size: 15px">Bukan Pelanggan? Daftar Sebagai <a class="portfolio-link" href="#ModalDaftarFG" data-toggle="modal" data-dismiss="modal">Fotografer</a></p>
          
                   </center>
         						 </form>
          
      						</div>
      				</div>
    		</div>
		</div>
</div>
</div>
</div>

<!--Daftar Fg-->
<div class="daftar-modal modal fade" id="ModalDaftarFG" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
           <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                   
 
          <form action="" style=" margin-bottom: 70px;" align="center" method="post" class="navbar-form">
            <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                  <span class="glyphicon glyphicon-remove"></span></a>

               <h2 class="text-uppercase text-center" style="font-size: 25px; background-color:#0984e3 ">Daftar Fotografer</h2><br><br>
               <div class="row">
                     <div class="col-lg-6">
                                   <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 10px">Nama Fotografer : </label>
                            <input type="text" name="nama_fg" class="form-control" placeholder="" required autofocus="">
                          </div>
                    
                                <br>              
                           <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 85px">No. HP : </label>
                            <input type="text" name="no_hp" class="form-control" placeholder="" required autofocus="">
                          </div>    <br>  
                           <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 90px">Email : </label>
                            <input type="text" name="email" class="form-control" placeholder="" required autofocus="">
                          </div>    <br>  
                           <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 90px">Sandi : </label>
                            <input type="password" name="sandi" class="form-control" placeholder="" required autofocus="">
                          </div>     <br>  
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 35px">Ulangi Sandi : </label>
                            <input type="password" name="sandi2" class="form-control" placeholder="" required autofocus="">
                          </div><br>

                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 75px">Alamat : </label>
                            <input type="text" name="alamat" class="form-control" placeholder="" required autofocus="">
                          </div><br>

                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 50px">Gambar : </label>
                            <input type="file" name="gambar"  placeholder="" required autofocus="">
                          </div>
                  </div>

             <div class="col-lg-6 "> 
                 <div class="timeline-panel">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <label style="margin-right: 10px">Jangkauan Pemotretan: </label>
                    <input type="text" name="jangkauan" class="form-control" placeholder="" required autofocus="">
                  </div> <br>  
                     <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 70px">Deskripsi Profil: </label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="" required autofocus="">
                     </div> <br> 
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 150px">Tarif: </label>
                            <input type="text" name="tarif" class="form-control" placeholder="" required autofocus="">
                     </div> <br> 
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <label style="margin-right: 105px">Jenis Foto: </label>
                            <input type="text" name="jenis_foto" class="form-control" placeholder="" required autofocus="">
                     </div> <br>  
                </div>
            </div>
          </div> <br>              
                
                
                  <div class="input-group" style="margin-left: 400px">
                    <input type="submit" style="background-color: #26de81"  name="daftar" class="btn btn-primary" value="DAFTAR">
                  </div>
                    <p style=" margin-top: 15px; font-size: 15px">Bukan Fotografer? Daftar Sebagai  <a class="portfolio-link" href="#ModalDaftarPelanggan" data-toggle="modal" data-dismiss="modal">Pelanggan</a></p>
          
              
                     </form>
          
                  </div>
              </div>
        </div> 
    </div>
</div>
</div>
</div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    <!-- Services -->
     <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Pesan</h2>
            <h3 class="section-subheading text-muted">Silahkan pilih pemesanan.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
             <a class="portfolio-link" href="jquery-locationpicker-plugin-master/examples/simple.php" ><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-heart fa-stack-1x fa-inverse"></i>
            </span></a>
           <h4 class="service-heading">Prewedding/Wedding</h4>
            <p class="text-muted">Foto preweeding ataupun weeding secara profesional.</p>
          </div>
          <div class="col-md-4">
            <a class="portfolio-link" href="#LoginDulu" data-toggle="modal" data-dismiss="modal"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-plane fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Travelling</h4>
            <p class="text-muted">Foto kemana saja disaat Anda travelling.</p>
          </div>
          <div class="col-md-4">
            <a class="portfolio-link" href="#LoginDulu" data-toggle="modal" data-dismiss="modal"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-female fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Modeling</h4>
            <p class="text-muted">Foto dengan frofesional dengan pose diarahkan oleh fotografer, sendiri ataupun bersama.</p>
          </div>
          <div class="col-md-4">
            <a class="portfolio-link" href="#LoginDulu" data-toggle="modal" data-dismiss="modal"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-bars fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Things</h4>
            <p class="text-muted">Foto produk, gedung, ataupun tempat.</p>
          </div>
          <div class="col-md-4">
            <a class="portfolio-link" href="#LoginDulu" data-toggle="modal" data-dismiss="modal"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-calendar fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Event</h4>
            <p class="text-muted">Abadikan momenmu seperti acara ulang tahun, acara resmi dan sejenisnya.</p>
          </div>
          <div class="col-md-4">
            <a class="portfolio-link" href="#LoginDulu" data-toggle="modal" data-dismiss="modal"><span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
            </span></a>
            <h4 class="service-heading">Lainnya</h4>
            <p class="text-muted">Pesan ke fotografer dengan permintaan khusus.</p>
          </div>
        </div>
      </div>
    </section>

  <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lihatlah hasil dari para fotografer</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Travelling</h4>
              <p class="text-muted">Ranu Kumbolo</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Wedding</h4>
              <p class="text-muted">Bondowoso</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Model</h4>
              <p class="text-muted">Ijen View</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>THINGS</h4>
              <p class="text-muted">LIPPO PLAZA</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Travelling</h4>
              <p class="text-muted">J88 Jember</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Event</h4>
              <p class="text-muted">Jakcloth Jember</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Spot Foto -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Spot Foto</h2>
            <h3 class="section-subheading text-muted">Pilih Spot Foto Rekomendasi Dari Kami</h3>
          </div>

        </div>
        <div class="row" style="text-align: center;">
          <div class="col-lg-4">
              <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-home fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="spot/bwi.php">Banyuwangi</a></h4>
          </div>
          <div class="col-lg-4">
              <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-tree fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="spot/lmj.php">Lumajang</a></h4>
          </div>
          <div class="col-lg-4">
               <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-leaf fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="spot/jmbr.php">Jember</a> </h4>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-lg-7 mb-5">
              <img src="img/about/wedd.png" alt="">
          </div>

            <div class="col-lg-5 col-lg-offset-1 mt-5 "> 
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Wisata Bromo</h4>
                    <h4 class="subheading">Pegunungan Tengger</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                  <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-top: 20px" href="#services">PESAN</a>
                  <a class="fa fa-map-maker btn btn-primary btn-xl "  style="margin-right: 30px; margin-top: 20px" target="_blank" href="https://www.google.com/maps/@-7.8948066,113.8305104,12.29z"><i class="fa fa-map-marker"></i> Lokasi </a>
                </div>
            </div>
           
              <div class="col-lg-5 col-lg-offset-1 mt-5">
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                   <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-top: 20px" href="#services">PESAN</a>
                    <a class="fa fa-map-maker btn btn-primary btn-xl "  style="margin-right: 30px; margin-top: 20px" target="_blank" href="https://www.google.com/maps/@-7.8948066,113.8305104,12.29z"><i class="fa fa-map-marker"></i> Lokasi </a>
                </div>
               
              </div>
               <div class="col-lg-7 ">
              
                <div class="timeline-image">
                  <img  src="img/about/travel.png" alt="">
                </div>
                </div>
              
              <div class="col-lg-6 text-center mt-5">
                <div class="timeline-image">
                  <img  src="img/about/wedd.png" alt="">
                </div>
              </div>
              <div class="col-lg-5 col-lg-offset-1 mt-5" style="margin-left: 80px" >
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                   <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-top: 20px" href="#services">PESAN</a>
                    <a class="fa fa-map-maker btn btn-primary btn-xl "  style="margin-right: 30px; margin-top: 20px" target="_blank" href="https://www.google.com/maps/@-7.8948066,113.8305104,12.29z"><i class="fa fa-map-marker"></i> Lokasi </a>
                </div>
              </div>
              <div class="col-lg-6 text-right mt-5">
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                  </div>
                   <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-top: 20px" href="#services">PESAN</a>
                    <a class="fa fa-map-maker btn btn-primary btn-xl "  style="margin-right: 30px; margin-top: 20px" target="_blank" href="https://www.google.com/maps/@-7.8948066,113.8305104,12.29z"><i class="fa fa-map-marker"></i> Lokasi </a>
                </div>
             
              <div class="col-lg-6 text-center mt-5">
                <div class="timeline-image">
                  <img  src="img/about/4.jpg" alt="">
                </div>
              </div>       
            
          
        </div>-->
      </div>
    </section>

    <!-- Team -->
    <!--<section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Kay Garland</h4>
              <p class="text-muted">Lead Designer</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Diana Pertersen</h4>
              <p class="text-muted">Lead Developer</p>
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
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>-->

    <!-- Clients 
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Kritik dan saran.</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; devTripleA</span>
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
  <!-- Modal 1 -->
    <div class="login-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Travelling</h2>
                  <p class="item-intro text-muted">Ranu Kumbolo, Semeru, Lumajang</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/1.JPG" alt="">
                  <p>Pemilihan kontras serta ISO yang tepat, membuat foto lebih fresh sesuai dengan air Ranu Kumbolo</p>
                  <ul class="list-inline">
                    <li>Date: May 2017</li>
                    <li>Client: Aji Pratama</li>
                    <li>Photography : Rifai</li>
                  </ul>
                  <button class="btn btn-primary btn-xl" data-dismiss="modal" type="button">
                    Kembali</button>
                     <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-left: 10px " href="#services">Pesan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="login-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Wedding</h2>
                  <p class="item-intro text-muted">Bondowoso</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/2.jpg" alt="">
                  <p>Dengan akurasi warna serta sudut ambil yang baik membuat pasangan lebih terlihat mesra</p>
                  <ul class="list-inline">
                    <li>Date: October 2017</li>
                    <li>Client: Lasmana&Monika</li>
                    <li>Photography : Rizal</li>
                  </ul>
                     <button class="btn btn-primary btn-xl" data-dismiss="modal" type="button">
                    Kembali</button>
                     <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-left: 10px " href="jquery-locationpicker-plugin-master/examples/simple.php">Pesan</a>                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="login-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Model</h2>
                  <p class="item-intro text-muted">Ijen View Hotel</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/3.jpg" alt="">
                  <p>Dengan Sudut ambil serta pencahayaan yang pas, membuat model lebih menawan</p>
                  <ul class="list-inline">
                    <li>Date: July 2017</li>
                    <li>Client: Nisya Sabyan</li>
                    <li>Photogragphy: Aji</li>
                  </ul>
                  <button class="btn btn-primary btn-xl" data-dismiss="modal" type="button">
                    Kembali</button>
                     <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-left: 10px " href="#services">Pesan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="login-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Things</h2>
                  <p class="item-intro text-muted">LIPPO PLAZA JEMBER</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/4.jpg" alt="">
                  <p>Pengambilan sudut yang pas dengan gedung yang lebar dan tinggi membuat Lippo plaza yang baru dibuka lebih tertarik untuk dikunjungi</p>
                  <ul class="list-inline">
                    <li>Date: January 2016</li>
                    <li>Client: Direktur Lippo Plaza</li>
                    <li>Photography : Yosef</li>
                  </ul>
                  <button class="btn btn-primary btn-xl" data-dismiss="modal" type="button">
                    Kembali</button>
                     <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-left: 10px " href="#services">Pesan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="login-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Travelling</h2>
                  <p class="item-intro text-muted">J88 Jelbuk Jember</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/5.jpg" alt="">
                  <p>Pengambilan posisi di bawah pohon dengan latar gunung argopuro yang memanjang, dan akurasi fokus yang pas, membuat foto lebih elegan</p>
                  <ul class="list-inline">
                    <li>Date: March 2017</li>
                    <li>Client: Weni</li>
                    <li>Photography: Lukman</li>
                  </ul>
                  <button class="btn btn-primary btn-xl" data-dismiss="modal" type="button">
                    Kembali</button>
                     <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-left: 10px " href="#services">Pesan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="login-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Event</h2>
                  <p class="item-intro text-muted">Jakcloth Jember</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/6.jpg" alt="">
                  <p>Pengambilan dokumentasi di acara yang bear benar besar</p>
                  <ul class="list-inline">
                    <li>Date:17 January 2018</li>
                    <li>Client: Aji dan Nisya</li>
                    <li>Photography : Nesha A</li>
                  </ul>
                   <button class="btn btn-primary btn-xl" data-dismiss="modal" type="button">
                    Kembali</button>
                     <a class="btn btn-primary btn-xl js-scroll-trigger"  style="margin-right: 30px; margin-left: 10px " href="#services">Pesan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
