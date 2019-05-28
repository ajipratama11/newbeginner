<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
    <?= $this->session->flashdata('pesantambah'); ?>
        <div class="col-lg-12">
        
        <form action="<?= base_url('user/tambah_pesanan'); ?>" method="post">
            
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NAMA PEMESAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">JENIS PESANAN</label>
                <div class="col-sm-8">
                    <select class="custom-select" name="jenis_pesanan" id="jenis_pesanan">
                        <option selected value="banner">Banner</option>
                        <option selected value="pamflet">Pamflet</option>
                        <option selected value="brosur">Brosur</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NAMA FILE</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_file" name="nama_file" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">JENIS KERTAS</label>
                <div class="col-sm-8">
                    <select class="custom-select" name="jenis_kertas" id="jenis_kertas">
                        <option selected value="biasa">Biasa</option>
                        <option selected value="bagus">Bagus</option>
                        <option selected value="anti air">Anti air</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">PANJANG</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="panjang" name="panjang" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">LEBAR</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lebar" name="lebar" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">JUMLAH</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jumlah" name="jumlah" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">HARGA</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="harga" name="harga" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">TANGGAL PESAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tgl_pesan" name="tgl_pesan" value="<?= date('Y-m-d H:i:s'); ?>" readonly>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">TAMBAH</button>
                </div>
            </div>
            </form>

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