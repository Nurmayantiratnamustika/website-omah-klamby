<?php
session_start();

$id_barang=$_GET['id'];

// jk sudah ada produk di keranjang maka jumlah produk ditambah satu
if(isset($_SESSION["keranjang"][$id_barang])){
    $_SESSION["keranjang"][$id_barang]+=1;
}
//jika blm ada produk di keranjang maka dianggap beli 1
else{
    $_SESSION["keranjang"][$id_barang]=1;
}

echo "<script>alert('produk telah masuk ke keranjang anda');</script>";
echo "<script>location='keranjang1.php';</script>";
?>