<?php 

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$level = $_GET['lev'];

$input = "INSERT INTO level(id_level,nama_level) VALUES ('$id','$level')";

$hasil = mysqli_query($koneksi, $input);

if ($hasil) {
	header("location:level.php");
}else{
	echo "data gagal dimasukan";
}

 ?>