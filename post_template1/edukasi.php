
<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Latih Balita Anda Dalam Merangsang Saraf Motorik</title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	<link rel="stylesheet" href="assets/css/social-button.css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	
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
		$id = $_GET['edukasi'];
		if (isset($_GET['edukasi'])) { 
global $mysqli;
		
		$que = mysqli_query($config,"SELECT * FROM artikel where id ='$id' ");
		while ($res=mysqli_fetch_assoc($que)) { ?>
	
<div class="container" style="margin-top:40px">
	<div class="row">
		<div class="col-md-12">
			  <div class="panel panel-default">
			   <div class="panel-body">
			    <div class="post-detail">
				  <h3><?php echo $res['judul']; ?></h3>
				  
					<div class="info-meta">
						<ul class="list-inline">
							<li><i class="fa fa-clock-o"></i><?php echo $res['tanggal']; ?></li>
							
							<li><i class="fa fa-user"></i><?php echo $res['penulis']; ?></li>
							
						</ul>
					</div>
				  <hr>
				  <p>
				  <?php echo $res['isi']; ?>
				  </p>
				
				  </div>
						  
				  
			   </div>
			   
			</div>
		 </div>
	
<!--FOOTER-->
<div class="footer-bottom">
	<div class="container-fluid text-center">
		<p>Copyright &copy; 2016,  DTC. Developed by <a href="https://ilmu-detil.blogspot.com/">Pusat Ilmu</a></p>
	</div>
</div>	
</div>	 
	<?php } } ?>
</body>
</html>
