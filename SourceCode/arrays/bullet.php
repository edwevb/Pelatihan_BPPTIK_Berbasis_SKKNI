<!DOCTYPE html>
<html>
<head>
	<title>Bullet</title>
</head>
<body>
	<?php
		$kota = array("Jakarta", "Bandung", "Bekasi", "Tangerang", "Depok" );

		//menampilkan isi elemen satu per satu
		print("<ul>");
		foreach ($kota as $namakota)
			print("<li>$namakota</li>");
		print("</ul>")
	?>
</body>
</html>