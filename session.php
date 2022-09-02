<?php
session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

echo "Selamat Datang, ";
 echo $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="hapus_session.php">
    <button type="submit" class="btn btn-primary">Logout</button>
    </form>
    <form action="beranda.php" method.php>
        <button type="submit" class="btn btn-primary">Cek Data</button>
    </form>
</body>
</html>
