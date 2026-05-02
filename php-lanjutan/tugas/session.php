<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "Anda belum login. <a href='index.php'>Login di sini</a>";
    exit();
}
?>

<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hai selamat datang <?php echo $_SESSION['username']; ?></h1>
    <br />

    <a href="logout.php">LOGOUT</a>



</body>

</html>