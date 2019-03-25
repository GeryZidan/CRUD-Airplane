<?php
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//tampilin data
$tampilidtrans = "SELECT * FROM transportasi";
//eksekusi perintah
$hasilidtrans = mysqli_query($koneksi, $tampilidtrans);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rute | Input</title>
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
	<h1>INPUT RUTE</h1>
	<form action="proses_input.php" method="GET">
		<table>
			<tr>
				<td>Tujuan</td>
				<td>:</td>
				<td><input type="text" name="tujuan"></td>
			</tr>
			<tr>
				<td>Rute Awal</td>
				<td>:</td>
				<td><input type="text" name="rawal"></td>
			</tr>
			<tr>
				<td>Rute Akhir</td>
				<td>:</td>
				<td><input type="text" name="rahir"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>ID Transportasi</td>
				<td>:</td>
				<td>
					<select name="idtrans">
						<?php
						while ($dataidtrans = mysqli_fetch_array($hasilidtrans)) {
						?>
				 	    	<option value="<?php echo $dataidtrans['id_transportasi']; ?>"><?php echo $dataidtrans['id_transportasi']; ?></option>
				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
		</table>
	<br>
 	<input type="submit" value="Kirim">
	</form>
	</center>
</div>
</body>
</html>
