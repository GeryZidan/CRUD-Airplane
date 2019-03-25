<!DOCTYPE html>
<html>
<head>
	<title>Transportasi | Edit</title>
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
$tampiltt = "SELECT * FROM tipe_transportasi";
$tampil = "SELECT * FROM Transportasi WHERE id_transportasi = '$id'";

//eksekusi perintah
$hasiltt = mysqli_query($koneksi, $tampiltt);
$hasil = mysqli_query($koneksi, $tampil);

$data = mysqli_fetch_array($hasil);
?>
<div class="main">
<center>
<h1>EDIT TRANSPORTASI</h1>
<form action="proses_update.php" method="GET">
	<table>
			<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['kode']?>" name="kode"></td>
			</tr>
			<tr>
				<td>Jumlah Kursi</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['jumlah_kursi']?>" name="kursi"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['keterangan']?>" name="ket"></td>
			</tr>
			<tr>
				<td>ID Tipe Transportasi</td>
				<td>:</td>
				<td>
					<select name="idttrans">
						<?php
						while ($datatt = mysqli_fetch_array($hasiltt)) {
						?>
				 	    	<option value="<?php echo $datatt['id_tipe_transportasi']; ?>" <?php
				 	    	if ($data['id_tipe_transportasi'] == $datatt['id_tipe_transportasi']) {echo "selected";}
				 	    	?>><?php echo $datatt['nama_tipe']; ?></option>
				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
		</table>
	<br>
	<input type="hidden" name="id" value="<?php echo $data['id_transportasi'] ?>">
 	<input type="submit" value="Update">
</form>
</center>
</div>
</body>
</html>
