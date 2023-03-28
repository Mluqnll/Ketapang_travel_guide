<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
class WebPetaWisataController extends Controller
{

    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('web.peta_wisata', $data);
    }


}
