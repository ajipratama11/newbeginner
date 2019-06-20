<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
          
              

                <table id="example" class="table table-striped table-bordered" style="width:100%">
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
<!-- Modal -->

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