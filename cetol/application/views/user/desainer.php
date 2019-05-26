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
                            <td>
                                <a href="#" class="badge badge-danger">hapus</a>
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
<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="role">Pesanan masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/role'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="ID PESAN" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="NAMA PEMESAN" readonly>
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control" aria-readonly="">
                            <option value="">JENIS PESANAN</option>
                            <option value="banner">BANNER</option>
                            <option value="pamflet">PAMFLET</option>
                            <option value="brosur">BROSUR</option>
                            <option value="stiker">STIKER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="NAMA FILE">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control" aria-readonly="true">
                            <option value="">JENIS PESANAN</option>
                            <option value="easy">easy</option>
                            <option value="luster">luster</option>
                            <option value="banner">banner</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="PANJANG">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="LEBAR">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="JUMLAH">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="HARGA" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="TANGGAL PESAN" readonly>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
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