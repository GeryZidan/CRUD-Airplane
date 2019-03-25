<!DOCTYPE html>
<html>
<head>
	<title>Level | Edit</title>
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
$tampil = "SELECT * FROM level WHERE id_level = '$id'";

//eksekusi perintah
$hasil = mysqli_query($koneksi, $tampil);
$data = mysqli_fetch_array($hasil);
?>
<div class="main">
<center>
<h1>EDIT LEVEL</h1>
<form action="proses_update.php" method="GET">
		Nama Level : <br> <br>
		<input type="text" name="lev" value="<?php echo $data['nama_level']?>">
	<br><br>
	<input type="hidden" name="id" value="<?php echo $data['id_level'] ?>">
 	<input type="submit" value="Update">
</form>
</center>
</div>
</body>
</html>
