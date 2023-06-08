<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KalenderwisataResource;
use App\Models\KalenderWisata;
use Illuminate\Http\Request;

class KalenderwisataApiController extends Controller
{
    function Januari()
    {
        $id_bulan = "98cce9d1-7d7b-4f74-b032-17f4f422051c";
        $data_kalenderwisata = KalenderWisata::where('id_bulan', $id_bulan)->get();
        return KalenderwisataResource::collection($data_kalenderwisata);
    }
}
