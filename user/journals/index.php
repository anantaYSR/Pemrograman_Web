<?php require_once('../../layouts/admin/header.php') ?>
  <main>
    <h1 class="text-2xl font-bold mb-2">Selamat Datang, <?= $_SESSION['email'] ?></h1>

    <div class="flex items-center justify-center flex-col">
      <img src="../../assets/img/empty-journal.png" alt="" style="height: 400px;">
      <h1 class="text-3xl font-bold">Kosong, nih...</h1>
      <p class="py-6">Semua jurnalmu akan ditampilkan di sini nantinya!</p>
      <a href="../home" class="btn">Upload Jurnal</a>
    </div>
  </main>
<?php  require_once('../../layouts/admin/footer.php') ?>