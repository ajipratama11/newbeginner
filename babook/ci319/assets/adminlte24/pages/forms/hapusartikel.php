<?php
require '../../../../../fungsijadwal.php';


// menangkap data id yang di kirim dari url

$id_artikel = $_GET['id_artikel'];
  
// menghapus data dari database
mysqli_query($mysqli, "DELETE FROM artikel WHERE id_artikel = $id_artikel");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilartikel.php");
?>