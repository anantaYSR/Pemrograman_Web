<?php require_once('../../layouts/admin/header.php') ?>
<?php
$user = find("pengguna", $_SESSION['id']);
$contracts = query("SELECT * FROM kontrak WHERE id_mitra={$user['id_mitra']}");
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Daftar Kontrak</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>No. Kontrak</th>
                        <th>Periode</th>
                        <th>Total Bungkus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($contracts as $contract) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $contract['nomor_kontrak'] ?></td>
                            <td><?= $contract['tanggal_mulai'] ?> - <?= $contract['tanggal_akhir'] ?></td>
                            <td><?= $contract['total_bungkus'] ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>