<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan POST</title>
</head>
<body>

    <h3>Formulir Data Mahasiswa</h3>

    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama">
        <br><br>

        <label>Program Studi:</label>
        <input type="text" name="prodi">
        <br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"]);
        $prodi = trim($_POST["prodi"]);

        if ($nama === "" || $prodi === "") {
            echo "<p>Nama dan program studi wajib diisi!</p>";
        } else {
            echo "<h4>Data Berhasil Dikirim</h4>";
            echo "<p>Nama: "
                . htmlspecialchars($nama, ENT_QUOTES, "UTF-8")
                . "</p>";
            echo "<p>Program Studi: "
                . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8")
                . "</p>";
        }
    }
    ?>

</body>
</html>