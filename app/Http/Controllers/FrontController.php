<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Penulis;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function artikel()
    {
        $artikel= Artikel::latest()->get();
        $kategori= Kategori::all();
        $penulis= Penulis::all();

        return view('welcome', compact('kategori','penulis','artikel'));
    }
}
