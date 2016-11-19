<!DOCTYPE html>
<html>
<head>
  <title>EDIT DATA</title>
</head>
<body>
  <center>
    <h1>Edit Data</h1>
    <h3>Edit Data</h3>
  </center>
  <?php foreach($user as $u){ ?>
  <form action="<?php echo base_url(). 'user/update'; ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>Nama</td>
        <td>
          <input type="hidden" name="id" value="<?php echo $u->id_user ?>">
          <input type="text" name="nama" value="<?php echo $u->nama ?>">
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="<?php echo $u->email ?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" value="<?php echo $u->password ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
      </tr>
    </table>
  </form> 
  <?php } ?>
</body>
</html>