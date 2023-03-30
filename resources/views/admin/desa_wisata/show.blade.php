<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/desa-wisata" />
                    <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal"
                        data-target="#modaltambah">
                        <span class="fa fa-plus"></span> Tambah Galeri
                    </button>
                </div>
                @csrf
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle">
                                    <div class="dastyle">
                                        <img src="{{ url("public/$desa_wisata->foto") }}" alt="" height="310"
                                            class="rounded">

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 ml-auto align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">

                                    <li class="mt-2">
                                        <i class="las la-map-marker text-secondary font-22 align-middle mr-2"></i> <b>
                                            Nama Desa </b> : {{ $desa_wisata->nama_desa_wisata }}
                                    </li>
                                    <li class="mt-2">
                                        <i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b>
                                            Website </b> :
                                        <a href="{{ $desa_wisata->link_jadesta }}" target="_blank"
                                            class="font-14 text-primary">{{ $desa_wisata->link_jadesta }}</a>
                                    </li>

                                    <li class="mt-2" style="text-align: justify">
                                        <i class="las la-edit text-secondary font-22 align-middle mr-2"></i> <b>
                                            Deskripsi </b> :
                                        {{ $desa_wisata->deskripsi }}
                                    </li>
                                </ul>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row justify-content">
        @foreach ($list_galeri as $galeri)
            @if ($galeri->id_desa_wisata == $desa_wisata->id)
                <div class="col-md-6 col-lg-2">
                    <a href="{{ url("delete-galeri/$galeri->id") }}"
                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                        class="btn btn-danger"><span class="fa fa-times"></span> Hapus Galeri</a>
                    <div class="card report-card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <img src="{{ url("public/$galeri->foto") }}" class="rounded"
                                    style="object-fit: cover; position: static; width: 100%; height: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modaltambah"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Galeri Desa Wisata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('store-galeri') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <input type="text" name="id_desa_wisata" value="{{ $desa_wisata->id }}" hidden>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-left">Foto Galeri</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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
</x-app>
