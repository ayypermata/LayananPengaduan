<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-comment-alt-exclamation"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Layanan Pengaduan</div>
    </a>

    <!-- Divider sama GARIS -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Layanan
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaduan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('user/lapor'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Lapor Pengaduan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('user/laporan'); ?>">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Laporan Pengaduan</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('user/laporan_selesai'); ?>">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Laporan Selesai</span>
        </a>
    </li>
    <!-- Divider -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('user/kuisioner'); ?>">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Kuisioner</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        My Profile
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/index'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?> ">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->