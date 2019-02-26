<?php 
 
require '../../../../../fungsijadwal.php';
$id_menu = $_POST['id_menu'];

$makan_pagi = $_POST['makan_pagi'];
$makan_siang = $_POST['makan_siang'];
$makan_sore = $_POST['makan_sore'];
$makanan_pendamping = $_POST['makanan_pendamping'];
$deskripsi = $_POST['deskripsi'];
$kelompok_umur = $_POST['kelompok_umur'];
 
$query = mysqli_query($mysqli, "UPDATE menu SET makan_pagi='$makan_pagi', makan_siang='$makan_siang', makan_sore='$makan_sore', makanan_pendamping='$makanan_pendamping', deskripsi='$deskripsi', kelompok_umur='$kelompok_umur' WHERE id_menu='$id_menu'");
 
header("location:tampilmenu.php");
 
?>