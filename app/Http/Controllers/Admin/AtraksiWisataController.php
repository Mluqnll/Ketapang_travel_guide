<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\AtraksiWisata;

class AtraksiWisataController extends Controller
{
    public function index()
    {   
        $data['list_kategori'] = Kategori::all();
        return view('admin.atraksi_wisata.index', $data);
    }

    
    public function create()
    {
        $data["list_kategori"] = Kategori::all();
        return view('admin.atraksi_wisata.create', $data);
    }

    public function store(Request $request)
    {
        $atraksi_wisata =New AtraksiWisata;
        $atraksi_wisata->id_kategori = request('id_kategori');
        $atraksi_wisata->nama = request('nama');
        $atraksi_wisata->alamat = request('alamat');
        $atraksi_wisata->destinasi = request('destinasi');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->nama_pengelola = request('nama_pengelola');
        $atraksi_wisata->no_pengelola = request('no_pengelola');
        $atraksi_wisata->hari_buka = request('hari_buka');
        $atraksi_wisata->jam_buka = request('jam_buka');
        $atraksi_wisata->jam_tutup = request('jam_tutup');
        $atraksi_wisata->lat = request('lat');
        $atraksi_wisata->lng = request('lng');
        $atraksi_wisata->sumber_foto = request('sumber_foto');
        $atraksi_wisata->handleUploadPoto();
        $atraksi_wisata->save();

        return redirect('admin/atraksi-wisata')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($kategori)
    {
        $data['kategori'] = Kategori::find($kategori);
        $data['list_atraksi_wisata'] = AtraksiWisata::all();

        return view('admin.atraksi_wisata.show', $data);
    }

    public function edit($atraksi_wisata)
    {
        $data["list_kategori"] = Kategori::all();
        $data['atraksi_wisata'] = AtraksiWisata::find($atraksi_wisata);

        return view('admin.atraksi_wisata.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $atraksi_wisata->id_kategori = request('id_kategori');
        $atraksi_wisata->nama = request('nama');
        $atraksi_wisata->alamat = request('alamat');
        $atraksi_wisata->destinasi = request('destinasi');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->nama_pengelola = request('nama_pengelola');
        $atraksi_wisata->no_pengelola = request('no_pengelola');
        $atraksi_wisata->hari_buka = request('hari_buka');
        $atraksi_wisata->jam_buka = request('jam_buka');
        $atraksi_wisata->jam_tutup = request('jam_tutup');
        $atraksi_wisata->lat = request('lat');
        $atraksi_wisata->lng = request('lng');
        $atraksi_wisata->sumber_foto = request('sumber_foto');
        $atraksi_wisata->handleUploadPoto();
        $atraksi_wisata->save();

        return redirect('admin/atraksi-wisata')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function destroy(string $id)
    {
        //
    }
}
