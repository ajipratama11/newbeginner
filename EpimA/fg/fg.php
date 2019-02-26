<?php
require '../config.php';
$fotografer=query("SELECT * FROM fotografer")
 ?>

<body>
     <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Jangkauan</th>
                <th>Tarif</th>
               

              </tr>
            </thead> 
            <?php $i=1; ?>
            <?php foreach ($fotografer as $row):  ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_fg"]; ?></td>
                 <td><?= $row["alamat"]; ?></td>
                 <td><?= $row["jangkauan"]; ?></td>
                 <td><?= $row["tarif"]; ?></td>
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

</body>
