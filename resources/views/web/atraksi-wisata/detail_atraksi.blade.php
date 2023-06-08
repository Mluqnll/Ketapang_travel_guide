<x-web>

    @include('menu.menu')

    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image="{{ url('public/web') }}/assets/images/d.jpg" data-parallax-speed="0.5"
        data-parallax-direction="up">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centerize-col text-center">
                    <h5 class="font-50px white-color font-800 wow fadeInUp" data-wow-delay="0.1s"><span
                            class="font-100">Ketapang Travel Guide</span></h5>
                </div>
            </div>
    </section>

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
                                        <p class="text-right">Sumber Foto :
                                            <em>{{ $atraksi_wisata->sumber_foto }}</em>
                                        </p>
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
                            <li><a style="color: black">Alamat</a> :
                            </li>
                            <span>{{ $atraksi_wisata->alamat }}</span>
                            <li>
                            </li>
                            <li><a style="color: black">Destinasi Wisata</a> :
                                <span>{{ $atraksi_wisata->atraksi }}</span>
                            </li>
                            <li><a style="color: black">Nama Pengelola</a> :
                                <span>{{ $atraksi_wisata->nama_pengelola }}</span>
                            </li>
                            <li><a style="color: black">Nomor Pengelola</a> :
                                <span>{{ $atraksi_wisata->no_pengelola }}</span>
                            </li>
                            <li><a style="color: black">Hari Buka</a> :
                                <span>{{ $atraksi_wisata->hari_buka }}</span>
                            </li>
                            <li><a style="color: black">Jam Buka</a> : <span>{!! date('H:i', strtotime($atraksi_wisata->jam_buka)) !!} -
                                    {!! date('H:i', strtotime($atraksi_wisata->jam_tutup)) !!}</span></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="sidebar_widget widget_recent_post mb-50 col-md-3 col-sm-3 col-xs-12">
                    <h5 class="aside-title">Atraksi Wisata Terkait</h5>
                    @foreach ($recent_wisata as $atraksiwisata)
                        <div class="post-item">
                            <div class="post-thumb">
                                <img width="75" height="75" src="{{ url("public/$atraksi_wisata->foto") }}"
                                    style="object-fit:cover" class="img-responsive" alt="" />
                            </div>
                            <div class="post-body">
                                <span class="font-15px"><a
                                        href="{{ url("atraksi-wisata/$atraksi_wisata->id") }}">{{ $atraksi_wisata->nama }}</a></span>
                                <div class="post-time">{{ $atraksi_wisata->created_at->format('d F Y') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </section>
</x-web>
