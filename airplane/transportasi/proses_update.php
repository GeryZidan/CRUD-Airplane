<?php

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$kode = $_GET['kode'];
$kursi = $_GET['kursi'];
$ket = $_GET['ket'];
$idttrans = $_GET['idttrans'];

$update = "UPDATE transportasi SET kode = '$kode', jumlah_kursi ='$kursi', keterangan = '$ket', id_tipe_transportasi = '$idttrans' WHERE id_transportasi ='$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
	header("location:transportasi.php");
}else{
	echo "data gagal diperbarui";
}
?>