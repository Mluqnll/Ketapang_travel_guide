<x-web>

    @include('menu.menu')
    
    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/a.jpg);">
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
    </section>

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
                                    <a href="{{url("kalenderwisata/$kalender_wisata->id")}}">
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
