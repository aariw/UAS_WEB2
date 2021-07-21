<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Matkul;
use App\User;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa', 'matkul'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        return view('nilai.create', compact('mahasiswa', 'matkul'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Success','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'user', 'mahasiswa', 'matkul'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yuuhuu Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yuuhuu Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
    }
}
