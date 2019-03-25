<!DOCTYPE html>
<html>
<head>
	<title>Penumpang | Edit</title>
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
$tampil = "SELECT * FROM penumpang WHERE id_penumpang = '$id'";

//eksekusi perintah
$hasil = mysqli_query($koneksi, $tampil);
$data = mysqli_fetch_array($hasil);
?>
<div class="main">
<center>
<h1>EDIT PENUMPANG</h1>
<form action="proses_update.php" method="GET">
	<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['username']?>" name="userx"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['password']?>" name="passx"></td>
			</tr>
			<tr>
				<td>Nama Penumpang</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama_penumpang']?>" name="namap"></td>
			</tr>
			<tr>
				<td>Alamat Penumpang</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['alamat_penumpang']?>" name="alm"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['tanggal_lahir']?>" name="tgl"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select value="<?php echo $data['jenis_kelamin']?>" name="jkel">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
						<option value="?">Rahasia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['telepon']?>" name="telp"></td>
			</tr>
		</table>
	<br>
	<input type="hidden" name="id" value="<?php echo $data['id_penumpang'] ?>">
 	<input type="submit" value="Update">
</form>
</center>
</div>
</body>
</html>
