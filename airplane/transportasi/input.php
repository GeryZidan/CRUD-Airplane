<?php
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//tampilin data
$tampiltt = "SELECT * FROM tipe_transportasi";
//eksekusi perintah
$hasiltt = mysqli_query($koneksi, $tampiltt);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transportasi | Input</title>
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
	<h1>INPUT TRANSPORTASI</h1>
	<form action="proses_input.php" method="GET">
		<table>
			<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Jumlah Kursi</td>
				<td>:</td>
				<td><input type="text" name="kursi"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="ket"></td>
			</tr>
			<tr>
				<td>ID Tipe Transportasi</td>
				<td>:</td>
				<td>
					<select name="idttrans">
						<?php
						while ($datatt = mysqli_fetch_array($hasiltt)) {
						?>
				 	    	<option value="<?php echo $datatt['id_tipe_transportasi']; ?>"><?php echo $datatt['nama_tipe']; ?></option>
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
