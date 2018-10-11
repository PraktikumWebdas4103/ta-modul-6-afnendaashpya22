<?php 
	include 'koneksi.php';
?>

<form>
	<center>
		<h1>DAFTAR POSTINGAN SAYA</h1>
		<a href="editprofile.php">Edit Profil ||</a>
		<a href="halamanposting.php"> Halaman Posting ||</a>
		<a href="posting.php"> Postingan Saya ||</a>
		<a href="semuapost.php"> Daftar Postingan</a>
		<br><br>
		<table>
			<tr>
				<td><input type="submit" name="post_saya" value="Postingan"></td>
			</tr>
		</table>
	</center>
</form>

<?php
	if (isset($_POST['post_saya'])) {
		$koneksi = new mysqli ('localhost','root','','mahasiswa');
		if ($koneksi -> connect_error) {
			die('Gagal melakukan koneksi='. $koneksi -> connect_error);
			$judul = $_POST['judul'];
			$text = $_POST['text'];
			$foto = $_FILES['foto'];

			$data = mysql_query($koneksi, "INSERT INTO 'postingan'('judul', 'text', 'foto')
											VALUES ('$judul', '$text', '$foto')") or die (mysqli_error());

				echo "<table>
								<tr>
									<td>JUDUL</td>
									<td>POSTINGAN</td>
									<td>GAMBAR</td>
								</tr>
								<tr>
									<td>" .$judul. "</td>
									<td>" .$text. "</td>
									<td>" .$foto. "</td>
								</tr>
						</table>";
		}

	}
?>