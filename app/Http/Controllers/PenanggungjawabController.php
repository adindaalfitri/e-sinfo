<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penanggungjawab;

class PenanggungjawabController extends Controller
{
    public function index(){
        $pj = Penanggungjawab::all();
        return view('admin.penanggungjawab.index', compact('pj'));
    }

    public function create(){
        return view('admin.penanggungjawab.create');
    }

    public function store(Request $request ){
        $request->validate([
            'acara' => 'required',
            'penanggungjawab' => 'required',
            'no_telp' => 'required',
        ]);

        Penanggungjawab::create([
            'acara' => $request->acara, // Store the file name, not the file object
            'penanggungjawab' => $request->penanggungjawab,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('pj.index')->with('success', 'Penanggung Jawab berhasil ditambah!');
    }

    public function edit(Request $request, $id){
        $pj = Penanggungjawab::find($id);
        // dd($pj);
        return view('admin.penanggungjawab.edit', compact('pj'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'acara' => 'required',
            'penanggungjawab' => 'required',
            'no_telp' => 'required',
        ]);

        $pj = Penanggungjawab::find($id);

        if (!$pj) {
            return redirect()->route('pj.index')->with('error', 'Data Penanggung Jawab tidak ditemukan');
        }

        // Update data siswa dengan input yang diberikan
        $pj->acara = $request->acara;
        $pj->penanggungjawab = $request->penanggungjawab;
        $pj->no_telp = $request->no_telp;

        // Simpan perubahan ke dalam database
        $pj->save();

        // Alihkan pengguna ke halaman indeks siswa dengan pesan sukses
        return redirect()->route('pj.index')->with('success', 'Data Penanggung Jawab berhasil diperbarui');
        }

    public function destroy($id){
        $pj = Penanggungjawab::find($id);
        $pj->delete();

        return redirect()->route('pj.index')->with('success', 'Data Penanggung Jawab berhasil dihapus');
    }
}
