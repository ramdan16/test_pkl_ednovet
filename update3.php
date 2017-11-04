<!DOCTYPE html>
<html>
<head>
	<title>update</title>
<style type="text/css">
	.line{
		width: 50%;
		height: 50%;
		border: 1px solid cyan;
		border-radius: 5px;
		margin: 0 auto;

	}
	img{
		width: 3cm;
		height: 3cm;
		border-radius: 50%;
		margin-top: 10px;
	}
	input{
		width: 5cm;
		margin-top: 8px;
		border-radius: 2px;
	}
	a{
	 direction:none;
	}.btn{
		width: 3cm;
		border-radius: 1px;

	}
	
</style>
</head>
<body>
<Form action="update2.php" method="POST">
<div class="line" align="center">
	<table border="0">
	<tr>
		<td><label><input type="file" name="gambar" placeholder="gambar" id="gambar" required=""></label></td>
	</tr>
	<tr>
		<td>
	<input type="text" name="judul" placeholder="judul" required=""></td>
	</tr>
	<tr>
		<td><input type="text" name="penerbit" placeholder="penerbit" required=""></td>
	</tr>
	<tr>
		<td><input type="text" name="isb" placeholder="isb" required=""></td>
	</tr>
	
	
	<tr>
		<td><input type="submit" name="submit" value="simpan" class="btn" >&nbsp&nbsp&nbsp<input type="reset" name="reset" value="batal" class="btn">&nbsp&nbsp&nbsp<a href="databuku.php"></a><input type="submit" name="submit" value="kembali" class="btn"></td>
	</tr><p>
	</p>
</table>
</div>
</div>
</div>
</body>
</html>