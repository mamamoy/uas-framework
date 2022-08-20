<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Pendaftaran Servis &amp; Pembelian Suku Cadang</div>
                    <div class="card-body">
                        <p>Silahkan isi data berikut ini.</p>
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                                <?php $validation = \Config\Services::validation(); ?>

                                <form action="BuatTransaksi" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="row mb-3" hidden>
                                        <label class="col-sm-2 col-form-label" for="status">Status</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="status" id="status" placeholder="Nama Anda" value="1" type="number">
                                        </div>
                                    </div>
                                    <div class="row mb-3" hidden>
                                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="email" id="email" placeholder="Nama Anda" value="<?= session()->get('email') ?>" type="email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="nama_pelanggan">Nama Pelanggan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control <?= ($validation->hasError('nama_pelanggan')) ? 'is-invalid' : ''; ?>" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Anda" value="<?= old('nama_pelanggan'); ?>" type="text">
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kendaraan</legend>
                                        <div class="col-sm-10 <?= ($validation->hasError('jenis_kendaraan')) ? 'is-invalid' : ''; ?>">
                                            <div class="form-check">
                                                <input class="form-check-input" id="jenis_kendaraan" type="radio" name="jenis_kendaraan" value="1">
                                                <label class="form-check-label" for="jenis_kendaraan">Roda 2</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="jenis_kendaraan" type="radio" name="jenis_kendaraan" value="2">
                                                <label class="form-check-label" for="jenis_kendaraan">Roda 4</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('jenis_kendaraan'); ?>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="merk_kendaraan">Tipe Kendaraan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control <?= ($validation->hasError('merk_kendaraan')) ? 'is-invalid' : ''; ?>" name="merk_kendaraan" id="merk_kendaraan" type="text" value="<?= old('nama_pelanggan'); ?>">
                                            <p class="fw-lighter text-end"><i>Contoh: Honda Supra 125</i></p>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('patient_name'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Jenis Pelayanan</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" id="jenis_pelayanan" type="radio" name="jenis_pelayanan" value="1">
                                                <label class="form-check-label" for="jenis_pelayanan">Servis</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="jenis_pelayanan" type="radio" name="jenis_pelayanan" value="2">
                                                <label class="form-check-label" for="jenis_pelayanan">Servis &amp; Pembelian Suku Cadang</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <button class="btn btn-primary" type="submit">Buat Pesanan</button>
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