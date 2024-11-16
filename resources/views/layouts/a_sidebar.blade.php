<head>
    <style>
        .sidebar {
            background-color: #0E1F43;
        }
    </style>
</head>
<div class="sidebar">
    <!-- Profile Menu -->
    <div class="user-panel mt-3 pb-3 d-flex">
        <div class="image">
            <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" alt="user" class="img-circle elevation-2">
        </div>
        <div class="info">
            <li class="nav" style="color: white;">
                <p>Moch. Nadhif Alkautsar</p>
            </li>
            <li class="nav">
                <a href="/" class="btn btn-block btn-sm btn-primary">Edit Profile</a>
            </li>
        </div>
    </div>
    <!-- End Profile Menu -->
    <!-- Sidebar Menu -->
    < class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/Admin') }}" class="nav-link {{ ($activeMenu == 'dashboard')?
'active' : '' }} ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Users
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/aAdminDosenTeknisi') }}" class="nav-link {{ ($activeMenu == 'aUserADT')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Admin/Dosen/Teknisi</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ url('/aMahasiswa') }}" class="nav-link {{ ($activeMenu == 'aUserMahasiswa')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Mahasiswa</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Daftar Mahasiswa
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ url('/aDaftarMahasiswaAlpha') }}" class="nav-link {{ ($activeMenu == 'aDMAlpha')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Mahasiswa Alpha</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ url('/aDaftarMahasiswaKompen') }}" class="nav-link {{ ($activeMenu == 'aDMKompen')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Mahasiswa Kompen</p>
                    </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Daftar Tugas
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ url('/aDaftarTugasDosen') }}" class="nav-link {{ ($activeMenu == 'aDTDosen')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dosen</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ url('/aDaftarTugasTeknisi') }}" class="nav-link {{ ($activeMenu == 'aDTTeknisi')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Teknisi</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ url('/aDaftarTugasAdmin') }}" class="nav-link {{ ($activeMenu == 'aDTAdmin')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ url('/aManageBidangKompetensi') }}" class="nav-link {{ ($activeMenu == 'aManageBidKom')? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Manage Bidang Kompetensi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/aManageDataMahasiswaKompen') }}" class="nav-link {{ ($activeMenu =='aManageDaMaKom')? 'active' : 'aManageDaMaKom' }} ">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Manage Data Mahasiswa Kompen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/aManageKompen') }}" class="nav-link {{ ($activeMenu =='aManageKompen')? 'active' : 'aManageKompen' }} ">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Manage Kompen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/aUpdateKompenSelesai') }}" class="nav-link {{ ($activeMenu =='aUpdateKompen')? 'active' : 'aUpdateKompen' }} ">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Update Kompen Selesai</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('logout')}}" class="btn btn-sm btn-danger">Logout</a>
            </li>
        </ul>
        </nav>
</div>