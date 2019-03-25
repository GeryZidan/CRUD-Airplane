<?php

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$tujuan = $_GET['tujuan'];
$rawal = $_GET['rawal'];
$rahir = $_GET['rahir'];
$harga = $_GET['harga'];
$idtrans = $_GET['idtrans'];

$update = "UPDATE rute SET tujuan = '$tujuan', rute_awal ='$rawal', rute_ahir = '$rahir', harga = '$harga', id_transportasi = '$idtrans' WHERE id_rute ='$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
	header("location:rute.php");
}else{
	echo "data gagal diperbarui";
}
?>