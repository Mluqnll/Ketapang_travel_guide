<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                @csrf
                <div class="card-header">
                    <x-layout.button.back-button url="admin/atraksi-wisata" />
                    <h3 class="text-center">Data Atraksi Wisata dengan Kategori {{ $kategori->nama }}</h3>

                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Wisata</th>
                                <th class="text-center">Nama Pengelola</th>
                                <th class="text-center">Hari Buka/ Jam Operasi</th>
                                <th class="text-center">Destinasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_atraksi_wisata as $atraksi_wisata)
                            @if ($atraksi_wisata->id_kategori == $kategori->id)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("admin/atraksi-wisata/show-atraksi-wisata/$atraksi_wisata->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                            <x-layout.button.edit-button url="admin/atraksi-wisata"
                                                id="{{ $atraksi_wisata->id }}" />
                                            <x-layout.button.delete-button url="admin/atraksi-wisata"
                                                id="{{ $atraksi_wisata->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $atraksi_wisata->nama }}</td>
                                    <td class="text-center">{{ $atraksi_wisata->nama_pengelola }}</td>
                                    <td class="text-center">{{ $atraksi_wisata->hari_buka }} / {{ $atraksi_wisata->jam_buka }} - {{ $atraksi_wisata->jam_tutup }}</td>
                                    <td class="text-center">{{ $atraksi_wisata->destinasi }}</td>

                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
