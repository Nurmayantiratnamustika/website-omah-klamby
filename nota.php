<?php
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

.tampil{
  background-color:#5F9EA0;
  font-size: 15px;
  padding: 10px;
  width: 500px;
  margin: 5px;
}

</style>

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
  <li><a href="profil.php?kd=<?php echo $user['id']; ?>">Profil</a></li>
  <li><a href="carapesan.php">Cara Pesan</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</div>

<section>
    <div>

    <h2> Detail Pembelian </h2>
<?php 

 $ambil=$connect->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id WHERE pembelian.id_pembelian='$_GET[kd]'");
 $data = $ambil->fetch_assoc();
 ?>
  
 <p>
 Nama: <?php echo $data['username'];?><br>
 tanggal : <?php echo $data['tanggal_beli'];?><br>
 Total: <?php echo $data['total'];?><br>
</p>

<table>
        <thead>
        <h3 align="center"> Pembelian</h3>
            <tr> 
<th> No </th>
<th> id pembelian </th>
<th> Nama Produk </th>
<th> Harga </th>
<th> Jumlah </th>
</tr>
</thead>
<tbody>
<?php $nomor=0;?>
<?php

 $query="SELECT id_pembelian,jumlah,nama,harga FROM item_pembelian WHERE id_pembelian='$_GET[kd]'"; 
 $result=mysqli_query($connect,$query);
 $cek=mysqli_num_rows($result);

 if($cek>0){
  while($row = mysqli_fetch_assoc($result)){ 
$nomor+=1;
echo "
<tr>
<td>".$nomor."</td>
<td>".$row['id_pembelian']."</td>
<td>".$row['nama']."</td>
<td>".$row['harga']."</td>
<td>".$row['jumlah']."</td>
</tr> ";
  }
} 
else{
  echo "
  <tr>
  <td colspan=5 align =center> Tidak ada pembelian </td>
  </tr>";
}
 ?>
 </tbody>
</table>


<br><br><br>
<div class="tampil">
<p> Silahkan melakukan pembayaran Rp. <?php echo number_format($data['total']);?> ke <br>
<strong> BANK MANDIRI 137-001088-3276 AN. Nurmayanti Ratna Mustika </strong>
</p>

</div>

</div>
</section>
</body>
</html>
