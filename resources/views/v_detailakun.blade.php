@extends('layout/v_template')
@section('title', 'Detail Akun')
@section('content')
    
<table class="table">
    <tr>
        <th width="100px">Role</th>
        <th width="30px">:</th>
        <th>{{ $akun->role }}</th>
    </tr>
    <tr>
        <th width="100px">Username</th>
        <th width="30px">:</th>
        <th>{{ $akun->username }}</th>
    </tr>
    <tr>
        <th width="100px">Password</th>
        <th width="30px">:</th>
        <th>{{ $akun->password }}</th>
    </tr>
    <tr>
        <th width="100px">Email</th>
        <th width="30px">:</th>
        <th>{{ $akun->email }}</th>
    </tr>
    <tr>
        <th><a href="/akun" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
    {{-- <tr>
        <th width="100px">Foto</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_akun/'.$akun->foto_akun) }}" width="400px"></th>
    </tr> --}}
</table>






@endsection