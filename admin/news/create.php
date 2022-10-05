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
          <div class="label-text">Jenis Berita</div>
        </div>
        <select class="select select-bordered w-full max-w-xs">
          <option disabled selected>Berita</option>
          <option>Pengumuman</option>
        </select>
      </div>
      <div class="form-control">
        <div class="label">
          <div class="label-text">Judul</div>
        </div>
        <input type="text" class="input input-bordered w-full" placeholder="Judul">
      </div>
      <div class="form-control">
        <div class="label">
          <div class="label-text">Tanggal</div>
        </div>
        <div class="form-control">
          <label class="input-group">
            <span><i class="fa-solid fa-calendar"></i></span>
            <input datepicker type="text" class="input input-bordered w-full" placeholder="Tanggal">
          </label>
        </div>
      </div>
      <div class="form-control">
        <div class="label">
          <div class="label-text">Gambar Banner</div>
        </div>
        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" id="file_input" type="file">
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Konten</span>
        </label> 
        <textarea class="textarea textarea-bordered h-24 editor" placeholder="Konten"></textarea>
      </div>
      <div class="text-right mt-4">
        <button type="submit" class="btn btn-outline">Simpan</button>
      </div>
    </form>
  </main>
<?php  require_once('../../layouts/admin/footer.php') ?>