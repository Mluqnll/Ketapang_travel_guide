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
                        <img src="{{ url('public/web') }}/assets/images/a.jpg" alt=""
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
                <div class="col-md-12  col-xs-12 xs-mb-50">
                    <div class="row">
                        <div class="col-md-12  col-sm-12 col-xs-12 mb-50">
                            <ul class="single-blog-list">
                                <li>
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <div class="date-box dark-bg">
                                                <span class="day">{{ $kalender_wisata->tahun }}</span>
                                            </div>
                                            <div class="item"><img class="img-responsive"
                                                    style="width:100%; height:100%; object-fit: cover"
                                                    src="{{ url("public/$kalender_wisata->foto") }}"
                                                    alt="" /></div>
                                            {{-- <div class="item"><img class="img-responsive" src="{{url('public')}}/assets-web/images/post/post-06.jpg" alt=""/></div> --}}
                                        </div>
                                        <p class="text-right">Sumber Foto : <em>{{ $kalender_wisata->sumber_foto }}</em></p>
                                        <div class="post-text">
                                            <h3>{{ $kalender_wisata->nama }}</h3>
                                            <p>
                                                {!! nl2br($kalender_wisata->deskripsi) !!}
                                            </p>
                                        </div>
                                    </div>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-web>
