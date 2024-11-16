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
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/DosenTeknisi') }}" class="nav-link {{ ($activeMenu == 'dashboard')?
'active' : '' }} ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
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
                        <a href="{{ url('/dtDaftarMahasiswaAlpha') }}" class="nav-link {{ ($activeMenu == 'dtDMAlpha')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Mahasiswa Alpha</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/dtDaftarMahasiswaKompen') }}" class="nav-link {{ ($activeMenu == 'dtDMKompen')?
'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Mahasiswa Kompen</p>
                        </a>
                    </li>
                </ul>
            <li class="nav-item">
                <a href="{{ url('/dtManageKompen') }}" class="nav-link {{ ($activeMenu == 'dtManageKompen')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Manage Kompen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dtUpdateKompen') }}" class="nav-link {{ ($activeMenu =='dtUpdateKompen')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Update Kompen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('logout')}}" class="btn btn-sm btn-danger">Logout</a>
            </li>
        </ul>
    </nav>
</div>