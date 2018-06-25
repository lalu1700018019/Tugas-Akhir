<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<script type="text/javascript">
	function hitung()
	{ 
	var a = parseFloat(document.operasi.angka1.value);
	var b = document.getElementById("operasi").kendar.value;
	var c = document.getElementById("operasi").eek.value;

	var hasil=0.0;
	var tamp =0.0;
	if(b=="Motor")
	{
			if (c=="Cuci Biasa") {
			hasil = a * 7000;
			if (a>2) 
				{
					tamp = a*7000*10/100;
					hasil = a*7000-tamp;
					alert("Total Biaya Cuci Biasa Motor Dapat Diskon : " +hasil);
					window.open('../bayar/index.php');
				}

			alert("Total Biaya Cuci Biasa Motor : " +hasil);
			window.open('../bayar/index.php');
		}
		else if (c=="Cuci Salju") {
			hasil = 10000;
			
			if (a>2) 
				{
					tamp = a*10000*10/100;
					hasil = a*10000-tamp;
					 alert("Total Biaya Cuci Salju Motor Dapat Diskon : " +hasil);
					window.open('../bayar/index.php');
				}
				alert("Total Biaya Cuci Salju Motor : " +hasil);
				window.open('../bayar/index.php');
		}
		else if (c=="Cuci Komplit") {
			hasil = a * 15000;
			
			if (a>2) 
				{
					tamp = a*15000*10/100;
					hasil = a*15000-tamp;
					 alert("Total Biaya Cuci Komplit Motor Dapat Diskon : " +hasil);
					window.open('../bayar/index.php');
				}
				 alert("Total Biaya Cuci Komplit Motor : " +hasil);
				window.open('../bayar/index.php');
		}
	}
	else if(b=="Mobil")
	{
		if (c=="Cuci Biasa") {
			hasil = a * 10000;
			if (a>2) 
				{
					tamp = a*10000*10/100;
					hasil = a*10000-tamp;
					 alert("Total Biaya Cuci Biasa Mobil Dapat Diskon : " +hasil);
			window.open('../bayar/index.php');
				}
				alert("Total Biaya Cuci Biasa Mobil : " +hasil);
			window.open('../bayar/index.php');
		}
		else if (c=="Cuci Salju") {
			hasil = a * 15000; 
			if (a>2) 
				{
					tamp = a*15000*10/100;
					hasil = a*15000-tamp;
					 alert("Total Biaya Cuci Salju Mobil Dapat Diskon : " +hasil);
			window.open('../bayar/index.php');
				}
				alert("Total Biaya Cuci Salju Mobil : " +hasil);
			window.open('../bayar/index.php');
		}
		else if (c=="Cuci Komplit") {
			hasil = a * 20000;
			 alert("Total Biaya Cuci Komplit Mobil Dapat Dapat : " +hasil);
			window.open('../bayar/index.php');
			if (a>2) 
				{
					tamp = a*20000*10/100;
					hasil = a*20000-tamp;
					 alert("Total Biaya Cuci Komplit Mobil : " +hasil);
			window.open('../bayar/index.php');
				}
		}
	}
	}
</script>
<div class="content">
	<header>
		<h1 class="judul">WWW.ARFIMAULANA.COM</h1>
		<h1 class="judul">CUCI MOTOR++</h1>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="../home.php">HOME</a></li>
			<li><a href="index.php?page=bayar">BAYAR</a></li>
		</ul>
	</div>
 
	<div class="badan">
<body background="a.jpg">
	<center><h1>Form Pembayaran</h1></center>
	<center><form class="form-style-6" name="operasi" id="operasi" action=""><pre>
	<select name="kendar" id="kendar">  	
		<option value="Motor">Motor</option>  
		<option value="Mobil">Mobil</option>  
		</select><br>
		<input type="text" name="angka1" id="angka1" placeholder="Banyak Kendaraan" required=”required”><br>
		<select name="eek" id="eek"><br>
		<option value="Cuci Biasa">Cuci Biasa</option>  
		<option value="Cuci Salju">Cuci Salju</option>  
		<option value="Cuci Komplit">Cuci Komplit</option>  
		</select><br>
		</pre>
	<input type="submit" name="submit" id='submit' value="Submit" onclick="hitung();" />
		<h4>Promo jika cuci lebih dari 2 kendaraan dapat diskon 10%!</h4>	
	</form>
	<div id="wrapper">
<span id="hasil">
</span>
</div>
	</center>
</body>
</div>
</div>
</html>