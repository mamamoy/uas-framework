<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">Riwayat Transaksi Pelanggan</div>
                    <div class="card-body">
                        <p>Data dibawah menunjukkan riwayat transaksi yang telah dilakukan oleh pelanggan.</p>
                        <div class="table-responsive">
                            <table class="table border mb-0">
                                <thead class="table-light fw-semibold">
                                    <tr class="align-middle">
                                        <th class="text-center">No</th>
                                        <th>Nama Pelanggan</th>
                                        <th class="text-center">Tanggal</th>
                                        <th>Jenis Pelayanan</th>
                                        <th class="text-center">Biaya</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td class="text-center">1</td>
                                        <td>Yiorgos Avraamu</td>
                                        <td class="text-center">2019-02-12</td>
                                        <td>Servis | Pembelian Suku Cadang</td>
                                        <td class="text-center">Rp. 386.000,-</td>
                                        <td>Servis</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">2</td>
                                        <td>Avram Tarasios</td>
                                        <td class="text-center">2019-02-25</td>
                                        <td>Servis | Pembelian Suku Cadang</td>
                                        <td class="text-center">Rp. 416.000,-</td>
                                        <td>Selesai</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">3</td>
                                        <td>Quintin Ed</td>
                                        <td class="text-center">2019-02-01</td>
                                        <td>Pembelian Suku Cadang</td>
                                        <td class="text-center">Rp. 220.000,-</td>
                                        <td>Selesai</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">4</td>
                                        <td>Enéas Kwadwo</td>
                                        <td class="text-center">2019-01-23</td>
                                        <td>Servis</td>
                                        <td class="text-center">Rp. 50.000,-</td>
                                        <td>Selesai</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">5</td>
                                        <td>Agapetus Tadeáš</td>
                                        <td class="text-center">2018-12-10</td>
                                        <td>Servis | Pembelian Suku Cadang</td>
                                        <td class="text-center">Rp. 1.016.000,-</td>
                                        <td>Selesai</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">6</td>
                                        <td>Friderik Dávid</td>
                                        <td class="text-center">2018-11-01</td>
                                        <td>Servis | Pembelian Suku Cadang</td>
                                        <td class="text-center">Rp. 320.000,-</td>
                                        <td>Selesai</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
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