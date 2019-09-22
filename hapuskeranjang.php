<?php
session_start();
$id_barang=$_GET['id'];
unset($_SESSION["keranjang"][$id_barang]);

echo "<script>alert('produk di hapus dari keranjang');</script>";
echo "<script>location='keranjang1.php';</script>";
?>