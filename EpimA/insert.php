<?php
include 'config.php';
if (isset($_POST["daftar"])) {
  if (pelanggan($_POST)>0) {
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
                  <input type="text" name="nama_pemesan" class="form-control" placeholder="" required autofocus="">
                </div>
          
                      <br>              
          <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 85px">Jenis Foto : </label>
                    <select class="custom-select" name="jenis_foto">
                    <option selected>Pilih Jenis</option>
                    <option value="Wedding">Preweeding/Wedding</option>
                    <option value="Traveling">Traveling</option>
                    <option value="Event">Event(Acara)</option>
                    <option value="Model">Model</option>
                    <option value="text">Lainnya...</option>
                  </select>
          <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 90px">Fotografer : </label>
                  <input type="text" name="fotografer" class="form-control" placeholder="" required autofocus="">
                </div>    <br>  
                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 90px">Latitude : </label>
                  <input type="text" name="latitude" class="form-control" placeholder="" required autofocus="">
                </div>     <br>  
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 35px">Longtitude : </label>
                  <input type="text" name="longitude" class="form-control" placeholder="" required autofocus="">
                </div><br>

             <div class="input-group">
            <label for="tanggalpesan">Tanggal Pemesanan</label>
            <input name="tanggal" type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal">
            <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal Pemesanan</small>
          </div>
    <br>
    <div class="input-group">
            <label for="tanggalpesan">Waktu Pemesanan</label>
            <input name="waktu" type="time" class="form-control" id="waktupesan" placeholder="masukantanggal">
            <small id="emailHelp" class="form-text text-muted">Masukan Waktu Pemesanan(jj:mm)</small>
          </div>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 75px">Total Bayar : </label>
                  <input type="text" name="total_bayar" class="form-control" placeholder="" required autofocus="">
                </div>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 75px">Deskripsi : </label>
                  <input type="deskripsi" name="deskripsi" class="form-control" placeholder="" required autofocus="">
                </div>
          
                <br>
              		<center>
                  <div class="input-group" style="margin-left: 150px">
                    <input type="submit" style="background-color: #26de81"  name="daftar" class="btn btn-primary" value="DAFTAR">

                  </div><br>
          
                   </center>
         						 </form>
          
      						</div>
      				</div>
    		</div>
		</div>
</div>
</div>
</div>