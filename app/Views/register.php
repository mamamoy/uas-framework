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
                        <?php $validation = \Config\Services::validation(); ?>

                        <form class="" action="register" method="post">
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                    </svg></span>
                                <input class="form-control" type="text" placeholder="Nama Depan" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
                            </div>
                            <?php if ($validation->getError('firstname')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('firstname'); ?>
                                </div>
                            <?php } ?>
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                    </svg></span>
                                <input class="form-control" type="text" placeholder="Nama Belakang" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
                            </div>
                            <?php if ($validation->getError('lastname')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('lastname'); ?>
                                </div>
                            <?php } ?>
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                    </svg></span>
                                <input class="form-control" type="text" placeholder="Email Anda" name="email" id="email" value="<?= set_value('email') ?>">
                            </div>
                            <?php if ($validation->getError('email')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php } ?>
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                    </svg></span>
                                <input class="form-control" type="password" placeholder="Password Anda" name="password" id="password" value="">
                            </div>
                            <?php if ($validation->getError('password')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('password'); ?>
                                </div>
                            <?php } ?>
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                    </svg></span>
                                <input class="form-control" type="password" placeholder="Ulangi Password Anda" name="password_confirm" id="password_confirm" value="">
                            </div>
                            <?php if ($validation->getError('password_confirm')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('password_confirm'); ?>
                                </div>
                            <?php } ?>
                            <button class="btn btn-block btn-success" type="submit">Buat Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>