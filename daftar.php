<?php
  include "koneksi.php";
  include('fungsi.php'); 
// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteAlternatif($id);
	}
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WEB PEMETAAN TITIK WADUK DAN TITIK IRIGASI (EMBUNG)</title>
<meta name="description" content="Coming Soon Responsive Template">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<style type="text/css">
  h1{
  font-family: sans-serif;
}
 
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 0px 65px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 1px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 100px;
  border-left: 0;
}
 
table td {
  padding: relative;
  border-top: 2px solid #ffffff;
  border-bottom: 2px solid #e0e0e0;
  border-left: 2px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 1px;
  -webkit-border-bottom-left-radius: 1px;
  border-bottom-left-radius: 1px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 1px;
  -webkit-border-bottom-right-radius: 1px;
  border-bottom-right-radius: 1px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
</style>

</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:halaman_login.php");
	}
 
	?>

<!--main-->
<section class="main">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6"> 
        <!--logo-->
       <!--l <div class="logo"><img src="img/logo.png" data-at2x="img/logo@2x.png" alt="logo"></div>
        ogo end--> 
      </div>
      <div class="col-md-6 col-sm-6"> 
        
        <!--social-->
        <div class="social text-center">
          <ul>
			<a href="admin.php" class="btn btn-default">TAMBAH TITIK<i></i></a>
			<a href="logout.php" class="btn btn-default">LOGOUT<i></i></a>
			<!--
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			-->
          </ul>
        </div>
        <!--social end--> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        
        <!--welcome-message-->
        <header class="welcome-message text-center">
          <h1><span class="rotate">SELAMAT DATANG, ADMIN, WEB PEMETAAN TITIK WADUK DAN TITIK IRIGASI (EMBUNG)</span></h1>
        </header>
        <!--welcome-message end--> 
        
        <!--sub-form
        <div class="sub-form text-center">
          <div class="row">
            <div class="col-md-5 center-block col-sm-8 col-xs-11">
              <form role="form" id="mc-form" action="http://csmthemes.us3.list-manage.com/subscribe/post-json?u=9666c25a337f497687875a388&amp;id=5b881a50fb&amp;c=?">
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Your comment" required value="" name="EMAIL">
                  <span class="input-group-btn">
                  <button type="submit" class="btn btn-default" id="mc-subscribe" value="Subscribe" name="subscribe">Submit<i class="fa fa-paper-plane"></i></button>
                  </span> </div>
              </form>
              <p id="mc-notification"></p>
            </div>
          </div>
        </div>
        sub-form end--> 
        
        <!-- Countdown-->
        <ul class="countdown text-center">

          <li> <span class="jam">00</span>
            <p class="jam">JAM</p>
          </li>
          <li class="seperator">|</li>
          <li> <span class="menit">00</span>
            <p class="menit">MENIT</p>
          </li>
          <li class="seperator">|</li>
          <li> <span class="detik">00</span>
            <p class="detik">DETIK</p>
          </li>
        </ul>
         <!-- Countdown end -->
        
      </div>
    </div>
  </div>
</section>
<!--main end--> 

<!--Features-->

<section class="features section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">DAFTAR TITIK WADUK DAN TITIK IRIGASI (EMBUNG)</h2>

<?php


$query=$con->query('SELECT * FROM daftar')
 ?>
    <div class="row">
      <div class="col-md-14"> 

	<!--
        <button type="submit" class="btn btn-default" id="mc-subscribe" name="subscribe" style="margin-bottom: 15px;"><a href="admin.php" style="color: white">Tambah Titik &nbsp;&nbsp; <i class="fa fa-plus"></i></a></button>
    -->    





  
  </div>
  
  <table class="ui selectable collapsing teal table" >
		<thead>
			<tr align="center">
				<th width="10">No</th>
				<th width="100">Nama</th>
				<th width="100">Jenis</th>
				<th width="150">Alamat</th>
				<th width="100">Latitude</th>
				<th width="100">Longitude</th>
				<th width="150">Aksi</th>			
			</tr>
		</thead>
		<tbody>

		<?php
			// Menampilkan list alternatif
			$query = "SELECT id,nama,jenis,alamat,lat,lng FROM daftar ORDER BY id";
			$result	= mysqli_query($con, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
		?>
			<tr align="center">
				<td><?php echo $i ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['jenis'] ?></td>
				<td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['lat'] ?></td>
				<td><?php echo $row['lng'] ?></td>
				<td >
					<form method="post" action="daftar.php">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<button type="submit" name="edit" class="btn btn-success">EDIT</button>
            <button type="submit" name="delete" class="btn btn-danger">HAPUS</button>
					</form>
				</td>
			</tr>

<?php } ?>
	
		</tbody>
		<tfoot>
		</tfoot>
	</table>
      </div>
    </div>
</center>
</section>



<!--site-footer-->
<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> 
        
        <!--social
        
        <ul class="social">
          <li class="wow fadeInUp"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="wow fadeInUp"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="wow fadeInUp"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        
        social end--> 
        
        <small class="wow fadeInUp"></small> </div>
    </div>
  </div>
</footer>
<!--site-footer end--> 

<!--PRELOAD-->
<div id="preloader">
  <div id="status"></div>
</div>
<!--end PRELOAD--> 

<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/jquery.backstretch.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/tweetie.min.js"></script> 
<script src="js/jquery.downCount.js"></script> 
<script src="js/jquery.form.min.js"></script> 
<script src="js/jquery.validate.min.js"></script> 
<script src="js/jquery.simple-text-rotator.min.js"></script> 
<script src="js/main.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script src="js/gmap.js"></script>
<script src="js/CV.js"></script>

<script>    
    var marker;
    function initialize() {  

      function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  

  var propertiPeta = {
    center:new google.maps.LatLng(-6.793130, 110.859104),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  
  
  // even listner ketika peta diklik

        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('mapkk'),propertiPeta, mapOptions); 

        
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database

        <?php
          $query = mysqli_query($con,"select * from daftar");
          while ($data = mysqli_fetch_array($query))
            {
                $nama = $data['nama'];
                $lat = $data['lat'];
                $lng = $data['lng'];
          echo ("addMarker($lat, $lng, '<b>$nama</b>');\n");                        
            }
         ?>





        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
            taruhMarker(this, event.latLng);
          });

            google.maps.event.addListener(map, 'click', function(event) {   
        taruhMarker(this, event.latLng);
          });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>



<script>
// variabel global marker
var marker;
  


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">
 function jam() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) ;
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(jam, 1000);

    function menit() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.menit')[0].innerHTML = harold(minutes) ;
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(menit, 1000);

    function detik() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.detik')[0].innerHTML = harold(seconds) ;
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(detik, 1000);
</script>




</body>
</html>
