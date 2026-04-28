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
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" id=""></td>
            </tr>
            <tr align="center">
                <td colspan="3">
                    <input type="submit" name="submit" value="kirim">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>


    <?php 
    if(isset($_POST['submit'])){
       $nama = trim($_POST['nama']);

       if(empty($_POST['nama'])){
        echo "nama tidak boleh kosong";
       }else{
        echo "Nama: " . htmlspecialchars($nama);
       }
    }
    ?>

</body>

</html>