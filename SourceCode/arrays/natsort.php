<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php

		$paket = array("1 mangga", "2 mangga", "12 mangga", "11 mangga", "20 mangga");

		//menampilkan data asal
		foreach ($paket as $nilai)
			print("$nilai<br>");

		print("<hr>");

		sort($paket); //mengurutkan tidak secara alami

		//menampilkan hasil sort()
		print("Hasil sort(): <br>");
		foreach ($paket as $nilai)
			print("$nilai<br>");

		print("<hr>");

		natsort($paket); //mengurutkan secara alami

		//menampilkan hasil natsort()
		print("Hasil natsort(): <br>");
		foreach ($paket as $nilai)
			print("$nilai<br>");

	?>
</body>
</html>