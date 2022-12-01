<?php

session_start();
include("../core/functions.php");

if(isset($_SESSION['status'])) {
  if($_SESSION['role'] == 'admin') {
    header("Location:../admin/dashboard");
  } else {
    header("Location:../user/dashboard");
  }
}

if(isset($_POST['username'])) {

  $user = query("SELECT * FROM pengguna WHERE username='{$_POST['username']}'");
  if(empty($user)) {
    header("Location:./login.php?denied=true");
  }
  $user = $user[0];
  $isPasswordCorrect = password_verify($_POST['password'], $user['password']);
  if(!$isPasswordCorrect) {
    header("Location:./login.php?denied=true");
  }
  $_SESSION['username'] = $user['username'];
  $_SESSION['id'] = $user['id'];
  $_SESSION['role'] = $user['id_mitra'] == null ? 'admin' : 'user';
  $_SESSION['status'] = "login";
  if($_SESSION['role'] == 'admin') {
    header("Location:../admin/dashboard");
  } else {
    header("Location:../user/dashboard");
  }
}
?>
<?php  require_once('../layouts/auth/header.php') ?>
<div class="row justify-content-center form-bg-image">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-4 mt-md-0">
                <img src="../assets/img/logo.png" style="height: 100px;" alt="">
            </div>
            <?php if(isset($_GET['denied'])): ?>
            <div class="alert alert-error">
              <span>Password atau email salah!</span>
            </div>
            <?php endif; ?>
            <form action="" class="mt-4" method="POST">
                <!-- Form -->
                <div class="form-group mb-4">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" id="username" autofocus required>
                    </div>  
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
                        </div>  
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-gray-800">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php  require_once('../layouts/auth/footer.php') ?>
