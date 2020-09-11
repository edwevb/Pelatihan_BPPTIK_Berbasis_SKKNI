<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php
		$daftar["Produk A"]["Solo"]=10; 
		$daftar["Produk A"]["Medan"]=12;  
		$daftar["Produk A"]["Denpasar"]=3; 
		$daftar["Produk A"]["Jakarta"]=5; 

		$daftar["Produk B"]["Solo"]=7;  
		$daftar["Produk B"]["Medan"]=27;
		$daftar["Produk B"]["Denpasar"]=5; 
		$daftar["Produk B"]["Jakarta"]=12; 

		$daftar["Produk C"]["Solo"]=120;
		$daftar["Produk C"]["Medan"]=54;
		$daftar["Produk C"]["Denpasar"]=70;
		$daftar["Produk C"]["Jakarta"]=85;

		
		foreach ($daftar as $produk => $daftar_cabang) 
		{
			print("<li>Barang: $produk</li>"); 

			print ("<ul>");

			foreach ($daftar_cabang as $cabang => $nilai) 
				print ("<li>$cabang: $nilai</li>") ; 

			print ("</ul>");
		}
		
	?> 
</body>
</html>