<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM produk';
    $stmt = $conn->prepare($sql);

?>

<h2>Data Produk</h2>

<table class="table table-bordered" border="1">
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
            <td><?= $number;?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['min_stok'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['kategori_produk'] ?></td>
        </tr>

        <?php
            $number++;
            endwhile;
         ?>

    </tbody>
</table>