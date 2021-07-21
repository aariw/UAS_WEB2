@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected>--Pilih User--</option>
                                        @foreach ($mahasiswa as $m)
                                            <option value="{{ $m->id }}">{{ $m->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                    <label for="">Nama Matkul</label>
                                    <select name="matkul_id" id="matkul_id" class="form-control">
                                        <option value="" disabled selected>--Pilih User--</option>
                                        @foreach ($matkul as $cost)
                                            <option value="{{ $cost->id }}">{{ $cost->nama_matkul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai ">
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
