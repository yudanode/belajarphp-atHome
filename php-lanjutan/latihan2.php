<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>INI PUNYA YUDAN NUR ALIF LATIHAN 2</h3>

    <form action="" method="post">
        Email : <input type="text" name="email">
        <input type="submit" name="submit" value="kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $email = trim($_POST['email']);

        if (empty($_POST['email'])) {
            echo "Error tidak boleh kosong!";
        } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: " . htmlspecialchars($email) . "<br/>";
        } else {
            echo "Email salah harus menggunakan @ ";
        }
    }
    ?>

</body>

</html>