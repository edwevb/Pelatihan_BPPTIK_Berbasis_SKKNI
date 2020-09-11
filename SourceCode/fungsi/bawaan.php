<!DOCTYPE html>
<html>
<head>
	<title>Argumen Bawaan</title>
</head>
<body>
	<?php
		tulis_tebal ("abc");
		tulis_tebal ("abc", 10);
		tulis_tebal ("abc", 10, true);

		function tulis_tebal($teks, $jum = 1, $tebal = false)
		{
			if ($tebal)
				print("<b>");

			for ($cacah = 1; $cacah <= $jum; $cacah++)
				print($teks);

			if ($tebal)
				print("</b>");

			print("<br>");
		}
	?>
</body>
</html>