<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php	
		$kota = array("Jakarta", "Bandung", "Bekasi", "Tangerang", "Depok" );

		//menampilkan isi elemen satu per satu
		for ($indeks=0; $indeks < 5; $indeks++) 
			print($kota[$indeks]."<br>");
	?>
</body>
</html>