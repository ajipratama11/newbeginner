<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <!-- Bootstrap stuff -->
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
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
              <a class="nav-link " style="font-size:  15px" href="#page-top">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" style="font-size:  15px" href="#services">Pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="#portfolio">portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="#about">spotfoto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-size:  15px" href="#contact">kontak</a>
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
            <h2 class="section-heading text-uppercase">Pembayaran</h2>
            <h3 class="section-subheading text-muted">Isikan data.</h3>
          </div>
        </div>
		  <div class="col-lg-5 " >       

<body>

        <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom1">Nama Pemesan</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="!DataDariUsername" required>
                  <div class="valid-feedback">
                    Ok !
                  </div>
        <br>
              <label for="custom-select">Pilih Jenis Foto</label>
                <select class="custom-select">
                    <option selected>Pilih Jenis</option>
                    <option value="1">Preweeding/Wedding</option>
                    <option value="2">Traveling</option>
                    <option value="3">Event(Acara)</option>
                    <option value="4">Model</option>
                    <option value="5">Lainnya...</option>
                  </select>
        <br><br>
                <label for="validationServerUsername">Fotografer</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">📸</span>
                  </div>
                  <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      <button class="btn btn-primary">Pilih Fotografer</button>
                </div>
                  <br>
        <div class="form-group">
                <label for="tanggalpesan">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal">
                <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal Pemesanan</small>
              </div>
        <br>
        <div class="form-group">
                <label for="tanggalpesan">Waktu Pemesanan</label>
                <input type="time" class="form-control" id="waktupesan" placeholder="masukantanggal">
                <small id="emailHelp" class="form-text text-muted">Masukan Waktu Pemesanan(jj:mm)</small>
              </div>
        <br>
        <div>
                <label for="validationCustom1">Lokasi Latitude</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="latitudeInput" required>
                <div class="valid-feedback">
                  Ok !
                </div>
        <div>
                <label for="validationCustom1">Lokasi Longitude</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="longitudeInput" required>
                <div class="valid-feedback">
                  Ok !
                </div>
        <br>
    <!--Start Google Maps-->
  
    <div class="">

    
                <div class="modal-header">
                    
                    <h4 class="modal-title">Set Lokasi untuk Foto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal" style="width: 550px">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Location:</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="us3-address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Radius:</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="us3-radius" />
                            </div>
                        </div>
                        <div id="us3" style="width: 100%; height: 400px;"></div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="m-t-small">
                            <label class="p-r-small col-sm-1 control-label">Lat.:</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" style="width: 110px" id="us3-lat" />
                            </div>
                            <label class="p-r-small col-sm-2 control-label">Long.:</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" style="width: 110px" id="us3-lon" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <script>
                            $('#us3').locationpicker({
                                location: {
                                    latitude: 46.15242437752303,
                                    longitude: 2.7470703125
                                },
                                radius: 300,
                                inputBinding: {
                                    latitudeInput: $('#us3-lat'),
                                    longitudeInput: $('#us3-lon'),
                                    radiusInput: $('#us3-radius'),
                                    locationNameInput: $('#us3-address')
                                },
                                enableAutocomplete: true,
                                markerIcon: 'http://www.iconsdb.com/icons/preview/tropical-blue/map-marker-2-xl.png'
                            });
                            $('#us6-dialog').on('shown.bs.modal', function () {
                                $('#us3').locationpicker('autosize');
                            });
                        </script>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Set Lokasi</button>
                    
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!--End Google Maps-->
<br><br>
    <label for="validationServerUsername">Total Harga</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupPrepend3">Rp.</span>
       
        <div style=" padding-left: 0px; padding-right: 20px ">
        <input  type="text" class="form-control" id="validationDefaultUsername" placeholder="hargaDariDB" aria-describedby="inputGroupPrepend2" required>
    </div>
    </div>
    </div>
        <br><br>
<div class="input-group">
<div class="input-group-prepend">
    <br>
    <div>
    <label form="form-control">Deskripsi </label></div>
    <br>
    <br><br>
    <div style=" margin-left:10px ">
    <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
    </div>
    <br></div>
    <button type="button" class="btn btn-primary btn-lg">PESAN</button>
    </body>
<!-- Footer -->
   
  
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