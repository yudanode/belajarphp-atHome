<?php 
include "koneksi.php";

mysqli_query($kon, "UPDATE mahasiswa set nama = 'Rendy Royhan' WHERE id = 2");

echo "data berhasil di update";



?>
