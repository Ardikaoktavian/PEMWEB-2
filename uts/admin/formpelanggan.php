<?php
    require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Customer</title>
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
	<form action="prosespelanggan.php" method="POST">
		<h2>Form Customer</h2>

		<label>ID Pelanggan:</label>
		<input type="text" name="id_pelanggan" id="id_pelanggan"required>

		<label>Email:</label>
		<input type="email" name="email_pelanggan" id="email_pelanggan"required>

		<label>Password:</label>
		<input type="password" name="password_pelanggan" id="password_pelanggan"required>

        <label>Nama Pelanggan:</label>
		<input type="text" name="nama_pelanggan" id="nama_pelanggan"required>

        <label>No. HP:</label>
		<input type="text" name="telepon_pelanggan" id="telepon_pelanggan"required>

		<input type="submit" name="proses" value="Simpan">
	</form>
</body>
</html>
