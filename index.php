<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b81f308f&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container bg-dark">
<div class="row mt-3 text-center">
  <div class="col">
<h1>top</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">John Wick </h5>
        <p class="card-text">John Wick adalah mantan pembunuh bayaran,berduka atas kematian istrinya. Tapi, ia terpaksa kembali ke dunia hitamsetelah kelompok gangster Rusia mencuri mobil dan membunuh anak anjing warisan istrinya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Miracle in Cell No.7</h5>
        <p class="card-text">Menceritakan tentang seorang ayah yang memiliki keterbatasan dalam hal kecerdasan yang membuatnya bertingkah dan berperilaku seperti anak anak,ia berusaha menjadi ayah yang baik untuk anaknya Kartika.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">AVATAR</h5>
        <p class="card-text">Seorang Marinir lumpuh dikirim ke bulan Pandora untuk menjalani misi khusus namun, ia justru dilea antara mengikuti perintah atau melindungi dunia baru yang ia rasakan seperti rumah.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">An Action Hero</h5>
        <p class="card-text"> berkisahkan tentang seorang pemuda bernama Maanav (Ayushmann Khurrana). Maanav merupakan seorang pemuda yang sangat terkenal, yang dimana ia adalah superstar. Maanav mencapai puncak karirnya saat Maanav sudah berusia 30 tahun.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Legions</h5>
        <p class="card-text">Ketika Tuhan kehilangan keyakinannya terhadap umat manusia, ia mengirimkan pasukan malaikatnya - membawa Wahyu ke Bumi dan berniat untuk membasmi seluruh umat manusia.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">EVIL EYE</h5>
        <p class="card-text">seorang ibu yang melalui kejadian buruk di masa lalu dengan kekasihnya. Ia mengalami kekerasan fisik karena pasangannya tidak mau menerima penolakan sampai akhirnya ketika si pria tersebut berusaha menculik Usha, mereka terlibat perkelahian dan si pria tersebut terjatuh dari jembatan.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
