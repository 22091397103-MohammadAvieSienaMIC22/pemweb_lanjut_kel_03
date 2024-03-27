<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collect = user::get();
        return view('user.index', compact('collect'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create', [ "title" => "Add User" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'email' => 'required|string|max:100',
            'password' => 'required|string|max:32',
            'username' => 'required|string|max:100',
            'alamat' => 'required|String',
            'telp' => 'required|String|max:25',
            'pos' =>'required|Integer|max:15',
            'user_role' =>'sometimes',
            'user_aktif' =>'sometimes'
        ]);

        user::create([
            'user_id' => $request->id,
            'user_email' => $request->email,
            'user_password' => $request->password,
            'user_nama' => $request->username,
            'user_alamat' => $request->alamat,
            'user_hp' => $request->telp,
            'user_pos' => $request->pos,
            'user_role' => $request->user_role == true ? 1:0,
            'user_aktif' => $request->user_aktif == true ? 1:0,
        ]);

        // $this->users->create($request->all());

        // return redirect('user/create')->with('status','User Created');

        return redirect('users/create')->with('status','User Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $user_id)
    {
        $editor = user::findOrFail($user_id);
        // return $editor;
        return view('user.editan', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $user_id)
    {
        $request->validate([
            // 'id' => 'required|integer',
            'email' => 'required|string|max:100',
            'password' => 'required|string|max:32',
            'username' => 'required|string|max:100',
            'alamat' => 'required|String',
            'telp' => 'required|String|max:25',
            'pos' =>'required|Integer|max:15',
            'user_role' =>'sometimes',
            'user_aktif' =>'sometimes'
        ]);

        user::findOrFail($user_id)->update([
            // 'user_id' => $request->id,
            'user_email' => $request->email,
            'user_password' => $request->password,
            'user_nama' => $request->username,
            'user_alamat' => $request->alamat,
            'user_hp' => $request->telp,
            'user_pos' => $request->pos,
            'user_role' => $request->user_role == true ? 1:0,
            'user_aktif' => $request->user_aktif == true ? 1:0,
        ]);

        // $this->users->create($request->all());

        // return redirect('user/create')->with('status','User Created');

        return redirect()->back()->with('status','User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $user_id)
    {
        $destroyer = user::findOrFail($user_id);
        $destroyer->delete();

        return redirect()->back()->with('status','User deleted');
    }
}
