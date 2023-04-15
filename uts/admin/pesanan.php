<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM pesanan' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<h2>Data Order</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Order</title>
</head>
<body>
    <hr>
    <ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="index.php?halaman=pesanan">Order</a>
			</li>
	</ol>
    <a href="formpesan.php">Add Order</a>
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
            <th>Tanggal</th>
            <th>Pemesan</th>
            <th>Alamat </th>
            <th>No HP</th>
            <th>Email</th>
            <th>Jumlah  </th>
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
            <a style="green" href="editpesan.php?id=<?=$row['id']?>" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span>EDIT</a>
            <a href="deletepesan.php?id=<?=$row['id']?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span>DELETE</a>
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
