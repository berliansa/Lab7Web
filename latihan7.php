<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 - Pengolahan Data</title>
</head>
<body>

    <h3>Form Pengolahan Data Barang</h3>

    <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $barang = trim($_POST["barang"] ?? "");
        $hargaInput = $_POST["harga"] ?? "";
        $jumlahInput = $_POST["jumlah"] ?? "";

        if (
            $barang === "" ||
            !is_numeric($hargaInput) ||
            !ctype_digit((string)$jumlahInput) ||
            (float)$hargaInput < 0 ||
            (int)$jumlahInput < 1
        ) {
            $error = "Periksa kembali nama barang, harga, dan jumlah.";
        } else {
            $harga = (float)$hargaInput;
            $jumlah = (int)$jumlahInput;
            $subtotal = $harga * $jumlah;
        }
    }
    ?>

    <form method="POST" action="" novalidate>
        <label>Nama barang:</label>
        <input type="text" name="barang" required>
        <br><br>

        <label>Harga:</label>
        <input type="number" name="harga" min="0"
               step="0.01" required>
        <br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1"
               step="1" required>
        <br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($error !== "") {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    } elseif (isset($subtotal)) {
        echo "<h4>Ringkasan Transaksi</h4>";
        echo "<p>Barang: "
            . htmlspecialchars($barang, ENT_QUOTES, "UTF-8")
            . "</p>";
        echo "<p>Subtotal: Rp"
            . number_format($subtotal, 0, ",", ".")
            . "</p>";
    }
    ?>

</body>
</html>