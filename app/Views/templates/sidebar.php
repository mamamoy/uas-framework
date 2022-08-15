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
        <li class="nav-item">
            <a class="nav-link" href="/">
                <svg class="nav-icon">
                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                </svg> Dashboard
                <!-- <span class="badge badge-sm bg-info ms-auto">NEW</span> -->
            </a>
        </li>
        <li class="nav-title">Halaman</li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <svg class="nav-icon">
                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg> Profil
            </a>
        </li>
        <li class="nav-title">Layanan</li>
        <li class="nav-item"><a class="nav-link text-wrap" href="/servis">
                <svg class="nav-icon">
                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-cart"></use>
                </svg> Servis &amp; Pembelian Suku Cadang</a>
        </li>
        <li class="nav-item"><a class="nav-link text-wrap" href="/stockBarang">
                <svg class="nav-icon">
                    <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-cart"></use>
                </svg> Stock Barang</a>
        </li>

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>