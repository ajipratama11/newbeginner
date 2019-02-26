<?php 
 
require '../../../../../fungsijadwal.php';
$id_vaksin = $_POST['id_vaksin'];
$bulan = $_POST['bulan'];
$nama_vaksin = $_POST['nama_vaksin'];
$deskripsi = $_POST['deskripsi'];
 
$query = mysqli_query($mysqli, "UPDATE jadwal_vaksin SET bulan='$bulan', nama_vaksin='$nama_vaksin', deskripsi='$deskripsi' WHERE id_vaksin='$id_vaksin'");
 
header("location:tampiljadwalvaksin.php");
 
?>