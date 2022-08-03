<?= $this->extend('templates/unloggin/index.php'); ?>

<?= $this->section('page-content'); ?>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4 mx-4">
                    <div class="card-body p-4">
                        <h1>Registrasi</h1>
                        <p class="text-medium-emphasis">Buat akun baru</p>
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                </svg></span>
                            <input class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg></span>
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg></span>
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="input-group mb-4"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg></span>
                            <input class="form-control" type="password" placeholder="Repeat password">
                        </div>
                        <button class="btn btn-block btn-success" type="button">Buat Akun</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>