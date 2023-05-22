<h2>Daftar Member Baru</h2>
<!---- S T Y L E    U N T U K   T A B L E ---->
<style>
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
</style>
<!---- A K H I R    S T Y L E    ---->
<!---- T A B L E ---->
<table>
		<tr>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Usia</th>
			<th>Jenis Kelamin</th>
		</tr>
        <tr>
        <td> <?= $nama; ?>  </td>
        <td> <?= $tgl_lahir; ?>  </td>
        <td> <?= $usia; ?>  </td>
        <td> <?= $jk; ?>  </td>
    </tr>
	</table>
<!---- A K H I R    T A B L E    ---->