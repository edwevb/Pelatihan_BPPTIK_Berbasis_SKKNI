<!DOCTYPE html>
<html>
<head>
	<title>Fungsi Tanpa Nilai Balik</title>
</head>
<body>
	<?php
		print("Hei, lihatlah! tulisan berikut akan ditebalkan. ");
		tulis_tebal("na..na..na..na. ");
		print("Akan tetapi, saya tidak.");

		function tulis_tebal($st)
		{
			print("<b>$st</b>");
		}
	?>
</body>
</html>