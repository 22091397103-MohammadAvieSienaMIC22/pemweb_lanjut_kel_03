<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collectss = order::get();
        return view('order.index', compact('collectss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create', [ "title" => "Add Order" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'order_id_user' => 'required|integer',
            'order_tgl' => 'required|date',
            'code' => 'required|string|max:50',
            'ttl' => 'required|numeric',
            'kurrier' => 'required|string',
            'ongkir' => 'required|integer',
            'deadline' => 'required|date',
            'order_batal' =>'sometimes'
        ]);

        order::create([
            'order_id' => $request->id,
            'order_id_user' => $request->id,
            'order_code' => $request->code,
            'order_tgl' => $request->order_tgl,
            'order_ttl' => $request->ttl,
            'order_kurir' => $request->kurrier,
            'order_ongkir' => $request->ongkir,
            'order_byr_deadline' => $request->deadline,
            'order_batal' => $request->order_batal == true ? 1:0,
        ]);


        return redirect('orders/create')->with('status','Order Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $order_id)
    {
        $editorss = order::findOrFail($order_id);
        // return $editor;
        return view('order.editan', compact('editorss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $order_id)
    {
        $request->validate([
            'code' => 'required|string|max:50',
            'ttl' => 'required|numeric',
            'kurrier' => 'required|string',
            'ongkir' => 'required|integer',
            'deadline' => 'required|integer',
            'order_batal' =>'sometimes'
        ]);

        order::findOrFail($order_id)->update([
            'order_code' => $request->code,
            'order_ttl' => $request->ttl,
            'order_kurir' => $request->kurrier,
            'order_ongkir' => $request->ongkir,
            'order_byr_deadline' => $request->deadline,
            'order_batal' => $request->order_batal == true ? 1:0,
        ]);


        return redirect()->back()->with('status','Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $order_id)
    {
        $destroyerss = order::findOrFail($order_id);
        $destroyerss->delete();

        return redirect()->back()->with('status','Order deleted');
    }
}
