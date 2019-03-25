<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>
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
	<h1>DAFTAR PEMESANAN</h1>
	<hr>
	<?php 
		//koneksi
		$koneksi = mysqli_connect("localhost", "root", "", "ticket");

		//perintah menampilkan data
		$tampil = "SELECT * FROM pemesanan";

		//eksekusi perintah
		$hasil = mysqli_query($koneksi, $tampil);

		echo "<table id='m' border='1' width='100%' align='center'>
			<tr>
				<td id='n' width='5%'>ID</td>
				<td id='n' width='7%'>Kode</td>
				<td id='n' width='9%'>Tgl Pemesanan</td>
				<td id='n' width='8%'>Tempat Pesan</td>
				<td id='n' width='5%'>ID Pelanggan</td>
				<td id='n' width='5%'>Kode Kursi</td>
				<td id='n' width='5%'>ID Rute</td>
				<td id='n' width='8%'>Tujuan</td>
				<td id='n' width='10%'>Tgl Berangkat</td>
				<td id='n' width='5%'>Jam Cekin</td>
				<td id='n' width='5%'>Jam Berangkat</td>
				<td id='n' width='6%'>Total Bayar</td>
				<td id='n' width='5%'>ID Petugas</td>
			</tr>
		</table>";
		//memisahkan data
		while ($data = mysqli_fetch_array($hasil)) {

		 	echo "<table id='m' border='1' align='center' width='100%'><tr><td width='5%'>",$data['id_pemesanan'],"</td>";
		 	echo "<td width='7%'>",$data['kode_pemesanan'],"</td>";
		 	echo "<td width='9%'>",$data['tanggal_pemesanan'],"</td>";
		 	echo "<td width='8%'>",$data['tempat_pemesanan'],"</td>";
		 	echo "<td width='5%'>",$data['id_pelanggan'],"</td>";
		 	echo "<td width='5%'>",$data['kode_kursi'],"</td>";
		 	echo "<td width='5%'>",$data['id_rute'],"</td>";
		 	echo "<td width='8%'>",$data['tujuan'],"</td>";
		 	echo "<td width='10%'>",$data['tanggal_berangkat'],"</td>";
		 	echo "<td width='5%'>",$data['jam_cekin'],"</td>";
		 	echo "<td width='5%'>",$data['jam_berangkat'],"</td>";
		 	echo "<td width='6%'>",$data['total_bayar'],"</td>";
		 	echo "<td width='5%'>",$data['id_petugas'],"</td></tr></table>";
		 } 
	 ?>
	 <br><a href="../admin.php"> << KEMBALI </a>
	</center>
</body>
</html>

