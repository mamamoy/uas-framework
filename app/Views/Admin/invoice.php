<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">
                        Pendaftaran Servis &amp; Pembelian Suku Cadang
                        <button type="button" class="btn btn-primary float-end">Print</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="h3">SI BENGKEL</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="h3"><?= $pesanan['nama_pelanggan']; ?></p>
                            </div>

                            <div class="col-12 my-5">
                                <h1>Struk Pembayaran</h1>
                                <p>Tanggal : <?= $pesanan['created_at']; ?></p>
                            </div>

                            <table class="table table-transparent table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 1%"></th>
                                        <th>Jenis Layanan</th>
                                        <th class="text-end" style="width: 20%">Keterangan</th>
                                        <th class="text-end" style="width: 20%">Harga</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td><?php if ($pesanan['jenis_pelayanan'] == 1) {
                                            echo 'Servis';
                                        } else {
                                            echo 'Servis dan pembelian suku cadang';
                                        } ?></td>
                                    <td class="text-end"><?= $pesanan['keterangan']; ?></td>
                                    <td class="text-end">Rp. 50.000</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="fw-bold text-end">Subtotal</td>
                                    <td class="text-end">Rp. 50.000</td>
                                </tr>
                            </table>

                            <p class="text-muted text-center mt-5">Terima kasih telah percaya dengan layanan kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>