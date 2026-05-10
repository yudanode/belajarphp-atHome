<?php
$kon = mysqli_connect("localhost","root","","db_kampus");

if(!$kon){
    die("Koneksi gagal!" . mysqli_connect_error());
}
?>