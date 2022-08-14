<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Daftar Servis</div>
                    <div class="card-body">
                        <p>Data dibawah menunjukkan data pesanan servis yang telah dilakukan oleh pelanggan.</p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="daftar">
                                <thead class="table-light fw-semibold">
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Merk Kendaraan</th>
                                        <th>Jenis Pelayanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pesanan as $key => $p) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $p['created_at'] ?></td>
                                            <td><?= $p['nama_pelanggan'] ?></td>
                                            <td><?= $p['jenis_kendaraan'] ?></td>
                                            <td><?= $p['merk_kendaraan'] ?></td>
                                            <td><?= $p['jenis_pelayanan'] ?></td>
                                            <td>
                                                <a type="button" class="btn btn-default" href="<?= base_url('/terima/' . $p['id']) ?>">
                                                    Edit
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