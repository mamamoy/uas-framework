<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Create Stock Barang</div>
                    <div class="card-body">
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                                <form action="<?= base_url('stockBarangPost') ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Kode barang</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="kode_barang" id="inputEmail3" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Nama barang</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="nama_barang" id="inputEmail3" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Harga</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="harga" id="inputEmail3" type="number" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Jumlah Barang</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="jumlah_barang" id="inputEmail3" type="number" required>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Tambah Barang</button>
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