<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

   

    public function kategori()
    {
        return $this->hasMany(Kategori::class, 'id_kategori');
    }
    public function penulis()
    {
        return $this->hasMany(Penulis::class, 'id_penulis');
    }
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/artikel/' . $this->cover))) {
            return unlink(public_path('images/artikel/' . $this->cover));
        }
    }
}
