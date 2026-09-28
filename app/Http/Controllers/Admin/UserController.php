<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // MENAMPILKAN DATA USER
    public function index()
    {
        $users = DB::table('tb_user')
            ->orderBy('id_user', 'desc')
            ->get();

        return view('admin.user.index', compact('users'));
    }


    // FORM TAMBAH USER
    public function create()
    {
        return view('admin.user.create');
    }


    // SIMPAN USER
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:50',
            'username' => 'required|max:50|unique:tb_user,username',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,petugas,owner',
            'status_aktif' => 'required',
        ]);

        DB::table('tb_user')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status_aktif' => $request->status_aktif,
        ]);

        return redirect()
            ->route('admin.user')
            ->with('success', 'User berhasil ditambahkan!');
    }


    // FORM EDIT USER
    public function edit($id)
    {
        $user = DB::table('tb_user')
            ->where('id_user', $id)
            ->first();

        return view('admin.user.edit', compact('user'));
    }


    // UPDATE USER
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:50',
            'username' => 'required|max:50|unique:tb_user,username,' . $id . ',id_user',
            'role' => 'required|in:admin,petugas,owner',
            'status_aktif' => 'required',
        ]);

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'role' => $request->role,
            'status_aktif' => $request->status_aktif,
        ];

        // Kalau password diisi, password ikut diubah
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        DB::table('tb_user')
            ->where('id_user', $id)
            ->update($data);

        return redirect()
            ->route('admin.user')
            ->with('success', 'User berhasil diperbarui!');
    }


    // HAPUS USER
    public function destroy($id)
    {
        DB::table('tb_user')
            ->where('id_user', $id)
            ->delete();

        return redirect()
            ->route('admin.user')
            ->with('success', 'User berhasil dihapus!');
    }
}