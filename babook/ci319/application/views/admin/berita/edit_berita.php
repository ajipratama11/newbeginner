<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Manajemen Berita<small>Administration Area</small>
        </h1>
    </section>			
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"><?php echo $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <form name="form1" method="post" action="<?php echo base_url() ?>index.php/admin/berita/edit/<?php echo $detail['id_berita'] ?>" class="myform">
							<p>
								<label for="judul">Judul berita</label>
								<input name="judul" type="text" id="judul" size="70" value="<?php echo $detail['judul'] ?>">
							</p>
              <p>
                <label>Ringkasan Berita : </label> 
								<?php
									echo $this->ckeditor->editor("ringkasan",'$ringkasan_data',$detail['ringkasan']); 
									//echo $this->CKEDITOR.instances.editor1.setData( '<p>This is the editor data.</p>' );
								?>
              </p>
	            <p>
                <label>Isi Berita : </label>
                <?php echo $this->ckeditor->editor("isi", '',$detail['isi']); ?>
              </p>
							<p> 
									<label for="status_berita">Status berita</label>
									<select name="status_berita" id="status_berita">
										<option value="Publish" <?php if($detail['status_berita']=="Publish") { echo 'selected'; } ?>>Publikasikan</option>
										<option value="Draft" <?php if($detail['status_berita']=="Draft") { echo 'selected'; } ?>>Simpan sebagai draft</option>
										</select>
									<input name="id_user" type="hidden" id="id_user" value="1">
									<input name="id_berita" type="hidden" id="id_berita" value="<?php echo $detail['id_berita'] ?>">
							</p>
              <p>
          	    <input type="submit" name="submit" id="submit" value="Submit">
	            </p>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
	<!-- /.content-wrapper -->


