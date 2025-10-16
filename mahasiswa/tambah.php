<?php include "koneksi.php"; ?>

<?php
if (isset($_POST['tambah'])) {
    $stmt = $conn->prepare("INSERT INTO biodata (Nama, NIM, Umur) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $_POST['Nama'], $_POST['NIM'], $_POST['Umur']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="POST">
        <input type="text" name="Nama" placeholder="Nama" required><br><br>
        <input type="number" name="NIM" placeholder="NIM" required><br><br>
        <input type="number" name="Umur" placeholder="Umur" required><br><br>
        <button type="submit" name="tambah">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
