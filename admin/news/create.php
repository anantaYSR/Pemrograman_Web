<?php require_once('../../layouts/admin/header.php') ?>
  <main>
    <div class="flex justify-between align-center mb-4">
      <h1 class="text-2xl font-bold">Berita Baru</h1>
      <a href="./create.php" class="btn btn-ghost">
        <span>Kembali</span>
      </a>
    </div>
    <form action="">
      <div class="form-control">
        <div class="label">
          <div class="label-text">Konten</div>
        </div>
        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Konten</span>
        </label> 
        <textarea class="textarea textarea-bordered h-24 editor" placeholder="Bio"></textarea>
      </div>
      <div class="text-right mt-4">
        <button type="submit" class="btn btn-outline">Simpan</button>
      </div>
    </form>
  </main>
<?php  require_once('../../layouts/admin/footer.php') ?>