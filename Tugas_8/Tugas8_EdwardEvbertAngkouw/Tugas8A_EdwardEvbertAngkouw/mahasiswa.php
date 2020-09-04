<?php
//KONSTANTA
define("IPK", 3.90);

//FUNCTION yang berisikan data mahasiswa bertipe data array
function getDataMahassiwa()
{
	$data = array(
					"nama" => "Edward",
					"npm" 	=> "17117369",
					"fakultas" => "Fakultas Ilmu Komputer & Teknologi Informasi",
					"jurusan" => "Sistem Informasi"
					);
	return $data;
}

//Memanggil Fungsi
$dataMahasiswa = getDataMahassiwa();
echo "Nama : ".$dataMahasiswa['nama'];
echo '<br>';
echo "NPM : ".$dataMahasiswa['npm'];
echo '<br>';
echo "Fakultas : ".$dataMahasiswa['fakultas'];
echo '<br>';
echo "Jurusan : ".$dataMahasiswa['jurusan'];
echo '<br>';
echo "IPK : ".IPK;
