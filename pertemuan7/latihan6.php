<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"/></td>
        </tr>

        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td>
                <select name="mk">
                    <option value="">-----Pilihan Mata Kuliah-----</option>
                    <option value="Pemograman terstruktur">Pemograman Terstruktur</option>
                    <option value="Pemograman Web">Pemograman Web</option>
                    <option value="Pemograman Berorientasi Objek">Pemograman Berorientasi Objek</option>
                    <option value="Algoritma Struktur Data">Algoritma Struktur Data</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br/>
                <input type="radio" name="jk" value="Perempuan">Perempuan<br/>
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>

        <tr align="center">
            <td colspan="3">
                <input type="submit" name="submit" value="simpan"/> &nbsp;
                <input type="reset" name="reset" value="reset"/>
            </td>
        </tr>
    </table>
</form>
    <?php 
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $mk = $_POST['mk'];
        $jk = $_POST['jk'];
        $email = $_POST['email'];

        echo "Nama              : " . $nama . "<br />";
        echo "Mata Kuliah       : " . $mk . "<br />";
        echo "Jenis Kelamin     : " . $jk . "<br />";
        echo "Email             : " . $email . "<br />";


    }
     ?>
</body>
</html>