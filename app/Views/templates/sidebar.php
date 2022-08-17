<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?= base_url(); ?>/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="<?= base_url(); ?>/assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <?php if (session()->get('role') == 1) : ?>
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <svg class="nav-icon">
                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                    </svg> Dashboard
                    <!-- <span class="badge badge-sm bg-info ms-auto">NEW</span> -->
                </a>
            </li>
            <li class="nav-title">Halaman</li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <svg class="nav-icon">
                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg> Profil
                </a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <svg class="nav-icon">
                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                    </svg> Dashboard
                    <!-- <span class="badge badge-sm bg-info ms-auto">NEW</span> -->
                </a>
            </li>
        <?php endif; ?>
        <li class="nav-title">Layanan</li>
        <?php if (session()->get('role') == 2) : ?>
            <li class="nav-item"><a class="nav-link text-wrap" href="/servis">
                    <svg class="nav-icon">
                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-cart"></use>
                    </svg> Servis &amp; Pembelian Suku Cadang</a>
            </li>
        <?php else : ?>
            <li class="nav-item"><a class="nav-link text-wrap" href="/stockBarang">
                    <svg class="nav-icon">
                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-storage"></use>
                    </svg> Stock Barang</a>
            </li>
            <li class="nav-item"><a class="nav-link text-wrap" href="/admin/user_menu">
                    <svg class="nav-icon">
                        <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                    </svg> User List</a>
            </li>
        <?php endif; ?>

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>