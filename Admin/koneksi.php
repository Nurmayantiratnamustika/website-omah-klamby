<?php
 $namaHost = "localhost";
 $username = "root";
 $password = "";
 $database = "omahklamby";

 $connect = mysqli_connect($namaHost, $username, $password, $database);

 if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 ?>