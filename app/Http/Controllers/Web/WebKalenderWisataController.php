<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebKalenderWisataController extends Controller
{
    public function index()
    {
        return view('web.kalender_wisata');
    }
}
