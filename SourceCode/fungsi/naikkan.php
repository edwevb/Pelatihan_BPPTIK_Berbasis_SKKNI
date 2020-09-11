<!DOCTYPE html>
<html>
<head>
	<title>Pengubahan Nilai Argumen</title>
</head>
<body>
	<?php
		$a = 5;
		print("Nilai semula: $a<br>");
		naikkan($a);
		print("Nilai sekarang: $a<br>");

		function naikkan(&$x) //jika &$x) lihatlah perubahannya
		{
			$x++;
		}
	?>
</body>
</html>