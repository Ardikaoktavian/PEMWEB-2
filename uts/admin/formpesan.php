<?php
    require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form order</title>
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
	<form action="prosespesan.php" method="POST">
		<h2>Form Order</h2>
		<label>Tanggal:</label>
		<input type="date" name="tanggal" id="tanggal"required>

		<label>Nama Pemesanan:</label>
		<input type="text" name="nama_pemesan" id="nama_pemesan"required>

		<label>Alamat Pemesanan:</label>
		<textarea name="alamat_pemesan" rows="5" id="alamat_pemesan"required></textarea>

		<label>No. HP:</label>
		<input type="text" name="no_hp" id="no_hp"required>

		<label>Email:</label>
		<input type="email" name="email" id="email"required>

		<label>Jumlah Pesanan:</label>
		<input type="number" name="jumlah_pesanan" id="jumlah_pesanan"required>

		<label>Deskripsi:</label>
		<textarea name="deskripsi" rows="30" id="deskripsi" required></textarea>

		<label>Produk:</label>
        <div>
            <?php
                $sqlproduk = "SELECT * FROM produk";
                $rsproduk = $conn->query($sqlproduk);
            ?>
            <select name="produk" id="produk">
            <?php
                foreach($rsproduk as $rowproduk){
            ?>
                <option value="<?=$rowproduk['id']?>" ><?=$rowproduk['nama']?></option>
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
