<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
 <link rel="stylesheet" href="header.css">
</head>
<body>  
 <a href="databuku2.php" class="menu">BERANDA</a> ||
 <a href="add.php" class="menu">TAMBAH DATA</a>
 <h2>FORM TAMBAH DATA</h2>
 <form enctype="multipart/form-data" action="" method="POST">
 <table>
 <tr>
  
 </tr>
 <tr>
  <td>gambar</td>
  <td><input type="file" name="gambar"  placeholder="pilih gambar" /></td>
 </tr>
 <tr>
   <td>judul </td>
   <td><input type="text" name="judul"></td>
 </tr>
 <tr>
  <td>isb</td>
  <td> <input type="text" name="isb" placeholder="isb"></td>
 </tr>   <tr>
   <td>Penerbit</td>
   <td><input type="text" name="penerbit" placeholder="Masukkan Penerbit"></td>
  </tr>
  <tr>
  <td></td>
    <td><input type="submit" name="tambah" value="Tambah">
  <button type="reset" value="Reset">Reset</button>
   </td>
  </tr>
  </table>
 </form>

 <?php 
  include "config.php";

  

  if(isset($_POST['tambah'])){
  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $nama_file   = $_FILES['gambar']['name'];
  
  $judul    = $_POST['judul'];
  $isb = $_POST['isb'];
  $penerbit  = $_POST['penerbit'];

  $foto = date('dmYHis').$nama_file;
  $folder = "files/".$foto;
  $querytambah = mysql_query($koneksi, "INSERT INTO t_buku(gambar, judul, isb, penerbit,) VALUES( '$foto', '$judul' , '$isb', '$penerbit' )") or die(mysql_error());
  


  if (move_uploaded_file($lokasi_file,"$folder")) {
     echo "Nama File : <b>$nama_file</b> sukses di upload";
   } else {
    echo "terserah ahh kalo kamunya kaya gitu ";
   }


  if($querytambah) {
    header('location: databuku2.php');
   } else{
    echo "Upss Something wrong..";
   }
  }
 ?>
</body>
</html>