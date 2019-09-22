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
  <li><a href="index.php">Home</a></li>
  <li><a href="tambahbarang.php">Edit Barang</a></li>
  <li><a href="tambahuser.php">Pengguna</a></li>
  <li><a class="active" href="pembelian.php">Pembelian</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>

<hr>
<div>
    <table>
        <thead>
        <h3 align="center"> Pembelian</h3>
            <tr> 
<th> No </th>
<th> Nama Pelanggan </th>
<th> Tanggal </th>
<th> Total </th>
<th> Aksi</th>
</tr>
</thead>
<tbody>
<?php $nomor=1;?>
<?php $ambil=$connect->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id");?>

<?php while ($data = $ambil->fetch_assoc()){ ?>
  <tr>
 <td><?php echo $nomor;?></td>
 <td><?php echo $data['username'];?></td>
 <td><?php echo $data['tanggal_beli'];?></td>
 <td><?php echo $data['total'];?></td>
 <td> <a href="detail.php?halaman=detail&id=<?php echo $data['id_pembelian'];?>"> Detail</a></td>
 </tr>
 <?php $nomor++; ?> 
 <?php 
}
?>
 </tbody>
 </table>
 </div>

 </body>
 </html>
