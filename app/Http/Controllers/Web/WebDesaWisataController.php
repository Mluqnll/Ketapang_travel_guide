<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;


class WebDesaWisataController extends Controller
{

    public function index()
    {
        return view('web.desa_wisata');
    }

}
