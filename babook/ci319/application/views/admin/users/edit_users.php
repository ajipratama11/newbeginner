</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
    <!-- Section Header (Page header) -->
    <section class="content-header">
        <h1>
          Manajemen Users <small>Administration Area</small>
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
						<form name="form1" method="post" action="<?php echo site_url() ?>/admin/users/edit/<?php echo $detail['id_user'] ?>" class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<label for="nama" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-5">
									  <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $detail['id_user'] ?>">
										<input type="text" class="form-control" name="nama" value="<?php echo $detail['nama'] ?>">
									</div>
								</div>
								<div class="form-group"> 
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-5">
										<input type="email" class="form-control" name="email" value="<?php echo $detail['email'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">User Name</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="username" value="<?php echo $detail['username'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-5">
										<input type="password" class="form-control" name="password" value="<?php echo $detail['password'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="hak akses" class="col-sm-2 control-label">Hak Akses</label>
									<div class="col-sm-5">
									<select name="hak_akses_user" class="form-control">
										<?php foreach($hak_akses as $list) { ?>
											<option value="<?php echo $list['hak_akses_id']; ?>"
											<?php if($detail['hak_akses_user']==$list['hak_akses_id']) { ?> selected="selected" <?php }?> >
											<?php echo $list['hak_akses_nama']; ?>
											</option>
										<?php } ?>
									</select>
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
