<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM pesanan WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $_tanggal = $_POST['tanggal'];
        $_nama_pemesan = $_POST['nama_pemesan'];
        $_alamat_pemesan = $_POST['alamat_pemesan'];
        $_no_hp = $_POST['no_hp'];
        $_email = $_POST['email'];
        $_jumlah_pesanan = $_POST['jumlah_pesanan'];
        $_deskripsi = $_POST['deskripsi'];
        $_produk = $_POST['produk'];

        $sql = "UPDATE pesanan SET tanggal= :tanggal,nama_pemesan= :nama_pemesan,
        alamat_pemesan= :alamat_pemesan,no_hp= :no_hp,email= :email,
        jumlah_pesanan= :jumlah_pesanan,deskripsi= :deskripsi,produk= :produk WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':tanggal', $_tanggal);
        $stmt->bindParam(':nama_pemesan', $_nama_pemesan);
        $stmt->bindParam(':alamat_pemesan', $_alamat_pemesan);
        $stmt->bindParam(':no_hp', $_no_hp);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':jumlah_pesanan', $_jumlah_pesanan);
        $stmt->bindParam(':deskripsi', $_deskripsi);
        $stmt->bindParam(':produk', $_produk);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        header('Location: pesanan.php');


    }



    $sqlproduk = "SELECT * FROM produk";
    $rowproduk = $conn->query($sqlproduk);
    $rowproduk->execute();
  
?>


<form method="post">
    <input type="hidden" name="tanggal" value="<?php echo $row['tanggal']; ?>">

    <label>Nama Pemesan</label>
    <input type="text" name="nama_pemesan" value="<?php echo $row['nama_pemesan']; ?>">
    <br>
    <label>Alamat pemesan</label>
    <input type="text" name="alamat_pemesan" value="<?php echo $row['alamat_pemesan']; ?>">
    <br>
    <label>No HP</label>
    <input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>">
    <br>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <br>
    <label>Jumlah Pesanan</label>
    <input type="number" name="jumlah_pesanan" value="<?php echo $row['jumlah_pesanan']; ?>">
    <br>
    <label>Deskripsi</label>
    <input type="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
    <br>

    <label>Produk</label>
    <select name="produk" id="produk">
        <?php
            while($produk = $rowproduk->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $produk['id'] ?>"><?= $produk['nama']  ?>          </option>
        <?php
            }
        ?>
    </select>
    <br>
    <button type="submit" name="submit">Save</button>
</form>