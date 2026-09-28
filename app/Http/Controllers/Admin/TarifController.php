<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarifController extends Controller
{
    // MENAMPILKAN DATA TARIF
    public function index()
    {
        $tarifs = DB::table('tb_tarif')
            ->orderBy('id_tarif', 'desc')
            ->get();

        return view('admin.tarif.index', compact('tarifs'));
    }

    // FORM TAMBAH TARIF
    public function create()
    {
        return view('admin.tarif.create');
    }

    // SIMPAN TARIF
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kendaraan' => 'required|in:motor,mobil,lainnya',
            'tarif_per_jam' => 'required|numeric|min:0',
        ]);

        DB::table('tb_tarif')->insert([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'tarif_per_jam' => $request->tarif_per_jam,
        ]);

        return redirect()
            ->route('admin.tarif')
            ->with('success', 'Tarif berhasil ditambahkan!');
    }
}