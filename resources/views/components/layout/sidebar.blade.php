

<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="dashboard/crm-index.html" class="logo">
            <span>
                <img src="{{ url('public/admin') }}/assets/images/logo.png" alt="logo-small" class="logo-sm">
            </span>

        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">

            <x-layout.sidebar.menu-item url="admin" label="Dashboard" icon="fa fa-home" />
            <x-layout.sidebar.menu-item url="admin/pengelola" label="Pengelola" icon="fa fa-user" />
            <x-layout.sidebar.menu-item url="admin/desa-wisata" label="Desa Wisata" icon="fa fa-globe" />
            <x-layout.sidebar.menu-item url="admin/atraksi-wisata" label="Atrakasi Wisata" icon="fa fa-copy" />
            <x-layout.sidebar.menu-item url="admin/kalender-wisata" label="Kalender Wisata"
                icon="fa fa-calendar" />
            <x-layout.sidebar.menu-item url="admin/kategori" label="Kategori" icon="fa fa-list" />
            <x-layout.sidebar.menu-item url="admin/kontak" label="Kontak" icon="fa fa-phone" />
            <x-layout.sidebar.menu-item url="admin/detail-web" label="Detail" icon="fa fa-info" />

        </ul>

    </div>
</div>
