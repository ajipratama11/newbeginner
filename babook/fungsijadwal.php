<?php
/**
 * using mysqli_connect for database connection
 */
 
 
$mysqli = mysqli_connect("localhost","root", "", "babook");

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
function kpsp($data){
	global $mysqli;

	$umur=strtolower(stripslashes($data["umur"]));
	$gerak=mysqli_real_escape_string($mysqli, $data["gerak"]);
	$isi=mysqli_real_escape_string($mysqli, $data["isi"]);
		


	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO kpsp VALUES('','$umur','$gerak','$isi')");

	return mysqli_affected_rows($mysqli);
}

function jadwal_vaksin($data){
	global $mysqli;

	$bulan=strtolower(stripslashes($data["bulan"]));
	$nama_vaksin=mysqli_real_escape_string($mysqli, $data["nama_vaksin"]);
	$deskripsi=mysqli_real_escape_string($mysqli, $data["deskripsi"]);
	


	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO jadwal_vaksin VALUES('','$bulan','$nama_vaksin','$deskripsi')");

	return mysqli_affected_rows($mysqli);
}

function grafik($data){
	global $mysqli;

	$nama_anak=strtolower(stripslashes($data["nama_anak"]));
	$tinggi=mysqli_real_escape_string($mysqli, $data["tinggi"]);
	$berat=mysqli_real_escape_string($mysqli, $data["berat"]);
	$bulan=mysqli_real_escape_string($mysqli, $data["bulan"]);
	


	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO grafik VALUES('','$nama_anak','$tinggi','$berat','$bulan')");

	return mysqli_affected_rows($mysqli);
}

function artikel($data){
	global $mysqli;

	$judul=strtolower(stripslashes($data["judul"]));
	$tanggal=mysqli_real_escape_string($mysqli, $data["tanggal"]);
	$penulis=mysqli_real_escape_string($mysqli, $data["penulis"]);
	$isi=mysqli_real_escape_string($mysqli, $data["isi"]);
	$jenis=mysqli_real_escape_string($mysqli, $data["jenis"]);
	


	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO artikel VALUES('','$judul','$tanggal','$penulis','$isi','$jenis')");

	return mysqli_affected_rows($mysqli);
}

 
function jadwal_ppi($data){
	global $mysqli;

	$bulan=strtolower(stripslashes($data["bulan"]));
	$nama_ppi=mysqli_real_escape_string($mysqli, $data["nama_ppi"]);
	$deskripsi=mysqli_real_escape_string($mysqli, $data["deskripsi"]);
	


	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO jadwal_ppi VALUES('','$bulan','$nama_ppi','$deskripsi')");

	return mysqli_affected_rows($mysqli);
}

function menu($data){
	global $mysqli;

	
	$makan_pagi=mysqli_real_escape_string($mysqli, $data["makan_pagi"]);
	$makan_siang=mysqli_real_escape_string($mysqli, $data["makan_siang"]);
	$makan_sore=mysqli_real_escape_string($mysqli, $data["makan_sore"]);
	$makanan_pendamping=mysqli_real_escape_string($mysqli, $data["makanan_pendamping"]);
	$deskripsi=mysqli_real_escape_string($mysqli, $data["deskripsi"]);
	$kelompok_umur=mysqli_real_escape_string($mysqli, $data["kelompok_umur"]);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO menu VALUES('','$makan_pagi','$makan_siang','$makan_sore','$makanan_pendamping','$deskripsi','$kelompok_umur')");

	return mysqli_affected_rows($mysqli);
}

function anak($data){
	global $mysqli;

	$nama_anak=strtolower(stripslashes($data["nama_anak"]));
	$jk=mysqli_real_escape_string($mysqli, $data["jk"]);
	$umur=mysqli_real_escape_string($mysqli, $data["umur"]);
	$berat=mysqli_real_escape_string($mysqli, $data["berat"]);
	$tinggi=mysqli_real_escape_string($mysqli, $data["tinggi"]);
	$tanggal_cek=date("Y-m-d");
	$id_ibu=mysqli_real_escape_string($mysqli, $data["id_ibu"]);
	
	mysqli_query($mysqli, "INSERT INTO anak VALUES('','$nama_anak','$jk','$umur','$berat','$tinggi','$tanggal_cek','$id_ibu')");

    return mysqli_affected_rows($mysqli);
    }


?>