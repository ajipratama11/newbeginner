<?php
require '../config.php';
$pelanggan=query("SELECT * FROM pesan")
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
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
<!-- <!-- Content Wrapper. Contains page content -->
 
          <div class="box">
            <div class="box-header">
              <h3 class="" style="text-align: center;">Daftar Pesanan Pelanggan  <?php echo  $_SESSION['nama_fg'] ; ?>!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Foto</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Hubungi</th>
               
              

              </tr>
            </thead>
              <tbody>  
            <?php $i=1; ?>
            <?php foreach ($pelanggan as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_pemesan"]; ?></td>
                <td><?= $row["jenis_foto"]; ?></td>
                 <td><?= $row["alamat"]; ?></td>
                <td><?=  $row["tanggal"]; ?></td>
                <td><?= $row["waktu"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><?= $row["status"]; ?></td>
                <td><a href="../chatFG.php">Hubungi</a></td>
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           </form>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32658829.162158355!2d99.3987350321674!3d-2.2750386744942226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1541095443209" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
