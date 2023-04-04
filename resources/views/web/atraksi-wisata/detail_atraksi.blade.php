<x-web>

    @include('menu.menu')

    <div class="remove-padding transition-none" id="home">
        <div id="rev_slider_1078_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
            data-alias="classic4export" data-source="gallery"
            style="margin:0px auto;background-color:#000000;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="slotfade-vertical" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title=""
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('public/web') }}/assets/images/d.jpg" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="hero-text-wrap">
                            <center>
                                <h3 style="color: white; font-weight:10px; margin-top:45vh"></h3>
                                <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                    style="width:50%; height:auto; object-fit: cover; ">
                            </center>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);">
            </div>
        </div>
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
                            <li><a style="color: black">Alamat</a> : <span>{{ $atraksi_wisata->alamat }}</span></li>
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
