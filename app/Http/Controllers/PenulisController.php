<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public $fillable = [
        'nama_penulis','jk','ttl'
    ];
    public $visible = [
        'nama_penulis','jk','ttl'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penulis = Penulis::latest()->get();
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::all();
        return view('penulis.create', compact('penulis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penulis' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
        ]);
        $penulis = new Penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->jk = $request->jk;
        $penulis->ttl = $request->ttl;

        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'penulis created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_penulis' => 'required',
            'jk' => 'required',
            'ttl' => 'required',

        ]);
        $penulis = Penulis::findOrFail($id);
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->jk = $request->jk;
        $penulis->ttl = $request->ttl;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'penulis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')
            ->with('success', 'penulis deleted successfully');
    }
}
