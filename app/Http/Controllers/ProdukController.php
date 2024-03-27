<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apply = produk::get();
        return view('produk.index', compact('apply'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create', [ "title" => "Add Produk" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|integer',
            'produk_id_kat' => 'required|integer',
            'produk_id_user' => 'required|integer',
            'produk_code' => 'required|string|max:50',
            'produk_nama' => 'required|string|max:255',
            'produk_hrg' => 'required|numeric',
            'produk_keterangan' => 'required|string',
            'produk_stock' => 'required|integer',
            'produk_photo' =>'required|string|max:100'
        ]);

        produk::create([
            'produk_id' => $request->produk_id,
            'produk_id_kat' => $request->produk_id_kat,
            'produk_id_user' => $request->produk_id_user,
            'produk_code' => $request->produk_code,
            'produk_nama' => $request->produk_nama,
            'produk_hrg' => $request->produk_hrg,
            'order_ongkir' => $request->ongkir,
            'produk_keterangan' => $request->produk_keterangan,
            'produk_stock' => $request->produk_stock,
            'produk_photo' => $request->produk_photo,
        ]);


        return redirect('produks/create')->with('status','Product ADD');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $produk_id)
    {
        $ubah = produk::findOrFail($produk_id);
        // return $editor;
        return view('produk.editan', compact('ubah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $produk_id)
    {
        $request->validate([
            'produk_code' => 'required|string|max:50',
            'produk_nama' => 'required|string|max:255',
            'produk_hrg' => 'required|numeric',
            'produk_keterangan' => 'required|string',
            'produk_stock' => 'required|integer',
            'produk_photo' =>'required|string|max:100'
        ]);

        produk::findOrFail($produk_id)->update([
            'produk_code' => $request->produk_code,
            'produk_nama' => $request->produk_nama,
            'produk_hrg' => $request->produk_hrg,
            'order_ongkir' => $request->ongkir,
            'produk_keterangan' => $request->produk_keterangan,
            'produk_stock' => $request->produk_stock,
            'produk_photo' => $request->produk_photo,
        ]);


        return redirect()->back()->with('status','Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $produk_id)
    {
        $hapus = produk::findOrFail($produk_id);
        $hapus->delete();

        return redirect()->back()->with('status','Product deleted');
    }
}
