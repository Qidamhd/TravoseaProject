<!-- <h1 class="judul"><span><?php echo $judul ?></span></h1> -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To do List</title>
	<style>
		/* Basic Style */

		body {
			color: #91908c;
			font-family: Lato, sans-serif;
			background-color: #e4e4e4;
		}

		.container {
			display: block;
			width: 400px;
			margin: 10px auto 100px;
			background-color: #fff;
			padding: 0px 10px 10px 10px;
			border-radius: 10px
		}


		h2 {
			text-align: center;
			padding-top: 9px;
			margin-bottom: 0px;
		}

		ul {
			margin: 0;
			padding: 0;
		}

		li * {
			float: left;
		}

		li,
		h3 {
			clear: both;
			list-style: none;
		}

		input,
		button {
			outline: none;
		}

		button {
			background: none;
			border: 0px;
			color: #888;
			font-size: 15px;
			width: 60px;
			margin: 10px 0 0;
			font-family: Lato, sans-serif;
			cursor: pointer;
		}

		button:hover {
			color: #51a9c5;
		}

		.kotak {
			text-align: center;
			margin: auto;
			width: auto;
			padding: 10px 35px;
			border: 1px solid #51a9c5;
			box-shadow: 0 0 10px #51a9c5;

			transition: 0.3s;
			cursor: pointer;
			-webkit-transition: 0.3s;
			-moz-transition: 0.3s;
			-ms-transition: 0.3s;
			-o-transition: 0.3s;
		}

		h3,
		label[for='new-task'] {
			color: #333;
			font-weight: 700;
			font-size: 15px;
			border-bottom: 2px solid #333;
			padding: 20px 0 10px;
			margin: 0;
			text-transform: uppercase;
		}

		input[type="text"] {
			margin: 0;
			font-size: 18px;
			line-height: 18px;
			height: 18px;
			padding: 10px;
			border: 1px solid #ddd;
			background: #fff;
			border-radius: 6px;
			font-family: Lato, sans-serif;
			color: #888;
		}

		input[type="text"]:focus {
			color: #333;
		}

		/* end btn  */



		/* end btn  */

		/* New Task */

		label[for='new-task'] {
			display: block;
			margin: 0 0 20px;
		}

		input#new-task {
			float: left;
			width: 318px;
		}

		p>button:hover {
			color: #0FC57C;
		}


		/* Task list */

		li {
			overflow: hidden;
			padding: 20px 0;
			border-bottom: 1px solid #eee;
		}

		li>input[type="checkbox"] {
			margin: 0 10px;
			position: relative;
			top: 15px;
		}

		li>label {
			font-size: 18px;
			line-height: 40px;
			width: 237px;
			padding: 0 0 0 11px;
		}

		li>input[type="text"] {
			width: 226px;
		}

		li>.delete:hover {
			color: #CF2323;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2>List Order Ticket</h2>
		<form method="post" action="<?= base_url('C_transaksi/insert_penjualan') ?>">
			<div class="mb-3">
				<label for="exampleFormControlInput6" class="form-label">Nama</label>
				<input type="text" name="nama" value="" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput6" class="form-label">Nomor Whats'app</label>
				<input type="text" name="no_telp" value="" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput6" class="form-label">Alamat</label>
				<input type="text" name="alamat" value="" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>

			<label for="">Tujuan wisata</label>
			<select class="form-select" name="tj_wisata" aria-label="Default select example">
				<option selected>Tujuan wisata</option>
				<option value="Pulau Tidung">Pulau Tidung</option>q
				<option value="Pulau Bidadari">Pulau Bidadari</option>
				<option value="Pulau Pelangi">Pulau Pelangi</option>
				<option value="Pulau Macan">Pulau Macan</option>
				<option value="Pulau Doplhin">Pulau Doplhin</option>
				<option value="Pulau Untung Jawa">Pulau Untung Jawa</option>
			</select>
			<label for="">Pilih paket</label>
			<select class="form-select" name="jenis_paket" aria-label="Default select example">
				<option selected>Ticket</option>
				<option value="Ticket Reguler">Ticket Reguler</option>q
				<option value="Ticket Private">Ticket Private</option>
				<option value="Ticket Elite">Ticket Elite</option>
			</select>
			<div class="mb-3">
				<label for="exampleFormControlInput6" class="form-label">Jumlah Paket</label>
				<input type="number" name="jumlah_paket" value="" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput7" class="form-label">Kode Pesanan</label>
				<input type="number" name="kd_pesanan" value="" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput8" class="form-label">Tanggal Pemenesan</label>
				<input type="date" name=" tgl_pemesanan" value="" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div>
				<button type="submit" class="btn-primary">Input Pembelian</button>
			</div>
		</form>
	</div>
	<!-- batas boostrap -->


	<script>

	</script>
</body>

</html>


<!-- let images = ['bidadari (1).jpeg', 'bidadari (2).jpeg', 'bidadari (3).jpeg', 'bidadari (4).jpeg', 'bidadari (5).jpeg'];
let i = 0;

function prev() {
if (i <= 0) i=images.length; i--; return setImg(); } function next() { if (i>= images.length - 1) i = -1;
	i++;
	return setImg();
	}


	function setImg() {
	return img.setAttribute('src', '<?php echo base_url() ?>assets/imgPackages/' + images[i]);
	} -->