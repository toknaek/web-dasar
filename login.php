<?php include 'header.php'; ?>

<div class="utama">
	<div class="kiri">
		<h3>Halaman Login</h3>

		<div class="info">
			Silahkan mengisi form login dibawah ini.
		</div>
		<form action="" class="loginform" method="POST">
			<p>
				<label for="username">Username</label>
			<input type="text" name="username" id="username" required>
			</p>

			<p><label for="password">password</label>
			<input type="password" name="password" id="password" required></p>
			<p>
				<label for=""></label>
				<input type="radio" name="level" value="user"> User
				<input type="radio" name="level" value="admin"> Admin
			</p>

			<p>
				<label for=""></label>
				<input type="submit" name="submit" value="Login">

			</p>			
		</form>
	</div>

	<?php include 'menu.php'; ?>
</div>
<?php include 'footer.php'; ?>

<?php 
if (isset($_POST['submit'])) {
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$s = "SELECT*FROM user WHERE username='$username' AND password='$password' AND level='$level'";
	$q = mysqli_query($con, $s);

	if (count(mysqli_fetch_array($q)) > 0) {

		$_SESSION['login'] = TRUE;
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $level;



		echo "<script>alert('Login berhasil, silahkan login')</script>";
		echo "<script>window.location.replace('index.php');</script>";
	} else{
		echo "<script>alert('Login gagal.')</script>";

	}


}


?>