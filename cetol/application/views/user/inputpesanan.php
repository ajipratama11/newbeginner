<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">

            <?= form_open_multipart('user/inputpesan'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">ID PESAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email"  readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NAMA PEMESAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">JENIS PESANAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NAMA FILE</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">JENIS KERTAS</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">PANJANG</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">LEBAR</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">JUMLAH</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">HARGA</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">TANGGAL PESAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= date('Y-m-d H:i:s'); ?>" readonly >
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                </div>
            </div>
            
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" >EDIT</button>
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