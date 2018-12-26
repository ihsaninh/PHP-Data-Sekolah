<?php
require 'core/init.php';

if(cek_status($_SESSION['user']) != 1) {
  http_response_code(404);
  include('errors/404_error_msg.html');
  die();
}

$nama = $_GET["name"];

 $siswa = query("SELECT * FROM siswa WHERE nama='$nama'");
 foreach ($siswa as $s) {
   $gambar = $s['gambar'];	
 }

 if ( hapus($nama) ) {
     if ($gambar) {
        unlink('img/'.$gambar);
        header("Location: /");
      }else{
        echo "Gagal Menghapus data";
   }
}

?>