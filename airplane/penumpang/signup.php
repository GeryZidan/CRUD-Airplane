<!DOCTYPE html>
<html>
<head>
	<title>Penumpang | Signup</title>
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
	<h1>SIGN UP</h1>
	<form action="proses_signup.php" method="GET">
		<table>
			<tr>
				<td>ID Penumpang</td>
				<td>:</td>
				<td><input type="text" placeholder="7 digit" name="id"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="userx"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="passx"></td>
			</tr>
			<tr>
				<td>Nama Penumpang</td>
				<td>:</td>
				<td><input type="text" name="namap"></td>
			</tr>
			<tr>
				<td>Alamat Penumpang</td>
				<td>:</td>
				<td><input type="text" name="alm"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<input placeholder="thn/bln/tgl" type="text" name="tgl">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jkel">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
						<option value="?">Rahasia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td>:</td>
				<td><input type="text" name="telp"></td>
			</tr>
		</table>
	<br>
 	<input type="submit" value="Kirim">
	</form>
	</center>
</div>
</body>
</html>
