<x-web>

    @include('menu.menu')

    <div class="transition-none">
        <section class="title-hero-bg parallax-effect"
            style="background-image: url({{ url('public') }}/assets/images/logo-putih.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="all-padding-0 text-center">
                            <img src="{{ url('public') }}/assets/images/logo-putih.png" alt=""
                                style="width:100%; height:auto; object-fit: cover; ">
                        </div>
                    </div>
                </div>

            </div>
        </section>
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
