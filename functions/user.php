<?php
//register user
function register_user($nama, $email, $pass){
   global $link;

   $nama  = mysqli_real_escape_string($link, $nama);
   $email = mysqli_real_escape_string($link, $email);
   $pass  = mysqli_real_escape_string($link, $pass);

   $pass  = password_hash($pass, PASSWORD_DEFAULT);
   $query = "INSERT INTO users (username, email, password) 
             VALUES ('$nama', '$email', '$pass')";

    if( mysqli_query($link, $query) ) return true;
      else return false;
}
// mengecek nama kembar
function register_cek_nama($nama, $email){
   global $link;
   $nama   = mysqli_real_escape_string($link, $nama);
   $email  = mysqli_real_escape_string($link, $email);

   $query  = "SELECT * FROM users WHERE username = '$nama' OR email = '$email'";
   if($result = mysqli_query($link, $query)){
      if(mysqli_num_rows($result) == 0) return true;
      else return false;
   }

}
// mengecek apakah nama sudah ada di database
function login_cek_nama($nama){
   global $link;
   $nama  = mysqli_real_escape_string($link, $nama);

   $query = "SELECT * FROM users WHERE username = '$nama' OR email = '$nama'";
   if($result = mysqli_query($link, $query)){
      if(mysqli_num_rows($result) != 0) return true;
      else return false;
   }

}

function cek_data($nama, $pass){
    global $link;
    $nama   = mysqli_real_escape_string($link, $nama);
    $pass   = mysqli_real_escape_string($link, $pass);

    $query  = "SELECT password FROM users WHERE username = '$nama' OR email='$nama'";
    $result = mysqli_query($link, $query);
    $hash   = mysqli_fetch_assoc($result)['password'];

    if ( password_verify($pass, $hash) ) return true;
    else return false;
}

function cek_status($nama){
  global $link;
  $nama = mysqli_real_escape_string($link, $nama);

  $query = "SELECT status FROM users WHERE username='$nama'";

  $result = mysqli_query($link, $query);
  $status = mysqli_fetch_assoc($result)['status'];
  return $status;
}
?>