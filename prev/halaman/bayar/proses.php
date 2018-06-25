<?php  
	$a = $_POST['angka1'];
	$b = "Motor";
	$c = "Mobil";
	$op = $_POST['operasi'];
	$ke = $_POST['kendar'];
	if($ke=="Motor")
	{
			if ($op=="Cuci Biasa") {
			$hasil = $a * 7000;
			echo "Total Pembayaran untuk Cuci Biasa $b : $hasil";
			if ($a>2) 
				{
					$tamp = $a*7000*10/100;
					$hasil = $a*7000-$tamp;
					echo "<br>Dapat diskon 10%! Total Cuci Biasa $b : $hasil";
				}
		}
		else if ($op=="Cuci Salju") {
			$hasil = 10000;
			echo "Total Pembayaran untuk Cuci Salju $b : $hasil";
			if ($a>2) 
				{
					$tamp = $a*10000*10/100;
					$hasil = $a*10000-$tamp;
					echo "<br>Dapat diskon 10%! Total Cuci Biasa $b : $hasil";
				}
		}
		else if ($op=="Cuci Komplit") {
			$hasil = $a * 15000;
			echo "Total Pembayaran untuk Cuci Komplit $b : $hasil";
			if ($a>2) 
				{
					$tamp = $a*15000*10/100;
					$hasil = $a*15000-$tamp;
					echo "<br>Dapat diskon 10%! Total Cuci Biasa $b : $hasil";
				}
		}
	}
	else if($ke=="Mobil")
	{
		if ($op=="Cuci Biasa") {
			$hasil = $a * 10000;
			echo "Total Pembayaran untuk Cuci Biasa $c : $hasil";
			if ($a>2) 
				{
					$tamp = $a*10000*10/100;
					$hasil = $a*10000-$tamp;
					echo "<br>Dapat diskon 10%! Total Cuci Biasa $b : $hasil";
				}
		}
		else if ($op=="Cuci Salju") {
			$hasil = $a * 15000;
			echo "Total Pembayaran untuk Cuci Salju $c : $hasil";
			if ($a>2) 
				{
					$tamp = $a*15000*10/100;
					$hasil = $a*15000-$tamp;
					echo "<br>Dapat diskon 10%! Total Cuci Biasa $c : $hasil";
				}
		}
		else if ($op=="Cuci Komplit") {
			$hasil = $a * 20000;
			echo "Total Pembayaran untuk Cuci Komplit $c : $hasil";
			if ($a>2) 
				{
					$tamp = $a*20000*10/100;
					$hasil = $a*20000-$tamp;
					echo "<br>Dapat diskon 10%! Total Cuci Biasa $c : $hasil";
				}
		}
	}
	
?>