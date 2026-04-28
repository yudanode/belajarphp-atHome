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
        $nama = ($_POST['nim']);
        $nama = ($_POST['email']);
        $nama = ($_POST['jurusan']);

        if (empty($_POST['nama'])) {
            echo "Nama tidak boleh kosong!";
        }else if(empty($_POST['nim'])){
            echo "NIM tidak boleh kosong!";
        }else if(empty($_POST['email'])){
            echo "Email tidak boleh kosong";
        }else if(empty($_POST['jurusan'])){
            echo "jurusan tidak boleh kosong";
        }else{
            echo "Nama  : " . ucwords($nama);
            echo "Nim: " . htmlspecialchars($nim);
            echo "Nama: " . htmlspecialchars($email);
            echo "Nama: " . htmlspecialchars($jurusan);
        }
    }
    ?>

</body>

</html>