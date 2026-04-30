<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr align="center">
                <td colspan="3">
                    <input type="submit" name="submit" value="kirim">
                    <input type="reset" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = trim($_POST['nama']);
        $nim = ($_POST['nim']);
        $email = ($_POST['email']);
        $jurusan = ($_POST['jurusan']);

        if (empty($_POST['nama'] && ['nim'] && ['email'] && ['jurusan'])) {
            echo "DATA TIDAK BOLEH KOSONG BROW!";
        } else {
            echo "Nama      : " . ucwords($nama) . "<br/>";
            echo "Nim       : " . htmlspecialchars($nim) . "<br/>";
            echo "Jurusan   : " . htmlspecialchars($jurusan) . "<br/>";
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Nama: " . htmlspecialchars($email) . "<br/>";
        } else {
            echo "Email tidak valid harus menggunakan @ contoh (Yudan Nur Alif)";
        }
    }
    ?>

</body>

</html>