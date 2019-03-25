<!DOCTYPE html>
<html>
<head>
	<title>Tipe | Edit</title>
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
$id = $_GET['id'];
$koneksi = mysqli_connect("localhost", "root", "", "ticket");


//tampilin data
$tampil = "SELECT * FROM tipe_transportasi WHERE id_tipe_transportasi = '$id'";

//eksekusi perintah
$hasil = mysqli_query($koneksi, $tampil);
$data = mysqli_fetch_array($hasil);
?>
<div class="main">
<center>
<h1>EDIT TIPE TRANSPORTASI</h1>
<form action="proses_update.php" method="GET">
	<table>
			<tr>
				<td>Nama Tipe</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama_tipe']?>" name="namat"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['keterangan']?>" name="kete"></td>
			</tr>
		</table>
	<br>
	<input type="hidden" name="id" value="<?php echo $data['id_tipe_transportasi'] ?>">
 	<input type="submit" value="Update">
</form>
</center>
</div>
</body>
</html>
