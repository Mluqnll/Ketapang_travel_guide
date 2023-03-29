<x-web>

    @include('menu.menu')
    <!--== Hero Slider Start ==-->
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
    <!--== Hero Slider End ==-->

    <!--== Who We Are Start ==-->
    <section class="white-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 centerize-col text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title">
                        <hr class="center_line dark-bg">
                        <p>
                            ELECTRONIC KETAPANG TRAVEL GUIDE, e-KTG (beta 2.0), adalah portal resmi informasi pariwisata
                            dan desa wisata di Kabupaten Ketapang
                            yang terintegrasi dengan sistem JADESTA (Jaringan Desa Wisata) Kemenparekraf RI. ​Website
                            ini dikelola bersama oleh DPC MASATA Ketapang,
                            Prodi Teknologi Informasi Politeknik Negeri Ketapang, dan Pemerintah Daerah Kabupaten
                            Ketapang melalui Dinas Pariwisata dan Kebudayaan,
                            serta didukung penuh oleh Dinas Komunikasi dan Informatika.
                        </p>
                        <p>
                            Silahkan KLIK pada nama desa wisata yang tersedia untuk menemukan beragam informasi paket
                            wisata dan fasilitas pendukung lainnya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 centerize-col text-center">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <span class="font-100" font-weight:bold>DESA WISATA KABUPATEN KETAPANG</span>

                        </div>
                    </div>
                </div>
                <div class="row mt-50">
                    @foreach ($list_desa_wisata as $desa_wisata)
                        <div class="col-md-4 blog-list wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <div class="item"><img class="img-responsive"
                                            src="{{ url("public/$desa_wisata->foto") }}" alt="" /></div>
                                </div>

                                <div class="post-text">
                                    <h3><a
                                            href="{{ url("$desa_wisata->link_jadesta") }}">{{ $desa_wisata->nama_desa_wisata }}</a>
                                    </h3>
                                    <p>
                                        {{ url("$desa_wisata->deskripsi") }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="container">
                <div class="text-center">
                    <strong style="color: rgb(6, 0, 58)">{{ $list_desa_wisata->onEachSide(1)->links() }}</strong>
                </div>
            </div>
            <hr class="center_line grey-bg">
            <div class="container">
                <div class="text-center">
                    <strong>
                        Menampilkan
                        {{ $list_desa_wisata->firstItem() }}
                        Sampai
                        {{ $list_desa_wisata->lastItem() }}
                        Dari
                        {{ $list_desa_wisata->total() }}
                        Item
                    </strong>
                </div>
            </div>
    </section>

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
    <!--== Blogs End ==-->
</x-web>
