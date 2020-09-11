<!DOCTYPE html>
<html>
<head>
	<title>Contoh objek</title>
</head>
<body>
	<?php
		$objek_dir = dir(".");

		//Tampilkan isi properti path
		print("Isi path: ". $objek_dir->path . "<br>");

		//Tampilkan isi direktori
		while ($namafile = $objek_dir->read()) {
			print("$namafile<br>");
		}

		//Tutup direktori
		$objek_dir->close();
	?>
</body>
</html>