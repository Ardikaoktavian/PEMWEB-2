<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM pelanggan' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<h2>Data Pelanggan</h2>

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
    <table  border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>ID Pelanggan</th>
            <th>Email Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>No HP</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
                $number = 1;
                while($row =  $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>

        <tr>
            <td><?= $number?></td>
            <td><?= $row['id_pelanggan'] ?></td>
            <td><?= $row['email_pelanggan'] ?></td>
            <td><?= $row['nama_pelanggan'] ?></td>
            <td><?= $row['telepon_pelanggan'] ?></td>
        </tr>
        
        <?php
                $number++;
                endwhile;
        ?>

    </tbody>
    </table>

</body>
</html>
