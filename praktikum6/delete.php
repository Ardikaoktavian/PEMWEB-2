<?php 
require_once 'dbkoneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pelanggan WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    // redirect page
    header('location:index.php');
?>

