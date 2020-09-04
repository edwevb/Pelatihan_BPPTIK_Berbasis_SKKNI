<?php 
	define("InputProgram", 1);

	function luasSegitiga($tinggi, $alas)
	{
		$luas = 0.5 * $alas * $tinggi;
		return $luas;
	}

	function luasPersegi($sisi)
	{
		$luas = $sisi * $sisi;
		return $sisi;
	}

	$luasSegitiga = luasSegitiga(5, 100);
	echo "Luas Segitiga = ".$luasSegitiga;
	echo '<br>';
	$luasPersegi = luasPersegi(8);
	echo "Luas Persegi = ".$luasPersegi;