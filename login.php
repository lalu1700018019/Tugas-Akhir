<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$file = "./admin/user.txt";

	if (file_exists($file)) {

		$fileku = fopen("$file", "r");
		$userku = fgets($fileku);
		$passku = fgetc($fileku);
		if($password !=$passwordInput)
		{
			$userku = null;
			$passku = null;
			echo "<script>alert('Username dan Password salah')</script>";
			require 'index.php';
		}
		else
		{
			echo "<script>alert('Berhasil Login')</script>";
			header('location:./prev/index.php');
		}
		fclose($fileku);
	}
	else
	{
		echo "<script>alert('Username dan Password salah!')</script>";
		require 'index.php';
	}
?>