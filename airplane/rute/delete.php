<?php 
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//Mengambil id dari list
$id = $_GET['id'];

//Perintah delete
$delete = "DELETE FROM rute WHERE id_rute = '$id'";

//Eksekusi Perintah
$hasil = mysqli_query($koneksi, $delete);

//cek hasil
if ($hasil) {
	header("location:rute.php");
}else{
	echo "Data gagal dihapus";
}














 ?>