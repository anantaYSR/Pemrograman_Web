<?php require_once('../../layouts/admin/header.php') ?>

<?php
$contracts = query("SELECT kontrak.*, mitra.nama as nama_mitra FROM kontrak JOIN mitra ON kontrak.id_mitra = mitra.id");
?>
<?php
if (isset($_POST['submit'])) {
    unset($_POST['submit']);
    store("pengiriman");
    flash("Berhasil menambah pengiriman!", "success");
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
                    <label for="id_kontrak">Kontrak</label>
                    <select name="id_kontrak" id="id_kontrak" class="form-control">
                        <?php foreach ($contracts as $contract) : ?>
                            <option value="<?= $contract['id'] ?> "><?= $contract['nama_mitra'] ?> - <?= $contract['nomor_kontrak'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal Pengantaran</label>
                    <input class="form-control" name="tanggal" id="tanggal" type="date" required>
                </div>
                <div class="mb-3">
                    <label for="total_bungkus">Total Bungkus</label>
                    <input class="form-control" name="total_bungkus" id="total_bungkus" type="number" required>
                </div>
                <div class="mb-3">
                    <label for="catatan">Catatan</label>
                    <textarea name="catatan" id="catatan" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>