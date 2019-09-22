<html>
<head>
  <title>Ubah Data User</title>
</head>
<body>
  <h1>Ubah Data User</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM user WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="ubah_pengguna.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
  </tr>
  <tr>
    <td>Level</td>
    <td><input type="text" name="level" value="<?php echo $data['level']; ?>"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="tambahuser.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>