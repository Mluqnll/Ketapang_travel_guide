<x-web>

    @include('menu.menu')
    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home" style="background-image: url(public/assets/images/1.jpg);">
        <div class="hero-text-wrap xxl-screen">
          <div class="hero-text">
            <div class="text-content-slider slick">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 centerize-col">
                    <div class="all-padding-50 text-center">
                        <img src="{{ url('public') }}/assets/images/logo-putih.png"
                        alt="" style="width:100%; height:auto; object-fit: cover; ">
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
                <strong style="font-size: 20px; font-weight:bold; color:grey">{{$kategori->nama}} Di Kabupaten Ketapang
                    </strong>
                <hr class="center_line grey-bg">
            </div>


            <div class="row mt-50">
                @foreach ($list_atraksi_wisata as $atraksi_wisata)
                @if ($atraksi_wisata->id_kategori == $kategori->id)

                <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="post-wrap">
                        <div class="post-img">
                            <div class="item"><img class="img-responsive" style="width:100% ; height:300px; object-fit: cover" src="{{ url("public/$atraksi_wisata->foto") }}" alt="" /></div>
                        </div>

                        <div class="post-text">
                            <p><a style="text-align: center" href="{{ url($atraksi_wisata->id) }}">{{ $atraksi_wisata->nama }}  </a>
                            </p>
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

    <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modaltambah"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/kategori') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Kategori">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times"></span>
                            Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-web>
