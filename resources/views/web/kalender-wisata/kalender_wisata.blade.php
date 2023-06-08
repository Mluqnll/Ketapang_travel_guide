<x-web>

    @include('menu.menu')

    <div class="remove-padding transition-none" id="home">
        <div id="rev_slider_1078_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
            data-alias="classic4export" data-source="gallery"
            style="margin:0px auto; padding:0px;margin-top:0px;margin-bottom:0px;">
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

                        <!-- LAYER NR. 1 -->
                        <div class="hero-text-wrap">
                            <center>
                                <h3 style="color: white; font-weight:10px; margin-top:30vh"></h3>
                                {{-- <img src="{{ url('public/web') }}/assets/images/logo-putih.png" alt=""
                                    style="width:50%; height:auto; object-fit: cover; "> --}}
                                    <img  src="{{ url('public/web') }}/assets/images/tiga.png" style="width:70%; height:auto; object-fit: cover; alt=">
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
            <div class="row">
                @foreach ($list_bulan as $bulan)
                    <div class="col-md-4 pricing-table col-sm-4 mt-50">
                        <div class="date-box dark-bg text-center">
                            <h1><span style="color: white; text-transform: uppercase;">
                                    {{ $bulan->nama }}</span> </h1>
                        </div>

                        <div class="pricing-box pricing-box-bg  wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="select-menu">
                                <li class="option">
                                    @foreach ($list_kalender_wisata as $kalender_wisata)
                                    @if ($kalender_wisata->id_bulan == $bulan->id)
                                    <a href="{{url("kalender-wisata/$kalender_wisata->id")}}">
                                        <h6 style="font-size: 14px; text-transform: capitalize;">
                                            {{ $kalender_wisata->nama }} <span style="color: rgb(136, 136, 136)"></span>
                                        </h6>
                                    </a>
                                    @endif
                                    @endforeach
                                </li>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>
