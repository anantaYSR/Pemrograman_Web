<?php require_once('../../layouts/admin/header.php') ?>
<?php
$partners = all("mitra");
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Daftar Mitra</h1>
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
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($partners as $partner) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $partner['nama'] ?></td>
                            <td><?= $partner['alamat'] ?></td>
                            <td><?= $partner['kontak'] ?></td>
                            <td>
                                <a href="./delete.php?id=<?= $partner['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="./edit.php?id=<?= $partner['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
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