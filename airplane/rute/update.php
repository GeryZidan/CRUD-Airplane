<!DOCTYPE html>
<html>
<head>
	<title>Rute | Edit</title>
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
<?php
$id= $_GET['id'];
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//tampilin data
$tampiltrans = "SELECT * FROM transportasi";
$tampilrute = "SELECT * FROM rute WHERE id_rute = '$id'";

//eksekusi perintah
$hasiltrans = mysqli_query($koneksi, $tampiltrans);
$hasilrute = mysqli_query($koneksi, $tampilrute);

$datarute = mysqli_fetch_array($hasilrute);
?>
<div class="main">
<center>
<h1>EDIT RUTE</h1>
<form action="proses_update.php" method="GET">
	<table>
			<tr>
				<td>Tujuan</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datarute['tujuan']?>" name="tujuan"></td>
			</tr>
			<tr>
				<td>Rute Awal</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datarute['rute_awal']?>" name="rawal"></td>
			</tr>
			<tr>
				<td>Rute Akhir</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datarute['rute_ahir']?>" name="rahir"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datarute['harga']?>" name="harga"></td>
			</tr>
			<tr>
				<td>ID Transportasi</td>
				<td>:</td>
				<td>
					<select name="idtrans">
						<?php
						while ($datatrans = mysqli_fetch_array($hasiltrans)) {
						?>
				 	    	<option value="<?php echo $datatrans['id_transportasi']; ?>" <?php
				 	    	if ($datarute['id_transportasi'] == $datatrans['id_transportasi']) {echo "selected";}
				 	    	?>><?php echo $datatrans['id_transportasi']; ?></option>

				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
		</table>
	<br>
	<input type="hidden" name="id" value="<?php echo $datarute['id_rute'] ?>">
 	<input type="submit" value="Update">
</form>
</center>
</div>
</body>
</html>
