<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Pengiriman</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-8 col-12 mb-3">
                        <label for="birthday">Tanggal Pengiriman</label>
                        <select class="form-select select2" id="country" aria-label="Default select example">
                            <option value="1">APA-CTR-2022/01/01 - Mitra 1</option>
                            <option value="2">APA-CTR-2022/02/01 - Mitra 2</option>
                            <option value="3">APA-CTR-2022/03/01 - Mitra 3</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                    <label for="birthday">Total Bungkusan</label>
                        <input class="form-control" id="birthday" type="number" required>   
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <label for="birthday">Tanggal Pengiriman</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                            <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <label for="birthday">Jam Pengiriman</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input class="form-control" id="birthday" type="text" placeholder="hh:mm" required>                                               
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <label for="birthday">Jam Sampai</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input class="form-control" id="birthday" type="text" placeholder="hh:mm" required>                                               
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                            <label for="formFile" class="form-label">Bukti Pengiriman</label>
                            <input class="form-control" type="file" id="formFile" no>
                    </div>
                    <div class="col-12">
                        <label for="birthday">Catatan</label>
                        <textarea class="form-control editor" placeholder="Catatan"></textarea>
                    </div>
                </div>
                
                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>