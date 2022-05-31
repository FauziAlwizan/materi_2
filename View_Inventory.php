<!doctype html>
<html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-secondary">
    <center>
    <h3 class="mt-5 p-3 text-white">HALAMAN INVENTORY</h3>
                <div class="col-md-4 ml-5 mt-5 p-3">
                <button type="button" class="btn btn-success mb-2"><a class="text-white" href="Input_Inventory.php?id=<?php ?>">Tambah Data Inventory</a></button>
                    <table class="table table-hover shadow-lg bg-body rounded">
                        <tr>
                            <th>ID</th>
                            <th>Nomor Barang</th>
                            <th>Nama Barang</th>
                            <th>unit</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            include 'Database.php';
                            $data = mysqli_query ($koneksi,"SELECT * FROM tbl_inventory");
                            while($d=mysqli_fetch_array($data)){
                        ?>
                            <tr>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['kode_barang']; ?></td>
                                <td><?php echo $d['nama_barang']; ?></td>
                                <td><?php echo $d['unit']; ?></td>
                                <td>
                                <p><a href="Update_Inventory.php?id=<?php echo $d['id']?>">Update</a></p>
                                <p><a href="Delete_Inventory.php?id=<?php echo $d['id']?>">Delete</a></p>
                                </td>     
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <button type="button" class="btn btn-success mb-2"><a class="text-white" href="index.php?id=<?php ?>">Kembali</a></button>
    </center>                        
    </body>
</html>