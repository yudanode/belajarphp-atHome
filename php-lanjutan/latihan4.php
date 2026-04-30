<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>INI PUNYA YUDAN NUR ALIF LATIHAN 4</h3>

    <?php
    $kalimat = "Yudan nakal";

    echo "Kalimat asli: " . $kalimat . "<br/>";
    echo "Ambil 6 karakter pertama " . substr($kalimat, 0, 6) . "<br/>";
    echo "Ganti kata nakal menjadi soleh: " . str_replace("nakal", "soleh", $kalimat);
    ?>

</body>

</html>