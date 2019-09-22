<html>
<head>
  <title>Tambah Pengguna Omah Klamby</title>
</head>
<body>
  <h1>Tambah Data Pengguna</h1>
  <form method="post" action="simpan_pengguna.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Id</td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
    <input type="password" name="password"></td>
    </td>
  </tr>
  <tr>
    <td>Level</td>
    <td><input type="text" name="level"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="tambahuser.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>