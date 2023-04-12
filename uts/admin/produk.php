<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM produk' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<h2>Data Produk</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <a href="formproduk.php">Tambah Pesanan</a>
    <table  border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Min Stok</th>
            <th>Deskripsi</th>
            <th>Kategori Produk</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
                $number = 1;
                while($row =  $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>

        <tr>
            <td><?= $number?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['min_stok'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['kategori_produk'] ?></td>
            <td>
                <a href="editproduk.php?id=<?=$row['id']?>">EDIT</a>
                <a href="deleteproduk.php?id=<?=$row['id']?>">DELETE</a>
            </td>
        </tr>
        
        <?php
                $number++;
                endwhile;
        ?>

    </tbody>
    </table>

</body>
</html>
