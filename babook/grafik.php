<?php require 'fungsijadwal.php';
session_start(); ?>
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
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/ilmudetil.css">
  
  <script src="assets/js/jquery-1.10.1.min.js"></script>
  <script type="text/javascript">
    $(function () {
      var chart;
      $(document).ready(function() {
        $.getJSON("dataline.php", function(json) {
        
          chart = new Highcharts.Chart({
            chart: {
              renderTo: 'mygraph',
              type: 'line'
              
            },
            title: {
              text: 'Grafik Perkembangan'
              
            },
            subtitle: {
              text: '0'
            
            },
            xAxis: {
              categories: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']
            
            },
            yAxis: {
              title: {
                text: 'Berat (KG)'
              },
              plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
              }]
            },
            tooltip: {
              formatter: function() {
                  return '<b>'+ this.series.name +'</b><br/>'+
                  this.x +': '+ this.y;
              }
            },
            legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'top',
              x: -10,
              y: 120,
              borderWidth: 0
            },
            series: json
          });
        });
      
      });
      
    });
    </script>
  <script src="assets/js/highcharts.js"></script>
  <script src="assets/js/exporting.js"></script>
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


   
     </div>
    <!-- Services -->
    <section id="services">
  <div class="container" style="margin-top:20px">
    <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#grafik">Anak</button>
  <div class="col-md-10">
    <div class="panel panel-primary">
      <div class="panel-heading">Perkembangan Anak</div>
        <div class="panel-body">
          <div id ="mygraph"></div>
        </div>
    </div>
  </div>
</div>
<div>
 <?php 

$bulan    = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','15','16','17','18','19','20','21','24');
$jk =  array('l','p');
if (isset($_POST["grafik"]))  {
  if (grafik($_POST)>0) {
    echo "<script>
    alert('Selamat Bergabung!');
    </script>";

    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}

global $mysqli;
$nama_anak = $_GET['nama_anak'];
$que = mysqli_query($mysqli,"SELECT nama_anak FROM anak where nama_anak ='$nama_anak' ");
    while ($res=mysqli_fetch_array($que)) {
 ?> 

    
      <div class="modal-dialog modal-col" role="document">
       <div class="modal-content">
            
            <div class="modal-body">
            <form action="" style="margin: 20px 40px " align="center" autocomplete="off" method="post" class="navbar-form">
              <div class="form-group">
                          <label>nama :</label>
                           <input type="text" name="nama_anak" class="form-control" placeholder="Dalam bulan" required autocomplete="off" value="<?php echo $res['nama_anak']; ?>">
                          <br></div>
              
                <br>
                <div class="input-group">     
                  <label style="margin-right: 85px">berat : </label>
                  <input type="text" name="berat" class="form-control" placeholder=" " required autocomplete="off">
          
               </div>
           <br>
                  <div class="input-group">
                  <label style="margin-right: 85px">tinggi : </label>
                  <input type="text" name="tinggi" class="form-control" placeholder=" " required autocomplete="off">
                
                </div>
                <br>
                <div class="form-group">
                          <label>Umur (bulan) :</label>
                          <select name="bulan" required="" class="form-control select2" style="width: 100%;">
                           <?php
                            foreach ($bulan as $j){
                                echo "<option value='$j' ";
                            
                                echo ">$j</option>";
                            }
                            ?>
                          </select>
                          <br></div>
                <br>
              
                 <div>
                   <div class="form-group">
                          <label>Umur (bulan) :</label>
                          
                          <br></div>
                <br>
              
                 <div>
              <input class="btn btn-primary" data-toggle="modal" type="submit" value="DAFTAR" name="grafik">
              </div>
          </form>
          
          </div>
          </div>
          </div>
        <?php } ?>
       </div>
       </div>
<script src="assets/js/highcharts.js"></script>
<script src="assets/js/jquery-1.10.1.min.js"></script>

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
