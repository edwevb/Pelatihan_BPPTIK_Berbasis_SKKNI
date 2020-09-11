<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php
		$daftar["Kumbang"] = "Hewan" ; 
		$daftar["Bayam"] = "Sayur" ; 
		$daftar["Ayam"] = "Hewan" ; 
		$daftar["Kubis"] = "Sayur"; 
		$daftar["Apel"] = "Buah" ; 

		print_r ($daftar);
		print ("<hr>"); 
		foreach ($daftar as $kunci => $isi) 
			print ("$kunci => $isi<br>"); 
	?>
</body>
</html>