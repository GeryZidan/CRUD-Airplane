<!DOCTYPE html>
<html>
<head>
	<title>Petugas | Edit</title>
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
$tampillev = "SELECT * FROM level";
$tampilpet = "SELECT * FROM petugas WHERE id_petugas = '$id'";

//eksekusi perintah
$hasillev = mysqli_query($koneksi, $tampillev);
$hasilpet = mysqli_query($koneksi, $tampilpet);

$datapet = mysqli_fetch_array($hasilpet);
?>
<div class="main">
<center>
<h1>EDIT PETUGAS</h1>
<form action="proses_update.php" method="GET">
	<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datapet['username']?>" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datapet['password']?>" name="pass"></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $datapet['nama_petugas']?>" name="nama"></td>
			</tr>
			<tr>
				<td>ID Level</td>
				<td>:</td>
				<td>
					<select name="lev">
						<?php
						while ($datalev = mysqli_fetch_array($hasillev)) {
						?>
				 	    	<option value="<?php echo $datalev['id_level']; ?>" <?php
				 	    	if ($datapet['id_level'] == $datalev['id_level']) {echo "selected";}
				 	    	?>><?php echo $datalev['nama_level']; ?></option>

				 		<?php
				 		} 
						?>
					</select>
				</td>
			</tr>
		</table>
	<br>
	<input type="hidden" name="id" value="<?php echo $datapet['id_petugas'] ?>">
 	<input type="submit" value="Update">
</form>
</center>
</div>
</body>
</html>
