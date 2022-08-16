<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Historis Layanan</div>
                    <div class="card-body">
                        <p>Data dibawah menunjukkan data historis layanan yang pernah dilakukan.</p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="daftar">
                                <thead class="table-light fw-semibold">
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Jenis Pelayanan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pesanan as $key => $p) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $p['created_at'] ?></td>
                                            <td><?= $p['nama_pelanggan'] ?></td>
                                            <td><?php if ($p['jenis_pelayanan'] == 1) {
                                                    echo 'Servis';
                                                } else {
                                                    echo 'Servis & pembelian suku cadang';
                                                } ?></td>
                                            <td><?php if ($p['status'] == 1) {
                                                    echo 'Menunggu';
                                                } else {
                                                    echo 'Selesai';
                                                } ?></td>
                                            <td class="text-end">
                                                <a type="button" class="btn btn-outline-primary" href="<?= base_url('/detail/' . $p['id']) ?>">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>