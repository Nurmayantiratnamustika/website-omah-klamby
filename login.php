<?php
include "koneksi.php"; 
session_start();


$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * from user where username ='$username' and password ='$password'"; 
$result=mysqli_query($connect,$query);
$cek=mysqli_num_rows($result);

if($cek > 0){
	$data=mysqli_fetch_assoc($result);
 if($data['level']==1){
	 $_SESSION['admin']=$username;
	 echo '<script>alert("Anda berhasil login");

		// alihkan ke halaman dashboard admin
		document.location="Admin/index.php";</script>';
 }
else{
	$_SESSION['pengguna']=$username;
	$_SESSION['akun_id'] = $data['id'];
	echo '<script>alert("Anda berhasil login");

	// alihkan ke halaman dashboard admin
	document.location="keranjang1.php";</script>';
}

}

    
?>
