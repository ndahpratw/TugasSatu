<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(Request $request) {
        $data = Mahasiswa::all();
        $jumlah_data = Mahasiswa::all()->count();
        return view('view', compact('data', 'jumlah_data'));
    }

    public function data_baru(Request $request) {

        // cara 1
        // $tambah = DB::table('mahasiswas')
        // ->insert([
        //     'nim' => $request->nim,
        //     'nama' => $request->nama,
        //     'prodi' => $request->prodi,
        //     'fakultas' => $request->fakultas,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        // ]);

        // cara 2 
        $tambah = Mahasiswa::create($request->all());

        if ($tambah) {
            return redirect('/')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return back()->with('error', 'Gagal menambahkan datadata');
        }
    }

}
