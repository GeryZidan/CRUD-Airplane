<?php 

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$kode = $_GET['kode'];
$kursi = $_GET['kursi'];
$ket = $_GET['ket'];
$idttrans = $_GET['idttrans'];

$input = "INSERT INTO transportasi(kode, jumlah_kursi, keterangan, id_tipe_transportasi) VALUES ('$kode', '$kursi','$ket', '$idttrans')";


$hasil = mysqli_query($koneksi, $input);

if ($hasil) {
	header("location:transportasi.php");
}else{
	echo "data gagal dimasukan";
}

 ?>