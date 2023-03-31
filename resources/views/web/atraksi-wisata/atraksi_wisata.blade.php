<x-web>


    @include('menu.menu')
    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/assets/images/a.jpg);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public') }}/assets/images/logo-putih.png" alt=""
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
                                <a href="{{url("atraksiwisata/$atraksi_wisata->id")}}">{{$atraksi_wisata->nama}}</a>
                            </div>
                            <hr class="grey-bg">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-web>
