@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                    <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-success btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    

                   <div class="table-responsive">
                       <table class="table table-bordered">
                           <tr>
                               <th>NO</th>
                               <th>NPM</th>
                               <th>NAMA LENGKAP</th>
                               <th>TEMPAT, TANGGAL LAHIR</th>
                               <th>JENIS KELAMIN</th>
                               <th>ALAMAT</th>
                               <th>TELEPON</th>
                               <th>AKSI</th>
                           </tr>
                           @php
                                $no = 1;
                            @endphp
                           @foreach ($mahasiswa as $m)
                           <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $m->npm }}</td>
                                <td>{{ $m->user->name }}</td>
                                <td>{{ $m->tempat_lahir.' '.$m->tgl_lahir }}</td>
                                <td>{{ $m->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>{{ $m->alamat }}</td>
                                <td>{{ $m->telepon }}</td>
                                <td>
                                    <a href="{{ route('edit.mahasiswa', $m->id) }}" class="btn btn-xs btn-primary">EDIT</a>
                                    <a href="{{ route('hapus.mahasiswa', $m->id) }}" class="btn btn-xs btn-primary">HAPUS</a>
                                </td>
                           </tr>
                           @endforeach
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
