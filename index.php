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
</head>
<body>

<!--main-->
<section class="main">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6"> 
        <!--logo-->
        <!-- <div class="logo"><img src="img/logo.png" data-at2x="img/logo@2x.png" alt="logo"></div>
       logo end--> 
      </div>
      <div class="col-md-6 col-sm-6"> 
        <div class="social text-center">
          <ul>
            <li><a href="admin.php" target="_blank"><i class="fa fa-plus"></i></a></li>
          </ul>
        </div>
        <!--social
        <div class="social text-center">
          <ul>
            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
        social end--> 
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
        <!--Countdown end-->
        
      </div>
    </div>
  </div>
</section>
<!--main end--> 

<!--Features-->


<section class="features section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">WEB PEMETAAN TITIK WADUK DAN TITIK IRIGASI (EMBUNG)</h2>
    <div class="row">
      <div class="col-md-18"> 
        <!--map-->
        <div class="wow fadeInUp map">
          <div id="mapkkk" style="width:100%;height:500px;"></div>
          
          <!--address
          
          <ul class="wow fadeInUp address">
            <li><i class="fa fa-map-marker"></i>spotpemancingan</li>
            <li><i class="fa fa-phone"></i>901-9739-6715</li>
            <li><i class="fa fa-envelope"></i>pemancingan@spot.com </li>
          </ul>
          
          address end--> 
          
        </div>
        <!--map end--> 
      </div>
    </div>
  </div>
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

<script>    
    var marker;
    function initialize() {  
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow();
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('mapkkk'), mapOptions);      
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
                $alamat= $data['alamat'];
                $kategori= $data['jenis'];
				$nmfile= $data['nama_file'];
          echo ("addMarker($lat, $lng, '<b><h3>$nama<div><h6>Kategori : $kategori</h6></div><div><h6>$alamat</h6></div><br><img width=500 height=250 src=file/$nmfile></h3></b>');\n");                        
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
          });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
// variabel global marker
var marker;
  
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
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


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
