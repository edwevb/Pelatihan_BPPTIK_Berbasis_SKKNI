<!DOCTYPE html>
<html>
<head>
	<title>Kelas Lagu</title>
</head>
<body>
	<?php
		class Lagu
		{
			public $judul;
			public $penyanyi;
		}

		//Penggunaan kelas
		$lagu_a = new Lagu();
		$lagu_b = new Lagu();

		//Isikan data ke properti
		$lagu_a->judul = "Speechless";
		$lagu_a->penyanyi = "Naomi Scott";

		$lagu_b->judul = "Beauty and The Beast";
		$lagu_b->penyanyi = "Ariana Grande";

		//Tampilkan isi properti
		print("Objek lagu_a<br>");
		print("Judul: ".$lagu_a->judul. "<br>");
		print("Penyanyi: ".$lagu_a->penyanyi. "<br><br>");

		print("Objek lagu_b<br>");
		print("Judul: ".$lagu_b->judul. "<br>");
		print("Penyanyi: ".$lagu_b->penyanyi. "<br>");

	?>
</body>
</html>