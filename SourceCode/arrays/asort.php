<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php
		$letak = array("Roma" => "Italia",
					  "Vienna" => "Austria",
					  "New York" => "Amerika Serikat",
					  "Tokyo" => "Jepang",
					  "Kairo" => "Mesir");

		//menampilkan data asal
		foreach ($letak as $kota => $negara)
			print("$kota => $negara<br>");

		print("<hr>");

		asort($letak); //Ascending

		//menampilkan hasil asort()
		print("Hasil asort(): <br>");
		foreach ($letak as $kota => $negara)
			print("$kota => $negara<br>");

		print("<hr>");

		arsort($letak); //Descending

		//menampilkan hasil arsort()
		print("Hasil arsort(): <br>");
		foreach ($letak as $kota => $negara)
			print("$kota => $negara<br>");

	?>
</body>
</html>