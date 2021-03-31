<?php
    require "balok.php";

    $balok = new balok;
    $balok -> setPanjang(6);
    $balok -> setLebar(8);
    $balok -> setTinggi(5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101044</title>
</head>
<body>
    <h3>Aula Fajrun Khalilurahman</h3>
    <h1>Bangun Ruang : Balok</h1>

    <ul>
        <li>Panjang Balok : <?php echo ($balok -> getPanjang()) ?></li>
        <li>Lebar Balok : <?php echo ($balok -> getLebar()) ?></li>
        <li>Tinggi Balok : <?php echo ($balok -> getTinggi()) ?></li>
        <li>Luas Balok : <?php echo ($balok -> getLuas()) ?></li>
        <li>Volume Balok : <?php echo ($balok -> getVolume()) ?></li>
    </ul>
</body>
</html>