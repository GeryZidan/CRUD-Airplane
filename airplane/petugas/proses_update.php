<?php

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$username = $_GET['user'];
$password = $_GET['pass'];
$nama = $_GET['nama'];
$lev = $_GET['lev'];

$update = "UPDATE petugas SET username = '$username', password ='$password', nama_petugas = '$nama', id_level = '$lev' WHERE id_petugas ='$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
	header("location:petugas.php");
}else{
	echo "data gagal diperbarui";
}
?>