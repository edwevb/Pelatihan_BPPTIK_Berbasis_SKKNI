<!DOCTYPE html>
<html>
<head>
	<title>Variabel Lokal</title>
</head>
<body>
	<?php
		$pemilik = "Erika";
		print("pemilik semula: $pemilik<br>");

		ganti_pemilik();

		print("Pemilik sekarang: $pemilik<br>");

		function ganti_pemilik()
		{
			$pemilik = "Estianti";

			print("Pemilik di fungsi ganti_pemilik(): $pemilik<br>");

		}
	?>
</body>
</html>