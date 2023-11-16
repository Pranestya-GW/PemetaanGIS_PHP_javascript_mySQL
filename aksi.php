<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
	</head>
	<body>
	<h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
		<?php
		include 'koneksi.php';
		$nmindo = $_POST['nama'];
		$ktgri = $_POST['kategori'];
		$alamat = $_POST['alamat'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysqli_query($con,"INSERT INTO daftar VALUES(NULL, '$nmindo','$ktgri','$alamat','$lat','$lng','$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		header("location:admin.php");
		?>
	</body>
</html>