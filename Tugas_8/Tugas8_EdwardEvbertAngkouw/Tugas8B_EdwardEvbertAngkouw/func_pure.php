<?php 

	function jumlahProduk($stokProduk, $outProduct)
	{
		$kuantitasProduct = $stokProduk - $outProduct;
		return $kuantitasProduct;
	}

	function getTotal($outProduct, $hargaSatuan)
	{
		$costProduct = $outProduct * $hargaSatuan;
		return $costProduct;
	}

	$namaProduk   = "Tolak Angin";
	$stokProduk   = 250;
	$outProduct   = 130;
	$hargaSatuan  = 2000;
	$totalProduct = jumlahProduk($stokProduk, $outProduct);
	$totalBiaya   = getTotal($outProduct, $hargaSatuan);

	
	echo "Jumlah produk yang dipesan : ".$outProduct."pcs";
	echo '<br>';
	echo "Total biaya : Rp.".$totalBiaya;
	echo '<br><br>';
	echo "Sisa produk pada Inventory : ".$totalProduct."pcs";