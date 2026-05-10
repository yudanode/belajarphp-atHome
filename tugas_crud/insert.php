<?php
include "koneksi.php";
if (isset($_POST['simpan'])){
    $result = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, prodi, email) VALUES ('$_POST[nim]','$_POST[nama]','$_POST[prodi]','$_POST[email]')");

    


    if(!$result){
        die("Error: " . mysqli_error($conn));
    }

    header("Location: index.php");
    
}

 ?>

 <div>
    <form method="post">
        <input name="nim" placeholder="NIM"><br><br>
        <input name="nama" placeholder="Nama"><br><br>
        <input name="prodi" placeholder="Program Studi"><br><br>
        <input name="email" placeholder="Email"><br>
        <button name="simpan">Simpan</button>
    </form>
 </div>