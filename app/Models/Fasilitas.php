<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\KategoriFasilitas;

class Fasilitas extends Model
{
    protected $table = "fasilitas";

    public function KategoriFasilitas()
    {
        return $this->belongsTo(KategoriFasilitas::class, 'id_kategori_fasilitas');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Fasilitas";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

}
