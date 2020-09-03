<?php
// URL untuk input lagi
$back = "form.php";
// menangkap value dari inputan pada form.php dengan,
// variable global yaitu $_POST
// lalu menuju kondisi 
if ($_POST['bintang'] == NULL)
{
	echo "Kosong";
	echo "<br>";
	echo "<a href=$back>Input ulang</a>";
}else{
	$b = $_POST['bintang'];
	// inisialisasi, kondisi, increment
	for ($i=1; $i<=$b; $i++)
	{
		for ($j=$b; $j>=$i; $j--)
		{
			echo "*";
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<a href=$back>Input ulang</a>";
}