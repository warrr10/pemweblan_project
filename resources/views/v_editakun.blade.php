@extends('layout/v_template')
@section('title', 'Edit Akun')

@section('content')

<form action="/akun/update/{{ $akun->id_pengguna }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Role</label>
                    <input name="role" class="form-control" value="{{ $akun->role }}" readonly>
                    <div class="text-danger">
                        @error('role')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" value="{{ $akun->username }}">
                    <div class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input name="password" class="form-control" value="{{ $akun->password }}">
                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" value="{{ $akun->email }}">
                    <div class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- <div class="col-sm 12">
                    <div class="col-sm-4">
                        <img src="{{ url('foto_akun/'.$akun->foto_akun) }}" width="150px">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                    <label>Ganti Foto Akun</label>
                    <input type="file" name="foto_akun" class="form-control" value="{{ $akun->foto_akun }}">
                    <div class="text-danger">
                        @error('foto_akun')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                    </div>
                </div>
                <br> --}}
                
                <div class="col-sm 12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            
        </div>
    </div>

</form>

@endsection