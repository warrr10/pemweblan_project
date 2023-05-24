@extends('layout/v_template')
@section('title', 'Detail Penumpang')
@section('content')
    
<table class="table">
    <tr>
        <th width="100px">No. KTP</th>
        <th width="30px">:</th>
        <th>{{ $penumpang->no_ktp }}</th>
    </tr>
    <tr>
        <th width="100px">Nama</th>
        <th width="30px">:</th>
        <th>{{ $penumpang->nama }}</th>
    </tr>
    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th>{{ $penumpang->alamat }}</th>
    </tr>
    <tr>
        <th width="100px">No. HP</th>
        <th width="30px">:</th>
        <th>{{ $penumpang->no_telp }}</th>
    </tr>
    <tr>
        <th width="100px">Gender</th>
        <th width="30px">:</th>
        <th>{{ $penumpang->gender }}</th>
    </tr>
    <tr>
        <th width="100px">Umur</th>
        <th width="30px">:</th>
        <th>{{ $penumpang->umur }}</th>
    </tr>
    <tr>
        <th><a href="/penumpang" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
    {{-- <tr>
        <th width="100px">Foto</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_penumpang/'.$penumpang->foto_penumpang) }}" width="400px"></th>
    </tr> --}}
</table>






@endsection