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

                        <!-- LAYER NR. 1 -->
                        <div class="hero-text-wrap">
                            <center>
                                <h3 style="color: white; font-weight:10px; margin-top:30vh"></h3>
                                {{-- <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                    style="width:50%; height:auto; object-fit: cover; "> --}}
                                <img src="{{ url('public/web') }}/assets/images/tiga.png"
                                    style="width:70%; height:auto; object-fit: cover;" alt="">
                            </center>
                        </div>

                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);">
                </div>
            </div>
        </div>
    </div>

    <section class="white-bg" id="pricing">
        <div class="container">
            <div class="section-title wow fadeInUp text-center" data-wow-delay="0.1s">
                <strong style="font-size: 20px; font-weight:bold; color:grey">{{ $kategori->nama }} Di Kabupaten
                    Ketapang
                </strong>
                <hr class="center_line grey-bg">
            </div>
            <div class="row mt-50">
                @foreach ($list_atraksi_wisata as $atraksi_wisata)
                    <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="post-wrap">
                            <div class="post-img">
                                <div class="item">
                                    <img class="img-responsive" style="width:100% ; height:200px; object-fit: cover"
                                        src="{{ url("public/$atraksi_wisata->foto") }}" alt="" />
                                </div>
                            </div>
                            <div class="post-text">
                                <a href=""data-toggle="modal"
                                    data-target="#Atraksi{{ $atraksi_wisata->id }}">{{ $atraksi_wisata->nama }}</a>
                            </div>
                            <hr class="grey-bg">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>

@foreach ($list_atraksi_wisata as $atraksi_wisata)
    <div class="modal fade" id="Atraksi{{ $atraksi_wisata->id }}" tabindex="-1" role="dialog"
        aria-labelledby="Atraksi{{ $atraksi_wisata->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="img-responsive" src="{{ url("public/$atraksi_wisata->foto") }}"
                        style="width: 100%; height: 50%; object-fit: cover" alt="" />
                    <p class="text-right">Sumber Foto :
                        <em>{{ $atraksi_wisata->sumber_foto }}</em>
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="sidebar_widget widget_archive ">
                        <h5 class="aside-title">Informasi</h5>
                        <div class="col-md-6">
                            <ul>
                                <li><a style="color: black">Alamat</a> :
                                </li>
                                <span>{{ $atraksi_wisata->alamat }}</span>
                                <li>
                                </li>
                                <li><a style="color: black">Aktivitas</a> :
                                </li>
                                <span>{{ $atraksi_wisata->atraksi }}</span>
                                <li><a style="color: black">Pengelola</a> :
                                </li>
                                <span>{{ $atraksi_wisata->nama_pengelola }}</span>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a style="color: black">Nara Hubung</a> :
                                </li>
                                <span>{{ $atraksi_wisata->no_pengelola }}</span>
                                <li><a style="color: black">Hari Buka</a> :
                                </li>
                                <span>{{ $atraksi_wisata->hari_buka }}
                                <li><a style="color: black">Jam Buka</a> : </li>
                                <span>{!! date('H:i', strtotime($atraksi_wisata->jam_buka)) !!} - </span>
                                    {!! date('H:i', strtotime($atraksi_wisata->jam_tutup)) !!}</span>
                            </ul>
                        </div>
                        <h3 style="font-weight: 600;">{{ $atraksi_wisata->nama }}</h3>
                        <div class="post-text text-left">
                            <p style="text-align: justify">
                                {{ $atraksi_wisata->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
