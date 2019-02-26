<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['nama_fg'];
$password = $_POST['sandi'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$fg = mysqli_query($koneksi,"SELECT * FROM fotografer WHERE nama_fg='$username' and sandi='$password'");
$tes=mysqli_num_rows($fg);

if($tes > 0){
	$_SESSION['nama_fg'] = $username;
	$_SESSION['status'] = "login";
	
		
		header("location:fg/admin.php");

}else{
	header("location:login.php?pesan=gagal");
}
?>