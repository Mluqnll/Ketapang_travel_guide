<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\KategoriFasilitas;
use App\Models\KontakWisata;
use Illuminate\Http\Request;
use App\Models\Kategori;

class WebKontakWisataController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['detail'] = Detail::all();
        $data['list_kontak_wisata'] = KontakWisata::all();
        return view('web.kontak_wisata', $data);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
