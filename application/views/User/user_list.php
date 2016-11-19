<!DOCTYPE html>
<html>
<head>
	<title>KUMPULAN DATA USER</title>
</head>
<body>
	<center><h1>KUMPULAN DATA USER</h1></center>
	<center><?php echo anchor('user/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Email</th>
		</tr>
		<?php 
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td>
			      <?php echo anchor('user/edit/'.$u->id_user,'Edit'); ?>
                  <?php echo anchor('user/hapus/'.$u->id_user,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>