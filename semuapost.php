<?php
	include 'koneksi.php';
?>

<form>
	<center>
		<h1>SEMUA POSTINGAN</h1>
		<a href="editprofile.php">Edit Profil ||</a>
		<a href="halamanposting.php"> Halaman Posting ||</a>
		<a href="posting.php"> Postingan Saya ||</a>
		<a href="semuapost.php"> Daftar Postingan</a>
		<br><br>
	</center>
</form>

<?php 
	if(isset($_POST['no_post'])){
		$no = $_POST['no_post'];
		$judul_post = $_POST['judul_post'];
		$penulis = $_POST['penulis'];
		$isi = $_POST['isi'];
		$data = mysql_query($koneksi, "INSERT INTO 'semua_post'('no_post', 'judul_post', 'penulis', 'isi')
										VALUES ('$no', $judul_post', '$penulis', '$isi')") or die (mysqli_error());
			echo "<table>
					<tr>
						<td>JUDUL</td>
						<td>POSTINGAN</td>
						<td>GAMBAR</td>
					</tr>
					<tr>
						<td>" .$judul_post. "</td>
						<td>" .$penulis. "</td>
						<td>" .$isi. "</td>
						</tr>
				</table>";
	}
?>