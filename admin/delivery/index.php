<?php require_once('../../layouts/admin/header.php') ?>


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
                    <th>Waktu</th>
                    <th>Bukti Pengiriman</th>
                    <th>Catatan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <th>1</th>
                    <td>Mitra 1</td>
                    <td>Jl. Lorem ipsum dolor sit.</td>
                    <td>220</td>
                    <td>10:10 - 12:10</td>
                    <td>
                        <img src="https://images.unsplash.com/photo-1654263736203-a289f57c0d82?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-thumbnail img-fluid" style="height: 130px;">
                    </td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Mitra 2</td>
                    <td>Jl. Lorem ipsum dolor sit.</td>
                    <td>20</td>
                    <td>10:10 - 12:10</td>
                    <td>
                        <img src="https://images.unsplash.com/photo-1654263736203-a289f57c0d82?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-thumbnail img-fluid" style="height: 130px;">
                    </td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Mitra 3</td>
                    <td>Jl. Lorem ipsum dolor sit.</td>
                    <td>120</td>
                    <td>10:10 - 12:10</td>
                    <td>
                        <img src="https://images.unsplash.com/photo-1654263736203-a289f57c0d82?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-thumbnail img-fluid" style="height: 130px;">
                    </td>
                    <td>Agak telat</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>