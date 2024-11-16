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
                <a href="{{ url('/Mahasiswa') }}" class="nav-link {{ ($activeMenu == 'dashboard')?
'active' : '' }} ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/mLihatPilihKompen') }}" class="nav-link {{ ($activeMenu == 'mLihatPilihKompen')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Lihat dan Pilih Kompen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/mUpdateProgresTugasKompen') }}" class="nav-link {{ ($activeMenu == 'mUpdateProgresTugasKompen')? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Update Progres Tugas Kompen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/mUpdateKompenSelesai') }}" class="nav-link {{ ($activeMenu =='mUpdateKompenSelesai')? 'active' : '' }} ">
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