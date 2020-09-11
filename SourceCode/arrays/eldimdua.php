<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php
		$daftar = array(array("Kumbang","Hewan"),
						array("Bayam","Sayur"),
						array("Ayam","Hewan"),
						array("Kubis","Sayur"),
						array("Apel","Buah"));
		for ($i=0; $i < 5; $i++) 
			print($daftar[$i][0].":".
				  $daftar[$i][1]."<br>");
		
	?>
</body>
</html>