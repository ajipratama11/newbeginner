<?php 
 
require '../../../../../fungsijadwal.php';
$id_kpsp = $_POST['id_kpsp'];
$umur = $_POST['umur'];
$gerak = $_POST['gerak'];
$isi = $_POST['isi'];
 
$query = mysqli_query($mysqli, "UPDATE kpsp SET umur='$umur', gerak='$gerak', isi='$isi'  WHERE id_kpsp='$id_kpsp'");
 
header("location:tampilkpsp.php");
 
?>