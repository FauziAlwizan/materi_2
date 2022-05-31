<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Inventory</title>
</head>
<body>
<?php
    include 'Database.php';
    $id = $_GET['id'];
    $data = mysqli_query ($koneksi, "DELETE FROM tbl_inventory WHERE id ='$id'");
    header("location:View_Inventory.php?pesan=hapus");
    ?>
</body>
</html>