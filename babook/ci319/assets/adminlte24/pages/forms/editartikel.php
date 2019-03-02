<div class="modal fade" id="anak" tabindex="-1" role="dialog" aria-labelby="myLargeModalLabel" aria-hidden="true">
    
      <div class="modal-dialog modal-col" role="document">
       <div class="modal-content">
            
            <div class="modal-body">
            <form action="" style="margin: 20px 40px " align="center" autocomplete="off" method="post" class="navbar-form">
                <div class="input-group">
                   <label style="margin-right: 38px">Nama Anak : </label>
                  <input type="name" name="nama_anak" class="form-control" placeholder="" autocomplete="off" >
                </div>
                <br>
                <div class="input-group">
                  <label style="margin-right: 38px">Jenis Kelamin : </label>
                  <select class="custom-select" name="jk">
                    <option selected value="L">Laki-Laki</option>
                    <option selected value="P">Perempuan</option>
                  </select>
                </div>
                <br>
                <div class="input-group">     
                  <label style="margin-right: 85px">umur : </label>
                  <input type="text" name="umur" class="form-control" placeholder="Dalam bulan" required autocomplete="off">
          
               </div>
           <br>
                  <div class="input-group">
                  <label style="margin-right: 85px">Berat : </label>
                  <input type="text" name="berat" class="form-control" placeholder="Dalam Kg" required autocomplete="off">
                
                </div>
                <br>
                <div class="input-group">
                  <label style="margin-right: 78px">Tinggi : </label>
                  <input type="text" name="tinggi" class="form-control" placeholder="Dalam cm" required autocomplete="off">
                  
                </div>
                <br>
                 <div class="input-group">     
                  
                  
                  <input type="hidden" name="tanggal_cek" class="form-control"  placeholder="" required autocomplete="off" value=<?php date ("Y-m-d")  ?>>
               </div>
               <br>
                <div class="input-group">     
                  <input  type="hidden"  name="id_ibu" class="form-control"  placeholder="" required autocomplete="off" value=<?php echo $_SESSION['nama'] ; ?>>
               </div>
                 <div>
              <input class="btn btn-primary" data-toggle="modal" type="submit" value="DAFTAR" name="anak">
              </div>
          </form>
          
          </div>
          </div>
          </div>
       </div>