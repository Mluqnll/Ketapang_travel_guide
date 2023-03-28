<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class WebKalenderWisataController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('web.kalender_wisata', $data);
    }
}
