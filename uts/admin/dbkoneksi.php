<?php
     $host = 'localhost';
     $dbname = 'dbprojek1';
     $username = 'root';
     $password = '';

try{
    $conn = new PDO("mysql:host=$host; $dbname= dbprojek1", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Koneksi Gagal : " . $e->getMessage(); 
}
?>