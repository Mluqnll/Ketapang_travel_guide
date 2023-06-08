<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Support\Str;

class DesaWisata extends Model
{
    protected $table="desa_wisata";

    public function Galeri()
    {
        return $this->belongsTo(Galeri::class, 'id');
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }
    function handleUploadFoto1()
    {
        if (request()->hasFile('foto1')) {
            $foto1 = request()->file('foto1');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto1->extension();
            $url = $foto1->storeAs($destination, $filename);
            $this->foto1 = "app/" . $url;

        }
    }
    function handleUploadFoto2()
    {
        if (request()->hasFile('foto2')) {
            $foto2 = request()->file('foto2');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto2->extension();
            $url = $foto2->storeAs($destination, $filename);
            $this->foto2 = "app/" . $url;

        }
    }
    function handleUploadFoto3()
    {
        if (request()->hasFile('foto3')) {
            $foto3 = request()->file('foto3');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto3->extension();
            $url = $foto3->storeAs($destination, $filename);
            $this->foto3 = "app/" . $url;

        }
    }
}
