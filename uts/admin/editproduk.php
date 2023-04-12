<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM produk WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $_kode = $_POST['kode'];
        $_nama = $_POST['nama'];
        $_harga_jual = $_POST['harga_jual'];
        $_harga_beli = $_POST['harga_beli'];
        $_stok = $_POST['stok'];
        $_min_stok = $_POST['min_stok'];
        $_deskripsi = $_POST['deskripsi'];
        $_kategori_produk = $_POST['kategori_produk'];

        $sql = "UPDATE produk SET kode= :kode,nama= :nama,
        harga_jual= :harga_jual,harga_beli= :harga_beli,stok= :stok,
        min_stok= :min_stok,deskripsi= :deskripsi,kategori_produk= :kategori_produk WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':kode', $_kode);
        $stmt->bindParam(':nama', $_nama);
        $stmt->bindParam(':harga_jual', $_harga_jual);
        $stmt->bindParam(':harga_beli', $_harga_beli);
        $stmt->bindParam(':stok', $_stok);
        $stmt->bindParam(':min_stok', $_min_stok);
        $stmt->bindParam(':deskripsi', $_deskripsi);
        $stmt->bindParam(':kategori_produk', $_kategori_produk);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        header('Location: produk.php');


    }



    $sqlkategori = "SELECT * FROM kategori_produk";
    $rowkategori = $conn->query($sqlkategori);
    $rowkategori->execute();
  
?>


<form method="post">
    <input type="hidden" name="kode" value="<?php echo $row['kode']; ?>">

    <label>Nama Produk</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <br>
    <label>Harga Jual</label>
    <input type="double" name="harga_jual" value="<?php echo $row['harga_jual']; ?>">
    <br>
    <label>Harga Beli</label>
    <input type="double" name="harga_beli" value="<?php echo $row['harga_beli']; ?>">
    <br>
    <label>Stok</label>
    <input type="number" name="stok" value="<?php echo $row['stok']; ?>">
    <br>
    <label>Min Stok</label>
    <input type="number" name="min_stok" value="<?php echo $row['min_stok']; ?>">
    <br>
    <label>Deskripsi</label>
    <input type="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
    <br>

    <label>Kategori Produk</label>
    <select name="kategori_produk" id="kategori_produk">
        <?php
            while($kategori = $rowkategori->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama']  ?>          </option>
        <?php
            }
        ?>
    </select>
    <br>
    <button type="submit" name="submit">Save</button>
</form>