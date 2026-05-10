<?php
include "koneksi.php";
$querry = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Email</th>
        </tr>

        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data["nim"]; ?></td>
                <td><?php echo $data["nama"] ?></td>
                <td><?php echo $data["prodi"] ?></td>
                <td><?php echo $data["email"] ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="insert.php">+ Tambah Data</a>

</body>

</html>