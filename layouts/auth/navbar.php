<nav class="navbar bg-base-200">
  <div class="navbar-start">
    <a class="btn btn-ghost normal-case text-xl">
      <img src="../assets/img/logo_black.png" style="height: 50px;">
      <span>Kertas</span>
    </a>
  </div>
  <div class="navbar-end">
    <?php 
      $url = explode("/", $_SERVER["PHP_SELF"]);
      $file = end($url);
    ?>
    <?php if($file == 'login' || $file == 'login.php'):  ?>
      <a href="../auth/register.php" class="btn btn-outline">
        <i class="fa-regular fa-pen-to-square mr-2"></i>
        <span>Daftar</span>
      </a>
    <?php else:  ?>
      <a href="../auth/login.php" class="btn mr-2">
        <i class="fa-regular fa-arrow-right-to-bracket mr-2"></i>
        <span><?= explode("/", $_SERVER["PHP_SELF"]) ?></span>
      </a>
    <?php endif ?>
  </div>
</nav>