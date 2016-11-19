<!DOCTYPE html>
<html>
<head>
  <title>EDIT POST</title>
</head>
<body>
  <center>
    <h1>Edit Post</h1>
    <h3>Edit Post</h3>
  </center>
  <?php foreach($post as $p){ ?>
  <form action="<?php echo base_url(). 'post/update'; ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>
        <td>Judul</td>
          <input type="hidden" name="id" value="<?php echo $p->id_post ?>">
          <input value="<?php echo $p->judul ?>" type="text" name="judul">
        </td>
      </tr>
      <tr>
        <td>Konten</td>
        <td><TextArea name="konten"><?php echo $p->konten ?></TextArea></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tgl_post" value="<?php echo $p->tgl_post?>"></td>
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