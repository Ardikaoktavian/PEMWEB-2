<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM produk' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<h2>Data Product</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
</head>
<body>
    <hr>
    <ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="index.php?halaman=produk">Product</a>
			</li>
	</ol>
    <a href="formproduk.php">Add Products</a>
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
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Min Stok</th>
            <th>Deskripsi</th>
            <th>Kategori Produk</th>
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
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['min_stok'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['kategori_produk'] ?></td>
            <td>
                <a style="green" href="editproduk.php?id=<?=$row['id']?>" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span>EDIT</a>
                <a href="deleteproduk.php?id=<?=$row['id']?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span>DELETE</a>
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
