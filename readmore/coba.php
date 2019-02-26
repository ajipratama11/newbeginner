
<?php  
 $db = new mysqli('localhost','root','','test');//koneksi database
 echo $db->connect_errno ? 'Koneksi database gagal : '.$db->connect_error:'';
?>
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
if(isset($_GET['id'])){
 $id = $db->real_escape_string($_GET['id']);
 $query = $db->query("select * from artikel where id = '$id' ") or die($db->error);
 while($data = $query->fetch_assoc()){
 echo '<strong>'.$data['judul'].'</strong><hr />';
 echo $data['isi']; 
 }
}else{
 $query = $db->query("select * from artikel") or die($db->error);
 while($data = $query->fetch_assoc()){
 echo '<strong>'.$data['judul'].'</strong><hr />';
 $artikel = $data['isi']; 
 $potong_artikel = substr($artikel,0,10); //substr()
 echo $potong_artikel.'... <a href="artikel.php?id='.$data['id'].'">Readmore>></a>

';
 }
}
?>
<div class="container" style="margin-top:40px">
	<div class="row">
		<div class="col-md-9">
			  <div class="panel panel-default">
			   <div class="panel-body">
				  <h3><<?php echo $data['judul'] ?>;</h3>
					<div class="info-meta">
						<ul class="list-inline">
							<li><i class="fa fa-clock-o"></i> Jan 5, 2016 </li>
							<li><i class="fa fa-eye"></i>21k</li>
							<li><i class="fa fa-heart-o"></i>372</li>
							<li><i class="fa fa-user"></i> Posting by Ilmu Detil</li>
							<li class="pull-right">Category : Education</li>
						</ul>
					</div>
				  <hr>
				  
					<div class = "media">
					   <a class = "pull-left" href = "#">
						  <img class = "media-object " src = "images/education.jpg" width="100%" height="200px" >
					   </a>
					   <div class = "media-body">
						  <p><?php  echo $potong_artikel.'... <a href="artikel.php?id='.$data['id'].'">Readmore>></a>';   ?>
						  </p> 
						  </div>
						<p style="text-align:right;">
							<a href="artikel_edukasi.html">
								<button class="btn btn-primary">Read More</button>
							</a>
						</p>
					</div>
					<hr>
					<h3>Tip dan Trik dalam memilih laptop untuk penyuka game</h3>
					<div class="info-meta">
						<ul class="list-inline">
							<li><i class="fa fa-clock-o"></i> Jan 5, 2016 </li>
							<li><i class="fa fa-eye"></i>21k</li>
							<li><i class="fa fa-heart-o"></i>372</li>
							<li><i class="fa fa-user"></i> Posting by Ilmu Detil</li>
							<li class="pull-right">Category : Technology</li>
						</ul>
					</div>
				  <hr>
				  
					<div class = "media">
					   <a class = "pull-left" href = "#">
						  <img class = "media-object" src = "images/technology.jpg" width="300px" height="200px">
					   </a>
					   
					   <div class = "media-body">
						  <p>A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).
						  A simple shell for an h1 to appropriately space out and segment sections of content on a page.
						  </p> 
						  <p>It can utilize the h1's default small element, as well as most other components (with additional styles).
							A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles). A simple shell for an h1 to appropriately space out and segment sections of content on a page.
						 </p>  
					   </div>
						<p style="text-align:right;">
							<a href="artikel_technology.html">
							<button class="btn btn-primary">Read More</button>
							</a>
						</p>
					</div>
			   </div>
			</div>
		 </div>	 
		<div class="col-md-3">
			<div class="panel panel-default">
			   <div class="panel-heading"><h4 class="text-center">Latest News</h4></div>
			   <div class="panel-body">
					<div class="recent">
						<a href="#"><img class="img-responsive" src="images/sport.jpg" alt="" /></a>				
						<div class="info-meta">
							<ul class="list-inline">
								<li><i class="fa fa-clock-o"></i> Jan 5, 2016 </a></li>
								<li><i class="fa fa-eye"></i>21k</li>
								<li><i class="fa fa-heart-o"></i>372</li>
							</ul>
						</div>
						<h4>
							<a href="">Pertandingan Basket NBA berlangsung sangat sengit</a>
						</h4>
					</div>
					
					<div class="recent">
						<a href="#"><img class="img-responsive" src="images/technology.jpg" alt="" /></a>							
						<div class="info-meta">
							<ul class="list-inline">
								<li><i class="fa fa-clock-o"></i> Jan 5, 2016</li>
								<li><i class="fa fa-eye"></i>21k</li>
								<li><i class="fa fa-heart-o"></i>372</li>
							</ul>
						</div>
						<h4 class="entry-title">
							<a href="">Tip dan Trik dalam memilih laptop untuk penyuka game</a>
						</h4>
					</div><!--recent-->
				</div>
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
	<script src='assets/js/jquery.js'></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
