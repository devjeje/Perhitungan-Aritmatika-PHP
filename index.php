<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Aritmatika</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h1 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }
        div {
            margin-bottom: 1em;
        }
        label {
            margin-bottom: .5em;
            color: #333333;
            display: block;
        }
        input {
            border: 1px solid #CCC;
            padding: .5em;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 1em;
        }
        button {
            padding: 0.7em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 1em;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="calculate.php" method="post">
        <div>
            <label for="nama">Masukkan nama anda:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="angka1">Masukkan angka pertama (1-10):</label>
            <input type="number" id="angka1" name="angka1" min="1" max="10" required>
        </div>
        <div>
            <label for="angka2">Masukkan angka kedua (1-10):</label>
            <input type="number" id="angka2" name="angka2" min="1" max="10" required>
        </div>
        <div class="button-container">
        <button type="submit">Hitung</button>
        </div>
    </form>
</body>
</html>
