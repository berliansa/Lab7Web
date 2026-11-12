<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 1 - Nilai Rata-rata</title>
</head>
<body>

    <h3>Perhitungan Nilai Rata-rata Mahasiswa</h3>

    <?php
    $tugas = 85;
    $uts = 78;
    $uas = 90;

    $rataRata = ($tugas + $uts + $uas) / 3;

    echo "<p>Nilai Tugas: " . $tugas . "</p>";
    echo "<p>Nilai UTS: " . $uts . "</p>";
    echo "<p>Nilai UAS: " . $uas . "</p>";

    echo "<h4>Nilai Rata-rata: "
        . number_format($rataRata, 2, ",", ".")
        . "</h4>";
    ?>

</body>
</html>