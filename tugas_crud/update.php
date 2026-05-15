<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nim_input = $_POST['nim'];       
    $nim_potong = substr($nim_input, -3); 
    $nama      = $_POST['nama'];
    $prodi     = $_POST['prodi'];
    $email     = $_POST['email'];
    $nim_lama  = $_POST['nim_lama'];   

    $query = mysqli_query($conn, "UPDATE mahasiswa SET 
        nim='$nim_potong', nama='$nama', prodi='$prodi', email='$email' 
        WHERE nim='$nim_lama'");

    if ($query) {
        echo "<script>alert('Data berhasil diupdate!'); document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Data gagal!'); document.location.href = 'index.php';</script>";
    }
    exit();
}

if (isset($_GET['nim'])) {
    $nim_lama = $_GET['nim'];     
    $query    = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim_lama'");
    $data     = mysqli_fetch_assoc($query);
} else {
    header("Location: index.php");
    exit();
}

$nim_full = "253307";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h2>EDIT DATA MAHASISWA</h2>
    <form method="post">
        <input type="hidden" name="nim_lama" value="<?= $data['nim']; ?>">

        NIM: <input name="nim" value="<?= $nim_full . $data['nim']; ?>"><br><br>
        Nama: <input name="nama" value="<?= $data['nama']; ?>"><br><br>
        Prodi: <input name="prodi" value="<?= $data['prodi']; ?>"><br><br>
        Email: <input name="email" value="<?= $data['email']; ?>"><br><br>
        <button name="simpan">Simpan</button>
    </form>
</body>

</html>