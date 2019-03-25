<?php

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$userx = $_GET['userx'];
$passx = $_GET['passx'];
$namap = $_GET['namap'];
$alm = $_GET['alm'];
$tgl = $_GET['tgl'];
$jkel = $_GET['jkel'];
$telp = $_GET['telp'];

$update = "UPDATE penumpang SET username = '$userx', password ='$passx', nama_penumpang = '$namap', alamat_penumpang = '$alm', tanggal_lahir = '$tgl', jenis_kelamin = '$jkel', telepon = '$telp' WHERE id_penumpang ='$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
	header("location:penumpang.php");
}else{
	echo "data gagal diperbarui";
}
?>