<?php
/**
 * using mysqli_connect for database connection
 */
 global $koneksi;

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';
 
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (!$koneksi) {
	die("koneksi Gagal".mysql_connect_error());
}
 
?>