<?php 
//koneksi
$koneksi = mysqli_connect("localhost", "root", "", "ticket");

//Mengambil id dari list
$id = $_GET['id'];

//Perintah delete
$delete = "DELETE FROM tipe_transportasi WHERE id_tipe_transportasi = '$id'";

//Eksekusi Perintah
$hasil = mysqli_query($koneksi, $delete);

//cek hasil
if ($hasil) {
	header("location:tipe.php");
}else{
	echo "Data gagal dihapus";
}














 ?>