<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
    echo "<script>alert('keranjang kosong, silahkan berbelanja');</script>";
    echo "<script>location='pakaian.php';</script>";
}

?>
 <html>
 <head>
 <title> Keranjang Belanja </title>
 <link rel="stylesheet" type="text/css" href="navbar2.css">
        <link rel="stylesheet" type="text/css" href="header1.css">
        <link rel="stylesheet" type="text/css" href="footer3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="slideshow1.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="table.css">
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
          }

          table {
          border-collapse: collapse;
          width: 100%;
          }

          th, td {
          text-align: left;
          padding: 14px 8px;

          }

          tr:nth-child(even){
            background-color: #f2f2f2
          }

          th {
          background-color: #184153;
          color: white;
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

        </style>
    </head>
<body>
<?php include('sesi-user.php'); ?>
<div class="content">
	<header >
    <center>
        <marquee  scrollamount="10" direction="right" width="300px" > <h1 class="judul">OMAHKLAMBY</h1></marquee>
        </center>
      </header>
</div>
 
<div class="navbar">
 <ul>
  <li><a  href="index.php">Home</a></li>
  <li><a class="active" href="#">Category</a>
  <ul>
    <li><a  href="pakaian.php">Pakaian</a></li>
    <li><a href="tas.php">Tas</a></li>
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

<section>
<div>
<h3 align="center"> Keranjang Belanja </h3>
<hr>
<table>
<thead>
<tr>
<th> No </th>
<th> Barang </th>
<th> Harga </th>
<th> Jumlah </th>
<th> Subharga</th>
<th> Aksi</th>
</tr>
</thead>
<tbody>
<?php $nomor=1;?>
<?php
if(isset($_SESSION['keranjang'])){
foreach ($_SESSION["keranjang"] as $id_barang => $jumlah){
 $query = "SELECT * FROM barang WHERE id_barang='".$id_barang."'";
 $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
 $data = mysqli_fetch_array($sql);
 $subharga=$data['harga']*$jumlah;
 ?>
 <tr>
 <td><?php echo $nomor;?></td>
 <td><?php echo $data['nama_barang'];?></td>
 <td>Rp.<?php echo number_format($data['harga'],2,",",".");?></td>
 <td><?php echo $jumlah; ?></td>
 <td>Rp.<?php echo number_format($subharga,2,",",".");?></td>
 <td> <a href="hapuskeranjang.php?id=<?php echo $id_barang?>"> Hapus</a></td>
 </tr>
 <?php $nomor++; ?> 
<?php
}
}
  ?>
 </tbody>
 </table>
<a href="pakaian.php" class="button" style="vertical-align:middle" ><span>Lanjutkan Belanja </span></a>
<a href="checkout.php" class="button" style="vertical-align:middle" ><span>Checkout </span></a>
 </div>
</section>

 </body>
 </html>





