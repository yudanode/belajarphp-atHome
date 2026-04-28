<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    print("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI <br />");
    $kota[1] = 'sumedang';
    $kota[2] = 'bandung';
    $kota[3] = 'Jakarta';

    print("ini adalah kota ke 3 atau ke [3] " . $kota[3]);

    echo "<br /><br /><br />";

    print('CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI <br />');
    $kota2 = array('Madura', 'Bekasi', 'Tangerang');
    print("saya berasal dari kota: " . $kota2[1]);

    echo "<br /><br /><br />";

    print("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI <br />");
    $inisialKota = array("SMD" => "Sumedang", "BDG" => "Bandung");
    echo "inisial BDG adalah kota: " . $inisialKota["BDG"]

    
    ?>
</body>
</html>