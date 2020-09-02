<?php
// variabel yang akan dioperasikan
$bil1    = 9;
$bil2    = 3;

//function untuk penjumlahan
function tambah($x, $y)
{
	$z = $x + $y;
	return $z;
}

//function untuk penguragan
function kurang($x, $y)
{
	$z = $x - $y;
	return $z;
}

//function untuk perkalian
function kali($x, $y)
{
	$z = $x * $y;
	return $z;
}

//function untuk pembagian
function bagi($x, $y)
{
	$z = $x / $y;
	return $z;
}
//output
echo "bilangan 1 : $bil1";
echo "<br>";
echo "bilangan 2 : $bil2";
echo "<br>";
echo "=============================================";
echo "<br>";
echo "hasil penjumlahan adalah : ".tambah($bil1, $bil2);
echo "<br>";
echo "hasil pengurangan adalah : ".kurang($bil1, $bil2);
echo "<br>";
echo "hasil perkalian adalah : ".kali($bil1, $bil2) ;
echo "<br>";
echo "hasil pembagian adalah : ".bagi($bil1, $bil2);
?>