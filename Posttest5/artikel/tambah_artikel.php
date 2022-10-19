<?php
	include "../koneksi.php";

	$idartikel=$_POST['idartikel'];
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$iduser=$_POST['iduser'];

	$sql = "INSERT INTO artikel(idartikel,judul,berita,iduser)VALUES('$idartikel','$judul','$berita','$iduser')";

	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:read_artikel.php');
	}
	else
	{
		echo "Gagal Disimpan";
	}
?>