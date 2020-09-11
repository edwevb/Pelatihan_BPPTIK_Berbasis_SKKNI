<?php
		
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
