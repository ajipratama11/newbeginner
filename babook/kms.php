<?php session_start() ?>
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
          
              
            <!--</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>-->
           
          </ul>
        </div>
      </div>
    </nav>


   
     </div>
    <!-- Services -->
    <div >
    <?php 
    $bulan    = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','15','16','17','18','19','20','21','24');
    $jk    = array('l','p');
 
if (isset($_POST["kms"])>0) {
  
  $jenis = $_POST['jk'];
$umur =  $_POST['umur'];
$berat = $_POST['berat'];


/* Variabel Category */
$ca0 = "kurus";
$cb1 = "normal";
$cc2 = "gemuk";

/* Logic here */

/* If 1 : Filter Jenis Kelamin */
if ($jenis == "l")
    /* if nested 2 : Filter Umur */

    if ($umur == 0)
        /* if nested 3 : Filter Berat */
        if ($berat < 2.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 4.4)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 1)
        if ($berat < 3.4)
        {
            $kategori = $ca0;   
        }
        elseif ($berat < 5.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 2)
        if ($berat < 4.3)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 7.1)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 3)
        if ($berat < 5.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.0)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 4)
        if ($berat < 5.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 5)
        if ($berat < 6.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.3)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 6)
        if ($berat < 6.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.8)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 7)
        if ($berat < 6.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.3)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 8)
        if ($berat < 6.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.7)
        {
            $kategori = $cb1;
        }
        else {
            $kategori = $cc2;
        }
    elseif ($umur == 9)
        if ($berat < 7.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.0)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 10)
        if ($berat < 7.4) 
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.4) 
        {
            $kategori = $cb1;
        } 
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 11)
        if ($berat < 7.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 12)
        if ($berat < 7.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.0)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 13)
        if ($berat < 7.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.3)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 14)
        if ($berat < 8.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.6)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 15)
        if ($berat < 8.3)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 16)
        if ($berat < 8.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.1)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 17)
        if ($berat < 8.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.4)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 18)
        if ($berat < 8.8)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 19)
        if ($berat < 8.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.9)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 20)
        if ($berat < 9.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 21)
        if ($berat < 9.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 22)
        if ($berat < 9.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 23)
        if ($berat < 9.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 15.0)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 24)
        if ($berat < 9.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 15.3)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    else 
    {
        $LuarBatas = "z";
    }
elseif ($jenis == "p")   
    if ($umur == 0)
        if ($berat < 2.4)
        {
        $kategori = $ca0;
        }
        elseif ($berat < 4.2)
        {
        $kategori = $cb1;
        }
        else
        {
        $kategori = $cc2;
        }
    elseif ($umur == 1)
        if ($berat < 3.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 5.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 2)
        if ($berat < 3.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 6.6)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 3)
        if ($berat < 4.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 7.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 4)
        if ($berat < 5.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 5)
        if ($berat < 5.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.8)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 6)
        if ($berat < 5.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.3)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 7)
        if ($berat < 6.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.8)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 8)
        if ($berat < 6.3)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.2)
        {
            $kategori = $cb1;
        }
        else {
            $kategori = $cc2;
        }
    elseif ($umur == 9)
        if ($berat < 6.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.5)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 10)
        if ($berat < 6.7) 
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.9) 
        {
            $kategori = $cb1;
        } 
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 11)
        if ($berat < 6.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 12)
        if ($berat < 7.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.5)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 13)
        if ($berat < 7.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 14)
        if ($berat < 7.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.1)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 15)
        if ($berat < 7.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.4)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 16)
        if ($berat < 7.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.6)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 17)
        if ($berat < 7.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.9)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 18)
        if ($berat < 8.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 19)
        if ($berat < 8.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 20)
        if ($berat < 8.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 21)
        if ($berat < 8.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.0)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 22)
        if ($berat < 8.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.3)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 23)
        if ($berat < 8.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.6)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 24)
        if ($berat < 9.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    else 
    {
    $LuarBatas = "z";
    }

else
{
    $LuarBatas = "x";
}

/* Aliasi jenis kelamin */
if ($jenis == "p")
    {
        $jeniskelamin = "perempuan";
    }
    elseif ($jenis == "l")
    {
        $jeniskelamin = "laki-laki";
    }
    else
    {
        $jeniskelamin = "err";
    }

/* salkdjbsaivbj */


echo "<script>
    alert('Anak $jeniskelamin Anda yang berumur $umur bulan, masuk kategori $kategori');
    </script>";
    

    # code...
  }


 
?>    
   
    <section id="portfolio">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Cek BB Ideal Anak</h2>
            <h3 class="section-subheading text-muted">Cek apakah anak anda sudah dalam BB normal?</h3>
          </div>
  <div class="modal-body">
            <form action="" style="margin: 20px 40px " align="center" autocomplete="off" method="post" class="navbar-form">
                
           <br>
                  <div class="form-group">
                  <label>Berat : </label>
                  <input type="text" name="berat" class="form-control" placeholder="Dalam Kg"  autocomplete="off" >
                
                </div>
                <br><br>
                <div class="form-group">
                          <label>Umur (bulan) :</label>
                          <select name="umur" required="" class="form-control select2" style="width: 100%;">
                            <?php
                            foreach ($bulan as $j){
                                echo "<option value='$j' ";
            
                                echo ">$j</option>";
                            }
                            ?>
                          </select>
                          <br></div>
                          <div class="form-group">
                          <label>Jenis :</label>
                          <select name="jk" required="" class="form-control select2" style="width: 100%;">
                            <?php
                            foreach ($jk as $j){
                                echo "<option value='$j' ";
            
                                echo ">$j</option>";
                            }
                            ?>
                          </select>
                          <br></div>
                
                 <div>
                    <br>
              <input class="btn btn-primary" data-toggle="modal" type="submit" value="Cek" name="kms">
              <a href="indexlogin.php"><button type="button" class="btn btn-primary">Kembali</button></a>
              </div>
          </form> 
          </div>
          
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
