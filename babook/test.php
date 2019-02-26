<?php 
include 'config.php';
session_start()

	
	//untuk mengisi var umur
	if (isset($_POST['submit'])) {
		# code...
		$nama_anak = $_POST['nama_anak'];
	}
$nama = $_SESSION['nama'] ;


	//membuat query isi combobox
	$dafumur = mysqli_query($koneksi, "SELECT DISTINCT nama_anak FROM anak where id_ibu='$nama'");

	$result = mysqli_query($koneksi, "SELECT * FROM anak WHERE nama_anak LIKE '$nama_anak'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>filter</title>
</head>
<body>
	<form action="" method="post">
		<label for="umur">Umur</label>
		<select name="nama_anak">
			<?php while ($opsiumur = mysqli_fetch_array($dafumur)): ?>
				<option><?= $opsiumur['nama_anak']; ?></option>
			<?php endwhile; ?>
		</select>
		<button type="submit" name="submit">Submit</button>	
	</form>
	<table>
		<thead>
			<tr>
			<th>No</th>
			<th>id</th>
			<th>umur</th>
			<th>isi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; ?>
			<?php while ($kpsp = mysqli_fetch_array($result)): ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $kpsp['id_kpsp'] ?></td>
			<td><?= $kpsp['umur'] ?></td>
			<td><?= $kpsp['isi'] ?></td>
		</tr>
		    <?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>