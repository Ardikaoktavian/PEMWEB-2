<?php
session_start();
if (!isset($_SESSION['id_pelanggan'])) {
    header('Location: login.php');
    exit();
}
?>
