<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <?= $this->session->flashdata('pesantambah'); ?>
        <div class="col-lg-12">

            <form action="<?= base_url('admin/tambah_barang'); ?>" method="post">

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">NAMA BARANG</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">JENIS BARANG</label>
                    <div class="col-sm-8">
                        <select class="custom-select" name="jenis_barang" id="jenis_barang">
                            <option selected value="banner">Banner</option>
                            <option selected value="pamflet">Pamflet</option>
                            <option selected value="brosur">Brosur</option>
                        </select>
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
                    <label for="name" class="col-sm-2 col-form-label">GAMBAR</label>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">HARGA</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="harga_barang" name="harga_barang" onchange="return totalBayar()" required>
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
<script>
    function totalBayar() {

        var jumlah = parseInt(document.getElementById("jumlah").value);
        var harga = parseInt(document.getElementById("harga").value);


        console.log(jumlah);
        console.log(harga);

        var total = document.getElementById("total_harga");
        total.placeholder = jumlah * harga + "";
        total.value = jumlah * harga;
    }
</script>
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