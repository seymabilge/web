<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP Ödev</title>
    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            margin-top: 15px;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        h2 {
            margin-top: 40px;
        }
    </style>
</head>
<body>

<h1>PHP Ödev</h1>

<!-- 1. GÖREV -->
<h2>1. Görev: 1 - 100 Arası Tek Sayılar</h2>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>

<hr>

<!-- 2. GÖREV -->
<h2>2. Görev: Dinamik Tablo Oluşturma</h2>

<form method="post">
    Satır Sayısı:
    <input type="number" name="satir" required min="1">
    
    Sütun Sayısı:
    <input type="number" name="sutun" required min="1">
    
    <button type="submit">Tablo Oluştur</button>
</form>

<?php
if ($_POST) {
    $satir = $_POST["satir"];
    $sutun = $_POST["sutun"];

    echo "<table>";

    for ($i = 0; $i < $satir; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $sutun; $j++) {
            echo "<td>" . rand(1, 100) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>