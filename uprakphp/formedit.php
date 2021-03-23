<?php

include 'koneksi.php';

$id_produk = $_GET['id_produk'];
$sql = "SELECT * FROM produk WHERE id_produk='$id_produk'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1 ) {
    die("data tidak ditemukan...");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="tahap_3 mb-1 text-left text white" style="background-color: #2980b9">
        <h5>Tahap 3</h5>
    </div>

    <form action="edit.php" method="post">
        <div class="card-container"></div>
        <div class="card-body"></div>
        <div class="modal-body"></div>
        <h4 class="card-subtilte mb-4 center">Input Data makanan</h4>


        <div class="form-grup row" style="margin-top: 10px;">
            <label class="col-sm-3 col-form-label" for="id_produk">Id</label>
            <div class="col-8">
                <input type="text" class="form-control" name="id_produk" value="<?php echo $pel['id_produk']?>">
            </div>
        </div>

        <div class="form-grup row" style="margin-top: 10px;">
            <label class="col-sm-3" for="nama">Nama Produk</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $pel['nama_produk']?>">
            </div>
        </div>

        <div class="form-grup row" style="margin-top: 10px;">
            <label class="col-sm-3" for="harga">Harga Produk</label>
            <div class="col-8">
                <input type="text" class="form-control" name="harga" value="<?php echo $pel['harga']?>">
            </div>
        </div>

        <div class="form-grup row">
            <label class="col-sm-3" for="stock">Stock Produk</label>
            <div class="col-8">
                <input type="text" class="form-control" name="stock" value="<?php echo $pel['stock']?>">
            </div>
        </div>

        <div class="form-grup row">
            <label class="col-sm-3" for="gambar">Gambar Produk</label>
            <div class="col-8">
                <input type="url" class="form-control" name="gambar" value="<?php echo $pel['gambar']?>">
            </div>
        </div>

        <a href="beli.php" class="btn btn-merah">Kembali</a>
        <button type="submit" name="simpan" value="simpan">Submit</button>
        
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>