<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Detail User
                        <?php if ($user['role'] == 1) : ?>
                            <button type="button" class="btn btn-info float-end pr-3" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
                                Ganti Role Sebagai Pelanggan
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ganti role sebagai pelanggan</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin merubah role user?</p>

                                            <form action="userRole/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                                                <?= csrf_field(); ?>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="role">Role</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="role" id="role" type="text" value="2">
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Terima</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <button type="button" class="btn btn-info float-end pr-3" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
                                Ganti Role Sebagai Admin
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ganti role sebagai pelanggan</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin merubah role user?</p>

                                            <form action="userRole/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                                                <?= csrf_field(); ?>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="role">Role</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="role" id="role" type="text" value="1">
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Terima</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <p>Data detail user yang telah dibuat.</p>
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Data User
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-coreui-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <pre>
Nama User               :   <?php echo $user['firstname'] . ' ' . $user['lastname'] ?><br>
Role                    :   <?php if ($user['role'] == 1) {
                                echo 'Admin';
                            } else {
                                echo 'Pelanggan';
                            } ?><br>
Tanggal User Dibuat     :   <?php echo $user['created_at'] ?><br>
                                        </pre>
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
    <?= $this->section('footerScript'); ?>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <?= $this->endSection(); ?>