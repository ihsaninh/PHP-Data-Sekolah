<?php
require 'core/init.php';

if(isset($_SESSION['user'])){
  header('Location: /');
}

$error = "";
$passerr = "";

if (isset($_POST['submit'])) {
   $nama = $_POST['username'];
   $email = $_POST['email'];
   $pass  = $_POST['password'];
   $pass2 = $_POST['password2'];

   if ($pass == $pass2) {
      if(register_cek_nama($nama, $email)){
        if(register_user($nama, $email, $pass)){
            header("Location: login");
          }else{
            $error = "Gagal mendaftarkan user baru" . mysqli_error($link);
        }
        }else{
          $error = "Username atau Email yang anda masukkan sudah terdaftar";
        }
       }else{
        $passerr = "Konfirmasi Password yang anda masukkan salah";
      }

}
require 'view/header.php';

?>

  <div class="container" id="margin">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
      <div class="page-header">
         <h2 class="text-center"><strong>Register User</strong></h2>
      </div>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Username anda.." value="<?php echo (isset($nama))?$nama:'';?>" required>
      </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email anda.." value="<?php echo (isset($email))?$email:'';?>" required>
  </div>
  <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password anda.." value="<?php echo (isset($pass))?$pass:'';?>" required>
  </div>
  <?php if ($passerr): ?>
     <div class="form-group has-error">
     <label class="control-label" for="password2">Ulangi Password</label>
     <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password anda.." required>
    </div>
  <?php else: ?>
  <div class="form-group">
      <label for="password2">Ulangi Password</label>
      <input type="password" name="password2" id="password2" class="form-control" placeholder="Ulangi Password anda.." value="<?php echo (isset($pass2))?$pass2:'';?>">
  </div>
  <?php endif ?>
  <button type="submit" class="btn btn-default" name="submit">Register</button>
    <br><br>
    </form>
    <?php if(isset($_POST['submit'])): ?>
      <?php if ($error): ?>
        <div class="alert alert-danger" role="alert"><?= $error; ?>
        </div>
      <?php elseif($passerr): ?>
      <div class="alert alert-danger" role="alert"><?= $passerr; ?>
        </div>
        <?php endif; ?>
    <?php endif; ?>
  </div>
  </div>
  </div>
  <?php require 'view/footer.php'; ?>