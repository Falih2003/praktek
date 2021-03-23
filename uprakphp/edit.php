<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $gambar = $_POST['gambar'];   

    $sql = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stock='$stock', gambar='$gambar' WHERE id_produk='$id_produk'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
    header('Location: beli.php');
    }else{
    header('location: edit.php?status=gagal');
    }
}
?>