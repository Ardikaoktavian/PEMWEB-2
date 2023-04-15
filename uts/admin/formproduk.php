<?php
    require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Product</title>
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
	</style>
</head>
<body>
	<form action="prosesproduk.php" method="POST">
		<h2>Form Product</h2>
		<label>Kode:</label>
		<input type="text" name="kode" id="kode"required>

		<label>Nama:</label>
		<input type="text" name="nama" id="nama"required>

		<label>Harga Jual:</label>
		<input type="double" name="harga_jual"  id="harga_jual"required></input>

		<label>Harga Beli:</label>
		<input type="double" name="harga_beli" id="harga_beli"required>

		<label>Stok:</label>
		<input type="number" name="stok" id="stok"required>

		<label>Min Stok:</label>
		<input type="number" name="min_stok" id="min_stok"required>

		<label>Deskripsi:</label>
		<textarea name="deskripsi" rows="30" id="deskripsi" required></textarea>

		<label>Kategori Produk:</label>
        <div>
            <?php
                $sqlkategori = "SELECT * FROM kategori_produk";
                $rskategori = $conn->query($sqlkategori);
            ?>
            <select name="kategori_produk" id="kategori_produk">
            <?php
                foreach($rskategori as $rowkategori){
            ?>
                <option value="<?=$rowkategori['id']?>" ><?=$rowkategori['nama']?></option>
            <?php
                }
            ?>
            </select>
        </div>
		<!-- <select name="produk" required>
			<option value="">-- Pilih Produk --</option>
			<option value="Produk A">Produk A</option>
			<option value="Produk B">Produk B</option>
			<option value="Produk C">Produk C</option>
		</select> -->

		<input type="submit" name="proses" value="Simpan">
	</form>
</body>
</html>
