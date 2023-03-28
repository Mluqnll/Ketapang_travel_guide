<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Kategori;

class WebDesaWisataController extends Controller
{

    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('web.desa_wisata', $data);
    }

}
