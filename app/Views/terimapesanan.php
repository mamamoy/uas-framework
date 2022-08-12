<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Penerimaan Servis &amp; Pembelian Suku Cadang</div>
                    <div class="card-body">
                        <p>Silahkan isi data berikut ini.</p>
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                                <h3>Nama Pelanggan : Yiorgos Avraamu</h3>
                                <p>Tanggal : 2019-02-12<br>
                                    Jenis Pelayanan : Servis | Pembelian Suku Cadang<br>
                                    Status : Servis<br>
                                    Montir : Suryono</p>
                                <form>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Suku Cadang</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputPassword3">Quantity</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputPassword3" type="number">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary float-end">Tambah Barang</button><br>

                                    <div>
                                        <button class="btn btn-primary" type="submit">Terima Pemesanan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>