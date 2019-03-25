<?php

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$level = $_GET['lev'];

$update = "UPDATE level SET nama_level = '$level' WHERE id_level ='$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
	header("location:level.php");
}else{
	echo "data gagal diperbarui";
}
?>