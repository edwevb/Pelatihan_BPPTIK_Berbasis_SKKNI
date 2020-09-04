<?php 

class Biodata
{
    //OBJECT
    public $nama,
           $usia,
           $alamat,
           $profesi;

    //METHOD
    public function getBiodata()
    {
        //Memanggil object diluar method (Global Variable) dengan $this
    	return "$this->nama,
                $this->usia,
                $this->alamat,
                $this->profesi";
    }
}

//Memasukkan PROPERTY kedalam OBJECT
$biodata = new Biodata();
$biodata->nama = "Edward Evbert Angkouw";
$biodata->usia = "24 Tahun";
$biodata->alamat = "Depok, Jawa Barat";
$biodata->profesi = "Mahasiswa";
echo $biodata->getBiodata();
