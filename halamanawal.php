<form>
	<center>
		<h1>SELAMAT DATANG</h1>
		<br><br><br>
		<a href="editprofile.php">Edit Profil ||</a>
		<a href="halamanposting.php"> Halaman Posting ||</a>
		<a href="posting.php"> Postingan Saya ||</a>
		<a href="semuapost.php"> Daftar Postingan</a>
	</center>
</form>
<?php
	session_start();
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		$data = mysqli_query($koneksi, "INSERT INTO 'mahasiswa'('nama', 'nim', 'kelas', 'jk', 'hobi', 'fakultas', 'alamat')
				 VALUES ('$nama', '$nim', '$kelas', '$jk', 'hobi', '$fakultas', 'alamat')");
	}

?>