<?php 
// mengaktifkan session
session_start();

$_SESSION = [];

session_unset();
 
// menghapus semua session
session_destroy();
 

	header("location: ../../index.php")
?>