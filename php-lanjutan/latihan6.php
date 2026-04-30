<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>INI PUNYA YUDAN NUR ALIF LATIHAN 6</h3>


    <?php 
    if(isset($_SESSION['nama'])){
        echo "Selamat datang: " . $_SESSION['nama'];
    }else{
        echo "Session belum tersedia";
    }
     ?>

</body>

</html>