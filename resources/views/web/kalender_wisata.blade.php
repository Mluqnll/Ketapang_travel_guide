<x-web>
    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(assets/images/slides/home-bg-2.jpg);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <h4 class="text-uppercase letter-spacing-5 white-color">HTML5 Video Background
                                    </h4>
                                    <h1 class="font-800 letter-spacing-10 text-uppercase font-80px primary-color">
                                        Digital Studio</h1>
                                    <h5 class="text-uppercase letter-spacing-5 white-color">One Page, ultra
                                        flexible, responsive HTML5 template.</h5>
                                    <p class="mt-30">
                                        <a href="#" class="btn btn-lg btn-primary-outline btn-square">Our
                                            Feature</a>
                                    </p>
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
                <div class="col-md-4 pricing-table col-sm-4 mt-50">
                    <div class="date-box dark-bg text-center">
                        <h1><span style="color: white; text-transform: uppercase;" class="day">Januari</span></h1>
                    </div>
                    <div class="pricing-box pricing-box-bg  wow fadeInLeft" data-wow-delay="0.1s">

                        <div class="select-menu">

                            {{-- @foreach ($list_kalender_wisata->where('bulan', 'Januari') as $kalender_wisata) --}}
                            {{-- <li class="option">
                                <a href="{{ url('KalenderWisata', $kalender_wisata->id) }}">
                                    <h6 style="font-size: 14px; text-transform: capitalize;">
                                        {{ $kalender_wisata->nama }} <span style="color: rgb(136, 136, 136)"></span>
                                    </h6>
                                </a>
                            </li> --}}
                            {{-- @endf  oreach --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>
