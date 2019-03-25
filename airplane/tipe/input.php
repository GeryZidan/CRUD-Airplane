<!DOCTYPE html>
<html>
<head>
	<title>Tipe | Input</title>
	<style type="text/css">
		body{
			background: rgb(40,40,40);
			color: white;
			font-family: sans-serif;
		}
		.main{
			margin: 80px;
		}
	</style>
</head>
<body>
	<div class="main">
	<center>
	<h1>INPUT TIPE TRANSPORTASI</h1>
	<form action="proses_input.php" method="GET">
		<table>
			<tr>
				<td>Nama Tipe</td>
				<td>:</td>
				<td><input type="text" name="namat"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="kete"></td>
			</tr>
		</table>
	<br>
 	<input type="submit" value="Kirim">
	</form>
	</center>
</div>
</body>
</html>
