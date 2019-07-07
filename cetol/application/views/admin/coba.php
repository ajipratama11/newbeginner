<!-- End of Topbar -->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pengguna</h1>


    <!-- DataTales Example -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('penerimapesan/input_pesanan') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID PESANAN</th>
                            <th>NAMA PEMESAN</th>
                            <th>JENIS PESANAN</th>
                            <th>NAMA FILE</th>
                            <th>JENIS KERTAS</th>
                            <th>PANJANG</th>
                            <th>LEBAR</th>
                            <th>JUMLAH</th>
                            <th>HARGA</th>
                            <th>TANGGAL PESAN</th>
                            <th>TOTAL HARGA</th>
                            <th>PEMBAYARAN</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td width="80px"><?= $i; ?></td>
                                <td><?php echo $tr->id_pesan ?></td>
                                <td><?php echo $tr->nama_pemesan ?></td>
                                <td><?php echo $tr->jenis_pesanan ?></td>
                                <td><?php echo $tr->nama_file ?></td>
                                <td><?php echo $tr->jenis_kertas ?></td>
                                <td><?php echo $tr->panjang ?></td>
                                <td><?php echo $tr->lebar ?></td>
                                <td><?php echo $tr->jumlah ?></td>
                                <td><?php echo $tr->harga ?></td>
                                <td><?php echo $tr->tgl_pesan ?></td>
                                <td><?php echo $tr->total_harga ?></td>
                                <td><?php echo $tr->pembayaran ?></td>
                                <td>
                                    <a href="<?php echo site_url('penerimapesan/confirm_pesan/' . $tr->id_pesan) ?>">
                                        <button class="btn btn-primary btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Design</button></a>
                                    <a href="<?php echo site_url('penerimapesan/confirm_langsung_desainer/' . $tr->id_pesan) ?>">
                                        <button class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Cetak</button></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->


<!-- JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-pie-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-bar-demo.js') ?>"></script>


</body>

</html>