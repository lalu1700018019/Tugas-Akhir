<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman Web Dinamis Dengan PHP | www.malasngoding.com</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">WWW.ARFIMAULANA.COM</h1>
		<h1 class="judul">CUCI MOTOR++</h1>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="./halaman/bayar/index.php">BAYAR</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				header('Location: ./halaman/home.php');
				break;
			case 'bayar':
				include "halaman/bayar/index.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
			header('Location: ./halaman/home.php');
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>