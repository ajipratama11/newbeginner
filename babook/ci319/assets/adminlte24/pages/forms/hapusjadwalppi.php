<?php
require '../../../../../fungsijadwal.php';


// menangkap data id yang di kirim dari url

$id_ppi = $_GET['id_ppi'];
  
// menghapus data dari database
mysqli_query($mysqli, "DELETE FROM jadwal_ppi WHERE id_ppi = $id_ppi");
 
// mengalihkan halaman kembali ke index.php
header("location:tampiljadwalppi.php");
?>