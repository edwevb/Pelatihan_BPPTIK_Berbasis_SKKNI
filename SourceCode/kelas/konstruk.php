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

			function Lagu($judul, $penyanyi)
			{
				$this -> judul = $judul;
				$this -> penyanyi = $penyanyi;
			}
		}
		
		//Penggunaan kelas
		$lagu = new Lagu("Speechless", "Naomi Scott");

		//Tampilkan isi properti
		print("Judul: ".$lagu->judul. "<br>");
		print("Penyanyi: ".$lagu->penyanyi. "<br>");
	?>
</body>
</html>		