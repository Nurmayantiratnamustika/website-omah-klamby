<?php
// Load file koneksi.php
include "koneksi.php";
?>

<html>
    <head>
        <title> OMAHKLAMBY </title>
        <link rel="stylesheet" type="text/css" href="navbar2.css">
        <link rel="stylesheet" type="text/css" href="header1.css">
        <link rel="stylesheet" type="text/css" href="footer4.css">
        <link rel="stylesheet" type="text/css" href="pesan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='jquery-3.3.1.js'></script>
        <style>
          p.outline {
            height : 10px;
            width : 1300px;
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
  <li><a  href="#">Category</a>
  <ul>
    <li><a  href="pakaian.php">Pakaian</a></li>
    <li><a href="tas.php">Tas</a></li>
    <li><a href="sepatu.php">Sepatu</a></li>
  </ul>
</li>
  <li><a class="active" href="popular.php">Popular</a></li>
  <li><a href="Sale.php">Sale</a></li>
  <li><a href="loginForm.html">Login</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="profil.php">Profil</a></li>
  <li><a href="carapesan.php">Cara Pesan</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</div>


<p class="outline">About Us</p><br>
<div class="pesan">
<h3> BELANJA ONLINE FASHION WANITA </h3>
  <p > Bagi para wanita, Anda telah memilih yang tepat. OMAH KLAMBY hadir untuk memberikan yang terbaik dalam tren fashion wanita. Kami membawa top brand lokal dan internasional terkemuka supaya Anda <br>
   selalu memiliki pakaian yang sempurna dimanapun dan kapanpun. Dapatkan inspirasi fashion seperti floral, denim, stripes, monokrom, dan banyak lagi. Kami menyediakan koleksi terlengkap seperti atasan,<br>
   bawahan, dress, outerwear, jumpsuit, hingga pakaian olahraga agar Anda selalu menjaga kesehatan. OMAH KLAMBY juga menyediakan fashion busana muslim wanita seperti Kaftan, Gamis, Dress Muslim, <br>
   Outerwear, Hijab dan banyak lagi dari para desainer dan brand lokal.</p><br>

<p>Penampilan tidak akan lengkap tanpa sepatu untuk setiap acara, dan di OMAH KLAMBY, kami dapat memenuhinya. Anda dapat menemukan high heels, atau sepatu boots kulit. Anda lebih menyukai gaya yang nyaman? <br>
 Cobalah slip-on klasik kami, sandal yang nyaman, dan sepatu kets. Anda juga memerlukan tas untuk membuat penampilan semakin serasi, Anda dapat memilih berbagai macam pilihan tas pesta,<br>
 shoulder bags, dan tote bags. Permanis gaya Anda dengan aksesori seperti kacamata dan perhiasan untuk hasil yang elegan. Terakhir, manjakan diri Anda dengan berbagai macam pilihan produk perawatan kulit hanya<br>
 untuk Anda. Jika Anda ingin terlihat selalu mempesona, di sini Anda dapat menemukan makeup dan parfum dari brand terbaik.<br></p>

<p>Anda tidak memerlukan alasan lebih untuk berbelanja fashion di OMAH KLAMBY dan memenuhi segala kebutuhan fashion Anda!</p>

<br><br>
  <h3 > Fashion Wanita Dengan Koleksi Brand-brand Terbaik </h3>
  <p> Fashion wanita, fashion sangat erat hubungannya dengan wanita dan seolah sudah menjadi kebutuhan mendasar. Oleh karena itu OMAH KLAMBY terus berupaya menjawab kebutuhan fashion wanita ini<br>
   dengan menawarkan berbagai produk fashion wanita dari mulai sepatu wanita, pakaian wanita, aksesoris wanita, dan busana muslim dengan harga spesial dari brand-brand terbaik lokal maupun internasional.<br>
   Kami selalu menyediakan brand ternama dengan kualitas terbaik dan siap memberikan kepuasan akan trend fashion wanita saat ini. Tampil lebih baik, menarik, dan selalu ikuti perkembangan fashion global <br>
   bersama OMAH KLAMBY.<br></p>

<p>Kami juga memberikan layanan GRATIS pengembalian jika ada barang yang tidak sesuai dengan yang Anda pesan. Jika Anda mencari kebutuhan fashion wanita, OMAH KLAMBY adalah pusat belanja fashion online yang paling tepat untuk Anda. Selamat berbelanja di OMAH KLAMBY!</p><br>


  
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

<div class="color" align="center">Powered by Omah Klamby</div>
<body>
    <html>