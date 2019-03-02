<?php
require '../../../../../fungsijadwal.php';


// menangkap data id yang di kirim dari url

$id_kpsp = $_GET['id_kpsp'];
  
// menghapus data dari database
mysqli_query($mysqli, "DELETE FROM kpsp WHERE id_kpsp = $id_kpsp");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilkpsp.php");
?>