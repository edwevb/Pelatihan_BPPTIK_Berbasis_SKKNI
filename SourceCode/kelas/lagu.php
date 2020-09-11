<?php
	class Lagu
	{
		private $judul = "Speechless";
		private $penyanyi = "Naomi Scoot";

		//Metode
		function ubah_judul($judul)
		{
			$this->judul = $judul;
		}

		function ubah_penyanyi($penyanyi)
		{
			$this->penyanyi = $penyanyi;
		}

		function peroleh_judul()
		{
			return $this->judul;
		}

		function peroleh_penyanyi()
		{
			return $this->penyanyi;
		}
	}
?>