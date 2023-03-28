<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Kategori;
use Illuminate\Support\Str;

class AtraksiWisata extends Model
{
    protected $table="atraksi_wisata";

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    function handleUploadPoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Atraksi-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            
        }
    }


}
