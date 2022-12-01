<?php require_once('../../layouts/admin/header.php') ?>

<?php 
  $partner = find("mitra", $_GET['id']);
?>
<?php
  if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    update("mitra");

    flash("Berhasil mengubah mitra!", "success");
    header("Location: ./index.php");
  }
?>
<div id="main" class="min-vh-100 pt-4">
  <div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
        <h1 class="h4">Ubah Mitra</h1>
      </div>
    </div>
  </div>
  <div class="card border-0 shadow components-section">
    <div class="card-body">
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $partner['id'] ?>">
        <div>
          <label for="nama">Nama</label>
          <input class="form-control" name="nama" id="nama" type="text" value="<?= $partner['nama'] ?>" required>
        </div>
        <div>
          <label for="kontak">Kontak</label>
          <input class="form-control" name="kontak" id="kontak" type="text" value="<?= $partner['kontak'] ?>" required>
        </div>
        <div>
          <label for="alamat">Alamat</label>
          <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?= $partner['alamat'] ?></textarea>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>