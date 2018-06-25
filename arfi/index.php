<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body background="a.jpg">
	<center><h1>Form Pembayaran</h1></center>
	<center><form class="form-style-6"name="operasi" method="post" action="proses.php"><pre>
	<select name="kendar">  	
		<option value="Motor">Motor</option>  
		<option value="Mobil">Mobil</option>  
		</select><br>
		<input type="text" name="angka1" placeholder="Banyak Kendaraan" required=”required”><br>
		<select name="operasi"><br>
		<option value="Cuci Biasa">Cuci Biasa</option>  
		<option value="Cuci Salju">Cuci Salju</option>  
		<option value="Cuci Komplit">Cuci Komplit</option>  
		</select><br>
		</pre>
		<input type="submit" name="submit" value="Submit">
		<h4>Promo jika cuci lebih dari 2 kendaraan dapat diskon 10%!</h4>

		
	
	</form></center>
</body>
</html>