<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'config.php';


$id = $_POST['id_buku'];

$gambar = $_POST['gambar'];
$judul = $_POST['judul'];
$isb = $_POST['isb'];
$penerbit = $_POST['penerbit'];


$update = "UPDATE t_buku SET gambar='$gambar',judul='$judul',isb='$isb',penerbit='$penerbit' where id = '$id_buku'";
$hasil = mysql_query($update);




if ($hasil) {
	echo "<center> <b> <font color='red' sizes='4'> <p> Data Berhasil Dihapus </p> 
	 </font> </b> </center> <br> <meta http-equiv='refresh' content='2; url= databuku2.php'/> ";
} else {
	echo "Data Gagal Dihapus";
}
?>}

?>