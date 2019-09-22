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
  <li><a href="kontak.php">Cara Pesan</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</div>


<p class="outline">Cara Pemesanan</p><br>
<div class="pesan">
<h3> CARA PEMESANAN </h3>
    <ol>
      <li> Pilih Produk </li><br>
      <li> Masukkan pada keranjang </li><br>
      <li> Login </li><br>
      <li> Pembayaran </li><br>
    
    </ol><br>
        
<br><br>
  <h3 > Informasi Penting </h3>
  <p > Anda akan melakukan pembayaran melalui transfer ke rekening Omah Klamby.<br>
   Produk yang dijual menggunakan ‘first-pay-first-serve’ dimana barang yang Anda pesan<br>
   dapat dibeli oleh pelanggan lain sebelum Anda melakukan pembayaran.<br>
   Pesanan yang Anda lakukan akan secara otomatis dibatalkan apabila pembayaran tidak dilakukan dalam waktu 48 jam.</p>

<br><br>
  <h3 > Konfirmasi Pembayaran </h3>
  <p > Untuk pembayaran dengan metode bank transfer, silahkan konfirmasikan pembayaran Anda langsung di notifikasi yang Anda dapatkan setelah selesai berbelanja dan setelah Anda melakukan pembayaran.<br>
   Atau konfirmasikan pembayaran Anda di email konfirmasi yang telah kami kirimkan ke email Anda dengan langkah-langkah sebagai berikut : </p>
   <br>

   <ol>
   <li>Tekan tombol "Konfirmasi Pembayaran"</li><br>
   <li>Masuk ke menu "Order Anda"</li><br>
   <li>Dibagian bawah sebelah kiri ada keterangan "METODE PEMBAYARAN", harap masukkan : <br>
   <ol>
        <li> Bank beserta Nama Pemilik Rekening </li><br>
        <li>Nominal yang Anda transfer (harus sesuai dengan grand total yang Anda bayarkan, mohon perhatikan 3 digit angka dibelakang)</li><br>
        </ol>
   </li><br>
  <li>Tekan tombol "KONFIRMASI" dan Anda akan mendapatkan keterangan status pembayaran yang telah Anda konfirmasikan</li><br>
  </ol>
<br><br>
  <h3 > Tunggu Pesanan </h3>
  <p > Kami akan memverifikasi pembayaran dan mengirimkan pesanan Anda setelah pembayaran telah disetujui.<br>
       Pesanan Anda akan tiba dalam waktu 1-3 hari kerja untuk wilayah Jakarta dan 2-9 hari kerja untuk luar Jakarta.<br>
       Untuk barang yang berupa aerosol/minyak/air diluar jakarta akan memakan waktu 14HK untuk sampai ke tujuan.</p>
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