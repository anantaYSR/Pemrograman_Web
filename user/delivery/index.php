<?php require_once('../../layouts/admin/header.php') ?>

<?php
$user = find("pengguna", $_SESSION['id']);
$deliveries = query("SELECT
            pengiriman.*,
            kontrak.nomor_kontrak,
            kontrak.total_bungkus as kontrak_total_bungkus
        FROM pengiriman
        JOIN kontrak ON pengiriman.id_kontrak = kontrak.id
        WHERE kontrak.id_mitra = {$user['id_mitra']}
    ");
?>
<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Histori Pengiriman</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Tanggal</th>
                        <th>No. Kontrak</th>
                        <th>Total Bungkus Dikirim</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($deliveries as $delivery) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $delivery['tanggal'] ?></td>
                            <td><?= $delivery['nomor_kontrak'] ?> (<?= $delivery['kontrak_total_bungkus'] ?> Bungkus)</td>
                            <td><?= $delivery['total_bungkus'] ?></td>
                            <td><?= $delivery['catatan'] ?></td>
                            <?php $i++ ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>