<?php session_start(); ?>
<html>

<head>
	<link rel="stylesheet" href="desain.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
	
	<div class="header">
		<img src="gambar/logo.jpg">
		<h2>T.O.K.O</h2>
	</div>

	<div class="menu">
		<div class="menukiri">
			<ul>
				<li>
					<a href="index.php"><img src="gambar/house.png"></a>
				</li>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="profil.php">help</a></li>
				<li>Hubungi Kami</li>


				<?php if (isset($_SESSION['login'])) : ?>
					<li>
						<a href="logout.php">Logout</a>
					</li>
					<li>Selamat Datang, <?php echo $_SESSION['username'] ?> </li>

				<?php else : ?>

					<li>
						<a href="login.php">Login</a>
					</li>
					<li>
						<a href="daftar.php">Daftar</a>
					</li>

				<?php endif ?>


			</ul>
		</div>
		<div class="menukanan">
			<ul>
				<li>
					<input type="text" name="cari" placeholder="Katakunci">
					<input type="submit" value="Klik Disini">
				</li>
			</ul>
		</div>
	</div>