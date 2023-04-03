<x-web>


    @include('menu.menu')

    {{-- <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: {{url('public/web/assets/images/a.jpg')}};">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                        style="width:100%; height:auto; object-fit: cover; ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
                                <h3 style="color: white; font-weight:10px; margin-top:45vh"></h3>
                                <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                    style="width:50%; height:auto; object-fit: cover; ">
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
                                    <img class="img-responsive" style="width:100% ; height:200%; object-fit: cover"
                                        src="{{ url("public/$atraksi_wisata->foto") }}" alt="" />
                                </div>
                            </div>
                            <div class="post-text">
                                <a href="{{ url("atraksiwisata/$atraksi_wisata->id") }}">{{ $atraksi_wisata->nama }}</a>
                            </div>
                            <hr class="grey-bg">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-web>
