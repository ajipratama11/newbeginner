<?php
/**
 * using mysqli_connect for database connection
 */
 
 
$mysqli = mysqli_connect("localhost","root", "", "login");

function query($query){
	global $mysqli;
	$result= mysqli_query($mysqli,$query) ;
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	
	}
	return $rows;
}
/*
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

*/
function menu($data){
	global $mysqli;

	$umur=strtolower(stripslashes($data["umur"]));
	$makan_pagi=mysqli_real_escape_string($mysqli, $data["makan_pagi"]);
	$makan_siang=mysqli_real_escape_string($mysqli, $data["makan_siang"]);
	$makan_sore=mysqli_real_escape_string($mysqli, $data["makan_sore"]);
	$makan_pendamping=mysqli_real_escape_string($mysqli, $data["makan_pendamping"]);
	$deskripsi=mysqli_real_escape_string($mysqli, $data["deskripsi"]);
	$kelompok_umur=mysqli_real_escape_string($mysqli, $data["kelompok_umur"]);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO jadwal_ppi VALUES('','$umur','$makan_pagi','$makan_siang','$makan_sore','$makan_pendamping','$deskripsi','$kelompok_umur')");

	return mysqli_affected_rows($mysqli);
}

?>