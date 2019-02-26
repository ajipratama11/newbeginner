<?php
require 'config.php';
$fotografer=query("SELECT * FROM fotografer")
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No</th>
				<th>nama_fg</th>
				<th>no_hp</th>
				<th>email</th>
				<th>sandi</th>
				<th>alamat</th>
				<th>gambar</th>
				<th>jangkauan</th>
				<th>deskripsi</th>
				<th>tarif</th>
				<th>janis_foto</th>

			</tr>
			<?php $i=1; ?>
			<?php foreach ($fotografer as $row):  ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $row["nama_fg"]; ?></td>
				<td><?= $row["no_hp"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["sandi"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				<td><img src="img/about/<?=  $row["gambar"]; ?>" width="50px"></td>
				<td><?= $row["jangkauan"]; ?></td>
				<td><?= $row["deskripsi"]; ?></td>
				<td><?= $row["tarif"]; ?></td>
				<td><?= $row["jenis_foto"]; ?></td>
				
			</tr>
			<?php $i++;?>
			<?php endforeach;?>

	</table>

</body>
</html>