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
	<title></title>
</head>
<body>
	<!-- cek pesan notifikasi -->
	
	<br/>
	<br/>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
 
          <form action="tes_login.php" style=" margin-bottom: 20px;" align="center" method="post" class="navbar-form">
            <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                  <span class="glyphicon glyphicon-remove"></span></a>
              
               <h2 class="text-uppercase text-center" style="font-size: 25px; background-color: #0984e3; " >MASUK - Fotografer</h2><br><br>
              
                <div class="input-group">
                  <span class="input-group-addon"><i class="fas fa-user" style="margin-right: 10px; margin-top: 5px ; font-size: 30px" ></i></span>
                  <input type="text" name="nama_fg" class="form-control" placeholder="Nama Pelanggan" required autofocus="">
                </div>
          
                      <br>
                <div class="input-group">
                  <span class="input-group-addon"><i  class="fas fa-lock" style="margin-right: 10px; margin-top: 5px;  font-size: 30px"></i></span>
                  <input type="password" name="sandi" class="form-control" placeholder="Kata sandi" required autofocus="">
                </div>
                <br><br>
              
                  <div class="input-group " style="margin-left: 250px">
                    <input type="submit" class="btn btn-primary" value="MASUK">
                    <button class="btn btn-primary" style="margin-left: 10px" ><a type="btn btn-primary" style="color: white" href="index.php">KEMBALI</a></button>
                  </div><br>


                  <p style=" font-size: 15px">Bukan Fotografer? Masuk Sebagai <a class="portfolio-link" href="login.php" data-toggle="modal" data-dismiss="modal">Pelanggan</a> atau <a href="index.php">Daftar</a></p>
                  
					    			<?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan'] == "gagal"){
                        echo '<i><p style="color:red">Login gagal! username atau password salah! </p><i>';
                      }else if($_GET['pesan'] == "logout"){
                        echo '<i><p style="color:red">Anda berhasil keluar! </p><i>';
                      }else if($_GET['pesan'] == "belum_login"){
                        echo "Anda harus login untuk mengakses halaman admin";
                      }
                    }
                ?>      

                   
             
                     </form>
                     
                  </div>
              </div>
        </div>
    </div>
</body>
</html>