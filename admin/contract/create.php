<?php require_once('../../layouts/admin/header.php') ?>

<?php 
  $partners = all("mitra");
?>
<?php
  if(isset($_POST['submit'])) {
    unset($_POST['submit']);
    store("kontrak");
    flash("Berhasil menambah kontrak!", "success");
    header("Location: ./index.php");
  }
?>
<div id="main" class="min-vh-100 pt-4">
  <div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
        <h1 class="h4">Tambah Kontrak</h1>
      </div>
    </div>
  </div>
  <div class="card border-0 shadow components-section">
    <div class="card-body">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="id_mitra">Mitra</label>
          <select name="id_mitra" id="id_mitra" class="form-control">
            <?php foreach($partners as $partner): ?>
              <option value="<?= $partner['id'] ?> "><?= $partner['nama'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div  class="mb-3">
          <label for="nomor_kontrak">No Kontrak</label>
          <input class="form-control" name="nomor_kontrak" id="nomor_kontrak" type="text" required>
        </div>

        <div  class="mb-3">
          <label for="tanggal_mulai">Tanggal Mulai</label>
          <input class="form-control" name="tanggal_mulai" id="tanggal_mulai" type="date" required>
        </div>

        <div  class="mb-3">
          <label for="tanggal_akhir">Tanggal Akhir</label>
          <input class="form-control" name="tanggal_akhir" id="tanggal_akhir" type="date" required>
        </div>

        <div  class="mb-3">
          <label for="total_bungkus">Total Bungkus</label>
          <input class="form-control" name="total_bungkus" id="total_bungkus" type="number" required>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>