<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
     public $fillable = [
        'judul', 'id_penulis', 'pembahasan', 'id_kategori', 'cover',
    ];
    public $visible = [
        'judul', 'id_penulis', 'pembahasan', 'id_kategori', 'cover',
    ];

    public function index()
    {
       $artikel = Artikel::latest()->get();

        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        $artikel = Artikel::all();
        $penulis = Penulis::all();
        $kategori = Kategori::all();
        return view('artikel.create', compact('artikel', 'penulis', 'kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:artikels',
            'id_penulis' => 'required',
            'pembahasan' => 'required',
            'id_kategori' => 'required',
            'cover' => 'required|max:2048|mimes:png,jpg',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->id_penulis = $request->id_penulis;
        $artikel->pembahasan = $request->pembahasan;
        $artikel->id_kategori = $request->id_kategori;

        // upload foto
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/artikel/', $name);
            $artikel->cover = $name;
        }

        $artikel->save();
        // lampirkan banyak genre di buku
        // $buku->genre()->attach($request->genre);
        return redirect()->route('artikel.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $penulis = Penulis::all();

        return view('artikel.edit', compact('artikel', 'kategori', 'penulis'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:artikels',
            'id_penulis' => 'required',
            'pembahasan' => 'required',
            'id_kategori' => 'required',
            // 'cover' => 'required|max:2048|mimes:png,jpg',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->id_penulis = $request->id_penulis;
        $artikel->pembahasan = $request->pembahasan;
        $artikel->id_kategori = $request->id_kategori;

        // upload foto
        if ($request->hasFile('cover')) {
            $artikel->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/artikel/', $name);
            $artikel->cover = $name;
        }

        $artikel->save();

        return redirect()->route('artikel.index')
            ->with('success', 'data berhasil diedit');

    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->deleteImage();
        $artikel->delete();

        return redirect()->route('artikel.index')
            ->with('success', 'data berhasil dihapus');
    }
}
