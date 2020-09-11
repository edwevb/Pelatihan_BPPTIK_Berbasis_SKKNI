<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php
		$kota = array("Jakarta", "Bandung", "Bekasi", "Tangerang", "Depok" );

		//menampilkan data asal
		foreach ($kota as $namakota)
			print("$namakota<br>");

		print("<hr>");

		sort($kota); //Ascending

		//menampilkan hasil sort()
		print("Hasil sort(): <br>");
		foreach ($kota as $namakota)
			print("$namakota<br>");

		print("<hr>");

		rsort($kota); //Descending

		//menampilkan hasil rsort()
		print("Hasil rsort(): <br>");
		foreach ($kota as $namakota)
			print("$namakota<br>");

	?>
</body>
</html>