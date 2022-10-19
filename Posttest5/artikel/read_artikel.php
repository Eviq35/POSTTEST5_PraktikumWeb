<?php
		include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/form.css">
</head>
<body>
	<div class="latar">
		<h2>MANAJEMEN ARTIKEL</h2>
	</div>
	<br>
		<center>
			<input type="button" value="TAMBAH" onclick="location.href='halaman_tambah_artikel.php'">
		</center>
		<br>
		<center>
		<table border="0" cellpadding="10">
			<div class="atasan">
			<tr>
				<th>NO</th>
				<th>ID ARTIKEL</th>
				<th>Judul</th>
				<th>Berita</th>
				<th>ID USER</th>
				<th>PILIH</th>
			</tr>
			</div>
			<?php
				$no=1;
				$sql="SELECT * FROM artikel";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[idartikel]"; ?></td>
						<td><?php echo "$data[judul]"; ?></td>
						<td><?php echo "$data[berita]"; ?></td>
						<td><?php echo "$data[iduser]"; ?></td>
						<td>
							<a class="edit" href="halaman_edit_artikel.php?idartikel=<?php echo"$data[idartikel]"; ?>">EDIT</a>
							<a class="hapus" href="hapus_artikel.php?idartikel=<?php echo"$data[idartikel]"; ?>" onclick="return confirm('Konfirmasi!!!')">HAPUS</a>
						</td>
					</tr>
					<?php
					$no++;
				}
			?>
		</table><br>
		<a class="tmbl" href="../index.html">KEMBALI</a>
		</center>
		<div class="footer">
		Vigo Santri Ali 2009106008
		</div>
</body>
</html>