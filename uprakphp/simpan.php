<?php
    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $id_produk = $_POST['id_produk']; 
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];
        $gambar = $_POST['gambar'];
        $sql = "INSERT INTO produk (id_produk,nama_produk,harga,stock,gambar) 
        VALUES ('$id_produk','$nama_produk','$harga','$stock','$gambar')";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: beli.php');
        }else{
            header('location: simpan.php?status=gagal');
        }
        
    }
?>