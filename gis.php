<?php
	require('koneksi.php');
	switch ($_POST['lala']) {
		case 'simpan':
			$aksi = $con->query('INSERT INTO daftar(nama,jenis,alamat,lat,lng)values
			("'.$_POST[nama].'","'.$_POST[kategori].'","'.$_POST[alamat].'","'.$_POST[lat].'","'.$_POST[lng].'")');
			header("location:admin.php");
		break;
	
	};
?>