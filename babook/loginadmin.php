<?php 
// mengaktifkan session php
session_start();


// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$admin = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$password' and password='$password'");
$tes=mysqli_num_rows($admin);

if($tes > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "loginadmin";
	
	//
	$_SESSION["loginadmin"] =  true;	
		header("location:ci319/assets/adminlte24/pages/forms/welcome.php");

}else{
	header("location:index.php?pesanadmin=gagal");
}
?>