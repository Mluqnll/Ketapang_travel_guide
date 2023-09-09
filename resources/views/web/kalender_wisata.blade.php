<x-web>

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/a.JPG);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/slebew.png" alt="">
                                    <img src="{{ url('public/web') }}/assets/images/tiga.png" alt="">
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
                            <h2><span style="color: white; text-transform: uppercase;">
                                    {{ $bulan->nama }}</span> </h2>
                        </div>

                        <div class="pricing-box pricing-box-bg  wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="select-menu">
                                <li class="option">
                                    @foreach ($list_kalender_wisata as $kalender_wisata)
                                        @if ($kalender_wisata->id_bulan == $bulan->id)
                                            <a href=""data-toggle="modal"
                                                data-target="#Kalender{{ $kalender_wisata->id }}"><h6 style="font-size: 14px; text-transform: capitalize;">
                                                    {{ $kalender_wisata->nama }} <span
                                                        style="color: rgb(179, 30, 30)"></span>
                                                </h6></a>
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

@foreach ($list_kalender_wisata as $kalender_wisata)
    <div class="modal fade" id="Kalender{{ $kalender_wisata->id }}" tabindex="-1" role="dialog"
        aria-labelledby="Kalender{{ $kalender_wisata->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="img-responsive" src="{{ url("public/$kalender_wisata->foto") }}"
                        style="width: 100%; height: 50%; object-fit: cover" alt="" />
                    <p class="text-right">Sumber Foto :
                        <em>{{ $kalender_wisata->sumber_foto }}</em>
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="single-blog-list">
                        <li>
                            <div class="post-wrap">
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
@endforeach
