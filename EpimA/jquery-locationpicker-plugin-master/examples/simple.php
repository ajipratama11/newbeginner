<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <!-- Bootstrap stuff -->
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="../dist/locationpicker.jquery.min.js"></script>
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
    .pac-container {
        z-index: 99999;
    }
    </style>

    <title>testPesan - Photo Now</title>
     <!-- Bootstrap core CSS -->
     <link href="jquery-locationpicker-plugin-master/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom fonts for this template -->
     <link href="../../css/agency.min.css" rel="stylesheet" type="text/css">
     <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
 

     <!-- Custom styles for this template -->
     <link href="css/agency.minCopy.css" rel="stylesheet">
     
        
</head>
<body id="page-top">

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
      <div class="container">
       <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"> -->
          <img src="../../img/logos/logo.png"></a>
        
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="../../indexlogin.php#page-top">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" style="font-size:  15px" href="../../indexlogin.php#services">Pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="../../indexlogin.php#portfolio">portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="../../indexlogin.php#about">spotfoto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="../../indexlogin.php#contact">kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<?php 
        require'../../config.php';
        $fotografer=query("SELECT * FROM fotografer");

if (isset($_POST["daftar"])) {
  
  if (pelanggan($_POST)>0) {
    echo "<script>
    alert('Pemesanan anda berhasil, fotorafer akan menghubungi anda!');
    </script>";
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Pesan</h2>
            <h3 class="section-subheading text-muted">Isi data pendaftaran</h3>
            <hr style="margin-bottom: 40px">
          </div>
        </div>
		          

<body>
  <div class="row">
  <div class="col-lg-6 " align="center" >
    <form id="coba" action="" style=" margin-bottom: 70px; width: 500px;" method="post" class="navbar-form">
                <div class="input-group">
                  
                  <label style="margin-right: 30px">Nama Pelanggan : </label>
                  <input type="text" name="nama_pemesan" class="form-control" placeholder="" required autofocus="">
                </div>
          
                      <br>              
          <div class="input-group">
                  
                  <label style="margin-right: 60px">Jenis Foto  : </label>
                    <select class="custom-select" name="jenis_foto">
                    <option selected value="Wedding">Wedding</option>
                  </select>
                </div>
                <br>
              <div class="input-group">
                  <label style="margin-right: 10px">Masukkan nama fotografer : </label>
                  <input type="text" name="fotografer" class="form-control" placeholder="" required autofocus=""><button style="margin-left: 10px"><a class="portfolio-link" href="#fg" data-toggle="modal" data-dismiss="modal" href="#fg" > Cari</a></button>
                </div><br>  
               
    <!-- /.modal -->
    <!--End Google Maps-->
   
     <div class="input-group">        
            <label style="margin-right: 65px" for="tanggalpesan">Alamat :</label>
            <input name="alamat" type="text" class="form-control" id="tanggalpesan" placeholder="Isi Alamat Pengambilan Foto" style="margin-left: 10px"></input>
            </div>
           <br>
           <div class="input-group">
             <label style="margin-right:" for="tanggalpesan">Pakai Map :</label>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32658829.162158355!2d99.3987350321674!3d-2.2750386744942226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1541095443209" width="380" height="250" frameborder="0" style="border:0;margin-left: 110px;" allowfullscreen></iframe>
           </div><br>

           <div class="input-group">
                  
            <label style="margin-right:20px" for="tanggalpesan">Tanggal Pemesanan :</label>
    
            <input name="tanggal" type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal"></input>
           </div>
           <br>

         <div class="input-group">
                  
            <label style="margin-right: 30px" for="tanggalpesan">Waktu Pemesanan :</label>
    
            <input name="waktu" type="time" class="form-control" id="waktupesan" placeholder="masukantanggal"></input>
           </div>
                <br>
                  <div class="input-group">
                 
                  <label style="margin-right:75px">Deskripsi : </label>
                  <textarea name="deskripsi" class="form-control" aria-label="With textarea"></textarea>
                </div><br>
              </div>
    <div class="col-lg-6" style="margin-top: 100px">
              <h1 style="margin-bottom: 20px">Cara Pembayaran :</h1>
                  <div class="input-group">
                <label style="margin-right: 65px">Transaksi :</label>
                <select class="custom-select" name="status" >
                  <option value="belum lunas">--Pilih Bank--</option>
                  <option value="lunas" >BRI (0021-01-162072-50-9)</option>
                </select>
              </div><br>
              <div class="input-group">
                  <label style="margin-right: 30px">Kode Pembayaran : </label>
                  <input type="text"  class="form-control" placeholder="Masukkan Kode Pembayaran" required autofocus="">
                </div><br>
                <p style="color: red"><i>*NB: Kode pemabayaran diperoleh setelah anda transfer ke no.rek diatas!</i></p><br>
                 <div class="input-group" style="margin-left: 170px;margin-top: 20px">
                    <input type="submit" style="background-color: #26de81; width: 75px;height: 30px;margin-right: 30px"  name="daftar" class="btn btn-primary" value="PESAN">
                    <button class="btn btn-primary" ><a style="color: white" href="../../indexlogin.php">KEMBALI</a></button>
                </div> 
                <br>
                </div>

   </div>  
 
                   

   </body>
   <!--modalPilih-->
   <div class="daftar-modal modal fade"  id="fg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" style="margin-top: 80px">
        <div class="modal-content">
          <div class="container">
           <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
          <form action="" style=" margin-bottom: 20px;"  method="post" class="navbar-form">
          



     <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Jangkauan</th>
                <th>Tarif Per-sesi</th>
                <th>Portfolio</th>
                <th>Portfolio</th>
                <th>Portfolio</th>
               

              </tr>
            </thead> 
            <?php $i=1; ?>
            <?php foreach ($fotografer as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <option><td><?= $row["nama_fg"]; ?></td>
                 <td><?= $row["alamat"]; ?></td>
                 <td><?= $row["jangkauan"]; ?></td>
                 <td><?= $row["tarif"]; ?></td>
                 <td><img src="../../img/about/<?=  $row["gambar"]; ?>" width="150px" height="100px"></td>
                 <td><img src="../../img/about/<?=  $row["gambar2"]; ?>" width="150px" height="100px"></td>
                 <td><img src="../../img/about/<?=  $row["gambar2"]; ?>" width="150px" height="100px"></td></option>

                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

               <!--modal bayar-->

              
<!-- Footer -->
   <div class="login-modal modal fade" id="pilihfotografer" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto mt-5">
                <div class="modal-body">
               <p> Anda Harus Login Terlebih Dahulu!</p> 
                     
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
      <script src="../../js/contact_me.js"></script>
      <script src="js/contact_me.js"></script>
  
      <!-- Custom scripts for this template 
      <script src="js/agency.min.js"></script>

</html>