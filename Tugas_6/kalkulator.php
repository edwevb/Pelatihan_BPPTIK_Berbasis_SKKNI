	<?php
	if(isset($_POST['hitung']))
	{
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		if ($bil1 != NULL && $bil2 != NULL)
		{
			$operasi = $_POST['operasi'];
			switch ($operasi) {
				// menjalankan instruksi sesuai dengan value dari <option></option>
				// lalu memanggil fungsi dengan mengoper nilai bil1 dan bil2
				case 'tambah':
				$hasil = tambah($bil1,$bil2);
				break;
				case 'kurang':
				$hasil = kurang($bil1,$bil2);
				break;
				case 'kali':
				$hasil = kali($bil1,$bil2);
				break;
				case 'bagi':
				$hasil = bagi($bil1,$bil2);
				break;
				case 'pil':
				$hasil = "Pilih Operasi Perhitungan !";
				break;
			}
		}else{
			//validasi nilai bil1 dan bil2
			if ($bil1 == NULL && $bil2==NULL) {
				$hasil = "Masukkan Bilangan !";
			}elseif ($bil1 == NULL) {
				$hasil = "Masukkan Bilangan Pertama !";
			}elseif ($bil2 == NULL) {
				$hasil = "Masukkan Bilangan Kedua !";
			}
		}
	}

	//function untuk penjumlahan
	function tambah($bil1, $bil2)
	{
		$bil = $bil1 + $bil2;
		return $bil;
	}
	//function untuk penguragan
	function kurang($bil1, $bil2)
	{
		$bil = $bil1 - $bil2;
		return $bil;
	}
	//function untuk perkalian
	function kali($bil1, $bil2)
	{
		$bil = $bil1 * $bil2;
		return $bil;
	}
	//function untuk pembagian
	function bagi($bil1, $bil2)
	{
		$bil = $bil1 / $bil2;
		return $bil;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>KALKULATOR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kalkulator" align="center">
		<h2 class="judul">KALKULATOR</h2>
		<a class="brand" href="https://bpptik.kominfo.go.id">Sertifikasi BPPTIK</a>
		<form method="post" action="">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="pil">Pilih Operasi</option>
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Jumlah" class="tombol">											
		</form>
		<!-- OUTPUT -->
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>