<?php 

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$username = $_GET['user'];
$password = $_GET['pass'];
$nama = $_GET['nama'];
$lev = $_GET['lev'];

$input = "INSERT INTO petugas(id_petugas, username, password, nama_petugas, id_level) VALUES ('$id','$username', '$password','$nama', '$lev')";


$hasil = mysqli_query($koneksi, $input);

if ($hasil) {
	header("location:petugas.php");
}else{
	echo "data gagal dimasukan";
}

 ?>