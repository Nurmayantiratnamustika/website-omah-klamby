<?php
session_start();
include "koneksi.php";

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
.styled-select {
  width: 250px;
  height: 34px;
  overflow: hidden;
  background: no-repeat right #749ABE;
  border: 1px solid #ccc;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  transition:ease all 0.3s;
  -webkit-transition:ease all 0.3s;
  float : left;
  margin : 5px;
  
  
}
.styled-select:hover{
  box-shadow:0 0 7px 5px lightblue;
}
.styled-select select {
  background: transparent;
  width: 220px;
  padding: 5px;
  font-size: 14px;
  line-height: 1;
  border: 0;
  border-radius: 0;
  height: 34px;
  -webkit-appearance: none;
}

.styled-select select {
  color: #fff;
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
</tr>
</thead>
<tbody>
<?php $nomor=1;?>
<?php $totalbelanja=0;?>
<?php
foreach ($_SESSION["keranjang"] as $id_barang => $jumlah):?>
 <?php
 $ambil=$connect->query("SELECT * FROM barang WHERE id_barang='$id_barang'");
 $data = $ambil->fetch_assoc();
 $subharga=$data['harga']*$jumlah;
 
 ?>
 <tr>
 <td><?php echo $nomor;?></td>
 <td><?php echo $data['nama_barang'];?></td>
 <td>Rp.<?php echo number_format($data['harga'],2,",",".");?></td>
 <td><?php echo $jumlah; ?></td>
 <td>Rp.<?php echo number_format($subharga,2,",",".");?></td>
 </tr>
 <?php $nomor++; ?> 
 <?php $totalbelanja+=$subharga;?>
<?php endforeach ?>
 </tbody>
 <tfoot>
 <tr>
 <th> Total Belanja </th>
 <th>Rp.<?php echo number_format($totalbelanja,2,",",".");?></th>
 </tr>
 </tfoot>
 </table>

 <form method="post">

<div class="styled-select">
<select name="id_ongkir">
<option value=" ">Pilih Ongkos Kirim</option>
<?php 
 $query = "SELECT * FROM ongkir";
 $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	while($row = mysqli_fetch_assoc($sql)){
     ?>
     <option value="<?php echo $row['id_ongkir']?>">
     <?php echo $row['nama_kota']?>
     Rp. <?php echo number_format($row['tarif'])?>
     </option>
     <?php
 }
 ?>
 </select>
 </div>
 <button class="button" name="checkout">Checkout </button>
 </form>
 




<?php
if(isset($_POST['checkout']))
{
  $id_user=$_SESSION["akun_id"];
  $id_ongkir=$_POST["id_ongkir"];
  $tanggal_beli= date("Y-m-d");


  $ambil = $connect->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir'");
  $arrayongkir = $ambil->fetch_assoc();
  $tarif = $arrayongkir['tarif'];

  $total_pembelian= $totalbelanja + $tarif;

  $connect->query("INSERT INTO pembelian(id_ongkir,tanggal_beli,total,id_user) VALUES ('$id_ongkir','$tanggal_beli','$total_pembelian','$id_user')");

 $id_pembelian=$connect->insert_id;
 foreach ($_SESSION["keranjang"] as $id_barang => $jumlah){
   
      //mendapatkan data produk
  $ambil=$connect->query("SELECT * FROM barang where id_barang='$id_barang'");
  $perproduk=$ambil->fetch_assoc();


  $nama=$perproduk['nama_barang'];
  $harga=$perproduk['harga'];
  $connect->query("INSERT INTO item_pembelian(id_barang,id_pembelian,jumlah,nama,harga) VALUES ('$id_barang','$id_pembelian','$jumlah','$nama','$harga')");
  
}

unset($_SESSION['keranjang']);

  echo "<script>alert('pembelian sukses');</script>";
  echo "<script>location='nota.php?kd=$id_pembelian';</script>";
}

?>
 </div>

 </div>
</section>



 </body>
 </html>