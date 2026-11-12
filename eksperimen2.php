<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 2 - Pencarian Nama</title>
</head>
<body>

    <h3>Pencarian Nama Mahasiswa</h3>

    <form method="GET" action="">
        <label>Masukkan nama:</label>
        <input type="text" name="cari">
        <button type="submit">Cari</button>
    </form>

    <?php
    $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Nayara", "Vesna", "Mira"];

    if (isset($_GET["cari"])) {
        $kata = trim($_GET["cari"]);

        if ($kata === "") {
            echo "<p>Masukkan nama yang ingin dicari.</p>";
        } else {
            $hasil = [];

            foreach ($mahasiswa as $nama) {
                if (stripos($nama, $kata) !== false) {
                    $hasil[] = $nama;
                }
            }

            if (count($hasil) > 0) {
                echo "<p>Nama ditemukan:</p><ul>";

                foreach ($hasil as $nama) {
                    echo "<li>" . htmlspecialchars($nama) . "</li>";
                }

                echo "</ul>";
            } else {
                echo "<p>Nama tidak ditemukan.</p>";
            }
        }
    }
    ?>

</body>
</html>