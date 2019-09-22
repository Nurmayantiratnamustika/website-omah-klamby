<?php
// membuat koneksi
include "koneksi.php"; 
// Deklarasi variable
$username = $_POST['username'];
$password = $_POST['psw'];
$submit =$_POST['submit'];
 
if(isset($submit)){
 
 if(empty($username) or empty($password)){
 
  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); 
  window.location=('register.html') </script>";
 }
 else{

  $ins = mysqli_query($connect, "INSERT INTO user(username,password,level) VALUES ('$username', '$password',2)");
  echo "<script>alert('Data berhasil di Tambah'); 
  window.location=('loginForm.html'); </script>";
 }
}
?>