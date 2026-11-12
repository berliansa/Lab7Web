<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 3 - Format Rupiah</title>
</head>
<body>

    <h3>Format Harga Rupiah</h3>

    <?php
    function formatRupiah($angka) {
        return "Rp" . number_format($angka, 0, ",", ".");
    }

    $harga1 = 150000;
    $harga2 = 25000;
    $harga3 = 7500;

    echo "<p>Harga 1: " . formatRupiah($harga1) . "</p>";
    echo "<p>Harga 2: " . formatRupiah($harga2) . "</p>";
    echo "<p>Harga 3: " . formatRupiah($harga3) . "</p>";
    ?>

</body>
</html>