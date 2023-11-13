<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Pengumuman::get();
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:png,jpg,jpeg',
            'tanggal' => 'required|date',
            'topik' => 'required|string',
            'informasi' => 'required|string',
            'kelas' => 'required|string',
        ]);

        // Handle file upload
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $namafile = time() . '-' . $file->getClientOriginalName();
            $image = $request->file('foto')->storeAs('public/pengumuman', $namafile);
        }

        Pengumuman::create([
            'foto' => $namafile, // Store the file name, not the file object
            'tanggal' => $request->tanggal,
            'topik' => $request->topik,
            'informasi' => $request->informasi,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Pengumuman::find($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi input

    // dd($request->kelas);

    $this->validate($request, [
        'foto' => 'nullable|mimes:png,jpg,jpeg',
        'tanggal' => 'required|date',
        'topik' => 'required|string',
        'informasi' => 'required|string',
        'kelas' => 'required|string',
    ]);

    // Cari data siswa berdasarkan ID
    $siswa = Pengumuman::find($id);

    // Jika data tidak ditemukan, alihkan pengguna dengan pesan error
    if (!$siswa) {
        return redirect()->route('pengumuman.index')->with('error', 'Data Pengumuman tidak ditemukan');
    }

    // Update data siswa dengan input yang diberikan
    $siswa->tanggal = $request->tanggal;
    $siswa->topik = $request->topik;
    $siswa->informasi = $request->informasi;
    $siswa->kelas = $request->kelas;
    // dd($siswa);

    // Cek apakah ada berkas foto yang diunggah
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($siswa->foto) {
            $fotoPath = 'storage/' . $siswa->foto;
            if (file_exists(public_path($fotoPath))) {
                unlink(public_path($fotoPath));
            }
        }

        // Unggah dan simpan foto yang baru
        $file = $request->file('foto');
        $namafile = time() . '-' . $file->getClientOriginalName();
        $image = $request->file('foto')->storeAs('public/pengumuman', $namafile);
        $siswa->foto = $namafile;
    }

    // Simpan perubahan ke dalam database
    $siswa->save();

    // Alihkan pengguna ke halaman indeks siswa dengan pesan sukses
    return redirect()->route('pengumuman.index')->with('success', 'Data Pengumuman berhasil diperbarui');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pengumuman::find($id);
        if(!$data){
            return redirect()->route('pengumuman.index');
        }

        $fotopath = 'storage/'. $data->foto;
        if(file_exists($fotopath)){
            unlink($fotopath);
        }

        $data->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Data Pengumuman berhasil dihapus');
    }
}
