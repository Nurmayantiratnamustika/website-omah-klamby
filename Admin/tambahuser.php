<html>
<head>
  <title>Tambah Barang</title>
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
  <li><a class="active" href="tambahuser.php">Pengguna</a></li>
  <li><a href="pembelian.php">Pembelian</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>
<p class="outline">Selamat Datang Sebagai Admin</p>

  <h1>Data Pengguna</h1>
  <a href="simpanuser.php">Tambah Data</a><br><br>
  <table border="1" width="100%"> 
  <tr>
    <th>id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM user"; // Query untuk menampilkan semua data barang
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  $row = mysqli_num_rows($sql);
  
  if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";
    echo "<td>".$data['level']."</td>";
    echo "<td><a href='form_ubahuser.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='hapus_pengguna.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
  }
  ?>
  </table>
</body>
</html>