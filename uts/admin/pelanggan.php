<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM pelanggan' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<h2>Data Customer</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
</head>
<body>
    <hr>
    <ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="index.php?halaman=pelanggan">Customer</a>
			</li>
	</ol>
    <a href="formpelanggan.php">Add Customer</a>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th, td {
        text-align: left;
        padding: 8px;
    }
    
    th {
        background-color: #4CAF50;
        color: white;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
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
