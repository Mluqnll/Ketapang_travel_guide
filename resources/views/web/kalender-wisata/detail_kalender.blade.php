<x-web>

    @include('menu.menu')

    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image="{{ url('public/web') }}/assets/images/a.jpg" data-parallax-speed="0.5"
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
                <div class="col-md-12  col-xs-12 xs-mb-50">
                    <div class="row">
                        <div class="col-md-12  col-sm-12 col-xs-12 mb-50">
                            <ul class="single-blog-list">
                                <li>
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <div class="date-box dark-bg">
                                                <span class="day">{{ $kalender_wisata->tanggal }}</span>
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
