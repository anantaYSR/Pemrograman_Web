<nav class="navbar bg-base-200">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Tentang</a></li>
        <li><a>Jurnal</a></li>
        <li><a>Berita</a></li>
        <li><a>Panduan</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">
      <img src="../../assets/img/logo_black.png" style="height: 50px;">
      <span>Kertas</span>
    </a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal p-0">
        <li><a>Tentang</a></li>
        <li><a>Jurnal</a></li>
        <li><a>Berita</a></li>
        <li><a>Panduan</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <?php if(isset($_SESSION['status'])): ?>
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost normal-case m-1">
          <span><?= $_SESSION['email'] ?></span>
        </label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
          <li>
            <a href="<?= $_SESSION['role'] = 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>">
              <i class="fa-regular fa-user"></i>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="../../auth/logout.php">
              <i class="fa-regular fa-pen-to-square"></i>
              <span>Catatan</span>
            </a>
          </li>
          <li>
            <a href="../../auth/logout.php">
              <i class="fa-regular fa-bookmark"></i>
              <span>Bookmark</span>
            </a>
          </li>
          <li>
            <a href="../../auth/logout.php" class="text-error">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    <?php else: ?>
      <a href="../../auth/login.php" class="btn mr-2">
        <i class="fa-regular fa-arrow-right-to-bracket mr-2"></i>
        <span>Masuk</span>
      </a>
      <a href="../../auth/register.php" class="btn btn-outline">
        <i class="fa-regular fa-pen-to-square mr-2"></i>
        <span>Daftar</span>
      </a>
    <?php endif ?>
  </div>
</nav>