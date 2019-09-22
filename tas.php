<?php
// Load file koneksi.php
include "koneksi.php";
?>
<html>
    <head>
        <title> OMAHKLAMBY </title>
        <link rel="stylesheet" type="text/css" href="navbar2.css">
        <link rel="stylesheet" type="text/css" href="header1.css">
        <link rel="stylesheet" type="text/css" href="footer3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="slideshow1.css">
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script src='jquery-3.3.1.js'></script>
        <style>
          p.outline {
            height : 50px;
            width : 1330px;
            outline-style: #184153;
            background-color: #184153;
            margin-top: 50px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
          }
          
          h2{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            display: block;
            color: black;
            text-align: center;
            margin-left: 400px;
            margin-right: 600px;
          }

          .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #184153;
  border: none;
  color:#FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
        </style>
    </head>
<body>
<div class="content">
	<header >
    <center>
        <marquee  scrollamount="10" direction="right" width="300px" > <h1 class="judul">OMAHKLAMBY</h1></marquee>
        </center>
      </header>
</div>
 
<div class="navbar">
 <ul>
  <li><a  href="tugas.php">Home</a></li>
  <li><a  class="active" href="#">Category</a>
  <ul>
    <li><a href="pakaian.php">Pakaian</a></li>
    <li><a  href="tas.php">Tas</a></li>
    <li><a href="sepatu.php">Sepatu</a></li>
  </ul>
</li>
  <li><a href="popular.php">Popular</a></li>
  <li><a href="Sale.php">Sale</a></li>
  <li><a href="loginForm.html">Login</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="profil.php">Profil</a></li>
  <li><a href="carapesan.php">Cara Pesan</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</div>

<p class="outline">Tas</p><br>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/gambar28.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/gambar26.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/gambar27.jpg">
  </div>
<br>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000);
}
</script>
</div>

<h2>Our Collection </h2>
<div class="tampil1">
<div class="row1">
<?php
// Load file koneksi.php
$query = "SELECT * FROM barang where id_barang between '9' and '16' order by id_barang desc";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql);

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
    <div class="lebar1">
    <div class="box1">
    <?php
    echo "<img src='images/".$data['Foto']."'>";?>
    <div><h3><?php echo $data['nama_barang']; ?> </h3></div>
    <div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?> </h3></div>
    <p>

    </p>
   <div><a href ="beli.php?id=<?php echo $data['id_barang'];?>"  class="button" style="vertical-align:middle"><span>Buy </span></a></div>
    </div>
    </div>
    <?php
  }
}
else{ // Jika data tidak ada
    echo "Data tidak ada";
  }

?>
</div>
</div>














<footer class="bawah1 kecil " align="center" id="footer">
    <div class="bawah2">
      <div class="kolom">
        <h3>Contact</h3>
        <p>Questions? Go ahead.</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="input" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="input" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="input" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="input" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="button">Send</button>
        </form>
      </div>

      
      <div class="kolom">
        <h3>About</h3>
        <p><a href="about.php">About us</a></p>
        <p><a href="about.php">Support</a></p>
        <p><a href="carapesan.php">Shipment</a></p>
        <p><a href="carapesan.php">Payment</a></p>
        <p><a href="carapesan.php">Return</a></p>
        <p><a href="carapesan.php">Help</a></p>
      </div>


      <div class="kolom" align="justify">
        <h3>Store</h3>
        <p><i class="fa fa-fw fa-map-marker"></i> Omah Klamby</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> omahklamby@gmail.com</p>
        <h3>We accept</h3>
        <p><i class="fa fa-fw fa-cc-amex"></i> ATM</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
</footer>
<div>
<div class="color" align="center">Powered by Omah Klamby</div>
<div>
<body>
    <html>