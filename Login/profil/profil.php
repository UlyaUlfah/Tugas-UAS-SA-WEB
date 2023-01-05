<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <title>Profil</title>
</head>
<body>
    <div class="main">
        <div class="img"></div>
        <h1>Ulya Ulfah Rahmawati</h1>
        <div class="text">Mahasiswi Universitas Widyagama Malang</div>
        <p>Saya berkuliah di Universitas Widyagama Malang di bidang Teknik Informatika
            dan sekarang saya sedang menempuh semester 5 akhir.
        </p>
        <ul>
            <li><a href="#"><img src="fb.png" width="25px" height="25px"></a></li>
            <li><a href="#"><img src="tw.png" width="25px" height="25px"></a></li>
            <li><a href="#"><img src="ig.png" width="25px" height="25px"></a></li>
            <li><a href="#"><img src="link.png" width="25px" height="25px"></a></li>
        </ul>
    </div>
</body>
</html>