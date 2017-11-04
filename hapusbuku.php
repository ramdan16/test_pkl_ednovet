<?php
// Load file koneksi.php
include "config.php";
// Ambil data id yang dikirim oleh databuku2.php melalui URL
$id = $_GET['id'];
// Query untuk menampilkan data buku berdasarkan id yang dikirim
$query = "SELECT * FROM t_buku WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
  unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images
// Query untuk menghapus data buku berdasarkan id yang dikirim
$query2 = "DELETE FROM t_buku WHERE id_buku='".$id."'";
$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: databuku2.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='databuku2.php'>Kembali</a>";
}
?>