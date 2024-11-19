<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'index']); ?>" class="brand-link">
            <!--begin::Brand Image-->
            <img src="<?= $this->Url->build('/img/AdminLTELogo.png'); ?>" alt="AppKas" class="brand-image opacity-75 shadow">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AppKas</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <?php if($userLogin['Auth']->status == "admin") {?>
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p> Beranda <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Groups', 'action' => 'index']); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'index']); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Tabungan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p> Laporan Keuangan <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'income']); ?>" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Kas Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'outcome']); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Kas Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'perStudent']); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Laporan per Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php } else {?>
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p> Laporan Keuangan <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'income']); ?>" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Kas Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'outcome']); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Kas Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(['controller' => 'Savings', 'action' => 'perStudent']); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Laporan per Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php }?>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
