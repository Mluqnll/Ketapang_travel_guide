<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-layout.button.back-button url="admin/desa-wisata" />
                    <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal"
                        data-target="#modaltambah">
                        <span class="fa fa-plus"></span> Tambah Foto
                    </button>
                </div>
                @csrf
                <div class="card-body">
                    <div class="dastyle-profile">
                        <div class="row">
                            <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                                <div class="dastyle">
                                    <div class="dastyle">
                                        <img src="{{ url("public/$desa_wisata->foto") }}" alt="" height="300",
                                            class="rounded">

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 ml-auto align-self-center">
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
        <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modaltambah"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Desa Wisata</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('admin/desa-wisata', $desa_wisata->id) }}/update-foto" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-left">Foto1</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="foto1"
                                        accept=".jpg, .png, .jpeg">
                                </div>
                                <label class="col-sm-4 col-form-label text-left">Foto2</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="foto2"
                                        accept=".jpg, .png, .jpeg">
                                </div>
                                <label class="col-sm-4 col-form-label text-left">Foto3</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="foto3"
                                        accept=".jpg, .png, .jpeg">
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
    </div>
</x-app>
