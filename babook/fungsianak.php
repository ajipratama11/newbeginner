<?php
session_start();


 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form

 
// menyeleksi data admin dengan username dan password yang sesuai
$user = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id' ");
$id=mysqli_num_rows($user);

$_SESSION['id'] = $id;


    ?>