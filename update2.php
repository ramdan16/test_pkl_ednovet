<?php
 include('config.php');

 $id_buku = $_POST['id_buku'];
 $lokasi_file =$_FILES['gambar']['tmp_file'];
 $nama_file =$_FILES['gambar']['name'];
 $judul = $_POST['judul'];
 $penerbit =$_POST['penerbit'];
 $isb  =$_POST['isb'];

 
 $simpan = mysql_query("INSERT INTO t_buku values('','$gambar','$judul','$penerbit','$isb') ");
 if ($simpan) {
 	echo "<script>alert('data berhasil disimpan')</script>";
    echo "<script language='javascript'>window.location.href='databuku.php'</script>";
 }
 else{
 	echo "<script>alert('data gagal disimpan')</script>";
    echo "<script language='javascript'>window.location.href='databuku.php'</script>";
 }
?>