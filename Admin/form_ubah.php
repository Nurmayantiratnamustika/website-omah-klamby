<html>
<head>
  <title>Ubah Data Barang</title>
</head>
<body>
  <h1>Ubah Data Barang</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM barang WHERE id_barang='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama_barang']; ?>"></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
  </tr>
  <tr>
    <td>Persediaan</td>
    <td><input type="text" name="persediaan" value="<?php echo $data['persediaan']; ?>"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
    </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="tambahbarang.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>