<?php 
require_once("dbkoneksi.php");
if (isset($_GET["iddelet"])) {
    $iddelet = $_GET["iddelet"];
    $query = "DELETE FROM produk WHERE id = '$iddelet'";
    $delete = $dbh->query($query);
    echo '<meta http-equiv="refresh" content="0; url=list_produk.php">';
}

?>

