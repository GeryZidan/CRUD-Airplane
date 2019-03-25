<?php 

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$tujuan = $_GET['tujuan'];
$rawal = $_GET['rawal'];
$rahir = $_GET['rahir'];
$harga = $_GET['harga'];
$idtrans = $_GET['idtrans'];

$input = "INSERT INTO rute(tujuan, rute_awal, rute_ahir, harga, id_transportasi) VALUES ('$tujuan', '$rawal','$rahir', '$harga', '$idtrans')";


$hasil = mysqli_query($koneksi, $input);

if ($hasil) {
	header("location:rute.php");
}else{
	echo "data gagal dimasukan";
}

 ?>