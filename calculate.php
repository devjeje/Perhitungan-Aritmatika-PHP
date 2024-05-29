<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
       .headtitle{
            display: flex;
            justify-content: center;
        }
       .headtitle h1 {
            color: #333;
        }
        .hasil{
            max-width: 400px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
            background-color: #f9f9f9;
        }
        .hasil p {
            margin: 0.5em 0;
        }
         .button-container {
            display: flex;
            justify-content: center;
            margin-top: 1em;
         }
        a {
            display: inline-block;
            margin-top: 1em;
            padding: 0.7em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 1em;
            text-decoration: none;
            cursor: pointer;
            font-size: 1em;
            align-items: center;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="headtitle">
    <h1>Perhitungan Aritmatika</h1>
    </div>
    <div class="hasil">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $angka1 = (int)$_POST['angka1'];
            $angka2 = (int)$_POST['angka2'];

            $penjumlahan = $angka1 + $angka2;
            $pengurangan = $angka1 - $angka2;
            $perkalian = $angka1 * $angka2;
            $pembagian = $angka1 / $angka2;
            $modulus = $angka1 % $angka2;

            echo "<p>Nama: $nama</p>";
            echo "<p>$angka1 + $angka2 = $penjumlahan</p>";
            echo "<p>$angka1 - $angka2 = $pengurangan</p>";
            echo "<p>$angka1 * $angka2 = $perkalian</p>";
            echo "<p>$angka1 / $angka2 = $pembagian</p>";
            echo "<p>$angka1 % $angka2 = $modulus</p>";
        } else {
            echo "<p>Metode tidak valid.</p>";
        }
        ?>
        <div class="button-container">
        <a href="index.php">Kembali</a>
        </div>
    </div>
</body>
</html>
