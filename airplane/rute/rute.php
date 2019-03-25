<!DOCTYPE html>
<html>
<head>
	<title>Rute</title>
	<style type="text/css">
		body{
			background: rgb(40,40,40);
			color: white;
			font-family: sans-serif;
		}
		a{
			text-decoration: none;
			color: white;
		}
		#n{
			background: white;
			color: rgb(40,40,40);
		}
		#m{
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
	<h1>DAFTAR RUTE</h1>
	<a id="n" href="input.php"><button>Tambah Rute</button></a>
	<hr>
	<?php 
		//koneksi
		$koneksi = mysqli_connect("localhost", "root", "", "ticket");

		//perintah menampilkan data
		$tampil = "SELECT * FROM rute";

		//eksekusi perintah
		$hasil = mysqli_query($koneksi, $tampil);

		echo "<table id='m' border='1' width='90%' align='center'>
			<tr>
				<td id='n' width='10%'>ID Rute</td>
				<td id='n' width='20%'>Tujuan</td>
				<td id='n' width='20%'>Rute Awal</td>
				<td id='n' width='20%'>Rute Akhir</td>
				<td id='n' width='10%'>Harga</td>
				<td id='n' width='10%'>ID Transportasi</td>
				<td id='n' width='10%' rowspan='2'>Opsi</td>
			</tr>
		</table>";
		//memisahkan data
		while ($data = mysqli_fetch_array($hasil)) {

		 	echo "<table id='m' border='1' align='center' width='90%'><tr><td width='10%'>",$data['id_rute'],"</td>";
		 	echo "<td width='20%'>",$data['tujuan'],"</td>";
		 	echo "<td width='20%'>",$data['rute_awal'],"</td>";
		 	echo "<td width='20%'>",$data['rute_ahir'],"</td>";
		 	echo "<td width='10%'>",$data['harga'],"</td>";
		 	echo "<td width='10%'>",$data['id_transportasi'],"</td>";
		 	echo "<td width='5%'>","<a href=\"update.php?id=$data[id_rute]\">Edit </a>","</td>";
	 		echo "<td width='5%'>","<a href=\"delete.php?id=$data[id_rute]\">Delete</a></td></tr></table>";
		 } 
	 ?>
	 <br><a href="../admin.php"> << KEMBALI </a>
	</center>
</body>
</html>

