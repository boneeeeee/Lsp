<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Nilai;

class SiswaController extends Controller
{

    public function index()
    {
        return view('siswa.index', [
            'siswa' => Siswa::all()
        ]);
    }

    public function create()
    {
        return view('siswa.create',[
            'kelas' => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {   
        $data_siswa = $request->validate([
            'nis' => 'required|numeric',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'password' => 'required'
        ]);
        Siswa::create($data_siswa);
        return redirect('/siswa/index')->with('success', "Data berhasil ditambahkan!");
    }

    public function show(Siswa $siswa)
    {
        //
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', [
            'siswa' => $siswa,
            'kelas' => Kelas::all()
        ]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        $data_siswa = $request->validate([
            'nis' => 'required|numeric',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'password' => 'required'
        ]);
        $siswa->update($data_siswa);
        return redirect('/siswa/index')->with('success', "Data berhasil Diupdate!");
    }

    public function destroy(Siswa $siswa)
    {
        $nilai = Nilai::where('siswa_id', $siswa->id)->first();

        if ($nilai) {
            return back()->with('error', "$siswa->nis masih digunakan di menu siswa");
        }

        $siswa->delete();
        return redirect('/siswa/index')->with('success', "Data berhasil dihapus!"); 
    }
}
