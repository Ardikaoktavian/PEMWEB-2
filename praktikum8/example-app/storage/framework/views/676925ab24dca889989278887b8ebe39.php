<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pemeriksaan Kesehatan</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
		}
		
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			font-size: 22px;
			font-weight: bold;
			position: sticky;
			top: 0;
			z-index: 1;
		}
		
		form {
			background-color: #fff;
			padding: 20px;
			margin: 20px auto;
			max-width: 600px;
			box-shadow: 0 0 10px #888;
		}
		
		label {
			display: block;
			margin-top: 20px;
		}
		
		input[type="text"], input[type="date"], input[type="radio"], select {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 4px;
			box-sizing: border-box;
			background-color: #f9f9f9;
			margin-top: 5px;
			margin-bottom: 10px;
			font-size: 16px;
		}
		
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 18px;
			margin-top: 20px;
		}
		
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}
		
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		
		th {
			background-color: #4CAF50;
			color: white;
		}
		
		@media screen and (max-width: 600px) {
			form {
				padding: 10px;
			}
			
			input[type="text"], input[type="date"], input[type="radio"], select {
				margin-top: 0;
				margin-bottom: 5px;
			}
			
			input[type="submit"] {
				margin-top: 10px;
			}
		}
	</style>
<body>
	<h1>Form Pemeriksaan Kesehatan</h1>
	<form>
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br>
        <label for="tgl_periksa">Tanggal Pemeriksaan:</label>
	    <input type="date" id="tgl_periksa" name="tgl_periksa"><br>

	    <label for="tgl_lahir">Tanggal Lahir:</label>
	    <input type="date" id="tgl_lahir" name="tgl_lahir">
        <label for="tgl_lahir">Usia:</label>
	    <input type="text" id="usia" name="usia" readonly><br>

	    <label for="jk">Jenis Kelamin:</label>
	    <input type="radio" id="pria" name="jk" value="pria">
	    <label for="pria">Pria</label>
	    <input type="radio" id="wanita" name="jk" value="wanita">
	    <label for="wanita">Wanita</label><br>

	<table>
		<tr>
			<th>Jenis Tes</th>
			<th>Hasil Pemeriksaan</th>
			<th>Normal</th>
		</tr>
		<tr>
			<td>Tekanan Darah</td>
			<td><input type="text" id="tekanan_darah" name="tekanan_darah"></td>
			<td>120/80 mmHg</td>
		</tr>
		<tr>
			<td>Asam Urat</td>
			<td><input type="text" id="asam_urat" name="asam_urat"></td>
			<td>Pria: < 7 mg/dl <br> Wanita: < 6 mg/dl</td>
		</tr>
		<tr>
			<td>Kolesterol Total</td>
			<td><input type="text" id="kolesterol" name="kolesterol"></td>
			<td>< < 200 mg/dl</td>
		</tr>
		<tr>
			<td>Gula Darah</td>
			<td><input type="text" id="gula_darah" name="gula_darah"></td>
			<td>Puasa: 70-110 mg/dl <br> 2 jam setelah makan: 100-150 mg/dl <br> Sewaktu/acak: 70-125 mg/dl</td>
		</tr>
	</table>

	<input type="submit" value="Submit">
</form>

<script>
	// script to calculate age based on birthdate
	document.getElementById('tgl_lahir').addEventListener('change', function() {
		var birthdate = new Date(this.value);
		var ageDifMs = Date.now() - birthdate.getTime();
		var ageDate = new Date(ageDifMs);
		document.getElementById('usia').value = Math.abs(ageDate.getUTCFullYear() - 1970) + " tahun";
	});
</script>
</body>
</html><?php /**PATH D:\xampp\htdocs\weblara\example-app\resources\views/pemeriksaan.blade.php ENDPATH**/ ?>