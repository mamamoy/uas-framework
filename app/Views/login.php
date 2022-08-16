<?= $this->extend('templates/unloggin/index.php'); ?>

<?= $this->section('page-content'); ?>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-medium-emphasis">Masuk ke akun anda</p>
                            <?php $validation = \Config\Services::validation(); ?>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->get('danger')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->get('danger'); ?>
                                    <?php if (session()->get('resetlink')) {
                                        echo session()->get('resetlink');
                                    } ?>
                                </div>
                            <?php endif; ?>
                            <form class="" action="/login" method="post">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                        </svg></span>
                                    <input class="form-control" type="email" placeholder="Email Anda" name="email" id="email" value="<?= set_value('email') ?>">
                                </div>
                                <?php if ($validation->getError('email')) { ?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError('email'); ?>
                                    </div>
                                <?php } ?>
                                <div class="input-group mb-4"><span class="input-group-text">
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
                                <?php if ($config->rememberMe) : ?>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" value="1">
                                        <label class="form-check-label" for="rememberme">Remember Me</label>
                                    </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-link px-0" type="button">Lupa password?</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card col-md-5 text-white bg-primary py-5">
                        <div class="card-body text-center">
                            <div>
                                <h2>Daftar</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="btn btn-lg btn-outline-light mt-3" role="button" href="/register">Registrasi Sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>