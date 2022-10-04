<div class="drawer-side">
  <label for="drawer" class="drawer-overlay"></label> 
  <ul class="menu p-4 overflow-y-auto w-80 bg-base-200 text-base-content">
    <?php 
      $link = $_SERVER['PHP_SELF'];
      $link_array = explode('/',$link);
    ?>
    <?php if ($_SESSION['role'] = 'admin'): ?>
    <li>
      <a class="<?= in_array("dashboard", $link_array) ? 'active' : ''  ?>" href="../../admin/dashboard"><i class="fa-solid fa-gauge"></i>Dashboard</a>
    </li>
    <li>
      <a class="<?= in_array("journal-validations", $link_array) ? 'active' : ''  ?>" href="../../admin/journal-validations"><i class="fa-regular fa-square-check"></i></i>Validasi Jurnal</a>
    </li>
    <li>
      <a class="<?= in_array("journals", $link_array) ? 'active' : ''  ?>" href="../../admin/journals"><i class="fa-regular fa-newspaper"></i>Daftar Jurnal</a>
    </li>
    <li>
      <a class="<?= in_array("users", $link_array) ? 'active' : ''  ?>" href="../../admin/users"><i class="fa-solid fa-users"></i>Daftar Pengguna</a>
    </li>
    <li>
      <a class="<?= in_array("guides", $link_array) ? 'active' : ''  ?>" href="../../admin/guides"><i class="fa-solid fa-person-circle-question"></i>Panduan</a>
    </li>
    <li>
      <a class="<?= in_array("news", $link_array) ? 'active' : ''  ?>" href="../../admin/news"><i class="fa-solid fa-pen-nib"></i>Berita</a>
    </li>
    <li>
      <a class="<?= in_array("infos", $link_array) ? 'active' : ''  ?>" href="../../admin/infos"><i class="fa-solid fa-info"></i>Tentang</a>
    </li>
    <li>
      <a class="<?= in_array("settings", $link_array) ? 'active' : ''  ?>" href="../../admin/settings"><i class="fa-solid fa-gears"></i>Pengaturan</a>
    </li>
    <?php else: ?>
    <li>
      <a><i class="fa-solid fa-gauge"></i>Dashboard</a>
    </li>
    <li>
      <a><i class="fa-regular fa-square-check"></i></i>Validasi Jurnal</a>
    </li>
    <li>
      <a><i class="fa-regular fa-newspaper"></i>Daftar Jurnal</a>
    </li>
    <li>
      <a><i class="fa-solid fa-users"></i>Daftar User</a>
    </li>
    <li>
      <a><i class="fa-solid fa-spell-check"></i>Glosarium</a>
    </li>
    <li>
      <a><i class="fa-solid fa-person-circle-question"></i>Panduan</a>
    </li>
    <li>
      <a><i class="fa-solid fa-pen-nib"></i>Berita</a>
    </li>
    <li>
      <a><i class="fa-solid fa-info"></i>Tentang</a>
    </li>
    <li>
      <a><i class="fa-solid fa-gears"></i>Pengaturan</a>
    </li>
    <?php endif ?>
    
  </ul>
  
</div>