<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <?php
        if (session()->getFlashData('success')) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashData('success') ?>
                
            </div>
        <?php
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a type="button" class="btn btn-primary" href="<?= base_url('stockBarangCreate') ?>">
                            Add Barang
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($stocks as $key => $stock) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $stock['kode_barang'] ?></td>
                                            <td><?= $stock['nama_barang'] ?></td>
                                            <td><?= $stock['harga'] ?></td>
                                            <td><?= $stock['stok_barang'] ?></td>
                                            <td>
                                                <a type="button" class="btn btn-warning text-white" href="<?= base_url('stockBarangEdit/' . $stock['id']) ?>">
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

<?= $this->section('footerScript'); ?>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<?= $this->endSection(); ?>