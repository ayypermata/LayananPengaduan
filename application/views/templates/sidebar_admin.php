<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-comment-alt-exclamation"></i>
        </div>
        <div class="sidebar-brand-text mx-9">ADMINISTATOR</div>
    </a>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Layanan
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Administrator</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaduan
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('admin/laporan'); ?>">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Laporan Pengaduan</span>
        </a>
    </li>
    <!-- Heading -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Status Pengaduan
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Status Pengaduan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/laporan_belumdiproses'); ?>">Belum Diproses</a>
                <a class="collapse-item" href="<?= base_url('admin/laporan_proses'); ?>">Proses</a>
                <a class="collapse-item" href="<?= base_url('admin/laporan_selesai'); ?>">Selesai</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <!-- Divider -->
    <div class="sidebar-heading">
        Penanganan Pengaduan
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collaps3" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-print"></i>
            <span>Penangan Pengaduan</span>
        </a>
        <div id="collaps3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('kriteriac/data_kriteria'); ?>">Kriteria</a>
                <a class="collapse-item" href="<?= base_url('alternatifc/data_alternatif'); ?>">Alternatif</a>
                <a class="collapse-item" href="<?= base_url('wpc/data_wp'); ?>">Metode Weight Product</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('admin/hasil_kuisioner'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Hasil Kuisioner</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <!-- Divider -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-print"></i>
            <span>Cetak</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/cetak'); ?>">Laporan Pengaduan</a>
                <a class="collapse-item" href="">Hasil Kuisioner</a>
            </div>
        </div>
    </li>



    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        My Profile
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="">
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