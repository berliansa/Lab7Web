<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi data
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if (!ctype_digit($nim) || strlen($nim) < 8 || strlen($nim) > 12) {
    $error[] = "NIM harus berupa angka dengan panjang 8-12 digit.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (
        !ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    // Jika tidak ada kesalahan, simpan data
    if (!$error) {
        $data = [
            "nama" => $nama,
            "nim" => $nim,
            "prodi" => $prodi,
            "semester" => (int)$semesterInput,
            "email" => $email
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="" novalidate>

        <label>Nama:</label>
        <input type="text" name="nama">
        <br><br>

        <label>NIM:</label>
        <input type="text" name="nim">
        <br><br>

        <label>Program Studi:</label>
        <input type="text" name="prodi">
        <br><br>

        <label>Semester:</label>
        <input type="number" name="semester">
        <br><br>

        <label>Email:</label>
        <input type="text" name="email">
        <br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>

    </form>

    <?php if ($error): ?>
        <h3>Terjadi Kesalahan</h3>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li>
                    <?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php elseif ($data): ?>
        <h3>Data Mahasiswa Berhasil Dikirim</h3>

        <p>Nama:
            <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?>
        </p>

        <p>NIM:
            <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?>
        </p>

        <p>Program Studi:
            <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?>
        </p>

        <p>Semester:
            <?= htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8") ?>
        </p>

        <p>Email:
            <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?>
        </p>
    <?php endif; ?>

</body>
</html>