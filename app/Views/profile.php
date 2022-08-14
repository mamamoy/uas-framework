<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="/assets/img/avatars/1.jpg" alt="Profile" class="rounded-circle">
                        <h2>Nama</h2>
                        <h3>Pelanggan</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>
                    <div class="card-body pt-3">
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1077">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="profile-overview-tab" data-coreui-toggle="tab" data-coreui-target="#profile-overview" type="button" role="tab" aria-controls="profile-overview" aria-selected="true">Profile Overview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-coreui-toggle="tab" data-coreui-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Edit Profile</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="profile-overview" role="tabpanel" aria-labelledby="profile-overview-tab">
                                        <h5 class="card-title">About</h5>
                                        <p class="small fst-italic">tes</p>

                                        <h5 class="card-title">Profile Details</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8">tes</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Role</div>
                                            <div class="col-lg-9 col-md-8">role</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                                            <div class="col-lg-9 col-md-8">birth</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Country</div>
                                            <div class="col-lg-9 col-md-8">count</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">lala</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone</div>
                                            <div class="col-lg-9 col-md-8">phone</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">email</div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- Profile Edit Form -->
                                        <?php $validation = \Config\Services::validation(); ?>
                                        <?php if (session()->get('success')) : ?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <?= session()->get('success'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <form class="" action="profile" method="post">

                                            <div class="row mb-3">
                                                <label for="firstname" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="firstname" type="text" class="form-control" id="firstname" value="">
                                                </div>
                                                <?php if ($validation->getError('firstname')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('firstname'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="lastname" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="lastname" type="text" class="form-control" id="lastname" value="">
                                                </div>
                                                <?php if ($validation->getError('lastname')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('lastname'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="born" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="born" type="date" class="form-control" id="born" value="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <textarea name="about" class="form-control" id="about" style="height: 100px">about</textarea>
                                                </div>
                                                <?php if ($validation->getError('about')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('about'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="country" type="text" class="form-control" id="country" value="">
                                                </div>
                                                <?php if ($validation->getError('country')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('country'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="address" type="text" class="form-control" id="Address" value="">
                                                </div>
                                                <?php if ($validation->getError('address')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('address'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="phone" type="text" class="form-control" id="Phone" value="">
                                                </div>
                                                <?php if ($validation->getError('phone')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('phone'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="email" type="text" class="form-control" id="Email" value="">
                                                </div>
                                                <?php if ($validation->getError('email')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('email'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control" id="password" value="">
                                                </div>
                                                <?php if ($validation->getError('password')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('password'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password_confirm" class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password_confirm" type="password" class="form-control" id="password_confirm" value="">
                                                </div>
                                                <?php if ($validation->getError('password_confirm')) { ?>
                                                    <div class='alert alert-danger mt-2'>
                                                        <?= $error = $validation->getError('password_confirm'); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>