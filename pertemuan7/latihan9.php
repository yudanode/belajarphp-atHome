<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    print("CARA PERTAMA ARRAY MULTI DIMENSI") . "<br/>";
    $mobil = array(
        "Avanza" => array("Putih", "Hitam", "Abu abu"),
        "Brio" => array("Merah", "Putih")
    );

    print "LIST MOBIL AVANZA: " . "<br/>" ;
    print "Avanza " . $mobil["Avanza"][0] . "<br/>";
    print "Avanza " . $mobil["Avanza"][1] . "<br/>";
    print "Avanza " . $mobil["Avanza"][2] . "<br/>";
  


    echo "<br/><br/><br/>";

    print("CARA KEDUA ARRAY MULTI DIMENSI" . "<br/>");
    $listMenu = array(
        array("Mie Goreng", "Ayam Penyet", "Ayam Geprek"),
        array("Esteh", "Teh Anget", "Es Jeruk"),
    );

    print "Pilihan Makanan: " . $listMenu[0][2] . "<br>" . "Pilihan Minuman: " . $listMenu[1][1];
    
    ?>
    
</body>
</html>