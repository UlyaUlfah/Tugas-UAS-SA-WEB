<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Belajar PHP</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="profil/profil.php">Profil</a></li>
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img class="img" src="https://blog.unnes.ac.id/den1/wp-content/uploads/sites/1503/2015/12/books-icon-512.png"/>
            <div class="kolom">
                <p class="deskripsi">Belajar PHP Sederhana</p>
                <h2>Tetap Semangat!!</h2>
                <p>Ini adalah sebuah web sederhana untuk tugas UAS</p>
            </div>
        </section>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>UlyaUlfah</b> 
        </div>
    </div>
</body>
</html>