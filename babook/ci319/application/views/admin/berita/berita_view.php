<!-- DataTables --> 
<link rel="stylesheet" href="<?php echo base_url('assets/Adminlte24/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Manajemen MBeritaenu<small>Administration Area</small>
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
            &nbsp &nbsp<a href="<?php echo site_url() ?>/admin/berita/tambah" class="btn btn-primary btn-xs" role="button">Tambah</a>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th> 
                  <th>Judul</th>
                  <th>Status</th>
                  <th>Penulis</th>
                  <th>Tanggal</th>
                  <th>Task</th>
                </tr>
                </thead>
                <tbody>

                  <?php foreach($berita as $list) { ?>
                    <tr>
                      <td><?php echo $list['id_berita']; ?></td>
                      <td><a href="<?php echo base_url() ?>index.php/home/read/<?php echo $list['slug'] ?>" target="_blank"><?php echo $list['judul']; ?></a></td>
                      <td><?php echo $list['status_berita']; ?></td>
                      <td><?php echo $list['nama']; ?></td>
                      <td><?php echo $list['tanggal']; ?></td>
                      <td>
                      <a href="<?php echo site_url() ?>/admin/berita/edit/<?php echo $list['id_berita'] ?>" class="btn btn-primary btn-xs" role="button">ubah</a>  
                      <a href="<?php echo site_url() ?>/admin/berita/delete/<?php echo $list['id_berita'] ?>" class="btn btn-danger btn-xs" role="button">hapus</a>
                    </td>
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
