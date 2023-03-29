<?php
     $host = 'localhost';
     $dbpos = 'dbpos';
     $username = 'root';
     $password = '';

try{
    $conn = new PDO("mysql:host=$host; dbname=$dbpos", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Koneksi Gagal : " . $e->getMessage(); 
}
?>