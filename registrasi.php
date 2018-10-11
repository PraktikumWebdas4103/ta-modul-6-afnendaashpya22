<form action="" method="POST">
	<center>
		<h1>PENDAFTARAN	</h1>
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Username" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Password" required=""></td>
			</tr>
			<tr>
				<td>Re-password</td>
				<td>:</td>
				<td><input type="password" name="re_password" placeholder="Ketik ulang password Anda" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="DAFTAR"></td>
			</tr>
		</table>
	</center>
</form>

<?php
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = mysqli_query($koneksi, "INSERT INTO 'mahasiswa'('username', 'password')
				 VALUES ('$username', '$password')"
				) or die (mysqli_error());
		if ($data) {
			$_SESSION['username'] = $username;
			header("location:login.php");
		}
	}
?>