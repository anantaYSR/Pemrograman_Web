<?php require_once('../../layouts/admin/header.php') ?>
<?php
$users = all("pengguna");
?>
<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Daftar Pengguna</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Hak Akses</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['id_mitra'] == null ? 'Admin' : 'Mitra' ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>