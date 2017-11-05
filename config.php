<?php
	 $koneksi = mysqli_connect("localhost","root","","buku");
	 if(mysqli_connect_errno())	{
  echo "Error".mysqli_connect_error();
 }
?>