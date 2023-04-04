<?php 
    include("koneksi.php"); 
    $sql = 'SELECT * FROM data_barang';
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Modular</title>
        <link href="tugas5.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>PEMROGRAMAN WEB-2</h1>
            </header>
            <nav>
                <a href="home.php">Home</a>
                <a href="tambah.php">Tambah Data Barang</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </nav>