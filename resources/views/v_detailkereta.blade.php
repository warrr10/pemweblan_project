@extends('layout/v_template')
@section('title', 'Detail Kereta')
@section('content')
    
<table class="table">
    <tr>
        <th width="100px">No. KA</th>
        <th width="30px">:</th>
        <th>{{ $kereta->no_ka }}</th>
    </tr>
    <tr>
        <th width="100px">Jadwal Keberangkatan</th>
        <th width="30px">:</th>
        <th>{{ $kereta->jadwal_berangkat }}</th>
    </tr>
    <tr>
        <th width="100px">Stasiun Asal</th>
        <th width="30px">:</th>
        <th>{{ $kereta->keberangkatan }}</th>
    </tr>
    <tr>
        <th width="100px">Stasiun Tujuan</th>
        <th width="30px">:</th>
        <th>{{ $kereta->tujuan }}</th>
    </tr>
    <tr>
        <th width="100px">Harga</th>
        <th width="30px">:</th>
        <th>{{ $kereta->harga }}</th>
    </tr>
    <tr>
        <th><a href="/kereta" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
    {{-- <tr>
        <th width="100px">Foto</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_kereta/'.$kereta->foto_kereta) }}" width="400px"></th>
    </tr> --}}
</table>






@endsection