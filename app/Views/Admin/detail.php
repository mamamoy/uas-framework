<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Detail Pemesanan
                        <?php if ($pesanan['status'] == 1) : ?>
                            <button type="button" class="btn btn-primary float-end" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
                                Terima Pesanan
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menerima pesanan?</p>

                                            <form action="detailUpdate/<?= $pesanan['id']; ?>" method="post" enctype="multipart/form-data">
                                                <?= csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="col-form-label">Keterangan servis:</label>
                                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="" rows="3" placeholder="Isi keterangan bagian kendaraan yang diperbaiki!"></textarea>
                                                </div>
                                                <div class="row mb-3" hidden>
                                                    <label class="col-sm-2 col-form-label" for="status">Status</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="status" id="status" placeholder="Nama Anda" value="2" type="number">
                                                    </div>
                                                </div>
                                                <div class="row mb-3" hidden>
                                                    <label class="col-sm-2 col-form-label" for="email">Email</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="email" id="email" placeholder="Nama Anda" value="<?= $pesanan['email']; ?>" type="email">
                                                    </div>
                                                </div>
                                                <div class="row mb-3" hidden>
                                                    <label class="col-sm-2 col-form-label" for="nama_pelanggan">Nama Pelanggan</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Anda" value="<?= $pesanan['nama_pelanggan']; ?>" type="text">
                                                    </div>
                                                </div>
                                                <div class="row mb-3" hidden>
                                                    <label class="col-sm-2 col-form-label" for="jenis_kendaraan">Jenis Kendaraan</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="jenis_kendaraan" id="jenis_kendaraan" placeholder="Nama Anda" value="<?= $pesanan['jenis_kendaraan']; ?>" type="text">
                                                    </div>
                                                </div>

                                                <div class="row mb-3" hidden>
                                                    <label class="col-sm-2 col-form-label" for="merk_kendaraan">Model</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="merk_kendaraan" id="merk_kendaraan" type="text" value="<?= $pesanan['merk_kendaraan']; ?>">
                                                        <p class="fw-lighter text-end"><i>Contoh: Honda Supra 125</i></p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3" hidden>
                                                    <label class="col-sm-2 col-form-label" for="jenis_pelayanan">Model</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="jenis_pelayanan" id="jenis_pelayanan" type="text" value="<?= $pesanan['jenis_pelayanan']; ?>">
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Terima</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <button type="button" class="btn btn-primary float-end" disabled>
                                Pesanan Selesai
                            </button>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <p>Data pemesanan yang telah dibuat oleh pelanggan</p>
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Data Pemesanan
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-coreui-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <pre>
Nama Pelanggan          :   <?php echo $pesanan['nama_pelanggan'] ?><br>
Jenis Pelayanan         :   <?php if ($pesanan['jenis_pelayanan'] == 1) {
                                echo 'Servis';
                            } else {
                                echo 'Servis dan pembelian suku cadang';
                            } ?><br>
Jenis Kendaraan         :   <?php if ($pesanan['jenis_kendaraan'] == 1) {
                                echo 'Roda 2';
                            } else {
                                echo 'Roda 4';
                            } ?><br>
Merk Kendaraan          :   <?php echo $pesanan['merk_kendaraan'] ?><br>
Tanggal Pesanan Dibuat  :   <?php echo $pesanan['created_at'] ?><br>
Status                  :   <?php if ($pesanan['status'] == 1) {
                                echo 'Menunggu';
                            } else {
                                echo 'Selesai';
                            } ?><br>
                                        </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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