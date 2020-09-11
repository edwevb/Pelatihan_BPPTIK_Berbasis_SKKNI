<!DOCTYPE html>
<html>
<head>
	<title>Kelas Lagu</title>
</head>
<body>
	<?php
		//Menyertakan kelas lagu di lagu.php
		include_once("lagu.php");

		//Penggunaan kelas
		$lagu = new Lagu();

		//Tampilkan isi properti
		print("Judul: ".$lagu->peroleh_judul(). "<br>");
		print("Penyanyi: ".$lagu->peroleh_penyanyi(). "<br>");

		//Ubah data
		$lagu->ubah_judul("The Power of Love");
		$lagu->ubah_penyanyi("Celine Dion");

		//Tampilkan isi properti
		print("<br>");
		print("Judul: ".$lagu->peroleh_judul(). "<br>");
		print("Penyanyi: ".$lagu->peroleh_penyanyi(). "<br>");
	?>
</body>
</html>