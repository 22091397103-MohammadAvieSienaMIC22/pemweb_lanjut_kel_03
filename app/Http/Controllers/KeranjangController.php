<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wadah = keranjang::get();
        return view('keranjang.index', compact('wadah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keranjang.create', [ "title" => "Add Keranjang" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ker_id' => 'required|integer',
            'ker_id_user' => 'required|integer',
            'ker_id_produk' => 'required|integer',
            'ker_harga' => 'required|numeric',
            'ker_jml' => 'required|integer'
        ]);

        keranjang::create([
            'ker_id' => $request->ker_id,
            'ker_id_user' => $request->ker_id_user,
            'ker_id_produk' => $request->ker_id_produk,
            'ker_harga' => $request->ker_harga,
            'ker_jml' => $request->ker_jml,

        ]);

        return redirect('keranjangs/create')->with('status','Keranjang Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $ker_id)
    {
        $ganti = keranjang::findOrFail($ker_id);
        // return $editor;
        return view('user.editan', compact('ganti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $ker_id)
    {
        $request->validate([
            'ker_harga' => 'required|numeric',
            'ker_jml' => 'required|integer'
        ]);

        keranjang::findOrFail($ker_id)->update([
            'ker_harga' => $request->ker_harga,
            'ker_jml' => $request->ker_jml,
        ]);

        return redirect()->back()->with('status','Keranjang Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $ker_id)
    {
        $hilang = keranjang::findOrFail($ker_id);
        $hilang->delete();

        return redirect()->back()->with('status','Keranjang deleted');
    }
}
