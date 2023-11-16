<?php
  include "koneksi.php";
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
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin-top: 0px;
    margin-bottom: 10px;
    margin-left: 0px;

color: #fff;
  background-color: #40a2e8;
  border-color: #40a2e8;
 -webkit-transition: all .5s ease-out;
 transition: all .5s ease-out;
  padding: 9px 1.5em;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
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
      <!--  <div class="logo"><img src="img/logo.png" data-at2x="img/logo@2x.png" alt="logo"></div>
        logo end--> 
      </div>
      <div class="col-md-6 col-sm-6"> 
        
        <!--social-->
        <div class="social text-center">
          <ul>
			<a href="daftar.php" class="btn btn-default">EDIT TITIK<i></i></a>
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
          <h1><span class="rotate">WEB PEMETAAN TITIK WADUK DAN TITIK IRIGASI (EMBUNG)</span></h1>
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

 
<?php
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['id'])) {
		$id 	= $_GET['id'];
		

		// hapus record
		$query 	= "SELECT nama,jenis,lat,lng,alamat FROM daftar WHERE id=$id";
		$result	= mysqli_query($con, $query);
		
		while ($row = mysqli_fetch_array($result)) {
			$nama = $row['nama'];
			$jenis = $row['jenis'];
			$lat = $row['lat'];
			$lng = $row['lng'];
			$alamat = $row['alamat'];
		}
	}

	if (isset($_POST['update'])) {
		$id 	= $_POST['id'];
		$nama 	= $_POST['nama'];
		$jenis 	= $_POST['jenis'];
		$lat 	= $_POST['lat'];
		$lng 	= $_POST['lng'];
		$alamat 	= $_POST['alamat'];

		$query 	= "UPDATE daftar SET nama='$nama',jenis='$jenis',lat='$lat',lng='$lng',alamat='$alamat' WHERE id=$id";
		$result	= mysqli_query($con, $query);

		if (!$result) {
			echo "Update gagal";
			exit();
		} else {
			header('Location: daftar.php');
			exit();
		}
	}

?>
<!--
	<h2>Edit <//?php echo $jenis?></h2>

	<form class="ui form" method="post" action="edit.php">
		<div class="inline field">
			<label>Nama <//?php echo $jenis ?></label>
			<input type="text" name="nama" value="<//?php echo $nama?>">
			<input type="hidden" name="id" value="<//?php echo $id?>">
			<input type="hidden" name="jenis" value="<//?php echo $jenis?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="update" value="UPDATE">
	</form> -->

<section class="features section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">EDIT PETA LOKASI TITIK WADUK DAN TITIK IRIGASI (EMBUNG)</h2>
    <div class="row">
      <div class="col-md-7">	
	
	<div class="contact-form">
		  	<form action="edit.php" method="post" >
			
            <input type="text" class="wow fadeInUp form-control" name="nama" id="nama" value="<?php echo $nama?>">
            <input type="text" class="wow fadeInUp form-control" name="jenis" id="jenis" value="<?php echo $jenis?>">
             <input type="text" class="wow fadeInUp form-control" name="lat" id="lat" value="<?php echo $lat?>">
              <input type="text" class="wow fadeInUp form-control" name="lng" id="lng" value="<?php echo $lng?>">
            <input type="text"class="wow fadeInUp form-control" name="alamat" id="alamat"  value="<?php echo $alamat?>">
			<input type="hidden" name="id" value="<?php echo $id?>">
			<center>
		<input type="submit" class="wow fadeInUp btn btn-simpan submit-btn" name="update" value="Simpan">
			</center>
	</form>
	</div>
	</div>

			<div class="col-md-5"> 
        <!--
        <button type="submit" class="btn btn-default" id="mc-subscribe" name="subscribe" style="margin-bottom: 15px;"><a href="daftar.php" style="color: white">Edit Titik &nbsp;&nbsp; <i class="fa fa-plus"></i></a></button>
		-->
        <!--map-->
        <div class="wow fadeInUp map">

          <div id="mapkk" style="width:100%;height:530px;"></div>
          <!--<div id="map-canvas"></div>
          
          address-->

          <!--address end--> 
          
        </div>
      </div>
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

  document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>


</body>
</html>