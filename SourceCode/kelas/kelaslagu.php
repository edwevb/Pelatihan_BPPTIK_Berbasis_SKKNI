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
		$lagu = new Lagu();

		//Isikan data ke properti
		$lagu->judul = "Speechless";
		$lagu->penyanyi = "Naomi Scott";

		//Tampilkan isi properti
		print("Judul: ".$lagu->judul."<br>");
		print("Penyanyi: ".$lagu->penyanyi."<br>");
	?>
</body>
</html>