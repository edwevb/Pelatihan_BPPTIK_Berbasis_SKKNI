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

		ksort($letak); //mengurutkan kunci secara ascending

		//menampilkan hasil ksort()
		print("Hasil ksort(): <br>");
		foreach ($letak as $kota => $negara)
			print("$kota => $negara<br>");

		print("<hr>");

		krsort($letak); //mengurutkan kunci secara descending

		//menampilkan hasil krsort()
		print("Hasil krsort(): <br>");
		foreach ($letak as $kota => $negara)
			print("$kota => $negara<br>");
	?>
</body>
</html>