<?php 

    require "Tabung.php";
    $tabung = new Tabung;

    if (isset($_POST["submit_btn"])) {
        
        $tabung -> setDiameter($_POST["diameter"]);
        $tabung -> setTinggi($_POST["tinggi"]);
        $tabung -> setLuas();
        $tabung -> setVolume();
    }
    // $tabung -> tes();
    // get bisa diisi melalui code editor atau url
    // $_GET["nama"] = "aula fajrun"; 
    // $_GET["age"] = "20";
    // $_GET["nama"]
    // $_GET["age"]
    // post hanya bisa diisi melalui form
    // $_POST["nama"] = "aula fajrun";
    // var_dump($_POST);

    // $_POST bisa ngedeteksi menggunakan value name
    // if (isset($_POST["submit_btn"])) {
    //     echo "Logged in";
    // }

    // if (isset($_POST["submit_btn"])) {
    //     if (strlen($_POST["nama"]) > 5) {
    //         echo "login";
    //     } else {
    //         echo "name salah";
    //     }
    // }

    // untuk menghindari error, bisa menggunakan ternary operator, jadi misal variabelnya gada isi,
    // bisa menampilkan nilai default

    // untuk mendapatkan nilai
    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     echo "hihihi anda benar";
    // }

    // ada cara lain atau cara yg singkat
    // if (!empty($_POST)) {
    //     echo "loh bener";
    // }
    
    // $luas = 0;
    // $volume = 0;

    // if (isset($_POST["submit_btn"])) {
    //     $diameter = $_POST["diameter"];
    //     $tinggi = $_POST["tinggi"];

    //     $r = $diameter / 2;
    //     $luas = pi() * $diameter * $tinggi;
    //     $volume = pi() * ($r ** 2) * $tinggi;

    //     echo "diameter $diameter <br/>" ;
    //     echo "tinggi $tinggi  <br/>";
    // }
?>

<!-- membutuhkan variabel global untuk mendapatkan nilainya -->
<!-- bisa melalui code editor dan bisajuga lewat url dengan memberikan tanda tanya, 
lalu masukan data yang ingin dimasukkan -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
    <!-- <form action="" method = "post">
        <input type="text" name = "nama">
        <button name = "submit_btn">submit</button>
    </form> -->

    <form action="" method="POST">

        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name = "submit_btn">Hitung</button>

    </form>

    <hr>

    <ul>
        <!-- <li>Luas Permukaan : <?= is_null($tabung) ? "Tabung Kosong" : $tabung -> getLuas()?></li> -->
        <li>Luas Permukaan : <?= $tabung -> getLuas()?></li>
        <li>Volume : <?= $tabung -> getVolume() ?></li>
    </ul>
</body>
</html>
