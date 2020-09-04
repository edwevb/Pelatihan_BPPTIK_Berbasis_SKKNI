<?php 

class LuasSegitiga
{
	//Inisialisasi OBJECT
	public $alas, $tinggi;

	//METHOD
	public function hitungLuasSegitiga()
	{
		$luas = 0.5 * $this->alas * $this->tinggi;
		echo "Alas   = ".$this->alas."<br>";
		echo "Tinggi = ".$this->tinggi."<br>";
		echo "Luas   = ".$luas;
	}
}

//Mendifinisikan PROPERTY
$luasSegitiga = new LuasSegitiga();
$luasSegitiga->alas = 5;
$luasSegitiga->tinggi = 8; 
$luasSegitiga->hitungLuasSegitiga();