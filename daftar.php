<?php include 'header.php'; ?>

<div class="utama">
	<div class="kiri">
		<h3>Halaman Registrasi</h3>
		
		<div class="info">
			Silahkan mengisi formulir dibawah ini.
		</div>

		<form action="" class="loginform" method="POST">
			<table width="100%">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tanggal_lahir"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>

		<tr>
			<td>No HP</td>
			<td><input type="text" name="hp"></td>
		</tr>


		<tr>
			<td>Foto</td>
			<td><input type="file" name="foto"></td>
		</tr>



		<tr>
			<td>Alamat</td>
			<td>
				<textarea name="alamat" id="" cols="30" rows="3"></textarea>
			</td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jk">
					<option>Pilih Jenis Kelamin</option>
					<option value="L">Laki-laki</option>
					<option value="P">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<input type="radio" name="status" value="sudah"> Sudah Menikah 
				<input type="radio"  name="status" value="belum"> Belum Menikah 
			</td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>
				<input type="checkbox" name="status" value="sudah"> Futsal
				<input type="checkbox" name="status" value="sudah"> Berenang 
				<input type="checkbox" name="status" value="sudah"> Lari 
				
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Daftar"></td>
		</tr>
</table>			
		</form>
	</div>
`
	<?php include 'menu.php'; ?>
</div>
<?php include 'footer.php'; ?>

<?php
	
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hp = $_POST['hp'];
		$email = $_POST['email'];

		include 'koneksi.php';


		$s = "INSERT INTO user 
			(username, email, password, hp, level) 
			VALUES
			('$username', '$email', '$password', '$hp', 'user')";

		
		if (mysqli_query($con, $s)) {
			echo "<script>alert('Pendaftaran berhasil, silahkan login')</script>";
			echo "<script>window.location.replace('login.php');</script>";
		} else{
			echo "<script>alert('Pendaftaran gagal.')</script>";

		}

	}




?>
















