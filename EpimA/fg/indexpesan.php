<?php
require '../config.php';
$fotografer=query("SELECT * FROM fotografer")
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
 table, th, td {
  
}
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <span class="glyphicon glyphicon-user" style="font-size: 100px; margin-left: 50px;margin-top: 20px"></span>
                    <a href="#">
               
                <?php 
                 session_start();
                if($_SESSION['status']!="login"){
                header("location:../index.php?pesan=belum_login");}?>
                <li>
                    <h3><a style="margin-left: 30px">Hai <?php echo $_SESSION['nama_fg'] ; ?>!  </a></h3><hr style="width: 200px">
                </li>
                <li>
                    <a href="" style=" font-size: 15px; font-family: arial"><span class="glyphicon glyphicon-list-alt"></span> Daftar Pesan</a>
                </li>
                <li>
                    <a href="../logoutfg.php" style=" font-size: 15px; font-family: arial"><span class=" glyphicon glyphicon-log-out"></span> Keluar</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="font-family: arial; text-align: center; margin-top:50px"> Selamat Bergabung <?php echo  $_SESSION['nama_fg'] ; ?>!</h1> <hr>
     <table id="example" class="table table-striped table-bordered" style="width: 100%">
            
              <tr>
                <th>No</th>
                <th>nama_fg</th>
                <th>no_hp</th>
                <th>email</th>
                <th>sandi</th>
                <th>alamat</th>
                <th>gambar</th>
                <th>jangkauan</th>
                <th>deskripsi</th>
                <th>tarif</th>
                <th>janis_foto</th>
                <th>Hubungi</th>


              </tr>
           
            <?php $i=1; ?>
            <?php foreach ($fotografer as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_fg"]; ?></td>
                <td><?= $row["no_hp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["sandi"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><img src="img/about/<?=  $row["gambar"]; ?>" width="50px"></td>
                <td><?= $row["jangkauan"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><?= $row["tarif"]; ?></td>
                <td><?= $row["jenis_foto"]; ?></td>
                <td><a href="chatFG.php">Hubungi</a></td>
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
            
        </table>
                  
                         <a href="#menu-toggle" style="" class="btn btn-default" id="menu-toggle">Geser</a>
               <h2 class="text-uppercase text-center" style="font-size: 25px; background-color:#0984e3 "></h2><br>
         </div>
        </div>
    </div>
</div>
</div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   
 

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
