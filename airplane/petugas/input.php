<?php
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//tampilin data
$tampillev = "SELECT * FROM level";
//eksekusi perintah
$hasillev = mysqli_query($koneksi, $tampillev);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Petugas | Input</title>
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
	<h1>INPUT PETUGAS</h1>
	<form action="proses_input.php" method="GET">
		<table>
			<tr>
				<td>ID Petugas</td>
				<td>:</td>
				<td><input type="text" placeholder="7 digit..." name="id"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>ID Level</td>
				<td>:</td>
				<td>
					<select name="lev">
						<?php
						while ($datalev = mysqli_fetch_array($hasillev)) {
						?>
				 	    	<option value="<?php echo $datalev['id_level']; ?>"><?php echo $datalev['nama_level']; ?></option>
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
