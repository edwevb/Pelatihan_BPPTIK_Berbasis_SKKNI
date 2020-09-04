<?php 

$nilai = 5;
checkNilai($nilai);

function checkNilai($nilai)
{
	if ($nilai >= 80) 
	{
		echo "GRADE C";
	}elseif ($nilai >= 60 && $nilai < 80)
	{
		echo 'GRADE B';
	}else{
		//Akan terus terpanggil sampai memenuhi
		//kondisi minimal yaitu nilai = 60
		$nilaiTambahan = 5;
		checkNilai($nilai+$nilaiTambahan);
	}
}