<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TRANSAKSI BERHASIL</title>
	<style type="text/css">
		body {
			font-family: sans-serif;
			color: rgb(40,40,40);
		}
		button {
		  background-color: rgb(100,100,100);
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		button:hover{
			background-color: rgb(230,230,230);
			color: rgb(40,40,40);
		}
	</style>
</head>
<body>
	<?php 
			function grs1($length = 7) {
			    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}

			function grs2($length = 4) {
			    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}

			$idrute = $_GET['idrute'];

			switch ($idrute) {
				case '1':
					$harga = '700000';
					break;
				case '2':
					$harga = '600000';
					break;
				case '3':
					$harga = '400000';
					break;
				case '4':
					$harga = '670000';
					break;
				case '5':
					$harga = '600000';
					break;
			}

	$koneksi = mysqli_connect("localhost", "root", "", "ticket");

	$idpelanggan = '1098364';
	$idpetugas = $_GET['idpetugas'];
	$idrute = $_GET['idrute'];
	$tempat = $_GET['tempat'];
	$tujuan = $_GET['tujuan'];
	$tglberangkat = $_GET['tglberangkat'];
	$kode = grs1();
	$tglpemesanan = date("y/m/d");
	$jamcekin = $_GET['jc'];
	$jamberangkat = $_GET['jb'];
	$kodekursi = grs2();

	$input = "INSERT INTO pemesanan(kode_pemesanan, tanggal_pemesanan, tempat_pemesanan, id_pelanggan, kode_kursi, id_rute, tujuan, tanggal_berangkat, jam_cekin, jam_berangkat, total_bayar, id_petugas) VALUES ('$kode','$tglpemesanan', '$tempat', '$idpelanggan', '$kodekursi', '$idrute', '$tujuan', '$tglberangkat', '$jamcekin', '$jamberangkat', '$harga', '$idpetugas')";


	$hasil = mysqli_query($koneksi, $input);

	if ($hasil) {
		echo "<br><center><h1>TRANSAKSI BERHASIL</h1>";
		echo "<h1>SELAMAT JALAN ",$_SESSION['sess_user'],"</h1>";
		echo "<br><h2>KODE PEMESANAN ANDA = ",$kode,"</h2>";
		echo "<h2>KODE KURSI ANDA = ",$kodekursi,"</h2>";
		echo "<br><h2>TUJUAN ",$tujuan,"</h2>";
		echo "<h2>BERANGKAT PADA ",$tglberangkat," ",$jamberangkat,"</h2>";
		echo "<h2>JAM CEKIN PADA ",$jamcekin,"</h2>";
		echo "<h2>HARGA Rp.",$harga,"</h2>";
		echo "<br><h4>HARAP FOTO DATA INI SEBAGAI BUKTI TRANSAKSI</h4>";
		echo "<a href='..\penumpang.php'><button><< SELESAI</button></a></center>";
	}else{
		echo "data gagal dimasukan";
	}
	?>
</body>
</html>