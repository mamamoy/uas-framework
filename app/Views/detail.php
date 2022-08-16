<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Detail Pemesanan
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