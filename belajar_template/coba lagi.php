<!DOCTYPE html>
<html>
<head>
	<title>Latihan Input 1</title>
</head>
<style type="text/css">
	#wrapper{
		border: 9px solid #CCC;
		margin: 0 auto;
		width: 1024px;
	}
	#header{
		height: 90px;
		border-bottom: 5px solid;
	}
	#main{
		border-radius: 5px;
		padding: 1px;
		width: 100%;
		margin: 0 auto;
		margin-bottom: 5px;
		background-color: blue; 
	}
	#article{
		margin: 8px;
	}
</style>
<body>
<div id="wrapper">
	<div id="header">
		<center><h1>Latihan Input Data</h1></center>
</div>
<div id="main">
	<article>
		<h3>FORM INPUT</h3>
			<p>
				<form action="">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Nama kamu"/><br /><br />
					<label>Email</label>
					<input type="text" name="email" placeholder="email@domain.com" /><br /><br />
					<label>Status</label>
					<input type="text" name="Status" placeholder="Pelajar/Mahasiswa" /><br /><br />
					<label>Umur</label>
					<input type="text" name="umur" placeholder="Isi dengan Angka" /><br /><br />
					<label>Alamat</label>
					<textarea name="alamat"></textarea><br /><br />
					<input type="submit" value="KIRIM DATA" />
				</form>
			</p>
	
		</article>
	</div>
	<p style="text-align: center;">Latihan input data 1</p>
</div>
</body>
</html>