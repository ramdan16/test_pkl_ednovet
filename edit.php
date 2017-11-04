<?php
include "config.php";

// membaca informasi yang dikirim dari file view.php pada address bar
$id = $_GET['id'];

// Perintah sql untuk menampilkan database
$queri = "select * from t_buku where id = '$id_buku'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$id_buku = $data['id_buku'];
$gambar = $data['gambar'];
$judul = $data['judul'];
$isb = $data['isb'];
$penerbit = $data['penerbit'];


?>


<html>
<head>
 <title> edit data buku </title>
 
 
</head>
<body style = 'margin : 20px; font : 16px arial;'>

<?php 
echo "
 <center>
 <p>edit data buku </p>
 
 <form method ='POST' action = 'editproses.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
 
  <td> Gambar </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'file' name = 'file' value= '".$file."'/> </td>
  </tr>
 <tr>
  <td> judul </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'judul' value= '".$judul."'/> </td>
  </tr>
 <tr>
  <td> isb </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'isb' value= '".$isb."'/> </td>
  </tr>
 <tr>
  <td> penerbit </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type='text' name = 'penerbit'  value ='".$penerbit."' </td>
  </tr>
  

  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Update'/>
 </td>
 </tr>
</table>
<a href = 'databuku2.php'> Kembali </a>
</form>
</body>
</html>
";
?> 