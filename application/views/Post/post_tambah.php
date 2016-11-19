<!DOCTYPE html>
<html>
<head>
	<title>PostTambah</title>
</head>
<body>
	<center>
		<h3>Tambah Ppstingan/h3>
	</center>
	<form action="<?php echo base_url(). 'post/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Konten</td>
				<td><TextArea name="konten"></TextArea></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl_post"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>