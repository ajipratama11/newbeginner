<?php
require '../../../../../fungsijadwal.php';


// menangkap data id yang di kirim dari url

$id_menu = $_GET['id_menu'];
  
// menghapus data dari database
mysqli_query($mysqli, "DELETE FROM menu WHERE id_menu = $id_menu");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilmenu.php");
?>