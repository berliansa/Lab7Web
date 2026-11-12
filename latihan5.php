<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan GET</title>
</head>
<body>

    <h3>Pencarian Data</h3>

    <form method="GET" action="">
        <label>Masukkan kata kunci:</label>
        <input type="text" name="kata">
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);

        echo "<p>Kata yang dicari: "
            . htmlspecialchars($kata, ENT_QUOTES, "UTF-8")
            . "</p>";
    }
    ?>

</body>
</html>