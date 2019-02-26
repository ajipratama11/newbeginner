</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Manajemen Menu<small>Administration Area</small>
        </h1>
    </section>			
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $title ?></h3>
            </div>
						<div class="konten">
							<?php echo validation_errors(); ?>
							<form name="form1" method="post" action="<?php echo site_url() ?>/admin/menu/tambah" class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<label for="nama" class="col-sm-2 control-label">Nama Menu</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="menu_nama" placeholder="Nama Menu">
									</div>
								</div>
								<div class="form-group"> 
									<label for="email" class="col-sm-2 control-label">Alamat URI</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="menu_uri" placeholder="Alamat URI">
									</div>
								</div>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Hak Akses</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="menu_allowed" placeholder="Hak Akses">
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-default" name="submit" value="Submit">Submit</button>
								</div>
								<!-- /.box-footer -->
							</form>
						</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

