<?php
function cToF($c) {
    return ($c * 9/5) + 32;
}

function fToC($f) {
    return ($f - 32) * 5/9;
}

function cToK($c) {
    return $c + 273.15;
}

$result = "";

if (isset($_POST['convert'])) {
    $suhu = $_POST['suhu'];
    $jenis = $_POST['jenis'];

    if (!is_numeric($suhu)) {
        $result = "Harus angka!";
    } else {
        if ($jenis == "cf") $result = cToF($suhu) . " °F";
        elseif ($jenis == "fc") $result = fToC($suhu) . " °C";
        elseif ($jenis == "ck") $result = cToK($suhu) . " K";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">
    <h2>Konversi Suhu</h2>

    <form method="POST">
        <input type="text" name="suhu" placeholder="Masukkan suhu">

        <select name="jenis">
            <option value="cf">C → F</option>
            <option value="fc">F → C</option>
            <option value="ck">C → K</option>
        </select>

        <button type="submit" name="convert">Konversi</button>
    </form>

    <div class="result">
        <?= $result ?>
    </div>
</div>

</body>
</html>