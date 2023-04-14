<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\KategoriFasilitas;

class Fasilitas extends Model
{
    protected $table="fasilitas";

    public function KategoriFasilitas()
    {
        return $this->belongsTo(KategoriFasilitas::class, 'id_kategori_fasilitas');
    }

    function handleUploadPoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Fasilitas";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            
        }
    }

}
