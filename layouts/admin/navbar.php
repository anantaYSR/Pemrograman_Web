<nav class="navbar bg-base-200">
  <div class="navbar-start">
    <label for="drawer" tabindex="0" class="btn btn-ghost drawer-button lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
    </label>
    <a class="btn btn-ghost normal-case text-xl">
      <img src="../../assets/img/logo_black.png" style="height: 50px;">
    </a>
  </div>
  <div class="navbar-end">
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost normal-case m-1">
        <span><?= $_SESSION['email'] ?></span>
      </label>
      <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a href="../../web/home">
            <i class="fa-solid fa-home"></i>
            <span>Halaman Depan</span>
          </a>
        </li>
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
  </div>
</nav>