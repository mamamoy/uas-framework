<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
        </ul>
        <ul class="header-nav ms-auto">
        </ul>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <?php if (session()->get('role') == 1) : ?>
                            <img class="avatar-img" src="<?= base_url(); ?>/assets/img/avatars/admin_logo.png" alt="admin">
                        <?php else : ?>
                            <img class="avatar-img" src="<?= base_url(); ?>/assets/img/avatars/pelanggan_logo.png" alt="pelanggan">
                        <?php endif; ?>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">
                            Settings
                        </div>
                    </div>
                    <a class="dropdown-item" href="/logout">
                        <svg class="icon me-2">
                            <use xlink:href="<?= base_url(); ?>/assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</header>