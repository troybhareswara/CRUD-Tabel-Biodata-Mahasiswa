<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Table Biodata Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Biodata Mahasiswa</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th><th>Nama</th><th>NIM</th><th>Umur</th><th>Aksi</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM biodata ORDER BY id ASC");
        while ($r = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= $r['Nama'] ?></td>
            <td><?= $r['NIM'] ?></td>
            <td><?= $r['Umur'] ?></td>
            <td>
                <a href="update.php?id=<?= $r['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $r['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
