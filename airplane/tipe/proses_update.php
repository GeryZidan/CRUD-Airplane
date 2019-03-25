<?php

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$namat = $_GET['namat'];
$kete = $_GET['kete'];

$update = "UPDATE tipe_transportasi SET nama_tipe = '$namat', keterangan ='$kete' WHERE id_tipe_transportasi ='$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
	header("location:tipe.php");
}else{
	echo "data gagal diperbarui";
}
?>