<?php
// Menampilkan data
function query($query){
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// menambah data
function tambah($data){
    $nis        = htmlspecialchars($data['nis']);
    $nama       = htmlspecialchars($data['nama']);
    $email      = htmlspecialchars($data['email']);
    $jurusan    = htmlspecialchars($data['jurusan']);
    $jnskelamin = htmlspecialchars($data['jnskelamin']);

    $gambar = upload();
    if(!$gambar){
      return false;
    }

    $query = "INSERT INTO siswa (nis, nama, email, jurusan, gambar, jeniskelamin) VALUES('$nis', '$nama', '$email', '$jurusan', '$gambar', '$jnskelamin')";
    return run($query);
}

// menghapus data
function hapus($nama){
    $query = "DELETE FROM siswa WHERE nama='$nama'";
    return run($query);
}

//mengedit data
function edit($data){
    $id      = $data['id'];
    $nis     = htmlspecialchars($data['nis']);
    $nama    = htmlspecialchars($data['nama']);
    $email   = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $jnskelamin = htmlspecialchars($data['jnskelamin']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    if ($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
    }else{
      $gambar = upload();
  }

    $query = "UPDATE siswa SET nis='$nis', nama='$nama', email='$email',
              jurusan='$jurusan', jeniskelamin='$jnskelamin', gambar='$gambar' WHERE id=$id";
    return run($query);
}

// mencari data
function cari($cari){
    $query = "SELECT * FROM siswa
              WHERE nama LIKE '%$cari%'
              ORDER by nama
            ";
     return result($query);
}

function upload(){

  $namaFile   = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $tmpName    = $_FILES['gambar']['tmp_name'];
  $error      = $_FILES['gambar']['error'];

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
    echo "Yang anda upload bukan gambar gan";
    return false;
  }

  //cek apakah ukurannya terlalu besar
  if( $ukuranFile > 1048576 ){
    echo "Ukurannya terlalu besar, maksimal 1MB";
    return false;
  }

  //menghindari nama kembar
  $namaFileBaru = uniqid('img_') . "_" . time() . "." . $ekstensiGambar;

  //upload filenya
  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;

}

//refactor
function result($query){
    global $link;

    if($result = mysqli_query($link, $query) or die ("Gagal menampilkan data") );
       return $result;
}

//refactor
function run($query){
   global $link;

   if( mysqli_query($link, $query) ) return true;
   else return false;
}
?>