<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TravoSea </title>
	<link rel="icon" href="<?php echo base_url() ?>assets/icon/hiro.png">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style1.css">
</head>
<header>
	<a href="<?php echo base_url() ?>travosea" class="logo-header">TRAVOSEA</a>
	<!-- <h1>TRAVOSEA</h1> -->
	<ul>
		<a href="<?php echo base_url() ?>#package">Package</a>
		<a href="<?php echo base_url() ?>#features">Features</a>
		<a href="<?php echo base_url() ?>#contact" class="btn-contact">Contact</a>
		<a href="<?php echo base_url('C_auth/login_page') ?>">Login</a>
	</ul>
</header>

<body>
	<!-- index -->
	<section class="hiro">
		<div class="left-hiro">
			<h1>Go Make Your <br> Brightful <br> Holiday!</h1>
			<p>Explore the beauty of nature at our stunning beach holiday destinations. Enjoy the warmth of the sun, white sand and calming waves. The perfect vacation awaits you!</p>
			<a href="#package" class="btn-hiro">Let's Go!</a>
		</div>
		<div class="right-hiro">
			<img src="<?php echo base_url() ?>assets/icon/hiro.png" alt="hiro-img">
			<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
				<path fill="#51a9c5" d="M35.3,-53.7C42.4,-43.4,42.7,-28.7,50.8,-14.1C58.9,0.5,74.8,15,74.6,26.9C74.4,38.7,58,48,42.8,52.5C27.7,57.1,13.9,57,-1.8,59.4C-17.4,61.8,-34.8,66.8,-50.4,62.4C-66,58,-79.9,44.2,-81,29.1C-82,14,-70.3,-2.5,-63,-19.1C-55.7,-35.6,-52.8,-52.2,-43.1,-61.6C-33.3,-71.1,-16.7,-73.4,-1.3,-71.7C14.1,-69.9,28.2,-64,35.3,-53.7Z" transform="translate(100 100)" />
			</svg>
		</div>
	</section>

	<!-- packages -->
	<section class="package" id="package">
		<h1>Where to?..</h1>
		<p>Top destinations for your next vacation</p>
		<div class="container-package">
			<?php foreach ($images as $gmbr) : ?>
				<a href="<?php echo base_url() ?><?php echo $gmbr->url ?>">
					<img src="<?php echo base_url() ?>assets/img/<?php echo $gmbr->img; ?>" alt="<?php echo $gmbr->img ?>" width="300px">
					<span><?php echo $gmbr->nama_pulau ?></span>
				</a>
			<?php endforeach; ?>

			<div class="ct">
				<a href="<?php echo base_url() ?>travosea/macan">
					<img src="<?php echo base_url() ?>assets/img/macan.jpeg" alt="Pulau Macan" width="310px" style="border-radius: 7%;">
					<span>Pulau Macan</span>
				</a>
				<a href="<?php echo base_url() ?>travosea/pelangi">
					<img src="<?php echo base_url() ?>assets/img/pelangi.jpeg" alt="Pulau Pelangi" width="300px" height="232px" style="border-radius: 7%;">
					<span>Pulau Pelangi</span>
				</a>
			</div>
		</div>
		<a class="btn-more" href="<?php echo base_url('C_landingPage/form_pembelian') ?>">Booking disini</a>
	</section>

	<!-- features -->
	<section class="features" id="features">
		<h1>Features</h1>
		<div class="container-features">
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/bananaBoat.png" alt="bananaBoat" width="200px">
				<span>Banana Boat</span>
				<p>Terdapat Wahana permainan Perahu karet tanpa mesin yang berbentuk pisang</p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/snorkeling.png" alt="snorekling" width="150px">
				<span>Snorkeling</span>
				<p>Nikmati pemandangan bawah laut dari permukaan yang tak terlalu dalam</p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/camp.png" alt="homestay" width="170px">
				<span>Camping</span>
				<p>Kegiatan di alam <br> terbuka dengan mendirikan tenda dengan pemandangan terbaik </p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/homestay.png" alt="homestay" width="150px">
				<span>Homestay</span>
				<p>Rumah warga lokal yang dikelilingi pantai indah yang disediakan untuk wisatawan </p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/kamera.png" alt="kamera" width="150px">
				<span>Documentation</span>
				<p>Momen penting yang wajib didokumentasikan saat anda berlibur di kepulauan kami</p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/bbq.png" alt="bbq" width="150px">
				<span>Barbeque</span>
				<p>Memasak panggang secara khusus dengan makanan khas di pulau seribu</p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/speedboat.png" alt="JetSki" width="125px">
				<span>Jet Ski</span>
				<p>Rasakan transportasi air (Jetski) dengan suasana yang berbeda di pulau terbaik Jakarta </p>
			</div>
			<div class="ft-img">
				<img src="<?php echo base_url() ?>assets/icon/tour.png" alt="TourGuide" width="175px">
				<span>Tour Guide Boat</span>
				<p>Mengksplor beberapa pulau sesuai destinasi dengan kapal eksplorasi yang nyaman</p>
			</div>
		</div>
	</section>

	<!-- Kontak -->
	<section class="contact" id="contact">
		<h1>Contact</h1>
		<div class="container-contact">
			<img src="<?php echo base_url() ?>assets/kontak.png" alt="contact" width="90%">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.189930627819!2d106.77358064062314!3d-6.105108244124133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d4ccd2dce39%3A0xad8af8c30751472e!2sPelabuhan%20muara%20angke!5e0!3m2!1sid!2sid!4v1703178808489!5m2!1sid!2sid" width="1000" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>