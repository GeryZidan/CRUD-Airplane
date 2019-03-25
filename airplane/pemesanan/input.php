<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan | Input</title>
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
<?php
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//tampilin data
$tampilpet = "SELECT * FROM petugas";
$tampilr = "SELECT * FROM rute";
$tampilrut = "SELECT * FROM rute";
//eksekusi perintah
$hasilpet = mysqli_query($koneksi, $tampilpet);
$hasilr = mysqli_query($koneksi, $tampilr);
$hasilrut = mysqli_query($koneksi, $tampilrut);
?>
<body>
	<div class="main">
	<center>
	<h1>INPUT PEMESANAN TIKET</h1>
	<form action="proses_input.php" method="GET">
		<table>
			<tr>
				<td>ID Petugas</td>
				<td>:</td>
				<td>
					<select name="idpetugas">
						<?php
						while ($datapet = mysqli_fetch_array($hasilpet)) {
						?>
				 	    	<option value="<?php echo $datapet['id_petugas']; ?>"><?php echo $datapet['id_petugas']; ?></option>
				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>ID Rute</td>
				<td>:</td>
				<td>
					<select name="idrute">
						<?php
						while ($datarut = mysqli_fetch_array($hasilrut)) {
						?>
				 	    	<option value="<?php echo $datarut['id_rute']; ?>"><?php echo $datarut['id_rute']; ?></option>
				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tempat Pemesanan</td>
				<td>:</td>
				<td><input type="text" name="tempat"></td>
			</tr>	
			<tr>
				<td>Tujuan</td>
				<td>:</td>
				<td>
					<select name="tujuan">
						<?php
						while ($datar = mysqli_fetch_array($hasilr)) {
						?>
				 	    	<option value="<?php echo $datar['tujuan']; ?>"><?php echo $datar['tujuan']; ?></option>
				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Berangkat</td>
				<td>:</td>
				<td><input type="date" name="tglberangkat"></td>
			</tr>
			<tr>
				<td>Jam Cekin</td>
				<td>:</td>
				<td><input type="time" name="jc"></td>
			</tr>
			<tr>
				<td>Jam Berangkat</td>
				<td>:</td>
				<td><input type="time" name="jb"></td>
			</tr>
		</table>
	<br>
 	<input type="submit" value="Kirim">
	</form>
	</center>
</div>
</body>
</html>
