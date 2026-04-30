<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>INI PUNYA YUDAN NUR ALIF LATIHAN 5</h3>

    <form action="" method="post">
        Nama : <input type="text" name="nama">
        <input type="submit" name="submit" value="Simpan sessions">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $_SESSION['nama'] = $_POST['nama'];
        echo "Sessions berhasil di simpan!";
        echo "Nama dalam session: " . $_SESSION['nama'];
    }

    ?>

</body>

</html>