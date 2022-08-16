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
                                <h3>Nama Pelanggan : <?= $data['nama_pelanggan']; ?></h3>
                                <p>Tanggal Pemesanan : <?= $data['created_at']; ?><br>
                                    Jenis Kendaraan : <?php if ($data['jenis_kendaraan'] == 1) {
                                                            $value = 'Roda 2';
                                                            echo $value;
                                                        } else {
                                                            $value = 'Roda 4';
                                                            echo $value;
                                                        } ?><br>
                                    Jenis Pelayanan : <?php if ($data['jenis_pelayanan'] == 1) {
                                                            $value = 'Servis';
                                                            echo $value;
                                                        } else {
                                                            $value = "Servis & pembelian suku cadang";
                                                            echo $value;
                                                        }  ?><br>
                                    Status : Servis<br>
                                <form>
                                    <div class=" row mb-3">
                                        <label class="col-sm-2 col-form-label" for="nama_montir">Montir</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="nama_montir">
                                                <option selected>Plih Montir</option>
                                                <?php foreach ($montir as $key => $m) : ?>
                                                    <option value="<?= $m['nama_montir']; ?>"><?php echo $m['nama_montir']; ?></option>
                                                    <?= $key++; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="nama_barang">Suku Cadang</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="nama_barang">
                                                <option selected>Plih Pembelian</option>
                                                <?php foreach ($barang as $key => $b) : ?>
                                                    <option value="<?= $b['nama_barang']; ?>"><?php echo $b['nama_barang']; ?></option>
                                                    <?= $key++; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="inputPassword3">Quantity</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="jumlah" id="jumlah" type="number">
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