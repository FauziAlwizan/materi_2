<!doctype html>
<html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-secondary">
        <div class = "container">
            <div class = "container-fluid">
                <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-5">
                    <h1 class="text-center text-white">Update Data Inventory</h1>
                    <?php
                        include 'Database.php';
                        $id = $_GET['id'];
                        $data = mysqli_query ($koneksi,"SELECT * FROM tbl_inventory WHERE id='$id'");
                        while($d=mysqli_fetch_array($data)){
                    ?>

                    <form action="Update_Inventory-1.php" method="POST" class="mt-5">
                    <div>
                        <label class="form-label text-white" >Update Kode Barang</label>
                        <input type="hidden" name="kode_barang" class="form-control" placeholder="Masukan kode barang" value="<?php echo $d['kode_barang']; ?>">
                        <input type="text" name="kode_barang" class="form-control" placeholder="Masukan kode barang" value="<?php echo $d['kode_barang']; ?>">
                    </div>
                    <div>
                        <label class="form-label text-white">Update Nama barang</label>
                        <input type="hidden" name="nama_barang" class="form-control" placeholder="Masukan nama barang" value="<?php echo $d['nama_barang']; ?>">
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukan nama barang" value="<?php echo $d['nama_barang']; ?>">
                    </div>
                    <div>
                        <label class="form-label text-white">Update Unit Barang</label>
                        <input type="hidden" name="unit" class="form-control" placeholder="Masukan tahun barang" value="<?php echo $d['unit']; ?>">
                        <input type="text" name="unit" class="form-control" placeholder="Masukan tahun barang" value="<?php echo $d['unit']; ?>">
                    </div>
                    <button type="submit" name="proses" class="btn btn-success mb-2 mt-5">Simpan</button>
                    <Input type='hidden' name='id' value='<?php echo $d['id']; ?>'></Input>
                    <button type="button" class="btn btn-success mb-2 mt-5"><a class="text-white" href="View_Inventory.php?id=<?php ?>">Kembali</a></button>
                    </form>
                    <?php
                        }
                    ?>
                    
                </div>
                <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </body>
</html>