<html>
<head>
	<title>data buku</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h1>DATA BUKU</h1></center>
	<div><table align="center" style="margin-bottom: 1cm; ">
		<tr>
			<td><a href="add.php">ADD DATA</a></td>
			<td>___OR___</td>
			<td><a href="#">Refresh</a></td>
		</tr>
	</table></div>
	     <form action="" method="POST">
      
	<table cellspacing='0' align="center">
		<thead>
			<tr>
				<th>Gambar</th>
				<th>Judul</th>
				<th>isb</th>
				<th>Penerbit</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			 <?php
  
  include "config.php";
  
  $query = "SELECT * FROM t_buku"; 
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='gambar/".$data['gambar']."' width='100' height='100'></td>";
    echo "<td>".$data['judul']."</td>";
    echo "<td>".$data['isb']."</td>";
    echo "<td>".$data['penerbit']."</td>";
    echo "<td><a href='edit.php?id=".$data['id_buku']."'>Ubah</a><br>";
    echo "<a href='hapusbuku.php?id=".$data['id_buku']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
	
		</tbody>
	</table>
</form>
</body>
</html>