<?php
require 'core/init.php';

if(cek_status($_SESSION['user']) != 1) {
  http_response_code(404);
  include('errors/404_error_msg.html');
  die();
}

$error = "";

if ( isset($_POST['submit']) ) {
     if ( tambah ($_POST) ) {
        header('Location: /');
   }else{
    $error = "Ada masalah saat menambah data" . mysqli_error($link);
   }
}

require 'view/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
  <div class="container" id="margin">
      <hr>
       <h3 class="text-center" style="margin-bottom: 30px">Tambah Data Siswa</h3>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-1 col-sm-offset-2" for="nis">NIS :</label>
        <div class="col-sm-6">
        <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukkan nomor NIS.." required>
      </div>
      </div>
  <div class="form-group">
      <label class="control-label col-sm-1 col-sm-offset-2" for="nama">Nama :</label>
      <div class="col-sm-6">
      <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama siswa.." required>
    </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-1 col-sm-offset-2" for="email">Email :</label>
      <div class="col-sm-6">
      <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email siswa.." required>
    </div>
  </div>
  <div class="form-group">
      <label for="jurusan" class="control-label col-sm-1 col-sm-offset-2">Jurusan :</label>
      <div class="col-sm-6">
      <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan jurusan siswa.." required>
    </div>
  </div>
  <div class="form-group">
      <label for="jnskelamin" class="control-label col-sm-1 col-sm-offset-2">Gender :</label>
      <div class="col-sm-6">
      <input type="radio" name="jnskelamin" id="jnskelamin" value="Laki-Laki" checked=""> Laki-Laki
      <input type="radio" name="jnskelamin" id="jnskelamin" value="Perempuan"> Perempuan
    </div>
  </div>
  <div class="form-group">
      <label for="gambar" class="control-label col-sm-1 col-sm-offset-2">Foto :</label>
      <div class="col-sm-6">
      <input type="file" name="gambar" id="gambar" required>
    </div>
  </div>
  <div class="col-sm-6 col-sm-offset-3">
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
    <br>
    <h5><?= $error; ?></h5>
  </div>
</body>
</html>