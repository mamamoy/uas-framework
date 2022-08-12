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
                                <form>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Nama Pelanggan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-3" hidden>
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Jam</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" type="time">
                                        </div>
                                    </div>
                                    <div class="row mb-3" hidden>
                                        <label class="col-sm-2 col-form-label" for="inputEmail3">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" type="date">
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kendaraan</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" id="gridRadios1" type="radio" name="gridRadios" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">Roda 2</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="gridRadios2" type="radio" name="gridRadios" value="option2">
                                                <label class="form-check-label" for="gridRadios2">Roda 4</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputPassword3">Model</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputPassword3" type="text">
                                            <p class="fw-lighter text-end"><i>Contoh: Honda Supra 125</i></p>
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Jenis Pelayanan</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Servis</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Pembelian Suku Cadang</label>
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