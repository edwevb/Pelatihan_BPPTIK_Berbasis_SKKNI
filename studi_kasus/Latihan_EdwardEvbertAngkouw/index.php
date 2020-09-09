<!--
				Program ini tidak menggunakan Database, jadi hanya menampilkan output
				sesuai dengan input user, dan data yang telah diinput 
				akan hilang bila browser di refresh

				PS : harap nyalakan internet agar gambar dapat muncul



				===================================
									~BUILD
									PHP 7.2
									Bootstrap V4.5
									XAMPP
									Sublime Text 3

									~AUTHOR
									Edward Evbert Angkouw
				===================================
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://bpptik.kominfo.go.id/wp-content/uploads/2017/02/xfavicon-32.png.pagespeed.ic.dvpFUBVMHP.webp" sizes="32x32" type="image/png">
	<title>Data Customer</title>

	<!--	Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/app.css">

	<!-- Custom CSS -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap');
		h1{
			font-family: 'Montserrat', sans-serif;
		}

		/* 
			Background logo BPPTIK
		*/
		@media (min-width: 575.98px) 
		{
			html body{
				background: -webkit-linear-gradient(to bottom, #1CB5E0, #000046);
				background: url('http://wargajogja.net/wp-content/uploads/2016/05/logo-kemkominfo.png') no-repeat center center fixed,  linear-gradient(to bottom, #000046, #1cb5e0);
				background-size:contain;
				font-family: 'Poppins', sans-serif;
			}
		}

		@media (max-width: 575.98px)
		{
			html body{
				background:url('http://wargajogja.net/wp-content/uploads/2016/05/logo-kemkominfo.png') no-repeat center center fixed;
				background-size: contain;
				font-family: 'Poppins', sans-serif;
			}
		}

		/* 
			Background linier gradient pada modal form
		*/
		.modal{
			background: -webkit-linear-gradient(to top, #1CB5E0, #000046);
			background: linear-gradient(to top, #1CB5E0, #000046); 
		}
		
		/* 
			Mengatur tinggi dan lebar dari konten utama
		*/
		.container{
			background: rgba(255, 255, 255, 0.9)!important; 
			padding: 50px 15px;
		}

		/* 
			Membuat isi dan posisi tabel fit to width dan ke tengah
		*/
    table td {
    	white-space: nowrap;
    }

		th{
			text-align: center;
			vertical-align: middle!important;
		}
		</style>
</head>
<body class="bg-light">
	<br><br><br>
	<main class="container mt-5 shadow-lg rounded-lg">
		<header>
			<button 
			type="button" 
			class="btn btn-sm btn-info" 
			data-toggle="popover" 
			title="Step by step" 
			data-html="true" 
			data-content=
			"
			<ol>
				<li>Click tombol <strong>Tambah data</strong></li>
				<li>Isi semua field pada <strong>Form</strong></li>
				<li>Click <strong>Submit</strong></li>
			</ol>
			"/>Bantuan
			</button>
			<img class="float-right" src="https://bpptik.kominfo.go.id/wp-content/uploads/2017/02/logo-bpptik-02-big.png" alt="logo bpptik" height="50">
			<div class="pt-2">
				<h1>Data Customer Swalayan</h1>
			</div>
		</header>
		<hr class="bg-info" style="opacity: 0.5; border-width: 2.5px;">
		<!-- Tombol trigger untuk FORM -->
		<button type="button" class="btn btn-primary btn-lg my-2" data-toggle="modal" data-target="#tambahDataCustomer">+ Tambah Data</button>
		<article class="table-responsive-lg">
			<table class="table table-hover">
				<thead class="table-info">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Total<br>Harga Sembako</th>
						<th scope="col">Total<br>Harga Buah</th>
						<th scope="col">Total<br>Harga Sayur</th>
						<th scope="col">Total<br>Harga Belanjaan</th>
						<th scope="col">Rata-rata<br>Harga Belanjaan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (isset($_POST['tambah']))
					{
						//	Validasi apakah input field kosong
						if (empty($_POST['nama']) || empty($_POST['alamat']) ||
							empty($_POST['gender']) || empty($_POST['hargaSembako']) ||
							empty($_POST['hargaBuah']) || empty($_POST['hargaSayur']))
						{
							//	Jika kosong akan memanggil fungsi error
							err();
						}
						//	Validasi mengecek input field diisi spasi kosong
						elseif (ctype_space($_POST['nama']) || ctype_space($_POST['alamat']) ||
							ctype_space($_POST['gender']) || ctype_space($_POST['hargaSembako']) ||
							ctype_space($_POST['hargaBuah']) || ctype_space($_POST['hargaSayur'])) 
						{
							//	Jika input hanya spasi kosong. maka akan memanggil fungsi error
							err();
						}else{

							$data = $_POST;

							//	Mendefinisikan value total belanja
							$data['totalBelanja'] = (float)$data['hargaSembako'] 
							+ (float)$data['hargaBuah'] + (float)$data['hargaSayur'];

							//	Mendefinisikan value rata-rata belanja
							$data['rataRata'] = $data['totalBelanja'] / 3;

							//	Mendefinisikan Data pada studi kasus
							$dataPuja = [
								"nama"         => "Puja",
								"alamat"       => "Jl. Durian",
								"gender"       => "Laki-laki",
								"hargaSembako" => 300000,
								"hargaBuah"    => 300000,
								"hargaSayur"   => 300000,
								"totalBelanja" => 600000,
								"rataRata"     => 200000
							];

							//	Mendefinisikan Data pada studi kasus
							$dataPuji = [
								"nama"         => "Puji",
								"alamat"       => "Jl. Anggrek",
								"gender"       => "Perempuan",
								"hargaSembako" => 150000,
								"hargaBuah"    => 100000,
								"hargaSayur"   => 50000,
								"totalBelanja" => 300000,
								"rataRata"     => 100000
							];

							//	Membuat var rows[] untuk menampung data inputan dan data yang
							//	telah didefinisikan sebelumnya yaitu dataPuja dan dataPuji
							$rows=[];

							//	Memasukkan data inputan, dataPuja, dan dataPuji kedalam var rows[]
							array_push($rows, $data);
							array_push($rows, $dataPuja);
							array_push($rows, $dataPuji);

							//	Sorting data ASC berdasarkan Value
							ksort($rows);

							//	Memanggil fungsi alert data berhasil ditambahkan
							success();
						}
					}?>

					<?php
					//	Jika rows tidak kosong maka perulangan dijalankan
					if (isset($rows)): ?>
						<?php 
						$i=1;
						foreach ($rows as $row): ?>
							<tr>
								<td><?= $i++?></td>
								<td>
									<?= strip_tags($row['nama']);?>
								</td>
								<td> 
									<?= strip_tags($row['alamat']);?>
								</td>
								<td>
									<?= strip_tags($row['gender']);?>
								</td>
								<td>
									<?= 'Rp. '.$row['hargaSembako'];?>
								</td>
								<td>
									<?= 'Rp. '.$row['hargaBuah'];?>
								</td>
								<td>
									<?= 'Rp. '.$row['hargaSayur'];?>
								</td>
								<td>
									<?= 'Rp. '.$row['totalBelanja'];?>
								</td>
								<td>
									<?= 'Rp. '.$row['rataRata'];?>
								</td>
							</tr>
						<?php endforeach;?>

						<!-- Jumlah row / data yang ada pada tabel -->
						<p class="text-muted">Total Data : <?= count($rows) ?></p>
					<?php endif; ?>

					<?php
					//	Jika rows kosong maka menampilkan :
					if (!isset($rows)): ?>
						<tr class='text-center lead text-muted'>
							<td colspan='9'>
								<em>Data Customer tidak tersedia, silahkan tambahkan.</em>
							</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</article>
	</main>

	<?php
		//	Dalam fungsi ini terdapat pesan error
		//	Fungsi ini akan terpanggil jika validasi gagal
		function err()
		{
			echo '<div class="alert alert-danger alert-dismissible text-center fade show" role="alert">
			<strong>Kolom form tidak boleh kosong!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';
		}

		//	Dalam fungsi ini terdapat pesan success
		//	Fungsi ini akan terpanggil jika validasi berhasil
		function success()
		{
			echo '<div class="alert alert-success alert-dismissible text-center fade show" role="alert">
			<strong>Data berhasil ditambahkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';
		}
	?>

	<!-- Form tambah Data Customer -->
	<div class="modal fade bg-light" id="tambahDataCustomer" tabindex="-1" aria-labelledby="tambahDataCustomerLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content shadow rounded-lg border-0">
				<div class="modal-header">
					<h5 class="modal-title" id="tambahDataCustomerLabel">Form Tambah Data Customer Swalayan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: 0;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="form-group row">
							<label for="nama" class="col-sm-4 col-form-label">Nama</label>
							<div class="col-sm">
								<input type="nama" name="nama" class="form-control" id="nama" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
							<div class="col-sm">
								<input type="text" name="alamat" class="form-control" id="alamat" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
							<div class="col-sm">
								<select id="gender" class="form-control" name="gender">
									<option value="">Choose...</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="hargaSembako" class="col-sm-4 col-form-label">Total Harga Sembako</label>
							<div class="col-sm">
								<input type="number" name="hargaSembako" class="form-control" id="hargaSembako" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<label for="hargaBuah" class="col-sm-4 col-form-label">Total Harga Buah</label>
							<div class="col-sm">
								<input type="number" name="hargaBuah" class="form-control" id="hargaBuah" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<label for="hargaSayur" class="col-sm-4 col-form-label">Total Harga Sayur</label>
							<div class="col-sm">
								<input type="number" name="hargaSayur" class="form-control" id="hargaSayur" autocomplete="off">
							</div>
						</div>
						<input type="hidden" name="totalBelanja" value="">
						<input type="hidden" name="rataRata" value="">
						<div class="form-group row text-right">
							<div class="col-sm">
								<button type="submit" name="tambah" class="btn btn-primary col-sm-4">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br>
	<footer class="text-center">
		<p class="lead text-dark font-weight-bolder">&copy;2020 Edward Evbert Angkouw</p>
	</footer>

	<!-- Bootstrap JS Script -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/app.js"></script>
	<script>
		$(function () {
		  $('[data-toggle="popover"]').popover()
		})
	</script>
</body>
</html>