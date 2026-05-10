<?php
include "koneksi.php";
if (isset($_POST['simpan'])){
    $nim_lengkap = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];

    $nim_potong = substr($nim_lengkap, -3);

    $querry = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, prodi, email) VALUES ('$nim_potong', '$nama', '$prodi', '$email')");

    if($querry){
        echo "<script>alert('Data berhasil di simpan!'); document.location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('Data gagal untuk di simpan, nim duplikat!'); document.location.href = 'insert.php';</script>";
    }


    
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