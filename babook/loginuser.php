<?php 
// mengaktifkan session php
session_start();



// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$sandi = $_POST['sandi'];

// menyeleksi data admin dengan username dan password yang sesuai
$user = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama' and sandi='$sandi'");
$tes = mysqli_num_rows($user);

if ($tes > 0) {
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";


	$_SESSION["login"] =  true;

	header("location:index.php");
} else {
	header("location:index.php?pesan=gagal");
}
 