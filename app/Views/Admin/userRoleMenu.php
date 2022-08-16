<?php $uri = service('uri') ?>
<?php $this->config = config('Auth');
$redirect = $this->config->assignRedirect; ?>
<?= $i = 1; ?>
<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Daftar User</div>
                    <div class="card-body">
                        <p>Data dibawah menunjukkan data user yang telah terdaftar.</p>
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table table-hover" id="daftar">
                                <thead class="table-light fw-semibold">
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $u) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td class="text-center"><?php echo $u['firstname'] . ' ' . $u['lastname']; ?></td>
                                            <td class="text-center"><?php echo $u['email']; ?></td>
                                            <td class="text-center"><?php echo $u['role']; ?></td>
                                            <td class="text-end"><a href="/superadmin/user_menu/<?= $u['id']; ?>" class="btn btn-outline-primary" role="button" aria-disabled="true">
                                                    <svg class="icon text-wrap">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                                    </svg>
                                                    Pengaturan
                                                </a></td>
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