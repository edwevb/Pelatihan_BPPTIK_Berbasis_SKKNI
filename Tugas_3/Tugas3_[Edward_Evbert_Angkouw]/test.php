<?php
//	Perulanagan (For - loop)
//  inisialisasi, kondisi, increment
//  menetapkan nilai awal, menentukan kondisi, melakukan perhitungan,
for ($i=1; $i <= 100 ; $i++) { 

	// jika value dari $i modulo 2 tidak sama dengan 0,
	// maka output adalah ganjil, otherwise.. genap.
	if ($i % 2 !== 0) {
		echo $i." adalah Bilangan <strong>Ganjil</strong>";
	}else{
		echo $i. " adalah Bilangan <strong>Genap</strong>";
	}
	//line break
	echo "<br>";
}