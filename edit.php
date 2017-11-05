<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" type="text/css" href="body.css">
  <style type="text/css">
    img {
      width: 2cm;
      height: 3cm;
    }
  </style>
 </head>
 <body>
 <a href="databuku.php" class="menu">BERANDA</a> ||
 <a href="add.php" class="menu">TAMBAH DATA</a>
  <h1>EDIT DATA</h1>

   <?php
  include "config.php";

   $id = $_GET['id'];

   $query = mysqli_query($koneksi, "SELECT * FROM t_buku WHERE id_buku = '$id'");

   $data = mysqli_fetch_array($query);
   ?>

    <form enctype="multipart/form-data" action="" method="POST">
   <table>
   
   <tr>
    <td>Gambar </td>
    <td><img src="gambar/<?php echo $data['gambar'] ?>"><br>
    <input type="file" name="gambar" value="<?php echo $data['gambar'] ?>"></td>
   </tr>
   <tr>
    <td>Judul </td>
    <td><input type="text" name="judul" value="<?php echo $data['judul'] ?>"></td>
   </tr>
   <tr>
    <td>isb</td>
    <td> <input type="text" name="isb" value="<?php echo $data['isb'] ?>"></td>
   </tr> 
    <tr>
     <td>Penerbit</td>
     <td><input type="text" name="penerbit" value="<?php echo $data['penerbit'] ?>"></td>
    </tr>
    <tr>
    <td></td>
      <td><input type="submit" name="ubah" value="Ubah">
    <input type="reset" value="Reset">
     </td>  
    </tr>
    </table>
 </form>
 </body>
 </html>

 <?php
  include "config.php";

  
  
  if(isset($_POST['ubah'])){ //1
    /* syntak edit gambar */
  $gambar_lokasi = $_FILES['gambar']['tmp_name'];
  $nama_gambar   = $_FILES['gambar']['name'];
  
  
  //end

  $judul     = $_POST['judul'];
  $isb      = $_POST['isb'];
  $penerbit  = $_POST['penerbit'];
  

  $gambar = date('dmYHis').$nama_gambar;
  $folder = "gambar/".$gambar;

if (move_uploaded_file($gambar_lokasi,"$folder")) { //2
     

    $queryy = "SELECT * FROM t_buku WHERE id_buku ='".$id."'";
    $sqli = mysqli_query($koneksi, $queryy); // Eksekusi/Jalankan query dari variabel $query
    $res = mysqli_fetch_array($sqli); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("gambar/".$res['gambar'])) // Jika foto ada
      unlink("gambar/".$res['gambar']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE t_buku SET gambar  = '$gambar', judul = '$judul', isb = '$isb', penerbit = '$penerbit' WHERE id_buku = $id";
     // Eksekusi/ Jalankan query dari variabel $query
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
      
      header("location: index.php");
    } else {
      echo "fail";
      echo "<a href='edit.php'> Edit Kembali </a>";
    }
  }//2
}//1
?>
