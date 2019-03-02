<!-- DataTables --> 
<link rel="stylesheet" href="<?php echo base_url('assets/Adminlte24/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
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
            <!-- /.box-header -->
            &nbsp &nbsp<a href="<?php echo site_url()?>/admin/menu/tambah" class="btn btn-primary btn-xs" role="button">Tambah</a>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">nama menu</th>
                  <th scope="col">Alamat URI ( Controller )</th>
                  <th scope="col">Hak Akses Allowed</th>
                  <th scope="col">Task</th>
                </tr>
                </thead>
                <tbody> 

                  <?php foreach($menus as $list) { ?>
                  <tr>
                    <td><?php echo $list['menu_id']; ?></td>
                    <td><?php echo $list['menu_nama']; ?></td>
                    <td><?php echo $list['menu_uri']; ?></td>
                    <td><?php echo $list['menu_allowed']; ?></td>
                  <td>
                    <a href="<?php echo site_url() ?>/admin/menu/edit/<?php echo $list['menu_id'] ?>" class="btn btn-primary btn-xs" role="button">ubah</a>
                    <a href="<?php echo site_url() ?>/admin/menu/delete/<?php echo $list['menu_id'] ?>" class="btn btn-danger btn-xs" role="button">hapus</a>
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
