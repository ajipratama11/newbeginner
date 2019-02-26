<?php 
 
require '../../../../../fungsijadwal.php';
$id_ppi = $_POST['id_ppi'];
$bulan = $_POST['bulan'];
$nama_ppi = $_POST['nama_ppi'];
$deskripsi = $_POST['deskripsi'];
 
$query = mysqli_query($mysqli, "UPDATE jadwal_ppi SET bulan='$bulan', nama_ppi='$nama_ppi', deskripsi='$deskripsi' WHERE id_ppi='$id_ppi'");
 
header("location:tampiljadwalppi.php");
 
?>