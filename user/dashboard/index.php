<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
          <h2 class="h4">Selamat Datang, <?= $_SESSION['username'] ?></h2>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="h5">Total Pengiriman</h2>
                                <h3 class="fw-extrabold mb-1">345</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Total Pengiriman</h2>
                                <h3 class="fw-extrabold mb-2">210</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Total Kontrak</h2>
                                <h3 class="mb-1">1</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Total Kontrak</h2>
                                <h3 class="fw-extrabold mb-2">2</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <h2 class="h4">Pengiriman Minggu Ini</h2>
        </div>
        <div class="col-12">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Total Bungkus</th>
                        <th>Bukti Pengiriman</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>31 Januari 2022</th>
                        <td>10:10 - 12:10</td>
                        <td>220</td>
                        <td>
                            <img src="https://images.unsplash.com/photo-1654263736203-a289f57c0d82?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-thumbnail img-fluid" style="height: 130px;">
                        </td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>30 Januari 2022</th>
                        <td>10:10 - 12:10</td>
                        <td>220</td>
                        <td>
                            <img src="https://images.unsplash.com/photo-1654263736203-a289f57c0d82?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-thumbnail img-fluid" style="height: 130px;">
                        </td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>29 Januari 2022</th>
                        <td>10:10 - 12:10</td>
                        <td>220</td>
                        <td>
                            <img src="https://images.unsplash.com/photo-1654263736203-a289f57c0d82?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-thumbnail img-fluid" style="height: 130px;">
                        </td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>