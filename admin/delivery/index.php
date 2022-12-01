<?php require_once('../../layouts/admin/header.php') ?>

<?php
$deliveries = query("SELECT
            pengiriman.*,
            kontrak.nomor_kontrak,
            mitra.nama as nama_mitra,
            mitra.alamat as alamat_mitra
        FROM pengiriman
        JOIN kontrak ON pengiriman.id_kontrak = kontrak.id
        JOIN mitra ON kontrak.id_mitra = mitra.id
    ")
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
                        <th>Mitra</th>
                        <th>Lokasi</th>
                        <th>Total Bungkus</th>
                        <th>Tanggal</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($deliveries as $delivery) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $delivery['nama_mitra'] ?></td>
                            <td><?= $delivery['alamat_mitra'] ?></td>
                            <td><?= $delivery['total_bungkus'] ?></td>
                            <td><?= $delivery['tanggal'] ?></td>
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