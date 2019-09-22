<?php
session_start();
include "koneksi.php";
?>
<html>
    <head>
        <title> OMAHKLAMBY </title>
        <link rel="stylesheet" type="text/css" href="navbar1.css">
        <link rel="stylesheet" type="text/css" href="header1.css">
        <link rel="stylesheet" type="text/css" href="text1.css">
        <link rel="stylesheet" type="text/css" href="gambar1.css">
        <link rel="stylesheet" type="text/css" href="gambarhome1.css">
        <link rel="stylesheet" type="text/css" href="footer1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          p.outline {
            height : 20px;
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
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="tambahbarang.php">Edit Barang</a></li>
  <li><a href="tambahuser.php">Pengguna</a></li>
  <li><a href="pembelian.php">Pembelian</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>
<h2> Detail Pembelian </h2>
<?php 

 $ambil=$connect->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id WHERE pembelian.id_pembelian='$_GET[id]'");
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
<th> id pembelian barang </th>
<th> id pembelian </th>
<th> id barang </th>
<th> jumlah </th>
<th> nama </th>
<th> harga </th>
</tr>
</thead>
<tbody>
<?php $nomor=1;?>
<?php $ambil=$connect->query("SELECT * FROM item_pembelian WHERE id_pembelian='$_GET[id]'");?>
 <?php while($data = $ambil->fetch_assoc()){?>
  <tr>
 <td><?php echo $nomor;?></td>
 <td><?php echo $data['id_itempembelian'];?></td>
 <td><?php echo $data['id_pembelian'];?></td>
 <td><?php echo $data['id_barang'];?></td>
 <td><?php echo $data['jumlah'];?></td>
 <td><?php echo $data['nama'];?></td>
 <td><?php echo $data['harga'];?></td>

 </tr>


 <?php $nomor++ ;?>
 <?php
 }
 ?>
 </tbody>
</table>
</body>
</html>