<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM pesanan' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<h2>Data Pesanan</h2>

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
    <a href="formpesan.php">Tambah Pesanan</a>
    <table  border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tanggal</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pemesan</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Jumlah Pesanan </th>
            <th>Deskripsi</th>
            <th>Produk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
                $number = 1;
                while($row =  $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>

        <tr>
            <td><?= $number?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['nama_pemesan'] ?></td>
            <td><?= $row['alamat_pemesan'] ?></td>
            <td><?= $row['no_hp'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jumlah_pesanan'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['produk'] ?></td>
            <td>
                <a href="editpesan.php?id=<?=$row['id']?>">EDIT</a>
                <a href="deletepesan.php?id=<?=$row['id']?>">DELETE</a>
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
