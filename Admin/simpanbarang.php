<html>
<head>
  <title>Omah Klamby Tambah Barng</title>
</head>
<body>
  <h1>Tambah Barang</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Kode Barang</td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td>
    <input type="text" name="harga"></td>
    </td>
  </tr>
  <tr>
    <td>Persediaan</td>
    <td><input type="text" name="persediaan"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="tambahbarang.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>