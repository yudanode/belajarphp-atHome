<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="submit" value="Kirim">
    </form>


    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: session.php");
        exit();
    }

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == "admin" && $password == 12345) {
                $_SESSION['username'] = $username;
                header("Location: session.php");
                exit();
            } else {
                echo "Error username/password salah";
            }
        }
    
    ?>

</body>

</html>