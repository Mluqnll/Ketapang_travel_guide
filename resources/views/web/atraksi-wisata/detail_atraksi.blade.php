<x-web>

    @include('menu.menu')

    <div class="transition-none">
        <section class="title-hero-bg parallax-effect"
            style="background-image: url({{ url('public') }}/assets/images/logo-putih.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="all-padding-0 text-center">
                            <img src="{{ url('public') }}/assets/images/logo-putih.png" alt=""
                                style="width:100%; height:auto; object-fit: cover; ">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 xs-mb-50">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="single-blog-list">
                                <li>
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <h3 style="font-weight: 600;">{{ $atraksi_wisata->nama }}</h3>
                                            <div class="item"><img class="img-responsive"
                                                    src="{{ url("public/$atraksi_wisata->foto") }}"
                                                    style="width: 100%; height: 50%; object-fit: cover"
                                                    alt="" /></div>
                                        </div>
                                        <p class="text-right">Sumber Foto : <em>{{ $atraksi_wisata->sumber_foto }}</em></p>
                                        <div class="post-text text-left">

                                            <p>
                                                {!! nl2br($atraksi_wisata->deskripsi) !!}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--== Post End ==-->
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar_widget widget_archive ">
                        <h5 class="aside-title">Informasi</h5>
                        <ul>
                            <li><a style="color: black">Alamat</a> : <span>{{ $atraksi_wisata->alamat }}</span></li>
                            <li><a style="color: black">Destinasi Wisata</a> : <span>{{ $atraksi_wisata->atraksi }}</span></li>
                            <li><a style="color: black">Nama Pengelola</a> : <span>{{ $atraksi_wisata->nama_pengelola }}</span></li>
                            <li><a style="color: black">Nomor Pengelola</a> : <span>{{ $atraksi_wisata->no_pengelola }}</span></li>
                            <li><a style="color: black">Hari Buka</a> : <span>{{ $atraksi_wisata->hari_buka }}</span></li>
                            <li><a style="color: black">Jam Buka</a> : <span>{!! date('H:i', strtotime($atraksi_wisata->jam_buka)) !!} - {!! date('H:i', strtotime($atraksi_wisata->jam_tutup)) !!}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar_widget widget_recent_post mb-50 col-md-3 col-sm-3 col-xs-12">
                    <h5 class="aside-title">Atraksi Wisata Terkait</h5>

                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="{{ url("atraksiwisata/$atraksi_wisata->id") }}"><img width="75" height="75"
                                        src="{{ url("public/$atraksi_wisata->foto") }}" style="object-fit:cover"
                                        class="img-responsive" alt="post-01" /></a>
                            </div>
                            <div class="post-body">
                                <span class="font-18px"><a
                                        href="{{ url("atraksiwisata/$atraksi_wisata->id") }}">{{ $atraksi_wisata->nama }}</a></span>
                                <div class="post-time">{{ $atraksi_wisata->created_at->diffForHumans() }}</div>
                                <a href="{{ url('web.atraksi-wisata.atraksi_wisata') }}"
                                    class="subtitle">{{ $atraksi_wisata->kategori->nama }}</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>



    </section>
</x-web>
