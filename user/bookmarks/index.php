<?php require_once('../../layouts/admin/header.php') ?>
  <main>
    <h1 class="text-2xl font-bold mb-2">Selamat Datang, <?= $_SESSION['email'] ?></h1>

    <div class="flex items-center justify-center flex-col">
      <img src="../../assets/img/empty-bookmark.png" alt="" style="height: 400px;">
      <h1 class="text-3xl font-bold">Kosong, nih...</h1>
      <p class="py-6">Semua bookmark-mu akan ditampilkan di sini nantinya!</p>
    </div>
  </main>
<?php  require_once('../../layouts/admin/footer.php') ?>