<!DOCTYPE html>
<html>
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
<body>
      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529; height: 100px">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php#page-top">
          <img src="img/logos/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../indexlogin.php#page-top">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../indexlogin.php#services">pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../indexlogin.php#portfolio">portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../indexlogin.php#about">spotfoto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../indexlogin.php#contact">kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div>

            <form action="" style=" margin-bottom: 70px; margin-top: 130px; margin-left: 50px; margin-right: 50px; size: 100px" align="center" method="post" class="navbar-form">
                <div class="input-group">
                  <label style="margin-right: 10px">Nama Pelanggan : </label>
                  <input type="text" name="nama_pemesan" class="form-control" placeholder="" required autofocus="">
                </div>
          
        
                <br>

               <div class="input-group">     
                  <label style="margin-right: 40px">Fotografer : </label>
                  <input type="text" name="fotografer" class="form-control" placeholder="" required autofocus="">
                  <button><a class="portfolio-link" href="#fg" data-toggle="modal" data-dismiss="modal" > Pilih</a></button>
               </div><br>  

          <div class="input-group">         
            <label style="margin-right: 45px" for="tanggalpesan">Alamat</label>
            <input name="alamat" type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal"></input>
           </div><br>
   
     <div class="input-group">         
            <label style="margin-right: 45px" for="tanggalpesan">Tanggal Pemesanan</label>
    
            <input name="tanggal" type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal"></input>
           </div>
           <br>

     <div class="input-group">
                  
            <label style="margin-right: 50px" for="tanggalpesan">Waktu Pemesanan</label>
    
            <input name="waktu" type="time" class="form-control" id="waktupesan" placeholder="masukantanggal"></input>
           </div>
   
          <br>
                  <div class="input-group">
                  
                  <label style="margin-right: 75px">Total Bayar : </label>
                  <input type="text" name="total_bayar" class="form-control" placeholder="" required autofocus=""></input>
                </div>
                <br>
                  <div class="input-group">
                 
                  <label style="margin-right: 85px">Deskripsi : </label>
                  <textarea name="deskripsi" class="form-control" aria-label="With textarea"></textarea>
                </div>
          
                <br>
                  <center>
                  <div class="input-group" style="margin-left: 500px">
                    <input type="submit" style="background-color: #26de81; width: 100px;height: 50px"  name="daftar" class="btn btn-primary" value="PESAN">
                    <button ><a type="btn btn-primary" href="../../indexlogin.php">KEMBALI</a></button>
                  </div>
                <br>
          
                   </center>
     </form>
     </div>

     <!--bts-->
     <div class="daftar-modal modal fade" id="fg" tabindex="-1" role="dialog" aria-hidden="true">
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
          <form action="" style=" margin-bottom: 20px;"  method="post" class="navbar-form">
          
              
               <h2 class="text-uppercase text-center" style="font-size: 25px; background-color: #0984e3;" align="center">Silahan Pilih Fotografer Terbaik Kami</h2><br><br>
              <div class="row">
                <div class="col-lg-6" style="margin-left: 20px">
                <div class="">
                  <span class="input-group-addon"><i class="fas fa-user" style="  font-size: 20px; margin-left: 50px" > Nama : Gagas</i></span><br>
                  <span class="input-group-addon " ><i class="fas fa-home" style="  font-size: 20px; margin-left: 50px;margin-top: 10px" > jangkauan : Jember </i></span><br>
                  <div style="margin-left: 50px;margin-top: 10px">(⭐⭐⭐⭐⭐)</div>
                </div>
                <div>
                   <img class="rounded" src="../../img/about/travel.png" style="width: 400px; height: 250px;margin-left: 0px;margin-top: 5px" alt=""> <input type="submit" style="background-color: #26de81; margin-top: 60px;margin-left: 20px"  name="login" class="btn btn-primary" value="PILIH">
                </div> <br><hr>

                <div class="">
                  <span class="input-group-addon"><i class="fas fa-user" style="  font-size: 20px; margin-left: 50px" > Nama : Lontong</i></span><br>
                  <span class="input-group-addon " ><i class="fas fa-home" style="  font-size: 20px; margin-left: 50px;margin-top: 10px" > jangkauan : Lumajang </i></span><br>
                  <div style="margin-left: 50px;margin-top: 10px">(⭐⭐⭐⭐)</div>
                </div>
                <div>
                   <img class="rounded" src="../../img/about/wedd.png" style="width: 400px; height: 250px;margin-left: 0px;margin-top: 5px" alt=""> <input type="submit" style="background-color: #26de81; margin-top: 60px;margin-left: 20px"  name="login" class="btn btn-primary" value="PILIH">
                </div> <br><hr>
                 <div class="">
                  <span class="input-group-addon"><i class="fas fa-user" style="  font-size: 20px; margin-left: 50px" > Nama : Aprat</i></span><br>
                  <span class="input-group-addon " ><i class="fas fa-home" style="  font-size: 20px; margin-left: 50px;margin-top: 10px" > jangkauan : Bondowoso </i></span><br>
                  <div style="margin-left: 50px;margin-top: 10px">(⭐⭐⭐⭐⭐)</div>
                </div>
                <div>
                   <img class="rounded" src="../../img/about/travel.png" style="width: 400px; height: 250px;margin-left: 0px;margin-top: 5px" alt=""> <input type="submit" style="background-color: #26de81; margin-top: 60px;margin-left: 20px"  name="login" class="btn btn-primary" value="PILIH">
                </div> <br><hr>
                </div>
<!--Lain-->
                <div class="col-lg-5">
                <div class="">
                <span class="input-group-addon"><i class="fas fa-user" style="  font-size: 20px; margin-left: 50px" > Nama : Sodikin</i></span><br>
                  <span class="input-group-addon " ><i class="fas fa-home" style="  font-size: 20px; margin-left: 50px;margin-top: 10px" > jangkauan : Jember </i></span><br>
                  <div style="margin-left: 50px;margin-top: 10px">(⭐⭐)</div>
                </div>
                <div>
                   <img class="rounded" src="../../img/about/travel.png" style="width: 400px; height: 250px;margin-left: 0px;margin-top: 5px" alt=""> <input type="submit" style="background-color: #26de81; margin-top: 60px;margin-left: 20px"  name="login" class="btn btn-primary" value="PILIH">
                </div> <br><hr>

                <div class="">
                  <span class="input-group-addon"><i class="fas fa-user" style="  font-size: 20px; margin-left: 50px" > Nama : Sholeh</i></span><br>
                  <span class="input-group-addon " ><i class="fas fa-home" style="  font-size: 20px; margin-left: 50px;margin-top: 10px" > jangkauan : Lumajang </i></span><br>
                  <div style="margin-left: 50px;margin-top: 10px">(⭐⭐⭐⭐⭐)</div>
                </div>
                <div>
                   <img class="rounded" src="../../img/about/wedd.png" style="width: 400px; height: 250px;margin-left: 0px;margin-top: 5px" alt=""> <input type="submit" style="background-color: #26de81; margin-top: 60px;margin-left: 20px"  name="login" class="btn btn-primary" value="PILIH">
                </div> <br><hr>
                 <div class="">
                  <span class="input-group-addon"><i class="fas fa-user" style="  font-size: 20px; margin-left: 50px" > Nama : Budi</i></span><br>
                  <span class="input-group-addon " ><i class="fas fa-home" style="  font-size: 20px; margin-left: 50px;margin-top: 10px" > jangkauan : Bondowoso </i></span><br>
                  <div style="margin-left: 50px;margin-top: 10px">(⭐⭐⭐)</div>
                </div>
                <div>
                   <img class="rounded" src="../../img/about/travel.png" style="width: 400px; height: 250px;margin-left: 0px;margin-top: 5px" alt=""> <input type="submit" style="background-color: #26de81; margin-top: 60px;margin-left: 20px"  name="login" class="btn btn-primary" value="PILIH">
                </div> <br><hr>
                  
                </div>
                </div>
                     </form>
                   </div>
                 </div>
               </div>
              </div>
            </div>
          </div>
   

  <!-- Footer -->
    <footer style="background-color: #dfe4ea">
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


</body>
</html>