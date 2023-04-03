<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AtraksiWisataResource;
use App\Models\AtraksiWisata;
use Illuminate\Http\Request;

class AtraksiwisataApiController extends Controller
{
    function getAllData(){

        $data_atraksiwisata = AtraksiWisata::all();
        return AtraksiWisataResource::collection($data_atraksiwisata);
    }
}
