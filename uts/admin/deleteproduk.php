<?php 
require_once 'dbkoneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM produk WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    // redirect page
    header('location:index.php?halaman=produk');
?>

