<!DOCTYPE html>
<html>
	<head>
		<link href="assets/css/owl/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="assets/css/owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title><?= $title?></title>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style_2.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<!-- Logo Mangaku -->
				<ul>
					<li>
						<a href="<?= base_url() ?>">
						<img src="https://mangaku.in/manga/img/2232861-logo.png" width="260px"></li>
							
						</a>
				</ul>
				<!-- Logo Mangaku -->
				<div class="col-14 col-md-10">
					<!-- menu -->
					<div class="menu">
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li><a href="#">Daftar Komik</a></li>
							<li><a href="#">Daftar Video</a></li>
							<li><a href="#">Anime On Going</a></li>
							<li><a href="#">TV series</a></li>
							<li><a href="#">Lowongan</a></li>
							<li><a href="#">Youtube</a></li>
							<li><a href="#">Group</a></li>
							<li><a href="#">QNA - Contact Us</a></li>
						</ul>
					</div>
					<div id="slider" class="owl-carousel owl-theme">
						<?php  
							foreach ($manga as $value) {
						?>
						<div class="item">
							<a href="<?= base_url() ?>index.php/manga/baca/<?= $value->id_manga ?>" target="_blank">
								<img src="<?= base_url()?>uploads/<?= $value->thumbnail ?>" class="img-fluid" alt="12">
							</a>
						</div>	
						<?php
							}
						?>
					</div>
					<br>
					<br>