<?php
/**
 * using mysqli_connect for database connection
 */
 
 
$mysqli = mysqli_connect("localhost","root", "", "photonow");


function daftar($data){
	global $mysqli;

	$nama_user=strtolower(stripslashes($data["nama_user"]));
	$no_hp=mysqli_real_escape_string($mysqli, $data["no_hp"]);
	$email=mysqli_real_escape_string($mysqli, $data["email"]);
	$sandi=mysqli_real_escape_string($mysqli, $data["sandi"]);
	$sandi2=mysqli_real_escape_string($mysqli, $data["sandi2"]);
	$alamat=mysqli_real_escape_string($mysqli, $data["alamat"]);
	

	//user sudah ada
	//$result= mysqli_query($mysqli, "SELECT nama_user FROM user WHERE nama_user ='$nama_user'");

	//if (mysqli_fetch_assoc($result)) {
		//echo "<script>
		//	alert('nama sudah terdaftar!')
		//</script>";
		//return false;
//	}

	//cek konfimasi pss
	//if($sandi!== $sandi2){
	//	echo "<script>
	//		alert('kata sandi harus sama!');
	//	</script>";
	//	return false;

	//}
	//enksripsi password

	//$sandi= password_hash($sandi,PASSWORD_DEFAULT);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO user VALUES('','$nama_user','$no_hp', '$email','$sandi','$alamat')");

	return mysqli_affected_rows($mysqli);
}

function registrasiAdmin($data){
	global $mysqli;

	$username=strtolower(stripslashes($data["username"]));
	$password=mysqli_real_escape_string($mysqli, $data["password"]);
	$password2=mysqli_real_escape_string($mysqli, $data["password2"]);

	//user sudah ada
	$result= mysqli_query($mysqli, "SELECT username FROM users WHERE username ='$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('nama sudah terdaftar!')
		</script>";
		return false;
	}

	//cek konfimasi pss
	if($password!== $password2){
		echo "<script>
			alert('kata sandi harus sama!');
		</script>";
		return false;

	}
	//enksripsi password

	$password= password_hash($password,PASSWORD_DEFAULT);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO users VALUES('','$username','$password')");

	return mysqli_affected_rows($mysqli);
}

function query($query){
	global $mysqli;
	$result= mysqli_query($mysqli,$query) ;
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	
	}
	return $rows;
}

function fotografer($data){
	global $mysqli;

	$nama_fg=strtolower(stripslashes($data["nama_fg"]));
	$no_hp=mysqli_real_escape_string($mysqli, $data["no_hp"]);
	$email=mysqli_real_escape_string($mysqli, $data["email"]);
	$sandi=mysqli_real_escape_string($mysqli, $data["sandi"]);
	$sandi2=mysqli_real_escape_string($mysqli, $data["sandi2"]);
	$alamat=mysqli_real_escape_string($mysqli, $data["alamat"]);
	$gambar=mysqli_real_escape_string($mysqli, $data["gambar"]);
	$gambar2=mysqli_real_escape_string($mysqli, $data["gambar2"]);
	$gambar3=mysqli_real_escape_string($mysqli, $data["gambar3"]);
	$jangkauan=mysqli_real_escape_string($mysqli, $data["jangkauan"]);
	$deskripsi=mysqli_real_escape_string($mysqli, $data["deskripsi"]);
	$tarif=mysqli_real_escape_string($mysqli, $data["tarif"]);
	$jenis_foto=mysqli_real_escape_string($mysqli, $data["jenis_foto"]);
	

	//user sudah ada
	$result= mysqli_query($mysqli, "SELECT nama_fg FROM fotografer WHERE nama_fg ='$nama_fg'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('nama sudah terdaftar!')
		</script>";
		return false;
	}

	//cek konfimasi pss
	if($sandi!== $sandi2){
		echo "<script>
			alert('kata sandi harus sama!');
		</script>";
		return false;

	}
	//enksripsi password

	//$sandi= password_hash($sandi,PASSWORD_DEFAULT);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO fotografer VALUES('','$nama_fg','$no_hp','$email','$sandi','$alamat','$gambar','$gambar2','$gambar3','$jangkauan','$deskripsi','$tarif','$jenis_foto')");

	return mysqli_affected_rows($mysqli);
}


function pelanggan($data){
	global $mysqli;

	$nama_pemesan=strtolower(stripslashes($data["nama_pemesan"]));
	$jenis_foto=mysqli_real_escape_string($mysqli, $data["jenis_foto"]);
	$fotografer=mysqli_real_escape_string($mysqli, $data["fotografer"]);
	$alamat=mysqli_real_escape_string($mysqli, $data["alamat"]);
	$tanggal=mysqli_real_escape_string($mysqli, $data["tanggal"]);
	$waktu=mysqli_real_escape_string($mysqli, $data["waktu"]);
	$deskripsi=mysqli_real_escape_string($mysqli, $data["deskripsi"]);
	$status=mysqli_real_escape_string($mysqli, $data["status"]);
	

	

/*
	$result= mysqli_query($mysqli, "SELECT nama_pemesan FROM pesan WHERE nama_pemesan ='$nama_pemesan'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('nama sudah terdaftar!')
		</script>";
		return false;

	}*/

	//cek konfimasi pss
	/*if($sandi!== $sandi2){
		echo "<script>
			alert('kata sandi harus sama!');
		</script>";
		return false;

	}*/
	//enksripsi password

	//$sandi= password_hash($sandi,PASSWORD_DEFAULT);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO pesan VALUES('','$nama_pemesan','$jenis_foto','$fotografer','$alamat','$tanggal','$waktu','$deskripsi','$status')");

	return mysqli_affected_rows($mysqli);
}
?>