<?php
function deleteAlternatif($id) {
	include('koneksi.php');

	// hapus record dari tabel 
	$query 	= "DELETE FROM daftar WHERE id=$id";
	mysqli_query($con, $query);

}
?>