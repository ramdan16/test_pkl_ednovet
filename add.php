<!DOCTYPE html>
<html>
<head>
<title>tambah data</title>
<link rel="stylesheet" type="text/css" href="body.css">
</head>
<body>

<h1>tambah data</h1>

<div>
  <form enctype="multipart/form-data" action="" method="POST">
 
    <label for="gambar">Gambar</label>
    <input type="file"  name="gambar" placeholder="masukan gambar"><br>

    <input type="text" name="judul" placeholder="judul"><br>
    <input type="text" name="isb" placeholder="isb"><br>
    <input type="text" name="penerbit" placeholder="penerbit"><br>
  
    <input type="submit" name="tambah" value="simpan">&nbsp&nbsp<input type="reset" name="" value="batal">
  </form>
</div>
  <?php 
  include "config.php";

  

  if(isset($_POST['tambah'])){
  
  $gambar_lokasi = $_FILES['gambar']['tmp_name'];
  $nama_gambar   = $_FILES['gambar']['name'];
  
  $judul    = $_POST['judul'];
  $isb = $_POST['isb'];
  $penerbit  = $_POST['penerbit'];
  

  $gambar = date('dmYHis').$nama_gambar;
  $folder = "gambar/".$gambar;
  $querytambah = mysqli_query($koneksi, "INSERT INTO t_buku(gambar, judul, isb, penerbit) VALUES( '$gambar', '$judul' , '$isb', '$penerbit')") or die(mysqli_error());
  


  if (move_uploaded_file($gambar_lokasi,"$folder")) {
     echo "Nama File : <b>$nama_file</b> sukses di upload";
   } else {
    echo "Gambar GAGAL";
   }


  if($querytambah) {
    header('location: index.php');
   } else{
    echo "Upss Something wrong..";
   }
  }
 ?>
</body>
</html>
