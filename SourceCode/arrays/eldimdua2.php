<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php 

	$daftar=array(array("Kumbang","Hewan"), 
				  array("Bayam","Sayur"), 
				  array("Ayam","Hewan" ) , 
				  array("Kubis","Sayur") , 
				  array("Apel","Buah") ) ; 

	foreach ($daftar as $baris) 
	{
		foreach ($baris as $nilai) 
			print ("$nilai "); 
		
		print("<br>"); // Pindah baris
	}

	?> 
</body>
</html>