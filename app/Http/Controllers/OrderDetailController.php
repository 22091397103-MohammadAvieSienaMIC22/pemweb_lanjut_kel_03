<?php

namespace App\Http\Controllers;

use App\Models\order_detail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ambil = order_detail::get();
        return view('detail.index', compact('ambil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detail.create', [ "title" => "Add Order Detail" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'detail_id_order' => 'required|integer',
            'detail_id_produk' => 'required|integer',
            'detail_harga' => 'required|integer',
            'detail_jml' => 'required|integer'
        ]);

        order_detail::create([
            'detail_id_order' => $request->detail_id_order,
            'detail_id_produk' => $request->detail_id_produk,
            'detail_harga' => $request->detail_harga,
            'detail_jml' => $request->detail_jml,
        ]);

        return redirect('details/create')->with('status','detail Created');
    }


}
