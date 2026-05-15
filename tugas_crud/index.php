<?php
include "koneksi.php";
$querry = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nim ASC");
$nim_full = "253307";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>DATA MAHASISWA POLITEKNIK NEGERI MADIUN</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($data = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $nim_full . $data['nim']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['prodi']; ?></td>
                <td><?= $data['email']; ?></td>
                <td>
                    <a href="update.php?nim=<?= $data['nim']; ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="insert.php">+ Tambah Data</a>

</body>

</html>