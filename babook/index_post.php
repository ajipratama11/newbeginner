
<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>HeadliNews Dengan OwlCarousel</title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ilmudetil1.css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">	
	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			Pusat Ilmu Secara Detil</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="index.html">Home</a></li>
				<li class="clr2"><a href="">Programming</a></li>
				<li class="clr3"><a href="">English</a></li>
			</ul>
		</div>
	</div>
</nav>
</br></br></br></br>

<?php
				
		global $mysqli;
		$jumlahDataPerhalaman = 2;
		$data = mysqli_query($koneksi, "SELECT * FROM artikel where jenis='tips' order by id desc");
		$jumlahData = mysqli_num_rows($data);
		$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
		$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
		$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
		
		$artikel = mysqli_query($koneksi,"SELECT * FROM artikel where jenis='tips' order by id desc limit $awalData, $jumlahDataPerhalaman ");
		while ($res=mysqli_fetch_array($artikel)) { ?>
	
<div class="container" style="margin-top:40px">
	
	<div class="row">
		<div class="col-md-12">
			  <div class="panel panel-default">
			   <div class="panel-body">
				  <h3><?php echo $res['judul']; ?></h3>
					<div class="info-meta">
						<ul class="list-inline">
							<li><i class="fa fa-clock-o"></i><?php echo $res['tanggal']; ?></li>
							
							<li><i class="fa fa-user"></i><?php echo $res['penulis']; ?></li>
							
						</ul>
					</div>
				  <hr>
				  
					<div class = "media">
					 	
					   <div class = "media-body">
					   
						  <p><?php echo substr($res['isi'],0,250); ?> . . . . 
						 </p>
					   </div>
						<p style="text-align:right;">
						<a href="edukasi.php?edukasi=<?php echo $res['id']; ?>">
								<button class="btn btn-primary">Read More</button>
							</a>
						</p>
					</div>
					<hr>
					
			   </div>
			</div>
		 </div>	 
<?php } ?>

<div class="text-center">
<nav aria-label="Page navigation example">
	<ul class="pagination">
<?php if($halamanAktif > 1) : ?>
	<li class="page-item">
	<a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">
		<span>&laquo;</span>
	</a>
<?php endif; ?>
</li>
<?php for ($i=1; $i<= $jumlahHalaman ; $i++) : ?>
	<li class="page-item active">
	<?php if ($i == $halamanAktif) : ?>
		<a class="page-link" href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
		<?php else : ?>
		</li>
		<li class="page-item">
			<a class="page-link" href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
		<?php endif; ?>
	</li>
<?php endfor; ?>
<?php if($halamanAktif < $jumlahHalaman) : ?>
	<li class="page-item">
	<a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">
		<span>&raquo;</span>
	</a>
<?php endif; ?>
</li>
</ul>
</div>






<!--FOOTER-->
	<div class="footer-bottom">
		<div class="container-fluid text-center">
			<p>Copyright &copy; 2016,  DTC. Developed by <a href="https://ilmu-detil.blogspot.com/">Pusat Ilmu</a></p>
		</div>
	</div>				
	<script src='assets/js/jquery.js'></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
</body>
</html>
