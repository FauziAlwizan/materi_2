<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-secondary">
    
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-5">
                    <h1 class="text-center text-white">Masukan Data Buku</h1>
                    <?php
                        include 'Database.php';  
                        if(isset($_POST['proses']))
                            {
                                $data=mysqli_query($koneksi,"INSERT INTO tbl_inventory VALUES(
                                    '".$_POST['id']."',
                                    '".$_POST['kode_barang']."',
                                    '".$_POST['nama_barang']."',
                                    '".$_POST['unit']."')");
                                header('location:View_Inventory.php');
                            }
                    ?>

                    <form action="" method="POST" class="mt-5">
                    <div>
                        <label class="form-label text-white">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" placeholder="Masukan Kode Barang">
                    </div>
                    <div>
                        <label class="form-label text-white">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Barang">
                    </div>
                    <div>
                        <label class="form-label text-white">Unit</label>
                        <input type="text" name="unit" class="form-control" placeholder="Masukan Unit Barang">
                    </div>
                    <button type="submit" name="proses" class="btn btn-success mb-2 mt-5">Simpan</button>
                    <button type="button" class="btn btn-success mb-2 mt-5"><a class="text-white" href="View_Inventory.php?id=<?php ?>">Kembali</a></button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    </body>
</html>