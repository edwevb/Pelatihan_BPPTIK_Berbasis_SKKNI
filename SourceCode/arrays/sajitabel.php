<!DOCTYPE html>
<html>
<head>
	<title>Data dalam Tabel</title>
</head>
<body>
	<?php
		$pribadi[0]["nama"] = "Axl Rose";
		$pribadi[0]["gender"] = true;
		$pribadi[0]["usia"] = 58;

		$pribadi[1]["nama"] = "Amy Lee";
		$pribadi[1]["gender"] = false;
		$pribadi[1]["usia"] = 38;

		$pribadi[2]["nama"] = "Hayley Williams";
		$pribadi[2]["gender"] = false;
		$pribadi[2]["usia"] = 31;

		//menampilkan dalam tabel
		print("<table border=\"1\">");
		print("<thead>");
		print("<tr>");
		print("<th>Nama</th>");
		print("<th>Jenis Kelamin</th>");
		print("<th>Usia</th>");
		print("</tr>");
		print("</thead>");
		print("<tbody>");

		foreach ($pribadi as $data) {
			$nama = $data["nama"];
			$gender = $data["gender"] ? "Pria":"Wanita";
			$usia = $data["usia"];
			print("<tr>");
			print("<td>$nama</td>");
			print("<td>$gender</td>");
			print("<td>$usia</td>");
			print("</tr>");
		}

		print("</body>");
		print("</table");
	?>
</body>
</html>