<?php
	include 'koneksi.php';
?>

<form>
	<center>
		<h1>POSTINGAN SAYA</h1>
		<a href="editprofile.php">Edit Profil ||</a>
		<a href="halamanposting.php"> Halaman Posting ||</a>
		<a href="posting.php"> Postingan Saya ||</a>
		<a href="semuapost.php"> Daftar Postingan</a>
		<br><br><br>
		<table rows=20 cols=80>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Masukkan Teks</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="hitung" value="Hitung"></td>
			</tr>
			<?php 
				if(isset($_POST['hitung'])){
					$hitung = str_word_count($_POST['katanya']);
						echo "Jumlah kata : $hitung";
						echo "<br>";
				}
			?>
			<tr>
				<td>Unggah Foto</td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td><input type="Submit" name="submit" value="Posting"></td>
			</tr>
			<?php 
				if(isset($_POST['submit'])){
					$hitung = str_word_count($_POST['hitung']);
						echo "Jumlah kata : $hitung";
						echo "<br>";
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
			?>
		</table>
	</center>
</form>