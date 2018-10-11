<?php
	include 'home.php';
?>

<form action="" method="POST">
	<center>
		<h1>LOGIN</h1>
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="LOGIN"></td>
			</tr>
		</table>
	</center>
</form>

<?php
	session_start();
	$_SESSION['username']=$username;
	header("location:home.php")
?>