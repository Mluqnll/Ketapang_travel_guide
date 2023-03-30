<x-web>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @include('menu.menu')
    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home" style="background-image: url(public/assets/images/1.jpg);">
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
                    @if ($atraksi_wisata->id_kategori == $kategori->id)
                        <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <div class="item"><img class="img-responsive"
                                            style="width:100% ; height:200px; object-fit: cover"
                                            src="{{ url("public/$atraksi_wisata->foto") }}" alt="" /></div>
                                </div>

                                <div class="post-text">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#myModal">Open Modal</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Modal Header</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Some text in the modal.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr class="grey-bg">
                            </div>

                        </div>
            </div>
            @endif
            @endforeach

        </div>


        </div>
    </section>
    @push('script')
        <script>
            $(".slider2").owlCarousel({
                loop: false,
                autoplay: true,
                autoplayTimeout: 2000, //2000ms = 2s;
                autoplayHoverPause: true,

            });
        </script>
    @endpush




</x-web>
