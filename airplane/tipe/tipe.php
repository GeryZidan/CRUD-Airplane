<!DOCTYPE html>
<html>
<head>
	<title>Tipe</title>
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
	<h1>DAFTAR TIPE TRANSPORTASI</h1>
	<a id="n" href="input.php"><button>Tambah Tipe</button></a>
	<hr>
	<?php 
		//koneksi
		$koneksi = mysqli_connect("localhost", "root", "", "ticket");

		//perintah menampilkan data
		$tampil = "SELECT * FROM tipe_transportasi";

		//eksekusi perintah
		$hasil = mysqli_query($koneksi, $tampil);

		echo "<table id='m' border='1' width='90%' align='center'>
			<tr>
				<td id='n' width='10%'>ID Tipe</td>
				<td id='n' width='20%'>Nama Tipe</td>
				<td id='n' width='20%'>Keterangan</td>
				<td id='n' width='10%' rowspan='2'>Opsi</td>
			</tr>
		</table>";
		//memisahkan data
		while ($data = mysqli_fetch_array($hasil)) {

		 	echo "<table id='m' border='1' align='center' width='90%'><tr><td width='10%'>",$data['id_tipe_transportasi'],"</td>";
		 	echo "<td width='20%'>",$data['nama_tipe'],"</td>";
		 	echo "<td width='20%'>",$data['keterangan'],"</td>";
		 	echo "<td width='5%'>","<a href=\"update.php?id=$data[id_tipe_transportasi]\">Edit </a>","</td>";
	 		echo "<td width='5%'>","<a href=\"delete.php?id=$data[id_tipe_transportasi]\">Delete</a></td></tr></table>";
		 } 
	 ?>
	 <br><a href="../admin.php"> << KEMBALI </a>
	</center>
</body>
</html>

