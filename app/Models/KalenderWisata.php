<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Support\Str;

class KalenderWisata extends Model
{
    protected $table="kalender_wisata";

    public function Bulan()
    {
        return $this->belongsTo(Bulan::class, 'id_bulan');
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Kalender-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
