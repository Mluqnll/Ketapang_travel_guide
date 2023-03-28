<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PengelolaController extends Controller
{
   
    public function index()
    {
        $data['list_user'] = User::all();
        $data['user'] = auth()->user();

        return view('admin.pengelola.index', $data);
    }

   
    public function create()
    {
        $data['user'] = auth()->user();

        return view('admin.pengelola.create', $data);
    }

   
    public function store(Request $request)
    {
        $pengelola = New User;
        $pengelola->nama = request('nama');
        $pengelola->username = request('username');
        $pengelola->password = request('confir_password');
        $pengelola->confir_password = request('confir_password');
        $pengelola->handleUploadPoto();
        $pengelola->save();

        return redirect('admin/pengelola')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(User $pengelola)
    {
        $data['pengelola'] = $pengelola;
        $data['user'] = auth()->user();

        return view('admin.pengelola.show', $data);
    }

   
    public function edit(User $pengelola)
    {
        $data['pengelola'] = $pengelola;
        $data['user'] = auth()->user();

        return view('admin.pengelola.edit', $data);
    }

   
    public function update(User $pengelola)
    {
        $pengelola->nama = request('nama');
        $pengelola->username = request('username');
        $pengelola->password = request('confir_password');
        $pengelola->confir_password = request('confir_password');
        $pengelola->save();
        $pengelola->handleUploadPoto();

        return redirect('admin/pengelola')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function destroy($user)
    {
        User::destroy($user);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
