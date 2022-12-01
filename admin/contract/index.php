<?php require_once('../../layouts/admin/header.php') ?>
<?php
$contracts = query("SELECT kontrak.*, mitra.nama as nama_mitra FROM kontrak JOIN mitra ON kontrak.id_mitra = mitra.id");
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Daftar Kontrak</h1>
            </div>
            <a href="./create.php" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nama Mitra</th>
                        <th>Periode</th>
                        <th>No. Kontrak</th>
                        <th>Total Bungkus</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($contracts as $contract) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $contract['nama_mitra'] ?></td>
                            <td><?= $contract['tanggal_mulai'] ?> - <?= $contract['tanggal_akhir'] ?></td>
                            <td><?= $contract['nomor_kontrak'] ?></td>
                            <td><?= $contract['total_bungkus'] ?></td>
                            <td>
                                <a href="./delete.php?id=<?= $contract['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="./edit.php?id=<?= $contract['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>