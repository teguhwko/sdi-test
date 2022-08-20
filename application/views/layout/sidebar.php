<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <span class="text-center">
        <center>
            <img src="<?= base_url('gambar/logo.JPG') ?>" alt="AdminLTE Logo" style="width: 6rem;"></span>
        </center>    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $this->session->userdata('photo') ? base_url('gambar/' . $this->session->userdata('photo')) : base_url('gambar/') . 'default-user.jpg' ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $group == 'Dashboard' ? 'active' : '' ?>">
                       <i class="fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview <?= $group == 'Barang' || $group == 'Kondisi Barang' || $group == 'Jabatan' || $group == 'Karyawan' || $group == 'User' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $group == 'Barang' || $group == 'Kondisi Barang' || $group == 'Jabatan' || $group == 'Karyawan' || $group == 'User' ? 'active' : '' ?>">
                       <i class="far fa-list-alt"></i>
                        <p>
                            Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Barang') ?>" class="nav-link <?= $group == 'Barang' ? 'active' : '' ?>">
                                <i class="far fa-circle"></i>
                                <p>Data Barang</p>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('role') == 'admin') { ?>
                            <li class="nav-item">
                                <a href="<?= base_url('Jabatan') ?>" class="nav-link <?= $group == 'Jabatan' ? 'active' : '' ?>">
                                   <i class="far fa-circle"></i>
                                    <p>Data Jabatan</p>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a href="<?= base_url('Karyawan') ?>" class="nav-link <?= $group == 'Karyawan' ? 'active' : '' ?>">
                                <i class="far fa-circle"></i>
                                <p>Data Karyawan</p>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('role') == 'admin') { ?>
                            <li class="nav-item">
                                <a href="<?= base_url('User') ?>" class="nav-link <?= $group == 'User' ? 'active' : '' ?>">
                                   <i class="far fa-circle"></i>
                                    <p>User</p>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
				
			

                <li class="nav-item has-treeview <?= $group == 'Peminjaman' || $group == 'Pengembalian' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $group == 'Peminjaman' || $group == 'Pengembalian' ? 'active' : '' ?>">
                     <i class="fab fa-codepen"></i>
                        <p>
                            Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Peminjaman') ?>" class="nav-link <?= $group == 'Peminjaman' ? 'active' : '' ?>">
                               <i class="far fa-circle"></i>
                                <p>Data Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Pengembalian') ?>" class="nav-link <?= $group == 'Pengembalian' ? 'active' : '' ?>">
                               <i class="far fa-circle"></i>
                                <p>Data Pengembalian</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?= $group == 'Laporan Peminjaman' || $group == 'Laporan Pengembalian' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $group == 'Laporan Peminjaman' || $group == 'Laporan Pengembalian' ? 'active' : '' ?>">
                     <i class="far fa-file-pdf"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('LaporanPeminjaman') ?>" class="nav-link <?= $group == 'Laporan Peminjaman' ? 'active' : '' ?>">
                                 <i class="far fa-circle"></i>
                                <p>Data Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('LaporanPengembalian') ?>" class="nav-link <?= $group == 'Laporan Pengembalian' ? 'active' : '' ?>">
                                 <i class="far fa-circle"></i>
                                <p>Data Pengembalian</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Profile') ?>" class="nav-link <?= $group == 'Profile' ? 'active' : '' ?>">
                      <i class="far fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>