<?php
require '../../../../../fungsi.php';


// menangkap data id yang di kirim dari url

$id_kontak = $_GET['id_kontak'];
  
// menghapus data dari database
mysqli_query($mysqli, "DELETE FROM kontak WHERE id_kontak = $id_kontak");
 
// mengalihkan halaman kembali ke index.php
header("location:kontak.php");
?>