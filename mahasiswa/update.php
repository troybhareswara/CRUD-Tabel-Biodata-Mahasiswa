<?php include "koneksi.php"; ?>

<?php
// Ambil data berdasarkan ID
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM biodata WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

// Update data
if (isset($_POST['update'])) {
    $stmt = $conn->prepare("UPDATE biodata SET Nama=?, NIM=?, Umur=? WHERE id=?");
    $stmt->bind_param("siii", $_POST['Nama'], $_POST['NIM'], $_POST['Umur'], $_POST['id']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="Nama" value="<?= $data['Nama'] ?>" required><br><br>
        <input type="number" name="NIM" value="<?= $data['NIM'] ?>" required><br><br>
        <input type="number" name="Umur" value="<?= $data['Umur'] ?>" required><br><br>
        <button type="submit" name="update">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
