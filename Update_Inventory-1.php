<!doctype html>
<html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-light">   
        
    <?php
    include 'Database.php';
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $unit = $_POST['unit'];

    $data = mysqli_query ($koneksi,"UPDATE tbl_inventory SET id='$id', kode_barang='$kode_barang', nama_barang='$nama_barang', unit='$unit' WHERE id='$id'");
    header("location:View_Inventory.php");

    ?>
    </body>
</html>