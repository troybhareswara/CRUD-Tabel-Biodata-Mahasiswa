<?php include "koneksi.php"; ?>

<?php
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM biodata WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: index.php");
exit;
?>
