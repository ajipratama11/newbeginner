<?php
require '../../../../../fungsijadwal.php';


// menangkap data id yang di kirim dari url

$id_vaksin = $_GET['id_vaksin'];
  
// menghapus data dari database
mysqli_query($mysqli, "DELETE FROM jadwal_vaksin WHERE id_vaksin = $id_vaksin");
 
// mengalihkan halaman kembali ke index.php
header("location:tampiljadwalvaksin.php");
?>