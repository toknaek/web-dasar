<?php include 'header.php'; ?>

<?php if (isset($_SESSION['login']) == false): ?>

	<script>alert('Anda belum login');</script>
	<script>window.location.replace('login.php');</script>

<?php endif ?>


<div class="utama">
	<div class="kiri">
		<h3>Halaman Admin</h3>

	</div>

	<?php include 'menu.php'; ?>
</div>
<?php include 'footer.php'; ?>