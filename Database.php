<?php
$koneksi = mysqli_connect("localhost","root","","db_materi2");
 
if(!$koneksi)
{
    die("Koneksi gagal: " . mysqli_connect_error());
}


?>