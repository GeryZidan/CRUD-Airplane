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

$input = "INSERT INTO penumpang(id_penumpang, username, password, nama_penumpang, alamat_penumpang, tanggal_lahir, jenis_kelamin, telepon) VALUES ('$id','$userx', '$passx','$namap', '$alm', '$tgl', '$jkel', '$telp')";


$hasil = mysqli_query($koneksi, $input);

if ($hasil) {
	header("location:../index.php");
}else{
	echo "data gagal dimasukan";
}

 ?>