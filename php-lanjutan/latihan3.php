<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>INI PUNYA YUDAN NUR ALIF LATIHAN 3</h3>

    <?php

    $kalimat = "Yudan Kasep";

    echo "Kalimat asli : " . $kalimat . "<br/>";
    echo "Jumlah kalimat: " . strlen($kalimat) . "<br/>";
    echo "Huruf besar : " . strtoupper($kalimat) . "<br/>";
    echo "Huruf Kecil : " . strtolower($kalimat) . "<br/>";
    echo "Awal Kapital : " . ucfirst($kalimat) . "<br/>";
    echo "Setiap kata kapital : " . ucwords($kalimat) . "<br/>";
    "<br/>";

    echo "Sekarang tanggal: " . date("Y/m/d") . "<br/>";


    for ($i = 0; $i < strlen($kalimat); $i++) {
        echo "Karakter ke - " . $i . " : " . $kalimat[$i] . "<br/>";
    }
    "<br/>";

    if (strlen($kalimat) == 11) {
        echo "benar" . "<br/>";
    } else {
        echo "Salah anjay" . "<br/>";
    }



    if (strlen($kalimat) == 11) {
        echo strtoupper($kalimat) . "<br/>";
    }

    for ($i = 0; $i < strlen($kalimat); $i++) {
        echo "Huruf : " . $kalimat[$i] . " Jadi: " . strtoupper($kalimat[$i]) . "<br/>";
    }

    if ($kalimat == strtoupper($kalimat)) {
        echo "YA KALIMAT INI BESAR SEMUA";
    } else {
        echo "oh salah tidak besar semua bos";
    }



    ?>

</body>

</html>