<!-- DataTables --> 
<link rel="stylesheet" href="<?php echo base_url('assets/Adminlte24/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Section Header (Page header) -->
    <section class="content-header">
        <h1>
           Manajemen Users<small>Administration Area</small>
        </h1>
    </section>

    <!-- Section content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12"> 

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $title ?> </h3>
            </div>
            <!-- /.box-header -->
            &nbsp &nbsp<a href="<?php echo site_url() ?>/admin/users/tambah" class="btn btn-primary btn-xs" role="button">Tambah</a>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>nama</th>
                  <th>email</th>
                  <th>User Name</th>
                  <th>Hak Akses</th>
                  <th>Task</th>
                </tr>
                </thead>
                <tbody>

                  <?php foreach($users as $list) { ?>
                  <tr>
                    <td><?php echo $list['id_user']; ?></td>
                    <td><?php echo $list['nama']; ?></td>
                    <td><?php echo $list['email']; ?></td>
                    <td><?php echo $list['username']; ?></td>
                    <td><?php echo $list['hak_akses_nama']; ?></td>
                  <td>
                    <a href="<?php echo site_url() ?>/admin/users/edit/<?php echo $list['id_user'] ?>" class="btn btn-primary btn-xs" role="button">ubah</a>
                    <a href="<?php echo site_url() ?>/admin/users/delete/<?php echo $list['id_user'] ?>" class="btn btn-danger btn-xs" role="button">hapus</a>
                  </tr>
                  <?php } ?>


                </tbody>
              </table>
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
<!-- DataTables -->
<script src="<?php echo base_url('assets/Adminlte24/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/Adminlte24/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/Adminlte24/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>

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
