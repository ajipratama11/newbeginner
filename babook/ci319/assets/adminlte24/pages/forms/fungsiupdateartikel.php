<?php 
 
require '../../../../../fungsijadwal.php';
$id_artikel = $_POST['id_artikel'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$penulis = $_POST['penulis'];
$isi = $_POST['isi'];
$jenis = $_POST['jenis'];
 
$query = mysqli_query($mysqli, "UPDATE artikel SET judul='$judul', tanggal='$tanggal', penulis='$penulis', isi='$isi', jenis='$jenis' WHERE id_artikel='$id_artikel'");
 
header("location:tampilartikel.php");
 
?>