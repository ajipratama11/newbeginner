<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo site_url('admin/inputbarang') ?>">
                <button class="btn btn-primary btn-sm mb-3">INPUT LIST BARANG</button></a>

            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA BARANG</th>
                            <th>JENIS BARANG</th>
                            <th>JENIS KERTAS</th>
                            <th>GAMBAR</th>
                            <th>HARGA BARANG</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td width="80px"><?= $i; ?></td>
                                <?php $tr->id_barang ?>
                                <td><?php echo $tr->nama_barang ?></td>
                                <td><?php echo $tr->jenis_barang ?></td>
                                <td><?php echo $tr->jenis_kertas ?></td>
                                <td><img src="<?= base_url('assets/img/barang/' . $tr->gambar) ?>" width="64" class="img-thumbnail"></td>
                                <td><?php echo $tr->harga_barang ?></td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-primary btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Edit</button></a>
                                    <br><br>

                                    <a href="<?php echo site_url('admin/delete/' . $tr->id_barang) ?>">
                                        <button class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Hapus</button></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Button trigger modal -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var t = $("#mytable").dataTable({
                "scrollX": true
            });
        });
    </script>