<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full no-border corporate">

    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close"
            id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
        <div id="fullscreen-search-wrapper">
            <form method="get" id="fullscreen-searchform">
                <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input"
                    class="search-bar-top">
                <i class="fullscreen-search-icon icofont icofont-search">
                    <input value="" type="submit">
                </i>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                    class="tr-icon ion-android-menu"></i> </button>
            <div class="logo">
                <a href="index.html">
                    <img class="logo logo-display"src="{{ url('public/web') }}/assets/images/logo-putih.png"
                        style="width:100 object-fit:contain" alt="">
                    <img class="logo logo-scrolled" src="{{ url('public/web') }}/assets/images/logo-hitam.png"
                        style="width:100 object-fit:contain" alt="">
                </a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                <li><a class="page-scroll" href="{{ url('desawisata') }}">Desa Wisata</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle page-scroll" data-toggle="dropdown">
                        Atraksi Wisata
                    </a>
                    @yield('menu')
                </li>
                <li><a class="page-scroll" href="{{ url('kalenderwisata') }}">Kalender</a></li>
                <li><a class="page-scroll" href="{{ url('petawisata') }}">Peta Wisata</a></li>
                <li><a class="page-scroll" href="{{ url('kontakwisata') }}">Info & Kontak</a></li>
            </ul>
        </div>
    </div>

</nav>
