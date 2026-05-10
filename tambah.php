<?php 
include "koneksi.php";


mysqli_query($kon, "INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES ('12984323','asep ujang','Teknik Listrik', 'asepujang@gmail.coom')");

echo "data berhasil ditambahkan";
?>