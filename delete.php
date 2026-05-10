<?php 
include "koneksi.php";


mysqli_query($kon, "DELETE FROM mahasiswa WHERE id = 3");

echo "Data berhasil dihapus!";
?>