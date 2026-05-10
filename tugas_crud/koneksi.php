<?php 
$conn = mysqli_connect("localhost", "root","","db_mahasiswa");

if(!$conn){
    die("Gagal tersambung!, error" . mysqli_connect_error());
}else{
    echo "berhasil tersambung";
}


?>