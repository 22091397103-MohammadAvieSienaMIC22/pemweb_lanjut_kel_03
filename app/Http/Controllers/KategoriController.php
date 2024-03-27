<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collects = kategori::get();
        return view('kategori.index', compact('collects'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create', [ "title" => "Add kategori" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idkategori' => 'required|integer',
            'kategori' => 'required|string',
            'keterangan' => 'required|string'
        ]);

        kategori::create([
            'kat_id' => $request->idkategori,
            'kat_nama' => $request->kategori,
            'kat_keterangan' => $request->keterangan,
        ]);

        // $this->users->create($request->all());

        // return redirect('user/create')->with('status','User Created');

        return redirect('kategoris/create')->with('status','Kategori Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $kat_id)
    {
        $editors = kategori::findOrFail($kat_id);
        // return $editor;
        return view('kategori.editan', compact('editors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $kat_id)
    {
        $request->validate([
            // 'idkategori' => 'required|integer',
            'kategori' => 'required|string',
            'keterangan' => 'required|string'
        ]);

        kategori::findOrFail($kat_id)->update([
            // 'user_id' => $request->id,
            'kat_nama' => $request->kategori,
            'kat_keterangan' => $request->keterangan,
        ]);

        // $this->users->create($request->all());

        // return redirect('user/create')->with('status','User Created');

        return redirect()->back()->with('status','Kategori Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $kat_id)
    {
        $destroyers = kategori::findOrFail($kat_id);
        $destroyers->delete();

        return redirect()->back()->with('status','Kategori deleted');
    }
}
