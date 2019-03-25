<?php 

$koneksi = mysqli_connect("localhost", "root", "", "ticket");

$id = $_GET['id'];
$namat = $_GET['namat'];
$kete = $_GET['kete'];

$input = "INSERT INTO tipe_transportasi(nama_tipe, keterangan) VALUES ('$namat', '$kete')";


$hasil = mysqli_query($koneksi, $input);

if ($hasil) {
	header("location:tipe.php");
}else{
	echo "data gagal dimasukan";
}

 ?>