<!DOCTYPE html>
<html>
<head>
	<title>Kelas Lagu</title>
</head>
<body>
	<?php
		class Lagu
		{
			public $judul = "Speechless";
			public $penyanyi = "Naomi Scott";

			//Metode
			function ubah_judul($judul)
			{
				$this->judul = $judul;
			}

			function ubah_penyanyi($penyanyi)
			{
				$this->penyanyi = $penyanyi;
			}
		}

		//Penggunaan kelas
		$lagu = new Lagu();

		//Tampilkan isi properti
		print("Judul: ".$lagu->judul. "<br>");
		print("Penyanyi: ".$lagu->penyanyi. "<br>");

		//Ubah data
		$lagu->ubah_judul("Behind this Hazel Eyes");
		$lagu->ubah_penyanyi("Kelly Klarkson");

		//Tampilkan isi properti
		print("<br>");
		print("Judul: ".$lagu->judul. "<br>");
		print("Penyanyi: ".$lagu->penyanyi. "<br>");
	?>
</body>
</html>