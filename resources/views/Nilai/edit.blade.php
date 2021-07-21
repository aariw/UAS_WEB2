@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="POST">
                        @csrf
                         
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected>--Pilih User--</option>
                                        @foreach ($mahasiswa as $m)
                                            <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }} >{{ $m->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" maxlength="8" value="{{ is_null
                                    ($nilai) ? '' : $nilai->mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="">Nama Matkul</label>
                                    <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan Nama Matkul" maxlength="8" value="{{ is_null
                                    ($nilai) ? '' : $nilai->matkul->nama_matkul }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS "  value="{{ is_null
                                    ($nilai) ? '' : $nilai->matkul->sks}}">
                                </div>
                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai"  value="{{ is_null
                                    ($nilai) ? '' : $nilai->nilai }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                   <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                   <a href="{{ route('nilai') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                                    
                                
                                   </div>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
