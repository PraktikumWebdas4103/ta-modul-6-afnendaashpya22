<?php
	$koneksi = new mysqli ('localhost','root','','mahasiswa');
		if ($koneksi -> connect_error) {
			die('Gagal melakukan koneksi='. $koneksi -> connect_error);
		}
?>