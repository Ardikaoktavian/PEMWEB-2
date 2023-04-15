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

        header('Location:index.php?halaman=produk');


    }



    $sqlkategori = "SELECT * FROM kategori_produk";
    $rowkategori = $conn->query($sqlkategori);
    $rowkategori->execute();
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<style>
		form {
			width: 500px;
			margin: auto;
			font-family: sans-serif;
			border: 1px solid #ccc;
			padding: 20px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="email"],
		textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #008CBA;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #006f8c;
		}
        button{
            background-color:yellow;
        }
</style>
<body>
<form method="POST">
		<h2>Edit Produk</h2>
        <input type="hidden" name="kode" value="<?php echo $row['kode']; ?>">

		<label>Nama:</label>
		<input type="text" name="nama" value="<?php echo $row['nama']; ?>">

		<label>Harga Jual:</label>
		<input type="double" name="harga_jual"  value="<?php echo $row['harga_jual']; ?>">

		<label>Harga Beli:</label>
		<input type="double" name="harga_beli" value="<?php echo $row['harga_beli']; ?>">

		<label>Stok:</label>
		<input type="number" name="stok" value="<?php echo $row['stok']; ?>">

		<label>Min Stok:</label>
		<input type="number" name="min_stok" value="<?php echo $row['min_stok']; ?>">

		<label>Deskripsi:</label>
		<textarea name="deskripsi" rows="30" value="<?php echo $row['deskripsi']; ?>"></textarea>

		<label>Kategori Produk:</label>
        <select name="kategori_produk" id="kategori_produk">
        <?php
            while($kategori = $rowkategori->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama']  ?>          </option>
        <?php
            }
        ?>
    </select>
		<!-- <select name="produk" required>
			<option value="">-- Pilih Produk --</option>
			<option value="Produk A">Produk A</option>
			<option value="Produk B">Produk B</option>
			<option value="Produk C">Produk C</option>
		</select> -->

        <button type="submit" name="submit">Save</button>
</form>
</body>
</html>
