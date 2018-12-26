<?php
require 'core/init.php';

if(isset($_SESSION['user'])){
  header('Location: /');
}

$error = "";

if (isset($_POST['submit'])) {
   $nama = $_POST['username'];
   $pass  = $_POST['password'];
    if(login_cek_nama($nama)){
       if(cek_data($nama, $pass)){
        $_SESSION['user'] = $nama;
        $_SESSION['welcome'] = "<strong>Selamat datang!</strong> " . "user" ." " . $nama;
        header("Location: /");
       }else{
        $error = "Username atau Password salah";
       }
    }else{
      $error = "Nama atau email belum terdaftar di database";
    }
}

require 'view/header.php';

?>
  <div class="container" id="margin">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <div class="page-header">
         <h2 class="text-center"><strong>Login User</strong></h2>
      </div>
    <form action="" method="post">
      <div class="form-group">
          <label for="username"></label>
            <div class="input-group">
              <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
              <input type="text" name="username" class="form-control" id="username" placeholder="Username atau Email anda.." value="<?php echo (isset($nama))?$nama:'';?>" required>
          </div>
      </div>
  <div class="form-group">
      <label for="password" class="sr-only"></label>
      <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password anda.." value="<?php echo (isset($pass))?$pass:'';?>" required>
      </div>
  </div>
  <p>Belum punya akun? Silahkan <a href="/register">Register</a></p>
  <button type="submit" class="btn btn-default" name="submit">Login</button>
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