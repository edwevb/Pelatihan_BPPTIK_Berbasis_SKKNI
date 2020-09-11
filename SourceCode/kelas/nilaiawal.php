<!DOCTYPE html>
<html>
<head>
	<title>Kelas Lagu</title>
</head>
<body>
	<?php
		class Lagu
		{
			public $judul = "Hero";
			public $penyanyi = "Mariah carey";
		}

		//Penggunaan kelas
		$lagu = new Lagu();

		//Tampilkan isi properti
		print("Judul: ".$lagu->judul. "<br>");
		print("Penyanyi: ".$lagu->penyanyi. "<br><br>");
	?>
</body>
</html>