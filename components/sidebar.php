<aside class="main-sidebar sidebar-dark-gray elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="assets/dist/img/dinus.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Poliklinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b><?php echo $username ?></b></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                
                    <?php
                        if($_SESSION['akses'] == "admin"){
                            echo '<li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-th "></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left fa-solid"></i> -->
                                    <span class="right badge badge-light">Admin</span>
                                </p>
                            </a> 
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="dokter.php" class="nav-link">
                                    <i class="fas fa-solid fa-user-nurse nav-icon"></i>
                                    <p>
                                        Dokter
                                        <span class="right badge badge-light">Admin</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="poli.php" class="nav-link">
                                    <i class="fas fa-solid fa-hospital nav-icon"></i>
                                    <p>
                                        Poli
                                        <span class="right badge badge-light">Admin</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="obat.php" class="nav-link">
                                    <i class="fas fa-solid fa-pills nav-icon"></i>
                                    <p>
                                        Obat
                                        <span class="right badge badge-light">Admin</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pasien.php" class="nav-link">
                                    <i class="fas fa-solid fa-user nav-icon"></i>
                                    <p>
                                        Pasien
                                        <span class="right badge badge-light">Admin</span>
                                    </p>
                                </a>
                            </li>
                        </ul> 
                        </li>
                        <li class="nav-item">
                            <a href="pages/logout/logout.php" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Logout
                                    <span class="right badge badge-light">
                                        Admin
                                    </span>
                                </p>
                            </a>
                        </li>';
                        } else if($_SESSION['akses'] == "dokter") {
                            echo '<li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-th "></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left fa-solid"></i> -->
                                    <span class="right badge badge-success">Dokter</span>
                                </p>
                            </a> 
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="jadwalPeriksa.php" class="nav-link">
                                    <i class="fas fa-solid fa-notes-medical nav-icon"></i>
                                    <p>
                                        Jadwal Periksa
                                        <span class="right badge badge-success">Dokter</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="periksaPasien.php" class="nav-link">
                                    <i class="fas fa-solid fa-stethoscope nav-icon"></i>
                                    <p>
                                        Periksa Pasien
                                        <span class="right badge badge-success">Dokter</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="riwayatPasien.php" class="nav-link">
                                    <i class="fas fa-solid fa-receipt nav-icon"></i>
                                    <p>
                                        Riwayat Pasien
                                        <span class="right badge badge-success">Dokter</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link">
                                    <i class="fas fa-solid fa-user nav-icon"></i>
                                    <p>
                                        Profile
                                        <span class="right badge badge-success">Dokter</span>
                                    </p>
                                </a>
                            </li>
                        </ul> 
                        </li>
                        <li class="nav-item">
                            <a href="pages/logout/logout.php" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Logout
                                    <span class="right badge badge-success">
                                        Dokter
                                    </span>
                                </p>
                            </a>
                        </li>';
                        } else if($_SESSION['akses'] == "pasien") {
                            echo '<li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-th "></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left fa-solid"></i> -->
                                    <span class="right badge badge-primary">Pasien</span>
                                </p>
                            </a> 
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pendaftaranPoli.php" class="nav-link">
                                    <i class="fas fa-solid fa-stethoscope nav-icon"></i>
                                    <p>
                                        Daftar Poli
                                        <span class="right badge badge-primary">Pasien</span>
                                    </p>
                                </a>
                            </li>
                            </ul> 
                            </li>
                            <li class="nav-item">
                                <a href="pages/logout/logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>
                                        Logout
                                        <span class="right badge badge-primary">
                                            Pasien
                                        </span>
                                    </p>
                                </a>
                            </li>';
                        }
                    ?>
                    <!-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dokter.php" class="nav-link">
                                <i class="fas fa-solid fa-user-nurse nav-icon"></i>
                                <p>
                                    Dokter
                                    <span class="right badge badge-success">Admin</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="poli.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital nav-icon"></i>
                                <p>
                                    Poli
                                    <span class="right badge badge-success">Admin</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="obat.php" class="nav-link">
                                <i class="fas fa-solid fa-tablets nav-icon"></i>
                                <p>
                                    Obat
                                    <span class="right badge badge-success">Admin</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link">
                                <i class="fas fa-solid fa-user nav-icon"></i>
                                <p>
                                    Pasien
                                    <span class="right badge badge-success">Admin</span>
                                </p>
                            </a>
                        </li>
                    </ul> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>