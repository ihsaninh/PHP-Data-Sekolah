<?php
require 'core/init.php';

if(cek_status($_SESSION['user']) != 1) {
    http_response_code(404);
    include('errors/404_error_msg.html');
    die();
}

$nama = $_GET['name'];

$siswa = query("SELECT * FROM siswa WHERE nama='$nama'");

if ( isset($_POST['submit']) ) {
    if(edit($_POST)){
       header("Location: /");
    }else{
      echo "Ada masalah saat mengedit data";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <?php foreach ($siswa as $s) : ?>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $s["id"]; ?>">
      <input type="hidden" name="gambarLama" value="<?= $s["gambar"]; ?>">

      <label for="nis">NIS</label>
      <input type="text" name="nis" id="nis" value="<?= $s["nis"]; ?>" required><br><br>

      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" value="<?= $s["nama"]; ?>" required><br><br>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="<?= $s["email"]; ?>" required><br><br>

      <label for="jurusan">Jurusan</label>
      <input type="text" name="jurusan" id="jurusan" value="<?= $s["jurusan"]; ?>" required><br><br>

      <label for="jnskelamin">Gender</label>
      <input type="text" name="jnskelamin" id="jnskelamin" value="<?= $s["jeniskelamin"]; ?>"><br><br>

      <label for="gambar">Gambar</label><br>
      <img src="img/<?= $s['gambar']; ?>" width="50"><br>
      <input type="file" name="gambar" id="gambar"><br><br>

      <button type="submit" name="submit">Edit Data</button>

    </form>
    <?php endforeach; ?>
</body>
</html>