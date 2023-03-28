<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\DesaWisata;
use Illuminate\Support\Str;

class Galeri extends Model
{
    protected $table="galeri";

    public function DesaWisata()
    {
        return $this->belongsTo(DesaWisata::class, 'id_desa_wisata');
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Galeri";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
